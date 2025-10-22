 <?php
    require_once "../config.php";
    $register_message = "";
    if (isset($_POST['register'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        try {

            if (empty($username) || empty($password) || empty($konfirmasi) || empty($nama) || empty($email)) {
                $register_message = "Semua kolom harus diisi.";
            } else if ($password !== $konfirmasi) {
                $register_message = "Password tidak cocok.";
            } else {

                $cari = $koneksi->prepare("SELECT username FROM user WHERE username = ?");
                $cari->bind_param("s", $username);
                $cari->execute();
                $result = $cari->get_result();
                if ($result->num_rows > 0) {
                    $register_message = "username sudah digunakan";
                } else if ($result->num_rows == 0) {
                    $cari = $koneksi->prepare("SELECT email FROM user WHERE email = ?");
                    $cari->bind_param("s", $email);
                    $cari->execute();
                    $result = $cari->get_result();
                    if ($result->num_rows > 0) {
                        $register_message = "email telah digunakan";
                    } else {
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        $insert = $koneksi->prepare("INSERT INTO user (nama, username, email, password) VALUES (?, ?, ?, ?)");
                        $insert->bind_param("ssss", $nama, $username, $email, $hashedPassword);

                        if ($insert->execute()) {
                            header("Location: ../index.php");
                        } else {
                            $register_message = "Gagal menyimpan data.";
                        }
                    }
                }
            }
        } catch (mysqli_sql_exception) {
            $register_message = "Gagal menyimpan data: ";
        }
        $koneksi->close();
    }
    ?>

 <div class="w-full md:w-1/2 flex justify-center items-center p-10">
     <div class="register-card w-full max-w-sm rounded-3xl p-8">
         <h2 class="text-2xl font-bold text-gray-800 mb-2">Create Account</h2>
         <p class="text-sm text-gray-600 mb-6">Sign up to get started</p>
         <p class="text-sm text-gray-600 mb-6"><?php echo "$register_message" ?></p>
         <form action="" method="POST">
             <div class="mb-4">
                 <input type="text" placeholder="Full Name" name="nama"
                     class="w-full px-4 py-3 rounded-xl bg-white/60 text-gray-800 placeholder-gray-500 border border-transparent focus:outline-none focus:ring-2 focus:ring-cyan-400">
             </div>
             <div class="mb-4">
                 <input type="email" placeholder="Email" name="email"
                     class="w-full px-4 py-3 rounded-xl bg-white/60 text-gray-800 placeholder-gray-500 border border-transparent focus:outline-none focus:ring-2 focus:ring-cyan-400">
             </div>
             <div class="mb-4">
                 <input type="text" placeholder="Username" name="username"
                     class="w-full px-4 py-3 rounded-xl bg-white/60 text-gray-800 placeholder-gray-500 border border-transparent focus:outline-none focus:ring-2 focus:ring-cyan-400">
             </div>
             <div class="mb-4">
                 <input type="password" placeholder="Password" name="password"
                     class="w-full px-4 py-3 rounded-xl bg-white/60 text-gray-800 placeholder-gray-500 border border-transparent focus:outline-none focus:ring-2 focus:ring-cyan-400">
             </div>
             <div class="mb-6">
                 <input type="password" placeholder="Confirm Password" name="konfirmasi"
                     class="w-full px-4 py-3 rounded-xl bg-white/60 text-gray-800 placeholder-gray-500 border border-transparent focus:outline-none focus:ring-2 focus:ring-cyan-400">
             </div>

             <button type="submit" name="register"
                 class="w-full py-3 rounded-xl bg-gradient-to-r from-cyan-400 to-blue-500 text-white font-semibold shadow-md hover:opacity-90 transition">
                 SIGN UP
             </button>
         </form>
         <p class="text-center text-sm text-gray-700 mt-6">
             Already have an account?
             <a href="#" class="text-cyan-600 font-semibold hover:underline">Sign In</a>
         </p>
     </div>
 </div>
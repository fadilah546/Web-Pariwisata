<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk | WisataKu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-gray-50">

  <div class="flex h-screen">
    <!-- BAGIAN KIRI -->
    <div class="w-full md:w-1/2 flex flex-col justify-center items-center bg-[#f4f9ff] px-6">
      <!-- Icon -->
      <div class="flex flex-col items-center mb-8 text-center">
        <div class="bg-blue-500/10 p-4 rounded-full mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M10.5 21h3m-4.5 0h6M3 10l9 3 9-3m-9 3v8" />
          </svg>
        </div>
        <h1 class="text-2xl font-semibold text-gray-800">Selamat Datang Kembali</h1>
        <p class="text-gray-500 mt-1">Masuk ke akun Anda untuk melanjutkan petualangan</p>
      </div>

      <!-- Kartu Login -->
      <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
        <h2 class="text-lg font-semibold text-gray-700 mb-2">Masuk</h2>
        <p class="text-sm text-gray-500 mb-6">Masukkan email dan password untuk mengakses akun</p>

        <!-- Form -->
        <form>
          <label class="block text-gray-600 text-sm mb-1">Email</label>
          <div class="relative mb-4">
            <input type="email" placeholder="nama@email.com"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <svg class="absolute right-3 top-2.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 12H8m0 0l4-4m-4 4l4 4" />
            </svg>
          </div>

          <label class="block text-gray-600 text-sm mb-1">Password</label>
          <div class="relative mb-4">
            <input type="password" placeholder="Masukkan password"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <svg class="absolute right-3 top-2.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 11c0 1.657-1.343 3-3 3s-3-1.343-3-3m6 0c0-1.657 1.343-3 3-3s3 1.343 3 3m-6 0V9m0 6v2" />
            </svg>
          </div>

          <div class="flex justify-between items-center mb-6">
            <label class="flex items-center space-x-2 text-sm text-gray-600">
              <input type="checkbox" class="accent-blue-500">
              <span>Ingat saya</span>
            </label>
            <a href="#" class="text-blue-600 text-sm hover:underline">Lupa password?</a>
          </div>

          <button type="submit"
            class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-medium py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition duration-300">
            Masuk
          </button>

          <p class="text-center text-sm text-gray-600 mt-6">
            Belum punya akun? <a href="#" class="text-blue-600 font-semibold hover:underline">Daftar sekarang</a>
          </p>

          <button type="button"
            class="w-full border border-blue-200 mt-4 py-2 text-sm rounded-lg text-gray-600 hover:bg-blue-50 transition">
            Demo: Gunakan email apapun untuk masuk
          </button>
        </form>
      </div>
    </div>

    <!-- BAGIAN KANAN -->
    <div class="hidden md:flex w-1/2 relative items-center justify-center bg-blue-600">
      <img src="https://images.unsplash.com/photo-1502920514313-52581002a659?auto=format&fit=crop&w=800&q=80"
        alt="Background"
        class="absolute inset-0 w-full h-full object-cover opacity-70">
      <div class="absolute inset-0 bg-gradient-to-r from-blue-600/80 via-blue-600/60 to-blue-600/90"></div>

      <div class="relative z-10 text-center text-white px-10">
        <h2 class="text-lg font-semibold mb-2">Jelajahi Dunia Bersama Kami</h2>
        <p class="text-sm mb-8">Temukan destinasi impian dan buat kenangan tak terlupakan</p>

        <div class="flex justify-center space-x-6">
          <div class="bg-white/20 px-6 py-4 rounded-xl backdrop-blur-sm">
            <p class="text-2xl font-bold">500+</p>
            <p class="text-sm opacity-80">Destinasi</p>
          </div>
          <div class="bg-white/20 px-6 py-4 rounded-xl backdrop-blur-sm">
            <p class="text-2xl font-bold">50K+</p>
            <p class="text-sm opacity-80">Pelanggan</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

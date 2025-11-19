<?php
ob_start();
require_once "../config.php";
$login_message = "";

if (isset($_POST['login'])) {
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   if (empty($role)){
    header("Location: login.php?msg=Pilih role anda");
   }else{
     if (empty($username) || empty($password)) {
        header("Location: login.php?msg=Username dan password harus diisi");
    } else {
        if ($role == 'admin') {
            $cek_user = $koneksi->prepare("SELECT * FROM admin WHERE username_admin = ?");
            $cek_user->bind_param("s", $username);
            $cek_user->execute();
            $result = $cek_user->get_result();
            if ($result->num_rows === 0) {
                $cek_email = $koneksi->prepare("SELECT * FROM admin WHERE email = ?");
                $cek_email->bind_param("s", $username);
                $cek_email->execute();
                $result = $cek_email->get_result();

                if ($result->num_rows > 0) {
                    $data = $result->fetch_assoc();

                    if (password_verify($password, $data['password'])) {
                        header("Location:../dashboard/dashboard.php");
                        exit();
                    } else {
                        header("Location: login.php?msg=password salah");
                    }
                } else {
                    header("Location: login.php?msg=Akun tidak ditemukan");
                }
            } else {
                $data = $result->fetch_assoc();
                if (password_verify($password, $data['password'])) {
                    header("Location: ../dashboard/dashboard.php");
                    exit();
                } else {
                    header("Location: login.php?msg=password salah");
                }
            }
        } else if ($role == 'user') {
            $cek_user = $koneksi->prepare("SELECT * FROM user WHERE username = ?");
            $cek_user->bind_param("s", $username);
            $cek_user->execute();
            $result = $cek_user->get_result();
            if ($result->num_rows === 0) {
                $cek_email = $koneksi->prepare("SELECT * FROM user WHERE email = ?");
                $cek_email->bind_param("s", $username);
                $cek_email->execute();
                $result = $cek_email->get_result();

                if ($result->num_rows > 0) {
                    $data = $result->fetch_assoc();
                    if (password_verify($password, $data['password'])) {
                        header("Location: ../index.php");
                        exit();
                    } else {
                        header("Location: login.php?msg=password salah");
                    }
                } else {
                    header("Location: login.php?msg=Akun tidak ditemukan");
                }
            } else {
                $data = $result->fetch_assoc();
                if (password_verify($password, $data['password'])) {
                    header("Location: ../index.php");
                    exit();
                } else {
                    header("Location: login.php?msg=password salah");
                }
            }
        }
    }
}
   }
$koneksi->close();
?>

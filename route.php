<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {
    case 'dashboard':
        include 'pages/dashboard.php';
        break;
    case 'paket_wisata':
        include 'pages/paketwisata.php';
        break;
    case 'pemesanan':
        include 'pages/pemesanan.php';
        break;
    case 'pengguna':
        include 'pages/pengguna.php';
        break;
    case 'review':
        include 'pages/review.php';
        break;
    case 'pengaturan':
        include 'pages/pengaturan.php';
        break;
    default:
        echo "<h3>Selamat Datang di Dashboard</h3>";
        break;
}
?>
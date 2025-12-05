<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'profil';

switch ($page) {
    case 'profil':
        include 'page/profil.php';
        break;
    case 'pesanan':
        include 'page/pesanan.php';
        break;
}
?>
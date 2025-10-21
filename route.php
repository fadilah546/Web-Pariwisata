<?php  
$p=$_GET['p'];
switch($p){
    case 'semua':
        require_once "kategori/semua.php";
        break;
    case 'edukasi':
        require_once "kategori/edukasi.php";
        break;
    case 'kuliner':
        require_once "kategori/kuliner.php";
        break;
    case 'alam':
        require_once "kategori/alam.php";
        break;
    case 'rekreasi':
        require_once "kategori/rekreasi.php";
        break;
    case 'search':
        require_once "kategori/search.php";
        break;
    
default:
    require_once "kategori/semua.php";
    break;
}

?>

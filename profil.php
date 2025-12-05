<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya | WisataKu</title>
    <link rel="stylesheet" href="style.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    body {
    font-family: Arial, sans-serif;
    background: #e8f1ff; /* Biru lembut */
    margin: 0;
}

.container {
    display: flex;
}

/* SIDEBAR */
.sidebar {
    width: 260px;
    background: #f7fbff;
    padding: 25px;
    height: 100vh;
    border-right: 1px solid #d4e3ff;
}

.profile-box {
    text-align: center;
    margin-bottom: 25px;
}

.avatar {
    width: 70px;
    height: 70px;
    background: #b9d5ff;
    border-radius: 50%;
    margin: auto;
}

.profile-box h3 {
    margin: 15px 0 5px;
}

.level {
    color: #1a73e8;
    font-size: 14px;
}

.menu a {
    display: flex;
    align-items: center;
    padding: 12px 12px;
    font-size: 15px;
    cursor: pointer;
    color: #003b88;
    border-radius: 8px;
    margin-bottom: 5px;
}

.menu a:hover {
    background: #d6e7ff;
}

.menu a.active {
    background: #bcd7ff;
    font-weight: 600;
}

.menu a i {
    margin-right: 10px;
    font-size: 18px;
}

.badge {
    background: #1a73e8;
    color: white;
    padding: 3px 7px;
    border-radius: 10px;
    font-size: 12px;
    margin-left: auto;
}

.home-link {
    margin-top: 40px;
    color: #00439c;
    display: block;
    font-weight: 500;
}

/* MAIN CONTENT */
.content {
    flex: 1;
    padding: 40px;
}

.content h2 {
    margin: 0;
    color: #003b88;
}

.desc {
    margin-top: 5px;
    color: #4f6fa7;
}

.profile-card {
    margin-top: 25px;
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    border: 1px solid #d8e6ff;
}

.profile-header {
    display: flex;
    align-items: center;
    justify-content: space-between; /* INFO di kiri, EDIT di kanan */
    gap: 15px;
}

.avatar-big {
    width: 80px;
    height: 80px;
    background: #b9d5ff;
    border-radius: 50%;
}

.info h3 {
    margin: 0;
    color: #003b88;
}

.info {
    text-align: left;
    flex-grow: 1; /* Biar info memenuhi area kiri */
}

.member {
    font-size: 14px;
    color: #5d7fb8;
}

.level-badge {
    margin-top: 8px;
    background: #ffeb9a;
    padding: 5px 10px;
    border-radius: 8px;
    font-size: 14px;
    display: inline-block;
    color: #8b6f00;
}

.btn-edit {
    background: #1a73e8;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 8px;
    cursor: pointer;
    margin-left: auto; 

}

.btn-edit:hover {
    background: #0f5ecc;
}

.img-circle {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 50%;
}

.profil-card {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      margin-top: 10px;
}

#card1 {
      display: flex;
    flex-direction: row-reverse; /* 🔁 ini yang bikin ikon di kanan */
    align-items: center;
    justify-content: space-between; /* biar rapi antara teks dan icon */
    background: #c6deff;
    color:#0a4cff;
    border-radius: 16px;
    padding: 20px 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    width: 240px;
}
#card2 {
      display: flex;
    flex-direction: row-reverse; /* 🔁 ini yang bikin ikon di kanan */
    align-items: center;
    justify-content: space-between; /* biar rapi antara teks dan icon */
    background: #cfffde;
    color:#00a85a;
    border-radius: 16px;
    padding: 20px 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    width: 240px;
}
#card3 {
      display: flex;
    flex-direction: row-reverse; /* 🔁 ini yang bikin ikon di kanan */
    align-items: center;
    justify-content: space-between; /* biar rapi antara teks dan icon */
    background: #e7d1f8;
    color:#8b00d6;
    border-radius: 16px;
    padding: 20px 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    width: 240px;
}

.form-grid {
    margin-top: 30px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.form-group label {
    font-size: 14px;
    color: #003b88;
}

.form-group input {
    width: 95%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #aac8ff;
    margin-top: 5px;
}

.form-group input:focus {
    border-color: #1a73e8;
    outline: none;
}

</style>
</head>
<body>

<div class="container">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="profile-box">
            <img src="profil.jpeg" width="90" class="img-circle">
            <h3>John Doe</h3>
            <p class="level">Traveler Pro</p>
        </div>

        <nav class="menu">
            <a class="nav-link" href="profil.php?page=profil" name="profil"><i class="bi bi-person"></i> Profil Saya</a>
            <a href="profil.php?page=pesanan" class="nav-link"><i class="bi bi-bag"></i> Pesanan Saya</a>
            <a><i class="bi bi-gear"></i> Pengaturan</a>
        </nav>

        <a href="index.php" class="home-link"><i class="bi bi-house"></i> Kembali ke Beranda</a>
    </aside>

    <!-- MAIN CONTENT -->
    <?php
        // Ambil parameter "page" dari URL
          $page = isset($_GET['page']) ? $_GET['page'] : 'profil';

        // Load halaman sesuai parameter
        switch ($page) {
        case 'profil':
          include 'profil_saya.php';
          $tombol_profil = "active";
          break;
        case 'pesanan':
          include 'pesanan.php';
          $tombol_pesan = "active";
          break;

        default:
            include 'profil_saya.php';
            break;
        }
?>

</div>

</body>


</html>

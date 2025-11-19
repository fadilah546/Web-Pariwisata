                <?php
                // Load halaman sesuai parameter
                $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
               

                ?>

                
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>sistem Informasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#dbe5f0ff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#837f7fff" media="(prefers-color-scheme: dark)" />
    <link rel="preload" href="assets/css/adminlte.css" as="style" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
          crossorigin="anonymous" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
          crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
          crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/adminlte.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <style>
    .custom-sidebar {
    background-color: #1E3A8A; /* biru navy */
}


      .sidebar-menu .nav-icon {
  font-size: 1.4rem; /* ukuran icon, bisa ubah ke 1.6rem kalau mau lebih besar */
  margin-right: 10px;
  width: 25px; /* biar sejajar semua icon */
  text-align: center;

}
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }

    .navbar-custom {
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 0.6rem 1.5rem;
    }

    .navbar-brand {
      font-weight: 600;
      color: #212529;
      font-size: 1.2rem;
      margin-right: 1.5rem;
    }

    .nav-link {
      color: #212529;
      font-weight: 500;
      margin-right: 1rem;
    }

    .nav-link:hover {
      color: #ccd1daff;
    }

    .search-box {
      position: relative;
      margin-left: 15px;
    }

    .search-box input {
      border-radius: 30px;
      padding-left: 35px;
      width: 180px;
      transition: width 0.3s ease;
    }

    .search-box input:focus {
      width: 240px;
    }

    .search-box i {
      position: absolute;
      top: 10px;
      left: 12px;
      color: #888;
    }

    .icon-btn {
      border: none;
      background: none;
      margin: 0 10px;
      position: relative;
    }

    .icon-btn i {
      font-size: 1.3rem;
      color: #333;
    }

    .profile-img {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      object-fit: cover;
      margin-left: 10px;
    }

    .dropdown-toggle::after {
      display: none;
    }

      font-family: 'Poppins', sans-serif{
      background-color: #f5f7fa;
      margin: 0;
      padding: 0;
    }

    .dashboard-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      margin-top: 10px;
    }


    .card {
      display: flex;
    flex-direction: row-reverse; /* 🔁 ini yang bikin ikon di kanan */
    align-items: center;
    justify-content: space-between; /* biar rapi antara teks dan icon */
    background: #fff;
    border-radius: 16px;
    padding: 20px 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    width: 240px;
    }

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 14px rgba(0,0,0,0.15);
}

/* ICON */
.icon {
  font-size: 28px;
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}

.icon.green { background-color: #e6f8ec; color: #2ecc71; }
.icon.blue { background-color: #e6f0ff; color: #084872ff; }
.icon.purple { background-color: #f2e6ff; color: #9b59b6; }
.icon.orange { background-color: #fff4e6; color: #e67e22; }

/* TEXT */
.text p {
  margin: 0;
  font-weight: 500;
  color: #555;
}

.text h3 {
  margin: 2px 0;
  font-size: 22px;
  font-weight: bold; /* no bold*/ 
}

.text small {
  font-size: 12px;
  color: #2ac016ff;
}

.flex gap-4 w-full {
  display: flex;
  gap: 20px;
  width: 100%;
  margin-top: 20px;
}

.flek-1 bg-white p-4 {
  flex: 2; /* lebih besar */
  background: white;
  padding: 20px;
  border-radius: 16px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.flex-1 bg-white p-4 {
  flex: 1; /* lebih kecil */
  background: white;
  padding: 20px;
  border-radius: 16px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.judul {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.subjudul {
  font-size: 14px;
  color: gray;
  margin-bottom: 20px;
}

  </style>
</head>



   <!-- ========== HEADER ========== -->
<body class="sidebar-expand-lg sidebar-open bg-body-tertiary">

      <!-- ========== NAVBAR ========== -->
    <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- Kiri: Brand + Menu -->
        <div class="d-flex align-items-center">
          <span class="navbar-brand me-4">Admin Dashboard</span>

          <div class="d-flex ms-4">
            <a class="nav-link" href="#">Home</a>
            <a class="nav-link" href="#">Contact</a>
          </div>
        </div>

        <!-- Kanan: Pencarian, Notifikasi, Profil -->
        <div class="d-flex align-items-center">
          <!-- Pencarian -->
          <div class="search-box position-relative">
            <i class="bi bi-search"></i>
            <input type="text" class="form-control" placeholder="Cari...">
          </div>

          <!-- Notifikasi -->
          <button class="icon-btn">
            <i class="bi bi-bell"></i>
          </button>

          <!-- Profil -->
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
              <img src="https://i.pravatar.cc/100" alt="User" class="profile-img">
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Profil</a></li>
              <li><a class="dropdown-item" href="#">Pengaturan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Keluar</a></li>
            </ul>
          </div>
        </div>

      </div>
    </nav>

    <!-- ========== SIDEBAR ========== -->
  <div class="app-wrapper">
    <aside class="app-sidebar custom-sidebar shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
            <a href="index.php" class="brand-link">
                <img src="assets/css/img/AdminLTELogo.png" alt="Logo" height="45" width="45">
                <span class="brand-text fw-bold">WisataKu</span>
            </a>
        </div>

        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="index.php?page=dashboard" class="nav-link">
                            <i class="nav-icon bi bi-speedometer fs-5"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=paketwisata" class="nav-link">
                            <i class="nav-icon bi bi-box-seam fs-5"></i>
                            <p>Paket Wisata</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=pemesanan" class="nav-link">
                            <i class="nav-icon bi bi-cart-check-fill fs-5"></i>
                            <p>Pemesanan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=pengguna" class="nav-link">
                            <i class="nav-icon bi bi-people-fill fs-5"></i>
                            <p>Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=review" class="nav-link">
                            <i class="nav-icon bi bi-star-fill fs-5"></i>
                            <p>Review</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=pengaturan" class="nav-link">
                            <i class="nav-icon bi bi-gear-fill fs-5"></i>
                            <p>Pengaturan</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

 <!-- ========== MAIN CONTENT ========== -->
<main class="app-main">
  <div class="app-content">
    <div class="container-fluid">
      <?php
        // Ambil parameter "page" dari URL
          $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Load halaman sesuai parameter
        switch ($page) {
        case 'dashboard':
          include 'pages/dashboard.php';
          break;
        case 'paketwisata':
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
        echo "<h3>Selamat Datang di Dashboard</h3>
        <p>Pilih menu di samping untuk melihat data.</p>";
        break;
        }
      ?>
    </div>

</main>


    <!-- ========== FOOTER ========== -->
    <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Version 1.0</div>
        <strong>Copyright &copy; 2025 <a href="https://adminlte.io"
        class="text-decoration-none">Administrator</a>.</strong> All rights reserved.
    </footer>
</div>

<!-- ========== SCRIPTS ========== -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
<script src="assets/js/adminlte.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('salesChart');



</script>


</body>
</html>


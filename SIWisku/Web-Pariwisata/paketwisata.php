                <?php
                // Load halaman sesuai parameter
                $page = isset($_GET['page']) ? $_GET['page'] : 'paketwisata';
               
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

.header-container {
  display: flex;
  justify-content: space-between; /* agar teks kiri, tombol kanan */
 /* sejajarkan vertikal di tengah */
  margin-bottom: 10px;
}
.header-left {
  text-align: left;
  margin-top: 30px;
  .p{
    margin-top: 0;
  }
  h3{
    font-size: 25px;
    font-weight: bold;
    margin-bottom: 4px;
  }
  
}

.header-right {
  text-align: right;
  margin-top: 50px;
}
.btn-tambah {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 6px;
  cursor: pointer;
}

.table table-bordereless {
  margin-top: 10px;
}

.table-container {
  border-radius: 15px;
  padding: 20px;
  overflow: hidden;
}

/* Tambah ruang di dalam sel tabel */
.table th,
.table td {
  padding-top: 10px;   /* jarak atas */
  padding-bottom: 10px; /* jarak bawah */
  padding-left: 1.2rem; /* jarak kiri */
  padding-right: 1.2rem; /* jarak kanan */
  vertical-align: middle; /* teks di tengah vertikal */
}


/* Header kolom biar sejajar dan lebih jelas */
.table thead th {
  vertical-align: middle;
  font-weight: 600;

}

/* Gambar biar proporsional dan sudutnya tumpul */
.img-thumb {
  width: 35px;
  height: 35px;
  border-radius: 10px;
  object-fit: cover;
}

/* Tambah garis pemisah lembut antar baris */
.table tbody tr {
  border-bottom: 1px solid #e9ecef;
}

/* Efek hover ringan */
.table tbody tr:hover {
  background-color: #f9fafc;
}


</style>

</head>

<body class="py-5">

<!--=========== MAIN CONTENT =========== -->
<main class="main-content">
    <div class="container-fluid">
      <div class="header-paket">
        <div class="header-container">   
          <div class="header-left">      
            <h3>Manajemen Paket Wisata</h3>
            <p>Kelola semua paket wisata yang tersedia</p>
          </div>

          <div class="header-right">
            <button class="btn btn-primary">+ Tambah Paket</button>
          </div>
        </div>
      </div>
     
  <!-- Card -->
    
      <div class="bg-white shadow-sm table-container">
          <table class="table table-bordereless mb-0">
            <thead class="bg-light text-secondary fw-medium align-middle">
              <tr>
                <th class="text-padding left">Paket</th>
                <th>Lokasi</th>
                <th>Harga</th>
                <th>Rating</th>
                <th>status</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="ps-4">
                  <div class="d-flex align-items-center gap-3">
                    <img src="/siwisku/admin/assets/img/bali.jpeg" alt="Paket Wisata Bali 3D2N" width="35" class="img-thumb">
                    <span class="fw-medium">Paket Wisata Bali 3D2N</span>
                  </div>
                </td>
                <td class="align-middle"><i class="bi bi-geo-alt bi bi-geo-alt text-secondary me-1"></i>Bali</td>
                <td class="align-middle">Rp 1.500.000</td>
                <td class="align-middle"><i class="fa fa-star" style="color: gold;"></i> <span>4.5</span></td>
                <td class="align-middle"><span class="badge bg-primary-subtle text-primary status-badge">active</span></td>
                <td class="text-center align-middle">
                  <button class="btn btn-light btn-sm me-1"><i class="bi bi-pencil"></i></button>
                  <button class="btn btn-light btn-sm"><i class="bi bi-trash"></i></button>
                </td>
              </tr>

              <tr>
                <td class="ps-4">
                  <div class="d-flex align-items-center gap-3">
                    <img src="/siwisku/admin/assets/img/bromo.jpeg" alt="Tour Bromo Tengger" width="35" class="img-thumb">
                    <span class="fw-medium">Tour Bromo Tengger</span>
                  </div>
                </td>
                <td class="align-middle"><i class="bi bi-geo-alt"></i> <span>Malang</span></td>
                <td class="align-middle">Rp 800.000</td>
                <td class="align-middle"><i class="fa-solid fa-star" style="color: gold;"></i> <span>4.8</span></td>
                <td class="align-middle"><span class="badge bg-primary-subtle text-primary status-badge">active</span></td>
                <td class="text-center align-middle">
                  <button class="btn btn-light btn-sm me-1"><i class="bi bi-pencil"></i></button>
                  <button class="btn btn-light btn-sm"><i class="bi bi-trash"></i></button>
                </td>
              </tr>

              <tr>
                <td class="ps-4">
                  <div class="d-flex align-items-center gap-3">
                    <img src="/siwisku/admin/assets/img/jogja.jpeg" alt="Wisata Budaya Yogyakarta" width="35" class="img-thumb">
                    <span class="fw-medium">Wisata Budaya Yogyakarta</span>
                </td>
                <td class="align-middle"><i class="bi bi-geo-alt"></i> <span>Yogyakarta</span></td>
                <td class="align-middle">Rp 650.000</td>
                <td class="align-middle"><i class="fa-solid fa-star" style="color: gold;"></i> <span>4.3</span></td>
                <td class="align-middle"><span class="badge bg-secondary-subtle text-secondary status-badge">draft</span></td>
                <td class="text-center align-middle">
                  <button class="btn btn-light btn-sm me-1"><i class="bi bi-pencil bordered"></i></button>
                  <button class="btn btn-light btn-sm"><i class="bi bi-trash"></i></button>
                </td>
              </tr>

            </tbody>
          </table>
      </div>
    
  
</div>

</main>
</body>

</html>


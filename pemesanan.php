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
  padding: 5px;
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
  font-size: 14px;
}


/* Header kolom biar sejajar dan lebih jelas */
.table thead th {
  vertical-align: middle;

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
            <h3>Manajemen Pemesanan</h3>
            <p>Kelola semua pemesanan dari pelanggan</p>
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
                <th>ID Booking</th>
                <th>Pengguna</th>
                <th>Paket</th>
                <th>Peserta</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Status</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>BK001</td>     
                <td class="align-middle">Ahmad Fauzi</td>
                <td class="align-middle">Paket Wisata Bali 3D2N</td>
                <td class="align-middle"><i class="bi bi-people"></i> <span>2</span></td>
                <td class="align-middle">2024-12-25</td>
                <td class="align-middle">Rp 3.000.000</td>
                <td><span class="badge bg-primary-subtle text-primary status-badge">confirmed</span></td>
                <td class="text-center align-middle">
                  <button class="btn btn-light btn-sm me-1"><i class="bi bi-eye"></i></button>
                  <button class="btn btn-light btn-sm"><i class="bi bi-three-dots"></i></button>
                </td>
              </tr>

              <tr>
                <td>BK002</td>
                <td class="align-middle">Siti Nur Haliza</td>
                <td class="align-middle">Tour Bromo Tengger</td>
                <td class="align-middle"><i class="bi bi-people"></i> <span>4</span></td>
                <td class="align-middle">2024-12-30</td>
                <td class="align-middle">Rp 3.200.000</td>
                <td class="align-middle"><span class="badge bg-primary-subtle text-primary status-badge">pending</span></td>
                <td class="text-center align-middle">
                  <button class="btn btn-light btn-sm me-1"><i class="bi bi-eye"></i></button>
                  <button class="btn btn-light btn-sm"><i class="bi bi-three-dots"></i></button>
                </td>
              </tr>

              <tr>
                <td>BK003</td>
                <td class="align-middle">Budi Santoso</td>
                <td class="align-middle">Wisata Budaya Yogyakarta</td>
                <td class="align-middle"><i class="bi bi-people"></i> <span>3</span></td>
                <td class="align-middle">2025-01-05</td>
                <td class="align-middle">Rp 1.950.000</td>
                <td class="align-middle"><span class="badge bg-primary-subtle text-primary status-badge">paid</span></td>
                <td class="text-center align-middle">
                  <button class="btn btn-light btn-sm me-1"><i class="bi bi-eye"></i></button>
                  <button class="btn btn-light btn-sm"><i class="bi bi-three-dots"></i></button>
                </td>
              </tr>

            </tbody>
          </table>
      </div>
    
  
</div>

</main>
</body>

</html>


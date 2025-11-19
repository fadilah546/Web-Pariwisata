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

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f7fa;
      margin: 0;
    }

    .container {
      background-color: #fff;
      border-radius: 10px;
      border: 1px solid #ddd;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      padding: 20px;
      margin-bottom: 20px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .user-info {
      display: flex;
      flex-direction: column;
    }

    .user-info h3 {
      margin: 0;
      font-size: 16px;
      font-weight: 600;
      color: #333;
    }

    .user-info span {
      font-size: 14px;
      color: #666;
    }

    .rating-status {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .stars {
      color: #f5c518;
      font-size: 16px;
    }

    .status {
      font-size: 12px;
      padding: 4px 10px;
      border-radius: 12px;
      font-weight: 500;
    }

    .approved {
      background-color: #0d99ff;
      color: white;
    }

    .pending {
      background-color: #e0e0e0;
      color: #333;
    }

    .review-text {
      margin-top: 10px;
      font-size: 14px;
      color: #333;
      line-height: 1.5;
    }

    .date {
      margin-top: 8px;
      font-size: 12px;
      color: #888;
    }

    .actions {
      margin-top: 15px;
      display: flex;
      justify-content: flex-end;
      gap: 8px;
    }

    .btn {
      border: none;
      padding: 6px 14px;
      border-radius: 10px;
      cursor: pointer;
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 5px;
      transition: background-color 0.2s;
    }

    .btn-approve {
      background-color: #e8f2ff;
      color: #007bff;
    }

    .btn-approve:hover {
      background-color: #d1e6ff;
    }

    .btn-reject {
      background-color: #f0f0f0;
      color: #333;
    }

    .btn-reject:hover {
      background-color: #e0e0e0;
    }

    .btn i {
      font-size: 14px;
    }

    .review-wrapper {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    padding: 20px;
    max-width: 1000px;
    margin: 0 auto; /* tengah di layar */
    border: 1px solid #ddd;
    }

</style>

</head><br>

<body class="py-5">

<!--=========== MAIN CONTENT =========== -->
<main class="main-content">
  <div class="header-paket">
  <div class="header-container">   
    <div class="header-left">      
      <h3>Manajemen Review</h3>
      <p>Moderasi review dari pelanggan</p>
    </div>
  </div>
  </div>

  <div class="review-wrapper">
    <div class="container">
      <div class="header">
        <div class="user-info">
          <h3>Ahmad Fauzi</h3>
          <span>Paket Wisata Bali 3D2N</span>
        </div>
        <div class="rating-status">
          <div class="stars">★★★★★</div>
          <div class="status approved">approved</div>
        </div>
      </div>

      <div class="review-text">
        Paket wisata yang sangat memuaskan! Guide ramah dan tempat wisata yang dikunjungi sangat indah.
      </div>
      <div class="date">2024-12-01</div>
    </div>

    <!-- Card 2 -->
    <div class="container">
      <div class="header">
        <div class="user-info">
          <h3>Siti Nurhaliza</h3>
          <span>Tour Bromo Tengger</span>
        </div>
        <div class="rating-status">
          <div class="stars">★★★★☆</div>
          <div class="status pending">pending</div>
        </div>
      </div>

      <div class="review-text">
        Pengalaman yang tak terlupakan melihat sunrise di Bromo. Recommended!
      </div>
      <div class="date">2024-11-28</div>

      <div class="actions">
        <button class="btn btn-approve"><i>✔</i> Setujui</button>
        <button class="btn btn-reject"><i>✖</i> Tolak</button>
      </div>
    </div>
  </div>
    


</main>
</body>

</html>


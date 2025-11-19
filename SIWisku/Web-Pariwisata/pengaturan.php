<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pengaturan Aplikasi</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background-color: #f7f9fc;
      margin: 0;

    }

    h1 {
      font-size: 25px;
      color: #1a1a1a;
      margin-top: 15px;
    }

    p.subtitle {
      color: #6c757d;
      font-size: 17px;
      margin-bottom: 50px;
      text-align: left;
    }

    .settings-container {
      display: flex;
      flex-wrap: wrap;
      gap: 5px;
    }

    .card {
      background-color: #fff;
      border: 1px solid #e0e6ed;
      border-radius: 12px;
      padding: 20px 24px;
      flex: 1;
      display: flex;
      text-align: left !important;
      flex-direction: column; 
      min-width: 320px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.03);
      line-height: 1.6;
    }

    .card {
    display: block !important;
    text-align: left !important;
    justify-content: flex-start !important;
    align-items: flex-start !important;
    line-height: 0.6;
    }

    .card h2 {
      font-size: 15px;
      color: #1a1a1a;
      margin-bottom: 16px;
      font-weight: 600;
      height: 24px;
      text-align: left !important;
      line-height: 0.6;
    }


    .form-group {
      margin-bottom: 16px;
    }

    .form-label {
      display: block;
      font-size: 14px;
      font-weight: 600;
      color: #1a1a1a;
      margin-bottom: 4px;
    }

    .form-label span {
      color: red;
      margin-left: 2px;
    }

    .form-value {
      font-size: 14px;
      color: #333;
      padding-left: 4px;
    }

    /* Responsif */
    @media (max-width: 768px) {
      .settings-container {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

  <h1>Pengaturan</h1>
  <p class="subtitle">Konfigurasi aplikasi dan preferensi</p>

  <div class="settings-container">

    <!-- Kartu kiri: Informasi Kontak -->
    <div class="card">
      <h2>Informasi Kontak</h2><br>

      <div class="form-group lef">
        <label class="form-label">Nama Perusahaan <span>*</span></label><br>
        <div class="form-value">TravelKu Indonesia</div><br>
      </div>

      <div class="form-group left">
        <label class="form-label">Email Support <span>*</span></label><br>
        <div class="form-value">support@travelku.com</div><br>
      </div>

      <div class="form-group left">
        <label class="form-label">Nomor Telepon <span>*</span></label><br>
        <div class="form-value">+62 21 1234 5678</div><br>
      </div>
    </div>

    <!-- Kartu kanan: Pengaturan Pembayaran -->
    <div class="card">
      <h2>Pengaturan Pembayaran</h2>

      <div class="form-group">
        <label class="form-label">Mata Uang <span>*</span></label>
        <div class="form-value">IDR - Rupiah</div>
      </div>

      <div class="form-group">
        <label class="form-label">Tarif Pajak (%) <span>*</span></label>
        <div class="form-value">11</div>
      </div>
    </div>

  </div>
</body>
</html>

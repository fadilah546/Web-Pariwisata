<?php
require_once "config.php";
$data = $koneksi->query("SELECT * FROM wisata WHERE kategori = 'kuliner'");
if ($data && $data->num_rows > 0){
  ?>
  <!-- Paket Wisata Populer -->
<section class="mt-10 px-6" id="content">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold">Wisata Kuliner</h2>
    <a href="#" class="text-blue-500">Lihat Semua →</a>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Card -->
    <?php
    foreach ($data as $d) {
    ?>
      <div class="bg-white/40 backdrop-blur-xl border border-white/30 shadow-lg rounded-2xl overflow-hidden 
              transform transition duration-300 ease-out hover:scale-105 hover:shadow-2xl hover:bg-white/50">
        <img src="assets/images/<?php echo $d['gambar'] ?>" class="w-full h-48 object-cover" alt="<?php echo $d['nama_wisata'] ?>">

        <div class="p-5">
          <h3 class="font-semibold text-gray-800"><?php echo $d['nama_wisata'] ?></h3>
          <p class="text-gray-600 text-sm"><?php echo $d['lokasi'] ?></p>

          <div class="flex items-center text-yellow-500 text-sm mt-1">
            ⭐ 4.5 (124 ulasan)
          </div>

          <p class="text-gray-600 text-sm mt-1">1 Hari • 1 Orang</p>

          <p class="font-bold text-lg mt-3 text-blue-600"><?php echo "Rp" . number_format($d['harga_weekday'], 0, ',', '.') .
                                                            " - Rp " . number_format($d['harga_weekend'], 0, ',', '.'); ?></p>

          <button class="mt-4 w-full py-2 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 text-white 
        shadow-md shadow-blue-500/30 hover:shadow-lg hover:shadow-blue-500/50 transform hover:scale-105 
        transition duration-300 ease-out">
            Lihat Detail
          </button>
        </div>
      </div>
    <?php } ?>

  </div>


  <div class="flex justify-center mt-6">
    <button class="px-6 py-2 bg-gray-200 rounded-full hover:bg-gray-300">Muat Lebih Banyak Paket Wisata</button>
  </div>
</section>
<?php
  }else{
    ?>
    <section class="mt-10 px-6" id="content">
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold">Wisata Kuliner</h2>
    <a href="#" class="text-blue-500">Lihat Semua →</a>
  </div>
  <h3 class="font-semibold text-gray-800">Tidak ada wisata untuk kategori ini</h3>
  <?php
  }
?>
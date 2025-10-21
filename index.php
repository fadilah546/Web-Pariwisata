<?php error_reporting(0) ?>


<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-9">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WisataKu - Home</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Swiper CSS & JS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="font-sans bg-gray-50">

  <!-- Navbar -->
  <nav class="backdrop-blur-md hover:backdrop-blur-3xl bg-white/20 border-b border-white/30 shadow-lg p-4 flex items-center justify-between fixed top-0 w-full z-50 
  transition-all duration-500 ease-[cubic-bezier(0.4,0,0.2,1)]">

    <div class="flex items-center space-x-2">
      <img src="assets/images/logo.png" alt="WisataKu"
        class="h-12 w-12 rounded-2xl shadow-md ring-1 ring-white/30">
      <span class="font-semibold text-lg text-gray-900 drop-shadow-sm">WisataKu</span>
    </div>

    <div class="hidden md:flex-1 md:flex md:justify-center">
      <div class="flex w-1/2 items-center bg-white/30 border border-white/20 rounded-full overflow-hidden 
      backdrop-blur-xl shadow-inner shadow-white/10 
      transition-all duration-300 ease-out focus-within:ring-2 focus-within:ring-blue-400/50">
      <form action="index.php?p=search" method="POST">
          <input type="text" placeholder="Cari destinasi..." name="search"
          class="flex-grow px-4 py-2 bg-transparent text-gray-900 placeholder-gray-600 outline-none" autocomplete="off">
        <button type="submit" class="bg-gradient-to-r from-blue-400 to-blue-500 text-white font-medium px-5 py-2 rounded-r-full 
                     hover:from-blue-500 hover:to-blue-600 transition-all duration-300 shadow-md shadow-blue-500/20" name="cari" >
          Cari
        </button>
      </form>
      </div>
    </div>

    <div class="hidden md:flex space-x-3">
      <button class="px-4 py-2 rounded-full bg-white/30 backdrop-blur-md border border-white/20 
                   text-gray-900 hover:bg-white/50 transition-all duration-300 shadow-sm shadow-white/10">
        Masuk
      </button>
      <button class="px-4 py-2 rounded-full bg-white/30 backdrop-blur-md border border-white/20 
                   text-gray-900 hover:bg-white/50 transition-all duration-300 shadow-sm shadow-white/10">
        Keranjang
      </button>
    </div>

    <div class="flex md:hidden space-x-3">
      <button class="p-2 rounded-full bg-white/30 backdrop-blur-md border border-white/20 
                   hover:bg-white/50 transition-all duration-300">🔍</button>
      <button class="p-2 rounded-full bg-white/30 backdrop-blur-md border border-white/20 
                   hover:bg-white/50 transition-all duration-300">🛒</button>
      <button class="p-2 rounded-full bg-white/30 backdrop-blur-md border border-white/20 
                   hover:bg-white/50 transition-all duration-300">👤</button>
    </div>
  </nav>



  <!-- Tambahin padding-top biar konten gak ketiban navbar -->
  <div class="">

    <!-- Hero Section (lebih kecil tapi tetap slide) -->
    <section class="relative text-center text-white h-[55vh] md:h-[70vh] flex flex-col items-center justify-center overflow-hidden">

      <!-- Swiper Background -->
      <div class="absolute inset-0 z-0">
        <div class="swiper mySwiper h-full w-full">
          <div class="swiper-wrapper PX-5">
            <div class="swiper-slide">
              <img src="assets/images/bali.jpg" alt="Bali" class="w-full h-full object-cover" />
            </div>
            <div class="swiper-slide">
              <img src="assets/images/rajaampat.jpg" alt="Raja Ampat" class="w-full h-full object-cover" />
            </div>
            <div class="swiper-slide">
              <img src="assets/images/bromo.jpg" alt="Bromo" class="w-full h-full object-cover" />
            </div>
            <div class="swiper-slide">
              <img src="assets/images/labuanbajo.jpg" alt="Labuan Bajo" class="w-full h-full object-cover" />
            </div>
          </div>
        </div>

        <!-- Lapisan gelap agar teks lebih terlihat -->
        <div class="absolute inset-0 bg-black/40"></div>
      </div>

      <!-- Teks di atas background -->
      <div class="relative mt-6 px-6 py-10 rounded-[2rem] hover:backdrop-blur-3xl  
    border border-white/30 shadow-[0_4px_30px_rgba(0,0,0,0.1)] 
    overflow-hidden transition-all duration-500 hover:scale-[1.02]">

        <!-- Efek pantulan dalam -->
        <div class="absolute inset-0 bg-gradient-to-br from-pink-400/30 via-transparent to-blue-400/30 
              mix-blend-overlay blur-2xl opacity-70 animate-pulse"></div>

        <!-- Konten utama -->
        <div class="relative z-10 text-center text-white drop-shadow-lg">
          <h1 class="text-xl md:text-[42px] font-bold mb-5">
            Jelajahi Purbalingga Bersama Kami
          </h1>
          <p class="text-sm md:text-base font-medium mb-6">
            Temukan destinasi wisata terbaik dengan paket perjalanan yang tak terlupakan
          </p>
          <a href="#kategori" class="bg-gradient-to-r from-orange-400 to-orange-600 
                   hover:from-orange-500 hover:to-orange-700 
                   px-6 py-3 rounded-full text-sm md:text-base font-semibold 
                   shadow-lg transition-transform hover:scale-110 active:scale-95">
            Jelajahi Sekarang
          </a>
        </div>
      </div>
      <!-- Efek gradasi blur ultra halus ke bawah -->
      <div class="absolute bottom-0 left-0 w-full h-10 pointer-events-none select-none">

        <!-- Lapisan paling bawah: kabut lembut putih -->
        <div class="absolute bottom-0 left-0 w-full h-1/3 
              bg-gradient-to-b from-white/5 to-white"></div>
      </div>


    </section>

    <!-- Swiper Script -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        effect: "fade",
        fadeEffect: {
          crossFade: true
        },
      });
    </script>

    <!-- Kategori Wisata -->
    <section id="kategori" class="mt-10 px-6">
      <h1 class="text-xl font-bold text-center md:text-3xl">Kategori Wisata</h1>
      <h1 class="text-md font-sans text-center mb-5 ">Pilih jenis petualangan yang ingin Anda nikmati</h1>

      <div class="flex lg:grid gap-6 overflow-x-auto lg:overflow-visible 
              grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 px-4 pb-2
              scrollbar-hide">

        <a class="kategori flex-shrink-0 px-10 py-5 bg-blue-500 text-white rounded-lg shadow-lg shadow-blue-500/40
      hover:bg-blue-600 hover:shadow-xl hover:shadow-blue-500/50 transform hover:scale-105 transition duration-300 ease-out origin-center" href="route.php?p=edukasi">
          <h1 class=" font-semibold" style="text-align: center;">Edukasi</h1>
        </a>

        <a class="kategori flex-shrink-0 px-10 py-5 bg-green-500 text-white rounded-lg shadow-lg shadow-green-500/40
      hover:bg-green-600 hover:shadow-xl hover:shadow-green-500/50 transform hover:scale-105 transition duration-300 ease-out origin-center" href="route.php?p=alam">
          <h1 class=" font-semibold" style="text-align: center;">Alam</h1>
        </a>

        <a class="kategori flex-shrink-0 px-10 py-5 bg-orange-500 text-white rounded-lg shadow-lg shadow-orange-500/40
      hover:bg-orange-600 hover:shadow-xl hover:shadow-orange-500/50 transform hover:scale-105 transition duration-300 ease-out origin-center" href="route.php?p=kuliner">
          <h1 class=" font-semibold" style="text-align: center;">Kuliner</h1>
        </a>

        <a class="kategori flex-shrink-0 px-10 py-5 bg-pink-500 text-white rounded-lg shadow-lg shadow-pink-500/40
      hover:bg-pink-600 hover:shadow-xl hover:shadow-pink-500/50 transform hover:scale-105 transition duration-300 ease-out origin-center" href="route.php?p=rekreasi" >
          <h1 class=" font-semibold" style="text-align: center;">Rekreasi</h1>
        </a>

        <a class="kategori flex-shrink-0 px-10 py-5 bg-purple-500 text-white rounded-lg shadow-lg shadow-purple-500/40
      hover:bg-purple-600 hover:shadow-xl hover:shadow-purple-500/50 transform hover:scale-105 transition duration-300 ease-out origin-center" href="route.php?p=semua">
          <h1 class=" font-semibold" style="text-align: center;">Semua</h1>
        </a>

      </div>
    </section>


    <!-- Paket Wisata Populer -->
    <section class="mt-10 px-6" id="content">
        <!-- Card -->
        <?php require_once "route.php" ?>

    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 mt-16 px-6 py-10">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div>
          <h3 class="text-lg font-bold mb-3 text-white">WisataKu</h3>
          <p>Platform terpercaya untuk menjelajahi keindahan Indonesia dengan paket wisata terbaik.</p>
          <div class="flex space-x-3">
            <a href="#" target="_blank">
              <img src="https://img.icons8.com/ios-filled/50/ffffff/facebook-new.png" class="h-5" alt="Facebook">
            </a>
            <a href="#" target="_blank">
              <img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png" class="h-5" alt="Instagram">
            </a>
            <a href="#" target="_blank">
              <img src="https://img.icons8.com/ios-filled/50/ffffff/youtube-play.png" class="h-5" alt="YouTube">
            </a>
          </div>

        </div>
        <div>
          <h4 class="font-semibold text-white mb-2">Tentang Kami</h4>
          <ul class="space-y-1">
            <li><a href="#">Tentang Wisataku</a></li>
            <li><a href="#">Tim Kami</a></li>
            <li><a href="#">Karir</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold text-white mb-2">Layanan</h4>
          <ul class="space-y-1">
            <li><a href="#">Paket Wisata</a></li>
            <li><a href="#">Tour Guide</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold text-white mb-2">Kontak Kami</h4>
          <p>Email: hello@wisataku.com</p>
          <p>Telp: +62 1234 5678</p>
          <p>Jakarta, Indonesia</p>
        </div>
      </div>
      <div class="text-center text-sm mt-6 border-t border-gray-700 pt-4">
        © 2024 WisataKu. Semua hak cipta dilindungi.
      </div>
    </footer>

  </div> <!-- end pt-20 -->

</body>
<script>
  document.querySelector('a[href="#kategori"]').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('#kategori').scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  });

</script>
<script src="kategori/kategori.js"></script>

</html>

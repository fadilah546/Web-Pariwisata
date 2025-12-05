                <?php
                // Load halaman sesuai parameter
                $page = isset($_GET['page']) ? $_GET['page'] : 'pesanan';
               
                ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WisataKu - Pesanan Saya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="font-sans bg-gray-50">

    <nav class="fixed top-0 w-full z-50 backdrop-blur-md bg-white/20 border-b border-white/30 shadow-lg p-4
        flex items-center justify-between transition-all duration-500 ease-in-out">
        <div class="flex items-center space-x-2">
            <img src="assets/images/logo.png" alt="WisataKu"
                class="h-12 w-12 rounded-2xl shadow-md ring-1 ring-white/30">
            <span class="font-semibold text-lg text-gray-900 drop-shadow-sm">WisataKu</span>
        </div>
        <div class="hidden md:flex flex-1 justify-center">
            </div>
        <div class="hidden md:flex space-x-3">
            <a class="px-4 py-2 rounded-full bg-white/30 backdrop-blur-md border border-white/20 text-gray-900 
                hover:bg-white/50 transition-all duration-300 shadow-sm shadow-white/10" href="login/login.php">
                Masuk
            </a>
            <button
                class="px-4 py-2 rounded-full bg-white/30 backdrop-blur-md border border-white/20 text-gray-900 
                hover:bg-white/50 transition-all duration-300 shadow-sm shadow-white/10">
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
    <main class="pt-24 pb-10 px-4 md:px-10 lg:px-20">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-8 text-center">🧾 Pesanan Saya</h1>

            <div class="flex justify-center space-x-4 mb-8 border-b border-gray-200">
                <button class="py-2 px-4 text-sm md:text-base font-semibold border-b-2 border-orange-500 text-orange-600 transition duration-200">
                    Semua Pesanan
                </button>
                <button class="py-2 px-4 text-sm md:text-base font-medium text-gray-500 hover:text-gray-700 transition duration-200">
                    Menunggu Pembayaran
                </button>
                <button class="py-2 px-4 text-sm md:text-base font-medium text-gray-500 hover:text-gray-700 transition duration-200">
                    Selesai
                </button>
                <button class="py-2 px-4 text-sm md:text-base font-medium text-gray-500 hover:text-gray-700 transition duration-200">
                    Dibatalkan
                </button>
            </div>

            <div class="bg-white p-5 rounded-xl shadow-lg border border-gray-100 mb-6 transition-transform duration-300 hover:shadow-xl">
                <div class="flex justify-between items-start border-b pb-3 mb-3">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">Labuan Bajo - Paket Waisai 3H2M</h2>
                        <p class="text-sm text-gray-500">Kode Pesanan: WSKU-2024001A</p>
                    </div>
                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Menunggu Pembayaran
                    </span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm text-gray-700">
                    <p><span class="font-semibold">Tanggal Trip:</span> 15 Desember 2025</p>
                    <p><span class="font-semibold">Jumlah Orang:</span> 2 Dewasa</p>
                    <p><span class="font-semibold">Total Harga:</span> <span class="text-lg font-bold text-orange-600">Rp 4.500.000</span></p>
                    <div class="text-right">
                        <button class="px-4 py-2 rounded-full bg-gradient-to-r from-orange-400 to-orange-600 
                            text-white text-sm font-medium hover:from-orange-500 hover:to-orange-700 transition-all shadow-md">
                            Bayar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white p-5 rounded-xl shadow-lg border border-gray-100 mb-6 transition-transform duration-300 hover:shadow-xl">
                <div class="flex justify-between items-start border-b pb-3 mb-3">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">Bali - Tur Ubud dan Kintamani (1 Hari)</h2>
                        <p class="text-sm text-gray-500">Kode Pesanan: WSKU-2024002B</p>
                    </div>
                    <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Selesai
                    </span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm text-gray-700">
                    <p><span class="font-semibold">Tanggal Trip:</span> 01 November 2025</p>
                    <p><span class="font-semibold">Jumlah Orang:</span> 1 Dewasa</p>
                    <p><span class="font-semibold">Total Harga:</span> <span class="text-lg font-bold text-gray-800">Rp 950.000</span></p>
                    <div class="text-right">
                        <button class="px-4 py-2 rounded-full bg-blue-500 text-white text-sm font-medium hover:bg-blue-600 transition-all shadow-md">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-5 rounded-xl shadow-lg border border-gray-100 mb-6 opacity-70 transition-transform duration-300 hover:shadow-xl">
                <div class="flex justify-between items-start border-b pb-3 mb-3">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">Raja Ampat - Paket Diving 5H4M</h2>
                        <p class="text-sm text-gray-500">Kode Pesanan: WSKU-2024003C</p>
                    </div>
                    <span class="bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Dibatalkan
                    </span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm text-gray-700">
                    <p><span class="font-semibold">Tanggal Trip:</span> 10 Oktober 2025</p>
                    <p><span class="font-semibold">Jumlah Orang:</span> 4 Dewasa</p>
                    <p><span class="font-semibold">Total Harga:</span> <span class="text-lg font-bold text-gray-800">Rp 15.000.000</span></p>
                    <div class="text-right">
                        <button class="px-4 py-2 rounded-full bg-gray-400 text-white text-sm font-medium cursor-not-allowed shadow-md" disabled>
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-gray-900 text-gray-300 mt-16 px-6 py-10">
        </footer>
    </body>
</html>
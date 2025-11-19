-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 19, 2025 at 03:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username_admin` varchar(30) NOT NULL,
  `email` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role` enum('pengelola','pemerintah') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin1', 'admin@gmail.com', '$2y$10$DdEBSQYuhmqtZAe0eoUrVOxsAKy8uuTkOUM2aQ51bNEbAPmvN72H6', 'pengelola', '2025-10-19 11:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int NOT NULL,
  `id_wisata` int NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_kunjungan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `id_wisata`, `tanggal`, `jumlah_kunjungan`) VALUES
(1, 1, '2025-10-01', 40),
(2, 1, '2025-10-02', 60);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int NOT NULL,
  `id_wisata` int NOT NULL,
  `id_user` int NOT NULL,
  `no_pesanan` varchar(10) NOT NULL,
  `harga_tiket` int NOT NULL,
  `jumlah` int NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int NOT NULL,
  `id_wisata` int NOT NULL,
  `id_user` int NOT NULL,
  `rate` int NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`) VALUES
(1, 'fadilah', 'fad123', 'fadilah@gmail.com', '$2y$10$DGR8WGitZZgPh4yGBRyr4OObxEjzQFr8rgnaso9Si8zlthiEOrE42'),
(2, 'upin', 'upin', 'upin123@gmail.com', '$2y$10$tb.orgP5O8ig91sXk6ZLDuqflVpp09p.BxFxHmXvANlWq1hJ1fswS');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int NOT NULL,
  `id_admin` int NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `kategori` enum('edukasi','alam','rekreasi','kuliner') NOT NULL,
  `harga_weekday` int NOT NULL,
  `harga_weekend` int NOT NULL,
  `deskripsi` text NOT NULL,
  `fasilitas` text NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_admin`, `nama_wisata`, `kategori`, `harga_weekday`, `harga_weekend`, `deskripsi`, `fasilitas`, `lokasi`, `gambar`) VALUES
(1, 1, 'Owabong Waterpark', 'rekreasi', 25000, 30000, 'Nikmati keseruan di waterpark terbesar Purbalingga! Owabong menawarkan berbagai wahana air seru seperti kolam arus, ember tumpah, dan waterboom, lengkap dengan area bermain, tempat makan, dan penginapan. Cocok untuk liburan keluarga.', '', 'Bojongsari, Purbalingga', 'owabong.jpeg'),
(5, 1, 'Situ Tirta Marta', 'alam', 5000, 7000, 'Rasakan ketenangan dan kesejukan danau alami Situ Tirta Marta. Cocok untuk piknik santai, memancing, atau sekadar duduk menikmati pemandangan hijau yang memanjakan mata. Spot foto Instagramable siap membuat feed-mu makin cantik!', '', 'Kutasari, Purbalingga', 'situ_tirta.jpeg'),
(6, 1, 'Golaga - Goa Lawa Purbalingga', 'alam', 20000, 25000, 'Jelajahi keindahan alam bawah tanah di Goa Lawa Purbalingga, gua alami hasil aliran lava purba di kaki Gunung Slamet. Dengan stalaktit dan stalagmit yang menakjubkan, pencahayaan warna-warni, serta spot foto estetik, tempat ini cocok untuk kamu yang suka petualangan sekaligus ingin menikmati suasana sejuk khas pegunungan.', '', 'Karangreja, Purbalingga', 'golaga.jpeg'),
(7, 1, 'Bromo', 'alam', 5, 4, '', '', 'Jawa Timur', 'bromo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username_admin` (`username_admin`),
  ADD UNIQUE KEY `no_hp` (`email`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`) USING BTREE,
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD UNIQUE KEY `no_pesanan` (`no_pesanan`),
  ADD KEY `fk_pesanan_wisata` (`id_wisata`),
  ADD KEY `fk_pesanan_user` (`id_user`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_wisata` (`id_wisata`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `no_hp` (`email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `fk_wisata_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_wisata` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `fk_wisata_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

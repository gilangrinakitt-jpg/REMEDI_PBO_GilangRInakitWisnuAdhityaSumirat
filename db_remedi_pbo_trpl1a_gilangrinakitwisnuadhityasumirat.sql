-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2026 at 01:58 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_remedi_pbo_trpl1a_gilangrinakitwisnuadhityasumirat`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_reservasi`
--

CREATE TABLE `table_reservasi` (
  `id_reservasi` int NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `durasi_jam` int NOT NULL,
  `tarif_dasar_per_jam` decimal(12,2) NOT NULL,
  `jenis_paket` enum('reguler','premium','event') NOT NULL,
  `tipe_background` varchar(100) DEFAULT NULL,
  `cetak_foto_lembar` int DEFAULT NULL,
  `kuota_talent_orang` int DEFAULT NULL,
  `layanan_makeup` enum('Ya','Tidak') DEFAULT NULL,
  `nama_lokasi_luar` varchar(150) DEFAULT NULL,
  `biaya_transportasi_tim` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_reservasi`
--

INSERT INTO `table_reservasi` (`id_reservasi`, `nama_pelanggan`, `tanggal_booking`, `durasi_jam`, `tarif_dasar_per_jam`, `jenis_paket`, `tipe_background`, `cetak_foto_lembar`, `kuota_talent_orang`, `layanan_makeup`, `nama_lokasi_luar`, `biaya_transportasi_tim`) VALUES
(1, 'Andi Saputra', '2026-07-01', 2, 100000.00, 'reguler', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Budi Santoso', '2026-07-02', 3, 100000.00, 'reguler', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', '2026-07-03', 1, 100000.00, 'reguler', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Dewi Anggraini', '2026-07-04', 2, 100000.00, 'reguler', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Eko Prasetyo', '2026-07-05', 4, 100000.00, 'reguler', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Farhan Maulana', '2026-07-06', 2, 100000.00, 'reguler', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Gina Permata', '2026-07-07', 3, 100000.00, 'reguler', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Hadi Wijaya', '2026-07-08', 2, 150000.00, 'premium', 'Studio Putih', 10, NULL, NULL, NULL, NULL),
(9, 'Indah Puspita', '2026-07-09', 3, 150000.00, 'premium', 'Vintage', 15, NULL, NULL, NULL, NULL),
(10, 'Joko Susilo', '2026-07-10', 2, 150000.00, 'premium', 'Minimalis', 8, NULL, NULL, NULL, NULL),
(11, 'Karin Amelia', '2026-07-11', 4, 150000.00, 'premium', 'Outdoor', 20, NULL, NULL, NULL, NULL),
(12, 'Lutfi Hakim', '2026-07-12', 1, 150000.00, 'premium', 'Hitam Elegan', 5, NULL, NULL, NULL, NULL),
(13, 'Maya Sari', '2026-07-13', 3, 150000.00, 'premium', 'Klasik', 12, NULL, NULL, NULL, NULL),
(14, 'Nanda Putri', '2026-07-14', 2, 150000.00, 'premium', 'Modern', 10, NULL, NULL, NULL, NULL),
(15, 'Oki Ramadhan', '2026-07-15', 5, 250000.00, 'event', NULL, NULL, 20, 'Ya', 'Semarang', 500000.00),
(16, 'Putri Aulia', '2026-07-16', 6, 250000.00, 'event', NULL, NULL, 30, 'Tidak', 'Solo', 700000.00),
(17, 'Qori Ahmad', '2026-07-17', 4, 250000.00, 'event', NULL, NULL, 15, 'Ya', 'Yogyakarta', 450000.00),
(18, 'Rina Kartika', '2026-07-18', 8, 250000.00, 'event', NULL, NULL, 50, 'Ya', 'Magelang', 850000.00),
(19, 'Satria Nugraha', '2026-07-19', 7, 250000.00, 'event', NULL, NULL, 40, 'Tidak', 'Salatiga', 600000.00),
(20, 'Tia Maharani', '2026-07-20', 5, 250000.00, 'event', NULL, NULL, 25, 'Ya', 'Kendal', 550000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_reservasi`
--
ALTER TABLE `table_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_reservasi`
--
ALTER TABLE `table_reservasi`
  MODIFY `id_reservasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

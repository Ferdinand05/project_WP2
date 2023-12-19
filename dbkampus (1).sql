-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 12:44 PM
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
-- Database: `dbkampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `telepon` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `telepon`) VALUES
('19220032', 'Ferdinand', 'Jl.H.Holil, Kreo ,Larangan', '089762312'),
('19220033', 'Dwiroro', 'jl. h pule, mencong selatan, jakarta barat', '081267823'),
('19220432', 'Nanang', 'Seskoal, Cipulir', '023188722'),
('19221224', 'Dzamir', 'Pesanggrahan , jl muchtar raya no 63', '081267865'),
('19221434', 'Wagyu Pangestu', 'Pondok Surya, Karang tengah, Tangerang', '081234521');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matkul` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `nama_matkul` varchar(50) NOT NULL,
  `dosen_matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matkul`, `nama_matkul`, `dosen_matkul`) VALUES
('AK', 'Akuntansi & Praktikhbbjb,m,m,m', 'bu Murniyati'),
('CB', 'Character Building', 'pak Kemal Al-Kindi'),
('PSBO', 'Pemrograman Sistem Berorientasi Objek', 'Bu Indah'),
('SO', 'Sistem Operasi', 'Pak Arfan'),
('ST', 'Statistika', 'pak Arif'),
('WP2', 'WEB PROGRAMMING 2', 'PAK EKO');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int NOT NULL,
  `nim_mahasiswa` char(10) NOT NULL,
  `id_matkul` char(5) NOT NULL DEFAULT '',
  `nilai_uts` float DEFAULT NULL,
  `nilai_uas` float DEFAULT NULL,
  `nilai_tugas` float DEFAULT NULL,
  `rata_rata` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nim_mahasiswa`, `id_matkul`, `nilai_uts`, `nilai_uas`, `nilai_tugas`, `rata_rata`) VALUES
(1, '19220032', 'WP2', 85, 80, 100, 88.333333333333),
(2, '19220033', 'PSBO', 80, 80, 100, 86.666666666667),
(3, '19220432', 'SO', 95, 85, 100, 93.333333333333),
(4, '19221434', 'AK', 66, 40, 95, 67);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `plain_password` varchar(50) NOT NULL,
  `no_telp` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `plain_password`, `no_telp`) VALUES
(1, 'ferdi', '$2y$10$elOla0bWU1sHbQ6IP16hWebjMG6LUqEu5UFcjzXHVgqUbEyG7tb0a', 'ferdi123', '089231245'),
(2, 'tyand', '$2y$10$xmMqL/ALseIH.Xpt9FVQTOWluvb9NyM1NpJdMCr3gM/LiA1QPFXv6', 'tyand123', '089235672'),
(3, 'bayu', '$2y$10$qAaPJlr/N0rKb0fnZ4VXmuHELoVQJlaI0U8iAdotPTSoFiF0n9bBq', 'bayu123', '02134578212'),
(4, 'wahyu', '$2y$10$aGflPhvmSdkS4MFyGdFCUOxvXasVpFnHshDZQfXzAbpKLrDZbBjPu', 'wahyu123', '08137829312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2025 at 07:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id` int NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nis_nip` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `sebagai` enum('guru','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_sekolah`
--

INSERT INTO `data_sekolah` (`id`, `nama`, `nis_nip`, `kelas`, `jenis_kelamin`, `jurusan`, `sebagai`) VALUES
(5, 'Download', '25002', 'XII', 'Perempuan', 'TP', 'siswa'),
(6, 'Goggins', '25003', 'XII', 'Laki-laki', 'RPL', 'guru'),
(7, 'Ozi badiatul', '24003', 'XI', 'Laki-laki', 'RPL', 'siswa'),
(8, 'Fawwaz izzat', '24005', 'XI', 'Laki-laki', 'RPL', 'siswa'),
(9, 'Jhon Cena', '25007', 'X', 'Laki-laki', 'DPIB', 'guru'),
(11, 'Eko', '24006', 'XII', 'Laki-laki', 'DPIB', 'guru'),
(12, 'Tohir', '24007', 'X', 'Perempuan', 'TITL', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis/nip` (`nis_nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 06:04 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gg`
--

-- --------------------------------------------------------

--
-- Table structure for table `rekrut0`
--

CREATE TABLE `rekrut0` (
  `id` int(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `untuk` varchar(255) NOT NULL,
  `sampah_dari` tinyint(1) NOT NULL DEFAULT 0,
  `sampah_untuk` tinyint(1) NOT NULL DEFAULT 0,
  `seen_dari` tinyint(1) NOT NULL DEFAULT 0,
  `seen_untuk` tinyint(1) NOT NULL DEFAULT 0,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `no` int(32) NOT NULL,
  `telepon` int(32) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `gaji` int(32) NOT NULL,
  `informasi` varchar(255) NOT NULL,
  `balasan` enum('terima','tolak') DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `hari` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekrut0`
--

INSERT INTO `rekrut0` (`id`, `dari`, `untuk`, `sampah_dari`, `sampah_untuk`, `seen_dari`, `seen_untuk`, `nama`, `alamat`, `provinsi`, `kota`, `no`, `telepon`, `email`, `posisi`, `jam`, `gaji`, `informasi`, `balasan`, `file`, `created_at`, `hari`) VALUES
(7, 'emailperusahaan@gmail.com', 'apaiya@gmail.com', 0, 0, 0, 0, 'Perusahaan', 'Alamat', 'Provinsi', 'Kota', 122211, NULL, 'emailperusahaan@gmail.com', 'Asisten dari asistennya OB', '5', 2900000, 'tidak ada informasi tambahan', NULL, NULL, '2022-05-03 06:33:08', 'Setiap hari'),
(8, 'berusaha@gmail.com', 'ayah@gmail.com', 0, 0, 0, 0, 'PT Berusaha', 'Cari sendiri, usaha sana', 'Usaha', 'Usaha', 12313514, NULL, 'berusaha@gmail.com', 'Usaha dulu', '8', 8000000, 'Tidak ada yg perlu saya tambahkan, usaha saja kalian', NULL, NULL, '2022-05-09 19:20:15', 'Senin-Jumat'),
(9, 'berusaha@gmail.com', 'apaiya@gmail.com', 0, 1, 0, 0, 'PT Berusaha', 'Cari sendiri', 'Cari sendiri', 'Cari Sendiri', 120319283, NULL, 'berusaha@gmail.com', 'usaha', '8', 2000000, 'Tidak ada tambahan, cukup usaha saja', NULL, NULL, '2022-05-09 19:47:29', 'Sabtu-selasa'),
(10, 'berusaha@gmail.com', 'apaiya@gmail.com', 0, 0, 0, 0, 'PT Berusaha', 'Cari sendiri', 'Cari sendiri', 'Cari Sendiri', 120319283, NULL, 'berusaha@gmail.com', 'usaha', '8', 2000000, 'Tidak ada tambahan, cukup usaha saja', NULL, NULL, '2022-05-09 19:47:29', 'Sabtu-selasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rekrut0`
--
ALTER TABLE `rekrut0`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rekrut0`
--
ALTER TABLE `rekrut0`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

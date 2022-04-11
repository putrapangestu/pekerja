-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 03:51 AM
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
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `no` int(32) NOT NULL,
  `telepon` int(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kata` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `jam` int(32) NOT NULL,
  `gaji` int(32) NOT NULL,
  `informasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekrut0`
--

INSERT INTO `rekrut0` (`id`, `dari`, `untuk`, `nama`, `alamat`, `provinsi`, `kota`, `no`, `telepon`, `email`, `kata`, `posisi`, `jam`, `gaji`, `informasi`) VALUES
(1, 'iniemail@gmail.com', 'apaiya@gmail.com', 'Ini Perusahaan', 'Jl. doang enggak jadian', 'Jawa Timur', 'Malang', 808080, 88888888, 'iniemail@gmail.com', 'kata saya begini', 'OB', 1000, 100000, 'Informasinya begini'),
(2, 'iniemail@gmail.com', 'candra@gmail.com', 'Ini Perusahaan', 'jl. doang enggak jadian', 'Jawa Timur', 'Malang', 808080, 88888888, 'iniemail@gmail.com', 'Kata saya begini', 'OB', 1000, 100000, 'Informasinya begini'),
(3, 'turucompany@turu.id', 'apaiya@gmail.com', 'Turu Company', 'Jl. di mimpi', 'Kamar', 'Kasur', 8, 123, 'turucompany@turu.id', 'turu', 'CEO', 1, 999999999, 'Mending turu');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

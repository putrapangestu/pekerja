-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 02:23 AM
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
-- Database: `gawe`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama` varchar(256) NOT NULL,
  `user` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `user`, `email`, `password`) VALUES
('jeje', 'pekerja', 'puytara@gmail.com', 'password'),
('layla', 'pekerja', 'puytara@gmail.com', 'password'),
('layla', 'pekerja', 'puytara@gmail.com', 'password'),
('jajajaj', 'perusahaan', 'pap@gmail.com', 'PUTRAPUTRA'),
('layla', 'perusahaan', 'adasda@gmail.com', 'putraputra'),
('layla', 'perusahaan', 'adasda@gmail.com', 'putraputra'),
('lali', 'pekerja', 'kakak@gmail.com', 'password'),
('ka', 'perusahaan', 'kalau@gmail.com', 'password'),
('ka', 'pekerja', 'jika@gmail.com', '$2y$10$9shzj93Sqc3ppuaK/XVcEenQRcJIFHIiFTBUm0lNbxpE9fu40fk2y'),
('lllll', 'pekerja', 'apaiya@gmail.com', '$2y$10$sAda5ZWDTmqQL76zVjS7oersWuKWxPp.txlrirqOh5Kk397k7ZzuG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2022 pada 09.02
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

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
-- Struktur dari tabel `rekrut`
--

CREATE TABLE `rekrut` (
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `provinsi` varchar(500) NOT NULL,
  `kota` varchar(500) NOT NULL,
  `no` int(255) NOT NULL,
  `telpon` int(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `kata` varchar(500) NOT NULL,
  `posisi` varchar(500) NOT NULL,
  `jam` int(255) NOT NULL,
  `gaji` int(255) NOT NULL,
  `informasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekrut`
--

INSERT INTO `rekrut` (`nama`, `alamat`, `provinsi`, `kota`, `no`, `telpon`, `email`, `kata`, `posisi`, `jam`, `gaji`, `informasi`) VALUES
('ahmad', 'mana aja', 'malang', 'batu', 81212121, 120129012, 'iyadah@gmail.com', 'mungkin', 'mana aja', 12, 1000, 'gk tau dah pokoknya'),
('hasyim', 'wdd', 'mana aja', 'foaohfa', 1111111, 1212121212, 'redhaarthaseptaviano2@gmail.com', 'oewfohawfh', 'mana aja', 12, 1222222, 'wjeofaowf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 07:48 AM
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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pekerja` varchar(100) NOT NULL,
  `ultah` date DEFAULT NULL,
  `telepon` int(15) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `keterangan` enum('memiliki pekerjan','belum memiliki pekerjaan') NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `lulusansd` date DEFAULT NULL,
  `sd` varchar(255) NOT NULL,
  `lulusansmp` date DEFAULT NULL,
  `smp` varchar(255) NOT NULL,
  `lulusansma` date DEFAULT NULL,
  `sma` varchar(255) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `prestasi` varchar(500) NOT NULL,
  `pengalaman` varchar(500) NOT NULL,
  `kemampuan` varchar(500) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`foto`, `nama`, `email`, `pekerja`, `ultah`, `telepon`, `alamat`, `kota`, `keterangan`, `twitter`, `facebook`, `google`, `link`, `instagram`, `lulusansd`, `sd`, `lulusansmp`, `smp`, `lulusansma`, `sma`, `bio`, `prestasi`, `pengalaman`, `kemampuan`, `hasil`) VALUES
('1647492478img-1.png', 'Nelle Maxwell', 'nmaxwell@mail.com', 'freelance', '2022-03-21', 0, '', '', 'memiliki pekerjan', '', '', '', '', '', NULL, '', NULL, '', NULL, '', '', '', '', '', ''),
('1647850501img-3.png', 'Nelle Maxwell', 'nmaxwell@mail.com', 'parttime', '2022-03-03', 89898389, 'St kalahan 929', 'St kalahan 929', 'belum memiliki pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', 'sADSADASD', 'parttime', 'https://www.instagram.com/user', NULL, 'SD', NULL, 'SMP', NULL, 'SMA/SMK', 'randmul 18 februari 2022 kepanjen malang', 'juara 1 lomba coding tingkat rt', 'pernah membuat web desa', 'mengoding tanpa melihat', '1647850501img-1.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

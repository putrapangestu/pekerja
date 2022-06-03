-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 04:58 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `admin`, `created_at`, `updated_at`) VALUES
(2, 'Admin Gawe.Id', 'admin@gawe.id', '$2y$10$aEE/wDMAb.WFQp.BiYYize9it594Ri0SxyLBkdvdMd3GYj/fNrxEK', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) NOT NULL,
  `subjek` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL,
  `seen` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `subjek`, `label`, `name`, `email`, `pesan`, `seen`, `created_at`) VALUES
(1, NULL, NULL, 'ddd', 'fariscoli@gmail.com', 'asasa', 0, '2022-06-02 04:10:52'),
(2, NULL, NULL, 'dihei', 'fariscoli@gmail.com', 'asdasd', 0, '2022-06-02 04:10:52'),
(3, NULL, NULL, 'ddd', 'fariscoli@gmail.com', 'conat', 0, '2022-06-02 04:10:52'),
(4, NULL, NULL, 'nan', 'passa@gmail.com', 'password\r\nasdkjaskdjasodjpas', 0, '2022-06-02 04:10:52'),
(5, NULL, NULL, 'nan', 'passa@gmail.com', 'password\r\nasdkjaskdjasodjpas', 0, '2022-06-02 04:10:52'),
(6, NULL, NULL, 'asds', 'apspasd@gmail.com', 'asdjaskjdksjad', 0, '2022-06-02 04:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('cobasaja@gmail.com', '$2y$10$c2lJSx.jFaUeok4VV55paOyRk5AXd3UfAojvS.3MNIB3pH/1ZU/US', '2022-05-25 05:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekrut`
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
  `hari` varchar(255) NOT NULL,
  `jam` int(255) NOT NULL,
  `gaji` int(255) NOT NULL,
  `informasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekrut`
--

INSERT INTO `rekrut` (`nama`, `alamat`, `provinsi`, `kota`, `no`, `telpon`, `email`, `kata`, `posisi`, `hari`, `jam`, `gaji`, `informasi`) VALUES
('ahmad', 'mana aja', 'malang', 'batu', 81212121, 120129012, 'iyadah@gmail.com', 'mungkin', 'mana aja', '', 12, 1000, 'gk tau dah pokoknya'),
('hasyim', 'wdd', 'mana aja', 'foaohfa', 1111111, 1212121212, 'redhaarthaseptaviano2@gmail.com', 'oewfohawfh', 'mana aja', '', 12, 1222222, 'wjeofaowf');

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
  `star_dari` tinyint(1) NOT NULL DEFAULT 0,
  `star_untuk` tinyint(1) NOT NULL DEFAULT 0,
  `notif_dari` tinyint(1) NOT NULL DEFAULT 0,
  `notif_untuk` tinyint(1) NOT NULL DEFAULT 0,
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

INSERT INTO `rekrut0` (`id`, `dari`, `untuk`, `sampah_dari`, `sampah_untuk`, `seen_dari`, `seen_untuk`, `star_dari`, `star_untuk`, `notif_dari`, `notif_untuk`, `nama`, `alamat`, `provinsi`, `kota`, `no`, `telepon`, `email`, `posisi`, `jam`, `gaji`, `informasi`, `balasan`, `file`, `created_at`, `hari`) VALUES
(7, 'emailperusahaan@gmail.com', 'apaiya@gmail.com', 0, 0, 0, 1, 0, 0, 0, 0, 'Perusahaan', 'Alamat', 'Provinsi', 'Kota', 122211, NULL, 'emailperusahaan@gmail.com', 'Asisten dari asistennya OB', '5', 2900000, 'tidak ada informasi tambahan', NULL, NULL, '2022-05-03 06:33:08', 'Setiap hari'),
(8, 'berusaha@gmail.com', 'ayah@gmail.com', 0, 0, 0, 0, 0, 0, 0, 1, 'PT Berusaha', 'Cari sendiri, usaha sana', 'Usaha', 'Usaha', 12313514, NULL, 'berusaha@gmail.com', 'Usaha dulu', '8', 8000000, 'Tidak ada yg perlu saya tambahkan, usaha saja kalian', NULL, NULL, '2022-05-09 19:20:15', 'Senin-Jumat'),
(9, 'berusaha@gmail.com', 'apaiya@gmail.com', 0, 1, 1, 1, 0, 0, 0, 0, 'PT Berusaha', 'Cari sendiri', 'Cari sendiri', 'Cari Sendiri', 120319283, NULL, 'berusaha@gmail.com', 'usaha', '8', 2000000, 'Tidak ada tambahan, cukup usaha saja', NULL, NULL, '2022-05-09 19:47:29', 'Sabtu-selasa'),
(10, 'berusaha@gmail.com', 'apaiya@gmail.com', 0, 0, 0, 1, 0, 1, 0, 0, 'PT Berusaha', 'Cari sendiri', 'Cari sendiri', 'Cari Sendiri', 120319283, NULL, 'berusaha@gmail.com', 'usaha', '8', 2000000, 'Tidak ada tambahan, cukup usaha saja', NULL, NULL, '2022-05-09 19:47:29', 'Sabtu-selasa');

-- --------------------------------------------------------

--
-- Table structure for table `tag_kategoris`
--

CREATE TABLE `tag_kategoris` (
  `tag` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag_kategoris`
--

INSERT INTO `tag_kategoris` (`tag`, `kategori`, `email`) VALUES
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, ''),
(NULL, NULL, 'nana@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, 'sukamamamuda@gmail.com'),
(NULL, NULL, 'bapakrandi@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, 'ayah@gmail.com'),
('asd', 'asdas', NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, 'apaiya@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, 'ibu@gmail.com'),
(NULL, NULL, 'ayah@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, 'apaiya@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, 'pekerja@gmail.com'),
(NULL, NULL, 'pekerja@gmail.com'),
(NULL, NULL, 'perusahaan@gmail.com'),
(NULL, NULL, 'pekerja@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, 'admin@gawe.id'),
(NULL, NULL, 'cob@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, 'perusahaan123@gmail.com'),
(NULL, NULL, 'apaiya@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, 'apaiya@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, 'ayah@gmail.com'),
(NULL, NULL, 'cobasaja@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, 'lupa123@gmail.com'),
(NULL, NULL, 'berusaha@gmail.com'),
(NULL, NULL, 'ptberusaha@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, 'usahakerja@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, 'lupapassword@gmail.com'),
(NULL, NULL, 'lupapassword@gmail.com'),
(NULL, NULL, 'lupapassword@gmail.com'),
(NULL, NULL, 'asa@gmail.com'),
(NULL, NULL, 'asa@gmail.com'),
(NULL, NULL, 'pas@gmail.com'),
(NULL, NULL, 'nama@gmail.com'),
(NULL, NULL, 'asa@gmail.com'),
(NULL, NULL, 'asa@gmail.com'),
(NULL, NULL, 'lupapassword@gmail.com'),
(NULL, NULL, 'lupapassword123@gmail.com'),
(NULL, NULL, 'lupapasswordya@gmail.com'),
(NULL, NULL, 'tes123@gmail.com'),
(NULL, NULL, 'login@gmail.com'),
(NULL, NULL, 'saja@gmail.com'),
(NULL, NULL, 'berusaha@gmail.com'),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL),
(NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pekerja` varchar(100) DEFAULT NULL,
  `ultah` date DEFAULT NULL,
  `telepon` bigint(20) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `keterangan` enum('Memiliki Pekerjaan','Belum Memiliki Pekerjaan') DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `lulusansd` date DEFAULT NULL,
  `sd` varchar(255) DEFAULT NULL,
  `lulusansmp` date DEFAULT NULL,
  `smp` varchar(255) DEFAULT NULL,
  `lulusansma` date DEFAULT NULL,
  `sma` varchar(255) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `prestasi` varchar(500) DEFAULT NULL,
  `pengalaman` varchar(500) DEFAULT NULL,
  `kemampuan` varchar(500) DEFAULT NULL,
  `hasil` varchar(255) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `populer` bigint(20) DEFAULT NULL,
  `blokir` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `user`, `email_verified_at`, `remember_token`, `foto`, `name`, `email`, `pekerja`, `ultah`, `telepon`, `alamat`, `bidang`, `keterangan`, `twitter`, `facebook`, `google`, `link`, `instagram`, `lulusansd`, `sd`, `lulusansmp`, `smp`, `lulusansma`, `sma`, `bio`, `prestasi`, `pengalaman`, `kemampuan`, `hasil`, `lat`, `lng`, `created_at`, `updated_at`, `populer`, `blokir`) VALUES
(23, '$2y$10$0CRSKB63Oh9vmTDF5VSNs.RFe/NfFKcQAluiRL7MXISejUZjKB9Jy', 'Pekerja', NULL, 'xu0XcOjwgGpzxxoS2XLay9RVY396W2PYPkpuI6dc1B4hdLIVpgQL8Rd8T3eU', '1653879719download(3).jpg', 'Anak', 'apaiya@gmail.com', '...', NULL, 8098398, 'aklskajsd', 'IT', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-18 18:53:49', '2022-05-25 01:42:51', 0, 0),
(24, '$2y$10$HTjcFuEzGxNt1UdneexTk.ihQkQ27KNUJpwfN5BwzMEDRVPhNV44W', 'Pekerja', NULL, NULL, NULL, 'Ayah', 'ayah@gmail.com', 'fulltime', NULL, 9909092, 'Malang', 'BURUH', 'Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-18 23:39:24', '2022-05-18 23:39:24', 0, 0),
(25, '$2y$10$Xww2GY0diUN54A2rne8FEeVu4nq.UbiD3gBBa2zXMjS344V2H3uJi', 'Pekerja', NULL, NULL, '1653277392team-1-img-3.jpg', 'coba', 'cobasaja@gmail.com', '...', NULL, NULL, NULL, NULL, 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-19 01:02:16', '2022-05-25 01:35:59', 0, 0),
(26, '$2y$10$8ice5WlRVPZQnApThh4ABOQwbY.pKyay7zeQnFX/9t0HuAJvCljJq', 'Pekerja', NULL, NULL, NULL, 'lupa', 'lupa123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-05-23 01:01:09', '2022-05-23 01:01:09', 0, 0),
(28, '$2y$10$dK0BgX4vVD0TG9aWY7dzkO8pf77BGfGTFw4XgEdVIXgxyC10Y9Bd.', 'Perusahaan', NULL, NULL, NULL, 'PT BERUSAHA', 'ptberusaha@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13.698683472419601, 100.58742041844195, '2022-05-23 01:47:56', '2022-05-23 01:47:56', 0, 0),
(29, '$2y$10$AbEb70S4s/wNsf40S.McIOGwLv.Z0SAqreS0c7nHn/rAewAbMX.Ku', 'Perusahaan', NULL, NULL, 'nopic.jpg', 'PT USAHA', 'usahakerja@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-24 21:22:01', '2022-05-24 21:22:01', NULL, 0),
(31, '$2y$10$51A3R.67n4WwiDl1vtsSMekduP9.L.2BGsEblHdAOs.kQd2IOlbhq', 'Pekerja', NULL, NULL, 'nopic.jpg', 'as', 'asa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 08:12:24', '2022-05-25 08:12:24', NULL, 0),
(32, '$2y$10$QLVV7WAKxegCsAeoD/Gn7ONQ9VCaJ.LuW3tNev0/OsRgkcLSFToom', 'Pekerja', NULL, NULL, 'nopic.jpg', 'lupapassword', 'lupapassword@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 09:11:42', '2022-05-25 09:11:42', NULL, 0),
(33, '$2y$10$.hCOoqZcgnq.UWU1bAmIU.EaqOuAwW7QuRIqthy5LevvlHSRNvfU.', 'Pekerja', NULL, NULL, 'nopic.jpg', 'lupapassword', 'lupapassword123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 09:22:29', '2022-05-25 09:22:29', NULL, 0),
(34, '$2y$10$YuJ4xEOmErxtAfOYs1tGOeUv53ViO/bUTh9botMzmfnlFybJdVOF.', 'Pekerja', NULL, NULL, 'nopic.jpg', 'lupapasswordsaja', 'lupapasswordya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 09:24:46', '2022-05-25 09:24:46', NULL, 0),
(35, '$2y$10$oyVgOiEQ8IsZgAtMKxtccOSIAh.U5InS/OQ4gyRsri52Lase4cbPy', 'Pekerja', NULL, 'cRwf1qvooz77qC88YMV3mxCDthhkIvssycQYaOEdiqIo8fMDNE9uVLjTT3ji', 'nopic.jpg', 'tes', 'tes123@gmail.com', 'freelance', NULL, 8202000, 'ngijen', 'ormas', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 09:34:58', '2022-05-25 18:23:33', NULL, 0),
(36, '$2y$10$YH2.DTh4rjGmCLIo4GmbdOOzK8zNy9hIET0oM1lt0bQ3/S/jQKxeG', 'Pekerja', NULL, NULL, '1653883885images(2).jpg', 'login', 'login@gmail.com', 'parttime', NULL, 89616709191, 'malang', 'PENARI', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 09:53:11', '2022-05-25 09:53:11', NULL, 0),
(37, '$2y$10$RTINogFgVJ4N7fzjJ0zIdunA.3h2M6.nD4g.YBB5trZJEkaNzl6Qu', 'Pekerja', NULL, NULL, 'nopic.jpg', 'saja', 'saja@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 18:13:24', '2022-05-25 18:13:24', NULL, 0),
(38, '$2y$10$F.bKwtMWBKRzalErvABmTOwmGonnmFoNdAKyydBmR.6dAcKr.J1qy', 'Perusahaan', NULL, NULL, 'nopic.jpg', 'berusaha', 'berusaha@gmail.com', NULL, NULL, 90939083, 'kjasjdkjk', NULL, NULL, 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3.995847932063899, 114.95916185318377, '2022-05-26 16:35:05', '2022-05-26 16:35:05', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dari` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `untuk` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `dari`, `untuk`, `created_at`, `updated_at`) VALUES
(34, 'berusaha@gmail.com', 'login@gmail.com', NULL, NULL),
(35, 'berusaha@gmail.com', 'tes123@gmail.com', NULL, NULL),
(37, 'berusaha@gmail.com', 'apaiya@gmail.com', NULL, NULL),
(38, 'berusaha@gmail.com', 'login@gmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rekrut0`
--
ALTER TABLE `rekrut0`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rekrut0`
--
ALTER TABLE `rekrut0`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

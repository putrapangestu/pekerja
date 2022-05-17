-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 08:44 AM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin Gawe.Id', 'admin@gawe.id', '$2y$10$.SblDhGd66pwk.piDQQ7dey68rrjujzlyV9Iv8R.DV5rHnH4nUOhq', '2022-05-10 03:35:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `pesan`) VALUES
('ddd', 'fariscoli@gmail.com', 'asasa'),
('dihei', 'fariscoli@gmail.com', 'asdasd'),
('ddd', 'fariscoli@gmail.com', 'conat');

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `foto` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pekerja` varchar(100) DEFAULT NULL,
  `ultah` date DEFAULT NULL,
  `telepon` int(100) DEFAULT NULL,
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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`foto`, `name`, `email`, `pekerja`, `ultah`, `telepon`, `alamat`, `bidang`, `keterangan`, `twitter`, `facebook`, `google`, `link`, `instagram`, `lulusansd`, `sd`, `lulusansmp`, `smp`, `lulusansma`, `sma`, `bio`, `prestasi`, `pengalaman`, `kemampuan`, `hasil`, `created_at`, `updated_at`) VALUES
(NULL, 'ibu', 'ibu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 03:19:48', '2022-04-22 03:19:48'),
('1650597804images.jpg', 'ayah', 'ayah@gmail.com', 'freelance', '2022-04-22', 1231231, 'malang', 'pemancing', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 03:22:32', '2022-04-22 03:23:24'),
(NULL, 'putra', 'apaiya@gmail.com', 'freelance', NULL, 1231231, 'panjen', 'gamer', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 03:23:58', '2022-04-22 03:24:26'),
(NULL, 'perusahaan', 'perusahaan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-10 01:48:15', '2022-05-10 01:48:15'),
(NULL, 'pekerja', 'pekerja@gmail.com', 'freelance', '2022-05-05', 2909209, 'malang', 'PEMANCING', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-10 01:50:13', '2022-05-10 01:51:42'),
(NULL, 'Admin Gawe.Id', 'admin@gawe.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-11 03:52:50', '2022-05-11 03:52:50'),
(NULL, 'coba', 'cob@gmail.com', 'freelance', NULL, NULL, NULL, NULL, 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-12 03:48:40', '2022-05-12 04:02:22'),
(NULL, 'perusahaan tata krama', 'perusahaan123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-17 04:33:34', '2022-05-17 04:33:34');

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
(9, 'berusaha@gmail.com', 'apaiya@gmail.com', 0, 1, 0, 1, 0, 0, 0, 0, 'PT Berusaha', 'Cari sendiri', 'Cari sendiri', 'Cari Sendiri', 120319283, NULL, 'berusaha@gmail.com', 'usaha', '8', 2000000, 'Tidak ada tambahan, cukup usaha saja', NULL, NULL, '2022-05-09 19:47:29', 'Sabtu-selasa'),
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
(NULL, NULL, 'perusahaan123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'ibu', 'Pekerja', 'ibu@gmail.com', NULL, '$2y$10$ViW4oJHmFmyWAbCnuHGJZuNTG3Bm9qHP7Ldww2LWfUgBAK38Qe.gu', NULL, NULL, '2022-04-21 20:19:48', '2022-04-21 20:19:48'),
(14, 'ayah', 'Pekerja', 'ayah@gmail.com', NULL, '$2y$10$9JlKTVZwwHTXfwzMyAK7yedav4zedjttjvZaDH7Ds4RbzEERKB5iW', NULL, NULL, '2022-04-21 20:22:32', '2022-04-21 20:22:32'),
(15, 'putra', 'Pekerja', 'apaiya@gmail.com', NULL, '$2y$10$9QzHtbyxcpw.QEZMRyBi6O1A0CB6EGFlcmgszYY4aQ/EgKESwTWGO', NULL, NULL, '2022-04-21 20:23:59', '2022-04-21 20:23:59'),
(17, 'perusahaan', 'Perusahaan', 'perusahaan@gmail.com', NULL, '$2y$10$mBoP4QHI0.YxAdTNt7Vpd.6.U3u4WUQPKdYnmesbtid.Kt.dfGygq', NULL, NULL, '2022-05-09 18:48:16', '2022-05-09 18:48:16'),
(18, 'pekerja', 'Pekerja', 'pekerja@gmail.com', NULL, '$2y$10$rifvRD9LLc.t.lTrcoyMiudwbIJajwsVOK7y1lXW2jXqKspIQuoQW', NULL, NULL, '2022-05-09 18:50:13', '2022-05-09 18:50:13'),
(19, 'Admin Gawe.Id', 'Admin', 'admin123@gawe.id', NULL, '$2y$10$je8gil0FHF1.9o4jXHnAe.shOW/WWdmxEwDLKjOwPw9H8/KVFaJSK', 1, NULL, '2022-05-10 20:52:51', '2022-05-10 20:52:51'),
(20, 'coba', 'Pekerja', 'cob@gmail.com', NULL, '$2y$10$F.drFzTC3tUIaFmqVwd8Z.xe4aKJr3hnkhz73igX15sgqQtmNzImq', NULL, NULL, '2022-05-11 20:48:41', '2022-05-11 20:48:41'),
(21, 'perusahaan tata krama', 'Perusahaan', 'perusahaan123@gmail.com', NULL, '$2y$10$MqGolSpcufrwKZEkP0aMEecDqN23MIKdQ9TZX0KptwP0pQG6IySeq', NULL, NULL, '2022-05-16 21:33:35', '2022-05-16 21:33:35');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekrut0`
--
ALTER TABLE `rekrut0`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

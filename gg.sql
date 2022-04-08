-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 04:09 AM
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
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pekerja` varchar(100) NOT NULL,
  `ultah` date DEFAULT NULL,
  `telepon` int(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `keterangan` enum('Memiliki Pekerjaan','Belum Memiliki Pekerjaan') NOT NULL,
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

INSERT INTO `profiles` (`foto`, `nama`, `email`, `pekerja`, `ultah`, `telepon`, `alamat`, `bidang`, `keterangan`, `twitter`, `facebook`, `google`, `link`, `instagram`, `lulusansd`, `sd`, `lulusansmp`, `smp`, `lulusansma`, `sma`, `bio`, `prestasi`, `pengalaman`, `kemampuan`, `hasil`) VALUES
('1647492478img-1.png', 'Nelle Maxwell', 'nmaxwell@mail.com', 'freelance', '2022-03-21', 0, '', '', '', '', '', '', '', '', NULL, '', NULL, '', NULL, '', '', '', '', '', ''),
('1647850501img-3.png', 'Nelle Maxwell', 'nmaxwell@mail.com', 'parttime', '2022-03-03', 89898389, 'St kalahan 929', 'St kalahan 929', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', 'sADSADASD', 'parttime', 'https://www.instagram.com/user', NULL, 'SD', NULL, 'SMP', NULL, 'SMA/SMK', 'randmul 18 februari 2022 kepanjen malang', 'juara 1 lomba coding tingkat rt', 'pernah membuat web desa', 'mengoding tanpa melihat', '1647850501img-1.png'),
('1647933724img-1.png', 'afaita', 'apaiya@gmail.com', 'parttime', '2022-03-04', 2392309, 'JL Malng', 'IT', 'Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', 'wwww', 'parttime', 'https://www.instagram.com/user', NULL, 'SD', NULL, 'SMP', NULL, 'SMA/SMK', 'randmul 18 februari 2022 kepanjen malang', 'juara 1 lomba coding tingkat rt', 'pernah membuat web desa', 'mengoding tanpa melihat', '1647933724img-2.png'),
('1648450343PhotoRoom-20220125_100851.png', 'Nelle Maxwell', 'nmaxwell@mail.com', 'parttime', NULL, 897289277, 'St kalahan 929', 'IT', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', 'yt', 'parttime', 'https://www.instagram.com/user', NULL, 'SD', NULL, 'SMP', NULL, 'SMA/SMK', 'randmul 18 februari 2022 kepanjen malang', 'juara 1 lomba coding tingkat rt', 'pernah membuat web desa', 'mengoding tanpa melihat', '1648450344PhotoRoom-20220125_100851.png');

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
  `jam` int(255) NOT NULL,
  `gaji` int(255) NOT NULL,
  `informasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekrut`
--

INSERT INTO `rekrut` (`nama`, `alamat`, `provinsi`, `kota`, `no`, `telpon`, `email`, `kata`, `posisi`, `jam`, `gaji`, `informasi`) VALUES
('ahmad', 'mana aja', 'malang', 'batu', 81212121, 120129012, 'iyadah@gmail.com', 'mungkin', 'mana aja', 12, 1000, 'gk tau dah pokoknya'),
('hasyim', 'wdd', 'mana aja', 'foaohfa', 1111111, 1212121212, 'redhaarthaseptaviano2@gmail.com', 'oewfohawfh', 'mana aja', 12, 1222222, 'wjeofaowf');

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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'putrapangestu', 'Pekerja', 'apaiya@gmail.com', NULL, '$2y$10$4Do0YqAE13xJCnIO7eUlS.wsD7mLt12M54s8gruK00g/9cEIEBFgu', 'nKycczgriiaj2VC5eV4yQCkVQHI4z1ERh7Z5Kfy8nHprDwDTtM5U7vj84qV1', '2022-04-07 00:18:15', '2022-04-07 00:18:15');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

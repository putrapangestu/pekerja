-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2022 pada 05.25
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

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
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`name`, `email`, `pesan`) VALUES
('ddd', 'fariscoli@gmail.com', 'asasa'),
('dihei', 'fariscoli@gmail.com', 'asdasd'),
('ddd', 'fariscoli@gmail.com', 'conat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `profiles`
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
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`foto`, `name`, `email`, `pekerja`, `ultah`, `telepon`, `alamat`, `bidang`, `keterangan`, `twitter`, `facebook`, `google`, `link`, `instagram`, `lulusansd`, `sd`, `lulusansmp`, `smp`, `lulusansma`, `sma`, `bio`, `prestasi`, `pengalaman`, `kemampuan`, `hasil`, `created_at`, `updated_at`) VALUES
(NULL, 'ibu', 'ibu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 03:19:48', '2022-04-22 03:19:48'),
('1650597804images.jpg', 'ayah', 'ayah@gmail.com', 'freelance', '2022-04-22', 1231231, 'malang', 'pemancing', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 03:22:32', '2022-04-22 03:23:24'),
(NULL, 'putra', 'apaiya@gmail.com', 'freelance', NULL, 1231231, 'panjen', 'gamer', 'Belum Memiliki Pekerjaan', 'https://twitter.com/user', 'https://www.facebook.com/user', NULL, NULL, 'https://www.instagram.com/user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-22 03:23:58', '2022-04-22 03:24:26');

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
  `hari` varchar(255) NOT NULL,
  `jam` int(255) NOT NULL,
  `gaji` int(255) NOT NULL,
  `informasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekrut`
--

INSERT INTO `rekrut` (`nama`, `alamat`, `provinsi`, `kota`, `no`, `telpon`, `email`, `kata`, `posisi`, `hari`, `jam`, `gaji`, `informasi`) VALUES
('ahmad', 'mana aja', 'malang', 'batu', 81212121, 120129012, 'iyadah@gmail.com', 'mungkin', 'mana aja', '', 12, 1000, 'gk tau dah pokoknya'),
('hasyim', 'wdd', 'mana aja', 'foaohfa', 1111111, 1212121212, 'redhaarthaseptaviano2@gmail.com', 'oewfohawfh', 'mana aja', '', 12, 1222222, 'wjeofaowf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekrut0`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag_kategoris`
--

CREATE TABLE `tag_kategoris` (
  `tag` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tag_kategoris`
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
(NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'ibu', 'Pekerja', 'ibu@gmail.com', NULL, '$2y$10$ViW4oJHmFmyWAbCnuHGJZuNTG3Bm9qHP7Ldww2LWfUgBAK38Qe.gu', NULL, '2022-04-21 20:19:48', '2022-04-21 20:19:48'),
(14, 'ayah', 'Pekerja', 'ayah@gmail.com', NULL, '$2y$10$9JlKTVZwwHTXfwzMyAK7yedav4zedjttjvZaDH7Ds4RbzEERKB5iW', NULL, '2022-04-21 20:22:32', '2022-04-21 20:22:32'),
(15, 'putra', 'Pekerja', 'apaiya@gmail.com', NULL, '$2y$10$9QzHtbyxcpw.QEZMRyBi6O1A0CB6EGFlcmgszYY4aQ/EgKESwTWGO', NULL, '2022-04-21 20:23:59', '2022-04-21 20:23:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rekrut0`
--
ALTER TABLE `rekrut0`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rekrut0`
--
ALTER TABLE `rekrut0`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

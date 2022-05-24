-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2022 pada 08.42
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
-- Database: `gg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
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
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin Gawe.Id', 'admin@gawe.id', '$2y$10$.SblDhGd66pwk.piDQQ7dey68rrjujzlyV9Iv8R.DV5rHnH4nUOhq', '2022-05-10 03:35:36', NULL);

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
-- Dumping data untuk tabel `rekrut0`
--

INSERT INTO `rekrut0` (`id`, `dari`, `untuk`, `sampah_dari`, `sampah_untuk`, `seen_dari`, `seen_untuk`, `star_dari`, `star_untuk`, `notif_dari`, `notif_untuk`, `nama`, `alamat`, `provinsi`, `kota`, `no`, `telepon`, `email`, `posisi`, `jam`, `gaji`, `informasi`, `balasan`, `file`, `created_at`, `hari`) VALUES
(7, 'emailperusahaan@gmail.com', 'apaiya@gmail.com', 0, 0, 0, 1, 0, 0, 0, 0, 'Perusahaan', 'Alamat', 'Provinsi', 'Kota', 122211, NULL, 'emailperusahaan@gmail.com', 'Asisten dari asistennya OB', '5', 2900000, 'tidak ada informasi tambahan', NULL, NULL, '2022-05-03 06:33:08', 'Setiap hari'),
(8, 'berusaha@gmail.com', 'ayah@gmail.com', 0, 0, 0, 0, 0, 0, 0, 1, 'PT Berusaha', 'Cari sendiri, usaha sana', 'Usaha', 'Usaha', 12313514, NULL, 'berusaha@gmail.com', 'Usaha dulu', '8', 8000000, 'Tidak ada yg perlu saya tambahkan, usaha saja kalian', NULL, NULL, '2022-05-09 19:20:15', 'Senin-Jumat'),
(9, 'berusaha@gmail.com', 'apaiya@gmail.com', 0, 1, 0, 1, 0, 0, 0, 0, 'PT Berusaha', 'Cari sendiri', 'Cari sendiri', 'Cari Sendiri', 120319283, NULL, 'berusaha@gmail.com', 'usaha', '8', 2000000, 'Tidak ada tambahan, cukup usaha saja', NULL, NULL, '2022-05-09 19:47:29', 'Sabtu-selasa'),
(10, 'berusaha@gmail.com', 'apaiya@gmail.com', 0, 0, 0, 1, 0, 1, 0, 0, 'PT Berusaha', 'Cari sendiri', 'Cari sendiri', 'Cari Sendiri', 120319283, NULL, 'berusaha@gmail.com', 'usaha', '8', 2000000, 'Tidak ada tambahan, cukup usaha saja', NULL, NULL, '2022-05-09 19:47:29', 'Sabtu-selasa');

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
(NULL, NULL, 'ayah@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `password`, `user`, `email_verified_at`, `remember_token`, `foto`, `name`, `email`, `pekerja`, `ultah`, `telepon`, `alamat`, `bidang`, `keterangan`, `twitter`, `facebook`, `google`, `link`, `instagram`, `lulusansd`, `sd`, `lulusansmp`, `smp`, `lulusansma`, `sma`, `bio`, `prestasi`, `pengalaman`, `kemampuan`, `hasil`, `created_at`, `updated_at`) VALUES
(23, '$2y$10$FKpF.HaCPnndPGBQlg31l.PRLdmqWUmrHhue.NM6RYWNNtIRLWj1W', 'Pekerja', NULL, NULL, NULL, 'Anak', 'apaiya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-18 18:53:49', '2022-05-18 18:53:49'),
(24, '$2y$10$HTjcFuEzGxNt1UdneexTk.ihQkQ27KNUJpwfN5BwzMEDRVPhNV44W', 'Pekerja', NULL, NULL, NULL, 'Ayah', 'ayah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-18 23:39:24', '2022-05-18 23:39:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- Indeks untuk tabel `rekrut0`
--
ALTER TABLE `rekrut0`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rekrut0`
--
ALTER TABLE `rekrut0`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

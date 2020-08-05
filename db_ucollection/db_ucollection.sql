-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2020 pada 22.54
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ucollection`
--

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
(3, '2020_07_11_195114_create_table_mobil', 1),
(4, '2020_07_11_195238_create_table_produsen', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_mobil` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mobil` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_produsen` int(10) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `id_mobil`, `nama_mobil`, `harga`, `tahun`, `id_produsen`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'M111', 'alfa romeo duetto spider', '250000000', 1970, 1, '20200711202040.jpg', '2020-07-11 13:20:40', '2020-07-11 13:20:40'),
(2, 'M112', 'mini moris', '360000000', 1965, 3, '20200711202633.png', '2020-07-11 13:26:33', '2020-07-11 13:26:33'),
(3, 'M113', 'chrysler imperial ghia', '450000000', 1870, 3, '20200711203119.png', '2020-07-11 13:31:19', '2020-07-11 13:31:19'),
(4, 'M114', 'holden kingswood', '460000000', 1965, 5, '20200711203728.png', '2020-07-11 13:37:28', '2020-07-11 13:37:28'),
(5, 'M115', 'fiat 12001', '450000000', 1765, 4, '20200711203844.png', '2020-07-11 13:38:44', '2020-07-11 13:48:14'),
(6, 'M116', 'volvo 960', '355000000', 1960, 7, '20200711203943.png', '2020-07-11 13:39:43', '2020-07-11 13:39:43'),
(7, 'M117', 'mercedes benz 280se', '477000000', 1920, 6, '20200711204107.png', '2020-07-11 13:41:07', '2020-07-11 13:41:07'),
(8, 'M118', 'camaro zl 1', '290000000', 1765, 5, '20200711204246.png', '2020-07-11 13:42:46', '2020-07-11 13:42:46'),
(9, 'M119', 'jeep willys', '350000000', 1967, 1, '20200711204408.png', '2020-07-11 13:44:08', '2020-07-11 13:44:08'),
(10, 'M110', 'toyota corolla dxy', '450000000', 1870, 8, '20200711204729.png', '2020-07-11 13:47:29', '2020-07-11 13:48:51');

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
-- Struktur dari tabel `produsen`
--

CREATE TABLE `produsen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produsen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produsen`
--

INSERT INTO `produsen` (`id`, `nama_produsen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'PT Mangkubumi', 'Berlokasi di Jakarta Pusat', '2020-07-11 13:13:11', '2020-07-11 13:13:11'),
(3, 'PT Honda', 'Berlokasi di Jakarta Pusat', '2020-07-11 13:14:26', '2020-07-11 13:14:26'),
(4, 'PT Antariksa', 'Berlokasi di Surabaya', '2020-07-11 13:14:59', '2020-07-11 13:14:59'),
(5, 'PT Klansen', 'Berlokasi di Cikarang Barat', '2020-07-11 13:15:42', '2020-07-11 13:15:42'),
(6, 'PT Mitsubisi', 'Berlokasi di Kalimantan Timur', '2020-07-11 13:16:12', '2020-07-11 13:16:12'),
(7, 'Rans Collection', 'Berlokasi di Jakarta Timur', '2020-07-11 13:18:53', '2020-07-11 13:18:53'),
(8, 'PT Toyota', 'Berlokasi di Lampung Timur', '2020-07-11 13:45:56', '2020-07-11 13:45:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('admin','operator') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Aida Mahmudah', 'aida@gmail.com', NULL, '$2y$10$c1r4OYekjCfZF.1WJMXkLeW.2IjSCIhjZ4dQE5Z0XtjT/uHdZYkVK', NULL, 'admin', '2020-07-11 13:09:31', '2020-07-11 13:09:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobil_id_mobil_unique` (`id_mobil`),
  ADD KEY `mobil_id_produsen_foreign` (`id_produsen`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `produsen`
--
ALTER TABLE `produsen`
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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produsen`
--
ALTER TABLE `produsen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_id_produsen_foreign` FOREIGN KEY (`id_produsen`) REFERENCES `produsen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

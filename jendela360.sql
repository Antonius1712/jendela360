-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2021 pada 12.27
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jendela360`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `car_data`
--

CREATE TABLE `car_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carPrice` bigint(20) DEFAULT NULL,
  `carStock` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `car_data`
--

INSERT INTO `car_data` (`id`, `carName`, `carPrice`, `carStock`, `created_at`, `updated_at`) VALUES
(1, 'qwe', 123, 123, '2021-04-09 22:20:32', '2021-04-09 22:20:32'),
(5, 'Toyota Yaris', 225000000, 2, '2021-04-09 23:26:09', '2021-04-09 23:26:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(3, '2021_04_10_034739_create_user', 2),
(6, '2014_10_12_000000_create_users_table', 3),
(7, '2019_08_19_000000_create_failed_jobs_table', 3),
(8, '2021_04_10_051508_create_car_data', 4),
(10, '2021_04_10_063111_create_selling_data', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `selling_data`
--

CREATE TABLE `selling_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customerEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customerPhone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchasedCar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `selling_data`
--

INSERT INTO `selling_data` (`id`, `customerName`, `customerEmail`, `customerPhone`, `purchasedCar`, `created_at`, `updated_at`) VALUES
(8, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 00:43:55'),
(9, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 00:44:14'),
(10, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 00:44:26'),
(13, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 00:45:04'),
(14, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 00:45:11'),
(15, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 00:55:15'),
(16, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 00:56:20'),
(22, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '1', '2021-04-09 01:13:00', '2021-04-10 01:02:28'),
(23, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '1', '2021-04-09 01:13:00', '2021-04-10 01:13:00'),
(24, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '1', '2021-04-09 01:13:00', '2021-04-10 01:20:20'),
(25, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '1', '2021-04-09 01:13:00', '2021-04-10 01:20:32'),
(26, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '1', '2021-04-09 01:13:00', '2021-04-10 01:20:59'),
(41, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 01:37:47'),
(43, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 01:40:28'),
(44, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 01:43:14'),
(45, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:07:44'),
(46, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:07:54'),
(47, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:08:06'),
(48, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:08:20'),
(49, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:09:49'),
(50, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:10:36'),
(52, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:22:35'),
(53, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:22:49'),
(54, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:23:59'),
(55, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:24:05'),
(56, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:27:02'),
(57, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 02:27:51'),
(58, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '1', '2021-04-09 01:13:00', '2021-04-10 02:28:34'),
(59, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '1', '2021-04-09 01:13:00', '2021-04-10 02:29:04'),
(60, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 03:05:26'),
(61, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-09 01:13:00', '2021-04-10 03:08:45'),
(62, 'Antonius Christian', 'antonius1712@gmail.com', '081297275563', '5', '2021-04-10 03:18:41', '2021-04-10 03:18:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anton', '$2y$10$mHC4CwpNcDlpLn41t7FVNuy.j8pSndx1dSR7JPNRZig6bGu8s3ugi', NULL, '2021-04-09 21:22:49', '2021-04-09 21:22:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `car_data`
--
ALTER TABLE `car_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `selling_data`
--
ALTER TABLE `selling_data`
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
-- AUTO_INCREMENT untuk tabel `car_data`
--
ALTER TABLE `car_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `selling_data`
--
ALTER TABLE `selling_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2024 at 12:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schizo`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_21_181026_create_produks_table', 1),
(6, '2024_07_21_181512_create_pesanans_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nomer` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `jenis_sablon` varchar(255) DEFAULT NULL,
  `jenis_kain` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `tanggal_pesanan` date DEFAULT NULL,
  `deadline_pesanan` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `nama`, `nomer`, `jumlah`, `jenis_sablon`, `jenis_kain`, `harga`, `deskripsi`, `tanggal_pesanan`, `deadline_pesanan`, `created_at`, `updated_at`) VALUES
(2, 'Iqbal Cv.', '081326277602', '3 Lusin', 'Plastisol', 'Cotton', '180000', 'Pesan Sablon plastisol 3 lusin untuk acara 17 Agustus 2024, desain sendiri', '2024-07-22', '2024-07-31', '2024-07-22 08:53:57', '2024-07-22 09:06:58'),
(4, 'Iqbal Cv.', '08170006055', '1 lusin', 'Plastisol', 'Cotton', NULL, 'Pesan Kaos Untuk acara 17 Agustus 2024', '2024-07-23', NULL, '2024-07-23 00:45:42', '2024-07-23 00:45:42'),
(5, 'Iqbal Cv.', '08170006055', '1 lusin', 'Plastisol', 'Cotton', NULL, 'sfbsabab jjjjjjjjjjjjjjjjjjjjjjjjj sashashhhhhhhhhhh', NULL, '2024-07-31', '2024-07-23 01:04:57', '2024-07-23 01:04:57'),
(6, 'Iqbal Cv.', '08170006055', '1 lusin', 'Plastisol', 'Cotton', NULL, 'sfbsabab jjjjjjjjjjjjjjjjjjjjjjjjj sashashhhhhhhhhhh', NULL, '2024-07-31', '2024-07-23 01:05:23', '2024-07-23 01:05:23'),
(7, 'Iqbal Cv.', '08170006055', '1 lusin', 'Plastisol', 'Cotton', NULL, 'jsicjha aichailchai', NULL, '2024-07-23', '2024-07-23 01:17:35', '2024-07-23 01:17:35'),
(8, 'Iqbal Cv.', '08170006055', '1 lusin', 'Plastisol', 'Cotton', NULL, 'jijsdojcoaj cijapijcpij adijclisa', NULL, '2024-07-31', '2024-07-23 01:31:55', '2024-07-23 01:31:55'),
(9, 'Iqbal Cv.', '08170006055', '8', 'Tinta Rubber', 'Cotton', NULL, 'nsjc;okds;oc', NULL, '2024-02-22', '2024-07-23 03:43:42', '2024-07-23 03:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `image`, `kategori`, `created_at`, `updated_at`) VALUES
(3, '1721713058.png', 'Kaos', '2024-07-22 22:37:39', '2024-07-22 22:37:39'),
(4, '1721713090.png', 'Polo Shirt', '2024-07-22 22:38:10', '2024-07-22 22:38:10'),
(5, '1721713110.png', 'Kemeja', '2024-07-22 22:38:30', '2024-07-22 22:38:30'),
(6, '1721713131.png', 'Jaket', '2024-07-22 22:38:51', '2024-07-22 22:38:51'),
(7, '1721713133.png', 'Jaket', '2024-07-22 22:38:53', '2024-07-22 22:38:53'),
(8, '1721713156.png', 'Rompi', '2024-07-22 22:39:17', '2024-07-22 22:39:17'),
(9, '1721713174.png', 'Topi', '2024-07-22 22:39:34', '2024-07-22 22:39:34'),
(10, '1721713538.png', 'Kaos', '2024-07-22 22:45:38', '2024-07-22 22:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Crystel Parisian', 'isaac59@example.net', '2024-07-21 18:04:54', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', 'XpzfBPFpu2', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(2, 'Winona Bechtelar Jr.', 'sdenesik@example.net', '2024-07-21 18:04:55', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', 'XumRoCFHft', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(3, 'Desiree Crooks', 'otto.ruecker@example.net', '2024-07-21 18:04:55', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', 'CWQywpDG9T', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(4, 'Cleveland Quigley', 'carroll14@example.org', '2024-07-21 18:04:55', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', '6cKn66Acvr', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(5, 'Jayme Gorczany DDS', 'auer.lyric@example.net', '2024-07-21 18:04:55', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', '1i77g329p0', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(6, 'Cierra Grimes Jr.', 'gusikowski.emilie@example.org', '2024-07-21 18:04:55', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', 'AiphMoK1gX', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(7, 'Lola Hartmann', 'jo56@example.com', '2024-07-21 18:04:55', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', 'z0xM6nufVx', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(8, 'Cameron Rice', 'lolita93@example.org', '2024-07-21 18:04:55', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', 'uigWDQgaqv', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(9, 'Delphine Volkman III', 'braun.dorris@example.net', '2024-07-21 18:04:55', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', '9coxQB8V51', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(10, 'Breanna Padberg', 'wilber24@example.com', '2024-07-21 18:04:55', '$2y$12$bu7aFRnPHPn4rbXkU3g.QOP2Wcnt.kBOAs..eJ/qfOCO5.uCcQska', '8xngH5UsE2', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(11, 'Admin', 'schizo@gmail.com', '2024-07-21 18:04:55', '$2y$12$P61qD5vi6gV8ut0kf8LYf.2PzZ22k.P7.Psgl/D8qxJE5h/qr329e', '20atxgJO2p', '2024-07-21 18:04:55', '2024-07-21 18:04:55'),
(12, 'Coba Pas 123456', 'coba@gmail.com', NULL, '$2y$12$88p11aExpcEY32J2cxj97.O4.2roNJ3KhZQYJgWQR4Rn9Gd1kKgiS', NULL, '2024-07-22 22:35:19', '2024-07-22 22:35:19');

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

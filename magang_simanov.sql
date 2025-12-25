-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2025 at 06:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang_simanov`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_26_042412_create_pendaftaran_magang_table', 1),
(5, '2025_11_30_082818_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_magang`
--

CREATE TABLE `pendaftaran_magang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `surat_permohonan` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `portofolio` varchar(255) DEFAULT NULL,
  `status` enum('validasi_data','jadwal_wawancara','selesai_wawancara','lolos','tidak_lolos') NOT NULL,
  `tanggal_wawancara` datetime DEFAULT NULL,
  `tempatwawancara` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran_magang`
--

INSERT INTO `pendaftaran_magang` (`id`, `user_id`, `peserta_id`, `nama_depan`, `nama_belakang`, `email`, `whatsapp`, `asal_sekolah`, `program_studi`, `tanggal_mulai`, `tanggal_berakhir`, `surat_permohonan`, `cv`, `portofolio`, `status`, `tanggal_wawancara`, `tempatwawancara`, `created_at`, `updated_at`) VALUES
(1, 1, 'PM001', 'marsanda', 'sofi', 'keiiyrastle@gmail.com', '+6288235667820', 'Universitas Negeri Surabaya', 'Teknik Informatika', '2025-11-30', '2025-12-23', 'surat_permohonan/SKD.pdf', 'cv/HIRARC.pdf', 'portofolio/SK_KALENDER.pdf', 'selesai_wawancara', '2025-12-14 20:36:00', 'https://maps.app.goo.gl/ayjBD73JvU4YCyFP9', '2025-11-30 01:36:36', '2025-12-14 07:25:01'),
(2, 5, 'PM002', 'amanda', 'yona', 'dwiamandayona054@gmail.com', '+6288235667820', 'Universitas Negeri Surabaya', 'Teknik Informatika', '2025-11-30', '2025-12-31', 'surat_permohonan/SKD.pdf', 'cv/HIRARC.pdf', 'portofolio/SK_KALENDER.pdf', 'selesai_wawancara', '2025-12-14 20:35:00', 'https://maps.app.goo.gl/ayjBD73JvU4YCyFP9', '2025-11-30 03:57:38', '2025-12-14 06:36:13'),
(3, 6, 'PM003', 'ilham', 'firdaus', 'dwi.23054@mhs.unesa.ac.id', '+6278879879', 'Universitas Negeri Surabaya', 'Teknik Informatika', '2025-11-30', '2025-11-30', 'surat_permohonan/SKD.pdf', 'cv/HIRARC.pdf', 'portofolio/SK_KALENDER.pdf', 'jadwal_wawancara', '2025-12-14 21:29:00', 'https://maps.app.goo.gl/ayjBD73JvU4YCyFP9', '2025-11-30 05:00:13', '2025-12-14 07:29:38'),
(4, 7, 'PES-1765368939', 'farah', 'adelia', 'farahadelia@gmail.com', '+62878787878787', 'Universitas Negeri surabaya', 'teknik informatika', '2025-12-10', '2025-12-10', 'surat_permohonan/SKD.pdf', 'cv/HIRARC.pdf', 'portofolio/SK_KALENDER.pdf', 'jadwal_wawancara', '2025-12-14 20:35:00', 'https://maps.app.goo.gl/ayjBD73JvU4YCyFP9', '2025-12-10 05:15:39', '2025-12-14 06:35:37'),
(5, 8, 'PES-1765420987', 'ira', 'agusfina', 'iraagusfna@gmail.com', '+6287878787878', 'Smk 6 Surabaya', 'DKV', '2025-12-11', '2025-12-11', 'surat_permohonan/SKD.pdf', 'cv/HIRARC.pdf', 'portofolio/SK_KALENDER.pdf', 'jadwal_wawancara', '2025-12-14 20:35:00', 'https://maps.app.goo.gl/ayjBD73JvU4YCyFP9', '2025-12-10 19:43:07', '2025-12-14 06:35:51'),
(6, 9, 'PES-1765421304', 'dian', 'oktaviana', 'dianoktaviana@gmail.com', '+628787878787878', 'Smk 6 Surabaya', 'DKV', '2025-12-11', '2025-12-11', 'surat_permohonan/SKD.pdf', 'cv/HIRARC.pdf', 'portofolio/SK_KALENDER.pdf', 'selesai_wawancara', '2025-12-14 21:29:00', 'https://maps.app.goo.gl/ayjBD73JvU4YCyFP9', '2025-12-10 19:48:24', '2025-12-16 03:16:08'),
(7, 10, 'PES-1765429347', 'billy', 'fairuzzeen', 'billyfairuzzeen@gmail.com', '+62882877887878', 'smk 6 surabaya', 'dkv', '2025-12-11', '2025-12-11', 'surat_permohonan/SKD.pdf', 'cv/HIRARC.pdf', 'portofolio/SK_KALENDER.pdf', 'tidak_lolos', '2025-12-13 18:59:00', 'https://maps.app.goo.gl/ayjBD73JvU4YCyFP9', '2025-12-10 22:02:27', '2025-12-14 05:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5Fkyf7pM2FVqcNHe2NE1qEkFkdi3D8eKLIrDaya6', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibUtwUEczekRnQ0d4cEdTT1lyOEJRWTQzMjBkTWV3N3lQV3BhbmtQQyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9rZWxvbGFwZW5kYWZ0YXJhbiI7czo1OiJyb3V0ZSI7czoyMzoiYWRtaW4ua2Vsb2xhcGVuZGFmdGFyYW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkLXVzZXIiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O30=', 1764504312),
('J8UoefkOLPbv54ysbEs00AobeZFZjK7LfW4NsNZh', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZkd2U21wTWROVzJFVnI2WDh4amRJZ0gxQTQ0WTJaV1ZRQXMxT25yNyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mb3JtIjtzOjU6InJvdXRlIjtzOjk6ImZvcm0uc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1764500260);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'marsanda sofi', 'keiiyrastle@gmail.com', '$2y$12$dII.GZEDwUOHYcttZ2TbR.p12Ty751lOVayI9loGB/GZYfTkRMYtS', 'user', NULL, '2025-11-30 01:36:36', '2025-11-30 01:36:36'),
(2, 'admin', 'admin123@gmail.com', '123#', 'admin', NULL, NULL, NULL),
(3, 'Admin', 'admin@example.com', '$2y$12$RB4MJ7yDs4k4RadrqhffQ.mcpVWoP8nX9RHB1tHqUydLJYSkIhgGS', 'admin', NULL, '2025-11-30 02:07:32', '2025-11-30 02:07:32'),
(5, 'amanda yona', 'dwiamandayona054@gmail.com', '$2y$12$o6tl.qqRK73KDkxCn8bjX.FILq2x9Q0OGPpmU5YA3GxHwmCgm30bW', 'user', NULL, '2025-11-30 03:57:38', '2025-11-30 03:57:38'),
(6, 'ilham firdaus', 'dwi.23054@mhs.unesa.ac.id', '$2y$12$YOsG.r3xEdCOJno.B4PYD.2oTKGqkcZHo9bR4j1STEsM.qOkC4R.e', 'user', NULL, '2025-11-30 05:00:13', '2025-11-30 05:00:13'),
(7, 'farah adelia', 'farahadelia@gmail.com', '$2y$12$CHTUaSM7D2Eegn053RxXDuMjQtZOKQqMWc2tayIfaEI3xYRn3z6Wu', 'user', NULL, '2025-12-10 05:15:39', '2025-12-10 05:15:39'),
(8, 'ira agusfina', 'iraagusfna@gmail.com', '$2y$12$Ksi2DHrberBoWvuDTHZIxOhTJVEftInSBDIGlwx46InQEGTbAwXam', 'user', NULL, '2025-12-10 19:43:07', '2025-12-10 19:43:07'),
(9, 'dian oktaviana', 'dianoktaviana@gmail.com', '$2y$12$gdA8mVHa7p5ViBUA7hay6uGJx1EBLOYOwmHUUprTDJ52yh2IUD4DK', 'user', NULL, '2025-12-10 19:48:24', '2025-12-10 19:48:24'),
(10, 'billy fairuzzeen', 'billyfairuzzeen@gmail.com', '$2y$12$rX1oyCVAHU3yQxMePKD6ceJK1lYIRn2kYgbm7AcGIGPXZ4jqHG7tm', 'user', NULL, '2025-12-10 22:02:27', '2025-12-10 22:02:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran_magang`
--
ALTER TABLE `pendaftaran_magang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pendaftaran_magang_peserta_id_unique` (`peserta_id`),
  ADD KEY `pendaftaran_magang_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftaran_magang`
--
ALTER TABLE `pendaftaran_magang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftaran_magang`
--
ALTER TABLE `pendaftaran_magang`
  ADD CONSTRAINT `pendaftaran_magang_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

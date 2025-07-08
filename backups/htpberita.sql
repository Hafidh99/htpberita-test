-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2025 at 10:27 AM
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
-- Database: `htpberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `bio` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `news_category_id`, `name`, `username`, `avatar`, `bio`, `created_at`, `updated_at`) VALUES
(1, 1, 'S1 - Kesehatan Masyarakat', 'S1 - Kesehatan Masyarakat', '01JZ9RDNBK0XC65B2KPZQCBS0J.png', '-', '2025-07-03 20:41:58', '2025-07-03 20:41:58'),
(2, 2, 'S1 - Teknik Informatika', 'S1 - Teknik Informatika', '01JZ9RFBYTFAC6BVCRSF6YMPA3.png', '-', '2025-07-03 20:42:54', '2025-07-03 20:42:54'),
(3, 3, 'S2 - Kesehatan Masyarakat', 'S2 - Kesehatan Masyarakat ', '01JZ9RGR6YEPSZW0ZKXC016Z80.png', '-', '2025-07-03 20:43:39', '2025-07-03 20:43:39'),
(4, 4, 'S1 - Kebidanan', 'S1 - Kebidanan', '01JZ9RJE0MMNS2YY5EEKHEVWFW.png', '-', '2025-07-03 20:44:34', '2025-07-03 20:44:34'),
(5, 5, 'S1 - Sistem Informasi', 'S1 - Sistem Informasi', '01JZ9RMFZ2024CXXZQ7BP4KDAW.png', '-', '2025-07-03 20:45:42', '2025-07-03 20:45:42'),
(6, 6, 'S1 - Keperawatan', 'S1 - Keperawatan', '01JZ9S07MH7BCSKTEGEWZFFN40.png', '-', '2025-07-03 20:52:07', '2025-07-03 20:52:07'),
(7, 7, 'S1 - ilmu Hukum', 'S1 - ilmu Hukum', '01JZ9RP13989GQTMHB41VH734V.png', '-', '2025-07-03 20:46:32', '2025-07-03 20:46:32'),
(8, 8, 'S1 - Komunikasi', 'S1 - Komunikasi', '01JZ9RQC34M83SHP44CAZ65ZYC.png', '-', '2025-07-03 20:47:16', '2025-07-03 20:47:16'),
(9, 9, 'D4 - Manajemen Informasi Kesehatan', 'D4 - Manajemen Informasi Kesehatan', '01JZ9RRN9NTT5VE16S9F3CDHB7.png', '-', '2025-07-03 20:47:58', '2025-07-03 20:47:58'),
(10, 10, 'D3 - Rekam Medis', 'D3 - Rekam Medis', '01JZ9RT4F8EP42YNQS66R212ZY.png', '-', '2025-07-03 20:48:47', '2025-07-03 20:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('htpberita_cache_1b6453892473a467d07372d45eb05abc2031647a', 'i:2;', 1751604541),
('htpberita_cache_1b6453892473a467d07372d45eb05abc2031647a:timer', 'i:1751604541;', 1751604541),
('htpberita_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1751601183),
('htpberita_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1751601183;', 1751601183),
('htpberita_cache_77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1751603859),
('htpberita_cache_77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1751603859;', 1751603859),
('htpberita_cache_ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', 'i:1;', 1751604668),
('htpberita_cache_ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4:timer', 'i:1751604668;', 1751604668),
('htpberita_cache_da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:1;', 1751602092),
('htpberita_cache_da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1751602092;', 1751602092),
('htpberita_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1751604730),
('htpberita_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1751604730;', 1751604730);

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
(4, '2025_06_17_063914_create_authors_table', 1),
(5, '2025_06_17_064531_create_news_categories_table', 1),
(6, '2025_06_17_064909_create_news_table', 1),
(7, '2025_06_17_070450_create_banners_table', 1),
(8, '2025_06_19_041226_add_views_to_news_table', 1),
(9, '2025_06_23_040202_create_slideshows_table', 1),
(10, '2025_07_03_045535_add_role_and_category_to_users_table', 1),
(11, '2025_07_04_041825_add_news_category_id_to_authors_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `news_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `author_id`, `news_category_id`, `title`, `slug`, `thumbnail`, `content`, `created_at`, `updated_at`, `views`) VALUES
(1, 2, 1, 'Judulnya apa yaa', 'judulnya-apa-yaa', '01JZ9SN04C4FE4KAKAQZTP9Z7Q.png', '<p>Ayam aja ini mah</p>', '2025-07-03 21:03:27', '2025-07-03 21:37:18', 2),
(2, 2, 1, 'Kesehatan Masyarakat', 'kesehatan-masyarakat', '01JZ9SVZKSD9TE545CT9M0QCMW.jpg', '<p>Kucing 1</p>', '2025-07-03 21:07:16', '2025-07-03 21:07:16', 0),
(3, 3, 2, 'Teknik Informatika', 'teknik-informatika', '01JZ9VHWMNJXGVTYPJT20TZYAJ.jpg', '<p>Kucing 2</p>', '2025-07-03 21:36:42', '2025-07-03 21:37:03', 1),
(5, 4, 3, 'Kesehatan Masyarakat s2', 'kesehatan-masyarakat-s2', '01JZ9W7ZJM1KKP326C12ZY2T7S.jpg', '<p>kucingg</p>', '2025-07-03 21:48:46', '2025-07-03 21:48:46', 0),
(6, 5, 4, 'Kebidanann', 'kebidanann', '01JZ9WAPY4QWTQ2B9WW3NSD8RP.jpg', '<p>Uji coba&nbsp;</p>', '2025-07-03 21:50:16', '2025-07-03 21:50:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'S1 - Kesehatan Masyarakat', 's1-kesehatan-masyarakat', '2025-07-03 20:36:33', '2025-07-03 20:36:33'),
(2, 'S1 - Teknik Informatika', 's1-teknik-informatika', '2025-07-03 20:36:50', '2025-07-03 20:36:50'),
(3, 'S2 - Kesehatan Masyarakat', 's2-kesehatan-masyarakat', '2025-07-03 20:34:22', '2025-07-03 20:34:22'),
(4, 'S1 - Kebidanan', 's1-kebidanan', '2025-07-03 20:36:38', '2025-07-03 20:36:38'),
(5, 'S1 - Sistem Informasi', 's1-sistem-informasi', '2025-07-03 20:36:42', '2025-07-03 20:36:42'),
(6, 'S1 - Keperawatan', 's1-keperawatan', '2025-07-03 20:51:05', '2025-07-03 20:51:05'),
(7, 'S1 - ilmu Hukum', 's1-ilmu-hukum', '2025-07-03 20:37:00', '2025-07-03 20:37:00'),
(8, 'S1 - Komunikasi', 's1-komunikasi', '2025-07-03 20:37:05', '2025-07-03 20:37:05'),
(9, 'D4 - Manajemen Informasi Kesehatan', 'd4-manajemen-informasi-kesehatan', '2025-07-03 20:37:11', '2025-07-03 20:37:11'),
(10, 'D3 - Rekam Medis', 'd3-rekam-medis', '2025-07-03 20:37:15', '2025-07-03 20:37:15');

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

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `news_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `title`, `image`, `news_id`, `created_at`, `updated_at`) VALUES
(1, '1', 'slideshows/01JZ9PSH9MP4XK0A32KH6YG81P.jpg', NULL, '2025-07-03 20:13:30', '2025-07-03 20:13:30'),
(2, '2', 'slideshows/01JZ9PV57HW638PTYFV9EVP7Y1.png', NULL, '2025-07-03 20:14:23', '2025-07-03 20:14:23'),
(3, '3', 'slideshows/01JZ9PVMM78VCT6T3TMJWY3F52.png', NULL, '2025-07-03 20:14:39', '2025-07-03 20:14:39'),
(4, '4', 'slideshows/01JZ9PWSVT3KT8H00R56JF2VV4.jpg', NULL, '2025-07-03 20:15:17', '2025-07-03 20:15:17'),
(5, '5', 'slideshows/01JZ9PXN86KW04R186AZQCR5MC.jpg', NULL, '2025-07-03 20:15:45', '2025-07-03 20:15:45'),
(6, '6', 'slideshows/01JZ9PY4DE5F83QRE7EBV25ETK.jpg', NULL, '2025-07-03 20:16:01', '2025-07-03 20:16:01'),
(7, '7', 'slideshows/01JZ9PYM29XQ6XVW00YYF0S6TN.png', NULL, '2025-07-03 20:16:17', '2025-07-03 20:16:17');

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
  `role` varchar(255) NOT NULL DEFAULT 'editor',
  `news_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `news_category_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@htp.ac.id', NULL, '$2y$12$jWysDRH4UXfw25RRzN6ni.LeQ5mWA0go6DX8cqawE.HKqY5O0LR5q', 'superadmin', NULL, NULL, '2025-07-03 19:33:33', '2025-07-03 19:33:33'),
(2, 'Prodi Kesehatan Masyarakat', 'kesmas@htp.ac.id', NULL, '$2y$12$mJKZNubPwD8X6UxzF.2oyekRrxeciQI6la9oYtjA40OyqT02R4Tmu', 'editor', 1, NULL, '2025-07-03 19:34:08', '2025-07-03 19:34:08'),
(3, 'Prodi T.Informatika', 'informatika@htp.ac.id', NULL, '$2y$12$946/d3O.mqIsxLzieEyOCu.VOiH3w4J0TWCjkmtQwmwXawCEsdDmy', 'editor', 2, NULL, '2025-07-03 19:35:08', '2025-07-03 19:35:08'),
(4, 'S2 - Kesehatan Masyarakat', 'kesmasS2@htp.ac.id', NULL, '$2y$12$0Pk2tBSw0SV5Hvk0sSJXf.dTfY2/EE3yP69UrbX2iVeh4KF8Atnfe', 'editor', 3, NULL, '2025-07-03 21:38:47', '2025-07-03 21:38:47'),
(5, 'S1 - Kebidanan', 'kebidanan@htp.ac.id', NULL, '$2y$12$M3VKtsKOC9qthjdFku4GZ.Hwe502/0uB56MDqU4pRNxdR9Mwc8L9i', 'editor', 4, NULL, '2025-07-03 21:39:29', '2025-07-03 21:39:29'),
(6, 'S1 - Sistem Informasi', 'sisteminformasi@htp.ac.id', NULL, '$2y$12$c.vZiCeA.x2Noea7IA7YsOE.1WhlXu2HA1FpRaw6Jnh8aToMY3dsC', 'editor', 5, NULL, '2025-07-03 21:40:28', '2025-07-03 21:40:28'),
(7, 'S1 - Keperawatan', 'keperawatan@htp.ac.id', NULL, '$2y$12$YvzSmKnXkwirsuy73v6nmOPS8WVWUSaf2voutjoVT6M2/L.ADytti', 'editor', 6, NULL, '2025-07-03 21:41:29', '2025-07-03 21:41:29'),
(8, 'S1 - Ilmu Hukum', 'ilmuhukum@htp.ac.id', NULL, '$2y$12$d.YlcLNmU6GF8tw4nJC2XeQCnb77zwa2zBWQirGpnCEhj0jbQcc5G', 'editor', 7, NULL, '2025-07-03 21:42:22', '2025-07-03 21:42:22'),
(9, 'S1 - Komunikasi', 'komunikasi@htp.ac.id', NULL, '$2y$12$WM/gq02fbJDLgNpBDfdkLOt4i66af34o7f.QYWr.g7mlTwKa.WlRW', 'editor', 8, NULL, '2025-07-03 21:43:12', '2025-07-03 21:43:12'),
(10, 'D4 - Manajemen Informasi Kesehatan', 'manajemenik@htp.ac.id', NULL, '$2y$12$kFbmMjI3gzwiUsCqWJAPne30PawPDwgBhIJMpJFfAtWQJnboM87Qa', 'editor', 9, NULL, '2025-07-03 21:44:14', '2025-07-03 21:44:14'),
(11, 'D3 - Rekam Medis', 'rekammedis@htp.ac.id', NULL, '$2y$12$YxDERx/lubKaM1WExFTxoOJGuqZaQGZQtrX24jJ1ZKvkJm4X776ru', 'editor', 10, NULL, '2025-07-03 21:45:03', '2025-07-03 21:45:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authors_news_category_id_foreign` (`news_category_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slideshows_news_id_foreign` (`news_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_news_category_id_foreign` (`news_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `authors_news_category_id_foreign` FOREIGN KEY (`news_category_id`) REFERENCES `news_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD CONSTRAINT `slideshows_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_news_category_id_foreign` FOREIGN KEY (`news_category_id`) REFERENCES `news_categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

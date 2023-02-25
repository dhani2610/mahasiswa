-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 09:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

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
-- Table structure for table `jurnal_pemasukans`
--

CREATE TABLE `jurnal_pemasukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurnal_pemasukans`
--

INSERT INTO `jurnal_pemasukans` (`id`, `tanggal`, `keterangan`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, '2023-02-14', 'test', 2000000, '2023-02-14 08:12:23', '2023-02-14 08:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_pengeluarans`
--

CREATE TABLE `jurnal_pengeluarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurnal_pengeluarans`
--

INSERT INTO `jurnal_pengeluarans` (`id`, `tanggal`, `keterangan`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, '2023-02-14', 'test', 200000, '2023-02-14 08:14:13', '2023-02-14 08:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_formulir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabang_ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `periode_masuk`, `no_formulir`, `nama`, `no_ktp`, `nim`, `prodi_id`, `cabang`, `cabang_ket`, `created_at`, `updated_at`) VALUES
(1, '20222', '23000622', 'Budi Yulianto', '1234567891234567', '81724012', '1', 'C', 'Cimahi', '2023-02-14 07:28:03', '2023-02-14 07:28:03');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_02_28_072038_add_username_and_avatar_to_users', 1),
(6, '2021_02_28_100347_create_permission_tables', 1),
(7, '2021_09_15_124110_create_history_logs_table', 1),
(8, '2022_08_16_214624_add_column_approval_to_users', 1),
(9, '2022_11_06_102156_add_column_to_users', 1),
(10, '2022_11_06_213405_create_subjeks_table', 1),
(11, '2022_11_06_235038_create_dosens_table', 1),
(12, '2022_11_16_211628_create_prodis_table', 1),
(13, '2022_11_17_013339_create_e_book_u_k_i_s_table', 1),
(14, '2022_11_17_025356_create_karya_ilmiah_mahasiswas_table', 1),
(15, '2022_11_17_034302_create_visit_books_table', 1),
(16, '2022_11_17_093030_create_grubs_table', 1),
(17, '2022_11_17_102705_create_pinjams_table', 1),
(18, '2022_11_17_114003_add_column_to_e_book_u_k_i_s', 1),
(19, '2022_11_18_024831_create_kunjungans_table', 2),
(20, '2022_11_18_035633_create_tunggus_table', 3),
(23, '2022_12_24_095156_create_aktifitas_table', 4),
(24, '2022_12_24_095852_create_divisis_table', 4),
(25, '2023_02_13_202924_create_mahasiswas_table', 5),
(26, '2023_02_14_135013_create_prodis_table', 6),
(27, '2023_02_14_143131_create_tahun_ajarans_table', 7),
(28, '2023_02_14_144524_create_jurnal_pengeluarans_table', 8),
(29, '2023_02_14_144550_create_jurnal_pemasukans_table', 8),
(30, '2023_02_14_152733_create_pos_keuangans_table', 9),
(31, '2023_02_14_162514_create_pengumumen_table', 10),
(32, '2023_02_19_194421_create_pembayaran_spps_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 7);

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
-- Table structure for table `pembayaran_spps`
--

CREATE TABLE `pembayaran_spps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `semester1_1` int(11) DEFAULT NULL,
  `semester1_2` int(11) DEFAULT NULL,
  `semester1_3` int(11) DEFAULT NULL,
  `semester1_4` int(11) DEFAULT NULL,
  `semester1_5` int(11) DEFAULT NULL,
  `semester1_6` int(11) DEFAULT NULL,
  `semester2_1` int(11) DEFAULT NULL,
  `semester2_2` int(11) DEFAULT NULL,
  `semester2_3` int(11) DEFAULT NULL,
  `semester2_4` int(11) DEFAULT NULL,
  `semester2_5` int(11) DEFAULT NULL,
  `semester2_6` int(11) DEFAULT NULL,
  `semester3_1` int(11) DEFAULT NULL,
  `semester3_2` int(11) DEFAULT NULL,
  `semester3_3` int(11) DEFAULT NULL,
  `semester3_4` int(11) DEFAULT NULL,
  `semester3_5` int(11) DEFAULT NULL,
  `semester3_6` int(11) DEFAULT NULL,
  `semester4_1` int(11) DEFAULT NULL,
  `semester4_2` int(11) DEFAULT NULL,
  `semester4_3` int(11) DEFAULT NULL,
  `semester4_4` int(11) DEFAULT NULL,
  `semester4_5` int(11) DEFAULT NULL,
  `semester4_6` int(11) DEFAULT NULL,
  `semester5_1` int(11) DEFAULT NULL,
  `semester5_2` int(11) DEFAULT NULL,
  `semester5_3` int(11) DEFAULT NULL,
  `semester5_4` int(11) DEFAULT NULL,
  `semester5_5` int(11) DEFAULT NULL,
  `semester5_6` int(11) DEFAULT NULL,
  `semester6_1` int(11) DEFAULT NULL,
  `semester6_2` int(11) DEFAULT NULL,
  `semester6_3` int(11) DEFAULT NULL,
  `semester6_4` int(11) DEFAULT NULL,
  `semester6_5` int(11) DEFAULT NULL,
  `semester6_6` int(11) DEFAULT NULL,
  `semester7_1` int(11) DEFAULT NULL,
  `semester7_2` int(11) DEFAULT NULL,
  `semester7_3` int(11) DEFAULT NULL,
  `semester7_4` int(11) DEFAULT NULL,
  `semester7_5` int(11) DEFAULT NULL,
  `semester7_6` int(11) DEFAULT NULL,
  `semester8_1` int(11) DEFAULT NULL,
  `semester8_2` int(11) DEFAULT NULL,
  `semester8_3` int(11) DEFAULT NULL,
  `semester8_4` int(11) DEFAULT NULL,
  `semester8_5` int(11) DEFAULT NULL,
  `semester8_6` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran_spps`
--

INSERT INTO `pembayaran_spps` (`id`, `mahasiswa_id`, `semester1_1`, `semester1_2`, `semester1_3`, `semester1_4`, `semester1_5`, `semester1_6`, `semester2_1`, `semester2_2`, `semester2_3`, `semester2_4`, `semester2_5`, `semester2_6`, `semester3_1`, `semester3_2`, `semester3_3`, `semester3_4`, `semester3_5`, `semester3_6`, `semester4_1`, `semester4_2`, `semester4_3`, `semester4_4`, `semester4_5`, `semester4_6`, `semester5_1`, `semester5_2`, `semester5_3`, `semester5_4`, `semester5_5`, `semester5_6`, `semester6_1`, `semester6_2`, `semester6_3`, `semester6_4`, `semester6_5`, `semester6_6`, `semester7_1`, `semester7_2`, `semester7_3`, `semester7_4`, `semester7_5`, `semester7_6`, `semester8_1`, `semester8_2`, `semester8_3`, `semester8_4`, `semester8_5`, `semester8_6`, `created_at`, `updated_at`) VALUES
(1, 1, 20000, 50000, 100000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-25 07:55:05', '2023-02-25 08:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `pengumumen`
--

CREATE TABLE `pengumumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengumuman` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'web', '2022-11-17 12:52:48', '2022-11-17 12:52:48'),
(2, 'master-data', 'web', '2022-11-17 12:52:48', '2022-11-17 12:52:48'),
(3, 'departement-list', 'web', '2022-11-17 12:52:48', '2022-11-17 12:52:48'),
(4, 'departement-create', 'web', '2022-11-17 12:52:48', '2022-11-17 12:52:48'),
(5, 'departement-edit', 'web', '2022-11-17 12:52:48', '2022-11-17 12:52:48'),
(6, 'departement-delete', 'web', '2022-11-17 12:52:48', '2022-11-17 12:52:48'),
(7, 'user-list', 'web', '2022-11-17 12:52:48', '2022-11-17 12:52:48'),
(8, 'user-create', 'web', '2022-11-17 12:52:48', '2022-11-17 12:52:48'),
(9, 'user-edit', 'web', '2022-11-17 12:52:49', '2022-11-17 12:52:49'),
(10, 'user-delete', 'web', '2022-11-17 12:52:49', '2022-11-17 12:52:49'),
(13, 'profile', 'web', '2022-11-17 12:52:49', '2022-11-17 12:52:49'),
(14, 'profile-edit', 'web', '2022-11-17 12:52:49', '2022-11-17 12:52:49'),
(33, 'pindah-semester', 'web', '2023-02-11 02:04:39', '2023-02-11 02:04:39'),
(34, 'data', 'web', '2023-02-11 02:04:39', '2023-02-11 02:04:39'),
(35, 'pembayaran', 'web', '2023-02-11 02:04:39', '2023-02-11 02:04:39'),
(36, 'setting-event', 'web', '2023-02-11 02:04:39', '2023-02-11 02:04:39'),
(37, 'laporan', 'web', '2023-02-11 02:04:39', '2023-02-11 02:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `pos_keuangans`
--

CREATE TABLE `pos_keuangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pos_keuangans`
--

INSERT INTO `pos_keuangans` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'SPP', '2023-02-14 08:50:32', '2023-02-14 08:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodis`
--

INSERT INTO `prodis` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES
(1, '123', 'Test Prodi', '2023-02-14 07:22:33', '2023-02-14 07:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'web', '2022-11-17 12:52:49', '2022-11-20 01:48:31'),
(2, 'Siswa', 'web', '2022-11-20 01:47:33', '2023-02-11 01:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajarans`
--

CREATE TABLE `tahun_ajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_awal` int(11) NOT NULL,
  `tahun_akhir` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_ajarans`
--

INSERT INTO `tahun_ajarans` (`id`, `tahun_awal`, `tahun_akhir`, `created_at`, `updated_at`) VALUES
(1, 2022, 2023, '2023-02-14 07:42:45', '2023-02-14 07:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divisi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `username`, `avatar`, `approval`, `divisi_id`) VALUES
(1, 'Admin', 'root@root.com', NULL, '$2y$10$jrffEbj1pcXMFaE/IGP8K.4yWHoE1WP2b8NovGijC5BjFz35wAEiK', NULL, NULL, NULL, '2022-11-17 12:52:49', '2023-02-11 01:20:09', 'Admin', NULL, NULL, 1),
(7, 'Siswa Demo', 'siswaDemo@gmail.com', NULL, '$2y$10$bs76G9cYG1pSJjEmWS5hh.eRTuSGbnFxqBsV3/Cx9SgzpnnpE9lWe', NULL, NULL, NULL, '2023-02-11 01:15:37', '2023-02-11 01:15:37', 'Siswa', NULL, NULL, NULL);

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
-- Indexes for table `jurnal_pemasukans`
--
ALTER TABLE `jurnal_pemasukans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_pengeluarans`
--
ALTER TABLE `jurnal_pengeluarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayaran_spps`
--
ALTER TABLE `pembayaran_spps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumumen`
--
ALTER TABLE `pengumumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `pos_keuangans`
--
ALTER TABLE `pos_keuangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tahun_ajarans`
--
ALTER TABLE `tahun_ajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurnal_pemasukans`
--
ALTER TABLE `jurnal_pemasukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurnal_pengeluarans`
--
ALTER TABLE `jurnal_pengeluarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pembayaran_spps`
--
ALTER TABLE `pembayaran_spps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumumen`
--
ALTER TABLE `pengumumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pos_keuangans`
--
ALTER TABLE `pos_keuangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tahun_ajarans`
--
ALTER TABLE `tahun_ajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 03:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simrs_lite`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poliklinik_id` bigint(20) UNSIGNED NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokters`
--

INSERT INTO `dokters` (`id`, `nama`, `poliklinik_id`, `umur`, `jenis_kelamin`, `alamat`, `no_telpon`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jamal Rahman', 2, 43, 'Laki-laki', 'Jl. Kebayoran', 6676769, 1, '2023-02-09 02:46:23', '2023-02-09 02:46:23');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_07_133653_create_poli_kliniks_table', 1),
(6, '2023_02_07_133949_create_pasiens_table', 1),
(7, '2023_02_07_134336_create_dokters_table', 1),
(8, '2023_02_07_135011_create_pendaftarans_table', 1),
(9, '2023_02_09_040757_create_status_polis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id`, `nama`, `alamat`, `umur`, `jenis_kelamin`, `no_telpon`, `created_at`, `updated_at`) VALUES
(1, 'Karta', 'Jl. Pabuaran timur', 24, 'Laki-laki', 767654, '2023-02-09 01:45:46', '2023-02-09 01:45:46'),
(2, 'Ujang', 'Jl. Mekarsari', 45, 'Laki-laki', 909087, '2023-02-09 01:46:15', '2023-02-09 01:46:15'),
(3, 'Mamad', 'Jl. Pemalang mas', 45, 'Laki-laki', 454458, '2023-02-09 01:46:44', '2023-02-09 01:46:44'),
(4, 'Ratnawati', 'Jl. Pelangi mas', 23, 'Perempuan', 908978, '2023-02-09 01:48:33', '2023-02-09 01:48:33'),
(5, 'Rahman', 'Jl. Guntur', 43, 'Laki-laki', 6767675, '2023-02-09 02:28:01', '2023-02-09 02:28:01'),
(6, 'Jajang rahman', 'Jl. Kebayoran', 34, 'Laki-laki', 676767, '2023-02-09 08:27:57', '2023-02-09 08:27:57'),
(7, 'Jejen', 'Jl. Melati', 23, 'Laki-laki', 322322, '2023-02-09 19:03:42', '2023-02-09 19:03:42');

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
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poliklinik_id` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kategori` enum('Lama','Baru') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `antrian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `poliklinik_id`, `pasien_id`, `kategori`, `tanggal_pendaftaran`, `antrian`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Baru', '2023-02-09', '001', '2023-02-09 02:28:01', '2023-02-09 02:28:01'),
(2, 1, 2, 'Lama', '2023-02-09', '002', '2023-02-09 02:28:37', '2023-02-09 02:28:37'),
(3, 2, 1, 'Lama', '2023-02-09', '003', '2023-02-09 02:34:02', '2023-02-09 02:34:02'),
(4, 2, 5, 'Lama', '2023-02-09', '004', '2023-02-09 07:12:42', '2023-02-09 07:12:42'),
(5, 2, 6, 'Baru', '2023-02-09', '005', '2023-02-09 08:27:57', '2023-02-09 08:27:57'),
(6, 2, 4, 'Lama', '2023-02-10', '006', '2023-02-09 19:01:44', '2023-02-09 19:01:44'),
(7, 2, 7, 'Baru', '2023-02-10', '007', '2023-02-09 19:03:42', '2023-02-09 19:03:42');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poli_kliniks`
--

CREATE TABLE `poli_kliniks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_poli` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poli_kliniks`
--

INSERT INTO `poli_kliniks` (`id`, `nama_poli`, `created_at`, `updated_at`) VALUES
(1, 'Poli Klinik A', '2023-02-09 01:44:39', '2023-02-09 01:44:39'),
(2, 'Poli Klinik B', '2023-02-09 01:44:49', '2023-02-09 01:44:49'),
(3, 'Poli Klinik C', '2023-02-09 01:44:59', '2023-02-09 01:44:59'),
(4, 'Poli Klinik D', '2023-02-09 01:45:09', '2023-02-09 01:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `status_polis`
--

CREATE TABLE `status_polis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftaran_id` bigint(20) UNSIGNED NOT NULL,
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `diagnosa` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_poli` enum('Sudah','Belum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_polis`
--

INSERT INTO `status_polis` (`id`, `pendaftaran_id`, `dokter_id`, `tanggal`, `diagnosa`, `status_poli`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2023-02-09', 'Pilek dan batuk', 'Sudah', '2023-02-09 10:14:51', '2023-02-09 10:14:51'),
(2, 5, 1, '2023-02-09', 'Batuk Pilek', 'Sudah', '2023-02-09 09:29:03', '2023-02-09 09:29:03'),
(3, 4, 1, '2023-02-10', 'Batuk demam', 'Sudah', '2023-02-09 18:56:54', '2023-02-09 18:56:54'),
(4, 7, 1, '2023-02-10', 'Tipes', 'Sudah', '2023-02-09 19:40:38', '2023-02-09 19:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','dokter') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jamal', 'jamal@gmail.com', 'dokter', '$2y$10$7K6CwoOmUhQhjNBvlzB1G.IQnH.OKo0DTwtsEAarS3dVd3Amukeaa', '2023-02-09 01:43:06', '2023-02-09 01:43:06'),
(2, 'Admin', 'admin@gmail.com', 'admin', '$2y$10$0RY7GFWqCVMkbPbn.liuOugYueA7wvK5QsuuqP5JJopDkqwp9syX6', '2023-02-09 01:43:34', '2023-02-09 01:43:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokters_poliklinik_id_foreign` (`poliklinik_id`),
  ADD KEY `dokters_user_id_foreign` (`user_id`);

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
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftarans_poliklinik_id_foreign` (`poliklinik_id`),
  ADD KEY `pendaftarans_pasien_id_foreign` (`pasien_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `poli_kliniks`
--
ALTER TABLE `poli_kliniks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_polis`
--
ALTER TABLE `status_polis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_polis_pendaftaran_id_foreign` (`pendaftaran_id`),
  ADD KEY `status_polis_dokter_id_foreign` (`dokter_id`);

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
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poli_kliniks`
--
ALTER TABLE `poli_kliniks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_polis`
--
ALTER TABLE `status_polis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokters`
--
ALTER TABLE `dokters`
  ADD CONSTRAINT `dokters_poliklinik_id_foreign` FOREIGN KEY (`poliklinik_id`) REFERENCES `poli_kliniks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dokters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `pasiens` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftarans_poliklinik_id_foreign` FOREIGN KEY (`poliklinik_id`) REFERENCES `poli_kliniks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `status_polis`
--
ALTER TABLE `status_polis`
  ADD CONSTRAINT `status_polis_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `dokters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `status_polis_pendaftaran_id_foreign` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftarans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

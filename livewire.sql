-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 06:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livewire`
--

-- --------------------------------------------------------

--
-- Table structure for table `absens`
--

CREATE TABLE `absens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `kelas_id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('alfa','hadir','izin','sakit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tingkat_id` bigint(20) NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `tingkat_id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 1, 'ELEMENTARY A', '2021-07-07 07:29:58', '2021-07-07 07:29:58'),
(4, 2, 'INTERMEDIATE A', '2021-07-08 02:15:38', '2021-07-08 02:15:38'),
(5, 1, 'ELEMENTARY B', '2021-07-08 11:28:54', '2021-07-08 11:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_hari` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `nama_hari`, `created_at`, `updated_at`) VALUES
(1, 'Senin', '2021-07-03 11:31:23', '2021-07-03 11:31:23'),
(2, 'Selasa', '2021-07-03 11:31:23', '2021-07-03 11:31:23'),
(3, 'Rabu', '2021-07-03 11:31:23', '2021-07-03 11:31:23'),
(4, 'Kamis', '2021-07-03 11:31:23', '2021-07-03 11:31:23'),
(5, 'Jum\'at', '2021-07-03 11:31:23', '2021-07-03 11:31:23'),
(6, 'Sabtu', '2021-07-03 11:31:23', '2021-07-03 11:31:23'),
(7, 'Minggu', '2021-07-03 11:31:23', '2021-07-03 11:31:23');

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
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id`, `ket`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Hadir', '3C0', '2021-07-04 00:16:37', '2021-07-04 00:16:37'),
(2, 'Izin', '0CF', '2021-07-04 00:16:37', '2021-07-04 00:16:37'),
(4, 'Sakit', 'FF0', '2021-07-04 00:16:37', '2021-07-04 00:16:37');

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
(4, '2021_03_28_065414_create_students_table', 1),
(5, '2021_04_06_113816_create_teachers_table', 2),
(6, '2021_05_10_163437_create_pelajarans_table', 3),
(7, '2021_05_31_073057_create_classes_table', 4),
(8, '2021_05_31_094943_create_nilais_table', 5),
(9, '2021_07_03_182250_create_days_table', 6),
(10, '2021_07_04_071147_create_kehadiran_table', 7),
(11, '2021_07_05_164839_create_absens_table', 8),
(12, '2021_07_07_110317_create_tingkat_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelajaran_id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `kelas_id` bigint(20) NOT NULL,
  `uts` int(2) NOT NULL,
  `uat` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`id`, `pelajaran_id`, `student_id`, `kelas_id`, `uts`, `uat`, `created_at`, `updated_at`) VALUES
(9, 1, 1, 1, 60, 75, '2021-07-09 10:00:14', '2021-07-09 10:00:14'),
(11, 2, 1, 1, 90, 80, '2021-07-09 11:42:48', '2021-07-09 11:42:48'),
(24, 3, 1, 1, 75, 85, '2021-07-09 12:03:07', '2021-07-09 12:03:07'),
(26, 1, 1, 1, 90, 80, '2021-07-11 02:37:37', '2021-07-11 02:37:37');

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
-- Table structure for table `pelajarans`
--

CREATE TABLE `pelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_mp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matapelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelajarans`
--

INSERT INTO `pelajarans` (`id`, `kd_mp`, `matapelajaran`, `created_at`, `updated_at`) VALUES
(1, 'E', 'Grammar', '2021-05-10 10:46:32', '2021-05-10 10:46:32'),
(2, 'A', 'Speaking', '2021-06-02 15:53:34', '2021-06-02 15:53:34'),
(3, 'C', 'Writing', '2021-06-02 15:54:14', '2021-06-02 15:54:14'),
(4, 'D', 'Listening', '2021-06-02 15:54:32', '2021-06-02 15:54:32'),
(5, 'B', 'Reading', '2021-06-02 15:54:46', '2021-06-02 15:54:46'),
(6, 'F', 'Vocabulary', '2021-06-02 15:55:02', '2021-06-02 15:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nmr_tlp` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `kelas_id`, `nama`, `nis`, `tgl_lahir`, `alamat`, `sekolah`, `kelas`, `nama_ayah`, `nama_ibu`, `nmr_tlp`, `created_at`, `updated_at`) VALUES
(1, 1, 'Arfan Hidayatullah', '16010239', '1998-05-05', 'Sumenep', 'SMANJ', 'X', 'Dilan', 'Milea', '082297275105', NULL, '2021-07-07 13:16:41'),
(5, 1, 'David Bastiansyah', '1801027', '2001-04-12', 'Bondowoso', 'MANJ', 'XII', 'Geri', 'Dinda', '082297274234', '2021-04-14 02:19:53', '2021-04-14 02:19:53'),
(9, 1, 'Luthfi Nurul Huda', '16010260', '1998-09-07', 'Probolinngo', 'SMK NJ', 'XI', 'DOEL', 'SITI', '083345128766', '2021-07-07 08:17:09', '2021-07-07 08:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `nip` char(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_lulus` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nmr_tlp` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `pelajaran_id`, `nip`, `nama`, `tmp_lahir`, `tgl_lahir`, `agama`, `alamat`, `pendidikan`, `pt`, `jurusan`, `thn_lulus`, `nmr_tlp`, `created_at`, `updated_at`) VALUES
(1, 6, '1001', 'Ibnu Habibi', 'Probolinggo', '1987-04-07', 'Kristen', 'Gending', 'S2', 'Universitas Kanjuruhan Malang', 'Penddikan Bahasa Inggris', '2010', '082334217654', NULL, '2021-07-07 14:16:08'),
(2, 3, '1002', 'Naufal Irsyadi', 'Probolinggo', '1994-04-21', 'Islam', 'Tanjung', 'S1', 'Universitas Negeri Jember (UNEJ)', 'Sastra Inggris', '2018', '083715234511', '2021-04-14 09:23:54', '2021-05-01 02:02:18'),
(3, 2, '1003', 'Kholil Hasyim', 'Situbondo', '1984-04-23', 'Kristen', 'Tanjung', 'S2', 'Universitas Nurul Jadid', 'Linguistik', '2011', '089211987657', '2021-04-14 14:37:57', '2021-04-14 14:37:57'),
(7, 5, '1212', 'Nur Khalis Mistarwan', 'Probolinggo', '1996-09-12', 'Islam', 'Kraksaan', 'Lain', 'Universita Nurul Jadid (UNUJA)', 'Pendidikan Bahasa Inggris (PBI)', '2016', '083345128766', '2021-07-07 13:49:14', '2021-07-07 13:49:14'),
(8, 5, '1212', 'Nur Khalis Mistarwan', 'Probolinggo', '1996-09-12', 'Islam', 'Kraksaan', 'Lain', 'Universita Nurul Jadid (UNUJA)', 'Pendidikan Bahasa Inggris (PBI)', '2016', '083345128766', '2021-07-07 13:49:38', '2021-07-07 13:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `tingkat`
--

CREATE TABLE `tingkat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tingkat`
--

INSERT INTO `tingkat` (`id`, `tingkat`, `created_at`, `updated_at`) VALUES
(1, 'Elementary', NULL, NULL),
(2, 'Intermediate', NULL, NULL),
(3, 'Advance', NULL, NULL),
(4, 'Ula', NULL, NULL),
(5, 'Wustho', NULL, NULL),
(6, 'Ulya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'arfannj10', 'arfannj10@gmail.com', NULL, '$2y$10$fE42/vYm5nPaXGX1ZMxhYehebmrQNl82MYFy9i7fjh8ceWSlC2xRO', 'Ea94gVxfmtxUfW70Ghz6nLl2r1ATLT7rw2qpTg0KbdITgFEbY8wVgPR678VX', '2021-05-08 04:32:08', '2021-05-08 04:32:08', 'ADMIN'),
(2, 'alex05', 'alex05@gmail.com', NULL, '$2y$10$r.1ycnv1KO0rWe4T4TPykuxMmQd1YlU.XEAfOc9bjNA7KM8LeE9ra', NULL, '2021-07-10 12:04:21', '2021-07-10 12:04:21', 'GURU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absens`
--
ALTER TABLE `absens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelajarans`
--
ALTER TABLE `pelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tingkat`
--
ALTER TABLE `tingkat`
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
-- AUTO_INCREMENT for table `absens`
--
ALTER TABLE `absens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pelajarans`
--
ALTER TABLE `pelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

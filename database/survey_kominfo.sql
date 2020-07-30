-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 05:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey_kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `created_at`, `updated_at`) VALUES
(173, 43, '1', '2020-07-30 08:32:18', '2020-07-30 08:32:18'),
(174, 43, '2', '2020-07-30 08:32:18', '2020-07-30 08:32:18'),
(175, 43, '3', '2020-07-30 08:32:18', '2020-07-30 08:32:18'),
(176, 43, '4', '2020-07-30 08:32:18', '2020-07-30 08:32:18'),
(177, 44, '2a', '2020-07-30 08:32:34', '2020-07-30 08:32:34'),
(178, 44, '2b', '2020-07-30 08:32:34', '2020-07-30 08:32:34'),
(179, 44, '2c', '2020-07-30 08:32:34', '2020-07-30 08:32:34'),
(180, 44, '2d', '2020-07-30 08:32:34', '2020-07-30 08:32:34'),
(181, 45, 'a', '2020-07-30 08:33:20', '2020-07-30 08:33:20'),
(182, 45, 'b', '2020-07-30 08:33:20', '2020-07-30 08:33:20'),
(183, 45, 'c', '2020-07-30 08:33:20', '2020-07-30 08:33:20'),
(184, 45, 'd', '2020-07-30 08:33:20', '2020-07-30 08:33:20'),
(185, 46, '1b', '2020-07-30 08:33:40', '2020-07-30 08:33:40'),
(186, 46, '2b', '2020-07-30 08:33:40', '2020-07-30 08:33:40'),
(187, 46, '3b', '2020-07-30 08:33:40', '2020-07-30 08:33:40'),
(188, 46, '4b', '2020-07-30 08:33:40', '2020-07-30 08:33:40'),
(189, 47, '0', '2020-07-30 08:34:21', '2020-07-30 08:34:21'),
(190, 47, '50', '2020-07-30 08:34:21', '2020-07-30 08:34:21'),
(191, 47, '75', '2020-07-30 08:34:21', '2020-07-30 08:34:21'),
(192, 47, '100', '2020-07-30 08:34:21', '2020-07-30 08:34:21'),
(193, 48, 'Sangat Baik', '2020-07-30 08:34:52', '2020-07-30 08:34:52'),
(194, 48, 'Baik', '2020-07-30 08:34:52', '2020-07-30 08:34:52'),
(195, 48, 'Buruk', '2020-07-30 08:34:52', '2020-07-30 08:34:52'),
(196, 48, 'Sangat Buruk', '2020-07-30 08:34:52', '2020-07-30 08:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pimpinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama_instansi`, `nama_pimpinan`, `alamat`, `keterangan`) VALUES
(11, 'Kominfo', 'David Sitorus', 'Tarutung', 'Aasadasda'),
(14, 'Kemendikbud', 'Fenny', 'Medan', 'asdsaa'),
(15, 'KemenPariwisata', 'John', 'medan', 'ket');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instansi_id` int(50) NOT NULL,
  `nama_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `instansi_id`, `nama_layanan`, `keterangan_layanan`) VALUES
(41, 11, 'Layanan Kominfo 1', 'Keterangan Layanan Kominfo 1'),
(44, 11, 'Layanan Kominfo 2', 'Keterangan Layanan Kominfo 2'),
(45, 14, 'Layanan Kemendikbud 1', 'Keterangan  Layanan Kemendikbud 1'),
(47, 11, 'Layanan Kominfo 3', 'Keterangan Layanan Kominfo 3'),
(49, 15, 'Layanan KemenPariwisata 1', 'Keterangan Layanan KemenPariwisata 1'),
(50, 15, 'Layanan KemenPariwisata 2', 'Keterangan Layanan KemenPariwisata 2'),
(51, 14, 'Layanan Kemendikbud 2', 'Keterangan Layanan Kemendikbud 2');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_01_085606_create_register_table', 1),
(4, '2020_07_01_095442_create_instansi_table', 1),
(5, '2020_07_07_065837_create_layanan_table', 1),
(6, '2020_07_12_012437_create_questionnaires_table', 2),
(7, '2020_07_12_013133_create_questionnaires_table', 3),
(8, '2014_10_12_100000_create_password_resets_table', 4),
(9, '2020_07_13_135056_create_questions_table', 4),
(10, '2020_07_13_135153_create_answers_table', 4),
(11, '2020_07_14_104530_create_surveys_table', 5),
(12, '2020_07_14_104554_create_survey_responses_table', 5);

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
-- Table structure for table `questionnaires`
--

CREATE TABLE `questionnaires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `instansi_id` int(150) NOT NULL,
  `layanan_id` int(150) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questionnaires`
--

INSERT INTO `questionnaires` (`id`, `user_id`, `instansi_id`, `layanan_id`, `title`, `purpose`, `created_at`, `updated_at`, `due_date`) VALUES
(29, 6, 11, 41, 'Kuesioner 1?', 'Tujuan 1', '2020-07-30 08:32:05', '2020-07-30 08:32:05', '2020-07-31'),
(30, 6, 14, 45, 'Kuesioner 2', 'Tujuan Kues 2', '2020-07-30 08:33:00', '2020-07-30 08:33:00', '2020-07-31'),
(31, 6, 15, 49, 'Kuesioner 3', 'Tujuan 3', '2020-07-30 08:34:05', '2020-07-30 08:34:05', '2020-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionnaire_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionnaire_id`, `question`, `created_at`, `updated_at`) VALUES
(43, 29, 'Pertanyaan 1?', '2020-07-30 08:32:18', '2020-07-30 08:32:18'),
(44, 29, 'Pertanyaan 2?', '2020-07-30 08:32:34', '2020-07-30 08:32:34'),
(45, 30, 'Pertanyaan a?', '2020-07-30 08:33:20', '2020-07-30 08:33:20'),
(46, 30, 'Pertanyaan b?', '2020-07-30 08:33:40', '2020-07-30 08:33:40'),
(47, 31, 'Pertanyaan 3.1?', '2020-07-30 08:34:21', '2020-07-30 08:34:21'),
(48, 31, 'Pertanyaan 3.2?', '2020-07-30 08:34:52', '2020-07-30 08:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionnaire_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `questionnaire_id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(18, 29, 'david', 'david@gmail.com', '2020-07-30 08:35:34', '2020-07-30 08:35:34'),
(19, 30, 'david', 'david@gmail.com', '2020-07-30 08:35:45', '2020-07-30 08:35:45'),
(20, 31, 'david', 'david@gmail.com', '2020-07-30 08:35:56', '2020-07-30 08:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `survey_id` bigint(20) UNSIGNED NOT NULL,
  `answer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_responses`
--

INSERT INTO `survey_responses` (`id`, `question_id`, `survey_id`, `answer_id`, `created_at`, `updated_at`) VALUES
(37, 43, 18, 173, '2020-07-30 08:35:34', '2020-07-30 08:35:34'),
(38, 44, 18, 177, '2020-07-30 08:35:34', '2020-07-30 08:35:34'),
(39, 45, 19, 181, '2020-07-30 08:35:45', '2020-07-30 08:35:45'),
(40, 46, 19, 185, '2020-07-30 08:35:45', '2020-07-30 08:35:45'),
(41, 47, 20, 189, '2020-07-30 08:35:56', '2020-07-30 08:35:56'),
(42, 48, 20, 193, '2020-07-30 08:35:56', '2020-07-30 08:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `role` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nik`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Ruben', '123123123123', 'admin', '$2y$10$nHXY6BH4r7aiSPgiWqNp/uxG7ALwVTumV63EzfN0PC40i/U97ResO', 'FEKgvbCPli3dBO83yLvgeWfDof8iLIoKQCA36KTuiwHE6TMs25i2XwJ8JSI4', '2020-07-30 15:35:02', '2020-07-12'),
(14, 'david', '12345678912345678', 'pengguna', '$2y$10$Qr3dVeNBcavXUafGwDCZCuctKekCMZJd4kO7gMOLDLXtPldJnFh1u', 'ckZzQbLsNnPkFeDL1q35IVGJhIKRMHTgUrUhTIAV2YLb48E2eYL1Xck1HF18', '2020-07-30 15:35:58', '2020-07-15'),
(17, 'dayani', '4455687867867', 'pengguna', '$2y$10$f0a52RuNYMAY64UREXZfM.AJUed2oR.VV9wy4v2sySgAMAMTrDUxq', '5Rrsw8biGquMjiNhJZxzoEZOHNxsq4hzdkxxLnF3ObGhBVpxX2YBBohmDtou', '2020-07-30 06:26:48', '2020-07-15'),
(22, 'Fenny', '12312312312312312', 'pengguna', '$2y$10$lVnh8qD6AIELanlgXY5Sg.AjVkn8aDX4evFLyKfXAdRQ150XI0G8S', 'Rn1ka9ahKhoPFnW4v9t830bZrJ8763mNJMUkI2uIOkDXhEm0bNsvdjCLdVXF', '2020-07-15 15:40:55', '2020-07-15'),
(23, 'jona', '313123143242343241', 'pengguna', '$2y$10$3eJ9fyr0/ZNupI6Wt3N7yusnQq/v2dIvc797x7zpjF9SxM2SY9l/6', 'ulRBeu3V074PGEMU9xcsmFya58HwCNogRqmLVMp9KAJQ5dPHf8BX2zhasJFJ', '2020-07-30 06:18:02', '2020-07-26'),
(24, 'amsal', '1112223331231231231231231312', 'pengguna', '$2y$10$9Yr9vCRJd7u1CGUogFA.5OfGEjNHnUdA9TJeWyynYKI/3.8mY0GQS', 'rQEapyiCWavjQ1ay5ZHAS3aQGeDjIiOXYSl7vJPpOx3l1pR7tmgJVCv3wEjx', '2020-07-30 06:18:31', '2020-07-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questionnaires`
--
ALTER TABLE `questionnaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questionnaires`
--
ALTER TABLE `questionnaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

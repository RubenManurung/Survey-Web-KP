-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 04:44 AM
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
(121, 30, '1', '2020-07-29 13:29:29', '2020-07-29 13:29:29'),
(122, 30, '2', '2020-07-29 13:29:29', '2020-07-29 13:29:29'),
(123, 30, '3', '2020-07-29 13:29:29', '2020-07-29 13:29:29'),
(124, 30, '4', '2020-07-29 13:29:29', '2020-07-29 13:29:29'),
(125, 31, '1a', '2020-07-29 13:29:49', '2020-07-29 19:13:40'),
(126, 31, '2b', '2020-07-29 13:29:49', '2020-07-29 13:29:49'),
(127, 31, '3c', '2020-07-29 13:29:49', '2020-07-29 19:13:40'),
(128, 31, '4d', '2020-07-29 13:29:49', '2020-07-29 19:13:40'),
(129, 32, 'asd', '2020-07-29 19:14:53', '2020-07-29 19:14:53'),
(130, 32, 'sad', '2020-07-29 19:14:54', '2020-07-29 19:14:54'),
(131, 32, 'dsad', '2020-07-29 19:14:54', '2020-07-29 19:14:54'),
(132, 32, 'dsad', '2020-07-29 19:14:54', '2020-07-29 19:14:54'),
(133, 33, 'asda', '2020-07-29 19:15:01', '2020-07-29 19:15:01'),
(134, 33, 'sad', '2020-07-29 19:15:01', '2020-07-29 19:15:01'),
(135, 33, 'sad', '2020-07-29 19:15:01', '2020-07-29 19:15:01'),
(136, 33, 'sad', '2020-07-29 19:15:01', '2020-07-29 19:15:01');

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
(47, 11, 'Layanan Kominfo 3', 'Keterangan Layanan Kominfo 3');

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
(15, 6, 11, 41, 'Quesioner A', 'Tujuan A', '2020-07-29 13:29:18', '2020-07-29 13:29:18', '2020-07-31'),
(16, 6, 14, 45, 'Test Questionnaire', 'Tujuan Test', '2020-07-29 19:14:43', '2020-07-29 19:14:43', '2020-07-29');

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
(30, 15, 'Pertanyaan 1?', '2020-07-29 13:29:29', '2020-07-29 13:29:29'),
(31, 15, 'Pertanyaan 2?', '2020-07-29 13:29:49', '2020-07-29 13:29:49'),
(32, 16, 'Test 1?', '2020-07-29 19:14:53', '2020-07-29 19:14:53'),
(33, 16, 'asdas?', '2020-07-29 19:15:01', '2020-07-29 19:15:01');

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
(7, 15, 'jona', 'jona@gmail.com', '2020-07-29 13:44:31', '2020-07-29 13:44:31'),
(8, 15, 'dayani', 'dayani@gmail.com', '2020-07-29 13:46:17', '2020-07-29 13:46:17'),
(9, 15, 'Fenny', 'fenny@gmail.com', '2020-07-29 13:48:55', '2020-07-29 13:48:55'),
(10, 15, 'david', 'david@gmail.com', '2020-07-29 19:24:16', '2020-07-29 19:24:16');

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
(18, 30, 7, 124, '2020-07-29 13:44:31', '2020-07-29 13:44:31'),
(19, 31, 7, 128, '2020-07-29 13:44:31', '2020-07-29 13:44:31'),
(20, 30, 8, 123, '2020-07-29 13:46:17', '2020-07-29 13:46:17'),
(21, 31, 8, 127, '2020-07-29 13:46:17', '2020-07-29 13:46:17'),
(22, 30, 9, 122, '2020-07-29 13:48:55', '2020-07-29 13:48:55'),
(23, 31, 9, 126, '2020-07-29 13:48:55', '2020-07-29 13:48:55'),
(24, 30, 10, 121, '2020-07-29 19:24:16', '2020-07-29 19:24:16'),
(25, 31, 10, 125, '2020-07-29 19:24:16', '2020-07-29 19:24:16');

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
(6, 'Ruben', '123123123123', 'admin', '$2y$10$nHXY6BH4r7aiSPgiWqNp/uxG7ALwVTumV63EzfN0PC40i/U97ResO', 'qUHLSaSSPXPJg5ioijXVsDptFbtxgRb08woAV0FOw0f8FvkNDv9meIYPH8ya', '2020-07-30 02:25:28', '2020-07-12'),
(14, 'david', '12345678912345678', 'pengguna', '$2y$10$Qr3dVeNBcavXUafGwDCZCuctKekCMZJd4kO7gMOLDLXtPldJnFh1u', 'c6x2lHIR1yuxsxhZrAlLJ5oGVlDR8aKwkVl0mIcdCdZJi0Svdq4LbfVeU5jT', '2020-07-30 02:24:23', '2020-07-15'),
(17, 'dayani', '4455687867867', 'pengguna', '$2y$10$f0a52RuNYMAY64UREXZfM.AJUed2oR.VV9wy4v2sySgAMAMTrDUxq', 'AINUyNbYtIGWgT0K8Kh5mkHzvYa3To8i8rAZWJW09V7k3ti2YxePlq3AXYaa', '2020-07-29 20:48:21', '2020-07-15'),
(22, 'Fenny', '12312312312312312', 'pengguna', '$2y$10$lVnh8qD6AIELanlgXY5Sg.AjVkn8aDX4evFLyKfXAdRQ150XI0G8S', 'Rn1ka9ahKhoPFnW4v9t830bZrJ8763mNJMUkI2uIOkDXhEm0bNsvdjCLdVXF', '2020-07-15 15:40:55', '2020-07-15'),
(23, 'jona', '313123143242343241', 'pengguna', '$2y$10$3eJ9fyr0/ZNupI6Wt3N7yusnQq/v2dIvc797x7zpjF9SxM2SY9l/6', 'fTEjSjpTOhF3rDHeZffGQTYbJFx7KAnkv85G6shPdVttUtEAq09liWLXQIT4', '2020-07-29 20:45:47', '2020-07-26'),
(24, 'amsal', '1112223331231231231231231312', 'pengguna', '$2y$10$9Yr9vCRJd7u1CGUogFA.5OfGEjNHnUdA9TJeWyynYKI/3.8mY0GQS', 'UB0erjwIjjkjPHEvogwHXP1tfPX4yJ6OL6in4Ywco1uMYKJ9kO38CZg4Zfru', '2020-07-27 10:37:22', '2020-07-27');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questionnaires`
--
ALTER TABLE `questionnaires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

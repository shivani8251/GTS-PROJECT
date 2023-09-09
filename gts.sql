-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 02:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gts`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` bigint(20) NOT NULL,
  `choching_id` bigint(20) DEFAULT NULL,
  `Chapter_name` varchar(255) DEFAULT NULL,
  `Is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id`, `choching_id`, `Chapter_name`, `Is_active`, `create_at`, `update_at`) VALUES
(1, 1, 'Testing', 'Yes', '2022-02-23 10:59:14', NULL),
(2, 1, 'TestingDemo', 'Yes', '2022-02-23 11:20:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coching_list`
--

CREATE TABLE `coching_list` (
  `id` bigint(20) NOT NULL,
  `cooching_name` varchar(200) DEFAULT NULL,
  `category_id` varchar(100) DEFAULT NULL,
  `traning_practice` varchar(200) DEFAULT NULL,
  `classes` varchar(200) DEFAULT NULL,
  `mocktest` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `taughtby` varchar(200) DEFAULT NULL,
  `hails` varchar(200) DEFAULT NULL,
  `course_img` varchar(255) DEFAULT NULL,
  `highlight_id` varchar(100) DEFAULT NULL,
  `regular_price` varchar(100) DEFAULT NULL,
  `sale_price` varchar(200) DEFAULT NULL,
  `brochure` varchar(255) DEFAULT NULL,
  `Is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coching_list`
--

INSERT INTO `coching_list` (`id`, `cooching_name`, `category_id`, `traning_practice`, `classes`, `mocktest`, `duration`, `taughtby`, `hails`, `course_img`, `highlight_id`, `regular_price`, `sale_price`, `brochure`, `Is_active`, `create_at`, `updated_at`) VALUES
(1, 'dfas', '2', 'dsf', 'ds', 'Yes', 'fdc', 'sdf', 'rwsd', 'dfas_9303.jpg', '1', '23', '354', 'dfas_4548.pdf', 'Yes', '2022-02-22 13:22:10', '2022-02-23 06:35:27'),
(2, 'Testing', '2', 'asd', 'dsa', 'NO', '6 Month', 'Mayank', 'Hi Mayank', 'Testing_3995.png', '1', '123', '432', 'Testing_7527.pdf', 'Yes', '2022-02-23 13:31:01', '2022-02-23 13:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `flag` varchar(200) DEFAULT NULL,
  `Is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `flag`, `Is_active`, `create_at`, `update_at`) VALUES
(1, 'Testdf', 'Testdf.JPG', 'Yes', '2022-02-17 13:08:01', '2022-02-17 14:09:18'),
(2, 'jagstest', 'jagstest_3876.jpg', 'Yes', '2022-02-17 13:09:07', '2022-02-17 14:09:15'),
(3, 'test', 'test.8927.jpg', 'Yes', '2022-02-17 13:42:25', '2022-02-17 14:09:11'),
(4, 'Final Test', 'Final Test_8560.jpg', 'Yes', '2022-02-22 08:17:17', '2022-02-22 08:17:33'),
(5, 'Finalh', 'Finalh_6766.png', 'Yes', '2022-02-23 13:08:15', '2022-02-23 13:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) NOT NULL,
  `course` varchar(255) DEFAULT NULL,
  `duration` varchar(200) DEFAULT NULL,
  `c_type` varchar(200) DEFAULT NULL,
  `c_level` varchar(200) DEFAULT NULL,
  `tuition_fee` varchar(200) DEFAULT NULL,
  `live_cost` varchar(200) DEFAULT NULL,
  `application_fee` varchar(200) DEFAULT NULL,
  `intakes` varchar(255) DEFAULT NULL,
  `Is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `duration`, `c_type`, `c_level`, `tuition_fee`, `live_cost`, `application_fee`, `intakes`, `Is_active`, `create_at`, `update_at`) VALUES
(1, 'Testing', 'asd', 'type_2', 'level_1', '1234', '4564', '7894', '1,6', 'Yes', '2022-02-19 11:04:57', '2022-02-21 08:15:12'),
(2, 'Testing', '6 Month', 'type_2', 'level_2', '123', '321', '456', '7,1', 'Yes', '2022-02-23 13:22:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` bigint(20) NOT NULL,
  `course_category_name` varchar(200) DEFAULT NULL,
  `position` bigint(20) DEFAULT NULL,
  `Is_active` enum('Yes','No') DEFAULT 'Yes',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `course_category_name`, `position`, `Is_active`, `create_at`, `update_at`) VALUES
(1, 'Test', 1, 'Yes', '2022-02-21 09:25:31', NULL),
(2, 'Final', 2, 'Yes', '2022-02-21 09:31:38', '2022-02-21 10:28:03'),
(3, 'testhh', 5, 'Yes', '2022-02-21 09:32:58', '2022-02-21 10:48:55'),
(4, 'Testinwww', 2333, 'Yes', '2022-02-23 13:34:02', '2022-02-23 13:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `course_highlight`
--

CREATE TABLE `course_highlight` (
  `id` bigint(20) NOT NULL,
  `highlight_name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `posiotion` bigint(20) DEFAULT NULL,
  `Is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_highlight`
--

INSERT INTO `course_highlight` (`id`, `highlight_name`, `icon`, `posiotion`, `Is_active`, `create_at`, `update_at`) VALUES
(1, 'testingf h', 'testingf h_2723.jpg', 11, 'Yes', '2022-02-21 11:34:51', '2022-02-21 12:52:24'),
(2, 'Yess', 'Yess_1029.png', 122, 'Yes', '2022-02-23 13:34:42', '2022-02-23 13:35:06');

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
-- Table structure for table `institute_list`
--

CREATE TABLE `institute_list` (
  `id` bigint(20) NOT NULL,
  `ins_name` varchar(255) DEFAULT NULL,
  `country_id` varchar(202) DEFAULT NULL,
  `rank` bigint(100) DEFAULT NULL,
  `ug_pg_fee` bigint(100) DEFAULT NULL,
  `ug_fee_type` varchar(100) DEFAULT NULL,
  `cost_live` bigint(100) DEFAULT NULL,
  `cost_type` varchar(100) DEFAULT NULL,
  `accommodation` varchar(100) DEFAULT NULL,
  `type_institute` varchar(100) DEFAULT NULL,
  `found_year` bigint(100) DEFAULT NULL,
  `ilogo` varchar(255) DEFAULT NULL,
  `Is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institute_list`
--

INSERT INTO `institute_list` (`id`, `ins_name`, `country_id`, `rank`, `ug_pg_fee`, `ug_fee_type`, `cost_live`, `cost_type`, `accommodation`, `type_institute`, `found_year`, `ilogo`, `Is_active`, `create_at`, `update_at`) VALUES
(1, 'asdf', '2', 123, 456, 'INR', 567, 'GBP', 'Rent', 'Sports', 123456, 'asdf_6942.jpg', 'Yes', '2022-02-19 05:46:25', '2022-02-19 07:54:00'),
(2, 'sda', '3', 2, 12, 'INR', 43, 'INR', 'Rent', 'Read', 21, 'sda_2128.png', 'Yes', '2022-02-19 05:49:32', NULL),
(3, 'sda', '1', 2, 12, 'INR', 43, 'INR', 'Rent', 'Read', 21, 'sda_3697.png', 'Yes', '2022-02-19 05:49:44', '2022-02-19 07:54:05'),
(4, 'sdassss', '2', 2, 122, 'INR', 43, 'INR', 'Flat', 'Read', 2122, 'sdassss_5856.png', 'Yes', '2022-02-19 05:50:31', '2022-02-19 08:40:58'),
(5, 'final', '1', 11, 22, 'INR', 33, 'INR', 'Rent', 'Read', 44, 'final_9972.png', 'Yes', '2022-02-19 08:42:50', NULL),
(6, 'resdf', '2,3,1', 12, 21, 'GBP', 32, 'INR', 'Rent', 'Read', 12, 'resdf_6513.jpg', 'Yes', '2022-02-19 08:57:29', '2022-02-21 08:42:24'),
(7, 'asd', '3', 12, 21, 'INR', 212, 'INR', 'Rent', 'Read', 23, 'asd_2091.jpg', 'Yes', '2022-02-19 09:06:39', '2022-02-19 09:07:22'),
(8, 'Testing', '4,2', 12, 1000, 'GBP', 2000, 'INR', 'Flat', 'Sports', 2001, 'Testing_4382.jpg', 'Yes', '2022-02-22 08:21:23', NULL),
(9, 'mayank', '3', 1, 123, 'GBP', 321, 'GBP', 'Flat', 'Sports', 111111, 'mayank_7926.jpg', 'Yes', '2022-02-23 13:10:48', '2022-02-23 13:20:36');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `id` bigint(20) NOT NULL,
  `spname` varchar(255) DEFAULT NULL,
  `Is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `spname`, `Is_active`, `create_at`, `update_at`) VALUES
(1, 'asdfg', 'Yes', '2022-02-18 09:21:32', NULL),
(2, 'Testing', 'Yes', '2022-02-18 10:07:14', '2022-02-18 10:30:04'),
(3, 'Tes', 'Yes', '2022-02-18 10:07:42', '2022-02-18 10:30:01'),
(4, 'final', 'Yes', '2022-02-22 08:17:51', '2022-02-22 08:17:57'),
(5, 'Testhh', 'Yes', '2022-02-23 13:09:25', '2022-02-23 13:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `tid` bigint(20) NOT NULL,
  `clid` bigint(20) DEFAULT NULL,
  `cid` bigint(20) DEFAULT NULL,
  `topic_name` varchar(255) NOT NULL,
  `Is_active` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`tid`, `clid`, `cid`, `topic_name`, `Is_active`, `create_at`, `update_at`) VALUES
(1, 1, 2, 'Hello', 'Yes', '2022-02-23 12:12:43', NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$th79XqwJ2Ru0fXoKWqTJ9O7BS.aluZaiTaec9aKL6FlqQV1hUv6b2', NULL, '2022-02-17 00:50:56', '2022-02-17 00:50:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coching_list`
--
ALTER TABLE `coching_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_highlight`
--
ALTER TABLE `course_highlight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `institute_list`
--
ALTER TABLE `institute_list`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`tid`);

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
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coching_list`
--
ALTER TABLE `coching_list`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_highlight`
--
ALTER TABLE `course_highlight`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institute_list`
--
ALTER TABLE `institute_list`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `tid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

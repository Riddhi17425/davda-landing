-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2026 at 04:19 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diplatli_davda`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `front_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conclusion` text COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `title_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_title`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'gkjfdhgoiuirjrieu h', NULL, '2026-02-13 06:14:45', '2026-02-13 06:15:00', '2026-02-13 06:15:00'),
(2, 'Bellevue Vieraaa', 'bellevue-vieraaa', '2026-02-17 06:26:55', '2026-02-25 06:33:29', NULL),
(3, 'Bellevue Luxuria', 'bellevue-luxuria', '2026-02-24 03:14:02', '2026-02-25 06:34:01', NULL),
(4, 'Bellevue The Club', 'bellevue-the-club', '2026-02-25 06:34:26', '2026-02-25 06:34:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `interest` text,
  `message` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `phone`, `email`, `interest`, `message`, `created_at`, `updated_at`) VALUES
(1, 'yamini', '91226627680', 'webdeveloper10.intelliworkz@gmail.com', NULL, 'sfd', '2026-02-12 23:55:14', '2026-02-12 23:55:14'),
(2, 'hiral', '7636839792', 'webdeveloper10.intelliworkz@gmail.com', NULL, NULL, '2026-02-13 00:04:42', '2026-02-13 00:04:42'),
(3, 'yamini', '7636839792', 'webdeveloper10.intelliworkz@gmail.com', NULL, NULL, '2026-02-13 00:44:48', '2026-02-13 00:44:48'),
(4, 'hfj', '91226627680', 'webdeveloper10.intelliworkz@gmail.com', NULL, 'ignor', '2026-02-17 04:39:13', '2026-02-17 04:39:13'),
(5, 'test', '91226627680', 'webdeveloper10.intelliworkz@gmail.com', 'Residences', 'ignor', '2026-02-23 23:03:09', '2026-02-23 23:03:09'),
(6, 'Oswald Test', '9898989898', 'webdeveloper9.intelliworkz@gmail.com', 'Residences,all', 'TEST', '2026-03-31 00:59:19', '2026-03-31 00:59:19'),
(7, 'Oswald Test', '9898989898', 'webdeveloper9.intelliworkz@gmail.com', 'Residences,Club', 'TESTING', '2026-03-31 07:12:17', '2026-03-31 07:12:17'),
(8, 'Oswald Test', '9898989898', 'webdeveloper9.intelliworkz@gmail.com', 'Residences,Plots', 'test', '2026-03-31 08:39:13', '2026-03-31 08:39:13');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2023_05_03_064622_create_videos_table', 2),
(5, '2023_05_04_062230_create_out_clients_table', 3),
(6, '2023_05_04_062658_create_our_clients_table', 4),
(7, '2023_05_04_113821_create_whatourclientsays_table', 5),
(8, '2023_05_05_052201_create_certificate_table', 6),
(9, '2023_05_09_073529_create_product_table', 7);

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
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `category_id`, `title`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Hello', '[\"Dipak Makwana.webp\",\"Sumair Vidha.webp\",\"whatsapp (1).png\"]', '2026-02-17 07:10:40', '2026-02-17 07:13:46', '2026-02-17 07:13:46'),
(2, 2, 'Temple', '[\"Temple.webp\"]', '2026-02-23 01:41:14', '2026-02-25 06:36:45', NULL),
(3, 2, 'Gardens', '[\"Landscaped Garden.webp\"]', '2026-02-25 06:37:15', '2026-03-25 07:44:15', NULL),
(4, 2, 'Sports Zone', '[\"Sports Zone.webp\"]', '2026-02-25 06:37:45', '2026-03-25 07:44:34', NULL),
(5, 2, 'Jogging Track', '[\"Jogging Track.webp\"]', '2026-02-25 06:38:09', '2026-03-25 07:45:07', NULL),
(6, 2, 'Multi-Purpose Lawn', '[\"Multi-Purpose Lawn.webp\"]', '2026-02-25 06:38:37', '2026-03-25 07:45:20', NULL),
(7, 3, 'Jain Derasar', '[\"Jain Derasar.webp\"]', '2026-02-25 06:40:31', '2026-03-25 07:46:00', NULL),
(8, 3, 'Lake', '[\"lake.webp\"]', '2026-02-25 06:41:16', '2026-02-25 06:41:16', NULL),
(9, 3, 'Walking Tracks', '[\"walking tracks.webp\"]', '2026-02-25 06:41:48', '2026-03-25 07:48:27', NULL),
(10, 3, 'Yoga Zones', '[\"yoga zones.webp\"]', '2026-02-25 06:42:13', '2026-03-25 07:48:42', NULL),
(11, 3, 'Swimming Pool', '[\"swimming pool.webp\"]', '2026-02-25 06:42:40', '2026-03-25 07:48:55', NULL),
(12, 4, 'Lawn Tennis', '[\"Lawn tennis.webp\"]', '2026-02-25 06:43:31', '2026-03-25 07:50:04', NULL),
(13, 4, 'Swimming', '[\"swimming.webp\"]', '2026-02-25 06:43:54', '2026-02-25 06:43:54', NULL),
(14, 4, 'Gymnasium', '[\"gymnasium.webp\"]', '2026-02-25 06:44:23', '2026-03-25 08:24:05', NULL),
(15, 4, 'Indoor Games', '[\"indoor games.webp\"]', '2026-02-25 06:44:49', '2026-03-25 07:51:01', NULL),
(16, 4, 'Event Venue', '[\"event venue.webp\"]', '2026-02-25 06:45:14', '2026-03-25 07:51:12', NULL);

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
  `role` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$y/9XSs1dM8dq0IGBXP0WF.zJ9/DGYlz2LY4B9arMJ3.4GQ.G7i4t2', NULL, 2, '2023-05-01 00:08:03', '2023-05-01 00:08:03'),
(2, 'Davada', 'davada@gmail.com', NULL, '$2y$10$1jtg.zae0qfitQci61Sud.1.9uEZ88Wsai6Sc416OgHS5UQq8fWFi', 'PMb2zXiHC6GoOjFcQdao873LS8j5mfHGVdjyeeOupI33EctAEoiRbuOWst1x', 1, '2023-05-01 01:29:06', '2023-05-01 01:29:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

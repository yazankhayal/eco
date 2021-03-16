-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 06:53 PM
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
-- Database: `eco`
--

-- --------------------------------------------------------

--
-- Table structure for table `dog`
--

CREATE TABLE `dog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dog`
--

INSERT INTO `dog` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'affenpinscher', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(2, 'african', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(3, 'airedale', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(4, 'akita', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(5, 'appenzeller', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(6, 'australian', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(7, 'basenji', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(8, 'beagle', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(9, 'bluetick', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(10, 'borzoi', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(11, 'bouvier', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(12, 'boxer', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(13, 'brabancon', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(14, 'briard', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(15, 'buhund', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(16, 'bulldog', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(17, 'bullterrier', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(18, 'cairn', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(19, 'cattledog', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(20, 'chihuahua', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(21, 'chow', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(22, 'clumber', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(23, 'cockapoo', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(24, 'collie', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(25, 'coonhound', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(26, 'corgi', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(27, 'cotondetulear', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(28, 'dachshund', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(29, 'dalmatian', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(30, 'dane', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(31, 'deerhound', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(32, 'dhole', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(33, 'dingo', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(34, 'doberman', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(35, 'elkhound', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(36, 'entlebucher', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(37, 'eskimo', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(38, 'finnish', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(39, 'frise', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(40, 'germanshepherd', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(41, 'greyhound', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(42, 'groenendael', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(43, 'havanese', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(44, 'hound', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(45, 'husky', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(46, 'keeshond', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(47, 'kelpie', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(48, 'komondor', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(49, 'kuvasz', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(50, 'labrador', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(51, 'leonberg', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(52, 'lhasa', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(53, 'malamute', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(54, 'malinois', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(55, 'maltese', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(56, 'mastiff', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(57, 'mexicanhairless', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(58, 'mix', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(59, 'mountain', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(60, 'newfoundland', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(61, 'otterhound', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(62, 'ovcharka', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(63, 'papillon', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(64, 'pekinese', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(65, 'pembroke', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(66, 'pinscher', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(67, 'pitbull', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(68, 'pointer', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(69, 'pomeranian', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(70, 'poodle', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(71, 'pug', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(72, 'puggle', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(73, 'pyrenees', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(74, 'redbone', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(75, 'retriever', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(76, 'ridgeback', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(77, 'rottweiler', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(78, 'saluki', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(79, 'samoyed', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(80, 'schipperke', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(81, 'schnauzer', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(82, 'setter', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(83, 'sheepdog', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(84, 'shiba', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(85, 'shihtzu', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(86, 'spaniel', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(87, 'springer', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(88, 'stbernard', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(89, 'terrier', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(90, 'vizsla', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(91, 'waterdog', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(92, 'weimaraner', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(93, 'whippet', '2021-03-16 16:21:56', '2021-03-16 16:21:56'),
(94, 'wolfhound', '2021-03-16 16:21:56', '2021-03-16 16:21:56');

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
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nelson', '2021-03-16 16:40:53', '2021-03-16 16:40:53'),
(3, 'Lodon', '2021-03-16 16:53:46', '2021-03-16 16:53:46'),
(4, 'Leeds', '2021-03-16 16:53:52', '2021-03-16 16:53:52');

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
(4, '2021_03_16_161739_create_dog_table', 2),
(5, '2021_03_16_163056_create_location_table', 3),
(6, '2021_03_16_165514_create_user_table', 4);

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `dog_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `location_id`, `dog_id`, `created_at`, `updated_at`, `name`) VALUES
(1, 4, 8, '2021-03-16 17:09:59', '2021-03-16 17:16:30', 'Led M'),
(2, 3, 12, '2021-03-16 17:11:41', '2021-03-16 17:17:15', 'Lod Boxer');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_dog_id_foreign` (`dog_id`),
  ADD KEY `user_location_id_foreign` (`location_id`);

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
-- AUTO_INCREMENT for table `dog`
--
ALTER TABLE `dog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_dog_id_foreign` FOREIGN KEY (`dog_id`) REFERENCES `dog` (`id`),
  ADD CONSTRAINT `user_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

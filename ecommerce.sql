-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 03:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 1, NULL, NULL),
(2, 'Laptop', 1, NULL, NULL),
(4, 'Camera', 1, NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `payment_method`, `payment_status`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'pending', 'cash', 'pending', 'test address', NULL, NULL),
(2, 3, 2, 'In-Transit', 'cash', 'pending', 'test address', NULL, NULL),
(3, 2, 2, 'In-Transit', 'cash', 'pending', 'hvdvb', NULL, NULL),
(4, 2, 2, 'pending', 'CC', 'pending', 'test address', NULL, NULL),
(5, 2, 2, 'pending', 'CC', 'pending', 'shdshcdn', NULL, NULL),
(6, 1, 2, 'pending', 'CC', 'pending', 'dhfgdh', NULL, NULL),
(7, 1, 2, 'pending', 'CC', 'pending', 'dhfgdh', NULL, NULL),
(8, 2, 2, 'pending', 'CC', 'pending', 'test addresss', NULL, NULL),
(9, 1, 2, 'pending', 'CC', 'pending', 'test address', NULL, NULL),
(10, 1, 2, 'pending', 'CC', 'pending', 'test address', NULL, NULL),
(11, 1, 2, 'pending', 'CC', 'pending', 'test address', NULL, NULL),
(12, 2, 2, 'pending', 'CC', 'pending', 'test address', NULL, NULL),
(13, 2, 2, 'pending', 'CC', 'pending', 'test address', NULL, NULL),
(14, 2, 2, 'pending', 'CC', 'pending', 'test address', NULL, NULL),
(15, 4, 2, 'pending', 'CC', 'pending', 'test address', NULL, NULL),
(16, 2, 2, 'pending', 'CC', 'pending', 'test adddress2', NULL, NULL),
(17, 2, 2, 'pending', 'CC', 'pending', 'my address', NULL, NULL),
(18, 1, 2, 'pending', 'CC', 'pending', 'test Afdrsegbkv gjb', NULL, NULL),
(19, 1, 2, 'pending', 'CC', 'pending', 'test Afdrsegbkv gjb', NULL, NULL),
(20, 1, 2, 'pending', 'CC', 'pending', 'test Afdrsegbkv gjb', NULL, NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `qty`, `description`, `gallery`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'LG', 5, '<p>hdfchn hrv rvf&nbsp; ryv hrf h</p>', '1623741974_lg.png', 5000.00, 1, '2021-06-14 20:26:14', '2021-06-14 20:26:14'),
(2, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(3, 2, 'Test 100', 4, 'sc kfd cbdhvb', '', 1000.00, 1, NULL, '2021-06-23 02:48:11'),
(4, 4, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(5, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(6, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(7, 4, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(8, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(9, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(10, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(11, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(12, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(13, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(14, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(15, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(16, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(17, 1, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(18, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(19, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(20, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(21, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(22, 2, 'Test', 4, 'sc kfd cbdhvb ', '1623741974_lg.png', 1000.00, 1, NULL, NULL),
(23, 2, 'Daikin', 5, '<p>Test Product</p>', '1624431963_Daikin-01.png', 40000.00, 1, '2021-06-23 01:36:04', '2021-06-23 01:36:04'),
(25, 1, 'test mobile', 2, '<p>dgh khbvh</p>', '1624432278_bg2.jpg', 2000.00, 1, '2021-06-23 01:41:18', '2021-06-23 01:41:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', NULL, NULL),
(2, 0, 'user', NULL, NULL);

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
  `role_id` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$806znByIwsf4Cq15TyCs.ueDs.C11B4VFVn0WKrFRTtYhsY.OuFbG', 1, NULL, '2021-06-18 04:47:55', '2021-06-23 01:32:53'),
(2, 'User Pinku', 'user@gmail.com', NULL, '$2y$10$bO8c8cNj5TIfMWzOetslqemfwzaBwHBVMTun.bfUF93wX.iJKTTym', 0, NULL, '2021-06-18 04:47:55', '2021-06-18 04:47:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

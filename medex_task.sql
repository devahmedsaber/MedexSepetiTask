-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2023 at 11:09 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medex_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amazon', 'Amazon Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL),
(2, 'H&M', 'H&M Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL),
(3, 'Pharco', 'Pharco Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL),
(4, 'Toyota', 'Toyota Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL),
(5, 'Logan', 'Logan Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL),
(6, 'Xiaomi', 'Xiaomi Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL),
(7, 'Nokia', 'Nokia Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL),
(8, 'Samsung', 'Samsung Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL),
(9, 'Vevo', 'Vevo Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL),
(10, 'Alcatel', 'Alcatel Brand', 'uploads/products/images/1683984780610.jpg', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Design', 'Design Category', 'active', NULL, NULL),
(2, 'Development', 'Development Category', 'active', NULL, NULL),
(3, 'Marketing', 'Marketing Category', 'active', NULL, NULL),
(4, 'Business', 'Business Category', 'active', NULL, NULL),
(5, 'Music', 'Music Category', 'active', NULL, NULL),
(6, 'Photography', 'Photography Category', 'active', NULL, NULL),
(7, 'IT', 'IT Category', 'active', NULL, NULL),
(8, 'Games', 'Games Category', 'active', NULL, NULL),
(9, 'Films', 'Films Category', 'active', NULL, NULL),
(10, 'Others', 'Others Category', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_13_093845_create_categories_table', 1),
(6, '2023_05_13_093917_create_brands_table', 1),
(7, '2023_05_13_093930_create_products_table', 1);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci,
  `tag` enum('normal','best_selling','most_viewed','just_arrived') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `added_by` bigint DEFAULT NULL,
  `total_views` int NOT NULL DEFAULT '0',
  `is_promoted` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `price`, `image`, `tag`, `added_by`, `total_views`, `is_promoted`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Product 1', 'Product 1 Description Here', 2500, 'uploads/products/images/1683984780610.jpg', 'normal', 1, 210, 'yes', 'active', NULL, NULL),
(2, 4, 'Product 2', 'Product 2 Description Here', 3780, 'uploads/products/images/1683984780610.jpg', 'best_selling', 2, 540, 'no', 'active', NULL, NULL),
(3, 1, 'Product 3', 'Product 3 Description Here', 6905, 'uploads/products/images/1683984780610.jpg', 'most_viewed', 2, 430, 'yes', 'active', NULL, NULL),
(4, 8, 'Product 4', 'Product 4 Description Here', 4782, 'uploads/products/images/1683984780610.jpg', 'most_viewed', 1, 120, 'no', 'active', NULL, NULL),
(5, 3, 'Product 5', 'Product 5 Description Here', 4800, 'uploads/products/images/1683984780610.jpg', 'just_arrived', 1, 630, 'no', 'active', NULL, NULL),
(6, 2, 'Product 6', 'Product 6 Description Here', 7891, 'uploads/products/images/1683984780610.jpg', 'just_arrived', 1, 458, 'yes', 'active', NULL, NULL),
(7, 1, 'Product 7', 'Product 7 Description Here', 7412, 'uploads/products/images/1683984780610.jpg', 'most_viewed', 2, 364, 'no', 'active', NULL, NULL),
(8, 4, 'Product 8', 'Product 8 Description Here', 3587, 'uploads/products/images/1683984780610.jpg', 'best_selling', 1, 120, 'yes', 'active', NULL, NULL),
(9, 1, 'Product 9', 'Product 9 Description Here', 4561, 'uploads/products/images/1683984780610.jpg', 'best_selling', 2, 845, 'no', 'active', NULL, NULL),
(10, 5, 'Product 10', 'Product 10 Description Here', 1254, 'uploads/products/images/1683984780610.jpg', 'normal', 1, 45, 'yes', 'active', NULL, NULL),
(11, 2, 'Test Product', 'Test Product Description', 2800, 'uploads/products/images/1683984780610.jpg', 'normal', 1, 0, 'no', 'active', '2023-05-13 10:20:37', '2023-05-13 10:20:37'),
(12, 3, 'Test Product', 'Test Product Description', 2800, 'uploads/products/images/1683984780610.jpg', 'normal', 2, 0, 'yes', 'active', '2023-05-13 10:32:19', '2023-05-13 10:32:19'),
(13, 3, 'Test Product', 'Test Product Description', 2800, 'uploads/products/images/1683984780610.jpg', 'normal', 1, 0, 'no', 'active', '2023-05-13 10:33:01', '2023-05-13 10:33:01'),
(14, 5, 'Product 10', 'Product 10 Description Here', 3780, 'uploads/products/images/1683984780610.jpg', 'best_selling', 2, 540, 'yes', 'active', NULL, NULL),
(15, 5, 'Product 11', 'Product 11 Description Here', 3780, 'uploads/products/images/1683984780610.jpg', 'best_selling', 2, 540, 'no', 'active', NULL, NULL),
(16, 5, 'Product 12', 'Product 12 Description Here', 3780, 'uploads/products/images/1683984780610.jpg', 'best_selling', 2, 540, 'yes', 'active', NULL, NULL),
(17, 5, 'Product 13', 'Product 13 Description Here', 3780, 'uploads/products/images/1683984780610.jpg', 'best_selling', 2, 540, 'no', 'active', NULL, NULL),
(18, 1, 'Product 20', 'Product 20 Description Here', 6905, 'uploads/products/images/1683984780610.jpg', 'most_viewed', 2, 430, 'yes', 'active', NULL, NULL),
(19, 3, 'Product 21', 'Product 21 Description Here', 6905, 'uploads/products/images/1683984780610.jpg', 'most_viewed', 2, 430, 'yes', 'active', NULL, NULL),
(20, 2, 'Product 22', 'Product 22 Description Here', 6905, 'uploads/products/images/1683984780610.jpg', 'most_viewed', 2, 430, 'yes', 'active', NULL, NULL),
(21, 5, 'Product 23', 'Product 23 Description Here', 6905, 'uploads/products/images/1683984780610.jpg', 'most_viewed', 2, 430, 'yes', 'active', NULL, NULL),
(22, 4, 'Product 24', 'Product 24 Description Here', 6905, 'uploads/products/images/1683984780610.jpg', 'most_viewed', 2, 430, 'yes', 'active', NULL, NULL),
(23, 1, 'Product 25', 'Product 25 Description Here', 6905, 'uploads/products/images/1683984780610.jpg', 'most_viewed', 2, 430, 'yes', 'active', NULL, NULL),
(24, 3, 'Product 50', 'Product 50 Description Here', 4800, 'uploads/products/images/1683984780610.jpg', 'just_arrived', 1, 630, 'no', 'active', NULL, NULL),
(25, 2, 'Product 58', 'Product 58 Description Here', 7891, 'uploads/products/images/1683984780610.jpg', 'just_arrived', 1, 458, 'yes', 'active', NULL, NULL),
(26, 3, 'Product 56', 'Product 56 Description Here', 4800, 'uploads/products/images/1683984780610.jpg', 'just_arrived', 1, 630, 'no', 'active', NULL, NULL),
(27, 2, 'Product 55', 'Product 55 Description Here', 7891, 'uploads/products/images/1683984780610.jpg', 'just_arrived', 1, 458, 'yes', 'active', NULL, NULL),
(28, 3, 'Product 77', 'Product 77 Description Here', 4800, 'uploads/products/images/1683984780610.jpg', 'just_arrived', 1, 630, 'no', 'active', NULL, NULL),
(29, 2, 'Product 78', 'Product 78 Description Here', 7891, 'uploads/products/images/1683984780610.jpg', 'just_arrived', 1, 458, 'yes', 'active', NULL, NULL),
(30, 5, 'Test Product Z', 'Test Product Z Description', 2800, 'uploads/products/images/1684004133462.jpg', 'normal', NULL, 0, 'no', 'active', '2023-05-13 15:55:33', '2023-05-13 15:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$CjzVFSON/gOxApPXoYHFCOigao8G.9Hukg4kgSCvUf1NWmHuUfjtO', NULL, '2023-05-14 10:50:06', '2023-05-14 10:50:06'),
(2, 'Ahmed', 'ahmed@gmail.com', NULL, '$2y$10$CjzVFSON/gOxApPXoYHFCOigao8G.9Hukg4kgSCvUf1NWmHuUfjtO', NULL, '2023-05-14 10:50:06', '2023-05-14 10:50:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

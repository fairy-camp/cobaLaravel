-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 07:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_blog`
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
(5, '2022_10_10_034014_create_posts_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excert` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `excert`, `body`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 'Judul Pertama', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur in nam alias soluta rerum, blanditiis magni itaque repudiandae, earum excepturi tempora quod! Tempora, rerum dolorum! Libero veritatis obcaecati exercitationem odit ex. Eum minima voluptatum tota', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum totam corrupti quas, veniam a laudantium officia maiores explicabo non debitis cumque sunt facilis accusamus ea quia perferendis repellat minima nisi, perspiciatis iste magni pariatur odit? Quae exercitationem cumque obcaecati placeat iste doloribus eius error quisquam maxime earum, molestiae laboriosam delectus suscipit sapiente architecto odit veniam molestias qui, fugit id dolorem illum, dolore atque! Quasi distinctio repudiandae a tenetur cumque alias ratione porro iusto sint omnis ut sapiente labore possimus doloribus tempore dolores eveniet, eum ducimus excepturi rem doloremque! Mollitia delectus quod aliquam voluptas quo commodi modi dolorum voluptatum eveniet aspernatur?', '2022-10-10 03:55:18', '2022-10-09 20:53:17', '2022-10-09 20:54:32'),
(2, 'Judul Kedua', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur in nam alias soluta rerum, blanditiis magni itaque repudiandae, earum excepturi tempora quod! Tempora, rerum dolorum! Libero veritatis obcaecati exercitationem odit ex. Eum minima voluptatum tota', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum totam corrupti quas, veniam a laudantium officia maiores explicabo non debitis cumque sunt facilis accusamus ea quia perferendis repellat minima nisi, perspiciatis iste magni pariatur odit? Quae exercitationem cumque obcaecati placeat iste doloribus eius error quisquam maxime earum, molestiae laboriosam delectus suscipit sapiente architecto odit veniam molestias qui, fugit id dolorem illum, dolore atque! Quasi distinctio repudiandae a tenetur cumque alias ratione porro iusto sint omnis ut sapiente labore possimus doloribus tempore dolores eveniet, eum ducimus excepturi rem doloremque! Mollitia delectus quod aliquam voluptas quo commodi modi dolorum voluptatum eveniet aspernatur?', '2022-10-10 03:56:51', '2022-10-09 20:56:51', '2022-10-09 20:56:51'),
(3, 'Judul Ketiga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio enim qui soluta itaque, repellat culpa esse, suscipit sapiente tempora voluptatibus accusamus ab, laudantium tenetur maiores? Nisi odio accusantium, distinctio dolorem quaerat qui officia et optio aliquam ea incidunt atque at!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio in earum temporibus enim, saepe maiores quod obcaecati distinctio aperiam, fugit tempore dignissimos commodi, soluta tempora minus quidem eaque quasi dolores reprehenderit esse at facere. Natus sint voluptate error, repellat possimus soluta esse id alias nemo minus voluptatum, aperiam eos omnis nisi labore asperiores quo. Sed dolorum consequuntur aliquam obcaecati quae doloribus nulla praesentium, esse quia voluptatibus, eveniet architecto! Vel quia impedit iusto, assumenda, similique vitae necessitatibus aliquid eligendi obcaecati velit, sequi quis. Ab voluptate, quo aperiam, dignissimos nemo mollitia modi ullam illum totam pariatur optio sunt sint rerum? Repellendus aliquid ullam possimus facilis sequi nostrum expedita quo totam natus architecto fugit voluptatibus illum vel maxime, deserunt sit quia nihil deleniti, incidunt, modi culpa impedit! Inventore numquam cupiditate velit expedita minima doloribus quam, ad, vero sed voluptatum iste eaque, atque aspernatur? Minima vel, officiis delectus quod sapiente autem nisi amet. Iusto nesciunt deserunt animi labore unde libero corrupti eveniet hic! Qui optio, ipsum nesciunt, error deleniti quam ipsa autem eos, mollitia voluptatibus nam temporibus ipsam similique nulla non quas. Harum in dolorem quisquam suscipit reiciendis illum molestiae saepe, dicta quos voluptates perspiciatis accusantium non. Sunt porro cumque ratione iure enim animi!', '2022-10-10 04:15:28', '2022-10-09 21:15:28', '2022-10-09 21:15:28');

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

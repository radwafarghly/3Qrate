-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 03:36 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduation`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floorsnum` int(11) NOT NULL,
  `unitsnum` int(11) NOT NULL,
  `compound_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `number`, `img`, `floorsnum`, `unitsnum`, `compound_id`, `created_at`, `updated_at`) VALUES
(1, 50, 'mn', 3, 100, 1, NULL, NULL),
(2, 10, '81f2f420383b3d5194a82055c59ec35b_1518866235.jpg', 3, 20, 2, NULL, '2018-02-17 09:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `compounds`
--

CREATE TABLE `compounds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compounds`
--

INSERT INTO `compounds` (`id`, `name`, `location`, `img`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'cairo', 'bbb', '', 14, NULL, NULL),
(2, 'assuit', 'dd', 'd', 14, NULL, NULL),
(3, 'aya', 'assuit', 'c2a825dc97368862844d2c06b99d4cb9_1518806658.jpg', 15, '2018-02-16 16:44:18', '2018-02-16 16:44:18'),
(4, 'new Cairo  ', 'sssnhjhj', '18620083_524130921261059_369264725272740592_n_1518806687.jpg', 16, '2018-02-16 16:44:47', '2018-02-16 16:44:47'),
(5, 'mora', 'cairo', 'cairo.jpg', 14, NULL, NULL),
(6, 'sandra', 'assuit', 'cairo.jpg', 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sendra', 'sandra@gmail.com', 'بلح الشام', '2018-02-15 10:07:23', '2018-02-15 10:07:23'),
(2, 'hhhhhjdhdhddhdhdhhhd', 'aradwa852@yahoo.com', 'kss,,dajbdydjdj', '2018-02-18 11:42:38', '2018-02-18 11:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_10_174352_create_site_settings_table', 1),
(4, '2018_02_11_084629_create_projects_table', 1),
(5, '2018_02_11_085855_create_compounds_table', 1),
(6, '2018_02_11_090122_create_buildings_table', 1),
(7, '2018_02_11_090346_create_units_table', 1),
(8, '2018_02_11_090952_create_contacts_table', 1),
(9, '2018_02_11_093808_entrust_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Display Role Listing', 'See only Listing Of Role', '2018-02-12 18:10:54', '2018-02-12 18:10:54'),
(2, 'role-create', 'Create Role', 'Create New Role', '2018-02-12 18:10:54', '2018-02-12 18:10:54'),
(3, 'role-edit', 'Edit Role', 'Edit Role', '2018-02-12 18:10:54', '2018-02-12 18:10:54'),
(4, 'role-delete', 'Delete Role', 'Delete Role', '2018-02-12 18:10:54', '2018-02-12 18:10:54'),
(5, 'project-list', 'Display Project Listing', 'See only Listing Of Project', '2018-02-12 18:10:54', '2018-02-12 18:10:54'),
(6, 'project-create', 'Create Project', 'Create New Project', '2018-02-12 18:10:54', '2018-02-12 18:10:54'),
(7, 'project-edit', 'Edit Project', 'Edit Project', '2018-02-12 18:10:54', '2018-02-12 18:10:54'),
(8, 'project-delete', 'Delete Project', 'Delete Project', '2018-02-12 18:10:54', '2018-02-12 18:10:54'),
(9, 'compound-list', 'Display Compound Listing', 'See only Listing Of Compound', '2018-02-12 18:10:54', '2018-02-12 18:10:54'),
(10, 'compound-create', 'Create Compound', 'Create New Compound', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(11, 'compound-edit', 'Edit Compound', 'Edit Compound', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(12, 'compound-delete', 'Delete Compound', 'Delete Compound', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(13, 'building-list', 'Display Building Listing', 'See only Listing Of Building', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(14, 'building-create', 'Create Building', 'Create New Building', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(15, 'building-edit', 'Edit Building', 'Edit Building', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(16, 'building-delete', 'Delete Building', 'Delete Building', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(17, 'unit-list', 'Display Unit Listing', 'See only Listing Of Unit', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(18, 'uint-create', 'Create Unit', 'Create New Unit', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(19, 'unit-edit', 'Edit Unit', 'Edit Unit', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(20, 'unit-delete', 'Delete Unit', 'Delete Unit', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(21, 'contact-list', 'Display Contact Listing', 'See only Listing Of Contact', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(22, 'contact-create', 'Create Contact', 'Create New Contact', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(23, 'contact-edit', 'Edit Contact', 'Edit Contact', '2018-02-12 18:10:55', '2018-02-12 18:10:55'),
(24, 'contact-delete', 'Delete Contact', 'Delete Contact', '2018-02-12 18:10:55', '2018-02-12 18:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `governate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `governate`, `city`, `img`, `created_at`, `updated_at`) VALUES
(14, 'نتتااااااااالاتنمك', 'ةةةةةةةةةةةةةةةةةةةةةةةةةةةةة', 'ننننننننننننننلهعjjjjjjjjjjjjjjj', 'A_1518602296.PNG', '2018-02-14 06:24:51', '2018-02-14 07:58:16'),
(15, 'radwa', 'assuit', 'rr', 'fff', NULL, NULL),
(16, 'new Cairo', 'assuit', 'Assuit', '61df4253f83036b455f7a1379634b85c_1518806641.jpg', '2018-02-16 16:44:02', '2018-02-16 16:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'can do all', '2018-02-13 12:25:46', '2018-02-13 12:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namesettings` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` int(11) NOT NULL,
  `extra` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `building_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `number`, `size`, `price`, `floor`, `status`, `img`, `rooms`, `extra`, `user_id`, `building_id`, `created_at`, `updated_at`) VALUES
(1, 1, 200, 200000, 1, 1, 'A_1518602296.PNG', 3, 'zzzzzz', NULL, 1, NULL, NULL),
(2, 1, 200, 1500, 2, 0, '18620083_524130921261059_369264725272740592_n_1518866494.jpg', 6, 'hee', NULL, 2, '2018-02-17 09:21:34', '2018-02-17 09:21:34'),
(3, 2, 90, 250, 2, 1, '32650d62c5082851565d28c2ee624ff8_1518867467.jpg', 3, 'ttt', NULL, 2, '2018-02-17 09:37:47', '2018-02-17 09:37:47'),
(4, 2, 80, 1500, 3, 1, '61df4253f83036b455f7a1379634b85c_1518872739.jpg', 4, 'sss', NULL, 1, '2018-02-17 11:05:39', '2018-02-17 11:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'radwa', 'radwa@yahoo.com', '$2y$10$l/1caz95fvh1RgmQ044CWuXCO8zdWXSpxkUnooUlA2JA8RnAKgDi6', 1, '35qzrSzLnMA0KLMDhvR3lEvj1mWZwrdGa1TfhRkZHliQyj9yUqyNQ2EBEUyh', '2018-02-12 18:11:55', '2018-02-12 18:11:55'),
(2, 'aya', 'aya@gmail.com', '$2y$10$78EE5Sp0osPgjj8.gt0VkOR5sVFTqZNt7Ffdw6.cW6Nu5Fpz7KPO.', 1, NULL, '2018-02-13 12:26:17', '2018-02-13 12:28:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buildings_compound_id_foreign` (`compound_id`);

--
-- Indexes for table `compounds`
--
ALTER TABLE `compounds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compounds_project_id_foreign` (`project_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `units_user_id_foreign` (`user_id`),
  ADD KEY `units_building_id_foreign` (`building_id`);

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
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `compounds`
--
ALTER TABLE `compounds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buildings`
--
ALTER TABLE `buildings`
  ADD CONSTRAINT `buildings_compound_id_foreign` FOREIGN KEY (`compound_id`) REFERENCES `compounds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compounds`
--
ALTER TABLE `compounds`
  ADD CONSTRAINT `compounds_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `units_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

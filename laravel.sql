-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 12:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Properti', NULL, NULL),
(2, 'Kendaraan', NULL, NULL),
(3, 'Makanan', NULL, NULL),
(4, 'Elektronik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `posting_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `body`, `user_id`, `posting_id`, `created_at`, `updated_at`) VALUES
(5, 'Mantap gan', 26, 69, '2020-07-07 06:07:34', '2020-07-07 06:07:34'),
(7, 'Stok ready bos?', 1, 71, '2020-07-20 22:53:51', '2020-07-20 22:53:51'),
(8, 'DP berapa gan?', 1, 69, '2020-07-20 22:54:33', '2020-07-20 22:54:33'),
(9, 'Waaw keren', 1, 76, '2020-07-20 22:58:08', '2020-07-20 22:58:08');

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
(6, '2020_06_25_184840_create_categories_table', 1),
(7, '2020_06_25_185000_create_profiles_table', 2),
(8, '2020_06_25_185114_create_postings_table', 3),
(9, '2020_06_25_185212_create_posting_photos_table', 4),
(10, '2020_06_25_185236_create_comments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `postings`
--

CREATE TABLE `postings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_khusus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postings`
--

INSERT INTO `postings` (`id`, `user_id`, `category_id`, `judul`, `keterangan_khusus`, `harga`, `deskripsi`, `created_at`, `updated_at`) VALUES
(69, 26, 1, 'Dijual rumah tipe 36', 'Lokasi: Cempaka Putih', '500.000.000', 'km tdr 3 km mandi 2, dapur, cartport, garden, listrik 1300 jet pom toren, pagar , model minimalis', '2020-07-07 01:09:50', '2020-07-07 02:46:27'),
(70, 1, 2, 'Dijual Isuzu Panther', 'Tahun 2007', '70.000.000', 'KM 89 ribu  Tangan KE 2  Surat-surat lengkap  Interior luar dalam bersih dan rapi  Mesin halus dan kering  Kaki-kaki empuk dan nyaman  Siap luar kota', '2020-07-07 02:17:13', '2020-07-07 02:17:13'),
(71, 1, 1, 'Macbook Pro 2012 mulus lecet tipis', 'os catalina', '6.500.000', 'MACBOOK PRO 13 TAHUN 2012 TYPE MD101 spesifikasi:  * processor intel core i5  * ram 4gb  * vga intel hd 4000 size 1536mb  * hdd 500gb  * layar 13inch  * webcam dvdrw lan wifi usb smua normal  * body tidak ada dent  * os catalina + office 2019', '2020-07-07 02:44:49', '2020-07-20 22:54:11'),
(72, 26, 1, 'Dijual Rumah tipe 709', 'SHM-Ciomas Bogor', '800000000', 'Rumah Siap Huni Bangunan 1 Lantai  - Dekat rumah sakit  - Dekat sekolah  - Dekat tempat ibadah  - Dekat pusat perbelanjaan, dll  - Fasilitas keamanan 24 jam dan lingkungan nyaman  Bisa KPR  Bisa Nego  Pembeli bebas komisi', '2020-07-07 06:01:50', '2020-07-20 04:05:16'),
(73, 2, 1, 'Dijual Rumah Tipe 70', 'Citayam, Depok', '600.000.000', 'Rumah Siap Huni Bangunan 1 Lantai  Cocok untuk pasangan muda  - Dekat dengan Toll Borr  - Dekat rumah sakit  - Dekat sekolah  - Dekat pusat perbelanjaan Transmart dll  - Fasilitas keamanan 24 jam dan lingkungan nyaman  Bisa KPR  Bisa Nego  Pembeli bebas komisi', '2020-07-07 06:03:45', '2020-07-07 06:03:45'),
(75, 1, 2, 'Honda Blade 2013', 'KM 30400', '6000000', 'modif Windshield, ban Pirelli baru depan belakang, mesin halus, kaki kaki aman', '2020-07-20 22:56:43', '2020-07-20 22:56:43'),
(76, 1, 2, 'Dijual Modul Pesawat Ulang Alik', '2 Kali Mendarat', '5000000000', 'Siap pakai atau jadi barang Museum', '2020-07-20 22:57:54', '2020-07-20 22:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `posting_photos`
--

CREATE TABLE `posting_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posting_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posting_photos`
--

INSERT INTO `posting_photos` (`id`, `photo`, `posting_id`, `created_at`, `updated_at`) VALUES
(17, '2020070708095028.jpg', 69, '2020-07-07 01:09:50', '2020-07-07 01:09:50'),
(18, '20200707080950161.jpg', 69, '2020-07-07 01:09:50', '2020-07-07 01:09:50'),
(19, '20200707091713126.png', 70, '2020-07-07 02:17:13', '2020-07-07 02:17:13'),
(20, '20200707091713224.png', 70, '2020-07-07 02:17:13', '2020-07-07 02:17:13'),
(21, '20200707094449794.png', 71, '2020-07-07 02:44:49', '2020-07-07 02:44:49'),
(22, '20200707094449562.png', 71, '2020-07-07 02:44:49', '2020-07-07 02:44:49'),
(23, '20200707094449781.png', 71, '2020-07-07 02:44:49', '2020-07-07 02:44:49'),
(24, '20200707130150687.jpg', 72, '2020-07-07 06:01:50', '2020-07-07 06:01:50'),
(25, '20200707130345734.png', 73, '2020-07-07 06:03:45', '2020-07-07 06:03:45'),
(28, '20200721055643858.jpg', 75, '2020-07-20 22:56:43', '2020-07-20 22:56:43'),
(29, '2020072105575498.jpg', 76, '2020-07-20 22:57:54', '2020-07-20 22:57:54'),
(30, '20200721055754476.jpg', 76, '2020-07-20 22:57:54', '2020-07-20 22:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backdrop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `avatar`, `backdrop`, `display_name`, `alamat`, `bio`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '20200721055119.jpg', '20200721055508.jpg', 'Fathur', 'DKI', 'BISMILLAH', 1, NULL, '2020-07-20 22:55:08'),
(2, '20200629202912.jpg', '20200629202912.JPG', 'Abang Qibo Store', 'kj', 'jualan apapun yang halalan thoyyiban mencari berkah', 2, '2020-06-28 07:43:14', '2020-06-29 13:29:12'),
(25, '20200706143943.png', '20200706143943.jpg', 'Ricardo Milos', 'brazil', 'pisita hari rantang', 25, '2020-07-06 07:39:43', '2020-07-06 07:39:43'),
(26, '20200708070807.jpg', '20200708071939.jpg', 'The Blind Bandit', 'Earth Kingdom', 'I\'m blind', 26, '2020-07-07 01:05:38', '2020-07-08 00:19:39'),
(28, '20200707163934.jpg', '20200707163934.jpg', 'qweqwe', 'qweqwe', 'qweqwe', 28, '2020-07-07 09:39:34', '2020-07-07 09:39:34');

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
(1, 'fathur', 'fathur@qbo.com', NULL, '$2y$10$gCPpRPg6Z2YZ.4.WTvPi3O6HHe2DQf3F0KDaRjCN9H2BMv8il/IcC', NULL, '2020-06-25 11:57:30', '2020-06-25 11:57:30'),
(2, 'qibo', 'qibo@qbo.com', NULL, '$2y$10$osorgxrRpHhU5PJI2ZqoNOfkxZaOCLc4T6jnUSCzVrbFcOZm23VaK', NULL, '2020-06-26 08:46:30', '2020-06-26 08:46:30'),
(25, 'ricardo', 'milos@dota.com', NULL, '$2y$10$ThfKsUqs1ZoweNhnnZZkDu3Eij/J7Fn8H5mfvQrLfbySLOI5Kiula', NULL, '2020-07-06 07:39:07', '2020-07-06 07:39:07'),
(26, 'Toph Beifong', 'toph@beifong.co.ek', NULL, '$2y$10$RYCm9yXXy1sUDpdh9t6/OOjtZu5EB2oW7wWnTVF/Eg4M.v4uTrkui', NULL, '2020-07-07 00:58:21', '2020-07-07 00:58:21'),
(27, 'Tom', 'tom@mgm.com', NULL, '$2y$10$jb1nitUdKgsI1ZGSPQdlJuUxLs67cLJsiXBzqviosWZU3Lx2got9m', NULL, '2020-07-07 08:46:05', '2020-07-07 08:46:05'),
(28, 'zxc', 'zxc@xcz.czx', NULL, '$2y$10$vKO20pMkVTs3ZS/uhBlAGeUwv/b8sLFULrNa62KXg2oNIDWXNYCha', NULL, '2020-07-07 09:39:17', '2020-07-07 09:39:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`posting_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postings`
--
ALTER TABLE `postings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postings_id_kategori_foreign` (`category_id`),
  ADD KEY `postings_id_user_foreign` (`user_id`);

--
-- Indexes for table `posting_photos`
--
ALTER TABLE `posting_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posting_photos_id_posting_foreign` (`posting_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_id_user_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `postings`
--
ALTER TABLE `postings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `posting_photos`
--
ALTER TABLE `posting_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`posting_id`) REFERENCES `postings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postings`
--
ALTER TABLE `postings`
  ADD CONSTRAINT `postings_id_kategori_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `postings_id_user_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posting_photos`
--
ALTER TABLE `posting_photos`
  ADD CONSTRAINT `posting_photos_id_posting_foreign` FOREIGN KEY (`posting_id`) REFERENCES `postings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_id_user_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

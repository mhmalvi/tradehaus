-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 01:01 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_name`, `product_size`, `product_color`, `product_quantity`, `created_at`, `updated_at`, `product_id`, `product_price`) VALUES
(11, 'Huawei phone', NULL, NULL, 1, '2023-02-04 21:53:56', '2023-02-04 21:53:56', 15, 12),
(13, 'console', NULL, NULL, 1, '2023-02-04 21:54:08', '2023-02-04 21:54:08', 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_category` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`, `short_description`, `full_description`, `tags`, `status`, `parent_category`, `created_at`, `updated_at`, `category_image`) VALUES
(4, 'Cloth', 'cloth-all', 'Description', 'Description', 'Description', 'A', NULL, '2023-01-22 01:29:45', '2023-01-22 01:29:45', NULL),
(5, 'Electronics', 'electronics-all', 'Short Description', 'Short Description', 'tags', 'A', NULL, '2023-01-22 01:33:35', '2023-01-22 04:10:37', NULL),
(7, 'Bags', 'bags-all', 'Short Description', 'Short Description', 'tags', 'I', NULL, '2023-01-22 20:41:33', '2023-01-29 02:06:58', NULL),
(13, 'Laptops & PC', 'laptops-pc', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'laptop', 'A', 5, '2023-01-26 03:29:48', '2023-01-26 04:00:32', 'assets/img/categories/1674725495.svg'),
(19, 'Smartwatches', 'smart-watch', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'watch', 'A', 5, '2023-01-26 03:40:25', '2023-01-26 03:40:25', 'assets/img/categories/1674726025.svg'),
(20, 'Cameras', 'camera-all', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'camera', 'A', 5, '2023-01-26 03:41:06', '2023-01-28 21:49:56', 'assets/img/categories/1674726066.svg'),
(21, 'Console Games', 'console-games', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'console', 'A', 5, '2023-01-26 03:41:35', '2023-01-26 03:41:35', 'assets/img/categories/1674726095.svg'),
(22, 'Headphones', 'head-phones', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'headphone', 'A', 5, '2023-01-26 03:42:03', '2023-01-26 04:00:16', 'assets/img/categories/1674726761.svg'),
(23, 'Virtual Reality', 'virtual-reality', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'reality', 'A', 5, '2023-01-26 03:42:34', '2023-01-26 03:42:34', 'assets/img/categories/1674726154.svg'),
(24, 'Shirts', 'all-clothes', 'Short Description', 'Short Description', 'cloth', 'A', 4, '2023-01-28 22:20:31', '2023-01-28 22:31:52', 'assets/img/categories/1674966712.jpg'),
(25, 'Phone', 'phone-all', 'short', 'Full Description', 'phone', 'A', 5, '2023-01-30 02:16:48', '2023-01-30 02:16:48', 'assets/img/categories/1675066608.png');

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
(5, '2023_01_16_100734_create_categories_table', 1),
(6, '2023_01_16_100947_create_products_table', 1),
(7, '2023_01_23_032113_add_tags_to_products_table', 2),
(8, '2023_01_23_050143_add_product_code_name_to_products_table', 3),
(9, '2023_01_23_050826_add_colors_and_sizes_to_products_table', 4),
(10, '2023_01_23_051717_drop_size_and_color_from_products_table', 5),
(11, '2023_01_23_061744_add_status_to_products_table', 6),
(12, '2023_01_25_030144_create_carts_table', 7),
(13, '2023_01_25_033434_change_product_quantity_type_in_carts_table', 8),
(14, '2023_01_25_034453_add_product_id_to_carts_table', 9),
(15, '2023_01_26_085641_add_category_image_to_categories_table', 10),
(16, '2023_01_29_093829_add_special_exclusive_deals_of_the_days_to_products_table', 11),
(18, '2023_01_31_030939_add_role_to_users_table', 12),
(19, '2023_01_31_063511_create_sliders_table', 13),
(20, '2023_02_01_095709_create_new_arrivals_table', 13),
(21, '2023_02_01_110134_add_code_name_and_slug_to_new_arrivals_table', 14),
(22, '2023_02_01_110437_add_full_details_to_new_arrivals_table', 15),
(23, '2023_02_01_110653_rename_description_in_new_arrivals_table', 16),
(24, '2023_02_04_133948_add_product_price_to_carts_table', 17),
(25, '2023_02_04_183134_create_admins_table', 17),
(26, '2023_02_05_055501_create_orders_table', 18),
(27, '2023_02_05_060537_create_billing_details_table', 18),
(29, '2023_02_05_060610_create_ordered_products_table', 19),
(30, '2023_02_05_072506_add_more_info_to_users_table', 20),
(31, '2023_02_05_073900_change_user_table_columns_to_nullable', 21),
(32, '2023_02_05_112429_add_order_id_to_ordered_products_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `new_arrivals`
--

CREATE TABLE `new_arrivals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_arrivals`
--

INSERT INTO `new_arrivals` (`id`, `title`, `short_description`, `image`, `price`, `quantity`, `color`, `size`, `created_at`, `updated_at`, `code_name`, `slug`, `full_details`) VALUES
(1, 'stylish headphone', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem\r\n                                Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'assets/img/newArrival/1675250377.jpg', 800, 5, NULL, NULL, '2023-02-01 05:19:37', '2023-02-01 05:19:37', NULL, 'stylish-headphone', '<h2><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</strong></h2>');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` int(11) NOT NULL,
  `delivery_charge` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `address`, `city`, `post_code`, `country`, `region`, `sub_total`, `delivery_charge`, `total_amount`, `created_at`, `updated_at`) VALUES
(10, 'tan', 'rub', 'dhanmondi', 'city one', '1205', 'country one', 'state', 45, 80, 125, '2023-02-05 05:38:22', '2023-02-05 05:38:22');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'api_token', 'fa7421eca9e6b442803039c24132f98efe86458a792190f040add08710226817', '[\"*\"]', NULL, '2023-01-30 22:41:34', '2023-01-30 22:41:34'),
(2, 'App\\Models\\User', 1, 'api_token', '897bc07b32fa2403eab011917899770167c5ad5bfeb3ab018c9b4f6dfb0c1154', '[\"*\"]', NULL, '2023-01-30 22:41:40', '2023-01-30 22:41:40'),
(3, 'App\\Models\\User', 1, 'api_token', '4705791b3b93414aa5a876f5bce2fe039ababe7ce521f5b32f95dc17a6990614', '[\"*\"]', NULL, '2023-01-30 22:42:20', '2023-01-30 22:42:20'),
(4, 'App\\Models\\User', 1, 'api_token', '3c1bddbde91068e8265daa4fe719e69473c4f29a27a81b4c726c613a4e2dd1bd', '[\"*\"]', NULL, '2023-01-30 22:55:10', '2023-01-30 22:55:10'),
(5, 'App\\Models\\User', 1, 'api_token', 'e01f24323be6ba8856546fd41dfe5b55533e4d13bcfa323b8ec3f59645ab90ab', '[\"*\"]', NULL, '2023-01-30 23:02:16', '2023-01-30 23:02:16'),
(6, 'App\\Models\\User', 1, 'api_token', '9cdc55a0b84f1d891bdb2e95ba2d4e04c7eadedf34b63544ed3a765be778683b', '[\"*\"]', NULL, '2023-01-30 23:07:53', '2023-01-30 23:07:53'),
(7, 'App\\Models\\User', 1, 'api_token', '0008909c2e70505641d6cffeeb4d13cdea9e986871f7df844ecd3f4555167be6', '[\"*\"]', NULL, '2023-01-30 23:13:58', '2023-01-30 23:13:58'),
(8, 'App\\Models\\User', 1, 'api_token', 'bf7478b3a6d553af8155b1f180168f8c42b3074707d030c0a617e2d4288b1430', '[\"*\"]', NULL, '2023-01-30 23:16:42', '2023-01-30 23:16:42'),
(9, 'App\\Models\\User', 1, 'api_token', '15b27a3681cfa2fa9bdcd130594035f2e7d1f23c0ec5003d1e6e5a352b79c907', '[\"*\"]', NULL, '2023-01-30 23:20:58', '2023-01-30 23:20:58'),
(10, 'App\\Models\\User', 1, 'api_token', '532ecb3e36f942b073c5753ca717f6cc5c2afb5719424027bfa99a2383cefcdb', '[\"*\"]', NULL, '2023-01-30 23:21:12', '2023-01-30 23:21:12'),
(11, 'App\\Models\\User', 1, 'api_token', '878a3f18c0788b178dc38d4dde96f20d6f89ee6613629112f7c32d9572ac2563', '[\"*\"]', NULL, '2023-01-30 23:21:47', '2023-01-30 23:21:47'),
(12, 'App\\Models\\User', 1, 'api_token', 'ad8ee341337a6336740331ec451f10cd3b4b147b76b804ea81fa0dab360fda54', '[\"*\"]', NULL, '2023-01-30 23:22:05', '2023-01-30 23:22:05'),
(13, 'App\\Models\\User', 1, 'api_token', '727cc9d85514ed07e53b308715ff8e1cbdff586645eb7ab4dbb141731a1ab040', '[\"*\"]', NULL, '2023-01-30 23:26:22', '2023-01-30 23:26:22'),
(14, 'App\\Models\\User', 1, 'api_token', 'd35ab4e2eb152034af87a6f19c5e5091ef680c9b8107199c6fb83d6a3b443c8a', '[\"*\"]', NULL, '2023-01-30 23:41:25', '2023-01-30 23:41:25'),
(15, 'App\\Models\\User', 1, 'api_token', '6c0545dfd66f1c307c46e9709efc724ca7b816622f0037acb702c2c8131a857e', '[\"*\"]', NULL, '2023-01-30 23:44:47', '2023-01-30 23:44:47'),
(16, 'App\\Models\\User', 1, 'api_token', '1861f9f7b34192476e71055e27da7048c72bf5f15677e72d8c8cb4fe07e4fee4', '[\"*\"]', NULL, '2023-01-31 01:09:07', '2023-01-31 01:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isSpecial` text COLLATE utf8mb4_unicode_ci DEFAULT 'n',
  `isExclusive` text COLLATE utf8mb4_unicode_ci DEFAULT 'n',
  `deals_of_the_days` text COLLATE utf8mb4_unicode_ci DEFAULT 'n',
  `isBlackFriday` text COLLATE utf8mb4_unicode_ci DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_short_description`, `product_details`, `slug`, `product_price`, `product_image`, `product_image_1`, `product_image_2`, `product_image_3`, `product_image_4`, `product_image_5`, `product_image_6`, `product_discount`, `product_quantity`, `category_id`, `created_at`, `updated_at`, `tags`, `product_code_name`, `color_1`, `color_2`, `color_3`, `color_4`, `size1`, `size2`, `size3`, `size4`, `size5`, `status`, `isSpecial`, `isExclusive`, `deals_of_the_days`, `isBlackFriday`) VALUES
(7, 'Best noise cancelling headphone', 'lorem ipsum', '<p><em><strong>lorem ipsum</strong></em></p>', 'best-noise-cancelling-headphone', 100, 'assets/img/products/1674963189.jpg', NULL, 'assets/img/products/1674961717.jpg', NULL, NULL, NULL, NULL, '3', 10, 22, '2023-01-28 21:08:37', '2023-01-28 21:58:11', 'headphone', 'headphone2135', '#ff6191', '#33317d', '#56d4b7', '#009688', NULL, NULL, NULL, NULL, NULL, 'A', 'n', 'n', 'n', 'n'),
(9, 'X540up', 'lorem ipsum', '<p>lorem ipsum</p>', 'laptops-pc', 1000, 'assets/img/products/1674965453.jpg', NULL, 'assets/img/products/1674965453.jpg', NULL, NULL, NULL, NULL, '3', 10, 13, '2023-01-28 22:10:53', '2023-01-29 04:55:31', 'laptop', 'dfdsf688', '#ff6191', '#33317d', '#56d4b7', '#009688', NULL, NULL, NULL, NULL, NULL, 'A', 'n', 'n', 'y', 'y'),
(10, 'Nikon', 'lorem ipsum', '<p><strong>lorem ipsum</strong></p>', 'camera-electronics', 300, 'assets/img/products/1674965662.jpg', NULL, 'assets/img/products/1674965662.jpg', NULL, NULL, NULL, NULL, '10', 6, 20, '2023-01-28 22:14:22', '2023-01-29 04:41:44', 'camera', 'dfdsf688d', '#ff6191', '#33317d', '#56d4b7', '#009688', NULL, NULL, NULL, NULL, NULL, 'A', 'n', 'y', 'n', 'n'),
(11, 'Smart Watch', 'Short Description', '<p>Short Description</p>', 'smart-watch', 300, 'assets/img/products/1674965777.jpg', NULL, 'assets/img/products/1674965777.jpg', NULL, NULL, NULL, NULL, '3', 10, 19, '2023-01-28 22:16:17', '2023-01-28 22:16:17', 'watch', 'dfdsf688fdd', '#ff6191', '#33317d', '#56d4b7', '#009688', NULL, NULL, NULL, NULL, NULL, 'A', 'n', 'n', 'n', 'n'),
(12, 'shirt 1', 'Short Description', '<p>Short Description</p>', 'all-clothes', 100, 'assets/img/products/1674966090.jpg', NULL, 'assets/img/products/1674966090.jpg', NULL, 'assets/img/products/1674966090.jpg', NULL, NULL, '3', 10, 24, '2023-01-28 22:21:30', '2023-01-28 22:21:30', 'shirt', 'dfdsf688d', '#ff6191', '#33317d', '#56d4b7', '#009688', 'S', NULL, 'L', NULL, 'XXL', 'A', 'n', 'n', 'n', 'n'),
(13, 'console', 'Short Description', '<p>Short Description</p>', 'consol-games', 100, 'assets/img/products/1674967939.jpg', NULL, 'assets/img/products/1674967939.jpg', NULL, NULL, NULL, NULL, '3', 20, 21, '2023-01-28 22:52:19', '2023-01-29 04:31:01', 'console', '#smart123', '#ff6191', '#33317d', '#56d4b7', '#009688', NULL, NULL, NULL, NULL, NULL, 'A', 'y', 'n', 'y', 'n'),
(14, 'Virtual Reality', 'Short Description', '<p>Short Description</p>', 'virtual-reality', 500, 'assets/img/products/1674968324.jpg', NULL, 'assets/img/products/1674968168.jpg', NULL, NULL, NULL, NULL, '3', 10, 23, '2023-01-28 22:56:08', '2023-01-29 04:34:54', 'virtual', '#smart123', '#ff6191', '#33317d', '#56d4b7', '#009688', NULL, NULL, NULL, NULL, NULL, 'A', 'y', 'y', 'y', 'n'),
(15, 'Huawei phone', 'Short Description', '<p>Full Detail</p>', 'huawei-phone', 400, 'assets/img/products/1675067224.jpg', NULL, 'assets/img/products/1675066882.png', NULL, NULL, NULL, NULL, '3', 10, 25, '2023-01-30 02:20:12', '2023-01-30 02:27:04', 'huawei', 'dfdsf688fdd', '#ff6191', '#33317d', '#56d4b7', '#009688', NULL, NULL, NULL, NULL, NULL, 'A', 'n', 'n', 'n', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` int(11) NOT NULL DEFAULT 0,
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `first_name`, `last_name`, `phone`, `address`, `city`, `post_code`, `country`, `region`) VALUES
(1, 'admin', 'admin@tradeus.com', NULL, 'admin', NULL, NULL, NULL, 1, '', '', '', '', '', '', '', ''),
(2, 'tan rub', 'tanjib@g.com', NULL, '$2y$10$sZTfzV6HWAqZjrEYU.9DMupU2./a3ENkp3zcxff5QGwKv5lJjPqvm', NULL, '2023-02-05 02:53:46', '2023-02-05 02:53:46', 0, 'tan', 'rub', '01972075917', 'dhanmondi', 'City one', '1205', 'country one', 'state one');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`) USING HASH,
  ADD UNIQUE KEY `categories_slug_unique` (`slug`) USING HASH;

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
-- Indexes for table `new_arrivals`
--
ALTER TABLE `new_arrivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordered_products_order_id_foreign` (`order_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_name_unique` (`product_name`) USING HASH,
  ADD UNIQUE KEY `products_slug_unique` (`slug`) USING HASH,
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `new_arrivals`
--
ALTER TABLE `new_arrivals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD CONSTRAINT `ordered_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

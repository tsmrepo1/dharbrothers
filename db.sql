-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 12:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dharbrothers`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title1`, `title2`, `title3`, `image`, `created_at`, `updated_at`) VALUES
(1, '94 Years of Experience Now a Click Away', 'Your Best Thesis Partner', 'Dhar Brothers', 'banners/nblNe9sfhAHGSmQJJ4BxhozbjanOl8Yuo0gW5sJX.jpg', '2023-11-23 03:45:16', '2023-11-23 03:45:16'),
(2, '94 Years of Experience Now a Click Away', 'Your Best Thesis Partner', 'Dhar Brothers', 'banners/nblNe9sfhAHGSmQJJ4BxhozbjanOl8Yuo0gW5sJX.jpg', '2023-11-23 03:45:16', '2023-11-23 03:45:16'),
(3, '94 Years of Experience Now a Click Away', 'Your Best Thesis Partner', 'Dhar Brothers', 'banners/nblNe9sfhAHGSmQJJ4BxhozbjanOl8Yuo0gW5sJX.jpg', '2023-11-23 03:45:16', '2023-11-23 03:45:16'),
(4, '94 Years of Experience Now a Click Away', 'Your Best Thesis Partner', 'Dhar Brothers', 'banners/nblNe9sfhAHGSmQJJ4BxhozbjanOl8Yuo0gW5sJX.jpg', '2023-11-23 03:45:16', '2023-11-23 03:45:16');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'What are Your Opening Hours?', 'Monday To Friday – 11:00 A.M To 6.30 P.M. Saturday – 11:00 A.M To 5.00 P.M.', '2023-11-23 03:16:03', '2023-11-23 03:16:03'),
(2, 1, 'What is The Turn Around Time?', 'Monday To Friday – 11:00 A.M To 6.30 P.M. Saturday – 11:00 A.M To 5.00 P.M.', '2023-11-23 03:16:44', '2023-11-23 03:16:44'),
(3, 2, 'Type of prnting service you provide ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2023-11-23 03:17:54', '2023-11-23 03:17:54'),
(4, 3, 'What is the price of Hard binding ?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2023-11-23 03:18:28', '2023-11-23 03:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'General', '2023-11-23 03:15:07', '2023-11-23 03:15:07'),
(2, 'Printing', '2023-11-23 03:15:13', '2023-11-23 03:15:13'),
(3, 'Binding', '2023-11-23 03:15:19', '2023-11-23 03:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Georgia Castro', '+1 (702) 265-9351', 'myleh@mailinator.com', 'Dolore officia offic', '2023-12-05 06:19:44', '2023-12-05 06:19:44');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2024_01_10_092531_uploadedfiles', 3),
(7, '2024_01_12_073829_userwise_design_approval', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `user_id` bigint(10) NOT NULL,
  `pickup` tinyint(1) NOT NULL,
  `billing_address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`billing_address`)),
  `shipping_address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `order_detail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_amount` float(11,2) NOT NULL,
  `total_amount` float(11,2) DEFAULT NULL,
  `cgst` float(11,2) DEFAULT NULL,
  `sgst` float(11,2) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'PENDING',
  `payment_status` varchar(255) NOT NULL DEFAULT 'PENDING',
  `transaction_id` text DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_at` date DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('DRAFT','PUBLISH') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `thumbnail`, `title`, `slug`, `publish_at`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'thumbnails/4VfR58gamhLNJU4Htxo7gmTlqSkKT9GFW82R1dIs.jpg', 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', '2023-11-23', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis in erat sit amet efficitur. Etiam erat ante, eleifend sit amet nisl at, ultricies luctus magna. Nullam ac lectus commodo, fringilla augue quis, accumsan odio. Sed mollis velit sed nulla pellentesque tempus. Donec luctus ac ex eget molestie. Pellentesque ante sapien, gravida at mauris vel, ornare sodales neque. Nunc feugiat leo felis, eget dapibus nulla facilisis in.</p><p>Vestibulum vitae neque tortor. Vestibulum ac egestas augue. Quisque id dapibus nisl. Donec non orci porta, suscipit justo non, sagittis risus. Suspendisse sapien tellus, commodo eu sem sit amet, euismod pretium ante. Aliquam rhoncus efficitur velit, a malesuada tellus hendrerit varius. Fusce volutpat libero vel dolor faucibus maximus. Phasellus vel viverra lorem. Nam pellentesque commodo turpis, vitae vestibulum lacus dictum eget. Cras dapibus mollis velit sit amet rhoncus.</p><p>Sed nisl nibh, rutrum quis risus ut, placerat varius purus. Nam tristique imperdiet tortor, iaculis porta odio finibus vestibulum. Sed at finibus tellus. Nullam consectetur elit at neque tempor, elementum convallis est consequat. Phasellus volutpat sapien sem. Praesent laoreet leo elit, sed placerat turpis mattis et. Praesent finibus magna a tortor porta volutpat. Sed eu mi rutrum, faucibus libero sit amet, dictum erat.</p><p>Quisque non commodo lectus, eu porttitor leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin facilisis, tellus vel feugiat dignissim, lectus diam sollicitudin nulla, in dapibus dolor dolor nec metus. Morbi ut neque nisi. Nullam orci arcu, tristique vel pretium eget, varius nec justo. Donec lobortis sagittis justo, eget congue odio euismod in. Mauris vehicula dictum facilisis. Vestibulum vel mauris in urna dignissim accumsan. Mauris tempor sit amet velit a placerat. Vivamus aliquet convallis risus. Quisque urna ipsum, molestie eu bibendum in, facilisis eget velit. Nulla facilisi. Cras ornare erat a sem ultrices, imperdiet tincidunt felis ornare. Proin efficitur orci a tortor aliquet, et interdum quam dignissim.</p><p>Nullam elit libero, ultrices quis convallis ac, elementum tempor nisi. Etiam scelerisque, nisl vitae viverra posuere, ipsum felis consequat mi, ac pretium quam lacus pretium erat. Aliquam ultrices, libero sed luctus scelerisque, ipsum justo dignissim dui, sed tristique felis nisl eget erat. Vestibulum semper sagittis auctor. Suspendisse potenti. Quisque commodo nulla justo. Fusce eget massa neque. Duis convallis congue tellus, eu ornare turpis malesuada sit amet. Donec tincidunt tempor libero ac gravida. Integer eu ultrices mauris. Maecenas ac urna condimentum, luctus velit non, aliquam massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras pretium in quam sed rutrum. Praesent rhoncus vehicula magna, sed faucibus nulla ultrices pulvinar. Aenean vitae fringilla magna, ut tristique justo.</p>', 'PUBLISH', '2023-11-23 03:20:15', '2023-11-23 03:20:15'),
(2, 'thumbnails/4VfR58gamhLNJU4Htxo7gmTlqSkKT9GFW82R1dIs.jpg', 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', '2023-11-23', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis in erat sit amet efficitur. Etiam erat ante, eleifend sit amet nisl at, ultricies luctus magna. Nullam ac lectus commodo, fringilla augue quis, accumsan odio. Sed mollis velit sed nulla pellentesque tempus. Donec luctus ac ex eget molestie. Pellentesque ante sapien, gravida at mauris vel, ornare sodales neque. Nunc feugiat leo felis, eget dapibus nulla facilisis in.</p><p>Vestibulum vitae neque tortor. Vestibulum ac egestas augue. Quisque id dapibus nisl. Donec non orci porta, suscipit justo non, sagittis risus. Suspendisse sapien tellus, commodo eu sem sit amet, euismod pretium ante. Aliquam rhoncus efficitur velit, a malesuada tellus hendrerit varius. Fusce volutpat libero vel dolor faucibus maximus. Phasellus vel viverra lorem. Nam pellentesque commodo turpis, vitae vestibulum lacus dictum eget. Cras dapibus mollis velit sit amet rhoncus.</p><p>Sed nisl nibh, rutrum quis risus ut, placerat varius purus. Nam tristique imperdiet tortor, iaculis porta odio finibus vestibulum. Sed at finibus tellus. Nullam consectetur elit at neque tempor, elementum convallis est consequat. Phasellus volutpat sapien sem. Praesent laoreet leo elit, sed placerat turpis mattis et. Praesent finibus magna a tortor porta volutpat. Sed eu mi rutrum, faucibus libero sit amet, dictum erat.</p><p>Quisque non commodo lectus, eu porttitor leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin facilisis, tellus vel feugiat dignissim, lectus diam sollicitudin nulla, in dapibus dolor dolor nec metus. Morbi ut neque nisi. Nullam orci arcu, tristique vel pretium eget, varius nec justo. Donec lobortis sagittis justo, eget congue odio euismod in. Mauris vehicula dictum facilisis. Vestibulum vel mauris in urna dignissim accumsan. Mauris tempor sit amet velit a placerat. Vivamus aliquet convallis risus. Quisque urna ipsum, molestie eu bibendum in, facilisis eget velit. Nulla facilisi. Cras ornare erat a sem ultrices, imperdiet tincidunt felis ornare. Proin efficitur orci a tortor aliquet, et interdum quam dignissim.</p><p>Nullam elit libero, ultrices quis convallis ac, elementum tempor nisi. Etiam scelerisque, nisl vitae viverra posuere, ipsum felis consequat mi, ac pretium quam lacus pretium erat. Aliquam ultrices, libero sed luctus scelerisque, ipsum justo dignissim dui, sed tristique felis nisl eget erat. Vestibulum semper sagittis auctor. Suspendisse potenti. Quisque commodo nulla justo. Fusce eget massa neque. Duis convallis congue tellus, eu ornare turpis malesuada sit amet. Donec tincidunt tempor libero ac gravida. Integer eu ultrices mauris. Maecenas ac urna condimentum, luctus velit non, aliquam massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras pretium in quam sed rutrum. Praesent rhoncus vehicula magna, sed faucibus nulla ultrices pulvinar. Aenean vitae fringilla magna, ut tristique justo.</p>', 'PUBLISH', '2023-11-23 03:20:15', '2023-11-23 03:20:15'),
(3, 'thumbnails/4VfR58gamhLNJU4Htxo7gmTlqSkKT9GFW82R1dIs.jpg', 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', '2023-11-23', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis in erat sit amet efficitur. Etiam erat ante, eleifend sit amet nisl at, ultricies luctus magna. Nullam ac lectus commodo, fringilla augue quis, accumsan odio. Sed mollis velit sed nulla pellentesque tempus. Donec luctus ac ex eget molestie. Pellentesque ante sapien, gravida at mauris vel, ornare sodales neque. Nunc feugiat leo felis, eget dapibus nulla facilisis in.</p><p>Vestibulum vitae neque tortor. Vestibulum ac egestas augue. Quisque id dapibus nisl. Donec non orci porta, suscipit justo non, sagittis risus. Suspendisse sapien tellus, commodo eu sem sit amet, euismod pretium ante. Aliquam rhoncus efficitur velit, a malesuada tellus hendrerit varius. Fusce volutpat libero vel dolor faucibus maximus. Phasellus vel viverra lorem. Nam pellentesque commodo turpis, vitae vestibulum lacus dictum eget. Cras dapibus mollis velit sit amet rhoncus.</p><p>Sed nisl nibh, rutrum quis risus ut, placerat varius purus. Nam tristique imperdiet tortor, iaculis porta odio finibus vestibulum. Sed at finibus tellus. Nullam consectetur elit at neque tempor, elementum convallis est consequat. Phasellus volutpat sapien sem. Praesent laoreet leo elit, sed placerat turpis mattis et. Praesent finibus magna a tortor porta volutpat. Sed eu mi rutrum, faucibus libero sit amet, dictum erat.</p><p>Quisque non commodo lectus, eu porttitor leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin facilisis, tellus vel feugiat dignissim, lectus diam sollicitudin nulla, in dapibus dolor dolor nec metus. Morbi ut neque nisi. Nullam orci arcu, tristique vel pretium eget, varius nec justo. Donec lobortis sagittis justo, eget congue odio euismod in. Mauris vehicula dictum facilisis. Vestibulum vel mauris in urna dignissim accumsan. Mauris tempor sit amet velit a placerat. Vivamus aliquet convallis risus. Quisque urna ipsum, molestie eu bibendum in, facilisis eget velit. Nulla facilisi. Cras ornare erat a sem ultrices, imperdiet tincidunt felis ornare. Proin efficitur orci a tortor aliquet, et interdum quam dignissim.</p><p>Nullam elit libero, ultrices quis convallis ac, elementum tempor nisi. Etiam scelerisque, nisl vitae viverra posuere, ipsum felis consequat mi, ac pretium quam lacus pretium erat. Aliquam ultrices, libero sed luctus scelerisque, ipsum justo dignissim dui, sed tristique felis nisl eget erat. Vestibulum semper sagittis auctor. Suspendisse potenti. Quisque commodo nulla justo. Fusce eget massa neque. Duis convallis congue tellus, eu ornare turpis malesuada sit amet. Donec tincidunt tempor libero ac gravida. Integer eu ultrices mauris. Maecenas ac urna condimentum, luctus velit non, aliquam massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras pretium in quam sed rutrum. Praesent rhoncus vehicula magna, sed faucibus nulla ultrices pulvinar. Aenean vitae fringilla magna, ut tristique justo.</p>', 'PUBLISH', '2023-11-23 03:20:15', '2023-11-23 03:20:15'),
(4, 'thumbnails/4VfR58gamhLNJU4Htxo7gmTlqSkKT9GFW82R1dIs.jpg', 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', '2023-11-23', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lobortis in erat sit amet efficitur. Etiam erat ante, eleifend sit amet nisl at, ultricies luctus magna. Nullam ac lectus commodo, fringilla augue quis, accumsan odio. Sed mollis velit sed nulla pellentesque tempus. Donec luctus ac ex eget molestie. Pellentesque ante sapien, gravida at mauris vel, ornare sodales neque. Nunc feugiat leo felis, eget dapibus nulla facilisis in.</p><p>Vestibulum vitae neque tortor. Vestibulum ac egestas augue. Quisque id dapibus nisl. Donec non orci porta, suscipit justo non, sagittis risus. Suspendisse sapien tellus, commodo eu sem sit amet, euismod pretium ante. Aliquam rhoncus efficitur velit, a malesuada tellus hendrerit varius. Fusce volutpat libero vel dolor faucibus maximus. Phasellus vel viverra lorem. Nam pellentesque commodo turpis, vitae vestibulum lacus dictum eget. Cras dapibus mollis velit sit amet rhoncus.</p><p>Sed nisl nibh, rutrum quis risus ut, placerat varius purus. Nam tristique imperdiet tortor, iaculis porta odio finibus vestibulum. Sed at finibus tellus. Nullam consectetur elit at neque tempor, elementum convallis est consequat. Phasellus volutpat sapien sem. Praesent laoreet leo elit, sed placerat turpis mattis et. Praesent finibus magna a tortor porta volutpat. Sed eu mi rutrum, faucibus libero sit amet, dictum erat.</p><p>Quisque non commodo lectus, eu porttitor leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin facilisis, tellus vel feugiat dignissim, lectus diam sollicitudin nulla, in dapibus dolor dolor nec metus. Morbi ut neque nisi. Nullam orci arcu, tristique vel pretium eget, varius nec justo. Donec lobortis sagittis justo, eget congue odio euismod in. Mauris vehicula dictum facilisis. Vestibulum vel mauris in urna dignissim accumsan. Mauris tempor sit amet velit a placerat. Vivamus aliquet convallis risus. Quisque urna ipsum, molestie eu bibendum in, facilisis eget velit. Nulla facilisi. Cras ornare erat a sem ultrices, imperdiet tincidunt felis ornare. Proin efficitur orci a tortor aliquet, et interdum quam dignissim.</p><p>Nullam elit libero, ultrices quis convallis ac, elementum tempor nisi. Etiam scelerisque, nisl vitae viverra posuere, ipsum felis consequat mi, ac pretium quam lacus pretium erat. Aliquam ultrices, libero sed luctus scelerisque, ipsum justo dignissim dui, sed tristique felis nisl eget erat. Vestibulum semper sagittis auctor. Suspendisse potenti. Quisque commodo nulla justo. Fusce eget massa neque. Duis convallis congue tellus, eu ornare turpis malesuada sit amet. Donec tincidunt tempor libero ac gravida. Integer eu ultrices mauris. Maecenas ac urna condimentum, luctus velit non, aliquam massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras pretium in quam sed rutrum. Praesent rhoncus vehicula magna, sed faucibus nulla ultrices pulvinar. Aenean vitae fringilla magna, ut tristique justo.</p>', 'PUBLISH', '2023-11-23 03:20:15', '2023-11-23 03:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `images`, `slug`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, 'hard-binding', 'Hard Binding', '<p>Hard bound books are very rigid and finished to a high standard with edges covered throughout encasing up to approximately 500 pages. These books are cloth covered in a wide variety of colors and lettering on the spine &amp; can also take front board lettering. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>', '2023-11-23 03:11:28', '2023-11-23 03:11:28'),
(2, NULL, 'soft-binding', 'Soft Binding', '<p>Soft bound books are very rigid and finished to a high standard with edges covered throughout encasing up to approximately 500 pages. These books are cloth covered in a wide variety of colors and lettering on the spine &amp; can also take front board lettering. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>', '2023-11-23 03:12:51', '2023-11-23 03:12:51'),
(3, NULL, 'thetse-craft-pocket', 'Thetse-Craft-Pocket', '<p>Thetse bound books are very rigid and finished to a high standard with edges covered throughout encasing up to approximately 500 pages. These books are cloth covered in a wide variety of colors and lettering on the spine &amp; can also take front board lettering. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>', '2023-11-23 03:13:23', '2023-11-23 03:13:23'),
(4, NULL, 'simple-binding', 'Simple Binding', '<p>Simple bound books are very rigid and finished to a high standard with edges covered throughout encasing up to approximately 500 pages. These books are cloth covered in a wide variety of colors and lettering on the spine &amp; can also take front board lettering. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>', '2023-11-23 03:13:50', '2023-11-23 03:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('46sHT1VO7GgdQgW67sAvwXVCr2Nydb8moGbLqFiA', 63, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YToxMTp7czo2OiJfdG9rZW4iO3M6NDA6InNzV2toN21tc3YycmlkbHdPaXhJMWdLOWZWNDZuTVlUdVJtdG5VN3oiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ4OiJodHRwOi8vbG9jYWxob3N0L2RoYXJfbWFpbi9waHAvcHVibGljL215LWFjY291bnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1OiJvcmRlciI7czoyMDEzOiJ7InRoZXNpc19maWxlIjoidXBsb2Fkcy9xYjBvRVNLT3hyMnlUMTh4dkVjdzI3ak8wTDBodDVWd1h2RE01MmpyLnBkZiIsInN5bm9wc2lzX2ZpbGUiOiJ1cGxvYWRzL0RMTWdxMG9iVXhBM3Iwd1hhTm1lUFlCRWlQWjRkcEQ5bVFqQ1lIS0UucGRmIiwiaGFyZF9iaW5kaW5nc19vcmRlcnMiOlt7ImhhcmRfYmluZGluZ19wYXBlcl9zaXplIjoiQTQgLSBGdWxsIiwiaGFyZF9iaW5kaW5nX3F0eSI6IjIiLCJoYXJkX2JpbmRpbmdfcGFwZXJfdHlwZSI6IlBhcGVyIE9uZSAxMDAgR1NNIG9yIEVxdWl2YWxlbnQiLCJoYXJkX2JpbmRpbmdfcGFwZXJfY29sb3IiOiJBbGwgQmxhY2sgJiBXaGl0ZSIsImhhcmRfYmluZGluZ19wcmludGluZ190eXBlIjoiU2luZ2xlIFNpZGUiLCJoYXJkX2JpbmRpbmdfYTRfcG9ja2V0cyI6IjEiLCJoYXJkX2JpbmRpbmdfY2RfcG9ja2V0cyI6IjEiLCJoYXJkX2JpbmRpbmdfaW5mb3JtYXRpb24iOiIifV0sImhhcmRfYmluZGluZ19vdGhlcl9kZXRhaWxzIjp7ImhhcmRfYmluZGluZ19jb3Zlcl9jb2xvcl9kYiI6IkRCIDciLCJoYXJkX2JpbmRpbmdfY292ZXJfZGVzaWduIjoidXBsb2Fkcy9yZ1ZPS3ZWNklJVndVYjJ6MUc1cWUxRTlwcDRVWDVTb0tJN3k3d2FVLnBkZiIsImhhcmRfYmluZGluZ19zcGluZSI6IlByaW50IFJlcXVpcmVkIn0sInNvZnRfYmluZGluZ3Nfb3JkZXJzIjpbeyJzb2Z0X2JpbmRpbmdfcGFwZXJfc2l6ZSI6IkE0IC0gRnVsbCIsInNvZnRfYmluZGluZ19xdHkiOiIyIiwic29mdF9iaW5kaW5nX3BhcGVyX3R5cGUiOiJQYXBlciBPbmUgMTAwIEdTTSBvciBFcXVpdmFsZW50Iiwic29mdF9iaW5kaW5nX3BhcGVyX2NvbG9yIjoiQWxsIEJsYWNrICYgV2hpdGUiLCJzb2Z0X2JpbmRpbmdfcHJpbnRpbmdfdHlwZSI6IkRvdWJsZSBTaWRlIiwic29mdF9iaW5kaW5nX2E0X3BvY2tldHMiOiIyIiwic29mdF9iaW5kaW5nX2NkX3BvY2tldHMiOiIwIiwic29mdF9iaW5kaW5nX2luZm9ybWF0aW9uIjoiIn0seyJzb2Z0X2JpbmRpbmdfcGFwZXJfc2l6ZSI6IkE0IC0gOTUlIFJlZHVjdGlvbiIsInNvZnRfYmluZGluZ19xdHkiOiIyIiwic29mdF9iaW5kaW5nX3BhcGVyX3R5cGUiOiJQYXBlciBPbmUgMTAwIEdTTSBvciBFcXVpdmFsZW50Iiwic29mdF9iaW5kaW5nX3BhcGVyX2NvbG9yIjoiQWxsIEJsYWNrICYgV2hpdGUiLCJzb2Z0X2JpbmRpbmdfcHJpbnRpbmdfdHlwZSI6IlNpbmdsZSBTaWRlIiwic29mdF9iaW5kaW5nX2E0X3BvY2tldHMiOiIwIiwic29mdF9iaW5kaW5nX2NkX3BvY2tldHMiOiIwIiwic29mdF9iaW5kaW5nX2luZm9ybWF0aW9uIjoiIn1dLCJzb2Z0X2JpbmRpbmdfb3RoZXJfZGV0YWlscyI6eyJzb2Z0X2JpbmRpbmdfY292ZXJfY29sb3JfZGIiOiJEQiAzIiwic29mdF9iaW5kaW5nX2NvdmVyX2Rlc2lnbiI6InVwbG9hZHMvOGozYjVDSjRZd0RnbWJVZVh3Z0pRUnVIeVp6VTIzTjJaTkM2Y24xai5wZGYiLCJzb2Z0X2JpbmRpbmdfc3BpbmUiOiJQcmludCBOb3QgUmVxdWlyZWQifSwic3lub3BzaXNfYmluZGluZ3Nfb3JkZXJzIjpbeyJzeW5vcHNpc19iaW5kaW5nX3BhcGVyX3NpemUiOiJBNCAtIEZ1bGwiLCJzeW5vcHNpc19iaW5kaW5nX3F0eSI6IjQiLCJzeW5vcHNpc19iaW5kaW5nX3BhcGVyX3R5cGUiOiJQYXBlciBPbmUgMTAwIEdTTSBvciBFcXVpdmFsZW50Iiwic3lub3BzaXNfYmluZGluZ19wYXBlcl9jb2xvciI6IkFsbCBCbGFjayAmIFdoaXRlIiwic3lub3BzaXNfYmluZGluZ19wcmludGluZ190eXBlIjoiU2luZ2xlIFNpZGUifV0sInN5bm9wc2lzX2JpbmRpbmdfb3RoZXJfZGV0YWlscyI6eyJzeW5vcHNpc19iaW5kaW5nX2NvdmVyX2Rlc2lnbiI6IkN1c3RvbSIsInN5bm9wc2lzX2JpbmRpbmdfY292ZXJfZGVzaWduX2ZpbGUiOiJ1cGxvYWRzL3pGWGE4aTROSExJbGFpN0VvVm9RSFltYTBZTWIyZFhiT0JTOXdzdVYucGRmIn0sInRoZXNpc19jb2xvcl9wYWdlIjoyMDAsInRoZXNpc19id19wYWdlIjoyMDAsInN5bm9wc2lzX2NvbG9yX3BhZ2UiOjUwLCJzeW5vcHNpc19id19wYWdlIjo1MH0iO3M6MTI6Im9yZGVyX2Ftb3VudCI7czo1OiIxMjYwMCI7czoxMjoidG90YWxfYW1vdW50IjtzOjU6IjE2ODg0IjtzOjQ6ImNnc3QiO3M6MjoiMTciO3M6NDoic2dzdCI7czoyOiIxNyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NjM7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkL1h0Y2FBd3ZtczA3OVNOb1B4Y29GT2hYZlREWTk1bnVwazVSdkc5LnVtYUs5cUp5QnYzeUciO30=', 1705643987),
('KtFYKfkDcpnaphDy3HUQgBRDsDH2oZY1R67QDBbZ', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiak03YjVkbUdsMlRLUE5xeXZwZjd6dGFaak1jcVJoWFgwUUlXaXJoYiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY3OiJodHRwOi8vbG9jYWxob3N0L2RoYXJfbWFpbi9waHAvcHVibGljL2FkbWluL29yZGVyLWRldGFpbC85MTc3NzI3ODQzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRSZ1ZuOFBQd2Z5RFV3V3JGMTBCSW5ld2xWNzlXUGovLmxrb2ZLdnBkbHJSY0tIVjl6WnAubSI7fQ==', 1705643501),
('rBoFupKteuCuGqBqPUvXmBNTgxWuFhdKJbYfnaXU', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiOUhEQTFNUGpVcXIybUI1Qjg1dThaZEJ6cFg0cWpwSW1IYjBIbG5hSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1705653800),
('tUlAsfZhvj8wjH8cb274BhnIeS0EPpOOmqOOKS5y', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYTRUV0VVTUlHUHNZWkZRV2FNUkVRSnlEZzNwZ1R6Z2daZFZBMHh6UyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjY3OiJodHRwOi8vbG9jYWxob3N0L2RoYXJfbWFpbi9waHAvcHVibGljL2FkbWluL29yZGVyLWRldGFpbC85MTc3NzI3ODQzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRSZ1ZuOFBQd2Z5RFV3V3JGMTBCSW5ld2xWNzlXUGovLmxrb2ZLdnBkbHJSY0tIVjl6WnAubSI7fQ==', 1705663267),
('ufPutLoEvcbTx4vTaKKfzaXe2sVYICDpE1RhI3gH', 64, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YToxMDp7czo2OiJfdG9rZW4iO3M6NDA6IkNDOVNaSmVWczRoZXVnZnQwNkhvSHlKM3RmV0UxZTU5ZjhyTDdHbzgiO3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ4OiJodHRwOi8vbG9jYWxob3N0L2RoYXJfbWFpbi9waHAvcHVibGljL215LWFjY291bnQiO31zOjU6Im9yZGVyIjtzOjEzNjM6InsidGhlc2lzX2ZpbGUiOiJ1cGxvYWRzL2ZzQU1DcWFpQ21NVW9iSGJoTnpic3dYS01SVmZWWUplM2IxNWRRMkMucGRmIiwic3lub3BzaXNfZmlsZSI6bnVsbCwiaGFyZF9iaW5kaW5nc19vcmRlcnMiOlt7ImhhcmRfYmluZGluZ19wYXBlcl9zaXplIjoiQTQgLSBGdWxsIiwiaGFyZF9iaW5kaW5nX3F0eSI6IjIiLCJoYXJkX2JpbmRpbmdfcGFwZXJfdHlwZSI6IlBhcGVyIE9uZSAxMDAgR1NNIG9yIEVxdWl2YWxlbnQiLCJoYXJkX2JpbmRpbmdfcGFwZXJfY29sb3IiOiJBbGwgQmxhY2sgJiBXaGl0ZSIsImhhcmRfYmluZGluZ19wcmludGluZ190eXBlIjoiU2luZ2xlIFNpZGUiLCJoYXJkX2JpbmRpbmdfYTRfcG9ja2V0cyI6IjIiLCJoYXJkX2JpbmRpbmdfY2RfcG9ja2V0cyI6IjAiLCJoYXJkX2JpbmRpbmdfaW5mb3JtYXRpb24iOiIifV0sImhhcmRfYmluZGluZ19vdGhlcl9kZXRhaWxzIjp7ImhhcmRfYmluZGluZ19jb3Zlcl9jb2xvcl9kYiI6IkRCIDEiLCJoYXJkX2JpbmRpbmdfY292ZXJfZGVzaWduIjpudWxsLCJoYXJkX2JpbmRpbmdfc3BpbmUiOiJQcmludCBOb3QgUmVxdWlyZWQifSwic29mdF9iaW5kaW5nc19vcmRlcnMiOlt7InNvZnRfYmluZGluZ19wYXBlcl9zaXplIjoiIiwic29mdF9iaW5kaW5nX3F0eSI6IjAiLCJzb2Z0X2JpbmRpbmdfcGFwZXJfdHlwZSI6IiIsInNvZnRfYmluZGluZ19wYXBlcl9jb2xvciI6IiIsInNvZnRfYmluZGluZ19wcmludGluZ190eXBlIjoiIiwic29mdF9iaW5kaW5nX2E0X3BvY2tldHMiOiIwIiwic29mdF9iaW5kaW5nX2NkX3BvY2tldHMiOiIwIiwic29mdF9iaW5kaW5nX2luZm9ybWF0aW9uIjoiIn1dLCJzb2Z0X2JpbmRpbmdfb3RoZXJfZGV0YWlscyI6eyJzb2Z0X2JpbmRpbmdfY292ZXJfZGVzaWduIjpudWxsfSwic3lub3BzaXNfYmluZGluZ3Nfb3JkZXJzIjpbeyJzeW5vcHNpc19iaW5kaW5nX3BhcGVyX3NpemUiOiIiLCJzeW5vcHNpc19iaW5kaW5nX3F0eSI6IjAiLCJzeW5vcHNpc19iaW5kaW5nX3BhcGVyX3R5cGUiOiIiLCJzeW5vcHNpc19iaW5kaW5nX3BhcGVyX2NvbG9yIjoiIiwic3lub3BzaXNfYmluZGluZ19wcmludGluZ190eXBlIjoiIn1dLCJzeW5vcHNpc19iaW5kaW5nX290aGVyX2RldGFpbHMiOnsic3lub3BzaXNfYmluZGluZ19jb3Zlcl9kZXNpZ25fZmlsZSI6eyJqUXVlcnkzNDEwNzQyNTg4OTMyMjEwNTc1MSI6eyJldmVudHMiOnsiY2hhbmdlIjpbeyJ0eXBlIjoiY2hhbmdlIiwib3JpZ1R5cGUiOiJjaGFuZ2UiLCJndWlkIjoxOTUsIm5hbWVzcGFjZSI6IiJ9XX19fX0sInRoZXNpc19jb2xvcl9wYWdlIjoyMDAsInRoZXNpc19id19wYWdlIjoyMDAsInN5bm9wc2lzX2NvbG9yX3BhZ2UiOjUwLCJzeW5vcHNpc19id19wYWdlIjo1MH0iO3M6MTI6Im9yZGVyX2Ftb3VudCI7czo0OiIzODAwIjtzOjEyOiJ0b3RhbF9hbW91bnQiO3M6NDoiNTA5MiI7czo0OiJjZ3N0IjtzOjI6IjE3IjtzOjQ6InNnc3QiO3M6MjoiMTciO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY0O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDdydXJqcTZlMzN2VUV3UVY1bnFOZWVZTkM5cFJFdERSazdUQ3RQWjdYbW1XaHB6ZVNKVm82Ijt9', 1705661786);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_pages`
--

CREATE TABLE `testimonial_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_pages`
--

INSERT INTO `testimonial_pages` (`id`, `image`, `name`, `feedback`, `rating`, `location`, `created_at`, `updated_at`) VALUES
(1, 'images/iHyGd2gymo1TIvC0Dv7wQZTIEauLZnSyuxmS6uLz.jpg', 'Raktim Banerjee', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', 4, 'Kolkata, Newtown', '2023-11-23 03:36:36', '2023-11-23 03:36:36'),
(2, 'images/iHyGd2gymo1TIvC0Dv7wQZTIEauLZnSyuxmS6uLz.jpg', 'Susmita Sahoo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', 4, 'Kolkata, Newtown', '2023-11-23 03:36:36', '2023-11-23 03:36:36'),
(3, 'images/iHyGd2gymo1TIvC0Dv7wQZTIEauLZnSyuxmS6uLz.jpg', 'Tomoghno', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', 4, 'Kolkata, Newtown', '2023-11-23 03:36:36', '2023-11-23 03:36:36'),
(4, 'images/iHyGd2gymo1TIvC0Dv7wQZTIEauLZnSyuxmS6uLz.jpg', 'Indira', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', 4, 'Kolkata, Newtown', '2023-11-23 03:36:36', '2023-11-23 03:36:36'),
(5, 'images/iHyGd2gymo1TIvC0Dv7wQZTIEauLZnSyuxmS6uLz.jpg', 'Poulomi', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', 4, 'Kolkata, Newtown', '2023-11-23 03:36:36', '2023-11-23 03:36:36'),
(6, 'images/iHyGd2gymo1TIvC0Dv7wQZTIEauLZnSyuxmS6uLz.jpg', 'Tanmay Banerjee', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', 4, 'Kolkata, Newtown', '2023-11-23 03:36:36', '2023-11-23 03:36:36'),
(7, 'images/iHyGd2gymo1TIvC0Dv7wQZTIEauLZnSyuxmS6uLz.jpg', 'Krishna', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', 4, 'Kolkata, Newtown', '2023-11-23 03:36:36', '2023-11-23 03:36:36'),
(8, 'images/iHyGd2gymo1TIvC0Dv7wQZTIEauLZnSyuxmS6uLz.jpg', 'Denzil Pillai', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', 4, 'Kolkata, Newtown', '2023-11-23 03:36:36', '2023-11-23 03:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

CREATE TABLE `uploadfile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderid` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `thesis_main` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmain_stat` int(11) NOT NULL DEFAULT 0,
  `thesis_hard_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thard_stat` int(11) NOT NULL DEFAULT 0,
  `thesis_soft_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tsoft_stat` int(11) NOT NULL DEFAULT 0,
  `synopsis_main` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smain_stat` int(11) NOT NULL DEFAULT 0,
  `synopsis_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scover_stat` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`id`, `orderid`, `thesis_main`, `tmain_stat`, `thesis_hard_cover`, `thard_stat`, `thesis_soft_cover`, `tsoft_stat`, `synopsis_main`, `smain_stat`, `synopsis_cover`, `scover_stat`, `created_at`, `updated_at`) VALUES
(1, '9177727843', 'approval/D6bPA5qlgRi7itJWwdfcoBnvIxP9SX5v4jRPMncH.png', 0, 'approval/Kv1GoP6AevrWfxvRJ9aJg6I5vzB9YjBGE3mdwaKY.png', 0, 'approval/AIfpUnL4SRV0iZ4kt6HB5MGxWecfp4An28or2m5b.png', 0, 'approval/3j1qyzreJstZQf5CiKshIr85k4bakzqH7EmclgSD.png', 0, 'approval/Cf1ZlLybrSE0jOlmko7HhhvKNp2NdzhbTvY5z5jv.png', 0, '2024-01-19 00:17:03', '2024-01-19 00:21:38'),
(2, '9834149814', 'approval/gc8CTBOyGdWgU5jaIuLKrcFYi1INT7UHBJrhp0CK.png', 1, 'approval/O01bRAaNgVF6IKETpoSD4125iMyA3CsDUdzsK0At.png', 0, '', 0, '', 0, '', 0, '2024-01-19 03:15:47', '2024-01-19 03:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Raktim Banerjee', 'ADMIN', 'raktimbanerjee9@gmail.com', NULL, NULL, '$2y$10$RgVn8PPwfyDUwWrF10BInewlV79WPj/.lkofKvpdlrRcKHV9zZp.m', NULL, NULL, NULL, NULL, '2023-12-21 01:27:01', '2023-12-21 01:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `userwisedesigns`
--

CREATE TABLE `userwisedesigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userwisedesigns`
--

INSERT INTO `userwisedesigns` (`id`, `orderid`, `url`, `status`, `reason`, `created_at`, `updated_at`) VALUES
(1, '9834149814', 'http://localhost/dhar_main/php/public/storage/approval/gc8CTBOyGdWgU5jaIuLKrcFYi1INT7UHBJrhp0CK.png', 'Accepted', NULL, '2024-01-19 03:16:45', '2024-01-19 03:16:45'),
(2, '9834149814', 'http://localhost/dhar_main/php/public/storage/approval/gc8CTBOyGdWgU5jaIuLKrcFYi1INT7UHBJrhp0CK.png', 'Rejected', 'Bad', '2024-01-19 03:16:59', '2024-01-19 03:16:59'),
(3, '9834149814', 'http://localhost/dhar_main/php/public/storage/approval/gc8CTBOyGdWgU5jaIuLKrcFYi1INT7UHBJrhp0CK.png', 'Rejected', 'Bad', '2024-01-19 03:17:35', '2024-01-19 03:17:35'),
(4, '9834149814', 'http://localhost/dhar_main/php/public/storage/approval/gc8CTBOyGdWgU5jaIuLKrcFYi1INT7UHBJrhp0CK.png', 'Rejected', 'Bad', '2024-01-19 03:19:12', '2024-01-19 03:19:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`,`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonial_pages`
--
ALTER TABLE `testimonial_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadfile`
--
ALTER TABLE `uploadfile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `userwisedesigns`
--
ALTER TABLE `userwisedesigns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploadfile`
--
ALTER TABLE `uploadfile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `userwisedesigns`
--
ALTER TABLE `userwisedesigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

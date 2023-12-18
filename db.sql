-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 12:50 PM
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_11_042214_create_sessions_table', 1),
(7, '2023_11_14_101308_create_home_pages_table', 2),
(8, '2023_11_14_101357_create_about_pages_table', 2),
(9, '2023_11_14_103033_create_testimonial_pages_table', 3),
(10, '2023_11_14_103156_create_articles_table', 3),
(11, '2023_11_16_052051_create_posts_table', 4),
(12, '2023_11_16_071642_create_faq_categories_table', 5),
(13, '2023_11_16_071643_create_faqs_table', 6),
(14, '2023_11_16_112831_create_services_table', 7),
(15, '2023_11_21_074646_create_banners_table', 8),
(16, '2023_12_05_105627_create_leads_table', 9);

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
('AFKJKd4cH3IHdZeh8OVcHWAzhGwvEy55cqcaMPAb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUFBM1VWc05ZVUJhMVBnR1lJWXhuc3RLcm9VdlJKbHBxNmFmVjU2VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1701776984);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Raktim Banerjee', 'raktimbanerjee9@gmail.com', NULL, '$2y$10$v8le5uRI61rnCoe2Rs2NserN2a1wSt7lmo2FTtEcfz7H0UEZMaFNq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-14 04:04:11', '2023-11-14 04:04:11');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial_pages`
--
ALTER TABLE `testimonial_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

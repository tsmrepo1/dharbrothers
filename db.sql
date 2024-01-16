-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 02:11 PM
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `pickup`, `billing_address`, `shipping_address`, `order_detail`, `order_amount`, `total_amount`, `cgst`, `sgst`, `status`, `payment_status`, `transaction_id`, `created_at`, `updated_at`) VALUES
(14, '7275791662', 28, 1, '{\"billing_street\":\"Rammohan Mukherjee Lane\",\"billing_apartment\":\"29E\\/1\",\"billing_country\":\"India\",\"billing_city\":\"Howrah\",\"billing_state\":\"West Bengal\",\"billing_pin\":\"711102\"}', NULL, '{\"thesis_file\":\"uploads/8uOtxOFObS1T1Y0Rakdy7ZxPdAzeFYUhGlPwofaS.pdf\",\"synopsis_file\":null,\"hard_bindings_orders\":[{\"hard_binding_paper_size\":\"A4 - Full\",\"hard_binding_qty\":\"2\",\"hard_binding_paper_type\":\"Paper One 100 GSM or Equivalent\",\"hard_binding_paper_color\":\"Black & White & Color\",\"hard_binding_printing_type\":\"Single Side\",\"hard_binding_a4_pockets\":\"0\",\"hard_binding_cd_pockets\":\"0\",\"hard_binding_information\":\"\"}],\"hard_binding_other_details\":{\"hard_binding_cover_color_db\":\"DB 7\",\"hard_binding_cover_design\":null,\"hard_binding_spine\":\"Print Not Required\"},\"soft_bindings_orders\":[{\"soft_binding_paper_size\":\"\",\"soft_binding_qty\":\"0\",\"soft_binding_paper_type\":\"\",\"soft_binding_paper_color\":\"\",\"soft_binding_printing_type\":\"\",\"soft_binding_a4_pockets\":\"0\",\"soft_binding_cd_pockets\":\"0\",\"soft_binding_information\":\"\"}],\"soft_binding_other_details\":{\"soft_binding_cover_design\":null},\"synopsis_bindings_orders\":[{\"synopsis_binding_paper_size\":\"\",\"synopsis_binding_qty\":\"0\",\"synopsis_binding_paper_type\":\"\",\"synopsis_binding_paper_color\":\"\",\"synopsis_binding_printing_type\":\"\"}],\"synopsis_binding_other_details\":{\"synopsis_binding_cover_design_file\":{\"jQuery321091211901940640421\":{\"events\":{\"change\":[{\"type\":\"change\",\"origType\":\"change\",\"data\":null,\"guid\":2,\"namespace\":\"\"}]}},\"jQuery341052044257841006241\":{\"events\":{\"change\":[{\"type\":\"change\",\"origType\":\"change\",\"guid\":195,\"namespace\":\"\"}]}}}},\"thesis_color_page\":200,\"thesis_bw_page\":200,\"synopsis_color_page\":50,\"synopsis_bw_page\":50}', 5800.00, 7772.00, 17.00, 17.00, 'PENDING', 'PENDING', NULL, '2024-01-15 21:01:49', '2024-01-15 21:01:49'),
(16, '4875314421', 28, 1, '{\"billing_street\":\"Rammohan Mukherjee Lane\",\"billing_apartment\":\"29E\\/1\",\"billing_country\":\"India\",\"billing_city\":\"Howrah\",\"billing_state\":\"West Bengal\",\"billing_pin\":\"711102\"}', NULL, '{\"thesis_file\":\"uploads/wm262f5RXZj0QelbJwjoerNtUQzmTvuyNJKMP5z3.pdf\",\"synopsis_file\":\"uploads/DJNJYYe7gB0wxXv4HGUWIYP27UfZjc4XByHZlzgB.pdf\",\"hard_bindings_orders\":[{\"hard_binding_paper_size\":\"A4 - Full\",\"hard_binding_qty\":\"2\",\"hard_binding_paper_type\":\"Bond Paper 85 GSM or Equivalent\",\"hard_binding_paper_color\":\"All Black & White\",\"hard_binding_printing_type\":\"Single Side\",\"hard_binding_a4_pockets\":\"2\",\"hard_binding_cd_pockets\":\"0\",\"hard_binding_information\":\"\"},{\"hard_binding_paper_size\":\"A4 - Full\",\"hard_binding_qty\":\"2\",\"hard_binding_paper_type\":\"Paper One 100 GSM or Equivalent\",\"hard_binding_paper_color\":\"Royal Print\",\"hard_binding_printing_type\":\"\",\"hard_binding_a4_pockets\":\"0\",\"hard_binding_cd_pockets\":\"0\",\"hard_binding_information\":\"\"}],\"hard_binding_other_details\":{\"hard_binding_cover_color_db\":\"DB 1\",\"hard_binding_cover_design\":null,\"hard_binding_spine\":\"Print Not Required\"},\"soft_bindings_orders\":[{\"soft_binding_paper_size\":\"A4 - Full\",\"soft_binding_qty\":\"2\",\"soft_binding_paper_type\":\"Paper One 100 GSM or Equivalent\",\"soft_binding_paper_color\":\"All Black & White\",\"soft_binding_printing_type\":\"Single Side\",\"soft_binding_a4_pockets\":\"1\",\"soft_binding_cd_pockets\":\"1\",\"soft_binding_information\":\"\"}],\"soft_binding_other_details\":{\"soft_binding_cover_color_db\":\"DB 1\",\"soft_binding_cover_design\":null,\"soft_binding_spine\":\"Print Required\"},\"synopsis_bindings_orders\":[{\"synopsis_binding_paper_size\":\"A4 - Full\",\"synopsis_binding_qty\":\"2\",\"synopsis_binding_paper_type\":\"Paper One 100 GSM or Equivalent\",\"synopsis_binding_paper_color\":\"All Black & White\",\"synopsis_binding_printing_type\":\"Single Side\"}],\"synopsis_binding_other_details\":{\"synopsis_binding_cover_design\":\"Custom\",\"synopsis_binding_cover_design_file\":\"uploads/h0U8bYrznUAjMvcH3omDS9qncfrbswiCFINiETIr.pdf\"},\"thesis_color_page\":200,\"thesis_bw_page\":200,\"synopsis_color_page\":50,\"synopsis_bw_page\":50}', 15170.00, 20327.80, 17.00, 17.00, 'PENDING', 'PENDING', NULL, '2024-01-16 04:04:36', '2024-01-16 04:04:36');

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
('2LFLXSkp3es3uhYKh7hLpWjCpeRQq67ZR39v2c8H', 28, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibUpTdExKWFc4Vk9ybTVYTDMydko0ZnE4c1RaMk1BQ1cwRjJuMnVjcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3QvZGhhcl9tYWluL3BocC9wdWJsaWMvbXktYWNjb3VudCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI4O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGRGMjFzLldqSTlONnVoL3VjVEdjci45SGRFOXdKdVNmanB4VFBILjNNSTZxYlFGOFR1d3d1Ijt9', 1705409680);

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
(4, 'Raktim Banerjee', 'ADMIN', 'raktimbanerjee9@gmail.com', NULL, NULL, '$2y$10$RgVn8PPwfyDUwWrF10BInewlV79WPj/.lkofKvpdlrRcKHV9zZp.m', NULL, NULL, NULL, NULL, '2023-12-21 01:27:01', '2023-12-21 01:27:01'),
(28, 'Raktim Banerjee', 'USER', 'braktim99@gmail.com', '9836739907', NULL, '$2y$10$dF21s.WjI9N6uh/ucTGcr.9HdE9wJuSfjpxTPH.3MI6qbQF8Tuwwu', NULL, NULL, NULL, NULL, '2024-01-15 21:01:49', '2024-01-15 21:01:49'),
(30, 'Raktim Banerjee', 'USER', 'braktim999@gmail.com', '9836739907', NULL, '$2y$10$0Z4GAJk3ahakAGS8sKgG4uoSJztAiN97iUVeZ0w4YxT3WmoRUmza6', NULL, NULL, NULL, NULL, '2024-01-16 04:04:36', '2024-01-16 04:04:36');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploadfile`
--
ALTER TABLE `uploadfile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `userwisedesigns`
--
ALTER TABLE `userwisedesigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

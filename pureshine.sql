-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 jan 2024 om 23:06
-- Serverversie: 10.4.25-MariaDB
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pureshine`
--
CREATE DATABASE IF NOT EXISTS `pureshine` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pureshine`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `omschrijving` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `time` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `appointments`
--

TRUNCATE TABLE `appointments`;
--
-- Gegevens worden geëxporteerd voor tabel `appointments`
--

INSERT INTO `appointments` (`id`, `customer_id`, `email`, `omschrijving`, `order_status`, `service`, `extra`, `price`, `date`, `created_at`, `updated_at`, `time`) VALUES
(20, '2', 'pietermei29@gmail.com', 'Hallo', 'wachtend', 'poetsen', 'extra', 'price', '2023-12-21 00:00:00', '2023-12-18 16:11:24', '2023-12-18 16:11:24', '11:00 - 13:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `categories`
--

TRUNCATE TABLE `categories`;
--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'distinctio iste', 'iusto', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(2, 'nihil ut', 'culpa', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(3, 'voluptatibus perspiciatis', 'esse', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(4, 'reprehenderit aut', 'voluptate', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(5, 'numquam expedita', 'excepturi', '2023-12-09 23:09:55', '2023-12-09 23:09:55');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_holder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `customers`
--

TRUNCATE TABLE `customers`;
--
-- Gegevens worden geëxporteerd voor tabel `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `photo`, `account_holder`, `account_number`, `bank_name`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Marques Beatty DVM', 'lind.vita@example.net', '405-774-1935', '9584 Selena Plaza Apt. 625\nEast Gennaroton, TN 45497', NULL, 'Ike Pfannerstill II', '79479026', 'BCA', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(2, 'Clint Hill', 'brakus.sheldon@example.com', '+13203386247', '1446 Delphia Summit Suite 505\nEddchester, ME 40836-3416', NULL, 'Prof. Lyric Kassulke', '68108498', 'BSI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(3, 'Golda Bartoletti', 'jherzog@example.com', '(505) 529-6171', '608 Christiansen Valley Suite 721\nO\'Keefemouth, CO 12692', NULL, 'Camylle Bogan', '55897400', 'BRI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(4, 'Princess Hilpert', 'tbartell@example.net', '316.313.2676', '13892 Tracey Corners\nWatsicatown, CO 59410-9436', NULL, 'Fanny Hahn', '15211397', 'BNI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(5, 'Elnora Gerlach DVM', 'zheidenreich@example.net', '+1-385-673-1794', '62212 Bergnaum Junction Suite 408\nLake Osbornebury, OH 47119', NULL, 'Alfreda Quigley IV', '18869509', 'BNI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(6, 'Dr. Reina Okuneva DDS', 'wilford.wilderman@example.net', '351.779.3460', '185 Feeney Isle\nLake Noemieborough, LA 09924', NULL, 'Ms. Lucinda Gleichner I', '57954342', 'BSI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(7, 'Concepcion Pagac', 'funk.evans@example.com', '+1.636.980.6863', '70004 Franco Roads Suite 701\nWest Cierraside, MA 67025', NULL, 'Cordie Waters', '28188993', 'BNI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(8, 'Heather Lang', 'priscilla.muller@example.org', '253-467-7074', '9710 Carol Mission\nNew Maeve, CT 70701-8251', NULL, 'Eveline Legros PhD', '62597591', 'BRI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(9, 'Corbin Gutmann', 'gerardo.effertz@example.org', '+1-248-799-8402', '182 Sarina View\nShanaborough, HI 13522', NULL, 'Ms. Ayana Armstrong', '32656435', 'BCA', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(10, 'Prof. Ola Quitzon PhD', 'keyshawn.gulgowski@example.org', '1-347-695-1770', '502 Sam Square\nWest Kassandra, OR 54369', NULL, 'Abdul Conroy', '90622803', 'BSI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(11, 'Elvis Homenick', 'ahmad.hintz@example.net', '+1 (681) 907-7928', '703 Walter Stravenue Apt. 005\nEast Tre, MS 53000-0250', NULL, 'Dolores Reichel', '23535025', 'Mandiri', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(12, 'Prof. Flavie Daniel', 'vlittle@example.net', '718-821-3388', '1188 Shanahan Stream\nNew Aubreybury, LA 50479', NULL, 'Leanne Mueller', '17593603', 'BRI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(13, 'Marcel Turner', 'natasha21@example.org', '+1 (630) 997-0724', '9698 Jackie Throughway Suite 201\nBartellport, IA 10304', NULL, 'Mrs. Dannie Barrows', '22253255', 'Mandiri', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(14, 'Zion Koelpin', 'emmy.marks@example.org', '352.561.1386', '1633 Jermaine Mill Suite 844\nGrantmouth, AZ 13811-0071', NULL, 'Waino Wilkinson IV', '43830456', 'BNI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(15, 'Terrill Tillman III', 'gschiller@example.org', '1-283-352-6412', '45932 Lynch Crossing Apt. 181\nLake Francis, GA 26819-7646', NULL, 'Mr. Arely Ryan MD', '60968254', 'BSI', '2023-12-09 23:09:55', '2023-12-09 23:09:55');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `failed_jobs`
--

TRUNCATE TABLE `failed_jobs`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `migrations`
--

TRUNCATE TABLE `migrations`;
--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_30_072200_add_username_and_phoro_to_users_table', 1),
(6, '2023_04_30_150318_create_customers_table', 1),
(7, '2023_05_01_111143_create_suppliers_table', 1),
(8, '2023_05_02_114617_create_categories_table', 1),
(9, '2023_05_02_122454_create_units_table', 1),
(10, '2023_05_02_140630_create_products_table', 1),
(11, '2023_05_04_084431_create_orders_table', 1),
(12, '2023_05_04_084646_create_order_details_table', 1),
(13, '2023_05_04_173440_create_shoppingcart_table', 1),
(14, '2023_05_06_142348_create_purchases_table', 1),
(15, '2023_05_06_143104_create_purchase_details_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_products` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `vat` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `orders`
--

TRUNCATE TABLE `orders`;
--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `order_status`, `total_products`, `sub_total`, `vat`, `total`, `invoice_no`, `payment_type`, `pay`, `due`, `created_at`, `updated_at`) VALUES
(1, '2', '2023-12-10', 'pending', 1, 75, 16, 91, 'INV-000001', 'HandCash', 91, 0, '2023-12-10 15:29:32', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitcost` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `order_details`
--

TRUNCATE TABLE `order_details`;
--
-- Gegevens worden geëxporteerd voor tabel `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `unitcost`, `total`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 1, 75, 75, '2023-12-10 15:29:32', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `password_reset_tokens`
--

TRUNCATE TABLE `password_reset_tokens`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
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

--
-- Tabel leegmaken voor invoegen `personal_access_tokens`
--

TRUNCATE TABLE `personal_access_tokens`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `buying_price` int(11) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `products`
--

TRUNCATE TABLE `products`;
--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `unit_id`, `product_code`, `stock`, `buying_price`, `selling_price`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 'non', '1', '3', 'PC01', 64, 90, 75, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(2, 'nobis', '5', '5', 'PC02', 13, 46, 88, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(3, 'perferendis', '1', '4', 'PC03', 19, 96, 60, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(4, 'voluptatum', '5', '5', 'PC04', 70, 76, 33, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(5, 'blanditiis', '3', '5', 'PC05', 39, 79, 63, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(6, 'dolor', '1', '1', 'PC06', 78, 88, 26, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(7, 'sunt', '1', '4', 'PC07', 9, 67, 26, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(8, 'ad', '2', '1', 'PC08', 45, 7, 99, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(9, 'omnis', '5', '1', 'PC09', 9, 74, 81, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(10, 'odio', '3', '3', 'PC10', 82, 75, 24, NULL, '2023-12-09 23:09:55', '2023-12-09 23:09:55');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=Pending, 1=Approved',
  `total_amount` int(11) NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `purchases`
--

TRUNCATE TABLE `purchases`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `purchase_details`
--

DROP TABLE IF EXISTS `purchase_details`;
CREATE TABLE `purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitcost` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `purchase_details`
--

TRUNCATE TABLE `purchase_details`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `shoppingcart`
--

TRUNCATE TABLE `shoppingcart`;
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_holder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `suppliers`
--

TRUNCATE TABLE `suppliers`;
--
-- Gegevens worden geëxporteerd voor tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `phone`, `address`, `shopname`, `type`, `photo`, `account_holder`, `account_number`, `bank_name`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Susana Kuhic II', 'lesch.bernhard@example.com', '+1.704.815.9447', '44628 Karina Ville Suite 714\nPort Lacey, VA 49132', 'Considine Group', 'Distributor', NULL, 'Herminio Howell', '71369177', 'Mandiri', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(2, 'Ransom Schuppe', 'neal73@example.net', '443.706.5551', '8716 Maeve Glens\nHermanbury, WY 28862', 'Bartoletti, Keeling and Bode', 'Whole Seller', NULL, 'Mrs. Jana Lehner', '42008347', 'BRI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(3, 'Miss Clara Walker II', 'tia38@example.com', '+1.323.670.4069', '115 Isadore Neck\nEast Hassiemouth, WA 33410-9837', 'Kreiger Inc', 'Whole Seller', NULL, 'Melissa Boyer', '12257434', 'BCA', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(4, 'Lexi Conroy', 'pearlie.bechtelar@example.net', '+1 (443) 668-7071', '4911 Lindgren Cape\nEast Virgilfort, WI 19134-1416', 'Wolff-McLaughlin', 'Whole Seller', NULL, 'Prof. Althea Aufderhar', '29759762', 'BCA', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(5, 'Mr. Conrad Bauch', 'edgar66@example.org', '(936) 502-5358', '188 Hirthe Route Suite 577\nEast Evieburgh, PA 97062-1451', 'Glover PLC', 'Distributor', NULL, 'Delfina Roberts MD', '95054907', 'BRI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(6, 'Maureen Hintz', 'electa19@example.com', '+17472860913', '663 Lily Run Suite 920\nHermannburgh, AK 77357-3047', 'Erdman and Sons', 'Whole Seller', NULL, 'Virgil Keeling', '78101729', 'BRI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(7, 'Paula Rau', 'kulas.donavon@example.org', '334.779.1301', '4126 Bernier Passage Suite 571\nSoniaberg, CO 84626', 'Farrell Ltd', 'Whole Seller', NULL, 'Estevan Shields', '69678712', 'BSI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(8, 'Kamille Cummings', 'aubrey.nitzsche@example.net', '+1-540-224-4903', '8122 Jane Mall\nNew Kamron, SC 75907-8692', 'Dare LLC', 'Distributor', NULL, 'Dr. Elmo Padberg III', '75894505', 'BRI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(9, 'Jayson Corwin', 'stark.cletus@example.org', '1-878-434-0021', '22298 Barrows Drive\nTylerfort, AR 85684-7561', 'Nolan-Jones', 'Whole Seller', NULL, 'Violette Kuhn', '30300007', 'Mandiri', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(10, 'Shana Krajcik', 'okuvalis@example.org', '+1.734.919.5266', '765 Koss Manor Suite 240\nOberbrunnerborough, AZ 44691', 'Lang PLC', 'Whole Seller', NULL, 'Prof. Keaton Bailey V', '37599353', 'BSI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(11, 'Mr. Lawson Nader Sr.', 'terrence00@example.org', '+14098180030', '6538 Domenico Loop Apt. 974\nMaggiobury, GA 36419-5275', 'Wyman-Graham', 'Distributor', NULL, 'Darren Conroy', '27190740', 'BCA', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(12, 'Bennett Rogahn', 'katheryn.pouros@example.com', '385.363.1797', '743 Kaycee Stream\nLake Vanessafort, TN 56875', 'Collins, VonRueden and Hill', 'Distributor', NULL, 'Selina Lubowitz', '65305728', 'BCA', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(13, 'Nathen Doyle V', 'leo.kutch@example.net', '+1.202.956.7343', '37085 Mueller Forest Suite 034\nNorth Rhiannontown, LA 59766-3258', 'Bergnaum Inc', 'Whole Seller', NULL, 'Alysson Mayer', '54458305', 'Mandiri', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(14, 'Dr. Tre Conroy III', 'bwilderman@example.net', '661-697-4528', '31353 Shanahan Inlet\nPort Tarynmouth, IL 75671', 'Wuckert Ltd', 'Distributor', NULL, 'Jamaal Larkin', '60252839', 'BRI', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(15, 'Lurline Weber Sr.', 'toy.annabelle@example.com', '727.271.5277', '55041 Brant Station\nEbertmouth, TX 32273', 'Mertz-Sauer', 'Whole Seller', NULL, 'Antonietta Waelchi', '76243996', 'BCA', '2023-12-09 23:09:55', '2023-12-09 23:09:55');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `units`
--

TRUNCATE TABLE `units`;
--
-- Gegevens worden geëxporteerd voor tabel `units`
--

INSERT INTO `units` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'inventore vel', 'at', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(2, 'exercitationem nesciunt', 'in', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(3, 'et recusandae', 'enim', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(4, 'numquam nam', 'id', '2023-12-09 23:09:55', '2023-12-09 23:09:55'),
(5, 'totam totam', 'quia', '2023-12-09 23:09:55', '2023-12-09 23:09:55');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tabel leegmaken voor invoegen `users`
--

TRUNCATE TABLE `users`;
--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `photo`) VALUES
(1, 'Admin', 'admin@gmail.com', '2023-12-09 23:09:55', '$2y$10$7FJjNxvtc2bl.3C0hJe37e5C4SHc.iX.yCxHcVmTEspK8avNlGst.', '9wBFWoFNGg', '2023-12-09 23:09:55', '2023-12-09 23:09:55', 'admin', NULL),
(2, 'Pieter Meij', 'pietermei29@gmail.com', NULL, '$2y$10$XHiio8yFEvP2F7TxRIYOw.pFSHnSJKH8m/s83qxQKjlFUIJ7L9Esu', 'EnNzx7WEIuamWbsI053SLwNAd4GlDfq88wN43h86ttU83s3e5mgXFqDi5z8C', '2023-12-09 23:10:01', '2023-12-09 23:10:01', 'Pieter', NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexen voor tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Indexen voor tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexen voor tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexen voor tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`),
  ADD UNIQUE KEY `suppliers_phone_unique` (`phone`);

--
-- Indexen voor tabel `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `units_name_unique` (`name`),
  ADD UNIQUE KEY `units_slug_unique` (`slug`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

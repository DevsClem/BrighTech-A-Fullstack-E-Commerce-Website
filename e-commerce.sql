-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2022 at 08:04 AM
-- Server version: 8.0.28
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `is_main` tinyint(1) NOT NULL,
  `order` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  `information` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `information`, `created_at`, `updated_at`) VALUES
(6, 1, '{\"info\":{\"shipping_first_name\":\"Clement\",\"shipping_last_name\":\"Narciso\",\"shipping_address\":\"Dinaville\",\"shipping_address2\":\"Ma-a\",\"shipping_city\":\"Davao\",\"shipping_state\":\"Davao del Sur\",\"shipping_zip_code\":\"8000\",\"same\":\"on\",\"billing_first_name\":\"Clement\",\"billing_last_name\":\"Narciso\",\"billing_address\":\"Dinaville\",\"billing_address2\":\"Ma-a\",\"billing_city\":\"Davao\",\"billing_state\":\"Davao del Sur\",\"billing_zip_code\":\"8000\",\"stripeToken\":\"tok_1Kci5xKU6hqHkkY4ln9FjQSi\"},\"items\":[{\"id\":\"17\",\"product_id\":\"1\",\"name\":\"Asus VP249QGR 24in IPS 144Hz Full HD\",\"quantity\":\"1\",\"price\":\"18000.00\"},{\"id\":\"18\",\"product_id\":\"7\",\"name\":\"Corsair K83 Wireless Entertainment\",\"quantity\":\"6\",\"price\":\"2000.00\"}],\"total_price\":30000}', '2022-03-13 03:27:49', '2022-03-13 03:27:49'),
(7, 1, '{\"info\":{\"shipping_first_name\":\"Clement\",\"shipping_last_name\":\"Narciso\",\"shipping_address\":\"Dinaville\",\"shipping_address2\":\"Ma-a\",\"shipping_city\":\"Davao\",\"shipping_state\":\"Davao del Sur\",\"shipping_zip_code\":\"8000\",\"same\":\"on\",\"billing_first_name\":\"Clement\",\"billing_last_name\":\"Narciso\",\"billing_address\":\"Dinaville\",\"billing_address2\":\"Ma-a\",\"billing_city\":\"Davao\",\"billing_state\":\"Davao del Sur\",\"billing_zip_code\":\"8000\",\"stripeToken\":\"tok_1Kci6gKU6hqHkkY44QK2wD8z\"},\"items\":[{\"id\":\"19\",\"product_id\":\"7\",\"name\":\"Corsair K83 Wireless Entertainment\",\"quantity\":\"6\",\"price\":\"2000.00\"}],\"total_price\":12000}', '2022-03-13 03:28:34', '2022-03-13 03:28:34'),
(8, 1, '{\"info\":{\"shipping_first_name\":\"Clement\",\"shipping_last_name\":\"Narciso\",\"shipping_address\":\"Mt.Parker Ma-a\",\"shipping_address2\":\"\",\"shipping_city\":\"Davao City\",\"shipping_state\":\"Davao del Sur\",\"shipping_zip_code\":\"8000\",\"same\":\"on\",\"billing_first_name\":\"Clement\",\"billing_last_name\":\"Narciso\",\"billing_address\":\"Mt.Parker Ma-a\",\"billing_address2\":\"\",\"billing_city\":\"Davao City\",\"billing_state\":\"Davao del Sur\",\"billing_zip_code\":\"8000\",\"stripeToken\":\"tok_1KcnsWKU6hqHkkY4291BbAov\"},\"items\":[{\"id\":\"20\",\"product_id\":\"10\",\"name\":\"Logitech M331 Silent Plus Wireless\",\"quantity\":\"5\",\"price\":\"800.00\"},{\"id\":\"21\",\"product_id\":\"13\",\"name\":\"Logitech M191 Wireless White\\/Black Full Size\",\"quantity\":\"2\",\"price\":\"2500.00\"},{\"id\":\"22\",\"product_id\":\"6\",\"name\":\"Logitech K400 Plus Wireless Touch\",\"quantity\":\"3\",\"price\":\"2000.00\"}],\"total_price\":15000}', '2022-03-13 09:38:21', '2022-03-13 09:38:21'),
(9, 1, '{\"info\":{\"shipping_first_name\":\"Clement\",\"shipping_last_name\":\"Narciso\",\"shipping_address\":\"Mt.Parker Ma-a\",\"shipping_address2\":\"\",\"shipping_city\":\"Davao City\",\"shipping_state\":\"Davao del Sur\",\"shipping_zip_code\":\"8000\",\"same\":\"on\",\"billing_first_name\":\"Clement\",\"billing_last_name\":\"Narciso\",\"billing_address\":\"Mt.Parker Ma-a\",\"billing_address2\":\"\",\"billing_city\":\"Davao City\",\"billing_state\":\"Davao del Sur\",\"billing_zip_code\":\"8000\",\"stripeToken\":\"tok_1KcqHuKU6hqHkkY4jHpSIMBD\"},\"items\":[{\"id\":\"23\",\"product_id\":\"7\",\"name\":\"Corsair K83 Wireless Entertainment\",\"quantity\":\"5\",\"price\":\"2000.00\"},{\"id\":\"24\",\"product_id\":\"5\",\"name\":\"Logitech K380 Multi-Device Bluetooth\",\"quantity\":\"3\",\"price\":\"1800.00\"}],\"total_price\":15400}', '2022-03-13 12:12:43', '2022-03-13 12:12:43'),
(10, 1, '{\"info\":{\"shipping_first_name\":\"Clement\",\"shipping_last_name\":\"Narciso\",\"shipping_address\":\"Mt.Parker Ma-a\",\"shipping_address2\":\"\",\"shipping_city\":\"Davao City\",\"shipping_state\":\"Davao del Sur\",\"shipping_zip_code\":\"8000\",\"same\":\"on\",\"billing_first_name\":\"Clement\",\"billing_last_name\":\"Narciso\",\"billing_address\":\"Mt.Parker Ma-a\",\"billing_address2\":\"\",\"billing_city\":\"Davao City\",\"billing_state\":\"Davao del Sur\",\"billing_zip_code\":\"8000\",\"stripeToken\":\"tok_1KcqJwKU6hqHkkY4fVpzzug4\"},\"items\":[{\"id\":\"25\",\"product_id\":\"5\",\"name\":\"Logitech K380 Multi-Device Bluetooth\",\"quantity\":\"5\",\"price\":\"1800.00\"},{\"id\":\"26\",\"product_id\":\"7\",\"name\":\"Corsair K83 Wireless Entertainment\",\"quantity\":\"2\",\"price\":\"2000.00\"}],\"total_price\":13000}', '2022-03-13 12:14:48', '2022-03-13 12:14:48'),
(11, 1, '{\"info\":{\"shipping_first_name\":\"Clement\",\"shipping_last_name\":\"Narciso\",\"shipping_address\":\"Mt.Parker Ma-a\",\"shipping_address2\":\"\",\"shipping_city\":\"Davao City\",\"shipping_state\":\"Davao del Sur\",\"shipping_zip_code\":\"8000\",\"same\":\"on\",\"billing_first_name\":\"Clement\",\"billing_last_name\":\"Narciso\",\"billing_address\":\"Mt.Parker Ma-a\",\"billing_address2\":\"\",\"billing_city\":\"Davao City\",\"billing_state\":\"Davao del Sur\",\"billing_zip_code\":\"8000\",\"stripeToken\":\"tok_1KcqPaKU6hqHkkY48aS1d2B1\"},\"items\":[{\"id\":\"27\",\"product_id\":\"14\",\"name\":\"Logitech M190 Wireless Mouse Red\",\"quantity\":\"7\",\"price\":\"1950.00\"},{\"id\":\"29\",\"product_id\":\"11\",\"name\":\"Logitech M557 Wireless Bluetooth Mouse\",\"quantity\":\"4\",\"price\":\"1300.00\"}],\"total_price\":18850}', '2022-03-13 12:20:39', '2022-03-13 12:20:39'),
(12, 1, '{\"info\":{\"shipping_first_name\":\"Clement\",\"shipping_last_name\":\"Narciso\",\"shipping_address\":\"Mt.Parker Ma-a\",\"shipping_address2\":\"\",\"shipping_city\":\"Davao City\",\"shipping_state\":\"Davao del Sur\",\"shipping_zip_code\":\"8000\",\"same\":\"on\",\"billing_first_name\":\"Clement\",\"billing_last_name\":\"Narciso\",\"billing_address\":\"Mt.Parker Ma-a\",\"billing_address2\":\"\",\"billing_city\":\"Davao City\",\"billing_state\":\"Davao del Sur\",\"billing_zip_code\":\"8000\",\"stripeToken\":\"tok_1KcqUKKU6hqHkkY4zVs5SyOf\"},\"items\":[{\"id\":\"30\",\"product_id\":\"10\",\"name\":\"Logitech M331 Silent Plus Wireless\",\"quantity\":\"7\",\"price\":\"800.00\"},{\"id\":\"32\",\"product_id\":\"11\",\"name\":\"Logitech M557 Wireless Bluetooth Mouse\",\"quantity\":\"2\",\"price\":\"1300.00\"}],\"total_price\":8200}', '2022-03-13 12:25:33', '2022-03-13 12:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `product_category_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `inventory` int NOT NULL,
  `quantity_sold` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `name`, `description`, `price`, `inventory`, `quantity_sold`, `created_at`, `updated_at`) VALUES
(1, 1, 'Asus VP249QGR 24in IPS 144Hz Full HD', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '18000.00', 50, 20, '2022-03-12 00:41:10', '2022-03-12 00:41:10'),
(2, 1, 'Asus VP279QGR 24in IPS 144Hz Full HD', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '18500.00', 40, 20, '2022-03-12 00:41:10', '2022-03-12 00:41:10'),
(3, 1, 'Asus ROG XG279Q 27\" IPS Overclockable ', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '15000.00', 30, 10, '2022-03-12 00:42:53', '2022-03-12 00:42:53'),
(4, 1, 'Viewsonic VX3276-2K-MHD-2 32in IPS QHD', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '19500.00', 60, 15, '2022-03-12 00:42:53', '2022-03-12 00:42:53'),
(5, 3, 'Logitech K380 Multi-Device Bluetooth', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '1800.00', 55, 20, '2022-03-12 00:44:38', '2022-03-12 00:44:38'),
(6, 3, 'Logitech K400 Plus Wireless Touch', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '2000.00', 45, 10, '2022-03-12 00:44:38', '2022-03-12 00:44:38'),
(7, 3, 'Corsair K83 Wireless Entertainment', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '2000.00', 70, 30, '2022-03-12 00:44:38', '2022-03-12 00:44:38'),
(8, 3, 'Corsair K83 Wireless Entertainment', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '2500.00', 45, 10, '2022-03-12 00:44:38', '2022-03-12 00:44:38'),
(9, 3, 'Logitech K400 Plus TV Wireless Touch', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '1950.00', 50, 15, '2022-03-12 00:44:38', '2022-03-12 00:44:38'),
(10, 2, 'Logitech M331 Silent Plus Wireless', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '800.00', 70, 20, '2022-03-12 00:48:05', '2022-03-12 00:48:05'),
(11, 2, 'Logitech M557 Wireless Bluetooth Mouse', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '1300.00', 100, 30, '2022-03-12 00:48:05', '2022-03-12 00:48:05'),
(12, 2, 'Logitech M185 Wireless Red/White Mouse', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '1800.00', 70, 20, '2022-03-12 00:48:05', '2022-03-12 00:48:05'),
(13, 2, 'Logitech M191 Wireless White/Black Full Size', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '2500.00', 45, 10, '2022-03-12 00:48:05', '2022-03-12 00:48:05'),
(14, 2, 'Logitech M190 Wireless Mouse Red', 'Pariatur laboris et excepteur qui aliqua culpa pariatur qui. Est irure deserunt non anim aute exercitation enim esse proident fugiat est nisi tempor ipsum. Mollit qui voluptate mollit non. In velit occaecat labore ut minim ad dolore nostrud commodo culpa et voluptate consequat dolore. Ad officia esse enim incididunt minim nulla deserunt sunt reprehenderit aliqua adipisicing et. Veniam est in qui culpa in minim ipsum enim dolor. Proident irure quis officia exercitation aliqua reprehenderit velit laboris eu sint.Non excepteur amet esse dolor. Ullamco veniam eu proident magna veniam sunt est aliqua sint et nostrud do exercitation elit. Eu exercitation ea ex duis cupidatat proident id dolore do cupidatat ad fugiat dolore Lorem.Ullamco aute ut occaecat est eiusmod et sint id anim reprehenderit ex eiusmod pariatur. Labore duis commodo et consequat eiusmod aliquip. Velit fugiat enim officia pariatur. Excepteur mollit ea officia consequat veniam pariatur sit. Proident nostrud cupidatat incididunt sit esse esse qui. Do minim ullamco eu sit labore reprehenderit do deserunt fugiat nostrud commodo dolore.Ipsum amet esse excepteur sit ullamco consequat. Voluptate sit dolore anim mollit aliquip fugiat. Enim dolore occaecat consequat fugiat consequat sunt sunt esse non ', '1950.00', 50, 15, '2022-03-12 00:48:05', '2022-03-12 00:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Monitor', '2022-03-11 05:11:45', '2022-03-11 05:11:45'),
(2, 'Mouse', '2022-03-11 05:11:45', '2022-03-11 05:11:45'),
(3, 'Keyboard', '2022-03-11 05:11:45', '2022-03-11 05:11:45'),
(4, 'Mouse', '2022-03-11 05:11:45', '2022-03-11 05:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Clement', 'Narciso', 'clement@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', '2022-03-13 05:29:36', '2022-03-13 05:29:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_items_products1_idx` (`product_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_products1_idx` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_id` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

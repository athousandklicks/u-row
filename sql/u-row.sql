-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2018 at 12:40 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u-row`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `town` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `town`, `city`, `state`, `country`, `created_at`, `updated_at`) VALUES
(1, 2, 'Lugbe', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:48:47', '2018-06-22 23:48:47'),
(2, 2, 'Lugbe', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:36:52', '2018-06-22 23:36:52'),
(3, 2, 'Lugbe', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:37:10', '2018-06-22 23:37:10'),
(4, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:36:38', '2018-06-22 23:36:38'),
(5, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:55:43', '2018-06-22 23:55:43'),
(6, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:11:56', '2018-06-22 23:11:56'),
(7, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:53:39', '2018-06-22 23:53:39'),
(8, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:11:19', '2018-06-22 23:11:19'),
(9, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:25:03', '2018-06-22 23:25:03'),
(10, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:37:19', '2018-06-22 23:37:19'),
(11, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:37:45', '2018-06-22 23:37:45'),
(12, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:40:03', '2018-06-22 23:40:03'),
(13, 2, 'Abuja', 'Abuja', 'FCT', 'Nigeria', '2018-06-22 23:46:16', '2018-06-22 23:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` enum('super-admin','admin','supervisor','staff') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `level` enum('0','1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `current_login_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `roles`, `level`, `current_login_at`, `last_login_at`, `last_login_ip`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ome Itotoh', 'Omescroll', 'omescroll@gmail.com', '$2y$10$GVEyDuo6w3WJDfStruMxL.NRCiqIACRuFjS5lLk49GkUxZpOBs6ue', 'admin', '1', NULL, NULL, NULL, 'GPzmQNhvQXBmhgbNWSUMsAdLj1OmG4WrQi5sZ9gyro950fiVmWt6EpimmIuK', '2018-03-30 10:36:57', '2018-03-30 10:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `body-style`
--

DROP TABLE IF EXISTS `body-style`;
CREATE TABLE IF NOT EXISTS `body-style` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `body-style`
--

INSERT INTO `body-style` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Sports Utility Vehicle (SUV)', 'Sports Utility Vehicle (SUV)', NULL, NULL),
(2, 'Coupe', 'Coupe', NULL, NULL),
(3, 'Convertible', 'Convertible', NULL, NULL),
(4, 'Wagon', 'Wagon', NULL, NULL),
(5, 'Sedan', 'Sedan', NULL, NULL),
(6, 'Hatchback', 'Hatchback', '2018-04-21 08:29:02', '2018-04-21 08:29:02'),
(7, 'Multi-Purpose Vehicle (MPV)', 'Multi-Purpose Vehicle (MPV)', '2018-04-21 08:31:05', '2018-04-21 09:48:03'),
(8, 'Crossover', 'Crossover', '2018-04-21 08:33:43', '2018-04-21 08:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drivetrain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mileage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vin_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_slide` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `fuel_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_offer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Available','Sold','Being Considered') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `description` text COLLATE utf8mb4_unicode_ci,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `promo_phrase` enum('Hot','Just Arrived','Popular','Discounted','On Sale') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Hot',
  `doors` int(11) DEFAULT NULL,
  `passengers` int(11) DEFAULT NULL,
  `miles` int(11) DEFAULT NULL,
  `interior` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exterior` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_interest` int(11) DEFAULT NULL,
  `image_full` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_dashboard` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_leftside` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_rightside` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_back` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_engine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_boot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_frontseat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_backseat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_front` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `stock_number`, `drivetrain`, `body_style`, `transmission`, `mileage`, `price`, `year`, `model`, `vin_number`, `engine`, `front_slide`, `fuel_type`, `condition`, `special_offer`, `status`, `description`, `comment`, `promo_phrase`, `doors`, `passengers`, `miles`, `interior`, `exterior`, `country`, `no_of_interest`, `image_full`, `image_dashboard`, `image_leftside`, `image_rightside`, `image_back`, `image_engine`, `image_boot`, `image_frontseat`, `image_backseat`, `image_front`, `video`, `created_at`, `updated_at`) VALUES
(5, 'BMW 348i', '46436396', 'All-wheel-drive (AWD)', 'Coupe', 'Manual', '20 City / 28 Hwy', 2200.00, '1990', '253i', 'WP0AB2E81EK190171', '3.4L Mid-Engine V6', '1', 'PMS', 'Brand New', '5% Discount', 'Sold', '<p>The 330i, the more powerful gasoline inline-four model, was graced with a new turbocharged 2.0-liter engine, which prompted the name change from 328i. The turbocharged inline-six model also got a new engine in 2016 and traded its 335i badge for one reading 340i. The diesel four-cylinder in the 328d was unchanged, as were the base gas turbo four in the 320i and the plug-in hybrid powertrain in the 330e.&nbsp;</p>', '<p>BMW has made several minor changes to the 3-series lineup for 2018. Perhaps the most important among them is that BMW&rsquo;s new infotainment system, iDrive 6.0, is now standard in all models, adding touchscreen capability where previous systems had relied on a rotary knob. LED headlights are also newly standard, and LED fog lights make their first appearance on the entry-level 320i&rsquo;s standard equipment list. A new exterior color (Sunset Orange Metallic), interior leather color (Cognac Brown Dakota), and interior trim color (Aluminum Dark Carbon) can all be had, at a price. Then there&rsquo;s a new Shadow Sport package with blacked-out trim on the wheels, head- and taillights, grille, and lower front spoiler. These changes are all fine by us, but we&rsquo;re more excited about the forthcoming 2019 3-series, which will be all new and, we hope, much improved.&nbsp;</p>', 'Popular', 2, 2, 70000, 'Agate Grey', 'Lime Gold Metallic', 'United States', NULL, '10.jpg', 'bm-blue.png', '3.jpg', 'bmw.jpg', '4.jpg', '1.jpg', '8.png', '2.jpg', '6.jpg', '7.png', 'https://www.youtube.com/embed/zmXNfXg33Bg', '2018-04-08 19:30:17', '2018-04-24 08:25:37'),
(8, '2018 A3 Sportback e-tron', '13731833', 'All-wheel-drive (AWD)', 'Wagon', 'Automatic', '12hy/43', 23000.00, '1991', '1.4 TFSI® PHEV', 'Chr12345', 'XAS1234353', NULL, 'Diesel', 'Brand New', 'Free Shipping', 'Available', '<p>Audi first unveiled the R8 V10 Spyder at the 2009 Frankfurt International Motor Show in September 2009. It runs the same 5.2-litre V10 engine found in the coupe. Maximum power is 386kW (518 PS) and peak torque is 530Nm (391 lb-ft). The 0 - 62mph sprint time is 4.1 seconds while the manual can deliver a top speed of 194mph.</p>', '<p>Just a rectangle with 2 air inlets, lol what a joke, I just see pure amateurism, germans did not spend any money for design in the past 15 years, always the same kind ! This car looks like a pil of steel (too heavy) ! Seriously lol again ! 160.000 euros ! Better to have a Viper GTS, a Lotus or Alfa Giulia for half this price !</p>', 'Hot', 4, 2, 1000, 'Fusia Pink', 'Crying Red', 'Japan', NULL, '1.jpg', '10.jpg', '8.png', '3.jpg', '2.jpg', '4.jpg', 'bmw.jpg', 'bm-blue.png', '6.jpg', '7.png', 'https://www.youtube.com/watch?v=wT-4nESh-4Y', '2018-04-12 14:24:07', '2018-04-12 14:24:07'),
(7, 'BMW', '71868798', 'Rear wheel drive (RWD)', 'Sedan', 'Manual', '20 City / 28 Hwy', 1234.00, '1990', '253i', 'NMH788655434554', '3.4L Mid-Engine V6', '1', 'Diesel', 'Brand New', '', 'Available', 'BMW has made several minor changes to the 3-series lineup for 2018. Perhaps the most important among them is that BMW’s new infotainment system, iDrive 6.0, is now standard in all models, adding touchscreen capability where previous systems had relied on a rotary knob. LED headlights are also newly standard, and LED fog lights make their first appearance on the entry-level 320i’s standard equipment list. A new exterior color (Sunset Orange Metallic), interior leather color (Cognac Brown Dakota), and interior trim color (Aluminum Dark Carbon) can all be had, at a price. Then there’s a new Shadow Sport package with blacked-out trim on the wheels, head- and taillights, grille, and lower front spoiler. These changes are all fine by us, but we’re more excited about the forthcoming 2019 3-series, which will be all new and, we hope, much improved.', 'BMW opens pricing at $34,900 for the 180-hp inline-four 320i, and as tempting as it is to spring for the 340i’s 320-hp turbocharged inline-six, that’ll cost you almost 50 large. The humble 320i offers as much driving satisfaction, however, particularly if you opt for the no-cost six-speed manual transmission. Pay the $500 for heated front seats and grab the $3550 Sport Plus Design package (stiffer suspension, sport seats, M Sport steering wheel, and 18-inch wheels with performance tires), too. Congratulations—you’ve bought into the 3-series mystique for less than $40,000 while hewing to its basic fun-to-drive roots.', 'Hot', 2, 2, 120000, 'Black', 'Silver', 'United States', NULL, 'bm-blue.png', '10.jpg', '8.png', '3.jpg', '2.jpg', '4.jpg', 'bmw.jpg', 'bm-blue.png', '6.jpg', '7.png', 'https://www.youtube.com/watch?v=zmXNfXg33Bg', '2018-04-08 20:45:51', '2018-04-08 20:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

DROP TABLE IF EXISTS `conditions`;
CREATE TABLE IF NOT EXISTS `conditions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Brand New', 'Brand New', NULL, NULL),
(2, 'Fairly Used', 'Fairly Used', NULL, NULL),
(3, 'Used', 'Used', NULL, NULL),
(4, 'Fairly Used (Dented)', 'Fairly Used (Dented)', NULL, NULL),
(6, 'Used Dented', 'Used Dented', '2018-04-21 11:01:44', '2018-04-21 11:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'United States', 'United States', NULL, NULL),
(2, 'Japan', '	\r\nJapan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doors`
--

DROP TABLE IF EXISTS `doors`;
CREATE TABLE IF NOT EXISTS `doors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doors`
--

INSERT INTO `doors` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, '2', '2', NULL, NULL),
(2, '4', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drivetrain`
--

DROP TABLE IF EXISTS `drivetrain`;
CREATE TABLE IF NOT EXISTS `drivetrain` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivetrain`
--

INSERT INTO `drivetrain` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'All-wheel-drive (AWD)', 'All-wheel-drive (AWD)', NULL, NULL),
(2, 'Front wheel drive (FWD)', 'Front wheel drive (FWD)', NULL, NULL),
(3, 'Rear wheel drive (RWD)', 'Rear wheel drive (RWD)', NULL, NULL),
(4, 'Four wheel drive(4WD)', 'Four wheel drive(4WD)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `find_car`
--

DROP TABLE IF EXISTS `find_car`;
CREATE TABLE IF NOT EXISTS `find_car` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drivetrain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `find_car`
--

INSERT INTO `find_car` (`id`, `name`, `drivetrain`, `body_style`, `transmission`, `year`, `model`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Blue BMW', '4WD', 'Convertable', 'Manual', '2002', '253i', '0', NULL, '2018-05-31 20:05:25', '2018-05-31 20:05:25'),
(2, 'Blue BMW', '4WD', 'Convertable', 'Manual', '2002', '253i', '0', NULL, '2018-05-31 20:06:14', '2018-05-31 20:06:14'),
(3, 'Blue BMW is here', '4WD', 'Convertable', 'Manual', '2002', '253i', '0', NULL, '2018-05-31 20:12:52', '2018-05-31 20:12:52'),
(4, 'BMW', 'Rear Wheel Drive', 'Convertable', 'Automatic', '2005', '1.4 TFSI® PHEV', '0', 'I am doing it now.', '2018-05-31 20:44:13', '2018-05-31 20:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `fuel-type`
--

DROP TABLE IF EXISTS `fuel-type`;
CREATE TABLE IF NOT EXISTS `fuel-type` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuel-type`
--

INSERT INTO `fuel-type` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'PMS', 'PMS', NULL, NULL),
(2, 'Diesel', 'Diesel', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_30_081650_create_admins_table', 1),
(4, '2018_03_30_213759_create-car-products-table', 2),
(5, '2018_04_06_145430_create-promo-phrase-table', 3),
(6, '2018_04_06_145500_create-status-table', 4),
(7, '2018_04_06_150810_create-status-table', 5),
(8, '2018_04_06_150846_create-promo-phrase-table', 5),
(9, '2018_04_06_154204_create-doors-table', 6),
(10, '2018_04_06_154225_create-transmission-table', 6),
(11, '2018_04_06_154251_create-passengers-table', 6),
(12, '2018_04_07_080825_add-mpg-engine-fuel-type-to-cars', 7),
(13, '2018_04_07_083323_add-image-boot-to-cars', 8),
(14, '2018_04_07_085734_create-year-table', 9),
(15, '2018_04_07_085802_create-fuel-type-table', 9),
(16, '2018_04_07_085829_create-country-table', 9),
(17, '2018_04_08_144254_add-value-to-year-table', 10),
(18, '2018_04_08_144353_add-value-to-transmission-table', 10),
(19, '2018_04_08_144432_add-value-to-fuel-type-table', 10),
(20, '2018_04_08_144536_add-value-to-country-table', 10),
(21, '2018_04_08_144555_add-value-to-status-table', 10),
(22, '2018_04_08_144625_add-value-to-promo-phrase-table', 10),
(23, '2018_04_08_145627_add-value-to-doors-table', 11),
(24, '2018_04_08_145649_add-value-to-passengers-table', 11),
(25, '2018_04_08_193244_create-body-style-table', 12),
(26, '2018_04_08_193305_create-drivetrain-table', 12),
(27, '2018_04_08_200146_create-conditions-table', 13),
(28, '2018_04_08_200207_create-special-offers-table', 13),
(29, '2018_04_27_082615_create-slides-table', 14),
(30, '2018_05_31_205532_find-car-table', 15),
(31, '2018_06_20_143234_order', 16),
(32, '2018_06_23_002250_create_addresses_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `delivered` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

DROP TABLE IF EXISTS `passengers`;
CREATE TABLE IF NOT EXISTS `passengers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL),
(2, '2', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('omescroll@gmail.com', '$2y$10$Wcy375Q9jjLqIupb.KRKR.Hi.Ls.3bY3kduSaG29WeiORUoKPxvhC', '2018-03-30 20:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `promo-phrase`
--

DROP TABLE IF EXISTS `promo-phrase`;
CREATE TABLE IF NOT EXISTS `promo-phrase` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promo-phrase`
--

INSERT INTO `promo-phrase` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Hot', 'Hot', NULL, NULL),
(2, 'Popular', 'Popular\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image_link`, `created_at`, `updated_at`) VALUES
(1, '1524826228.7.png', '2018-04-27 09:50:28', '2018-04-27 09:50:28'),
(2, '1524826324.bm-blue.png', '2018-04-27 09:52:04', '2018-04-27 09:52:04'),
(3, '1524826370_bmw.jpg', '2018-04-27 09:52:50', '2018-04-27 09:52:50'),
(4, '1524828861_10.jpg', '2018-04-27 10:34:21', '2018-04-27 10:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `special-offers`
--

DROP TABLE IF EXISTS `special-offers`;
CREATE TABLE IF NOT EXISTS `special-offers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `special-offers`
--

INSERT INTO `special-offers` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, '5% Discount', '5% Discount', NULL, NULL),
(2, 'Free Shipping', 'Free Shipping', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Available', 'Available', NULL, NULL),
(2, 'Sold', 'Sold', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transmission`
--

DROP TABLE IF EXISTS `transmission`;
CREATE TABLE IF NOT EXISTS `transmission` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transmission`
--

INSERT INTO `transmission` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Automatic', 'Automatic', NULL, NULL),
(2, 'Manual', 'Manual', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_login_at` timestamp NULL DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `current_login_at`, `last_login_at`, `last_login_ip`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ome', 'omescroll@gmail.com', '$2y$10$joZhSQQDYALISP90Q6ia5u5v7LJ1Tn0G9JbS1t.cc5KOCQWgAISDC', '09099686991', NULL, NULL, NULL, 'OSVj1FvI7OYAhFD8hceNYtr9QaRAEgmncrFns7qDfSiiTbpuc0FdWhcKe9ze', '2018-03-30 09:43:06', '2018-03-30 09:43:06'),
(3, 'Ezra', 'ezra@gamil.com', '$2y$10$bsHLfZk570lLAdCBOsL6fug3gXcbct0Xr1ZCcZNI1wL4A8jHg3QwC', '08068705049', NULL, NULL, NULL, 'VWAOyWe2OUVnqRSGnPIpHz061f5iPLk9gvnwwBLs6pEI8c1UnXW8AErGX2Pk', '2018-03-30 09:51:44', '2018-03-30 09:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
CREATE TABLE IF NOT EXISTS `year` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, '1990', '1990', NULL, NULL),
(2, '1991', '1991', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

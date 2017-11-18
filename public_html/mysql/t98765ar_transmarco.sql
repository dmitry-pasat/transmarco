-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2017 at 11:22 PM
-- Server version: 5.5.52-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `t98765ar_transmarco`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `report_flag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=136 ;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `filename`, `name`, `email`, `created_at`, `updated_at`, `report_flag`) VALUES
(131, 'email_111111_2224.csv', 'Aldiasdsn Aldidfan4', '441dfavbaaaldian33@cyansys.com', '2017-10-01 22:15:15', '2017-10-01 22:45:41', 1),
(132, 'email_111111_2225.csv', 'TEst2 TEst2', 'test22@cyansys.com', '2017-10-01 22:15:17', '2017-10-01 22:45:41', 1),
(133, 'email_120017_1835.csv', 'Aldian Aldian', 'aldian@cyansys.com', '2017-10-01 22:15:20', '2017-10-01 22:45:41', 1),
(134, 'email_120017_1835.csv', 'Aldian Aldian1', '1aldian@cyansys.com', '2017-10-01 22:15:20', '2017-10-01 22:45:41', 1),
(135, 'email_120017_1835.csv', 'Aldian Aldian4', '441aldian@cyansys.com', '2017-10-01 22:15:20', '2017-10-01 22:45:41', 1),
(127, 'email_111111_2224.csv', 'Asdldian dfAldian1', '1aldsdfvvbbdian@cyansys.com', '2017-10-01 22:15:14', '2017-10-01 22:45:41', 1),
(128, 'email_111111_2224.csv', 'Aldiasdsn dfAldian4', '441vbdfaaaaldian@cyansys.com', '2017-10-01 22:15:14', '2017-10-01 22:45:41', 1),
(129, 'email_111111_2224.csv', 'Aldisdan Alddfian', 'aldsddvbfivban11@cyansys.com', '2017-10-01 22:15:14', '2017-10-01 22:45:41', 1),
(130, 'email_111111_2224.csv', 'Asdldian Alddfian1', '1alddfsvbdian22@cyansys.com', '2017-10-01 22:15:15', '2017-10-01 22:45:41', 1),
(124, 'email_111111_2223.csv', 'Asdldian Alddfian1', '1alddfsdian22@cyansys.com', '2017-10-01 22:15:13', '2017-10-01 22:45:41', 1),
(126, 'email_111111_2224.csv', 'Aldisdan Aldfdian', 'alddfsdvbvbvbian@cyansys.com', '2017-10-01 22:15:14', '2017-10-01 22:45:41', 1),
(125, 'email_111111_2223.csv', 'Aldiasdsn Aldidfan4', '441dfaaaaldian33@cyansys.com', '2017-10-01 22:15:13', '2017-10-01 22:45:41', 1),
(123, 'email_111111_2223.csv', 'Aldisdan Alddfian', 'aldsddfian11@cyansys.com', '2017-10-01 22:15:13', '2017-10-01 22:45:41', 1),
(122, 'email_111111_2223.csv', 'Aldiasdsn dfAldian4', '441dfaaaaldian@cyansys.com', '2017-10-01 22:15:13', '2017-10-01 22:45:41', 1),
(121, 'email_111111_2223.csv', 'Asdldian dfAldian1', '1aldsdfdian@cyansys.com', '2017-10-01 22:15:12', '2017-10-01 22:45:41', 1),
(120, 'email_111111_2223.csv', 'Aldisdan Aldfdian', 'alddfsdian@cyansys.com', '2017-10-01 22:15:12', '2017-10-01 22:45:41', 1),
(119, 'email_111111_2222.csv', 'Aldiasdsn Aldian4', '441aaaaldian33@cyansys.com', '2017-10-01 22:15:12', '2017-10-01 22:45:41', 1),
(115, 'email_111111_2222.csv', 'Asdldian Aldian1', '1aldsdian@cyansys.com', '2017-10-01 22:15:11', '2017-10-01 22:45:41', 1),
(116, 'email_111111_2222.csv', 'Aldiasdsn Aldian4', '441aaaaldian@cyansys.com', '2017-10-01 22:15:11', '2017-10-01 22:45:41', 1),
(117, 'email_111111_2222.csv', 'Aldisdan Aldian', 'aldsdian11@cyansys.com', '2017-10-01 22:15:12', '2017-10-01 22:45:41', 1),
(118, 'email_111111_2222.csv', 'Asdldian Aldian1', '1aldsdian22@cyansys.com', '2017-10-01 22:15:12', '2017-10-01 22:45:41', 1),
(114, 'email_111111_2222.csv', 'Aldisdan Aldian', 'aldsdian@cyansys.com', '2017-10-01 22:15:11', '2017-10-01 22:45:41', 1),
(113, 'email_111111_2129.csv', 'TEst2 TEst2', 'tes1t22@cyansys.com', '2017-10-01 22:15:09', '2017-10-01 22:45:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_09_28_190754_create_emails_table', 2),
('2017_09_29_142349_create_sms_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vadym.shcherbyna@gmail.com', '6c2d13d97d745c98134f739026b11704d8bb653419e4300b09eed32e6f6abbc7', '2017-09-29 01:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `nick_name` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `report_flag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `filename`, `nick_name`, `full_name`, `mobile`, `dob`, `created_at`, `updated_at`, `report_flag`) VALUES
(1, 'sms_120917_1834.csv', 'Aldian Aldian', 'Aldian Aldian', '12345678', '08/30/67', '2017-09-29 06:37:30', '2017-09-30 03:43:07', 1),
(2, 'sms_121917_1834.csv', 'Aldian Aldian', 'Aldian Aldian', '1234115678', '08/30/67', '2017-09-29 06:38:29', '2017-09-30 03:43:07', 1),
(3, 'sms_121917_1834.csv', 'Aldian Aldian', 'Aldian Aldian', '123451212678', '08/30/67', '2017-09-29 06:38:29', '2017-09-30 03:43:07', 1),
(4, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001784', '1st January 2018', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(5, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001785', '1st January 2019', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(6, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001786', '1st January 2020', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(7, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001787', '1st January 2021', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(8, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001788', '1st January 2022', '2017-09-28 09:49:04', '2017-09-30 03:43:07', 1),
(9, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001789', '1st January 2023', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(10, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001790', '1st January 2024', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(11, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001791', '1st January 2025', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(12, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001792', '1st January 2026', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(13, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001793', '1st January 2027', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(14, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001794', '1st January 2028', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(15, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001795', '1st January 2029', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(16, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001796', '1st January 2030', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(17, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001797', '1st January 2031', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(18, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001798', '1st January 2032', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(19, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001799', '1st January 2033', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(20, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001800', '1st January 2034', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(21, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001801', '1st January 2035', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(22, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001802', '1st January 2036', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(23, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001803', '1st January 2037', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(24, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001804', '1st January 2038', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(25, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001805', '1st January 2039', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(26, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001806', '1st January 2040', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(27, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001807', '1st January 2041', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(28, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001808', '1st January 2042', '2017-09-28 09:49:04', '2017-09-30 03:43:07', 1),
(29, 'sms_170922_1125.csv', 'Ali', 'Waa', '60102001809', '1st January 2043', '2017-09-29 09:49:04', '2017-09-30 03:43:07', 1),
(30, 'sms_111111_2223.csv', 'Aldian Aldsdian', 'Aldian Aldian', '123411115678', '08/30/67', '2017-09-29 20:12:06', '2017-09-30 03:43:07', 1),
(31, 'sms_111111_2223.csv', 'Aldsdian Aldian', 'Aldian Aldian', '12345121211678', '08/30/67', '2017-09-29 20:12:06', '2017-09-30 03:43:07', 1),
(32, 'sms_111111_2224.csv', 'Aldian Aldsdian', 'Aldian Aldian', '33331115678', '08/30/67', '2017-09-29 20:30:12', '2017-09-30 03:43:07', 1),
(33, 'sms_111111_2224.csv', 'Aldsdian Aldian', 'Aldian Aldian', '111121211678', '08/30/67', '2017-09-29 20:30:12', '2017-09-30 03:43:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'charlie123@webqom.com', '$2y$10$2m8S4ulTp6zrK1I26J.3Wu.xh71VZNHk7OP2/mq2Nxp8k5yYkJWUq', 'B0t9ZwR4O4519bCNXXOPIpehbqRBYbLfATzJTWupJ5gT5BazgqjM776tBQfA', '0000-00-00 00:00:00', '2017-10-02 05:12:30'),
(2, 'Admin', 'danny@webqom.com', '$2y$10$2m8S4ulTp6zrK1I26J.3Wu.xh71VZNHk7OP2/mq2Nxp8k5yYkJWUq', 'tg4ZBhBRhNFLpdB6Lcdie8DMMbUboTGd0EGRGR7XZ5yVQv14t38kJ51fiS69', '0000-00-00 00:00:00', '2017-10-02 05:11:15'),
(3, 'Admin', 'tay.hoonhong@transmarco.asia', '$2y$10$2m8S4ulTp6zrK1I26J.3Wu.xh71VZNHk7OP2/mq2Nxp8k5yYkJWUq', 'mqn1PMyjlbbLmkQ5Gli04t6MSxMsb2lmOUk43Hj0DFmPbCYhOslINqWHCICw', '0000-00-00 00:00:00', '2017-10-02 05:47:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

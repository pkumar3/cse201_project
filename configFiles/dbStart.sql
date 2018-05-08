-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2018 at 11:34 PM
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
-- Database: `laravellogin`
--
CREATE DATABASE IF NOT EXISTS `laravellogin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravellogin`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(50) NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

DROP TABLE IF EXISTS `pic`;
CREATE TABLE IF NOT EXISTS `pic` (
  `picID` int(11) NOT NULL AUTO_INCREMENT,
  `picUrl` varchar(50) NOT NULL,
  `picUploadDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`picID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postpic`
--

DROP TABLE IF EXISTS `postpic`;
CREATE TABLE IF NOT EXISTS `postpic` (
  `postID` int(11) NOT NULL,
  `picID` int(11) NOT NULL,
  PRIMARY KEY (`postID`,`picID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(50) NOT NULL,
  `postDesc` varchar(2000) DEFAULT NULL,
  `userID` int(11) NOT NULL DEFAULT '1',
  `catID` int(11) DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `postQty` int(11) NOT NULL DEFAULT '1',
  `postPrice` int(11) NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `postTitle`, `postDesc`, `userID`, `catID`, `creationDate`, `postQty`, `postPrice`) VALUES
(2, 'Chair', 'Looking for an old wooden chair ', 2, NULL, '2018-05-06 20:57:50', 1, 0),
(3, 'This is a test', NULL, 1, NULL, '2018-05-08 14:20:53', 4, 4),
(4, 'tes', NULL, 1, NULL, '2018-05-08 14:25:33', 2, 4),
(5, 'tes', NULL, 1, NULL, '2018-05-08 14:26:13', 2, 4),
(6, 'item', NULL, 3, NULL, '2018-05-08 14:57:45', 4, 66),
(7, 'Hat', NULL, 3, NULL, '2018-05-08 17:32:46', 2, 5),
(8, 'Hat', NULL, 3, NULL, '2018-05-08 17:41:29', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adam', NULL, 'Ght@tght.cn', '$2y$10$nf75wlg1E11OWiQitfh4zOXq/vL.jeVw2kOqldkLCrq5BanH0XV.C', 'BNOnEfqYv8yRkSQZFFdCV8yvj66ddf8oVIv0hq5vccaCExscWY5a5h8ps4j5', '2018-04-03 17:57:59', '2018-04-03 17:57:59'),
(2, 'This', NULL, 'rst@gh.com', '$2y$10$x05F1yVrj/CWEVJZqiFePO2ySTmN5Ufsy3Z97ur5ehzdz5f5ZlrFu', 'jrmy7YyqA9Wrte21PP9aFDENarkXdRlbgBqjBUhhOjYheCoBpIzRdlhO8a72', '2018-04-03 18:05:27', '2018-04-03 18:05:27'),
(3, 'Adam Joyner', NULL, 'joynerar@miamioh.edu', '$2y$10$pIfC3/Wxs2xyWAlkZAo.duyNlS.l4CZi5Orere0LHsdv8NaYiV.Vi', 'sW0IpYiIEHhSZfwJhR8VCgSJ9QN3XJWuuiuVCmD27oBwBpVkmEiZPn3cZHjP', '2018-04-03 18:31:40', '2018-04-03 18:31:40'),
(4, 'myaasdn', NULL, 'night@asd.com', '$2y$10$aQMZgqatbbMAkohn.P6dJOat6aZ2x0RT/XQtqM0DleNwc23s0tkMe', 'DotKp4QAgk6zXFdiIBzaLQO44N6wQWcrTvtmvqW2hfcGnS2Fz2AtGxREcynt', '2018-04-26 20:49:03', '2018-04-26 20:49:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

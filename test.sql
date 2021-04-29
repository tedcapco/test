-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 07:33 AM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `thread_id`, `comment`, `created`) VALUES
(1, 1, 'comment 1', '2016-10-26 01:00:00'),
(2, 1, 'comment 2', '2016-10-26 00:00:23'),
(3, 1, 'comment 3', '2016-10-26 00:00:02'),
(4, 1, 'comment 4', '2016-10-26 00:14:04'),
(5, 1, 'comment 5', '2016-10-26 00:00:00'),
(6, 1, 'comment 6', '2016-10-26 00:00:12'),
(7, 1, 'comment 7', '2016-10-26 00:12:00'),
(8, 1, 'comment 8', '2016-10-26 00:10:00'),
(9, 1, 'comment 9', '2016-10-26 00:09:00'),
(10, 1, 'comment 10', '2016-10-26 00:00:23'),
(11, 1, 'comment 11', '2016-10-26 00:00:11'),
(12, 2, 'comment 1', '2016-10-26 01:00:00'),
(13, 2, 'comment 2', '2016-10-26 13:00:23'),
(14, 2, 'comment 3', '2016-10-26 13:00:02'),
(15, 2, 'comment 4', '2016-10-26 11:14:04'),
(16, 2, 'comment 5', '2016-10-26 21:00:00'),
(17, 2, 'comment 6', '2016-10-26 00:00:12'),
(18, 2, 'comment 7', '2016-10-26 12:12:00'),
(19, 2, 'comment 8', '2016-10-26 10:10:00'),
(20, 2, 'comment 9', '2016-10-26 12:09:00'),
(21, 2, 'comment 10', '2016-10-26 13:00:23'),
(22, 2, 'comment 11', '2016-10-26 00:00:11'),
(23, 3, 'comment 1', '2016-10-26 01:00:00'),
(24, 3, 'comment 2', '2016-10-26 13:00:23'),
(25, 3, 'comment 3', '2016-10-26 13:00:02'),
(26, 3, 'comment 4', '2016-10-26 11:14:04'),
(27, 3, 'comment 5', '2016-10-26 21:00:00'),
(28, 3, 'comment 6', '2016-10-26 00:00:12'),
(29, 3, 'comment 7', '2016-10-26 12:12:00'),
(30, 3, 'comment 8', '2016-10-26 10:10:00'),
(31, 3, 'comment 9', '2016-10-26 12:09:00'),
(32, 3, 'comment 10', '2016-10-26 13:00:23'),
(33, 3, 'comment 11', '2016-10-26 00:00:11'),
(34, 4, 'comment 1', '2016-10-26 01:00:00'),
(35, 4, 'comment 2', '2016-10-26 13:00:23'),
(36, 4, 'comment 3', '2016-10-26 13:00:02'),
(37, 4, 'comment 4', '2016-10-26 11:14:04'),
(38, 4, 'comment 5', '2016-10-26 21:00:00'),
(39, 4, 'comment 6', '2016-10-26 00:00:12'),
(40, 4, 'comment 7', '2016-10-26 12:12:00'),
(41, 4, 'comment 8', '2016-10-26 10:10:00'),
(42, 4, 'comment 9', '2016-10-26 12:09:00'),
(43, 4, 'comment 10', '2016-10-26 13:00:23'),
(44, 4, 'comment 11', '2016-10-26 00:00:11'),
(49, 1, 'ooo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

DROP TABLE IF EXISTS `thread`;
CREATE TABLE IF NOT EXISTS `thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `title`, `created`) VALUES
(2, 'facebook', '2017-10-26 11:45:35'),
(7, 'friendster', '2014-10-26 11:45:35'),
(1, 'multiply', '2015-10-26 11:45:35'),
(5, 'twitter', '2016-10-26 11:45:35'),
(12, '@!@#$', '2016-10-26 14:15:28'),
(11, 'new title ', '2016-10-26 14:11:52');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

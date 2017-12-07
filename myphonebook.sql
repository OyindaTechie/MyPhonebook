-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2017 at 02:07 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myphonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `addphonenumbers`
--

CREATE TABLE IF NOT EXISTS `addphonenumbers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `addphonenumbers`
--

INSERT INTO `addphonenumbers` (`id`, `firstname`, `lastname`, `phonenumber`, `user`, `created_at`, `updated_at`) VALUES
(1, 'Dara', 'adevan', '1234567', 'a', NULL, NULL),
(3, 'ola', 'goke', '789', 'oyinda', '2017-10-12 14:44:09', '2017-10-12 14:44:09'),
(4, 'Eze', 'Uhiara', '8162773741', 'oyinda', '2017-10-13 07:16:57', '2017-10-13 07:16:57'),
(5, 'omotola', 'musiliu', '8106787787', 'a', '2017-10-15 10:01:30', '2017-10-15 10:01:30'),
(6, 'Yinka', 'Sulola', '90888888888', 'oyinda', '2017-10-15 10:16:10', '2017-10-15 10:16:10'),
(7, 'g', 'g', '456', NULL, '2017-10-15 10:41:53', '2017-10-15 10:41:53'),
(8, 'Tolulope', 'Bankole', '8', 'a', NULL, NULL),
(10, 'Adesola', 'Adeniyi', '908767765', 'a', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_09_174301_Register', 1),
(4, '2017_10_12_130601_Phonenumberdetails', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE IF NOT EXISTS `registers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `firstname`, `lastname`, `username`, `password`, `phonenumber`, `created_at`, `updated_at`) VALUES
(1, 'a', 'adevan', 'a', 'a', '667', NULL, NULL),
(2, 'b', 'b', 'n', 'n', '89', '2017-10-10 16:30:38', '2017-10-10 16:30:38'),
(3, 'b', 'b', 'b', 'b', '090897676556', '2017-10-11 09:39:02', '2017-10-11 09:39:02'),
(4, 'oyindamola', 'Musiliu', 'oyinda', 'billgate', '090897676556', '2017-10-12 12:16:52', '2017-10-12 12:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'OYINDAMOLA', 'oyindamola.omotola@yahoo.com', '$2y$10$cCOgooYGnmBRDjb06h6UPe28iyC5YDemojwm7.g40VwDH.Ydz8IWC', NULL, '2017-10-12 11:55:28', '2017-10-12 11:55:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

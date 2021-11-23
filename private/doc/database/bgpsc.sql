-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2016 at 02:17 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bgpsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_info`
--

CREATE TABLE IF NOT EXISTS `access_info` (
  `user_id` int(10) unsigned NOT NULL,
  `login_period` datetime NOT NULL,
  `logout_period` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `access_info`
--

INSERT INTO `access_info` (`user_id`, `login_period`, `logout_period`) VALUES
(4, '2016-06-09 09:26:55', '2016-06-09 10:51:03'),
(4, '2016-07-03 09:43:18', '0000-00-00 00:00:00'),
(4, '2016-07-03 10:32:28', '0000-00-00 00:00:00'),
(4, '2016-07-03 10:58:21', '0000-00-00 00:00:00'),
(4, '2016-07-03 11:47:57', '0000-00-00 00:00:00'),
(4, '2016-07-03 12:05:33', '0000-00-00 00:00:00'),
(4, '2016-07-03 12:09:07', '0000-00-00 00:00:00'),
(4, '2016-07-03 12:53:58', '0000-00-00 00:00:00'),
(4, '2016-07-11 09:50:53', '0000-00-00 00:00:00'),
(4, '2016-07-11 10:36:57', '0000-00-00 00:00:00'),
(4, '2016-07-11 10:41:12', '2016-07-11 12:34:56'),
(4, '2016-07-11 12:35:10', '0000-00-00 00:00:00'),
(4, '2016-07-11 15:02:51', '0000-00-00 00:00:00'),
(4, '2016-07-12 09:25:58', '2016-07-12 12:25:15'),
(4, '2016-07-12 12:25:22', '0000-00-00 00:00:00'),
(4, '2016-07-12 15:24:02', '0000-00-00 00:00:00'),
(4, '2016-07-13 09:14:57', '0000-00-00 00:00:00'),
(4, '2016-07-13 13:30:16', '2016-07-13 13:32:50'),
(4, '2016-07-13 13:34:09', '0000-00-00 00:00:00'),
(4, '2016-07-14 09:06:42', '0000-00-00 00:00:00'),
(4, '2016-07-14 12:38:31', '0000-00-00 00:00:00'),
(4, '2016-07-14 13:12:06', '0000-00-00 00:00:00'),
(4, '2016-07-14 14:44:46', '0000-00-00 00:00:00'),
(4, '2016-07-14 15:11:11', '0000-00-00 00:00:00'),
(4, '2016-07-14 15:25:26', '0000-00-00 00:00:00'),
(4, '2016-07-14 15:50:10', '0000-00-00 00:00:00'),
(4, '2016-07-14 16:55:56', '0000-00-00 00:00:00'),
(4, '2016-07-14 17:05:59', '0000-00-00 00:00:00'),
(4, '2016-07-16 09:42:06', '0000-00-00 00:00:00'),
(4, '2016-07-16 11:15:49', '2016-07-16 11:32:31'),
(4, '2016-07-16 11:33:32', '2016-07-16 11:51:58'),
(4, '2016-07-16 11:36:52', '0000-00-00 00:00:00'),
(4, '2016-07-16 12:43:15', '0000-00-00 00:00:00'),
(4, '2016-07-16 13:01:49', '0000-00-00 00:00:00'),
(4, '2016-07-16 13:22:24', '0000-00-00 00:00:00'),
(4, '2016-07-16 17:51:04', '2016-07-16 17:51:25'),
(4, '2016-07-16 17:51:40', '2016-07-16 17:58:32'),
(4, '2016-07-16 17:53:21', '0000-00-00 00:00:00'),
(4, '2016-07-17 09:18:30', '0000-00-00 00:00:00'),
(4, '2016-07-17 09:28:25', '0000-00-00 00:00:00'),
(4, '2016-07-17 10:21:45', '0000-00-00 00:00:00'),
(4, '2016-07-17 12:25:54', '0000-00-00 00:00:00'),
(4, '2016-07-17 12:32:57', '0000-00-00 00:00:00'),
(4, '2016-07-17 13:26:09', '0000-00-00 00:00:00'),
(4, '2016-07-17 15:35:00', '0000-00-00 00:00:00'),
(4, '2016-07-17 16:04:35', '0000-00-00 00:00:00'),
(4, '2016-07-17 17:59:20', '0000-00-00 00:00:00'),
(4, '2016-07-17 18:18:56', '0000-00-00 00:00:00'),
(4, '2016-07-18 09:30:16', '0000-00-00 00:00:00'),
(4, '2016-07-18 10:38:44', '2016-07-18 10:40:34'),
(4, '2016-07-18 13:20:35', '0000-00-00 00:00:00'),
(4, '2016-07-18 14:24:12', '2016-07-18 15:10:03'),
(4, '2016-07-18 15:21:09', '0000-00-00 00:00:00'),
(4, '2016-07-18 15:24:41', '0000-00-00 00:00:00'),
(4, '2016-07-18 15:39:41', '2016-07-18 17:24:43'),
(4, '2016-07-18 15:42:51', '0000-00-00 00:00:00'),
(4, '2016-07-18 16:51:04', '0000-00-00 00:00:00'),
(4, '2016-07-19 09:25:12', '0000-00-00 00:00:00'),
(4, '2016-07-19 09:30:33', '0000-00-00 00:00:00'),
(4, '2016-07-19 09:34:23', '0000-00-00 00:00:00'),
(4, '2016-07-19 11:24:14', '0000-00-00 00:00:00'),
(4, '2016-07-19 12:44:29', '0000-00-00 00:00:00'),
(7, '2016-07-19 14:12:26', '0000-00-00 00:00:00'),
(4, '2016-07-19 16:16:42', '0000-00-00 00:00:00'),
(4, '2016-07-19 17:07:47', '0000-00-00 00:00:00'),
(9, '2016-07-20 09:23:51', '0000-00-00 00:00:00'),
(9, '2016-07-20 09:24:13', '0000-00-00 00:00:00'),
(9, '2016-07-20 09:25:11', '2016-07-20 11:11:34'),
(14, '2016-07-20 09:48:29', '0000-00-00 00:00:00'),
(14, '2016-07-20 11:35:35', '0000-00-00 00:00:00'),
(14, '2016-07-20 12:15:13', '0000-00-00 00:00:00'),
(14, '2016-07-20 14:45:05', '0000-00-00 00:00:00'),
(14, '2016-07-20 15:51:21', '0000-00-00 00:00:00'),
(14, '2017-07-01 16:54:31', '0000-00-00 00:00:00'),
(14, '2017-07-01 16:59:25', '0000-00-00 00:00:00'),
(14, '2016-07-14 09:27:00', '0000-00-00 00:00:00'),
(14, '2016-07-14 09:56:09', '0000-00-00 00:00:00'),
(14, '2016-07-14 10:14:35', '0000-00-00 00:00:00'),
(14, '2016-07-14 10:16:39', '0000-00-00 00:00:00'),
(14, '2016-07-14 13:35:43', '0000-00-00 00:00:00'),
(14, '2016-07-14 15:01:07', '0000-00-00 00:00:00'),
(14, '2016-07-14 15:09:30', '0000-00-00 00:00:00'),
(14, '2016-07-14 17:40:25', '0000-00-00 00:00:00'),
(14, '2016-07-14 17:59:20', '0000-00-00 00:00:00'),
(14, '2016-07-16 09:15:49', '2016-07-16 16:55:40'),
(14, '2016-07-16 09:22:22', '0000-00-00 00:00:00'),
(14, '2016-07-16 12:18:52', '0000-00-00 00:00:00'),
(14, '2016-07-16 12:31:33', '0000-00-00 00:00:00'),
(14, '2016-07-16 15:52:24', '2016-07-16 15:56:38'),
(14, '2016-07-16 15:56:50', '0000-00-00 00:00:00'),
(14, '2016-07-16 15:57:01', '0000-00-00 00:00:00'),
(14, '2016-07-16 17:01:49', '2016-07-16 17:03:00'),
(14, '2016-07-17 09:11:58', '2016-07-17 10:34:01'),
(14, '2016-07-17 10:38:37', '2016-07-17 10:38:43'),
(14, '2016-07-17 10:39:56', '2016-07-17 10:40:00'),
(14, '2016-07-17 10:40:11', '0000-00-00 00:00:00'),
(14, '2016-07-17 10:46:55', '2016-07-17 10:47:02'),
(14, '2016-07-17 10:47:31', '2016-07-17 10:47:41'),
(14, '2016-07-17 11:06:20', '2016-07-17 11:30:36'),
(14, '2016-07-17 11:06:49', '2016-07-17 11:18:51'),
(14, '2016-07-17 11:33:20', '0000-00-00 00:00:00'),
(14, '2016-07-17 11:51:41', '2016-07-17 12:01:09'),
(14, '2016-07-17 12:00:58', '0000-00-00 00:00:00'),
(14, '2016-07-17 12:15:02', '0000-00-00 00:00:00'),
(14, '2016-07-17 13:16:02', '0000-00-00 00:00:00'),
(14, '2016-07-17 16:17:25', '0000-00-00 00:00:00'),
(14, '2016-07-17 17:09:00', '0000-00-00 00:00:00'),
(14, '2016-07-18 09:29:48', '0000-00-00 00:00:00'),
(14, '2016-07-18 09:44:59', '0000-00-00 00:00:00'),
(14, '2016-07-25 10:33:57', '2016-07-25 11:22:42'),
(14, '2016-07-25 10:47:25', '0000-00-00 00:00:00'),
(14, '2016-07-25 11:09:25', '0000-00-00 00:00:00'),
(14, '2016-07-25 12:17:26', '2016-07-25 12:17:38'),
(14, '2016-07-25 14:47:42', '0000-00-00 00:00:00'),
(14, '2016-07-25 16:57:50', '0000-00-00 00:00:00'),
(14, '2016-07-25 17:06:59', '0000-00-00 00:00:00'),
(14, '2016-07-25 17:45:53', '2016-07-25 17:56:22'),
(14, '2016-07-25 18:26:28', '0000-00-00 00:00:00'),
(14, '2016-07-26 09:18:49', '0000-00-00 00:00:00'),
(14, '2016-07-26 09:34:20', '0000-00-00 00:00:00'),
(14, '2016-07-26 10:02:43', '2016-07-26 10:24:14'),
(14, '2016-07-26 10:24:28', '0000-00-00 00:00:00'),
(14, '2016-07-26 10:46:12', '0000-00-00 00:00:00'),
(14, '2016-07-26 10:48:51', '0000-00-00 00:00:00'),
(14, '2016-07-26 12:43:06', '0000-00-00 00:00:00'),
(14, '2016-07-26 13:12:05', '0000-00-00 00:00:00'),
(14, '2016-07-26 13:20:10', '0000-00-00 00:00:00'),
(14, '2016-07-26 16:24:10', '2016-07-26 16:34:22'),
(14, '2016-07-26 17:18:03', '0000-00-00 00:00:00'),
(14, '2016-07-27 09:30:24', '2016-07-27 10:29:38'),
(14, '2016-07-27 11:14:01', '2016-07-27 12:24:38'),
(14, '2016-07-27 12:32:17', '0000-00-00 00:00:00'),
(14, '2016-07-27 15:21:05', '0000-00-00 00:00:00'),
(14, '2016-07-28 09:22:47', '0000-00-00 00:00:00'),
(14, '2016-07-28 09:41:11', '0000-00-00 00:00:00'),
(14, '2016-07-28 15:16:38', '0000-00-00 00:00:00'),
(14, '2016-07-28 17:55:07', '0000-00-00 00:00:00'),
(14, '2016-07-30 09:54:17', '0000-00-00 00:00:00'),
(14, '2016-07-30 10:34:41', '0000-00-00 00:00:00'),
(14, '2016-07-30 10:49:19', '0000-00-00 00:00:00'),
(14, '2016-07-30 11:09:21', '0000-00-00 00:00:00'),
(14, '2016-07-30 12:02:42', '0000-00-00 00:00:00'),
(14, '2016-07-30 13:50:07', '0000-00-00 00:00:00'),
(14, '2016-07-31 09:17:22', '0000-00-00 00:00:00'),
(14, '2016-07-31 10:36:49', '0000-00-00 00:00:00'),
(14, '2016-07-31 10:41:53', '0000-00-00 00:00:00'),
(14, '2016-07-31 11:39:43', '2016-07-31 11:41:13'),
(14, '2016-07-31 12:57:34', '0000-00-00 00:00:00'),
(14, '2016-07-31 15:13:12', '2016-07-31 16:13:45'),
(14, '2016-07-31 15:25:18', '0000-00-00 00:00:00'),
(14, '2016-07-31 19:48:55', '0000-00-00 00:00:00'),
(14, '2016-08-01 09:43:32', '0000-00-00 00:00:00'),
(14, '2016-08-01 09:44:07', '0000-00-00 00:00:00'),
(14, '2016-08-01 09:50:40', '0000-00-00 00:00:00'),
(14, '2016-08-01 10:07:37', '0000-00-00 00:00:00'),
(14, '2016-08-01 10:25:20', '2016-08-01 12:42:39'),
(14, '2016-08-01 10:55:27', '0000-00-00 00:00:00'),
(14, '2016-08-01 12:42:46', '0000-00-00 00:00:00'),
(14, '2016-08-01 13:07:21', '2016-08-01 13:22:47'),
(14, '2016-08-01 13:36:15', '0000-00-00 00:00:00'),
(14, '2016-08-01 15:14:23', '0000-00-00 00:00:00'),
(14, '2016-08-01 16:35:03', '0000-00-00 00:00:00'),
(14, '2016-08-01 23:41:46', '0000-00-00 00:00:00'),
(14, '2016-08-02 09:02:19', '2016-08-02 10:29:02'),
(14, '2016-08-02 09:14:23', '2016-08-02 10:39:47'),
(14, '2016-08-02 09:20:13', '0000-00-00 00:00:00'),
(14, '2016-08-02 09:21:17', '2016-08-02 10:07:12'),
(14, '2016-08-02 10:09:41', '2016-08-02 10:10:20'),
(18, '2016-08-02 10:21:48', '2016-08-02 10:24:48'),
(18, '2016-08-02 10:25:11', '2016-08-02 10:26:45'),
(18, '2016-08-02 10:27:41', '2016-08-02 10:27:45'),
(18, '2016-08-02 10:28:50', '2016-08-02 10:38:45'),
(14, '2016-08-02 10:35:25', '2016-08-02 10:41:31'),
(18, '2016-08-02 10:39:13', '0000-00-00 00:00:00'),
(14, '2016-08-02 10:39:51', '0000-00-00 00:00:00'),
(18, '2016-08-02 10:41:37', '2016-08-02 11:25:53'),
(14, '2016-08-02 11:14:48', '0000-00-00 00:00:00'),
(14, '2016-08-02 11:26:05', '2016-08-02 12:10:53'),
(18, '2016-08-02 12:11:11', '2016-08-02 12:41:47'),
(14, '2016-08-02 12:42:09', '0000-00-00 00:00:00'),
(14, '2016-08-02 14:47:17', '2016-08-02 14:48:39'),
(18, '2016-08-02 14:48:58', '0000-00-00 00:00:00'),
(14, '2016-08-02 16:24:53', '0000-00-00 00:00:00'),
(14, '2016-08-02 16:46:54', '0000-00-00 00:00:00'),
(18, '2016-08-02 17:49:00', '0000-00-00 00:00:00'),
(14, '2016-08-03 09:28:13', '0000-00-00 00:00:00'),
(14, '2016-08-03 09:30:06', '2016-08-03 09:30:19'),
(14, '2016-08-03 09:31:30', '0000-00-00 00:00:00'),
(14, '2016-08-03 11:30:25', '2016-08-03 15:22:34'),
(14, '2016-08-03 11:46:19', '2016-08-03 14:03:27'),
(14, '2016-08-03 14:04:57', '2016-08-03 14:05:08'),
(19, '2016-08-03 14:05:20', '0000-00-00 00:00:00'),
(14, '2016-08-03 15:18:48', '0000-00-00 00:00:00'),
(19, '2016-08-03 15:22:44', '0000-00-00 00:00:00'),
(14, '2016-08-04 09:36:53', '0000-00-00 00:00:00'),
(14, '2016-08-04 12:17:00', '0000-00-00 00:00:00'),
(14, '2016-08-04 15:40:24', '0000-00-00 00:00:00'),
(14, '2016-08-04 16:46:04', '0000-00-00 00:00:00'),
(14, '2016-08-06 09:30:59', '0000-00-00 00:00:00'),
(14, '2016-08-06 09:41:30', '0000-00-00 00:00:00'),
(14, '2016-08-06 10:05:06', '0000-00-00 00:00:00'),
(14, '2016-08-06 10:49:14', '0000-00-00 00:00:00'),
(14, '2016-08-07 15:41:23', '0000-00-00 00:00:00'),
(14, '2016-08-07 16:40:50', '2016-08-07 16:46:30'),
(22, '2016-08-07 16:46:41', '2016-08-07 16:58:30'),
(14, '2016-08-07 16:58:34', '2016-08-07 16:59:08'),
(21, '2016-08-07 16:59:12', '2016-08-07 16:59:29'),
(14, '2016-08-07 16:59:36', '0000-00-00 00:00:00'),
(14, '2016-08-08 10:51:40', '0000-00-00 00:00:00'),
(14, '2016-08-08 11:16:01', '0000-00-00 00:00:00'),
(14, '2016-08-08 14:51:32', '2016-08-08 14:51:46'),
(14, '2016-08-08 14:52:02', '2016-08-08 14:52:57'),
(22, '2016-08-08 14:53:10', '2016-08-08 15:09:53'),
(14, '2016-08-08 15:13:37', '0000-00-00 00:00:00'),
(14, '2016-08-08 15:40:15', '0000-00-00 00:00:00'),
(14, '2016-08-08 15:50:00', '0000-00-00 00:00:00'),
(14, '2016-08-08 17:59:05', '0000-00-00 00:00:00'),
(14, '2016-08-09 09:22:28', '0000-00-00 00:00:00'),
(14, '2016-08-09 09:43:15', '2016-08-09 09:54:01'),
(22, '2016-08-09 09:49:50', '0000-00-00 00:00:00'),
(22, '2016-08-09 09:54:11', '0000-00-00 00:00:00'),
(22, '2016-08-09 10:19:21', '0000-00-00 00:00:00'),
(14, '2016-08-09 12:59:30', '0000-00-00 00:00:00'),
(14, '2016-08-09 13:00:09', '0000-00-00 00:00:00'),
(14, '2016-08-09 15:27:38', '0000-00-00 00:00:00'),
(14, '2016-08-09 15:50:28', '0000-00-00 00:00:00'),
(14, '2016-08-10 09:34:06', '0000-00-00 00:00:00'),
(14, '2016-08-10 09:34:20', '2016-08-10 10:05:22'),
(14, '2016-08-10 10:27:50', '0000-00-00 00:00:00'),
(14, '2016-08-10 12:28:27', '2016-08-10 12:31:56'),
(21, '2016-08-10 14:27:24', '2016-08-10 14:28:25'),
(21, '2016-08-10 14:44:40', '2016-08-10 14:57:43'),
(21, '2016-08-10 18:46:22', '2016-08-10 18:46:30'),
(21, '2016-08-10 18:46:40', '2016-08-10 18:48:33'),
(21, '2016-08-10 18:48:41', '2016-08-10 18:53:48'),
(22, '2016-08-14 14:14:48', '2016-08-14 14:14:54'),
(22, '2016-08-14 14:14:48', '2016-08-14 14:14:54'),
(22, '2016-08-14 14:14:54', '2016-08-14 14:15:01'),
(22, '2016-08-14 14:15:01', '2016-08-14 14:57:25'),
(22, '2016-08-14 14:57:25', '2016-08-14 14:57:30'),
(22, '2016-08-14 14:57:30', '2016-08-14 14:58:10'),
(22, '2016-08-14 14:58:10', '0000-00-00 00:00:00'),
(22, '2016-08-14 14:58:44', '2016-08-14 14:59:26'),
(22, '2016-08-14 14:59:26', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:05:24', '2016-08-14 15:05:37'),
(22, '2016-08-14 15:05:59', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:05:59', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:06:37', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:08:14', '2016-08-14 15:13:51'),
(22, '2016-08-14 15:08:14', '2016-08-14 15:13:51'),
(22, '2016-08-14 15:15:44', '2016-08-14 15:15:49'),
(22, '2016-08-14 15:15:49', '2016-08-14 15:16:17'),
(22, '2016-08-14 15:16:17', '2016-08-14 15:17:05'),
(22, '2016-08-14 15:17:05', '2016-08-14 15:17:40'),
(22, '2016-08-14 15:17:40', '2016-08-14 15:19:07'),
(22, '2016-08-14 15:19:08', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:19:52', '2016-08-14 15:20:06'),
(22, '2016-08-14 15:20:21', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:20:22', '2016-08-14 15:20:27'),
(22, '2016-08-14 15:20:27', '2016-08-14 15:25:27'),
(22, '2016-08-14 15:25:27', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:28:30', '2016-08-14 15:30:28'),
(22, '2016-08-14 15:30:28', '2016-08-14 15:32:56'),
(22, '2016-08-14 15:34:44', '2016-08-14 15:35:28'),
(22, '2016-08-14 15:35:38', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:35:38', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:36:09', '2016-08-14 15:36:24'),
(22, '2016-08-14 15:36:50', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:37:55', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:37:55', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:38:11', '2016-08-14 15:38:24'),
(22, '2016-08-14 15:41:22', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:41:23', '0000-00-00 00:00:00'),
(22, '2016-08-14 15:41:47', '2016-08-14 15:52:40'),
(22, '2016-08-14 16:04:15', '2016-08-14 16:04:23'),
(22, '2016-08-14 16:04:37', '0000-00-00 00:00:00'),
(22, '2016-08-14 16:04:37', '0000-00-00 00:00:00'),
(22, '2016-08-14 16:05:03', '2016-08-14 16:08:29'),
(22, '2016-08-14 16:11:17', '0000-00-00 00:00:00'),
(22, '2016-08-14 16:15:55', '0000-00-00 00:00:00'),
(22, '2016-08-14 16:15:56', '2016-08-14 16:16:06'),
(22, '2016-08-14 16:18:44', '2016-08-14 16:18:48'),
(22, '2016-08-14 16:18:44', '2016-08-14 16:18:48'),
(22, '2016-08-14 16:20:46', '0000-00-00 00:00:00'),
(22, '2016-08-14 16:21:46', '0000-00-00 00:00:00'),
(22, '2016-08-14 16:21:46', '0000-00-00 00:00:00'),
(22, '2016-08-14 16:22:02', '2016-08-14 17:22:00'),
(22, '2016-08-14 16:48:23', '2016-08-14 16:50:42'),
(22, '2016-08-14 17:22:32', '0000-00-00 00:00:00'),
(22, '2016-08-14 17:22:32', '0000-00-00 00:00:00'),
(22, '2016-08-14 17:22:53', '0000-00-00 00:00:00'),
(22, '2016-08-16 12:29:33', '0000-00-00 00:00:00'),
(22, '2016-08-16 12:29:33', '0000-00-00 00:00:00'),
(24, '2016-08-16 15:19:36', '2016-08-16 15:19:45'),
(24, '2016-08-16 18:31:56', '2016-08-16 18:32:16'),
(24, '2016-08-16 18:33:10', '2016-08-16 18:33:14'),
(25, '2016-08-16 18:37:14', '0000-00-00 00:00:00'),
(25, '2016-08-17 09:52:15', '2016-08-17 09:56:51'),
(25, '2016-08-17 09:59:06', '2016-08-17 10:00:31'),
(25, '2016-08-17 10:00:59', '2016-08-17 10:03:16'),
(25, '2016-08-17 10:04:32', '2016-08-17 10:05:10'),
(25, '2016-08-17 10:05:14', '2016-08-17 10:08:29'),
(25, '2016-08-17 10:08:32', '2016-08-17 10:12:33'),
(25, '2016-08-17 10:12:36', '2016-08-17 10:12:49'),
(25, '2016-08-17 10:14:26', '2016-08-17 10:14:39'),
(25, '2016-08-17 10:16:32', '2016-08-17 10:17:10'),
(25, '2016-08-17 10:17:14', '0000-00-00 00:00:00'),
(25, '2016-08-17 10:18:41', '0000-00-00 00:00:00'),
(25, '2016-08-17 10:23:44', '2016-08-17 10:26:04'),
(25, '2016-08-17 10:26:27', '2016-08-17 10:29:53'),
(25, '2016-08-17 10:29:55', '2016-08-17 10:38:55'),
(25, '2016-08-17 10:38:58', '2016-08-17 10:42:18'),
(25, '2016-08-17 10:42:22', '0000-00-00 00:00:00'),
(25, '2016-08-17 10:59:04', '2016-08-17 12:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `opening_date` date NOT NULL,
  `memberId` varchar(50) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `account_team` varchar(100) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `duration` varchar(3) NOT NULL,
  `installment_terms` int(3) NOT NULL,
  `installment_amount` decimal(10,2) NOT NULL,
  `closing_date` date NOT NULL,
  `interest` decimal(10,2) NOT NULL,
  `real_interest` decimal(10,2) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `opening_date`, `memberId`, `branch`, `account_team`, `account_type`, `account_number`, `duration`, `installment_terms`, `installment_amount`, `closing_date`, `interest`, `real_interest`, `details`, `status`) VALUES
(15, '2016-06-07', 'PR116JOB0001', 'PR1', 'JOB', 'GSW', 'PR116JOB0001GSW', '5', 240, '100.00', '2021-05-07', '2160.00', '26160.00', '[{"photo":"public/nominee/PR116JOB0001GSW-nom-1.jpg","name":"Sagor","guardian":"Joymongal","relation":"father","age":"18","percentage":"40"},{"photo":"public/nominee/PR116JOB0001GSW-nom-2.png","name":"Robin","guardian":"Bakul","relation":"mother","age":"25","percentage":"60"}]', 'yes'),
(16, '2016-06-07', 'PR116JOB0001', 'PR1', 'JOB', 'TMS', 'PR116JOB0001TMS', '3', 36, '500.00', '2019-05-07', '1620.00', '19620.00', '[{"photo":"public/nominee/PR116JOB0001TMS-nom-1.png","name":"Sagor","guardian":"Joymongal","relation":"father","age":"18","percentage":"100"},{"photo":"public/nominee/default-face.png","name":"","guardian":"","relation":"","age":"","percentage":""}]', 'yes'),
(17, '2016-06-09', 'PR116JOB0010', 'PR1', 'JOB', 'TMS', 'PR116JOB0010TMS', '3', 36, '1500.00', '2019-05-09', '4860.00', '58860.00', '[{"photo":"public/nominee/PR116JOB0010TMS-nom-1.jpg","name":"Unknown","guardian":"Unknown","relation":"brother","age":"19","percentage":"100"},{"photo":"public/nominee/default-face.png","name":"","guardian":"","relation":"","age":"","percentage":""}]', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE IF NOT EXISTS `admission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `student_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `batch` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shift` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `optional` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `date`, `student_id`, `roll`, `class`, `group`, `session`, `batch`, `shift`, `version`, `section`, `optional`) VALUES
(8, '2016-08-18', '1', '101', 'Nine', 'None', '2015-2016', 'batch_1', 'Day', 'Bangla', 'None', 'BIOLOGY'),
(9, '2016-08-18', '2', '102', 'Nine', 'None', '2016-2017', 'batch_1', 'Day', 'English', 'None', 'BIOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `admit_instruction`
--

CREATE TABLE IF NOT EXISTS `admit_instruction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `details` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admit_instruction`
--

INSERT INTO `admit_instruction` (`id`, `details`) VALUES
(2, 'Arrive at the examination venue at least 15 minutes before the start of the examination / 35 minutes before a digital examination.'),
(3, 'The examination starts at the moment the book control begins, and you must therefore be present by 8.20 a.m. for regular written examinations and 8.10 a.m. at digital examinations.'),
(4, 'When using a laptop at digital examinations, the laptop has to be set up as soon as possible. If you are taking a law exam, the laptop must be set up before the book control.'),
(5, 'Coats, backpacks, bags, etc. must be placed as directed. Mobile phones, mp3 players, smartwatches and other electronic devices must be turned off and put away, and cannot be stored in coats or pockets.'),
(6, 'If support material, other than that which is specifically permitted, is found at or by the desk, it may be treated as an attempt to cheat and relevant procedures for cheating will be followed. '),
(7, 'The head invigilator will provide information about examination support materials that you are permitted to use during the examination. All dictionaries must be approved by the faculty before the exam and will be handed out in the exam venue by the invigilators.');

-- --------------------------------------------------------

--
-- Table structure for table `advance`
--

CREATE TABLE IF NOT EXISTS `advance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `employeeId` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `advance`
--

INSERT INTO `advance` (`id`, `date`, `employeeId`, `amount`, `balance`) VALUES
(8, '2016-04-23', '2', '17000.00', '8200.00'),
(9, '2016-06-05', '5', '20000.00', '8000.00');

-- --------------------------------------------------------

--
-- Table structure for table `ad_calender`
--

CREATE TABLE IF NOT EXISTS `ad_calender` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ad_calender_title` varchar(255) NOT NULL,
  `ad_calender_attachment` varchar(255) NOT NULL,
  `ad_calender_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ad_calender`
--

INSERT INTO `ad_calender` (`id`, `ad_calender_title`, `ad_calender_attachment`, `ad_calender_date`) VALUES
(2, 'asdf', 'public/upload_delete/academic_calender/calender_2016-07-18_9143.pdf', '2016-07-18'),
(3, 'Download', 'public/upload_delete/academic_calender/calender_2016-07-28_2899.pdf', '2016-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `class` varchar(45) NOT NULL,
  `session` varchar(45) NOT NULL,
  `group` varchar(100) NOT NULL DEFAULT 'None',
  `subject` varchar(255) NOT NULL DEFAULT 'All',
  `roll` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `class`, `session`, `group`, `subject`, `roll`) VALUES
(1, '2016-08-17', 'Six', '2015-2016', 'None', 'Bangla', '["101","102","103"]'),
(2, '2016-08-18', 'Six', '2015-2016', 'None', '', '["102","103"]');

-- --------------------------------------------------------

--
-- Table structure for table `at_a_glance`
--

CREATE TABLE IF NOT EXISTS `at_a_glance` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `at_a_glance_title` varchar(255) NOT NULL,
  `at_a_glance` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `at_a_glance`
--

INSERT INTO `at_a_glance` (`id`, `date`, `at_a_glance_title`, `at_a_glance`) VALUES
(2, '2016-07-19', 'এক নজরে নটর ডেম কলেজ । ', '<p><span style="color: #000000;">এক নজরে নটর ডেম কলেজ । এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;এক নজরে নটর ডেম কলেজ ।&nbsp;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE IF NOT EXISTS `bank_account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `datetime` date NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `pre_balance` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`id`, `datetime`, `bank_name`, `holder_name`, `account_number`, `pre_balance`) VALUES
(9, '2016-08-02', 'Sonali_Bank_Limited', 'Maruf hasan Hasan', '15610550882', 50000),
(10, '2016-08-02', 'AB_Bank_Limited', 'Maruf hasan', '15610550883', 50000),
(11, '0000-00-00', 'Agrani_Bank_Limited', 'lad', '1111111111111', 500000),
(12, '0000-00-00', 'Agrani_Bank_Limited', 'Maruf hasan Sahin', '2222222222', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `date`, `path`) VALUES
(17, '2016-08-20', 'public/banner/banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `class_and_subject`
--

CREATE TABLE IF NOT EXISTS `class_and_subject` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CS_class` varchar(255) NOT NULL,
  `CS_group` varchar(255) NOT NULL,
  `CS_subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `class_and_subject`
--

INSERT INTO `class_and_subject` (`id`, `CS_class`, `CS_group`, `CS_subject`) VALUES
(1, 'Eleven', 'Arts', 'subject-b'),
(2, 'Eleven', 'Science', 'bangla_1st_paper');

-- --------------------------------------------------------

--
-- Table structure for table `committee_members`
--

CREATE TABLE IF NOT EXISTS `committee_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_date` varchar(255) NOT NULL,
  `member_year_from` varchar(10) NOT NULL,
  `member_year_to` varchar(10) NOT NULL,
  `member_full_name` varchar(255) NOT NULL,
  `member_post` varchar(255) NOT NULL,
  `member_mobile_number` varchar(255) NOT NULL,
  `member_address` varchar(255) NOT NULL,
  `member_photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `committee_members`
--

INSERT INTO `committee_members` (`id`, `member_date`, `member_year_from`, `member_year_to`, `member_full_name`, `member_post`, `member_mobile_number`, `member_address`, `member_photo`) VALUES
(1, '2016-07-25', '2017', '2017', 'Marufhasan', 'director', '01735189237', '  মুক্তাগাছা  ', 'public/members/member_763644.png');

-- --------------------------------------------------------

--
-- Table structure for table `daily_transaction`
--

CREATE TABLE IF NOT EXISTS `daily_transaction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_date` date NOT NULL,
  `voucher` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `transaction_nature` varchar(100) NOT NULL,
  `transaction_description` varchar(255) NOT NULL,
  `transaction_by` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `daily_transaction`
--

INSERT INTO `daily_transaction` (`id`, `transaction_date`, `voucher`, `branch`, `transaction_nature`, `transaction_description`, `transaction_by`, `amount`, `status`) VALUES
(1, '2016-06-08', '1001', 'PR1', 'income', 'ব্যাংক থেকে মুনাফা প্রাপ্তি', 'Me', '15000.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `employee_emp_id` varchar(100) NOT NULL,
  `employee_type` varchar(100) NOT NULL,
  `employee_joining` date NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_gender` text NOT NULL,
  `employee_mobile` varchar(15) NOT NULL,
  `employee_email` varchar(100) NOT NULL,
  `employee_present_address` text NOT NULL,
  `employee_permanent_address` text NOT NULL,
  `employee_designation` varchar(50) NOT NULL,
  `employee_salary` varchar(15) NOT NULL,
  `employee_photo` varchar(100) NOT NULL,
  `employee_status` varchar(20) NOT NULL,
  `employee_subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_emp_id`, `employee_type`, `employee_joining`, `employee_name`, `employee_gender`, `employee_mobile`, `employee_email`, `employee_present_address`, `employee_permanent_address`, `employee_designation`, `employee_salary`, `employee_photo`, `employee_status`, `employee_subject`) VALUES
(30, '456789', 'staff', '2016-07-05', 'Maruf hasan', 'Male', '01715189237', 'emarufhasan@gmail.com', 'Muktagachha', 'Muktagachha', 'accountant', '15000', 'public/employee/employee_456789.jpg', '1', ''),
(31, '2587456', 'staff', '2016-07-01', 'abcd', 'Male', '01254789587', 'asdfcvc@yahoo.com', 'asd afd asd ', 'asd afd asd ', 'office_assistant', '25410', 'public/employee/employee_2587456.jpg', '1', 'english'),
(32, '2548656', 'staff', '2016-07-01', 'abcd', 'Male', '01245789658', 'asdfcvc@yahoo.com', 'asd afd asd ', 'asd afd asd ', 'cooker', '25410', 'public/employee/employee_2548656.png', '1', 'math'),
(33, '12w32e', 'staff', '2015-09-02', 'dasdf', 'Male', '01547896587', 'asdfcvc@yahoo.com', 'DSF', 'DSF', 'hostel_super', '345234', 'public/employee/employee_12w32e.png', '1', 'arabic_writing'),
(35, '1234566541', 'staff', '2016-07-10', 'Maruf hasan', 'Male', '01751445578', 'aaslkdfjlasdf@gmail.com', 'Muktagachha', 'Muktagachha', 'hostel_super', '15000', 'public/employee/employee_1234566541.png', '1', ''),
(36, '10', 'teacher', '2016-08-09', '', 'Male', '01918181818', '', 'Coronation Road, Snakipara, Mymengingh', 'Coronation Road, Snakipara, Mymengingh', 'teacher', '323000', '', '1', 'bangla_1st_paper');

-- --------------------------------------------------------

--
-- Table structure for table `employee_payment`
--

CREATE TABLE IF NOT EXISTS `employee_payment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `payDate` date NOT NULL,
  `employeeId` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `month` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `bonus` decimal(10,2) NOT NULL,
  `method` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `exam_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `objective` decimal(5,2) NOT NULL,
  `objective_pass_mark` decimal(5,2) NOT NULL,
  `written` decimal(5,2) NOT NULL,
  `written_pass_mark` decimal(5,2) NOT NULL,
  `practical` decimal(5,2) NOT NULL,
  `practical_pass_mark` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `date`, `title`, `exam_id`, `class`, `group`, `subject`, `objective`, `objective_pass_mark`, `written`, `written_pass_mark`, `practical`, `practical_pass_mark`) VALUES
(29, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'None', 'BANGLA 1ST', '40.00', '13.00', '60.00', '20.00', '0.00', '0.00'),
(30, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'None', 'ENGLISH 1ST', '0.00', '0.00', '100.00', '33.00', '0.00', '0.00'),
(31, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'None', 'MATHEMATICS', '40.00', '13.00', '60.00', '20.00', '0.00', '0.00'),
(32, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'None', 'RELIGION AND MORAL EDUCATION', '40.00', '13.00', '60.00', '20.00', '0.00', '0.00'),
(33, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'None', 'INFORMATION AND COMMUNICATION TECHNOLOGY', '40.00', '13.00', '60.00', '20.00', '0.00', '0.00'),
(34, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'None', 'PHYSICAL EDUCATION, HEALTH SCIENCE AND SPORTS', '40.00', '13.00', '60.00', '20.00', '0.00', '0.00'),
(35, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'None', 'CAREER EDUCATION', '40.00', '13.00', '60.00', '20.00', '0.00', '0.00'),
(36, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'Science', 'PHYSICS', '35.00', '12.00', '40.00', '13.00', '25.00', '8.00'),
(37, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'Science', 'CHEMISTRY', '35.00', '12.00', '40.00', '13.00', '25.00', '8.00'),
(38, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'Science', 'BIOLOGY', '35.00', '12.00', '40.00', '13.00', '25.00', '8.00'),
(39, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'Science', 'BANGLADESH AND GLOBAL STUDIES', '40.00', '13.00', '60.00', '20.00', '0.00', '0.00'),
(40, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'Science', 'HIGHER MATHEMATICS', '35.00', '12.00', '40.00', '13.00', '25.00', '8.00'),
(41, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'None', 'BANGLA 2ND', '40.00', '13.00', '60.00', '20.00', '0.00', '0.00'),
(42, '2016-08-30 10:00:00', 'Monthly Exam', '1471518822', 'Nine', 'None', 'ENGLISH 2ND', '0.00', '0.00', '100.00', '33.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_date` date NOT NULL,
  `gallery_title` varchar(255) NOT NULL,
  `gallery_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_date`, `gallery_title`, `gallery_path`) VALUES
(7, '2016-08-09', 'Notre Dame College', 'public/gallery/gallery7537.jpg'),
(8, '2016-08-09', 'Notre Dame College', 'public/gallery/gallery8590.jpg'),
(9, '2016-08-09', 'Notre Dame College', 'public/gallery/gallery4556.jpg'),
(10, '2016-08-09', 'Notre Dame College', 'public/gallery/gallery2515.JPG'),
(11, '2016-08-09', 'Notre Dame College', 'public/gallery/gallery9301.JPG'),
(12, '2016-08-09', 'Notre Dame College', 'public/gallery/gallery2630.JPG'),
(13, '2016-08-09', 'Notre Dame College', 'public/gallery/gallery9640.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE IF NOT EXISTS `latest_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `latest_news_date` date NOT NULL,
  `latest_news_title` text NOT NULL,
  `latest_news_description` text NOT NULL,
  `latest_news_link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `latest_news_date`, `latest_news_title`, `latest_news_description`, `latest_news_link`) VALUES
(8, '2016-08-11', 'Welcome to Border Guard Public School and College', '<p>Welcome to Border Guard Public School and College</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `year` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `exam_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `objective` decimal(5,2) NOT NULL,
  `written` decimal(5,2) NOT NULL,
  `practical` decimal(5,2) NOT NULL,
  `total` decimal(5,2) NOT NULL,
  `point` decimal(5,2) NOT NULL,
  `letter` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `date`, `year`, `exam_id`, `class`, `roll`, `subject_name`, `subject`, `objective`, `written`, `practical`, `total`, `point`, `letter`) VALUES
(7, '2016-08-18', '2016', '1471518822', 'Nine', '101', 'BANGLA', 'BANGLA 1ST', '35.00', '35.00', '0.00', '70.00', '4.00', 'A'),
(8, '2016-08-18', '2016', '1471518822', 'Nine', '102', 'BANGLA', 'BANGLA 1ST', '32.00', '40.00', '0.00', '72.00', '4.00', 'A'),
(9, '2016-08-18', '2016', '1471518822', 'Nine', '101', 'BANGLA', 'BANGLA 2ND', '22.00', '40.00', '0.00', '62.00', '3.50', 'A-'),
(10, '2016-08-18', '2016', '1471518822', 'Nine', '102', 'BANGLA', 'BANGLA 2ND', '30.00', '55.00', '0.00', '85.00', '5.00', 'A+'),
(11, '2016-08-18', '2016', '1471518822', 'Nine', '101', 'MATHEMATICS', 'MATHEMATICS', '35.00', '55.00', '0.00', '90.00', '5.00', 'A+'),
(12, '2016-08-18', '2016', '1471518822', 'Nine', '102', 'MATHEMATICS', 'MATHEMATICS', '40.00', '35.00', '0.00', '75.00', '4.00', 'A'),
(13, '2016-08-18', '2016', '1471518822', 'Nine', '101', 'BIOLOGY', 'BIOLOGY', '35.00', '55.00', '0.00', '90.00', '5.00', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `joining_date` date NOT NULL,
  `member_id` varchar(50) NOT NULL,
  `branch_id` varchar(100) NOT NULL,
  `certificate_no` varchar(50) NOT NULL,
  `share_quantity` int(10) NOT NULL,
  `total_share_price` decimal(10,2) NOT NULL,
  `applicant_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `team` varchar(100) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(100) NOT NULL,
  `national_id_no` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `yearly_income` decimal(10,2) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'public/upload/members/default-face.png',
  `signature` varchar(255) NOT NULL DEFAULT 'public/upload/signature/default-signature.png',
  `status` varchar(50) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `joining_date`, `member_id`, `branch_id`, `certificate_no`, `share_quantity`, `total_share_price`, `applicant_name`, `father_name`, `mother_name`, `guardian_name`, `relation`, `team`, `present_address`, `permanent_address`, `mobile_number`, `date_of_birth`, `age`, `national_id_no`, `marital_status`, `yearly_income`, `photo`, `signature`, `status`) VALUES
(9, '2016-06-07', 'PR116JOB0001', 'PR1', 'PR116JOB0001', 20, '400.00', 'Jayanta Biswas', 'Joymongal Biswas', 'Bakul Rani Biswas', 'Joymongal Biswas', 'father', 'JOB', 'Mymensingh', 'Mymensingh', '01775219457', '1989-12-25', '26', '612585913218', 'unmarride', '100000.00', 'public/members/PR116JOB0001-photo.png', 'public/signature/PR116JOB0001-signature.png', 'yes'),
(10, '2016-06-09', 'PR116JOB0010', 'PR1', 'PR116JOB0010', 25, '500.00', 'Rony Debnath', 'Unknown', 'Unknown', 'Unknown', 'father', 'JOB', 'Mymensingh, Bangladesh', 'Mymensingh, Bangladesh', '01557732884', '1991-12-25', '24', '612513814911', 'unmarride', '70000000.00', 'public/members/PR116JOB0010-photo.png', 'public/signature/PR116JOB0010-signature.png', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `messages_date` varchar(20) NOT NULL,
  `messages_name` varchar(250) NOT NULL,
  `messages_mobile` varchar(50) NOT NULL,
  `messages_text` text NOT NULL,
  `messages_condition` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `notice_date` date NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_description` text NOT NULL,
  `notice_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_date`, `notice_title`, `notice_description`, `notice_path`) VALUES
(23, '2016-08-09', 'Notice Title , এখানে নোটিশ এর টাইটেল  হবে । ', '<p>নোটিশ এর বিস্তারিত লিখতে হবে । নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;</p>\n<p>&nbsp;</p>\n<p>নোটিশ এর বিস্তারিত লিখতে হবে । নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;নোটিশ এর বিস্তারিত লিখতে হবে ।&nbsp;</p>', 'public/attached_notice/notice858734.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_date` date NOT NULL,
  `page_page` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_description` text NOT NULL,
  `page_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_date`, `page_page`, `page_title`, `page_description`, `page_path`) VALUES
(26, '2016-08-09', 'at_a_glance', 'At a Glance', '<p>At a glance Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'public/page_Image/at_a_glance7456.jpg'),
(27, '2016-08-09', 'master_plan', 'মাস্টার প্লান ', '<p style="text-align: justify;"><span style="color: #ff0000;"><em><strong>Master plan willl be placed here.</strong></em></span> Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;</p>\n<p>&nbsp;</p>\n<p style="text-align: justify;">Master plan willl be placed here. Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;Master plan willl be placed here.&nbsp;</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `datetime` date NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mother_profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `guardian_mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `religion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `present_address` text COLLATE utf8_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'registered',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `datetime`, `first_name`, `last_name`, `father_name`, `mother_name`, `father_profession`, `mother_profession`, `student_mobile`, `guardian_mobile`, `birth_date`, `religion`, `gender`, `present_address`, `permanent_address`, `photo`, `class`, `group`, `session`, `status`) VALUES
(1, '2016-08-13', 'Rony', 'Debnath', 'Mangal Ch. Debnath', 'Sanchita Rani Debnath', 'Job', 'Housewife', '01921787634', '01921787634', '2017-04-20', 'hindu', 'Male', 'Mymensingh', 'Mymensingh', 'students_775499.png', 'Nine', 'None', '2015-2016', 'admitted'),
(2, '2016-08-13', 'Maruf', 'Hasan', 'Akram hossain', 'Monowara Begum', 'Govt Service', 'House wife', '01735189237', '01735189237', '1993-12-06', 'islam', 'Male', 'Muktagachha,Mymensingh,Bangladesh', 'Muktagachha,Mymensingh,Bangladesh', 'students_320176.PNG', 'Nine', 'None', '2016-2017', 'admitted'),
(3, '2016-08-16', 'Jayanta', 'Biswas', 'Biswas', 'Biswas', 'Job', 'Housewife', '01900000000', '01934229356', '2016-08-16', 'hindu', 'Male', 'Mymensingh', 'Mymensingh', 'students_433566.png', 'Nine', 'None', '2014-2015', 'admitted'),
(4, '2016-08-16', 'Araf', 'Karim', 'Mr. Karim', 'Ms. Karim', 'Job', 'Housewife', '01900000000', '01900000000', '2016-08-16', 'islam', 'Male', 'Mymensingh', 'Mymensingh', 'students_615858.jpg', 'Nine', 'Science', '2015-2016', 'registered'),
(5, '2016-08-16', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '01254785985', '01548874582', '2016-08-03', 'islam', 'Male', 'asdff', 'asdff', 'students_866210.jpg', 'Nine', 'None', '2016-2017', 'registered'),
(6, '2016-08-16', 'qwer', 'qwer', 'qwer', 'qwer', 'qwer', 'qwer', '01254785478', '01254785896', '2016-08-10', 'islam', 'Male', 'qwer', 'qwer', 'students_202365.png', 'Nine', 'Science', '2016-2017', 'registered'),
(7, '2016-08-16', 'truirtyu', 'rtyu', 'rytu', 'rtyu', 'rtyu', 'rtyu', '01254857458', '01254785965', '2016-08-10', 'islam', 'Male', 'rtyu', 'rtyu', 'students_794216.png', 'Nine', 'Science', '2016-2017', 'registered'),
(8, '2016-08-16', 'ghjk', 'ghjk', 'ghjk', 'ghjk', 'ghjk', 'ghjk', '01254785874', '01254785874', '2016-08-17', 'islam', 'Male', 'ghjk', 'ghjk', 'students_736843.jpg', 'Nine', 'Science', '2016-2017', 'registered'),
(9, '2016-08-16', 'cvbn', 'cvbn', 'cvbn', 'cvbn', 'cvbn', 'cvbn', '01254785478', '01587458745', '2016-08-10', 'islam', 'Male', 'cvbn', 'cvbn', 'students_284532.png', 'Nine', 'Huminities', '2016-2017', 'registered');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `exam_id` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `roll` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(6,2) NOT NULL,
  `gpa` decimal(3,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `date`, `class`, `exam_id`, `roll`, `name`, `total`, `gpa`) VALUES
(1, '2016-08-20', 'Nine', '1471518822', '102', 'Maruf Hasan', '232.00', '4.00'),
(2, '2016-08-20', 'Nine', '1471518822', '101', 'Rony Debnath', '312.00', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2d1873bed357f6933e481b6f2ec4256f', '192.168.1.108', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', 1471675784, 'a:12:{s:9:"user_data";s:0:"";s:7:"user_id";i:1001;s:12:"login_period";s:22:"2016-08-20 11:47:00 am";s:4:"name";s:16:"Freelance IT Lab";s:5:"email";s:19:"mrskuet08@gmail.com";s:8:"username";s:14:"freelanceitlab";s:6:"mobile";s:11:"01937476716";s:9:"privilege";s:5:"super";s:5:"image";s:27:"private/images/pic-male.png";s:6:"branch";s:10:"Mymensingh";s:6:"holder";s:5:"super";s:8:"loggedin";b:1;}'),
('7942e64f2e1541923fe789fab29c166f', '192.168.0.107', 'Mozilla/5.0 (Windows NT 6.1; rv:47.0) Gecko/20100101 Firefox/47.0', 1498906757, 'a:12:{s:9:"user_data";s:0:"";s:7:"user_id";s:2:"14";s:12:"login_period";s:22:"2017-07-01 16:59:25 pm";s:4:"name";s:10:"Superadmin";s:5:"email";s:20:"superadmin@gmail.com";s:8:"username";s:10:"superadmin";s:6:"mobile";s:11:"00000000000";s:9:"privilege";s:5:"super";s:5:"image";s:39:"public/employee/employee_superadmin.jpg";s:6:"branch";s:0:"";s:6:"holder";s:5:"super";s:8:"loggedin";b:1;}'),
('9e62cf759e9b9d89c4c4e7622f66dc9d', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1471676479, 'a:11:{s:7:"user_id";i:1001;s:12:"login_period";s:22:"2016-08-20 13:01:23 pm";s:4:"name";s:16:"Freelance IT Lab";s:5:"email";s:19:"mrskuet08@gmail.com";s:8:"username";s:14:"freelanceitlab";s:6:"mobile";s:11:"01937476716";s:9:"privilege";s:5:"super";s:5:"image";s:27:"private/images/pic-male.png";s:6:"branch";s:10:"Mymensingh";s:6:"holder";s:5:"super";s:8:"loggedin";b:1;}'),
('b0bf783bfb70379075c9a75dcff7fefe', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:47.0) Gecko/20100101 Firefox/47.0', 1498906467, 'a:12:{s:9:"user_data";s:0:"";s:7:"user_id";s:2:"14";s:12:"login_period";s:22:"2017-07-01 16:54:31 pm";s:4:"name";s:10:"Superadmin";s:5:"email";s:20:"superadmin@gmail.com";s:8:"username";s:10:"superadmin";s:6:"mobile";s:11:"00000000000";s:9:"privilege";s:5:"super";s:5:"image";s:39:"public/employee/employee_superadmin.jpg";s:6:"branch";s:0:"";s:6:"holder";s:5:"super";s:8:"loggedin";b:1;}'),
('c2d1d35642bd1367bc074e19a806edf1', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1471690653, ''),
('d556cfaaf3207af97ee9f74032099b97', '192.168.1.108', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', 1471694352, 'a:12:{s:9:"user_data";s:0:"";s:7:"user_id";i:1001;s:12:"login_period";s:22:"2016-08-20 17:59:15 pm";s:4:"name";s:16:"Freelance IT Lab";s:5:"email";s:19:"mrskuet08@gmail.com";s:8:"username";s:14:"freelanceitlab";s:6:"mobile";s:11:"01937476716";s:9:"privilege";s:5:"super";s:5:"image";s:27:"private/images/pic-male.png";s:6:"branch";s:10:"Mymensingh";s:6:"holder";s:5:"super";s:8:"loggedin";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slider_date` date NOT NULL,
  `slider_title` varchar(100) NOT NULL,
  `slider_path` varchar(50) NOT NULL,
  `slider_url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_date`, `slider_title`, `slider_path`, `slider_url`) VALUES
(19, '2016-08-11', 'a', 'public/slider/slider1713.jpg', ''),
(20, '2016-08-11', 'b', 'public/slider/slider6225.jpg', ''),
(21, '2016-08-11', 'c', 'public/slider/slider1567.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `sms_record`
--

CREATE TABLE IF NOT EXISTS `sms_record` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_date` date NOT NULL,
  `delivery_time` time NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `total_characters` varchar(4) NOT NULL,
  `total_messages` varchar(2) NOT NULL,
  `delivery_report` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `sms_record`
--

INSERT INTO `sms_record` (`id`, `delivery_date`, `delivery_time`, `mobile`, `message`, `total_characters`, `total_messages`, `delivery_report`) VALUES
(30, '2016-07-31', '16:00:20', '01775219457', 'Oello ami!', '40', '1', '1'),
(31, '2016-07-31', '16:02:34', '01914690644', 'Oello! Maruf hasan.', '49', '1', '1'),
(32, '2016-08-01', '16:02:34', '01735189237', 'Oello! Maruf hasan.', '49', '1', '1'),
(33, '2016-07-31', '17:19:14', '01937476716', 'Hello Its a Test Message Published from Principal of Mymensingh Notre Dame College. I see what performance is being from here.', '156', '1', '1'),
(34, '2016-08-01', '13:02:11', '01775219457', 'Olleow', '36', '1', '0'),
(35, '2016-08-01', '13:03:38', '01775219457', 'Hi there', '38', '1', '0'),
(36, '2016-08-01', '13:04:22', '01775219457', 'HI there', '38', '1', '1'),
(37, '2016-08-01', '13:06:35', '01937476716', 'Hello', '35', '1', '1'),
(38, '2016-08-08', '14:54:09', '01937476716', 'Hello its a test message. ', '55', '1', '1'),
(39, '2016-08-08', '15:45:27', '01735189237', 'HI Maruf hasan', '65', '1', '1'),
(40, '2016-08-08', '15:48:50', '01735189237', 'Ki ra', '56', '1', '1'),
(41, '2016-08-08', '15:52:13', '01735189237', 'hello', '56', '1', '1'),
(42, '2016-08-08', '16:00:46', '01735189237778', 'asdfADF', '58', '1', '0'),
(43, '2016-08-08', '16:12:50', '01735189237777', 'asdfasdf', '59', '1', '0'),
(44, '2016-08-08', '16:56:17', '01788997710', 'Your Student are Absent Today Notre Dame College, Mymensingh', '60', '1', '1'),
(45, '2016-08-08', '16:57:54', '01735189237', 'Your Student are Absent Today Notre Dame College, Mymensingh', '60', '1', '1'),
(46, '2016-08-08', '16:59:02', '01735189237', 'Your Student are Absent Today Notre Dame College, Mymensingh', '60', '1', '1'),
(47, '2016-08-09', '10:22:00', '01937476716', 'Hello, how can i help you? ', '77', '1', '1'),
(50, '2016-08-17', '10:26:32', '01735189237', 'bgpsc_access is trying to access to your application system information is : Mozilla/5.0 (Windows NT 6.1; rv:47.0) Gecko/20100101 Firefox/47.0', '142', '1', '0'),
(51, '2016-08-17', '10:30:00', '01735189237', 'bgpsc_access is trying to access to your application system information is : Mozilla/5.0 (Windows NT 6.1; rv:47.0) Gecko/20100101 Firefox/47.0', '142', '1', '1'),
(52, '2016-08-17', '10:39:02', '01937476716', 'bgpsc_access is trying to access to your application system information is : Mozilla/5.0 (Windows NT 6.1; rv:47.0) Gecko/20100101 Firefox/47.0', '142', '1', '1'),
(53, '2016-08-17', '10:42:25', '01937476716', 'bgpsc_access is trying to access to your application system information is : Mozilla/5.0 (Windows NT 6.1; rv:47.0) Gecko/20100101 Firefox/47.0', '142', '1', '1'),
(54, '2016-08-17', '16:33:16', '01921787634', 'Your Student are Absent Today Notre Dame College, Mymensingh', '60', '1', '1'),
(55, '2016-08-17', '16:35:20', '01921787634', 'Your Student are Absent Today Notre Dame College, Mymensingh', '60', '1', '1'),
(56, '2016-08-17', '16:35:24', '01735189237', 'Your Student are Absent Today Notre Dame College, Mymensingh', '60', '1', '1'),
(57, '2016-08-17', '16:35:29', '01934229356', 'Your Student are Absent Today Notre Dame College, Mymensingh', '60', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `speech`
--

CREATE TABLE IF NOT EXISTS `speech` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `speech_person` varchar(255) NOT NULL,
  `speech_speech` text NOT NULL,
  `speech_path` varchar(255) NOT NULL,
  `speech_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `speech`
--

INSERT INTO `speech` (`id`, `speech_person`, `speech_speech`, `speech_path`, `speech_date`) VALUES
(1, 'principal', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'public/speech/principal14.jpg', '2016-08-11'),
(3, 'president', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section</p>', 'public/speech/president87.png', '2016-08-13'),
(4, 'gb_member', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>', 'public/speech/gb_member52.jpg', '2016-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `students_name` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `student_religion` varchar(100) NOT NULL,
  `fathers_profession` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `birth_date` varchar(100) NOT NULL,
  `preasent_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `parents_mobile` varchar(20) NOT NULL,
  `lg_mobile` varchar(20) NOT NULL,
  `session` varchar(100) CHARACTER SET utf8 NOT NULL,
  `class` varchar(100) NOT NULL,
  `student_shift` varchar(255) NOT NULL,
  `student_group` varchar(255) NOT NULL,
  `students_roll` varchar(50) NOT NULL,
  `student_section` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `students_name`, `fathers_name`, `mothers_name`, `student_religion`, `fathers_profession`, `nationality`, `birth_date`, `preasent_address`, `permanent_address`, `mobile_number`, `parents_mobile`, `lg_mobile`, `session`, `class`, `student_shift`, `student_group`, `students_roll`, `student_section`, `photo`, `date`) VALUES
(10, 'Sujan ali', 'Nasir mia', 'Jahanra Begum', 'islam', 'Business', 'bangladeshi', '2001-05-19', 'Sankipara, Noyonmoni', 'Sankipara, Noyonmoni', '01781528178', '', '', '2018-2019', 'Eleven', 'day', 'Science', '111256', 'Section_II', 'public/students/students226182.jpg', '2016-08-04'),
(12, 'Salah Uddin ', 'Chomir Udin ', 'Shirina akter ', 'islam', 'Business', 'bangladeshi', '2005-06-23', ' hyderbad, Dhaka 1120 ', 'hyderbad, Dhaka 1120', '01956281585', '', '', '2020-2021', 'Eleven', '0', 'Business_Studies', '568923', 'Section_V', 'public/students/students123833.jpg', '2016-08-10'),
(14, 'Karuni misali ', 'Haganshokh ', 'Mandi dilruba ', 'islam', 'Don', 'bangladeshi', '2016-08-24', 'Kumargati, Hatimara, sagol company ', 'Kumargati, Hatimara, sagol company ', '017980236547', '', '', '2015-2016', 'Eleven', 'morning', 'Science', '129874', 'Section_II', 'public/students/students317409.jpg', '2016-08-04'),
(15, 'Kumar Udiin ', 'Kodi Khan ', 'Ruma Sangma ', 'islam', 'Dada Number One ', 'bangladeshi', '2016-08-22', 'gupalpur, Baromari, Mymensingh 2310', 'gupalpur, Baromari, Mymensingh 2310', '01198087395', '', '', '2018-2019', 'Eleven', 'morning', 'Science', '56845', 'Section_V', 'public/students/students724744.png', '2016-08-04'),
(18, 'Maruf Munshi ', 'Akram Hosen', 'Monuara Begum', 'islam', 'Police', 'bangladeshi', '1993-12-06', ' Muktagacha, 2260 ', 'Muktagacha, 2260', '01914690645', '', '', '2017-2018', 'Eleven', '0', 'Business_Studies', '256815', 'Section_VI', 'public/students/students487467.jpg', '2016-08-10'),
(19, 'Bibi Sokhina ', 'Sultan Ahmed ', 'Rukshana Akter ', 'islam', 'Nimtola ', 'bangladeshi', '2016-08-14', '  Kamoruddin arman   ', 'Kamoruddin arman ', '01928653412', '123', '1213', '2019-2020', 'Eleven', '0', 'Huminities', '5684122', 'Section_II', 'public/students/students978081.jpg', '2016-08-10'),
(20, 'Shoitan ali ', 'Subhan ali ', 'Petni akter ', 'islam', 'Teacher', 'bangladeshi', '2016-08-27', ' Brindabon, Separate Khan alom bonam Indonasia  ', 'Brindabon, Separate Khan alom bonam Indonasia ', '01928625858', '', '', '2016-2017', 'Eleven', '0', 'Business_Studies', '1265871', 'Section_VI', 'public/students/students214111.jpg', '2016-08-10'),
(21, 'Mugur ali ', 'Shoitan Khan ', 'Korina Akter ', 'islam', 'Business ', 'bangladeshi', '2016-08-24', ' Noyapara, Porba Gonj, Mymensingh  ', 'Noyapara, Porba Gonj, Mymensingh ', '01956281586', '', '', '2021-2022', 'Twelve', '0', 'Huminities', '445698', 'Section_VII', 'public/students/students550564.jpg', '2016-08-10'),
(22, 'Jorina akter ', 'Juan uddin ', 'Halima akter ', 'islam', 'Shoitaner Karbari ', 'bangladeshi', '2016-08-21', ' Matirtola, Baganbari, Noyagonj 2250 ', 'Matirtola, Baganbari, Noyagonj 2250', '01928685757', '', '', '2020-2021', 'Eleven', '0', 'Huminities', '126058', 'Section_IV', 'public/students/students138780.jpg', '2016-08-10'),
(23, 'Jayanta Biswas ', 'Sayed Khan ', 'Mumina Akter ', 'islam', 'Business', 'bangladeshi', '2016-08-21', 'Senanibas, Jamalpur, 5682', 'Senanibas, Jamalpur, 5682', '01985624545', '', '', '2018-2019', 'Twelve', 'morning', 'Science', '1214658', 'Section_VI', 'public/students/students333468.jpg', '2016-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(25) unsigned NOT NULL AUTO_INCREMENT,
  `datetime` date NOT NULL,
  `class` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paper` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subject_code` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `subject_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'compulsory',
  `written` int(100) NOT NULL,
  `objective` int(100) NOT NULL,
  `practical` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `datetime`, `class`, `group`, `subject`, `subject_name`, `paper`, `subject_code`, `subject_type`, `written`, `objective`, `practical`) VALUES
(14, '2016-08-18', 'Nine', 'None', 'ENGLISH', 'ENGLISH 1ST', '1st', '', 'compulsory', 100, 0, 0),
(15, '2016-08-18', 'Nine', 'None', 'ENGLISH', 'ENGLISH 2ND', '2nd', '', 'compulsory', 100, 0, 0),
(16, '2016-08-18', 'Nine', 'None', 'MATHEMATICS', 'MATHEMATICS', 'None', '', 'compulsory', 60, 40, 0),
(18, '2016-08-18', 'Nine', 'None', 'RELIGION AND MORAL EDUCATION', 'RELIGION AND MORAL EDUCATION', 'None', '', 'compulsory', 60, 40, 0),
(19, '2016-08-18', 'Nine', 'None', 'INFORMATION AND COMMUNICATION TECHNOLOGY', 'INFORMATION AND COMMUNICATION TECHNOLOGY', 'None', '', 'compulsory', 60, 40, 0),
(20, '2016-08-18', 'Nine', 'None', 'PHYSICAL EDUCATION, HEALTH SCIENCE AND SPORTS', 'PHYSICAL EDUCATION, HEALTH SCIENCE AND SPORTS', 'None', '', 'compulsory', 60, 40, 0),
(21, '2016-08-18', 'Nine', 'None', 'CAREER EDUCATION', 'CAREER EDUCATION', 'None', '', 'compulsory', 60, 40, 0),
(22, '2016-08-18', 'Nine', 'Science', 'PHYSICS', 'PHYSICS', 'None', '', 'compulsory', 40, 35, 25),
(23, '2016-08-18', 'Nine', 'Science', 'CHEMISTRY', 'CHEMISTRY', 'None', '', 'compulsory', 40, 35, 25),
(24, '2016-08-18', 'Nine', 'Science', 'BIOLOGY', 'BIOLOGY', 'None', '', 'optional', 40, 35, 25),
(25, '2016-08-18', 'Nine', 'Science', 'BANGLADESH AND GLOBAL STUDIES', 'BANGLADESH AND GLOBAL STUDIES', 'None', '', 'compulsory', 60, 40, 0),
(26, '2016-08-18', 'Nine', 'Science', 'HIGHER MATHEMATICS', 'HIGHER MATHEMATICS', 'None', '', 'compulsory', 40, 35, 25),
(28, '2016-08-20', 'Nine', 'None', 'BANGLA', 'BANGLA  1st', '1st', '', 'compulsory', 0, 0, 0),
(29, '2016-08-20', 'Nine', 'None', 'BANGLA', 'BANGLA', 'None', '', 'compulsory', 60, 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team_name` varchar(100) NOT NULL,
  `team_id` varchar(20) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `maintained_by` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_name`, `team_id`, `branch`, `maintained_by`) VALUES
(21, 'Joba', 'JOB', 'PR1', '6'),
(22, 'Bale', 'BAL', 'AKU', '7');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_date` date NOT NULL,
  `bank` varchar(100) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `transaction_type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `transaction_by` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `transaction_date`, `bank`, `account_number`, `transaction_type`, `amount`, `transaction_by`) VALUES
(3, '2016-08-02', 'Sonali_Bank_Limited', '15610550882', 'Debit', '1500', 'Maruf hasan');

-- --------------------------------------------------------

--
-- Table structure for table `upload_digital_content`
--

CREATE TABLE IF NOT EXISTS `upload_digital_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dc_title` varchar(255) NOT NULL,
  `dc_class` varchar(255) NOT NULL,
  `dc_group` varchar(255) NOT NULL,
  `dc_subject` varchar(255) NOT NULL,
  `dc_attachment` text NOT NULL,
  `dc_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `upload_digital_content`
--

INSERT INTO `upload_digital_content` (`id`, `dc_title`, `dc_class`, `dc_group`, `dc_subject`, `dc_attachment`, `dc_date`) VALUES
(9, 'Test', 'Eleven', 'Science', 'bangla_1st_paper', 'public/upload_delete/digital_content/digital_content_2016-08-09_3066.pdf', '2016-08-09'),
(10, 'Test', 'Twelve', 'Huminities', 'chemistry_1st_paper', 'public/upload_delete/digital_content/digital_content_2016-08-09_4205.pdf', '2016-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `upload_leave`
--

CREATE TABLE IF NOT EXISTS `upload_leave` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `leave_title` varchar(255) NOT NULL,
  `leave_attachment` varchar(255) NOT NULL,
  `leave_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `upload_leave`
--

INSERT INTO `upload_leave` (`id`, `leave_title`, `leave_attachment`, `leave_date`) VALUES
(6, 'dfgsdfgdsfgdfgdfgfd', 'public/upload_delete/leavelist/leavelist_2016-07-17_6459.pdf', '2016-07-17'),
(7, 'asdfafasd', 'public/upload_delete/leavelist/leavelist_2016-07-17_1742.pdf', '2016-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `upload_magazine`
--

CREATE TABLE IF NOT EXISTS `upload_magazine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `magazine_title` varchar(255) NOT NULL,
  `magazine_attachment` varchar(255) NOT NULL,
  `magazine_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `upload_magazine`
--

INSERT INTO `upload_magazine` (`id`, `magazine_title`, `magazine_attachment`, `magazine_date`) VALUES
(6, 'jkjkjl', 'public/upload_delete/magazine/magazine_2016-07-17_4750.pdf', '2016-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `upload_result`
--

CREATE TABLE IF NOT EXISTS `upload_result` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `result_class` varchar(255) NOT NULL,
  `result_exam` varchar(255) NOT NULL,
  `result_attachment` varchar(255) NOT NULL,
  `result_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upload_result`
--

INSERT INTO `upload_result` (`id`, `result_class`, `result_exam`, `result_attachment`, `result_date`) VALUES
(1, 'Eleven', 'Monthly_Exam', 'public/upload_delete/result/result_2016-08-09_1310.pdf', '2016-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `upload_routine`
--

CREATE TABLE IF NOT EXISTS `upload_routine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `routine_class` varchar(255) NOT NULL,
  `routine_title` varchar(255) NOT NULL,
  `routine_attachment` varchar(255) NOT NULL,
  `routine_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `upload_routine`
--

INSERT INTO `upload_routine` (`id`, `routine_class`, `routine_title`, `routine_attachment`, `routine_date`) VALUES
(8, 'Eleven', '1st Terminal Exam', 'public/upload_delete/routine/routine_2016-07-30_4025.pdf', '2016-07-30'),
(9, 'Eleven', 'Test Class Routine', 'public/upload_delete/routine/routine_2016-07-31_6154.pdf', '2016-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `upload_syllabus`
--

CREATE TABLE IF NOT EXISTS `upload_syllabus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `syllabus_class` varchar(255) NOT NULL,
  `syllabus_attachment` varchar(255) NOT NULL,
  `syllabus_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `upload_syllabus`
--

INSERT INTO `upload_syllabus` (`id`, `syllabus_class`, `syllabus_attachment`, `syllabus_date`) VALUES
(9, 'Eleven', 'public/upload_delete/syllabus/syllabus_2016-07-17_8896.pdf', '2016-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `opening` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `maritial_status` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `facecbook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `privilege` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `branch` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `opening`, `name`, `l_name`, `gender`, `birthday`, `maritial_status`, `position`, `about`, `website`, `facecbook`, `twitter`, `email`, `username`, `password`, `privilege`, `image`, `mobile`, `branch`) VALUES
(25, '2016-08-16 06:36:52', 'Border', 'Guard', 'male', '2016-08-02', 'single', 'director', 'Border Guard', '', '', '', 'contact@bgpsc.edu.bd', 'bgpsc_access', '52199f7b137ebb058f1b474531b8539f', 'admin', 'public/profiles/bgpsc_access.jpg', '01729 692434', '');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE IF NOT EXISTS `video_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `embed_code` text NOT NULL,
  `video_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`id`, `date`, `embed_code`, `video_title`) VALUES
(1, '2016-08-09', '<iframe width="420" height="315" src="https://www.youtube.com/embed/3bonsx28QTE?rel=0" frameborder="0" allowfullscreen></iframe>', 'Science Of Stupid 1'),
(2, '2016-08-09', '<iframe width="420" height="315" src="https://www.youtube.com/embed/zP6s350nM9g?rel=0" frameborder="0" allowfullscreen></iframe>', 'Science Of Stupid 2'),
(3, '2016-08-09', '<iframe width="560" height="315" src="https://www.youtube.com/embed/2kI8fv9enlM?rel=0" frameborder="0" allowfullscreen></iframe>', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `date`, `ip`) VALUES
(10, '2016-08-08', '182.48.91.26'),
(11, '2016-08-08', '45.116.249.242'),
(12, '2016-08-08', '116.58.202.128'),
(13, '2016-08-09', '182.48.91.26'),
(14, '2016-08-09', '116.58.202.160'),
(15, '2016-08-09', '45.116.249.242'),
(16, '2016-08-09', '116.58.200.137'),
(17, '2016-08-09', '116.58.200.28'),
(18, '2016-08-09', '45.116.249.242, 8.37.231.3'),
(19, '2016-08-09', '116.58.205.118'),
(20, '2016-08-09', '::1'),
(21, '2016-08-09', '192.168.1.101'),
(22, '2016-08-09', '192.168.1.102'),
(23, '2016-08-10', '192.168.1.100'),
(24, '2016-08-10', '::1'),
(25, '2016-08-10', '116.58.205.98'),
(26, '2016-08-10', '123.49.52.18'),
(27, '2016-08-10', '38.80.27.15'),
(28, '2016-08-10', '182.48.91.26'),
(29, '2016-08-10', '119.30.39.229'),
(30, '2016-08-10', '59.152.103.178'),
(31, '2016-08-11', '116.58.202.152'),
(32, '2016-08-11', '103.52.134.62'),
(33, '2016-08-11', '66.249.64.140'),
(34, '2016-08-11', '116.58.200.37'),
(35, '2016-08-11', '45.116.249.242'),
(36, '2016-08-11', '182.48.91.26'),
(37, '2016-08-11', '::1'),
(38, '2016-08-11', '192.168.1.103'),
(39, '2016-08-11', '192.168.1.110'),
(40, '2016-08-13', '::1'),
(41, '2016-08-13', '192.168.1.102'),
(42, '2016-08-13', '192.168.1.108'),
(43, '2016-08-13', '192.168.1.101'),
(44, '2016-08-13', '192.168.1.110'),
(45, '2016-08-13', '192.168.1.111'),
(46, '2016-08-13', '192.168.1.105'),
(47, '2016-08-14', '192.168.1.108'),
(48, '2016-08-14', '192.168.1.100'),
(49, '2016-08-14', '::1'),
(50, '2016-08-14', '192.168.1.106'),
(51, '2016-08-14', '192.168.1.103'),
(52, '2016-08-16', '192.168.1.108'),
(53, '2016-08-16', '::1'),
(54, '2016-08-16', '192.168.1.105'),
(55, '2016-08-16', '192.168.1.100'),
(56, '2016-08-16', '192.168.1.101'),
(57, '2016-08-17', '::1'),
(58, '2016-08-17', '192.168.1.101'),
(59, '2016-08-17', '192.168.1.106'),
(60, '2016-08-17', '192.168.1.108'),
(61, '2016-08-18', '::1'),
(62, '2016-08-18', '192.168.1.108'),
(63, '2016-08-18', '192.168.1.105'),
(64, '2016-08-18', '192.168.1.100'),
(65, '2016-08-20', '::1'),
(66, '2016-08-20', '192.168.1.104'),
(67, '2016-08-20', '192.168.1.100'),
(68, '2016-08-20', '192.168.1.108');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

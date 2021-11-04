-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 03:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zillur_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'active' COMMENT 'active=active',
  `role` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=user\r\n2=employees\r\n3=admin',
  `profile_image` varchar(255) NOT NULL DEFAULT 'default.png	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `profile_image`) VALUES
(12, 'Md Zillur Rahman', 'zillur.web@gmail.com', '$2y$10$8gC8p1PkP32tkKtKEtz/y.WixOH9l0uqTIHSZ3.b0Gqgd/jy/dXce', 'active', 2, 'default.png	'),
(13, 'Humayun Kabir', 'humayunkabir12@gmail.com', '$2y$10$RNVYPZxcS3vPIw2ytHBJXOrQpNmk6Hn/e.AW.zzgQ90UaDspipL..', 'active', 2, 'default.png	'),
(14, 'Humayun Kabir', 'humayunkabir12@gmail.com', '$2y$10$faOJKHZukPdG1J1Wqv1DL.fQuzp5hcAhUJDDbek02Lb4oIQhr5j.m', 'deactive', 1, 'default.png	'),
(15, 'Sanjany kumar aditto', 'sanjaychandra@gmail.com', '$2y$10$ioheMlD3S0dfy7FaBxKUWObUmcYQ8wA2HcQhLb.JJL1WlR/YKVcne', 'deactive', 1, 'default.png	'),
(16, 'Zillur Rahman', 'zillur78489@gmail.com', '$2y$10$WXBUMUhnjt4latYuRcbcO.9W3kjyqTOxgm3igvTOqCAihXnzheNzG', 'active', 3, '16.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

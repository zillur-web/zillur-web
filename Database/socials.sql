-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 05:00 PM
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
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `link`, `status`) VALUES
(1, 'facebook', 'fab fa-facebook-f', 'https://www.facebook.com/zillur.web', 'active'),
(2, 'Twitter', 'fab fa-twitter', 'https://twitter.com/MDZILLU63033256', 'active'),
(3, 'Linkedin', 'fab fa-linkedin-in', 'https://www.linkedin.com/in/md-zillur-rahman-22bb01185/', 'active'),
(4, 'Gitgub', 'fab fa-github', 'https://github.com/zillur-web', 'deactive'),
(6, 'Gitgub', 'fab fa-github', 'https://github.com/zillur-web', 'active'),
(7, 'Github', 'fab fa-github', 'https://github.com/zillur-web', 'deactive'),
(8, 'Gitgub', 'fab fa-github', 'https://github.com/zillur-web', 'deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

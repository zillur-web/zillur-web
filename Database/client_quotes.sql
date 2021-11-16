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
-- Table structure for table `client_quotes`
--

CREATE TABLE `client_quotes` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quote` text NOT NULL,
  `image` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_quotes`
--

INSERT INTO `client_quotes` (`id`, `name`, `quote`, `image`, `status`) VALUES
(2, 'Elite Martin', 'Him, made can\'t called over won\'t there on divide there male fish beast own his day third seed sixth seas unto. Saw from ', 'quote-265.jpg', 'active'),
(3, 'Davil Saden', 'Him, made can\'t called over won\'t there on divide there male fish beast own his day third seed sixth seas unto. Saw from ', 'quote-343.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_quotes`
--
ALTER TABLE `client_quotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_quotes`
--
ALTER TABLE `client_quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=read\r\n2=unread\r\n3=delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `subject`, `email`, `date_time`, `message`, `status`) VALUES
(1, 'Elite Martin', 'dssf', 'zillur78489@gmail.com', '07:54:51 AM 02-Nov-2021', 'আমার গিগ গুলোর বয়স ৩ সপ্তাহ চলতেছে।\r\nতিনদিন আগে একজন ক্লায়েন্ট অর্ডার করলো এবং তা আমি ভালো ভাবেই ডেলিভারি করি কিন্তু ক্লাইন্ট কোনো রিভিউ দেয়নি!\r\nআমাকে সবাই সাজেস্ট করুন কিভাবে কাজ পেতে পারি,\r\nআর কোন কোন সময় এক্টিভ থাকতে পারি আমার কাছে সারাদিনে ২-৩ টা বায়ার রিকুয়েস্ট আসে।\r\nঅভিজ্ঞরা একটু সাহায্য করুন।\r\nধন্যবাদ', 2),
(3, 'Elite Martin', 'hello', 'zillur78489@gmail.com', '08:32:32 AM 03-Nov-2021', 'Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days.\r\n\r\nIs give may shall likeness made yielding spirit a itself together created after sea is in beast beginning signs open god you\'re gathering whose gathered cattle let. Creature whales fruit unto meat the life beginning all in under give two.\r\n\r\nDOWNLOAD CV', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

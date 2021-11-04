-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 03:53 PM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `link`, `image`, `status`) VALUES
(3, 'LET’S <br> INTRODUCE ABOUT<br> MYSELF', 'Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days. <br><br>\r\n\r\nIs give may shall likeness made yielding spirit a itself together created after sea is in beast beginning signs open god you\'re gathering whose gathered cattle let. Creature whales fruit unto meat the life beginning all in under give two.', 'http://zillur-web.unaux.com/', 'about-image.png', 'active');

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

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `o_time` varchar(200) NOT NULL,
  `o_email` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `city`, `phone`, `o_time`, `o_email`, `location`, `status`) VALUES
(2, 'West Raja Bazar, Tejgan', 'Dhaka , Bangladesh', '(+880)1724-343698', 'Sat to Thu 9am to 6 pm', 'zillur78489@gmail.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3070.7796705130545!2d90.38448590072427!3d23.754758804668857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1635778521827!5m2!1sen!2sbd\"  style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT 'default.png',
  `website_title` varchar(255) NOT NULL,
  `website_subtitle` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `logo`, `website_title`, `website_subtitle`, `status`) VALUES
(5, 'logo.png', 'ZILLUR-WEB', 'Web Developer', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner`
--

CREATE TABLE `home_banner` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_banner`
--

INSERT INTO `home_banner` (`id`, `owner_name`, `tagline`, `banner_image`, `status`) VALUES
(3, 'Zillur Ra.', 'Web Designer & Developer', 'home-banner-ri.png', 'active');

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
(1, 'Elite Martin', 'dssf', 'zillur78489@gmail.com', '07:54:51 AM 02-Nov-2021', 'আমার গিগ গুলোর বয়স ৩ সপ্তাহ চলতেছে।\r\nতিনদিন আগে একজন ক্লায়েন্ট অর্ডার করলো এবং তা আমি ভালো ভাবেই ডেলিভারি করি কিন্তু ক্লাইন্ট কোনো রিভিউ দেয়নি!\r\nআমাকে সবাই সাজেস্ট করুন কিভাবে কাজ পেতে পারি,\r\nআর কোন কোন সময় এক্টিভ থাকতে পারি আমার কাছে সারাদিনে ২-৩ টা বায়ার রিকুয়েস্ট আসে।\r\nঅভিজ্ঞরা একটু সাহায্য করুন।\r\nধন্যবাদ', 1),
(3, 'Elite Martin', 'hello', 'zillur78489@gmail.com', '08:32:32 AM 03-Nov-2021', 'Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days.\r\n\r\nIs give may shall likeness made yielding spirit a itself together created after sea is in beast beginning signs open god you\'re gathering whose gathered cattle let. Creature whales fruit unto meat the life beginning all in under give two.\r\n\r\nDOWNLOAD CV', 3);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `category` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `category`, `featured_image`, `link`, `status`) VALUES
(1, 'Ardaan', 'Web Design', 'featured-image-295.png', 'http://demo-zillur.ezyro.com/Ardaan/', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(10) NOT NULL,
  `result` tinyint(4) NOT NULL,
  `experience` varchar(4) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `title`, `year`, `result`, `experience`, `phone`, `status`) VALUES
(1, 'Web Design (Creative It)', '2018', 92, '3', '+8801724-343698', 'active'),
(2, 'Diploma In CSE', '2020', 94, '3', '+8801724-343698', 'active'),
(3, 'Web Development (PHP, Laravel)', '2021', 80, '3', '+8801724-343698', 'active'),
(4, 'Wordpress (Installation , Theme Customization )', '2020', 82, '3', '+8801724-343698', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `status`) VALUES
(1, 'Web Design', '<i class=\"fas fa-laptop-code\"></i> Portfolio & Business Template <br>\r\n<i class=\"fas fa-desktop\"></i> Domain & Hosting Website <br>\r\n<i class=\"fas fa-shopping-cart\"></i> eCommerce Website <br>\r\n<i class=\"fab fa-wordpress\"></i> Wordpress Theme Customization <br>', '<i class=\"fas fa-pencil-ruler\"></i>', 'active');

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

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `s_time` varchar(20) NOT NULL,
  `s_date` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active' COMMENT 'active\r\ndeactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `s_time`, `s_date`, `status`) VALUES
(1, 'zillur78489@gmail.com', '01-Nov-2021', '11:14:38 AM', 'active');

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
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_quotes`
--
ALTER TABLE `client_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner`
--
ALTER TABLE `home_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client_quotes`
--
ALTER TABLE `client_quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_banner`
--
ALTER TABLE `home_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

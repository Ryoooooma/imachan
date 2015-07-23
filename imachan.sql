-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 7 月 23 日 11:34
-- サーバのバージョン： 5.6.25
-- PHP Version: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imachan`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `ba_posts`
--

CREATE TABLE IF NOT EXISTS `ba_posts` (
  `  id` int(11) NOT NULL,
  `  user_id` int(11) NOT NULL,
  `  before_picture` varchar(500) NOT NULL,
  `  after_picture` varchar(500) NOT NULL,
  `  post_date` datetime NOT NULL,
  `  hair_style` varchar(100) NOT NULL,
  `  created` datetime NOT NULL,
  `  modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `pronounce` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `hair_style` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `user_mails`
--

CREATE TABLE IF NOT EXISTS `user_mails` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_recruit_post_id` int(11) DEFAULT NULL,
  `hair_style` varchar(100) DEFAULT NULL,
  `message` text,
  `date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `user_recruit_posts`
--

CREATE TABLE IF NOT EXISTS `user_recruit_posts` (
  `  id` int(11) NOT NULL,
  `  user_id` int(11) NOT NULL,
  `  title` varchar(100) NOT NULL,
  `  hair_style` varchar(100) NOT NULL,
  `  fee` varchar(10) NOT NULL,
  `  gender` varchar(10) NOT NULL,
  `  message` text,
  `  cut_date` datetime NOT NULL,
  `  created` datetime NOT NULL,
  `  modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ba_posts`
--
ALTER TABLE `ba_posts`
  ADD PRIMARY KEY (`  id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_mails`
--
ALTER TABLE `user_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_recruit_posts`
--
ALTER TABLE `user_recruit_posts`
  ADD PRIMARY KEY (`  id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ba_posts`
--
ALTER TABLE `ba_posts`
  MODIFY `  id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_mails`
--
ALTER TABLE `user_mails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_recruit_posts`
--
ALTER TABLE `user_recruit_posts`
  MODIFY `  id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

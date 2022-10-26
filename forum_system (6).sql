-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 05:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `topic`, `date_time_created`, `date_time_updated`) VALUES
(31, 20222600, 20221747, 'title 123', 'tanga ka ba ', '2022-10-26 11:20:00', '2022-10-26 11:36:58'),
(32, 20222600, 20221055, 'where did we go', 'banoooooo', '2022-10-26 11:34:00', '2022-10-26 11:34:00'),
(33, 20222681, 20225307, 'gago 123', 'tanga inutil tarantado 123', '2022-10-26 11:48:00', '2022-10-26 11:49:38'),
(34, 20226143, 20224231, 'hahaha', 'ha', '2022-10-26 11:52:00', '2022-10-26 11:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `question_1` varchar(100) NOT NULL,
  `answer_1` varchar(100) NOT NULL,
  `question_2` varchar(100) NOT NULL,
  `answer_2` varchar(100) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `question_1`, `answer_1`, `question_2`, `answer_2`, `date_time_created`, `date_time_updated`) VALUES
(11, 20222600, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', '12', '2022-10-26 11:19:53', '2022-10-26 11:19:53'),
(12, 20222681, 'What was your favorite food as a child?', '1', 'What was your first car?', '2', '2022-10-26 11:40:50', '2022-10-26 11:40:50'),
(13, 20226143, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', '1234', '2022-10-26 11:50:53', '2022-10-26 11:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`id`, `username`, `password`) VALUES
(10, 'sample', '$2y$10$DC/2Xv4TOdeXG4U62CuXaePrIWLyvbpReq4mLcNwhmwViAwQsP9fO');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(50) NOT NULL,
  `comment_id` int(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `user_id`, `topic_id`, `comment_id`, `comment`, `date_time_created`, `date_time_updated`) VALUES
(40, 20222600, 20221055, 202376829, 'haha gago', '2022-10-26 11:35:15', '2022-10-26 11:35:15'),
(41, 20222681, 20225307, 202358748, 'hahaha', '2022-10-26 11:48:35', '2022-10-26 11:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_type` int(11) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `image`, `username`, `password`, `user_type`, `date_time_created`, `date_time_updated`) VALUES
(31, 20222600, 'tizucit', 'nojecadub', 'dk.jpg', 'tite', '$2y$10$qxqXVjVFgVVpAZUjqJV9f.D3kDOEdeqBnLm6xcQ8WrEKs5fetsKD2', 1, '2022-10-26 11:17:34', '2022-10-26 11:17:34'),
(32, 20222681, 'luguza', 'tepik', 'ta.png', 'titeka', '$2y$10$RbYtcsVvjfZipSdERSheFekOchBC1GOEV9lsPzxj6bcq19Fp7yCUi', 0, '2022-10-26 11:40:44', '2022-10-26 11:40:44'),
(33, 20226143, 'sahajir', 'geporykez', 'mirana.jpg', 'ten', '$2y$10$agk.tgPAoOT2o32LlFj1euiALVYflz4sA.UvoDJiD96psi7VbxEOy', 0, '2022-10-26 11:50:49', '2022-10-26 11:50:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

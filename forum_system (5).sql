-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 07:11 PM
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
  `topic` varchar(250) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 20221056, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', '1', '2022-10-26 01:00:38', '2022-10-26 01:00:38');

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
(28, 20221056, 'posytovexuhaha', 'qipehydybehaha', 'ta.png', 'admin123', '$2y$10$VWoOxQKvJfOzUmccfdeDKecX3nfOIGck1uGT/XMfyBwAcv.MG3XuW', 1, '2022-10-26 01:00:34', '2022-10-26 01:00:34');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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

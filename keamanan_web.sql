-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2025 at 03:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keamanan_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(5, 'WindyAyuAnanda', 'MindyAnanda', '$2y$10$xUBq/6Na1cxwf04n460hyu/ogFwsA.YFH1qli9KxM9nWR56ZDqLfy'),
(11, 'julll', 'nurjulaikah', '$2y$10$0FP7n/cGtD0vk3LGODjVxu.OLEE18qLBZVplm4fwpAytovw2Tce8e'),
(13, 'MINSII', 'MINSII', '$2y$10$4F/aIW8ur6fVB3lALPOFKexrlGMfTSKrWu26wXAPJp8vboKpmhBK.'),
(14, 'jelita', 'jelita', '$2y$10$xVluWGva7Z6dDPjUJf7VZul.R.ujhsNpGJMPYwlD4oSQXCS4n.KFa'),
(15, 'AINUNJAMIL', 'AINUNJAMIL', '$2y$10$.p.AbBfp1ajvwzcg7n0biukdqaAIJaJyVnw2UxTwYlQmkpItcDYoe'),
(16, 'Karinaa', 'Karinaa', '$2y$10$ffd4eOx/qwHJcgGGwhdrGOOA9yoc1Gig3rPp0Hvcn2zGYHXMoELE6'),
(17, 'Jeje123', 'Jeje123', '$2y$10$cBBhC98a1lqiFsG6k/u0yuqwb3EjsTVGR9xSvx5F8Y05bH9rupSmi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

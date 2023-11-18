-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 12:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be20_cr4_dejankostandinovic_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be20_cr4_dejankostandinovic_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be20_cr4_dejankostandinovic_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `picture`, `type`) VALUES
(3, 'Product1', 62.16, 'https://cdn.pixabay.com/photo/2023/10/31/23/06/tiger-8356190_1280.jpg', 'book'),
(5, 'Poduct2', 26.41, 'https://cdn.pixabay.com/photo/2023/11/08/23/23/common-kingfisher-8376008_1280.jpg', 'book'),
(21, 'Product4', 20.00, 'https://cdn.pixabay.com/photo/2023/11/06/06/50/parrot-8368951_1280.png', 'dvd'),
(22, 'Product5', 29.08, 'https://cdn.pixabay.com/photo/2023/10/31/18/18/forest-8355748_1280.jpg', 'dvd'),
(23, 'Product6', 42.00, 'https://cdn.pixabay.com/photo/2023/10/20/13/48/tamarin-8329530_1280.png', 'dvd'),
(25, 'Product7', 54.00, 'https://cdn.pixabay.com/photo/2023/10/24/08/47/bird-8337757_1280.jpg', 'cd'),
(26, 'Product10', 32.00, 'https://cdn.pixabay.com/photo/2023/11/08/20/11/mountains-8375693_1280.jpg', 'cd'),
(27, 'Product9', 32.00, 'https://cdn.pixabay.com/photo/2023/11/07/05/06/babbler-8371029_1280.jpg', 'book');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

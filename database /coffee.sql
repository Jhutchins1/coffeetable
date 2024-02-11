-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2024 at 02:42 AM
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
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `brew`
--

CREATE TABLE `brew` (
  `id` int(11) NOT NULL,
  `style` varchar(100) NOT NULL,
  `temperature` varchar(100) NOT NULL,
  `flavor` varchar(100) NOT NULL,
  `milk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brew`
--

INSERT INTO `brew` (`id`, `style`, `temperature`, `flavor`, `milk`) VALUES
(1, 'latte', 'hot', 'regular', ''),
(2, 'Cold Brew ', 'Iced ', 'Mocha ', 'Whole Milk'),
(3, 'Espresso', 'Hot ', 'Hazelnut', 'Almond Milk'),
(4, 'Espresso', 'Hot ', 'Hazelnut', 'Almond Milk'),
(5, 'cold brew', 'iced', 'vanilla cream ', 'whole milk'),
(6, 'espresso', 'hot', 'cuban roast ', 'oat milk'),
(7, 'frappe ', 'frozen ', 'peppermint mocha ', 'skim milk'),
(8, 'americano ', 'iced', 'regular unsweetened ', 'almond milk '),
(9, 'regular brew', 'hot ', 'black ', 'none '),
(10, 'cafe au lait ', 'hot ', 'unsweetened ', 'whole milk'),
(11, 'macchiato ', 'iced', 'caramel ', 'oat milk ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brew`
--
ALTER TABLE `brew`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brew`
--
ALTER TABLE `brew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

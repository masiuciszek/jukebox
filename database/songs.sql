-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2019 at 01:34 AM
-- Server version: 5.7.24
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `songs`
--

-- --------------------------------------------------------

--
-- Table structure for table `songlist`
--

CREATE TABLE `songlist` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL,
  `link` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `songlist`
--

INSERT INTO `songlist` (`id`, `name`, `author`, `link`, `genre`, `views`, `created_at`) VALUES
(1, 'test2', 'author2', 'GllEDACUbNo', 'rap', 5, '2019-02-15 10:21:21'),
(2, 'Candy Shop', '50Cent', 'SRcnnId15BA', 'rap', 500000, '2019-02-15 10:23:11'),
(3, 'Just A Lil Bit', '50Cent', 'GllEDACUbNo', 'rap', 1500000, '2019-02-15 10:27:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songlist`
--
ALTER TABLE `songlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songlist`
--
ALTER TABLE `songlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

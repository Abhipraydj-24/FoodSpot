-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 06:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `Contact`, `password`, `cpassword`) VALUES
(26, ' Abhipray dayanand jawanjal', 'abhiprayjawanjal@24gmail.com', '9588442053', '$2y$10$hSxRX.wVKPVxPOSFwcvUUOcA/1Xgsqwd4fG98EPny8z2WCAOh88V.', '$2y$10$FzHyCglTyYg8VNyGUtBcweyVEnEquPbMQaeFTBtH2I9LE7wlT6ujW'),
(31, ' Nikhil Sanjay Kadam', 'nk4654@gmail.com', '7843256723', '$2y$10$uu3Z.TmiikxYDJWhT6YPf.loWdqeBZGmWfmCSUG2/s1dYf8bacbLm', '$2y$10$.k0eAQjwVxzM9tCLn4tiO.0JedY73N5ITKpXyL/Yc4MHiHUXQdmTS'),
(33, ' Pranav Pramod Supsande', 'pps22002@gmail.com', '7843256723', '$2y$10$DC4/txjeo8bmFliFOrJf0.r1eZPE5cvrUAhMfUX4Lk2vyH8kDMfjW', '$2y$10$YVROoU7i7..05GarkogqTe9GTOq7HkPjf9Fcs2BOiQSf30Ek4aFfC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 06:17 AM
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
-- Database: `ordermanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `order_id` int(255) NOT NULL,
  `name` text NOT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `contact` bigint(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `total` int(255) NOT NULL,
  `pay_mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`order_id`, `name`, `date_time`, `contact`, `address`, `city`, `state`, `pincode`, `country`, `total`, `pay_mode`) VALUES
(1, 'Abhipray dayanand jawanjal', '2021-07-05 16:09:49.541526', 9588442053, 'Plot No. 26 Mahalaxmi Nager-01', 'Nagpur', 'Maharashtra', 440024, 'India', 200, 'COD'),
(2, 'Nikhil Sanjay Kadam', '2021-07-05 16:17:45.040675', 8856999544, 'Plot No.21 Panchavati', 'Nashik', 'Maharashtra', 440098, 'India', 212, 'COD'),
(3, 'Abhipray dayanand jawanjal', '2021-07-05 16:51:22.410408', 9325296457, 'Plot No. 26 Mahalaxmi Nager-01', 'Nagpur', 'Maharashtra', 440024, 'India', 685, 'Pay Online'),
(4, 'Harshad ashok nikam', '2021-07-05 16:55:32.388756', 8976455321, 'Plot No.21 Panchavati', 'Nashik', 'Maharashtra', 440098, 'India', 229, 'Pay Online'),
(5, 'Nikhil Sanjay Kadam', '2021-07-05 17:00:45.178874', 9325296457, 'Plot No.21 Panchavati', 'Nashik', 'Maharashtra', 440098, 'India', 229, 'Pay Online'),
(6, 'Abhipray dayanand jawanjal', '2021-07-05 17:01:58.783205', 9588442053, 'Plot No. 26 Mahalaxmi Nager-01', 'Nagpur', 'Maharashtra', 440024, 'India', 229, 'Pay Online'),
(7, 'Pranav Pramod Supsande', '2021-07-07 06:09:19.414044', 7843256723, 'Plot No. 29 Mahalaxmi Nager-01', 'Nagpur', 'Maharashtra', 440024, 'India', 190, 'COD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

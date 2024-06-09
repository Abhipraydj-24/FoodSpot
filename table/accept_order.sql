-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 06:16 AM
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
-- Table structure for table `accept_order`
--

CREATE TABLE `accept_order` (
  `order_id` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `time` int(60) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accept_order`
--

INSERT INTO `accept_order` (`order_id`, `cname`, `time`, `d_name`, `d_contact`) VALUES
(1, ' Abhipray dayanand jawanjal', 45, 'Ashok Jaisawal', '7843256723'),
(7, ' Pranav Pramod Supsande', 35, 'sanjay bansode', '8976455321');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

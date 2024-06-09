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
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(100) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`order_id`, `itemname`, `price`, `quantity`) VALUES
(1, 'Nagpuri Poha', 60, 1),
(1, 'Misal Pav(Marathi: à¤®à¤¿à¤¸à¤³à¤ªà¤¾à¤µ) ', 120, 1),
(2, 'Santra barfi', 150, 1),
(2, 'Rasmalai [1 Piece]', 42, 1),
(3, 'Ultimate Savings Bucket', 665, 1),
(4, 'Double Cheese Veg Club Burger ', 209, 1),
(5, 'Double Cheese Veg Club Burger ', 209, 1),
(6, 'Double Cheese Veg Club Burger ', 209, 1),
(7, 'Nagpuri Poha', 60, 1),
(7, 'Steamed Rice Idli [2 Pieces]', 110, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

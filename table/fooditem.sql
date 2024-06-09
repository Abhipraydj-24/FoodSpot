-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 06:15 AM
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
-- Database: `fooddetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(150) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`id`, `name`, `price`, `category`, `description`, `image`) VALUES
(8, ' Peppy Paneer', '250', ' Fast Food', '   customizable Flavorful trio of juicy paneer, crisp capsicum with spicy red paprika', ' upload/Peppy Paneer.jpg'),
(9, 'McChickenâ„¢ Double Patty Burger Meal', '631', ' Fast Food', '2 McChicken Double Patty Burger + 2 Pizza McPuff + French Fries [Medium ] + 2 Coke [Medium]', ' upload/McChickenâ„¢ Double Patty Burger Meal.jpg'),
(12, 'Ultimate Savings Bucket', ' 665', ' Fast Food', 'Save 30% with our best-seller bucket of 4pc Hot & crispy chicken, 6 Hot Wings, 4 chicken strips , 3 Dips & a chilled Pepsi PET [serves 2-3 ]', ' upload/Ultimate Savings Bucket.jpg'),
(13, 'Double Cheese Veg Club Burger ', ' 209', ' Fast Food', 'Satisfy your super hunger cravings with Bigger and cheesier Veg Double Cheese burger made with freshly prepared Crispy Soya Patty, Cheese Patty, speci', ' upload/Double Cheese Veg Club Burger.jpg'),
(14, 'Paneer Tikka Sub', ' 195', ' Fast Food', 'Cottage cheese slices marinated with barbecue seasoning and roasted to a light crispness.', ' upload/Paneer Tikka Sub.jpg'),
(15, 'Kaju Burfi', ' 410', ' Sweet', ' Hira specials 2kg', ' upload/Kaju Burfi.jpg'),
(16, 'Special Thali', ' 140', ' Pure-Veg Food / Thali', ' Rice+3 roti+palak sabji+dal makhani+raita+sald+dry fruit kheer', ' upload/Specail Thali.jpg'),
(17, ' Veg Thali', ' 100', ' Pure-Veg Food / Thali', '3 Chapati+gravy sabji+sukhi bhaji+rice+dal+chutney', ' upload/veg thali.jpg'),
(18, 'Deluxe Veg Thali', ' 200', ' Pure-Veg Food / Thali', '2 Paratha+dal makhani+shahi paneer+raita+pulao+sweet [Subject to Availability]', ' upload/delux thali.jpg'),
(19, 'Super Deluxe Thali', ' 230', ' Pure-Veg Food / Thali', 'Dal makhani+shahi paneer+mixed veg+raita+pulao+butter naan+stuffed paratha+sweet [Subject to Availability]', ' upload/super delux thali.jpg'),
(20, 'Shahi Big Thali', ' 349', ' Pure-Veg Food / Thali', 'Dal Makhani+Paneer Dish+Mix Veg+2 Lachha Paratha+Veg Pulao+Papad+Salad+Raita+Gulab Jamun', ' upload/Shahi Big Thali.jpg'),
(21, 'Desi Ghee Gulab Jamun Lamba', ' 132', ' Sweet', 'Soft, melt-in-your-mouth, fried dumplings that are traditionally made of thickened or reduced milk and soaked in rose-flavored sugar syrup.', ' upload/Desi Ghee Gulab Jamun Lamba.jpg'),
(22, 'Rabri', ' 135', ' Sweet', 'This is all time favourite snacks loved by millions', ' upload/Rabri.jpg'),
(23, 'Rasmalai [1 Piece]', ' 42', ' Sweet', 'A delicious syrupy dessert made from chhenna and sugar.', ' upload/Rasmalai [1 Piece].jpg'),
(24, 'Santra barfi', ' 150', ' Sweet', '  Soft fudge made with juicy, pulpy oranges, ash gourd and creamy milk', ' upload/santrea barffi.jpg'),
(25, 'Masala Dosa', ' 150', ' Breakfast', 'Masala Dosa is made from rice, lentils, potato, fenugreek, ghee and curry leaves, and served with chutneys and sambar', ' upload/Masala Dosa.jpg'),
(26, 'Steamed Rice Idli [2 Pieces]', ' 110', ' Breakfast', 'Soft steamed rice and lentil batter cakes. Served with sambar and variety of chutneys.', ' upload/idli.jpg'),
(27, 'Mixed Vegetable Uttapam', ' 195', ' Breakfast', 'Fluffy rice and lentil based pancakes served with sambar and variety of chutneys.', ' upload/Mixed Vegetable Uttapam.jpg'),
(28, 'Vegetable Upma', ' 140', ' Breakfast', 'Steaming thick semolina porridge mixed with vegetables, mild aromatic herbs and spices.', ' upload/Vegetable Upma.jpg'),
(29, 'Vada Sambar', ' 60', ' Breakfast', '2 Pieces vada served with sambar', ' upload/Vada Sambar.jpg'),
(30, 'Nagpuri Poha', ' 60', ' Breakfast', 'Poha is flattened rice that is steam cooked with onions, spices and herbs.', ' upload/Nagpuri Poha.jpg'),
(31, 'Misal Pav(Marathi: à¤®à¤¿à¤¸à¤³à¤ªà¤¾à¤µ) ', ' 120', ' Breakfast', ' It consists of misal and pav . The final dish is topped with farsan or sev, onions, lemon and coriander (cilantro).', ' upload/Misal pav.jpg'),
(32, 'sambar vadi', ' 80', ' Breakfast', ' Sambar Vadi | Kothimbir Vadi | Coriander Crisp Rolls Â· Kothimbir Vadi is a famous savoury dish from Orange city Nagpur. This mouth watering snack is', ' upload/sambar Vadi.jpg'),
(33, 'Bombay Vada Pav', ' 40', ' Breakfast', 'The dish consists of a deep fried potato dumpling placed inside a bread bun sliced almost in half through the middle. It is generally accompanied with', ' upload/Bombay Vada Pav.jpg'),
(34, 'Chhole Bhature', ' 150', ' Breakfast', 'Chhole Bhature is a combination of chana masala and bhatura/Puri, a fried bread made from maida', ' upload/Chhole Bhature.jpg'),
(35, 'Deluxe Non Veg Thali', ' 400', ' Non-Veg Food / Thali', 'Chicken curry/mutton curry+raita+rice+salad+chutney+laccha paratha/butter naan+sweet', ' upload/Deluxe Non Veg Thali.jpg'),
(36, 'Tandoori Chicken', ' 150', ' Non-Veg Food / Thali', 'Traditional and the most favourite chicken delicacy which needs no explanation and we make it exactly the same traditional way', ' upload/Tandoori Chicken.jpg'),
(37, 'Non Veg Thali', ' 320', ' Non-Veg Food / Thali', 'Chicken curry/mutton curry+raita+rice+salad+chutney+laccha paratha/butter naan', ' upload/Non Veg Thali.jpg'),
(38, ' Special Chicken Biryani', ' 180', ' Non-Veg Food / Thali', 'Aromatic basmati rice with soft juicy boneless chicken cooked in blend of herbs.', ' upload/Special Chicken Biryani.jpg'),
(39, 'Egg Curry with 3 Roti Combo', ' 180', ' Non-Veg Food / Thali', 'Made using homestyle spices, the curry is thickened with cashews rich in good fats', ' upload/Egg Curry with 3 Roti Combo.jpg'),
(40, 'Veg Schezwan Hakka Noodles ', ' 140', ' Chinese Food', 'Veg Schezwan Hakka noodles are toss-fried and have a distinct Indo-Chinese flavor to them', ' upload/Veg Schezwan Hakka Noodles.jpg'),
(41, 'Veg Manchurian', ' 140', ' Chinese Food', 'Veg Manchurian is a tasty Indo Chinese dish of fried veggie balls in a spicy, sweet and tangy sauce', ' upload/Veg Manchurian.jpg'),
(42, 'Chilly Garlic Veg Fried Rice', ' 150', ' Chinese Food', ' it is very similar to the popular fried rice recipe and is typically served for lunch or dinner with indo chinese cuisine and manchurian gravies.', ' upload/Chilly Garlic Veg Fried Rice.jpg'),
(43, 'Paneer Momos ', ' 100', ' Chinese Food', 'Served with Spicy Red Chutney and Mayonnaise.', ' upload/Paneer Momos.jpg'),
(45, 'Mixed Sauce Pasta ', '  160  ', ' Chinese Food', ' A perfect balance of cheese and red sauce, mixed sauce pasta is slowly becoming a favourite across pasta lovers!', ' upload/Mixed Sauce Pasta.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fooditem`
--
ALTER TABLE `fooditem`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

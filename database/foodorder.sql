-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 07:44 PM
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
-- Database: `foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Mobile`, `Subject`, `Message`) VALUES
('Mashook Mohammad Meshkat', 'mashook@gmail.com', '01775725487', 'Food Quality Issue', 'I did not like the pizza as it was too much spicy than what I ordered for.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('Mashook', 'Mashook Mohammad Meshkat', 'mashook@gmail.com', '01775725487', 'Mohakhali DOHS', 'Mashook');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(1, 'Latte', 255, 'Prepared with espresso & steamed milk', 1, 'images/fooditems/northend_latte.jpg', 'ENABLE'),
(2, 'Iced Americano', 220, 'Iced version of americano', 1, 'images/fooditems/northend_icedamericano.jpg', 'ENABLE'),
(3, 'Brownie', 100, 'A north end classic - our dark & rich chocolate brownie', 1, 'images/fooditems/northend_brownie.jpg', 'ENABLE'),
(4, 'Chocolate Chip', 150, 'The soft & chewy, classic american cookie with european-quality dark chocolate', 1, 'images/fooditems/northend_chocolatechip.jpg', 'ENABLE'),
(5, 'Crimson Cup Mocha', 410, '473 ml - Blended goodness in a cup made of white chocolate, swirls of caramel, whole milk, freshly brewed cold brew with crimsoncup specialty.', 2, 'images/fooditems/crimsoncup_mocha.jpg', 'ENABLE'),
(6, 'Italian Chicken', 300, 'Great combination of egg, chicken salami in 3 layers of toasted bread with cheese', 2, 'images/fooditems/crimsoncup_italianchicken.jpg', 'ENABLE'),
(7, 'Cafe Mocha', 276, '355 ml - Gourmet chocolate, steamed milk & espresso', 2, 'images/fooditems/crimsoncup_cafemocha.jpg', 'ENABLE'),
(8, 'Cafe Mocha Freeze', 391, '473 ml - Blended goodness in a cup made of bittersweet mocha sauce, whole milk, freshly brewed cold brew with crimsoncup specialty.', 2, 'images/fooditems/crimsoncup_cafemochafreeze.jpg', 'ENABLE'),
(12, 'Pizza', 800, 'Savory Margherita: Fresh mozzarella, ripe tomatoes, basil on thin crust', 3, 'images/fooditems/Pizza.jpeg', 'ENABLE'),
(13, 'Burger', 300, 'Classic Cheeseburger: Juicy patty, melted cheese, crisp lettuce, irresistible perfection', 3, 'images/fooditems/Burger.jpeg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('NzAkib', 'Nahiduzzaman Akib', 'nakibbd.q@gmail.com', '01834469774', 'Mohakhali', 'Akib'),
('QAR', 'Quazi Ashikur Rahman', 'ext.ashikur.rahman@bracu.ac.bd', '01234567890', 'BRACU', '12345'),
('Ramisa', 'Ramisa Anjum', 'ramisaanjum@gmail.com', '01823679025', 'Banani', 'Ramisa');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(1, 4, 'Chocolate Chip', 150, 1, '2023-12-08', 'Mashook', 1),
(2, 3, 'Brownie', 100, 1, '2023-12-08', 'Mashook', 1),
(3, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1),
(4, 1, 'Latte', 255, 1, '2023-12-10', 'Mashook', 1),
(5, 2, 'Iced Americano', 220, 2, '2023-12-10', 'Mashook', 1),
(6, 2, 'Iced Americano', 220, 2, '2023-12-10', 'Mashook', 1),
(7, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1),
(8, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1),
(9, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1),
(10, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1),
(11, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1),
(12, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1),
(13, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1),
(14, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1),
(15, 2, 'Iced Americano', 220, 1, '2023-12-10', 'Mashook', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'North End', 'northend@gmail.com', '01313361600', 'Road # 86, Gulshan 2, Dhaka 1212', 'NzAkib'),
(2, 'Crimson Cup Coffee', 'marketing@crimsoncup.com', '01911337012', 'House:02, Rd 24, Dhaka 1212', 'Ramisa'),
(3, 'Ashik & Sahib\'s Food Corner', 'ashik.sahib@gmail.com', '01234567890', 'BRACU', 'QAR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

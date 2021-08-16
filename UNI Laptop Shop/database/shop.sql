-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 08:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` text NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Apple', '2021 Apple MacBook Pro', '2,40,990', './assets/products/a1.jpg', '2020-03-28 11:08:57'),
(2, 'Apple', '2020 Apple MacBook Air', '99,990', './assets/products/a2.jpg', '2020-03-28 11:08:57'),
(3, 'Apple', '2020 Apple MacBook Pro', '2,20,990', './assets/products/a3.jpg', '2020-03-28 11:08:57'),
(4, 'Apple', '2019 Apple MacBook Air', '90,190', './assets/products/a4.jpg', '2020-03-28 11:08:57'),
(5, 'Apple', '2019 Apple MacBook Pro', '2,05,990', './assets/products/a5.jpg', '2020-03-28 11:08:57'),
(6, 'ASUS', 'ASUS VivoBook 14 (2020)', '35,990', './assets/products/as1.jpg', '2020-03-28 11:08:57'),
(7, 'ASUS', 'ASUS VivoBook Ultra 15', '44,890', './assets/products/as2.jpg', '2020-03-28 11:08:57'),
(8, 'Dell', 'Dell Inspiron 15 5000', '75,000', './assets/products/d5.jpg', '2020-03-28 11:08:57'),
(9, 'Dell', 'Dell Inspiron 5502', '80,000', './assets/products/d7.jpg', '2020-03-28 11:08:57'),
(10, 'Dell', 'Dell Inspiron 5301', '64,990', './assets/products/d4.jpg', '2020-03-28 11:08:57'),
(11, 'HP', 'HP 15 (2021)', '37,490', './assets/products/h1.jpg', '2020-03-28 11:08:57'),
(12, 'Dell', 'Dell Inspiron 5408', '69,950', './assets/products/d3.jpg', '2020-03-28 11:08:57'),
(13, 'Dell', 'Dell Vostro 3401', '49,590', './assets/products/d1.jpg', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Unmesh', 'Jathar', '2020-03-28 13:07:17'),
(2, 'Gayatri', 'Jathar', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

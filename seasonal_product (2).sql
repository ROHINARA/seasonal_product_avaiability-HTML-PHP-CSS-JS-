-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 10:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seasonal_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `p_id` int(5) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Product Name` varchar(50) NOT NULL,
  `Unit Price` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`p_id`, `Image`, `Product Name`, `Unit Price`, `Quantity`, `Description`) VALUES
(100, 'products_image/e469c2e2e30c5a744ed9637f530afe71rice1.jpg', 'Rice', '60', '200', ' Rice is our staple food. Our 80% land is cultivat'),
(102, 'products_image/9e5f9309fc6ed046ef45ffd70c88b658sugercane1.jpg', 'sugercane', '80', '500', 'Sugar-cane is an important food-crop of our countr'),
(104, 'products_image/aea6fe9898c36e2a3a4492257f522c27guava.jpg', 'Guava', '80', '300', 'Guava  is a common tropical fruit cultivated in ma'),
(106, 'products_image/aa18ee8aad93aef4f6e540d8b5a2e1c0watermelon.jpg', 'Watermelon', '60', '200', 'Summer is the season for watermelons! The sweet re'),
(107, 'products_image/a9d5d06d8df42b347bc63f39350f60b6pineapple.jpg', 'Pineaapple', '80', '200', 'Pineapple is one of the most important commercial '),
(109, 'products_image/6f10c27c65f8304d76ca95079ed85710penut.jpg', 'Penut', '80', '200', 'In Bangladesh peanut or groundnut or cheena badam '),
(110, 'products_image/66ed17cee7661b19340f74c086f4fca34.jpg', 'Mango', '120', '500', 'The mango of Bangladesh from these areas is famous'),
(111, 'products_image/e7c026832295db3238385cc1024c0a6aorange.jpg', 'Orange', '150', '200', 'Each kg of orange contains about 490 calorie of en'),
(112, 'products_image/826c549c94d783430d64a3c90fe57e1bpromegranate.jpg', 'pomegranate', '150', '100', 'Pomegranate Growing Increasingly Popular in Bangla'),
(113, 'products_image/668e10b4af39595e4a5e7fb29a7f1654b1.png', 'Blackberry', '80', '100', 'You can also use these versatile fruits in baked g'),
(114, 'products_image/bb4c808768899a0cd772791a72831db2liche.jpg', 'Lytche', '300', '200', 'The lychee has a history of cultivation going back'),
(115, 'products_image/b43cc7b5441c167fef262c36a7e984bbcarrots.jpg', 'Carrot', '80', '300', 'carrot is avaiable in winter season.'),
(116, 'products_image/a7eb79aad2deaab2a6ba4b3ef9b5878a2.jpg', 'fghj', '456', '500', 'erwtyuidfghjkgff'),
(117, 'products_image/891c0dc1960f0d0f3349ec6a908c0ce7home.jpg', 'Stoberry', '50', '80', 'wertyuiojbh');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Aid` int(40) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Aid`, `Name`, `Password`) VALUES
(1, 'Sharmin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amt` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(1, 1, '0', 1, 'dewd', 'dwe', 23, 1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(50) NOT NULL,
  `product_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `product_cat`) VALUES
(1, 'Fruits'),
(2, 'Vegetables'),
(3, 'Crops');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `id` int(5) NOT NULL,
  `login_name` varchar(100) NOT NULL,
  `login_password` int(250) NOT NULL,
  `login_email` varchar(200) NOT NULL,
  `login_address` varchar(200) NOT NULL,
  `login_phone` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`id`, `login_name`, `login_password`, `login_email`, `login_address`, `login_phone`) VALUES
(16, 'shar', 123, 'shar@gmail.com', 'User', 123445),
(17, 'Nusrat', 12345678, 'Nusrat@gmail.com', '', 1830798839),
(18, 'tasnuva', 0, 'tasnuva@gmail.com', '', 1234567890),
(19, 'sumaiya', 25, 'sumaiya@gmail.com', '', 183079883),
(20, 'tanha', 123456789, 'tanha@gmail.com', '', 1830798839),
(21, 'tanha', 123456789, 'tanha2@gmail.com', '', 1830798839),
(22, 'Nishat', 123456789, 'sharmin2@gmail.com', '', 1234567890),
(23, 'sharmin', 123456789, 'sharmin@gmail.com', '', 1830798839),
(24, 'Nupur', 123456789, 'Nupur@gmail.com', '23/8A,mirpur-1,Dhaka', 1830798839),
(25, 'Aunty', 123456789, 'a@gmail.com', '24/8A mirpur', 1234567890),
(26, 'sultana', 2147483647, 'sultana@gmail.com', 'htfyvtfvyjt', 1914437824),
(27, 'rohin', 987654321, 'rohin@gmail.com', 'mymensingh', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(60) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pro_id` int(100) NOT NULL,
  `qnty` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `user_id`, `pro_id`, `qnty`, `total`) VALUES
(174, 27, 107, 30, 2400),
(175, 27, 102, 67, 5360),
(179, 23, 100, 45, 2700);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `trx_id` int(50) NOT NULL,
  `u_id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_title` varchar(250) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_qnt` varchar(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_qnt`, `product_desc`, `product_image`) VALUES
(3, 0, 'Mango', '60', '100', '<p>SXCV&nbsp;</p>', ''),
(4, 2, 'Mango', '60', '100', '<p>ryuiop[ghjkl;</p>', ''),
(5, 2, 'Mango', '60', '100', '<p>ryuiop[ghjkl;</p>', ''),
(6, 3, 'Mango', '60', '233', '<p>awertyuiop</p>', ''),
(7, 2, 'asdf', '55', '9999', '<p>bjhb</p>', ''),
(8, 2, 'asdf', '55', '9999', '<p>bjhb</p>', ''),
(9, 1, 'asdf', '8', '100', '<p>hhhh</p>', ''),
(10, 2, 'Mango', '55', '2222', '<p>hhhh</p>', ''),
(11, 2, 'Mango', '55', '2222', '<p>hhhh</p>', ''),
(12, 2, 'Mango', '55', '2222', '<p>hhhh</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `slogin_table`
--

CREATE TABLE `slogin_table` (
  `id` int(50) NOT NULL,
  `login_name` varchar(100) NOT NULL,
  `login_password` varchar(250) NOT NULL,
  `login_email` varchar(200) NOT NULL,
  `login_phone` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin_table`
--

INSERT INTO `slogin_table` (`id`, `login_name`, `login_password`, `login_email`, `login_phone`) VALUES
(1, 'Nusrat', '12345678', 'Nusrat@gmail.com', 1830798839);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD UNIQUE KEY `trx` (`trx_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `slogin_table`
--
ALTER TABLE `slogin_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `p_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Aid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `trx_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slogin_table`
--
ALTER TABLE `slogin_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

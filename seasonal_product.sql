-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 12:01 AM
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
  `id` int(5) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Product Name` varchar(50) NOT NULL,
  `Unit Price` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `Image`, `Product Name`, `Unit Price`, `Quantity`, `Description`) VALUES
(68, 'products_image/74d6b3e845b0b600fe2a9f7f2bb844121.jpg', 'tomato', '700tk', '400', 'rdfghj'),
(69, 'products_image/a6936a26101c808bb82f78dc4d10f3d41.jpg', 'tomato', '700tk', '400', 'rdfghj'),
(70, 'products_image/67515e93ba361c2611fedfd284cc76eb1.jpg', 'tomato', '08765', '123456', 'wwewrtyui'),
(71, 'products_image/4a4f9624a2ee3d1b1584d5577217c39a1.jpg', 'tomato', '08765', '123456', 'wwewrtyui'),
(72, 'products_image/a4a74f03028c175d90b1d845d18bac431.jpg', 'tomato', '08765', '123456', 'wwewrtyui'),
(73, 'products_image/1c704c5c7cbc1f982aa43f692b9ae4fdda.jpg', 'tomato', '567', '566787', 'erwdfhj');

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
  `login_type` varchar(200) NOT NULL,
  `login_phone` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`id`, `login_name`, `login_password`, `login_email`, `login_type`, `login_phone`) VALUES
(1, 'shar', 123, 'f@gmail', 'Admin', 18762),
(2, 'wqw', 123, 'wse', '-1', 1334),
(3, 'nusrat', 123, 'wdwr', 'Admin', 1334),
(4, 'nusu', 123, 'n@gmail.com', 'Admin', 12345),
(5, 'rohin', 123, 'R@g.commail', '-1', 12345);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

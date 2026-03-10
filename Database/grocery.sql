-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2025 at 08:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` varchar(30) NOT NULL,
  `user_id` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_cart`
--

INSERT INTO `add_cart` (`id`, `name`, `image`, `price`, `user_id`) VALUES
(48, 'Green Mango', 'images (3).jpeg', '100', 28),
(49, 'Potato', '16904473232.jpg', '30', 28),
(50, 'SANDUKANI RAISINS (KISHMISH)', 'qojuc_512.jpg', '500', 28);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `odear_now`
--

CREATE TABLE `odear_now` (
  `id` int(20) NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `quentity` int(20) NOT NULL,
  `rupees` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mobile` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `odear_now`
--

INSERT INTO `odear_now` (`id`, `name`, `image`, `quentity`, `rupees`, `total`, `pay_method`, `address`, `mobile`, `user_id`) VALUES
(5, 'Green Mango', 'images (3).jpeg', 1, 100, 100, 'Cash on Delivery', 'junagadh', '123456789', 28);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `image`) VALUES
(16, 'Green Mango', 'Fruit', 100, 'images (3).jpeg'),
(19, 'Mango', 'Fruit', 350, 'mangoes-alponce-2.jpg'),
(20, 'Banana', 'Fruit', 50, 'd62c6fab8756a07ce13d30059120cc32.jpg'),
(23, 'Kiwi', 'Fruit', 100, '360_F_1577230598_OZldecNWu53rBMepPLGJd91db2xPkuEz.jpg'),
(24, 'Dragon fruit', 'Fruit', 250, 'images (1).jpeg'),
(26, 'Orange', 'Fruit', 100, 'Tangerine-SpotlessFruitsIndia_1024x1024.webp'),
(28, ' Strawberry', 'Fruit', 150, 'images (5).jpeg'),
(32, 'Green Draksh', 'Fruit', 80, 'grapes-500x500.webp'),
(33, 'Tomato', 'Vegetable', 50, 'red-tomato-vegetable-with-cut-isolated_127657-2224.jpg'),
(34, 'Green cabbage', 'Vegetable', 20, 'green-cabbage-vegetable-isolated-white-background_42033-129.jpg'),
(36, 'Potato', 'Vegetable', 30, '16904473232.jpg'),
(37, 'Red Capsicum Chilli', 'Vegetable', 130, 'red-capsicum-500x500.webp'),
(38, 'Red Chilli', 'Vegetable', 70, '1iVCJLbFAEM_bpHZQDq2FNg5t8xiOa7aX.webp'),
(39, 'Cucumber', 'Vegetable', 40, 'cucumber-500x500.webp'),
(40, 'Mooli', 'Vegetable', 35, 'sliced-white-radish.jpeg'),
(41, 'Bottle Gourd (Dudhi)', 'Vegetable', 30, 'dudi.webp'),
(42, 'kaju', 'Drayfood', 670, 'cashew-nuts-jumbo-1-500x500.webp'),
(43, 'Badam', 'Drayfood', 950, '-5dt89lnx.jpg'),
(44, 'SANDUKANI RAISINS (KISHMISH)', 'Drayfood', 500, 'qojuc_512.jpg'),
(45, ' AKHROT', 'Drayfood', 350, 'IMG_9520-1.jpg'),
(46, 'BLACK RAISINS (BLACK DRAKSH) ', 'Drayfood', 300, 'black-raisin-500x500.webp'),
(47, 'KHAJOOR', 'Drayfood', 700, 'istockphoto-478917283-612x612.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'krish', 'krish@gamil.com', '1122'),
(28, 'Rutvik', 'Rutvik@gmail.com', '1234'),
(32, 'Raj', 'raj@gmail.com', '11223344');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `message`) VALUES
(1, 'Kumar', 'Kumar@gamil.com', 'Best fruit and vegetable in this shop'),
(14, 'Rohit', 'rohit@gmail.com', 'The best fruit in this shope'),
(18, 'krish', 'krish@1233', 'hfgh'),
(19, 'Chili', 'krish@1233', 'wbddg'),
(20, 'krish', 'krish@1233', 'Very good'),
(21, 'krish', 'krish@1233', 'Very good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cart`
--
ALTER TABLE `add_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odear_now`
--
ALTER TABLE `odear_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cart`
--
ALTER TABLE `add_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `odear_now`
--
ALTER TABLE `odear_now`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

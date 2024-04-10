-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 06:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mega_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `p_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `Product_price` int(11) NOT NULL,
  `product_type` varchar(111) NOT NULL,
  `product_images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`p_id`, `product_name`, `Product_price`, `product_type`, `product_images`) VALUES
(1, 'Watermelon', 100, 'Seeds', 'images/productimg/watermelon-Product.jpg'),
(2, 'Bringal', 200, 'Seeds', 'images/productimg/brinjal-product.jpg'),
(3, 'Neem Powder', 300, 'Nutrients', 'images/productimg/neem.webp'),
(4, 'Amino Acid Nutrients', 200, 'Nutrients', 'images/productimg/acid.jpeg'),
(5, 'Coragen', 100, 'Insecticides', 'images/productimg/coragen.webp'),
(6, 'Admire', 150, 'Insecticides', 'images/productimg/Admire.webp'),
(7, 'Ferterra', 170, 'Insecticides', 'images/productimg/freterra.webp'),
(8, 'Simodis', 130, 'Insecticides', 'images/productimg/simodis.webp'),
(9, 'Lemon', 350, 'Seeds', 'images/productimg/lemon-product.jpg'),
(10, 'wheat', 240, 'Seeds', 'images/productimg/wheat-product.jpg'),
(11, 'Humic-Acid', 120, 'Nutrients', 'images/productimg/Humic_Acid.webp'),
(12, 'Humic-Granules', 170, 'Nutrients', 'images/productimg/Humic_Granules.webp');

-- --------------------------------------------------------

--
-- Table structure for table `addproduct1`
--

CREATE TABLE `addproduct1` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `Product_price` int(100) NOT NULL,
  `images` varchar(111) NOT NULL,
  `add_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct1`
--

INSERT INTO `addproduct1` (`id`, `product_name`, `Product_price`, `images`, `add_info`) VALUES
(1, 'Watermelon', 100, 'images/productimg/watermelon-Product.jpg', 'Watermelon Seeds'),
(2, 'Bringal', 200, 'images/productimg/brinjal-product.jpg', 'Brinjal Seeds'),
(3, 'Neem Powder', 300, 'images/productimg/neem.webp', 'neem powder'),
(4, 'Amino Acid Nutrients', 200, 'images/productimg/acid.jpeg', 'Amino Acid nutrients'),
(5, 'Coragen', 100, 'images/productimg/coragen.webp', 'Coragen Insecticides'),
(6, 'Admire', 150, 'images/productimg/Admire.webp', 'Admire Insecticides'),
(7, 'Ferterra', 170, 'images/productimg/freterra.webp', 'Ferteraa insecticides'),
(8, 'Simodis', 130, 'images/productimg/simodis.webp', 'good'),
(9, 'Lemon', 350, 'images/productimg/lemon-product.jpg', 'Lemon Seed for planting'),
(10, 'wheat', 240, 'images/productimg/wheat-product.jpg', 'wheat'),
(11, 'Humic-Acid', 120, 'images/productimg/Humic_Acid.webp', 'Acid'),
(12, 'Humic-Granules', 170, 'images/productimg/Humic_Granules.webp', 'Granules');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `address` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `name`, `age`, `mobile_number`, `address`, `username`, `password`) VALUES
(1, 'Dhiraj Shiwankar', 20, 2147483647, 'sendurwafa sakoli', 'dhiraj1122', 12345),
(2, 'khushi', 20, 2147483647, 'sendurwafa sakoli', 'khushi1122', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `farmerbooking`
--

CREATE TABLE `farmerbooking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobileNumber` int(11) NOT NULL,
  `address` varchar(111) NOT NULL,
  `product` varchar(100) NOT NULL,
  `rate` int(11) NOT NULL,
  `type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmerbooking`
--

INSERT INTO `farmerbooking` (`id`, `name`, `mobileNumber`, `address`, `product`, `rate`, `type`) VALUES
(1, 'Durgesh Hukare', 2147483647, 'Sakoli Bhandara', 'hmt', 3000, ''),
(2, 'Durgesh Hukare', 2147483647, 'sendurwafa sakoli', 'hmt', 40000, ''),
(3, 'Durgesh Hukare', 2147483647, 'Sakoli Bhandara', 'hmt', 20000, ''),
(4, 'Durgesh Hukare', 123, 'Sakoli Bhandara', 'hmt', 40000, ''),
(5, 'khushi Kirana', 2147483647, 'Sakoli Bhandara', 'hmt', 40000, 'Rice'),
(6, 'Durgesh Hukare', 43564798, 'Sakoli Bhandara', 'hmt', 40000, 'Rice'),
(7, 'khushi Kirana', 1234567890, 'sendurwafa sakoli', 'hmt', 40000, 'Rice'),
(8, 'Durgesh Hukare', 2147483647, 'Sakoli Bhandara', 'hmt', 20000, 'Wheat'),
(9, 'khushi Kirana', 1234567890, 'sendurwafa sakoli', 'hmt', 40000, 'Rice'),
(10, 'khushi Kirana', 1234567890, 'sendurwafa sakoli', 'hmt', 40000, 'Rice'),
(11, 'khushi Kirana', 1234567890, 'sendurwafa sakoli', 'hmt', 40000, 'Rice'),
(12, 'khushi', 43564798, 'sendurwafa sakoli', 'wheat', 20000, 'Wheat'),
(13, 'khushi', 43564798, 'sendurwafa sakoli', 'wheat', 20000, 'Wheat'),
(14, 'Rohini Zode', 1234567890, 'sendurwafa sakoli', 'Tomato', 3000, 'Vegetable');

-- --------------------------------------------------------

--
-- Table structure for table `labour_registration`
--

CREATE TABLE `labour_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `age` int(11) NOT NULL,
  `mobileNumber` int(11) NOT NULL,
  `address` varchar(111) NOT NULL,
  `gender` varchar(11) NOT NULL DEFAULT 'gender',
  `type` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `labour_registration`
--

INSERT INTO `labour_registration` (`id`, `name`, `age`, `mobileNumber`, `address`, `gender`, `type`, `username`, `password`) VALUES
(1, 'Rohini Zode ', 20, 1234561234, 'sendurwafa sakoli', 'female', 'Harvesting', 'rohini1122', '12345'),
(2, 'durgesh hukare', 22, 1234567, 'sendurwafa sakoli', 'male', 'Harvesting', 'durgesh', '1122'),
(3, 'khushi ', 20, 122456879, 'sendurwafa', 'female', 'Crop Cultivation', 'Khushi00', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `mediapost`
--

CREATE TABLE `mediapost` (
  `id` int(11) NOT NULL,
  `farmer_name` varchar(100) NOT NULL,
  `crop_name` varchar(100) NOT NULL,
  `crop_quantity` int(111) NOT NULL,
  `planting_date` varchar(111) NOT NULL,
  `harvest_date` varchar(111) NOT NULL,
  `location` varchar(222) NOT NULL,
  `image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mediapost`
--

INSERT INTO `mediapost` (`id`, `farmer_name`, `crop_name`, `crop_quantity`, `planting_date`, `harvest_date`, `location`, `image`) VALUES
(0, 'khushi chaudhari', 'Banana', 11, '2024-03-18', '2024-07-15', 'bhandara', 'images/socialimg/banana1.jpg'),
(0, 'Durgesh Hukare', 'tomato', 11, '2024-03-18', '2024-05-18', 'sakoli', 'images/socialimg/tomatoes-product.jpg'),
(0, 'Dhiraj Shiwankar', 'Brinjal', 11, '2024-03-19', '2024-06-19', 'Sondad', 'images/socialimg/brinjal1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `transaction_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `services` varchar(111) NOT NULL,
  `amount` int(100) NOT NULL,
  `date_time` int(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopkeepers`
--

CREATE TABLE `shopkeepers` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(222) NOT NULL,
  `full_name` varchar(222) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile_number` int(22) NOT NULL,
  `address` varchar(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopkeepers`
--

INSERT INTO `shopkeepers` (`id`, `shop_name`, `full_name`, `age`, `mobile_number`, `address`, `username`, `password`) VALUES
(1, 'medi', 'Dhiraj shiwankar', 22, 2147483647, 'sendurwafa sakoli', 'dhiraj1122', '12345'),
(2, 'khushi Kirana', 'khushi', 50, 1234567890, 'sendurwafa sakoli', 'khushi', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `wholesalerregistration`
--

CREATE TABLE `wholesalerregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `mobileNumber` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(222) NOT NULL,
  `quantity` varchar(111) NOT NULL,
  `rate` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wholesalerregistration`
--

INSERT INTO `wholesalerregistration` (`id`, `name`, `age`, `mobileNumber`, `address`, `type`, `quantity`, `rate`, `username`, `password`) VALUES
(1, 'Durgesh Hukare', 21, 2147483647, 'Sakoli Bhandara', 'Rice', 'Maximun 1 Tun', 40000, 'durgesh1234', '12345'),
(2, 'Dhiraj Shiwankar', 21, 2147483647, 'sendurwafa sakoli', 'Wheat', 'Maximun 1 Tun', 40000, 'dhiraj12345', '12345'),
(3, 'Rohini Zode', 21, 2147483647, 'sendurwafa sakoli', 'Vegetable', 'Maximun 1 Tun', 20000, 'rohini12345', '1234'),
(4, 'Durgesh Hukare', 21, 2147483647, 'Sakoli Bhandara', 'Vegetable', 'Maximun 1 Tun', 3000, 'durgesh1234', '1122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `addproduct1`
--
ALTER TABLE `addproduct1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmerbooking`
--
ALTER TABLE `farmerbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour_registration`
--
ALTER TABLE `labour_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wholesalerregistration`
--
ALTER TABLE `wholesalerregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `addproduct1`
--
ALTER TABLE `addproduct1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmerbooking`
--
ALTER TABLE `farmerbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `labour_registration`
--
ALTER TABLE `labour_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shopkeepers`
--
ALTER TABLE `shopkeepers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wholesalerregistration`
--
ALTER TABLE `wholesalerregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

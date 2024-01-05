-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 02:19 PM
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
-- Database: `allianzlaptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_image`) VALUES
(1, 'lenovo', 'images/lenovo.png'),
(2, 'hp', 'images/hp.png'),
(3, 'dell', 'images/dell.png'),
(4, 'asus', 'images/asus.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_desc` varchar(100) NOT NULL,
  `prod_amt` float NOT NULL,
  `prod_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `brand_id`, `prod_name`, `prod_desc`, `prod_amt`, `prod_image`) VALUES
(1, 2, 'Hp EliteBook', '840 G5 Intel Core I5-16GB RAM/1TB SSD/Backlit Keyboard/FP Reader Wins 11', 450000, 'uploads/hp840.jpg'),
(2, 2, 'Hp Stream', '11 Intel Celeron 4GB RAM- 64GB HDD WIN 10+ USB LIGHT FOR KEYBOARD', 165000, 'uploads/hpstream.jpg'),
(3, 2, 'Hp PAVILION GAMING', '15 11TH GEN INTEL CORE I5 8GB RAM 512GB SSD RTX 3050 15.6\" FHD WINS 11', 890000, 'uploads/hppav.jpg'),
(4, 3, 'DELL Vostro', '15-inch Laptop- Intel Core I3- 12GB RAM 11th GEN 512 SSD - Windows 11+USB Light', 400000, 'uploads/dellvostro.jpg'),
(5, 3, 'DELL Latitude', '3150 Intel Pentium 4GB RAM, 500GB HDD Windows 10 + Keyboard Flash Light', 180000, 'uploads/delllat.jpg'),
(6, 3, 'DELL XPS', '15\' 9530 13TH GEN CI7 512GB 16GB 4GB INTEL ARC GRAPHICS', 1300000, 'uploads/dellxps.jpg'),
(7, 1, 'Lenovo Ideapad', 'Intel Celeron 256 SSD 4GB RAM Win 10 PRO', 250000, 'uploads/lenovoidea.jpg'),
(8, 1, 'Lenovo IDEAPAD', '15 12TH GEN INTEL CORE I5 8GB RAM 256GB SSD 15.6\"FHD INTEL IRIS XE GRAPHICS WINS 11', 500000, 'uploads/lenovopad.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 07:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promotion_ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` char(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `description`) VALUES
('1', 'Alibaba', ''),
('2', 'Amazon', ''),
('3', 'Nike', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` char(250) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `description`) VALUES
('1', 'Clothes', ''),
('2', 'Shoes', ''),
('3', 'Accessories', '');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `user_id` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`user_id`, `company_name`, `province`, `phone`, `description`) VALUES
(9, 'Promotion Ads', '0003', '0969604049', '');

-- --------------------------------------------------------

--
-- Table structure for table `manage_promotion`
--

CREATE TABLE `manage_promotion` (
  `promotion_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` char(255) NOT NULL,
  `brand_id` char(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `size_id` char(255) DEFAULT NULL,
  `user_id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `manage_promotion`
--

INSERT INTO `manage_promotion` (`promotion_id`, `product_name`, `category_id`, `brand_id`, `price`, `discount`, `description`, `size_id`, `user_id`, `location`, `phone`) VALUES
(1001, 'Jack & Jones Men T-shirt (Blue)', '1', '1', '15.00', '50', 'The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.', '001', 9, 'Phnom Penh, less than 1 km from Tuol Sleng Genocide Museum and 1.1 km from Royal Palace Phnom Penh', '969604049 / 66280228 / 129966100');

-- --------------------------------------------------------

--
-- Table structure for table `manage_user`
--

CREATE TABLE `manage_user` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `manage_user`
--

INSERT INTO `manage_user` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
(9, 'System', 'Admin', 'System Admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `province_id` char(255) NOT NULL,
  `province_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`province_id`, `province_name`) VALUES
('0003', 'Battombong'),
('0004', 'Kompong Thom'),
('0001', 'Phnom Penh'),
('0002', 'Siem Reap');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` char(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `name`, `description`) VALUES
('001', 'Small', ''),
('002', 'Medium', ''),
('003', 'Large', ''),
('004', 'X-Large', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`) USING BTREE;

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD KEY `provincepk` (`province`) USING BTREE;

--
-- Indexes for table `manage_promotion`
--
ALTER TABLE `manage_promotion`
  ADD PRIMARY KEY (`promotion_id`) USING BTREE,
  ADD KEY `sizeidpk` (`size_id`) USING BTREE,
  ADD KEY `catagorypk` (`category_id`) USING BTREE,
  ADD KEY `brandidpk` (`brand_id`) USING BTREE,
  ADD KEY `userpk` (`user_id`) USING BTREE;

--
-- Indexes for table `manage_user`
--
ALTER TABLE `manage_user`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`province_id`) USING BTREE,
  ADD UNIQUE KEY `province_name` (`province_name`) USING BTREE;

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_user`
--
ALTER TABLE `manage_user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `provincepk` FOREIGN KEY (`province`) REFERENCES `provinces` (`province_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useridpk` FOREIGN KEY (`user_id`) REFERENCES `manage_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_promotion`
--
ALTER TABLE `manage_promotion`
  ADD CONSTRAINT `brandidpk` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catagorypk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sizeidpk` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userpk` FOREIGN KEY (`user_id`) REFERENCES `companies` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

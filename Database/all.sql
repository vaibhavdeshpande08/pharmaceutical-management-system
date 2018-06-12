-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 04:00 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `symptoms` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `symptoms`, `price`, `stock`, `shop`) VALUES
(8, 'crocin', 'fever', 10, 30, 'shwetastore1'),
(16, 'allric', 'allergy', 87, 34, 'pcmedical'),
(17, 'allergia', 'allergy', 45, 1, 'zpmedical'),
(18, 'wikoryl', 'runningnose', 67, 30, 'harshshop'),
(20, 'benadryl', 'cold', 12, 90, 'abcstore'),
(21, 'gelusil', 'acidity', 10, 46, 'shopvb'),
(22, 'sinarest', 'cough', 14, 18, 'vbshop'),
(24, 'b', 'b', 76, 34, 'c'),
(25, 'asa', 'dff', 34, 76, 'jms'),
(26, 'dettol', 'antiseptic', 57, 80, 'vbstore'),
(27, 'iodine', 'tonsils', 80, 1, 'vbstore'),
(28, 'saline', 'strength', 15, 56, 'krishnahospital'),
(29, 'fdfs', 'ghgf', 456, 124, 'abcstore'),
(30, 'benadryl', 'flue', 40, 70, 'pcstore'),
(32, 'adulsa', 'cold', 69, 4, 'vbstore'),
(33, 'crocin', 'fever', 45, 1, 'surajstore'),
(35, 'pragma', 'bodypain', 200, 250, 'harshshop'),
(37, 'combiflam', 'cough', 25, 110, 'pcstore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

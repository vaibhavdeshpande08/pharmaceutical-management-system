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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `address`, `mobile`, `subject`, `message`) VALUES
('vaibhav Deshpande', 'vb@hotmail.in', '', '0', 'feedback', 'gooddss'),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('asa', '123@123', '', '0', '123', ''),
('', '', '', '0', '', ''),
('Harsh', 'harshjadhav5009@gmail.com', '', '0', 'feedback', 'Nice'),
('', '', '', '0', '', ''),
('anurag', 'anurag@gmail.com', '', '0', 'feedback', 'cool'),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('ninadjiju', 'ninad@gmail.com', '', '0', 'feedback', 'good\r\n'),
('', '', '', '0', '', ''),
('ninadjiju', 'ninad@gmail.com', '', '0', 'feedback', 'abc'),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('vb', 'vvb@gmail.com', '', '0', 'feedbcks', 'hweyyy'),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('Prashant Chauhan', 'prashant@gmail.com', 'Nigadi', '2147483647', 'reply', 'good job bro !.'),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('Hemant Deshpande', 'hemantmdeshpande@gmail.com', '180;kasba peth , anant krupa society ,second floor; flat no:206', '2147483647', 'message', 'ok well done !.'),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('Chinmay', 'chinmay@gmail.com', 'karvenagar', '905560', 'hello', 'nice'),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '0', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `name`, `username`, `mobile`, `address`, `email`, `password`) VALUES
(1, '', 'qw', '0', '', 'qw@gmail.com', '006d2143154327a64d86a264aea225f3'),
(2, '', 'ssk', '0', '', 'abc@123', '13fe9d84310e77f13a6d184dbf1232f3'),
(3, '', 'abc', '0', '', 'abc@a', 'e10adc3949ba59abbe56e057f20f883e'),
(4, '', 'sho', '0', '', 'sho@yahoo.inc', '02a55f6b0b75a11ad1dedf9f8b4d9b4f'),
(5, 'prahant chauhan', 'p', '23', 'nigadi', 'p@gmail.in', '83878c91171338902e0fe0fb97a8c47a'),
(6, 'Hemant Deshpande', 'hemant', '2147483647', '180;kasba peth , anant krupa society ,second floor; flat no:206', 'hemantmdeshpande@gmail.com', '17563740df9a804bc5e3b31c5cb58984'),
(7, 'lina', 'linaa', '787655', 'cgh', 'lina@gmail.com', '528a3c500e49e8d14159dd2935ee36a1');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `username`, `email`, `shopname`, `mobile`, `address`, `password`) VALUES
(1, '0', 'shopvb', 's@rediffmail.usa', '', '0', '', '03c7c0ace395d80182db07ae2c30f034'),
(2, '0', 'santosh', 'san@gmail.com', 'santoshmedical', '1234567834', 'abc lane,pune', '587c57365b54e8283fd6b1ac24acf29d'),
(3, '0', 'a', 'a@gmail.com', 'shriyastore', '4352345', '180;kasba peth , anant krupa society ,second floor; flat no:206', '0cc175b9c0f1b6a831c399e269772661'),
(4, '0', 'vb', 'vb@hotmail.com', 'vbstore', '2147483647', '180;kasba peth , anant krupa society ,second floor; flat no:206', '2ab4f27ab1ffdcdad8ed21a965ca62ad'),
(5, '0', 'krish', 'krish@gmail.com', 'krishnahospital', '2147483647', 'kothrud', '0d57dca2d8e0e017e963be8d42022ab3'),
(6, '0', 'anu', 'anu@gmail.in', 'abcstore', '2147483647', 'nanded', '89a4b5bd7d02ad1e342c960e6a98365c'),
(7, '0', 'c', 'c@gmail.com', 'pk', '443543', 'vsdvs', '4a8a08f09d37b73795649038408b5f33'),
(8, '0', 'd', 'def@gmail.com', 'dpstore', '123', 'fdfd', '8277e0910d750195b448797616e091ad'),
(9, 'Prashant Chauhan', 'p', 'p@gmail.in', 'pcstore', '234', '34', '83878c91171338902e0fe0fb97a8c47a'),
(10, 'harshwardhan khetan', 'harsh', 'harsh@gmail.com', 'harshshop', '2147483647', 'gorakhpur , UP', 'd4e3730e8cba214f85cddae5f9331d74');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `address`, `mobile`, `password`) VALUES
(3, 'Vaibhav Deshpande', 'vb', 'vaibs.desh@gmail.com', '180,Kasba Peth ,Anant Krupa ,Shivaji Road ,Pune - 411011.', '9168848954', '253fa391a66ab7c1b36f833809c471f9'),
(4, 'suraj kulkarni', 'suraj', 'surajkulkarni232@gmail.com', 'Solapur', '2147483647', '27c37b9bcc530d8c0ceff2ef6c58f96b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220608.c947f28e00
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 02:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `promoter`
--

CREATE TABLE `promoter` (
  `id` int(11) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `productname` varchar(100) DEFAULT NULL,
  `startupname` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `equity` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mno` int(10) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promoter`
--

INSERT INTO `promoter` (`id`, `ownername`, `productname`, `startupname`, `amount`, `equity`, `email`, `password`, `mno`, `desc`, `gender`, `education`, `designation`) VALUES
(1, 'Mandar', 'rana pratap', 'shivaji', 1000000, 50, 'teamm2d@gmail.com', '12345678', 1111111111, 'gergtergtr', 1, 'mba', 'major'),
(2, 'nisarg', 'narut', 'japan', 5, 1, 'teamm2d007@gmail.com', '12345678', 2147483647, 'lskxakjsxnkxnkjn', 0, 'hhc', 'major'),
(4, 'xyz', 'abc', NULL, NULL, NULL, 'teamm2d007@gmail.com', '12345678', NULL, 'abc', NULL, NULL, NULL),
(5, 'inv', 'abc', NULL, NULL, NULL, 'teamm2d007@gmail.com', '12345678', 2147483647, 'fjakjsdhfkjhjskfd', 1, 'mba', 'major'),
(12, 'jack', 'SipLine', 'SipLine.com', 600000, 10, 'jack@gmail.com', '12345678', 2147483647, 'Our Product Is Very Easy To Use.', 1, 'MBA', 'CEO'),
(13, 'jack1', NULL, NULL, NULL, NULL, 'jack1@gmail.com', '12345678', 2147483647, 'I An Angel Investor.', 1, 'MBA', 'CEO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promoter`
--
ALTER TABLE `promoter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promoter`
--
ALTER TABLE `promoter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
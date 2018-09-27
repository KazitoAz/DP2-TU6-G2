-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 07:17 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `No` int(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Feedback` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ProductName` varchar(15) NOT NULL,
  `Quantity` int(4) NOT NULL,
  `Supplier` varchar(20) NOT NULL,
  `ContactNumber` int(15) NOT NULL,
  `Address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ProductName`, `Quantity`, `Supplier`, `ContactNumber`, `Address`) VALUES
('dfs', 1, '1', 450705825, '1, Wynyeh St');

-- --------------------------------------------------------

--
-- Table structure for table `salesrecord`
--

CREATE TABLE `salesrecord` (
  `No` int(3) NOT NULL,
  `ProductName` varchar(15) NOT NULL,
  `Quantity` int(4) NOT NULL,
  `Price` int(4) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salesrecord`
--

INSERT INTO `salesrecord` (`No`, `ProductName`, `Quantity`, `Price`, `Date`) VALUES
(1, 'asd', 2, 1, '2018-09-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ProductName`);

--
-- Indexes for table `salesrecord`
--
ALTER TABLE `salesrecord`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `No._UNIQUE` (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `No` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salesrecord`
--
ALTER TABLE `salesrecord`
  MODIFY `No` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

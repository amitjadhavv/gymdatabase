-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 03:44 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `chest` float DEFAULT NULL,
  `waist` float DEFAULT NULL,
  `bicep` float DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `package` varchar(20) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `due` int(11) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `duedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `fname`, `lname`, `age`, `phone`, `address`, `gender`, `height`, `weight`, `chest`, `waist`, `bicep`, `tid`, `package`, `fees`, `due`, `startdate`, `duedate`) VALUES
(1, 'Amit', 'Jadhav', 22, 9108870287, 'LIG A 134 8th A cross, Suryacity, Chandapura, Bangalore', 'male', 5.9, 62.5, 40, 29, 13, 1, '3 month', 2000, 2000, '2019-09-25', '2019-09-25'),
(11, 'vikas', 'bhandari', 19, 655656556, 'yelavalli', 'male', 170, 59, 36, 24, 14, 3, '6 months', 5000, 0, '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE `gym` (
  `gid` int(11) NOT NULL,
  `gname` varchar(20) DEFAULT NULL,
  `gloc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `tid` int(10) NOT NULL,
  `tname` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `specs` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`tid`, `tname`, `age`, `phone`, `gender`, `specs`, `address`, `gid`) VALUES
(1, 'Armugam ', 34, 8775755789, 'male', 'calisthenics', 'LIG A 134 8th A cross, Suryacity, Chandapura, Bangalore', NULL),
(2, 'selvam', 29, 9113503098, 'male', 'AESTHETICS', 'BENGALURU', NULL),
(3, 'PREETI', 25, 555555, 'FEMALE', 'YOGA', 'BENGALURU', NULL),
(4, 'DIVYA', 26, 444664, 'female', 'ZUMBA', 'CHENNAI', NULL),
(5, 'dinga', 20, 9113503092, 'male', 'zumbba', 'dfgfd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `gid`) VALUES
('admin1', 'admin1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `gid` (`gid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `gid` (`gid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `trainer` (`tid`);

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `trainer_ibfk_1` FOREIGN KEY (`gid`) REFERENCES `gym` (`gid`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`gid`) REFERENCES `gym` (`gid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

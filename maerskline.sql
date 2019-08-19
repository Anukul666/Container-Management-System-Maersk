-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 02:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maerskline`;
--

-- --------------------------------------------------------
USE `maerskline`;
--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `departureport` varchar(50) DEFAULT NULL,
  `arrivalport` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `cid` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `departureport`, `arrivalport`, `date`, `cid`, `status`) VALUES
(1, 'Goa', 'Miami', '2019-08-08', 1, 'delevered'),
(5, 'Goa', 'Miami', '2019-08-08', 2, 'rejected'),
(6, 'Goa', 'Miami', '2019-08-08', 1, 'delevered');

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `containerno` varchar(20) DEFAULT NULL,
  `tareweight` varchar(20) DEFAULT NULL,
  `payloadcapacity` varchar(20) DEFAULT NULL,
  `cubiccapacity` varchar(20) DEFAULT NULL,
  `internallength` varchar(20) DEFAULT NULL,
  `internalwidth` varchar(20) DEFAULT NULL,
  `internalheight` varchar(20) DEFAULT NULL,
  `containerlocation` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`containerno`, `tareweight`, `payloadcapacity`, `cubiccapacity`, `internallength`, `internalwidth`, `internalheight`, `containerlocation`, `id`) VALUES
('QKIJR6QQ90', '1000', '100', '100', '10', '5', '5', 'Kolkata', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneno` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `username`, `password`, `fullname`, `email`, `phoneno`, `address`) VALUES
(1, 'roshanshahi', 'roshan12345', 'Roshan Shahi', 'roshanshahi@gmail.com', '9818000000', 'Gongabu'),
(2, 'nepking', 'roshan12345', 'Roshan Shahi', 'roshan.nepking@gmail.com', '9818000000', 'Mombai');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `subject` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `firstname`, `lastname`, `country`, `subject`) VALUES
(1, '', 'Shahi', 'Nepal', 'Hi, I am Roshan Shahi.');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `routeid` int(11) NOT NULL,
  `departureport` varchar(50) DEFAULT NULL,
  `arrivalport` varchar(50) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`routeid`, `departureport`, `arrivalport`, `date`, `time`, `id`) VALUES
(2, 'Goa', 'Miami', '2019-08-09', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transportationoffice`
--

CREATE TABLE `transportationoffice` (
  `officeid` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `officename` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contactno` varchar(20) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportationoffice`
--

INSERT INTO `transportationoffice` (`officeid`, `username`, `password`, `fullname`, `officename`, `email`, `contactno`, `location`, `country`, `id`) VALUES
(2, 'roshanshahi', 'roshan12345', 'Roshan Shahi', 'Roshan Cargo Pvt. Ltd.', 'roshashahi@gmail.com', '9800000000', 'Kolkata', 'India', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD KEY `id` (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`routeid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `transportationoffice`
--
ALTER TABLE `transportationoffice`
  ADD PRIMARY KEY (`officeid`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `routeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transportationoffice`
--
ALTER TABLE `transportationoffice`
  MODIFY `officeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`);

--
-- Constraints for table `container`
--
ALTER TABLE `container`
  ADD CONSTRAINT `container_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admininfo` (`id`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admininfo` (`id`);

--
-- Constraints for table `transportationoffice`
--
ALTER TABLE `transportationoffice`
  ADD CONSTRAINT `transportationoffice_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admininfo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

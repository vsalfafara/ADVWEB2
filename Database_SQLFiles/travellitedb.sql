-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2016 at 01:30 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travellitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrival_area`
--

CREATE TABLE IF NOT EXISTS `arrival_area` (
  `arrid` int(10) NOT NULL,
  `arr_name` varchar(25) NOT NULL,
  `arr_desc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrival_area`
--

INSERT INTO `arrival_area` (`arrid`, `arr_name`, `arr_desc`) VALUES
(1, 'Manila', ''),
(2, 'Lucena', ''),
(3, 'Ilocos', ''),
(4, 'Pampanga', '');

-- --------------------------------------------------------

--
-- Table structure for table `departure_area`
--

CREATE TABLE IF NOT EXISTS `departure_area` (
  `depid` int(10) NOT NULL,
  `dep_name` varchar(25) NOT NULL,
  `dep_desc` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `private_bus_price` int(10) NOT NULL,
  `arr1` varchar(100) NOT NULL,
  `arr2` varchar(100) NOT NULL,
  `arr3` varchar(100) NOT NULL,
  `public_bus_price1` int(10) NOT NULL,
  `public_bus_price2` int(10) NOT NULL,
  `public_bus_price3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departure_area`
--

INSERT INTO `departure_area` (`depid`, `dep_name`, `dep_desc`, `time`, `date`, `private_bus_price`, `arr1`, `arr2`, `arr3`, `public_bus_price1`, `public_bus_price2`, `public_bus_price3`) VALUES
(1, 'Manila', '', '8:00pm', '12/13/2016', 30000, 'Lucena', 'Ilocos', 'Pampanga', 240, 200, 170),
(2, 'Lucena', '', '11:00pm', '12/20/2016', 30000, 'Manila', 'Ilocos', 'Pampanga', 240, 400, 360),
(3, 'Ilocos', '', '1:30pm', '12/18/2016', 30000, 'Manila', 'Lucena', 'Pampanga', 200, 400, 180),
(4, 'Pampanga', '', '3:30pm', '12/24/2016', 30000, 'Manila', 'Lucena', 'Ilocos', 170, 360, 180);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
`invoiceid` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(25) NOT NULL,
  `departure` varchar(25) NOT NULL,
  `arrival` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `vehicle` varchar(25) NOT NULL,
  `vehicleid` int(10) NOT NULL,
  `vehicle_name` varchar(25) NOT NULL,
  `plate_num` varchar(25) NOT NULL,
  `vehicle_type` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `quantity` int(2) NOT NULL,
  `cost` int(100) NOT NULL,
  `payment_type` varchar(25) NOT NULL,
  `paid` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoiceid`, `date_created`, `created_by`, `departure`, `arrival`, `time`, `date`, `vehicle`, `vehicleid`, `vehicle_name`, `plate_num`, `vehicle_type`, `type`, `quantity`, `cost`, `payment_type`, `paid`) VALUES
(2, '2016-12-10 12:48:24', 'HomeBoyVRX', 'Lucena', 'Pampanga', '1:30pm', '12/20/2016', 'Bus', 9, 'Cedec Transport', 'GJT-1207', 'Private', 'roundtrip', 1, 0, 'Cash', 'Not yet paid. Please pres'),
(3, '2016-12-10 12:48:46', 'HomeBoyVRX', 'Lucena', 'Pampanga', '8:00pm', '12/20/2016', 'Van', 16, 'Everest', 'KMM--0224', 'Private', 'roundtrip', 1, 0, 'Cash', 'Not yet paid. Please pres'),
(4, '2016-12-10 12:49:39', 'vrx', 'Ilocos', 'Lucena', '11:00pm', '12/18/2016', 'Bus', 4, 'Five Start', 'AAB-6969', 'Private', 'roundtrip', 1, 0, 'Cash', 'Not yet paid. Please pres'),
(6, '2016-12-10 14:03:01', 'vsalfafara', 'Pampanga', 'Lucena', '8:00pm', '12/24/2016', 'Bus', 3, 'Superlines', 'MLL-1002', 'Private', 'roundtrip', 1, 30000, 'Cash', 'Not yet paid. Please pres'),
(7, '2016-12-10 14:03:19', 'vsalfafara', 'Pampanga', 'Lucena', '8:00pm', '12/24/2016', 'Bus', 3, 'Superlines', 'MLL-1002', 'Private', 'roundtrip', 1, 30000, 'Cash', 'Not yet paid. Please pres'),
(8, '2016-12-10 14:03:54', 'vsalfafara', 'Pampanga', 'Lucena', '8:00pm', '12/24/2016', 'Bus', 3, 'Superlines', 'MLL-1002', 'Private', 'roundtrip', 1, 30000, 'Cash', 'Not yet paid. Please pres'),
(9, '2016-12-10 14:04:43', 'vsalfafara', 'Pampanga', 'Lucena', '8:00pm', '12/24/2016', 'Bus', 3, 'Superlines', 'MLL-1002', 'Private', 'roundtrip', 1, 30000, 'Cash', 'Not yet paid. Please pres'),
(10, '2016-12-10 14:06:44', 'vsalfafara', 'Lucena', 'Pampanga', '11:00pm', '12/20/2016', 'Van', 14, 'Nisan', 'ARG-0331', 'Private', 'roundtrip', 1, 2500, 'Cash', 'Not yet paid. Please pres'),
(11, '2016-12-10 14:47:09', 'vsalfafara', 'Manila', 'Lucena', '11:00pm', '12/13/2016', 'Bus', 3, 'Superlines', 'MLL-1002', 'Public', 'roundtrip', 7, 240, 'Cash', 'Not yet paid. Please pres'),
(12, '2016-12-10 14:48:41', 'vsalfafara', 'Manila', 'Lucena', '11:00pm', '12/13/2016', 'Bus', 2, 'Victory Liner', 'CYO-1111', 'Public', 'roundtrip', 3, 720, 'Cash', 'Not yet paid. Please pres'),
(13, '2016-12-10 15:10:20', 'vsalfafara', 'Lucena', 'Manila', '11:00pm', '12/20/2016', 'Bus', 2, 'Victory Liner', 'CYO-1111', 'Private', 'oneway', 1, 30000, 'Cash', 'Not yet paid. Please pres'),
(14, '2016-12-11 11:50:56', 'vsalfafara', 'Ilocos', 'Manila', '11:00pm', '12/18/2016', 'Bus', 2, 'Victory Liner', 'CYO-1111', 'Public', 'oneway', 8, 1600, 'Cash', 'Not yet paid. Please pres'),
(15, '2016-12-11 11:59:18', 'vsalfafara', 'Ilocos', 'Manila', '11:00pm', '12/18/2016', 'Bus', 2, 'Victory Liner', 'CYO-1111', 'Private', 'roundtrip', 1, 60000, 'Cash', 'Not yet paid. Please pres'),
(16, '2016-12-11 12:04:18', 'vsalfafara', 'Lucena', 'Lucena', '11:00pm', '12/20/2016', 'Bus', 1, 'Victory Liner', 'VMA-0925', 'Private', 'roundtrip', 1, 60000, 'Cash', 'Not yet paid. Please pres'),
(17, '2016-12-11 12:06:03', 'vsalfafara', 'Lucena', 'Lucena', '8:00pm', '12/20/2016', 'Bus', 3, 'Superlines', 'MLL-1002', 'Private', 'roundtrip', 1, 60000, 'Cash', 'Not yet paid. Please pres'),
(18, '2016-12-11 12:11:08', 'vsalfafara', 'Manila', 'Manila', '8:00pm', '12/13/2016', 'Bus', 1, 'Victory Liner', 'VMA-0925', 'Private', 'oneway', 1, 30000, 'Cash', 'Not yet paid. Please pres'),
(19, '2016-12-11 12:13:42', 'vsalfafara', 'Manila', 'Lucena', '11:00pm', '12/13/2016', 'Bus', 3, 'Superlines', 'MLL-1002', 'Private', 'oneway', 1, 30000, 'Credit Card', 'PAID'),
(20, '2016-12-11 12:21:58', 'vsalfafara', 'Manila', 'Manila', '11:00pm', '12/13/2016', 'Bus', 2, 'Victory Liner', 'CYO-1111', 'Private', 'roundtrip', 1, 60000, 'Cash', 'Not yet paid. Please pres'),
(21, '2016-12-11 12:22:10', 'vsalfafara', 'Lucena', 'Manila', '11:00pm', '12/20/2016', 'Bus', 2, 'Victory Liner', 'CYO-1111', 'Private', 'oneway', 1, 30000, 'Credit Card', 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
`id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`, `type`) VALUES
(1, 'vsalfafara', 'alfafara.vm@gmail.com', 'pausebreak', 0),
(2, 'HomeBoyVRX', 'alfafara.vm@gmail.com', 'pausebreak', 1),
(3, 'vrx', 'alf@o2jam.com', 'pausebreak', 1),
(4, 'mmlaureta', 'mmlaureta@gmail.com', 'asdfghjkl', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
`vehicleid` int(10) NOT NULL,
  `vehicle_name` varchar(25) NOT NULL,
  `vehicle_type` varchar(25) NOT NULL,
  `vehicle_seaters` int(2) NOT NULL,
  `seaters_available` int(2) NOT NULL,
  `plate_num` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicleid`, `vehicle_name`, `vehicle_type`, `vehicle_seaters`, `seaters_available`, `plate_num`) VALUES
(1, 'Victory Liner', 'bus', 56, 56, 'VMA-0925'),
(2, 'Victory Liner', 'bus', 56, 0, 'CYO-1111'),
(3, 'Superlines', 'bus', 56, 0, 'MLL-1002'),
(4, 'Five Start', 'bus', 56, 56, 'AAB-6969'),
(5, 'Genesis', 'bus', 56, 56, 'KJF-1425'),
(6, 'RJ Express', 'bus', 56, 56, 'RKO-6996'),
(7, 'Dimple Star Transport', 'bus', 55, 55, 'JJO-0217'),
(8, 'Partas', 'bus', 55, 55, 'BBG-1127'),
(9, 'Cedec Transport', 'bus', 56, 56, 'GJT-1207'),
(10, 'RCJ Lines', 'bus', 56, 56, 'JKR-0711'),
(11, 'PP Bus Lines', 'bus', 55, 55, 'JSA-1021'),
(12, 'CUL Transport', 'bus', 56, 56, 'JBG-0125'),
(13, 'Chevrolet', 'van', 16, 16, 'MCR-2016'),
(14, 'Nisan', 'van', 16, 16, 'ARG-0331'),
(15, 'Toyota', 'van', 16, 16, 'UTF-0008'),
(16, 'Everest', 'van', 16, 16, 'KMM--0224'),
(17, 'Ford', 'van', 16, 16, 'EAB-6969');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrival_area`
--
ALTER TABLE `arrival_area`
 ADD PRIMARY KEY (`arrid`);

--
-- Indexes for table `departure_area`
--
ALTER TABLE `departure_area`
 ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
 ADD PRIMARY KEY (`invoiceid`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
 ADD PRIMARY KEY (`vehicleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
MODIFY `invoiceid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
MODIFY `vehicleid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

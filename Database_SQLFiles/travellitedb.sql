-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 07:35 PM
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
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departure_area`
--

INSERT INTO `departure_area` (`depid`, `dep_name`, `dep_desc`, `time`, `date`) VALUES
(1, 'Manila', '', '8:00pm', '12/13/2016'),
(2, 'Lucena', '', '11:00pm', '12/20/2016'),
(3, 'Ilocos', '', '1:30pm', '12/18/2016'),
(4, 'Pampanga', '', '3:30pm', '12/24/2016');

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
  `payment_type` varchar(25) NOT NULL,
  `paid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
`id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'vsalfafara', 'alfafara.vm@gmail.com', 'pausebreak');

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
(2, 'Victory Liner', 'bus', 56, 56, 'CYO-1111'),
(3, 'Superlines', 'bus', 56, 56, 'MLL-1002'),
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
MODIFY `invoiceid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
MODIFY `vehicleid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

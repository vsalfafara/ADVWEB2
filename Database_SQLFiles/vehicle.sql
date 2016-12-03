-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 07:13 PM
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
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
 ADD PRIMARY KEY (`vehicleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
MODIFY `vehicleid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

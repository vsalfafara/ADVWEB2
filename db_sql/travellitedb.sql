-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2016 at 01:14 PM
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
(1, 'Manila', '', '8:00pm', '12/15/2016'),
(2, 'Lucena', '', '11:00pm', '12/13/2016'),
(3, 'Ilocos', '', '1:30pm', '12/21/2016'),
(4, 'Pampanga', '', '3:30pm', '12/19/2016');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
`invoiceid` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `departure` varchar(25) NOT NULL,
  `arrival` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL,
  `vehicle` varchar(25) NOT NULL,
  `vehicle_type` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `payment_type` varchar(25) NOT NULL,
  `paid` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
MODIFY `invoiceid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

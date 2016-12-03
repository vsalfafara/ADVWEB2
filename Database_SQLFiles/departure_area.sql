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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departure_area`
--
ALTER TABLE `departure_area`
 ADD PRIMARY KEY (`depid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

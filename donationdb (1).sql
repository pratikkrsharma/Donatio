-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 12:41 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_mode`
--

CREATE TABLE `donation_mode` (
  `userid` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(30) NOT NULL,
  `number` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_mode`
--

INSERT INTO `donation_mode` (`userid`, `date`, `type`, `number`) VALUES
(73, '2018-08-01', 'dress', 10),
(73, '2018-08-02', 'book', 10);

-- --------------------------------------------------------

--
-- Table structure for table `donation_needed`
--

CREATE TABLE `donation_needed` (
  `orgid` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_needed`
--

INSERT INTO `donation_needed` (`orgid`, `type`, `number`) VALUES
(1001, 'dress', 10),
(1001, 'book', 10);

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `userid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`userid`, `name`, `password`, `contact`, `address`) VALUES
(73, 'pr', 'pratik', '53453', 'kolkata'),
(83, 'ravi', 'ravi', '54343', 'patna');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `orgid` int(11) NOT NULL,
  `eventname` varchar(30) NOT NULL,
  `eventdes` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `nooftickets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`orgid`, `eventname`, `eventdes`, `date`, `nooftickets`) VALUES
(1001, 'help hand', 'give food to child', '2018-08-01', 50),
(1001, 'book fair', 'give book to child', '2018-08-02', 50);

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `orgid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `cardno` int(11) NOT NULL,
  `agegroup` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`orgid`, `name`, `password`, `address`, `cardno`, `agegroup`) VALUES
(1001, 'swach', 'swach', 'kolkata', 111, '10'),
(1002, 'ones', 'ones', 'patna', 222, '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_mode`
--
ALTER TABLE `donation_mode`
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `donation_needed`
--
ALTER TABLE `donation_needed`
  ADD KEY `orgid` (`orgid`);

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD KEY `orgid` (`orgid`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`orgid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_mode`
--
ALTER TABLE `donation_mode`
  ADD CONSTRAINT `donation_mode_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `doner` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donation_needed`
--
ALTER TABLE `donation_needed`
  ADD CONSTRAINT `donation_needed_ibfk_1` FOREIGN KEY (`orgid`) REFERENCES `organisation` (`orgid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`orgid`) REFERENCES `organisation` (`orgid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

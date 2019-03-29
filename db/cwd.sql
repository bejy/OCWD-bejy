-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2019 at 05:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `account_no` int(11) NOT NULL,
  `present_reading` varchar(20) NOT NULL,
  `previous_reading` varchar(20) NOT NULL,
  `due_date` date NOT NULL,
  `cutting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `account_no`, `present_reading`, `previous_reading`, `due_date`, `cutting_date`) VALUES
(60, 1, '123', '1', '2019-03-13', '2019-03-21'),
(61, 2, '123', '2', '2019-03-01', '2019-03-11'),
(62, 3, '44', '4', '2019-03-21', '2019-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `consumer1`
--

CREATE TABLE `consumer1` (
  `consumer_id` int(11) NOT NULL,
  `account_no` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `cstatus` varchar(100) NOT NULL,
  `cnum` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `momname` varchar(100) NOT NULL,
  `dadname` varchar(100) NOT NULL,
  `spousename` varchar(100) NOT NULL,
  `streetname` varchar(100) NOT NULL,
  `barangayname` varchar(100) NOT NULL,
  `cityname` varchar(100) NOT NULL,
  `resicom` varchar(100) NOT NULL,
  `pubpriv` varchar(10) NOT NULL,
  `senior` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `monthincome` decimal(10,0) NOT NULL,
  `dateinstalled` date NOT NULL,
  `meterbrandno` varchar(100) NOT NULL,
  `initread` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer1`
--

INSERT INTO `consumer1` (`consumer_id`, `account_no`, `fname`, `mname`, `lname`, `bdate`, `bplace`, `cstatus`, `cnum`, `occupation`, `momname`, `dadname`, `spousename`, `streetname`, `barangayname`, `cityname`, `resicom`, `pubpriv`, `senior`, `pwd`, `monthincome`, `dateinstalled`, `meterbrandno`, `initread`) VALUES
(2, 1, 'brian', 'james', 'cabantac', '2019-02-28', 'tuyabang alto', 'widow', '0987654321', 'studnet', 'mama', 'papa', 'baby', '7', 'tuyabang alto', 'Oro city', 'residential', 'public', '', '', '45454', '2019-03-22', '123', '1'),
(3, 2, 'wer', 'werwae', 'rawerw', '2019-03-06', 'werwr', 'married', '453', 'arwe', 'erwe', 'werw', 'erwer', '34', 'ewarfaf', 'afw', 'commercial', 'public', '', '', '32420', '2019-03-28', '123', '2'),
(4, 3, 'wae', 'wtawt', 'awetaw', '2019-04-05', 'rtaet', 'single', '453453', 'ertata', 'werta', 'wartaw', 'wtawt', '5', 'rawer', 'waetat', 'commercial', 'public', 'on', '', '2342', '2019-03-06', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `receipt_no` int(11) NOT NULL,
  `modeofpayment` varchar(10) NOT NULL,
  `datepayed` date NOT NULL,
  `billing_id` int(11) NOT NULL,
  `account_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`receipt_no`, `modeofpayment`, `datepayed`, `billing_id`, `account_no`) VALUES
(52, 'cash', '2019-03-13', 61, 2),
(53, 'cash', '2019-03-13', 61, 2),
(54, 'cash', '2019-03-07', 61, 2),
(55, 'cash', '2019-03-06', 61, 2),
(56, 'cash', '2019-03-13', 61, 2);

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `id_penalty` int(11) NOT NULL,
  `penalty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penalty`
--

INSERT INTO `penalty` (`id_penalty`, `penalty`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `resicom`
--

CREATE TABLE `resicom` (
  `id_resicom` int(11) NOT NULL,
  `residential` int(11) NOT NULL,
  `commercial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resicom`
--

INSERT INTO `resicom` (`id_resicom`, `residential`, `commercial`) VALUES
(6, 120, 240);

-- --------------------------------------------------------

--
-- Table structure for table `seniorpwd`
--

CREATE TABLE `seniorpwd` (
  `id` int(11) NOT NULL,
  `senior` int(11) NOT NULL,
  `pwd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seniorpwd`
--

INSERT INTO `seniorpwd` (`id`, `senior`, `pwd`) VALUES
(1, 22, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `consumer1`
--
ALTER TABLE `consumer1`
  ADD PRIMARY KEY (`consumer_id`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`receipt_no`),
  ADD KEY `billing_id` (`billing_id`,`account_no`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `penalty`
--
ALTER TABLE `penalty`
  ADD PRIMARY KEY (`id_penalty`);

--
-- Indexes for table `resicom`
--
ALTER TABLE `resicom`
  ADD PRIMARY KEY (`id_resicom`);

--
-- Indexes for table `seniorpwd`
--
ALTER TABLE `seniorpwd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `consumer1`
--
ALTER TABLE `consumer1`
  MODIFY `consumer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `receipt_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `penalty`
--
ALTER TABLE `penalty`
  MODIFY `id_penalty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resicom`
--
ALTER TABLE `resicom`
  MODIFY `id_resicom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seniorpwd`
--
ALTER TABLE `seniorpwd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`account_no`) REFERENCES `consumer1` (`account_no`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_5` FOREIGN KEY (`billing_id`) REFERENCES `billing` (`billing_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_6` FOREIGN KEY (`account_no`) REFERENCES `consumer1` (`account_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

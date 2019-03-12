-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 12:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'bejy', 'tada');

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
(1, 2, 2);

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
-- Indexes for table `consumer1`
--
ALTER TABLE `consumer1`
  ADD PRIMARY KEY (`consumer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `consumer1`
--
ALTER TABLE `consumer1`
  MODIFY `consumer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penalty`
--
ALTER TABLE `penalty`
  MODIFY `id_penalty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resicom`
--
ALTER TABLE `resicom`
  MODIFY `id_resicom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seniorpwd`
--
ALTER TABLE `seniorpwd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

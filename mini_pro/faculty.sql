-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 09:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `NAME` varchar(20) NOT NULL,
  `DNAME` varchar(20) NOT NULL,
  `SUBJECT` varchar(20) NOT NULL,
  `M_NO` int(11) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`NAME`, `DNAME`, `SUBJECT`, `M_NO`, `EMAIL`, `PASSWORD`) VALUES
('ruchibari', 'INFT', 'aoa', 2147483647, 'ruchi.bari85@gmail.c', '992360'),
('tg', 'EXTC', 'DRTFD', 78945, 'vjsjhb@gmai.com', 'UIO789'),
('munni', 'INFT', 'ik8', 2147483647, 'vjsjhb@gmai.com', '78945'),
('fbguj', 'INFT', 'ippp', 2147483647, 'vjsjhb@gmai.com', '7856'),
('RUUU', 'INFT', 'ippp5', 2147483647, 'ruchi.bari85@gmail.c', '1230'),
('kupu', 'INFT', 'MATHS', 2147483647, 'vjsjhb@gmai.com', '7845123'),
('ruchi', 'INFT', 'n', 2147483647, 'vjsjhb@gmai.com', '9923605011'),
('HKN', 'sxedtcry', 'x cv', 995623, 'GJFH', '77856232');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`SUBJECT`),
  ADD UNIQUE KEY `NAME` (`NAME`),
  ADD UNIQUE KEY `PASSWORD` (`PASSWORD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

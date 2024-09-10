-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 01:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iotnewdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tab`
--

CREATE TABLE `admin_tab` (
  `aid` int(11) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `upass` varchar(15) NOT NULL,
  `utype` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tab`
--

INSERT INTO `admin_tab` (`aid`, `uname`, `upass`, `utype`, `username`) VALUES
(1, 'admin', 'admin', 1, 'NAME1'),
(8, 'user1', 'user1', 2, 'USER1');

-- --------------------------------------------------------

--
-- Table structure for table `fireupdate_tab`
--

CREATE TABLE `fireupdate_tab` (
  `nodeid` int(11) NOT NULL,
  `firedet` int(11) NOT NULL,
  `fdate` date NOT NULL,
  `ftime` time NOT NULL,
  `faddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fireupdate_tab`
--

INSERT INTO `fireupdate_tab` (`nodeid`, `firedet`, `fdate`, `ftime`, `faddress`) VALUES
(1, 1, '2024-06-30', '04:40:25', 'NAGARAHOLE'),
(2, 1, '2024-06-16', '07:04:06', 'Bannerghatta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tab`
--
ALTER TABLE `admin_tab`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `fireupdate_tab`
--
ALTER TABLE `fireupdate_tab`
  ADD PRIMARY KEY (`nodeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tab`
--
ALTER TABLE `admin_tab`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fireupdate_tab`
--
ALTER TABLE `fireupdate_tab`
  MODIFY `nodeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

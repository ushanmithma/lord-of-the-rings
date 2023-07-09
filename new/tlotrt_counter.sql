-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 11:00 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tlotrt_counter`
--
CREATE DATABASE IF NOT EXISTS `tlotrt_counter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tlotrt_counter`;

-- --------------------------------------------------------

--
-- Table structure for table `download_1`
--

CREATE TABLE `download_1` (
  `id` int(11) NOT NULL,
  `download_date` date NOT NULL,
  `download_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download_1`
--

INSERT INTO `download_1` (`id`, `download_date`, `download_ip`) VALUES
(1, '2017-09-20', '::1'),
(2, '2017-10-16', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `download_2`
--

CREATE TABLE `download_2` (
  `id` int(11) NOT NULL,
  `download_date` date NOT NULL,
  `download_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download_2`
--

INSERT INTO `download_2` (`id`, `download_date`, `download_ip`) VALUES
(1, '2017-09-20', '::1'),
(2, '2017-10-16', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `download_3`
--

CREATE TABLE `download_3` (
  `id` int(11) NOT NULL,
  `download_date` date NOT NULL,
  `download_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download_3`
--

INSERT INTO `download_3` (`id`, `download_date`, `download_ip`) VALUES
(1, '2017-09-20', '::1'),
(2, '2017-10-16', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `view_count`
--

CREATE TABLE `view_count` (
  `id` int(11) NOT NULL,
  `view_date` date NOT NULL,
  `view_ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view_count`
--

INSERT INTO `view_count` (`id`, `view_date`, `view_ip`) VALUES
(1, '2017-09-20', '::1'),
(2, '2017-09-21', '::1'),
(3, '2017-10-16', '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `download_1`
--
ALTER TABLE `download_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_2`
--
ALTER TABLE `download_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_3`
--
ALTER TABLE `download_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_count`
--
ALTER TABLE `view_count`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `download_1`
--
ALTER TABLE `download_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `download_2`
--
ALTER TABLE `download_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `download_3`
--
ALTER TABLE `download_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `view_count`
--
ALTER TABLE `view_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

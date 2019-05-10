-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 11:28 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('lehan', '123');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `Course_name` varchar(20) NOT NULL,
  `Officer_name` varchar(20) NOT NULL,
  `Course_id` int(5) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `Officer_id` int(20) NOT NULL,
  `course_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_name`, `Officer_name`, `Course_id`, `duration`, `Officer_id`, `course_type`) VALUES
('ABC', 'PRK', 123, '4', 852, 'Army');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `name` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `rank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`name`, `id`, `rank`) VALUES
('vector1', '123', '2'),
('x2-5', '1254', '5');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `height` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `training` varchar(20) NOT NULL,
  `blood` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `age`, `height`, `weight`, `qualification`, `email`, `training`, `blood`) VALUES
('Praneeeth RK', 18, 6, 65, 'be', '', 'Army', 'A +ve'),
('Praneeeth RK', 18, 6, 65, 'be', 'praneethrk17@gmail.c', 'Army', 'A +ve'),
('Praneeeth RK', 18, 6, 65, 'be', 'praneeth@in.com', 'Paramilitary', 'A-ve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`Course_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

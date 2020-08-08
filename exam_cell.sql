-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 04:58 AM
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
-- Database: `exam_cell`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_calendars`
--

CREATE TABLE `academic_calendars` (
  `id` int(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  `notification` varchar(9000) NOT NULL,
  `filepath` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giits_notifications`
--

CREATE TABLE `giits_notifications` (
  `id` int(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  `notification` varchar(9000) NOT NULL,
  `filepath` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jntuk_results`
--

CREATE TABLE `jntuk_results` (
  `id` int(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  `notification` varchar(9000) NOT NULL,
  `filepath` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab_marks`
--

CREATE TABLE `lab_marks` (
  `id` int(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  `notification` varchar(9000) NOT NULL,
  `filepath` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '05b05c947a4a17a676e9c7b56260450e'),
('jsv', '24bedd45b74c442ee9131bb0434dcfea');

-- --------------------------------------------------------

--
-- Table structure for table `mid_marks`
--

CREATE TABLE `mid_marks` (
  `id` int(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  `notification` varchar(9000) NOT NULL,
  `filepath` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `online_marks`
--

CREATE TABLE `online_marks` (
  `id` int(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  `notification` varchar(9000) NOT NULL,
  `filepath` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_papers`
--

CREATE TABLE `question_papers` (
  `id` int(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  `notification` varchar(9000) NOT NULL,
  `filepath` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_tables`
--

CREATE TABLE `time_tables` (
  `id` int(200) NOT NULL,
  `date` varchar(30) NOT NULL,
  `notification` varchar(9000) NOT NULL,
  `filepath` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_calendars`
--
ALTER TABLE `academic_calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giits_notifications`
--
ALTER TABLE `giits_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jntuk_results`
--
ALTER TABLE `jntuk_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_marks`
--
ALTER TABLE `lab_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mid_marks`
--
ALTER TABLE `mid_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_marks`
--
ALTER TABLE `online_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_papers`
--
ALTER TABLE `question_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_tables`
--
ALTER TABLE `time_tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_calendars`
--
ALTER TABLE `academic_calendars`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giits_notifications`
--
ALTER TABLE `giits_notifications`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jntuk_results`
--
ALTER TABLE `jntuk_results`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_marks`
--
ALTER TABLE `lab_marks`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mid_marks`
--
ALTER TABLE `mid_marks`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `online_marks`
--
ALTER TABLE `online_marks`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_papers`
--
ALTER TABLE `question_papers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_tables`
--
ALTER TABLE `time_tables`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

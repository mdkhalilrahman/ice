-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 08:27 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icejk`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `img`) VALUES
(1, 'khalil', 'http://localhost/ice/ci/uploads/home/DSC_0772_-_Copy6.JPG'),
(2, 'asad', 'http://localhost/ice/ci/uploads/home/DSC_0772_-_Copy7.JPG'),
(3, 'khalil', 'http://localhost/ice/ci/uploads/home/DSC100723521.jpg'),
(4, 'asad', 'http://localhost/ice/ci/uploads/home/photo-1496857239036-1fb1376830001.jpg'),
(5, 'khalil rahman', 'http://localhost/ice/ci/uploads/home/DSC_0772_-_Copy2.JPG'),
(6, 'khalil', 'http://localhost/ice/ci/uploads/home/DSC_0772_-_Copy1.JPG'),
(7, 'khalil', 'http://localhost/ice/ci/uploads/home/DSC_0772_-_Copy.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `ice1st`
--

CREATE TABLE `ice1st` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dateofbarth` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ice1st`
--

INSERT INTO `ice1st` (`id`, `name`, `email`, `fb`, `school`, `college`, `city`, `blood`, `roll`, `phone`, `dateofbarth`, `activity`, `img`) VALUES
(14, 'asad', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice1st/DSC_0782.JPG'),
(15, 'khalil rahman', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice1st/DSC_0772_-_Copy.JPG'),
(22, 'khalil rahman', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice1st/DSC_0772_-_Copy2.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `ice2nd`
--

CREATE TABLE `ice2nd` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dateofbarth` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ice2nd`
--

INSERT INTO `ice2nd` (`id`, `name`, `email`, `fb`, `school`, `college`, `city`, `blood`, `roll`, `phone`, `dateofbarth`, `activity`, `img`) VALUES
(1, 'khalil ', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice2nd/DSC_0772_-_Copy2.JPG'),
(4, 'khalil rahman', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice2nd/DSC_0772_-_Copy1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `ice3rd`
--

CREATE TABLE `ice3rd` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dateofbarth` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ice3rd`
--

INSERT INTO `ice3rd` (`id`, `name`, `email`, `fb`, `school`, `college`, `city`, `blood`, `roll`, `phone`, `dateofbarth`, `activity`, `img`) VALUES
(3, 'khalil rahman', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice3rd/DSC_0772_-_Copy1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `ice4th`
--

CREATE TABLE `ice4th` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dateofbarth` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ice4th`
--

INSERT INTO `ice4th` (`id`, `name`, `email`, `fb`, `school`, `college`, `city`, `blood`, `roll`, `phone`, `dateofbarth`, `activity`, `img`) VALUES
(3, 'khalil rahman', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice4th/images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ice5th`
--

CREATE TABLE `ice5th` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dateofbarth` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ice5th`
--

INSERT INTO `ice5th` (`id`, `name`, `email`, `fb`, `school`, `college`, `city`, `blood`, `roll`, `phone`, `dateofbarth`, `activity`, `img`) VALUES
(3, 'khalil rahman', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice5th/photo-1496857239036-1fb137683000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ice6th`
--

CREATE TABLE `ice6th` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dateofbarth` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ice6th`
--

INSERT INTO `ice6th` (`id`, `name`, `email`, `fb`, `school`, `college`, `city`, `blood`, `roll`, `phone`, `dateofbarth`, `activity`, `img`) VALUES
(3, 'khalil rahman', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice6th/FLSTIT31691_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ice7th`
--

CREATE TABLE `ice7th` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `roll` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dateofbarth` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ice7th`
--

INSERT INTO `ice7th` (`id`, `name`, `email`, `fb`, `school`, `college`, `city`, `blood`, `roll`, `phone`, `dateofbarth`, `activity`, `img`) VALUES
(2, 'khalil', 'khalilnstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o', 'ASH-1711018M', '01766198776', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice7th/DSC_0772_-_Copy1.JPG'),
(10, 'khalil rahman', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'Mymensingh', 'o+', 'ASH-1711018M', '1766871976', '15-04-1998', 'cricket,football', 'http://localhost/ice/ci/uploads/ice7th/DSC_0772_-_Copy.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(11) NOT NULL,
  `y-1-t-1` varchar(255) NOT NULL,
  `y-1-t-2` varchar(255) NOT NULL,
  `y-2-t-1` varchar(255) NOT NULL,
  `y-2-t-2` varchar(255) NOT NULL,
  `y-3-t-1` varchar(255) NOT NULL,
  `y-3-t-2` varchar(255) NOT NULL,
  `y-4-t-1` varchar(255) NOT NULL,
  `y-4-t-2` varchar(255) NOT NULL,
  `cgpa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `dateofbarth` varchar(255) DEFAULT NULL,
  `thisis` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `fb`, `school`, `college`, `university`, `city`, `blood`, `designation`, `qualification`, `dateofbarth`, `thisis`, `phone`, `img`) VALUES
(3, 'khalil rahman', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'NSTU', 'Mymensingh', 'o+', 'Teacher', 'jani na', '15-04-1998', 'nai', '01766871976', 'http://localhost/ice/ci/uploads/teacher/DSC_0772_-_Copy1.JPG'),
(7, 'khalil ', 'khalilstu@gmail.com', 'Md.khalil', 'Mugoltula secondary school', 'Royal media college', 'NSTU', 'Mymensingh', 'o+', 'Teacher', 'jani na', '15-04-1998', 'nai', '1766871976', 'http://localhost/ice/ci/uploads/teacher/images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice1st`
--
ALTER TABLE `ice1st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice2nd`
--
ALTER TABLE `ice2nd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice3rd`
--
ALTER TABLE `ice3rd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice4th`
--
ALTER TABLE `ice4th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice5th`
--
ALTER TABLE `ice5th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice6th`
--
ALTER TABLE `ice6th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ice7th`
--
ALTER TABLE `ice7th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ice1st`
--
ALTER TABLE `ice1st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ice2nd`
--
ALTER TABLE `ice2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ice3rd`
--
ALTER TABLE `ice3rd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ice4th`
--
ALTER TABLE `ice4th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ice5th`
--
ALTER TABLE `ice5th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ice6th`
--
ALTER TABLE `ice6th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ice7th`
--
ALTER TABLE `ice7th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

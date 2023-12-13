-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 04:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`) VALUES
('EFoodAdmin22', 'EFOOD22');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `feedbackType` enum('CN','CM') NOT NULL,
  `title` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `id`, `feedbackType`, `title`, `email`, `message`, `name`) VALUES
(2, 2, 'CM', 'Title : Repair An Elderly Home', 'thisismylife69@163.com', 'Niceee', 'ko98'),
(3, 2, 'CM', 'Title : Johor Rice Aid', 'Joerizal0602@gmail.com', 'testttt', 'ko98'),
(4, 2, 'CM', 'Title : Mubadala Petroleum', 'B032010310@student.utem.edu.my', 'dsdsds', 'ko98'),
(5, 2, 'CM', 'Title : Ceva & local farmers', 'thisismylife69@163.com', 'sdsdsd', 'ko98'),
(6, 2, 'CN', 'NULL', 'joerizal0602@gmail.com', 'Niceee', 'ko98'),
(7, 2, 'CM', 'Title : Marketplace', 'B032010310@student.utem.edu.my', 'r4rr4r', 'ko98'),
(8, 2, 'CM', 'Title : Donation Places', 'joerizal0602@gmail.com', 'rrffrfr', 'ko98'),
(9, 2, 'CM', 'Title : Waqaf Resources Places', 'thisismylife69@163.com', 'gtgtgt', 'ko98'),
(10, 2, 'CM', 'Title : Food Barter', 'thisismylife69@163.com', 'ewewe', 'ko98'),
(11, 6, 'CM', 'Title : Marketplace', 'joerizal0602@gmail.com', 'good', 'afiqah99');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `foodCategory` enum('FF','VG','FR','CF','RE','SF','DW') NOT NULL,
  `foodName` varchar(50) NOT NULL,
  `estimatedPrice` float NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodID`, `id`, `foodCategory`, `foodName`, `estimatedPrice`, `quantity`) VALUES
(1, 2, 'SF', 'Fish/kg', 100, 50),
(2, 2, 'VG', 'Tomato/kg', 15, 20),
(3, 2, 'FF', 'Chicken/kg', 5, 200),
(4, 2, 'SF', 'Fish/kg', 5, 20),
(5, 2, 'SF', 'Fish/kg', 100, 50),
(6, 6, 'VG', 'Sawi/kg', 2, 50);

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNum` varchar(50) NOT NULL,
  `userType` enum('FA','HO','SU','FI','IN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `userName`, `fullName`, `password`, `phoneNum`, `userType`) VALUES
(1, 'jo98', 'joerizall', '698d51a19d8a121ce581499d7b701668', '01268806166', 'HO'),
(2, 'ko98', 'MOHD RUSYAIDI', '202cb962ac59075b964b07152d234b70', '0134151209', 'HO'),
(3, 'mio98', 'Mio', '202cb962ac59075b964b07152d234b70', '999', 'IN'),
(6, 'afiqah999', 'Afiqah', '202cb962ac59075b964b07152d234b70', '01398567', 'IN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodID`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user1` (`id`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user1` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

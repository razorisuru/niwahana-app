-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 07:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niwahana`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `LivingRooms` int(255) NOT NULL,
  `LivingRoomSqFt` int(255) NOT NULL,
  `Bedrooms` int(255) NOT NULL,
  `BedroomsSqFt` int(255) NOT NULL,
  `DiningRooms` int(255) NOT NULL,
  `DiningRoomSqft` int(255) NOT NULL,
  `BathRooms` int(255) NOT NULL,
  `BathRoomSqFt` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `Name`, `email`, `LivingRooms`, `LivingRoomSqFt`, `Bedrooms`, `BedroomsSqFt`, `DiningRooms`, `DiningRoomSqft`, `BathRooms`, `BathRoomSqFt`) VALUES
(11, '$client', '$clientmail', 1, 2, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `details2`
--

CREATE TABLE `details2` (
  `id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Quantity1` int(255) NOT NULL,
  `Length1` int(255) NOT NULL,
  `Width1` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details2`
--

INSERT INTO `details2` (`id`, `Name`, `email`, `Quantity1`, `Length1`, `Width1`) VALUES
(4, 'Amindu Sangeeth', 'amindusangeeth@gmail.com', 232, 232, 32);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `role`, `username`, `password`) VALUES
(1, 'Isuru Bandara', 'isurubandara@gmail.com', 'super_admin', 'isuru', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Idunil Bandara', 'idunilbandara@gmail.com', 'admin', 'idunil', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Amindu Sangeeth', 'amindusangeeth@gmail.com', 'user', 'ami', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Isuri Samaranayaka', 'isuri@gmail.com', 'user', 'isuri', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details2`
--
ALTER TABLE `details2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `details2`
--
ALTER TABLE `details2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 04:08 PM
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
  `LivingRooms` decimal(65,0) DEFAULT NULL,
  `LivingRoomSqFt` decimal(65,0) NOT NULL,
  `DiningRooms` decimal(65,0) NOT NULL,
  `DiningRoomSqft` decimal(65,0) NOT NULL,
  `OpenPantrys` decimal(65,0) NOT NULL,
  `OpenPantrySqFt` decimal(65,0) NOT NULL,
  `Kitchens` decimal(65,0) NOT NULL,
  `KitchenSqFt` decimal(65,0) NOT NULL,
  `Bedrooms` decimal(65,0) NOT NULL,
  `BedroomSqFt` decimal(65,0) NOT NULL,
  `BathRooms` decimal(65,0) NOT NULL,
  `BathRoomSqFt` decimal(65,0) NOT NULL,
  `StudyLobbies` decimal(65,0) NOT NULL,
  `StudyLobbySqFt` decimal(65,0) NOT NULL,
  `TVRooms` decimal(65,0) NOT NULL,
  `TVRoomSqFt` decimal(65,0) NOT NULL,
  `ClosetRooms` decimal(65,0) NOT NULL,
  `ClosetRoomSqFt` decimal(65,0) NOT NULL,
  `Garages` decimal(65,0) NOT NULL,
  `GarageSqFt` decimal(65,0) NOT NULL,
  `HomeGyms` decimal(65,0) NOT NULL,
  `HomeGymSqFt` decimal(65,0) NOT NULL,
  `Others` decimal(65,0) NOT NULL,
  `OtherSqFt` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `Name`, `email`, `LivingRooms`, `LivingRoomSqFt`, `DiningRooms`, `DiningRoomSqft`, `OpenPantrys`, `OpenPantrySqFt`, `Kitchens`, `KitchenSqFt`, `Bedrooms`, `BedroomSqFt`, `BathRooms`, `BathRoomSqFt`, `StudyLobbies`, `StudyLobbySqFt`, `TVRooms`, `TVRoomSqFt`, `ClosetRooms`, `ClosetRoomSqFt`, `Garages`, `GarageSqFt`, `HomeGyms`, `HomeGymSqFt`, `Others`, `OtherSqFt`) VALUES
(24, 'Isuru Bandara', 'isurubandara318@gmail.com', '2', '4', '2', '4', '2', '4', '2', '4', '2', '4', '2', '4', '2', '4', '2', '4', '2', '4', '2', '4', '2', '4', '2', '4');

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
  `password` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `role`, `username`, `password`, `code`, `update_time`) VALUES
(1, 'Isuru Bandara', 'isurubandara318@gmail.com', 'super_admin', 'isuru', '827ccb0eea8a706c4c34a16891f84e7b', 'GLKW7EC4JA', '2023-06-13 16:30:05'),
(2, 'Idunil Bandara', 'idunilbandara@gmail.com', 'admin', 'idunil', '81dc9bdb52d04dc20036dbd8313ed055', '', '2023-06-12 15:14:01'),
(3, 'Amindu Sangeeth', 'newtechfounder@gmail.com', 'user', 'ami', '81dc9bdb52d04dc20036dbd8313ed055', 'BNWRMUAJIG', '2023-06-12 16:28:31'),
(16, 'Isuri Samaranayaka', 'isurisamaranayaka98@gmail.com', '', 'isuri', '81dc9bdb52d04dc20036dbd8313ed055', '8RSKJ07YZ3', '2023-06-12 16:27:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

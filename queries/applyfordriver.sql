-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 12:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cab_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyfordriver`
--

CREATE TABLE `applyfordriver` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone_number` varchar(10) NOT NULL,
  `Vehicle_brand` varchar(20) NOT NULL,
  `Vehicle_model` varchar(20) NOT NULL,
  `No_Plate` varchar(20) NOT NULL,
  `Year` int(4) NOT NULL,
  `service` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applyfordriver`
--

INSERT INTO `applyfordriver` (`ID`, `Name`, `Phone_number`, `Vehicle_brand`, `Vehicle_model`, `No_Plate`, `Year`, `service`, `Location`) VALUES
(2, 'Geeradha Ganegoda', '0712533693', 'ka', 'sdd', 'wwww', 2345, 'Delivery of goods', 'Inside Colombo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyfordriver`
--
ALTER TABLE `applyfordriver`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applyfordriver`
--
ALTER TABLE `applyfordriver`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

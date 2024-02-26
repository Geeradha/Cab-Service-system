-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 11:31 AM
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
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`ID`, `FirstName`, `LastName`, `UserName`, `DOB`, `MobileNumber`, `Email`, `Address`, `Password`) VALUES
(1, 'Geeradha', 'Sulakshi', 'GEE', '2024-02-16', '0712533693', 'gee@gmail.com', '306/A,wawanawththa RD,Piliyandala', ''),
(3, 'Geeradha', 'Sulakshi', 'GEE', '2024-02-13', '0711955006', 'gee@gmail.com', 'fetgnhyt', '#2345678#'),
(4, 'Geeradha', 'Sulkashi', 'GEE123', '2024-02-02', '0712533693', 'gee@gmail.com', '306/A,wawanawththa RD,Piliyandala', '##2001##'),
(5, 'Geeradha', 'Sulkashi', 'GEE123', '2024-02-02', '0712533693', 'gee@gmail.com', '306/A,wawanawththa RD,Piliyandala', '##2001##'),
(6, 'Geeradha', 'Sulkashi', 'GEE12345', '2024-02-02', '0712533693', 'gee@gmail.com', '306/A,wawanawththa RD,Piliyandala', '##2001##12'),
(7, 'Geeradha', 'Sulkashi', 'GEE456', '2024-02-02', '0712533693', 'gee@gmail.com', '306/A,wawanawththa RD,Piliyandala', '##2001##45'),
(8, 'Geeradha', 'Sulkashi', 'GEE', '2024-02-16', '0712533693', 'gee@gmail.com', '306/A,wawanawththa RD,Piliyandala', '##2001##');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 17, 2020 at 02:13 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminhost`
--

DROP TABLE IF EXISTS `adminhost`;
CREATE TABLE IF NOT EXISTS `adminhost` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `IC` int(12) NOT NULL,
  `Gender` int(11) NOT NULL,
  `DoB` date NOT NULL,
  `PhoneNum` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Category` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `adminhost`
--

INSERT INTO `adminhost` (`ID`, `Name`, `IC`, `Gender`, `DoB`, `PhoneNum`, `Email`, `password`, `Address`, `Category`) VALUES
(1, 'admin', 1111111111, 1, '2020-03-17', 123456789, 'admin@gmail.com', 'admin', 'Asia Pacific University', 1),
(2, 'host', 222222222, 2, '2020-03-10', 987654321, 'host@gmail.com', 'host', 'Asia Pacific University', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `roomID` int(11) NOT NULL AUTO_INCREMENT,
  `roomName` varchar(255) NOT NULL,
  `roomOwner` varchar(255) NOT NULL,
  `roomRequirement` varchar(255) NOT NULL,
  `roomtype` varchar(10) NOT NULL,
  `object1` varchar(255) NOT NULL,
  `object2` varchar(255) NOT NULL,
  `votesObject1` int(11) NOT NULL,
  `votesObject2` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`roomID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomID`, `roomName`, `roomOwner`, `roomRequirement`, `roomtype`, `object1`, `object2`, `votesObject1`, `votesObject2`, `ID`) VALUES
(1, 'testing', 'Host', 'testing', 'Public', 'test1', 'test2', 1, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

DROP TABLE IF EXISTS `voter`;
CREATE TABLE IF NOT EXISTS `voter` (
  `VoterIC` int(12) NOT NULL,
  `VoterName` varchar(255) NOT NULL,
  `VoterGender` varchar(255) NOT NULL,
  `VoterDoB` date NOT NULL,
  `VoterPhoneNum` int(11) NOT NULL,
  `VoterEmail` varchar(255) NOT NULL,
  `VoterAddress` varchar(255) NOT NULL,
  `roomID` int(11) NOT NULL,
  PRIMARY KEY (`VoterIC`),
  KEY `roomID` (`roomID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`VoterIC`, `VoterName`, `VoterGender`, `VoterDoB`, `VoterPhoneNum`, `VoterEmail`, `VoterAddress`, `roomID`) VALUES
(623081111, 'Testing', '1', '2020-06-23', 0, 'voter1@gmail.com', 'KL', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 07:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniconnect`
--
CREATE DATABASE IF NOT EXISTS `uniconnect` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `uniconnect`;

-- --------------------------------------------------------

--
-- Table structure for table `difficultylevel`
--

DROP TABLE IF EXISTS `difficultylevel`;
CREATE TABLE `difficultylevel` (
  `DifficultyLevelID` int(11) NOT NULL,
  `DifficultyLevelValue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectdetail`
--

DROP TABLE IF EXISTS `projectdetail`;
CREATE TABLE `projectdetail` (
  `ProjectDetailID` int(11) NOT NULL,
  `UserOrTeamName` varchar(30) NOT NULL,
  `DifficultyLevelID` tinyint(4) NOT NULL,
  `ProjectName` varchar(50) NOT NULL,
  `TechStack` varchar(50) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `ProjectLink` varchar(50) NOT NULL,
  `GithubLink` varchar(50) NOT NULL,
  `ProjectImageID` int(11) DEFAULT NULL,
  `IsProjectValidated` tinyint(1) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectimage`
--

DROP TABLE IF EXISTS `projectimage`;
CREATE TABLE `projectimage` (
  `ProjectImageID` int(11) NOT NULL,
  `ProjectDetailID` int(11) DEFAULT NULL,
  `ImageFileName` varchar(30) DEFAULT NULL,
  `IsApproved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserType` int(11) NOT NULL,
  `EmailID` int(11) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `IsEmailIdValidated` tinyint(1) NOT NULL,
  `IsPhoneNumberValidated` tinyint(1) NOT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `IsDeleted` tinyint(1) DEFAULT NULL,
  `LastLoggedIn` datetime DEFAULT NULL,
  `CreatedOn` datetime NOT NULL,
  `ModifiedOn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `difficultylevel`
--
ALTER TABLE `difficultylevel`
  ADD PRIMARY KEY (`DifficultyLevelID`);

--
-- Indexes for table `projectdetail`
--
ALTER TABLE `projectdetail`
  ADD PRIMARY KEY (`ProjectDetailID`);

--
-- Indexes for table `projectimage`
--
ALTER TABLE `projectimage`
  ADD PRIMARY KEY (`ProjectImageID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `difficultylevel`
--
ALTER TABLE `difficultylevel`
  MODIFY `DifficultyLevelID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectdetail`
--
ALTER TABLE `projectdetail`
  MODIFY `ProjectDetailID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectimage`
--
ALTER TABLE `projectimage`
  MODIFY `ProjectImageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

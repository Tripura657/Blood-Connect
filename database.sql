-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2026 at 06:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_banks`
--

CREATE TABLE `blood_banks` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `headname` varchar(150) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `remarks` text NOT NULL,
  `bloodtypes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_banks`
--

INSERT INTO `blood_banks` (`id`, `name`, `headname`, `state`, `district`, `city`, `contact`, `email`, `remarks`, `bloodtypes`) VALUES
(3, 'Tripura Tejasri Gajula', 'hi', 'Andhra Pradesh', 'hi', 'Markapuram', '09985594545', 'tripurateja4545@gmail.com', 'hi', 'A+'),
(4, 'Tripura Tejasri Gajula', 'is it ok ', 'Andhra Pradesh', 'Markapuram', 'Markapuram', '09985594545', 'tripurateja4545@gmail.com', 'hi', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `campdetails`
--

CREATE TABLE `campdetails` (
  `id` int(11) NOT NULL,
  `organizationName` varchar(150) NOT NULL,
  `organizationType` varchar(100) NOT NULL,
  `organizerName` varchar(100) NOT NULL,
  `organizerMobile` varchar(20) NOT NULL,
  `organizerEmail` varchar(120) NOT NULL,
  `coOrganizerName` varchar(100) NOT NULL,
  `coOrganizerMobile` varchar(20) NOT NULL,
  `campName` text NOT NULL,
  `campAddress` varchar(255) NOT NULL,
  `bloodBank` varchar(150) NOT NULL,
  `campDate` date NOT NULL,
  `participants` int(11) NOT NULL,
  `cremarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campdetails`
--

INSERT INTO `campdetails` (`id`, `organizationName`, `organizationType`, `organizerName`, `organizerMobile`, `organizerEmail`, `coOrganizerName`, `coOrganizerMobile`, `campName`, `campAddress`, `bloodBank`, `campDate`, `participants`, `cremarks`) VALUES
(1, 'hi', 'hi', 'hi', '9985594545', 'tripurateja4545@gmail.com', 'hi', '9985594545', 'hi', '10-252A, Ramalakshamma Street, Markapur, Prakasam, Andhra pradesh, 523316', 'hi', '2026-02-28', 23456, 'hi'),
(2, 'hi', 'hi', 'hi', '9985594545', 'tripurateja4545@gmail.com', 'hi', '9985594545', 'hi', '10-252A, Ramalakshamma Street, Markapur, Prakasam, Andhra pradesh, 523316', 'hi', '2026-02-28', 12, 'hi'),
(3, 'hi', 'is it ok', 'hi', '9985594545', 'tripurateja4545@gmail.com', 'hi', '9985594545', 'hi', '10-252A, Ramalakshamma Street, Markapur, Prakasam, Andhra pradesh, 523316', 'hi', '2026-02-28', 12, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `UserName`, `Password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `tblblooddonars`
--

CREATE TABLE `tblblooddonars` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `MobileNumber` varchar(15) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `Message` text NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblblooddonars`
--

INSERT INTO `tblblooddonars` (`id`, `FullName`, `Gender`, `BloodGroup`, `EmailId`, `MobileNumber`, `Age`, `Address`, `status`, `Message`, `Password`) VALUES
(1, 'Tripura Tejasri ', 'Female', 'A+', 'tripurateja4545@gmail.com', '9985594545', 20, '10-252A, Ramalakshamma Street, Markapur, Prakasam, Andhra pradesh, 523316', 1, ' hi', '6512bd43d9caa6e02c990b0a82652dca'),
(2, 'Tripura Tejasri Gajula', 'Female', 'A+', 'tripuratejasrig@gmail.com', '9985594545', 20, '10-252A, Ramalakshamma Street, Markapur, Prakasam, Andhra pradesh, 523316', 1, ' hi', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodgroup`
--

CREATE TABLE `tblbloodgroup` (
  `id` int(11) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbloodgroup`
--

INSERT INTO `tblbloodgroup` (`id`, `BloodGroup`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'O+'),
(6, 'O-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `tblbloodrequirer`
--

CREATE TABLE `tblbloodrequirer` (
  `id` int(11) NOT NULL,
  `BloodDonarID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `EmailId` varchar(150) NOT NULL,
  `ContactNumber` varchar(15) NOT NULL,
  `BloodRequirefor` varchar(50) NOT NULL,
  `Message` text NOT NULL,
  `RequestDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbloodrequirer`
--

INSERT INTO `tblbloodrequirer` (`id`, `BloodDonarID`, `name`, `EmailId`, `ContactNumber`, `BloodRequirefor`, `Message`, `RequestDate`) VALUES
(1, 2, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '9985594545', 'Others', 'hi', '2026-02-15 18:30:10'),
(2, 2, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '9985594545', 'Others', 'hi', '2026-02-15 18:49:44'),
(3, 2, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '9985594545', 'Others', 'hi', '2026-02-15 18:51:20'),
(4, 1, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '09985594545', 'Others', 'hi', '2026-02-15 19:55:40'),
(5, 1, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '09985594545', 'Others', 'hi', '2026-02-15 19:56:21'),
(6, 2, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '9985594545', 'Others', '', '2026-02-16 05:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` varchar(15) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`) VALUES
(1, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '9985594545', 'hi', '2026-02-13 17:14:31'),
(2, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '09985594545', 'hi', '2026-02-14 16:46:53'),
(3, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '09985594545', 'hi', '2026-02-15 18:11:31'),
(4, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '9985594545', 'hi', '2026-02-15 18:44:12'),
(5, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '09985594545', 'hi', '2026-02-15 19:56:57'),
(6, 'Tripura Tejasri Gajula', 'tripurateja4545@gmail.com', '09985594545', 'is it ok', '2026-02-15 19:57:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_banks`
--
ALTER TABLE `blood_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campdetails`
--
ALTER TABLE `campdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbloodrequirer`
--
ALTER TABLE `tblbloodrequirer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_banks`
--
ALTER TABLE `blood_banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campdetails`
--
ALTER TABLE `campdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblblooddonars`
--
ALTER TABLE `tblblooddonars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblbloodgroup`
--
ALTER TABLE `tblbloodgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblbloodrequirer`
--
ALTER TABLE `tblbloodrequirer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

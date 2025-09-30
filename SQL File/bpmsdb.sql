-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 05:46 PM
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
-- Database: `bpmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Doreen', 'admin', 706617337, 'doreenlimung\'i89@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-03-10 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `AptDate` timestamp NULL DEFAULT current_timestamp(),
  `AptTime` time DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RemarkDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(22, '707081914', 'amina', 'amina123@gmail.com', 700455385, '2024-05-04 21:00:00', '06:58:00', 'Bridal', '2024-03-31 10:54:43', 'accepted', '1', '2024-03-31 11:01:59'),
(23, '119407906', 'hope', 'hope100@gmail.com', 777654444, '2024-04-03 21:00:00', '19:15:00', 'facial', '2024-03-31 11:11:56', '', '', '2024-03-31 11:11:56'),
(24, '428189770', 'george', 'anita10@gmail.com', 788765666, '2024-04-04 21:00:00', '01:50:00', 'charcoal facial', '2024-03-31 20:48:38', '', '', '2024-03-31 20:48:38'),
(25, '673215453', 'faith', 'ntinyariireen8@gmail.com', 708999876, '2024-04-04 21:00:00', '14:55:00', 'fruit facial', '2024-03-31 20:52:48', '', '', '2024-03-31 20:52:48'),
(26, '775029078', 'last', 'ntinyariireen4@gmail.com', 789000000, '2025-10-10 21:00:00', '22:49:00', 'facial', '2024-04-05 14:44:38', '', '', '2024-04-05 14:44:38'),
(27, '433853645', 'HOPING', 'HOPING100@GMAIL.COM', 99999, '2024-04-22 21:00:00', '13:55:00', 'Bridal', '2024-04-09 22:53:26', '', '', '2024-04-09 22:53:26'),
(28, '910541962', 'doreen', 'doreen1@gmail.com', 789557575, '2024-04-10 21:00:00', '15:27:00', 'Bridal', '2024-04-10 00:25:42', '', '', '2024-04-10 00:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Gender` enum('Female','Male','Transgender') DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`ID`, `Name`, `Email`, `MobileNumber`, `Gender`, `Details`, `CreationDate`, `UpdationDate`) VALUES
(9, 'reen', 'ireen7310@gmail.com', 745677889, 'Female', 'new', '2024-03-31 11:16:55', NULL),
(10, 'george', 'anita10@gmail.com', 745677889, 'Female', 'kk', '2024-04-05 11:11:12', NULL),
(11, 'rose', 'roe@gmail.com', 788900900, 'Female', 'roe', '2024-04-09 19:31:27', NULL),
(12, 'reen', 'ireenalex70@gmail.com', 986666685, 'Female', 'iuhn', '2024-04-09 22:10:43', NULL),
(13, 'anita', 'anita10@gmail.com', 745677889, 'Female', 'HOPEUU', '2024-04-09 22:13:43', NULL),
(14, 'jane', 'ireen7310@gmail.com', 999999, 'Female', 'bh', '2024-04-09 22:26:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AppointmentID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`, `AppointmentID`) VALUES
(148, 0, 17, 621649404, '2024-04-09 22:20:32', 22),
(152, 14, 17, 589263396, '2024-04-09 22:29:43', NULL),
(153, 12, 17, 558779650, '2024-04-09 22:29:59', NULL),
(154, 0, 19, 683366899, '2024-04-09 22:31:16', 23),
(155, 0, 17, 800582754, '2024-04-09 22:54:05', 27),
(156, 0, 19, 760354762, '2024-04-10 00:00:40', 24),
(157, 14, 21, 812492872, '2024-04-10 00:01:04', NULL),
(158, 0, 20, 278252273, '2024-04-10 00:26:39', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '                Our main focus is on quality and hygiene.  Our staff is well trained and experienced, offering advanced services . The specialities in the parlour are, apart from regular bleachings and Facials, many types of makeups Bridal and cine make-up and different types of Facials.', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '          DONHOLM,PHASE8', 'doreenlimungi89@gmail.com', 254706617337, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Cost`, `CreationDate`) VALUES
(17, 'facial', 2000, '2024-03-31 10:43:06'),
(18, 'fruit facial', 1500, '2024-03-31 10:44:54'),
(19, 'charcoal facial', 1300, '2024-03-31 10:45:09'),
(20, 'touchups', 1000, '2024-03-31 10:45:28'),
(21, 'Bridal', 3500, '2024-03-31 10:45:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `FK_AppointmentID` (`AppointmentID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD CONSTRAINT `FK_AppointmentID` FOREIGN KEY (`AppointmentID`) REFERENCES `tblappointment` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 11:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `color` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `branch` varchar(100) CHARACTER SET utf8 NOT NULL,
  `teacher` varchar(100) CHARACTER SET utf8 NOT NULL,
  `booking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `branch`, `teacher`, `booking`) VALUES
(4, 'Karate', '#FFD700', '2021-01-01 22:57:00', '2021-01-01 03:57:00', 'Hillview', 'SH Nimal', 5),
(5, 'Whushu', '#FF8C00', '2021-01-02 11:52:00', '2021-01-02 16:52:00', 'Little India', 'CM Nimal', 7),
(6, 'tttt', '#FF0000', '2021-01-03 11:57:00', '2021-01-03 04:57:00', 'Getlang', 'AA Janith', 9),
(8, 'New', '#008000', '2021-01-29 02:43:00', '2021-01-29 05:46:00', 'Little India', 'Teacher 1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminId` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminId`, `name`, `email`, `password`) VALUES
('1', 'admin1', 'admin@gmail.com', 'admin123'),
('AD-1784', 'XXX', 'XX@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `bookingid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nic` int(9) NOT NULL,
  `sessionid` int(11) NOT NULL,
  `slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`bookingid`, `name`, `nic`, `sessionid`, `slot`) VALUES
(7, 'KP', 444, 4, 0),
(8, 'HR', 789, 4, 0),
(9, 'HR', 789, 6, 0),
(10, 'SP', 123654789, 4, 0),
(11, 'Steve Rogers', 1233214, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'xxx', 'saman@gmail.com', '11ss', 'aazc'),
(2, 'Name', 'Email', 'Subject', 'Message:'),
(3, 'Tony', 'tony@gmail.com', 'GYM', 'XXXX');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `PayId` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Payment_Method` varchar(10) NOT NULL,
  `Card_Number` int(16) NOT NULL,
  `Expire_date` varchar(5) NOT NULL,
  `Holder_Name` varchar(50) NOT NULL,
  `Cvv` int(3) NOT NULL,
  `NIC` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`PayId`, `Price`, `Payment_Method`, `Card_Number`, `Expire_date`, `Holder_Name`, `Cvv`, `NIC`) VALUES
(11, 400, 'creditCrd', 2147483647, '11/23', 'Teran', 533, 971921757),
(12, 531, 'debitCrd', 2147483647, '22/25', 'Teran', 123, 971921757),
(13, 531, 'debitCrd', 2147483647, '22/25', 'Teran', 123, 971921757),
(14, 531, 'debitCrd', 2147483647, '22/25', 'Teran', 123, 971921757),
(15, 177, 'creditCrd', 2147483647, '12/12', 'S', 123, 123654789),
(16, 177, 'creditCrd', 2147483647, '04/14', 'SA', 256, 123654789),
(17, 177, 'creditCrd', 2147483647, '04/14', 'SA', 256, 123654789),
(18, 177, 'creditCrd', 2147483647, '04/14', 'SA', 256, 123654789),
(19, 400, 'creditCrd', 111, '111', 'www', 111, 147852369),
(20, 400, 'creditCrd', 123, '123', 'SA', 123, 789),
(21, 400, 'creditCrd', 1234, '1234', 'kp', 123, 444),
(22, 531, 'creditCrd', 111, '21', 'kp', 234, 444),
(23, 177, 'creditCrd', 333, '32', 'kp', 23, 444),
(24, 177, 'debitCrd', 2147483647, '1234', 'SR', 123, 1233214),
(25, 400, 'creditCrd', 2147483647, '2222', 'SA', 111, 1233214);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `NIC` int(9) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Age` int(2) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Student_Id` varchar(10) NOT NULL,
  `Registration_date` date NOT NULL,
  `ExpireDate` date NOT NULL,
  `Remark` varchar(100) NOT NULL,
  `martial_art` varchar(80) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Package` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`NIC`, `First_Name`, `Last_Name`, `Email`, `Age`, `Gender`, `Student_Id`, `Registration_date`, `ExpireDate`, `Remark`, `martial_art`, `Password`, `Package`) VALUES
(444, 'Kavindu', 'Perera', 'kp@gmail.com', 30, 'Male', 'ST-111', '2021-01-28', '2021-01-30', 'xxxx', 'Muay_Thai', '123', 'MTI*4'),
(789, 'Hemal', 'Ranasinghe', 'hemal@gmail.com', 24, 'male', 'ST-12388', '2021-01-27', '2021-01-30', 'xxxx', 'Boxing', '1112', 'MTI*4'),
(1233214, 'Steve', 'Rogers', 'sr@gmail.com', 25, 'Male', '123321', '2021-01-29', '2021-01-20', 'XXXX', 'Muay_Thai', '1234', 'MTU'),
(123654789, 'Saman', 'Priyantha', 'saman@gmail.com', 24, 'male', 'ST-123', '2021-01-26', '2021-01-29', 'xxxx', 'Boxing', '1234', 'MTU'),
(147852369, 'Nimal', 'Sampath', 'sampath@gmail.com', 24, 'male', 'ST-1235', '2021-01-27', '2022-01-26', 'xxxx', 'Boxing', '111', 'MTI*4'),
(931951755, 'Kamal', 'Deshapriya', 'kamal@gmail.com', 25, 'Male', 'ST-0001', '2021-01-20', '2021-01-28', 'New Student', '', 'kamal95', 'Bjj'),
(971921757, 'Teran', 'Udayakantha', 'teran@gmail.com', 24, 'Male', 'ST-2525', '2021-01-14', '2022-01-01', 'New Student', 'Muay_Thai', 'teran123', 'MTI*4');

-- --------------------------------------------------------

--
-- Table structure for table `tblteachers`
--

CREATE TABLE `tblteachers` (
  `nic` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `teacherId` varchar(5) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mart` varchar(50) NOT NULL,
  `Monthly_Salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblteachers`
--

INSERT INTO `tblteachers` (`nic`, `name`, `teacherId`, `mobile`, `email`, `mart`, `Monthly_Salary`) VALUES
('1111', 'Teacher 2', '12346', 123321, 't2@gmail.com', 'Bjj', 100000),
('123456', 'Teacher 1', '222', 12345, 't1@gmail.com', 'Muay_Thai', 50000),
('34234', 'sadasd', '34343', 23342, 'dsfsdf', 'Kraw_maga', 3454),
('906360594v', 'sunil', '1', 778569569, 'sunil@gmail.com', 'Muay_Thai', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`PayId`),
  ADD KEY `NIC` (`NIC`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`NIC`);

--
-- Indexes for table `tblteachers`
--
ALTER TABLE `tblteachers`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `PayId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD CONSTRAINT `tblpayment_ibfk_1` FOREIGN KEY (`NIC`) REFERENCES `tblstudent` (`NIC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

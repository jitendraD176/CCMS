-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 10:40 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdvocateID` bigint(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Age` int(10) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdvocateID`, `Name`, `Email`, `Contact`, `Address`, `Age`, `Password`) VALUES
(1806086, 'Jitendra ', 'jitendra@gmail.com', 8357031947, 'Shivpuri, MP.', 19, 'jitendra@123');

-- --------------------------------------------------------

--
-- Table structure for table `advocates`
--

CREATE TABLE `advocates` (
  `ID` bigint(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Age` int(11) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `BarRegNo` varchar(15) NOT NULL,
  `EnDistt` varchar(10) NOT NULL,
  `EnState` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advocates`
--

INSERT INTO `advocates` (`ID`, `Name`, `Email`, `Age`, `Password`, `Contact`, `Address`, `BarRegNo`, `EnDistt`, `EnState`) VALUES
(1, 'Sachin Mehra', 'sachin@gmail.com', 20, 'sachin@123', 9162334451, 'Gorakpur UP.', '145141', 'patna', 'bihar'),
(2, 'saumya singh', 'saumya@gmail.com', 23, 'saumya@123', 91623344545, 'jounpur, UP.', '451422', 'patna', 'bihar');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `CaseID` bigint(11) NOT NULL,
  `CaseType` varchar(25) NOT NULL,
  `Head` varchar(225) NOT NULL,
  `AdvocateID` bigint(10) NOT NULL,
  `LastDate` date NOT NULL,
  `NextDate` date NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Age` int(10) NOT NULL,
  `Gender` text NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Mname` varchar(25) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` text NOT NULL,
  `ZipCode` int(6) NOT NULL,
  `FIRno` varchar(15) NOT NULL,
  `Incident` varchar(225) NOT NULL,
  `IDate` date NOT NULL,
  `ITime` time NOT NULL,
  `RDate` date NOT NULL,
  `Location` text NOT NULL,
  `Discription` varchar(5000) NOT NULL,
  `Reporter` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`CaseID`, `CaseType`, `Head`, `AdvocateID`, `LastDate`, `NextDate`, `Name`, `Age`, `Gender`, `Fname`, `Mname`, `Address`, `City`, `ZipCode`, `FIRno`, `Incident`, `IDate`, `ITime`, `RDate`, `Location`, `Discription`, `Reporter`) VALUES
(1, '', 'Jitendra', 0, '1111-11-12', '1111-11-13', 'Ashutosh Pratap Singh', 20, 'male', 'jitendra', 'ac', 'sasaram', 'sasaram', 13123, '111/AR2346', 'Group humilation', '2020-01-15', '22:30:00', '2020-01-16', 'Brahamputra Hostel', 'Person/Vehicle Codes: R-Reported by V-Victim W-Witness P-Parent C-Contact O-Owner D-Driver X-Other\r\nRace/Ethnic Codes: W-White B-Black H-Hispanic I-American Indian C-Chinese P-Pacific Islander O-All Others X-Unknown\r\n\r\nDetails of the incidents:\r\n\r\nPerson/Vehicle Codes: R-Reported by V-Victim W-Witness P-Parent C-Contact O-Owner D-Driver X-Other\r\nRace/Ethnic Codes: W-White B-Black H-Hispanic I-American Indian C-Chinese P-Pacific Islander O-All Others X-Unknown\r\n\r\nDetails of the incidents:\r\n\r\nPerson/Vehicle Codes: R-Reported by V-Victim W-Witness P-Parent C-Contact O-Owner D-Driver X-Other\r\nRace/Ethnic Codes: W-White B-Black H-Hispanic I-American Indian C-Chinese P-Pacific Islander O-All Others X-Unknown\r\n\r\nDetails of the incidents:\r\n\r\nPerson/Vehicle Codes: R-Reported by V-Victim W-Witness P-Parent C-Contact O-Owner D-Driver X-Other\r\nRace/Ethnic Codes: W-White B-Black H-Hispanic I-American Indian C-Chinese P-Pacific Islander O-All Others X-Unknown\r\n\r\nDetails of the incidents:\r\n\r\n123456789123456789', 'Jitendra'),
(2, '', '', 0, '0000-00-00', '0000-00-00', 'abc', 19, 'male', 'jitendra', 'ac', 'gjghfd', 'patn', 141, '111/AR2346', 'Group humilation', '1111-11-10', '12:01:00', '1111-11-01', 'Brahamputra Hostel', 'nef9uwfhv   7yt74yt8vm67t \r\nHello guys, this is unpossible pog here.\r\nToday, I shall show you the easitest way to display live notification count without refreshing the page like facebook.\r\nAs soon as we insert data, the notification count changes which means we no longer have to refresh the page.\r\nI am using the combination of php, javascript and basic ajax.\r\nLet say, if someone likes your photo on facebook, it get stored in database. So in short we have to fetch count of data from database table.\r\nLets get started.\r\nHere I created one sample page which shows static number of notification so we have to make it dynamic and live.\r\nI created one table in database which represents your notification.\r\nI created one file called “DATA.PHP ” which displays the notification.\r\nBut we only want the count so echo the count only.\r\nNow the next task is to access that file in our design page using ajax.\r\nSo, create one javascript function and go to google.\r\nSearch for ajax code. Go inside w3school site\r\nCopy paste the ajax code.\r\nAfter the function end, type the function name with rounded brackets and semicolan.\r\nGive an ID to division or any tag that you want.\r\nAnd copy that same ID iHello guys, this is unpossible pog here.\r\nToday, I shall show you the easitest way to display live notification count without refreshing the page like facebook.\r\nAs soon as we insert data, the notification count changes which means we no longer have to refresh the page.\r\nI am using the combination of php, javascript and basic ajax.\r\nLet say, if someone likes your photo on facebook, it get stored in database. So in short we have to fetch count of data from database table.\r\nLets get started.\r\nHere I created one sample page which shows static number of notification so we have to make it dynamic and live.\r\nI created one table in database which represents your notification.\r\nI created one file called “DATA.PHP ” which displays the notification.\r\nBut we only want the count so echo the count only.\r\nNow the next task is to access that file in our design page using ajax.\r\nSo, create one javascript function and go to google.\r\nSearch for ajax code. Go inside w3school site\r\nCopy paste the ajax code.\r\nAfter the function end, type the function name with rounded brackets and semicolan.\r\nGive an ID to division or any tag that you want.\r\nAnd copy that same ID i', 'saumya'),
(3, '', 'Sachin', 0, '1212-12-12', '1313-03-13', 'Jitendra ', 0, 'male', '', '', '', '', 0, '', '', '0000-00-00', '00:00:00', '0000-00-00', '', '', 'raman@gmail.com'),
(4, '', 'Raman', 0, '0000-00-00', '0000-00-00', 'smart parking system', 0, 'male', '', '', '', '', 0, '', '', '0000-00-00', '00:00:00', '0000-00-00', '', '', 'raman@gmail.com'),
(5, '', 'Jitendra', 0, '1212-12-12', '0111-11-12', 'smart parking system', 0, 'male', '', '', '', '', 0, '', '', '0000-00-00', '00:00:00', '0000-00-00', '', '', 'raman@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ClientID` bigint(11) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `LName` varchar(15) NOT NULL,
  `DoB` date NOT NULL,
  `Gender` text NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(25) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `AadhaarNo` varchar(25) NOT NULL,
  `Occupation` varchar(25) NOT NULL,
  `Nationality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ClientID`, `FName`, `Email`, `Contact`, `Address`, `Password`, `LName`, `DoB`, `Gender`, `City`, `State`, `Pincode`, `AadhaarNo`, `Occupation`, `Nationality`) VALUES
(1, 'Swati', 'swati@gmail.com', 321462, 'gjghfddiow', 'swati@123', 'sharma', '1999-11-11', 'female', 'patna', 'bihar', 141, '154561654', 'none', 'India'),
(1122334455, 'raman kumar nirala', 'raman@gmail.com', 9162334451, 'gaya, bihar', 'raman@123', '', '1990-12-10', 'male', 'gaya', 'bihar', 45458, '1545616', 'none', 'indian'),
(1122334456, 'saumya', 'saumya@gmail.com', 321462, 'gjghfd', 'saumya@123', 'singh', '1999-10-10', 'female', 'patn', 'biha', 141, '1545616', 'none', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` bigint(11) NOT NULL,
  `CaseID` bigint(10) NOT NULL,
  `TransitionID` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 06:16:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdvocateID`);

--
-- Indexes for table `advocates`
--
ALTER TABLE `advocates`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`CaseID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ClientID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocates`
--
ALTER TABLE `advocates`
  MODIFY `ID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1661806087;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `CaseID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ClientID` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1122334457;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

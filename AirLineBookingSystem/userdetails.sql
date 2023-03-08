-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 08:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `HoldingTimeAndDate` datetime(6) NOT NULL,
  `Stayvenue` varchar(200) NOT NULL,
  `BoardingPass` bigint(200) NOT NULL,
  `NumberOfPeople` int(200) NOT NULL,
  `MealPreferance` int(200) NOT NULL,
  `Lunch` text NOT NULL,
  `Dinner` text NOT NULL,
  `Additionalrequest` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`FirstName`, `LastName`, `HoldingTimeAndDate`, `Stayvenue`, `BoardingPass`, `NumberOfPeople`, `MealPreferance`, `Lunch`, `Dinner`, `Additionalrequest`) VALUES
('', '', '0000-00-00 00:00:00.000000', '', 0, 0, 0, '', '', ''),
('', '', '0000-00-00 00:00:00.000000', '', 0, 0, 0, '', '', ''),
('', '', '0000-00-00 00:00:00.000000', '', 0, 0, 0, '', '', ''),
('', '', '0000-00-00 00:00:00.000000', '', 0, 0, 0, '', '', ''),
('saafAEG', 'sDGSE', '0000-00-00 00:00:00.000000', 'segwaER', 0, 0, 0, 'DNRTSH', 'DHJTRS', 'ESTJRSE'),
('saafAEG', 'sDGSE', '0000-00-00 00:00:00.000000', 'segwaER', 0, 0, 0, 'DNRTSH', 'DHJTRS', 'ESTJRSE'),
('', '', '0000-00-00 00:00:00.000000', '', 0, 0, 0, '', '', ''),
('hhhhh', 'ffffff', '0000-00-00 00:00:00.000000', 'jambusar', 0, 0, 0, 'vufiyfiufi', 'guofifo', 'gufikdk'),
('', '', '0000-00-00 00:00:00.000000', '', 0, 0, 0, 'vjckiiju', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `AdminFirstName` text NOT NULL,
  `AdminLastName` text NOT NULL,
  `AdminmobileNumber` bigint(11) NOT NULL,
  `AdminEmail` text NOT NULL,
  `AdminPassword` text NOT NULL,
  `AdminDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`AdminFirstName`, `AdminLastName`, `AdminmobileNumber`, `AdminEmail`, `AdminPassword`, `AdminDOB`) VALUES
('Joy@884946', 'Gujjar', 7310907032, 'jaygujjar79@gmail.com', 'Joy@11092000', '2023-03-07'),
('Joy@884946', 'Gujjar', 7310907032, 'jaygujjar79@gmail.com', 'Joy@11092000', '2023-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `FirstName` varchar(200) NOT NULL DEFAULT current_timestamp(),
  `LastName` varchar(200) NOT NULL,
  `Gender` text NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`FirstName`, `LastName`, `Gender`, `Address`, `Email`, `Password`) VALUES
('', 'eatjeat', 'eatjer', 'fttjrsy', 'stjq4ea', ''),
('', 'eatjeat', 'eatjer', 'fttjrsy', 'stjq4ea', ''),
('sfhsetjae', 'eatjeat', 'eatjer', 'fttjrsy', 'stjq4ea', ''),
('sfhsetjae', 'eatjeat', 'eatjer', 'fttjrsy', 'stjq4ea', ''),
('jay', 'gujjar', 'male', '232', 'jaygujjar79@gmail.com', ''),
('dVsdV', 'dbzdffbBsd', 'dfbdfsz', 'zdfbdzS', 'zdfbfsdb', ''),
('dsgaerhg', 'aethearw', 'stjrhrwhj', 'jsryjiyrs', 'shrtjwrk', 'setjw6etj4'),
('szdfhaerwh', 'vdsgthhhhh', 'hhhhhjjj', 'jjjjjjjj', 'jaygujjar79@gmail.com', 'Joy@884946'),
('vishwa', 'gujjar', 'female', '21, rang avdhut nagar society', 'vishwagujjar135@gmail.com', 'Vishwa@11092000'),
('werQ', 'WEQTR2W', 'WEGTWR', 'WRTG', 'RGR5', 'SRGW5R'),
('', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `authentication1`
--

CREATE TABLE `authentication1` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authentication1`
--

INSERT INTO `authentication1` (`username`, `password`) VALUES
('jaygujjar79@gmail.com', 'Joy@884946'),
('jaygujjar79@gmail.com', 'Joy@884946'),
('Vishwagujjar135@gmail.com', 'Vishwa@1422003'),
('Vishwagujjar135@gmail.com', 'Vishwa@1422003');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE `cancellation` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Boardingpass` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` text NOT NULL,
  `Address` text NOT NULL,
  `reasonofcontact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flightdetails`
--

CREATE TABLE `flightdetails` (
  `FlightNumber` int(20) NOT NULL,
  `AirLineName` text NOT NULL,
  `DepartureTime` text NOT NULL,
  `ArrivalTime` text NOT NULL,
  `DeparturePlace` text NOT NULL,
  `ArrivalPlace` text NOT NULL,
  `EconomicPrice` int(200) NOT NULL,
  `BussinessFlightPrice` text NOT NULL,
  `TotalStay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flightdetails`
--

INSERT INTO `flightdetails` (`FlightNumber`, `AirLineName`, `DepartureTime`, `ArrivalTime`, `DeparturePlace`, `ArrivalPlace`, `EconomicPrice`, `BussinessFlightPrice`, `TotalStay`) VALUES
(0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 0, '0', 0),
(0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'fiydiyyuckl', 0, '0', 0),
(0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'fiydiyyuckl', 0, '0', 0),
(0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'fiydiyyuckl', 0, '0', 0),
(0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 'fiydiyyuckl', 0, '0', 0),
(0, '', 'voufiuckjcyi', '', '', 'fiydiyyuckl', 0, 'bh;gb;', 0),
(0, '', 'voufiuckjcyi', '', '', 'fiydiyyuckl', 0, 'bh;gb;', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Request` longtext NOT NULL,
  `MealType` text NOT NULL,
  `AccomodationAtAirport` text NOT NULL,
  `ReschedualingFlight` date NOT NULL,
  `CancellationReason` longtext NOT NULL,
  `RefundReason` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Request`, `MealType`, `AccomodationAtAirport`, `ReschedualingFlight`, `CancellationReason`, `RefundReason`) VALUES
('gvlufgufou', '', '', '0000-00-00', '', ''),
('gvlufgufou', '', '', '0000-00-00', '', ''),
('', '', '', '0000-00-00', '', 'hjdrjhs');

-- --------------------------------------------------------

--
-- Table structure for table `urgentissues`
--

CREATE TABLE `urgentissues` (
  `Email` text NOT NULL,
  `Issues` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user info`
--

CREATE TABLE `user info` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `mobileNumber` bigint(20) NOT NULL,
  `EmailId` text NOT NULL,
  `Password` text NOT NULL,
  `BoardingPassnum` bigint(20) NOT NULL,
  `Address` text NOT NULL,
  `FlightNumber` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

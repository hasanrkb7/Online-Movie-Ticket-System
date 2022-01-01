-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 05:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_booking_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', '1a1dc91c907325c69271ddf0c944bc72');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phonenumber` char(100) NOT NULL,
  `date` char(25) NOT NULL,
  `time` char(25) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `cardnumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `name`, `email`, `phonenumber`, `date`, `time`, `amount`, `cardnumber`) VALUES
(1, 'arko', 'arko234@gmail.com', '0176480000', '2018-03-18', '5PM', '350BDT', '37d511aa9b83678623cf0e95ba012fc8'),
(2, 'Razoan', 'razoan421@gmail.com', '01994778523', '2018-08-13', '3PM', '300BDT', '765dc557098d4733b938f5148628efd9'),
(3, 'Preetom', 'preetom12@gmail.com', '01789523415', '2018-08-09', '11AM', '300BDT', '0ef688001461984afbfd2dcaa4995170'),
(4, 'zahin', 'zahin123@gmail.com', '01521408118', '2018-08-02', '3PM', '350BDT', '09bf5f5029aec20a347d2a6b6067ac75'),
(5, 'Mehnaz', 'mehnaz333@gmail.com', '01582697941', '2018-07-12', '11AM', '300BDT', '97a039baa28431f7d4efd485b5b90f80'),
(6, 'asef', 'asf@gmail.com', '01858789456', '2018-12-12', '3PM', '300BDT', '719ea33fe1c6e6c23080cc9f3a927d7a'),
(7, 'Asif', 'kazirifat01875@gmail.com', '123456', '', '', '', 'cb77903cee35cfd2500f186679f008b9'),
(8, 'Asif', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `cinema_hall`
--

CREATE TABLE `cinema_hall` (
  `hall_id` varchar(30) NOT NULL,
  `hallname` varchar(30) NOT NULL,
  `moviename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinema_hall`
--

INSERT INTO `cinema_hall` (`hall_id`, `hallname`, `moviename`) VALUES
('', '', ''),
('1', 'Star Cineplex', 'Mission Impossible,Black Panther,Avengers-Infinity War'),
('2', 'Blockbusters', 'Incredibles 2, Deadpool 2, Aquaman, Hellboy'),
('3', 'Shyamoli Cinema', 'Sanju, Padmavaat, October, Raazi');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mve_id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `time` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mve_id`, `name`, `time`, `date`, `price`) VALUES
(1, 'MISSION IMPOSSIBLE - FALLOUT', '2pm', '2018-08-02', 350),
(4, 'Avatar', '2pm', '2018-08-24', 200),
(9, 'Aynabaji', '4pm', '2018-08-17', 350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cinema_hall`
--
ALTER TABLE `cinema_hall`
  ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mve_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `mve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

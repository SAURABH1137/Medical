-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 09:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `mname` text NOT NULL,
  `mtype` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `mdate` text NOT NULL,
  `edate` text NOT NULL,
  `description` text NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mnumber` int(11) NOT NULL,
  `address` text NOT NULL,
  `address1` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(7) NOT NULL,
  `img` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `lname`, `email`, `mnumber`, `address`, `address1`, `city`, `state`, `zip`, `img`, `gender`) VALUES
(1, 'Amir', 'Rajerawkar', 'amir@gmail.com', 2147483647, 'Bendra,Road Mumbai', 'Bendra,Road Mumbai', 'Bendra', 'Maharashtra', 400012, ' http://127.0.0.1/medical/img/profileimg/admin.png', 'male'),
(2, 'Sagar', 'Shinde', 'sagar@gmail.com', 2147483647, 'Sasawad,Pune', 'Sasawad,Pune', 'Pune', 'Maharashtra', 410004, ' http://127.0.0.1/medical/img/profileimg/admin.png', 'male'),
(3, 'Swara', 'Sathavkar', 'swara@gmail.com', 2147483647, 'Sasawad,Pune', 'Sasawad,Pune', 'Pune', 'Maharashtra', 410004, ' http://127.0.0.1/medical/img/profileimg/admin.png', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `ID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `phoneno` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`ID`, `username`, `password`, `email`, `address`, `phoneno`, `gender`) VALUES
(1, 'admin', '123', 'admin@gmail.com', '13', 123, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_2` (`email`);
ALTER TABLE `patient` ADD FULLTEXT KEY `email` (`email`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

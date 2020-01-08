-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2020 at 08:53 PM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.2.26-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobseeker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbAuth`
--

CREATE TABLE `tbAuth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbAuth`
--

INSERT INTO `tbAuth` (`id`, `username`, `email`, `password`, `roles`) VALUES
(13, 'siniaja', 'siniaja@sini.com', '$2y$10$mdasiCzaHv29pMw/mAm8WuLu6OxZv7k8JEldTVJEDl0Py/RYkek8y', 'jobseeker'),
(14, 'dawda', 'dani@ayoloka.com', '$2y$10$i1SkWBh/G019QS.RkxYtcOfebEhqjwvg0U9XErdIjsxHiBzGimNii', 'jobseeker'),
(15, 'dono', 'dono@dono.com', '$2y$10$7pOwaOLUUC7mx1BvElOf9ucApEwD29VqHLdaq0wO3pZXOu5al/G2.', 'jobseeker'),
(16, 'testes', 'testes@gmail.com', '$2y$10$3cuoJ2.vyxoYCvU0ZVzqvucoKNN7WjmJaY5D3.fR5P.btU7bOPnKi', 'jobseeker'),
(17, 'popo', 'popo@popo.com', '$2y$10$Ys3aOKrCqkUQRZ2AA/OCp.KkKOT0/2clU8uC8VStIm0BqYpO0NZBy', 'jobseeker'),
(18, 'pipi', 'pipi@pipi.com', '$2y$10$BxQUuxWPKW3rrQuBOTmcReYz0Tmjuw4pn.ttNrriYvvlOBrt2aY6O', 'jobseeker'),
(19, 'lulu', 'lulu@lulu.com', '$2y$10$b43J445xcwDBva6gJNAu1eSP4vqQhS2yAnP1pJU8ceT6JHbW/FRZy', 'jobseeker');

-- --------------------------------------------------------

--
-- Table structure for table `tbEmployeer`
--

CREATE TABLE `tbEmployeer` (
  `id` int(11) NOT NULL,
  `tokenID` int(11) DEFAULT NULL,
  `fullName` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phoneNumber` int(15) DEFAULT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `jobTitle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbEmployeer`
--

INSERT INTO `tbEmployeer` (`id`, `tokenID`, `fullName`, `address`, `phoneNumber`, `companyName`, `jobTitle`) VALUES
(1, 13, 'SiniAja', 'Siniaja address', 812020119, 'SiniAja.cm', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `tbJobJoin`
--

CREATE TABLE `tbJobJoin` (
  `id` int(11) NOT NULL,
  `idJob` int(11) NOT NULL,
  `idJobseeker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbJobList`
--

CREATE TABLE `tbJobList` (
  `id` int(11) NOT NULL,
  `idEmployeer` int(11) DEFAULT NULL,
  `jobName` varchar(100) DEFAULT NULL,
  `jobCategory` varchar(100) DEFAULT NULL,
  `jobDesc` varchar(255) DEFAULT NULL,
  `jobLocation` varchar(100) DEFAULT NULL,
  `jobSalary` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbJobList`
--

INSERT INTO `tbJobList` (`id`, `idEmployeer`, `jobName`, `jobCategory`, `jobDesc`, `jobLocation`, `jobSalary`) VALUES
(1, 1, 'TestJob', 'IT', 'Membuat Makan IOT', 'Surabaya', 10000000),
(2, 1, 'HR Manager', 'Human Resource', 'Hiring People', 'Malang', 5000000),
(3, 1, 'Cleaning Service', 'Office Support', 'Cleaning the office', 'Jakarta', 2500000),
(4, NULL, 'Quality Assurance', 'QA', 'QA', 'Banten', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbJobseeker`
--

CREATE TABLE `tbJobseeker` (
  `id` int(11) NOT NULL,
  `tokenID` int(11) DEFAULT NULL,
  `fullName` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phoneNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbAuth`
--
ALTER TABLE `tbAuth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbEmployeer`
--
ALTER TABLE `tbEmployeer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tokenID` (`tokenID`);

--
-- Indexes for table `tbJobJoin`
--
ALTER TABLE `tbJobJoin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idJobseeker` (`idJobseeker`),
  ADD UNIQUE KEY `idJob` (`idJob`);

--
-- Indexes for table `tbJobList`
--
ALTER TABLE `tbJobList`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmployeer` (`idEmployeer`);

--
-- Indexes for table `tbJobseeker`
--
ALTER TABLE `tbJobseeker`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbJobseeker_UN` (`tokenID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbAuth`
--
ALTER TABLE `tbAuth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbEmployeer`
--
ALTER TABLE `tbEmployeer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbJobJoin`
--
ALTER TABLE `tbJobJoin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbJobList`
--
ALTER TABLE `tbJobList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbJobseeker`
--
ALTER TABLE `tbJobseeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbEmployeer`
--
ALTER TABLE `tbEmployeer`
  ADD CONSTRAINT `tbEmployeer_ibfk_1` FOREIGN KEY (`tokenID`) REFERENCES `tbAuth` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbJobJoin`
--
ALTER TABLE `tbJobJoin`
  ADD CONSTRAINT `tbJobJoin_ibfk_1` FOREIGN KEY (`idJob`) REFERENCES `tbJobList` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbJobJoin_ibfk_2` FOREIGN KEY (`idJobseeker`) REFERENCES `tbJobseeker` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbJobList`
--
ALTER TABLE `tbJobList`
  ADD CONSTRAINT `tbJobList_ibfk_1` FOREIGN KEY (`idEmployeer`) REFERENCES `tbEmployeer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbJobseeker`
--
ALTER TABLE `tbJobseeker`
  ADD CONSTRAINT `tbJobseeker_FK` FOREIGN KEY (`tokenID`) REFERENCES `tbAuth` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

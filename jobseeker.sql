-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2020 at 05:03 PM
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
(19, 'lulu', 'lulu@lulu.com', '$2y$10$b43J445xcwDBva6gJNAu1eSP4vqQhS2yAnP1pJU8ceT6JHbW/FRZy', 'jobseeker'),
(20, 'jobseeker', 'jobseeker@job.com', '$2y$10$4NPGmzKLxSB7hG4LRlL1J.CqozNCazKspC2xo.udNP1pbfIW4QSa.', 'jobseeker'),
(21, 'employeer', 'employeer@employeer.com', '$2y$10$6MlzCMCTb3oGXegsQHSgXOJSxRPKCP8tl8.COnRC7mtf.hey6fGJS', 'employeer'),
(22, 'jobseeker2', 'jobseeker@jobseeker.com2', '$2y$10$UEDjxhiX67hVZkCg/twYG.RpMlM4/4C.avbMsE7RZgIAZYG1/Ad6u', 'employeer'),
(23, 'jobseeker3', 'jobseeker3@jobseeker3.com', '$2y$10$vOEsQffaBs85KkjCzsH26OJRcuAwMCok/g1ZeeZnQCGbqM4ExX4kO', 'employeer'),
(24, 'atika123', 'atika123@gmail.com', '$2y$10$9hHJml8s3sN3wK.afTfCau0JlBvfcv4B/Vrtq6x7Uw4jXD28k8ci6', 'jobseeker'),
(25, 'akuadalah', 'akuadalah@yahoo.com', '$2y$10$S0dokj0CkKJ1rcg6D9X59uXNXgMdUlnEBiDl1GCtTBvfKLESHYl7q', 'employeer'),
(26, 'null', 'null', 'null', 'null'),
(27, 'zuhad123', 'zuhad123@gmail.com', '$2y$10$fqhrm6iEOYOtg8n5x4psuekOK.h3k0Zfk9MoHVVfZKhHPZTFGbc.a', 'jobseeker'),
(28, 'zuhad1234', 'zuhad1234@gmail.com', '$2y$10$4J/Pf9NWnSO/ph1s2tArgOupw/eViA52mLefFAUYgsmLumjAmawNe', 'employeer'),
(29, 'lisa', 'lisa@lisa.com', '$2y$10$hopzsSdrXCrN8iqhodiSf.SZk2/oIKzNnQc.py1esUPpdZu/In3YC', 'jobseeker');

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
  `jobTitle` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbEmployeer`
--

INSERT INTO `tbEmployeer` (`id`, `tokenID`, `fullName`, `address`, `phoneNumber`, `companyName`, `jobTitle`, `image`) VALUES
(10, 25, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 28, 'null', 'null', 0, 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tbJobJoin`
--

CREATE TABLE `tbJobJoin` (
  `id` int(11) NOT NULL,
  `idJob` int(11) NOT NULL,
  `idJobseeker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbJobJoin`
--

INSERT INTO `tbJobJoin` (`id`, `idJob`, `idJobseeker`) VALUES
(6, 1, 1),
(7, 2, 13),
(21, 1, 13),
(22, 3, 13),
(23, 4, 13),
(24, 14, 13),
(25, 13, 13),
(26, 12, 13),
(27, 9, 29),
(28, 16, 29);

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
(9, 25, 'IT Support', 'IT', 'Hardware Resolution Problem', 'Jakarta', 50000000),
(10, 28, 'IT Support', 'IT', 'Deskripsi', 'Lokasi', 1000000),
(11, 28, 'IT Support', 'IT', 'Deskripsi', 'Lokasi', 1000000),
(12, 28, 'IT Support', 'IT', 'Deskripsi', 'Lokasi', 5000000),
(13, 28, 'IT Support', 'IT', 'Deskripsi', 'Lokasi', 5000000),
(14, 28, 'IT Support', 'IT', 'Deskripsi', 'Lokasi', 5000000),
(15, 28, 'Pekerjaan baru', 'Office Support', 'Surabaya', 'Surabaya', 30000000),
(16, 28, 'QC', 'Quality Control', 'Jakarta', 'Jakarta', 3500000);

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
-- Dumping data for table `tbJobseeker`
--

INSERT INTO `tbJobseeker` (`id`, `tokenID`, `fullName`, `address`, `phoneNumber`) VALUES
(1, 13, 'Siniaja', NULL, NULL),
(9, 29, 'null', 'null', 0);

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
  ADD KEY `idJobseeker` (`idJobseeker`),
  ADD KEY `idJob` (`idJob`);

--
-- Indexes for table `tbJobList`
--
ALTER TABLE `tbJobList`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmployeer` (`idEmployeer`),
  ADD KEY `idEmployeer_2` (`idEmployeer`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbEmployeer`
--
ALTER TABLE `tbEmployeer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbJobJoin`
--
ALTER TABLE `tbJobJoin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbJobList`
--
ALTER TABLE `tbJobList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbJobseeker`
--
ALTER TABLE `tbJobseeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbEmployeer`
--
ALTER TABLE `tbEmployeer`
  ADD CONSTRAINT `tbEmployeer_ibfk_1` FOREIGN KEY (`tokenID`) REFERENCES `tbAuth` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbJobseeker`
--
ALTER TABLE `tbJobseeker`
  ADD CONSTRAINT `tbJobseeker_FK` FOREIGN KEY (`tokenID`) REFERENCES `tbAuth` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

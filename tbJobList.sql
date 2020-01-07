-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2020 at 08:50 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbJobList`
--
ALTER TABLE `tbJobList`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmployeer` (`idEmployeer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbJobList`
--
ALTER TABLE `tbJobList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbJobList`
--
ALTER TABLE `tbJobList`
  ADD CONSTRAINT `tbJobList_ibfk_1` FOREIGN KEY (`idEmployeer`) REFERENCES `tbEmployeer` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

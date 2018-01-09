-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2018 at 04:07 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lying`
--
CREATE DATABASE `lying` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lying`;

-- --------------------------------------------------------

--
-- Table structure for table `patientdata`
--

CREATE TABLE IF NOT EXISTS `patientdata` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `givenName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `cpNo` varchar(15) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `age` varchar(3) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `husbandName` varchar(255) NOT NULL,
  `husbandAge` varchar(3) NOT NULL,
  `husbandNationality` varchar(255) NOT NULL,
  `husbandReligion` varchar(255) NOT NULL,
  `husbandOccupation` varchar(255) NOT NULL,
  `informatName` varchar(255) NOT NULL,
  `relationToPatient` varchar(255) NOT NULL,
  `informantAddress` text NOT NULL,
  `informatCpNo` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `patientdata`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `username`, `password`, `userType`) VALUES
(1, 'Admin A. Admin', 'admin', 'admin', '1'),
(2, 'Nurse Jane', 'janeN', '123456', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

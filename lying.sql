-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2018 at 05:27 AM
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
-- Table structure for table `admittingdetails`
--

CREATE TABLE IF NOT EXISTS `admittingdetails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dateOfAdmission` varchar(50) NOT NULL,
  `timeOfAdmission` varchar(40) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `bow` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admittingdetails`
--

INSERT INTO `admittingdetails` (`id`, `dateOfAdmission`, `timeOfAdmission`, `complaint`, `bow`, `others`, `patientId`) VALUES
(8, '2018-01-22', '19:30', 'Labor Pain', 'asd', 'asd', '9');

-- --------------------------------------------------------

--
-- Table structure for table `bpus`
--

CREATE TABLE IF NOT EXISTS `bpus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tprType` varchar(100) NOT NULL,
  `reading` varchar(255) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `dateOfReading` varchar(50) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bpus`
--

INSERT INTO `bpus` (`id`, `tprType`, `reading`, `shift`, `dateOfReading`, `patientId`, `admitId`) VALUES
(1, 'S', '21', '6AM-6PM', '2018-01-24', '9', '8'),
(2, 'S', '30', '6PM-6AM', '2018-01-24', '9', '8'),
(3, 'U', '32', '', '2018-01-24', '9', '8'),
(4, 'U', '54', '', '2018-01-24', '9', '8'),
(5, 'U', '15', '6AM-6PM', '2018-01-24', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `historyofpregnancy`
--

CREATE TABLE IF NOT EXISTS `historyofpregnancy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lmp` varchar(255) NOT NULL,
  `edc` varchar(255) NOT NULL,
  `aog` varchar(255) NOT NULL,
  `gravida` varchar(255) NOT NULL,
  `para` varchar(255) NOT NULL,
  `tpal` varchar(255) NOT NULL,
  `pnc` varchar(255) NOT NULL,
  `tt` varchar(255) NOT NULL,
  `postObHistory` text NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admittingdetailsid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `historyofpregnancy`
--

INSERT INTO `historyofpregnancy` (`id`, `lmp`, `edc`, `aog`, `gravida`, `para`, `tpal`, `pnc`, `tt`, `postObHistory`, `patientId`, `admittingdetailsid`) VALUES
(8, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asdads', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `internalexam`
--

CREATE TABLE IF NOT EXISTS `internalexam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cervical` varchar(255) NOT NULL,
  `presenting` varchar(255) NOT NULL,
  `bow` varchar(255) NOT NULL,
  `uti` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `visitId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `internalexam`
--

INSERT INTO `internalexam` (`id`, `cervical`, `presenting`, `bow`, `uti`, `patientId`, `visitId`, `admitId`) VALUES
(3, 'asd', 'asd', 'asda', 'ads', '9', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `maternalvisits`
--

CREATE TABLE IF NOT EXISTS `maternalvisits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dateOfVisit` varchar(50) NOT NULL,
  `timeOfVisit` varchar(20) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admittingDetailsId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `maternalvisits`
--

INSERT INTO `maternalvisits` (`id`, `dateOfVisit`, `timeOfVisit`, `patientId`, `admittingDetailsId`) VALUES
(9, '2018-01-23', '10:30', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE IF NOT EXISTS `medications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `medication` text NOT NULL,
  `medicationType` varchar(20) NOT NULL,
  `medicationDate` varchar(50) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `medication`, `medicationType`, `medicationDate`, `shift`, `admitId`, `patientId`) VALUES
(1, 'asdassdasd', 'ORAL', '2018-01-23', '6PM-6AM', '8', '9'),
(2, 'Medication', 'PARENTAL', '2018-01-23', '6AM-6PM', '8', '9');

-- --------------------------------------------------------

--
-- Table structure for table `objectiveobservation`
--

CREATE TABLE IF NOT EXISTS `objectiveobservation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bp` varchar(20) NOT NULL,
  `temp` varchar(20) NOT NULL,
  `weight` varchar(25) NOT NULL,
  `heent` varchar(25) NOT NULL,
  `breast` varchar(25) NOT NULL,
  `chestheart` varchar(25) NOT NULL,
  `abdomen` varchar(25) NOT NULL,
  `fundicHeight` varchar(25) NOT NULL,
  `aog` varchar(25) NOT NULL,
  `fetal` varchar(25) NOT NULL,
  `loc` varchar(25) NOT NULL,
  `l1` varchar(25) NOT NULL,
  `l2` varchar(25) NOT NULL,
  `l3` varchar(25) NOT NULL,
  `l4` varchar(25) NOT NULL,
  `urineAct` varchar(25) NOT NULL,
  `perinerum` varchar(25) NOT NULL,
  `varicosities` varchar(25) NOT NULL,
  `warts` varchar(25) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `visitId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `objectiveobservation`
--

INSERT INTO `objectiveobservation` (`id`, `bp`, `temp`, `weight`, `heent`, `breast`, `chestheart`, `abdomen`, `fundicHeight`, `aog`, `fetal`, `loc`, `l1`, `l2`, `l3`, `l4`, `urineAct`, `perinerum`, `varicosities`, `warts`, `patientId`, `visitId`, `admitId`) VALUES
(4, 'asdasd', 'asda', 'sdsdaasd', 'asd', 'asdas', 'dasd', 'asd', 'asda', 'sdas', 'das', 'dasd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '9', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `pastmedhistory`
--

CREATE TABLE IF NOT EXISTS `pastmedhistory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `medStatus` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admittingdetailsid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `pastmedhistory`
--

INSERT INTO `pastmedhistory` (`id`, `medStatus`, `patientId`, `admittingdetailsid`) VALUES
(14, 'Hypertension', '9', '8');

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
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `patientdata`
--

INSERT INTO `patientdata` (`id`, `lastName`, `givenName`, `middleName`, `address`, `cpNo`, `dob`, `age`, `nationality`, `religion`, `occupation`, `husbandName`, `husbandAge`, `husbandNationality`, `husbandReligion`, `husbandOccupation`, `informatName`, `relationToPatient`, `informantAddress`, `informatCpNo`, `status`) VALUES
(9, 'asdasd', 'aasd', 'asdasd', 'asda', '21123123', '1994-01-05', '23', 'f', 'Roman Catholic', 'None', 'asd as', '23', 'Filipino', 'Roman Catholic', 'asd as', 'asdas', 'kashd', 'asdad', '213123123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `physicalexams`
--

CREATE TABLE IF NOT EXISTS `physicalexams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bp` varchar(255) NOT NULL,
  `rr` varchar(255) NOT NULL,
  `pr` varchar(255) NOT NULL,
  `t` varchar(255) NOT NULL,
  `ht` varchar(255) NOT NULL,
  `ie` varchar(255) NOT NULL,
  `fuht` varchar(255) NOT NULL,
  `fht` varchar(255) NOT NULL,
  `admittingDiagnosis` text NOT NULL,
  `finalDiagnosis` text NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admittingdetailsid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `physicalexams`
--

INSERT INTO `physicalexams` (`id`, `bp`, `rr`, `pr`, `t`, `ht`, `ie`, `fuht`, `fht`, `admittingDiagnosis`, `finalDiagnosis`, `patientId`, `admittingdetailsid`) VALUES
(8, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '<p>asdasd</p>', '<p>asdasd</p>', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `rapidassesment`
--

CREATE TABLE IF NOT EXISTS `rapidassesment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `assesment` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admittingdetailsid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rapidassesment`
--

INSERT INTO `rapidassesment` (`id`, `assesment`, `patientId`, `admittingdetailsid`) VALUES
(1, 'Vaginal Bleeding', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `rpt`
--

CREATE TABLE IF NOT EXISTS `rpt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tprType` varchar(100) NOT NULL,
  `reading` varchar(255) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `dateOfReading` varchar(50) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rpt`
--

INSERT INTO `rpt` (`id`, `tprType`, `reading`, `shift`, `dateOfReading`, `patientId`, `admitId`) VALUES
(3, 'Temp', '32', '12PM', '2018-01-24', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `speculumexam`
--

CREATE TABLE IF NOT EXISTS `speculumexam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `purulent` varchar(255) NOT NULL,
  `watery` varchar(255) NOT NULL,
  `bleeding` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `visitId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `speculumexam`
--

INSERT INTO `speculumexam` (`id`, `purulent`, `watery`, `bleeding`, `others`, `patientId`, `visitId`, `admitId`) VALUES
(3, 'asdasd', 'asd', 'asdas', 'dasd', '9', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `subjectiveobservation`
--

CREATE TABLE IF NOT EXISTS `subjectiveobservation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `observation` longtext NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `visitId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subjectiveobservation`
--

INSERT INTO `subjectiveobservation` (`id`, `observation`, `patientId`, `visitId`, `admitId`) VALUES
(3, '<p>asda sasdasd</p>', '9', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tpr`
--

CREATE TABLE IF NOT EXISTS `tpr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dateOfReading` varchar(50) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tpr`
--

INSERT INTO `tpr` (`id`, `dateOfReading`, `weight`, `height`, `patientId`, `admitId`) VALUES
(1, '2018-01-24', '23', '23', '9', '8');

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

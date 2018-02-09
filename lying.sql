-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 06:41 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lying`
--

-- --------------------------------------------------------

--
-- Table structure for table `admittingdetails`
--

CREATE TABLE `admittingdetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateOfAdmission` varchar(50) NOT NULL,
  `timeOfAdmission` varchar(40) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `bow` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admittingdetails`
--

INSERT INTO `admittingdetails` (`id`, `dateOfAdmission`, `timeOfAdmission`, `complaint`, `bow`, `others`, `patientId`) VALUES
(8, '2018-01-22', '19:30', 'Labor Pain', 'asd', 'asd', '9');

-- --------------------------------------------------------

--
-- Table structure for table `bpus`
--

CREATE TABLE `bpus` (
  `id` int(10) UNSIGNED NOT NULL,
  `tprType` varchar(100) NOT NULL,
  `reading` varchar(255) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `dateOfReading` varchar(50) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  `type` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bpus`
--

INSERT INTO `bpus` (`id`, `tprType`, `reading`, `shift`, `dateOfReading`, `patientId`, `admitId`, `type`) VALUES
(1, 'S', '21', '6AM-6PM', '2018-01-24', '9', '8', ''),
(2, 'S', '30', '6PM-6AM', '2018-01-24', '9', '8', ''),
(3, 'U', '32', '', '2018-01-24', '9', '8', ''),
(4, 'U', '54', '', '2018-01-24', '9', '8', ''),
(5, 'U', '15', '6AM-6PM', '2018-01-24', '9', '8', ''),
(6, 'U', '30', '6AM-6PM', '2018-01-27', '9', '8', '0'),
(7, 'U', 'aaa', '6PM-6AM', '2018-01-27', '9', '8', '0');

-- --------------------------------------------------------

--
-- Table structure for table `doctorsorder`
--

CREATE TABLE `doctorsorder` (
  `id` int(10) UNSIGNED NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admittingId` varchar(20) NOT NULL,
  `dateTime` varchar(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `orders` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsorder`
--

INSERT INTO `doctorsorder` (`id`, `patientId`, `admittingId`, `dateTime`, `type`, `orders`) VALUES
(1, '9', '8', '2018-01-27T10:30', '1', '<ul><li>asdasdasdas</li><li>da</li><li>sd</li><li>a</li><li>sd</li><li>as</li><li>d</li><li>as</li><li>d</li><li>a</li></ul>'),
(2, '9', '8', '2018-01-27T10:30', '', '<ol><li>asda sdasdasdasd</li><li>as</li><li>da</li><li>sd</li><li>a</li><li>sd</li><li>a</li><li>sd</li><li>a</li></ol>'),
(3, '9', '8', '2018-01-27T12:00', '', '<ol><li>asdas dasdas</li><li>da</li><li>sd</li><li>a</li><li>sd</li><li>a</li><li>sd</li><li>a</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `historyofpregnancy`
--

CREATE TABLE `historyofpregnancy` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `admittingdetailsid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historyofpregnancy`
--

INSERT INTO `historyofpregnancy` (`id`, `lmp`, `edc`, `aog`, `gravida`, `para`, `tpal`, `pnc`, `tt`, `postObHistory`, `patientId`, `admittingdetailsid`) VALUES
(8, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asdads', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `internalexam`
--

CREATE TABLE `internalexam` (
  `id` int(10) UNSIGNED NOT NULL,
  `cervical` varchar(255) NOT NULL,
  `presenting` varchar(255) NOT NULL,
  `bow` varchar(255) NOT NULL,
  `uti` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `visitId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internalexam`
--

INSERT INTO `internalexam` (`id`, `cervical`, `presenting`, `bow`, `uti`, `patientId`, `visitId`, `admitId`) VALUES
(3, 'asd', 'asd', 'asda', 'ads', '9', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `maternalvisits`
--

CREATE TABLE `maternalvisits` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateOfVisit` varchar(50) NOT NULL,
  `timeOfVisit` varchar(20) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admittingDetailsId` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maternalvisits`
--

INSERT INTO `maternalvisits` (`id`, `dateOfVisit`, `timeOfVisit`, `patientId`, `admittingDetailsId`) VALUES
(9, '2018-01-23', '10:30', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `id` int(10) UNSIGNED NOT NULL,
  `medication` text NOT NULL,
  `medicationType` varchar(20) NOT NULL,
  `medicationDate` varchar(50) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  `patientId` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `medication`, `medicationType`, `medicationDate`, `shift`, `admitId`, `patientId`) VALUES
(1, 'asdassdasd', 'ORAL', '2018-01-23', '6PM-6AM', '8', '9'),
(2, 'Medication', 'PARENTAL', '2018-01-23', '6AM-6PM', '8', '9');

-- --------------------------------------------------------

--
-- Table structure for table `nurserychart`
--

CREATE TABLE `nurserychart` (
  `id` int(10) UNSIGNED NOT NULL,
  `babyName` varchar(255) NOT NULL,
  `babySex` varchar(1) NOT NULL,
  `babyDob` varchar(255) NOT NULL,
  `timeOb` varchar(30) NOT NULL,
  `babyWeight` varchar(20) NOT NULL,
  `babyLength` varchar(255) NOT NULL,
  `babyHc` varchar(255) NOT NULL,
  `babyCc` varchar(255) NOT NULL,
  `babyAc` varchar(255) NOT NULL,
  `babyMac` varchar(255) NOT NULL,
  `babyMother` varchar(255) NOT NULL,
  `babyMotherAdd` text NOT NULL,
  `babyLmp` varchar(255) NOT NULL,
  `babyAog` varchar(255) NOT NULL,
  `babyGravida` varchar(255) NOT NULL,
  `babyPara` varchar(255) NOT NULL,
  `babyFullTerm` varchar(255) NOT NULL,
  `babyPremature` varchar(255) NOT NULL,
  `babyAbortion` varchar(255) NOT NULL,
  `babyNoChild` varchar(255) NOT NULL,
  `babyPrenatal` varchar(255) NOT NULL,
  `babyWhere` text NOT NULL,
  `babyDrugsPreg` text NOT NULL,
  `babyLabor` text NOT NULL,
  `babyDrugsLabor` text NOT NULL,
  `babySpontaneousOnset` varchar(255) NOT NULL,
  `babyInduced` varchar(255) NOT NULL,
  `babyMembraneRupture` text NOT NULL,
  `babyAmniotocClear` varchar(255) NOT NULL,
  `babyAmniotocNotClear` varchar(255) NOT NULL,
  `babyDeliveryType` varchar(255) NOT NULL,
  `babyDeliveryPresentation` varchar(255) NOT NULL,
  `babyDeliveryComplication` varchar(255) NOT NULL,
  `babyApgar1min` varchar(255) NOT NULL,
  `babyApgar5min` varchar(255) NOT NULL,
  `babyAttendingPhysician` varchar(255) NOT NULL,
  `patinetId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurserychart`
--

INSERT INTO `nurserychart` (`id`, `babyName`, `babySex`, `babyDob`, `timeOb`, `babyWeight`, `babyLength`, `babyHc`, `babyCc`, `babyAc`, `babyMac`, `babyMother`, `babyMotherAdd`, `babyLmp`, `babyAog`, `babyGravida`, `babyPara`, `babyFullTerm`, `babyPremature`, `babyAbortion`, `babyNoChild`, `babyPrenatal`, `babyWhere`, `babyDrugsPreg`, `babyLabor`, `babyDrugsLabor`, `babySpontaneousOnset`, `babyInduced`, `babyMembraneRupture`, `babyAmniotocClear`, `babyAmniotocNotClear`, `babyDeliveryType`, `babyDeliveryPresentation`, `babyDeliveryComplication`, `babyApgar1min`, `babyApgar5min`, `babyAttendingPhysician`, `patinetId`, `admitId`) VALUES
(1, 'asdasd', 'M', '2018-01-27', '10:30', '12', '12', '12', '12', '12', '12', 'asdasd', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'Y', 'asdads', 'adajdsjasd<!--<input type="date" name="babyLabor" class="w3-input w3-border w3-small" id="babyLabor" placeholder="Where" required>-->', 'asdas<!--<input type="date" name="babyLabor" class="w3-input w3-border w3-small" id="babyLabor" placeholder="Where" required>-->', '', 'asdas', 'dasd', 'asda<!--<input type="date" name="babyLabor" class="w3-input w3-border w3-small" id="babyLabor" placeholder="Where" required>-->', 'asd', 'sdasdas', 'asd', 'asd', 'asdasd', 'asd', 'asd', 'asd', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `objectiveobservation`
--

CREATE TABLE `objectiveobservation` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `admitId` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objectiveobservation`
--

INSERT INTO `objectiveobservation` (`id`, `bp`, `temp`, `weight`, `heent`, `breast`, `chestheart`, `abdomen`, `fundicHeight`, `aog`, `fetal`, `loc`, `l1`, `l2`, `l3`, `l4`, `urineAct`, `perinerum`, `varicosities`, `warts`, `patientId`, `visitId`, `admitId`) VALUES
(4, 'asdasd', 'asda', 'sdsdaasd', 'asd', 'asdas', 'dasd', 'asd', 'asda', 'sdas', 'das', 'dasd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '9', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `pastmedhistory`
--

CREATE TABLE `pastmedhistory` (
  `id` int(10) UNSIGNED NOT NULL,
  `medStatus` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admittingdetailsid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pastmedhistory`
--

INSERT INTO `pastmedhistory` (`id`, `medStatus`, `patientId`, `admittingdetailsid`) VALUES
(14, 'Hypertension', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `patientdata`
--

CREATE TABLE `patientdata` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdata`
--

INSERT INTO `patientdata` (`id`, `lastName`, `givenName`, `middleName`, `address`, `cpNo`, `dob`, `age`, `nationality`, `religion`, `occupation`, `husbandName`, `husbandAge`, `husbandNationality`, `husbandReligion`, `husbandOccupation`, `informatName`, `relationToPatient`, `informantAddress`, `informatCpNo`, `status`) VALUES
(9, 'asdasd', 'aasd', 'asdasd', 'asda', '21123123', '1994-01-05', '23', 'f', 'Roman Catholic', 'None', 'asd as', '23', 'Filipino', 'Roman Catholic', 'asd as', 'asdas', 'kashd', 'asdad', '213123123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `physicalexams`
--

CREATE TABLE `physicalexams` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `admittingdetailsid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physicalexams`
--

INSERT INTO `physicalexams` (`id`, `bp`, `rr`, `pr`, `t`, `ht`, `ie`, `fuht`, `fht`, `admittingDiagnosis`, `finalDiagnosis`, `patientId`, `admittingdetailsid`) VALUES
(8, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '<p>asdasd</p>', '<p>asdasd</p>', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `rapidassesment`
--

CREATE TABLE `rapidassesment` (
  `id` int(10) UNSIGNED NOT NULL,
  `assesment` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admittingdetailsid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rapidassesment`
--

INSERT INTO `rapidassesment` (`id`, `assesment`, `patientId`, `admittingdetailsid`) VALUES
(1, 'Vaginal Bleeding', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `rpt`
--

CREATE TABLE `rpt` (
  `id` int(10) UNSIGNED NOT NULL,
  `tprType` varchar(100) NOT NULL,
  `reading` varchar(255) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `dateOfReading` varchar(50) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  `type` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpt`
--

INSERT INTO `rpt` (`id`, `tprType`, `reading`, `shift`, `dateOfReading`, `patientId`, `admitId`, `type`) VALUES
(3, 'Temp', '32', '12PM', '2018-01-24', '9', '8', ''),
(4, 'Temp', '30', '12AM', '2018-01-27', '9', '8', '1'),
(5, '1', '', '', '', '9', '8', ''),
(6, '1', '', '', '', '9', '8', '');

-- --------------------------------------------------------

--
-- Table structure for table `speculumexam`
--

CREATE TABLE `speculumexam` (
  `id` int(10) UNSIGNED NOT NULL,
  `purulent` varchar(255) NOT NULL,
  `watery` varchar(255) NOT NULL,
  `bleeding` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `visitId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speculumexam`
--

INSERT INTO `speculumexam` (`id`, `purulent`, `watery`, `bleeding`, `others`, `patientId`, `visitId`, `admitId`) VALUES
(3, 'asdasd', 'asd', 'asdas', 'dasd', '9', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `subjectiveobservation`
--

CREATE TABLE `subjectiveobservation` (
  `id` int(10) UNSIGNED NOT NULL,
  `observation` longtext NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `visitId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectiveobservation`
--

INSERT INTO `subjectiveobservation` (`id`, `observation`, `patientId`, `visitId`, `admitId`) VALUES
(3, '<p>asda sasdasd</p>', '9', '9', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tpr`
--

CREATE TABLE `tpr` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateOfReading` varchar(50) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `patientId` varchar(20) NOT NULL,
  `admitId` varchar(20) NOT NULL,
  `type` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpr`
--

INSERT INTO `tpr` (`id`, `dateOfReading`, `weight`, `height`, `patientId`, `admitId`, `type`) VALUES
(1, '2018-01-24', '23', '23', '9', '8', ''),
(2, '2018-01-27', '40', '40', '9', '8', '1'),
(4, '2018-01-27', '23', '23', '9', '8', '0'),
(5, '', '', '', '9', '8', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `username`, `password`, `userType`) VALUES
(1, 'Admin A. Admin', 'admin', 'admin', '1'),
(4, 'nurse', 'nurse', 'nurse', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admittingdetails`
--
ALTER TABLE `admittingdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpus`
--
ALTER TABLE `bpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorsorder`
--
ALTER TABLE `doctorsorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `historyofpregnancy`
--
ALTER TABLE `historyofpregnancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internalexam`
--
ALTER TABLE `internalexam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maternalvisits`
--
ALTER TABLE `maternalvisits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurserychart`
--
ALTER TABLE `nurserychart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objectiveobservation`
--
ALTER TABLE `objectiveobservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pastmedhistory`
--
ALTER TABLE `pastmedhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientdata`
--
ALTER TABLE `patientdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physicalexams`
--
ALTER TABLE `physicalexams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rapidassesment`
--
ALTER TABLE `rapidassesment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rpt`
--
ALTER TABLE `rpt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speculumexam`
--
ALTER TABLE `speculumexam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectiveobservation`
--
ALTER TABLE `subjectiveobservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpr`
--
ALTER TABLE `tpr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admittingdetails`
--
ALTER TABLE `admittingdetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bpus`
--
ALTER TABLE `bpus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `doctorsorder`
--
ALTER TABLE `doctorsorder`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `historyofpregnancy`
--
ALTER TABLE `historyofpregnancy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `internalexam`
--
ALTER TABLE `internalexam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `maternalvisits`
--
ALTER TABLE `maternalvisits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nurserychart`
--
ALTER TABLE `nurserychart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `objectiveobservation`
--
ALTER TABLE `objectiveobservation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pastmedhistory`
--
ALTER TABLE `pastmedhistory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `patientdata`
--
ALTER TABLE `patientdata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `physicalexams`
--
ALTER TABLE `physicalexams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rapidassesment`
--
ALTER TABLE `rapidassesment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rpt`
--
ALTER TABLE `rpt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `speculumexam`
--
ALTER TABLE `speculumexam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subjectiveobservation`
--
ALTER TABLE `subjectiveobservation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tpr`
--
ALTER TABLE `tpr`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

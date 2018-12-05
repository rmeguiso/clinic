-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 04:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldiagnosis`
--

CREATE TABLE `tbldiagnosis` (
  `ID` int(11) NOT NULL,
  `Diagnosis` varchar(999) NOT NULL,
  `Description` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldiagnosis`
--

INSERT INTO `tbldiagnosis` (`ID`, `Diagnosis`, `Description`) VALUES
(1, 'Osteoarthritis', 'Osteoarthritis (also known as OA) is a common joint disease that most often affects middle-age to elderly people. It is commonly referred to as \"wear and tear\" of the joints, but we now know that OA is a disease of the entire joint, involving the cartilage, joint lining, ligaments, and bone.');

-- --------------------------------------------------------

--
-- Table structure for table `tbldoctor`
--

CREATE TABLE `tbldoctor` (
  `ID` int(11) NOT NULL,
  `FName` varchar(99) NOT NULL,
  `LName` varchar(99) NOT NULL,
  `Specialization` varchar(99) NOT NULL,
  `Image` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldoctor`
--

INSERT INTO `tbldoctor` (`ID`, `FName`, `LName`, `Specialization`, `Image`) VALUES
(1, 'Marivic', 'Ang', 'Cosmetic Dentristry', ''),
(2, 'Hannibal', 'Lecter', 'Psychology', 'https://image.shutterstock.com/image-photo/amsterdam-netherlands-jun-1-2015-450w-287847638.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbllaboratories`
--

CREATE TABLE `tbllaboratories` (
  `ID` int(11) NOT NULL,
  `Laboratory` varchar(999) NOT NULL,
  `Description` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllaboratories`
--

INSERT INTO `tbllaboratories` (`ID`, `Laboratory`, `Description`) VALUES
(1, 'X-Ray', 'X-rays make up X-radiation, a form of electromagnetic radiation. Most X-rays have a wavelength ranging from 0.01 to 10 nanometers, corresponding to frequencies in the range 30 petahertz to 30 exahertz and energies in the range 100 eV to 100 keV.');

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicine`
--

CREATE TABLE `tblmedicine` (
  `ID` int(11) NOT NULL,
  `Medicine` varchar(999) NOT NULL,
  `Description` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmedicine`
--

INSERT INTO `tblmedicine` (`ID`, `Medicine`, `Description`) VALUES
(1, 'Paracetamol', 'Paracetamol, also known as acetaminophen or APAP, is a medicine used to treat pain and fever. It is typically used for mild to moderate pain relief. Evidence for its use to relieve fever in children is mixed. It is often sold in combination with other medications, such as in many cold medications.'),
(5, 'c', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `tblobservation`
--

CREATE TABLE `tblobservation` (
  `ID` int(11) NOT NULL,
  `Checkup_id` int(11) NOT NULL,
  `Observation` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(11) NOT NULL,
  `FName` varchar(99) NOT NULL,
  `LName` varchar(99) NOT NULL,
  `Bday` varchar(99) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `CS` varchar(200) NOT NULL,
  `Image` varchar(9999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `FName`, `LName`, `Bday`, `Gender`, `Address`, `CS`, `Image`) VALUES
(1, 'Robert', 'Jaworski', '2018-11-01', 'Male', 'Bacolod City', 'Single', 'https://i.pinimg.com/564x/af/95/8b/af958b32696ff23e15a739e5abf133fa.jpg'),
(2, 'Ernesto', 'Quilles', '2018-11-01', 'Male', 'Bacolod City', 'Married', 'https://i.pinimg.com/564x/da/2f/6c/da2f6c23ee66c1901c017b9f70f5dd5c.jpg'),
(3, 'Isabella', 'Heinz', '11/22/2018', 'Female', 'Cebu city', 'Single', 'https://66.media.tumblr.com/dc61f7d81b0f63cd37628428e644d718/tumblr_pi981llDZQ1x997tfo1_1280.jpg'),
(4, 'Julian', 'Mapa', '11/24/2018', 'Male', 'Bacolod City', 'Single', NULL),
(5, 'Liza', 'Soberano', '02/16/2017', 'Female', 'Manila', 'Single', 'https://data.whicdn.com/images/185484069/large.jpg'),
(6, 'Crissy', 'Uy', '11/23/2018', 'Female', 'Manila', 'Single', NULL),
(10, 'test', 'test', '12/25/2018', 'Male', 'test', 'Single', NULL),
(11, 'test22', 'test22', '12/27/2018', 'Male', 'test22', 'Single', NULL),
(12, 'test23', 'test23', '12/26/2018', 'Male', 'test23', 'Single', NULL),
(13, 'f', 'f', '12/26/2018', 'Male', 'f', 'Single', NULL),
(14, 'b', 'b', '12/20/2018', 'Male', 'n', 'Single', NULL),
(15, 'r', 'r', '12/25/2018', 'Male', 'r', 'Single', NULL),
(16, 'b', 'b', '12/19/2018', 'Male', 'n', 'Single', NULL),
(17, 'w', 'w', '12/26/2018', 'Male', 'w', 'Single', NULL),
(18, 'w', 'w', '12/26/2018', 'Male', 'w', 'Single', NULL),
(19, 'wq', 'wer', '12/26/2018', 'Male', 'rweq', 'Single', NULL),
(20, 'werq', 'wqr', '12/20/2018', 'Male', 'wqer', 'Single', NULL),
(21, 'qwe', 'qwe', '12/27/2018', 'Male', 'qwe', 'Single', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpatientcheckup`
--

CREATE TABLE `tblpatientcheckup` (
  `ID` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Doctor_ID` int(11) NOT NULL,
  `DateCheckup` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatientdiagnosis`
--

CREATE TABLE `tblpatientdiagnosis` (
  `ID` int(11) NOT NULL,
  `Checkup_id` int(11) NOT NULL,
  `Diagnosis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatientmedicine`
--

CREATE TABLE `tblpatientmedicine` (
  `ID` int(11) NOT NULL,
  `Checkup_id` int(11) NOT NULL,
  `Med_id` int(11) NOT NULL,
  `Prescription` varchar(999) NOT NULL,
  `Status` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient_laboratory`
--

CREATE TABLE `tblpatient_laboratory` (
  `ID` int(11) NOT NULL,
  `Checkup_id` int(11) NOT NULL,
  `Lab_id` int(11) NOT NULL,
  `Image` varchar(999) NOT NULL,
  `Description` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblphysical_profile`
--

CREATE TABLE `tblphysical_profile` (
  `ID` int(11) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Height` varchar(99) NOT NULL,
  `Weight` varchar(99) NOT NULL,
  `BP` varchar(99) NOT NULL,
  `Date` date NOT NULL,
  `Temp` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tblphysical_profile`
--

INSERT INTO `tblphysical_profile` (`ID`, `Patient_ID`, `Height`, `Weight`, `BP`, `Date`, `Temp`) VALUES
(1, 1, '5\'7', '105 lbs', '120/40', '2018-12-05', '38.5');

-- --------------------------------------------------------

--
-- Table structure for table `tblschedule`
--

CREATE TABLE `tblschedule` (
  `ID` int(11) NOT NULL,
  `Date` varchar(99) NOT NULL,
  `Patient_ID` int(11) NOT NULL,
  `Queue_no` int(11) DEFAULT NULL,
  `Remarks` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblschedule`
--

INSERT INTO `tblschedule` (`ID`, `Date`, `Patient_ID`, `Queue_no`, `Remarks`) VALUES
(1, '2018-11-07', 1, 1, 'Complaining of toothache'),
(16, '2018-11-24', 2, 2, 'Heartache'),
(17, '2018-11-24', 1, 3, 'mild schizophrenia'),
(18, '2018-11-24', 4, 4, 'a'),
(19, '2018-11-27', 1, 5, 'sakit tuhod'),
(20, '2018-11-28', 1, 6, 'a'),
(21, '2018-11-28', 2, 7, 'er');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldiagnosis`
--
ALTER TABLE `tbldiagnosis`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbllaboratories`
--
ALTER TABLE `tbllaboratories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblmedicine`
--
ALTER TABLE `tblmedicine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblobservation`
--
ALTER TABLE `tblobservation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `foreign key checkup id` (`Checkup_id`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatientcheckup`
--
ALTER TABLE `tblpatientcheckup`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `foreign patient` (`Patient_ID`),
  ADD KEY `doctor foreign key` (`Doctor_ID`);

--
-- Indexes for table `tblpatientdiagnosis`
--
ALTER TABLE `tblpatientdiagnosis`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `foreign checkup` (`Checkup_id`),
  ADD KEY `foreign diagnosis` (`Diagnosis_id`);

--
-- Indexes for table `tblpatientmedicine`
--
ALTER TABLE `tblpatientmedicine`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `foreign checkup` (`Checkup_id`),
  ADD KEY `Med_id` (`Med_id`);

--
-- Indexes for table `tblpatient_laboratory`
--
ALTER TABLE `tblpatient_laboratory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `foreign key of checkup id` (`Checkup_id`),
  ADD KEY `foreign key laboratory` (`Lab_id`);

--
-- Indexes for table `tblphysical_profile`
--
ALTER TABLE `tblphysical_profile`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Foreign key` (`Patient_ID`);

--
-- Indexes for table `tblschedule`
--
ALTER TABLE `tblschedule`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `foreign key` (`Patient_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldiagnosis`
--
ALTER TABLE `tbldiagnosis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbllaboratories`
--
ALTER TABLE `tbllaboratories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblmedicine`
--
ALTER TABLE `tblmedicine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblobservation`
--
ALTER TABLE `tblobservation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tblpatientcheckup`
--
ALTER TABLE `tblpatientcheckup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpatientdiagnosis`
--
ALTER TABLE `tblpatientdiagnosis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpatientmedicine`
--
ALTER TABLE `tblpatientmedicine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpatient_laboratory`
--
ALTER TABLE `tblpatient_laboratory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblphysical_profile`
--
ALTER TABLE `tblphysical_profile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblschedule`
--
ALTER TABLE `tblschedule`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblobservation`
--
ALTER TABLE `tblobservation`
  ADD CONSTRAINT `tblobservation_ibfk_1` FOREIGN KEY (`Checkup_id`) REFERENCES `tblpatientcheckup` (`ID`);

--
-- Constraints for table `tblpatientcheckup`
--
ALTER TABLE `tblpatientcheckup`
  ADD CONSTRAINT `tblpatientcheckup_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `tblpatient` (`ID`),
  ADD CONSTRAINT `tblpatientcheckup_ibfk_2` FOREIGN KEY (`Doctor_ID`) REFERENCES `tbldoctor` (`ID`);

--
-- Constraints for table `tblpatientdiagnosis`
--
ALTER TABLE `tblpatientdiagnosis`
  ADD CONSTRAINT `tblpatientdiagnosis_ibfk_1` FOREIGN KEY (`Checkup_id`) REFERENCES `tblpatientcheckup` (`ID`),
  ADD CONSTRAINT `tblpatientdiagnosis_ibfk_2` FOREIGN KEY (`Diagnosis_id`) REFERENCES `tbldiagnosis` (`ID`);

--
-- Constraints for table `tblpatientmedicine`
--
ALTER TABLE `tblpatientmedicine`
  ADD CONSTRAINT `tblpatientmedicine_ibfk_1` FOREIGN KEY (`Checkup_id`) REFERENCES `tblpatientcheckup` (`ID`),
  ADD CONSTRAINT `tblpatientmedicine_ibfk_2` FOREIGN KEY (`Med_id`) REFERENCES `tblmedicine` (`ID`);

--
-- Constraints for table `tblphysical_profile`
--
ALTER TABLE `tblphysical_profile`
  ADD CONSTRAINT `Primary key` FOREIGN KEY (`Patient_ID`) REFERENCES `tblpatient` (`ID`);

--
-- Constraints for table `tblschedule`
--
ALTER TABLE `tblschedule`
  ADD CONSTRAINT `tblschedule_ibfk_1` FOREIGN KEY (`Patient_ID`) REFERENCES `tblpatient` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

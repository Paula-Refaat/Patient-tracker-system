-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220510.314f251104
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 12:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `name`, `username`, `password`) VALUES
(1, 'Abdelrhman', '3bdoz', '3bdoz');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `date` varchar(50) CHARACTER SET utf8 NOT NULL,
  `time` time NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`date`, `time`, `name`, `email`) VALUES
('5/17/2022', '10:00:00', 'last a5eran', 'facebooky'),
('5/16/2022', '12:00:00', 'last el last', 'twitterawy');

-- --------------------------------------------------------

--
-- Table structure for table `cure`
--

CREATE TABLE `cure` (
  `pat_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `clinic` varchar(50) CHARACTER SET utf8 NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `phone`, `clinic`, `fname`, `lname`, `username`, `password`) VALUES
(4, 1141976322, 'El Shourouk Clinic', 'amir', 'barakat', 'amirbarakat48', 'amir1919');

-- --------------------------------------------------------

--
-- Table structure for table `doc_adm`
--

CREATE TABLE `doc_adm` (
  `adm_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doc_patient_appointment`
--

CREATE TABLE `doc_patient_appointment` (
  `time` time NOT NULL,
  `doc_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doc_report_patient`
--

CREATE TABLE `doc_report_patient` (
  `rep_num` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pat_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `admittance_date` date NOT NULL,
  `medical_condition` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `name`, `age`, `gender`, `admittance_date`, `medical_condition`, `email`, `address`, `height`, `weight`) VALUES
(2, 'abdo', 18, 'male', '2022-05-20', 'mayet', '3bdo@gmail.com', 'ssssssss', '180', '125');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rep_num` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `cure`
--
ALTER TABLE `cure`
  ADD PRIMARY KEY (`pat_id`,`doc_id`),
  ADD KEY `doc_id` (`doc_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `doc_adm`
--
ALTER TABLE `doc_adm`
  ADD PRIMARY KEY (`adm_id`,`doc_id`),
  ADD KEY `doc_id` (`doc_id`);

--
-- Indexes for table `doc_patient_appointment`
--
ALTER TABLE `doc_patient_appointment`
  ADD PRIMARY KEY (`time`,`doc_id`,`pat_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `pat_id` (`pat_id`);

--
-- Indexes for table `doc_report_patient`
--
ALTER TABLE `doc_report_patient`
  ADD PRIMARY KEY (`rep_num`,`pat_id`,`doc_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `pat_id` (`pat_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`rep_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `rep_num` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cure`
--
ALTER TABLE `cure`
  ADD CONSTRAINT `cure_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`),
  ADD CONSTRAINT `cure_ibfk_2` FOREIGN KEY (`pat_id`) REFERENCES `patient` (`pat_id`);

--
-- Constraints for table `doc_adm`
--
ALTER TABLE `doc_adm`
  ADD CONSTRAINT `doc_adm_ibfk_1` FOREIGN KEY (`adm_id`) REFERENCES `admin` (`adm_id`),
  ADD CONSTRAINT `doc_adm_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`);

--
-- Constraints for table `doc_patient_appointment`
--
ALTER TABLE `doc_patient_appointment`
  ADD CONSTRAINT `doc_patient_appointment_ibfk_1` FOREIGN KEY (`time`) REFERENCES `appointment` (`time`),
  ADD CONSTRAINT `doc_patient_appointment_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`),
  ADD CONSTRAINT `doc_patient_appointment_ibfk_3` FOREIGN KEY (`pat_id`) REFERENCES `patient` (`pat_id`);

--
-- Constraints for table `doc_report_patient`
--
ALTER TABLE `doc_report_patient`
  ADD CONSTRAINT `doc_report_patient_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`),
  ADD CONSTRAINT `doc_report_patient_ibfk_2` FOREIGN KEY (`pat_id`) REFERENCES `patient` (`pat_id`),
  ADD CONSTRAINT `doc_report_patient_ibfk_3` FOREIGN KEY (`rep_num`) REFERENCES `report` (`rep_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2016 at 02:10 PM
-- Server version: 5.6.22-71.0-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meetds9e_testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_tmp`
--

CREATE TABLE IF NOT EXISTS `db_tmp` (
  `s_num` int(12) NOT NULL AUTO_INCREMENT,
  `hospital_num` varchar(12) NOT NULL,
  `pat_num` varchar(27) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `g_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `p_mob` int(10) NOT NULL,
  `p_mail` varchar(40) NOT NULL,
  `p_addr` varchar(100) NOT NULL,
  `p_state` varchar(40) NOT NULL,
  `p_dist` varchar(40) NOT NULL,
  `p_pin` int(6) NOT NULL,
  `p_illness` varchar(150) NOT NULL,
  PRIMARY KEY (`s_num`),
  UNIQUE KEY `s_num` (`s_num`),
  KEY `hospital_num` (`hospital_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `db_tmp`
--

INSERT INTO `db_tmp` (`s_num`, `hospital_num`, `pat_num`, `f_name`, `l_name`, `dob`, `gender`, `g_name`, `m_name`, `p_mob`, `p_mail`, `p_addr`, `p_state`, `p_dist`, `p_pin`, `p_illness`) VALUES
(18, '21#1', '21#1160905013950', 'RISHI', 'KAPOOR', '24/04/1976', 'male', 'Raj Kapoor', 'Vahida Kapoor', 2147483647, 'rishi@meetdoc.in', 'Mannat Apartments, Zuhu Beach', 'Maharashtra', 'Mumbai', 765432, 'Acute Liver Disorder');

-- --------------------------------------------------------

--
-- Table structure for table `doc_information`
--

CREATE TABLE IF NOT EXISTS `doc_information` (
  `s_num` int(12) NOT NULL AUTO_INCREMENT,
  `hospital_num` varchar(12) NOT NULL,
  `doc_num` varchar(12) NOT NULL,
  `doc_name` varchar(30) NOT NULL,
  `doc_qualification` varchar(100) NOT NULL,
  `doc_specialization` varchar(100) NOT NULL,
  PRIMARY KEY (`doc_num`),
  UNIQUE KEY `s_num` (`s_num`),
  KEY `hospital_num` (`hospital_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `doc_information`
--

INSERT INTO `doc_information` (`s_num`, `hospital_num`, `doc_num`, `doc_name`, `doc_qualification`, `doc_specialization`) VALUES
(4, '21#1', '21#1-1', 'PANKAJ SIGRIWAL', 'MBBS, MD', 'Cardiologist');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_details`
--

CREATE TABLE IF NOT EXISTS `hospital_details` (
  `s_num` int(12) NOT NULL AUTO_INCREMENT,
  `hospital_num` varchar(12) NOT NULL,
  `hospital_name` varchar(40) NOT NULL,
  `address` varchar(150) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pin` int(12) NOT NULL,
  PRIMARY KEY (`hospital_num`),
  UNIQUE KEY `s_num` (`s_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hospital_details`
--

INSERT INTO `hospital_details` (`s_num`, `hospital_num`, `hospital_name`, `address`, `state`, `district`, `pin`) VALUES
(1, '21#1', 'P S M HOSPITAL', 'Lanka', 'Uttar Pradesh', 'Varanasi', 560037),
(2, '21#2', 'sdfg', 'sdfvgb', 'dfgbh', 'dcvb', 564456),
(3, '21#3', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patients_address`
--

CREATE TABLE IF NOT EXISTS `patients_address` (
  `s_num` int(12) NOT NULL AUTO_INCREMENT,
  `hospital_num` varchar(12) NOT NULL,
  `patient_num` varchar(27) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `addr` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `pin` int(6) NOT NULL,
  PRIMARY KEY (`patient_num`),
  UNIQUE KEY `s_num` (`s_num`),
  KEY `hospital_num` (`hospital_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `patients_address`
--

INSERT INTO `patients_address` (`s_num`, `hospital_num`, `patient_num`, `mobile`, `email`, `addr`, `state`, `district`, `pin`) VALUES
(12, '21#1', '21#1160423:06:28:33', 2147483647, 'ram@meetdoc.in', 'Ayodhya', 'Uttar Pradesh', 'Faijabad', 560037),
(14, '21#1', '21#1160424:11:39:21', 2147483647, 'xyz@meetdoc.in', 'R K Puram', 'Delhi', 'Delhi', 560037),
(18, '21#1', '21#1160430081011', 2147483647, 'krupa@meetdoc.in', 'Park Street', 'West Bengal', 'Kolkata', 860045),
(19, '21#1', '21#1160502063240', 2147483647, 'murki@meetdoc.in', 'Vrindavan', 'Uttar Pradesh', 'Mathura', 560037),
(20, '21#1', '21#1160502065303', 2147483647, 'radha@meetdoc.in', 'Barsane', 'Uttar Pradesh', 'Mathura', 560037),
(21, '21#1', '21#1160503062945', 2147483647, 'mittalsmriti123@gmail.com', 'p 30 dlm', 'Bihar', 'Rohtas', 821305),
(22, '21#1', '21#1160503071037', 2147483647, 'bbvvv', 'nbvv', 'Delhi', 'Bnbv', 0),
(23, '21#1', '21#1160805062624', 2147483647, 'manoj@meetdoc.in', 'room no-502, shivaji hostel, VJTI', 'Maharashtra', 'Mumbai', 955787),
(24, '21#1', '21#1160805065146', 2147483647, 'priya@meetdoc.in', 'paschim vihar', 'Delhi', 'Delhi', 797654),
(25, '21#1', '21#1160806024857', 2147483647, 'rishabh@gmail.com', 'baker street, kanpur', 'Uttar Pradesh', 'Kanpur', 456898),
(26, '21#1', '21#1160806034843', 2147483647, 'mittalsmriti123@gmail.com', 'p/3- pobox', 'Delhi', 'rohtas', 821305),
(27, '21#1', '21#1160807015636', 2147483647, 'deepak@meetdoc.in', 'room no-302, purva rivera apartments', 'Karnataka', 'Bangalore', 560037),
(29, '21#1', '21#1160905013950', 2147483647, 'rishi@meetdoc.in', 'Mannat Apartments, Zuhu Beach', 'Maharashtra', 'Mumbai', 765432),
(28, '21#1', '21#1160905113713', 2147483647, '', 'test5', 'Uttar Pradesh', 'baliya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_information`
--

CREATE TABLE IF NOT EXISTS `patient_information` (
  `s_num` int(12) NOT NULL AUTO_INCREMENT,
  `hospital_num` varchar(12) NOT NULL,
  `pat_num` varchar(27) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `gender` text NOT NULL,
  `dob` varchar(10) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `illness` varchar(150) NOT NULL,
  PRIMARY KEY (`pat_num`),
  UNIQUE KEY `s_num` (`s_num`),
  KEY `hospital_num` (`hospital_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `patient_information`
--

INSERT INTO `patient_information` (`s_num`, `hospital_num`, `pat_num`, `first_name`, `last_name`, `gender`, `dob`, `guardian_name`, `mother_name`, `illness`) VALUES
(12, '21#1', '21#1160423:06:28:33', 'RAM', 'MISHRA', 'male', '12/04/1984', 'Dashrath Mishra', 'Kaushalya Mishra', ''),
(14, '21#1', '21#1160424:11:39:21', 'XYZ', 'SHARMA', 'female', '22/10/1976', 'ABC Sharma', 'PQR Sharma', 'High Blood Pressure'),
(17, '21#1', '21#1160430081011', 'KRUPA', 'GANGULY', 'female', '10/09/1997', 'P K Ganguly', 'S K Ganguly', 'Heart Problems'),
(18, '21#1', '21#1160502063240', 'MURLI', 'DHAR', 'male', '12/12/1988', 'Vasudev Dhar', 'Devaki Dhar', 'Heart Problems'),
(19, '21#1', '21#1160502065303', 'RADHA', 'MANOHAR', 'female', '03/06/1988', 'Nand Manohar', 'Yashoda Manohar', 'Heart Problems'),
(20, '21#1', '21#1160503062945', 'SMRITI', 'MITTAL', 'female', '02/01/2016', 'Rakes mittal', 'Ragini mital', 'Fatigueness'),
(21, '21#1', '21#1160503071037', 'RA', 'JJH', 'male', '02/07/1993', 'Hgv', 'Bbbb', 'Bbbv'),
(22, '21#1', '21#1160805062624', 'MANOJ', 'SAKHALA', 'male', '12/03/1998', 'Vijay Sakhala', 'Meenu Sakhala', 'Dizziness'),
(23, '21#1', '21#1160805065146', 'PRIYA', 'BAJAJ', 'female', '15/05/1987', 'Rushtam Bajaj', 'Rina Bajaj', 'Liver damage'),
(24, '21#1', '21#1160806024857', 'RISHABH', 'SHUKLA', 'male', '08/05/1986', 'Matul Shukla', 'Shreya Shukla', 'Lungs problem'),
(25, '21#1', '21#1160806034843', 'SMRITI', 'MITTAL', 'female', '02/07/1993', 'rakesh mittal', 'ragini mittal', 'allergic to soap'),
(26, '21#1', '21#1160807015636', 'DEEPAK', 'SHARMA', 'male', '02/05/1987', 'Kapil Sharma', 'Sarla Sharma', 'ENT'),
(28, '21#1', '21#1160905013950', 'RISHI', 'KAPOOR', 'male', '24/04/1976', 'Raj Kapoor', 'Vahida Kapoor', 'Acute Liver Disorder'),
(27, '21#1', '21#1160905113713', 'SHY', 'N', 'male', '01/01/200y', 'abcd', '', 'Headche');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `s_num` int(12) NOT NULL AUTO_INCREMENT,
  `hospital_num` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `contact_num` int(10) NOT NULL,
  `a_reg` tinyint(1) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `s_num` (`s_num`),
  KEY `hospital_num` (`hospital_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_num`, `hospital_num`, `email`, `password`, `contact_num`, `a_reg`) VALUES
(3, '21#2', 'komal@gmail.com', 'komal', 1234567890, 0),
(2, '21#1', 'pankaj.rohtas@gmail.com', 'pankaj@123', 2147483647, 1),
(4, '21#3', 'rupeshkumar@meetdoc.in', 'rupesh#123', 2147483647, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_tmp`
--
ALTER TABLE `db_tmp`
  ADD CONSTRAINT `db_tmp_ibfk_1` FOREIGN KEY (`hospital_num`) REFERENCES `hospital_details` (`hospital_num`);

--
-- Constraints for table `doc_information`
--
ALTER TABLE `doc_information`
  ADD CONSTRAINT `doc_information_ibfk_1` FOREIGN KEY (`hospital_num`) REFERENCES `users` (`hospital_num`),
  ADD CONSTRAINT `doc_information_ibfk_2` FOREIGN KEY (`hospital_num`) REFERENCES `hospital_details` (`hospital_num`),
  ADD CONSTRAINT `doc_information_ibfk_3` FOREIGN KEY (`hospital_num`) REFERENCES `hospital_details` (`hospital_num`);

--
-- Constraints for table `patients_address`
--
ALTER TABLE `patients_address`
  ADD CONSTRAINT `patients_address_ibfk_1` FOREIGN KEY (`hospital_num`) REFERENCES `hospital_details` (`hospital_num`);

--
-- Constraints for table `patient_information`
--
ALTER TABLE `patient_information`
  ADD CONSTRAINT `patient_information_ibfk_1` FOREIGN KEY (`hospital_num`) REFERENCES `hospital_details` (`hospital_num`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`hospital_num`) REFERENCES `hospital_details` (`hospital_num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

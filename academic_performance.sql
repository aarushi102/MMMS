-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 11:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms.sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_performance`
--

CREATE TABLE `academic_performance` (
  `s_no` int(11) NOT NULL,
  `sem1_ia1` varchar(50) NOT NULL,
  `sem1_ia2` varchar(100) NOT NULL,
  `sem1_prelim1` varchar(100) NOT NULL,
  `sem1_endSemExam` varchar(100) NOT NULL,
  `sem1_ia1_remark` varchar(100) NOT NULL,
  `sem1_ia2_remark` varchar(100) NOT NULL,
  `sem1_prelim_remark` varchar(100) NOT NULL,
  `sem1_end_sem_remark` varchar(100) NOT NULL,
  `sem2_ia1` varchar(100) NOT NULL,
  `sem2_ia2` varchar(100) NOT NULL,
  `sem2_prelim2` varchar(100) NOT NULL,
  `sem2_endSemExam` varchar(100) NOT NULL,
  `sem2_ia1_remark` varchar(100) NOT NULL,
  `sem2_ia2_remark` varchar(100) NOT NULL,
  `sem2_prelim_remark` varchar(100) NOT NULL,
  `sem2_end_sem_remark` varchar(100) NOT NULL,
  `sem3_ia1` varchar(100) NOT NULL,
  `sem3_ia2` varchar(100) NOT NULL,
  `sem3_prelim3` varchar(100) NOT NULL,
  `sem3_endSemExam` varchar(50) NOT NULL,
  `sem3_ia1_remark` varchar(50) NOT NULL,
  `sem3_ia2_remark` varchar(50) NOT NULL,
  `sem3_prelim_remark` varchar(50) NOT NULL,
  `sem3_end_sem_remark` varchar(50) NOT NULL,
  `sem4_ia1` varchar(50) NOT NULL,
  `sem4_ia2` varchar(50) NOT NULL,
  `sem4_prelim4` varchar(50) NOT NULL,
  `sem4_endSemExam` varchar(50) NOT NULL,
  `sem4_ia1_remark` varchar(50) NOT NULL,
  `sem4_ia2_remark` varchar(50) NOT NULL,
  `sem4_prelim_remark` varchar(50) NOT NULL,
  `sem4_end_sem_remark` varchar(50) NOT NULL,
  `sem5_ia1` varchar(50) NOT NULL,
  `sem5_ia2` varchar(50) NOT NULL,
  `sem5_prelim5` varchar(50) NOT NULL,
  `sem5_endSemExam` varchar(50) NOT NULL,
  `sem5_ia1_remark` varchar(50) NOT NULL,
  `sem5_ia2_remark` varchar(50) NOT NULL,
  `sem5_prelim_remark` varchar(50) NOT NULL,
  `sem5_end_sem_remark` varchar(50) NOT NULL,
  `sem6_ia1` varchar(50) NOT NULL,
  `sem6_ia2` varchar(50) NOT NULL,
  `sem6_prelim6` varchar(50) NOT NULL,
  `sem6_endSemExam` varchar(50) NOT NULL,
  `sem6_ia1_remark` varchar(50) NOT NULL,
  `sem6_ia2_remark` varchar(50) NOT NULL,
  `sem6_prelim_remark` varchar(50) NOT NULL,
  `sem6_end_sem_remark` varchar(50) NOT NULL,
  `sem7_ia1` varchar(50) NOT NULL,
  `sem7_ia2` varchar(50) NOT NULL,
  `sem7_prelim7` varchar(50) NOT NULL,
  `sem7_endSemExam` varchar(50) NOT NULL,
  `sem7_ia1_remark` varchar(50) NOT NULL,
  `sem7_ia2_remark` varchar(50) NOT NULL,
  `sem7_prelim_remark` varchar(50) NOT NULL,
  `sem7_end_sem_remark` varchar(50) NOT NULL,
  `sem8_ia1` varchar(100) NOT NULL,
  `sem8_ia2` varchar(100) NOT NULL,
  `sem8_prelim8` varchar(100) NOT NULL,
  `sem8_endSemExam` varchar(100) NOT NULL,
  `sem8_ia1_remark` varchar(100) NOT NULL,
  `sem8_ia2_remark` varchar(100) NOT NULL,
  `sem8_prelim_remark` varchar(100) NOT NULL,
  `sem8_end_sem_remark` varchar(100) NOT NULL,
  `r_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_performance`
--

INSERT INTO `academic_performance` (`s_no`, `sem1_ia1`, `sem1_ia2`, `sem1_prelim1`, `sem1_endSemExam`, `sem1_ia1_remark`, `sem1_ia2_remark`, `sem1_prelim_remark`, `sem1_end_sem_remark`, `sem2_ia1`, `sem2_ia2`, `sem2_prelim2`, `sem2_endSemExam`, `sem2_ia1_remark`, `sem2_ia2_remark`, `sem2_prelim_remark`, `sem2_end_sem_remark`, `sem3_ia1`, `sem3_ia2`, `sem3_prelim3`, `sem3_endSemExam`, `sem3_ia1_remark`, `sem3_ia2_remark`, `sem3_prelim_remark`, `sem3_end_sem_remark`, `sem4_ia1`, `sem4_ia2`, `sem4_prelim4`, `sem4_endSemExam`, `sem4_ia1_remark`, `sem4_ia2_remark`, `sem4_prelim_remark`, `sem4_end_sem_remark`, `sem5_ia1`, `sem5_ia2`, `sem5_prelim5`, `sem5_endSemExam`, `sem5_ia1_remark`, `sem5_ia2_remark`, `sem5_prelim_remark`, `sem5_end_sem_remark`, `sem6_ia1`, `sem6_ia2`, `sem6_prelim6`, `sem6_endSemExam`, `sem6_ia1_remark`, `sem6_ia2_remark`, `sem6_prelim_remark`, `sem6_end_sem_remark`, `sem7_ia1`, `sem7_ia2`, `sem7_prelim7`, `sem7_endSemExam`, `sem7_ia1_remark`, `sem7_ia2_remark`, `sem7_prelim_remark`, `sem7_end_sem_remark`, `sem8_ia1`, `sem8_ia2`, `sem8_prelim8`, `sem8_endSemExam`, `sem8_ia1_remark`, `sem8_ia2_remark`, `sem8_prelim_remark`, `sem8_end_sem_remark`, `r_no`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_performance`
--
ALTER TABLE `academic_performance`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_performance`
--
ALTER TABLE `academic_performance`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

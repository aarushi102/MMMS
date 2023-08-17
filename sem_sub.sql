-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 05:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(50) NOT NULL,
  `sem_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem_no`) VALUES
(111, 1),
(112, 2),
(113, 3),
(114, 4),
(115, 5),
(116, 6),
(117, 7),
(118, 8);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `s_no` int(10) NOT NULL,
  `sub_id` varchar(50) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sem_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_no`, `sub_id`, `sub_name`, `sem_id`) VALUES
(1, 'FEC101', 'Engineering Mathematics-I', 111),
(2, 'FEC102 ', 'Engineering Physics-I', 111),
(3, 'FEC103', 'Engineering Chemistry -I', 111),
(4, 'FEC104', 'Engineering Mechanics', 111),
(5, 'FEC105', 'Basic Electrical Engineering', 111),
(6, 'FEL101 ', 'Engineering Physics - I Lab', 111),
(7, 'FEL102 ', 'Engineering Chemistry - I Lab', 111),
(8, 'FEL103', 'Engineering Mechanics Lab', 111),
(9, 'FEL104', 'Basic Electrical Engineering Lab', 111),
(10, 'FEL105', 'Basic Workshop practice-I ', 111),
(11, 'FEC201', 'Engineering Mathematics-II', 112),
(12, 'FEC202 ', 'Engineering Physics-II ', 112),
(13, 'FEC203', 'Engineering Chemistry-II', 112),
(14, 'FEC204', 'Engineering Graphics ', 112),
(15, 'FEC205', 'C programming', 112),
(16, 'FEC206 ', 'Professional Communication\r\nand Ethics- I', 112),
(17, 'FEL201 ', 'Engineering Physics-II Lab', 112),
(18, 'FEL202 ', 'Engineering Chemistry-II Lab', 112),
(19, 'FEL203 ', 'Engineering Graphics Lab', 112),
(20, 'FEL204 ', 'C programming Lab', 112),
(21, 'FEL205', 'Professional Communication\r\nand Ethics- I\r\n', 112),
(22, 'FEL206', 'Basic Workshop practice-II ', 112),
(23, 'CSC301', 'Engineering Mathematics - III', 113),
(24, 'CSC302', 'Discrete Structures and graph theory ', 113),
(25, 'CSC303', 'Data Structure ', 113),
(26, 'CSC304', 'Digital Logic & Computer Architecture', 113),
(27, 'CSC305', 'Computer Graphics', 113),
(28, 'CSL301', 'Data Structure Lab', 113),
(29, 'CSL302', 'Digital Logic & Computer Architecture Lab', 113),
(30, 'CSL303', 'Computer Graphics Lab', 113),
(31, 'CSL304', 'Skill base Lab course:\r\nObject Oriented\r\nProgramming with Java', 113),
(32, 'CSM301 ', 'Mini Project – 1 A', 113),
(33, 'CSC401 ', 'Engineering Mathematics - IV', 114),
(34, 'CSC402', 'Analysis of algorithm', 114),
(35, 'CSC403', 'Database Management\r\nSystem', 114),
(36, 'CSC404', 'Operating System', 114),
(37, 'CSC405', 'Microprocessor', 114),
(38, 'CSL401 ', 'Analysis of Algorithm Lab', 114),
(39, 'CSL402', 'Database Management\r\nSystem Lab ', 114),
(40, 'CSL403', 'Operating System Lab', 114),
(41, 'CSL404', 'Microprocessor Lab', 114),
(42, 'CSL405', 'Skill Base Lab Course:\r\nPython Programming', 114),
(43, 'CSM401', 'Mini Project 1-B', 114),
(44, 'CSC501', 'Theoretical Computer\r\nScience', 115),
(45, 'CSC502', 'Software Engineering', 115),
(46, 'CSC503', 'Computer Network', 115),
(47, 'CSC504', 'Data Warehousing &\r\nMining ', 115),
(48, 'CSDLO501x', 'Department Level\r\nOptional Course- 1', 115),
(49, 'CSL501', 'Software Engineering\r\nLab', 115),
(50, 'CSL502', 'Computer Network Lab', 115),
(51, 'CSL503', 'Data Warehousing &\r\nMining Lab', 115),
(52, 'CSL504', 'Business Comm. &\r\nEthics II', 115),
(53, 'CSM501', 'Mini Project: 2 A', 115),
(54, 'CSC601', 'System Programming &\r\nCompiler Construction', 116),
(55, 'CSC602', 'Cryptography & System\r\nSecurity', 116),
(56, 'CSC603', 'Mobile Computing', 116),
(57, 'CSC604', 'Artificial Intelligence', 116),
(58, 'CSDLO601x', 'Department Level Optional\r\nCourse -2', 116),
(59, 'CSL601', 'System Programming &\r\nCompiler Construction Lab', 116),
(60, 'CSL602', 'Cryptography & System\r\nSecurity Lab ', 116),
(61, 'CSL603', 'Mobile Computing Lab', 116),
(62, 'CSL604', 'Artificial Intelligence Lab', 116),
(63, 'CSL605', 'Skill base Lab Course:\r\nCloud Computing ', 116),
(64, 'CSM601', 'Mini Project Lab: 2B', 116),
(65, 'CSC701', 'Digital Signal & Image\r\nProcessing', 117),
(66, 'CSC702', 'Mobile Communication &\r\nComputing', 117),
(67, 'CSC703', 'Artificial Intelligence & Soft\r\nComputing', 117),
(68, 'CSDLO 701X', 'Department Level Optional\r\nCourse -III ', 117),
(69, 'ILO701X', 'Institute Level Optional\r\nCourse-I', 117),
(70, 'CSL701', 'Digital Signal & Image\r\nProcessing Lab', 117),
(71, 'CSL702', 'Mobile App. Development.\r\nTech. Lab', 117),
(72, 'CSL703', 'Artificial Intelligence & Soft\r\nComputing Lab', 117),
(73, 'CSL704', 'Computational Lab-I', 117),
(74, 'CSP705', 'Major Project-I', 117),
(75, 'CSC801', 'Human Machine\r\nInteraction', 118),
(76, 'CSC802', 'Distributed Computing', 118),
(77, 'CSDLO 801X', 'Department Level Optional\r\nCourse -IV', 118),
(78, 'ILO801X', 'Institute Level Optional\r\nCourse-II', 118),
(79, 'CSL801', 'Human Machine\r\nInteraction Lab', 118),
(80, 'CSL802', 'Distributed Computing\r\nLab', 118),
(81, 'CSL803', 'Cloud Computing Lab', 118),
(82, 'CSL804', ' Computational Lab-II', 118),
(83, 'CSP805', 'Major Project-II', 118);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `s_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

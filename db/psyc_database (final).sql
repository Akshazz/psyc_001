-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 12:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psyc_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `answer1` varchar(300) NOT NULL,
  `answer2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `pin`, `answer1`, `answer2`) VALUES
(1, 'aron', 'niegos', 123456, '', ''),
(2, 'Harold', 'Niegos', 123456, '', ''),
(3, 'Test_DB', 'User1', 12345, '', ''),
(4, 'awdawd', 'adwad', 0, '', ''),
(5, 'dawd', 'awdwa', 0, '', ''),
(6, 'aron', 'aron', 0, '', ''),
(7, 'aron', 'niegos', 0, '', ''),
(8, 'aron', 'niegos', 0, '', ''),
(9, 'aron', 'niegos', 0, '', ''),
(10, 'dwadwada', 'daw', 0, '', ''),
(11, 'dwadwada', 'daw', 0, '', ''),
(12, 'dwadwada', 'daw', 0, '', ''),
(13, 'dwadwada', 'daw', 0, '', ''),
(14, 'dawdw', 'adwdwadwa', 0, '', ''),
(15, 'dawdw', 'adwdwadwa', 0, '', ''),
(16, 'aron', 'niegos', 0, '', ''),
(17, 'aron', 'niegos', 0, '', ''),
(18, '', '', 0, 'dwadawd', 'awdadww');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `answer1` varchar(300) NOT NULL,
  `answer2` varchar(300) NOT NULL,
  `answer3` varchar(300) NOT NULL,
  `answer4` varchar(300) NOT NULL,
  `answer5` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `fname`, `lname`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`) VALUES
(100, 'test1', 'test1', 'test1', 'test2', 'test3\r\n', 'test4', 'test5'),
(160, 'Harold', 'Niegos', 'test1', 'test12', 'test123', 'test1234', 'test12345'),
(168, 'Juan', 'Tamad', 'answer1', 'answer1', 'answer1', 'answer1', 'answer1');

-- --------------------------------------------------------

--
-- Table structure for table `questions2`
--

CREATE TABLE `questions2` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `answer1` varchar(300) NOT NULL,
  `answer2` varchar(300) NOT NULL,
  `answer3` varchar(300) NOT NULL,
  `answer4` varchar(300) NOT NULL,
  `answer5` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions2`
--

INSERT INTO `questions2` (`id`, `fname`, `lname`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`) VALUES
(3, 'Aron', 'Niegos', 'dawdwadwad', 'dwadwadwa', 'any', 'any', 'any'),
(10, 'Juan', 'Tamad', 'True', 'False', 'True', 'True', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `questions3`
--

CREATE TABLE `questions3` (
  `id` int(11) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `answer1` varchar(300) NOT NULL,
  `answer2` varchar(300) NOT NULL,
  `answer3` varchar(300) NOT NULL,
  `answer4` varchar(300) NOT NULL,
  `answer5` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions3`
--

INSERT INTO `questions3` (`id`, `fname`, `lname`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`) VALUES
(2, 'Aron ', 'Niegos', 'dawdawdawd', 'dwawa', 'dawdawd', 'dwadawda', 'dawdwada'),
(7, 'Juan', 'Tamad', 'comfort', 'answer1', 'answer1', 'answer1', 'answer1'),
(8, 'Juan', 'Tamad', 'comfort', 'answer2', 'friends', 'anger', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions2`
--
ALTER TABLE `questions2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions3`
--
ALTER TABLE `questions3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `questions2`
--
ALTER TABLE `questions2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `questions3`
--
ALTER TABLE `questions3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

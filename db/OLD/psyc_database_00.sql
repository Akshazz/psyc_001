-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 10:11 AM
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
  `answer5` varchar(300) NOT NULL,
  `answer6` varchar(300) NOT NULL,
  `answer7` varchar(300) NOT NULL,
  `answer8` varchar(300) NOT NULL,
  `answer9` varchar(300) NOT NULL,
  `answer10` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `fname`, `lname`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `answer10`) VALUES
(100, 'test1', 'test1', 'test1', 'test2', 'test3\r\n', 'test4', 'test5', 'test6', 'test7', 'test8', 'test9', 'test word sad and bye.'),
(113, 'Harold', 'Niegos', 'ddadada', 'dadadada', 'dadadadada', 'dadadadada', 'dadadada', 'adadadadad', 'dadadad', 'dadadada', 'dadada', 'dadadada');

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
  `answer5` varchar(300) NOT NULL,
  `answer6` varchar(300) NOT NULL,
  `answer7` varchar(300) NOT NULL,
  `answer8` varchar(300) NOT NULL,
  `answer9` varchar(300) NOT NULL,
  `answer10` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `answer5` varchar(300) NOT NULL,
  `answer6` varchar(300) NOT NULL,
  `answer7` varchar(300) NOT NULL,
  `answer8` varchar(300) NOT NULL,
  `answer9` varchar(300) NOT NULL,
  `answer10` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `questions2`
--
ALTER TABLE `questions2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions3`
--
ALTER TABLE `questions3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

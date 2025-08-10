-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 05:09 AM
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
-- Database: `cems1`
--

-- --------------------------------------------------------

--
-- Table structure for table `addevent`
--

CREATE TABLE `addevent` (
  `eid` int(11) NOT NULL,
  `photo_path` varchar(40) NOT NULL,
  `etitle` varchar(40) NOT NULL,
  `miniguest` int(11) NOT NULL,
  `maxguest` int(11) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addevent`
--

INSERT INTO `addevent` (`eid`, `photo_path`, `etitle`, `miniguest`, `maxguest`, `dates`) VALUES
(101, 'Yoga_session.jpg', 'Yoga Devas', 100, 180, '2023-06-21'),
(102, 'fresher_party23.jpg', 'Fresher Party_2023', 100, 200, '2023-11-23'),
(103, 'group_days25.jpg', 'Group Day_2024', 100, 200, '2024-05-24'),
(104, 'individual_Sports_competition.jpg', 'Sports Day', 100, 200, '2025-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `eventtype`
--

CREATE TABLE `eventtype` (
  `etitle` varchar(40) NOT NULL,
  `etype` varchar(40) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `price` int(11) NOT NULL,
  `lastdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventtype`
--

INSERT INTO `eventtype` (`etitle`, `etype`, `starttime`, `endtime`, `price`, `lastdate`) VALUES
('fresher party', 'Dance,Singing,Drama', '14:00:00', '16:00:00', 200, '2025-01-29'),
('Fresher Party_2023', 'Dance,Drama,Singing,fashion show', '02:00:00', '06:00:00', 50, '2023-11-14'),
('Group Day_24', 'Zumba,Rangoli competition,Dance(solo/Gro', '10:00:00', '03:00:00', 50, '2024-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `username` varchar(40) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `etype` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`username`, `fullname`, `email`, `ename`, `etype`) VALUES
('kashish_123', 'kashish singh', 'kashish@gmail.com', 'fresher party', 'darma'),
('xyz_123', 'kashish patel', 'kp@gmail.com', 'fresher party', 'dance'),
('neetu_123', 'neetu kushwaha', 'N@g.com', 'sport day', 'Dance'),
('neetu_123', 'shweta kushwaha', 'sk@g.com', 'Fresher party', 'Dance');

-- --------------------------------------------------------

--
-- Table structure for table `payement`
--

CREATE TABLE `payement` (
  `cname` varchar(40) NOT NULL,
  `cno` int(16) NOT NULL,
  `exdate` date NOT NULL,
  `cvc` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(20) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `sem` int(11) NOT NULL,
  `pno` int(11) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `fullname`, `email`, `course`, `sem`, `pno`, `password`) VALUES
('kashish_123', 'kashish singh', 'kashish@gmail.com', 'BCA', 6, 985743658, 'kashish123'),
('neetu_123', 'neetu kushwaha', 'neetu@gmail.com', 'bca', 6, 1234567890, 'neetuk123'),
('shweta_123', 'shweta kushwaha', 'sk@g.com', 'B.com', 1, 2147483647, 'shwetak123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addevent`
--
ALTER TABLE `addevent`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

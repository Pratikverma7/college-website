-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 08:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cicwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `name` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Naveen Kumar', 'nkgahra0395@gmail.com', '8059393996', 'Cic@2021');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `aid` int(11) NOT NULL,
  `atitle` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alink` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adate` date NOT NULL,
  `afile` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`aid`, `atitle`, `alink`, `adate`, `afile`) VALUES
(2, 'New Announcement Title 1', 'https://nvngahra.tech', '2021-04-03', '60685237e5116.jpg'),
(4, 'New Announcement Title 3', 'https://clusteritsoln.com', '2021-04-03', '60684fc951d7a.png'),
(5, 'New Announcement Title 1', 'https://clusteritsoln.com', '2021-04-20', '607eebdf7b20a.');

-- --------------------------------------------------------

--
-- Table structure for table `barevised`
--

CREATE TABLE `barevised` (
  `id` int(11) NOT NULL,
  `papername` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barevised`
--

INSERT INTO `barevised` (`id`, `papername`, `teacher`, `code`, `course`, `pdf`) VALUES
(1, 'Research Methodology ', 'RAJESH K.Sharma', '912106', 'BA-2021 (SEM - 2)', 'pdf/Campus Ambassador_internship_certificate.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `btechrevised`
--

CREATE TABLE `btechrevised` (
  `id` int(11) NOT NULL,
  `papername` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btechrevised`
--

INSERT INTO `btechrevised` (`id`, `papername`, `teacher`, `code`, `course`, `pdf`) VALUES
(1, 'Computer Network', 'A.Saxena', 'BT-506', 'B.tech (sem- 2)', 'pdf/Pratik resume.pdf'),
(2, 'Operating  System', 'Ramesh Verma', 'IT-578', 'B.Tech (sem -3)', 'pdf/Campus Ambassador_internship_certificate.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `directordetails`
--

CREATE TABLE `directordetails` (
  `did` int(11) NOT NULL,
  `dname` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dabout` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demail` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimage` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directordetails`
--

INSERT INTO `directordetails` (`did`, `dname`, `dabout`, `demail`, `dimage`) VALUES
(2, 'Naveen Kumar', 'Cluster Innovation Centre (CIC) was established in the year 2011, with the aim of fostering innovation and connecting entrepreneurship with classroom curriculum. Since then, the Centre has come a long way engendering self-', 'nkgahra0395@gmail.com', '60676e19b81c7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `fid` int(11) NOT NULL,
  `fname` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fdesignation` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fcv` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fimage` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`fid`, `fname`, `fdesignation`, `facebook`, `linkedin`, `twitter`, `fcv`, `fimage`) VALUES
(5, 'Prof. Sobha Bagai', 'Professor In Mathematics', 'https://facebook.com/12345', 'https://linkedin.com/123', 'https://twitter.com/123', '', '60735509390eb.jpg'),
(6, 'Prof. Sobha Bagai', 'Professor In Mathematics', 'https://facebook.com/123', 'hiilinkedin1', 'hiitwitter1', '', '607355c153a14.png'),
(7, 'Prof. Sobha Bagai', 'Professor In Mathematics', 'https://facebook.com/123', 'hiilinkedin1', 'hiitwitter1', '', '607358637290e.png'),
(8, 'Prof. Sobha Bagai', 'Professor In Mathematics', 'https://facebook.com/123', 'hiilinkedin1', 'hiitwitter1', '', '60735c00a0f79.jpg'),
(9, 'Test', 'Professor In Mathematics', 'https://facebook.com/123', 'hiilinkedin1', 'hiitwitter', '', '60735bf1c055b.png'),
(10, 'Mr. Anjani Verma', 'Assistant Professor in IT', 'https://facebook.com/12345', 'hiilinkedin1', 'hiitwitter1', 'jkjbnm', '60735c8613aaa.png');

-- --------------------------------------------------------

--
-- Table structure for table `listofcommities`
--

CREATE TABLE `listofcommities` (
  `cid` int(10) NOT NULL,
  `ctitle` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conveyer` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `members` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CStartDate` date NOT NULL,
  `CEndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listofcommities`
--

INSERT INTO `listofcommities` (`cid`, `ctitle`, `conveyer`, `members`, `CStartDate`, `CEndDate`) VALUES
(3, 'Committies 1', 'Naveen Kumar', '1. Naveen Yadav  2. Paras 3. Zaleesh 4. Manish', '2021-03-31', '2021-05-01'),
(4, 'Commettie 2', 'Naveen Kumar', '1. Naveen Yadav 2. Paras 3. Zaleesh 4. Manish', '2021-04-05', '2021-04-29'),
(5, 'Committies 13', 'Naveen Kumar', '1. Naveen Yadav 2. Paras 3. Zaleesh 4. Manish', '2021-03-31', '2021-04-21'),
(6, 'Committies 134', 'Naveen Kumar', '1. Naveen 2. Paras 3. Zaleesh 4. Manish', '2021-04-01', '2021-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `mscrevised`
--

CREATE TABLE `mscrevised` (
  `id` int(11) NOT NULL,
  `papername` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mscrevised`
--

INSERT INTO `mscrevised` (`id`, `papername`, `teacher`, `code`, `course`, `pdf`) VALUES
(1, 'Calculus: Role in real life', 'Pratik Verma', 'IT-506', 'M.sc (Sem - 5)', 'pdf/certificate.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `barevised`
--
ALTER TABLE `barevised`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btechrevised`
--
ALTER TABLE `btechrevised`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directordetails`
--
ALTER TABLE `directordetails`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `listofcommities`
--
ALTER TABLE `listofcommities`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `mscrevised`
--
ALTER TABLE `mscrevised`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barevised`
--
ALTER TABLE `barevised`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `btechrevised`
--
ALTER TABLE `btechrevised`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `directordetails`
--
ALTER TABLE `directordetails`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `listofcommities`
--
ALTER TABLE `listofcommities`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mscrevised`
--
ALTER TABLE `mscrevised`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

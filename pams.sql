-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 12:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pams`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `id` int(11) NOT NULL COMMENT 'Primary key',
  `userid` text NOT NULL COMMENT 'Unique index for user',
  `username` text NOT NULL COMMENT 'Username',
  `password` text NOT NULL COMMENT 'Encrypted password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`id`, `userid`, `username`, `password`) VALUES
(1, 'US0001', 'Aldebaran', '$2y$10$HS5kAsHIFMO/g82PYjEtAOtDcjwSOlNTGGIN3ElZxsO0tHiFDHH66'),
(2, 'US0002', 'Guest', '$2y$10$V66J.hkaRLnVfWC/VGPAZuOFHx5VRwyyEfPlDe7QqBJYY1ZfWiAtC'),
(3, 'US0003', 'ejcb_1004', '$2y$10$tf4XtFcwLcDUJur6zpdPTOE5hTxQahkEj.qBTsmm6zYqB4/1fJn2a');

-- --------------------------------------------------------

--
-- Table structure for table `changelog`
--

CREATE TABLE `changelog` (
  `id` int(11) NOT NULL,
  `transacid` text NOT NULL,
  `description` text NOT NULL,
  `logtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `changelog`
--

INSERT INTO `changelog` (`id`, `transacid`, `description`, `logtime`) VALUES
(1, 'CL0001', 'Aldebaran added a new pet: Calla', '2022-03-02 19:36:08'),
(2, 'CL0002', 'Aldebaran added a new pet: Perseus', '2022-03-02 19:38:46'),
(3, 'CL0003', 'Aldebaran added a new pet: Silens', '2022-03-02 20:03:50'),
(4, 'CL0004', 'Aldebaran added a new pet: Benti', '2022-03-02 20:04:16'),
(5, 'CL0005', 'Aldebaran added a new pet: Kaykay', '2022-03-02 20:04:32'),
(6, 'CL0006', 'Aldebaran added a new pet: Shibe', '2022-03-02 20:05:47'),
(7, 'CL0007', 'Aldebaran updated Benti\'s details', '2022-03-02 20:06:12'),
(8, 'CL0008', 'Aldebaran updated Calla\'s details', '2022-03-02 20:06:53'),
(9, 'CL0009', 'Aldebaran added a new pet: Kagta', '2022-03-02 20:11:58'),
(10, 'CL0010', 'Aldebaran updated Kagta\'s details', '2022-03-03 10:17:23'),
(11, 'CL0011', 'Aldebaran added a new pet: Kobe', '2022-03-03 10:18:49'),
(12, 'CL0012', 'Aldebaran updated Kobe\'s details', '2022-03-03 10:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `loginlog`
--

CREATE TABLE `loginlog` (
  `id` int(11) NOT NULL,
  `ipadd` text NOT NULL,
  `counter` int(11) NOT NULL,
  `recentattempt` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginlog`
--

INSERT INTO `loginlog` (`id`, `ipadd`, `counter`, `recentattempt`, `status`) VALUES
(1, '::1', 0, '2022-08-19 08:57:59', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `petid` text NOT NULL,
  `pname` text NOT NULL,
  `species` text NOT NULL,
  `breed` text NOT NULL,
  `sex` bit(1) NOT NULL,
  `acqdate` date NOT NULL,
  `isadopted` bit(1) DEFAULT NULL,
  `isreserved` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `petid`, `pname`, `species`, `breed`, `sex`, `acqdate`, `isadopted`, `isreserved`) VALUES
(1, 'PT0001', 'Calla', 'Canis familiaris', 'Labrador Retriever-Dachshund Hybrid', b'1', '2020-01-01', b'0', b'0'),
(2, 'PT0002', 'Perseus', 'Felis catus', 'Persian Cat', b'0', '2019-03-06', b'0', b'0'),
(3, 'PT0003', 'Silens', 'Felis catus', 'Mixed-breed', b'0', '2020-04-20', b'0', b'0'),
(4, 'PT0004', 'Benti', 'Canis familiaris', 'American Bully', b'1', '2020-01-01', b'0', b'0'),
(5, 'PT0005', 'Kaykay', 'Canis familiaris', 'Chihuahua', b'1', '2018-01-01', b'0', b'0'),
(6, 'PT0006', 'Shibe', 'Canis familiaris', 'Shiba Inu', b'0', '2021-07-20', b'0', b'0'),
(7, 'PT0007', 'Kagta', 'Canis familiaris', 'Mixed-breed', b'0', '2015-01-09', b'0', b'0'),
(8, 'PT0008', 'Kobe', 'Canis familiaris', 'Shih Tzu', b'0', '2020-01-01', b'0', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`) USING HASH;

--
-- Indexes for table `changelog`
--
ALTER TABLE `changelog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transacid` (`transacid`) USING HASH;

--
-- Indexes for table `loginlog`
--
ALTER TABLE `loginlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `petid` (`petid`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `changelog`
--
ALTER TABLE `changelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loginlog`
--
ALTER TABLE `loginlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

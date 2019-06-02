-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 10:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `signuptable`
--

CREATE TABLE `signuptable` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mbiemri` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gjinia` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Datelindja` date NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenExpire` datetime NOT NULL,
  `privilege` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signuptable`
--

INSERT INTO `signuptable` (`ID`, `Emri`, `Mbiemri`, `Gjinia`, `Datelindja`, `Email`, `Password`, `token`, `tokenExpire`, `privilege`) VALUES
(1, 'Rron', 'Prokupla', 'Mashkull', '1999-03-30', 'rroni_r1@hotmail.com', '$2y$12$iMIscm/scitxW/VYm7ITdeEvob7xDxKG2ggdNIn2pYI7/3d6I1UES', '', '0000-00-00 00:00:00', 'admin'),
(2, 'Shpend', 'Jahiri', 'Mashkull', '2013-07-27', 'shpe.ndi_3j@hotmail.com', '$2y$12$TPvsvGfRuZwgy6o02PTgGuO4/oP8wS1BoIOP3fHRzwl8ibHOMhxdW', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signuptable`
--
ALTER TABLE `signuptable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signuptable`
--
ALTER TABLE `signuptable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

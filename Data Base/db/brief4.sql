-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 04:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brief4`
--

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
  `ID` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(254) COLLATE utf8_bin DEFAULT NULL,
  `passwd` varchar(245) COLLATE utf8_bin DEFAULT NULL,
  `Status` varchar(245) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`ID`, `role`, `email`, `passwd`, `Status`) VALUES
(1, 1, 'testing@gmail.com', '12345T', 'ADMIN'),
(2, 2, 'stud@gmail.com', '12345TSTUDENT', 'ETUDIANT'),
(3, 2, 'stud66@gmail.com', '7655TSTUDENT', 'ETUDIANT');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID_etudiant` int(11) NOT NULL,
  `nom` varchar(245) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(245) COLLATE utf8_bin DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `CNE` int(11) DEFAULT NULL,
  `CIN` int(11) DEFAULT NULL,
  `genre` varchar(245) COLLATE utf8_bin DEFAULT NULL,
  `ID_grp` int(11) DEFAULT NULL,
  `ID_compte` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`ID_etudiant`, `nom`, `prenom`, `date_naissance`, `CNE`, `CIN`, `genre`, `ID_grp`, `ID_compte`) VALUES
(2, 'ALI', 'HASAN', '1999-03-10', 1547512, 658111, 'male', 1, 2),
(4, 'MOHAMMED', 'SOBHI', '1998-06-12', 112512, 658301, 'male', 2, 2),
(5, 'SABAH', 'MORABIT', '0000-00-00', 199512, 658001, 'female', 2, 2),
(6, 'MEHDI', 'ROUHI', '0000-00-00', 1122830, 608355, 'male', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

CREATE TABLE `groupe` (
  `ID_groupe` int(11) NOT NULL,
  `groupe_name` varchar(245) COLLATE utf8_bin DEFAULT NULL,
  `professeur` varchar(245) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `groupe`
--

INSERT INTO `groupe` (`ID_groupe`, `groupe_name`, `professeur`) VALUES
(1, 'ADA LOVE', 'FATIMA ZEHRA'),
(2, 'ALAN TURIN', 'YOUNESS'),
(3, 'MARGARITA', 'AYOUB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID_etudiant`),
  ADD KEY `ID_grp` (`ID_grp`),
  ADD KEY `ID_compte` (`ID_compte`);

--
-- Indexes for table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`ID_groupe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compte`
--
ALTER TABLE `compte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID_etudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `ID_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `ID_compte` FOREIGN KEY (`ID_compte`) REFERENCES `compte` (`ID`),
  ADD CONSTRAINT `ID_grp` FOREIGN KEY (`ID_grp`) REFERENCES `groupe` (`ID_groupe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

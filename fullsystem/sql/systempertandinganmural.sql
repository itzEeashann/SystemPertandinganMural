-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 05:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systempertandinganmural`
--

-- --------------------------------------------------------

--
-- Table structure for table `hakim`
--

CREATE TABLE `hakim` (
  `IC` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Nombor_Telefon` bigint(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hakim`
--

INSERT INTO `hakim` (`IC`, `Nama`, `Nombor_Telefon`, `Password`) VALUES
('020534563421', 'John', 123456789, 'test123'),
('067543134575', 'Pete', 123456788, 'testtest');

-- --------------------------------------------------------

--
-- Table structure for table `info_peserta`
--

CREATE TABLE `info_peserta` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nama` text NOT NULL,
  `Aspek` text NOT NULL,
  `Markah_Penuh` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_peserta`
--

INSERT INTO `info_peserta` (`ID`, `Nama`, `Aspek`, `Markah_Penuh`) VALUES
(1, 'Aaron', 'Kreatif', 96),
(2, 'Surya', 'Kreatif', 94),
(3, 'Mike', 'Kreatif', 85),
(4, 'John', 'Kreatif', 92);

-- --------------------------------------------------------

--
-- Table structure for table `urusetia`
--

CREATE TABLE `urusetia` (
  `ID` varchar(50) NOT NULL,
  `Nama` text NOT NULL,
  `Nombor_Telefon` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urusetia`
--

INSERT INTO `urusetia` (`ID`, `Nama`, `Nombor_Telefon`, `Password`) VALUES
('024356343278', 'Thrissha', '0183216177', 'testing123'),
('025674321856', 'Admin', '0123456789', 'test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_peserta`
--
ALTER TABLE `info_peserta`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `urusetia`
--
ALTER TABLE `urusetia`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_peserta`
--
ALTER TABLE `info_peserta`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

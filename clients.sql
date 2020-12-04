-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 05:36 PM
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
-- Database: `oceanlion`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `ID` varchar(50) NOT NULL,
  `sName` varchar(255) NOT NULL,
  `sAD` varchar(255) NOT NULL,
  `sE` varchar(100) NOT NULL,
  `spn` varchar(100) NOT NULL,
  `rN` varchar(200) NOT NULL,
  `rA` varchar(255) NOT NULL,
  `rpN` varchar(150) NOT NULL,
  `rE` varchar(150) NOT NULL,
  `pf` varchar(150) NOT NULL,
  `pt` varchar(150) NOT NULL,
  `dd` varchar(150) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `cl` varchar(150) NOT NULL,
  `rmk` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`ID`, `sName`, `sAD`, `sE`, `spn`, `rN`, `rA`, `rpN`, `rE`, `pf`, `pt`, `dd`, `ad`, `cl`, `rmk`) VALUES
('BWQ1253', 'Williams peter Aydin', '119 Belmont Street, ', 'tomzy337@gmail.com', '+3197005032632', 'Sumalee  SingKul ', '119 Belmont Street, ', '+66825291356', 'tomzy337@gmail.com', 'Istanbul turkey', 'Bangkok thailand', '19/05/2020', '16/12/2019', 'bill paid', 'Arrived , ready for delivery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 01:51 PM
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
-- Database: `serkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `MasukanNama` varchar(50) NOT NULL,
  `MasukanEmail` varchar(50) NOT NULL,
  `NomorHP` int(30) NOT NULL,
  `smt` int(10) NOT NULL,
  `ipk` int(10) NOT NULL,
  `beasiswa` varchar(20) NOT NULL,
  `status_ajuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`MasukanNama`, `MasukanEmail`, `NomorHP`, `smt`, `ipk`, `beasiswa`, `status_ajuan`) VALUES
('ais ulul azmi', 'kdawa0225@gmail.com', 145623456, 2, 4, 'Beasiswa Akademik', 'belum diverifikasi'),
('ulul ulul ulu', 'ululazmi150819@gmail.com', 987654321, 5, 3, 'Beasiswa Non-Akademi', 'belum diverifikasi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

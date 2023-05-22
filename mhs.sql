-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 03:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(250) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nim` int(25) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nama`, `nim`, `prodi`) VALUES
(9, 'puri', 2004411216, 'Informatikaaa'),
(10, 'Alvin Alfharisi', 2004411201, 'Informasi'),
(13, 'Nanang', 200441228, 'informatika'),
(14, 'sarman', 2004411216, 'Informatika'),
(15, 'Wulan', 2004411312, 'PGSD'),
(16, 'Zenita', 220441118, 'Informatika'),
(17, 'Ashila', 2004411426, 'Matematika'),
(18, 'Zulfiana', 2004411231, 'Matematika'),
(19, 'Alya', 2004411217, 'Informatika'),
(20, 'Ade ', 2004411209, 'Informatika'),
(21, 'Eka Burhan', 2004411213, 'Informatika'),
(22, 'Husnani', 2004411223, 'Informatika'),
(23, 'Irmawati', 2004411233, 'Informatika'),
(24, 'Anisya', 2004411214, 'Informatika'),
(25, 'Respati', 210441312, 'Informatika'),
(26, 'Tiara', 2004411178, 'Informatika'),
(27, 'Nurhasisa', 2004411398, 'Informatika'),
(28, 'Aminah', 200441451, 'PGSD'),
(29, 'Monicha', 2004411203, 'Informatika'),
(30, 'Salsa', 2004411219, 'Informatika'),
(31, 'Yudi', 2004411318, 'Informatika'),
(32, 'Dimas', 2004411317, 'Informatika'),
(33, 'Nabila', 2004411473, 'Informatika'),
(34, 'Aswar', 2004411276, 'Informatika'),
(35, 'Wanda', 2004411303, 'Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

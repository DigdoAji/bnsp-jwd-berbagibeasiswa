-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 03:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbeasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '1234'),
(2, 'Ursula', 'sula', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftar`
--

CREATE TABLE `tbdaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `beasiswa` varchar(30) DEFAULT NULL,
  `berkas` varchar(255) DEFAULT NULL,
  `status_ajuan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdaftar`
--

INSERT INTO `tbdaftar` (`id_pendaftar`, `nama`, `email`, `no_hp`, `semester`, `ipk`, `beasiswa`, `berkas`, `status_ajuan`) VALUES
(1, 'Raisa', 'Raisa123@gmail.com', '08121131121', 8, 3.72, 'Beasiswa Bank Indonesia - Riau', 'Raisa.pdf', 'Sudah diverifikasi'),
(2, 'Aji', 'aji213@gmail.com', '08121313112', 5, 3.56, 'Beasiswa KIP-Kuliah', 'Aji.jpg', 'Belum diverifikasi'),
(3, 'Budi', 'budiman@gmail.com', '08213112131', 3, 3.34, 'Beasiswa Bank Indonesia - Riau', 'Budi.pdf', 'Sudah diverifikasi'),
(8, 'Bambang', 'Bambang123@gmail.com', '0812141432', 5, 3.23, 'Beasiswa KIP-Kuliah', '', 'Sudah diverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbdaftar`
--
ALTER TABLE `tbdaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbdaftar`
--
ALTER TABLE `tbdaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

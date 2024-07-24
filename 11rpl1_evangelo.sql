-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2024 at 06:14 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `11rpl1_evangelo`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `idDokter` varchar(50) NOT NULL,
  `nmDokter` varchar(50) NOT NULL,
  `spesialisasi` text NOT NULL,
  `noTelp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`idDokter`, `nmDokter`, `spesialisasi`, `noTelp`) VALUES
('2', 'qwdw', 'Kontolisasi', '1233412');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `idKunjungan` varchar(50) NOT NULL,
  `idPasien` varchar(50) NOT NULL,
  `idDokter` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `keluhan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`idKunjungan`, `idPasien`, `idDokter`, `tanggal`, `keluhan`) VALUES
('3', '1', '2', '2024-07-20', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idPasien` varchar(50) NOT NULL,
  `nmPasien` varchar(50) NOT NULL,
  `jk` char(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`idPasien`, `nmPasien`, `jk`, `alamat`) VALUES
('1', '', 'Perempuan', '`d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`idDokter`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`idKunjungan`),
  ADD KEY `idPasien` (`idPasien`),
  ADD KEY `idDokter` (`idDokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idPasien`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`),
  ADD CONSTRAINT `kunjungan_ibfk_2` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

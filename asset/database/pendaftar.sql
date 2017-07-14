-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 03:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boloku_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(5) NOT NULL,
  `id_event` int(4) NOT NULL,
  `nama_pendaftar` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_pendaftar` varchar(30) NOT NULL,
  `status_bayar` int(1) NOT NULL,
  `verifikasi_bayar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `id_event`, `nama_pendaftar`, `email`, `telepon`, `alamat`, `no_pendaftar`, `status_bayar`, `verifikasi_bayar`) VALUES
(2, 16, 'Sisca Agustin Diani Budiman', 'budimansisca@gmail.com', '089665890200', 'Gemah Jaya Barat 3 No.6', '12312', 2, 2),
(3, 20, 'Abdul Azies Kurniawan', 'azies@gmail.com', '09230921', 'Gemah Jaya barat', '2121', 0, 0),
(4, 16, 'Seza Dio', 'seza@gmail.co', '3213132', 'Pamularsih', '3u2u9', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`),
  ADD KEY `fk_event_pendaftar` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

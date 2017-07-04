-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2017 at 02:56 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youth_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `pepak`
--

CREATE TABLE `pepak` (
  `id_pepak` int(4) NOT NULL,
  `jawa` varchar(20) NOT NULL,
  `indonesia` varchar(20) NOT NULL,
  `deskripsi_jawa` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pepak`
--

INSERT INTO `pepak` (`id_pepak`, `jawa`, `indonesia`, `deskripsi_jawa`, `status`) VALUES
(1, 'Tindak', 'Pergi', 'dads', 1),
(2, 'Lungo', 'Pergi', '<p>adasdsa</p>\r\n', 1),
(3, 'Mangan', 'Makan', '<p>Mangan dalam bahasa Indonesia adalah Makan, kata mangan biasa digunakan dalam percakapan antara personal yang berusia. Misal antar teman</p>\r\n', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pepak`
--
ALTER TABLE `pepak`
  ADD PRIMARY KEY (`id_pepak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pepak`
--
ALTER TABLE `pepak`
  MODIFY `id_pepak` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

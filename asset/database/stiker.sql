-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 05:52 PM
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
-- Table structure for table `stiker`
--

CREATE TABLE `stiker` (
  `id_stiker` int(5) NOT NULL,
  `nama_stiker` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `path_gambar` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `stiker`
--

INSERT INTO `stiker` (`id_stiker`, `nama_stiker`, `deskripsi`, `tanggal_posting`, `path_gambar`, `status`) VALUES
(2, 'coba stiker', '<p>coba stiker</p>\r\n', '2017-08-19 12:42:02', 'file_1503146120.png', 2),
(3, 'macan', '<p>stiker macan</p>\r\n', '2017-08-18 19:43:37', 'file_1503146617.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stiker`
--
ALTER TABLE `stiker`
  ADD PRIMARY KEY (`id_stiker`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stiker`
--
ALTER TABLE `stiker`
  MODIFY `id_stiker` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

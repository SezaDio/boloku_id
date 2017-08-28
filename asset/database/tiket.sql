-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 10:37 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `boloku_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE IF NOT EXISTS `tiket` (
`id_jenis_tiket` int(11) NOT NULL,
  `nama_tiket` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `seat` int(10) NOT NULL,
  `id_event` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_jenis_tiket`, `nama_tiket`, `harga`, `seat`, `id_event`, `status`) VALUES
(1, 'Reguler', 20000, 0, 0, 1),
(2, 'VIP', 100000, 0, 0, 1),
(3, 'Platinum', 500000, 0, 0, 1),
(4, 'VIP', 500000, 0, 0, 1),
(5, 'VIP 2', 60000, 0, 0, 1),
(6, 'Platinum', 30000, 0, 0, 1),
(7, 'VIP', 500000, 0, 0, 1),
(8, 'VIP 2', 30000, 0, 0, 1),
(9, 'VIP', 500000, 0, 0, 1),
(10, 'VIP 2', 30000, 0, 0, 1),
(11, 'VIP', 30000, 50, 0, 1),
(12, 'VIP 2', 60000, 50, 0, 1),
(13, 'VIP', 30000, 50, 57, 1),
(14, 'VIP 2', 60000, 50, 57, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
 ADD PRIMARY KEY (`id_jenis_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
MODIFY `id_jenis_tiket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 09:20 AM
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
  `seat` int(10) DEFAULT NULL,
  `id_event` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

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
(14, 'VIP 2', 60000, 50, 57, 1),
(15, 'Mahasiswa FIB UNDIP', 35000, 99998, 47, 1),
(16, 'Umum', 40000, 99998, 47, 1),
(17, '', 0, 0, 60, 1),
(18, 'VIP', 200000, 104, 61, 1),
(20, 'Reguler 1', 150000, 0, 61, 1),
(21, 'VIP', 100000, 104, 62, 1),
(24, 'Reguler', 40000, 200, 62, 1),
(25, 'Hari Pertama & Kedua', 15000, NULL, 56, 1),
(26, 'Kari Ketiga', 25000, NULL, 56, 1),
(27, 'Tiket 3 hari', 55000, NULL, 56, 1),
(28, 'HTM', 25000, 5, 51, 1),
(29, 'HTM', 25000, 15, 51, 1),
(30, 'HTM', 25000, 20, 51, 1),
(31, 'SILVER', 70000, 0, 63, 1),
(32, 'GOLD', 105000, 0, 63, 1),
(33, 'PLATINUM', 140000, 0, 63, 1),
(34, 'vip', 100000, 100, 64, 1),
(35, '', 0, 0, 65, 1),
(36, '', 0, 0, 66, 1),
(37, '', 0, 0, 67, 1),
(38, '', 0, 0, 68, 1),
(39, '', 60000, NULL, 69, 1),
(40, '', 0, 0, 70, 1),
(41, '', 0, 0, 71, 1),
(42, 'Regresi Data Panel ', 400000, 30, 72, 1),
(43, 'SEM AMOS', 700000, 30, 72, 1),
(44, '', 10000, NULL, 73, 1),
(45, 'Tari', 150000, NULL, 74, 1),
(46, 'Akustik', 100000, NULL, 74, 1),
(47, 'Toefl Test and Training', 95000, 0, 75, 1),
(48, 'Pre Sale', 20000, NULL, 76, 1),
(49, 'OTS', 25000, NULL, 76, 1),
(50, 'PreSale I', 40000, NULL, 77, 1),
(51, 'PreSale II', 45000, NULL, 77, 1),
(52, 'PreSale III', 50000, NULL, 77, 1),
(53, 'OTS', 60000, NULL, 77, 1),
(54, '', 0, 0, 78, 1),
(55, '', 0, 0, 79, 1),
(56, '', 35000, NULL, 80, 1),
(57, 'Umum', 20000, NULL, 81, 1),
(58, 'Mahasiswa', 15000, NULL, 81, 1),
(59, 'Presale', 35000, NULL, 55, 1),
(60, 'OTS', 40000, NULL, 55, 1),
(61, 'Presale Pelajar ', 25000, NULL, 82, 1),
(62, 'Presale Umum ', 100000, NULL, 82, 1),
(63, '', 0, 0, 82, 1),
(64, '', 0, 0, 82, 1),
(65, 'Presale Pelajar ', 25000, NULL, 83, 1),
(66, 'Presale Umum', 100000, NULL, 83, 1),
(67, 'On the Spot', 45000, NULL, 84, 1),
(68, '', 0, 0, 85, 1),
(69, 'OTS', 10000, NULL, 86, 1);

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
MODIFY `id_jenis_tiket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

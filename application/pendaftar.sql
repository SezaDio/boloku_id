-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 09:33 AM
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
-- Table structure for table `pendaftar`
--

CREATE TABLE IF NOT EXISTS `pendaftar` (
`id_pendaftar` int(5) NOT NULL,
  `id_event` int(4) NOT NULL,
  `nama_pendaftar` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_pendaftar` varchar(30) NOT NULL,
  `status_bayar` int(1) NOT NULL,
  `nama_tiket` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `metode_pembayaran` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `id_event`, `nama_pendaftar`, `email`, `telepon`, `alamat`, `no_pendaftar`, `status_bayar`, `nama_tiket`, `harga`, `metode_pembayaran`) VALUES
(2, 26, 'Sisca Agustin Diani Budiman', 'budimansisca@gmail.com', '089665890200', 'Gemah Jaya Barat 3 No.6', '12312', 2, '', 0, 0),
(3, 20, 'Abdul Azies Kurniawan', 'azies@gmail.com', '09230921', 'Gemah Jaya barat', '2121', 0, '', 0, 0),
(4, 16, 'Seza Dio', 'seza@gmail.co', '3213132', 'Pamularsih', '3u2u9', 2, '', 0, 0),
(5, 23, 'Seza Dio Firmansyah', 'sefirman12@gmail.com', '085640357417', 'Jln Kumudasmoro dalam 11 ', '12312', 2, '', 0, 0),
(8, 22, 'edesad', 'sdassd@tg', 'dasdasdsad', 'dadasdasdasd', '12312', 0, '', 0, 0),
(9, 22, 'edesad', 'sdassd@tg', 'dasdasdsad', 'dadasdasdasd', '12312', 0, '', 0, 0),
(10, 22, 'fdsfdsf', 'dsadafs@fg', 'fdsfsdf', 'fdfdsfdsf', '12312', 0, '', 0, 0),
(11, 22, 'Seza Dio Firmansyah', 'sezadio@ymail.com', '085640357417', 'Jln Kumudasmoro dalam 11 ', '12312', 0, '', 0, 0),
(12, 22, 'Seza Dio Firmansyah', 'sezadio@ymail.com', '085640357417', 'Jln Kumudasmoro dalam 11 ', '12312', 0, '', 0, 0),
(13, 22, 'dasdas', 'sefirman12@gmail.com', '089900778123', 'BAKALAN 09/02 KALINYAMTAN', '12312', 0, '', 0, 0),
(14, 22, 'edesad', 'sefirman12@gmail.com', 'dasdasdsad', 'Jl Mawar III', '12312', 0, '', 0, 0),
(15, 26, 'Seza Dio Firmansyah', 'sita.indrayani@yahoo.com', '089900778123', 'Jl Mawar III', '12312', 0, '', 0, 0),
(16, 26, 'Seza Dio Firmansyah', 'sezadio@ymail.com', '085640357417', 'Jln Kumudasmoro dalam 11 ', '12312', 0, '', 0, 0),
(17, 26, 'Seza Dio Firmansyah', 'sezadio@ymail.com', '085640357417', 'Jl Mawar III', '12312', 0, '', 0, 0),
(18, 26, 'Seza Dio Firmansyah', 'sefirman12@gmail.com', '089900778123', 'Jln Kumudasmoro dalam 11 ', '12312', 0, '', 0, 0),
(19, 26, 'Nur', 'fitri15997dewi@yahoo.com', 'dasdasdsad', 'BAKALAN 09/02 KALINYAMTAN', '12312', 0, '', 0, 0),
(20, 25, 'HMIF', 'sita.indrayani@yahoo.com', 'dasdasdsad', 'Jl Mawar III', '12312', 0, '', 0, 0),
(21, 23, 'Seza Dio Firmansyah', 'sezadio@ymail.com', '085640357417', 'Jln Kumudasmoro dalam 11 ', '12312', 2, '', 0, 0),
(22, 23, 'Hendra', 'sita.indrayani@yahoo.com', '089900778123', 'BAKALAN 09/02 KALINYAMTAN', '12312', 0, '', 0, 0),
(23, 23, 'HMIF', 'sefirman12@gmail.com', '089900778123', 'Jl Mawar III', '12312', 2, '', 0, 0),
(24, 36, 'Seza Dio Firmansyah', 'sefirman12@gmail.com', '089900778123', 'Jln Kumudasmoro dalam 11 ', '12312', 0, '', 0, 0),
(25, 22, 'Seza Dio Firmansyah', 'sefirman12@gmail.com', '085640357417', 'Jalan Kumudasmoro Dalam No. 11, Semarang', '22-000008-0FE1', 0, '', 0, 0),
(26, 47, 'Abdul Azies Kurniawan', 'aziesandro@gmail.com', '085290147300', 'Gemah jaya Barat 3', '47-000001-D171', 2, '', 0, 0),
(43, 47, 'Nur Fikri Ramadhani ', 'nframadhani33@gmail.com', '083838918788', 'Sumurboto 1 No 25 Banyumanik ', '47-000002-68DB', 0, '', 0, 0),
(44, 47, 'Seza Dio', 'aziesandro@gmail.com', '085290147300', 'Gemah jaya barat 3', '47-000003-FAB2', 0, '', 0, 0),
(46, 62, 'Abdul Azies Kurniawan', 'aziesandro@gmail.com', '085290147300', 'Gemah Jaya Barat III No.7', '62-000001-D171', 0, 'VIP', 100000, 0),
(47, 47, 'Putri Cahyanti', 'putricahyanti15@gmail.com', '085747848296', 'Tembalang', '47-000004-CA9C', 0, 'Umum', 40000, 0),
(49, 62, 'azies', 'aziesandro@gmail.com', '085290147300', 'Gemah jaya barat 3', '62-000002-9F69', 1, 'VIP', 100000, 0),
(50, 47, 'Sunnas Ginanjar', 'sunnas.ginanjar@gmail.com', '085640357417', 'Tembalang', '47-000005-612A', 0, 'Umum', 40000, 0),
(51, 47, 'Sunnas Ginanjar', 'sunnas.ginanjar@gmail.com', '085640357417', 'Jalan Gondang Timur', '47-000006-612A', 2, 'Umum', 40000, 0),
(52, 47, 'Sunnas Ginanjar', 'sunnas.ginanjar@gmail.com', '085640357417', 'Jalan Gondang Timur', '47-000007-612A', 0, 'Umum', 40000, 0),
(53, 47, 'Sunnas Ginanjar', 'sunnas.ginanjar@gmail.com', '085640357417', 'Jalan Gondang Timur', '47-000008-612A', 0, 'Umum', 40000, 0),
(54, 47, 'Sunnas Ginanjar', 'sunnas.ginanjar@gmail.com', '085640357417', 'Jalan Gondang Timur', '47-000009-612A', 2, 'Umum', 40000, 0),
(55, 47, 'Sunnas Ginanjar', 'sunnas.ginanjar@gmail.com', '085640357417', 'Jalan Gondang Timur', '47-000010-612A', 0, 'Umum', 40000, 0),
(56, 47, 'Sunnas Ginanjar', 'sunnas.ginanjar@gmail.com', '085640357417', 'Jalan Gondang Timur', '47-000011-612A', 0, 'Mahasiswa FIB UNDIP', 35000, 0),
(57, 62, 'aab', 'aziesandro@gmail.com', '3432432', 'Gemah Jaya Barat 3 no.6', '62-000003-E625', 1, 'Reguler', 40000, 0),
(58, 80, 'Muhammad Khaerul Anam', 'khaerulanam21@gmail.com', '085710048624', 'Bekasi', '80-000001-09CC', 0, '', 35000, 0),
(59, 80, 'Alfin', 'alfin.arifah@gmail.com', '085713269124', 'Blora', '80-000002-AF69', 0, '', 35000, 0),
(60, 80, 'sss', 'saririana60@yahoo.com', '0899999', 'semarang', '80-000003-9F6E', 0, '', 35000, 0),
(61, 80, 'fdsfdsfdsf', 'fsdfsd@fsfdsf', 'fdsfdsfdsf', 'fsdfdsfds', '80-000004-3DD0', 0, '', 35000, 0),
(62, 80, 'fdsfdsf', 'sezadio@ymail.com', '085640357417', 'Jln Kumudasmoro dalam 11 ', '80-000005-9A54', 0, 'Gratis', 0, 0),
(63, 80, 'Seza Dio Firmansyah', 'sefirman12@gmail.com', '089900778123', 'Jln Kumudasmoro dalam 11 ', '80-000006-0FE1', 0, '', 35000, 1),
(64, 80, 'Sunnas Ginanjar', 'sezadio@ymail.com', '085640357417', 'Jl Mawar III', '80-000007-612A', 0, '', 35000, 1),
(65, 80, 'Muhammad Nur Hardyanto', 'sezadio@ymail.com', '085640357417', 'Jln Kumudasmoro dalam 11 ', '80-000008-B6FA', 0, '', 35000, 0),
(66, 80, 'Seza Dio Firmansyah', 'sezadio@ymail.com', '085640357417', 'Jln Kumudasmoro dalam 11 ', '80-000009-0FE1', 0, '', 35000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
 ADD PRIMARY KEY (`id_pendaftar`), ADD KEY `fk_event_pendaftar` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
MODIFY `id_pendaftar` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

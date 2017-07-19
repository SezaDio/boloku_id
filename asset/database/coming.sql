-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 11:40 AM
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
-- Table structure for table `coming`
--

CREATE TABLE `coming` (
  `id_coming` int(4) NOT NULL,
  `nama_coming` varchar(100) NOT NULL,
  `deskripsi_coming` text NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `institusi` varchar(200) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  `path_gambar` varchar(100) NOT NULL,
  `kategori_coming` varchar(100) NOT NULL,
  `tipe_event` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jam_selesai` varchar(10) NOT NULL,
  `jenis_event` int(1) NOT NULL,
  `pendaftaran` int(1) NOT NULL,
  `seat` int(1) NOT NULL,
  `jumlah_seat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming`
--

INSERT INTO `coming` (`id_coming`, `nama_coming`, `deskripsi_coming`, `posted_by`, `institusi`, `telepon`, `email`, `tanggal_posting`, `status`, `path_gambar`, `kategori_coming`, `tipe_event`, `tgl_mulai`, `jam_mulai`, `tgl_selesai`, `jam_selesai`, `jenis_event`, `pendaftaran`, `seat`, `jumlah_seat`) VALUES
(15, 'Lomba ANFORCOM 3', '<p>Coba ah lagi</p>\r\n', 'Seza Cakep Tenan', 'Universitas Diponegoro', '085640357417', 'sefirman12@gmail.com', '2017-07-10 06:56:11', 2, 'file_1499359424.jpg', 'Science dan Teknologi', 'Party', '2017-07-08', '08:00', '2017-07-09', '17:00', 1, 0, 0, 0),
(16, 'Lomba Design Grafis', '<p>Buat Poster</p>\r\n', 'seza', 'Universitas Diponegoro', '085640357417', 'sefirman12@gmail.com', '2017-07-10 06:56:14', 1, 'file_1499529260.jpg', 'Hobi', 'Expo', '2017-07-08', '09:00', '2017-07-09', '13:00', 0, 1, 0, 0),
(17, 'Lomba Cerdas Cermat', '<p>Lomba cerdas cermat untuk anak SD</p>\r\n', 'Universitas Diponegoro', 'Universitas Diponegoro', '085640357417', 'sefirman12@gmail.com', '2017-07-10 06:56:20', 1, 'file_1499663073.jpg', 'Keluarga dan Pendidikan', 'Expo', '2017-07-11', '08:00', '2017-07-11', '12:00', 1, 1, 0, 0),
(18, 'Lomba Cerdas Cermat 2', '<p>Lomba cerdas cermat biar pintar dan juga sehat</p>\r\n', 'Seza Cakep 2', 'Universitas Diponegoro', '085640357417', 'sefirman12@gmail.com', '2017-07-10 00:26:51', 1, 'file_1499664411.jpg', 'Science dan Teknologi', 'Festival', '2017-07-19', '08:00', '2017-07-20', '16:00', 0, 0, 0, 0),
(19, 'Lomba Coding', '<p>yuk ngoding</p>\r\n', 'Seza', 'UNDIP', '085640357417', 'sezadio@ymail.com', '2017-07-10 01:55:28', 1, 'file_1499669728.jpg', 'Science dan Teknologi', 'Festival', '2017-07-10', '02:30', '2017-07-13', '04:30', 0, 1, 0, 0),
(20, 'Lomba mewarnai', '<p>lksadnslakdsa</p>\r\n', 'azies', 'Undip', '9239297492', 'azies@gmail.com', '2017-07-12 04:17:31', 1, 'file_1499851051.JPG', 'Travel dan Outdoor', 'Conference', '2017-07-12', '03:30', '2017-07-12', '07:15', 1, 1, 0, 0),
(21, 'Acara Dadakan', '<p>Acara Dadakan Sekali&nbsp;</p>\r\n', 'Azies', 'Azies Corporation', '1293821', 'azies@gmail.com', '2017-07-19 09:40:12', 1, 'file_1500455585.jpg', 'Bisnis', 'Attraction', '2017-07-19', '03:00', '2017-07-19', '09:00', 1, 1, 1, 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coming`
--
ALTER TABLE `coming`
  ADD PRIMARY KEY (`id_coming`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coming`
--
ALTER TABLE `coming`
  MODIFY `id_coming` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 04:45 PM
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
  `jumlah_seat` int(10) NOT NULL,
  `top_event` int(1) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `kota_lokasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming`
--

INSERT INTO `coming` (`id_coming`, `nama_coming`, `deskripsi_coming`, `posted_by`, `institusi`, `telepon`, `email`, `tanggal_posting`, `status`, `path_gambar`, `kategori_coming`, `tipe_event`, `tgl_mulai`, `jam_mulai`, `tgl_selesai`, `jam_selesai`, `jenis_event`, `pendaftaran`, `seat`, `jumlah_seat`, `top_event`, `harga`, `kota_lokasi`) VALUES
(22, 'Lomba Menggambar', '<p>Lomba Menggambar</p>\r\n', 'azies', 'Undip', '213123', 'undip@gmail.com', '2017-07-20 14:31:49', 1, 'file_1500510724.jpg', 'Seni', 'Attraction', '2017-07-20', '11:15', '2017-07-20', '13:15', 1, 1, 1, 200, 1, '0', 'Semarang'),
(23, 'Seminar Nasional', '<p>seminar</p>\r\n', 'azies', 'Undip', '089665890200', 'budimansisca@gmail.com', '2017-07-20 14:31:53', 1, 'file_1500512319.JPG', 'Bisnis', 'Seminar', '2017-07-20', '03:30', '2017-07-20', '04:30', 0, 1, 1, 100, 1, '50000', 'Semarang'),
(24, 'Farewell', '<p>farewell</p>\r\n', 'Azies', 'Universitas Diponegoro', '0890665890200', 'adminwow@gmail.com', '2017-07-20 14:31:56', 1, 'file_1500512551.JPG', 'Musik', 'Party', '2017-07-20', '19:45', '2017-07-20', '20:45', 0, 0, 0, 0, 1, '40000', 'Semarang'),
(25, 'Color Run with Pak Ganjar', '<p>Color run</p>\r\n', 'azies', 'Pemkot', '123421512', 'pemkot@gmail.com', '2017-07-20 14:31:59', 1, 'file_1500559031.jpg', 'Hobi', 'Game', '2017-07-20', '06:00', '2017-07-20', '10:00', 0, 1, 0, 0, 2, '50000', 'Semarang'),
(26, 'Open Trip to Karimunjawa', '<p>open trip</p>\r\n', 'azies', 'azies tour', '948298139', 'aziestour@gmail.com', '2017-07-20 14:32:02', 1, 'file_1500559190.jpg', 'Travel dan Outdoor', 'Tour', '2017-08-17', '05:00', '2017-08-21', '12:30', 0, 1, 1, 40, 2, '750000', 'Semarang'),
(27, 'Try Out SBMPTN', '<p>tryout&nbsp;</p>\r\n', 'azies', 'Azies Corporation', '42989428', 'aziesandro@gmail.com', '2017-07-20 14:32:06', 1, 'file_1500559346.jpg', 'Keluarga dan Pendidikan', 'Class', '2017-07-22', '08:00', '2017-07-23', '11:00', 0, 1, 0, 0, 2, '30000', 'Semarang'),
(28, 'Java Jazz 2017', '<p>java jazz</p>\r\n', 'azies', 'azies', '8893829382', 'aziesandro@ymail.com', '2017-07-20 14:32:09', 1, 'file_1500559545.jpg', 'Musik', 'Performance', '2017-07-29', '15:00', '2017-07-29', '23:00', 0, 0, 0, 0, 2, '40000', 'Semarang'),
(29, 'Dug Deran', '<p>dug deran</p>\r\n', 'azies', 'Pemkot', '34324325', 'pemkot@gmail.com', '2017-07-20 14:32:13', 1, 'file_1500559771.jpg', 'Lain-Lain', 'Lain-Lain', '2017-07-31', '18:00', '2017-08-12', '23:45', 1, 0, 0, 0, 2, '0', 'Semarang');

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
  MODIFY `id_coming` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

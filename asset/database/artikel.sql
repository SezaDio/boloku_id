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
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `penulis_artikel` varchar(50) NOT NULL,
  `isi_artikel` text NOT NULL,
  `path_gambar` varchar(100) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `penulis_artikel`, `isi_artikel`, `path_gambar`, `tanggal_posting`) VALUES
(3, 'Artikel Coba 2', 'Seza Dio F.', '<p>Haiii</p>\r\n', 'file_1500447736.jpg', '2017-07-19 07:02:16'),
(4, 'Farewall Integer Berlangsung Meriah', 'azies', '<p>Farewell Integer</p>\r\n', 'file_1500556875.jpg', '2017-07-20 13:21:15'),
(5, 'Kemacetan terjadi di gerbang tol tembalang', 'azies', '<p>kemacetan</p>\r\n', 'file_1500556942.jpg', '2017-07-19 20:22:22'),
(6, 'Pantai weleri ramai dikunjungi wisatawan dosmetik', 'azies', '<p>pantai weleri</p>\r\n', 'file_1500556998.jpg', '2017-07-19 20:23:18'),
(7, 'Lawang sewu jadi ikon Kota Semarang', 'azies', '<p>Lawang sewu</p>\r\n', 'file_1500557027.jpg', '2017-07-19 20:23:47'),
(8, 'Wahana flying fox di hutan Pinus', 'azies', '<p>flying fox</p>\r\n', 'file_1500557078.JPG', '2017-07-19 20:24:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

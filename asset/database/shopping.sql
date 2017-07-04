-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 12:14 PM
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
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `id_produk` int(100) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` bigint(200) NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  `path_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`id_produk`, `nama_produk`, `jenis_produk`, `deskripsi_produk`, `harga_produk`, `posted_by`, `phone_number`, `tanggal_posting`, `status`, `path_gambar`) VALUES
(7, 'Celana Pendek', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-05-26 06:47:54', 1, ''),
(8, 'Celana Panjang', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-05-26 06:47:58', 1, ''),
(9, 'Sarung', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-05-26 06:48:02', 1, ''),
(16, 'Baju Koko', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-05-26 08:30:00', 1, ''),
(17, 'Mukena', 'Fashion', 'Warna : Hitam', 30000, 'Seza', '085640367417', '2017-05-26 10:03:13', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shopping`
--
ALTER TABLE `shopping`
  MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

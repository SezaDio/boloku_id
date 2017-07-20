-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 04:46 PM
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
-- Table structure for table `challenge`
--

CREATE TABLE `challenge` (
  `id_challenge` int(3) NOT NULL,
  `judul_challenge` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `path_gambar` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`id_challenge`, `judul_challenge`, `deskripsi`, `tanggal_posting`, `path_gambar`, `status`) VALUES
(22, 'Setetes darah berarti untuk sesama', '<p>Donor darah #tunjukkanaksimu!</p>\r\n', '2017-07-19 20:52:16', 'file_1500558736.jpg', 1),
(23, 'Takjil gratis untuk sesama', '<p>takjil gratis #tunjukkanaksimu!</p>\r\n', '2017-07-19 20:53:01', 'file_1500558781.jpg', 1),
(24, 'Para relawan', '<p>para relawan #tunjukkanaksimu!</p>\r\n', '2017-07-19 20:53:45', 'file_1500558825.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`id_challenge`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challenge`
--
ALTER TABLE `challenge`
  MODIFY `id_challenge` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

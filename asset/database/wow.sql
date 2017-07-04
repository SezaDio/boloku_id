-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 10:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `youth_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `wow`
--

CREATE TABLE IF NOT EXISTS `wow` (
`id_wow` int(4) NOT NULL,
  `judul_wow` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_posting` date NOT NULL,
  `kategori_wow` varchar(100) NOT NULL,
  `path_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wow`
--

INSERT INTO `wow` (`id_wow`, `judul_wow`, `deskripsi`, `tanggal_posting`, `kategori_wow`, `path_gambar`) VALUES
(1, 'Wow tes 1', 'Deskripsi Tes wow 1														\r\n													', '2017-05-27', 'Wow Teknologi', '0'),
(2, 'Wow tes 1', '														\r\n			asdsad										', '2017-05-27', 'Wow Sains', '1212'),
(3, 'Wow tes 2', '														\r\n	bla bla												', '2017-05-27', 'Wow Sejarah', '1212'),
(4, 'Wow tes 2', '														\r\n	bla bla												', '2017-05-27', 'Wow Politik', '1212'),
(5, 'wow tes 3', 'asdasdsa														\r\n													', '2017-05-27', 'Wow Fiksi', '1212'),
(8, 'Kuku Ternyata Bisa Tumbuh Sendiri', '														\r\n						Wew							', '2017-05-27', 'Wow Sains', '1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wow`
--
ALTER TABLE `wow`
 ADD PRIMARY KEY (`id_wow`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wow`
--
ALTER TABLE `wow`
MODIFY `id_wow` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

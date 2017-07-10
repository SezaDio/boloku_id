-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 08:57 AM
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
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id_news` int(10) NOT NULL,
  `waktu_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul_news` varchar(100) NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `isi_news` text NOT NULL,
  `gambar_news` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `id_event` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `waktu_posting`, `judul_news`, `posted_by`, `isi_news`, `gambar_news`, `status`, `id_event`) VALUES
(15, '2017-07-10 06:40:19', 'Press Release Lomba Anforcom', 'Seza Dio Firmansyah', '<p>asdfghjk</p>\r\n', 'file_1499528407.jpg', 1, 16),
(16, '2017-07-10 06:40:24', 'Press Release Lomba Anforcom', 'Seza Dio Firmansyah', '<p>asdfghjk</p>\r\n', 'file_1499528407.jpg', 1, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id_news`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

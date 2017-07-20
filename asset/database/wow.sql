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
-- Table structure for table `wow`
--

CREATE TABLE `wow` (
  `id_wow` int(4) NOT NULL,
  `judul_wow` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_posting` date NOT NULL,
  `kategori_wow` varchar(100) NOT NULL,
  `path_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wow`
--

INSERT INTO `wow` (`id_wow`, `judul_wow`, `deskripsi`, `tanggal_posting`, `kategori_wow`, `path_gambar`) VALUES
(1, 'Lumpia Kuliner Khas Semarang', '<p>Sebagai kota bandar yang banyak dikunjungi oleh kapal-kapal asing, kawasan Semarang menjadi melting pot, tempat di mana beragam budaya bertemu dan saling mempengaruhi satu sama lain. Salah satu bukti akulturasi yang terkenal dapat dilihat dalam ranah kulinernya. Makanan khas Semarang seperti Lumpia, Tahu Pong, dan Soto Bangkong merupakan perpaduan kuliner Jawa dan Cina.&nbsp;</p>\r\n', '2017-07-20', 'Lain-Lain', 'file_1500557976.jpg'),
(2, 'Semarang Kaline Banjir', '<p>Kota Semarang terbagi menjadi dua kawasan yang dikenal dengan nama Semarang Atas dan Semarang Bawah. Kawasan Semarang Bawah yang menjadi pusat kota pada mulanya adalah laut yang mengalami sedimentasi aliran sungai yang terdapat di kawasan Semarang bagian atas. Lokasinya yang terletak di dataran rendah dan sering terkena luapan air laut (rob) menjadikan Semarang Bawah kerap mengalami banjir.</p>\r\n', '2017-07-20', 'Lain-Lain', 'file_1500558061.jpg'),
(3, 'PT. Jamu Jago Semarang', '<p>&nbsp;PT Jamu Jago merupakan perusahaan jamu atau obat tradisional pertama di Indonesia yang dikelola secara profesional, berdiri sejak tahun 1918 dan terus bertahan hingga sekarang.&nbsp;</p>\r\n', '2017-07-20', 'Science dan Teknologi', 'file_1500558170.jpg');

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
  MODIFY `id_wow` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

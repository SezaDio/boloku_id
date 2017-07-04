-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 10:48 AM
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
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id_news` int(10) NOT NULL,
  `waktu_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `judul_news` varchar(100) NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `kategori_news` varchar(50) NOT NULL,
  `isi_news` text NOT NULL,
  `gambar_news` varchar(50) NOT NULL,
  `hits` int(20) NOT NULL,
  `suka` int(20) NOT NULL,
  `jenis_news` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `waktu_posting`, `judul_news`, `posted_by`, `kategori_news`, `isi_news`, `gambar_news`, `hits`, `suka`, `jenis_news`, `status`) VALUES
(2, '2017-05-31 06:55:00', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Teknologi', 'MANOKWARI, suaramerdeka.com – Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa.\r\n\r\nKapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. “Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,” katanya di Manokwari, Rabu (31/5).\r\n\r\nKapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit.\r\n\r\n“Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,” kata Kapolres lagi.\r\n\r\nKepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya.\r\n\r\n“Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,” katanya.\r\n\r\nDia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan.\r\n\r\n“Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,” katanya lagi.', '1212', 32, 4, 4, 1),
(4, '2017-05-31 06:55:00', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Teknologi', 'MANOKWARI, suaramerdeka.com – Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa.\r\n\r\nKapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. “Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,” katanya di Manokwari, Rabu (31/5).\r\n\r\nKapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit.\r\n\r\n“Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,” kata Kapolres lagi.\r\n\r\nKepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya.\r\n\r\n“Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,” katanya.\r\n\r\nDia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan.\r\n\r\n“Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,” katanya lagi.', '1212', 32, 4, 1, 1),
(5, '2017-05-31 06:55:00', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Teknologi', 'MANOKWARI, suaramerdeka.com – Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa.\r\n\r\nKapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. “Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,” katanya di Manokwari, Rabu (31/5).\r\n\r\nKapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit.\r\n\r\n“Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,” kata Kapolres lagi.\r\n\r\nKepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya.\r\n\r\n“Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,” katanya.\r\n\r\nDia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan.\r\n\r\n“Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,” katanya lagi.', '1212', 32, 2, 2, 1),
(6, '2017-05-31 06:55:00', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Teknologi', 'MANOKWARI, suaramerdeka.com – Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa.\r\n\r\nKapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. “Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,” katanya di Manokwari, Rabu (31/5).\r\n\r\nKapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit.\r\n\r\n“Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,” kata Kapolres lagi.\r\n\r\nKepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya.\r\n\r\n“Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,” katanya.\r\n\r\nDia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan.\r\n\r\n“Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,” katanya lagi.', '1212', 32, 4, 3, 1),
(7, '2017-05-31 06:55:00', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Teknologi', 'MANOKWARI, suaramerdeka.com – Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa.\r\n\r\nKapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. “Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,” katanya di Manokwari, Rabu (31/5).\r\n\r\nKapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit.\r\n\r\n“Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,” kata Kapolres lagi.\r\n\r\nKepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya.\r\n\r\n“Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,” katanya.\r\n\r\nDia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan.\r\n\r\n“Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,” katanya lagi.', '1212', 32, 4, 5, 1),
(8, '2017-05-31 06:55:00', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Teknologi', 'MANOKWARI, suaramerdeka.com – Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa.\r\n\r\nKapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. “Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,” katanya di Manokwari, Rabu (31/5).\r\n\r\nKapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit.\r\n\r\n“Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,” kata Kapolres lagi.\r\n\r\nKepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya.\r\n\r\n“Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,” katanya.\r\n\r\nDia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan.\r\n\r\n“Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,” katanya lagi.', '1212', 32, 4, 6, 1),
(9, '0000-00-00 00:00:00', 'sddgfd', 'szdfgh', 'Teknologi', '<p>xscdzczxcxz</p>\r\n', 'file_1496389864.jpg', 0, 0, 0, 0),
(10, '2017-06-02 08:37:20', 'eaaaa', 'seza', 'Politik', '<p>eadasdasdasd</p>\r\n', 'file_1496392640.jpg', 0, 0, 0, 1),
(11, '2017-06-02 08:39:31', 'dsadsad', 'sedfsdf', 'Fiksi', '<p>jhgjghjghjghjgh</p>\r\n', 'file_1496392771.jpg', 0, 0, 3, 1),
(12, '2017-06-02 08:43:34', 'dseadasdasd', 'dio', 'Politik', '<p>gfdghjghjghj</p>\r\n', 'file_1496393014.jpg', 0, 0, 4, 1),
(13, '2017-06-02 08:44:37', 'hgfhfdsadasd', 'azis', 'Lain-Lain', '<p>sdsdsfdsf</p>\r\n', 'file_1496393077.png', 0, 0, 5, 1);

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
MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

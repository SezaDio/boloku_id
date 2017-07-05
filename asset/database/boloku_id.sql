-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 06:29 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telfon` varchar(12) NOT NULL,
  `status_admin` varchar(100) NOT NULL,
  `path_foto` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama_admin`, `email`, `telfon`, `status_admin`, `path_foto`, `password`) VALUES
(2, 'adminNews', 'Admin Update yang sering banget Update', 'adminupdate@gmail.com', '08237421', 'Admin News', 'file_1497151219.jpg', '0b6ba87d169e7d34dd229f9d9b4462db');

-- --------------------------------------------------------

--
-- Table structure for table `coming`
--

CREATE TABLE IF NOT EXISTS `coming` (
`id_coming` int(4) NOT NULL,
  `nama_coming` varchar(100) NOT NULL,
  `deskripsi_coming` text NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  `path_gambar` varchar(100) NOT NULL,
  `kategori_coming` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming`
--

INSERT INTO `coming` (`id_coming`, `nama_coming`, `deskripsi_coming`, `posted_by`, `tanggal_posting`, `status`, `path_gambar`, `kategori_coming`) VALUES
(3, 'Lomba Mewarnai', '<p>Lomba mewarnai anak sd dan tk</p>\r\n', 'azies', '2017-06-06 16:30:10', 1, 'file_1496766610.png', 'Coming Soon Lain-Lain'),
(9, 'Anforcom (Annual Informatics Competition)', '<p>Semarang, 23 Juni 2017</p>\r\n', 'Seza Dio Firmansyah', '2017-06-06 16:31:54', 2, 'file_1496766714.jpg', 'Coming Soon Teknologi'),
(10, 'eeeeaaaadfdf', '<p>fdfdsfdfdfdsf</p>\r\n', 'Seza Dio Firmansyah', '2017-06-19 08:16:17', 1, 'file_1497860177.png', 'Coming Soon Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id_member` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_join` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `poin` int(5) NOT NULL,
  `path_foto` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `nama_member`, `email`, `password`, `date_join`, `poin`, `path_foto`, `status`) VALUES
(1, 'azies', 'abdul azies kurniawan', 'aziesandro@ymail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-06-11 03:22:52', 0, 'file_1497147134.jpg', 1),
(3, 'member3', 'member yang suka menulis', 'member3@gmail.com', '6f74c9c1948291274346a3278d4d8104', '2017-06-11 02:17:20', 0, '0', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `waktu_posting`, `judul_news`, `posted_by`, `kategori_news`, `isi_news`, `gambar_news`, `hits`, `suka`, `jenis_news`, `status`) VALUES
(4, '2017-06-03 05:43:04', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Fiksi', '<p>MANOKWARI, suaramerdeka.com &ndash; Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa. Kapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. &ldquo;Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,&rdquo; katanya di Manokwari, Rabu (31/5). Kapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit. &ldquo;Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,&rdquo; kata Kapolres lagi. Kepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya. &ldquo;Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,&rdquo; katanya. Dia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan. &ldquo;Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,&rdquo; katanya lagi.</p>\r\n', '', 32, 4, 0, 1),
(5, '2017-06-19 08:09:57', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Teknologi', '<p>MANOKWARI, suaramerdeka.com &ndash; Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa. Kapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. &ldquo;Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,&rdquo; katanya di Manokwari, Rabu (31/5). Kapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit. &ldquo;Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,&rdquo; kata Kapolres lagi. Kepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya. &ldquo;Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,&rdquo; katanya. Dia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan. &ldquo;Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,&rdquo; katanya lagi.</p>\r\n', 'file_1497859769.jpg', 32, 2, 2, 1),
(6, '2017-06-03 05:22:38', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Lain-Lain', '<p>MANOKWARI, suaramerdeka.com &ndash; Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa. Kapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. &ldquo;Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,&rdquo; katanya di Manokwari, Rabu (31/5). Kapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit. &ldquo;Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,&rdquo; kata Kapolres lagi. Kepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya. &ldquo;Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,&rdquo; katanya. Dia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan. &ldquo;Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,&rdquo; katanya lagi.</p>\r\n', '', 32, 4, 0, 1),
(7, '2017-06-03 05:31:50', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna', 'Teknologi', '<p>MANOKWARI, suaramerdeka.com &ndash; Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa. Kapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. &ldquo;Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,&rdquo; katanya di Manokwari, Rabu (31/5). Kapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit. &ldquo;Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,&rdquo; kata Kapolres lagi. Kepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya. &ldquo;Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,&rdquo; katanya. Dia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan. &ldquo;Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,&rdquo; katanya lagi.</p>\r\n', 'file_1496467909.jpg', 32, 4, 3, 1),
(8, '2017-06-03 06:19:45', 'Tak Ada Korban Jiwa di Insiden Sriwijaya Air Tergelincir', ' Edyna Ratna Nurmaya', 'Teknologi', '<p>MANOKWARI, suaramerdeka.com &ndash; Insiden pesawat Boeing 737-300 dengan nomor lambung PK-CJC milik Sriwijaya Air yang tergelincir ddi Bandar Udara Rendani Manokwari, Papua Barat, Rabu (31/5), tidak sampai menimbulkan korban jiwa. Kapolres Manokwari AKBP Christian Rony mengungkapkan semua penumpang selamat. &ldquo;Beberapa orang yang mengalami luka sudah dilarikan ke rumah sakit,&rdquo; katanya di Manokwari, Rabu (31/5). Kapolres menjelaskan ada sebanyak 146 penumpang pesawat ditambah crew pesawat tujuh orang. Dari seluruh penumpang, hanya sembilan orang yang diduga mengalami luka-luka dan harus dilarikan ke rumah sakit. &ldquo;Penumpang yang luka dibawa ke rumah sakit Azhar Zahir Angkatan Laut Manokwari,&rdquo; kata Kapolres lagi. Kepala Rumah Sakit Azhar Zahir Mayor Laut Syarif Mustika pada wawancara terpisah mengatakan, rata-rata pasein hanya mengalami luka benturan, lebam dan sebagainya. &ldquo;Tidak ada yang meninggal, tidak ada patah tulang. Hanya luka-luka ringan,&rdquo; katanya. Dia mengutarakan, tidak ada penumpang yang harus menjalani rawat inap di rumah sakit. Mereka cukup rawat jalan. &ldquo;Soal biaya tidak usah dipikirkan, semua sudah ditanggung sama pihak Jasa Raharja,&rdquo; katanya lagi.</p>\r\n', 'file_1496470785.jpg', 32, 4, 6, 1),
(9, '0000-00-00 00:00:00', 'sddgfd', 'szdfgh', 'Teknologi', '<p>xscdzczxcxz</p>\r\n', 'file_1496389864.jpg', 0, 0, 0, 0),
(10, '2017-06-02 08:37:20', 'eaaaa', 'seza', 'Politik', '<p>eadasdasdasd</p>\r\n', 'file_1496392640.jpg', 0, 0, 0, 1),
(11, '2017-06-03 05:21:16', 'seza', 'seza', 'Fiksi', '<p>jhgjghjghjghjgh</p>\r\n', '', 0, 0, 0, 1),
(12, '2017-06-03 05:25:54', 'seza', 'dio', 'Politik', '<p>gfdghjghjghj</p>\r\n', '', 0, 0, 0, 1),
(13, '2017-06-03 05:29:11', 'seza', 'azis', 'Lain-Lain', '<p>sdsdsfdsf</p>\r\n', '', 0, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pepak`
--

CREATE TABLE IF NOT EXISTS `pepak` (
`id_pepak` int(4) NOT NULL,
  `jawa` varchar(20) NOT NULL,
  `indonesia` varchar(20) NOT NULL,
  `deskripsi_jawa` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pepak`
--

INSERT INTO `pepak` (`id_pepak`, `jawa`, `indonesia`, `deskripsi_jawa`, `status`) VALUES
(1, 'Tindak', 'Pergi', 'dads', 1),
(3, 'Mangan', 'Makan', '<p>Mangan dalam bahasa Indonesia adalah Makan, kata mangan biasa digunakan dalam percakapan antara personal yang berusia. Misal antar teman</p>\r\n', 1),
(4, 'Karepmu', 'Terserah', '<p>Karepmu, biasa digunakan untuk mengatakan sesuatu pendapat yang memilki arti terserah atau sesuka anada saja</p>\r\n', 1),
(5, 'Gondes', 'Gondrong Ndeso', 'Kata - kata untuk makian', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
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
(8, 'Celana Panjang', 'Fashion', '<p>Warna : Hitam</p>\r\n', 30000, 'Seza', '085640367417', '2017-06-06 22:55:25', 1, 'file_1496807725.png'),
(9, 'Sarung', 'Fashion', '<p>Warna : Hitam</p>\r\n', 30000, 'Seza', '085640367417', '2017-06-06 03:28:27', 1, 'file_1496737707.jpg'),
(16, 'Baju Koko', 'Fashion', '<p>Warna : Hitam</p>\r\n', 30000, 'Seza', '085640367417', '2017-06-06 22:56:03', 2, 'file_1496807763.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id_slider` int(3) NOT NULL,
  `judul_slider` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `path_gambar` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul_slider`, `deskripsi`, `tanggal_posting`, `path_gambar`, `status`) VALUES
(13, 'Slider 1', '<p>Slider 1</p>\r\n', '2017-06-15 01:46:09', 'file_1497509169.jpg', 1),
(14, 'Slider 2', '<p>Slider 2</p>\r\n', '2017-06-15 01:48:42', 'file_1497509322.jpg', 1),
(15, 'Slider 3', '<p>Slider 3</p>\r\n', '2017-06-15 01:49:02', 'file_1497509342.jpg', 1),
(16, 'Slider 4', '<p>Slider 4</p>\r\n', '2017-06-15 01:49:30', 'file_1497509370.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'administrator', 'admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wow`
--

INSERT INTO `wow` (`id_wow`, `judul_wow`, `deskripsi`, `tanggal_posting`, `kategori_wow`, `path_gambar`) VALUES
(8, 'Kuku Ternyata Bisa Tumbuh Sendiri', '<p>Wew</p>\r\n', '2017-07-05', 'Ngerti Rak Bisnis', ''),
(9, 'Komunitas Android Berhasil Mengembangkan Pupuk Beb', '														\r\n							Mantaaaap						', '2017-05-28', 'Wow Fiksi', '1212'),
(10, 'Laptop Menyala', '														\r\n							Laptop ternyata bisa menyala jika ditekan tombol powernya lho						', '2017-05-28', 'Wow Teknologi', '1212'),
(12, 'dsadsadsa', '														\r\n							dasdasdsad						', '2017-05-28', 'Wow Sejarah', '1212'),
(13, 'dasdasd', '														\r\n						dsadsadsadd							', '2017-05-28', 'Wow Teknologi', '1212'),
(15, 'Apple dan Nintendo Ketemuan, Jadi Buat Super Mario', '<p>Sontak kabar mengenai pinangan Apple untuk memasukkan Super Mario dalam iOS pun santer beredar. Kabar itu semakin diperkuat dengan kunjungan Tim Cook ke Jepang pekan ini. Kunjungan tersebut dalam rangka tur Asia Timur Apple.</p>\r\n', '2017-05-28', 'Wow Teknologi', '1212'),
(18, 'Coba Pake Upload Gambar', '<p>dasdasdasdasd</p>\r\n', '2017-05-29', 'Wow Komunitas', 'file_1496042258.png'),
(21, 'Coba upload lagiv x z', '<p>hgdfsdsadfdsf</p>\r\n', '2017-05-30', 'Wow Sains', 'file_1496128538.png'),
(23, 'sky post', '<p>gfdggfjhkl</p>\r\n', '2017-06-06', 'Wow Teknologi', 'file_1496739401.png'),
(24, 'sky post 4', '<p>wfghjkk</p>\r\n', '2017-05-30', 'Wow Politik', 'file_1496116930.png'),
(25, 'asdfghjklkjhgfds', '<p>asdfghjklkjhgfdsa</p>\r\n', '2017-05-30', 'Wow Sejarah', 'file_1496117894.jpg'),
(26, 'wew', '<p>wew</p>\r\n', '2017-05-30', 'Wow Sejarah', 'file_1496118189.jpg'),
(27, 'cek', '<p>siap</p>\r\n', '2017-05-30', 'Wow Sejarah', 'file_1496119854.jpg'),
(28, 'Agama Islam', '<p>sddffgghfgdgdsfdsf</p>\r\n', '2017-07-05', 'Ngerti Rak Sprirituality', 'file_1499228447.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `coming`
--
ALTER TABLE `coming`
 ADD PRIMARY KEY (`id_coming`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `pepak`
--
ALTER TABLE `pepak`
 ADD PRIMARY KEY (`id_pepak`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wow`
--
ALTER TABLE `wow`
 ADD PRIMARY KEY (`id_wow`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coming`
--
ALTER TABLE `coming`
MODIFY `id_coming` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id_news` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pepak`
--
ALTER TABLE `pepak`
MODIFY `id_pepak` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id_slider` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wow`
--
ALTER TABLE `wow`
MODIFY `id_wow` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

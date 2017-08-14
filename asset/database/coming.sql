-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2017 at 11:49 AM
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
-- Table structure for table `coming`
--

CREATE TABLE IF NOT EXISTS `coming` (
`id_coming` int(4) NOT NULL,
  `id_member` int(5) NOT NULL,
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
  `id_lokasi` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hits` int(11) NOT NULL,
  `like` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coming`
--

INSERT INTO `coming` (`id_coming`, `id_member`, `nama_coming`, `deskripsi_coming`, `posted_by`, `institusi`, `telepon`, `email`, `tanggal_posting`, `status`, `path_gambar`, `kategori_coming`, `tipe_event`, `tgl_mulai`, `jam_mulai`, `tgl_selesai`, `jam_selesai`, `jenis_event`, `pendaftaran`, `seat`, `jumlah_seat`, `top_event`, `harga`, `id_lokasi`, `alamat`, `hits`, `like`) VALUES
(22, 7, 'Lomba Menggambar', '<p>Lomba Menggambar</p>\r\n', 'azies', 'Undip', '213123', 'undip@gmail.com', '2017-08-13 15:42:36', 1, 'file_1500510724.jpg', 'Seni', 'Attraction', '2017-07-20', '11:15', '2017-07-20', '13:15', 1, 1, 1, 200, 1, '0', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 110, 34),
(23, 7, 'Seminar Nasional', '<p>seminar</p>\r\n', 'azies', 'Undip', '089665890200', 'budimansisca@gmail.com', '2017-08-10 09:09:27', 1, 'file_1500512319.JPG', 'Bisnis', 'Seminar', '2017-07-20', '03:30', '2017-07-20', '04:30', 0, 1, 1, 100, 1, '50000', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 30, 2),
(24, 0, 'Farewell', '<p>farewell</p>\r\n', 'Azies', 'Universitas Diponegoro', '0890665890200', 'adminwow@gmail.com', '2017-08-13 15:42:55', 1, 'file_1500512551.JPG', 'Musik', 'Party', '2017-07-20', '19:45', '2017-07-20', '20:45', 0, 0, 0, 0, 2, '40000', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 8, 0),
(25, 0, 'Color Run with Pak Ganjar', '<p>Color run</p>\r\n', 'azies', 'Pemkot', '123421512', 'pemkot@gmail.com', '2017-08-09 05:01:42', 1, 'file_1500559031.jpg', 'Hobi', 'Game', '2017-07-20', '06:00', '2017-07-20', '10:00', 0, 1, 0, 0, 2, '50000', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 3, 0),
(27, 7, 'Try Out SBMPTN', '<p>tryout&nbsp;</p>\r\n', 'azies', 'Azies Corporation', '42989428', 'aziesandro@gmail.com', '2017-08-07 06:10:44', 1, 'file_1500559346.jpg', 'Keluarga dan Pendidikan', 'Class', '2017-07-22', '08:00', '2017-07-23', '11:00', 0, 1, 0, 0, 2, '30000', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 0, 0),
(28, 0, 'Java Jazz 2017', '<p>java jazz</p>\r\n', 'azies', 'azies', '8893829382', 'aziesandro@ymail.com', '2017-08-10 15:37:40', 1, 'file_1500559545.jpg', 'Musik', 'Performance', '2017-07-29', '15:00', '2017-07-29', '23:00', 0, 0, 0, 0, 2, '40000', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 1, 0),
(29, 0, 'Dug Deran', '<p>dug deran</p>\r\n', 'azies', 'Pemkot', '34324325', 'pemkot@gmail.com', '2017-08-06 07:56:17', 1, 'file_1500559771.jpg', 'Lain-Lain', 'Lain-Lain', '2017-07-31', '18:00', '2017-08-12', '23:45', 1, 0, 0, 0, 2, '0', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 2, 0),
(30, 0, 'Dug Deran', '<p>dug deran</p>\r\n', 'azies', 'Pemkot', '34324325', 'pemkot@gmail.com', '2017-08-08 07:23:29', 1, 'file_1500559771.jpg', 'Lain-Lain', 'Lain-Lain', '2017-07-31', '18:00', '2017-08-12', '23:45', 1, 0, 0, 0, 2, '0', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 2, 0),
(31, 0, 'Dug Deran', '<p>dug deran</p>\r\n', 'azies', 'Pemkot', '34324325', 'pemkot@gmail.com', '2017-08-06 07:05:50', 1, 'file_1500559771.jpg', 'Lain-Lain', 'Lain-Lain', '2017-07-31', '18:00', '2017-08-12', '23:45', 1, 0, 0, 0, 2, '0', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 2, 1),
(32, 0, 'Dug Deran', '<p>dug deran</p>\r\n', 'azies', 'Pemkot', '34324325', 'pemkot@gmail.com', '2017-08-09 04:36:58', 1, 'file_1500559771.jpg', 'Lain-Lain', 'Lain-Lain', '2017-07-31', '18:00', '2017-08-12', '23:45', 1, 0, 0, 0, 2, '0', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 6, 8),
(33, 0, 'Lomba ANFORCOM', '<p>asfghk;</p>\r\n', 'Seza Dio Firmansyah', 'HMIF', '085640357417', 'sezadio@ymail.com', '2017-08-06 07:56:12', 1, 'file_1501834970.png', 'Science dan Teknologi', 'Game', '2017-08-04', '01:15', '2017-08-04', '02:45', 1, 0, 0, 0, 2, '0', 'Semarang', 'Jalan Kumudasmoro Dalam No. 11', 5, 0),
(34, 10, 'Lomba ANFORCOM 2019', 'mangkat', 'Seza Dio Firmansyah', 'HMIF', '0', 'sefirman12@gmail.com', '2017-08-09 08:29:24', 1, 'file_1502261571.jpg', 'Science dan Teknologi', 'Expo', '2017-08-11', '03:30', '2017-08-12', '00:00', 1, 0, 0, 0, 2, '0', 'Semarang', 'Prof. Soedarto', 3, 0),
(36, 9, 'Lomba ANFORCOM 2017 2', 'Lomba pemrograman tingkat Mahasiswa Nasional ', 'Seza Dio', 'HMIF', '0', 'sefirman12@gmail.com', '2017-08-14 06:29:34', 1, 'file_1502549246.jpg', 'Science dan Teknologi', 'Expo', '2017-08-16', '01:00', '2017-08-19', '23:00', 1, 1, 0, 0, 2, '0', 'Semarang', 'Jalan Gondang Timur', 3, 0),
(38, 9, 'Jateng Fair 2017', 'Kembali digelar Jateng Fair 2017 di PRPP Jateng Area Marina Semarang. Dengan tema The Paradise of Karimunjawa event ini digelar mulai 11 Agustus hingga 10 September 2017.\r\n\r\nHarga Tiket Masuk HTM Jateng Fair 2017 sebesar Rp 15 ribu untuk hari Senin – Jumat dari pukul 16.00 – 22.00 WIB dan Rp 20 ribu untuk hari Sabtu – Minggu Jam 11.00-23.30 WIB.\r\n\r\nAtraksi menarik yang akan digelar sepanjang 31 hari itu seperti Dancing Fountain, Thematic lantern, The Green Bunny Park, 3D trick art Spectamata, Science centre, Pameran Craftman, Stand Kuliner, Panggung Utama artis nasional, Pameran 35 Kabupaten/Kota di Jawa Tengah, Pameran BUMD, Panggung Budaya dan juga Bianglala.\r\n\r\nBanyak artis akan meramaikan gelaran Jateng Fair kali ini, Fariz Rm, OM Sera feat Via Valen, Tony Q Rastafara, Nella Kharisma, Tipe-X, Souljah, Last Child, Payung Teduh, Shaggy Dog, Uut Selly dan masih banyak lagi.', 'Seza Dio', 'PRPP', '0', 'sefirman12@gmail.com', '2017-08-12 15:18:31', 1, 'file_1502550764.jpg', 'Lain-Lain', 'Festival', '2017-08-11', '11:00', '2017-09-10', '23:30', 0, 0, 0, 0, 2, '20000', 'Semarang', 'Jalan Puri Anjasmoro', 0, 0),
(40, 9, 'Lomba Panjat Pinang', 'Panjat pinang dilakukan berkelompok dengan satu kelompok berjumlah minimal 5 orang dan maksimal 10 orang.', 'Seza Dio Firmansyah', 'UNDIP', '085640357417', 'sefirman12@gmail.com', '2017-08-14 08:29:52', 1, 'file_1502638685.jpg', 'Lain-Lain', 'Festival', '2017-08-26', '07:00', '2017-08-27', '12:00', 1, 1, 0, 0, 2, '0', 'Semarang', 'Jln Kumudasmoro dalam 11 ', 33, 0),
(41, 9, 'Lomba Panjat Pinang Episode 2', 'asdfg,.', 'Seza Dio Firmansyah', 'HMIF', '085640357417', 'sezadio@ymail.com', '2017-08-14 09:24:30', 1, 'file_1502699106.jpg', 'Musik', 'Conference', '2017-08-19', '01:00', '2017-08-20', '03:45', 1, 1, 0, 0, 2, '0', '407', 'Jln Kumudasmoro dalam 11 ', 1, 0),
(42, 9, 'Lomba Panjat Pinang Episode 3', 'gjghjgjhgkhgjhgjgj', 'Seza Dio Firmansyah', 'HMIF', '085640357417', 'sefirman12@gmail.com', '2017-08-14 09:37:32', 1, 'file_1502702779.jpg', 'Sprirituality', 'Class', '2017-08-19', '03:00', '2017-08-20', '04:30', 1, 1, 0, 0, 2, '0', '33.74.00.0000', 'Jln Kumudasmoro dalam 11 ', 2, 0);

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
MODIFY `id_coming` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

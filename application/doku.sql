-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 09:33 AM
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
-- Table structure for table `doku`
--

CREATE TABLE IF NOT EXISTS `doku` (
`id` int(11) NOT NULL,
  `transidmerchant` varchar(125) NOT NULL,
  `totalamount` double NOT NULL,
  `words` varchar(200) NOT NULL,
  `statustype` varchar(1) NOT NULL,
  `response_code` varchar(50) NOT NULL,
  `approvalcode` char(6) NOT NULL,
  `trxstatus` varchar(50) NOT NULL,
  `payment_channel` int(2) NOT NULL,
  `paymentcode` int(8) NOT NULL,
  `session_id` varchar(48) NOT NULL,
  `bank_issuer` varchar(100) NOT NULL,
  `creditcard` varchar(16) NOT NULL,
  `payment_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verifyid` varchar(30) NOT NULL,
  `verifyscore` int(3) NOT NULL,
  `verifystatus` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doku`
--

INSERT INTO `doku` (`id`, `transidmerchant`, `totalamount`, `words`, `statustype`, `response_code`, `approvalcode`, `trxstatus`, `payment_channel`, `paymentcode`, `session_id`, `bank_issuer`, `creditcard`, `payment_date_time`, `verifyid`, `verifyscore`, `verifystatus`) VALUES
(1, '800000080FE1', 35000, '350005040WoL1yQ3At72k800000080FE1', 'P', '1111', '0', '0', 0, 0, '0', '0', '0', '2017-10-12 14:44:33', '0', 0, '0'),
(7, '80000008B6FA', 35000, '350005040WoL1yQ3At72k80000008B6FA', 'P', '1111', '0', '0', 0, 0, '0', '0', '0', '2017-10-12 15:07:05', '0', 0, '0'),
(8, '80-000008-B6FA', 35000, '350005040WoL1yQ3At72k80-000008-B6FA', 'P', '1111', '0', '0', 0, 0, '0', '0', '0', '2017-10-12 15:18:43', '0', 0, '0'),
(9, '80-000009-0FE1', 35000, '350005040WoL1yQ3At72k80-000009-0FE1', 'P', '1111', '0', '0', 0, 0, '0', '0', '0', '2017-10-12 15:20:27', '0', 0, '0'),
(10, '80-55649-0FE1', 35000, '350005040WoL1yQ3At72k80-55649-0FE1', 'P', '1111', '0', '0', 0, 0, '0', '0', '0', '2017-10-12 15:32:53', '0', 0, '0'),
(11, '80-158987-0FE1', 35000, '350005040WoL1yQ3At72k80-158987-0FE1', 'P', '1111', '0', '0', 0, 0, '0', '0', '0', '2017-10-12 16:43:20', '0', 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doku`
--
ALTER TABLE `doku`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doku`
--
ALTER TABLE `doku`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

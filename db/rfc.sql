-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2022 at 03:49 PM
-- Server version: 5.7.36
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rfc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `message`) VALUES
(1, 'Restu', 'restu@gmail.com', 'Komplain', 'fasdfsad'),
(2, 'YEs', 'peopleunknown09@gmail.com', 'Komplain', ' Ayamnya kurang gede\r\n'),
(3, 'D3AD', 'biwiwi9868@datakop.com', 'Rating', 'Ayam nya mantap banget'),
(4, 'Restu 1', 'restu@gmail.com', 'Rating', 'Kasih Diskon Dong'),
(5, 'Restu', 'restu@gmail.com', 'Komplain', 'sadfasd');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(12) NOT NULL,
  `stok` int(12) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `harga`, `stok`, `gambar`) VALUES
(1, 'Combo RFC BBQ', '1 Nasi + 4 Ayam + 1 Cola', 45000, 15, 'blackpaper.png'),
(2, 'BBQ RFC + Sauce', 'Nasi Ayam with BBQ Sauce', 22000, 20, 'bbq_rfc.png'),
(3, 'Combo RFC BBQ', 'Nasi Ayam with BBQ Sauce', 45000, 15, 'combo_bbq.png'),
(4, '9 PCS Bucket', '9 Potong Ayam ', 67250, 30, '9bucket.png'),
(5, 'Wings BalckPaper', 'Nasi Ayam Sauce BlackPaper', 75000, 55, 'blackpaper.png'),
(6, 'Ayam Dada', '1 Ayam Dada', 12000, 14, 'dada.png'),
(7, 'Ayam Paha', '1 Ayam Paha', 11000, 40, 'paha.png'),
(8, 'Ayam Sayap', '1 Ayam Sayap', 9000, 25, 'sayap.png'),
(9, 'Combo Krispi ', '2 Ayam Dada + 1 Cola + 1 Nasi', 56999, 39, '9bucket.png'),
(10, 'Krispy Box TEST 1', '2 Sayap + 2 Dada ', 25129, 14, 'combo_bbq.png'),
(11, 'Wings Sauce BBQ ++ TEST 1', '10 Sayap + Sauce BBQ', 50000, 13, 'ayam2.png'),
(12, 'Wings Bucket TEST 1', '9 Potong Ayam ', 8000, 100, 'bbq_rfc.png'),
(19, 'Kulit ayam Pedas', 'Kulit Ayam Goreng Renyah', 8000, 8, 'kulitayam.png'),
(20, 'Wings Bucket', '1 Potong Dada', 50000, 5, '2dada2sayap.png'),
(21, 'BBQ RFC + Sauce', '1 Ekor Ayam Goreng', 22000, 4, 'combo_bbq.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

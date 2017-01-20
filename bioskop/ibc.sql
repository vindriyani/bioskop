-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2012 at 03:52 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ibc`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `no` int(20) NOT NULL AUTO_INCREMENT,
  `tempat` varchar(25) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `jam` varchar(25) NOT NULL,
  `sheet` varchar(40) NOT NULL,
  `hari` varchar(35) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`no`, `tempat`, `judul`, `jam`, `sheet`, `hari`) VALUES
(51, 'Bogor', 'pocong juga pocong', '12:30', 'a-1', 'senin'),
(52, 'Bogor', 'pocong juga pocong', '12:30', 'a-1', 'selasa'),
(53, 'Jakarta', 'perfect house', '13:00', 'j-11', 'rabu'),
(54, 'Bogor', 'the rum diary', '15:10', 'h-1', 'rabu'),
(55, 'Depok', 'x-men', '19:30', 'j-7', 'jumat'),
(56, 'Depok', 'pocong juga pocong', '13:00', 'a-1', 'jumat');

-- --------------------------------------------------------

--
-- Table structure for table `tools_gallery`
--

CREATE TABLE IF NOT EXISTS `tools_gallery` (
  `id_gallery` int(3) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tools_gallery`
--

INSERT INTO `tools_gallery` (`id_gallery`, `gambar`, `tanggal`, `keterangan`, `link`) VALUES
(14, 'computer_training_class.jpg', '2011-01-24', 'xmen', 'Sebelum Charles Xavier dan Erik Lehnsherr mengambil nama Profesor X dan Magneto, mereka adalah dua pemuda yang menemukan kekuatan mereka untuk pertama kalinya. Mereka adalah sabahat sebelum mereka menjadi musuh bebuyutan, bekerja sama dengan mutan lain untuk menghentikan ancaman terbesar di dunia. Saat penyelamatan tersebut berlangsung, keretakan mulai terjadi diantara mereka, dan menjadi perang abadi antara Magneto Brotherhood dan Profesor X X-Men'),
(13, '20080606110529.jpg', '2011-01-24', 'breaking dawn', ''),
(12, '1277957882_IMG_1652.png', '2011-01-24', 'poconggg juga pocong', ''),
(11, '38Pelatihan_Komputer.PNG', '2011-01-24', 'jhony engslih ', ''),
(20, 'IMG_0126.jpg', '2011-01-24', 'kehormatan dibalik kerudung', ''),
(28, '3.jpg', '2012-01-02', 'pengejar angin', ''),
(27, 'b.jpg', '2012-01-02', 'sang penari', ''),
(25, 'a.jpg', '0000-00-00', 'perfec house', ''),
(30, 'd.jpg', '2012-01-02', 'the tum diary', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `psw` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `hp` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(25) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `psw`, `nama`, `email`, `hp`, `alamat`) VALUES
('4', 'c9f0f895fb98ab9159f51fd0297e236d', '4', '4', '4', '4'),
('4', 'c9f0f895fb98ab9159f51fd0297e236d', '4', '4', '4', '4'),
('3lukuro', '8d281a60d6d637903d4eccd26ddb0104', 'heru', 'landnero@yahoo.', '0842843', 'jalan wijaya kusumah'),
('1', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1', '1', '1'),
('1', 'helena', '1', '1', '1', '1'),
('4', 'c9f0f895fb98ab9159f51fd0297e236d', '4', '4', '4', '4');

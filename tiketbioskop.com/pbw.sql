-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2014 at 04:59 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pbw`
--
CREATE DATABASE IF NOT EXISTS `pbw` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pbw`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`no`, `tempat`, `judul`, `jam`, `sheet`, `hari`) VALUES
(67, 'citylink', 'penguin', '12:30', 'a-1', 'senin'),
(68, 'citylink', 'penguin', '12:30', 'a-2', 'senin'),
(69, 'citylink', 'penguin', '12:30', 'a-4', 'senin');

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
(14, 'i.jpg', '0000-00-00', 'Saint Seiya', ''),
(13, 'h.jpg', '0000-00-00', 'Penguin', ''),
(12, 'g.jpg', '0000-00-00', 'Ouija', ''),
(11, 'f.jpg', '0000-00-00', 'Mockingjay', ''),
(20, 'c.jpg', '0000-00-00', 'Breaking Dawn', ''),
(28, 'e.jpg', '0000-00-00', 'Interstellar', ''),
(27, 'b.jpg', '0000-00-00', 'Big Hero 6', ''),
(25, 'a.jpg', '0000-00-00', '7/24', ''),
(30, 'd.jpg', '0000-00-00', 'The Devil''s Hand', '');

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
  `alamat` varchar(25) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `psw`, `nama`, `email`, `hp`, `alamat`) VALUES
('adjays', 'ab56b4d92b40713acc5af89985d4b786', 'adji', 'glekglek@glek.com', '081214141618', 'Jl.Apa aja boyeh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

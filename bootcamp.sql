-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 08:41 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bootcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
`id_karyawan` int(7) NOT NULL,
  `nama_karyawan` text NOT NULL,
  `jenis_kelamin` varchar(7) NOT NULL,
  `jabatan` text NOT NULL,
  `no_hp` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `jenis_kelamin`, `jabatan`, `no_hp`, `alamat`) VALUES
(2, 'lutfi', 'Pria', 'Analisis', '0878xxx', 'Jalan 2'),
(3, 'Sidiq', 'Pria', 'Android Dev', '0823xxx', 'Jalan 3'),
(4, 'Nadia', 'Wanita', 'Bisnis Develop', '0857xxx', 'Jalan 4'),
(6, 'asdw', 'priai', 'boss', '123', 'jajaja'),
(7, 'Testing', 'Pria', 'BOSS', '123', 'jln jln');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE IF NOT EXISTS `kehadiran` (
`id_kehadiran` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jam_datang` datetime NOT NULL,
  `jam_pulang` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `id_karyawan`, `jam_datang`, `jam_pulang`) VALUES
(3, 4, '2018-02-19 07:50:00', '2018-02-19 17:00:00'),
(5, 6, '2018-02-19 10:30:00', '2018-02-19 16:00:00'),
(6, 6, '2018-02-24 10:10:00', '2018-02-24 10:20:00'),
(8, 6, '2018-02-24 10:20:00', '2018-02-24 11:30:00'),
(9, 2, '2018-02-24 00:00:00', '2018-02-24 12:33:00'),
(10, 4, '2018-02-24 01:01:00', '2018-02-24 02:02:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
 ADD PRIMARY KEY (`id_kehadiran`), ADD KEY `karyawan-kehadiran` (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
MODIFY `id_karyawan` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kehadiran`
--
ALTER TABLE `kehadiran`
ADD CONSTRAINT `karyawan-kehadiran` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

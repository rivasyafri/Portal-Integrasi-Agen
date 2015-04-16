-- phpMyAdmin SQL Dump
-- version 4.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2015 at 06:52 AM
-- Server version: 5.6.24-log
-- PHP Version: 5.6.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agenbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE IF NOT EXISTS `agen` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `lokasi` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`username`, `password`, `lokasi`, `no_telp`) VALUES
('admin', 'admin', 'Jl. Dr. Cipto nomor 10, Bandung', '0811223344'),
('agen', 'agen', 'Jl. Tersebar merata yang penting indah', '0899887766');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `id` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `jumlah_kursi` int(11) NOT NULL DEFAULT '33',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `tanggal_berangkat` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan`
--

CREATE TABLE IF NOT EXISTS `perjalanan` (
  `id_trayek` int(11) NOT NULL,
  `id_bus` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `no_kursi` int(11) NOT NULL,
  `tujuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trayek`
--

CREATE TABLE IF NOT EXISTS `trayek` (
  `id` int(11) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD UNIQUE KEY `id_bus` (`id_bus`),
  ADD UNIQUE KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_trayek` (`id_trayek`);

--
-- Indexes for table `trayek`
--
ALTER TABLE `trayek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trayek`
--
ALTER TABLE `trayek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD CONSTRAINT `perjalanan_ibfk_1` FOREIGN KEY (`id_trayek`) REFERENCES `trayek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perjalanan_ibfk_2` FOREIGN KEY (`id_bus`) REFERENCES `bus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perjalanan_ibfk_3` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

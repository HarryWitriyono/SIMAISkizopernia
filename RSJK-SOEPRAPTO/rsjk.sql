-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mar 2024 pada 14.42
-- Versi Server: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsjk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_pengguna`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_training`
--

CREATE TABLE IF NOT EXISTS `data_training` (
  `id_data_training` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `g1` double NOT NULL,
  `g2` double NOT NULL,
  `g3` double NOT NULL,
  `g4` double NOT NULL,
  `g5` double NOT NULL,
  `g6` double NOT NULL,
  `g7` double NOT NULL,
  `g8` double NOT NULL,
  `g9` double NOT NULL,
  `diagnosa` varchar(25) NOT NULL,
  `hasil` double NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_training`
--

INSERT INTO `data_training` (`id_data_training`, `nama`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `g7`, `g8`, `g9`, `diagnosa`, `hasil`, `kategori`) VALUES
(1, 'Tn. A4', 1, 1, 1, 0, 0, 0, 1, 1, 1, 'Skrizofrenia', 1, 'Tidak'),
(2, 'Tn. A1', 1, 1, 1, 0, 0, 0, 1, 1, 1, 'Skrizofrenia', 1, 'Tidak'),
(3, 'Tn. A2', 1, 0, 1, 1, 0, 1, 1, 1, 1, 'Skrizofrenia Katatonik', 1.4142135623731, 'Tidak'),
(4, 'Tn. A3', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 0, 'Ya'),
(5, 'Tn. B1', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 0, 'Ya'),
(6, 'Tn. B2', 1, 0, 0, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Residual', 1.4142135623731, 'Tidak'),
(7, 'Tn. C1', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Katatonik', 0, 'Ya'),
(8, 'Tn. C2', 0, 0, 1, 1, 0, 0, 1, 1, 1, 'Bipolar', 2, 'Tidak'),
(9, 'Tn. C3', 1, 0, 0, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Residual', 1.4142135623731, 'Tidak'),
(10, 'Tn. D1', 0, 1, 1, 0, 1, 1, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(11, 'Tn. D2', 0, 1, 1, 0, 0, 0, 1, 1, 1, 'Skrizofrenia Paranoid', 1.4142135623731, 'Tidak'),
(12, 'Tn. E1', 0, 1, 1, 0, 1, 1, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(13, 'Tn. G1', 1, 0, 1, 0, 0, 1, 1, 1, 0, 'Skrizofrenia Katatonik', 1.4142135623731, 'Tidak'),
(14, 'Tn. H1', 0, 0, 1, 1, 1, 0, 1, 1, 1, 'Skrizofrenia', 2.2360679774998, 'Tidak'),
(15, 'Tn. H2', 1, 0, 0, 0, 0, 1, 1, 1, 0, 'Skrizofrenia Residual', 1.7320508075689, 'Tidak'),
(16, 'Tn. J1', 0, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 1.4142135623731, 'Tidak'),
(17, 'Tn. K1', 0, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(18, 'Tn. K2', 1, 0, 0, 0, 0, 1, 1, 1, 0, 'Skrizofrenia Residual', 1.7320508075689, 'Tidak'),
(19, 'Tn. K3', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 0, 'Ya'),
(20, 'Tn. L1', 0, 0, 1, 0, 1, 0, 1, 1, 1, 'Skrizofrenia', 2, 'Tidak'),
(21, 'Tn. M1', 0, 1, 1, 0, 0, 0, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(22, 'Tn. P1', 1, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Katatonik', 1, 'Tidak'),
(23, 'Tn. P2', 0, 0, 1, 1, 0, 0, 1, 1, 0, 'Bipolar', 2.2360679774998, 'Tidak'),
(24, 'Tn. P3', 1, 0, 0, 0, 0, 1, 1, 1, 0, 'Skrizofrenia Residual', 1.7320508075689, 'Tidak'),
(25, 'Tn. P4', 0, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 1.4142135623731, 'Tidak'),
(26, 'Tn. R1', 1, 1, 1, 0, 1, 0, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(27, 'Tn. R2', 1, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Residual', 1, 'Tidak'),
(28, 'Tn. W1', 0, 1, 1, 0, 1, 1, 1, 1, 0, 'Skrizofrenia', 1.7320508075689, 'Tidak'),
(29, 'Tn. W2', 1, 1, 0, 1, 0, 0, 1, 1, 0, 'Skrizofrenia Katatonik', 2, 'Tidak'),
(30, 'Tn. W3', 0, 0, 1, 1, 1, 0, 1, 1, 1, 'Bipolar', 2.2360679774998, 'Tidak'),
(31, 'Tn. Y1', 0, 1, 1, 0, 0, 0, 1, 1, 0, 'Skrizofrenia', 1.7320508075689, 'Tidak'),
(32, 'Tn. Y2', 0, 0, 1, 0, 1, 0, 1, 1, 0, 'Bipolar', 2.2360679774998, 'Tidak'),
(33, 'Tn. A4', 1, 1, 1, 0, 0, 0, 1, 1, 1, 'Skrizofrenia', 1, 'Tidak'),
(34, 'Tn. A5', 1, 0, 1, 1, 0, 1, 1, 1, 1, 'Skrizofrenia Katatonik', 1.4142135623731, 'Tidak'),
(35, 'Tn. A6', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 0, 'Ya'),
(36, 'Tn. B3', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 0, 'Ya'),
(37, 'Tn. B4', 1, 0, 0, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Residual', 1.4142135623731, 'Tidak'),
(38, 'Tn. C4', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Katatonik', 0, 'Ya'),
(39, 'Tn. C5', 0, 0, 1, 1, 0, 0, 1, 1, 1, 'Bipolar', 2, 'Tidak'),
(40, 'Tn. C6', 1, 0, 0, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Residual', 1.4142135623731, 'Tidak'),
(41, 'Tn. D3', 0, 1, 1, 0, 1, 1, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(42, 'Tn. D4', 0, 1, 1, 0, 0, 0, 1, 1, 1, 'Skrizofrenia Paranoid', 1.4142135623731, 'Tidak'),
(43, 'Tn. E2', 0, 1, 1, 0, 1, 1, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(44, 'Tn. G2', 1, 0, 1, 0, 0, 1, 1, 1, 0, 'Skrizofrenia Katatonik', 1.4142135623731, 'Tidak'),
(45, 'Tn. H3', 0, 0, 1, 1, 1, 0, 1, 1, 1, 'Skrizofrenia', 2.2360679774998, 'Tidak'),
(46, 'Tn. H4', 1, 0, 0, 0, 0, 1, 1, 1, 0, 'Skrizofrenia Residual', 1.7320508075689, 'Tidak'),
(47, 'Tn. J2', 0, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 1.4142135623731, 'Tidak'),
(48, 'Tn. K4', 0, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(49, 'Tn. K5', 1, 0, 0, 0, 0, 1, 1, 1, 0, 'Skrizofrenia Residual', 1.7320508075689, 'Tidak'),
(50, 'Tn. K6', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 0, 'Ya'),
(51, 'Tn. L2', 0, 0, 1, 0, 1, 0, 1, 1, 1, 'Skrizofrenia', 2, 'Tidak'),
(52, 'Tn. M2', 0, 1, 1, 0, 0, 0, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(53, 'Tn. P5', 1, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Katatonik', 1, 'Tidak'),
(54, 'Tn. P6', 0, 0, 1, 1, 0, 0, 1, 1, 0, 'Bipolar', 2.2360679774998, 'Tidak'),
(55, 'Tn. P7', 1, 0, 0, 0, 0, 1, 1, 1, 0, 'Skrizofrenia Residual', 1.7320508075689, 'Tidak'),
(56, 'Tn. P8', 0, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid', 1.4142135623731, 'Tidak'),
(57, 'Tn. R3', 1, 1, 1, 0, 1, 0, 1, 1, 1, 'Skrizofrenia', 1.4142135623731, 'Tidak'),
(58, 'Tn. R4', 1, 0, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Residual', 1, 'Tidak'),
(59, 'Tn. W4', 0, 1, 1, 0, 1, 1, 1, 1, 0, 'Skrizofrenia', 1.7320508075689, 'Tidak'),
(60, 'Tn. W5', 1, 1, 0, 1, 0, 0, 1, 1, 0, 'Skrizofrenia Katatonik', 2, 'Tidak'),
(61, 'Tn. W6', 0, 0, 1, 1, 1, 0, 1, 1, 1, 'Bipolar', 2.2360679774998, 'Tidak'),
(62, 'Tn. Y3', 0, 1, 1, 0, 0, 0, 1, 1, 0, 'Skrizofrenia', 1.7320508075689, 'Tidak'),
(63, 'Tn. Y4', 0, 0, 1, 0, 1, 0, 1, 1, 0, 'Bipolar', 2.2360679774998, 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_uji`
--

CREATE TABLE IF NOT EXISTS `data_uji` (
  `id_data_uji` int(11) NOT NULL,
  `nama1` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `g11` double NOT NULL,
  `g22` double NOT NULL,
  `g33` double NOT NULL,
  `g44` double NOT NULL,
  `g55` double NOT NULL,
  `g66` double NOT NULL,
  `g77` double NOT NULL,
  `g88` double NOT NULL,
  `g99` double NOT NULL,
  `diagnosa` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_uji`
--

INSERT INTO `data_uji` (`id_data_uji`, `nama1`, `jenis_kelamin`, `tanggal_lahir`, `g11`, `g22`, `g33`, `g44`, `g55`, `g66`, `g77`, `g88`, `g99`, `diagnosa`) VALUES
(19, 'Tn. X1', 'Laki-Laki', '1979-07-01', 1, 1, 1, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Paranoid'),
(20, 'Tn. X2', 'Laki-Laki', '1978-02-10', 1, 1, 1, 0, 0, 0, 1, 1, 1, 'Skrizofrenia'),
(21, 'Tn. X3', 'Laki-Laki', '1979-12-19', 1, 0, 0, 0, 0, 1, 1, 1, 1, 'Skrizofrenia Residual'),
(22, 'Tn. X4', 'Laki-Laki', '1971-11-22', 1, 1, 1, 0, 0, 0, 1, 1, 1, 'Skrizofrenia'),
(23, 'Tn. X5', 'Laki-Laki', '1997-04-25', 0, 0, 1, 0, 1, 0, 1, 1, 0, 'Bipolar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`id_data_training`);

--
-- Indexes for table `data_uji`
--
ALTER TABLE `data_uji`
  ADD PRIMARY KEY (`id_data_uji`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_training`
--
ALTER TABLE `data_training`
  MODIFY `id_data_training` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `data_uji`
--
ALTER TABLE `data_uji`
  MODIFY `id_data_uji` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

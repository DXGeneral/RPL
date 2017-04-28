-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Nov 2016 pada 09.45
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himasti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('adminhim', 'password');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_anggota`
--

CREATE TABLE IF NOT EXISTS `data_anggota` (
  `NIM` int(9) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Divisi` varchar(20) NOT NULL,
  `Angkatan` int(4) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `NoHP` int(13) NOT NULL,
  `JenisKelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_anggota`
--

INSERT INTO `data_anggota` (`NIM`, `Nama`, `Divisi`, `Angkatan`, `TanggalLahir`, `Alamat`, `NoHP`, `JenisKelamin`) VALUES
(18212001, 'Vincent Sebastian', 'Kekeluargaan', 2012, '1993-10-01', 'Cisitu Indah V nomor 5', 628129093, 'L'),
(18212002, 'Emilia Gandam', 'Kekeluargaan', 2012, '1993-11-22', 'Jalan ciumbuleuit nomor 80', 628038102, 'P'),
(18213001, 'Bagoes Raditya', 'Internal', 2013, '1995-06-13', 'Cisitu indah II nomor 1', 628129321, 'L'),
(18213002, 'Adam Gifari', 'Teknikal', 2013, '1995-01-13', 'Jalan sukajadi nomor 83', 628930132, 'L'),
(18214001, 'Raden Mas Sinung', 'Eksternal', 2014, '1996-11-10', 'Jalan Buah Batu nomor 88', 628312512, 'L'),
(18214002, 'Charlotte Dunois', 'Kekeluargaan', 2014, '1996-04-12', 'Jalan dipatiukur nomor 100', 628058202, 'P'),
(18214004, 'Leo Harisma Sadewo', 'Kesenatoran', 2014, '1996-09-15', 'Ciumbuleuit', 1234567, 'L'),
(18214027, 'Ahmadi Idham T Lubis', 'Kesenatoran', 2015, '1996-08-19', 'Ciumbuleuit', 2147483647, 'L'),
(18215004, 'Enrico Wicaksana', 'Teknikal', 2015, '1997-06-08', 'Tubagus Ismail VI nomor 10', 628198393, 'L'),
(18215005, 'Alice Schuberg', 'Kesenatoran', 2015, '1996-04-04', 'Jalan imam bonjol nomor 1', 628098202, 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keaktifan_anggota`
--

CREATE TABLE IF NOT EXISTS `keaktifan_anggota` (
  `NIM` int(9) NOT NULL,
  `ID` int(3) NOT NULL,
  `Keaktifan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keaktifan_anggota`
--

INSERT INTO `keaktifan_anggota` (`NIM`, `ID`, `Keaktifan`) VALUES
(18212001, 1, 'Ketua Divisi Mentor Sparta 2014'),
(18212001, 2, 'Panglima Lapangan OSKM ITB 2017'),
(18212001, 15, 'Alamak'),
(18212002, 1, 'Ketua SPARTA 2014'),
(18212002, 2, 'Gundam Commander 2015'),
(18213001, 1, 'Ketua Gathering STI 2014'),
(18213002, 1, 'Wakil Ketua SPARTA 2015'),
(18214002, 1, 'Sekretaris HMIF 2015/2016'),
(18214004, 3, 'Pembersih Sekre #1 Oktober 2016'),
(18215004, 1, 'Ketua Makrab 2016'),
(18215005, 1, 'Ketua Pengmas 2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `keaktifan_anggota`
--
ALTER TABLE `keaktifan_anggota`
  ADD PRIMARY KEY (`NIM`,`ID`),
  ADD UNIQUE KEY `NIM_3` (`NIM`,`ID`),
  ADD KEY `NIM_2` (`NIM`),
  ADD KEY `ID_2` (`ID`),
  ADD KEY `NIM_4` (`NIM`,`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keaktifan_anggota`
--
ALTER TABLE `keaktifan_anggota`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keaktifan_anggota`
--
ALTER TABLE `keaktifan_anggota`
  ADD CONSTRAINT `keaktifan_anggota_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `data_anggota` (`NIM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

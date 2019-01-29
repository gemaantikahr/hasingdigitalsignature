-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 05:03 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `idjurusan` varchar(30) NOT NULL,
  `namajurusan` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jursan` varchar(30) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` text NOT NULL,
  `tahunmasuk` int(11) NOT NULL,
  `tahunlulus` int(11) NOT NULL,
  `dsstored` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jursan`, `tanggallahir`, `alamat`, `tahunmasuk`, `tahunlulus`, `dsstored`) VALUES
('16088', 'Tiara', 'Teknik Informatika', '1997-12-19', 'Jalan glagah sari', 2016, 2020, '43a905f6acb5711fd7f069f31fe60007f20c94d9'),
('16095', 'gema antika hariadi ', 'Teknik Informatika', '1997-10-07', 'Jl. Soekarno Hatta, Rumbuk, Selong, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83671', 2016, 2020, '54c1ea16d056e4adca250d41dd4870b2d2ae3e40'),
('16099', 'Annisa cantik', 'Teknik Informatika', '1999-01-16', 'taman siswa kebon jeruk', 2016, 2020, '0a153447b17de534bef6624b2a541fece84856c4'),
('19001', 'Joko Widodo', 'teknik informatika', '1997-11-09', 'Jl Mangga 1/7, RT/RW 1/6, Dsn. lamper kidul, Ds./Kel Lamper Kidul', 2014, 2019, '92a2d5e89b09fb082317c5e82b9ff95dbd141c33'),
('19002', 'Prabowo Subianto', 'teknik informatika', '1997-11-09', 'Jl Mangga 1/7, RT/RW 1/6, Dsn. lamper kidul, Ds./Kel Lamper Kidul, Kec. Semarang Selatan.', 2015, 2019, '7f996243c373baa258c77823c2b09f18581cbe66'),
('19003', 'Sandiaga Uno', 'teknik informatika', '1998-12-05', 'Jl. Jogokaryan 77 A, MANTRIJERON, Kec. Mantrijeron Kota Yogyakarta NPSN: 20403343', 2014, 2018, '76acce7ae3c4f4e21f52dd794dcac4fa11221bcd'),
('19004', 'Ennu Intan Iksan', 'teknik informatika', '1998-12-05', 'JL. KH. KHOLIL 90 GRESIK, RT/RW 5/1, Dsn. , Ds./Kel Kemuteran, Kec. Gresik.', 2016, 2019, 'a9cf7f37d3df228e9c4a4057b080926c62addc4e'),
('19005', 'Tuan Guru Bajang', 'teknik informatika', '1998-12-05', 'Jln Soekarno Hatta Desa sakra, kec. sakra, Kab. Lombok Timur', 2016, 2019, '705735f2c7a1c05a32adb3449712c2c9dcdf2ff5'),
('19006', 'Tukul Arwana ', 'Teknik Informatika', '1997-12-25', ' Jalan Wijaya Kusuma No. 48, Surabaya, Jawa Timur', 2000, 2013, '881fc85d43ca8c4f028505d866df6c81da61a8d3');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `idmatkul` varchar(30) NOT NULL,
  `namamk` varchar(30) NOT NULL,
  `idjurusan` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_mk` char(10) NOT NULL,
  `nama_mk` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_mk`, `nama_mk`, `semester`, `sks`) VALUES
('m01', 'matematika diskrit', 2, 3),
('m02', 'Algoritma Pemrograma', 2, 3),
('m03', 'Basis Data', 3, 4),
('m04', 'Strategi Algoritma', 4, 3),
('m05', 'Data Mining', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `idmatkul` varchar(30) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`idnilai`, `nim`, `idmatkul`, `nilai`) VALUES
(1, '19001', 'm01', 3.6),
(2, '19001', 'm02', 3.5),
(3, '19001', 'm03', 3.5),
(8, '19001', 'm04', 3.7),
(9, '19001', 'm05', 3.8),
(10, '19002', 'm01', 3.5),
(11, '19002', 'm02', 3.9),
(12, '19002', 'm03', 3.7),
(13, '19002', 'm04', 3.8),
(14, '19002', 'm05', 3.7),
(15, '19003', 'm01', 4),
(16, '19003', 'm02', 4),
(17, '19003', 'm03', 4),
(18, '19003', 'm04', 4),
(19, '19003', 'm05', 3.3),
(20, '19004', 'm01', 3.8),
(21, '19004', 'm02', 3.9),
(22, '19004', 'm03', 3.9),
(23, '19004', 'm04', 3.9),
(24, '19004', 'm05', 3.9),
(25, '19005', 'm05', 3.9),
(26, '19005', 'm04', 3.9),
(27, '19005', 'm01', 3.9),
(28, '19005', 'm03', 3.7),
(30, '19006', 'm01', 3),
(31, '19006', 'm02', 2.5),
(32, '19006', 'm03', 2),
(33, '19006', 'm04', 3.3),
(34, '19006', 'm05', 3.2),
(35, '16095', 'm01', 4),
(36, '16095', 'm02', 4),
(37, '16095', 'm03', 3.9),
(38, '16095', 'm04', 3.8),
(39, '16095', 'm05', 3.9),
(40, '16099', 'm01', 3.7),
(41, '16099', 'm02', 3.99),
(42, '16099', 'm03', 3.5),
(43, '16099', 'm04', 4),
(44, '16099', 'm05', 3.5),
(45, '16088', 'm01', 3.65),
(46, '16088', 'm02', 3.78),
(47, '16088', 'm03', 3.99),
(48, '16088', 'm04', 3.55),
(49, '16088', 'm05', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nilaimahasiswa`
--

CREATE TABLE `nilaimahasiswa` (
  `id_nilai` char(10) NOT NULL,
  `nim` varbinary(30) NOT NULL,
  `id_mk` char(10) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varbinary(30) NOT NULL,
  `password` varbinary(30) NOT NULL,
  `statu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`idjurusan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`idmatkul`),
  ADD KEY `idjurusan` (`idjurusan`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`),
  ADD KEY `nim` (`nim`,`idmatkul`),
  ADD KEY `idmatkul` (`idmatkul`);

--
-- Indexes for table `nilaimahasiswa`
--
ALTER TABLE `nilaimahasiswa`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nim` (`nim`,`id_mk`),
  ADD KEY `nim_2` (`nim`,`id_mk`),
  ADD KEY `id_mk` (`id_mk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`idmatkul`) REFERENCES `matkul` (`id_mk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

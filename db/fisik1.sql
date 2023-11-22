-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 03:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisik1`
--

-- --------------------------------------------------------

--
-- Table structure for table `atlet`
--

CREATE TABLE `atlet` (
  `id_atlet` int(10) NOT NULL,
  `id_cabor` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmpt_lhr` varchar(255) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atlet`
--

INSERT INTO `atlet` (`id_atlet`, `id_cabor`, `nama`, `tmpt_lhr`, `tgl_lhr`, `alamat`, `id_user`) VALUES
(120, 104, 'Muhammad Bisri Mustofa', 'Samarinda', '2001-01-01', 'rumbia', 0);

-- --------------------------------------------------------

--
-- Table structure for table `benchmark`
--

CREATE TABLE `benchmark` (
  `id_tes` int(10) NOT NULL,
  `id_atlet` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `run20m` varchar(255) NOT NULL,
  `shutle` varchar(255) NOT NULL,
  `flexibility` varchar(12) NOT NULL,
  `jump_kaka` varchar(255) NOT NULL,
  `jump_kaki` varchar(255) NOT NULL,
  `situp` varchar(255) NOT NULL,
  `pushup` varchar(255) NOT NULL,
  `bleep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `benchmark`
--

INSERT INTO `benchmark` (`id_tes`, `id_atlet`, `tanggal`, `run20m`, `shutle`, `flexibility`, `jump_kaka`, `jump_kaki`, `situp`, `pushup`, `bleep`) VALUES
(5, 120, '2021-12-31', '2.75', '11', '31', '4', '4', '92', '55', '12.5');

-- --------------------------------------------------------

--
-- Table structure for table `cabor`
--

CREATE TABLE `cabor` (
  `id_cabor` int(10) NOT NULL,
  `nama_cabor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabor`
--

INSERT INTO `cabor` (`id_cabor`, `nama_cabor`) VALUES
(101, 'Angkat Besi'),
(102, 'Gulat'),
(103, 'Karate'),
(104, 'Silat'),
(105, 'Taekwondo'),
(106, 'Anggar');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_tes` int(10) NOT NULL,
  `id_atlet` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `run20m` varchar(255) NOT NULL,
  `shutle` varchar(255) NOT NULL,
  `flexibility` varchar(255) NOT NULL,
  `jump_kaka` varchar(255) NOT NULL,
  `jump_kaki` varchar(255) NOT NULL,
  `situp` varchar(255) NOT NULL,
  `pushup` varchar(255) NOT NULL,
  `bleep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_tes`, `id_atlet`, `tanggal`, `run20m`, `shutle`, `flexibility`, `jump_kaka`, `jump_kaki`, `situp`, `pushup`, `bleep`) VALUES
(3, 120, '2022-03-25', '2.75', '11', '20', '4', '4', '92', '55', '12.5'),
(4, 125, '2022-03-25', '2.70', '11', '20', '4', '4', '92', '55', '12.5');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(10) NOT NULL,
  `nama_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Pelatih Silat'),
(3, 'Pelatih Gulat'),
(4, 'Pelatih Taekwondo'),
(5, 'Pelatih Karate'),
(6, 'Pelatih Angkat Besi'),
(7, 'Pelatih Anggar');

-- --------------------------------------------------------

--
-- Table structure for table `pelatih`
--

CREATE TABLE `pelatih` (
  `id_pelatih` int(5) NOT NULL,
  `id_cabor` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tmpt_lhr` text NOT NULL,
  `tgl_lhr` date NOT NULL,
  `prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelatih`
--

INSERT INTO `pelatih` (`id_pelatih`, `id_cabor`, `nama`, `alamat`, `tmpt_lhr`, `tgl_lhr`, `prestasi`) VALUES
(2, 105, 'Andi Muhammad Hervy', 'rumbia', 'Samarinda', '2001-09-09', 'wasit daerah provinsi'),
(3, 105, 'Uria Dedy Blegur', 'Rumbia', 'Samarinda', '1998-02-19', 'wasit daerah provinsi'),
(6, 105, 'Andi Muhammad Riefky', 'Jalan Rumbia 2 Gang Irama No. 43', 'Samarinda', '2021-12-31', 'wasit daerah provinsi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `id_level`) VALUES
(101, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin kantor', 1),
(104, 'hervy', '5f4dcc3b5aa765d61d8327deb882cf99', 'hervy', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atlet`
--
ALTER TABLE `atlet`
  ADD PRIMARY KEY (`id_atlet`);

--
-- Indexes for table `benchmark`
--
ALTER TABLE `benchmark`
  ADD PRIMARY KEY (`id_tes`);

--
-- Indexes for table `cabor`
--
ALTER TABLE `cabor`
  ADD PRIMARY KEY (`id_cabor`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_tes`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pelatih`
--
ALTER TABLE `pelatih`
  ADD PRIMARY KEY (`id_pelatih`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atlet`
--
ALTER TABLE `atlet`
  MODIFY `id_atlet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `benchmark`
--
ALTER TABLE `benchmark`
  MODIFY `id_tes` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cabor`
--
ALTER TABLE `cabor`
  MODIFY `id_cabor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_tes` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelatih`
--
ALTER TABLE `pelatih`
  MODIFY `id_pelatih` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

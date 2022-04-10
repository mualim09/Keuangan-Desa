-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 03:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dolar`
--

CREATE TABLE `dolar` (
  `id` int(100) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `pembuat` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `pengeluaran` int(100) NOT NULL,
  `pemasukan` bigint(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `jeniss` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dolar`
--

INSERT INTO `dolar` (`id`, `kode`, `pembuat`, `keterangan`, `tgl`, `pengeluaran`, `pemasukan`, `foto`, `jenis`, `jeniss`) VALUES
(1605803730, '24', 'Kepala Des', 'apa aja', '2020-04-08', 0, 56000, '243-Screenshot_20201015-001936_Drive.jpg', 'masuk', 'ADD'),
(1605804076, '24', 'Kepala Des', 'Beli ikan', '2020-05-12', 0, 20000, '734-Screenshot_20201015-001936_Drive.jpg', 'masuk', 'ADD'),
(1605804104, '24', 'Kepala Des', 'Beli ikan', '2020-06-17', 0, 12000, '912-lunar-new-year-2022-twibbon.png', 'masuk', 'ADD'),
(1605804137, '24', 'Kepala Des', 'Beli ayam', '2020-07-16', 0, 20000, '290-Screenshot_20201015-001936_Drive.jpg', 'masuk', 'BANPROV'),
(1605804166, '24', 'Kepala Des', 'Beli ikan', '2020-08-19', 0, 20000, '534-Screenshot_20201015-001936_Drive.jpg', 'masuk', 'BANPROV'),
(1605804205, '24', 'Kepala Des', 'Beli ikan', '2020-09-16', 0, 30000, '249-Screenshot_20201015-001936_Drive.jpg', 'masuk', 'BANKEU'),
(1605804230, '24', 'Kepala Des', 'Beli ikan', '2020-10-14', 0, 30005, '560-Screenshot_20201015-001936_Drive.jpg', 'masuk', 'BANKEU'),
(1605804253, '24', 'Kepala Des', 'Beli ikan', '2020-11-19', 0, 30000, '523-Screenshot_20201015-001936_Drive.jpg', 'masuk', 'DLL'),
(1605804276, '24', 'Kepala Des', 'Beli ikan', '2020-12-17', 0, 30000, '883-Screenshot_20201015-001936_Drive.jpg', 'masuk', 'DLL'),
(1605809364, '24', 'soimah', 'Beli ikan', '2020-01-15', 20000, 0, '371-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'DD'),
(1605809386, '24', 'soimah', 'Beli ikan', '2020-02-12', 20000, 0, '14-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'DD'),
(1605809414, '24', 'soimah', 'Beli ikan', '2020-03-19', 10000, 0, '423-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'DD'),
(1605809441, '24', 'soimah', 'Beli ikan', '2020-04-27', 23000, 0, '797-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'ADD'),
(1605809463, '24', 'soimah', 'Beli daging', '2020-05-13', 30000, 0, '231-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'ADD'),
(1605809487, '24', 'soimah', 'Beli ikan', '2020-06-17', 30000, 0, '919-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'BANPROV'),
(1605809514, '24', 'soimah', 'Beli ayam', '2020-07-17', 40000, 0, '215-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'BANPROV'),
(1605809542, '24', 'soimah', 'Beli daging', '2020-08-13', 10000, 0, '110-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'BANPROV'),
(1605809570, '24', 'soimah', 'Beli ikan', '2020-09-10', 50000, 0, '945-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'BANKEU'),
(1605809599, '24', 'soimah', 'Beli ikan', '2020-10-21', 10000, 0, '884-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'BANKEU'),
(1605809629, '24', 'soimah', 'Beli ikan', '2020-11-17', 40000, 0, '399-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'DLL'),
(1605809657, '24', 'soimah', 'Beli ikan', '2020-12-17', 12000, 0, '111-Screenshot_20201015-001936_Drive.jpg', 'keluar', 'DLL'),
(1606102664, '1', 'Kepala Des', 'Beli ikan', '2020-11-27', 0, 21000, '413-hh.jpg', 'masuk', 'DLL'),
(1606102691, '34', 'Sekertaris', 'Beli ayam', '2020-11-21', 0, 233, '656-hh.jpg', 'masuk', 'DLL'),
(1606158631, '1.1', 'Kepala Des', 'Dari pemerintah', '2020-11-19', 0, 500000, '704-hh.jpg', 'masuk', 'DD');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `nomrek` varchar(200) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `nama`, `ket`, `nomrek`, `jenis`) VALUES
(1598830053, 'sarahhh', 'toko', '12', 'OUT'),
(1598830273, 'rixki', 'bengkel', '12', 'OUT'),
(1598839898, 'sarahhh', 'toko', '23', 'OUT'),
(1600021842, 'Ipi', 'Kepala Desa', '129889492042', 'IN'),
(1605791227, 'Ayu Wandira', 'Kaur Keuangan', '123445627845', 'IN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `confirm`) VALUES
(66, 'reusmana', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3'),
(67, 'siapa', '66d37b44c6c3758012969f12e9c5457a', '66d37b44c6c3758012969f12e9c5457a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dolar`
--
ALTER TABLE `dolar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dolar`
--
ALTER TABLE `dolar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1607190131;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1605791228;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

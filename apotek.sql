-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 11:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

CREATE TABLE `jual` (
  `resi` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `jum_item` int(5) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `alamat` text NOT NULL,
  `bayar` enum('COD','BRI','BCA','BTN','DANA','GOPAY') NOT NULL,
  `id_user` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`resi`, `id`, `tanggal`, `jum_item`, `total`, `alamat`, `bayar`, `id_user`) VALUES
('APTK001', 7, '2022-05-09 12:51:35', 10, '10000', 'jl. kemuning kec. pabuaran', 'BCA', 5),
('APTK002', 7, '2022-05-09 12:52:49', 12, '12000', 'katapang', 'DANA', 5),
('APTK003', 3, '2022-05-09 12:56:24', 15, '45000', 'karawang', 'GOPAY', 5),
('APTK004', 3, '2022-05-09 12:57:32', 19, '57000', 'bandung', 'COD', 5),
('APTK005', 3, '2022-05-09 12:57:56', 3, '9000', 'kemang', 'DANA', 5),
('APTK006', 3, '2022-05-09 13:00:33', 19, '57000', 'gudang', 'COD', 5),
('APTK007', 3, '2022-05-09 13:00:56', 3, '9000', 'jhv', 'DANA', 5),
('APTK008', 2, '2022-05-09 13:02:34', 7, '14000', 'chgc', 'COD', 5),
('APTK009', 4, '2022-05-09 13:03:16', 7, '70000', 'yfjh', 'DANA', 5),
('APTK010', 6, '2022-05-09 13:04:03', 4, '40000', 'gjc', 'COD', 5),
('APTK011', 4, '2022-05-09 13:05:16', 5, '50000', 'adhwdha', 'BRI', 5),
('APTK012', 6, '2022-05-09 13:05:34', 8, '80000', 'www', 'GOPAY', 5),
('APTK013', 6, '2022-05-09 13:05:46', 15, '150000', 'adw', 'GOPAY', 5),
('APTK014', 1, '2022-05-09 22:14:48', 3, '4500', 'bandung', 'BCA', 5);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `kd_obat` varchar(6) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `harga` int(20) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `kd_obat`, `nama_obat`, `harga`, `id_kategori`, `stok`) VALUES
(1, 'PRCT69', 'paracetamol', 1500, 3, 79),
(2, 'BDRX46', 'Bodrex', 2000, 3, 75),
(3, 'PRMG77', 'Promagh', 3000, 3, 79),
(4, 'INST55', 'Insto', 10000, 4, 70),
(5, 'RMCL33', 'Remacil', 3000, 1, 97),
(6, 'BLNK41', 'Blink Contact', 10000, 4, 55),
(7, 'BDRXN9', 'Bodrexin anak', 1000, 1, 70);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `alamat`, `status`) VALUES
(1, 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '', 'Admin'),
(2, 'Asyifa Maulana', 'Asyifa01', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'subang', 'Admin'),
(3, 'Adrian Wibisono', 'adrianW', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'subang', 'User'),
(4, 'Alif Karimullah', 'Alif01', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Bekasi', 'User'),
(5, 'Asyifa Maulana', 'asyifa11', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'bandung', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`resi`),
  ADD KEY `id` (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jual`
--
ALTER TABLE `jual`
  ADD CONSTRAINT `jual_ibfk_1` FOREIGN KEY (`id`) REFERENCES `obat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jual_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_obat` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

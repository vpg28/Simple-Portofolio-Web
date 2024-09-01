-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 08:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uastekweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_log_pengiriman`
--

CREATE TABLE `detail_log_pengiriman` (
  `id_resi` int(11) NOT NULL,
  `no_resi` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `kota` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_log_pengiriman`
--

INSERT INTO `detail_log_pengiriman` (`id_resi`, `no_resi`, `tanggal`, `kota`, `keterangan`) VALUES
(1, 'RS-001', '2023-12-22', 'Surabaya', 'abcde'),
(2, 'RS-002', '2023-12-15', 'Jakarta', 'cepat kirim'),
(3, 'RS-004', '2023-12-20', 'Surabaya', 'cod an'),
(4, 'RS-004', '2023-12-21', 'Jepang', 'halo');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_resi_pengiriman`
--

CREATE TABLE `transaksi_resi_pengiriman` (
  `id_resi` int(11) NOT NULL,
  `no_resi` varchar(10) NOT NULL,
  `tgl_resi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi_resi_pengiriman`
--

INSERT INTO `transaksi_resi_pengiriman` (`id_resi`, `no_resi`, `tgl_resi`) VALUES
(2, 'RS-001', '2023-12-10'),
(3, 'RS-002', '2023-12-11'),
(4, 'RS-003', '2023-12-14'),
(5, 'RS-004', '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `status_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`, `nama_admin`, `status_aktif`) VALUES
(1, 'uastekweb', '1234', 'vincent', 1),
(2, 'test', '$2y$10$8qOxmiJjBLFqP45q9feJGuGAdkMNgFpHFbKHvbO1QA8', 'test', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_log_pengiriman`
--
ALTER TABLE `detail_log_pengiriman`
  ADD PRIMARY KEY (`id_resi`);

--
-- Indexes for table `transaksi_resi_pengiriman`
--
ALTER TABLE `transaksi_resi_pengiriman`
  ADD PRIMARY KEY (`id_resi`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_log_pengiriman`
--
ALTER TABLE `detail_log_pengiriman`
  MODIFY `id_resi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi_resi_pengiriman`
--
ALTER TABLE `transaksi_resi_pengiriman`
  MODIFY `id_resi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

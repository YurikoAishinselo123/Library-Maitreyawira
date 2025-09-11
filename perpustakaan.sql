-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 11, 2025 at 03:14 PM
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
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anggota`
--

CREATE TABLE `tabel_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(64) NOT NULL,
  `kelas` int(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `NIS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_anggota`
--

INSERT INTO `tabel_anggota` (`id_anggota`, `nama_anggota`, `kelas`, `tanggal_lahir`, `jenis_kelamin`, `NIS`) VALUES
(1001, 'dfdf', 10, '2001-05-29', 'Laki-laki', 299923344),
(1002, 'keta', 11, '1000-02-04', 'Perempuan', 3000),
(1005, 'Hello', 10, '2025-09-01', 'Laki-laki', 20035432);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(64) NOT NULL,
  `penulis_buku` varchar(64) NOT NULL,
  `penerbit_buku` varchar(64) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `stok_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`id_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_terbit`, `nisn`, `stok_buku`) VALUES
(1, 'dfdfdd', 'dfdfafadf', 'dfdfdfdf', 2222, 222, 2217),
(2, 'afdf', 'dfafdf', 'dfadfolll', 220202, 202002, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `status_transaksi` varchar(16) NOT NULL,
  `tanggal_pengembalian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_transaksi`
--

INSERT INTO `tabel_transaksi` (`id_transaksi`, `tanggal_peminjaman`, `id_buku`, `id_anggota`, `status_transaksi`, `tanggal_pengembalian`) VALUES
(10001, '2025-08-08', 1, 1001, 'Dikembalikan', '2025-09-04'),
(10009, '2025-09-10', 1, 1001, 'Dipinjam', NULL),
(10010, '2025-09-10', 2, 1002, 'Dipinjam', NULL),
(10011, '2025-06-10', 1, 1001, 'Dipinjam', NULL),
(10012, '2025-02-10', 1, 1001, 'Dipinjam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `password_user` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `password_user`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10013;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

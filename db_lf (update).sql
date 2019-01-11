-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jan 2019 pada 09.18
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_barang`
--

CREATE TABLE `t_barang` (
  `id_barang` int(255) NOT NULL,
  `id_kota` int(255) NOT NULL,
  `id_univ` int(255) NOT NULL,
  `id_label` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `foto_barang` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `status_barang` tinyint(1) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_barang`
--

INSERT INTO `t_barang` (`id_barang`, `id_kota`, `id_univ`, `id_label`, `id_user`, `nama_barang`, `foto_barang`, `deskripsi`, `status_barang`, `tanggal_upload`) VALUES
(3, 1, 2, 1, 8, 'dompet prada', 'liam-gallagher.jpg', 'black prada wallet', 1, '2019-01-10'),
(9, 1, 3, 1, 8, ' Louis Vuitton Wallet', 'vertikal_logo_1.png', 'qwertdcx', 1, '2019-01-11'),
(11, 1, 3, 2, 8, 'STNK Motor', 'about.jpg', 'STNK Motor honda beat F 6969 BF', 1, '2019-01-11'),
(12, 1, 1, 2, 8, 'STNK Mobil', 'grup.jpg', 'STNK Mobil toyota hiace', 1, '2019-01-11'),
(13, 1, 2, 2, 8, 'STNK PESAWAT', 'perhubungan.png', 'JAJAJAJAJAJAJAJAJA                                    ', 1, '2019-01-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kota`
--

CREATE TABLE `t_kota` (
  `id_kota` int(255) NOT NULL,
  `nama_kota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kota`
--

INSERT INTO `t_kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Bandung Kota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_label`
--

CREATE TABLE `t_label` (
  `id_label` int(255) NOT NULL,
  `nama_label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_label`
--

INSERT INTO `t_label` (`id_label`, `nama_label`) VALUES
(1, 'dompet'),
(2, 'STNK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pesan`
--

CREATE TABLE `t_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subjek` varchar(25) NOT NULL,
  `pesan` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `hapus` tinyint(1) NOT NULL,
  `waktu` datetime NOT NULL,
  `waktu_delete` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pesan`
--

INSERT INTO `t_pesan` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`, `status`, `hapus`, `waktu`, `waktu_delete`) VALUES
(37, 'lostandfound', 'red.army@my.gavilan.edu', 'asasasa', 'asasasasas', 0, 0, '2019-01-10 17:14:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_univ`
--

CREATE TABLE `t_univ` (
  `id_univ` int(255) NOT NULL,
  `id_kota` int(255) NOT NULL,
  `nama_univ` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_univ`
--

INSERT INTO `t_univ` (`id_univ`, `id_kota`, `nama_univ`) VALUES
(1, 1, 'Universitas Komputer Indonesia'),
(2, 1, 'ITB'),
(3, 1, 'ITHB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(255) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `file_foto` varchar(100) DEFAULT NULL,
  `file_ktp` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `nik`, `nama`, `email`, `password`, `alamat`, `file_foto`, `file_ktp`, `status`) VALUES
(8, 'utut', 'utut', 'ututardia@gmail.com', 'a00ef087ab5a5987ade38555f3a341f90f7ee3a7', 'Bandung', 'feature-1.jpg', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_barang`
--
ALTER TABLE `t_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_label` (`id_label`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_univ` (`id_univ`);

--
-- Indexes for table `t_kota`
--
ALTER TABLE `t_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `t_label`
--
ALTER TABLE `t_label`
  ADD PRIMARY KEY (`id_label`);

--
-- Indexes for table `t_pesan`
--
ALTER TABLE `t_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `t_univ`
--
ALTER TABLE `t_univ`
  ADD PRIMARY KEY (`id_univ`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `id_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_label`
--
ALTER TABLE `t_label`
  MODIFY `id_label` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_pesan`
--
ALTER TABLE `t_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `t_univ`
--
ALTER TABLE `t_univ`
  MODIFY `id_univ` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_barang`
--
ALTER TABLE `t_barang`
  ADD CONSTRAINT `t_barang_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `t_kota` (`id_kota`),
  ADD CONSTRAINT `t_barang_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`),
  ADD CONSTRAINT `t_barang_ibfk_4` FOREIGN KEY (`id_univ`) REFERENCES `t_univ` (`id_univ`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `t_barang_ibfk_5` FOREIGN KEY (`id_label`) REFERENCES `t_label` (`id_label`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_univ`
--
ALTER TABLE `t_univ`
  ADD CONSTRAINT `t_univ_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `t_kota` (`id_kota`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

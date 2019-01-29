-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2019 pada 12.42
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
(15, 1, 1, 2, 11, 'stnk motor yamaha', 'stnk.jpg', 'stnk di temukan di dekat bogaraso', 1, '2019-01-29'),
(16, 1, 3, 1, 11, 'dompet louis vuitton', 'maxresdefault.jpg', 'dompet merk louis vuitton warna coklat ditemukan dekat kafe double 8 ', 1, '2019-01-29'),
(17, 1, 1, 3, 11, 'kunci motor', 'khonda.jpg', 'kunci motor honda tanpa gantungan, ditemukan di parkiran dago', 1, '2019-01-29'),
(18, 1, 2, 4, 11, 'iphone 5s', '5s.jpg', 'iphone 5s warna putih, ditemukan di jalan ganesha ITB', 1, '2019-01-29'),
(19, 1, 1, 3, 11, 'kunci motor', 'vespa.jpg', 'kunci motor vespa matic, ditemukan di basement b3 unikom', 1, '2019-01-29'),
(20, 1, 2, 3, 11, 'kunci mobil', 'mercy.jpg', 'kunci mobil mercedes benz warna hitam, ditemukan di dekat mesjid salman ITB', 1, '2019-01-29'),
(21, 1, 1, 5, 11, 'SIM motor', 'sim.jpg', 'sim motor atas nama contoh doang, ditemukan dekat mcd simpang dago ', 1, '2019-01-29');

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
(1, 'Bandung Kota'),
(2, 'Bandung Barat'),
(3, 'Bandung Timur'),
(4, 'Kota Cimahi'),
(5, 'Bandung Selatan'),
(6, 'Cimahi Selatan & Utara');

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
(2, 'STNK'),
(3, 'kunci'),
(4, 'handphone'),
(5, 'SIM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_message`
--

CREATE TABLE `t_message` (
  `id_message` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_user_tujuan` int(255) NOT NULL,
  `subjek` varchar(25) NOT NULL,
  `pesan` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `hapus` tinyint(1) NOT NULL DEFAULT '0',
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_message`
--

INSERT INTO `t_message` (`id_message`, `id_user`, `id_user_tujuan`, `subjek`, `pesan`, `status`, `hapus`, `waktu`) VALUES
(2, 10, 11, 'Test', 'Tes tis', 1, 0, '2019-01-29 16:28:07'),
(3, 10, 11, 'test', 'testis', 0, 0, '2019-01-29 16:30:30');

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
(10, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'avatar.png', NULL, 1),
(11, '10116254', 'Ferri', 'ferrilasmihalim@email.unikom.ac.id', 'c736084b17a2161bdc7c2a7129459375752ee858', 'Cipedes Bandung', 'IMG-20171218-WA0007.png', NULL, 1);

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
-- Indexes for table `t_message`
--
ALTER TABLE `t_message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `id_user` (`id_user`);

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
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_barang`
--
ALTER TABLE `t_barang`
  MODIFY `id_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `t_label`
--
ALTER TABLE `t_label`
  MODIFY `id_label` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_message`
--
ALTER TABLE `t_message`
  MODIFY `id_message` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_pesan`
--
ALTER TABLE `t_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `t_univ`
--
ALTER TABLE `t_univ`
  MODIFY `id_univ` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- Ketidakleluasaan untuk tabel `t_message`
--
ALTER TABLE `t_message`
  ADD CONSTRAINT `t_message_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_univ`
--
ALTER TABLE `t_univ`
  ADD CONSTRAINT `t_univ_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `t_kota` (`id_kota`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

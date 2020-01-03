-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2019 pada 05.00
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnnkotasby`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bb`
--

CREATE TABLE `tb_bb` (
  `id_bb` int(255) NOT NULL,
  `nama_bb` text NOT NULL,
  `jenis_bb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(255) NOT NULL,
  `kategori_kegiatan` varchar(255) NOT NULL,
  `tempat_kegiatan` varchar(100) NOT NULL,
  `sasaran_kegiatan` text NOT NULL,
  `jml_peserta_kegiatan` varchar(100) NOT NULL,
  `biaya_kegiatan` varchar(255) NOT NULL,
  `keterangan_kegiatan` text NOT NULL,
  `id_petugas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lkn`
--

CREATE TABLE `tb_lkn` (
  `id_lkn` int(255) NOT NULL,
  `tgl_lkn` datetime NOT NULL,
  `tkp_lkn` varchar(255) NOT NULL,
  `pasal_lkn` varchar(255) NOT NULL,
  `modus_operandi_lkn` varchar(255) NOT NULL,
  `jumlah_bb_lkn` int(100) NOT NULL,
  `satuan_bb_lkn` int(100) NOT NULL,
  `asal_barang_lkn` varchar(100) NOT NULL,
  `id_petugas` int(255) NOT NULL,
  `id_bb` int(255) NOT NULL,
  `id_tsk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(255) NOT NULL,
  `username_petugas` varchar(255) NOT NULL,
  `nama_petugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tsk`
--

CREATE TABLE `tb_tsk` (
  `id_tsk` int(255) NOT NULL,
  `alamat_tsk` varchar(255) NOT NULL,
  `kelurahan_tsk` text NOT NULL,
  `kecamatan_tsk` text NOT NULL,
  `ttl_tsk` int(255) NOT NULL,
  `jk_tsk` text NOT NULL,
  `usia_tsk` int(10) NOT NULL,
  `pekerjaan_tsk` text NOT NULL,
  `pendidikan_tsk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bb`
--
ALTER TABLE `tb_bb`
  ADD PRIMARY KEY (`id_bb`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tb_lkn`
--
ALTER TABLE `tb_lkn`
  ADD PRIMARY KEY (`id_lkn`),
  ADD KEY `id_tsk` (`id_tsk`),
  ADD KEY `id_bb` (`id_bb`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_tsk`
--
ALTER TABLE `tb_tsk`
  ADD PRIMARY KEY (`id_tsk`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD CONSTRAINT `tb_kegiatan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `tb_lkn`
--
ALTER TABLE `tb_lkn`
  ADD CONSTRAINT `tb_lkn_ibfk_1` FOREIGN KEY (`id_tsk`) REFERENCES `tb_tsk` (`id_tsk`),
  ADD CONSTRAINT `tb_lkn_ibfk_2` FOREIGN KEY (`id_bb`) REFERENCES `tb_bb` (`id_bb`),
  ADD CONSTRAINT `tb_lkn_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

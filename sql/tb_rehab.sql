-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Des 2019 pada 07.28
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
-- Struktur dari tabel `tb_rehab`
--

CREATE TABLE `tb_rehab` (
  `id_registrasi_klien` int(20) NOT NULL,
  `nama_klien` text NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `usia` int(20) NOT NULL,
  `no_identitas` int(50) NOT NULL,
  `pendidikan_terakhi` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `tempat_rehab` text NOT NULL,
  `hasil_dari` text NOT NULL,
  `kecamatan` text NOT NULL,
  `id_bb` int(20) NOT NULL,
  `id_petugas` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_rehab`
--
ALTER TABLE `tb_rehab`
  ADD PRIMARY KEY (`id_registrasi_klien`),
  ADD KEY `id_bb` (`id_bb`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_rehab`
--
ALTER TABLE `tb_rehab`
  ADD CONSTRAINT `tb_rehab_ibfk_1` FOREIGN KEY (`id_bb`) REFERENCES `tb_bb` (`id_bb`),
  ADD CONSTRAINT `tb_rehab_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

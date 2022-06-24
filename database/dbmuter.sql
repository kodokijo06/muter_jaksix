-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2020 pada 19.35
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmuter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jpm`
--

CREATE TABLE `t_jpm` (
  `nip` varchar(18) NOT NULL,
  `jpm` varchar(1) NOT NULL,
  `nilai` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kedudukan`
--

CREATE TABLE `t_kedudukan` (
  `nip` varchar(18) NOT NULL,
  `kedudukan` varchar(1) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `seksi` varchar(1) NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_minat`
--

CREATE TABLE `t_minat` (
  `nip` varchar(18) NOT NULL,
  `seksi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pegawai`
--

CREATE TABLE `t_pegawai` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_kawin` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ref_jpm`
--

CREATE TABLE `t_ref_jpm` (
  `kode` varchar(1) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_ref_jpm`
--

INSERT INTO `t_ref_jpm` (`kode`, `keterangan`) VALUES
('1', 'communication skill'),
('2', 'analisis'),
('3', 'kepuasan stakeholder'),
('4', 'integritas'),
('5', 'hard competency');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ref_kedudukan`
--

CREATE TABLE `t_ref_kedudukan` (
  `kode` varchar(1) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_ref_kedudukan`
--

INSERT INTO `t_ref_kedudukan` (`kode`, `keterangan`) VALUES
('1', 'Front Office'),
('2', 'Middle Office'),
('3', 'Back Office');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_seksi`
--

CREATE TABLE `t_seksi` (
  `kode` varchar(1) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_seksi`
--

INSERT INTO `t_seksi` (`kode`, `keterangan`) VALUES
('1', 'Pencairan Dana dan Manajemen Satker (A2)'),
('2', 'Pencairan Dana (A1)'),
('3', 'Verifikasi akuntansi dan Kepatuhan Internal (A2)'),
('4', 'Verifikasi Akuntansi (A1)'),
('5', 'Bank'),
('6', 'Manajemen Satker dan Kepatuhan Internal (A1)'),
('7', 'Sub Bagian Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sertifikat`
--

CREATE TABLE `t_sertifikat` (
  `id` int(10) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `seksi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_status_kawin`
--

CREATE TABLE `t_status_kawin` (
  `kode` varchar(4) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_status_kawin`
--

INSERT INTO `t_status_kawin` (`kode`, `keterangan`) VALUES
('1000', 'Belum/Tidak Kawin'),
('1100', 'Kawin Anak 0'),
('1101', 'Kawin Anak 1'),
('1102', 'Kawin Anak 2'),
('1103', 'Kawin Anak 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id` int(3) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_jpm`
--
ALTER TABLE `t_jpm`
  ADD PRIMARY KEY (`nip`,`jpm`),
  ADD KEY `jpm` (`jpm`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `t_kedudukan`
--
ALTER TABLE `t_kedudukan`
  ADD PRIMARY KEY (`nip`,`kedudukan`,`seksi`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kedudukan` (`kedudukan`),
  ADD KEY `seksi` (`seksi`);

--
-- Indexes for table `t_minat`
--
ALTER TABLE `t_minat`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `seksi` (`seksi`);

--
-- Indexes for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `status_kawin` (`status_kawin`);

--
-- Indexes for table `t_ref_jpm`
--
ALTER TABLE `t_ref_jpm`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `t_ref_kedudukan`
--
ALTER TABLE `t_ref_kedudukan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `t_seksi`
--
ALTER TABLE `t_seksi`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `t_sertifikat`
--
ALTER TABLE `t_sertifikat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`),
  ADD KEY `seksi` (`seksi`);

--
-- Indexes for table `t_status_kawin`
--
ALTER TABLE `t_status_kawin`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_sertifikat`
--
ALTER TABLE `t_sertifikat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_jpm`
--
ALTER TABLE `t_jpm`
  ADD CONSTRAINT `t_jpm_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `t_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_jpm_ibfk_2` FOREIGN KEY (`jpm`) REFERENCES `t_ref_jpm` (`kode`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_kedudukan`
--
ALTER TABLE `t_kedudukan`
  ADD CONSTRAINT `t_kedudukan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `t_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_kedudukan_ibfk_2` FOREIGN KEY (`kedudukan`) REFERENCES `t_ref_kedudukan` (`kode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `t_kedudukan_ibfk_3` FOREIGN KEY (`seksi`) REFERENCES `t_seksi` (`kode`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_minat`
--
ALTER TABLE `t_minat`
  ADD CONSTRAINT `t_minat_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `t_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_minat_ibfk_2` FOREIGN KEY (`seksi`) REFERENCES `t_seksi` (`kode`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD CONSTRAINT `t_pegawai_ibfk_1` FOREIGN KEY (`status_kawin`) REFERENCES `t_status_kawin` (`kode`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_sertifikat`
--
ALTER TABLE `t_sertifikat`
  ADD CONSTRAINT `t_sertifikat_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `t_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

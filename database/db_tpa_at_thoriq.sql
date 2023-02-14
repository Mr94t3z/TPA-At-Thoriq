-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2023 at 10:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tpa_at_thoriq`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(126) NOT NULL,
  `jenjang_pendidikan` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_identitas_lembaga`
--

CREATE TABLE `tbl_identitas_lembaga` (
  `id` int(11) NOT NULL,
  `jenis_lembaga` varchar(126) NOT NULL,
  `nomor_statistik_lembaga` varchar(126) NOT NULL,
  `nama_lembaga` varchar(126) NOT NULL,
  `no_sk` varchar(126) NOT NULL,
  `tgl_sk` date NOT NULL,
  `no_akta_pendirian` varchar(126) NOT NULL,
  `tgl_akta_pendirian` date NOT NULL,
  `alamat` varchar(126) NOT NULL,
  `kecamatan` varchar(126) NOT NULL,
  `kabupaten` varchar(126) NOT NULL,
  `provinsi` varchar(126) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `no_fax` int(11) NOT NULL,
  `email` varchar(126) NOT NULL,
  `website` varchar(126) NOT NULL,
  `titik_koordinat` varchar(126) NOT NULL,
  `akreditasi` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kepala_pendidikan`
--

CREATE TABLE `tbl_kepala_pendidikan` (
  `id` int(11) NOT NULL,
  `nama` varchar(126) NOT NULL,
  `status_kepegawaian` varchar(126) NOT NULL,
  `pendidikan_terakhir` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kepala_pendidikan`
--

INSERT INTO `tbl_kepala_pendidikan` (`id`, `nama`, `status_kepegawaian`, `pendidikan_terakhir`) VALUES
(1, 'ADANG RUKMANA', 'NON PNS', 'SD/MI/Sederajat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarpras_listrik_dan_internet`
--

CREATE TABLE `tbl_sarpras_listrik_dan_internet` (
  `id` int(11) NOT NULL,
  `listrik_daya` varchar(126) NOT NULL,
  `listrik_sumber` varchar(126) NOT NULL,
  `internet_provider` varchar(126) NOT NULL,
  `internet_kualitas` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarpras_luas_tanah`
--

CREATE TABLE `tbl_sarpras_luas_tanah` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(126) NOT NULL,
  `luas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarpras_pendukung`
--

CREATE TABLE `tbl_sarpras_pendukung` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(126) NOT NULL,
  `milik` int(11) NOT NULL,
  `penggunaan` int(11) NOT NULL,
  `baik` int(11) NOT NULL,
  `rusak` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarpras_penggunaan_lahan`
--

CREATE TABLE `tbl_sarpras_penggunaan_lahan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(126) NOT NULL,
  `milik` int(11) NOT NULL,
  `penggunaan` int(11) NOT NULL,
  `bersertifikat` int(11) NOT NULL,
  `belum_sertifikat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa_aktif`
--

CREATE TABLE `tbl_siswa_aktif` (
  `id` int(11) NOT NULL,
  `nisn` varchar(126) NOT NULL,
  `nama` varchar(126) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `kelas` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(126) NOT NULL,
  `email` varchar(126) NOT NULL,
  `password` varchar(126) NOT NULL,
  `roles` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_identitas_lembaga`
--
ALTER TABLE `tbl_identitas_lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kepala_pendidikan`
--
ALTER TABLE `tbl_kepala_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sarpras_listrik_dan_internet`
--
ALTER TABLE `tbl_sarpras_listrik_dan_internet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sarpras_luas_tanah`
--
ALTER TABLE `tbl_sarpras_luas_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sarpras_pendukung`
--
ALTER TABLE `tbl_sarpras_pendukung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sarpras_penggunaan_lahan`
--
ALTER TABLE `tbl_sarpras_penggunaan_lahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siswa_aktif`
--
ALTER TABLE `tbl_siswa_aktif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_identitas_lembaga`
--
ALTER TABLE `tbl_identitas_lembaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kepala_pendidikan`
--
ALTER TABLE `tbl_kepala_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sarpras_listrik_dan_internet`
--
ALTER TABLE `tbl_sarpras_listrik_dan_internet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sarpras_luas_tanah`
--
ALTER TABLE `tbl_sarpras_luas_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sarpras_pendukung`
--
ALTER TABLE `tbl_sarpras_pendukung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sarpras_penggunaan_lahan`
--
ALTER TABLE `tbl_sarpras_penggunaan_lahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_siswa_aktif`
--
ALTER TABLE `tbl_siswa_aktif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 01:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_14_105248_create_tbl_users', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(126) DEFAULT NULL,
  `jenjang_pendidikan` varchar(126) DEFAULT NULL,
  `photo` varchar(126) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama`, `jenjang_pendidikan`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'TINA ELIAWATI', 'SMA/MA/Sederajat', 'guru/Z2vppZS0N7GooRtGUDY7KYb5xIz6CXErfy9BWat7.png', '2023-02-15 12:51:54', '2023-02-20 10:06:00'),
(4, 'WAWAT SETIAWATI', 'SMP/MTs/Sederajat', NULL, '2023-02-15 08:27:33', '2023-02-15 08:27:33'),
(6, 'AI SADIAH', 'SMP/MTs/Sederajat', NULL, '2023-02-16 21:17:46', '2023-02-16 21:17:46'),
(7, 'NENG RATNASARI', 'D4/S1', NULL, '2023-02-16 21:18:10', '2023-02-16 21:18:10'),
(8, 'LASMI WARTINI', 'SMP/MTs/Sederajat', NULL, '2023-02-16 21:18:25', '2023-02-16 21:18:25'),
(9, 'RINI NURAINI', 'SMA/MA/Sederajat', NULL, '2023-02-16 21:18:43', '2023-02-16 21:18:43'),
(10, 'DIDIN SARIPUDIN', 'SMP/MTs/Sederajat', NULL, '2023-02-16 21:19:07', '2023-02-16 21:19:07'),
(12, 'DIDIN SARIPUDIN', 'SMP/MTs/Sederajat', 'guru/1DS7Z0P25PsBVsr0jXpjMwPQ10K5iGepw2cohtlx.jpg', '2023-02-20 10:09:02', '2023-02-20 10:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_identitas_lembaga`
--

CREATE TABLE `tbl_identitas_lembaga` (
  `id` int(11) NOT NULL,
  `jenis_lembaga` varchar(126) DEFAULT NULL,
  `nomor_statistik_lembaga` varchar(126) DEFAULT NULL,
  `nama_lembaga` varchar(126) DEFAULT NULL,
  `no_sk` varchar(126) DEFAULT NULL,
  `tgl_sk` date DEFAULT NULL,
  `no_akta_pendirian` varchar(126) DEFAULT NULL,
  `tgl_akta_pendirian` date DEFAULT NULL,
  `alamat` varchar(126) DEFAULT NULL,
  `kecamatan` varchar(126) DEFAULT NULL,
  `kabupaten` varchar(126) DEFAULT NULL,
  `provinsi` varchar(126) DEFAULT NULL,
  `kode_pos` varchar(126) DEFAULT NULL,
  `no_telp` varchar(126) DEFAULT NULL,
  `no_fax` varchar(136) DEFAULT NULL,
  `email` varchar(126) DEFAULT NULL,
  `website` varchar(126) DEFAULT NULL,
  `titik_koordinat` varchar(126) DEFAULT NULL,
  `akreditasi` varchar(126) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_identitas_lembaga`
--

INSERT INTO `tbl_identitas_lembaga` (`id`, `jenis_lembaga`, `nomor_statistik_lembaga`, `nama_lembaga`, `no_sk`, `tgl_sk`, `no_akta_pendirian`, `tgl_akta_pendirian`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `no_telp`, `no_fax`, `email`, `website`, `titik_koordinat`, `akreditasi`, `created_at`, `updated_at`) VALUES
(1, 'LPQ', '411232110938', 'TPA AT-THORIQ', NULL, '2018-01-02', '01/2018', '2018-01-02', 'Dusun Babakan Desa Pamulihan, RT 2, RW 8, Kode Pos 45365', 'Pamulihan', 'Sumedang', 'Jawa Barat', '45365', '08112347187', '0', 'nengratnaaari1810@gmail.com', NULL, 'Lintang : -6.878794 Bujur : 107.828998', NULL, '2023-02-16 14:29:33', '2023-02-16 08:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kepala_pendidikan`
--

CREATE TABLE `tbl_kepala_pendidikan` (
  `id` int(11) NOT NULL,
  `nama` varchar(126) DEFAULT NULL,
  `status_kepegawaian` varchar(126) DEFAULT NULL,
  `pendidikan_terakhir` varchar(126) DEFAULT NULL,
  `photo` varchar(126) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_kepala_pendidikan`
--

INSERT INTO `tbl_kepala_pendidikan` (`id`, `nama`, `status_kepegawaian`, `pendidikan_terakhir`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Adang Rukmana', 'non-PNS', 'SD/MI/Sederajat', 'kepala-pendidikan/FbHKniIubDSfUWe8w8cgGcX99uH8fkqsTQTYBKIm.jpg', '2023-02-15 11:41:01', '2023-02-20 08:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarpras_listrik_dan_internet`
--

CREATE TABLE `tbl_sarpras_listrik_dan_internet` (
  `id` int(11) NOT NULL,
  `listrik_daya` varchar(126) DEFAULT NULL,
  `listrik_sumber` varchar(126) DEFAULT NULL,
  `internet_provider` varchar(126) DEFAULT NULL,
  `internet_kualitas` varchar(126) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_sarpras_listrik_dan_internet`
--

INSERT INTO `tbl_sarpras_listrik_dan_internet` (`id`, `listrik_daya`, `listrik_sumber`, `internet_provider`, `internet_kualitas`, `created_at`, `updated_at`) VALUES
(1, '450 W', 'PLN', 'Indihome', 'Baik', '2023-02-16 14:03:41', '2023-02-16 21:20:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarpras_luas_tanah`
--

CREATE TABLE `tbl_sarpras_luas_tanah` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(126) DEFAULT NULL,
  `luas` varchar(126) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_sarpras_luas_tanah`
--

INSERT INTO `tbl_sarpras_luas_tanah` (`id`, `keterangan`, `luas`, `created_at`, `updated_at`) VALUES
(1, 'Tanah Milik Sendiri Bersertifikat', '0', '2023-02-15 21:06:45', '2023-02-16 04:07:25'),
(3, 'Tanah Milik Sendiri Tidak Bersertifikat', '0', '2023-02-15 21:09:22', '2023-02-15 21:09:22'),
(5, 'Tanah Wakaf Bersertifikat', '0', '2023-02-16 20:54:39', '2023-02-16 20:54:39'),
(6, 'Tanah Wakaf Tidak Bersertifikat', '0', '2023-02-16 20:55:00', '2023-02-16 20:55:00'),
(7, 'Tanah Sewa Bersertifikat', '0', '2023-02-16 20:55:14', '2023-02-16 20:55:14'),
(8, 'Tanah Sewa Tidak Bersertifikat', '0', '2023-02-16 20:55:29', '2023-02-16 20:55:29'),
(9, 'Tanah Pinjaman Bersertifikat', '700', '2023-02-16 20:55:50', '2023-02-16 20:55:50'),
(10, 'Tanah Pinjaman Tidak Bersertifikat', '0', '2023-02-16 20:56:08', '2023-02-16 20:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarpras_pendukung`
--

CREATE TABLE `tbl_sarpras_pendukung` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(126) DEFAULT NULL,
  `milik` int(11) DEFAULT NULL,
  `penggunaan` int(11) DEFAULT NULL,
  `baik` int(11) DEFAULT NULL,
  `rusak` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_sarpras_pendukung`
--

INSERT INTO `tbl_sarpras_pendukung` (`id`, `keterangan`, `milik`, `penggunaan`, `baik`, `rusak`, `created_at`, `updated_at`) VALUES
(1, 'Kursi Santri', 6, 4, 4, 6, '2023-02-16 13:08:48', '2023-02-16 06:20:27'),
(2, 'Meja Santri', 20, 5, 5, 20, '2023-02-16 06:15:53', '2023-02-16 06:15:53'),
(4, 'Kursi Ustad', 1, 0, 0, 1, '2023-02-16 21:07:22', '2023-02-16 21:07:22'),
(5, 'Meja Ustad', 1, 0, 0, 1, '2023-02-16 21:07:50', '2023-02-16 21:07:50'),
(6, 'Papan Tulis', 0, 3, 3, 0, '2023-02-16 21:08:29', '2023-02-16 21:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sarpras_penggunaan_lahan`
--

CREATE TABLE `tbl_sarpras_penggunaan_lahan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(126) DEFAULT NULL,
  `milik` int(11) DEFAULT NULL,
  `penggunaan` int(11) DEFAULT NULL,
  `bersertifikat` int(11) DEFAULT NULL,
  `belum_sertifikat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_sarpras_penggunaan_lahan`
--

INSERT INTO `tbl_sarpras_penggunaan_lahan` (`id`, `keterangan`, `milik`, `penggunaan`, `bersertifikat`, `belum_sertifikat`, `created_at`, `updated_at`) VALUES
(2, 'Bangunan', 140, 140, 280, 0, '2023-02-16 00:11:26', '2023-02-16 00:19:52'),
(3, 'Lapangan', 0, 0, 0, 0, '2023-02-16 21:01:58', '2023-02-16 21:01:58'),
(4, 'Halaman', 50, 50, 50, 0, '2023-02-16 21:03:00', '2023-02-16 21:03:00'),
(5, 'Taman', 10, 10, 10, 0, '2023-02-16 21:03:56', '2023-02-16 21:03:56'),
(6, 'Tanah', 24, 24, 24, 0, '2023-02-16 21:04:25', '2023-02-16 21:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa_aktif`
--

CREATE TABLE `tbl_siswa_aktif` (
  `id` int(11) NOT NULL,
  `nisn` varchar(126) DEFAULT NULL,
  `nama` varchar(126) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `kelas` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_siswa_aktif`
--

INSERT INTO `tbl_siswa_aktif` (`id`, `nisn`, `nama`, `jenis_kelamin`, `kelas`, `created_at`, `updated_at`) VALUES
(2, '3153327590', 'ADE HIKMATULMAULA', 'L', 1, '2023-02-15 14:10:54', '2023-02-15 07:11:50'),
(7, '0158887936', 'ADELIA PUTRI ALMIRA', 'P', 1, '2023-02-16 11:16:33', '2023-02-16 11:16:33'),
(8, '000000000000', 'ADISTI GUSTIANA', 'P', 5, '2023-02-16 11:16:57', '2023-02-16 11:16:57'),
(9, '0079991214', 'ADRIAN NURKHOLIK', 'L', 7, '2023-02-16 11:17:19', '2023-02-16 11:17:19'),
(10, '0097969151', 'AGUS MUHAMAD RIZKI', 'L', 7, '2023-02-16 11:17:40', '2023-02-16 11:17:40'),
(11, '3162918516', 'AKILA ANGGRAENI', 'P', 0, '2023-02-16 12:26:42', '2023-02-16 12:26:42'),
(12, '000000000000', 'ALISYA AYU NURHABIBAH', 'P', 6, '2023-02-17 09:11:51', '2023-02-17 09:11:51'),
(13, '00000000000', 'ALYA NURAZIZAH', 'P', 3, '2023-02-17 09:12:27', '2023-02-17 09:12:27'),
(14, '0103446031', 'AMELIA FUTRI', 'P', 6, '2023-02-17 09:12:55', '2023-02-17 09:12:55'),
(15, '0143629827', 'ANDIKA MUHAMAD RIZKI', 'L', 2, '2023-02-17 09:13:40', '2023-02-17 09:13:40'),
(16, '3126422826', 'ANDIKA TARJA HARAFA', 'L', 4, '2023-02-17 09:14:12', '2023-02-17 09:14:12'),
(17, '0000000000', 'ANINDITAAYUDIA INARA', 'P', 0, '2023-02-17 09:14:46', '2023-02-17 09:14:46'),
(18, '000000000000', 'ARSYA VIRENDRA RAMADAN', 'L', 0, '2023-02-17 09:15:13', '2023-02-17 09:15:13'),
(19, '000000000000', 'ARSYLA MIKAYLA PUTRI', 'P', 0, '2023-02-17 09:15:36', '2023-02-17 09:15:36'),
(20, '000000000000', 'AULIA TIARA NURSALSABILA', 'P', 0, '2023-02-17 09:16:05', '2023-02-17 09:16:05'),
(21, '0142622116', 'BALKIS ADZRA NURHIKMAH', 'P', 2, '2023-02-17 09:16:29', '2023-02-17 09:16:29'),
(22, '002021013227', 'CINTYA AISYAH FAUZIYAH', 'P', 1, '2023-02-17 09:16:55', '2023-02-17 09:16:55'),
(23, '0154594312', 'DAFA MUHAMAD ATALAH', 'L', 1, '2023-02-17 09:17:23', '2023-02-17 09:17:23'),
(24, '0000000000000', 'DENI PURNAMA', 'L', 2, '2023-02-17 09:17:58', '2023-02-17 09:17:58'),
(25, '0117945456', 'DEWI NUROHMAWATI', 'P', 5, '2023-02-17 09:18:21', '2023-02-17 09:18:21'),
(26, '00000000000', 'DIANARDIANSYAH', 'L', 4, '2023-02-17 09:18:46', '2023-02-17 09:18:46'),
(27, '0113577167', 'DINAR NURZILA LATIFAH', 'P', 5, '2023-02-17 09:19:12', '2023-02-17 09:19:12'),
(28, '0139321975', 'DZIKRI MUHAMMAD KHOLIFAH', 'L', 4, '2023-02-17 09:19:51', '2023-02-17 09:19:51'),
(29, '0123197103', 'ELSA NURFAUZIYAH', 'P', 5, '2023-02-17 09:20:42', '2023-02-17 09:20:42'),
(30, '00000000000', 'FADLI MUHAMMAD FAHREZA', 'L', 0, '2023-02-17 09:21:09', '2023-02-17 09:21:09'),
(31, '0114473819', 'FAHMI RISNANDAR', 'L', 6, '2023-02-17 09:21:51', '2023-02-17 09:21:51'),
(32, '000000000000', 'FAUZAN SAPUTRA', 'L', 0, '2023-02-17 09:22:26', '2023-02-17 09:22:26'),
(33, '3179449118', 'FIRMAN MAULANA', 'L', 0, '2023-02-17 09:22:51', '2023-02-17 09:22:51'),
(34, '00000000000', 'GILANG PUTRA PRATAMA', 'L', 3, '2023-02-17 09:23:14', '2023-02-17 09:23:14'),
(35, '00000000000', 'HAFIZ MUHAMMAD HIZAM', 'L', 0, '2023-02-17 09:23:35', '2023-02-17 09:23:35'),
(36, '3140575956', 'IBNU RAMADAN', 'L', 2, '2023-02-17 17:42:39', '2023-02-17 17:42:39'),
(37, '0109930745', 'INDIRA RAMADANI', 'P', 6, '2023-02-17 17:43:05', '2023-02-17 17:43:05'),
(38, '0143076847', 'INDRA KURNIAWAN', 'L', 2, '2023-02-17 17:43:35', '2023-02-17 17:43:35'),
(39, '0107115797', 'KEYSHA OKTAVIANI', 'P', 6, '2023-02-17 17:44:10', '2023-02-17 17:44:10'),
(40, '3169103993', 'KEYSHA SHAKILA AFIFAH', 'P', 0, '2023-02-17 17:44:43', '2023-02-17 17:44:43'),
(41, '3143678556', 'KHEYLA KHANZA ALMAIRA', 'P', 2, '2023-02-17 17:45:18', '2023-02-17 17:45:18'),
(42, '0115319240', 'KHOIRUL AGUS KURNIA', 'L', 5, '2023-02-17 17:45:43', '2023-02-17 17:45:43'),
(43, '00000000000000', 'KORIAH LILLAH', 'P', 1, '2023-02-17 17:46:12', '2023-02-17 17:46:12'),
(44, '0137576274', 'KUSTIAWAN NUGRAHA', 'L', 3, '2023-02-17 17:46:34', '2023-02-17 17:46:34'),
(45, '0105468702', 'LIVIA TIKA', 'P', 6, '2023-02-17 17:47:05', '2023-02-17 17:47:05'),
(46, '0135626997', 'MAULIDZA BINTANGSYAHFRUDIN', 'L', 4, '2023-02-17 17:47:26', '2023-02-17 17:47:26'),
(47, '000000000000', 'MELINDA YULIANTI', 'P', 4, '2023-02-17 17:47:49', '2023-02-17 17:47:49'),
(48, '0146461758', 'MIQAYLA HUMAIRAH', 'P', 2, '2023-02-17 17:48:32', '2023-02-17 17:48:32'),
(49, '3155995096', 'MUHAMMAD AZKA PRATAMA SIDIK', 'L', 1, '2023-02-17 17:49:34', '2023-02-17 17:49:34'),
(50, '00000000000', 'MUHAMMAD FARID', 'L', 2, '2023-02-17 17:50:00', '2023-02-17 17:50:00'),
(51, '00000000000', 'MUHAMMAD KHAIRIL FAUZAN', 'L', 3, '2023-02-17 17:50:21', '2023-02-17 17:50:21'),
(52, '3151256349', 'MUHAMMAD REZA SYAHPUTRA', 'L', 1, '2023-02-17 17:50:45', '2023-02-17 17:50:45'),
(53, '00000000000000', 'MUHAMMAD RIZAL RAMDANI', 'L', 4, '2023-02-17 17:51:06', '2023-02-17 17:51:06'),
(54, '0000000000000', 'MUHAMMAD SOPYAN FIRDAUS', 'L', 6, '2023-02-17 17:51:35', '2023-02-17 17:51:35'),
(55, '0143444099', 'MUHAMMAD SYAHDAN HERMAWAN', 'L', 2, '2023-02-17 17:52:22', '2023-02-17 17:52:22'),
(56, '0123010058', 'NABILAH SILVA AULIA', 'P', 5, '2023-02-17 17:52:46', '2023-02-17 17:52:46'),
(57, '0147240710', 'NAILA AYU NURROHMAH', 'P', 4, '2023-02-17 17:53:09', '2023-02-17 17:53:09'),
(58, '0121167054', 'NAIMAS SITI MASITOH', 'P', 5, '2023-02-17 17:53:35', '2023-02-17 17:53:35'),
(59, '0117909014', 'NAZWA NURHATIFAH', 'P', 6, '2023-02-17 17:54:27', '2023-02-17 17:54:27'),
(60, '0098446881', 'PEDINA NURSYIPA', 'P', 6, '2023-02-17 17:55:05', '2023-02-17 17:55:05'),
(61, '0113802540', 'RACHEL HIDAYAT', 'L', 5, '2023-02-17 18:04:17', '2023-02-17 18:04:17'),
(62, '0097922795', 'RAFLI RAMADHAN', 'L', 7, '2023-02-17 18:04:42', '2023-02-17 18:04:42'),
(63, '0116444753', 'RANIA SALSABILA', 'L', 6, '2023-02-17 18:05:08', '2023-02-17 18:05:08'),
(64, '00000000000000', 'RASYA MUHAMAD ATHAYA', 'L', 0, '2023-02-17 18:05:55', '2023-02-17 18:05:55'),
(65, '0000000000000', 'RATNA NURJANAH', 'P', 5, '2023-02-17 18:06:30', '2023-02-17 18:06:30'),
(66, '00000000000', 'RENDI SUTREISNA', 'L', 6, '2023-02-17 18:07:00', '2023-02-17 18:07:00'),
(67, '0000000000000', 'RESTI', 'P', 7, '2023-02-17 18:07:23', '2023-02-17 18:07:23'),
(68, '0143294965', 'REYHAN PUTRA PININGGIT', 'L', 1, '2023-02-17 18:07:49', '2023-02-17 18:07:49'),
(69, '0106761039', 'RIDWAN MAULANA MUHAMMAD', 'L', 6, '2023-02-17 18:08:41', '2023-02-17 18:08:41'),
(70, '000000000000', 'RIFKI ADITYA RADIKA', 'L', 0, '2023-02-17 18:09:02', '2023-02-17 18:09:02'),
(71, '0000000000000', 'RITA SUGIARTI', 'P', 2, '2023-02-17 18:09:32', '2023-02-17 18:09:32'),
(72, '000000000000', 'RIZCA SABELLA MAULIDZA', 'P', 4, '2023-02-17 18:10:20', '2023-02-17 18:10:20'),
(73, '0102265350', 'RIZKI AHMAD FIRDAUS', 'L', 6, '2023-02-17 18:12:16', '2023-02-17 18:12:16'),
(74, '0121876178', 'RIZKI ALIF BUDIANSYAH', 'L', 4, '2023-02-17 18:12:59', '2023-02-17 18:12:59'),
(75, '0115986222', 'ROSMAYA', 'P', 5, '2023-02-17 18:13:45', '2023-02-17 18:13:45'),
(76, '00000000000', 'SALMA FADILAH INSANIYAH', 'P', 2, '2023-02-17 18:14:23', '2023-02-17 18:14:23'),
(77, '3185924550', 'SALSABILA KANZA ADELIA', 'P', 0, '2023-02-17 18:15:12', '2023-02-17 18:15:12'),
(78, '0000000000000', 'SANSAN ARYA PRATAMA', 'L', 0, '2023-02-17 18:15:35', '2023-02-17 18:15:35'),
(79, '3160823709', 'SILPHA WIRANJANI', 'P', 1, '2023-02-17 18:16:31', '2023-02-17 18:16:31'),
(80, '3167374679', 'SINTA AULIA RAMADHAN', 'P', 1, '2023-02-17 18:16:59', '2023-02-17 18:17:10'),
(81, '0113804795', 'SITI ANISA MUBAROKIAH', 'P', 6, '2023-02-17 18:17:41', '2023-02-17 18:17:41'),
(82, '101021013001', 'SITI KARLINA', 'P', 6, '2023-02-17 18:18:15', '2023-02-17 18:18:15'),
(83, '00000000000', 'SITI ZAHRA SEVTIYANI', 'P', 3, '2023-02-17 18:19:27', '2023-02-17 18:19:27'),
(84, '00000000000000', 'SYIFA SARIFATUL MUBAROKAH', 'P', 4, '2023-02-17 18:19:57', '2023-02-17 18:19:57'),
(85, '3141910161', 'TAUFIQ RAHMAN', 'L', 2, '2023-02-17 18:20:23', '2023-02-17 18:20:23'),
(86, '00000000000', 'WINDA PURNAMASARI', 'P', 6, '2023-02-17 18:20:52', '2023-02-17 18:20:52'),
(87, '0113764808', 'WULAN ADELIA PUTRI', 'P', 5, '2023-02-17 18:21:17', '2023-02-17 18:21:17'),
(88, '00000000000', 'ZIDAN MAULANA YUSUF', 'L', 1, '2023-02-17 18:21:39', '2023-02-17 18:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` tinyint(1) DEFAULT NULL,
  `photo` varchar(126) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `nama`, `email`, `password`, `roles`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Taopik', 'muhamadtaopik@gmail.com', '$2y$10$G6VXQ1/Q8ZyghycFBm/i0usH.NMFCAaFM.8ai.OVWZldDHmnpgm4i', 1, 'user/hCRe5BH4eXGU41I3MQ2CmQRsakVe3dKlf0IXGYQ0.jpg', '2023-02-14 07:05:32', '2023-02-20 07:36:27'),
(3, 'Rafi Rai', 'rafi.rai@gmail.com', '$2y$10$j9I812Nv/hGumAOHX3gZhubtWIX.a1HVkagjFYhRqL3f10hycldjK', 1, NULL, '2023-02-15 02:31:27', '2023-02-19 01:45:45'),
(11, 'Adiyaksa', 'adiyaksaalbara@gmail.com', '$2y$10$EimI4Aw4/Wq02mN.hd7h6uricsYyOaXkPojKFvNytyp9xlr7xw2M.', 0, 'user/clDWBW2YfWfrTBxzASvJ7lmgWKZQUo5YjgkM3Iz9.jpg', '2023-02-21 04:22:39', '2023-02-21 04:23:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_identitas_lembaga`
--
ALTER TABLE `tbl_identitas_lembaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kepala_pendidikan`
--
ALTER TABLE `tbl_kepala_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sarpras_listrik_dan_internet`
--
ALTER TABLE `tbl_sarpras_listrik_dan_internet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sarpras_luas_tanah`
--
ALTER TABLE `tbl_sarpras_luas_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sarpras_pendukung`
--
ALTER TABLE `tbl_sarpras_pendukung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sarpras_penggunaan_lahan`
--
ALTER TABLE `tbl_sarpras_penggunaan_lahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_siswa_aktif`
--
ALTER TABLE `tbl_siswa_aktif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

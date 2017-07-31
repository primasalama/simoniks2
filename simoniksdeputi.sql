-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 04:59 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simoniksdeputi`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `no` int(11) NOT NULL,
  `tanggal` text NOT NULL,
  `tglPengajuan` date NOT NULL,
  `narasiKebijakan` int(11) NOT NULL,
  `uraian` text,
  `anggaran` int(12) NOT NULL,
  `hasil` text NOT NULL,
  `tglPengajuanSpd` date NOT NULL,
  `tglSpd` date NOT NULL,
  `tglPencairan` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`no`, `tanggal`, `tglPengajuan`, `narasiKebijakan`, `uraian`, `anggaran`, `hasil`, `tglPengajuanSpd`, `tglSpd`, `tglPencairan`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(14, 'Minggu II Februari', '0000-00-00', 63, 'rapat koordinasi penyusunan rencana aksi nasional pengelolaan ikan hias ', 0, '', '2017-03-23', '2017-03-31', '2017-03-20', '2017-02-07 01:55:57', '0000-00-00 00:00:00', 2, 2),
(15, '14 Februari 2017', '0000-00-00', 66, 'Sosialisasi hasil Senior Official Meeting CTI CFF ke 13 dan rencana tindak lanjut di tingkat nasional', 0, 'Draft NPOA CTI-CFF Indonesia', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 01:56:26', '2017-02-24 07:57:11', 2, 2),
(16, 'minggu II Maret\r\n', '0000-00-00', 22, 'sosialisasi terkait dengan Dwelling Time pada event bursa pariwisata internasional terbesar(ITB Berlin), dan Belanda\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:02:40', '2017-02-07 02:04:31', 4, 4),
(17, 'Minggu II Maret', '0000-00-00', 28, 'sosialisasi terkait dengan BVK pada event bursa pariwisata internasional terbesar(ITB Berlin), dan Belanda\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:04:11', '0000-00-00 00:00:00', 4, 4),
(18, 'Minggu II Maret', '0000-00-00', 33, 'sosialisasi terkait dengan yacht pada event bursa pariwisata internasional terbesar(ITB Berlin), dan Belanda\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:05:01', '0000-00-00 00:00:00', 4, 4),
(19, 'Minggu III Maret', '0000-00-00', 33, 'sosialisasi yacht dan cruise pada event seatrade cruise global di miami florida\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:06:53', '0000-00-00 00:00:00', 4, 4),
(20, 'Minggu IV Maret - minggu I April\r\n', '0000-00-00', 33, 'sosialisasi yacht dan promosi sail sabang di auckland, opua, whangerei (new zealand)\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:07:59', '0000-00-00 00:00:00', 4, 4),
(21, '7-10 Maret 2017', '0000-00-00', 63, 'Mengikuti Sidang IPBES-5 (Intergovernmental Science-Policy on Biodiversity and Ecosystem Services) di Bonn-Jerman', 0, 'Kesepakatan IPBES-5', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-24 07:55:51', '0000-00-00 00:00:00', 2, 2),
(22, '0930-11.30/17 maret 2017', '0000-00-00', 45, 'Rapat koordinasi: \r\n1. sosialisasi implementasi sistem manajemen lingkungan (ISO 14001) di Pelabuhan Prioritas\r\n 2. implementasi pengendalian limbah-limbah di pelabuhan menurut MARPOL 73/78 ', 0, '1. Rencana aksi di tahun 2017\r\n2. Gambaran kondisi pengelolaan limbah-limbah di pelabuhan', '0000-00-00', '0000-00-00', '0000-00-00', '2017-03-09 06:37:55', '0000-00-00 00:00:00', 5, 5),
(23, '1330-15.30/17 maret 2017', '0000-00-00', 44, 'Rapat koordinasi:\r\n1. evaluasi kunjungan lapangan ke Pantai Nongsa-Batam dan Hasil valuasi ekonomi kerugian sosek masyarakat.\r\n2. Rencana sosialisasi penanggulangan tumpahan minyak di laut\r\n', 0, '1. Rekomendasi kasus nongsa batam utk K/L terkait\r\n2. rekomendasi rencana sosialisasi penanggulangan tumpahan minyak di laut\r\n', '0000-00-00', '0000-00-00', '0000-00-00', '2017-03-09 06:42:52', '0000-00-00 00:00:00', 5, 5),
(24, '16 Maret 2017', '0000-00-00', 45, 'Monitoring dan evaluasi penampungan limbah (landfill) PT. Toba Pulp Lestari/PT.TPL (kasus)', 0, 'Hasil klarifikasi dan rekomendasi tentang penampungan limbah', '0000-00-00', '0000-00-00', '0000-00-00', '2017-03-09 06:53:09', '0000-00-00 00:00:00', 5, 5),
(25, '20/21 Maret 2017', '0000-00-00', 46, 'Rapat Persiapan Koordinasi dan Fasilitasi Mempersiapkan Provinsi dalam Pengelolaan Kawasan Konservasi Perairan pasca UU 32/2014 tentang PEMDA', 0, 'Persiapan kesiapan Rapat Koordinasi dan fasilitasi yang menghadirkan semua provinsi', '0000-00-00', '0000-00-00', '0000-00-00', '2017-03-09 08:23:43', '0000-00-00 00:00:00', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kebijakan`
--

CREATE TABLE `kebijakan` (
  `no` int(11) NOT NULL,
  `narasi` text NOT NULL,
  `status` text NOT NULL,
  `indikator` text NOT NULL,
  `pic` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebijakan`
--

INSERT INTO `kebijakan` (`no`, `narasi`, `status`, `indikator`, `pic`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'arif', 'arif', 'arif', 'arif', '2017-07-31 02:57:08', '0000-00-00 00:00:00', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `no` int(11) NOT NULL,
  `uraian` text NOT NULL,
  `tanggal` text NOT NULL,
  `tanggal1` datetime NOT NULL,
  `tanggal2` datetime NOT NULL,
  `lokasi` text NOT NULL,
  `hasil` text NOT NULL,
  `tindak_ljt` text NOT NULL,
  `masalah` text NOT NULL,
  `narasiKebijakan` int(11) NOT NULL,
  `dokumentasi1` text NOT NULL,
  `dokumentasi2` text NOT NULL,
  `arahan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`no`, `uraian`, `tanggal`, `tanggal1`, `tanggal2`, `lokasi`, `hasil`, `tindak_ljt`, `masalah`, `narasiKebijakan`, `dokumentasi1`, `dokumentasi2`, `arahan`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'arif', '', '2017-07-27 00:00:00', '2017-07-27 00:00:00', 'bogor', 'arif', 'arif', 'arif', 1, '', '', '', '2017-07-31 02:57:32', '0000-00-00 00:00:00', 2, 6),
(2, 'prima', '', '2017-07-28 00:00:00', '2017-07-28 00:00:00', 'Bogor', 'prima', 'prima', 'prima', 1, '', '', '', '2017-07-31 02:58:07', '0000-00-00 00:00:00', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `name`, `password`, `created_at`, `updated_at`, `created_by`, `updated_by`, `role`) VALUES
(2, 'asdep1', '81dc9bdb52d04dc20036dbd8313ed055', '2017-07-31 02:52:43', '0000-00-00 00:00:00', 1, 1, 'asdep1'),
(3, 'asdep2', '8da57fac3313174128cc5f13328d4573', '2017-07-31 02:53:02', '0000-00-00 00:00:00', 1, 1, 'asdep2'),
(4, 'asdep3', '1713a23c14b5033adb074b5464fb6c66', '2017-07-31 02:53:19', '0000-00-00 00:00:00', 1, 1, 'asdep3'),
(5, 'asdep4', 'c46482dd5d39742f0bfd417b492d0e8e', '2017-07-31 02:53:37', '0000-00-00 00:00:00', 1, 1, 'asdep4'),
(6, 'admin', 'a0afdf1ac166b8652ffe9dee6eac779e', '2017-07-31 02:53:55', '0000-00-00 00:00:00', 0, 0, 'admin'),
(7, 'sesdep', 'b59c67bf196a4758191e42f76670ceba', '2017-07-31 02:54:10', '0000-00-00 00:00:00', 0, 0, 'sesdep');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kebijakan`
--
ALTER TABLE `kebijakan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `kebijakan`
--
ALTER TABLE `kebijakan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

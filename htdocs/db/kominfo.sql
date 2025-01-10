-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 08:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'e7f27107c567c4c7418cf141175fa602'),
(2, 'rahadian', 'rahadian', 'de36880d81a875d7d1d1624e33f4b16b'),
(3, 'triantono', 'triantono', '19da6dc03b3ca8bb6be9dd2d1c0d8a14'),
(4, 'fikri', 'fikri', '19da9ebef1ca88a6cb3ffcb997054199'),
(5, 'baryati', 'baryati', 'e7f27107c567c4c7418cf141175fa602'),
(6, 'visit', 'visit', '8c250de46e6ff824a51ec0765e8a822b');

-- --------------------------------------------------------

--
-- Table structure for table `aduan_infrastruktur_jaringan_inter`
--

CREATE TABLE `aduan_infrastruktur_jaringan_inter` (
  `id_aduan_jar_inter` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(256) NOT NULL,
  `opd` varchar(256) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(256) NOT NULL,
  `alasan` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `riwayat` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aduan_infrastruktur_jaringan_inter`
--

INSERT INTO `aduan_infrastruktur_jaringan_inter` (`id_aduan_jar_inter`, `waktu`, `nama`, `opd`, `jabatan`, `no_telp`, `email`, `alasan`, `keterangan`, `riwayat`, `status`) VALUES
(3, '2022-06-27 09:46:13', 'Abhysta', 'Dinkominfo', 'Ketua', '082328622825', 'abhysta@gmail.com', 'Error,Tidak Bisa Akses Internet,Koneksi internet lambat', 'Tes', 'Tes', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `aduan_pengelolaan_website`
--

CREATE TABLE `aduan_pengelolaan_website` (
  `id_aduan_web` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(256) NOT NULL,
  `opd` varchar(256) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(256) NOT NULL,
  `alasan` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `riwayat` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aduan_pengelolaan_website`
--

INSERT INTO `aduan_pengelolaan_website` (`id_aduan_web`, `waktu`, `nama`, `opd`, `jabatan`, `url`, `no_telp`, `email`, `alasan`, `keterangan`, `riwayat`, `status`) VALUES
(9, '2022-06-27 09:39:08', 'Abhysta', 'Dinkominfo', 'Ketua', 'https://www.academia.edu/14190984/Manajemen_Organisasi_dan_Tata_Kelola_Teknologi_Informasi', '082328622825', 'abhysta@gmail.com', 'Error', 'Tes', 'Tes', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_inter_wifi`
--

CREATE TABLE `fasilitas_inter_wifi` (
  `id_fas_inter_wifi` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `nip` varchar(256) NOT NULL,
  `opd` varchar(256) NOT NULL,
  `hari` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(256) NOT NULL,
  `peserta` varchar(256) NOT NULL,
  `acara` varchar(256) NOT NULL,
  `penyelenggara` varchar(256) NOT NULL,
  `surat_permohonan` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_inter_wifi`
--

INSERT INTO `fasilitas_inter_wifi` (`id_fas_inter_wifi`, `waktu`, `nama`, `jabatan`, `nip`, `opd`, `hari`, `tanggal`, `jam`, `tempat`, `peserta`, `acara`, `penyelenggara`, `surat_permohonan`, `status`) VALUES
(6, '2022-06-27 09:35:50', 'Abhysta', 'Ketua', '1900016074', 'Dinkominfo', 'Jum\'at', '2022-07-01', '14:00:00', 'Aula', '100', 'Tes', 'Tes', 'surat_permohonan_Abhysta.pdf', 'Diterima'),
(7, '2022-06-29 13:56:23', 'Abhysta', 'Ketua', '', 'Dinkominfo', 'Jum\'at', '2022-07-01', '13:56:00', 'Aula', '100', 'Tes', 'Tes', 'surat_permohonan_Abhysta1.pdf', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_video_conference`
--

CREATE TABLE `fasilitas_video_conference` (
  `id_fas_video_conference` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `nip` varchar(256) NOT NULL,
  `opd` varchar(256) NOT NULL,
  `hari` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(256) NOT NULL,
  `peserta` varchar(256) NOT NULL,
  `acara` varchar(256) NOT NULL,
  `penyelenggara` varchar(256) NOT NULL,
  `surat_permohonan` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_video_conference`
--

INSERT INTO `fasilitas_video_conference` (`id_fas_video_conference`, `waktu`, `nama`, `jabatan`, `nip`, `opd`, `hari`, `tanggal`, `jam`, `tempat`, `peserta`, `acara`, `penyelenggara`, `surat_permohonan`, `status`) VALUES
(3, '2022-06-27 09:37:31', 'Abhysta', 'Ketua', '1900016074', 'Dinkominfo', 'Senin', '2022-07-04', '14:00:00', 'Aula', '100', 'Tes', 'Tes', 'surat_permohonan_Abhysta.pdf', 'Diterima'),
(4, '2022-06-29 14:03:31', 'ardi', 'staff', '19920000000000', 'dinkominfo', 'Rabu', '2022-06-23', '17:02:00', 'pringgitan', '100', 'vidcon', 'setda', 'surat_permohonan_ardi.pdf', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses_matur_bupati`
--

CREATE TABLE `hak_akses_matur_bupati` (
  `id_hak_akses_maturbup` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `opd` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `alasan` varchar(256) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `surat_permohonan` varchar(256) NOT NULL,
  `sk` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses_matur_bupati`
--

INSERT INTO `hak_akses_matur_bupati` (`id_hak_akses_maturbup`, `waktu`, `nama`, `jabatan`, `no_telp`, `opd`, `email`, `alasan`, `keterangan`, `surat_permohonan`, `sk`, `status`) VALUES
(8, '2022-06-27 09:33:47', 'Abhysta', 'Ketua', '082328622825', 'Dinkominfo', 'abhysta@gmail.com', 'Lupa Password', 'Tes', 'surat_permohonan_Abhysta.pdf', 'sk_Abhysta.pdf', 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses_website`
--

CREATE TABLE `hak_akses_website` (
  `id_hak_akses_web` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(256) NOT NULL,
  `opd_desa` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `alasan` varchar(256) DEFAULT NULL,
  `keterangan` varchar(256) NOT NULL,
  `surat_permohonan` varchar(256) NOT NULL,
  `sk` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses_website`
--

INSERT INTO `hak_akses_website` (`id_hak_akses_web`, `waktu`, `nama`, `jabatan`, `no_telp`, `email`, `opd_desa`, `url`, `alasan`, `keterangan`, `surat_permohonan`, `sk`, `status`) VALUES
(24, '2022-06-27 09:32:53', 'Abhysta', 'Ketua', '082328622825', 'abhysta@gmail.com', 'Dinkominfo', 'https://www.academia.edu/14190984/Manajemen_Organisasi_dan_Tata_Kelola_Teknologi_Informasi', 'Lupa Password', 'Tes', 'surat_permohonan_Abhysta.pdf', 'sk_Abhysta.pdf', 'Ditolak'),
(25, '2022-07-01 13:32:16', 'Arrofif', 'Ketua', '081353297470', 'abhysta@gmail.com', 'Dinkominfo', 'https://youtu.be/xHmas49kquU', 'Lupa Password', 'Tes', 'surat_permohonan_Arrofif.pdf', 'sk_Arrofif.pdf', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(10) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `nama`, `email`, `no_telp`, `subject`, `message`) VALUES
(5, 'Arrofif', 'abhysta@gmail.com', '082328622825', 'Tes', 'Tes'),
(6, 'Huda', 'abhysta1234@gmail.com', '082328622825', 'Tes', 'Tes'),
(7, 'Abhysta', 'abhysta_hudaa@gmail.com', '082328622825', 'Tes', 'Tes'),
(8, 'M. Abhysta Huda A', 'abhystahuda123@gmail.com', '082328622825', 'Tes', 'Tes'),
(9, 'Abhysta', 'abhysta@gmail.com', '082328622825', 'Keluhan', 'Terjadi bug pada aplikasi');

-- --------------------------------------------------------

--
-- Table structure for table `website_desa`
--

CREATE TABLE `website_desa` (
  `id_web_desa` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama` varchar(256) NOT NULL,
  `SK_Pengangkatan_Kades` varchar(256) NOT NULL,
  `SK_Pengangkatan_Perangkat_Desa` varchar(256) NOT NULL,
  `Surat_Kuasa` varchar(256) NOT NULL,
  `Surat_Permohonan_Domain` varchar(256) NOT NULL,
  `Surat_Permohonan_Hosting` varchar(256) NOT NULL,
  `KTP` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website_desa`
--

INSERT INTO `website_desa` (`id_web_desa`, `waktu`, `nama`, `SK_Pengangkatan_Kades`, `SK_Pengangkatan_Perangkat_Desa`, `Surat_Kuasa`, `Surat_Permohonan_Domain`, `Surat_Permohonan_Hosting`, `KTP`, `status`) VALUES
(41, '2022-06-28 09:43:24', 'Karangsentul', 'SK_Pengangkatan_Kades_Karangsentul.pdf', 'SK_Pengangkatan_Perangkat_Desa_Karangsentul.pdf', 'Surat_Kuasa_Karangsentul.pdf', 'Surat_Permohonan_Domain_Karangsentul.pdf', 'Surat_Permohonan_Hosting_Karangsentul.pdf', 'KTP_Karangsentul.png', 'Proses'),
(42, '2022-06-28 09:43:48', 'Karanganyar', 'SK_Pengangkatan_Kades_Karanganyar.pdf', 'SK_Pengangkatan_Perangkat_Desa_Karanganyar.pdf', 'Surat_Kuasa_Karanganyar.pdf', 'Surat_Permohonan_Domain_Karanganyar.pdf', 'Surat_Permohonan_Hosting_Karanganyar.pdf', 'KTP_Karanganyar.png', 'Proses'),
(43, '2022-06-28 09:43:59', 'Kalimanah', 'SK_Pengangkatan_Kades_Kalimanah.pdf', 'SK_Pengangkatan_Perangkat_Desa_Kalimanah.pdf', 'Surat_Kuasa_Kalimanah.pdf', 'Surat_Permohonan_Domain_Kalimanah.pdf', 'Surat_Permohonan_Hosting_Kalimanah.pdf', 'KTP_Kalimanah.png', 'Proses'),
(44, '2022-06-28 09:44:15', 'Padamara', 'SK_Pengangkatan_Kades_Padamara.pdf', 'SK_Pengangkatan_Perangkat_Desa_Padamara.pdf', 'Surat_Kuasa_Padamara.pdf', 'Surat_Permohonan_Domain_Padamara.pdf', 'Surat_Permohonan_Hosting_Padamara.pdf', 'KTP_Padamara.png', 'Proses'),
(45, '2022-06-29 13:51:35', 'Kalimanah', 'SK_Pengangkatan_Kades_Kalimanah1.pdf', 'SK_Pengangkatan_Perangkat_Desa_Kalimanah1.pdf', 'Surat_Kuasa_Kalimanah1.pdf', 'Surat_Permohonan_Domain_Kalimanah1.pdf', 'Surat_Permohonan_Hosting_Kalimanah1.pdf', 'KTP_Kalimanah1.png', 'Ditolak'),
(47, '2022-07-01 13:24:24', 'Darma', 'SK_Pengangkatan_Kades_Darma1.pdf', 'SK_Pengangkatan_Perangkat_Desa_Darma1.pdf', 'Surat_Kuasa_Darma1.pdf', 'Surat_Permohonan_Domain_Darma1.pdf', 'Surat_Permohonan_Hosting_Darma1.pdf', 'KTP_Darma1.png', 'Proses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aduan_infrastruktur_jaringan_inter`
--
ALTER TABLE `aduan_infrastruktur_jaringan_inter`
  ADD PRIMARY KEY (`id_aduan_jar_inter`);

--
-- Indexes for table `aduan_pengelolaan_website`
--
ALTER TABLE `aduan_pengelolaan_website`
  ADD PRIMARY KEY (`id_aduan_web`);

--
-- Indexes for table `fasilitas_inter_wifi`
--
ALTER TABLE `fasilitas_inter_wifi`
  ADD PRIMARY KEY (`id_fas_inter_wifi`);

--
-- Indexes for table `fasilitas_video_conference`
--
ALTER TABLE `fasilitas_video_conference`
  ADD PRIMARY KEY (`id_fas_video_conference`);

--
-- Indexes for table `hak_akses_matur_bupati`
--
ALTER TABLE `hak_akses_matur_bupati`
  ADD PRIMARY KEY (`id_hak_akses_maturbup`);

--
-- Indexes for table `hak_akses_website`
--
ALTER TABLE `hak_akses_website`
  ADD PRIMARY KEY (`id_hak_akses_web`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `website_desa`
--
ALTER TABLE `website_desa`
  ADD PRIMARY KEY (`id_web_desa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aduan_infrastruktur_jaringan_inter`
--
ALTER TABLE `aduan_infrastruktur_jaringan_inter`
  MODIFY `id_aduan_jar_inter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aduan_pengelolaan_website`
--
ALTER TABLE `aduan_pengelolaan_website`
  MODIFY `id_aduan_web` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fasilitas_inter_wifi`
--
ALTER TABLE `fasilitas_inter_wifi`
  MODIFY `id_fas_inter_wifi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fasilitas_video_conference`
--
ALTER TABLE `fasilitas_video_conference`
  MODIFY `id_fas_video_conference` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hak_akses_matur_bupati`
--
ALTER TABLE `hak_akses_matur_bupati`
  MODIFY `id_hak_akses_maturbup` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hak_akses_website`
--
ALTER TABLE `hak_akses_website`
  MODIFY `id_hak_akses_web` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `website_desa`
--
ALTER TABLE `website_desa`
  MODIFY `id_web_desa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

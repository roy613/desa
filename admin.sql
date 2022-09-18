-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 01:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pelayanan`
--

CREATE TABLE `daftar_pelayanan` (
  `da_id` int(30) NOT NULL,
  `da_pelayanan` varchar(100) DEFAULT NULL,
  `n_1` varchar(30) DEFAULT NULL,
  `n_2` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_pelayanan`
--

INSERT INTO `daftar_pelayanan` (`da_id`, `da_pelayanan`, `n_1`, `n_2`) VALUES
(1, 'surat rekomendasi proposal', '100/', '/pem/'),
(2, 'surat pengantar rekom kerja', '101/', '/pem/'),
(3, 'surat rekomendasi kerja', '102/', '/pem/'),
(4, 'surat keterangan usaha', '103/', '/pem/'),
(5, 'surat keterangan domisili', '104/', '/pem/'),
(6, 'surat keterangan kematian', '105/', '/pem/'),
(7, 'surat keterangan kelahiran', '106/', '/pem/'),
(8, 'Surat keterangan Pindah Penduduk', '107/', '/pem/'),
(9, 'surat keterangan tidak mampu', '108/', '/pem/'),
(10, 'surat pengantar kehilangan', '109/', '/pem/'),
(11, 'surat pengantar skck', '110/', '/pem/'),
(12, 'Surat Pengantar Menikah', '101/', '/pem/');

-- --------------------------------------------------------

--
-- Table structure for table `nama_desa`
--

CREATE TABLE `nama_desa` (
  `nd_id` int(11) NOT NULL,
  `nd_desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nikah`
--

CREATE TABLE `nikah` (
  `n_id` int(11) NOT NULL,
  `n_nama_1` varchar(35) DEFAULT NULL,
  `n_nik_1` varchar(16) DEFAULT NULL,
  `n_tptlahir_1` varchar(30) DEFAULT NULL,
  `n_tgllahir_1` date DEFAULT NULL,
  `n_kwn_1` varchar(13) DEFAULT NULL,
  `n_agama_1` varchar(10) DEFAULT NULL,
  `n_job_1` varchar(30) DEFAULT NULL,
  `n_alamat_1` varchar(35) DEFAULT NULL,
  `n_status_1` int(1) DEFAULT NULL,
  `n_nama_11` varchar(35) DEFAULT NULL,
  `n_nik_11` varchar(16) DEFAULT NULL,
  `n_tptlahir_11` varchar(30) DEFAULT NULL,
  `n_tgllahir_11` date DEFAULT NULL,
  `n_kwn_11` varchar(13) DEFAULT NULL,
  `n_agama_11` varchar(10) DEFAULT NULL,
  `n_job_11` varchar(30) DEFAULT NULL,
  `n_alamat_11` varchar(35) DEFAULT NULL,
  `n_nama_12` varchar(35) DEFAULT NULL,
  `n_nik_12` varchar(16) DEFAULT NULL,
  `n_tptlahir_12` varchar(30) DEFAULT NULL,
  `n_tgllahir_12` date DEFAULT NULL,
  `n_kwn_12` varchar(13) DEFAULT NULL,
  `n_agama_12` varchar(10) DEFAULT NULL,
  `n_job_12` varchar(30) DEFAULT NULL,
  `n_alamat_12` varchar(35) DEFAULT NULL,
  `n_nama_2` varchar(35) DEFAULT NULL,
  `n_nik_2` varchar(16) DEFAULT NULL,
  `n_tptlahir_2` varchar(30) DEFAULT NULL,
  `n_tgllahir_2` date DEFAULT NULL,
  `n_kwn_2` varchar(13) DEFAULT NULL,
  `n_agama_2` varchar(10) DEFAULT NULL,
  `n_job_2` varchar(30) DEFAULT NULL,
  `n_alamat_2` varchar(35) DEFAULT NULL,
  `n_status_2` int(1) DEFAULT NULL,
  `n_nama_21` varchar(35) DEFAULT NULL,
  `n_nik_21` varchar(16) DEFAULT NULL,
  `n_tptlahir_21` varchar(30) DEFAULT NULL,
  `n_tgllahir_21` date DEFAULT NULL,
  `n_kwn_21` varchar(13) DEFAULT NULL,
  `n_agama_21` varchar(10) DEFAULT NULL,
  `n_job_21` varchar(30) DEFAULT NULL,
  `n_alamat_21` varchar(35) DEFAULT NULL,
  `n_nama_22` varchar(35) DEFAULT NULL,
  `n_nik_22` varchar(16) DEFAULT NULL,
  `n_tptlahir_22` varchar(30) DEFAULT NULL,
  `n_tgllahir_22` date DEFAULT NULL,
  `n_kwn_22` varchar(13) DEFAULT NULL,
  `n_agama_22` varchar(10) DEFAULT NULL,
  `n_job_22` varchar(30) DEFAULT NULL,
  `n_alamat_22` varchar(35) DEFAULT NULL,
  `n_bin_11` varchar(30) DEFAULT NULL,
  `n_binti_12` varchar(30) DEFAULT NULL,
  `n_bin_21` varchar(30) DEFAULT NULL,
  `n_binti_22` varchar(30) DEFAULT NULL,
  `n_lokasi` varchar(40) DEFAULT NULL,
  `n_waktu` datetime DEFAULT NULL,
  `n_kodepelayanan` varchar(10) DEFAULT NULL,
  `n_nojenis` int(1) DEFAULT NULL,
  `n_arsip` varchar(80) DEFAULT NULL,
  `n_buat` varchar(30) DEFAULT NULL,
  `n_edit` varchar(30) DEFAULT NULL,
  `n_hapus` varchar(30) DEFAULT NULL,
  `n_tglmohon` datetime DEFAULT NULL,
  `n_tglbuat` datetime DEFAULT NULL,
  `n_tgledit` datetime DEFAULT NULL,
  `n_tglhapus` datetime DEFAULT NULL,
  `n_qr` varchar(30) DEFAULT NULL,
  `n_nomor` varchar(30) DEFAULT NULL,
  `n_tglsurat` date DEFAULT NULL,
  `n_ttd` varchar(30) DEFAULT NULL,
  `n_jabttd` varchar(30) DEFAULT NULL,
  `n_nipttd` varchar(21) DEFAULT NULL,
  `n_golttd` varchar(30) DEFAULT NULL,
  `n_mpket` int(1) DEFAULT NULL,
  `n_status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nikah`
--

INSERT INTO `nikah` (`n_id`, `n_nama_1`, `n_nik_1`, `n_tptlahir_1`, `n_tgllahir_1`, `n_kwn_1`, `n_agama_1`, `n_job_1`, `n_alamat_1`, `n_status_1`, `n_nama_11`, `n_nik_11`, `n_tptlahir_11`, `n_tgllahir_11`, `n_kwn_11`, `n_agama_11`, `n_job_11`, `n_alamat_11`, `n_nama_12`, `n_nik_12`, `n_tptlahir_12`, `n_tgllahir_12`, `n_kwn_12`, `n_agama_12`, `n_job_12`, `n_alamat_12`, `n_nama_2`, `n_nik_2`, `n_tptlahir_2`, `n_tgllahir_2`, `n_kwn_2`, `n_agama_2`, `n_job_2`, `n_alamat_2`, `n_status_2`, `n_nama_21`, `n_nik_21`, `n_tptlahir_21`, `n_tgllahir_21`, `n_kwn_21`, `n_agama_21`, `n_job_21`, `n_alamat_21`, `n_nama_22`, `n_nik_22`, `n_tptlahir_22`, `n_tgllahir_22`, `n_kwn_22`, `n_agama_22`, `n_job_22`, `n_alamat_22`, `n_bin_11`, `n_binti_12`, `n_bin_21`, `n_binti_22`, `n_lokasi`, `n_waktu`, `n_kodepelayanan`, `n_nojenis`, `n_arsip`, `n_buat`, `n_edit`, `n_hapus`, `n_tglmohon`, `n_tglbuat`, `n_tgledit`, `n_tglhapus`, `n_qr`, `n_nomor`, `n_tglsurat`, `n_ttd`, `n_jabttd`, `n_nipttd`, `n_golttd`, `n_mpket`, `n_status`) VALUES
(1, 'ftyyhtr', '5465465465654655', 'fghfgh', '2022-09-07', 'fghfg', 'Kristen', 'gfhfgh', 'fghfgh', 1, 'rtytry', '4565465466545545', 'dfg', '2022-10-02', 'Indonesia', 'Islam', 'dfgfgd', 'sangkulirang', 'dfgdf', '5465465465465465', 'dfg', '2022-09-20', 'Indonesia', 'Kristen', 'dfgdfgdfg', 'sangkulirang', 'dfgdfg', '3556545454545555', 'fghhgfh', '2022-09-13', 'Indonesia', 'Islam', 'ghgh', 'sangkulirang', 1, 'gfhgfhgh', '1565465465465465', 'fgh', '2022-08-30', 'fgh', 'Islam', 'gfh', 'fghfg', 'fhg', '4567544554554545', 'fgh', '2022-09-14', 'fgh', 'Islam', 'gfh', 'gfh', 'dfg', 'dfgdfg', 'fgh', 'fgh', 'fghfghhgf', '2022-09-20 17:49:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 13:45:19', NULL, NULL, 'qrkpn1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ftyyhtr', '5465465465654655', 'fghfgh', '2022-09-07', 'fghfg', 'Kristen', 'gfhfgh', 'fghfgh', 1, 'rtytry', '4565465466545545', 'dfg', '2022-10-02', 'Indonesia', 'Islam', 'dfgfgd', 'sangkulirang', 'dfgdf', '5465465465465465', 'dfg', '2022-09-20', 'Indonesia', 'Kristen', 'dfgdfgdfg', 'sangkulirang', 'dfgdfg', '3556545454545555', 'fghhgfh', '2022-09-13', 'Indonesia', 'Islam', 'ghgh', 'sangkulirang', 1, 'gfhgfhgh', '1565465465465465', 'fgh', '2022-08-30', 'fgh', 'Islam', 'gfh', 'fghfg', 'fhg', '4567544554554545', 'fgh', '2022-09-14', 'fgh', 'Islam', 'gfh', 'gfh', 'dfg', 'dfgdfg', 'fgh', 'fgh', 'fghfghhgf', '2022-09-20 17:49:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 13:46:33', NULL, NULL, 'qrkpn2.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ftyyhtr', '5465465465654655', 'fghfgh', '2022-09-07', 'fghfg', 'Kristen', 'gfhfgh', 'fghfgh', 1, 'rtytry', '4565465466545545', 'dfg', '2022-10-02', 'Indonesia', 'Islam', 'dfgfgd', 'sangkulirang', 'dfgdf', '5465465465465465', 'dfg', '2022-09-20', 'Indonesia', 'Kristen', 'dfgdfgdfg', 'sangkulirang', 'dfgdfg', '3556545454545555', 'fghhgfh', '2022-09-13', 'Indonesia', 'Islam', 'ghgh', 'sangkulirang', 1, 'gfhgfhgh', '1565465465465465', 'fgh', '2022-08-30', 'fgh', 'Islam', 'gfh', 'fghfg', 'fhg', '4567544554554545', 'fgh', '2022-09-14', 'fgh', 'Islam', 'gfh', 'gfh', 'dfg', 'dfgdfg', 'fgh', 'fgh', 'fghfghhgf', '2022-09-20 17:49:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 13:47:38', NULL, NULL, 'qrkpn3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'dsfsdf', '2343243243243223', 'dsfdsf', '2022-09-15', 'Indonesia', 'Budha', 'sdvfdsf', 'sangkulirang', 2, 'sdfdsf', '3245324324234333', 'sdf', '2022-09-05', 'Indonesia', 'Islam', 'sdfdsf', 'sangkulirang', 'sdfdsf', '3532523523444444', 'dsfdsf', '2022-09-12', 'Indonesia', 'Kristen', 'ersdfdsf', 'sangkulirang', 'sdfdsf', '2332432432432434', 'sdfdsfdfs', '2022-09-16', 'Indonesia', 'Islam', 'dsfdsf', 'sangkulirang', 1, 'dfgfdg', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', NULL, '', '', 'sdf', 'sdfds', 'fdgfdg', '', 'dfgdfgfg', '2022-09-20 20:14:00', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 16:10:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, 'dsfsdf', '2343243243243223', 'dsfdsf', '2022-09-15', 'Indonesia', 'Budha', 'sdvfdsf', 'sangkulirang', 2, 'sdfdsf', '3245324324234333', 'sdf', '2022-09-05', 'Indonesia', 'Islam', 'sdfdsf', 'sangkulirang', 'sdfdsf', '3532523523444444', 'dsfdsf', '2022-09-12', 'Indonesia', 'Kristen', 'ersdfdsf', 'sangkulirang', 'sdfdsf', '2332432432432434', 'sdfdsfdfs', '2022-09-16', 'Indonesia', 'Islam', 'dsfdsf', 'sangkulirang', 1, 'dfgfdg', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', NULL, '', '', 'sdf', 'sdfds', 'fdgfdg', '', 'dfgdfgfg', '2022-09-20 20:14:00', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 16:12:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 'sdvfsfdv', '4545455454545555', 'sdfdsf', '2022-09-29', 'Indonesia', 'Hindu', 'sdfsdf', 'sangkulirang', 2, 'sdfdsf', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', NULL, '', '', 'sdfdfds', '4325423545454544', 'sdfdsf', '2022-09-23', 'Indonesia', 'Budha', 'sdfsdf', 'sangkulirang', 1, 'sdfdsf', '3425342543223544', 'sdfsdf', '2022-09-20', 'sdf', 'Islam', 'sdf', 'sdfdf', 'sdfdf', '2345324324234324', 'sdfdsf', '2022-09-20', 'dsffd', 'Islam', 'sdfdf', 'sdfdsf', 'sdfdsf', '', 'sdfdsf', 'dsfdf', '23sdfdsf', '2022-09-16 19:25:00', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 16:22:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, 'sdvfsfdv', '4545455454545555', 'sdfdsf', '2022-09-29', 'Indonesia', 'Hindu', 'sdfsdf', 'sangkulirang', 2, 'sdfdsf', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', NULL, '', '', 'sdfdfds', '4325423545454544', 'sdfdsf', '2022-09-23', 'Indonesia', 'Budha', 'sdfsdf', 'sangkulirang', 1, 'sdfdsf', '3425342543223544', 'sdfsdf', '2022-09-20', 'sdf', 'Islam', 'sdf', 'sdfdf', 'sdfdf', '2345324324234324', 'sdfdsf', '2022-09-20', 'dsffd', 'Islam', 'sdfdf', 'sdfdsf', 'sdfdsf', '', 'sdfdsf', 'dsfdf', '23sdfdsf', '2022-09-16 19:25:00', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 16:22:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(8, 'dsfcdsf', '4545454545454545', 'dsfdsf', '2022-09-29', 'Indonesia', 'Kristen', 'sdfsdf', 'sangkulirang', 2, 'sdfsdf', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', NULL, '', '', 'sdfsdf', '4543543543545444', 'fdgfg', '2022-09-22', 'Indonesia', 'Katolik', 'fdgfg', 'sangkulirang', 2, 'sfgfgf', '4354354354454444', 'fdgfg', '2022-09-12', 'Indonesia', 'Islam', 'fdgfgfggffg', 'sangkulirang', 'fdgfdg', '3443543554544444', 'fdgdfg', '2022-09-20', 'Indonesia', 'Islam', 'fdgfdggffgd', 'sangkulirang', 'sdfsd', '', 'fgfg', 'fdgfdg', 'dfgfdg', '2022-09-12 19:27:00', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 16:24:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, 'dsfcdsf', '4545454545454545', 'dsfdsf', '2022-09-29', 'Indonesia', 'Kristen', 'sdfsdf', 'sangkulirang', 2, 'sdfsdf', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', NULL, '', '', 'sdfsdf', '4543543543545444', 'fdgfg', '2022-09-22', 'Indonesia', 'Katolik', 'fdgfg', 'sangkulirang', 2, 'sfgfgf', '4354354354454444', 'fdgfg', '2022-09-12', 'Indonesia', 'Islam', 'fdgfgfggffg', 'sangkulirang', 'fdgfdg', '3443543554544444', 'fdgdfg', '2022-09-20', 'Indonesia', 'Islam', 'fdgfdggffgd', 'sangkulirang', 'sdfsd', '', 'fgfg', 'fdgfdg', 'dfgfdg', '2022-09-12 19:27:00', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 16:25:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, 'sdsdfdf', '3453453455454534', 'dfgfdg', '2022-09-20', 'Indonesia', 'Kristen', 'fdgfg', 'sangkulirang', 2, 'fdgfdg', '5434354344444444', 'fdgfdg', '2022-09-19', 'fd', 'Islam', 'fdgfdg', 'fdg', 'dfgfdg', '5344354354354444', 'dfgfdg', '2022-09-20', 'fdg', 'Islam', 'fdg', 'fdg', 'fdgfdg', '4354354354354444', 'dfgfdg', '2022-09-08', 'fdg', 'Katolik', 'fdgfdg', 'dfg', 1, 'fdgfdg', '', '', '0000-00-00', '', NULL, '', '', '', '', '', '0000-00-00', '', NULL, '', '', 'fdgfdg', 'dfgfdg', 'fdgfg', '', 'fdgfdg', '2022-09-15 19:29:00', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 16:26:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `p_id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `ket` int(1) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`p_id`, `username`, `pass`, `ket`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `pe_id` int(11) NOT NULL,
  `pe_kode` varchar(40) DEFAULT NULL,
  `pe_nama` varchar(30) DEFAULT NULL,
  `pe_alamat` varchar(30) DEFAULT NULL,
  `pe_handphone` varchar(30) DEFAULT NULL,
  `pe_tgl` datetime DEFAULT NULL,
  `pe_qr` varchar(50) DEFAULT NULL,
  `pe_jenispermohonan` varchar(70) DEFAULT NULL,
  `pe_syarat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `s_id` int(11) NOT NULL,
  `s_1` varchar(40) DEFAULT NULL,
  `s_2` varchar(40) DEFAULT NULL,
  `s_3` varchar(40) DEFAULT NULL,
  `s_4` varchar(40) DEFAULT NULL,
  `s_5` varchar(40) DEFAULT NULL,
  `s_6` varchar(40) DEFAULT NULL,
  `s_7` varchar(40) DEFAULT NULL,
  `s_8` varchar(40) DEFAULT NULL,
  `s_9` varchar(40) DEFAULT NULL,
  `s_10` varchar(40) DEFAULT NULL,
  `s_11` varchar(40) DEFAULT NULL,
  `s_12` varchar(40) DEFAULT NULL,
  `s_13` varchar(40) DEFAULT NULL,
  `s_14` varchar(40) DEFAULT NULL,
  `s_15` varchar(40) DEFAULT NULL,
  `s_16` varchar(40) DEFAULT NULL,
  `s_17` varchar(40) DEFAULT NULL,
  `sd_1` date DEFAULT NULL,
  `sd_2` date DEFAULT NULL,
  `sd_3` date DEFAULT NULL,
  `sd_4` date DEFAULT NULL,
  `s_nosurat` varchar(40) DEFAULT NULL,
  `s_jabatan` varchar(30) DEFAULT NULL,
  `s_ttd` varchar(30) DEFAULT NULL,
  `s_kodettd` int(1) DEFAULT NULL,
  `s_qr` varchar(30) DEFAULT NULL,
  `s_kodepelayanan` varchar(30) DEFAULT NULL,
  `s_tglsurat` date DEFAULT NULL,
  `s_tglbuat` datetime DEFAULT NULL,
  `s_tgledit` datetime DEFAULT NULL,
  `s_tglhapus` datetime DEFAULT NULL,
  `s_tglselesai` datetime DEFAULT NULL,
  `s_proses` varchar(30) DEFAULT NULL,
  `s_edit` varchar(30) DEFAULT NULL,
  `s_hapus` varchar(30) DEFAULT NULL,
  `s_jenispelayanan` varchar(50) DEFAULT NULL,
  `s_ket` int(1) DEFAULT NULL,
  `s_kodeproses` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`s_id`, `s_1`, `s_2`, `s_3`, `s_4`, `s_5`, `s_6`, `s_7`, `s_8`, `s_9`, `s_10`, `s_11`, `s_12`, `s_13`, `s_14`, `s_15`, `s_16`, `s_17`, `sd_1`, `sd_2`, `sd_3`, `sd_4`, `s_nosurat`, `s_jabatan`, `s_ttd`, `s_kodettd`, `s_qr`, `s_kodepelayanan`, `s_tglsurat`, `s_tglbuat`, `s_tgledit`, `s_tglhapus`, `s_tglselesai`, `s_proses`, `s_edit`, `s_hapus`, `s_jenispelayanan`, `s_ket`, `s_kodeproses`) VALUES
(1, 'rtrdeyty', 'trytry', 'trytry', 'trytry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100/001/pem/IX/2022', '', 'jabir', 0, 'QR0.png', NULL, '2022-09-17', '2022-09-17 12:23:52', NULL, '2022-09-17 13:24:33', NULL, 'admin', NULL, 'admin', 'surat rekomendasi proposal', NULL, 2),
(2, 'w3erwerwer', '3243432443343444', 'Laki-Laki', 'sadsad', 'Islam', 'sadsd', 'sangkulirang', 'qwerty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17', NULL, NULL, NULL, '002IX/2022', '', 'jabir', 0, 'QR1.png', NULL, '2022-09-17', '2022-09-17 12:51:32', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat rekomendasi kerja', NULL, 2),
(3, 'wertrt', '4354354354354354', 'Laki-Laki', 'dfg', 'Kristen', 'sadsd', 'sangkulirang', 'qwerty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17', NULL, NULL, NULL, '003IX/2022', '', 'jabir', 0, 'QR2.png', NULL, '2022-09-16', '2022-09-17 12:54:08', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat rekomendasi kerja', NULL, 2),
(4, 'jundan', '1919191919191919', 'Laki-Laki', 'demak', 'Islam', 'aa', 'sangkulirang', 'qwerty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17', NULL, NULL, NULL, '004IX/2022', 'kepala desa', 'jabir', 1, 'QR3.png', NULL, '2022-09-17', '2022-09-17 12:59:13', NULL, '2022-09-17 13:59:33', NULL, 'admin', NULL, 'admin', 'surat rekomendasi kerja', NULL, 2),
(5, 'jundan', '1212121212121212', 'Laki-Laki', 'demak', 'Islam', 'sd', 'sangkulirang', 'qwerty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17', NULL, NULL, NULL, '005IX/2022', 'kepala desa', 'jabir', 1, 'QR4.png', NULL, '2022-09-17', '2022-09-17 13:17:03', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat pengantar rekom kerja', NULL, 2),
(6, 'jundan', '1212121212121212', 'dsf', 'Islam', 'we', 'sangkulirang', 'ktp', 'Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17', '2022-09-17', NULL, NULL, '006IX/2022', 'kepala desa', 'jabir', 1, 'QR5.png', NULL, '2022-09-17', '2022-09-17 20:10:17', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat pengantar kehilangan', NULL, 2),
(7, 'jundan', '1212121221212121', 'Laki-Laki', 'ewrwer', 'Indonesia', 'Islam', 'Belum Menikah', 'ertret', 'sangkulirang', 'ertretert', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17', NULL, NULL, NULL, '109/007/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR6.png', NULL, '2022-09-17', '2022-09-17 20:34:15', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat pengantar kehilangan', NULL, 2),
(8, 'jundan', '9898989898999898', 'Laki-Laki', 'ewrwer', 'Indonesia', 'Islam', 'Belum Menikah', 'ertret', 'sangkulirang', 'ertretert', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17', NULL, NULL, NULL, '008IX/2022', 'kepala desa', 'jabir', 1, 'QR7.png', NULL, '2022-09-17', '2022-09-17 20:36:58', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat pengantar skck', NULL, 2),
(9, 'jundan', '6565465465465465', 'Laki-Laki', 'ewrwer', 'Indonesia', 'Islam', 'Belum Menikah', 'dfgdfgdf', 'sangkulirang', 'ertretert', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17', NULL, NULL, NULL, '110/009/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR8.png', NULL, '2022-09-17', '2022-09-17 20:43:29', '2022-09-17 20:47:06', NULL, NULL, 'admin', 'admin', NULL, 'surat pengantar skck', NULL, 2),
(10, 'jundan', '1212121212121212', 'Laki-Laki', 'sadsad', 'asdsad', 'Jl. Aji Suryanata', '12', 'Dagang', 'sangkulirang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-18', NULL, NULL, NULL, '103/010/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR9.png', NULL, '2022-09-18', '2022-09-18 13:39:00', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan usaha', NULL, 2),
(11, 'jundan', 'Laki-Laki', 'demak', 'Indonesia', 'Islam', '1212121212121212', 'Menikah', 'pns', 'sangkulirang', 'Melamar Kerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-18', NULL, NULL, NULL, '104/011/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR10.png', NULL, '2022-09-18', '2022-09-18 14:08:38', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan domisili', NULL, 2),
(12, 'jundan', '1221212121212121', 'Laki-Laki', 'demak', 'Indonesia', 'Islam', 'Menikah', 'pns', 'Diploma IV / S1', 'sangkulirang', 'JL. APT Pranoto', 'Sangatta Utara', 'Sangatta Utara', 'kutai timur', 'Kalimantan Timur', NULL, NULL, '2022-09-18', '2022-09-18', NULL, NULL, '104/012/pem/IX/2022', 'sekretaris desa', 'udin', 2, 'QR11.png', NULL, '2022-09-18', '2022-09-18 15:39:55', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan pindah', NULL, 2),
(13, 'udin', 'sasa', 'Indonesia', 'Islam', 'asasas', 'Jl. Pattimura', '20:00', 'Puskesmas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-18', '2022-09-18', NULL, NULL, '105/013/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR12.png', NULL, '2022-09-18', '2022-09-18 15:57:01', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan kematian', NULL, 2),
(14, 'yahya', 'Laki-Laki', 'Samarinda', 'Islam', 'sangkulirang', '1', 'Jundan', 'Demak', 'Islam', 'PNS', 'sangkulirang', 'Yuniarti', 'Balikpapan', 'Islam', 'TK2D', 'sangkulirang', NULL, '2022-09-19', '2022-09-19', '2022-09-19', NULL, '106/014/pem/IX/2022', 'sekretaris desa', 'udin', 2, 'QR13.png', NULL, '2022-09-19', '2022-09-19 05:42:08', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan kelahiran', NULL, 2),
(15, 'udin', '1212121212121212', 'Laki-Laki', 'peridan', 'Islam', 'Indonesia', 'Belum Menikah', 'swasta', 'sangkulirang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-19', NULL, NULL, NULL, '108/015/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR14.png', NULL, '2022-09-19', '2022-09-19 06:05:40', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan tidak mampu', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ttd`
--

CREATE TABLE `ttd` (
  `tt_id` int(5) NOT NULL,
  `tt_jabatan` varchar(50) DEFAULT NULL,
  `tt_nama` varchar(50) DEFAULT NULL,
  `tt_ket` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ttd`
--

INSERT INTO `ttd` (`tt_id`, `tt_jabatan`, `tt_nama`, `tt_ket`) VALUES
(1, 'kepala desa', 'jabir', 1),
(2, 'sekretaris desa', 'udin', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pelayanan`
--
ALTER TABLE `daftar_pelayanan`
  ADD PRIMARY KEY (`da_id`);

--
-- Indexes for table `nama_desa`
--
ALTER TABLE `nama_desa`
  ADD PRIMARY KEY (`nd_id`);

--
-- Indexes for table `nikah`
--
ALTER TABLE `nikah`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`pe_id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `ttd`
--
ALTER TABLE `ttd`
  ADD PRIMARY KEY (`tt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pelayanan`
--
ALTER TABLE `daftar_pelayanan`
  MODIFY `da_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nama_desa`
--
ALTER TABLE `nama_desa`
  MODIFY `nd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nikah`
--
ALTER TABLE `nikah`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `p_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ttd`
--
ALTER TABLE `ttd`
  MODIFY `tt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

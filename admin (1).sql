-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 03:20 PM
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
-- Table structure for table `arsip_manual`
--

CREATE TABLE `arsip_manual` (
  `a_id` int(11) NOT NULL,
  `a_nama` varchar(50) DEFAULT NULL,
  `a_arsip` varchar(50) DEFAULT NULL,
  `a_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 'Surat keterangan pindah penduduk', '107/', '/pem/'),
(9, 'surat keterangan tidak mampu', '108/', '/pem/'),
(10, 'surat pengantar kehilangan', '109/', '/pem/'),
(11, 'surat pengantar skck', '110/', '/pem/'),
(12, 'surat pengantar menikah', '101/', '/pem/');

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
  `pe_syarat` varchar(50) DEFAULT NULL,
  `pe_syarat1` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`pe_id`, `pe_kode`, `pe_nama`, `pe_alamat`, `pe_handphone`, `pe_tgl`, `pe_qr`, `pe_jenispermohonan`, `pe_syarat`, `pe_syarat1`) VALUES
(1, 'DKI_proposal1', 'dfgdfg', NULL, '435', '2022-09-24 16:39:28', 'DKI_proposal1.png', 'surat rekomendasi proposal', 'DKI_proposal6.png', NULL),
(2, 'DKI_proposal2', 'dfth', NULL, '54', '2022-09-24 16:40:04', 'DKI_proposal2.png', 'surat rekomendasi proposal', 'DKI_proposal61.png', NULL),
(3, 'DKI_nikah1', 'asas, dsfsdf', NULL, '0811595952', '2022-09-25 09:43:31', 'DKI_nikah1.png', 'surat pengantar menikah', 'DKI_proposal62.png', NULL),
(4, 'DKI_nikah2', 'fdgfdg, dfgfgfg', NULL, '0811595952', '2022-09-25 10:05:41', 'DKI_nikah2.png', 'surat pengantar menikah', 'DSC_9514_(1).jpg', 'ktp.jpeg'),
(5, 'DKI_nikah3', 'desfdsf, asdsad', NULL, '213213213213', '2022-09-25 21:57:17', 'DKI_nikah3.png', 'surat pengantar menikah', 'ktp1.jpeg', 'ktp2.jpeg'),
(6, 'DKI_nikah4', 'Udin, Shanti', NULL, '0811595952', '2022-09-26 20:58:16', 'DKI_nikah4.png', 'surat pengantar menikah', 'ktp3.jpeg', 'ktp4.jpeg'),
(7, 'DKI_proposal3', 'Jundan', NULL, '0811595952', '2022-09-30 06:28:23', 'DKI_proposal3.png', 'surat rekomendasi proposal', 'pexels-tom-fisk-1846336.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `s_id` int(8) NOT NULL,
  `s_1` varchar(37) DEFAULT NULL,
  `s_2` varchar(37) DEFAULT NULL,
  `s_3` varchar(37) DEFAULT NULL,
  `s_4` varchar(37) DEFAULT NULL,
  `s_5` varchar(37) DEFAULT NULL,
  `s_6` varchar(37) DEFAULT NULL,
  `s_7` varchar(37) DEFAULT NULL,
  `s_8` varchar(37) DEFAULT NULL,
  `s_9` varchar(37) DEFAULT NULL,
  `s_10` varchar(37) DEFAULT NULL,
  `s_11` varchar(37) DEFAULT NULL,
  `s_12` varchar(37) DEFAULT NULL,
  `s_13` varchar(37) DEFAULT NULL,
  `s_14` varchar(37) DEFAULT NULL,
  `s_15` varchar(37) DEFAULT NULL,
  `s_16` varchar(37) DEFAULT NULL,
  `s_17` varchar(37) DEFAULT NULL,
  `s_18` varchar(16) DEFAULT NULL,
  `s_19` varchar(10) DEFAULT NULL,
  `s_20` varchar(30) DEFAULT NULL,
  `s_21` varchar(13) DEFAULT NULL,
  `s_22` varchar(20) DEFAULT NULL,
  `s_23` varchar(35) DEFAULT NULL,
  `s_24` varchar(35) DEFAULT NULL,
  `s_25` varchar(35) DEFAULT NULL,
  `s_26` varchar(16) DEFAULT NULL,
  `s_27` varchar(20) DEFAULT NULL,
  `s_28` varchar(30) DEFAULT NULL,
  `s_29` varchar(10) DEFAULT NULL,
  `s_30` varchar(15) DEFAULT NULL,
  `s_31` varchar(20) DEFAULT NULL,
  `s_32` varchar(35) DEFAULT NULL,
  `s_33` varchar(35) DEFAULT NULL,
  `s_34` varchar(16) DEFAULT NULL,
  `s_35` varchar(10) DEFAULT NULL,
  `s_36` varchar(20) DEFAULT NULL,
  `s_37` varchar(15) DEFAULT NULL,
  `s_38` varchar(20) DEFAULT NULL,
  `s_39` varchar(35) DEFAULT NULL,
  `s_40` varchar(35) DEFAULT NULL,
  `s_41` varchar(35) DEFAULT NULL,
  `s_42` varchar(16) DEFAULT NULL,
  `s_43` varchar(15) DEFAULT NULL,
  `s_44` varchar(20) DEFAULT NULL,
  `s_45` varchar(15) DEFAULT NULL,
  `s_46` varchar(20) DEFAULT NULL,
  `s_47` varchar(35) DEFAULT NULL,
  `s_48` varchar(35) DEFAULT NULL,
  `s_49` varchar(30) DEFAULT NULL,
  `sd_1` date DEFAULT NULL,
  `sd_2` date DEFAULT NULL,
  `sd_3` date DEFAULT NULL,
  `sd_4` date DEFAULT NULL,
  `sd_5` date DEFAULT NULL,
  `sd_6` date DEFAULT NULL,
  `sd_7` datetime DEFAULT NULL,
  `s_stal1` varchar(1) DEFAULT NULL,
  `s_stal2` varchar(1) DEFAULT NULL,
  `s_stal3` varchar(1) DEFAULT NULL,
  `s_stal4` varchar(1) DEFAULT NULL,
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
  `s_kodeproses` int(1) DEFAULT NULL,
  `s_nojenis` varchar(1) DEFAULT NULL,
  `s_arsip` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`s_id`, `s_1`, `s_2`, `s_3`, `s_4`, `s_5`, `s_6`, `s_7`, `s_8`, `s_9`, `s_10`, `s_11`, `s_12`, `s_13`, `s_14`, `s_15`, `s_16`, `s_17`, `s_18`, `s_19`, `s_20`, `s_21`, `s_22`, `s_23`, `s_24`, `s_25`, `s_26`, `s_27`, `s_28`, `s_29`, `s_30`, `s_31`, `s_32`, `s_33`, `s_34`, `s_35`, `s_36`, `s_37`, `s_38`, `s_39`, `s_40`, `s_41`, `s_42`, `s_43`, `s_44`, `s_45`, `s_46`, `s_47`, `s_48`, `s_49`, `sd_1`, `sd_2`, `sd_3`, `sd_4`, `sd_5`, `sd_6`, `sd_7`, `s_stal1`, `s_stal2`, `s_stal3`, `s_stal4`, `s_nosurat`, `s_jabatan`, `s_ttd`, `s_kodettd`, `s_qr`, `s_kodepelayanan`, `s_tglsurat`, `s_tglbuat`, `s_tgledit`, `s_tglhapus`, `s_tglselesai`, `s_proses`, `s_edit`, `s_hapus`, `s_jenispelayanan`, `s_ket`, `s_kodeproses`, `s_nojenis`, `s_arsip`) VALUES
(1, 'Jundan restu alam', 'Indexim', '837$!:8:', 'Jsjusjshs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100/001/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR1.png', 'DKI_proposal1', '2022-09-11', '2022-09-11 21:01:27', NULL, NULL, '2022-09-15 10:43:51', 'admin', NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(2, 'abdullah', '6408053007910001', 'Perempuan', 'Manubar', 'Islam', 'buruh', 'jl.a.yani', 'PT.Cindera Mata Bersama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102/002/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR2.png', 'DKI_kerja1', '2022-09-12', '2022-09-12 20:47:22', '2022-09-20 11:29:00', NULL, '2022-09-12 20:47:33', 'admin', 'admin', NULL, 'surat rekomendasi kerja', NULL, 1, NULL, NULL),
(3, 'riki kurnia', 'CV. Bumi Perkasa', '017/cv/BP/SKL', 'Bantuan Dana Kemanusiaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal2', NULL, NULL, NULL, NULL, '2022-09-20 17:03:09', NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 2, NULL, NULL),
(4, 'ronaldo', '6408053007910032', 'Laki-Laki', 'turki', 'Konghucu', 'Nelayan', 'jl.M.T Hariono', 'Nelayan Jaya Makmur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '004IX/2022', 'kepala desa', 'jabir', 1, 'QR4.png', 'DKI_pkerja1', '2022-09-11', '2022-09-12 21:07:19', NULL, NULL, '2022-09-12 21:16:24', 'admin', NULL, NULL, 'surat pengantar rekom kerja', NULL, 1, NULL, NULL),
(5, 'abdul ', '6408053007910009', 'sangatta', 'Katolik', 'pemanen buah sawit', 'jl.haji alex', 'Dompet Kosong', 'indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-04-05', '2022-09-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_hilang1', NULL, NULL, NULL, NULL, '2022-09-21 22:20:07', NULL, NULL, NULL, 'surat pengantar kehilangan', NULL, 2, NULL, NULL),
(6, 'jundan', 'PT Indexim', '08080808', 'Proposal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100/004/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR6.png', NULL, '2022-09-13', '2022-09-13 20:43:27', NULL, NULL, '2022-09-13 20:48:47', 'admin', NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(7, 'dfd', 'dsfdsf', 'dfdsf', 'dfdsf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100/005/pem/IX/2022', '', 'jabir', 0, 'QR6.png', NULL, '2022-09-13', '2022-09-13 20:01:12', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat rekomendasi proposal', NULL, 2, NULL, NULL),
(8, 'ygfyy', 'bhib', 'bihbuib', 'uhbuhb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100/006/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR8.png', 'DKI_proposal4', '2022-09-20', '2022-09-20 07:04:41', NULL, NULL, '2022-09-21 22:21:17', 'admin', NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(9, 'Jundan', '8383838844884844', 'Laki-Laki', 'Demak', 'Islam', 'Pns', 'Jln. Ggggggg', 'Kpc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1993-06-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102/014/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR20.png', 'DKI_kerja2', '2022-09-21', '2022-09-21 13:14:17', NULL, NULL, '2022-09-21 22:22:59', 'admin', NULL, NULL, 'surat rekomendasi kerja', NULL, 1, NULL, NULL),
(10, 'Yahya', 'Laki-Laki', 'Samarinda', 'Islam', 'Jl. Jdjehdj', '1', 'Jundan', 'Demak', 'Islam', 'Pns', 'Jln. Aji suryanata', 'Yuniarti', 'Balikpapan', 'Islam', 'Tk2d', 'Jl. Aji suryanata', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-30', '1993-06-27', '1992-07-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_lahir1', NULL, NULL, NULL, NULL, '2022-09-21 22:18:05', NULL, NULL, NULL, 'surat keterangan kelahiran', NULL, 2, NULL, NULL),
(11, 'Chandra Fristiawan Prima', '6408041302950001', 'Bontang', 'Islam', 'Pegawai Negeri Sipil', 'Kartu Tanda Pengenal, Kartu Keluarga', 'Indonesia', 'Jl Yos Sudarso 1 No 68', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1995-02-13', '2022-09-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '109/007/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR11.png', 'DKI_hilang2', '2022-09-21', '2022-09-20 12:36:01', '2022-09-20 11:36:37', '2022-09-20 13:17:52', '2022-09-21 22:23:19', 'admin', 'admin', 'admin', 'surat pengantar kehilangan', NULL, 1, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '109/009/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR14.png', 'DKI_hilang3', '2022-09-20', '2022-09-20 13:48:57', NULL, NULL, '2022-09-21 22:23:31', 'admin', NULL, NULL, 'surat pengantar kehilangan', NULL, 1, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_hilang4', NULL, NULL, NULL, NULL, '2022-09-21 09:23:10', NULL, NULL, NULL, 'surat pengantar kehilangan', NULL, 2, NULL, NULL),
(14, 'Chandra ', '4738388383940482', 'Bontang', 'Islam', 'PNS', 'Jl Yos Sudarso ', 'Ktp ', 'Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1995-02-13', '2022-09-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '109/008/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR14.png', 'DKI_hilang5', '2022-09-19', '2022-09-20 13:23:11', NULL, NULL, '2022-09-21 22:23:43', 'admin', NULL, NULL, 'surat pengantar kehilangan', NULL, 1, NULL, NULL),
(15, 'CHANDAR', '1956526565485455', 'Laki-Laki', 'BONTANG', 'Islam', 'BURUH', 'JL YOS SUDARSO', 'PT KALTIM CEMERLANG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1995-02-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102/010/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR14.png', NULL, '2022-09-19', '2022-09-20 16:00:29', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat rekomendasi kerja', NULL, 3, NULL, NULL),
(16, 'BUDI', '1565665231846566', 'Laki-Laki', 'BONTANG', 'Islam', 'BURUH', 'JL YOS SUDARSO', 'PT.Cindera Mata Bersama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1998-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_kerja3', NULL, NULL, NULL, NULL, '2022-09-20 17:09:44', NULL, NULL, NULL, 'surat rekomendasi kerja', NULL, 2, NULL, NULL),
(17, 'Adhyaksa', '7204020612910002', 'Laki-Laki', 'Soni', 'Islam', 'Honorer', 'Munif Rahman II Silae', 'IMIP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1991-12-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102/011/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR17.png', 'DKI_kerja4', '2022-09-21', '2022-09-20 17:20:08', NULL, NULL, '2022-09-20 17:19:15', 'admin', NULL, NULL, 'surat rekomendasi kerja', NULL, 1, NULL, NULL),
(18, 'Adhyaksa', '7204020912950001', 'Laki-Laki', 'Soni', 'Honorer', 'Jl. Baruga', '002', 'Kios', 'Munif Rahman II', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1993-09-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '103/012/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR18.png', 'DKI_usaha1', '2022-09-20', '2022-09-20 17:29:32', NULL, NULL, '2022-09-20 17:30:55', 'admin', NULL, NULL, 'surat keterangan usaha', NULL, 1, NULL, NULL),
(19, 'Adhyaksa', '7204020612910003', 'Soni', 'Islam', 'Honorer', 'Munif Rahman II', 'KTP', 'Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1982-09-20', '2022-09-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_hilang6', NULL, NULL, NULL, NULL, '2022-09-21 22:18:45', NULL, NULL, NULL, 'surat pengantar kehilangan', NULL, 2, NULL, NULL),
(20, 'Indra', '7271024565470001', 'Perempuan', 'Palu', 'Indonesia', 'Islam', 'Menikah', 'Pegawai Negeri Sipil', 'Diploma IV / S1', 'Jl Kartini', 'Jl Soekarno-Hatta', 'Samarinda Hilir', 'Samarinda', 'Samarinda', 'Kalimantan Timur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-06-18', '2022-09-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '013IX/2022', 'kepala desa', 'jabir', 1, 'QR20.png', 'DKI_pindah1', '2022-09-23', '2022-09-21 09:24:46', NULL, NULL, '2022-09-21 22:23:54', 'admin', NULL, NULL, 'surat keterangan pindah', NULL, 1, NULL, NULL),
(21, 'Test', 'Test', 'Test', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal5', NULL, NULL, NULL, NULL, '2022-09-21 22:19:17', NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 2, NULL, NULL),
(22, 'VERA MAGDALENA LAMPAH, S.PD', '7102055402680001', 'Perempuan', 'KAWATUNA', 'Kristen', 'PEGAWAI NEGERI SIPIL', 'BTN KORPRI KAWATUNA BLOK A/9', 'KPC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2005-02-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102/015/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR21.png', NULL, '2022-09-23', '2022-09-22 08:50:37', NULL, '2022-09-30 07:08:36', NULL, 'admin', NULL, 'admin', 'surat rekomendasi kerja', NULL, 3, NULL, NULL),
(23, 'KISMAN LAUSIA', 'INDO JAYA', '01/02XX1/2022', 'PROPOSAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100/016/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR22.png', NULL, '2022-09-12', '2022-09-22 09:11:24', '2022-09-22 09:14:30', NULL, NULL, 'admin', 'admin', NULL, 'surat rekomendasi proposal', NULL, 3, NULL, NULL),
(24, 'ANDI ASLAN', '7271042001860002', 'Laki-Laki', 'SIRANINDI', 'Islam', 'PNS', 'BTN KORPRI KAWATUNA NO HP : 082348773', 'JAYA SELALU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1999-06-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '017IX/2022', 'kepala desa', 'jabir', 1, 'QR23.png', NULL, '2022-09-22', '2022-09-22 09:21:38', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat pengantar rekom kerja', NULL, 3, NULL, NULL),
(25, 'JASMAN', '7208081705840001', 'PALU', 'Islam', 'PNS ', 'BTN KAWATUNA BLOK C 2 NO. 47 NO HP : ', 'KTP, KK, SIM', 'INDONESIA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2002-06-22', '2022-09-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '109/018/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR24.png', NULL, '2022-09-23', '2022-09-22 09:32:46', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat pengantar kehilangan', NULL, 3, NULL, NULL),
(26, 'MERYNA DAPA', '7210086508680001', 'Laki-Laki', 'BONTANG', 'INDONESIA', 'Islam', 'Menikah', 'GURU', 'PERUM KAWATUNA BLOK A2 NO. 14', 'POLRES SANGATTA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2002-06-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '019IX/2022', 'sekretaris desa', 'udin', 2, 'QR25.png', NULL, '2022-09-23', '2022-09-22 10:06:49', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat pengantar skck', NULL, 3, NULL, NULL),
(27, 'BASO BARAHIMA', '7271022806740004', 'Laki-Laki', 'SAMARINDA', 'PNS', 'PERUM. BTN KORPRI KAWATUNA KENCANA NO', '3', 'BENGKEL', 'PERUM. BTN KORPRI KAWATUNA KENCANA NO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2004-06-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '103/020/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR26.png', NULL, '2022-09-23', '2022-09-22 10:13:27', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan usaha', NULL, 3, NULL, NULL),
(28, 'RACHEL FERLY', 'Laki-Laki', 'SIGI', 'INDONESIA', 'Islam', '7271035902730002', 'Menikah', 'GURU', 'BTN KORPRI BLOK C 1 NO. 18 NO HP : 08', 'MELAMAR PEKERJAAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2007-06-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '104/021/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR27.png', NULL, '2022-09-23', '2022-09-22 10:20:05', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan domisili', NULL, 3, NULL, NULL),
(29, 'MURHANASYAMSI ALAM', '7271035201900005', 'Perempuan', 'BONTANG', 'INDONESIA', 'Islam', 'Janda', 'GURU', 'Diploma IV / S1', 'BTN KAWATUNA BLOK A2 NO 4', 'JL YOS SUDARSO', 'POBOYA', 'MANTIKULORE', 'PALU', 'SULAWESI TENGAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2002-07-22', '2022-09-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '022IX/2022', 'kepala desa', 'jabir', 1, 'QR28.png', NULL, '2022-09-23', '2022-09-22 10:32:38', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan pindah', NULL, 3, NULL, NULL),
(30, 'asdfdsaf', 'sadsad', 'sadsad', 'sadsad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(31, 'Jundan', '1212121212121212', 'Laki-Laki', 'Sangkulirang', 'Islam', 'Swasta', 'Jl. Aji Suryanata', 'PT. SAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2009-06-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102/023/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR31.png', 'DKI_kerja5', '2022-09-23', '2022-09-23 10:36:22', NULL, NULL, '2022-09-23 10:38:52', 'admin', NULL, NULL, 'surat rekomendasi kerja', NULL, 1, NULL, NULL),
(32, 'Agung Saputro', '1212121212122121', 'Laki-Laki', 'Sangkulirang', 'Islam', 'Swasta', 'sangkulirang', 'PT SAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102/024/pem/IX/2022', 'sekretaris desa', 'udin', 2, 'QR31.png', NULL, '2022-09-23', '2022-09-23 09:47:41', '2022-09-23 09:48:54', NULL, NULL, 'admin', 'admin', NULL, 'surat rekomendasi kerja', NULL, 3, NULL, NULL),
(33, 'Lincinwa', '6408167101960003', 'Perempuan', 'Datah Bilang', 'Kristen', 'Swasta', 'Jl. A. Yani', 'PT. SAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1996-01-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102/025/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR33.png', 'DKI_kerja6', '2022-09-23', '2022-09-23 11:12:49', NULL, NULL, '2022-09-24 09:35:31', 'admin', NULL, NULL, 'surat rekomendasi kerja', NULL, 1, NULL, NULL),
(34, 'cjggjv', 'jgjgfug', 'fjgfgv', 'jyfuyfuy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(35, 'uvuvv', 'ggchgf', 'hgygf', 'hghgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(36, 'uvuvv', 'ggchgf', 'hgygf', 'hghgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(37, 'uvuvv', 'ggchgf', 'hgygf', 'hghgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(38, 'jyfufu', 'rearea', 'rreaer', 'trtrs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(39, 'jyfufu', 'rearea', 'rreaer', 'trtrs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(40, 'jgfuyuggtt', 'trstrrs', 'trsrs', 'trstrw', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(41, 'tstr', 'reaeea', 'reaets', 'trstrs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(42, 'NURAINI', 'SIGI', 'INDONESIA', 'Islam', 'BURUH', 'JL. KEBUN SARI BTN KORPRI BLOK A2 NO.', '16:24', 'JL. KEBUN SARI BTN KORPRI BLOK A2 NO.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-02-27', '2022-09-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '105/026/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR41.png', NULL, '2022-09-25', '2022-09-24 15:25:11', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan kematian', NULL, 3, NULL, NULL),
(43, 'NAWIR', 'Laki-Laki', 'BONTANG', 'Islam', 'JL. YOS SUDARSO NO. 31 LRG. SAHABAT T', '1', 'BUDI', 'BONTANG', 'Islam', 'GURU', 'JL. YOS SUDARSO NO. 31 LRG. SAHABAT T', 'ASRI', 'BALI', 'Islam', 'GURU', 'JL. YOS SUDARSO NO. 31 LRG. SAHABAT T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-24', '1999-06-24', '2008-06-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '106/027/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR42.png', NULL, '2022-09-25', '2022-09-24 15:29:01', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan kelahiran', NULL, 3, NULL, NULL),
(44, 'PAKSI GUNAWAN', '7271082402950003', 'Laki-Laki', 'BANDUNG', 'Islam', 'INDONESIA', 'Menikah', 'PNS', 'JL. HANG TUAH LRG. BUKIT SOFA 146 B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2011-06-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '028IX/2022', 'sekretaris desa', 'udin', 2, 'QR43.png', NULL, '2022-09-30', '2022-09-24 15:32:14', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat keterangan tidak mampu', NULL, 3, NULL, NULL),
(45, 'Jdjd', 'Jdjdj', 'Jdjdj', 'Jdjdj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DKI_proposal15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'surat rekomendasi proposal', NULL, 1, NULL, NULL),
(46, 'desfdsf', '2132132132133221', 'asdsad', 'asdsad', 'Islam', 'Indonesia', 'Jejaka', 'sangkulirang', 'asdsad', '', NULL, '', '', '', '', 'sadsad', 'fssdfdsf', '', NULL, '', '', '', '', 'sadsad', 'asdsad', '2132132132322222', 'sadsad', 'asd', 'Islam', 'Indonesia', 'Perawan', 'sangkulirang', 'wqesd', '', NULL, '', '', '', '', 'adsad', '', '', NULL, '', '', '', '', 'sadsd', 'asdsad', '2022-09-25', '0000-00-00', '0000-00-00', '2022-09-25', '0000-00-00', '0000-00-00', '2022-09-25 21:57:00', '1', '1', '1', '1', '101/029/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR46.png', 'DKI_nikah3', '2022-09-26', '2022-09-26 20:45:55', NULL, NULL, NULL, 'admin', NULL, 'admin', 'surat pengantar menikah', NULL, 1, NULL, NULL),
(47, 'Udin', '1212121212121212', 'Swasta', 'Sangkulirang', 'Islam', 'Indonesia', 'Jejaka', 'sangkulirang', 'Baco', '1313131331133113', 'Islam', 'Sangkulirang', 'Indonesia', 'Swasta', 'sangkulirang', 'Aco', 'Baco', '1313131313131313', 'Islam', 'Sangkulirang', 'Indonesia', 'IRT', 'sangkulirang', 'siti', 'Shanti', '1313131313133333', 'Guru', 'Sangkulirang', 'Islam', 'Indonesia', 'Perawan', 'sangkulirang', 'Ahmad', '0909090909090909', 'Islam', 'Sangkulirang', 'Indonesia', 'Swasta', 'sangkulirang', 'Adi', 'Rukayah', '0909090909090909', 'Islam', 'Sangkulirang', 'Indonesia', 'IRT', 'sangkulirang', 'Aminah', 'Sangkulirang', '2022-09-26', '2022-09-26', '2022-09-26', '2022-09-26', '2022-09-26', '2022-09-26', '2022-09-26 20:58:00', '', '', '', '', '101/030/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR47.png', 'DKI_nikah4', '2022-09-26', '2022-09-26 20:58:37', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat pengantar menikah', NULL, 1, NULL, NULL),
(48, 'Jundan', 'PT. IPS', '090900909', 'Permohonan Kerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100/001/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR47.png', NULL, '2022-09-30', '2022-09-30 05:27:26', NULL, NULL, NULL, 'admin', NULL, NULL, 'surat rekomendasi proposal', NULL, 3, '1', '6472065307920002_kartuAkun_(1).pdf'),
(49, 'Jundan', 'Pt. Indexim', '6786786578567', 'dfgdfgdfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100/002/pem/IX/2022', 'kepala desa', 'jabir', 1, 'QR49.png', 'DKI_proposal3', '2022-09-30', '2022-09-30 06:44:10', NULL, NULL, '2022-09-30 06:44:32', 'admin', NULL, NULL, 'surat rekomendasi proposal', NULL, 1, '1', '2019-20201.pdf'),
(50, 'Jundan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100/003.a/PEM/X/2022', 'kepala desa', 'jabir', 1, NULL, NULL, '2022-09-01', '2022-10-01 16:52:29', '2022-10-01 16:55:13', NULL, NULL, 'admin', 'admin', 'admin', 'Surat Keterangan', NULL, 3, '2', NULL);

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
-- Indexes for table `arsip_manual`
--
ALTER TABLE `arsip_manual`
  ADD PRIMARY KEY (`a_id`);

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
-- AUTO_INCREMENT for table `arsip_manual`
--
ALTER TABLE `arsip_manual`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `p_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `s_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `ttd`
--
ALTER TABLE `ttd`
  MODIFY `tt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

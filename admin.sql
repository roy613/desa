-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 05:16 AM
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
  `n_kodeunik` varchar(5) DEFAULT NULL,
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

INSERT INTO `nikah` (`n_id`, `n_nama_1`, `n_nik_1`, `n_tptlahir_1`, `n_tgllahir_1`, `n_kwn_1`, `n_agama_1`, `n_job_1`, `n_alamat_1`, `n_status_1`, `n_nama_11`, `n_nik_11`, `n_tptlahir_11`, `n_tgllahir_11`, `n_kwn_11`, `n_agama_11`, `n_job_11`, `n_alamat_11`, `n_nama_12`, `n_nik_12`, `n_tptlahir_12`, `n_tgllahir_12`, `n_kwn_12`, `n_agama_12`, `n_job_12`, `n_alamat_12`, `n_nama_2`, `n_nik_2`, `n_tptlahir_2`, `n_tgllahir_2`, `n_kwn_2`, `n_agama_2`, `n_job_2`, `n_alamat_2`, `n_status_2`, `n_nama_21`, `n_nik_21`, `n_tptlahir_21`, `n_tgllahir_21`, `n_kwn_21`, `n_agama_21`, `n_job_21`, `n_alamat_21`, `n_nama_22`, `n_nik_22`, `n_tptlahir_22`, `n_tgllahir_22`, `n_kwn_22`, `n_agama_22`, `n_job_22`, `n_alamat_22`, `n_bin_11`, `n_binti_12`, `n_bin_21`, `n_binti_22`, `n_lokasi`, `n_waktu`, `n_kodeunik`, `n_nojenis`, `n_arsip`, `n_buat`, `n_edit`, `n_hapus`, `n_tglmohon`, `n_tglbuat`, `n_tgledit`, `n_tglhapus`, `n_qr`, `n_nomor`, `n_tglsurat`, `n_ttd`, `n_jabttd`, `n_nipttd`, `n_golttd`, `n_mpket`, `n_status`) VALUES
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
  `pe_kode` varchar(11) DEFAULT NULL,
  `pe_nama` varchar(30) DEFAULT NULL,
  `pe_alamat` varchar(30) DEFAULT NULL,
  `pe_handphone` varchar(30) DEFAULT NULL,
  `pe_tgl` datetime DEFAULT NULL,
  `pe_qr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`pe_id`, `pe_kode`, `pe_nama`, `pe_alamat`, `pe_handphone`, `pe_tgl`, `pe_qr`) VALUES
(1, 'DKI_nikah5', 'dsfsdf', NULL, NULL, NULL, 'DKI_nikah5.png'),
(2, 'DKI_nikah6', 'dsfsdf', NULL, NULL, NULL, 'DKI_nikah6.png'),
(3, 'DKI_nikah7', 'sdvfsfdv', NULL, NULL, '2022-09-04 16:22:11', 'DKI_nikah7.png'),
(4, 'DKI_nikah8', 'sdvfsfdv', NULL, NULL, '2022-09-04 16:22:59', 'DKI_nikah8.png'),
(5, 'DKI_nikah9', 'dsfcdsf', NULL, NULL, '2022-09-04 16:24:59', 'DKI_nikah9.png'),
(6, 'DKI_nikah10', 'dsfcdsf', NULL, NULL, '2022-09-04 16:25:20', 'DKI_nikah10.png'),
(7, 'DKI_nikah11', 'sdsdfdf', NULL, NULL, '2022-09-04 16:26:34', 'DKI_nikah11.png');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `p_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

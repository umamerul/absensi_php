-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 03:58 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absensi` int(10) NOT NULL,
  `id_jadwal` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `ket` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absensi`, `id_jadwal`, `tanggal`, `nis`, `ket`) VALUES
(36, 1, '2016-01-04', '15001', 'H'),
(37, 1, '2016-01-04', '15002', 'H'),
(38, 1, '2016-01-04', '15001', 'H'),
(39, 1, '2016-01-04', '15002', 'H'),
(40, 25, '2016-01-04', '13001', 'H'),
(41, 25, '2016-01-04', '13002', 'S'),
(42, 25, '2016-01-04', '13003', 'H'),
(43, 15, '2016-01-04', '14001', 'S'),
(44, 15, '2016-01-04', '14002', 'H'),
(45, 12, '2016-01-04', '14001', 'H'),
(46, 12, '2016-01-04', '14002', 'H'),
(47, 3, '2016-01-04', '15001', 'H'),
(48, 3, '2016-01-04', '15002', 'I'),
(49, 26, '2016-01-04', '13001', 'I'),
(50, 26, '2016-01-04', '13002', 'H'),
(51, 26, '2016-01-04', '13003', 'H'),
(52, 5, '2016-01-04', '15001', 'A'),
(53, 5, '2016-01-04', '15002', 'H'),
(54, 23, '2016-01-04', '13001', 'A'),
(55, 23, '2016-01-04', '13002', 'H'),
(56, 23, '2016-01-04', '13003', 'H'),
(57, 13, '2016-01-04', '14001', 'H'),
(58, 13, '2016-01-04', '14002', 'H'),
(59, 4, '2016-01-04', '15001', 'I'),
(60, 4, '2016-01-04', '15002', 'H'),
(61, 27, '2016-01-04', '13001', 'H'),
(62, 27, '2016-01-04', '13002', 'S'),
(63, 27, '2016-01-04', '13003', 'A'),
(64, 16, '2016-01-04', '14001', 'H'),
(65, 16, '2016-01-04', '14002', 'H'),
(66, 6, '2016-01-05', '15001', 'H'),
(67, 6, '2016-01-05', '15002', 'I'),
(68, 29, '2016-01-05', '13001', 'H'),
(69, 29, '2016-01-05', '13002', 'H'),
(70, 29, '2016-01-05', '13003', 'H'),
(71, 20, '2016-01-05', '14001', 'I'),
(72, 20, '2016-01-05', '14002', 'A'),
(73, 21, '2016-01-05', '14001', 'H'),
(74, 21, '2016-01-05', '14002', 'H'),
(75, 17, '2016-01-05', '14001', 'H'),
(76, 17, '2016-01-05', '14002', 'H'),
(77, 7, '2016-01-05', '15001', 'S'),
(78, 7, '2016-01-05', '15002', 'H'),
(79, 10, '2016-01-05', '15001', 'S'),
(80, 10, '2016-01-05', '15002', 'H'),
(81, 31, '2016-01-05', '13001', 'H'),
(82, 31, '2016-01-05', '13002', 'A'),
(83, 31, '2016-01-05', '13003', 'H'),
(86, 28, '2016-01-05', '13001', 'H'),
(87, 28, '2016-01-05', '13002', 'A'),
(88, 28, '2016-01-05', '13003', 'H'),
(89, 18, '2016-01-05', '14001', 'H'),
(90, 18, '2016-01-05', '14002', 'H'),
(91, 32, '2016-01-05', '13001', 'H'),
(92, 32, '2016-01-05', '13002', 'A'),
(93, 32, '2016-01-05', '13003', 'H'),
(94, 15, '2016-01-04', '14001', 'H'),
(95, 15, '2016-01-04', '14002', 'H'),
(96, 39, '2016-01-06', '14001', 'H'),
(97, 39, '2016-01-06', '14002', 'H'),
(98, 34, '2016-01-06', '15001', 'H'),
(99, 34, '2016-01-06', '15002', 'H'),
(100, 46, '2016-01-06', '13001', 'H'),
(101, 46, '2016-01-06', '13002', 'H'),
(102, 46, '2016-01-06', '13003', 'H'),
(103, 43, '2016-01-06', '14001', 'H'),
(104, 43, '2016-01-06', '14002', 'H'),
(105, 48, '2016-01-06', '13001', 'H'),
(106, 48, '2016-01-06', '13002', 'H'),
(107, 48, '2016-01-06', '13003', 'H'),
(108, 37, '2016-01-06', '15001', 'H'),
(109, 37, '2016-01-06', '15002', 'H'),
(110, 1, '2016-01-11', '15001', 'H'),
(111, 1, '2016-01-11', '15002', 'H'),
(112, 25, '2016-01-11', '13001', 'H'),
(113, 25, '2016-01-11', '13002', 'H'),
(114, 25, '2016-01-11', '13003', 'H'),
(115, 15, '2016-01-11', '14001', 'H'),
(116, 15, '2016-01-11', '14002', 'H'),
(117, 39, '2016-01-13', '14001', 'S'),
(118, 39, '2016-01-13', '14002', 'S'),
(119, 34, '2016-01-13', '15001', 'I'),
(120, 34, '2016-01-13', '15002', 'I'),
(121, 46, '2016-01-13', '13001', 'A'),
(122, 46, '2016-01-13', '13002', 'A'),
(123, 46, '2016-01-13', '13003', 'A'),
(124, 43, '2016-01-13', '14001', 'S'),
(125, 43, '2016-01-13', '14002', 'S'),
(126, 48, '2016-01-13', '13001', 'I'),
(127, 48, '2016-01-13', '13002', 'I'),
(128, 48, '2016-01-13', '13003', 'I'),
(129, 37, '2016-01-13', '15001', 'A'),
(130, 37, '2016-01-13', '15002', 'A'),
(131, 1, '2016-01-18', '15001', 'H'),
(132, 1, '2016-01-18', '15002', 'H'),
(133, 25, '2016-01-18', '13001', 'H'),
(134, 25, '2016-01-18', '13002', 'H'),
(135, 25, '2016-01-18', '13003', 'H'),
(136, 15, '2016-01-18', '14001', 'H'),
(137, 15, '2016-01-18', '14002', 'H'),
(138, 39, '2016-01-20', '14001', 'H'),
(139, 39, '2016-01-20', '14002', 'H'),
(140, 34, '2016-01-20', '15001', 'H'),
(141, 34, '2016-01-20', '15002', 'H'),
(142, 46, '2016-01-20', '13001', 'H'),
(143, 46, '2016-01-20', '13002', 'H'),
(144, 46, '2016-01-20', '13003', 'H'),
(145, 48, '2016-01-20', '13001', 'H'),
(146, 48, '2016-01-20', '13002', 'H'),
(147, 48, '2016-01-20', '13003', 'H'),
(148, 37, '2016-01-20', '15001', 'H'),
(149, 37, '2016-01-20', '15002', 'H'),
(150, 43, '2016-01-20', '14001', 'H'),
(151, 43, '2016-01-20', '14002', 'H'),
(152, 84, '2016-04-09', '13001', 'H'),
(153, 84, '2016-04-09', '13002', 'H'),
(154, 84, '2016-04-09', '13003', 'S'),
(155, 84, '2016-04-09', '13004', 'H'),
(156, 84, '2016-04-09', '13102001', 'I'),
(157, 1, '2016-04-04', '15001', 'H'),
(158, 1, '2016-04-04', '15002', 'S'),
(159, 25, '2016-04-04', '13001', 'H'),
(160, 25, '2016-04-04', '13002', 'H'),
(161, 25, '2016-04-04', '13003', 'S'),
(162, 25, '2016-04-04', '13004', 'I'),
(163, 25, '2016-04-04', '13102001', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensih`
--

CREATE TABLE `tb_absensih` (
  `id_absensih` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `ket` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensih`
--

INSERT INTO `tb_absensih` (`id_absensih`, `tanggal`, `nis`, `ket`) VALUES
(6, '2016-03-19', '15002', 'S'),
(5, '2016-03-19', '15001', 'H'),
(7, '2016-04-09', '13001', 'H'),
(8, '2016-04-09', '13002', 'H'),
(9, '2016-04-09', '13003', 'S'),
(10, '2016-04-09', '13004', 'H'),
(11, '2016-04-09', '13102001', 'I'),
(12, '2016-04-04', '15001', 'H'),
(13, '2016-04-04', '15002', 'S'),
(14, '2016-04-04', '13001', 'H'),
(15, '2016-04-04', '13002', 'H'),
(16, '2016-04-04', '13003', 'S'),
(17, '2016-04-04', '13004', 'I'),
(18, '2016-04-04', '13102001', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(3) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_guru` varchar(40) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `kode_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`) VALUES
(9, '16102001', 'ASEP DUDI S.AG.,M.SI', 'A', 'LAKI-LAKI', 'CIBUBUR', '1963-07-03', 'TASIKMALAYA', 'ISLAM'),
(10, '16102002', 'UJANG DANI MS, S.PD', 'B', 'LAKI-LAKI', 'GARUT', '1968-08-15', 'TASIKMALAYA', 'ISLAM'),
(11, '16102003', 'ASEP FUADJA, S.PD', 'C', 'LAKI-LAKI', 'GARUT', '1967-10-15', 'TASIKMALAYA', 'ISLAM'),
(12, '16102004', 'DRS.DEDI AFENDI', 'D', 'LAKI-LAKI', 'BOGOR', '1958-02-07', 'TASIKMALAYA', 'ISLAM'),
(13, '16102005', 'SUSILAWATI, S.PD', 'E', 'PEREMPUAN', 'JAKARTA', '1976-12-12', 'TASIKMALAYA', 'ISLAM'),
(14, '16102006', 'HANA KARINA, S.PD', 'F', 'PEREMPUAN', 'JAKARTA', '1990-11-02', 'TASIKMALAYA', 'ISLAM'),
(15, '16102007', 'SUSI SUMARNI, S.PDI', 'G', 'PEREMPUAN', 'SEMARANG', '1988-01-20', 'TASIKMALAYA', 'ISLAM'),
(17, '16102008', 'MARUF IRPAN HILMI', 'H', '', 'MAKASSAR', '1988-07-17', 'TASIKMALAYA', 'ISLAM'),
(18, '16102009', 'OPIK TAUFIK R, S.PDI.', 'I', '', 'BOGOR', '1978-12-12', 'TASIKMALAYA', 'ISLAM'),
(19, '16102010', 'DRA. NENI YOFIANI', 'J', 'PEREMPUAN', 'TASIKMALAYA', '1975-10-10', 'TASIKMALAYA', 'ISLAM'),
(20, '16102011', 'HJ. ETIN SUMIATIN, S.PD.', 'K', '', 'GARUT', '1985-04-22', 'TASIKMALAYA', 'ISLAM'),
(21, '16102012', 'ENCEP ERWIN DJEN SM, ST.', 'L', 'LAKI-LAKI', 'TASIKMALAYA', '1963-11-11', 'TASIKMALAYA', 'ISLAM'),
(22, '16102013', 'TENI SETIANI, S.PD.', 'M', 'PEREMPUAN', 'CIBUBUR', '1988-12-20', 'TASIKMALAYA', 'ISLAM'),
(23, '16102014', 'DRA. EEN NURSIAH', 'N', 'PEREMPUAN', 'BOGOR', '1969-07-18', 'TASIKMALAYA', 'ISLAM'),
(24, '16102015', 'EGA YOGASWARA, S.PD.', 'O', 'LAKI-LAKI', 'JAKARTA', '1989-07-15', 'TASIKMALAYA', 'ISLAM'),
(25, '16102016', 'GHEA NUR HIKMAH, S.PD.', 'P', 'PEREMPUAN', 'JAKARTA', '1990-12-11', 'TASIKMALAYA', 'ISLAM'),
(26, '16102017', 'AAM AMALIA, S.AG.', 'Q', 'PEREMPUAN', 'TASIKMALAYA', '1990-05-06', 'TASIKMALAYA', 'ISLAM'),
(27, '16102018', 'CEP GIAN RESNU', 'R', '', 'GARUT', '1986-08-13', 'TASIKMALAYA', 'ISLAM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_mengajar` int(4) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_berakhir` varchar(10) NOT NULL,
  `id_kelas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_mengajar`, `hari`, `jam_mulai`, `jam_berakhir`, `id_kelas`) VALUES
(1, 18, 'Senin', '07:40', '09:00', 12),
(3, 19, 'Senin', '09:10', '10:40', 12),
(4, 20, 'Senin', '10:40', '12:00', 12),
(5, 21, 'Senin', '12:20', '13:40', 12),
(6, 19, 'Selasa', '07:00', '08:20', 12),
(7, 20, 'Selasa', '08:20', '09:45', 12),
(10, 14, 'Selasa', '11:10', '13:40', 12),
(12, 19, 'Senin', '07:40', '09:00', 13),
(13, 20, 'Senin', '09:10', '10:40', 13),
(15, 18, 'Senin', '10:40', '12:00', 13),
(16, 22, 'Senin', '12:20', '13:40', 13),
(17, 20, 'Selasa', '07:00', '07:40', 13),
(18, 29, 'Selasa', '08:20', '09:45', 13),
(20, 19, 'Selasa', '10:05', '11:20', 13),
(21, 21, 'Selasa', '11:20', '13:00', 13),
(23, 20, 'Senin', '07:40', '09:00', 14),
(25, 18, 'Senin', '10:05', '10:40', 14),
(26, 19, 'Senin', '10:40', '12:00', 14),
(27, 14, 'Senin', '12:20', '13:40', 14),
(28, 29, 'Selasa', '07:00', '08:20', 14),
(29, 19, 'Selasa', '08:20', '09:45', 14),
(31, 20, 'Selasa', '10:05', '11:20', 14),
(32, 22, 'Selasa', '11:20', '13:00', 14),
(33, 16, 'Rabu', '07:00', '08:20', 12),
(34, 18, 'Rabu', '08:20', '09:45', 12),
(35, 26, 'Rabu', '09:45', '11:20', 12),
(36, 22, 'Rabu', '11:20', '01:00', 12),
(37, 38, 'Rabu', '13:00', '13:40', 12),
(38, 22, 'Rabu', '11:20', '13:00', 12),
(39, 18, 'Rabu', '07:00', '08:20', 13),
(40, 32, 'Rabu', '08:20', '09:45', 13),
(41, 17, 'Rabu', '10:05', '11:20', 13),
(42, 26, 'Rabu', '11:20', '13:00', 13),
(43, 38, 'Rabu', '13:00', '13:40', 13),
(44, 32, 'Rabu', '07:00', '08:20', 14),
(45, 21, 'Rabu', '08:20', '09:45', 14),
(46, 18, 'Rabu', '10:05', '11:20', 14),
(47, 17, 'Rabu', '11:20', '13:00', 14),
(48, 38, 'Rabu', '13:00', '13:40', 14),
(49, 23, 'Kamis', '07:00', '08:20', 12),
(50, 16, 'Kamis', '08:20', '09:45', 12),
(51, 24, 'Kamis', '10:05', '11:20', 12),
(52, 25, 'Kamis', '11:20', '13:00', 12),
(53, 28, 'Kamis', '13:00', '13:40', 12),
(54, 14, 'Kamis', '07:00', '20:20', 13),
(55, 25, 'Kamis', '08:20', '21:45', 13),
(56, 23, 'Kamis', '10:05', '11:20', 13),
(57, 24, 'Kamis', '11:20', '13:00', 13),
(58, 28, 'Kamis', '13:00', '13:40', 13),
(59, 26, 'Kamis', '07:00', '08:20', 14),
(60, 23, 'Kamis', '08:20', '09:45', 14),
(61, 25, 'Kamis', '10:05', '11:20', 14),
(62, 27, 'Kamis', '11:20', '13:00', 14),
(63, 28, 'Kamis', '13:00', '13:40', 14),
(64, 17, 'Jumat', '07:00', '08:20', 12),
(65, 30, 'Jumat', '08:20', '09:45', 12),
(66, 31, 'Jumat', '10:05', '11:20', 12),
(67, 30, 'Jumat', '07:00', '08:20', 13),
(68, 31, 'Jumat', '08:20', '09:45', 13),
(69, 32, 'Jumat', '10:05', '11:20', 13),
(70, 32, 'Jumat', '08:20', '09:45', 14),
(71, 30, 'Jumat', '10:05', '11:20', 14),
(73, 34, 'Sabtu', '08:20', '09:45', 12),
(74, 27, 'Sabtu', '10:05', '11:20', 12),
(75, 35, 'Sabtu', '11:20', '13:00', 12),
(76, 37, 'Sabtu', '13:00', '13:40', 12),
(77, 34, 'Sabtu', '07:00', '08:40', 13),
(78, 34, 'Sabtu', '07:00', '08:20', 13),
(79, 29, 'Sabtu', '08:20', '09:45', 13),
(80, 35, 'Sabtu', '10:05', '11:20', 13),
(81, 27, 'Sabtu', '11:20', '13:00', 13),
(82, 37, 'Sabtu', '13:00', '13:40', 13),
(83, 29, 'Sabtu', '07:00', '08:20', 14),
(84, 35, 'Sabtu', '08:20', '09:45', 14),
(85, 34, 'Sabtu', '10:05', '11:20', 14),
(86, 36, 'Sabtu', '11:20', '13:00', 14),
(87, 37, 'Sabtu', '13:00', '13:40', 14),
(88, 36, 'Senin', '07:00', '08:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(3) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(12, 'VII'),
(13, 'VIII'),
(14, 'IX');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(3) NOT NULL,
  `kode_mapel` varchar(5) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `kode_mapel`, `mapel`) VALUES
(8, '01', 'PENDIDIKAN AGAMA ISLAM'),
(9, '02', 'PENDIDIKAN KEWARGANERAAN'),
(10, '03', 'BAHASA INDONESIA'),
(11, '04', 'MATEMATIKA'),
(12, '05', 'ILMU PENGETAHUAN ALAM'),
(13, '06', 'ILMU PENGETAHUAN SOSIAL'),
(14, '07', 'BAHASA INGGRIS'),
(15, '08', 'SENI BUDAYA'),
(16, '09', 'PENDIDIKAN JASMANI DAN KESEHATAN (PENJASKES)'),
(17, '10', 'KETERAMPILAN'),
(18, '11', 'BAHASA SUNDA'),
(19, '12', 'TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)'),
(20, '13', 'BIMBINGAN DAN KONSELING'),
(21, '14', 'AQIDAH AKHLAK'),
(22, '15', 'AL-QURAN DAN HADIST'),
(23, '16', 'FIQIH'),
(24, '17', 'SARANA KEROHANIAN ISLAM'),
(25, '18', 'BAHASA ARAB'),
(26, '19', 'INSYA BAHASA INGGRIS'),
(27, '20', 'NAHWU SOROF'),
(28, '21', 'MAHFUDOH, INSYA BAHASA ARAB'),
(31, '22', 'BBB');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mengajar`
--

CREATE TABLE `tb_mengajar` (
  `id_mengajar` int(3) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kode_mapel` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mengajar`
--

INSERT INTO `tb_mengajar` (`id_mengajar`, `kode_guru`, `kode_mapel`) VALUES
(14, 'D', '02'),
(16, 'E', '05'),
(17, 'F', '14'),
(18, 'P', '07'),
(19, 'M', '03'),
(20, 'D', '06'),
(21, 'M', '08'),
(22, 'H', '11'),
(23, 'O', '09'),
(24, 'Q', '01'),
(25, 'I', '16'),
(26, 'I', '17'),
(27, 'H', '10'),
(28, 'I', '20'),
(29, 'K', '04'),
(30, 'L', '12'),
(31, 'I', '15'),
(32, 'F', '05'),
(33, 'L', '01'),
(34, 'R', '18'),
(35, 'O', '13'),
(36, 'B', '15'),
(37, 'R', '21'),
(38, 'P', '19'),
(39, 'C', '04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `pass`, `status`) VALUES
(4, '16102001', 'asep.guru', 'guru'),
(5, '16102002', 'ujang.guru', 'guru'),
(6, '16102003', 'fuad.guru', 'guru'),
(7, '16102004', 'dedi.guru', 'guru'),
(8, '16102005', 'susil.guru', 'guru'),
(9, '16102006', 'hana.guru', 'guru'),
(10, '16102007', 'susis.guru', 'guru'),
(11, '16102008', 'irpan.guru', 'guru'),
(12, '16102009', 'opik.guru', 'guru'),
(13, '16102010', 'neni.guru', 'guru'),
(14, '16102011', 'etin.guru', 'guru'),
(15, '16102012', 'erwin_djen.guru', 'guru'),
(16, '16102013', 'teni.guru', 'guru'),
(17, '16102014', 'een_nur.guru', 'guru'),
(18, '16102015', 'ega.guru', 'guru'),
(19, '16102016', 'Ghe.guru', 'guru'),
(20, '16102017', 'amel.guru', 'guru'),
(21, '16102018', 'resnu.guru', 'guru'),
(26, 'admin', 'admin', 'admin'),
(27, 'tatausaha', 'tatausaha', 'tatausaha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(3) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `nama_ortu` varchar(40) NOT NULL,
  `no_ortu` varchar(15) NOT NULL,
  `id_kelas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `nama_ortu`, `no_ortu`, `id_kelas`) VALUES
(1, '13001', 'ANDI MUH RIFQI', 'LAKI-LAKI', 'MAKASSAR', '2003-12-04', 'TASIKMALAYA', 'ISLAM', 'MUSKAR', '08123456789', 14),
(3, '13002', 'DZULFAQQOR AMIN', 'LAKI-LAKI', 'JAKARTA', '2004-12-22', 'TASIKMALAYA', 'ISLAM', 'ARPEN', '08345678901', 14),
(4, '13003', 'MUH. AMMAR', 'LAKI-LAKI', 'MAKASSAR', '2004-10-16', 'TASIKMALAYA', 'ISLAM', 'RUSYDAH', '+628123456789', 14),
(11, '13004', 'RAVI SOFYAN', 'LAKI-LAKI', 'TASIKMALAYA', '2016-02-29', 'TASIKMALAYA', 'ISLAM', 'MR', '3653786428', 14),
(12, '13102001', 'ADITYA WIBOWO', 'PEREMPUAN', 'CILACAP', '2016-03-31', 'JALAN KENANGAN', 'ISLAM', 'MUCHLIS', '085434567281', 14),
(2, '14001', 'PRADIKA DESTARINI', 'PEREMPUAN', 'PURBALINGGA', '2004-12-11', 'TASIKMALAYA', 'ISLAM', 'RINI', '08234567890', 13),
(7, '14002', 'CALVIN SUTOYO', 'LAKI-LAKI', 'PADANG, SUMATERA BAR', '2005-01-05', 'TASIKMALAYA', 'ISLAM', 'SUTOYO HADININGRAT', '+6254447474', 13),
(5, '15001', 'HARUN AR-RASYID', 'LAKI-LAKI', 'MANILA', '2005-10-15', 'TASIKMALAYA', 'ISLAM', 'RASYID AL-HIKMAH', '+624545657778', 12),
(6, '15002', 'JUNETY', 'PEREMPUAN', 'JAKARTA', '2005-08-08', 'TASIKMALAYA', 'ISLAM', 'MOH.SAIPUDIN', '+6251514578', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `tb_absensih`
--
ALTER TABLE `tb_absensih`
  ADD PRIMARY KEY (`id_absensih`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `id_guru` (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `kode_guru_2` (`kode_guru`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `id_mengajar_2` (`id_mengajar`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD UNIQUE KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kode_guru_2` (`kode_guru`),
  ADD KEY `kode_mapel_2` (`kode_mapel`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kelas_2` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `tb_absensih`
--
ALTER TABLE `tb_absensih`
  MODIFY `id_absensih` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  MODIFY `id_mengajar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `tb_absensi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_mengajar`) REFERENCES `tb_mengajar` (`id_mengajar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD CONSTRAINT `tb_mengajar_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `tb_mapel` (`kode_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mengajar_ibfk_2` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

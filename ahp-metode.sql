-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2023 pada 19.05
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahp-metode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisis_ahp`
--

CREATE TABLE `analisis_ahp` (
  `id_ahp` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tgl_proses` varchar(125) NOT NULL,
  `p_kehadiran` float NOT NULL,
  `p_sikap` float NOT NULL,
  `p_raport` float NOT NULL,
  `p_sosial` float NOT NULL,
  `p_spiritual` float NOT NULL,
  `hasil` varchar(20) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `analisis_ahp`
--

INSERT INTO `analisis_ahp` (`id_ahp`, `id_siswa`, `tgl_proses`, `p_kehadiran`, `p_sikap`, `p_raport`, `p_sosial`, `p_spiritual`, `hasil`, `approved`) VALUES
(1, 1, '2023-06-22', 0.23566, 0.68148, 87.375, 0.23566, 0.68148, '0.596642159214', 0),
(2, 2, '2023-06-22', 0.68148, 0.68148, 91.75, 0.68148, 0.68148, '1.176222826692', 0),
(3, 3, '2023-06-22', 0.23566, 0.68148, 88.625, 0.68148, 0.68148, '0.840955977414', 0),
(4, 6, '2023-06-22', 0.68148, 0.23566, 87.75, 0.23566, 0.68148, '0.775368231892', 1),
(5, 7, '2023-06-22', 0.68148, 0.23566, 87.625, 0.68148, 0.08286, '0.932714536492', 1),
(6, 8, '2023-06-22', 0.23566, 0.68148, 90.125, 0.68148, 0.08286, '0.785400941014', 1),
(7, 4, '2023-06-22', 0.08286, 0.08286, 91.375, 0.68148, 0.68148, '0.600210968094', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_mapel`
--

CREATE TABLE `guru_mapel` (
  `id_guru` int(11) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `nama_guru` varchar(125) NOT NULL,
  `no_hp_guru` varchar(15) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `username_guru` varchar(50) NOT NULL,
  `password_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru_mapel`
--

INSERT INTO `guru_mapel` (`id_guru`, `nip_guru`, `nama_guru`, `no_hp_guru`, `mapel`, `username_guru`, `password_guru`) VALUES
(1, '21123654', 'yati', '089876567654', 'Pendidikan Kewarganegaraan', 'yati', 'yati'),
(2, '98371281', 'Suhenda', '085156727368', 'Pendidikan Agama', 'henda', 'suhenda'),
(3, '123431', 'Yayan', '0898765676453', 'Bahasa Indonesia', 'indo', 'indo'),
(4, '34564332', 'Wawan', '089877687898', 'PJOK', 'pjok', 'pjok'),
(5, '98765732', 'Syailendra', '089887565432', 'Seni Budaya', 'seni', 'seni'),
(6, '987362', 'Yeti', '087654355242', 'Matematika', 'matematika', 'matematika'),
(7, '98774632', 'Endro', '089876545676', 'IPA', 'ipa', 'ipa'),
(8, '870685', 'Wati', '084563748362', 'Bahasa Inggris', 'inggris', 'inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_raport`
--

CREATE TABLE `nilai_raport` (
  `id_nilai` int(11) NOT NULL,
  `nama_siswa` varchar(125) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nilai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_raport`
--

INSERT INTO `nilai_raport` (`id_nilai`, `nama_siswa`, `id_guru`, `nilai`) VALUES
(1, 'DESI', 1, '87'),
(2, 'DESI', 2, '85'),
(3, 'DESI', 3, '94'),
(4, 'DESI', 4, '79'),
(5, 'DESI', 5, '96'),
(6, 'DESI', 6, '89'),
(7, 'DESI', 7, '78'),
(8, 'DESI', 8, '91'),
(9, 'HIDAYAT', 1, '90'),
(10, 'HIDAYAT', 2, '99'),
(11, 'HIDAYAT', 3, '78'),
(12, 'HIDAYAT', 4, '97'),
(13, 'HIDAYAT', 5, '92'),
(14, 'HIDAYAT', 6, '91'),
(15, 'HIDAYAT', 7, '93'),
(16, 'HIDAYAT', 8, '94'),
(17, 'NUR', 1, '81'),
(18, 'NUR', 2, '90'),
(19, 'NUR', 3, '86'),
(20, 'NUR', 4, '87'),
(21, 'NUR', 5, '100'),
(22, 'NUR', 6, '78'),
(23, 'NUR', 7, '89'),
(24, 'NUR', 8, '98'),
(25, 'PARAMITA', 1, '97'),
(26, 'PARAMITA', 2, '98'),
(27, 'PARAMITA', 3, '83'),
(28, 'PARAMITA', 4, '87'),
(29, 'PARAMITA', 5, '98'),
(30, 'PARAMITA', 6, '79'),
(31, 'PARAMITA', 7, '92'),
(32, 'PARAMITA', 8, '97'),
(33, 'RINA', 1, '100'),
(34, 'RINA', 2, '97'),
(35, 'RINA', 3, '84'),
(36, 'RINA', 4, '97'),
(37, 'RINA', 5, '93'),
(38, 'RINA', 6, '86'),
(39, 'RINA', 7, '88'),
(40, 'RINA', 8, '98'),
(41, 'Aldi Cahyana', 1, '86'),
(42, 'Aldi Cahyana', 2, '99'),
(43, 'Aldi Cahyana', 3, '94'),
(44, 'Aldi Cahyana', 4, '88'),
(45, 'Aldi Cahyana', 5, '92'),
(46, 'Aldi Cahyana', 6, '79'),
(47, 'Aldi Cahyana', 7, '80'),
(48, 'Aldi Cahyana', 8, '84'),
(49, 'DINI APRIYANI PERMANA', 1, '90'),
(50, 'DINI APRIYANI PERMANA', 2, '80'),
(51, 'DINI APRIYANI PERMANA', 3, '80'),
(52, 'DINI APRIYANI PERMANA', 4, '92'),
(53, 'DINI APRIYANI PERMANA', 5, '99'),
(54, 'DINI APRIYANI PERMANA', 6, '87'),
(55, 'DINI APRIYANI PERMANA', 7, '78'),
(56, 'DINI APRIYANI PERMANA', 8, '95'),
(57, 'Fina Aulia Mustafidah', 1, '97'),
(58, 'Fina Aulia Mustafidah', 2, '84'),
(59, 'Fina Aulia Mustafidah', 3, '91'),
(60, 'Fina Aulia Mustafidah', 4, '100'),
(61, 'Fina Aulia Mustafidah', 5, '85'),
(62, 'Fina Aulia Mustafidah', 6, '92'),
(63, 'Fina Aulia Mustafidah', 7, '84'),
(64, 'Fina Aulia Mustafidah', 8, '88'),
(65, 'Imam Rohjadih', 1, '95'),
(66, 'Imam Rohjadih', 2, '86'),
(67, 'Imam Rohjadih', 3, '80'),
(68, 'Imam Rohjadih', 4, '84'),
(69, 'Imam Rohjadih', 5, '97'),
(70, 'Imam Rohjadih', 6, '91'),
(71, 'Imam Rohjadih', 7, '78'),
(72, 'Imam Rohjadih', 8, '97'),
(73, 'Indria Siti Faoziah', 1, '81'),
(74, 'Indria Siti Faoziah', 2, '93'),
(75, 'Indria Siti Faoziah', 3, '78'),
(76, 'Indria Siti Faoziah', 4, '78'),
(77, 'Indria Siti Faoziah', 5, '83'),
(78, 'Indria Siti Faoziah', 6, '79'),
(79, 'Indria Siti Faoziah', 7, '96'),
(80, 'Indria Siti Faoziah', 8, '81'),
(81, 'Aditia Wahyu Pratama', 1, '84'),
(82, 'Aditia Wahyu Pratama', 2, '88'),
(83, 'Aditia Wahyu Pratama', 3, '82'),
(84, 'Aditia Wahyu Pratama', 4, '86'),
(85, 'Aditia Wahyu Pratama', 5, '82'),
(86, 'Aditia Wahyu Pratama', 6, '94'),
(87, 'Aditia Wahyu Pratama', 7, '81'),
(88, 'Aditia Wahyu Pratama', 8, '98'),
(89, 'Alfa Rizi', 1, '83'),
(90, 'Alfa Rizi', 2, '93'),
(91, 'Alfa Rizi', 3, '79'),
(92, 'Alfa Rizi', 4, '81'),
(93, 'Alfa Rizi', 5, '82'),
(94, 'Alfa Rizi', 6, '91'),
(95, 'Alfa Rizi', 7, '83'),
(96, 'Alfa Rizi', 8, '92'),
(97, 'ANIS SEPTIYANI', 1, '83'),
(98, 'ANIS SEPTIYANI', 2, '97'),
(99, 'ANIS SEPTIYANI', 3, '85'),
(100, 'ANIS SEPTIYANI', 4, '83'),
(101, 'ANIS SEPTIYANI', 5, '86'),
(102, 'ANIS SEPTIYANI', 6, '98'),
(103, 'ANIS SEPTIYANI', 7, '95'),
(104, 'ANIS SEPTIYANI', 8, '80'),
(105, 'DESIPARAMITA', 1, '78'),
(106, 'DESIPARAMITA', 2, '98'),
(107, 'DESIPARAMITA', 3, '93'),
(108, 'DESIPARAMITA', 4, '91'),
(109, 'DESIPARAMITA', 5, '86'),
(110, 'DESIPARAMITA', 6, '83'),
(111, 'DESIPARAMITA', 7, '85'),
(112, 'DESIPARAMITA', 8, '82'),
(113, 'Ayu Septiani', 1, '86'),
(114, 'Ayu Septiani', 2, '88'),
(115, 'Ayu Septiani', 3, '94'),
(116, 'Ayu Septiani', 4, '79'),
(117, 'Ayu Septiani', 5, '90'),
(118, 'Ayu Septiani', 6, '78'),
(119, 'Ayu Septiani', 7, '93'),
(120, 'Ayu Septiani', 8, '88'),
(121, 'Chalimatus Sa\'diyah', 1, '84'),
(122, 'Chalimatus Sa\'diyah', 2, '98'),
(123, 'Chalimatus Sa\'diyah', 3, '93'),
(124, 'Chalimatus Sa\'diyah', 4, '85'),
(125, 'Chalimatus Sa\'diyah', 5, '81'),
(126, 'Chalimatus Sa\'diyah', 6, '90'),
(127, 'Chalimatus Sa\'diyah', 7, '81'),
(128, 'Chalimatus Sa\'diyah', 8, '89'),
(129, 'DESI KURNIA', 1, '87'),
(130, 'DESI KURNIA', 2, '96'),
(131, 'DESI KURNIA', 3, '78'),
(132, 'DESI KURNIA', 4, '83'),
(133, 'DESI KURNIA', 5, '95'),
(134, 'DESI KURNIA', 6, '85'),
(135, 'DESI KURNIA', 7, '91'),
(136, 'DESI KURNIA', 8, '84'),
(137, 'MUHAMAD RIDWAN NURHIDAYAT', 1, '79'),
(138, 'MUHAMAD RIDWAN NURHIDAYAT', 2, '81'),
(139, 'MUHAMAD RIDWAN NURHIDAYAT', 3, '87'),
(140, 'MUHAMAD RIDWAN NURHIDAYAT', 4, '91'),
(141, 'MUHAMAD RIDWAN NURHIDAYAT', 5, '85'),
(142, 'MUHAMAD RIDWAN NURHIDAYAT', 6, '88'),
(143, 'MUHAMAD RIDWAN NURHIDAYAT', 7, '84'),
(144, 'MUHAMAD RIDWAN NURHIDAYAT', 8, '82'),
(145, 'NUR ALIFAH', 1, '81'),
(146, 'NUR ALIFAH', 2, '95'),
(147, 'NUR ALIFAH', 3, '98'),
(148, 'NUR ALIFAH', 4, '80'),
(149, 'NUR ALIFAH', 5, '82'),
(150, 'NUR ALIFAH', 6, '88'),
(151, 'NUR ALIFAH', 7, '87'),
(152, 'NUR ALIFAH', 8, '79'),
(153, 'RINA ESA AUDINA', 1, '92'),
(154, 'RINA ESA AUDINA', 2, '90'),
(155, 'RINA ESA AUDINA', 3, '79'),
(156, 'RINA ESA AUDINA', 4, '85'),
(157, 'RINA ESA AUDINA', 5, '89'),
(158, 'RINA ESA AUDINA', 6, '97'),
(159, 'RINA ESA AUDINA', 7, '84'),
(160, 'RINA ESA AUDINA', 8, '92'),
(161, 'ABDUL MUHYI', 1, '90'),
(162, 'ABDUL MUHYI', 2, '97'),
(163, 'ABDUL MUHYI', 3, '89'),
(164, 'ABDUL MUHYI', 4, '85'),
(165, 'ABDUL MUHYI', 5, '97'),
(166, 'ABDUL MUHYI', 6, '92'),
(167, 'ABDUL MUHYI', 7, '88'),
(168, 'ABDUL MUHYI', 8, '90'),
(169, 'ADIT BUDI SETIAWAN', 1, '95'),
(170, 'ADIT BUDI SETIAWAN', 2, '78'),
(171, 'ADIT BUDI SETIAWAN', 3, '84'),
(172, 'ADIT BUDI SETIAWAN', 4, '80'),
(173, 'ADIT BUDI SETIAWAN', 5, '87'),
(174, 'ADIT BUDI SETIAWAN', 6, '80'),
(175, 'ADIT BUDI SETIAWAN', 7, '98'),
(176, 'ADIT BUDI SETIAWAN', 8, '84'),
(178, 'AGUS BAHTIAR', 2, '95'),
(179, 'AGUS BAHTIAR', 3, '95'),
(180, 'AGUS BAHTIAR', 4, '79'),
(181, 'AGUS BAHTIAR', 5, '92'),
(182, 'AGUS BAHTIAR', 6, '91'),
(183, 'AGUS BAHTIAR', 7, '83'),
(184, 'AGUS BAHTIAR', 8, '87'),
(186, 'DEDE ADRIANSYAH', 1, '80'),
(187, 'Dio Firmansyah', 1, '90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_siswa` varchar(125) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(20) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_user`, `nama_siswa`, `kelas`, `angkatan`, `alamat`, `jk`, `nis`, `ttl`, `status`) VALUES
(1, 1, 'DESI', 'X_TKJ', 2017, 'Langseb, Lebakwangi, Kuningan', 'P', '192006108001', 'Kuningan, 05 November 2007', 0),
(2, 1, 'HIDAYAT', 'X_TKJ', 2017, 'Cinagara Lebakwangi, Kuningan', 'L', '192006108003', 'Kuningan, 26 Juli 20007', 0),
(3, 1, 'NUR', 'X_TKJ', 2017, 'Cineumbeuy Lebakwangi, Kuningan', 'P', '192006108004', 'Kuningan, 02 Juli 2007', 0),
(4, 1, 'PARAMITA', 'X_TKJ', 2017, 'Cipetir Lebakwangi, Kuningan', 'P', '192006108005', 'Kuningan, 04 Mei 2007', 0),
(5, 1, 'RINA', 'X_TKJ', 2017, 'Cipetir Lebakwangi, Kuningan', 'P', '192006108007', 'Kuningan, 04 April 2007', 0),
(6, 2, 'Aldi Cahyana', 'XI_TKJ', 2017, 'Langseb, Lebakwangi, Kuningan', 'L', '192006066001', 'Kuningan, 05 November 2006', 0),
(7, 2, 'DINI APRIYANI PERMANA', 'XI_TKJ', 2017, 'Cinagara Lebakwangi, Kuningan', 'P', '192006066003', 'Kuningan, 26 Juli 20006', 0),
(8, 2, 'Fina Aulia Mustafidah', 'XI_TKJ', 2017, 'Cineumbeuy Lebakwangi, Kuningan', 'P', '192006066004', 'Kuningan, 02 Juli 2006', 0),
(9, 2, 'Imam Rohjadih', 'XI_TKJ', 2017, 'Cipetir Lebakwangi, Kuningan', 'L', '192006066005', 'Kuningan, 04 Mei 2006', 0),
(10, 2, 'Indria Siti Faoziah', 'XI_TKJ', 2017, 'Cipetir Lebakwangi, Kuningan', 'P', '192006066006', 'Kuningan, 04 April 2006', 0),
(11, 3, 'Aditia Wahyu Pratama', 'XII_TKJ', 2017, 'Langseb, Lebakwangi, Kuningan', 'L', '202107066001', 'Kuningan, 05 November 2006', 0),
(12, 4, 'Alfa Rizi', 'XII_TKJ', 2017, 'Cinagara Lebakwangi, Kuningan', 'L', '202107066002', 'Kuningan, 26 Juli 20006', 0),
(13, 4, 'ANIS SEPTIYANI', 'XII_TKJ', 2017, 'Cineumbeuy Lebakwangi, Kuningan', 'P', '202107066003', 'Kuningan, 02 Juli 2006', 0),
(14, 4, 'Ayu Septiani', 'XII_TKJ', 2017, 'Cipetir Lebakwangi, Kuningan', 'P', '202107066004', 'Kuningan, 04 Mei 2006', 0),
(15, 4, 'Chalimatus Sa\'diyah', 'XII_TKJ', 2017, 'Cipetir Lebakwangi, Kuningan', 'P', '202107066005', 'Kuningan, 04 April 2006', 0),
(16, 1, 'DESI KURNIA', 'X_BDP', 2018, 'Langseb, Lebakwangi, Kuningan', 'P', '192006108001', 'Kuningan, 05 November 2007', 0),
(17, 1, 'MUHAMAD RIDWAN NURHIDAYAT', 'X_BDP', 2018, 'Cinagara Lebakwangi, Kuningan', 'L', '192006108003', 'Kuningan, 26 Juli 20007', 0),
(18, 1, 'NUR ALIFAH', 'X_BDP', 2018, 'Cineumbeuy Lebakwangi, Kuningan', 'P', '192006108004', 'Kuningan, 02 Juli 2007', 0),
(19, 1, 'PARAMITA', 'X_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'P', '192006108005', 'Kuningan, 04 Mei 2007', 0),
(20, 1, 'RINA ESA AUDINA', 'X_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'P', '192006108007', 'Kuningan, 04 April 2007', 0),
(21, 2, 'ABDUL MUHYI', 'XII_BDP', 2018, 'Langseb, Lebakwangi, Kuningan', 'L', '1920060400001', 'Kuningan, 05 November 2006', 0),
(22, 2, 'ADIT BUDI SETIAWAN', 'XII_BDP', 2018, 'Cinagara Lebakwangi, Kuningan', 'P', '1920060400002', 'Kuningan, 26 Juli 20006', 0),
(23, 2, 'AGUS BAHTIAR', 'XII_BDP', 2018, 'Cineumbeuy Lebakwangi, Kuningan', 'P', '1920060400003', 'Kuningan, 02 Juli 2006', 0),
(24, 2, 'Angga', 'XII_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'L', '1920060400004', 'Kuningan, 04 Mei 2006', 0),
(25, 2, 'ANGGA ', 'XII_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'P', '1920060400005', 'Kuningan, 04 April 2006', 0),
(26, 2, 'ARIS JAKARIA', 'XII_BDP', 2018, 'Langseb, Lebakwangi, Kuningan', 'L', '1920060400006', 'Kuningan, 05 November 2006', 0),
(27, 2, 'DEDE ADRIANSYAH', 'XII_BDP', 2018, 'Cinagara Lebakwangi, Kuningan', 'L', '1920060400008', 'Kuningan, 26 Juli 20006', 0),
(28, 2, 'Dio Firmansyah', 'XII_BDP', 2018, 'Cineumbeuy Lebakwangi, Kuningan', 'P', '1920060400009', 'Kuningan, 02 Juli 2006', 0),
(29, 2, 'Doni Setiabudi', 'XII_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'P', '1920060400010', 'Kuningan, 04 Mei 2006', 0),
(30, 4, 'Egar Ramadhan', 'XI_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'P', '1920060400011', 'Kuningan, 04 April 2006', 0),
(31, 4, 'FICKRY HAERUL MUSTOFA', 'XI_BDP', 2018, 'Langseb, Lebakwangi, Kuningan', 'P', '1920060400012', 'Kuningan, 05 November 2007', 0),
(32, 4, 'INDRA JULIANA', 'XI_BDP', 2018, 'Cinagara Lebakwangi, Kuningan', 'L', '1920060400013', 'Kuningan, 26 Juli 20007', 0),
(33, 4, 'Irfan Nursahada', 'XI_BDP', 2018, 'Cineumbeuy Lebakwangi, Kuningan', 'P', '1920060400014', 'Kuningan, 02 Juli 2007', 0),
(34, 4, 'JODI SETIAWAN', 'XI_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'P', '1920060400015', 'Kuningan, 04 Mei 2007', 0),
(35, 4, 'Jumar', 'XI_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'P', '1920060400016', 'Kuningan, 04 April 2007', 0),
(36, 4, 'KRISTIANA MAULANA', 'XI_BDP', 2018, 'Langseb, Lebakwangi, Kuningan', 'L', '1920060400017', 'Kuningan, 05 November 2006', 0),
(37, 4, 'MUDIANA', 'XI_BDP', 2018, 'Cinagara Lebakwangi, Kuningan', 'P', '1920060400018', 'Kuningan, 26 Juli 20006', 0),
(38, 4, 'Muhammad Rizki', 'XI_BDP', 2018, 'Cineumbeuy Lebakwangi, Kuningan', 'P', '1920060400020', 'Kuningan, 02 Juli 2006', 0),
(39, 4, 'RANDI RUSWANDI', 'XI_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'L', '1920060400022', 'Kuningan, 04 Mei 2006', 0),
(40, 4, 'Rizki Sultan', 'XI_BDP', 2018, 'Cipetir Lebakwangi, Kuningan', 'P', '1920060400023', 'Kuningan, 04 April 2006', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat_user` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `no_hp`, `nip`, `username`, `password`, `level_user`) VALUES
(1, 'KUSWANDI, S.Pd', 'LANGSEB, LEBAKWANGI, KUNINGAN', '08989732020', '201800001', 'walikelas1', 'walikelas1', 2),
(2, 'AGUNG RIDHO P, S.Pd', 'CINEUMBEUY, LEBAKWANGI, KUNINGAN', '08531414962', '201800002', 'walikelas2', 'walikelas2', 2),
(3, 'DIDI CAHYADI, S.Pd', 'CIPETIR, LEBAKWANGI, KUNINGAN', '08212254892', '201800003', 'walikelas3', 'walikelas3', 2),
(4, 'HENDI, S.Pd', 'PAGUNDAN, LEBAKWANGI, KUNINGAN', '08221514695', '201800008', 'walikelas4', 'walikelas4', 2),
(5, 'ADMIN', 'PAGUNDAN, LEBAKWANGI, KUNINGAN', '08221512343', '201800004', 'admin', 'admin', 1),
(6, 'KEPALA SEKOLAH', 'PAGUNDAN, LEBAKWANGI, KUNINGAN', '89887656543', '201800009', 'kepalasekolah', 'kepalasekolah', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisis_ahp`
--
ALTER TABLE `analisis_ahp`
  ADD PRIMARY KEY (`id_ahp`);

--
-- Indeks untuk tabel `guru_mapel`
--
ALTER TABLE `guru_mapel`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `nilai_raport`
--
ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `analisis_ahp`
--
ALTER TABLE `analisis_ahp`
  MODIFY `id_ahp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `guru_mapel`
--
ALTER TABLE `guru_mapel`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `nilai_raport`
--
ALTER TABLE `nilai_raport`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

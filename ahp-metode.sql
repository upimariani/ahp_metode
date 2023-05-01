-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2023 pada 04.26
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
  `hasil` varchar(20) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `analisis_ahp`
--

INSERT INTO `analisis_ahp` (`id_ahp`, `id_siswa`, `tgl_proses`, `p_kehadiran`, `p_sikap`, `p_raport`, `hasil`, `approved`) VALUES
(1, 1, '2023-03-12', 69, 79, 70, '0.11885924925478', 1),
(2, 2, '2023-03-12', 90, 89, 92, '0.57638451525478', 1),
(3, 3, '2023-03-23', 89, 80, 78, '0.23564428925478', 1);

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
(1, 1, 'Dahlan', '7', 2017, 'Ciawigebang, Kuningan', 'Laki-Laki', '32569875', 'Kuningan, 05 November 2022', 1),
(2, 1, 'Siti', '7', 2017, 'Kuningan', 'Perempuan', '21355212', 'Kuningan, 32 Januari 1997', 1),
(3, 1, 'Rahmat', '8', 2018, 'Kuningan', 'Laki-Laki', '5213654', 'Kuningan, 05 April 2022', 1);

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
(1, 'Wali Kelas 1edit', 'Kuningan', '089767876779', '19928719', 'walikelas1', 'walikelas1', 2),
(2, 'Admin', 'Kuningan, Jawa Barat', '08976567654', '23654265', 'admin', 'admin', 1),
(3, 'Kepala Sekolah', 'Kuningan, Jawa Barat', '089876567654', '21123654', 'kepalasekolah', 'kepalasekolah', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisis_ahp`
--
ALTER TABLE `analisis_ahp`
  ADD PRIMARY KEY (`id_ahp`);

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
  MODIFY `id_ahp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2021 pada 05.15
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelurahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id` int(255) NOT NULL,
  `nama_kepala_keluarga` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `kodepos` int(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` int(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `tgl_perkawinan` date NOT NULL,
  `hubungan_dlm_keluarga` varchar(50) NOT NULL,
  `warganegara` varchar(50) NOT NULL,
  `no_paspor` int(50) NOT NULL,
  `no_kitap` int(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id`, `nama_kepala_keluarga`, `alamat`, `rt`, `rw`, `kodepos`, `nama_lengkap`, `nik`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `gol_darah`, `status_perkawinan`, `tgl_perkawinan`, `hubungan_dlm_keluarga`, `warganegara`, `no_paspor`, `no_kitap`, `nama_ayah`, `nama_ibu`) VALUES
(4, 'Zaldy', 'Jl. jalan kemanado', '001', '02', 11560, 'Kudo', 7327895, 'L', 'Jakarta', '2020-03-02', 'Islam', 'S1', 'Karyawan', '0', 'Belum Menikah', '2020-01-02', 'Anak', 'Indonesia', 9867858, 89657, 'Iyain ', 'Hahaha'),
(6, 'adwadsa', 'dfgsege', '001', '02', 3515, 'fewtse', 74278298, 'L', 'Jakarta', '2020-03-02', 'Islam', 'S1', 'Wiraswasta', 'A', 'Menikah', '2020-01-02', 'Anak', 'Indonesia', 2147483647, 83525982, 'Iyain ', 'Juaso'),
(7, 'adwadsa', 'dfgsege', '001', '02', 3515, 'fewtse', 74278298, 'L', 'Jakarta', '2020-03-02', 'Islam', 'S1', 'Wiraswasta', 'A', 'Menikah', '2020-01-02', 'Anak', 'Indonesia', 2147483647, 83525982, 'Iyain ', 'Juaso'),
(8, 'adwadsa', 'dfgsege', '001', '02', 3515, 'fewtse', 74278298, 'L', 'Jakarta', '2020-03-02', 'Islam', 'S1', 'Wiraswasta', 'A', 'Menikah', '2020-01-02', 'Anak', 'Indonesia', 2147483647, 83525982, 'Iyain ', 'Juaso'),
(9, 'adwadsa', 'dfgsege', '001', '02', 3515, 'fewtse', 74278298, 'L', 'Jakarta', '2020-03-02', 'Islam', 'S1', 'Wiraswasta', 'A', 'Menikah', '2020-01-02', 'Anak', 'Indonesia', 2147483647, 83525982, 'Iyain ', 'Juaso'),
(23, 'UHUUUUUUUUUY', 'dadsadw', '001', '02', 3515, 'Kudo', 2147483647, 'P', 'jakarta', '2020-03-02', 'Islam', 'S1', 'Wiraswasta', 'A', 'Menikah', '2020-01-02', 'Anak', 'Indonesia', 856756, 89657, '8756675', 'Juaso'),
(61, 'Uhuuy890', '', '', '', 0, '', 0, 'Pi', '', '0000-00-00', '', '', '', '', 'Pilih', '0000-00-00', '', '', 0, 0, '', ''),
(62, 'Badai', '', '', '', 0, '', 0, 'Pi', '', '0000-00-00', '', '', '', '', 'Pilih', '0000-00-00', '', '', 0, 0, '', ''),
(63, 'INDONESIA', '', '', '', 0, '', 0, 'Pi', '', '0000-00-00', '', '', '', '', 'Pilih', '0000-00-00', '', '', 0, 0, '', ''),
(64, 'DIRIMU', '', '', '', 0, '', 0, 'Pi', '', '0000-00-00', '', '', '', '', 'Pilih', '0000-00-00', '', '', 0, 0, '', ''),
(65, 'YAYAYAAY', '', '', '', 0, '', 0, 'Pi', '', '0000-00-00', '', '', '', '', 'Pilih', '0000-00-00', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id`, `username`, `password`) VALUES
(1, 'admin_kelurahan', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

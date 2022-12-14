-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2022 pada 06.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `NIP` varchar(100) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `tgl_lahir_guru` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nomor_tlp_guru` varchar(15) NOT NULL,
  `kelas` char(1) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `NIP`, `nama_guru`, `tgl_lahir_guru`, `alamat`, `nomor_tlp_guru`, `kelas`, `foto`) VALUES
(1, '19870612 201011 1 678', 'Ria Yunita', '1987-06-12', 'Sugihwaras', '081234567235', 'B', 'ricis.jpg'),
(2, '19891215 201203 2 456', 'Tsana Nadhifa', '1989-12-15', 'Sugihwaras', '081345678910', 'A', 'sana.jpg'),
(7, '19890608 201005 1 659', 'Dinta Hauw', '1989-06-08', 'Sugihwaras', '081234567123', 'B', 'dinda hauw.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(11) NOT NULL,
  `nama_murid` varchar(100) NOT NULL,
  `tgl_lahir_murid` date NOT NULL,
  `gender_murid` varchar(10) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_tlp_ortu` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kelas` char(1) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id_murid`, `nama_murid`, `tgl_lahir_murid`, `gender_murid`, `nama_ayah`, `nama_ibu`, `no_tlp_ortu`, `alamat`, `kelas`, `foto`) VALUES
(1, 'Uswatun Chasanah', '2016-06-16', 'Perempuan', 'Salam', 'Nuryani', '08123456789', 'Balongrejo', 'B', 'us.jpg'),
(3, 'Salmatul Farida', '2017-06-06', 'Perempuan', 'Fajar', 'Yanti', '085123098534', 'Sugihwaras', 'A', 'salma.jpg'),
(4, 'Ari Andi', '2017-01-02', 'Laki-laki', 'Musthofa', 'Putri', '085123098555', 'Sugihwaras', 'A', 'andi.jpg'),
(5, 'Zakkiya Fitri', '2016-12-12', 'Perempuan', 'Yanto', 'Febri', '085123098123', 'Balongrejo', 'A', 'zaza.jpg'),
(6, 'Bintang Raditya', '2017-01-01', 'Laki-laki', 'Putra', 'Yeni', '085123098534', 'Sugihwaras', 'B', 'bintang.jpg'),
(7, 'Nanda Putri', '2016-02-10', 'Perempuan', 'Tono', 'Febri', '085123098534', 'Sugihwaras', 'A', 'nanda.jpg'),
(11, 'Rosita Dwi', '2018-03-01', 'Perempuan', 'Yanto', 'Dwi', '085123098555', 'Balongrejo', 'A', 'rosita.jpg'),
(12, 'Fiqry Wahyu', '2016-01-12', 'Laki-laki', 'Wicaksono', 'Hayu', '085123111555', 'Sugihwaras', 'A', 'fiqry.webp'),
(14, 'Dwi Asfi Fajrin', '2016-02-13', 'Perempuan', 'Musthofa', 'Dwi', '085123098534', 'Sugihwaras', 'B', 'asfi.jpeg'),
(16, 'Fadhila zahra', '2017-02-13', 'Perempuan', 'Wicaksono', 'Febri', '085123098534', 'Sugihwaras', 'B', 'zahra.webp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'saya admin 1', 'admin1', 'admin'),
(2, 'saya guru 1', 'guru1', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

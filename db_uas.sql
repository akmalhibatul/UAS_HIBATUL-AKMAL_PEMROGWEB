-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2024 pada 16.23
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_klasemen`
--

CREATE TABLE `tb_klasemen` (
  `id_klasemen` int(11) NOT NULL,
  `nama_negara` varchar(50) NOT NULL,
  `menang` int(11) NOT NULL,
  `seri` int(11) NOT NULL,
  `kalah` int(11) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_klasemen`
--

INSERT INTO `tb_klasemen` (`id_klasemen`, `nama_negara`, `menang`, `seri`, `kalah`, `poin`) VALUES
(2, 'Spanyol', 3, 0, 0, 9),
(3, 'Italia', 1, 1, 1, 4),
(4, 'Kroasia', 0, 2, 1, 2),
(5, 'Albania', 0, 1, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tim`
--

CREATE TABLE `tb_tim` (
  `id_tim` int(11) NOT NULL,
  `nama_negara` varchar(50) NOT NULL,
  `nama_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_tim`
--

INSERT INTO `tb_tim` (`id_tim`, `nama_negara`, `nama_group`) VALUES
(1, 'asdadsad', 'a'),
(2, 'Spanyol', 'b'),
(3, 'Italia', 'b'),
(4, 'Krosia', 'b'),
(5, 'Albania', 'b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nim`, `password`, `nama_lengkap`) VALUES
(1, '211011400797', 'akmal', 'Hibatul Akmal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_klasemen`
--
ALTER TABLE `tb_klasemen`
  ADD PRIMARY KEY (`id_klasemen`);

--
-- Indeks untuk tabel `tb_tim`
--
ALTER TABLE `tb_tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_klasemen`
--
ALTER TABLE `tb_klasemen`
  MODIFY `id_klasemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_tim`
--
ALTER TABLE `tb_tim`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

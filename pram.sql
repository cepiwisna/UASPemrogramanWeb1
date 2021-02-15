-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2021 pada 14.13
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pram`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `id` int(15) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`id`, `namalengkap`, `kelas`, `nohp`, `jeniskelamin`, `alamat`) VALUES
(1, 'cepiwisna', 'tkj1', '0987871253', 'Pria', 'bandung'),
(2, 'Noviana Saila', 'nggris', '0896310018218', 'perempuan', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `gambar`) VALUES
(1, 'cepiwisna', 'apiwisna03@gmail.com', '3eba62c06061fe3401d61116809fcfb8d728a3bd', 'upload/4.JPG'),
(2, 'admin', 'admin@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', ''),
(3, 'yayang', 'yayang@gmail.com', '3f7267fee47ea8ade0e243c6b406755789c1701a', ''),
(4, 'cepi', 'cepiwisna03@gmail.com', '044c28c5d313525f9c8036342f1db7e1b1edf0b4', ''),
(5, 'cepiwisna', 'apiwisna03@gmail.com', '654a0aeead5bb1a7ec8f04b1c95b94fb2e67443b', 'upload/4.JPG'),
(6, 'cepiwisnaA', 'apiwisna03@gmail.com', '044c28c5d313525f9c8036342f1db7e1b1edf0b4', 'upload/4.JPG'),
(7, 'noviana', 'novi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2023 pada 03.40
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `Kode` int(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Deskripsi` varchar(50) NOT NULL,
  `Harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`Kode`, `Nama`, `Deskripsi`, `Harga`) VALUES
(25, 'HandPhone', 'INFINIX', '1250000'),
(32, 'Keyboard', 'LENOVO', '100000'),
(34, 'Laptop', 'ASUS', '5500000'),
(35, 'Speaker', 'SONY', '750000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(9, 'user', '$2y$10$7VluwU7NhOdqRbl7UlnbvekUEmYvq5rvjwdrJlo94yEr2lQuY5K7S'),
(10, 'admin', '$2y$10$.UhcRB7IJJSWmv.ZbK0GSe.tBh1IFYeBUzkVlETlcq67.mpblnbp2'),
(11, 'wenin', '$2y$10$nK0eRENXxBWlJqlMYyLESuoDU1wZVYodSiO3h3VRzhv/B9nWPbQ6q'),
(13, 'dian', '$2y$10$JPzlDNsG1RWmp7fKzNQ1ROHAPg7/q9UMp9PKIFRBXquQwnLIVGOdG'),
(14, 'hai', '$2y$10$oSqPhlEEnRUiWq.1Cm4.SeOdwwAfhXFVMovbUMKerezjYO/rk6FIW'),
(15, 'nur', '$2y$10$B7Nan6ku3JNU9zw6mWo5weNTxaud2iTIyWd2vnc8oRfiYLx7Ad9L2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Kode`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `Kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

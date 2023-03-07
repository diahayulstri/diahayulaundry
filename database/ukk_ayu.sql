-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2023 pada 10.18
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_ayu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` double NOT NULL,
  `keterangan` text NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_paket`, `qty`, `keterangan`, `total_harga`) VALUES
(28, 55, 4, 2, '', 30000),
(29, 56, 3, 5, '', 50000),
(30, 57, 3, 5, '', 50000),
(31, 58, 1, 1, '', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `nama`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(1, 'diah ayu ', 'paleran', 'P', '082257390370'),
(2, 'Bunga', 'Umbulrejo', 'P', '08348222222'),
(3, 'Aulia margeta', 'paleran', 'P', '0897434567'),
(4, 'Min Yoongi', 'Korea Selatan', 'L', '08665813816');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama`, `alamat`, `tlp`) VALUES
(1, 'Ayu Laundry', 'Semboro', '082257390370'),
(2, 'Ayu Laundy 1', 'paleran', '081453678212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `jenis` enum('Kiloan','Selimut','Bad Cover','Kaos','Lainnya') NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_outlet`, `jenis`, `nama_paket`, `harga`) VALUES
(1, 1, 'Kiloan', 'Selimut', 10000),
(2, 1, 'Selimut', 'Paket Selimut Keluarga', 5000),
(3, 1, 'Kiloan', 'Kaos', 10000),
(4, 1, 'Kiloan', 'Cuci + Strika', 15000),
(5, 1, 'Kiloan', 'cuci basah', 10000),
(6, 2, 'Kiloan', 'cuci kering', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `batas_waktu` datetime NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `biaya_tambahan` int(11) NOT NULL,
  `diskon` double NOT NULL,
  `pajak` int(11) NOT NULL,
  `status` enum('Baru','Proses','Selesai','Diambil') NOT NULL,
  `dibayar` enum('Dibayar','Belum Dibayar','','') NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `cash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_outlet`, `kode_invoice`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `biaya_tambahan`, `diskon`, `pajak`, `status`, `dibayar`, `id_user`, `total_bayar`, `cash`) VALUES
(55, 1, 'TR20230226009', 3, '2023-02-26 11:06:00', '2023-03-02 11:06:00', '2023-02-26 11:06:00', 0, 0, 0, 'Baru', 'Dibayar', 1, 30000, 35000),
(56, 1, 'TR20230302010', 1, '2023-03-02 08:05:00', '2023-03-05 08:05:00', '2023-03-05 08:05:00', 0, 0, 0, 'Proses', 'Dibayar', 1, 50000, 50000),
(57, 1, 'TR20230302011', 4, '2023-03-02 09:18:00', '2023-03-04 09:18:00', '2023-03-02 09:18:00', 1000, 0, 2000, 'Baru', 'Dibayar', 1, 53000, 53000),
(58, 1, 'TR20230302012', 2, '2023-03-02 14:08:00', '2023-03-03 14:08:00', '2023-03-02 14:08:00', 0, 0, 0, 'Baru', 'Dibayar', 1, 10000, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `id_outlet`, `role`) VALUES
(1, 'Diah Ayu lestari', 'admin', '$2y$10$BJIzrcydl6zumedy5jiTtO4ZgaVnjSZjxV.b1XYqKywcMGYjAURZu', 1, 'admin'),
(2, 'chika damayanti', 'kasir', '$2y$10$Kl6UfWWZGw3HBlQ/JNRYF.4XwqXwr3M9z0P6EhWdVoOydeKSutjg2', 1, 'kasir'),
(3, 'Bunga Adinda Sari', 'owner', '$2y$10$RDG8ujM6zjnfcI7yyO7CWusL8AYQlOLMOHVlFPvQaWE51kie2mhmy', 1, 'owner'),
(4, 'Abdillah Zabir Al Mansurin', 'Admin', '$2y$10$qxyZfR19b8goOzCFZhW7MeYOrxtHpEKCR7fyz4XE6Pc8x5FqCJzdm', 2, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `fk_trandet` (`id_transaksi`),
  ADD KEY `fk_pakdet` (`id_paket`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `fk_otket` (`id_outlet`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_metran` (`id_member`),
  ADD KEY `fk_ottran` (`id_outlet`),
  ADD KEY `fk_utran` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_otser` (`id_outlet`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `fk_pakdet` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`),
  ADD CONSTRAINT `fk_trandet` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD CONSTRAINT `fk_otket` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `fk_metran` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id_member`),
  ADD CONSTRAINT `fk_ottran` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`),
  ADD CONSTRAINT `fk_utran` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `fk_otser` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

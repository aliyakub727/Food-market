-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2021 pada 07.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodmarket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarmenu`
--

CREATE TABLE `daftarmenu` (
  `namamenu` varchar(50) NOT NULL,
  `rincianmenu` varchar(200) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftarmenu`
--

INSERT INTO `daftarmenu` (`namamenu`, `rincianmenu`, `harga`, `gambar`) VALUES
('Ayam Geprek', 'Ayam Geprek Level 1-10', 18000, '57ayamgeprek.jpg'),
('Ayam Penyet', 'Ayam Penyet asli bukan kaleng kaleng', 23000, '65ayam penyet.jpg'),
('Bajigur drink', 'Minuman Khas', 8000, '62bajigur.jpg'),
('Bakso', 'bakso Malang dan Solo terbuat dari daging sapi, berwarna abu-abu dan bentuknya bulat sekali. ', 12000, '99bakso.jpg'),
('pempek', 'asli ikan tenggiri', 7000, '13mpekmpek.jpg'),
('Rendang', 'Makanan Khas Padang yang sangat enak loh', 12000, '6883rendang.jpg'),
('Sate Kambing', 'Sate Madura asli ', 22000, '7574sate.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `nama` varchar(50) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`nama`, `username`, `password`, `no_telp`, `level`) VALUES
('admin', 'admin', '123', 893833929, 'admin'),
('Ali Yakub Biantoro', 'aliyakub', '123asd', 838981818, 'user'),
('Udin', 'udin', '123', 899228922, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` varchar(50) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `namamenu` varchar(200) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah_pesanan` int(50) NOT NULL,
  `kode_promo` varchar(20) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `nama_pengguna`, `namamenu`, `harga`, `jumlah_pesanan`, `kode_promo`, `total`) VALUES
('2g0yrbmp3kuh', 'aliyakub', 'Ayam Geprek', 18000, 2, 'JUMATBERKAH', 31000),
('3y06wvlztj5a', 'aliyakub', 'Bakso', 12000, 3, 'JUMATBERKAH', 31000),
('642vk1gts8e5', 'udin', 'Bajigur drink', 8000, 2, 'ANAKANAK', 11000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `kode_promo` varchar(20) NOT NULL,
  `namamenu` varchar(50) NOT NULL,
  `jumlah_potongan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_promo`
--

INSERT INTO `tbl_promo` (`kode_promo`, `namamenu`, `jumlah_potongan`) VALUES
('ANAKANAK', 'Bajigur drink', 5000),
('JUMATBERKAH', 'Ayam Geprek', 5000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarmenu`
--
ALTER TABLE `daftarmenu`
  ADD PRIMARY KEY (`namamenu`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`kode_promo`),
  ADD UNIQUE KEY `namamenu` (`namamenu`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD CONSTRAINT `tbl_promo_ibfk_1` FOREIGN KEY (`namamenu`) REFERENCES `daftarmenu` (`namamenu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

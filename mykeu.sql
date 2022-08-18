-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2022 pada 07.11
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mykeu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemasan`
--

CREATE TABLE `kemasan` (
  `id_kemasan` int(50) NOT NULL,
  `Jenis_kemasan` varchar(50) NOT NULL,
  `Harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kemasan`
--

INSERT INTO `kemasan` (`id_kemasan`, `Jenis_kemasan`, `Harga`) VALUES
(1, 'A', 800),
(2, 'B', 1500),
(3, 'C', 3700),
(4, 'D', 4000),
(5, 'E', 4500),
(6, 'F', 9000),
(7, 'Au', 1000),
(8, 'Bu', 2000),
(9, 'Cu', 5000),
(10, 'Du', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama`, `alamat`, `no_hp`) VALUES
(8, 'King Nasgor 1', 'Depan indomaret', '0823424343243'),
(9, 'King Nasgor 2', 'Kamulan', '000'),
(10, 'King Nasgor 3', 'Notorejo', '222'),
(11, 'Gopar / Bakso', 'Kamulan', '123332'),
(12, 'King Nasgor 4', 'Kamulan', '1111'),
(13, 'Linda', 'Kedungsoko', '12133'),
(14, 'Us', 'Notorejo', '123'),
(15, 'Tamah', 'Gempolan', '122'),
(16, 'Angkringan mbah buyut', 'Plandaan', '122344'),
(17, 'Apotik Yos', 'Tulungagung', '1233'),
(18, 'Toko Samuji', 'Gondang', '1234'),
(19, 'Supar/Nasgor', 'Durenan', '1111'),
(20, 'Bagas /WTS', 'Pandean', '1111'),
(21, 'Warung Tulungagung', 'Dampit Malang', '11111'),
(22, 'Warung lodho / Era', 'Karanganom Durenan', '112344'),
(23, 'Niki Coklat / sugeng', 'Durenan', '111'),
(24, 'AG ONE /Wakidhun', 'BAGO TULUNGAGUNG', '11111'),
(25, 'Toko LUWES 1', 'Gondang', '11111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(10) NOT NULL,
  `pengeluaran` int(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_pengeluaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(15) NOT NULL,
  `Kode_produk` int(50) NOT NULL,
  `Jenis_produk` varchar(50) NOT NULL,
  `id_kemasan` int(50) NOT NULL,
  `Rasa` varchar(50) NOT NULL,
  `Harga_produk` varchar(50) NOT NULL,
  `Jumlah_produk` int(50) NOT NULL,
  `Tanggal_Produksi` date NOT NULL,
  `Tanggal_Expired` date NOT NULL,
  `Netto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `Kode_produk`, `Jenis_produk`, `id_kemasan`, `Rasa`, `Harga_produk`, `Jumlah_produk`, `Tanggal_Produksi`, `Tanggal_Expired`, `Netto`) VALUES
(1, 120220729, 'Kacang', 2, 'Original', '1500', 25, '2022-07-29', '2022-08-29', 15),
(2, 220220805, 'Kacang', 3, 'mete', '3700', 1, '2022-08-05', '2022-09-05', 50),
(3, 320220720, 'Kacang', 4, 'mete', '4000', 0, '2022-07-20', '2022-08-20', 40),
(4, 420220731, 'Kacang', 1, 'Original', '800', 10, '2022-07-31', '2022-08-31', 15),
(5, 520220726, 'Kacang', 5, 'Original', '4500', 0, '2022-07-26', '2022-08-26', 40),
(6, 620220807, 'Kacang', 6, 'mete', '9000', 1, '2022-08-07', '2022-08-31', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `id` int(50) NOT NULL,
  `Kode_produk` int(50) NOT NULL,
  `id_produk` varchar(15) NOT NULL,
  `id_kemasan` int(50) NOT NULL,
  `Stok` int(50) NOT NULL,
  `Harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`id`, `Kode_produk`, `id_produk`, `id_kemasan`, `Stok`, `Harga`) VALUES
(2, 220220728, '4', 5, 507, 1000),
(5643430, 2147483647, '34546', 1, 50, 800),
(5643431, 2147483647, '123456', 5, 100, 9000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `Id_transaksi` int(50) NOT NULL,
  `Kode_produk` varchar(50) NOT NULL,
  `Jenis_produk` varchar(50) NOT NULL,
  `id_kemasan` int(50) NOT NULL,
  `Harga` int(50) NOT NULL,
  `Transaksi_keluar` varchar(50) NOT NULL,
  `total` int(20) NOT NULL,
  `Outlet` varchar(50) NOT NULL,
  `Alamat` varchar(500) NOT NULL,
  `No_hp` varchar(50) NOT NULL,
  `Status` int(50) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`Id_transaksi`, `Kode_produk`, `Jenis_produk`, `id_kemasan`, `Harga`, `Transaksi_keluar`, `total`, `Outlet`, `Alamat`, `No_hp`, `Status`, `tgl_transaksi`) VALUES
(94979, '120220729', 'Kacang', 2, 1500, '50', 75000, 'King Nasgor 1', 'Depan', 'indomaret', 1, '2022-08-07'),
(94980, '120220729', 'Kacang', 2, 1500, '75', 112500, 'King Nasgor 2', 'Kamulan', '000', 1, '2022-08-07'),
(94981, '120220729', 'Kacang', 2, 1500, '50', 75000, 'King Nasgor 3', 'Notorejo', '222', 1, '2022-08-07'),
(94982, '120220729', 'Kacang', 2, 1500, '50', 75000, 'Gopar / Bakso', 'Kamulan', '123332', 1, '2022-08-07'),
(94983, '120220729', 'Kacang', 2, 1500, '50', 75000, 'King Nasgor 4', 'Kamulan', '1111', 1, '2022-08-07'),
(94984, '120220729', 'Kacang', 2, 1500, '25', 37500, 'Tamah', 'Gempolan', '122', 1, '2022-08-07'),
(94985, '420220731', 'Kacang', 1, 800, '25', 20000, 'Linda', 'Kedungsoko', '12133', 1, '2022-08-07'),
(94986, '420220731', 'Kacang', 1, 800, '50', 40000, 'Angkringan mbah buyut', 'Plandaan', '122344', 1, '2022-08-07'),
(94987, '120220729', 'Kacang', 2, 1500, '20', 30000, 'Us', 'Notorejo', '123', 1, '2022-08-07'),
(94988, '120220729', 'Kacang', 2, 1500, '50', 75000, 'Bagas /WTS', 'Pandean', '1111', 1, '2022-08-07'),
(94989, '120220729', 'Kacang', 2, 1500, '25', 37500, 'Supar/Nasgor', 'Durenan', '1111', 1, '2022-08-07'),
(94990, '120220729', 'Kacang', 2, 1500, '25', 37500, 'Warung lodho / Era', 'Karanganom', 'Durenan', 1, '2022-08-07'),
(94991, '220220805', 'Kacang', 3, 3700, '150', 555000, 'Niki Coklat / sugeng', 'Durenan', '111', 1, '2022-08-07'),
(94992, '320220720', 'Kacang', 4, 4000, '5', 20000, 'Apotik Yos', 'Tulungagung', '1233', 1, '2022-08-07'),
(94993, '320220720', 'Kacang', 4, 4000, '40', 160000, 'Warung Tulungagung', 'Dampit', 'Malang', 1, '2022-08-07'),
(94994, '520220726', 'Kacang', 5, 4500, '10', 45000, 'Toko Samuji', 'Gondang', '1234', 1, '2022-08-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Kota` varchar(50) NOT NULL,
  `Negara` varchar(50) NOT NULL,
  `Kode_pos` int(20) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id`, `username`, `password`, `email`, `first_name`, `last_name`, `Alamat`, `Kota`, `Negara`, `Kode_pos`, `Role`) VALUES
(1, 'Danipratama', 'Mvvp0107', 'pratamwijdanandi@gmail.com', 'Muhammad', 'Pratama', 'Karangwaru, Tulungagung', 'Tulungagung', 'Indonesia', 66217, 'Admin'),
(2, 'Dani', 'Pratama', 'Mvvp0107@gmail.com', 'Muhammad', 'Pratama', 'Karangwaru, Tulungagung', 'Tulungagung', 'Indonesia', 66217, 'Sales');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kemasan`
--
ALTER TABLE `kemasan`
  ADD PRIMARY KEY (`id_kemasan`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `Jenis_kemasan` (`id_kemasan`);

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_kemasan` (`id_kemasan`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`Id_transaksi`),
  ADD KEY `Kode_produk` (`Kode_produk`),
  ADD KEY `id_kemasan` (`id_kemasan`),
  ADD KEY `data_transaksi_idx` (`tgl_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kemasan`
--
ALTER TABLE `kemasan`
  MODIFY `id_kemasan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5643432;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `Id_transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95004;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kemasan`) REFERENCES `kemasan` (`id_kemasan`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_kemasan`) REFERENCES `kemasan` (`id_kemasan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2024 pada 16.04
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(10) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(13, 'Adm. Gaji'),
(14, 'Akuntansi'),
(15, 'Bagian Umum'),
(16, 'BPJS Kesehatan'),
(17, 'CSSD'),
(18, 'Direksi'),
(19, 'Dokter'),
(20, 'Fisioterapi'),
(21, 'Hemodialisa'),
(22, 'Humas & Pemasaran'),
(23, 'ICU / ICCU'),
(24, 'Instalasi Farmasi'),
(25, 'Instalasi Gizi'),
(26, 'Instalasi Gizi II'),
(27, 'Kamar Operasi (Bedah)'),
(28, 'Kasir'),
(29, 'Keuangan'),
(30, 'Laboratorium'),
(31, 'Linen - I'),
(32, 'Linen - II'),
(33, 'Medical Check Up'),
(34, 'MPP'),
(35, 'NICU'),
(36, 'Operator Telepon'),
(37, 'Outsourcing - Cleaning Service'),
(38, 'Outsourcing - Satpam'),
(39, 'Pembelian'),
(40, 'Pengolahan Data & Pelaporan'),
(41, 'Penjualan'),
(42, 'Personalia'),
(43, 'PKRS'),
(44, 'PKS'),
(45, 'Poliklinik'),
(46, 'PPI-RS'),
(47, 'Radiologi'),
(48, 'Rawat Inap'),
(49, 'Refter Biara / Asrama'),
(50, 'Registrasi Penerimaan Pasien'),
(51, 'Rekam Medis'),
(52, 'RS Stella Maris'),
(53, 'Sanitasi Lingkungan'),
(54, 'Sarana - Prasarana'),
(55, 'Satpam'),
(56, 'Sekretariat'),
(57, 'SIM-RS'),
(58, 'St. Joseph - 2'),
(59, 'St. Joseph - 3'),
(60, 'St. Joseph - 5'),
(61, 'St. Joseph - 6'),
(62, 'St. Joseph - 7'),
(63, 'Sta. Bernadeth II'),
(64, 'Sta. Bernadeth III'),
(65, 'Sta. Maria - II'),
(66, 'Sta. Monika - Biara'),
(67, 'Sta. Theresia - I'),
(68, 'Transportasi'),
(69, 'UGD'),
(70, 'Utang Piutang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patroli`
--

CREATE TABLE `patroli` (
  `id_patroli` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `unit` varchar(10) NOT NULL,
  `hasil_cek` varchar(100) NOT NULL,
  `ket` text NOT NULL DEFAULT 'Aman'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `patroli`
--

INSERT INTO `patroli` (`id_patroli`, `tanggal`, `unit`, `hasil_cek`, `ket`) VALUES
(6, '2024-01-03', 'POLI', 'Display-Speaker', 'Perlu penarikan kabel HMDI secara langsung ke PC'),
(7, '2024-01-03', 'LOKET', 'Display-Speaker-Minipc-Kesehatan CPU', ''),
(8, '2024-01-03', 'IGD', 'Display-Speaker-Donggle HDMI-Kesehatan CPU', ''),
(9, '2024-01-03', 'KAMAR OPER', 'Display-Network-Kesehatan CPU', 'Penggunaan CPU mini yang cuma-cuma'),
(10, '2024-01-03', 'FARMASI', 'Display-Info Kamar-Network-Kabel LAN', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `level` enum('captain','crew') NOT NULL DEFAULT 'crew'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'Paskalis', 'paskal', '$2a$12$JZgH93i/3YaZmouhIWvZouv6oSKWwMCJskDYoWi014uffnTBrzxnq', 'captain'),
(3, 'irene', 'Iren', '$2a$12$a8iIodPf8mpMs7NUd53Qr.GyE5poTcQnOIkFLlF8QQkKR9jMZpv8a', 'crew'),
(5, 'Mislina', 'mis', '$2y$10$uqjP2OM1heAcKK1B7.nLtuiHjPDrYn81ocZkauAz6YV62uKR3LGxS', 'crew');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `patroli`
--
ALTER TABLE `patroli`
  ADD PRIMARY KEY (`id_patroli`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `patroli`
--
ALTER TABLE `patroli`
  MODIFY `id_patroli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

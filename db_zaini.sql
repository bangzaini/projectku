-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2023 pada 07.08
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_zaini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `PROJETNAME` varchar(50) NOT NULL,
  `CLIENT` varchar(50) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `POTO` varchar(50) DEFAULT NULL,
  `STARTDATE` varchar(50) NOT NULL,
  `ENDDATE` varchar(50) NOT NULL,
  `PROGRESS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`PROJETNAME`, `CLIENT`, `NAMA`, `EMAIL`, `POTO`, `STARTDATE`, `ENDDATE`, `PROGRESS`) VALUES
('', '', '', '', '', '', '', ''),
('android apk', 'rian', 'rian', 'rian@gmail.com', 'IMG_2520.JPG', '30-02-2023', '30-06-223', '80'),
('APLIKASI', 'el', 'ilham', 'el@gmail.com', 'IMG_2520.PNG', '2023-01-02', '30-02-2023', '90'),
('WEB', 'DONI', 'LIA', 'lia12@gmail.com', 'IMG_2972.JPG', '30-02-2023', '30-06-223', '90');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`PROJETNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

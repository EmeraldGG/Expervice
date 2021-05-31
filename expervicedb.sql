-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2021 pada 18.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expervicedb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `resi` varchar(12) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `location_now` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`resi`, `name`, `price`, `weight`, `address`, `phone_number`, `location_now`) VALUES
('7aFKvECElQ', 'Dakimakura Chino Kafuu', 5000, 1, 'cibarusah', '0865118118', '[current location]'),
('7aFKvEQElQ', 'Dakimakura Chino Kafuu', 5000, 1, 'cibarusah', '0865118118', '[current location]'),
('J1FH9GJ1FZ', 'Dakimakura Chino Kafuu', 5000, 1, 'cibarusah', '0865118118', '[current location]'),
('KBM610AON2', 'Dakimakura Chino Kafuu', 5000, 1, 'cibarusah', '0865118118', '[current location]'),
('ZUVUQ8JA1T', 'Dakimakura Chino Kafuu', 5000, 1, 'cibarusah', '0865118118', '[current location]');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`resi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

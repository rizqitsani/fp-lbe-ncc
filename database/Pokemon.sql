-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2020 pada 15.26
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbe_ncc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pokemon`
--

CREATE TABLE `pokemon` (
  `ID` int(11) NOT NULL,
  `National_No` char(3) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Type` varchar(55) NOT NULL,
  `Species` varchar(60) NOT NULL,
  `Height` varchar(75) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Abilities` varchar(120) NOT NULL,
  `Health_Point` int(11) NOT NULL,
  `Attack` int(11) NOT NULL,
  `Defense` int(11) NOT NULL,
  `Speed` int(11) NOT NULL,
  `Speed_Attack` int(11) NOT NULL,
  `Speed_Defense` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pokemon`
--

INSERT INTO `pokemon` (`ID`, `National_No`, `Name`, `Type`, `Species`, `Height`, `Weight`, `Abilities`, `Health_Point`, `Attack`, `Defense`, `Speed`, `Speed_Attack`, `Speed_Defense`) VALUES
(1, '001', 'Bulbasaur', 'Grass', 'Seed Pokemon', '1', '6', 'Overgrow', 45, 49, 49, 45, 65, 65),
(2, '002', 'Ivysaur', 'Grass', 'Seed Pokemon', '1', '13', 'Overgrow Chlorophyll', 60, 62, 63, 60, 80, 80),
(3, '003', 'Venusaur', 'Grass', 'Seed Pokemon', '2', '100', 'Overgrow Chlorophyll', 80, 82, 83, 80, 100, 100),
(4, '004', 'Charmander', 'Fire', 'Lizard Pokemon', '0.6', '8.5', 'Blaze Solar Power', 39, 52, 43, 65, 60, 50),
(5, '005', 'Charmeleon', 'Fire', 'Flame Pokemon', '1.1', '19', 'Blaze Solar Power', 58, 64, 58, 80, 80, 65);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Id` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

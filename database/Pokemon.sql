-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2020 pada 15.50
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
-- Struktur dari tabel `breeding`
--

CREATE TABLE `breeding` (
  `B_ID` int(11) NOT NULL,
  `Egg_Groups` varchar(250) NOT NULL,
  `Gender` varchar(60) NOT NULL,
  `Egg_Cycles` varchar(55) NOT NULL,
  `Pokemon_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `egg_moves`
--

CREATE TABLE `egg_moves` (
  `ID` int(11) NOT NULL,
  `Move` varchar(120) NOT NULL,
  `Type` varchar(60) NOT NULL,
  `Cat` varchar(40) NOT NULL,
  `Power` int(11) NOT NULL,
  `Acc` int(11) NOT NULL,
  `Pokemon_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `moves`
--

CREATE TABLE `moves` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Type` varchar(60) NOT NULL,
  `Cat` varchar(30) NOT NULL,
  `Power` int(11) NOT NULL,
  `Acc` int(11) NOT NULL,
  `Pp` int(11) NOT NULL,
  `Effect` varchar(512) NOT NULL,
  `Pokemon_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `training`
--

CREATE TABLE `training` (
  `T_ID` int(11) NOT NULL,
  `Ev_Yield` varchar(120) NOT NULL,
  `Catch_Rate` varchar(55) NOT NULL,
  `Base_Friendship` varchar(55) NOT NULL,
  `Base_Exp` int(11) NOT NULL,
  `Growth_Rate` varchar(55) NOT NULL,
  `Pokemon_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_defense`
--

CREATE TABLE `type_defense` (
  `ID` int(11) NOT NULL,
  `Power` varchar(60) NOT NULL,
  `Point` float NOT NULL,
  `Pokemon_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `breeding`
--
ALTER TABLE `breeding`
  ADD PRIMARY KEY (`B_ID`),
  ADD KEY `Pokemon_id` (`Pokemon_id`);

--
-- Indeks untuk tabel `egg_moves`
--
ALTER TABLE `egg_moves`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Pokemon_id` (`Pokemon_id`);

--
-- Indeks untuk tabel `moves`
--
ALTER TABLE `moves`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Pokemon_id` (`Pokemon_id`);

--
-- Indeks untuk tabel `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Id` (`ID`);

--
-- Indeks untuk tabel `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`T_ID`),
  ADD KEY `Pokemon_id` (`Pokemon_id`);

--
-- Indeks untuk tabel `type_defense`
--
ALTER TABLE `type_defense`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Pokemon_id` (`Pokemon_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `breeding`
--
ALTER TABLE `breeding`
  MODIFY `B_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `training`
--
ALTER TABLE `training`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `breeding`
--
ALTER TABLE `breeding`
  ADD CONSTRAINT `breeding_ibfk_1` FOREIGN KEY (`Pokemon_id`) REFERENCES `pokemon` (`ID`);

--
-- Ketidakleluasaan untuk tabel `egg_moves`
--
ALTER TABLE `egg_moves`
  ADD CONSTRAINT `egg_moves_ibfk_1` FOREIGN KEY (`Pokemon_id`) REFERENCES `pokemon` (`ID`);

--
-- Ketidakleluasaan untuk tabel `moves`
--
ALTER TABLE `moves`
  ADD CONSTRAINT `moves_ibfk_1` FOREIGN KEY (`Pokemon_id`) REFERENCES `pokemon` (`ID`);

--
-- Ketidakleluasaan untuk tabel `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`Pokemon_id`) REFERENCES `pokemon` (`ID`);

--
-- Ketidakleluasaan untuk tabel `type_defense`
--
ALTER TABLE `type_defense`
  ADD CONSTRAINT `type_defense_ibfk_1` FOREIGN KEY (`Pokemon_id`) REFERENCES `pokemon` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

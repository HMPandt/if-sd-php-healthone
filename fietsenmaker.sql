-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 nov 2022 om 12:48
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fietsenmaker`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fiets`
--

CREATE TABLE `fiets` (
  `ID` int(11) NOT NULL,
  `Merk` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Prijs` float NOT NULL,
  `voorraad` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `fiets`
--

INSERT INTO `fiets` (`ID`, `Merk`, `Type`, `Prijs`, `voorraad`) VALUES
(1, 'Batavus', 'Blockbuster', 699, 12),
(2, 'Batavus', 'Flying D', 749, 32),
(3, 'Gazelle', 'Giro', 899, 42),
(4, 'Gazelle', 'Chamonix', 1049, 23),
(5, 'Gazelle', 'Eclipse', 799, 22),
(6, 'Giant', 'Competition', 999, 33),
(7, 'Giant', 'Expedition AT', 1299, 12);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `fiets`
--
ALTER TABLE `fiets`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fiets`
--
ALTER TABLE `fiets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

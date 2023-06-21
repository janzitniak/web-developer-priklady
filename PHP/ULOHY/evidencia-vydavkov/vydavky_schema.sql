-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 21.Jún 2023, 21:01
-- Verzia serveru: 10.1.21-MariaDB
-- Verzia PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `vydavky_schema`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pouzivatelia`
--

CREATE TABLE `pouzivatelia` (
  `id` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `heslo` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Sťahujem dáta pre tabuľku `pouzivatelia`
--

INSERT INTO `pouzivatelia` (`id`, `login`, `heslo`, `email`) VALUES
(1, 'admin', 'heslo123', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `vydavky`
--

CREATE TABLE `vydavky` (
  `id` int(11) NOT NULL,
  `nazov` varchar(50) COLLATE utf8_bin NOT NULL,
  `kategoria` varchar(20) COLLATE utf8_bin NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Sťahujem dáta pre tabuľku `vydavky`
--

INSERT INTO `vydavky` (`id`, `nazov`, `kategoria`, `cena`, `datum`) VALUES
(9, 'Ä¾Å¡ÄÅ¥Å¾Ã½Ã¡Ã½Ã¡Ã­11', 'Potraviny', '2.00', '2023-06-21'),
(10, 'Ä¾Å¡ÄÅ¥Å¾Ã½Ã¡Ã½Ã¡Ã­', 'Potraviny', '1.00', '2023-06-21'),
(11, 'Ä¾Å¡ÄÅ¥Å¾Ã½Ã¡Ã½Ã¡Ã­', 'Potraviny', '1.00', '2023-06-21'),
(12, 'Ä¾Å¡ÄÅ¥Å¾Ã½Ã¡Ã½Ã¡Ã­', 'Potraviny', '1.00', '2023-06-21'),
(18, 'RoÅ¾ky', 'Potraviny', '1.30', '2023-06-21'),
(19, 'RoÅ¾ky', 'Potraviny', '1.30', '2023-06-21'),
(20, 'RoÅ¾ky', 'Potraviny', '1.30', '2023-06-22'),
(21, 'RoÅ¾ky', 'Potraviny', '1.30', '0000-00-00'),
(22, 'RoÅ¾ky', 'Potraviny', '1.30', '2023-06-22'),
(23, 'RoÅ¾ky', 'Potraviny', '1.30', '2023-06-22'),
(24, 'Pizza', 'Potraviny', '9.00', '2023-06-21'),
(25, 'ÄŒuÄoriedky', 'Potraviny', '2.00', '2023-06-16'),
(26, 'MlieÄko', 'Potraviny', '1.10', '2023-06-21'),
(27, 'Diesel', 'PHM', '35.80', '2023-06-22');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexy pre tabuľku `vydavky`
--
ALTER TABLE `vydavky`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pre tabuľku `vydavky`
--
ALTER TABLE `vydavky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

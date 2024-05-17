-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Mag 17, 2024 alle 12:53
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ristorante`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Ordine`
--

CREATE TABLE `Ordine` (
  `idOrdine` int(3) NOT NULL,
  `nomeCliente` text NOT NULL,
  `nomePiatto` text NOT NULL,
  `totale` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Ordine`
--

INSERT INTO `Ordine` (`idOrdine`, `nomeCliente`, `nomePiatto`, `totale`) VALUES
(6, 'Nome Cliente', 'bob', 11),
(7, 'Nome Cliente', 'bob', 11),
(8, 'Nome Cliente', 'sasso', 21),
(9, 'Nome Cliente', 'bob', 11),
(10, 'Nome Cliente', 'bob', 11),
(11, 'Nome Cliente', 'bob', 11),
(12, 'Nome Cliente', 'sasso', 21),
(13, 'Nome Cliente', 'bob', 11);

-- --------------------------------------------------------

--
-- Struttura della tabella `Piatti`
--

CREATE TABLE `Piatti` (
  `codPiatto` int(11) NOT NULL,
  `nomePiatto` text NOT NULL,
  `ingredienti` text NOT NULL,
  `prezzo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Piatti`
--

INSERT INTO `Piatti` (`codPiatto`, `nomePiatto`, `ingredienti`, `prezzo`) VALUES
(1, 'Pasta al ragù', 'Pasta, ragù', 11),
(2, 'Pasta al pesto', 'Pasta, pesto', 12);

-- --------------------------------------------------------

--
-- Struttura della tabella `Utente`
--

CREATE TABLE `Utente` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `Utente`
--

INSERT INTO `Utente` (`ID`, `username`, `password`) VALUES
(1, 'Mattia', 'Mattia');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Ordine`
--
ALTER TABLE `Ordine`
  ADD PRIMARY KEY (`idOrdine`);

--
-- Indici per le tabelle `Piatti`
--
ALTER TABLE `Piatti`
  ADD PRIMARY KEY (`codPiatto`);

--
-- Indici per le tabelle `Utente`
--
ALTER TABLE `Utente`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Ordine`
--
ALTER TABLE `Ordine`
  MODIFY `idOrdine` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT per la tabella `Piatti`
--
ALTER TABLE `Piatti`
  MODIFY `codPiatto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `Utente`
--
ALTER TABLE `Utente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

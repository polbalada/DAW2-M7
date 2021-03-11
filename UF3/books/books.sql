-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 11-03-2021 a les 12:11:15
-- Versió del servidor: 10.4.14-MariaDB
-- Versió de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `books`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `books`
--

CREATE TABLE `books` (
  `book_id` bigint(20) NOT NULL,
  `title` varchar(64) DEFAULT NULL,
  `author` varchar(64) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `year`, `price`) VALUES
(1, 'Desarroyo Web con PHP', 'Manolo', 2005, '59.99'),
(2, 'Harry Potter', 'J.K. Rowling', 1997, '29.99'),
(3, 'Harry Potter 2', 'J.K. Rowling', 1998, '29.99');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `books`
--
ALTER TABLE `books`
  MODIFY `book_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

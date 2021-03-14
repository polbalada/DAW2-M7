-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 14-03-2021 a les 12:02:09
-- Versió del servidor: 10.4.14-MariaDB
-- Versió de PHP: 7.2.34

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
DROP DATABASE IF EXISTS `books`;
CREATE DATABASE IF NOT EXISTS `books` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `books`;

-- --------------------------------------------------------

--
-- Estructura de la taula `table_editorial`
--

CREATE TABLE `table_editorial` (
  `id_editorial` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trunca la taula abans de la inserció `table_editorial`
--

TRUNCATE TABLE `table_editorial`;
--
-- Bolcament de dades per a la taula `table_editorial`
--

INSERT INTO `table_editorial` (`id_editorial`, `nombre`) VALUES
(1, 'L\'Altra'),
(2, 'Sintesis'),
(3, 'Ra-ma'),
(4, 'Barco de Vapor'),
(5, 'McGraw Hill');

-- --------------------------------------------------------

--
-- Estructura de la taula `table_genero`
--

CREATE TABLE `table_genero` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trunca la taula abans de la inserció `table_genero`
--

TRUNCATE TABLE `table_genero`;
--
-- Bolcament de dades per a la taula `table_genero`
--

INSERT INTO `table_genero` (`id_genero`, `nombre`) VALUES
(1, 'novela romantica'),
(2, 'ficcio'),
(3, 'poesia'),
(4, 'policiaca'),
(5, 'informatica');

-- --------------------------------------------------------

--
-- Estructura de la taula `table_libros`
--

CREATE TABLE `table_libros` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(70) NOT NULL,
  `num_paginas` int(11) DEFAULT NULL,
  `id_genero` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trunca la taula abans de la inserció `table_libros`
--

TRUNCATE TABLE `table_libros`;
--
-- Bolcament de dades per a la taula `table_libros`
--

INSERT INTO `table_libros` (`id_libro`, `titulo`, `num_paginas`, `id_genero`, `id_editorial`) VALUES
(1, 'Terra Alta', 198, 4, 1),
(2, 'Bases de datos Diseño y gestion', 195, 5, 2),
(3, 'Head First Java', 568, 5, 3),
(4, 'Antologia Glu', 78, 3, 5),
(5, 'Trabajos de mierda', 235, 2, 4),
(6, 'Las aventuras de Tom Sawyer', 311, 2, 2),
(7, 'Harry Potter', 526, 2, 5);

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `table_editorial`
--
ALTER TABLE `table_editorial`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Índexs per a la taula `table_genero`
--
ALTER TABLE `table_genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Índexs per a la taula `table_libros`
--
ALTER TABLE `table_libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `table_libros_table_editorial_id_editorial_fk` (`id_editorial`),
  ADD KEY `table_libros_table_genero_id_genero_fk` (`id_genero`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `table_editorial`
--
ALTER TABLE `table_editorial`
  MODIFY `id_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la taula `table_genero`
--
ALTER TABLE `table_genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la taula `table_libros`
--
ALTER TABLE `table_libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `table_libros`
--
ALTER TABLE `table_libros`
  ADD CONSTRAINT `table_libros_table_editorial_id_editorial_fk` FOREIGN KEY (`id_editorial`) REFERENCES `table_editorial` (`id_editorial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `table_libros_table_genero_id_genero_fk` FOREIGN KEY (`id_genero`) REFERENCES `table_genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2017 a las 16:18:26
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_mycontacts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contacts`
--

CREATE TABLE `tbl_contacts` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo_personal` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo_profesional` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telf_personal` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `telf_profesional` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `lat_pers` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `lat_prof` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `long_pers` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `long_prof` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_contacto` tinyint(1) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`id_contacto`, `nombre`, `apellidos`, `correo_personal`, `correo_profesional`, `telf_personal`, `telf_profesional`, `lat_pers`, `lat_prof`, `long_pers`, `long_prof`, `tipo_contacto`, `usuario`) VALUES
(16, 'David', 'Marin', 'david@gmail.com', 'dmarin@j23.fje.edu', '98765436', '98765432', '', '', '', '', 1, 'sergio@gmail.com'),
(17, 'Agnes', 'Plans', 'agnes@gmail.com', 'aplans@joan23.fje.edu', '987898765', '987898765', '', '', '', '', 1, 'sergio@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `recovery` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `answ_recovery` varchar(1) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`usuario`, `password`, `recovery`, `answ_recovery`) VALUES
('isra@gmail.com', '1234', 'kile', '2'),
('musta@hotmail.es', '1234', 'rojo', '1'),
('sergio@gmail.com', '1234', 'Azul', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_contacts`
--
ALTER TABLE `tbl_contacts`
  ADD CONSTRAINT `tbl_contacts_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `tbl_users` (`usuario`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

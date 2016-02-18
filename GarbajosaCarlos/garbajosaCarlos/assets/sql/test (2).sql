-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2016 a las 13:58:45
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aficiones`
--

CREATE TABLE IF NOT EXISTS `aficiones` (
  `IDAF` int(3) NOT NULL,
  `NOMBRE` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aficiones`
--

INSERT INTO `aficiones` (`IDAF`, `NOMBRE`) VALUES
(9, 'tv'),
(10, 'musica'),
(11, 'correr'),
(12, 'vago');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `IDPER` int(3) NOT NULL,
  `NOMBRE` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`IDPER`, `NOMBRE`) VALUES
(1, 'carlos'),
(2, 'isma'),
(3, 'sergio'),
(4, 'amaury'),
(5, 'jorge'),
(6, 'amaury'),
(7, 'laura'),
(8, 'raquel'),
(9, 'pepe'),
(10, 'jose'),
(11, 'antonio'),
(12, 'julio'),
(13, 'julio'),
(14, 'tamara'),
(15, 'luismiguel'),
(16, 'pedro'),
(17, 'carlos'),
(18, 'carlos'),
(19, 'carlos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_aficiones`
--

CREATE TABLE IF NOT EXISTS `personas_aficiones` (
  `IDPER` int(3) NOT NULL,
  `IDAF` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_menus`
--

CREATE TABLE IF NOT EXISTS `_menus` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `accion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `_menus`
--

INSERT INTO `_menus` (`id`, `idp`, `nombre`, `accion`) VALUES
(1, 0, 'Aficion', ''),
(2, 0, 'Persona', ''),
(3, 1, 'Crear', 'aficiones/crear'),
(5, 2, 'Crear', 'personas/crear'),
(6, 2, 'Ver', 'personas/ver');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  ADD PRIMARY KEY (`IDAF`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`IDPER`);

--
-- Indices de la tabla `_menus`
--
ALTER TABLE `_menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  MODIFY `IDAF` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `IDPER` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2016 a las 16:26:44
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
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `iddep` int(11) NOT NULL,
  `nombreDep` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`iddep`, `nombreDep`) VALUES
(1, 'Ventas'),
(2, 'Márketing'),
(3, 'RRHH'),
(4, 'Finanzas'),
(5, 'Desfalcos'),
(6, 'Urdangarinadas'),
(7, 'Cosas feas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `idemp` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `fnac` date NOT NULL,
  `iddep` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idemp`, `nombre`, `apellido`, `fnac`, `iddep`) VALUES
(1, 'carlos', 'garbajosa', '2016-01-08', 1),
(2, 'ismael', 'nuñez', '2016-01-04', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE IF NOT EXISTS `participantes` (
  `nombre` varchar(15) NOT NULL,
  `edad` int(3) NOT NULL,
  `categoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`nombre`, `edad`, `categoria`) VALUES
('amaurys', 30, 'infantil'),
('carlitos', 22, 'juvenil'),
('ismael', 21, 'alevin'),
('leticia', 19, 'juvenil'),
('marcos', 19, 'juvenil'),
('pedro', 19, 'juvenil'),
('raquel', 19, 'juvenil'),
('torrente', 0, 'alevin');

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
(1, 0, 'Jugadores', ''),
(2, 1, 'Listar', 'jugadores/listar'),
(3, 1, 'Crear', 'jugadores/crear'),
(4, 1, 'Editar', 'jugadores/editar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`iddep`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idemp`),
  ADD KEY `iddep` (`iddep`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `_menus`
--
ALTER TABLE `_menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `iddep` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idemp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `FK_EMP_DEP` FOREIGN KEY (`iddep`) REFERENCES `departamentos` (`iddep`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

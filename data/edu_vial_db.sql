-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-07-2019 a las 14:05:54
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `edu_vial_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `id_escuela` bigint(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `localidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`id_escuela`, `nombre`, `clave`, `localidad`) VALUES
(1, 'Universidad politecnica de Durango', 'Up000', 'Durango'),
(2, 'Universidad Juarez', 'UJ123', 'Durango'),
(3, 'COLEGIO ANGLO ESPANOL', 'CA123', 'DURANGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `punpar`
--

CREATE TABLE `punpar` (
  `id` int(11) NOT NULL,
  `escuela` varchar(48) NOT NULL,
  `nombre` varchar(48) NOT NULL,
  `ap_paterno` varchar(48) NOT NULL,
  `ap_materno` varchar(48) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` char(2) NOT NULL,
  `actividad1` int(7) NOT NULL DEFAULT '0',
  `actividad2` int(7) NOT NULL DEFAULT '0',
  `actividad3` int(7) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `punpar`
--

INSERT INTO `punpar` (`id`, `escuela`, `nombre`, `ap_paterno`, `ap_materno`, `edad`, `sexo`, `actividad1`, `actividad2`, `actividad3`) VALUES
(1, 'Universidad politecnica de Durango', 'Erik', 'Flores', 'Amador', 7, 'M', 30, 20, 100),
(2, 'Universidad politecnica de Durango', 'Estefania', 'Rodriguez', 'A', 8, 'F', 90, 85, 60),
(3, 'Universidad politecnica de Durango', 'Jessica', 'Santos', 'Nava', 12, 'F', 70, 70, 80),
(4, 'Universidad Juarez', 'Juanito', 'Galvancito', 'De Santiaguito', 7, 'F', 50, 85, 40),
(5, 'Universidad Juarez', 'Maritza', 'Del valle', 'Sierra', 9, 'F', 70, 0, 0),
(6, 'COLEGIO ANGLO ESPANOL', 'Erik', 'Flores', 'Amador', 10, 'M', 70, 0, 0),
(7, 'Universidad politecnica de Durango', 'Felix', 'Acosta', 'Hernandez', 11, 'M', 80, 0, 60);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`id_escuela`);

--
-- Indices de la tabla `punpar`
--
ALTER TABLE `punpar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `id_escuela` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `punpar`
--
ALTER TABLE `punpar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

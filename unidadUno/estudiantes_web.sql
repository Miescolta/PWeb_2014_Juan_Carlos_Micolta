-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2014 a las 05:58:25
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `estudiantes_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `Codigo` text COLLATE utf8_bin NOT NULL,
  `Nombre` text COLLATE utf8_bin NOT NULL,
  `Apellido` text COLLATE utf8_bin NOT NULL,
  `Correo` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`Codigo`, `Nombre`, `Apellido`, `Correo`) VALUES
('12112009', 'Andrea', 'Castaneda', 'andrecastan@hotmail.com'),
('12112019', 'Andres', 'Bonilla', 'andres.bonilla1@correo.icesi.edu.co'),
('11104017', 'Kammil', 'Carranza', 'kaescavi94@gmail.com'),
('11212045', 'Juan Carlos', 'Micolta', 'juanc.micolta@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `idNota` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `porcentaje` int(255) NOT NULL,
  PRIMARY KEY (`idNota`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`idNota`, `nombre`, `porcentaje`) VALUES
(1, 'Taller1', 20),
(2, 'Taller2', 25),
(3, 'Taller3', 25),
(4, 'Taller4', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notasestudiantes`
--

CREATE TABLE IF NOT EXISTS `notasestudiantes` (
  `codigoEstudiante` text COLLATE utf8_bin NOT NULL,
  `idNotas` int(255) NOT NULL,
  `valorNotas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `notasestudiantes`
--

INSERT INTO `notasestudiantes` (`codigoEstudiante`, `idNotas`, `valorNotas`) VALUES
('12112009', 1, 5),
('12112019', 2, 4),
('11104017', 3, 3),
('11212045', 4, 5),
('12112009', 2, 5),
('12112019', 3, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2014 a las 02:57:43
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `taller3_micolta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE IF NOT EXISTS `ubicaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`id`, `tipo`, `nombre`, `latitud`, `longitud`) VALUES
(1, 'Bar', 'Bourbon St', 3.46059, -76.532996),
(2, 'Bar', 'Dal Padrino Bar V.I.P', 3.461867, -76.532513),
(3, 'Bar', 'San Alejo Bar', 3.459476, -76.533527),
(4, 'Hotel', 'Hotel Plaza Mayor', 3.45975, -76.534983),
(5, 'Hotel', 'Cali Plaza Hotel', 3.458488, -76.533186),
(6, 'Hotel', 'Now', 3.457367, -76.536685),
(7, 'Tienda', 'Lini Cacao Company', 3.46154, -76.533754),
(8, 'Tienda', 'Gina Murillo', 3.46203, -76.533528),
(9, 'Tienda', 'Silcia Tcherassi', 3.454308, -76.537044);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2014 a las 09:19:02
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(255) COLLATE utf8_bin NOT NULL,
  `movil` int(12) NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `pais` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `email`, `usuario`, `contrasena`, `movil`, `direccion`, `pais`) VALUES
(1, 'Juan Carlos', 'Micolta Sellares', 'juanc.micolta@gmail.com', 'Miescolta', '12345', 3705983, 'Calle 13 # 108 - 100 Cali', 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_de_pedido`
--

CREATE TABLE IF NOT EXISTS `lineas_de_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `unidades` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `lineas_de_pedido`
--

INSERT INTO `lineas_de_pedido` (`id`, `id_pedido`, `id_producto`, `unidades`) VALUES
(1, 3, 2, 1),
(2, 3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_cliente`, `fecha`, `estado`) VALUES
(1, 1, '0000-00-00', '0'),
(2, 1, '0000-00-00', '0'),
(3, 1, '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `precio` varchar(255) COLLATE utf8_bin NOT NULL,
  `existencias` int(11) NOT NULL,
  `activado` varchar(255) COLLATE utf8_bin NOT NULL,
  `imagen` text COLLATE utf8_bin NOT NULL,
  `Destacados` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `existencias`, `activado`, `imagen`, `Destacados`) VALUES
(1, 'Game Over', 'Camiseta de colore verde con estampado en color blanco.\r\nTallas manejadas: S ,M, L, XL', '12000', 15, 'Si', 'camiseta1.jpg', 1),
(2, 'Seen it All', 'Camiseta color gris, con estampado en varios colores.\r\nTallas manejadas: S , M, L, XL', '15000', 10, 'Si', 'camiseta2.jpg', 0),
(3, 'Canada', 'Camiseta color rojo, con estampado en color blanco.\r\nTallas manejadas: S, M,L ,XL', '15000', 20, 'Si', 'camiseta3.jpg', 0),
(4, 'Bear Grills', 'Camiseta color cafe, con estampado color claro.\r\nTallas manejadas: S, M, L, XL', '15000', 15, 'Si', 'camiseta4.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-07-2014 a las 12:01:40
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `activa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_tienda` int(11) DEFAULT NULL,
  `P1` int(11) DEFAULT NULL,
  `P2` int(11) DEFAULT NULL,
  `P3` int(11) DEFAULT NULL,
  `P4` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `id_tienda`, `P1`, `P2`, `P3`, `P4`) VALUES
(1, 1, 3, 3, 4, 4),
(2, 3, 2, 7, 3, 3),
(3, 3, 4, 5, 99, 1),
(4, 3, 3, 99, 2, 2),
(5, 1, 4, 4, 4, 6),
(6, 4, 7, 7, 99, 6),
(7, 1, 99, 4, 1, 3),
(8, 3, 3, 3, 6, 4),
(9, 3, 5, 3, 4, 6),
(10, 4, 5, 4, 4, 4),
(11, 4, 2, 3, 1, 1),
(12, 3, 5, 4, 7, 4),
(13, 3, 2, 6, 2, 6),
(14, 3, 6, 99, 2, 5),
(15, 4, 6, 2, 4, 5),
(16, 2, 6, 5, 3, 4),
(17, 2, 7, 2, 2, 2),
(18, 1, 2, 5, 1, 7),
(19, 3, 3, 4, 1, 2),
(20, 3, 3, 6, 4, 5),
(21, 3, 2, 6, 2, 4),
(22, 1, 1, 3, 5, 6),
(23, 1, 5, 7, 7, 1),
(24, 2, 6, 5, 2, 4),
(25, 2, 3, 7, 4, 5),
(26, 1, 4, 99, 7, 5),
(27, 2, 6, 3, 5, 7),
(28, 4, 4, 5, 7, 7),
(29, 4, 7, 4, 1, 5),
(30, 1, 99, 6, 7, 7),
(31, 2, 7, 1, 2, 6),
(32, 1, 99, 1, 2, 6),
(33, 2, 1, 99, 99, 2),
(34, 4, 3, 2, 5, 3),
(35, 4, 2, 5, 1, 6),
(36, 1, 2, 99, 3, 3),
(37, 4, 5, 5, 6, 1),
(38, 4, 6, 2, 5, 6),
(39, 2, 2, 5, 1, 2),
(40, 2, 99, 5, 6, 4),
(41, 2, 99, 99, 7, 1),
(42, 1, 3, 6, 7, 5),
(43, 2, 4, 6, 4, 4),
(44, 1, 4, 2, 3, 3),
(45, 4, 1, 99, 99, 4),
(46, 1, 5, 5, 2, 2),
(47, 2, 6, 5, 1, 99),
(48, 3, 99, 6, 99, 3),
(49, 3, 2, 2, 5, 3),
(50, 4, 7, 99, 4, 3),
(51, 3, 6, 7, 4, 5),
(52, 3, 4, 1, 1, 4),
(53, 3, 1, 2, 6, 7),
(54, 4, 99, 4, 3, 7),
(55, 2, 7, 2, 4, 2),
(56, 4, 7, 3, 99, 7),
(57, 2, 99, 5, 5, 1),
(58, 1, 1, 1, 5, 2),
(59, 2, 3, 6, 3, 1),
(60, 4, 6, 1, 2, 1),
(61, 2, 1, 7, 2, 2),
(62, 1, 4, 2, 5, 7),
(63, 4, 99, 2, 1, 2),
(64, 1, 3, 1, 99, 1),
(65, 4, 2, 1, 1, 1),
(66, 3, 5, 1, 7, 7),
(67, 1, 99, 3, 1, 6),
(68, 3, 99, 6, 1, 3),
(69, 3, 4, 1, 1, 1),
(70, 2, 6, 2, 2, 6),
(71, 3, 5, 6, 3, 99),
(72, 2, 6, 4, 4, 6),
(73, 1, 3, 5, 6, 1),
(74, 4, 3, 7, 6, 6),
(75, 1, 1, 4, 2, 2),
(76, 4, 7, 6, 2, 6),
(77, 4, 2, 5, 7, 3),
(78, 3, 4, 2, 1, 3),
(79, 2, 7, 1, 1, 5),
(80, 4, 6, 2, 4, 6),
(81, 1, 1, 1, 1, 7),
(82, 1, 4, 4, 3, 4),
(83, 2, 7, 3, 4, 5),
(84, 3, 4, 1, 5, 3),
(85, 2, 99, 1, 1, 1),
(86, 4, 4, 1, 2, 99),
(87, 1, 7, 2, 5, 6),
(88, 4, 99, 7, 2, 4),
(89, 2, 5, 6, 4, 99),
(90, 3, 99, 7, 3, 7),
(91, 4, 4, 5, 99, 7),
(92, 2, 99, 6, 3, 99),
(93, 4, 6, 4, 1, 4),
(94, 1, 2, 5, 4, 7),
(95, 3, 6, 7, 2, 99),
(96, 2, 4, 4, 6, 7),
(97, 2, 4, 7, 6, 1),
(98, 1, 1, 1, 7, 3),
(99, 3, 99, 5, 1, 3),
(100, 1, 1, 3, 7, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id_pregunta` varchar(2) NOT NULL DEFAULT '',
  `nom_pregunta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `nom_pregunta`) VALUES
('P1', 'Amabilidad'),
('P2', 'Calidad'),
('P3', 'Eficiencia'),
('P4', 'Seguridad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE IF NOT EXISTS `tiendas` (
  `id_tienda` varchar(255) DEFAULT NULL,
  `nom_tienda` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`id_tienda`, `nom_tienda`) VALUES
('1', 'Santiago'),
('2', 'Concepción'),
('3', 'Iquique'),
('4', 'Puerto Montt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`, `nombre`, `apellido`) VALUES
('aresearch', 'd2d4a5bf8e31e775bb0a73d741d2883d', 'Activa', 'Research');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

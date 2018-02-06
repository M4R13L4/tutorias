-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2018 a las 19:04:58
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tutor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `alumno_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `profesor_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`alumno_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`alumno_id`, `matricula`, `nombre`, `apellidos`, `foto`, `correo`, `profesor_id`) VALUES
(1, '2013020167', 'Luis Fernando', 'Gutierrez Cruz', './imgs/default.png', 'luisfer@gmail.com', 1),
(2, '2013020189', 'Jhoana', 'Celaya Jimenez', './imgs/default.png', 'jhoana@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevista`
--

CREATE TABLE IF NOT EXISTS `entrevista` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `profesor_id` tinyint(4) NOT NULL,
  `alumno_id` tinyint(4) NOT NULL,
  `fecha` date NOT NULL,
  `notas` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `entrevista`
--

INSERT INTO `entrevista` (`id`, `profesor_id`, `alumno_id`, `fecha`, `notas`) VALUES
(1, 1, 1, '0000-00-00', ''),
(2, 2, 2, '2017-12-12', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingles`
--

CREATE TABLE IF NOT EXISTS `ingles` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `semestre` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `alumno_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alumno_id` (`alumno_id`),
  KEY `alumno_id_2` (`alumno_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ingles`
--

INSERT INTO `ingles` (`id`, `nivel`, `estado`, `semestre`, `alumno_id`) VALUES
(1, 'FCE ', 'Aprobado', '2018-A', 1),
(2, 'KET ', 'Aprobado', '2018-A', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `alumno_id` tinyint(4) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `calif1` float NOT NULL,
  `calif2` float NOT NULL,
  `calif3` float NOT NULL,
  `final` float NOT NULL,
  `extra1` float NOT NULL,
  `extra2` float NOT NULL,
  `especial` float NOT NULL,
  `semestre` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `alumno_id` (`alumno_id`),
  KEY `alumno_id_2` (`alumno_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `alumno_id`, `nombre`, `calif1`, `calif2`, `calif3`, `final`, `extra1`, `extra2`, `especial`, `semestre`) VALUES
(2, 1, 'Sistemas distribuidos', 8, 7, 0, 0, 0, 0, 0, '2018-A'),
(3, 1, 'Programacion logica', 10, 6, 0, 0, 0, 0, 0, '2018-A'),
(4, 2, 'Sistemas distribuidos', 6, 7, 0, 0, 0, 0, 0, '2018-A'),
(5, 2, 'Programacion logica', 9, 8, 0, 0, 0, 0, 0, '2018-A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `profesor_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `instituto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`profesor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`profesor_id`, `nombre`, `usuario`, `correo`, `instituto`) VALUES
(1, 'ErickGuzman Perez', 'erick_g', 'erick@gmail.com', 'instituto de computacion'),
(2, 'Carlos Juarez Lopez', 'carlos_j', 'carlos@gmail.com', 'instituto de computacion'),
(5, 'Marta Santos Jimenez', 'marta_l', 'marta@gmail.com', 'instituto de computacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria`
--

CREATE TABLE IF NOT EXISTS `tutoria` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `profesor_id` tinyint(4) NOT NULL,
  `alumno_id` tinyint(4) NOT NULL,
  `semestre` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tutoria`
--

INSERT INTO `tutoria` (`id`, `profesor_id`, `alumno_id`, `semestre`) VALUES
(1, 1, 1, '2018-A'),
(2, 2, 2, '2018-A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `tipo` tinyint(4) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `tipo`, `usuario`, `password`) VALUES
(1, 1, 'administrador', 'administrador'),
(2, 3, 'staff', 'staff'),
(3, 2, 'erick_g', 'erick'),
(4, 2, 'carlos_j', 'carlos'),
(5, 2, 'marta_l', 'marta');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

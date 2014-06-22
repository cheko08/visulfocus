-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2014 a las 05:27:37
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `visual_focus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `comments` text COLLATE utf8_spanish2_ci NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `nombre`, `empresa`, `email`, `comments`, `creation_date`) VALUES
(1, 'Roberto Pacheco', 'Publisites', 'r.pacheco@outlook.com', 'Hola,\r\nEste es un comentario de prueba para guardar en base de datos.\r\nsaludos', '2014-05-27 05:20:20'),
(2, 'Juan Perez', 'Juanimex SA', 'roberto.pacheco@4thsource.com', 'Hola este es otro comentario de prueba', '2014-05-27 05:21:51'),
(3, 'Roberto Pacheco Rio', 'Bose ', 'robertopachecorio@gmail.com', 'Comment de prueba', '2014-05-27 05:34:28'),
(4, 'Roberto Angel Pacheco Rio', 'Sennheiser', 'roberto.pacheco@4thsource.com', 'comentario de prueba', '2014-05-27 05:36:41'),
(5, 'Roberto Angel Pacheco Rio', 'Acer', 'r.pacheco@outlook.com', 'comentario de prueba', '2014-05-27 05:41:46'),
(6, 'Roberto Pacheco Rio', 'HTC', 'roberto.pacheco@4thsource.com', 'comentario de prueba', '2014-05-27 05:45:01'),
(7, 'Roberto Angel Pacheco Rio', 'Lasko', 'roberto.pacheco@4thsource.com', 'prueba', '2014-05-27 06:01:07'),
(8, 'asd', 'asdas', 'asda@dsad', 'asd', '2014-06-05 02:20:32'),
(9, 'Humberto', 'Visual focus', 'visualfocusmerida@hotmail.com', 'Prueba', '2014-06-10 22:23:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE IF NOT EXISTS `modelos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `img` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fotos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id`, `name`, `img`, `fotos`) VALUES
(8, 'Abi', 'abi', 1),
(9, 'Alecia', 'alecia', 2),
(10, 'Alejandra', 'alejandra', 2),
(11, 'Alina', 'alina', 2),
(12, 'Allison', 'allison', 3),
(13, 'Ana', 'ana', 2),
(14, 'Ana Cecilia', 'anacecilia', 2),
(15, 'Angie', 'angie', 2),
(16, 'Any', 'any', 3),
(17, 'Aracely', 'aracely', 2),
(18, 'Bety', 'bety', 4),
(19, 'Clau', 'clau', 2),
(20, 'Claudette', 'claudette', 1),
(21, 'Cristina', 'cristina', 2),
(22, 'Cynthia', 'cynthia', 2),
(23, 'Dani', 'dani', 2),
(24, 'Dani Rowold', 'danirowold', 2),
(25, 'Diana', 'diana', 3),
(26, 'Esmeralda', 'esmeralda', 3),
(27, 'Jamie', 'jamie', 3),
(28, 'Joys', 'joys', 3),
(29, 'Julieta', 'julieta', 3),
(30, 'Karla', 'karla', 2),
(31, 'Lalahi', 'lalahi', 2),
(32, 'Leslie', 'leslie', 3),
(33, 'Liliana', 'liliana', 3),
(34, 'Luisa', 'luisa', 2),
(35, 'Marian', 'marian', 1),
(36, 'Mariana', 'mariana', 2),
(37, 'Marina', 'marina', 2),
(38, 'Nicole', 'nicole', 2),
(39, 'Nina', 'nina', 3),
(40, 'Paulina', 'paulina', 2),
(41, 'Renata', 'renata', 4),
(42, 'Samy', 'samy', 3),
(43, 'Susana', 'susana', 2),
(44, 'Susana M', 'susanam', 4),
(45, 'Zulma', 'zulma', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dir` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tel_casa` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tel_cel` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ocupacion` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nacionalidad` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `radica` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `estatura` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `peso` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `piel` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cabello` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ojos` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `talla_ropa` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `talla_calzado` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `busto` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cintura` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cadera` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `habilidades` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tiempo` varbinary(200) DEFAULT NULL,
  `vestuario` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `vestuario1` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `vestuario2` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `vestuario3` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `personalidad` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `eventos` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `foto_cuerpo` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `foto_rostro` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `nombre`, `dir`, `tel_casa`, `tel_cel`, `email`, `ocupacion`, `nacionalidad`, `radica`, `edad`, `estatura`, `peso`, `piel`, `cabello`, `ojos`, `talla_ropa`, `talla_calzado`, `busto`, `cintura`, `cadera`, `habilidades`, `tiempo`, `vestuario`, `vestuario1`, `vestuario2`, `vestuario3`, `personalidad`, `eventos`, `foto_cuerpo`, `foto_rostro`) VALUES
(1, 'Prueba', 'calle 36 #422 por 17 y 19 los pinos', '529991637143', '0', 'prueba@hotmail.com', 'prueba', 'mexicana', 'mexicana', 34, '1.70', '90', 'prueba', 'prueba', 'prueba', '4', '4', '90', '60', '90', 'prueba', 'prueba', 'Vestido Coktail', 'Tops', 'Shorts', 'Vestuario de licra', 'prueba', 'prueba', NULL, NULL),
(2, 'prueb', 'prueb', '23432423', '234234', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 'rwerwer', 'werwer', 'Vestido Coktail', 'Tops', 'Shorts', 'Vestuario de licra', '', '', '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

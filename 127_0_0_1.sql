-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2014 a las 13:38:03
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `jukebox`
CREATE DATABASE jukebox;
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `clave` varchar(20) NOT NULL,
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `contraseña` (`contrasena`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `foto` (`foto`),
  UNIQUE KEY `clave` (`clave`),
  UNIQUE KEY `clave_2` (`clave`),
  KEY `usuario_2` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`usuario`, `contrasena`, `correo`, `foto`, `clave`) VALUES
('root', 'root', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE IF NOT EXISTS `artistas` (
  `clave` int(255) NOT NULL,
  `nombre_artista` varchar(255) NOT NULL,
  `nombre_genero` varchar(25) NOT NULL,
  `integrantes` varchar(11) NOT NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY (`clave`),
  UNIQUE KEY `nombre` (`nombre_artista`),
  UNIQUE KEY `genero` (`nombre_genero`),
  UNIQUE KEY `integrantes` (`integrantes`),
  UNIQUE KEY `clave` (`clave`),
  UNIQUE KEY `foto` (`foto`),
  KEY `genero_2` (`nombre_genero`),
  KEY `genero_3` (`nombre_genero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `nombre_artista` varchar(30) NOT NULL,
  `nombre_album` varchar(30) NOT NULL,
  `año` int(4) NOT NULL,
  `car_front` varchar(50) NOT NULL,
  `car_post` varchar(50) NOT NULL,
  `audio` varchar(255) NOT NULL,
  PRIMARY KEY (`audio`),
  UNIQUE KEY `artista` (`nombre_artista`),
  UNIQUE KEY `nombre_album` (`nombre_album`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `nombre_genero` varchar(25) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `archivo` varchar(1000) NOT NULL,
  PRIMARY KEY (`nombre_genero`),
  UNIQUE KEY `nombre` (`nombre_genero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`nombre_genero`, `descripcion`, `archivo`) VALUES
('kjn', 'njm h ', 'img/genero/1e4d03_asdsdwerd.png'),
('mu', 'dfsdf', 'img/genero/311cd5_nobel10.jpg'),
('sdf', 'jk', 'img/genero/6cc311_pat_quiensabe.jpg');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD CONSTRAINT `artistas_ibfk_1` FOREIGN KEY (`nombre_genero`) REFERENCES `genero` (`nombre_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

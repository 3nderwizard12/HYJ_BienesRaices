-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-12-2020 a las 06:19:16
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kahuma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcomentarios`
--

DROP TABLE IF EXISTS `tblcomentarios`;
CREATE TABLE IF NOT EXISTS `tblcomentarios` (
  `comID` int(11) NOT NULL AUTO_INCREMENT,
  `comCorreo` varchar(50) COLLATE utf8_bin NOT NULL,
  `comComentario` varchar(255) COLLATE utf8_bin NOT NULL,
  `comFoto` int(11) NOT NULL,
  `comFecha` datetime NOT NULL,
  PRIMARY KEY (`comID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tblcomentarios`
--

INSERT INTO `tblcomentarios` (`comID`, `comCorreo`, `comComentario`, `comFoto`, `comFecha`) VALUES
(1, 'daniela18navarro@hotmail.com', 'Que bonita', 1, '2020-12-08 20:24:10'),
(2, 'daniela18navarro@hotmail.com', 'Esto es ARTE', 4, '2020-12-16 00:23:44'),
(3, 'daniela18navarro@hotmail.com', 'Lindo diseÃ±o', 3, '2020-12-17 00:18:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfoto`
--

DROP TABLE IF EXISTS `tblfoto`;
CREATE TABLE IF NOT EXISTS `tblfoto` (
  `fotId` int(11) NOT NULL AUTO_INCREMENT,
  `fotCorreo` varchar(50) COLLATE utf8_bin NOT NULL,
  `fotDescripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `fotArchivo` varchar(100) COLLATE utf8_bin NOT NULL,
  `fotFecha` datetime NOT NULL,
  PRIMARY KEY (`fotId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tblfoto`
--

INSERT INTO `tblfoto` (`fotId`, `fotCorreo`, `fotDescripcion`, `fotArchivo`, `fotFecha`) VALUES
(1, 'daniela18navarro@hotmail.com', 'NiÃ±a', 'pen.png', '2020-11-10 22:02:06'),
(2, 'daniela18navarro@hotmail.com', 'Rosa', 'photo-1548192746-dd526f154ed9.jpg', '2020-11-23 21:49:16'),
(3, 'daniela18navarro@hotmail.com', 'Beso', 'cuadros-arte-moderno-pop-acrilico-lienzo_iz2xvzxxpz2xfz124719811-440245627-2xsz124719811xim.jpg', '2020-12-15 21:06:54'),
(4, 'daniela18navarro@hotmail.com', 'CafÃ©', 'buho_de_cafe_arte.jpg', '2020-12-16 00:22:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmegusta`
--

DROP TABLE IF EXISTS `tblmegusta`;
CREATE TABLE IF NOT EXISTS `tblmegusta` (
  `likID` int(11) NOT NULL AUTO_INCREMENT,
  `likCorreo` varchar(50) COLLATE utf8_bin NOT NULL,
  `likFoto` int(11) NOT NULL,
  `likeFecha` datetime NOT NULL,
  PRIMARY KEY (`likID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tblmegusta`
--

INSERT INTO `tblmegusta` (`likID`, `likCorreo`, `likFoto`, `likeFecha`) VALUES
(4, 'daniela18navarro@hotmail.com', 3, '2020-12-17 00:17:57'),
(3, 'daniela18navarro@hotmail.com', 4, '2020-12-16 00:23:35'),
(5, 'daniela18navarro@hotmail.com', 2, '2020-12-17 00:18:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmensajes`
--

DROP TABLE IF EXISTS `tblmensajes`;
CREATE TABLE IF NOT EXISTS `tblmensajes` (
  `menId` int(11) NOT NULL AUTO_INCREMENT,
  `menPara` varchar(50) COLLATE utf8_bin NOT NULL,
  `menDe` varchar(50) COLLATE utf8_bin NOT NULL,
  `menAsunto` varchar(50) COLLATE utf8_bin NOT NULL,
  `menMensaje` varchar(255) COLLATE utf8_bin NOT NULL,
  `menFecha` datetime NOT NULL,
  PRIMARY KEY (`menId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tblmensajes`
--

INSERT INTO `tblmensajes` (`menId`, `menPara`, `menDe`, `menAsunto`, `menMensaje`, `menFecha`) VALUES
(1, 'daniela18navarro@hotmail.com', 'daniela18navarro@hotmail.com', 'Prueba', 'Ya funciona porfavor', '2020-11-10 21:35:25'),
(2, 'daniela18navarro@hotmail.com', 'daniela18navarro@hotmail.com', 'InformaciÃ³n de la pagina', 'Agradezco de Antemano que contestaras el mensaje', '2020-12-15 21:06:06'),
(3, 'daniela18navarro@hotmail.com', 'daniela18navarro@hotmail.com', 'Datos Importantes', 'Gracias por su compra su numero de referencia es 1960785 para que lo almacene correctamente.', '2020-12-16 00:54:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `usuContrasena` text COLLATE utf8_bin NOT NULL,
  `usuCorreo` varchar(50) COLLATE utf8_bin NOT NULL,
  `usuFecha` date NOT NULL,
  `usuNombre` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`usuCorreo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbluser`
--

INSERT INTO `tbluser` (`usuContrasena`, `usuCorreo`, `usuFecha`, `usuNombre`) VALUES
('$2y$10$DNADG.JHqOAbam4Btb./b.R5LFLPYmuMRoCmwFve6Gp7ngNqTZb4O', 'daniela18navarro@hotmail.com', '2000-03-18', 'Jessica Navarrete');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

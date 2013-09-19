-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2013 a las 21:24:11
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `conocimiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_procedimiento`
--

CREATE TABLE IF NOT EXISTS `categoria_procedimiento` (
  `id_catepro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cate` varchar(150) NOT NULL,
  `referencia` varchar(150) NOT NULL,
  PRIMARY KEY (`id_catepro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `categoria_procedimiento`
--

INSERT INTO `categoria_procedimiento` (`id_catepro`, `nombre_cate`, `referencia`) VALUES
(1, 'categoria ', 'principal'),
(2, 'contabilidad ', 'categoria'),
(3, 'creditos', 'contabilidad'),
(4, 'Tecnologia', 'categoria'),
(5, 'redes y servidores ', 'Tecnologia'),
(6, 'analista de sistema', 'Tecnologia'),
(7, 'administrador de base de datos ', 'Tecnologia'),
(8, 'tecnicos', 'redes servidores '),
(9, 'reporteria', 'analista de sistema '),
(10, 'pagos de prestamos', 'creditos'),
(11, 'consulta', 'administrador'),
(12, 'diseÃ±o', 'analista'),
(13, 'caja', 'creditos'),
(20, 'operaciones', 'categoria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_usuario`
--

CREATE TABLE IF NOT EXISTS `categoria_usuario` (
  `id_cateuser` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(150) NOT NULL,
  PRIMARY KEY (`id_cateuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `categoria_usuario`
--

INSERT INTO `categoria_usuario` (`id_cateuser`, `descripcion`) VALUES
(1, 'contabilidad'),
(2, 'operaciones'),
(3, 'operaciones'),
(4, 'contabilidad'),
(5, 'creditos'),
(6, 'contabilidad'),
(7, 'prestamos'),
(8, 'tecnologia '),
(9, 'mercadeo'),
(10, 'conciliaciones '),
(11, 'redes y servidores '),
(12, 'administrador'),
(13, 'prestamos'),
(14, 'prestamos'),
(15, 'administrador'),
(16, 'administrador'),
(17, 'administrador'),
(18, 'base de datos '),
(19, 'contador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(250) NOT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  `permiso` varchar(15) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `descripcion`, `permiso`) VALUES
(1, 'administrador', 'permiso'),
(2, 'administrador', 'permiso'),
(3, 'usuario', 'permiso'),
(4, 'administrador', 'permiso'),
(5, 'usuario', 'permiso'),
(6, 'supervior', 'permiso'),
(7, 'administrador', 'ver y crear '),
(8, 'administrador', 'ver y crear '),
(9, 'administrador', 'permiso'),
(10, 'administrador', 'permiso'),
(11, 'administrador', 'permiso'),
(12, 'administrador', 'permiso'),
(13, 'administrador', 'permiso'),
(14, 'administrador', 'permiso'),
(15, 'usuario', 'permiso'),
(16, 'usuario', 'permiso'),
(17, 'usuario', 'permiso'),
(18, 'prestamos', 'permiso'),
(19, 'administrador', 'permiso'),
(20, 'administrador', 'permiso'),
(23, 'analista', 'permiso'),
(24, 'analista', 'permiso'),
(25, 'analista', 'permiso'),
(26, 'analista', 'permiso'),
(27, 'auditor', 'permiso'),
(28, 'auditor', 'ver y crear '),
(29, 'analista', 'Ver'),
(30, 'administrador', 'Ver'),
(31, 'administrador', 'Ver'),
(32, 'administrador', 'Ver'),
(33, 'administrador', 'Ver'),
(34, 'administrador', 'Ver'),
(35, 'administrador', 'Ver'),
(36, 'administrador', 'Ver'),
(37, 'administrador', 'Ver'),
(38, 'administrador', 'Ver'),
(39, 'operaciones', 'Ver'),
(40, 'administrador', 'Ver'),
(41, 'actualizar', 'Ver'),
(42, 'actualizar', 'Ver'),
(43, 'administrador', 'Ver'),
(44, 'administrador', 'Ver'),
(45, 'creditos', 'Ver'),
(46, 'administrador', 'Ver'),
(47, 'administrador', 'Ver'),
(48, 'admon de DBA ', 'Ver'),
(49, 'administrador', 'Ver'),
(50, 'sistema', 'permiso'),
(51, 'acceso', 'Ver y Crear');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimiento`
--

CREATE TABLE IF NOT EXISTS `procedimiento` (
  `id_procedimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `procedimiento` text NOT NULL,
  `visita` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `id_comentario` int(11) NOT NULL,
  PRIMARY KEY (`id_procedimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trans_categoria`
--

CREATE TABLE IF NOT EXISTS `trans_categoria` (
  `id_catepro` int(11) NOT NULL,
  `id_cateuser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trans_catepro`
--

CREATE TABLE IF NOT EXISTS `trans_catepro` (
  `id_catepro` int(11) NOT NULL,
  `id_procedimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `nice` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id_estado` varchar(11) NOT NULL,
  `id_cateuser` varchar(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `nice`, `correo`, `password`, `id_estado`, `id_cateuser`) VALUES
(1, 'lourdes', 'garcia', 'root', 'lbgarcia@banadesa,hn', 'garcia20', '0', '0'),
(2, 'lourdes', 'garcia', 'root', 'lbgarcia@banadesa,hn', 'garcia20', '0', '0'),
(3, 'kilver', 'bonilla', 'root', 'kbonilla@gmail.com', 'loenlel', '0', '0'),
(4, 'kilver', 'bonilla', 'root', 'kbonilla@gmail.com', 'loenlel', '0', '0'),
(5, 'rafael', 'garcia', 'root', 'rgarcia@banadesa.hn', 'rgarcia', '0', '0'),
(6, 'rafael', 'garcia', 'root', 'rgarcia@banadesa.hn', 'rgarcia', '0', '0'),
(7, 'rafael', 'garcia', 'root', 'rgarcia@banadesa.hn', 'rgarcia', '0', '0'),
(8, 'rafael', 'garcia', 'root', 'rgarcia@banadesa.hn', 'rgarcia', '0', '0'),
(9, 'rafael', 'garcia', 'root', 'rgarcia@banadesa.hn', 'rgarcia', '0', '0'),
(10, 'beatriz', 'garcia', 'root', 'lbgarcia@banadesa,hn', 'garcia20', '0', '0'),
(11, 'beatriz', 'garcia', 'root', 'lbgarcia@banadesa,hn', 'garcia20', '0', '0'),
(12, 'leonel', 'garcia', 'lbonilla', 'lbonilla@banadesa.hn', 'loenlel', '0', '0'),
(13, 'jose angel', 'salina', 'jsalina', 'jsalina@bandesa.hn', 'jsalina', '1', '1'),
(14, 'edwin', 'fonceca', 'efonceca', 'efonseca@banadesa.hn', 'efonseca', 'usuario', 'operaciones'),
(15, 'leonel', 'garcia', 'lgarcia', 'kbonilla@gmail.com', 'loenlel', 'administrad', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

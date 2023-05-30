-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-05-2023 a las 15:36:06
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `el_remanso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro_de_compras`
--

DROP TABLE IF EXISTS `carro_de_compras`;
CREATE TABLE IF NOT EXISTS `carro_de_compras` (
  `RE_id_boleta` int(8) NOT NULL AUTO_INCREMENT,
  `RE_id_usuario` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `RE_id_producto` int(8) NOT NULL,
  `RE_cantidad_producto` int(8) NOT NULL,
  `RE_valor_producto` int(7) NOT NULL,
  PRIMARY KEY (`RE_id_boleta`)
) ENGINE=MyISAM AUTO_INCREMENT=173 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `carro_de_compras`
--

INSERT INTO `carro_de_compras` (`RE_id_boleta`, `RE_id_usuario`, `RE_id_producto`, `RE_cantidad_producto`, `RE_valor_producto`) VALUES
(1, '1', 2, 7, 2200),
(6, '5', 2, 3, 1900),
(158, '', 3, 27, 2200),
(136, '127001', 4, 6, 2200),
(171, '::1', 3, 7, 2200),
(115, '', 2, 14, 1900),
(159, '', 5, 8, 2200),
(160, '', 4, 5, 2200),
(161, '3', 3, 3, 2200),
(162, '', 8, 189, 2200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho`
--

DROP TABLE IF EXISTS `despacho`;
CREATE TABLE IF NOT EXISTS `despacho` (
  `RE_id_despacho` int(5) NOT NULL AUTO_INCREMENT,
  `RE_calle` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `RE_numeracion` int(11) NOT NULL,
  `RE_departamento` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `RE_comuna` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `RE_region` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `RE_numero_contacto` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `RE_receptor` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `RE_id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`RE_id_despacho`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `despacho`
--

INSERT INTO `despacho` (`RE_id_despacho`, `RE_calle`, `RE_numeracion`, `RE_departamento`, `RE_comuna`, `RE_region`, `RE_numero_contacto`, `RE_receptor`, `RE_id_usuario`) VALUES
(30, 'porvenir ', 1900, 'no', 'puente alto', 'santiago', '+56951026651', 'cristian Quijada', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `RE_id_productos` int(11) NOT NULL AUTO_INCREMENT,
  `RE_nombre_producto` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `RE_descripcion_producto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `RE_valor_producto` int(6) NOT NULL,
  PRIMARY KEY (`RE_id_productos`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`RE_id_productos`, `RE_nombre_producto`, `RE_descripcion_producto`, `RE_valor_producto`) VALUES
(1, 'Pino', 'Carne picada, cebolla, huevo y aceituna.', 1900),
(2, 'Pino Ají', 'Carne picada, cebolla, huevo, aceituna y salsa de ají', 1900),
(3, 'Queso', '90gr de queso mantecoso', 2200),
(4, 'Napolitana', 'Queso mantecoso, jamón artesanal, tomate natural y orégano fresco', 2200),
(5, 'Queso Carne', 'Queso Mantecoso y carne picada', 2200),
(6, 'Queso Pollo', 'Queso Mantecoso, nuez mocada y crema de leche', 2200),
(7, 'Queso Camarón', 'Queso Mantecoso, ciboulette, camarones y crema de leche', 2500),
(8, 'Queso Aceituna', 'Queso Mantecoso, aceitunas negras, orégano y aceite de oliva.', 2200),
(9, 'Queso Champiñon', 'Queso Mantecoso, Champiñones naturales salteados en matequilla', 2200),
(10, 'Salame', 'Queso Mantecoso, Salame y tomate', 2200),
(11, 'Acelga', 'Acelga, cebolla y huevo.', 2200),
(12, 'Mariscos', 'Mariscos surtidos, cebolla y un trozo de huevo.', 2200),
(13, 'Especial', 'Carne picada, pechuga de pollo picada, cebolla, aceituna y huevo', 4400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `RE_id_usuario` int(7) NOT NULL AUTO_INCREMENT,
  `RE_nombres_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `RE_apellido_materno_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `RE_apellido_paterno_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `RE_fechaNacimiento_usuario` date NOT NULL,
  `RE_email_usuario` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `RE_password_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`RE_id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`RE_id_usuario`, `RE_nombres_usuario`, `RE_apellido_materno_usuario`, `RE_apellido_paterno_usuario`, `RE_fechaNacimiento_usuario`, `RE_email_usuario`, `RE_password_usuario`) VALUES
(3, 'cristian', 'quijada', 'perez', '2022-04-15', 'cristian.quijada.dpm@gmail.com', '123'),
(4, 'juan', 'lorca', 'valenzuela', '2012-04-25', 'juan.carlos.quepasa@gmail.com', 'caqp2991'),
(5, 'cristian', 'Perez', 'quijada', '1996-09-29', 'cristian.quijada.perez@gmail.com', '123'),
(6, 'cristian', 'saturno', 'quijada', '1993-05-28', 'sanjuandedios@gmail.com', '123'),
(7, 'cristian', 'palacios', 'quijada', '1983-09-13', 'demerolagotado@gmail.com', '123'),
(8, 'cristian', 'vargas', 'lorencini', '1970-09-15', 'rayodeluz@gmail.com', '123'),
(9, 'cristian', 'luis', 'quijada', '1998-09-29', 'asambleadelterror@gmail.com', '123'),
(10, 'qwerqwerqwerq', 'qwerqer', 'qewrqer', '2022-04-14', 'juanjuan@gmail.com', '123'),
(11, 'cristian', 'qwerqewrqwer', 'quijadaqwe', '2022-04-01', 'dpm@gmail.com', '123'),
(12, 'cristian', 'yyyy', 'quijada', '2022-04-08', 'quijada@gmail.com', '123'),
(13, 'juan', 'salfate', 'andres', '2022-04-03', 'salfate@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-09-2015 a las 11:44:24
-- Versión del servidor: 5.5.44-0+deb8u1
-- Versión de PHP: 5.6.12-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `almacen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto`
--

CREATE TABLE IF NOT EXISTS `concepto` (
`id_concepto` int(11) NOT NULL,
  `id_uuid` varchar(36) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cantidad` int(3) NOT NULL,
  `unidad` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `val_unit` double NOT NULL,
  `id_productos` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci COMMENT='Conceptos del xml';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id_uuid` varchar(36) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rfc_nom` varchar(70) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` varchar(19) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `subtotal` double NOT NULL,
  `moneda` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `total` double NOT NULL,
  `id_rfc` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci COMMENT='Datos de la factura.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`id_productos` int(5) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `noserie` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci COMMENT='Productos propios de Enlaza.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_rfc` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rfc_nom` varchar(70) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calle` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `no_ext` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `no_int` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `colonia` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `referen` varchar(40) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `mun` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pais` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cp` int(5) NOT NULL,
  `id_uuid` varchar(36) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci COMMENT='Proveedor de Partes';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `concepto`
--
ALTER TABLE `concepto`
 ADD PRIMARY KEY (`id_concepto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
 ADD PRIMARY KEY (`id_uuid`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id_productos`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`id_rfc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `concepto`
--
ALTER TABLE `concepto`
MODIFY `id_concepto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `id_productos` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=237;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

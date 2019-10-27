-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2017 a las 17:48:15
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebacrud`
--
CREATE DATABASE IF NOT EXISTS `pruebacrud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pruebacrud`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `apellido` varchar(500) DEFAULT NULL,
  `identificacion` varchar(50) NOT NULL,
  `tipo_persona` varchar(50) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `celular` int(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `identificacion`, `tipo_persona`, `direccion`, `telefono`, `celular`, `email`, `email2`, `created_at`) VALUES
(1, 'David', 'Orozco', '1019092593', 'Natural', 'carrera 100 # 148-57 Torre 3 Apto 504', '5322117', 322553313, 'davidorozcoarcila@gmail.com', 'dorozcoa@gmail.com', '2016-12-09 20:36:55'),
(2, 'Carlos', 'vivas', '10144300212', 'Natural', 'calle falsa 123', '4030568', 315432113, '123456@gmail.com', 'asdfghj2@gmail.com', '2016-12-09 21:06:57'),
(3, 'Ivan', 'Mateus', '1018300212', 'JurÃ¬dica', 'prueba', '12345678', 1234567890, 'prueba1@gmail.com', 'prueba2@mail.com', '2016-12-10 00:04:30'),
(4, 'Laura ', 'Mateus', '102314567', 'Natural', 'calle falsa 123', '2345678', 2147483647, 'pruebalunes@hotmail.com', '', '2016-12-10 01:12:26'),
(5, 'Reyes de la Parranda Vallenata', 'S.A', '890703019-6', 'JurÃ¬dica', 'calle 57B No 62-06', '3123350789', 2147483647, 'sthefaniecarvajal17@gmail.com', '', '2016-12-10 01:29:02'),
(6, 'Ceramicas JuanJo', 'prueba15', '234567890', 'Natural', ' sthefaniecarvajal17@gmail.com', '3138442233 ', 12345678, 'sthefaniecarvajal17@gmail.com', '', '2016-12-10 02:21:30'),
(7, 'CARVAJAL', 'SIN ANIMO DE LUCRO', '900232423432', 'JurÃ¬dica', 'CALLE 132 D # 129 29', '6544532', 2147483647, 'CARVAJAL1023@GMAIL.COM', 'CARVAJAL2@GMAIL.COM', '2016-12-14 18:38:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'David Orozco Arcila', 'dorozcoa', 'davidorozcoarcila@gmail.com', 'sysadm', '2016-12-13 01:09:57'),
(2, 'ivan esteban mateus soche ', 'ivan.mateus', 'ivanmateus1015@gmail.com', '1015447561ivan', '2016-12-13 19:55:44'),
(3, 'Carlos GuzmÃ n', 'cguzman', 'cguzman@gmail.com', 'sysadm', '2016-12-15 12:03:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

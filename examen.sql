-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2019 a las 03:01:36
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidocliente`
--

CREATE TABLE `pedidocliente` (
  `id` int(11) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `producto` varchar(200) NOT NULL,
  `cantidad` varchar(200) NOT NULL,
  `ipProducto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `rol`, `usuario`, `pass`) VALUES
(1, 'Kelly', '', 'kellogs', '202cb962ac59075b964b07152d234b70'),
(3, 'Kelly', '', 'klowsss', '202cb962ac59075b964b07152d234b70'),
(4, 'kelly', 'administrador', 'alison', '140f6969d5213fd0ece03148e62e461e'),
(5, 'karla', 'Cliente', 'karlita', '250cf8b51c773f3f8dc8b4be867a9a02'),
(6, 'keelly', 'administrador', 'kkkeeelllyyy', '8d5e957f297893487bd98fa830fa6413');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroproductos`
--

CREATE TABLE `registroproductos` (
  `id` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `precio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registroproductos`
--

INSERT INTO `registroproductos` (`id`, `producto`, `precio`) VALUES
(1, 'Arroz', '60'),
(2, 'Arroz', '60'),
(3, 'Papas', '30'),
(4, 'Mani', '80'),
(5, 'Mani', '80'),
(6, 'Azucar', '80');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidocliente`
--
ALTER TABLE `pedidocliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `registroproductos`
--
ALTER TABLE `registroproductos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidocliente`
--
ALTER TABLE `pedidocliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registroproductos`
--
ALTER TABLE `registroproductos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

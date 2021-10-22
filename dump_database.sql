-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2021 a las 04:32:00
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almuerzos`
--

CREATE TABLE `almuerzos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_vida`
--

CREATE TABLE `centro_vida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `centro_vida`
--

INSERT INTO `centro_vida` (`id`, `nombre`) VALUES
(1, 'centro de vida 2'),
(2, 'Centro vida angelitos 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(65) NOT NULL,
  `genero` varchar(4) NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_fallecimiento` varchar(50) NOT NULL,
  `username` varchar(85) NOT NULL,
  `password` varchar(35) NOT NULL,
  `rol` int(11) NOT NULL,
  `centro_vida` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `nombre`, `apellido`, `genero`, `edad`, `fecha_fallecimiento`, `username`, `password`, `rol`, `centro_vida`, `status`) VALUES
('1', 'mario', 'montero', 'M', 23, '15/06/2020', 'mdmontero', 'mdmontero', 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_almuerzos`
--

CREATE TABLE `usuarios_almuerzos` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(45) NOT NULL,
  `id_almuerzo` int(11) NOT NULL,
  `fecha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almuerzos`
--
ALTER TABLE `almuerzos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `centro_vida`
--
ALTER TABLE `centro_vida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `centro_vida` (`centro_vida`);

--
-- Indices de la tabla `usuarios_almuerzos`
--
ALTER TABLE `usuarios_almuerzos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_almuerzo` (`id_almuerzo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almuerzos`
--
ALTER TABLE `almuerzos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `centro_vida`
--
ALTER TABLE `centro_vida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios_almuerzos`
--
ALTER TABLE `usuarios_almuerzos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`centro_vida`) REFERENCES `centro_vida` (`id`);

--
-- Filtros para la tabla `usuarios_almuerzos`
--
ALTER TABLE `usuarios_almuerzos`
  ADD CONSTRAINT `usuarios_almuerzos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`cedula`),
  ADD CONSTRAINT `usuarios_almuerzos_ibfk_2` FOREIGN KEY (`id_almuerzo`) REFERENCES `almuerzos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

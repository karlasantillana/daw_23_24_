-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2020 a las 17:44:26
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `protectora_animales`
--
CREATE DATABASE IF NOT EXISTS `protectora_animales` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `protectora_animales`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

DROP TABLE IF EXISTS `adopcion`;
CREATE TABLE `adopcion` (
  `id` int(11) NOT NULL,
  `idAnimal` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `razon` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `adopcion`
--

INSERT INTO `adopcion` (`id`, `idAnimal`, `idUsuario`, `fecha`, `razon`) VALUES
(3, 3, 3, '2020-03-01', 'Regalo para su madre'),
(4, 1, 1, '2020-03-20', 'Regalo para sus hijos'),
(6, 6, 4, '2020-03-18', 'regalo a su hijita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `especie` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `raza` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id`, `nombre`, `especie`, `raza`, `genero`, `color`, `edad`) VALUES
(1, 'Ozzy', 'perro', 'pastor alemán', 'Macho', 'Dorado', 12),
(2, 'Pepita', 'gato', 'Siamés', 'Hembra', 'Marrón', 2),
(3, 'Lucas', 'gato', 'Persa', 'Macho', 'Blanco', 1),
(6, 'Coby', 'Perro', 'Husky', 'Hembra', 'negro', 0),
(9, 'Lupi', 'gato', 'mezcla', 'Macho', 'gris', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `sexo`, `direccion`, `telefono`) VALUES
(1, 'Juan', 'Pérez', 'Masculino', 'Calle del Prado, nº 3, 28006 Madrid', '+34 698782187'),
(2, 'Letizia', 'Ortiz', 'Femenino', 'Calle del Castillo, nº 2, 28045 Madrid', '+34 222222222'),
(3, 'Felipe', 'Sexto', 'Masculino', 'Calle del Pardo, nº 28, 28050 Madrid', '+34 999777666'),
(4, 'Ismael', 'García', 'Masculino', 'Calle del Río Júcar, nº 60, 28033 Madrid', '+34 666333888'),
(5, 'Maura', 'López', 'Femenino', 'Calle del programador, nº 1, 28700 Madrid', '+34 111222333'),
(6, 'Clara', 'Rivera', 'Femenino', 'Calle del Oso, nº 120, 28369 Madrid', '+34 999887714');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAnimal` (`idAnimal`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD CONSTRAINT `adopcion_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `adopcion_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

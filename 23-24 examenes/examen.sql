-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2021 a las 11:41:44
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

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
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codProd` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `PVP` float NOT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codProd`, `Nombre`, `PVP`, `Descripcion`) VALUES
(1, 'SONY BRAVIA', 89.99, 'TV DE PLASMA'),
(2, 'LG OPTIMUS L9', 129.99, 'SMARTPHONE ANDROID'),
(3, 'TV LED 75 - Samsung', 749.99, 'SMART TV'),
(4, 'Portatil - Lenovo IdeaPad', 579.99, 'PORTATILES'),
(5, 'Altavoces Woxter', 59.99, '5.1 HIFI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Domicilio` varchar(200) NOT NULL,
  `NumTelefono` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `usuario` (`Nombre`, `Apellidos`, `Domicilio`, `NumTelefono`, `Email`, `Password`) VALUES
('Antonio', 'Santos', 'Avenida de la Paz', 652314589, 'blas@dominio.com', 1234);

-- --------------------------------------------------------


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codProd`),
  ADD UNIQUE KEY `codProd` (`codProd`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

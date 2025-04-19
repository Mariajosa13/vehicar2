-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2023 a las 23:35:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vehicar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `nombre` varchar(150) NOT NULL,
  `edad` varchar(3) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL,
  `tipo_id` varchar(4) NOT NULL,
  `numero_doc` int(15) NOT NULL,
  `tipo_licencia` varchar(100) NOT NULL,
  `numero_licencia` int(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `contrasena` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`nombre`, `edad`, `nacionalidad`, `tipo_id`, `numero_doc`, `tipo_licencia`, `numero_licencia`, `direccion`, `correo`, `telefono`, `contrasena`) VALUES
('Majo', '89', 'Italiana', 'cc', 3567, 'a2', 5678, 'cl89978', 'majo@gmail.com', '45678', '2ed12b55de42c9674a29528fab01abaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `marca` varchar(40) NOT NULL,
  `cilindraje` varchar(15) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `color` varchar(30) NOT NULL,
  `numero_chasis` int(15) NOT NULL,
  `Fk_num_doc` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`marca`, `cilindraje`, `placa`, `color`, `numero_chasis`, `Fk_num_doc`) VALUES
('ferrari', '45678', 'bg25', 'blanco', 567, 3567);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`numero_doc`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`numero_chasis`),
  ADD KEY `relacion_uno` (`Fk_num_doc`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `relacion_uno` FOREIGN KEY (`Fk_num_doc`) REFERENCES `user` (`numero_doc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

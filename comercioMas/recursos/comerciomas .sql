-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 16:14:49
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comerciomas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL,
  `roles` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `roles`) VALUES
(1, 'administrador'),
(2, 'usuario'),
(3, 'comerciante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comerciantes`
--

CREATE TABLE `comerciantes` (
  `id_com` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `drfotos` varchar(200) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `telefono` int(12) NOT NULL,
  `nom_us` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `contra` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comerciantes`
--

INSERT INTO `comerciantes` (`id_com`, `id_tienda`, `nombres`, `apellidos`, `drfotos`, `genero`, `correo`, `telefono`, `nom_us`, `descripcion`, `contra`) VALUES
(3, 1, 'pedro', 'rodriuge', '654654', 'wer', 'sdf', 987, 'rodrigues', '46546', 'sdfg'),
(4, 6, 'manuela', 'rodriuge', 'ASDASD', 'asdasdASD', 'SDF', 987, 'asd', 'ASD', 'asd'),
(5, 15, 'pedro', 'rodriuge', 'uyuytuu', '56456', 'werwr', 16, 'wer', 'tyuty', 'tyut'),
(6, 14, 'MANUELA', 'Mesa ', 'fghfghsdfg', 'm987987', 'sadad', 32, 'sdfsdf', 'ghdfhdf', 'dfghdfgh');

--
-- Disparadores `comerciantes`
--
DELIMITER $$
CREATE TRIGGER `regCom` AFTER INSERT ON `comerciantes` FOR EACH ROW INSERT INTO usuarios (id,nombres,apellidos,usuario,email,contra,id_cargo) VALUES (NEW.id_com,NEW.nombres,NEW.apellidos,NEW.nom_us,NEW.correo,NEW.contra,3)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercios`
--

CREATE TABLE `comercios` (
  `id_tienda` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comercios`
--

INSERT INTO `comercios` (`id_tienda`, `tipo`) VALUES
(1, 'Carniceria'),
(2, 'Panaderia'),
(3, 'Salsamentaria'),
(4, 'Supermercado'),
(5, 'Optica'),
(6, 'Gimnasio'),
(7, 'Papeleria'),
(8, 'Botanica'),
(9, 'Almacen'),
(10, 'Multi Tienda'),
(11, 'Zapateria'),
(12, 'Comida Rapida'),
(13, 'Restaurante'),
(14, 'Pescaderia'),
(15, 'Joyeria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldo_us`
--

CREATE TABLE `respaldo_us` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contra` varchar(12) DEFAULT NULL,
  `cargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contra` varchar(12) NOT NULL,
  `FechaReg` datetime NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `usuario`, `email`, `contra`, `FechaReg`, `id_cargo`) VALUES
(1, 'melo', 'puella', 'wer', 'juanmira01@gmail.com', '321654987', '2021-11-08 14:39:00', 2),
(2, 'julian', 'manuel', 'romero', 'juanmira01@hotmail.com', '123456', '2021-11-08 15:10:02', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `comerciantes_ibfk_1` (`id_tienda`);

--
-- Indices de la tabla `comercios`
--
ALTER TABLE `comercios`
  ADD PRIMARY KEY (`id_tienda`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comerciantes`
--
ALTER TABLE `comerciantes`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comercios`
--
ALTER TABLE `comercios`
  MODIFY `id_tienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD CONSTRAINT `comerciantes_ibfk_1` FOREIGN KEY (`id_tienda`) REFERENCES `comercios` (`id_tienda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

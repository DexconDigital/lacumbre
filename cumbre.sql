-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2021 a las 18:07:22
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cumbre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo` text NOT NULL,
  `imagen` varchar(2000) NOT NULL,
  `archivo` varchar(2000) NOT NULL,
  `fecha` date NOT NULL,
  `id_inmobiliaria2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `general`
--

INSERT INTO `general` (`id`, `nombre`, `tipo`, `imagen`, `archivo`, `fecha`, `id_inmobiliaria2`) VALUES
(1, 'youtube 1 ', 'youtube', 'fotos/youtube1.jpg', 'https://www.youtube.com/watch?v=uMphEiabsL4&t=1s', '2021-06-11', 10),
(2, 'youtube 2', 'youtube', 'fotos/youtube2.jpg', 'https://www.youtube.com/watch?v=QTU7wEZsPVg&t=6s', '2021-06-11', 10),
(3, 'youtube 3', 'youtube', 'fotos/youtube3.jpg', 'https://www.youtube.com/watch?v=3nbOehqu6IE', '2021-06-11', 10),
(4, ' Casa en Parcelación - Las Palmas', 'panorama', 'fotos/360.png', 'https://my.matterport.com/show/?m=AVDGUoTHqds', '2021-06-11', 10),
(5, 'Casa Independiente Llano Grande', 'panorama', 'fotos/360.png', 'https://my.matterport.com/show/?m=rcDitSjMW4V', '2021-06-11', 10),
(6, 'Parcelación en Llano Grande - Tablazo', 'panorama', 'fotos/360.png', 'https://my.matterport.com/show/?m=cxRaNe5w8GF', '2021-06-11', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmobiliaria`
--

CREATE TABLE `inmobiliaria` (
  `id_inmobiliaria` int(11) NOT NULL,
  `nombre_inmobiliaria` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inmobiliaria`
--

INSERT INTO `inmobiliaria` (`id_inmobiliaria`, `nombre_inmobiliaria`) VALUES
(10, 'cumbre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `archivo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `noticia` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `id_inmobiliaria2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dependencia` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_inmobiliaria1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `usuario`, `password`, `nombre`, `telefono`, `cargo`, `dependencia`, `imagen`, `id_inmobiliaria1`) VALUES
(9, 'lacumbre', 'lacumbrepwd', NULL, NULL, NULL, NULL, NULL, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_inmobiliaria2` (`id_inmobiliaria2`);

--
-- Indices de la tabla `inmobiliaria`
--
ALTER TABLE `inmobiliaria`
  ADD PRIMARY KEY (`id_inmobiliaria`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_id_inmobiliaria2` (`id_inmobiliaria2`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_id_inmobiliaria` (`id_inmobiliaria1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `inmobiliaria`
--
ALTER TABLE `inmobiliaria`
  MODIFY `id_inmobiliaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_id_inmobiliaria2` FOREIGN KEY (`id_inmobiliaria2`) REFERENCES `inmobiliaria` (`id_inmobiliaria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_inmobiliaria1`) REFERENCES `inmobiliaria` (`id_inmobiliaria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

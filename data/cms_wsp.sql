-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2024 a las 00:09:18
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms_wsp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_wsp`
--

CREATE TABLE `categorias_wsp` (
  `id_cate` int(11) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias_wsp`
--

INSERT INTO `categorias_wsp` (`id_cate`, `nombre_categoria`) VALUES
(1, 'anime');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos_wsp`
--

CREATE TABLE `grupos_wsp` (
  `grupo_id` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `id_catego` int(11) NOT NULL,
  `nombre_grupo` varchar(50) NOT NULL,
  `enlace_grupo` varchar(100) NOT NULL,
  `descripcion_grupo` text NOT NULL,
  `pclave_grupo` varchar(40) NOT NULL,
  `img_grupo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos_wsp`
--

INSERT INTO `grupos_wsp` (`grupo_id`, `id_usu`, `id_catego`, `nombre_grupo`, `enlace_grupo`, `descripcion_grupo`, `pclave_grupo`, `img_grupo`) VALUES
(1, 1, 1, 'Anime', '', 'grupo de anime', 'anime', 'anime.png'),
(2, 1, 1, 'memes', '', 'grupo de anime', 'anime', 'memes.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_wsp`
--

CREATE TABLE `usuarios_wsp` (
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_wsp`
--
ALTER TABLE `categorias_wsp`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indices de la tabla `grupos_wsp`
--
ALTER TABLE `grupos_wsp`
  ADD PRIMARY KEY (`grupo_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuarios_wsp`
--
ALTER TABLE `usuarios_wsp`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias_wsp`
--
ALTER TABLE `categorias_wsp`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grupos_wsp`
--
ALTER TABLE `grupos_wsp`
  MODIFY `grupo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios_wsp`
--
ALTER TABLE `usuarios_wsp`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

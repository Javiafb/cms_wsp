-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2025 a las 03:33:00
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
(1, 'entretenimiento'),
(2, 'literatura'),
(3, 'tecnologia'),
(4, 'deporte'),
(5, 'ciencia'),
(6, 'viajes'),
(7, 'Arte y Cultura'),
(8, 'Salud y Bienestar'),
(9, 'Educación'),
(10, 'Negocios'),
(11, 'musica');

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
(1, 2, 2, 'libros', 'https://chat.whatsapp.com/F4uwdYFxB2LGq9FuwgHY8W', 'Este grupo está dedicado a los amantes de la literatura. Nos reunimos para discutir libros, compartir recomendaciones, y explorar diferentes géneros literarios. Ya sea que te guste la ficción, la poesía, la no ficción o cualquier otro tipo de literatura, encontrarás un espacio para compartir tus pensamientos y descubrir nuevas lecturas. Únete a nosotros para participar en debates enriquecedores y expandir tus horizontes literarios.', 'libros', '20250220024331.jpg'),
(2, 2, 11, 'musica', 'https://chat.whatsapp.com/F4uwdYFxB2LGq9FuwgHY8W', 'Este grupo está dedicado a los entusiastas de la música de todos los géneros. Nos reunimos para compartir nuestras canciones favoritas, discutir sobre artistas y bandas, y explorar nuevas tendencias musicales. Ya sea que te guste el rock, el pop, el jazz, la música clásica o cualquier otro estilo, encontrarás un espacio para compartir tus gustos y descubrir nuevas melodías. Únete a nosotros para disfrutar de debates apasionantes y ampliar tus horizontes musicales.', 'musica', '20250220024554.jpg'),
(3, 2, 3, 'tecnologia', 'https://chat.whatsapp.com/F4uwdYFxB2LGq9FuwgHY8W', 'Este grupo está dedicado a los entusiastas de la tecnología. Nos reunimos para discutir las últimas tendencias, compartir conocimientos sobre programación, hardware, software y explorar nuevas innovaciones tecnológicas. Únete a nosotros para aprender y compartir tu pasión por la tecnología.', 'tecnologia', '20250220024720.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `nombre`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_wsp`
--

CREATE TABLE `usuarios_wsp` (
  `id_usu` int(11) NOT NULL,
  `rol_usu` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_wsp`
--

INSERT INTO `usuarios_wsp` (`id_usu`, `rol_usu`, `nombre`, `correo`, `clave`) VALUES
(1, 1, 'admin', 'admin@gmail.com', '$2y$10$3XuZb5uEs9tBrg66ZpaBi.Jaqh/0ZXub85Pfu50uus9wracsjdZDG'),
(2, 2, 'usuario', 'usuario@gmail.com', '$2y$10$hJ8yAAgbA8NiTBqdf67wV./kaZXIIQ2qbIB3Na.28WWCK/QlX3qym');

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
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `grupos_wsp`
--
ALTER TABLE `grupos_wsp`
  MODIFY `grupo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios_wsp`
--
ALTER TABLE `usuarios_wsp`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

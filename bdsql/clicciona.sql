-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2022 a las 22:32:00
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clicciona`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id_message` int(11) NOT NULL,
  `incoming_message` int(255) NOT NULL,
  `outgoing_message` int(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `primer_nombre` varchar(30) NOT NULL,
  `segundo_nombre` varchar(30) NOT NULL,
  `tercer_nombre` varchar(30) NOT NULL,
  `apellido_p` varchar(30) NOT NULL,
  `apellido_m` varchar(30) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tipo_usuario` int(1) NOT NULL,
  `plan_contratado` int(1) NOT NULL,
  `validacion_correo` int(1) NOT NULL,
  `reset_password` int(6) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `primer_nombre`, `segundo_nombre`, `tercer_nombre`, `apellido_p`, `apellido_m`, `correo`, `password`, `tipo_usuario`, `plan_contratado`, `validacion_correo`, `reset_password`, `status`, `img`) VALUES
(1, 'karen', 'Yazmin', 'Andrade', 'Ramirez', 'Espinosa', 'doherty15yaz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 0, 0, 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2023 a las 04:20:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notas2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(11) NOT NULL,
  `Nombredoc` varchar(60) NOT NULL,
  `Apellidodoc` varchar(60) NOT NULL,
  `Documentodoc` varchar(12) NOT NULL,
  `Correodoc` varchar(60) NOT NULL,
  `Materiadoc` varchar(40) NOT NULL,
  `Usuariodoc` varchar(60) NOT NULL,
  `Passworddoc` varchar(60) NOT NULL,
  `Perfil` varchar(30) NOT NULL,
  `Estadodoc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `Nombredoc`, `Apellidodoc`, `Documentodoc`, `Correodoc`, `Materiadoc`, `Usuariodoc`, `Passworddoc`, `Perfil`, `Estadodoc`) VALUES
(2, 'juan', 'padua', '31231', 'ajdasjd@gmail.com', 'ingles', 'adasdas', '5a37862cd81841f96dca3cf05ca9dcce', 'administrador', '0'),
(4, 'dasdad', 'juliana', '32423423', 'jsadj@gmail.com', 'fisica', 'dajdajs2023', 'ac6555bfe23f5fe7e98fdcc0cd5f2451', 'docente', 'activo'),
(5, 'herhn', 'asdasd', '4131321', 'ajdasjd@gmail.com', 'cultura general', '342492', '2a1e27850d6223c91ac3810851e7038f', 'administrador', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `Nombreestu` varchar(60) NOT NULL,
  `Apellidoestu` varchar(60) NOT NULL,
  `Docuestu` varchar(12) NOT NULL,
  `Correoest` varchar(60) NOT NULL,
  `Materiaestu` varchar(30) NOT NULL,
  `Docente` varchar(60) NOT NULL,
  `Promedioestu` int(11) NOT NULL,
  `Fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `Nombremate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `Nombremate`) VALUES
(1, 'fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_estudiante_materia`
--

CREATE TABLE `notas_estudiante_materia` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `Puntaje` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Nombreusu` varchar(60) NOT NULL,
  `Apellidousu` varchar(60) NOT NULL,
  `Usuario` varchar(40) NOT NULL,
  `Passwordusu` varchar(80) NOT NULL,
  `Perfil` varchar(30) NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Nombreusu`, `Apellidousu`, `Usuario`, `Passwordusu`, `Perfil`, `Estado`) VALUES
(1, 'ew', 'das', 'das', '6e9abeea535938c496a261b3b39c0d79', 'docentes', 'activo'),
(10, 'dsasda', 'jsiada', 'cifuentes2023', '458484848', 'Elegir opcion', 'Elegir opcion'),
(16, 'Leidy', 'Cifuentes', 'cifuentes090383', 'd3817710dd621665bf61ff15ec62c45a', 'docentes', 'activo'),
(18, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'Elegir opcion', 'Elegir opcion'),
(19, 'Felipe', 'martinez', 'lupe2023', '959ae557a9f0f58cf8037f3c3ce6eb02', 'administrador', 'activo'),
(20, 'Leidy Johanna', 'Cifuentes', 'cifuentes0903', '950a4152c2b4aa3ad78bdd6b366cc179', 'docentes', 'activo'),
(21, 'hernan', 'sdada', 'asfasfad', '377f39930a95b8b9ad0fc578171ea500', 'administrador', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `notas_estudiante_materia`
--
ALTER TABLE `notas_estudiante_materia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `Usuario` (`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `notas_estudiante_materia`
--
ALTER TABLE `notas_estudiante_materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notas_estudiante_materia`
--
ALTER TABLE `notas_estudiante_materia`
  ADD CONSTRAINT `notas_estudiante_materia_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_estudiante_materia_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_estudiante_materia_ibfk_3` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

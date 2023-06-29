-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2023 a las 04:20:11
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
-- Base de datos: `estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Apellido` varchar(60) NOT NULL,
  `Documento` varchar(12) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Materia` varchar(30) NOT NULL,
  `Docente` varchar(60) NOT NULL,
  `Promedio` int(11) NOT NULL,
  `FECHA_REGISTRO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`ID_ESTUDIANTE`, `Nombre`, `Apellido`, `Documento`, `Correo`, `Materia`, `Docente`, `Promedio`, `FECHA_REGISTRO`) VALUES
(2, 'ss', 'ss', '33', 'jose@gmail.com', 'matematicas', 'humberto', 33, '0000-00-00'),
(3, 'Hernan', 'Acosta', '545', 'hernan@gmail.com', 'matematicas', 'nixon', 45, '0000-00-00'),
(4, 'Hernan', 'Acosta', '545', 'hernan@gmail.com', 'matematicas', 'nixon', 45, '0000-00-00'),
(5, 'Hernan', 'Acosta', '545', 'hernan@gmail.com', 'matematicas', 'nixon', 45, '0000-00-00'),
(9, 'nixon', 'aa', '8', 'jj@gmail', 'aa', 'aa', 55, '0000-00-00'),
(10, 'dd', 'dd', '22', 'dd@', 'dd', 'dd', 5, '0000-00-00'),
(18, 'Hernan', 'p', '7', 'hernan@gmail.com', 'matematicas', 'humberto', 2, '2025-12-31'),
(19, '', '', '', '', '', '', 0, '0000-00-00'),
(20, '', '', '', '', '', '', 0, '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`ID_ESTUDIANTE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `ID_ESTUDIANTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

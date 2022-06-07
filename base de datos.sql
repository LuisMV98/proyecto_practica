-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2022 a las 09:49:33
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `edad` int(3) NOT NULL,
  `nacimiento` varchar(11) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `contraseña` varchar(40) NOT NULL,
  `tipo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `edad`, `nacimiento`, `correo`, `contraseña`, `tipo`) VALUES
(9, 'Francisco Guzmán Torres', 20, '06/04/2002', 'francis_02@live.com.mx', 'ContraFrancis', 'admin'),
(20, 'Luis Angel Moreno Vega', 23, '05/11/1998', 'luismoreno.lmv4@gmail.com', 'ContraLuis', 'admin'),
(27, 'Admin Prueba 1', 1, '11/11/1111', 'admin1@prueba.com', 'AdminUno', 'admin'),
(30, 'Admin Prueba 2', 2, '22/22/2222', 'admin2@prueba.com', 'AdminDos', 'admin'),
(31, 'Admin Prueba 3', 3, '33/33/3333', 'admin3@prueba.com', 'AdminTres', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `edad` int(3) NOT NULL,
  `nacimiento` varchar(11) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `contraseña` varchar(40) NOT NULL,
  `tipo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `edad`, `nacimiento`, `correo`, `contraseña`, `tipo`) VALUES
(2, 'Ines  Rojas Huerta', 23, '24/04/1998', 'ines@correo.com', '1234', 'usuario'),
(4, 'Julian Perez Hernandez', 24, '17/12/1997', 'julian@correo.com.mx', 'JuliConra', 'usuario'),
(5, 'Ana Moreno', 27, '20/03/1995', 'jazz.moreno@gmail.com', 'ContraAna', 'usuario'),
(6, 'Mario Gonzales Diaz', 22, '01/06/2000', 'mario@gmail.com', 'ContraMario', 'usuario'),
(7, 'Victoria Benitez Romero', 22, '07/09/1999', 'victoria99@outlook.com.mx', 'ContraViky', 'usuario'),
(13, 'Usuario Prueba', 22, '07/09/1999', 'correo@prueba.com', 'PruebaContra', 'usuario'),
(14, 'Fatima Bautizta Lopez', 28, '19/03/1994', 'faty_bl@gmail.com', 'Contrafaty', 'usuario'),
(15, 'Liliana Dominguez Cuevas', 24, '07/10/1997', 'lili_97@gmail.com', 'ContraLili', 'usuario'),
(19, 'Usuario Prueba 2', 2, '22/22/22', 'usuario2@prueba.com.mx', 'ContraDos', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

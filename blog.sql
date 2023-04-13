-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2021 a las 19:09:17
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(50) NOT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `texto` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `titulo`, `texto`) VALUES
(1, 'Arranca la Bolsa de la Eurocopa: la lucha por entr', 'Quedan 100 días para que ruede el balón en la Eurocopa. Una cifra redonda como para dar el pistoletazo la Bolsa de la lista de España, una encuesta para que el aficionado elija los 23 que se llevaría '),
(3, 'La UE se pone en alerta ante el intento de estafar hasta 14.000 millones', 'El lento despegue de las campañas de vacunación en Europa ha abierto un filón de nervios, impaciencia y desinformación que los traficantes de medicamentos están intentando aprovechar a toda prisa. Los'),
(4, 'La UE se pone en alerta ante el intento de estafar hasta 14.000 millones a los gobiernos', 'El lento despegue de las campañas de vacunación en Europa ha abierto un filón de nervios, impaciencia y desinformación que los traficantes de medicamentos están intentando aprovechar a toda prisa. Los');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

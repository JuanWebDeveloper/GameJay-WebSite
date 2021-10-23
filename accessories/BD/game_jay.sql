-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2021 a las 10:55:26
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `game_jay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gamejay.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text COLLATE utf8_spanish_ci NOT NULL,
  `option_a` text COLLATE utf8_spanish_ci NOT NULL,
  `option_b` text COLLATE utf8_spanish_ci NOT NULL,
  `option_c` text COLLATE utf8_spanish_ci NOT NULL,
  `answer` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `question`, `option_a`, `option_b`, `option_c`, `answer`) VALUES
(1, '¿Cuál es la principal razón que hace que los jóvenes cometan delitos?', 'Falta de educación', 'Falta de dinero', 'Sin orientación de los padres', 'Falta de educación'),
(2, '¿Cual es el primer paso para la clasificación de un delito?', 'Según su perseguibilidad', 'Según modo de culpabilidad', 'Según la forma de la acción que ha causado el delito', 'Según la forma de la acción que ha causado el delito'),
(3, '¿Cuál es un delito contra las personas?', 'Injuria', 'Homicidio ', 'Amenazas', 'Homicidio '),
(4, '¿Cuál es un delito contra la libertad?', 'Detención ilegal', 'Calumnia', 'Encubrimiento', 'Detención ilegal'),
(5, '¿El secuestro es un delito contra?', 'Contra el patrimonio', 'Contra las personas', 'Contra la libertad', 'Contra la libertad'),
(6, '¿Que es un delito de lesa humanidad?', 'Un delito en la cual se tortura a alguien de manera inhumana', 'Un delito en el cual se atenta contra la vida de una persona', 'Un delito donde un grupo atenta contra la vida de un colectivo de manera generalizada o sistemática', 'Un delito donde un grupo atenta contra la vida de un colectivo de manera generalizada o sistemática'),
(7, '¿Cuándo se puede considerar que se ha cometido el delito de secuestro?', 'Cuando se lleva a una persona a una habitación y se le encierra en contra de su voluntad', 'Cuando se engaña a alguien para que lo siga a un lugar', 'Cuando se moviliza a alguien de un punto a otro en contra de su voluntad', 'Cuando se lleva a una persona a una habitación y se le encierra en contra de su voluntad'),
(8, 'La calumnia e injuria puede considerarse un delito que atenta contra:', 'La vida de las personas', 'La  dignidad e imagen de las personas', 'La seguridad nacional', 'La  dignidad e imagen de las personas'),
(9, '¿Qué delito va contra el orden público?', 'Enaltecimiento del terrorismo', 'Acoso laboral', 'Sustracción de menores', 'Enaltecimiento del terrorismo'),
(10, '¿A que edad se considera que comienza la delincuencia juvenil?', 'Entre los 14 y 17 años', 'Entre los 20 y 25 años', 'Entre los 7 y 15 años', 'Entre los 14 y 17 años'),
(12, '¿Cómo se manifiesta la delincuencia juvenil?', 'Personalidad inestable e inmadura', 'Carencia de modelos de conducta e identificación adecuados', 'Baja autoestima', 'Carencia de modelos de conducta e identificación adecuados'),
(13, '¿Qué acción puede ejercer los policías?', 'Detener a las personas sin dar explicaciones, poner multas de tránsito y usar el taser cuando lo deseen', 'Detener a las personas que consideren sospechosas, hacer requisas a las personas (con una orden previamente firmada por un juez)', 'Disparar a quema ropa cuando quieran', 'Detener a las personas que consideren sospechosas, hacer requisas a las personas (con una orden previamente firmada por un juez)'),
(14, '¿Cuál de las siguientes acciones no las puede hacer un oficial de tránsito?', 'Impartir multas a los conductores', 'Arrestar a un peatón', 'Inmovilizar un vehículo', 'Arrestar a un peatón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `terms` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

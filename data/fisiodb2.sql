-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-12-2023 a las 21:42:10
-- Versión del servidor: 8.0.35-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fisiodb2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendas`
--

CREATE TABLE `agendas` (
  `idAgenda` int NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `idCliente` int NOT NULL,
  `telefono` int NOT NULL,
  `idServicio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `agendas`
--

INSERT INTO `agendas` (`idAgenda`, `fecha`, `hora`, `idCliente`, `telefono`, `idServicio`) VALUES
(11, '2024-01-05', '01:00:00', 17, 981223355, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idCiudad` int NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idCiudad`, `nombre`) VALUES
(59, '3 de Mayo'),
(60, 'Abaí'),
(85, 'Areguá'),
(104, 'Arroyito'),
(7, 'Asuncion'),
(105, 'Azotey'),
(106, 'Belén'),
(28, 'Bella Vista Norte'),
(61, 'Buena Vista'),
(8, 'C.D.E'),
(1, 'caaguazu'),
(62, 'Caazapá'),
(41, 'Campo 9'),
(86, 'Capiatá'),
(29, 'Capitán Bado'),
(37, 'Carayaó'),
(5, 'Cnel. Oviedo'),
(70, 'Colonia Anahí'),
(27, 'Colonia Yguazú'),
(107, 'Concepción'),
(71, 'Corpus Christi'),
(72, 'Curuguaty'),
(39, 'Doctor Cecilio Báez'),
(63, 'Doctor Moisés S. Bertoni'),
(4, 'Dr. J. Eulogio Estigarribia'),
(87, 'Fernando de la Mora'),
(33, 'Filadelfia'),
(64, 'Fulgencio Yegros'),
(65, 'General Higinio Morínigo'),
(73, 'Gral. Francisco Caballero Álvarez'),
(88, 'Guarambaré'),
(10, 'Hernandarias'),
(108, 'Horqueta'),
(11, 'Iruña'),
(89, 'Itá'),
(12, 'Itakyry'),
(74, 'Itanará'),
(90, 'Itauguá'),
(91, 'J. Augusto Saldivar'),
(43, 'José Domingo Ocampos'),
(13, 'Juan E. O´Leary'),
(2, 'Juan Manuel Frutos'),
(32, 'Karapaí'),
(75, 'Katueté'),
(76, 'La Paloma'),
(44, 'La Pastora'),
(92, 'Lambaré'),
(93, 'Limpio'),
(34, 'Loma Plata'),
(109, 'Loreto'),
(14, 'Los Cedrales'),
(94, 'Luque'),
(66, 'Maciel'),
(77, 'Maracaná'),
(95, 'Mariano Roque Alonso'),
(15, 'Mbaracayú'),
(53, 'Mbutuy'),
(35, 'Mcal. Estigarribia'),
(45, 'Mcal. Francisco S. López'),
(16, 'Minga Guazú'),
(17, 'Minga Porá'),
(19, 'Ñacunday'),
(18, 'Naranjal'),
(96, 'Ñemby'),
(78, 'Nueva Esperanza'),
(97, 'Nueva Italia'),
(46, 'Nueva Londres'),
(47, 'Nueva Toledo'),
(30, 'Pedro Juan Caballero'),
(20, 'Presidente Franco'),
(50, 'R. I. Tres Corrales'),
(48, 'Raúl Arsenio Oviedo'),
(49, 'Repatriación'),
(79, 'Salto del Guairá'),
(21, 'San Alberto'),
(98, 'San Antonio'),
(110, 'San Carlos del Apa'),
(22, 'San Cristóbal'),
(51, 'San Joaquín'),
(52, 'San José de los Arroyos'),
(67, 'San Juan Nepomuceno'),
(99, 'San Lorenzo'),
(23, 'Santa Fe del Paraná'),
(24, 'Santa Rita'),
(25, 'Santa Rosa del Monday'),
(54, 'Simón Bolívar'),
(68, 'Tavaí'),
(26, 'Tavapy'),
(55, 'Tembiaporá'),
(56, 'Tres de Febrero'),
(3, 'Vaqueria'),
(100, 'Villa Elisa'),
(80, 'Villa Ygatimí'),
(6, 'VillaRica'),
(101, 'Villeta'),
(81, 'Yasy Cañy'),
(84, 'Yby Pytá'),
(82, 'Ybyrarovaná'),
(58, 'Yhú'),
(102, 'Ypacaraí'),
(103, 'Ypané'),
(83, 'Ypejhú'),
(69, 'Yuty'),
(31, 'Zanja Pytá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `edad` int NOT NULL,
  `idCiudad` int NOT NULL,
  `ci` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombre`, `apellido`, `edad`, `idCiudad`, `ci`) VALUES
(4, 'Justo', 'Villalva', 40, 6, 5266301),
(16, 'Patricia', 'González', 30, 4, 2589601),
(17, 'Fabio', 'Garay', 22, 51, 6729801);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE `departments` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departments`
--

INSERT INTO `departments` (`id`, `name`, `capital`) VALUES
(1, 'Central', 'Areguá'),
(2, 'Concepción', 'Concepción'),
(3, 'San Pedro', 'San Pedro de Ycuamandiyú'),
(4, 'Coordillera', 'Caacupé'),
(5, 'Guairá', 'Villarica'),
(6, 'Caaguazú', 'Coronel Oviedo'),
(7, 'Caazapá', 'Caazapá'),
(8, 'Itapúa', 'Encarnación'),
(9, 'Misiones', 'San Juan Bautista'),
(10, 'Paraguarí', 'Paraguarí'),
(11, 'Alto Paraná', 'Ciudad del Este'),
(12, 'Ñeembucú', 'Pilar'),
(13, 'Amambay', 'Pedro Juan Caballero'),
(14, 'Canindeyú', 'Salto del Guairá'),
(15, 'Presidente Hayes', 'Villa Hayes'),
(16, 'Boquerón', 'Filadelfia'),
(17, 'Alto Paraguay', 'Fuerte Olimpo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefacturas`
--

CREATE TABLE `detallefacturas` (
  `numero` int NOT NULL,
  `idServicio` int NOT NULL,
  `cantidad` int NOT NULL,
  `importe` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `numero` int NOT NULL,
  `fecha` date NOT NULL,
  `idUsuario` int NOT NULL,
  `idCliente` int NOT NULL,
  `idFormaPago` int NOT NULL,
  `anulada` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapagos`
--

CREATE TABLE `formapagos` (
  `idFormaPago` int NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `formapagos`
--

INSERT INTO `formapagos` (`idFormaPago`, `descripcion`) VALUES
(1, 'Contado'),
(2, 'Credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nombre`) VALUES
(1, 'adm'),
(3, 'Usuario ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idServicio` int NOT NULL,
  `nombre` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `importe` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicio`, `nombre`, `importe`) VALUES
(1, '1-)  Masaje Terapeutico', 50000),
(2, '2-)  Masaje Estético', 60000),
(3, '3-)  Rehabilitación Ortopedica', 100000),
(4, '4-)  Rehabilitación Neurológica.', 150000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL,
  `alias` varchar(65) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `idRol` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `alias`, `clave`, `idRol`) VALUES
(1, 'gustavo', '$2y$10$3GnVomY/C1Wie00T515At.WdUn17TEibI1iKLgcG2m3GjUMuuWd2q', 3),
(2, 'admin', '$2y$10$9kCowXS8Jb7JF.JppSqZn.b1p1g5tiwg75XuODNmu7slvJr4G2rnK', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`idAgenda`),
  ADD KEY `idCliente` (`idCliente`) USING BTREE,
  ADD KEY `idServicio` (`idServicio`) USING BTREE;

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idCiudad`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD UNIQUE KEY `idEstudiante` (`idCliente`),
  ADD UNIQUE KEY `cin` (`ci`),
  ADD KEY `idCiudad` (`idCiudad`);

--
-- Indices de la tabla `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detallefacturas`
--
ALTER TABLE `detallefacturas`
  ADD PRIMARY KEY (`numero`,`idServicio`),
  ADD KEY `detallefacturas_ibfk_2` (`idServicio`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `facturas_ibfk_1` (`idCliente`),
  ADD KEY `facturas_ibfk_2` (`idFormaPago`);

--
-- Indices de la tabla `formapagos`
--
ALTER TABLE `formapagos`
  ADD PRIMARY KEY (`idFormaPago`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicio`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendas`
--
ALTER TABLE `agendas`
  MODIFY `idAgenda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `idCiudad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `numero` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `formapagos`
--
ALTER TABLE `formapagos`
  MODIFY `idFormaPago` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idServicio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agendas`
--
ALTER TABLE `agendas`
  ADD CONSTRAINT `agendas_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `agendas_ibfk_3` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`idCiudad`) REFERENCES `ciudades` (`idCiudad`);

--
-- Filtros para la tabla `detallefacturas`
--
ALTER TABLE `detallefacturas`
  ADD CONSTRAINT `detallefacturas_ibfk_1` FOREIGN KEY (`numero`) REFERENCES `facturas` (`numero`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `detallefacturas_ibfk_2` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`) ON UPDATE RESTRICT;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`idFormaPago`) REFERENCES `formapagos` (`idFormaPago`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

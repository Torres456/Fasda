-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2023 a las 05:55:25
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
-- Base de datos: `servicio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `numero` varchar(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `correo`, `numero`, `usuario`, `password`, `img`) VALUES
(1, 'Humberto Salvador Velazquez Romero', 'velazquezhumberto99@gmail.com', '5530835953', 'chava', '2105', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `perfil` varchar(200) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrativos`
--

INSERT INTO `administrativos` (`id`, `nombre`, `correo`, `telefono`, `usuario`, `perfil`, `estado`, `password`) VALUES
(16, 'Javier VZ', 'javier@gmail.com', '5542478309', 'JavierV_z', 'Cliente', 'México', '$2y$10$Q8cnCiQudfX0ZdQlT2EcSOMgOQAW9JbH0WbEF6wriv0WaeNkel5/C'),
(17, 'Karla Sandoval', 'karla@gmail.com', '5523565584', 'KarlitaSan', 'Cliente', 'Mexico', '$2y$10$SzU/thBau2vmkLdmZyytwu0NPwdcivN7mwiB0JhDPA8bxZZ/uqi5K'),
(18, 'gfyhfg', 'jav@gmail.com', '556555458', 'dfgdfg', 'dfgdf', 'dfgdfg', '$2y$10$XYLGbOiP/qLBknrQTAoyCeetVABCAmvblQz9r/G61bpVnsVhzvT0q'),
(19, 'fdgdfg', 'sdfsdf@gfhgfhgf', 'dsfsdfsd', 'fsdfsdfsdf', 'sdfsdf', 'sdfsdfsdf', '$2y$10$CDWBLAnHesss.fdOK5tDQusU5X90NOTEyP1dkKFQubD6RtXfJn97q');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `puesto` varchar(250) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `hora_entrada` varchar(20) NOT NULL,
  `hora_salida` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `nombre`, `puesto`, `fecha`, `hora_entrada`, `hora_salida`) VALUES
(1, 'Humberto Salvador Velazquez Romero', 'Director General Fasda tec.', '15/12/2022', '03:01:35', '--/--'),
(2, 'Karla Sandoval ', 'Desarrollador', '15/12/2022', '04:04:31', '04:09:52'),
(3, 'Karla Sandoval ', 'Desarrollador', '1/2/2023', '03:11:13', '--/--');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `asunto` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `puesto` varchar(200) NOT NULL,
  `rol` varchar(60) NOT NULL,
  `fecha` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `id_usuario`, `nombre`, `asunto`, `usuario`, `mensaje`, `puesto`, `rol`, `fecha`) VALUES
(6, 1, 'Humberto Salvador Velazquez Romero', 'dfgdf', 'chava', 'dfsdfdsfdsfdsfsdf', 'Director General Fasda tec.', 'Admin', 'Wednesday 14th of December 2022 09:28:43 AM'),
(7, 1, 'Humberto Salvador Velazquez Romero', 'Archivar los documentos', 'Karla', 'fgdfgdfgdfg', 'Director General Fasda tec.', 'Personal', 'Wednesday 14th of December 2022 09:32:08 AM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(255) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `correo` varchar(90) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `puesto` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'recursos/user.png',
  `usuarioAlta` varchar(40) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `qr` varchar(255) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`, `correo`, `telefono`, `puesto`, `usuario`, `password`, `img`, `usuarioAlta`, `fecha`, `qr`, `estado`) VALUES
(1, 'Humberto Salvador Velazquez Romero', 'velazquezhumberto99@gmail.com', '5530835953', 'Director General Fasda tec.', 'Salvador', '2105', 'recursos/user.png', 'chava', '2022-09-05', 'qr/1-2022-09-05.png', 'Activo'),
(2, 'Fasdatec', 'salvador8_5@hotmail.com', '5536664109', 'Director General Fasda tec.', 'Fasdatec', '1234', 'recursos/user.png', 'chava', '2022-09-05', 'qr/2-2022-09-05.png', 'Activo'),
(3, 'Ehtan Jhair Esquivel Vargas', 'esquivelvargasehtanjhair@gmail.com', '5561776610', 'Desarrollador', 'Nuddel', 'Mizore_8', 'recursos/user.png', 'chava', '2022-09-05', 'qr/3-2022-09-05.png', 'Activo'),
(4, 'Nancy Paulina Ceciliano Zepeda', 'paulinaceciliano@gmail.com', '7226684991', 'Desarrollador', 'paulinaceciliano', 'kiwiygala123.', 'recursos/user.png', 'chava', '2022-09-05', 'qr/4-2022-09-05.png', 'Activo'),
(5, 'Kevin Emmanuel Sanchez Diaz', 'Key_park2121@hotmail.com', '5635246667', 'Diseñador y Productor', 'Kevin Emmanuel', '123456789', 'recursos/user.png', 'chava', '2022-09-05', 'qr/5-2022-09-05.png', 'Activo'),
(6, 'Luis Alberto Cruz Marín', 'alberto.cm4007@gmail.com', '5636428559', 'Desarrollador', 'albertolcm', 'holasoyluis4', 'recursos/user.png', 'chava', '2022-09-05', 'qr/6-2022-09-05.png', 'Activo'),
(7, 'Maciel Pulido Garcia', 'melisamacielpulidogarci@gmail.com', '5634714671', 'Administrador', 'maci_pg', '2803', 'recursos/user.png', 'chava', '2022-09-05', 'qr/7-2022-09-05.png', 'Activo'),
(8, 'jaqueline rivera juarez', 'jaquelinprince@hotmail.com', '5565365562', 'Administrador', 'jaki', 'peqkeprince', 'recursos/user.png', 'chava', '2022-09-05', 'qr/8-2022-09-05.png', 'Activo'),
(9, 'Barron Esquivel Alejandra Michelle', 'shellrood75@gmail.com', '5550577539', 'Administrador', 'Shelly Esquivel', 'shelly123', 'recursos/user.png', 'chava', '2022-09-05', 'qr/9-2022-09-05.png', 'Activo'),
(10, 'Rangel Hernandez Diana Laura', 'lauris-2561@hotmail.com', '5529836978', 'Administrador', 'DianaRGL', '250699', 'recursos/user.png', 'chava', '2022-09-05', 'qr/10-2022-09-05.png', 'Activo'),
(11, 'Luis Angel Dominguez Gutierrez', 'angeeldominguez20@gmail.com', '5573919135', 'Desarrollador', 'angel24l', '281190', 'recursos/user.png', 'chava', '2022-09-07', 'qr/11-2022-09-07.png', 'Activo'),
(12, 'Jonathan Orlando Horta VIlchis', 'jona_orlando@hotmail.com', '5541309103', 'Desarrollador', 'jonas', 'jonas', 'recursos/user.png', 'chava', '2022-09-07', 'qr/12-2022-09-07.png', 'Activo'),
(13, 'Victor Jorge', 'jbenhumea00@gmail.com', '5613027609', 'Desarrollador', 'Benhumea', 'Benhumea12', 'recursos/user.png', 'chava', '2022-09-14', 'qr/13-2022-09-14.png', 'Activo'),
(14, 'Karla Sandoval Guzman ', 'karlasandoval308@gmail.com', '5581399464', 'Desarrollador', 'Karla ', 'Karla1216', 'recursos/user.png', 'chava', '2022-09-14', 'qr/14-2022-09-14.png', 'Activo'),
(15, 'CRISTIAN BOLAÑOS DE JESUS ', 'Fdtcristianb09@gmail.com', '5540327711', 'Director De Producción Fasda tec.', 'CRISTIAN', '0000', 'recursos/user.png', 'chava', '2022-10-21', 'qr/15-2022-10-21.png', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `puesto` varchar(250) NOT NULL,
  `archivo` varchar(250) NOT NULL,
  `tipo_de_archivo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `puesto`, `archivo`, `tipo_de_archivo`) VALUES
(1, 'Karla Sandoval ', 'Desarrollador', 'gfhgf.docx', 'Expediente'),
(2, 'Karla Sandoval ', 'Desarrollador', 'gfhgf.docx', 'Ficha'),
(4, 'Karla Sandoval ', 'Desarrollador', 'gfhgf.docx', 'Analisis'),
(5, 'Karla Sandoval ', 'Director De Producción Fasda tec.', 'salas.pdf', 'Expediente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

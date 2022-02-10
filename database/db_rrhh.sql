-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2022 a las 15:34:00
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
-- Base de datos: `db_rrhh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos_inposdom`
--

CREATE TABLE `departamentos_inposdom` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos_inposdom`
--

INSERT INTO `departamentos_inposdom` (`Id`, `Nombre`) VALUES
(8, 'Administrativo'),
(10, 'Admisión y Clasificación'),
(14, 'Colis Postal'),
(7, 'Comunicaciones'),
(11, 'Despacho Postal'),
(12, 'Distribución y Entrega'),
(13, 'Express Mail Services(EMS)'),
(9, 'Financiero'),
(16, 'Inspección y Control Postal'),
(5, 'Jurídico'),
(17, 'Mercadeo y Ventas'),
(4, 'Planificación y Desarrollo'),
(15, 'Postal Local'),
(1, 'Recursos Humanos'),
(6, 'Relaciones Internacionales'),
(3, 'Revisión y Análisis'),
(18, 'Servicio al Cliente'),
(2, 'Tecnología de la Información');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_rrhh`
--

CREATE TABLE `estado_rrhh` (
  `Id` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_rrhh`
--

INSERT INTO `estado_rrhh` (`Id`, `Tipo`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_rrhh`
--

CREATE TABLE `historico_rrhh` (
  `Id` int(11) NOT NULL,
  `usuario_ID` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `Documento` varchar(30) NOT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Salario` decimal(10,2) NOT NULL,
  `PosicionID` int(11) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `DepartamentoID` int(11) NOT NULL,
  `UsuarioID` int(11) NOT NULL,
  `DocumentoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciones`
--

CREATE TABLE `posiciones` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posiciones`
--

INSERT INTO `posiciones` (`Id`, `Nombre`) VALUES
(1, 'Analista'),
(2, 'Director'),
(3, 'Programador'),
(4, 'Supervisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_rrhh`
--

CREATE TABLE `roles_rrhh` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `DepartamentoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles_rrhh`
--

INSERT INTO `roles_rrhh` (`Id`, `Nombre`, `DepartamentoID`) VALUES
(1, 'Programador', 2),
(2, 'Reclutamiento y Selección', 1),
(3, 'Administrador', 1),
(4, 'Salud Ocupacional', 1),
(5, 'Capacitación y Evaluación', 1),
(6, 'Relaciones Laborales', 1),
(7, 'Nómina', 1),
(8, 'Registro y Control', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `Id` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`Id`, `Tipo`) VALUES
(1, 'Cédula'),
(2, 'Pasaporte'),
(3, 'RNC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_rrhh`
--

CREATE TABLE `usuarios_rrhh` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `RolID` int(11) NOT NULL,
  `EstadoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_rrhh`
--

INSERT INTO `usuarios_rrhh` (`Id`, `Nombre`, `Apellido`, `Usuario`, `Clave`, `RolID`, `EstadoID`) VALUES
(1, 'Genesis Melquisedec', 'Sarante Feliz', 'melquisedec', 'M3l9u1s3d3c', 1, 1),
(2, 'Kate', 'Caminero', 'KateC', 'Inposdom123', 3, 1),
(3, 'Inosura', 'Valdez', 'inoval', '123456', 2, 1),
(4, 'Lucía', 'Torres', 'luctor', '123456', 4, 1),
(5, 'Ana', 'Ortiz', 'anaort', '123456', 5, 1),
(6, 'Yamel', 'Cuello', 'yamcue', '123456', 6, 1),
(7, 'María', 'Lora', 'marlor', '123456', 7, 1),
(8, 'Bryan', 'Mejía', 'brymej', '123456', 8, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos_inposdom`
--
ALTER TABLE `departamentos_inposdom`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `estado_rrhh`
--
ALTER TABLE `estado_rrhh`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `historico_rrhh`
--
ALTER TABLE `historico_rrhh`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Cedula` (`Documento`,`Correo`),
  ADD KEY `PosicionID` (`PosicionID`),
  ADD KEY `DepartamentoID` (`DepartamentoID`),
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `DocumentoID` (`DocumentoID`);

--
-- Indices de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- Indices de la tabla `roles_rrhh`
--
ALTER TABLE `roles_rrhh`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `DepartamentoID` (`DepartamentoID`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios_rrhh`
--
ALTER TABLE `usuarios_rrhh`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Usuario` (`Usuario`),
  ADD KEY `RolID` (`RolID`,`EstadoID`),
  ADD KEY `EstadoID` (`EstadoID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos_inposdom`
--
ALTER TABLE `departamentos_inposdom`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `estado_rrhh`
--
ALTER TABLE `estado_rrhh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles_rrhh`
--
ALTER TABLE `roles_rrhh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios_rrhh`
--
ALTER TABLE `usuarios_rrhh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`PosicionID`) REFERENCES `posiciones` (`Id`),
  ADD CONSTRAINT `personal_ibfk_2` FOREIGN KEY (`DepartamentoID`) REFERENCES `departamentos_inposdom` (`Id`),
  ADD CONSTRAINT `personal_ibfk_3` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios_rrhh` (`Id`),
  ADD CONSTRAINT `personal_ibfk_4` FOREIGN KEY (`DocumentoID`) REFERENCES `tipo_documento` (`Id`);

--
-- Filtros para la tabla `roles_rrhh`
--
ALTER TABLE `roles_rrhh`
  ADD CONSTRAINT `roles_rrhh_ibfk_1` FOREIGN KEY (`DepartamentoID`) REFERENCES `departamentos_inposdom` (`Id`);

--
-- Filtros para la tabla `usuarios_rrhh`
--
ALTER TABLE `usuarios_rrhh`
  ADD CONSTRAINT `usuarios_rrhh_ibfk_1` FOREIGN KEY (`EstadoID`) REFERENCES `estado_rrhh` (`Id`),
  ADD CONSTRAINT `usuarios_rrhh_ibfk_2` FOREIGN KEY (`RolID`) REFERENCES `roles_rrhh` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

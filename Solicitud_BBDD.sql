-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2021 a las 11:19:14
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
  time_zone = "+00:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;
--
  -- Base de datos: `Solicitud_BBDD`
  --
  -- --------------------------------------------------------
  --
  -- Estructura de tabla para la tabla `departamentos`
  --
  CREATE TABLE `departamentos` (`nombreDepartamento` varchar(40) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
  --
  -- Estructura de tabla para la tabla `documentos`
  --
  CREATE TABLE `documentos` (
    `nombre` varchar(30) NOT NULL,
    `ubicacion` varchar(100) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
  --
  -- Estructura de tabla para la tabla `grupos`
  --
  CREATE TABLE `grupos` (`nombreGrupo` varchar(20) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
  --
  -- Estructura de tabla para la tabla `horarios`
  --
  CREATE TABLE `horarios` (`horario` tinyint(4) NOT NULL) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
  --
  -- Estructura de tabla para la tabla `permisos`
  --
  CREATE TABLE `permisos` (
    `idPermiso` int(11) NOT NULL,
    `fechaIni` date NOT NULL,
    `fechaFin` date NOT NULL,
    `motivo` varchar(450) NOT NULL,
    `diaCompleto` tinyint(4) NOT NULL,
    `concedido` tinyint(4) NOT NULL,
    `fecha` date NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
-- --------------------------------------------------------
  --
  -- Estructura de tabla para la tabla `profesor`
  --
  CREATE TABLE `profesor` (
    `id` int(11) NOT NULL,
    `dni` varchar(9) NOT NULL,
    `nombre` varchar(45) NOT NULL,
    `telefono` varchar(9) NOT NULL,
    `firma` varchar(45) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
  -- Índices para tablas volcadas
  --
  --
  -- Indices de la tabla `departamentos`
  --
ALTER TABLE
  `departamentos`
ADD
  PRIMARY KEY (`nombreDepartamento`);
--
  -- Indices de la tabla `documentos`
  --
ALTER TABLE
  `documentos`
ADD
  PRIMARY KEY (`nombre`);
--
  -- Indices de la tabla `grupos`
  --
ALTER TABLE
  `grupos`
ADD
  PRIMARY KEY (`nombreGrupo`);
--
  -- Indices de la tabla `horaarios`
  --
ALTER TABLE
  `horarios`
ADD
  PRIMARY KEY (`horario`);
--
  -- Indices de la tabla `permisos`
  --
ALTER TABLE
  `permisos`
ADD
  PRIMARY KEY (`idPermiso`);
--
  -- Indices de la tabla `profesor`
  --
ALTER TABLE
  `profesor`
ADD
  PRIMARY KEY (`id`);
--
  -- AUTO_INCREMENT de las tablas volcadas
  --
  --
  -- AUTO_INCREMENT de la tabla `permisos`
  --
ALTER TABLE
  `permisos`
MODIFY
  `idPermiso` int(11) NOT NULL AUTO_INCREMENT;
--
  -- AUTO_INCREMENT de la tabla `profesor`
  --
ALTER TABLE
  `profesor`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
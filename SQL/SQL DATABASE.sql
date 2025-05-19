-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-05-2024 a las 20:31:50
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gmt`
--
CREATE DATABASE IF NOT EXISTS `gmt` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci;
USE `gmt`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caso`
--

DROP TABLE IF EXISTS `caso`;
CREATE TABLE IF NOT EXISTS `caso` (
  `caso` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `marca_vehiculo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `modelo_vehiculo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `placas_vehiculo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `ubicacion_caso` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `descripcion` text COLLATE utf8mb3_unicode_ci,
  `fecha_hora_caso` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `estatus` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `cotizaciones` text COLLATE utf8mb3_unicode_ci,
  `declaración_del_usuario` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `monto_total` int DEFAULT NULL,
  `Dueño` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `tarea_pendiente` text COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`caso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `caso`
--

INSERT INTO `caso` (`caso`, `marca_vehiculo`, `modelo_vehiculo`, `placas_vehiculo`, `ubicacion_caso`, `descripcion`, `fecha_hora_caso`, `estatus`, `cotizaciones`, `declaración_del_usuario`, `monto_total`, `Dueño`, `tarea_pendiente`) VALUES
('1', 'Freightliner', 'M2', '3d412', 'autopista Atlacomulco - guadalajara', 'camión sin frenos', '24 de marzo 6 pm', 'en revisión ', '', 'camión sin frenos uso la rampa de frenado pero resultando daños en la mercancía que contenía el camión ', 0, 'Usuario', 'Cotizar daños a la mercancía'),
('2', 'Nissan', 'Sentra 2017', 'ABC123', 'Morelia michoacan', 'choque por percance', '11 de Mayo 10 am', 'en investigación', 'faros traseros: $3000 (de las dos)\n\nfacia trasera $750\n\ncajuela de maletero $4500\n\n', 'Estaba detenido en el semáforo cuando un vehículo a alta velocidad impacto la parte trasera de mi vehículo', 7500, 'Ulises', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
CREATE TABLE IF NOT EXISTS `perfiles` (
  `id_perfil` int NOT NULL,
  `Nombre` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Apellidos` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `usuario` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `contraseña` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `puesto` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `Nombre`, `Apellidos`, `usuario`, `contraseña`, `puesto`) VALUES
(1, 'Usuario', 'Usuario', 'uusuario', 'uusuario', 'Usuario'),
(2, 'Administrador', 'Administradora', 'aadministrador', 'aadministrador', 'Administrador'),
(3, 'Ajustador', 'Ajustador', 'aajustador', 'aajustador', 'Ajustador'),
(4, 'Trabajador', 'Trabajadora', 'ttrabajador', 'ttrabajador', 'Trabajador'),
(6, 'Ulises', 'Guerrero', 'Ulises', '1219', 'Usuario');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

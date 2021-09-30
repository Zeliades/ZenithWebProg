-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 30-09-2021 a las 13:29:07
-- Versión del servidor: 8.0.18
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `IdCat` varchar(4) NOT NULL,
  `Categoria` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`IdCat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`IdCat`, `Categoria`) VALUES
('V100', 'Vestimenta'),
('T200', 'Tecnologia'),
('H300', 'Hogar'),
('C400', 'Cocina'),
('D500', 'Deportes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprod`
--

DROP TABLE IF EXISTS `comprod`;
CREATE TABLE IF NOT EXISTS `comprod` (
  `IdUsu` int(11) NOT NULL,
  `CodArt` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`CodArt`) USING BTREE,
  KEY `FK_UsuProd` (`IdUsu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `comprod`
--

INSERT INTO `comprod` (`IdUsu`, `CodArt`) VALUES
(53426, 'VC3212'),
(53426, 'VZ3134'),
(53426, 'VP4321'),
(57824, 'TC7371'),
(57824, 'TC8529'),
(57824, 'TL5832'),
(48846, 'HA5739'),
(48846, 'HC6783'),
(48846, 'HM5782'),
(57822, 'CS8953'),
(57822, 'CG8927'),
(57822, 'CE9548'),
(39258, 'DB6579'),
(39258, 'DR6570'),
(39258, 'DT8439'),
(53426, 'VPA9689');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `CodArt` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Categoria` varchar(4) DEFAULT NULL,
  `Nombre` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Precio` smallint(6) DEFAULT NULL,
  `Disponible` varchar(2) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `ImgProducto` varchar(100) DEFAULT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `calle` varchar(40) NOT NULL,
  PRIMARY KEY (`CodArt`),
  KEY `Categoria` (`Categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CodArt`, `Categoria`, `Nombre`, `Precio`, `Disponible`, `Descripcion`, `ImgProducto`, `Ciudad`, `calle`) VALUES
('VC3212', 'V100', 'Chaleco Plumas', 120, 'si', 'Chaleco de plumas color blanco tamaño M', 'download.png', 'El Alto', 'Feria 16 de Julio'),
('VZ3134', 'V100', 'Mocacines', 130, 'si', 'Hechos de cuero, talla 40', 'download (14).png', 'El Alto', 'Feria 16 de Julio'),
('VP4321', 'V100', 'Jeans Ajustados', 180, 'si', 'De primera mano, talla 40', 'download (13).png', 'El Alto', 'Feria 16 de Julio'),
('TC7371', 'T200', 'Cable HDMI', 30, 'si', 'Cable para transmitir contenido audiovisual descomprimido entre equipos', 'download (12).png', 'La Paz', 'Eloy Salmon 4324'),
('TC8529', 'T200', 'Samsung S10', 4300, 'si', 'Celular nuevo', 'download (11).png', 'La Paz', 'Eloy Salmon 4324'),
('TL5832', 'T200', 'Hp Pavillion', 6500, 'si', '15in i7 12Ram 1TB Rigido win 10', 'download (10).png', 'La Paz', 'Eloy Salmon 4324'),
('HA5739', 'H300', 'AlfombraMimbre', 50, 'si', 'Alfombra importada facil de lavar', 'download (9).png', 'La Paz', '15 de Agosto 6324'),
('HC6783', 'H300', 'Recuadro', 64, 'si', 'Recuadro de 5 piezas facil de colocar en la pared', 'download (8).png', 'La Paz', '15 de Agosto 6324'),
('HM5782', 'H300', 'Mesa de Noche', 300, 'si', 'Mesa ya armada de 80cm altura y 40 ancho', 'download (7).png', 'La Paz', '15 de Agosto 6324'),
('CS8953', 'C400', 'Sarten', 120, 'si', 'No necesita aceite, a prueba de rayones', 'download (6).png', 'El Alto', 'Eduardo Calderon 3432'),
('CG8927', 'C400', 'Guantes Hornear', 45, 'si', 'Ideales para el horneado de masas', 'download (5).png', 'El Alto', 'Eduardo Calderon 3432'),
('CE9548', 'C400', 'Espatula', 35, 'si', 'Amigable con la superficie de sartenes', 'download (4).png', 'El Alto', 'Eduardo Calderon 3432'),
('DB6579', 'D500', 'Balon Futbol', 75, 'si', 'Ideal para uso de infantes', 'download (3).png', 'La Paz', 'Capitan Ravelo 5423'),
('DR6570', 'D500', 'Raqueta Tenis', 120, 'si', 'Hecha de material resistente', 'download (2).png', 'La Paz', 'Capitan Ravelo 5423'),
('DT8439', 'D500', 'Tennis', 240, 'si', 'Comodos y para uso extendido', 'download (1).png', 'La Paz', 'Capitan Ravelo 5432');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL,
  `NombreU` varchar(25) DEFAULT NULL,
  `Pass` varchar(15) DEFAULT NULL,
  `Correo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `NombreU`, `Pass`, `Correo`) VALUES
(53426, 'Maria', 'password', NULL),
(39258, 'Deporte Vital', 'password', 'DeporteVital@gmail.com'),
(57824, 'Centro Tec', 'password', 'CentroTec@gmail.com'),
(48846, 'NidoHogareño', 'password', 'NidoHogar@gmail.com'),
(57822, 'Festin', 'password', 'Festin@gmail.com'),
(1, 'Pedro', 'password', 'Pedro@gmail.com'),
(57826, 'Sarah', 'password', 'Sarah@gmail.com'),
(57827, 'Pepe', 'password', 'pepe@gmail.com'),
(57828, 'Mario', 'password', 'mario@gmail.com'),
(57829, 'Julio', 'password', 'Julio'),
(57830, 'Juana', 'password', 'Juana');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

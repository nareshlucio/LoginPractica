-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2019 a las 02:30:06
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id_Compra` int(10) NOT NULL,
  `Usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Artiulo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Categoria` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Num_Pz` int(10) NOT NULL,
  `Precio_Total` int(10) NOT NULL,
  `Fecha` date NOT NULL,
  `Sucursal` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `Id_Eva` int(20) NOT NULL,
  `Usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Objeto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Pregunta` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Observaciones` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Respuestas` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `R_Eva` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Id_producto` int(10) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Categoria` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Pz_inventario` int(10) NOT NULL,
  `Precio` int(30) NOT NULL,
  `Img_Represent` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Sucursal` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`Id_producto`, `Nombre`, `Categoria`, `Pz_inventario`, `Precio`, `Img_Represent`, `Sucursal`) VALUES
(1, 'Doom', 'Video_Juegos', 100, 750, 'Imgs/Juegos/Doom.png', ''),
(2, 'God Of War', 'Video_Juegos', 250, 800, 'Imgs/Juegos/GOW.png', ''),
(3, 'Red Dead Redemption 2', 'Video_Juegos', 80, 680, 'Imgs/Juegos/RDR2.jpg', ''),
(4, 'Sniper Elite 3', 'Video_Juegos', 79, 560, 'Imgs/Juegos/SE.png', ''),
(5, 'Watch Dogs', 'Video_Juegos', 95, 680, 'Imgs/Juegos/WD.png', ''),
(6, 'Destiny 2', 'Video_Juegos', 100, 580, 'Imgs/Juegos/Destyni2.png', ''),
(7, 'Audifonos Tipo Diadema', 'Gadgets', 300, 1800, 'Imgs/Gadgets/Audifonos.png', ''),
(8, 'Volante para Juegos', 'Gadgets', 100, 1200, 'Imgs/Gadgets/Bolante_S.jpg', ''),
(9, 'Cargador para Iphone', 'Gadgets ', 50, 2780, 'Imgs/Gadgets/Cargador.jpg', ''),
(10, 'Control Para Telefonos', 'Gadgets ', 400, 250, 'Imgs/Gadgets/Control.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(10) NOT NULL,
  `Apellido_P` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido_M` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Genero` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Edad` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Tipo_Usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `Apellido_P`, `Apellido_M`, `Nombre`, `Usuario`, `Correo`, `Password`, `Genero`, `Telefono`, `Edad`, `Tipo_Usuario`) VALUES
(1, 'Admins', 'Adminsr', 'Admin', 'Admin', 'Admin', '$2y$10$gSdNR/LgXW94e5bCkvEtgOPGqXJZCrmp2u5i6cngGVRUwtRJRRKMi', 'Hombre', '2176235487', '30', 1),
(2, 'Lucio', 'LÃ³pez', 'Uriel', 'Liam', 'liamswag@gmail.com', '$2y$10$.nuopLv1cGzLpMNzuMsQXefNz2CHfGBHJI.H.ShiH6fDb3QTlZU8K', 'Hombre', '7403216548', '15', 2),
(3, 'Lucio', 'LÃ³pez', 'David Naresh', 'Poti7652', 'poti9976@gmail.com', '$2y$10$nWKhIrKrAvwgWaB9Ga31qu3TZwGLBOVifNRpvefM5t5okw6OFv4Oi', 'Hombre', '5552155285', '20', 2),
(4, 'Romo', 'Medina', 'Alfonso', 'Alfo', 'rodir@gmail.com', '$2y$10$z1Gp3Zd6IYO4cuwLXfrnP.MtcRz8rq7DxsPrIsUNkknxn06NQgaS.', 'Hombre', '2567435698', '20', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id_Compra`),
  ADD KEY `Usuario` (`Usuario`),
  ADD KEY `Artiulo` (`Artiulo`),
  ADD KEY `Categoria` (`Categoria`),
  ADD KEY `Sucursal` (`Sucursal`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`Id_Eva`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`Id_producto`),
  ADD KEY `Nombre` (`Nombre`),
  ADD KEY `Categoria` (`Categoria`),
  ADD KEY `Sucursal` (`Sucursal`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD UNIQUE KEY `Usuario_2` (`Usuario`),
  ADD KEY `Usuario` (`Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `Id_Compra` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `Id_Eva` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `Id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2022 a las 17:21:32
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `luststore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'ayala', 'bc23dd9b03ece07b5342ae02c9fb966f4bea0f8c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipoTarjeta` varchar(50) NOT NULL,
  `numeroTarjeta` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `celular`, `correo`, `tipoTarjeta`, `numeroTarjeta`) VALUES
(1, 'Juan', 'Ayala', 3006261355, 'juan@gmail.com', 'MASTERCARD', 543453535345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `id` int(11) NOT NULL,
  `identidad` varchar(50) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `mensaje` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`id`, `identidad`, `celular`, `correo`, `mensaje`) VALUES
(1, 'Carlos Centeno Torres', 3006261355, 'Carlos@gmail.com', 'Buenas tardes. Muchas gracias por abrir este canal de comunicación. En el momento estoy empezando un startup y me gustaría tener como aliado a su empresa ya que tengo conocimiento de su éxito y su manera de trabajar. Espero pronta respuesta y de antemano muchas gracias.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nombresCliente` varchar(30) NOT NULL,
  `apellidosCliente` varchar(35) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `tipoTarjeta` varchar(15) NOT NULL,
  `numeroTarjeta` bigint(20) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `nombreProducto` tinytext NOT NULL,
  `talla` varchar(3) NOT NULL,
  `color` varchar(15) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioUnitario` int(11) NOT NULL,
  `precioTotal` int(11) NOT NULL,
  `entregado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL,
  `tallas` varchar(50) NOT NULL DEFAULT 'S-M-L-XL',
  `color` varchar(100) NOT NULL,
  `img` text NOT NULL DEFAULT './imgs/catalogo/camiseta_catalogo_000.jpeg',
  `inventario` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria`, `nombre`, `marca`, `precio`, `tallas`, `color`, `img`, `inventario`) VALUES
(1, 'Casual', 'Camiseta Nike Doble Logo Azul', 'Nike', 75000, 'S M L XL', 'Negro', './imgs/catalogo/camiseta_catalogo_001.jpeg', 10),
(2, 'Casual', 'Camiseta Nike Negra Logo Pequeño', 'Nike', 120000, 'S M L XL', 'Negro', './imgs/catalogo/camiseta_catalogo_002.jpeg', 2),
(3, 'Casual', 'Camiseta Blanca Nike Logo Grande', 'Nike', 80000, 'S M L XL', 'Blanco', './imgs/catalogo/camiseta_catalogo_003.jpeg', 5),
(4, 'Casual', 'Camiseta Nike Blanca Logo Pequeño', 'Nike', 250000, 'S M L XL', 'Blanco', './imgs/catalogo/camiseta_catalogo_004.jpeg', 7),
(5, 'Casual', 'Camiseta Nike SB Negra ', 'Nike', 90000, 'S M L XL', 'Negro', './imgs/catalogo/camiseta_catalogo_005.jpeg', 5),
(6, 'Casual', 'Camiseta Jordan Roja', 'Jordan', 135000, 'S M L XL', 'Rojo', './imgs/catalogo/camiseta_catalogo_006.jpeg', 5),
(7, 'Casual', 'Camiseta Blanca Nike con Bordado', 'Nike', 110000, 'S M L XL', 'Blanco', './imgs/catalogo/camiseta_catalogo_007.jpeg', 5),
(8, 'Deportivo', 'Camiseta Nike FC Barcelona', 'Nike', 180000, 'S M L XL', 'Blanco', './imgs/catalogo/camiseta_catalogo_008.jpeg', 20),
(9, 'Deportivo', 'Camiseta Oficial Paris Saint germain ', 'Nike', 150000, 'S M L XL', 'Blancas', './imgs/catalogo/camiseta_catalogo_009.jpeg', 0),
(10, 'Deportivo', 'Camiseta Azul Golden State', 'Nike', 160000, 'S M L XL', 'Azul', './imgs/catalogo/camiseta_catalogo_010.jpeg', 5),
(11, 'Casual', 'Camiseta Nike Verde Oliva', 'Nike', 150000, 'S M L XL', 'Verde Oliva', './imgs/catalogo/camiseta_catalogo_011.jpeg', 5),
(12, 'Deportivo', 'Camiseta Deportiva Logo Azul', 'Nike', 134000, 'S M L XL', 'Blanca', './imgs/catalogo/camiseta_catalogo_012.jpeg', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
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
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

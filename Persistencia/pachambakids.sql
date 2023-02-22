-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2022 a las 17:16:06
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pachambakids`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `clave` int(10) NOT NULL,
  `fecha_reg` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_de_pedidos`
--

CREATE TABLE `datos_de_pedidos` (
  `nropedido` int(10) NOT NULL,
  `idproducto` int(50) NOT NULL,
  `talle` varchar(30) NOT NULL,
  `cantidad` int(30) NOT NULL,
  `subtotal` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_de_pedidos`
--

INSERT INTO `datos_de_pedidos` (`nropedido`, `idproducto`, `talle`, `cantidad`, `subtotal`) VALUES
(1, 1, 'M,X', 20, 4800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `nropedido` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `idcliente` int(30) NOT NULL,
  `total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`nropedido`, `fecha`, `idcliente`, `total`) VALUES
(1, '2022-10-05', 1, 6000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `precioventa` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `nombre`, `marca`, `precioventa`) VALUES
(1, 'Remera Clasica', 'PachambaKids', 1200),
(2, 'Remera Lisa', 'PachambaKids', 1100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `idproducto` int(10) NOT NULL,
  `talle` varchar(50) NOT NULL,
  `cantidad` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`idproducto`, `talle`, `cantidad`) VALUES
(1, 'M,X,XXL,X,L', 400),
(2, 'M,X,XXL,X,L', 400);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `datos_de_pedidos`
--
ALTER TABLE `datos_de_pedidos`
  ADD PRIMARY KEY (`nropedido`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`nropedido`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idcliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_de_pedidos`
--
ALTER TABLE `datos_de_pedidos`
  MODIFY `nropedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idcliente` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `idproducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_de_pedidos`
--
ALTER TABLE `datos_de_pedidos`
  ADD CONSTRAINT `datos_de_pedidos_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`nropedido`) REFERENCES `datos_de_pedidos` (`nropedido`);

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

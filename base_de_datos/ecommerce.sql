-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 09:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrito_compra`
--

CREATE TABLE `carrito_compra` (
  `id_carrito_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `precio_articulo` decimal(10,4) NOT NULL,
  `cantidad_articulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cantidad_articulo` int(11) NOT NULL DEFAULT '1',
  `total_compra` decimal(10,5) NOT NULL,
  `metodo_de_pago` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `estado_compra` int(11) NOT NULL,
  `estado_entrega` int(11) NOT NULL DEFAULT '0',
  `fecha_pago` date NOT NULL,
  `numero_referencia` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id_compra`, `id_usuario`, `id_articulo`, `cantidad_articulo`, `total_compra`, `metodo_de_pago`, `estado_compra`, `estado_entrega`, `fecha_pago`, `numero_referencia`) VALUES
(10, 1, 20, 2, '2512.00000', 'Paypal', 1, 0, '2019-01-08', 'PAY-9B145531CX7201937LQ2FM3Q'),
(11, 1, 20, 1, '1256.00000', 'Paypal', 1, 0, '2019-03-08', 'PAY-9B145531CX7201937LQ2FM3Q'),
(12, 1, 13, 1, '3000.00000', 'Paypal', 1, 0, '2019-01-16', 'PAY-3EP093385C322313GLQ7OEII'),
(13, 1, 15, 1, '2450.00000', 'Paypal', 1, 0, '2019-01-16', 'PAY-3EP093385C322313GLQ7OEII');

-- --------------------------------------------------------

--
-- Table structure for table `configuracion`
--

CREATE TABLE `configuracion` (
  `id_configuracion` int(11) NOT NULL,
  `titulo_producto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo_footer` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `contenido_footer` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `link_facebook` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `link_twitter` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `link_google` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `link_instagram` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `configuracion`
--

INSERT INTO `configuracion` (`id_configuracion`, `titulo_producto`, `titulo_footer`, `contenido_footer`, `link_facebook`, `link_twitter`, `link_google`, `link_instagram`) VALUES
(1, 'Secciones mas Importantes', 'Sobre Nosotros', 'Esta sección dira informacion sobre nosotros', 'https://www.facebook.com', 'https://www.twitter.com', 'https://plus.google.com/discover', 'https://www.instagram.com');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id_email` int(11) NOT NULL,
  `titulo_email` varchar(255) COLLATE utf16_spanish2_ci NOT NULL,
  `cuerpo_email` longtext COLLATE utf16_spanish2_ci NOT NULL,
  `estado_email` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id_email`, `titulo_email`, `cuerpo_email`, `estado_email`) VALUES
(2, 'OFERTAS DE VERANO', ' Ofertas de 50% en ropa de Hombres y Mujeres', 0),
(3, 'OFertas de Invierno', 'Mejores ofertas de invierno rebajas de 60% en abrigos ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `listado_tipos_subtipos`
--

CREATE TABLE `listado_tipos_subtipos` (
  `id_listado_tipos_subtipos` int(11) NOT NULL,
  `id_tipo_ropa` int(11) NOT NULL,
  `id_sub_tipo_ropa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ropa_tienda`
--

CREATE TABLE `ropa_tienda` (
  `id_ropa_tienda` int(11) NOT NULL,
  `titulo_ropa` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `color_ropa` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_ropa` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad_ropa` int(11) NOT NULL DEFAULT '1',
  `tipo_ropa` int(11) NOT NULL,
  `sub_tipo_ropa` int(11) NOT NULL,
  `imagen_ropa` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `precio_ropa` decimal(10,5) NOT NULL,
  `estado_ropa` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `ropa_tienda`
--

INSERT INTO `ropa_tienda` (`id_ropa_tienda`, `titulo_ropa`, `color_ropa`, `descripcion_ropa`, `cantidad_ropa`, `tipo_ropa`, `sub_tipo_ropa`, `imagen_ropa`, `precio_ropa`, `estado_ropa`) VALUES
(11, 'Punto Negro', 'Negro Mate', 'Punto echo con algodon', 25, 3, 1, 'punto_mujer.jpg', '1250.00000', 1),
(12, 'Blusa Azul', 'Azul marino', 'Blusa echa para ellas', 50, 3, 2, 'blusa_mujer.jpg', '2000.00000', 1),
(13, 'Camiseta', 'Color Blanco', 'Camiseta echa con plumas', 199, 3, 3, 'camiseta_mujer.jpg', '3000.00000', 1),
(14, 'Sudadera', 'Sudadera Verde', 'Sudadera echa con acrilico', 40, 3, 4, 'sudadera_mujer.jpg', '5000.00000', 1),
(15, 'Jeans', 'Azul mate', 'Mejores Jeans de Italia', 39, 3, 5, 'jeans_mujer.jpg', '2450.00000', 1),
(16, 'Chaqueta', 'Amarillo sol', 'Chaqueta para lluvia', 65, 3, 7, 'chaqueta_mujer.jpg', '7800.00000', 1),
(17, 'Parka', 'Rojo Sangre', 'Parka para fiestas', 96, 3, 8, 'Parka_mujer.jpg', '6320.00000', 1),
(18, 'Acessorios', 'MultiColores', 'Prendas para verse mejor', 65, 4, 9, 'Accesorios_mujer.jpg', '5000.00000', 1),
(19, 'Jeans modernos', 'azul marino', 'Mejores jeans de Rusia', 63, 3, 5, 'jeans2_mujer.jpg', '6512.00000', 1),
(20, 'Punto', 'Negro Mate', 'Punto traidos de Libia', 37, 4, 1, 'punto_hombre.jpg', '1256.00000', 1),
(21, 'Camisa', 'Color fucsia morado', 'Camisas de EEUU, mejor calidad', 56, 3, 10, 'camisa_hombre.jpg', '4789.00000', 1),
(22, 'Camiseta', 'Amarillo sol', 'Camiseta listas para usar', 78, 4, 3, 'camiseta_hombre.jpg', '4789.55000', 1),
(23, 'Jeans', 'verde planta', 'Jeans para nunca pasar desapercibido', 63, 4, 5, 'jeans_hombre.jpg', '578.78000', 1),
(24, 'Pantalón', 'MultiColores', 'Mejores Pantalones', 41, 4, 11, 'pantalon_nuevo_hombre.jpg', '2489.00000', 1),
(25, 'Abrigo', 'Gris nube', 'Abrigo para el frio', 69, 4, 12, 'abrigo_hombre.jpg', '48.55000', 1),
(26, 'Chaqueta ', 'Marron', 'Chaqueta para ver bien', 65, 4, 7, 'chaqueta_hombre.jpg', '56.23000', 1),
(27, 'Parka', 'parka roja', 'Parka para usar con todo', 33, 4, 8, 'parka_hombre.jpg', '789.00000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_tipo_ropa`
--

CREATE TABLE `sub_tipo_ropa` (
  `id_sub_tipo_ropa` int(11) NOT NULL,
  `nombre_sub_tipo_ropa` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `sub_tipo_ropa`
--

INSERT INTO `sub_tipo_ropa` (`id_sub_tipo_ropa`, `nombre_sub_tipo_ropa`, `estado`) VALUES
(1, 'Punto', 1),
(2, 'Blusa', 1),
(3, 'Camiseta', 1),
(4, 'Sudadera', 1),
(5, 'Jeans', 1),
(6, 'Pantalones', 1),
(7, 'Chaqueta', 1),
(8, 'Parka', 1),
(9, 'Acessorios', 1),
(10, 'Camisa', 1),
(11, 'Pantalón', 1),
(12, 'Abrigo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_ropa`
--

CREATE TABLE `tipo_ropa` (
  `id_tipo_ropa` int(11) NOT NULL,
  `nombre_tipo_ropa` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen_tipo_ropa` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) DEFAULT '1',
  `estado_importante` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tipo_ropa`
--

INSERT INTO `tipo_ropa` (`id_tipo_ropa`, `nombre_tipo_ropa`, `imagen_tipo_ropa`, `estado`, `estado_importante`) VALUES
(3, 'Mujer', 'Autum-k4f-U4011034230932DB-624x385@Ideal.jpg', 1, 1),
(4, 'Hombre', 'hombre.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `dni_usuario` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono_usuario` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL DEFAULT '0',
  `estado_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `dni_usuario`, `email_usuario`, `telefono_usuario`, `contrasena`, `tipo_usuario`, `estado_usuario`) VALUES
(1, 'Jose Ortega', '24736862', 'jmob612@gmail.com', '', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 1),
(2, 'Luz Blanco', '24736862', 'jmob612@gmail.com', '', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 1),
(3, 'luz', '2478465', 'luz@gmail.com', '0415-88955656', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrito_compra`
--
ALTER TABLE `carrito_compra`
  ADD PRIMARY KEY (`id_carrito_compra`),
  ADD KEY `fk_carrito_compra_usuario_idx` (`id_usuario`),
  ADD KEY `fk_carrito_compra_ropa_tienda_idx` (`id_articulo`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_compras_usuarios_idx` (`id_usuario`),
  ADD KEY `fk_compras_articulo_idx` (`id_articulo`);

--
-- Indexes for table `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id_configuracion`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `listado_tipos_subtipos`
--
ALTER TABLE `listado_tipos_subtipos`
  ADD PRIMARY KEY (`id_listado_tipos_subtipos`),
  ADD KEY `fk_listado_tipos_subtipos_tipo_ropa_idx` (`id_tipo_ropa`),
  ADD KEY `fk_listado_tipos_subtipos_sub_tipo_ropa_idx` (`id_sub_tipo_ropa`);

--
-- Indexes for table `ropa_tienda`
--
ALTER TABLE `ropa_tienda`
  ADD PRIMARY KEY (`id_ropa_tienda`),
  ADD KEY `fk_ropa_tienda_tipo_ropa_idx` (`tipo_ropa`),
  ADD KEY `fk_ropa_tienda_sub_tipo_ropa_idx` (`sub_tipo_ropa`);

--
-- Indexes for table `sub_tipo_ropa`
--
ALTER TABLE `sub_tipo_ropa`
  ADD PRIMARY KEY (`id_sub_tipo_ropa`);

--
-- Indexes for table `tipo_ropa`
--
ALTER TABLE `tipo_ropa`
  ADD PRIMARY KEY (`id_tipo_ropa`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrito_compra`
--
ALTER TABLE `carrito_compra`
  MODIFY `id_carrito_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id_configuracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `listado_tipos_subtipos`
--
ALTER TABLE `listado_tipos_subtipos`
  MODIFY `id_listado_tipos_subtipos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ropa_tienda`
--
ALTER TABLE `ropa_tienda`
  MODIFY `id_ropa_tienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sub_tipo_ropa`
--
ALTER TABLE `sub_tipo_ropa`
  MODIFY `id_sub_tipo_ropa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tipo_ropa`
--
ALTER TABLE `tipo_ropa`
  MODIFY `id_tipo_ropa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrito_compra`
--
ALTER TABLE `carrito_compra`
  ADD CONSTRAINT `fk_carrito_compra_ropa_tienda` FOREIGN KEY (`id_articulo`) REFERENCES `ropa_tienda` (`id_ropa_tienda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_carrito_compra_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_compras_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `ropa_tienda` (`id_ropa_tienda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compras_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `listado_tipos_subtipos`
--
ALTER TABLE `listado_tipos_subtipos`
  ADD CONSTRAINT `fk_listado_tipos_subtipos_sub_tipo_ropa` FOREIGN KEY (`id_sub_tipo_ropa`) REFERENCES `sub_tipo_ropa` (`id_sub_tipo_ropa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_listado_tipos_subtipos_tipo_ropa` FOREIGN KEY (`id_tipo_ropa`) REFERENCES `tipo_ropa` (`id_tipo_ropa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ropa_tienda`
--
ALTER TABLE `ropa_tienda`
  ADD CONSTRAINT `fk_ropa_tienda_sub_tipo_ropa` FOREIGN KEY (`sub_tipo_ropa`) REFERENCES `sub_tipo_ropa` (`id_sub_tipo_ropa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ropa_tienda_tipo_ropa` FOREIGN KEY (`tipo_ropa`) REFERENCES `tipo_ropa` (`id_tipo_ropa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2024 a las 18:09:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loviing store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rating_productos`
--

CREATE TABLE `rating_productos` (
  `id_rate` int(11) NOT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `estrellas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rating_productos`
--

INSERT INTO `rating_productos` (`id_rate`, `cod_producto`, `cod_cliente`, `estrellas`) VALUES
(1, 1, 1, 5),
(2, 2, 2, 5),
(3, 3, 4, 5),
(4, 4, 4, 5),
(5, 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_carrito`
--

CREATE TABLE `tbl_carrito` (
  `id_carrito` int(11) NOT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `compra_realizada` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_carrito`
--

INSERT INTO `tbl_carrito` (`id_carrito`, `cod_cliente`, `fecha_creacion`, `compra_realizada`) VALUES
(3, 5, NULL, 'Si'),
(4, 5, '2024-07-20', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(100) DEFAULT NULL,
  `icono` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`id_categoria`, `nombre_categoria`, `icono`) VALUES
(2, 'Juguetes - Mascotas', 'Juguetes - Mascotas.png'),
(3, 'Cepillos - Mascotas', 'Cepillos - Mascotas.png'),
(4, 'Juguetes', 'Juguetes.png'),
(5, 'Cortaúñas - Mascotas', 'Cortaúñas - Mascotas.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_facturas`
--

CREATE TABLE `tbl_detalle_facturas` (
  `id_detalle_factura` int(11) NOT NULL,
  `cod_factura` int(11) DEFAULT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_pedidos`
--

CREATE TABLE `tbl_detalle_pedidos` (
  `id_detalle_pedido` int(11) NOT NULL,
  `cod_pedido` int(11) NOT NULL,
  `cod_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_detalle_pedidos`
--

INSERT INTO `tbl_detalle_pedidos` (`id_detalle_pedido`, `cod_pedido`, `cod_producto`, `cantidad`, `precio`) VALUES
(1, 1, 1, 2, 24990),
(2, 1, 2, 1, 39900),
(3, 2, 2, 1, 39900),
(4, 3, 3, 1, 51900),
(5, 4, 4, 1, 16900),
(6, 5, 2, 1, 39900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_elementos_carrito`
--

CREATE TABLE `tbl_elementos_carrito` (
  `id_elemento_carrito` int(11) NOT NULL,
  `cod_carrito` int(11) DEFAULT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_elementos_carrito`
--

INSERT INTO `tbl_elementos_carrito` (`id_elemento_carrito`, `cod_carrito`, `cod_producto`, `cantidad`) VALUES
(7, 4, 3, 2),
(8, 4, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturas`
--

CREATE TABLE `tbl_facturas` (
  `id_factura` int(11) NOT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `cod_metodo_pago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

CREATE TABLE `tbl_inventario` (
  `id_inv` int(11) NOT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `entradas` int(11) DEFAULT NULL,
  `salidas` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_inventario`
--

INSERT INTO `tbl_inventario` (`id_inv`, `cod_producto`, `entradas`, `salidas`, `stock`, `fecha`) VALUES
(1, 1, 15, 0, 15, '2024-06-20'),
(2, 2, 12, 0, 12, '2024-06-20'),
(3, 3, 6, 0, 6, '2024-06-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_metodo_pago`
--

CREATE TABLE `tbl_metodo_pago` (
  `id_metodo` int(11) NOT NULL,
  `nombre_metodo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_metodo_pago`
--

INSERT INTO `tbl_metodo_pago` (`id_metodo`, `nombre_metodo`) VALUES
(1, NULL),
(2, 'PayPal'),
(3, 'Transferencia Bancaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedidos`
--

CREATE TABLE `tbl_pedidos` (
  `id_pedido` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `total` float NOT NULL,
  `cod_metodo_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_pedidos`
--

INSERT INTO `tbl_pedidos` (`id_pedido`, `cod_cliente`, `fecha_pedido`, `total`, `cod_metodo_pago`) VALUES
(1, 1, '0000-00-00', 2024, 1),
(2, 2, '2024-07-02', 39900, 2),
(3, 4, '2024-07-03', 51900, 1),
(4, 5, '2024-07-04', 16900, 3),
(5, 1, '2024-07-05', 39900, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id_producto` int(11) NOT NULL,
  `cod_categoria` int(11) DEFAULT NULL,
  `nombre_producto` varchar(150) DEFAULT NULL,
  `descripcion_producto` varchar(250) DEFAULT NULL,
  `precio_producto` float NOT NULL,
  `foto1_producto` varchar(200) NOT NULL,
  `foto2_producto` varchar(255) NOT NULL,
  `foto3_producto` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`id_producto`, `cod_categoria`, `nombre_producto`, `descripcion_producto`, `precio_producto`, `foto1_producto`, `foto2_producto`, `foto3_producto`, `stock`) VALUES
(1, 3, 'Cepillo Quita Nudos Deslanador Para Pelo Raza Grande', 'Cepillo deslanador ideal para perros, gatos y conejos de pelo medio a largo. Ayuda a quitar los nudos que se forman en el pelo y a eliminar el pelo muerto evitando que este se acumule, es ideal para las etapas de muda.', 24990, 'Cepillo-Quita-Nudos-Deslanador-Para-Pelo-Raza-Grande.webp', '', '', 15),
(2, 2, 'Juguete Para Gatos, Pista De Tres Niveles, Mascotas', 'En Loviing Store, tus mascotas siempre serán importantes. Los especialistas recomiendan al menos dos sesiones de juego al día con tu gato, ya que esto es muy beneficioso para su salud debido a que lo anima a estar activo, a permanecer ágil y a manten', 39900, 'Juguete Para Gatos, Pista De Tres Niveles, Mascotas.webp', '', '', 12),
(3, 4, 'Camión Cisterna De Impulsó Regalo Niños', 'Diviértete jugando con tus amigos con este Camión Cisterna modelo a escala de 1:50, el camión está hecho de aleación de alta calidad, seguro, duradero y resistente a caídas.', 51900, 'Camión Cisterna De Impulsó Regalo Niños.webp', '', '', 6),
(4, 5, 'Limador Eléctrico De Uñas Para Mascota Perros Gatos', '- Limador Eléctrico.\r\n- Funciona con 2 pilas AA.\r\n- Redondea y Alisa las uñas de su mascota.\r\n- Incluye 3 limas.\r\n\r\nMEDIDAS:\r\nAncho: 2cm\r\nAlto: 17cm\r\nLimador Eléctrico de uñas ideal para tu Mascota.', 16900, 'Limador Eléctrico De Uñas Para Mascota Perros Gatos.webp', '', '', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedor`
--

CREATE TABLE `tbl_proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_empresa` varchar(100) NOT NULL,
  `representante_ventas` varchar(100) NOT NULL,
  `cod_producto` int(11) NOT NULL,
  `direccion_fisica` varchar(20) DEFAULT NULL,
  `correo_proveedor` varchar(40) DEFAULT NULL,
  `tel_proveedor` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_proveedor`
--

INSERT INTO `tbl_proveedor` (`id_proveedor`, `nombre_empresa`, `representante_ventas`, `cod_producto`, `direccion_fisica`, `correo_proveedor`, `tel_proveedor`) VALUES
(1, 'Electrónica del Sur', 'Juan Martínez', 1, 'Av. Principal #123, ', 'ventas@electronicaelsur.com', 595),
(2, 'Importadora Gómez S.A.', 'María Fernández', 2, 'Calle Principal #456', 'contacto@importadoragomez.com.mx', 52),
(3, 'Ferretería La Herradura', 'Pedro Ramírez', 3, 'Carrera 10 #789, Bog', 'ventas@laherraduraferreteria.co', 57),
(4, 'Tecnología Avanzada Ltda.', 'Ana Silva', 4, 'Rua Principal #321, ', 'info@tecnologiaavanzada.com.br', 55),
(5, 'Distribuidora El Faro', 'Luis Pérez', 1, 'Avenida Central #567', 'contacto@distribuidorafaro.co.cr', 506),
(6, 'Muebles y Decoración Castillo', 'Laura Gutiérrez', 2, 'Calle Mayor #234, Ma', 'ventas@mueblescastillo.es', 34),
(7, 'Automotriz Veloz EIRL', 'Carlos López', 3, 'Av. Libertad #890, L', 'contacto@automotrizveloz.com.pe', 51),
(8, 'Textiles del Norte S.A.', 'Patricia Torres', 4, 'Calle Norteña #789, ', 'info@textilesnorte.ec', 593),
(9, 'Equipos Industriales del Sur', 'Martín Sánchez', 1, 'Ave. Industrial #456', 'ventas@equiposindustrialesdelsur.cl', 56),
(10, 'Alimentos Frescos S.A.', 'Julia Martínez', 2, 'Carrera Fresca #123,', 'contacto@alimentosfrescos.com.ar', 54),
(11, 'purina si', 'señor coso', 1, 'coso 231', 'coso@coso.com', 132545656);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipo_documento` varchar(50) DEFAULT NULL,
  `num_documento` varchar(50) DEFAULT NULL,
  `email_usuario` varchar(50) DEFAULT NULL,
  `clave_usuario` varchar(250) DEFAULT NULL,
  `rol_usuario` varchar(50) DEFAULT NULL,
  `estado_usuario` varchar(10) DEFAULT NULL,
  `foto_usuario` varchar(255) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `nombre_usuario`, `genero`, `fecha_nacimiento`, `tipo_documento`, `num_documento`, `email_usuario`, `clave_usuario`, `rol_usuario`, `estado_usuario`, `foto_usuario`, `fecha_creacion`) VALUES
(1, 'Juan', 'Masculino', '2024-05-27', 'C.C', '123', 'juandavidzabalatapiero@gmail.com', '202cb962ac59075b964b07152d234b70', 'Cliente', 'Activo', 'goku.jpg', '2024-05-28'),
(2, 'Jean Carlos', 'Masculino', '2024-05-27', 'C.C', '321', 'b@b', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', 'humungosaurio.png', '2024-05-28'),
(4, 'Karen', 'Femenino', '2024-05-27', 'C.C', '1234', 'kardanielabustospi@gmail.com', '334a25d552ebfd7c012ab097d745e703', 'Cliente', 'Activo', 'eco eco.jpg', '2024-05-28'),
(5, 'Joseph', 'Masculino', '2024-06-04', 'C.C', '312', 'j@j', '950a4152c2b4aa3ad78bdd6b366cc179', 'Cliente', 'Activo', 'goat.jpg', '2024-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ventas`
--

CREATE TABLE `tbl_ventas` (
  `id_venta` int(11) NOT NULL,
  `cod_producto` int(11) DEFAULT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `cod_metodo_pago` int(11) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_ventas`
--

INSERT INTO `tbl_ventas` (`id_venta`, `cod_producto`, `cod_cliente`, `cantidad`, `fecha_venta`, `total`, `cod_metodo_pago`, `estado`) VALUES
(1, 1, 1, 2, '2024-08-02', 49980.00, 2, 'Entregado\r\n                                       '),
(3, 3, 1, 2, '2024-08-02', 103800.00, 2, 'Entregado'),
(4, 2, 1, 3, '2024-08-03', 119700.00, 2, 'Pendiente');

--
-- Disparadores `tbl_ventas`
--
DELIMITER $$
CREATE TRIGGER `calcular_total` BEFORE INSERT ON `tbl_ventas` FOR EACH ROW BEGIN
	DECLARE valor_unitario INT;
    
    SELECT p.precio_producto INTO valor_unitario FROM tbl_productos p WHERE p.id_producto = new.cod_producto;
	SET new.total = new.cantidad * valor_unitario;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rating_productos`
--
ALTER TABLE `rating_productos`
  ADD PRIMARY KEY (`id_rate`),
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `cod_cliente` (`cod_cliente`);

--
-- Indices de la tabla `tbl_carrito`
--
ALTER TABLE `tbl_carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `cod_cliente` (`cod_cliente`);

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tbl_detalle_facturas`
--
ALTER TABLE `tbl_detalle_facturas`
  ADD PRIMARY KEY (`id_detalle_factura`),
  ADD KEY `cod_factura` (`cod_factura`),
  ADD KEY `cod_producto` (`cod_producto`);

--
-- Indices de la tabla `tbl_detalle_pedidos`
--
ALTER TABLE `tbl_detalle_pedidos`
  ADD PRIMARY KEY (`id_detalle_pedido`),
  ADD KEY `cod_pedido` (`cod_pedido`),
  ADD KEY `cod_producto` (`cod_producto`);

--
-- Indices de la tabla `tbl_elementos_carrito`
--
ALTER TABLE `tbl_elementos_carrito`
  ADD PRIMARY KEY (`id_elemento_carrito`),
  ADD KEY `cod_carrito` (`cod_carrito`),
  ADD KEY `cod_producto` (`cod_producto`);

--
-- Indices de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `cod_cliente` (`cod_cliente`),
  ADD KEY `cod_metodo_pago` (`cod_metodo_pago`);

--
-- Indices de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD PRIMARY KEY (`id_inv`),
  ADD KEY `cod_producto` (`cod_producto`);

--
-- Indices de la tabla `tbl_metodo_pago`
--
ALTER TABLE `tbl_metodo_pago`
  ADD PRIMARY KEY (`id_metodo`);

--
-- Indices de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `cod_cliente` (`cod_cliente`),
  ADD KEY `cod_metodo_pago` (`cod_metodo_pago`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `cod_categoria` (`cod_categoria`);

--
-- Indices de la tabla `tbl_proveedor`
--
ALTER TABLE `tbl_proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `cod_producto` (`cod_producto`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `cod_cliente` (`cod_cliente`),
  ADD KEY `cod_metodo_pago` (`cod_metodo_pago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rating_productos`
--
ALTER TABLE `rating_productos`
  MODIFY `id_rate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_carrito`
--
ALTER TABLE `tbl_carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_detalle_facturas`
--
ALTER TABLE `tbl_detalle_facturas`
  MODIFY `id_detalle_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_detalle_pedidos`
--
ALTER TABLE `tbl_detalle_pedidos`
  MODIFY `id_detalle_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_elementos_carrito`
--
ALTER TABLE `tbl_elementos_carrito`
  MODIFY `id_elemento_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  MODIFY `id_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_metodo_pago`
--
ALTER TABLE `tbl_metodo_pago`
  MODIFY `id_metodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_proveedor`
--
ALTER TABLE `tbl_proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rating_productos`
--
ALTER TABLE `rating_productos`
  ADD CONSTRAINT `rating_productos_ibfk_1` FOREIGN KEY (`cod_producto`) REFERENCES `tbl_productos` (`id_producto`),
  ADD CONSTRAINT `rating_productos_ibfk_2` FOREIGN KEY (`cod_cliente`) REFERENCES `tbl_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `tbl_carrito`
--
ALTER TABLE `tbl_carrito`
  ADD CONSTRAINT `tbl_carrito_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `tbl_usuarios` (`id_usuario`);

--
-- Filtros para la tabla `tbl_detalle_facturas`
--
ALTER TABLE `tbl_detalle_facturas`
  ADD CONSTRAINT `tbl_detalle_facturas_ibfk_1` FOREIGN KEY (`cod_factura`) REFERENCES `tbl_facturas` (`id_factura`),
  ADD CONSTRAINT `tbl_detalle_facturas_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `tbl_productos` (`id_producto`);

--
-- Filtros para la tabla `tbl_detalle_pedidos`
--
ALTER TABLE `tbl_detalle_pedidos`
  ADD CONSTRAINT `tbl_detalle_pedidos_ibfk_1` FOREIGN KEY (`cod_pedido`) REFERENCES `tbl_pedidos` (`id_pedido`),
  ADD CONSTRAINT `tbl_detalle_pedidos_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `tbl_productos` (`id_producto`);

--
-- Filtros para la tabla `tbl_elementos_carrito`
--
ALTER TABLE `tbl_elementos_carrito`
  ADD CONSTRAINT `tbl_elementos_carrito_ibfk_1` FOREIGN KEY (`cod_carrito`) REFERENCES `tbl_carrito` (`id_carrito`),
  ADD CONSTRAINT `tbl_elementos_carrito_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `tbl_productos` (`id_producto`);

--
-- Filtros para la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD CONSTRAINT `tbl_facturas_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `tbl_usuarios` (`id_usuario`),
  ADD CONSTRAINT `tbl_facturas_ibfk_2` FOREIGN KEY (`cod_metodo_pago`) REFERENCES `tbl_metodo_pago` (`id_metodo`);

--
-- Filtros para la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD CONSTRAINT `tbl_inventario_ibfk_1` FOREIGN KEY (`cod_producto`) REFERENCES `tbl_productos` (`id_producto`);

--
-- Filtros para la tabla `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD CONSTRAINT `tbl_pedidos_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `tbl_usuarios` (`id_usuario`),
  ADD CONSTRAINT `tbl_pedidos_ibfk_2` FOREIGN KEY (`cod_metodo_pago`) REFERENCES `tbl_metodo_pago` (`id_metodo`);

--
-- Filtros para la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD CONSTRAINT `tbl_productos_ibfk_1` FOREIGN KEY (`cod_categoria`) REFERENCES `tbl_categorias` (`id_categoria`);

--
-- Filtros para la tabla `tbl_proveedor`
--
ALTER TABLE `tbl_proveedor`
  ADD CONSTRAINT `tbl_proveedor_ibfk_1` FOREIGN KEY (`cod_producto`) REFERENCES `tbl_productos` (`id_producto`);

--
-- Filtros para la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD CONSTRAINT `tbl_ventas_ibfk_1` FOREIGN KEY (`cod_producto`) REFERENCES `tbl_productos` (`id_producto`),
  ADD CONSTRAINT `tbl_ventas_ibfk_2` FOREIGN KEY (`cod_cliente`) REFERENCES `tbl_usuarios` (`id_usuario`),
  ADD CONSTRAINT `tbl_ventas_ibfk_3` FOREIGN KEY (`cod_metodo_pago`) REFERENCES `tbl_metodo_pago` (`id_metodo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

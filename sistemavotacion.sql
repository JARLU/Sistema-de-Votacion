-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2015 a las 18:36:27
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemavotacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apertura`
--

CREATE TABLE IF NOT EXISTS `apertura` (
`id` int(11) NOT NULL,
  `presidencial` varchar(15) NOT NULL,
  `diputados` varchar(15) NOT NULL,
  `alcaldes` varchar(15) NOT NULL,
  `anio` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
`id` int(11) NOT NULL,
  `tipo_cargo` varchar(25) NOT NULL,
  `year_electoral` varchar(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `tipo_cargo`, `year_electoral`) VALUES
(2, 'Alcaldes', '2015'),
(3, 'Diputados', '2015');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coalicion_departamento`
--

CREATE TABLE IF NOT EXISTS `coalicion_departamento` (
`idCoalicion_departamento` int(11) NOT NULL,
  `id_Localidad` int(11) NOT NULL,
  `id_depa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coalicion_municipal`
--

CREATE TABLE IF NOT EXISTS `coalicion_municipal` (
`idCoalicion_Muni` int(11) NOT NULL,
  `idLocalidad` int(11) DEFAULT NULL,
  `idMunicipio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `codigo` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `codigo`) VALUES
(1, 'Ahuachapán', '01'),
(2, 'Santa Ana', '02'),
(3, 'Sonsonate', '03'),
(4, 'Chalatenango', '04'),
(5, 'La Libertad', '05'),
(6, 'San Salvador', '06'),
(7, 'Cuscatlán', '07'),
(8, 'La Paz', '08'),
(9, 'Cabañas', '09'),
(10, 'San Vicente', '10'),
(11, 'Usulután', '11'),
(12, 'San Miguel', '12'),
(13, 'Morazán', '13'),
(14, 'La Unión', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_coalicion`
--

CREATE TABLE IF NOT EXISTS `detalle_coalicion` (
`idDetalle_Coalicion` int(11) NOT NULL,
  `id_coalicion` int(11) NOT NULL DEFAULT '0',
  `id_inscripcion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `	inscrip_alcalde`
--

CREATE TABLE IF NOT EXISTS `	inscrip_alcalde` (
`id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `genero` varchar(12) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `partido` varchar(20) NOT NULL,
  `id_depa` varchar(20) NOT NULL,
  `id_muni` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrip_candi`
--

CREATE TABLE IF NOT EXISTS `inscrip_candi` (
`id` int(11) NOT NULL,
  `dui` int(10) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `id_depa` int(11) NOT NULL,
  `id_muni` int(11) NOT NULL,
  `tipo_candidatura` varchar(15) NOT NULL,
  `id_inscrip_parti` int(11) NOT NULL,
  `id_depas` varchar(25) NOT NULL,
  `id_munis` varchar(25) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrip_diputado`
--

CREATE TABLE IF NOT EXISTS `inscrip_diputado` (
`id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `candidatura` varchar(25) NOT NULL,
  `partido` varchar(25) NOT NULL,
  `coalision` varchar(20) NOT NULL,
  `departamento` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscrip_diputado`
--

INSERT INTO `inscrip_diputado` (`id`, `nombres`, `apellidos`, `dui`, `direccion`, `candidatura`, `partido`, `coalision`, `departamento`) VALUES
(1, 'kjadjasd', 'xzczxc', '02656565-6', 'sdxczvxzvc', 'Partido', '10', '10', '03'),
(2, 'xvxcb', 'xvbcvb', '00000036-5', 'rh g', 'Partido', '15', '16', '02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrip_presidente`
--

CREATE TABLE IF NOT EXISTS `inscrip_presidente` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `candidatura` varchar(20) NOT NULL,
  `partido` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscri_partido`
--

CREATE TABLE IF NOT EXISTS `inscri_partido` (
`id` int(11) NOT NULL,
  `nombre_partido` varchar(50) NOT NULL,
  `bandera` mediumblob NOT NULL,
  `dui` varchar(11) NOT NULL,
  `representante` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscri_partido`
--

INSERT INTO `inscri_partido` (`id`, `nombre_partido`, `bandera`, `dui`, `representante`) VALUES
(15, 'HJG', 0x696d6167656e2f5f63617269746173355b375d352e6a7067, '03232323-2', 'Carlos'),
(16, 'FSDF', 0x696d6167656e2f3438373331395f3133363939383237363433343736355f3130303030333733373739363036315f3135323931345f323036353632313234315f6e2e6a7067, '00000126-5', 'svcx xbvcbxvb'),
(17, 'AQSDAS', 0x696d6167656e2f383134303832616e696d652d31302e6a7067, '00001365-2', 'xvzcxc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE IF NOT EXISTS `localidad` (
`id_localidad` int(11) NOT NULL,
  `localidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `codigo` varchar(4) NOT NULL,
  `codigo_depto` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`, `codigo`, `codigo_depto`) VALUES
(1, 'Ahuachapán', '0101', '01'),
(2, 'Apaneca', '0102', '01'),
(3, 'Atiquizaya', '0103', '01'),
(4, 'Concepción de Ataco', '0104', '01'),
(5, 'El Refugio', '0105', '01'),
(6, 'Guaymango', '0106', '01'),
(7, 'Jujutla', '0107', '01'),
(8, 'San Francisco Menéndez', '0108', '01'),
(9, 'San Lorenzo', '0109', '01'),
(10, 'San Pedro Puxtla', '0110', '01'),
(11, 'Tacuba', '0111', '01'),
(12, 'Turín', '0112', '01'),
(13, 'Candelaria de la Frontera', '0201', '02'),
(14, 'Coatepeque', '0202', '02'),
(15, 'Chalchuapa', '0203', '02'),
(16, 'El Congo', '0204', '02'),
(17, 'El Porvenir', '0205', '02'),
(18, 'Masahuat', '0206', '02'),
(19, 'Metapán', '0207', '02'),
(20, 'San Antonio Pajonal', '0208', '02'),
(21, 'San Sebastián Salitrillo', '0209', '02'),
(22, 'Santa Ana', '0210', '02'),
(23, 'Santa Rosa Guachipilín', '0211', '02'),
(24, 'Santiago de la Frontera', '0212', '02'),
(25, 'Texistepeque', '0213', '02'),
(26, 'Acajutla', '0301', '03'),
(27, 'Armenia', '0302', '03'),
(28, 'Caluco', '0303', '03'),
(29, 'Cuisnahuat', '0304', '03'),
(30, 'Santa Isabel Ishuatán', '0305', '03'),
(31, 'Izalco', '0306', '03'),
(32, 'Juayúa', '0307', '03'),
(33, 'Nahuizalco', '0308', '03'),
(34, 'Nahulingo', '0309', '03'),
(35, 'Salcoatitán', '0310', '03'),
(36, 'San Antonio del Monte', '0311', '03'),
(37, 'San Julián', '0312', '03'),
(38, 'Santa Catarina Masahuat', '0313', '03'),
(39, 'Santo Domingo de Guzmán', '0314', '03'),
(40, 'Sonsonate', '0315', '03'),
(41, 'Sonzacate', '0316', '03'),
(42, 'Agua Caliente', '0401', '04'),
(43, 'Arcatao', '0402', '04'),
(44, 'Azacualpa', '0403', '04'),
(45, 'Citalá', '0404', '04'),
(46, 'Comalapa', '0405', '04'),
(47, 'Concepción Quezaltepeque', '0406', '04'),
(48, 'Chalatenango', '0407', '04'),
(49, 'Dulce Nombre de María', '0408', '04'),
(50, 'El Carrizal', '0409', '04'),
(51, 'El Paraíso', '0410', '04'),
(52, 'La Laguna', '0411', '04'),
(53, 'La Palma', '0412', '04'),
(54, 'La Reina', '0413', '04'),
(55, 'Las Vueltas', '0414', '04'),
(56, 'Nombre de Jesús', '0415', '04'),
(57, 'Nueva Concepción', '0416', '04'),
(58, 'Nueva Trinidad', '0417', '04'),
(59, 'Ojos de Agua', '0418', '04'),
(60, 'Potonico', '0419', '04'),
(61, 'San Antonio de la Cruz', '0420', '04'),
(62, 'San Antonio Los Ranchos', '0421', '04'),
(63, 'San Fernando', '0422', '04'),
(64, 'San Francisco Lempa', '0423', '04'),
(65, 'San Francisco Morazán', '0424', '04'),
(66, 'San Ignacio', '0425', '04'),
(67, 'San Isidro Labrador', '0426', '04'),
(68, 'San José Cancasque', '0427', '04'),
(69, 'San José Las Flores ', '0428', '04'),
(70, 'San Luis del Carmen', '0429', '04'),
(71, 'San Miguel de Mercedes', '0430', '04'),
(72, 'San Rafael', '0431', '04'),
(73, 'Santa Rita', '0432', '04'),
(74, 'Tejutla', '0433', '04'),
(75, 'Antiguo Cuscatlán', '0501', '05'),
(76, 'Ciudad Arce', '0502', '05'),
(77, 'Colón', '0503', '05'),
(78, 'Comasagua', '0504', '05'),
(79, 'Chiltiupán', '0505', '05'),
(80, 'Huizúcar', '0506', '05'),
(81, 'Jayaque', '0507', '05'),
(82, 'Jicalapa', '0508', '05'),
(83, 'La Libertad', '0509', '05'),
(84, 'Nuevo Cuscatlán', '0510', '05'),
(85, 'Santa Tecla', '0511', '05'),
(86, 'Quezaltepeque', '0512', '05'),
(87, 'Sacacoyo', '0513', '05'),
(88, 'San José Villanueva', '0514', '05'),
(89, 'San Juan Opico', '0515', '05'),
(90, 'San Matías', '0516', '05'),
(91, 'San Pablo Tacachico', '0517', '05'),
(92, 'Tamanique', '0518', '05'),
(93, 'Talnique', '0519', '05'),
(94, 'Teotepeque', '0520', '05'),
(95, 'Tepecoyo', '0521', '05'),
(96, 'Zaragoza', '0522', '05'),
(97, 'Aguilares', '0601', '06'),
(98, 'Apopa', '0602', '06'),
(99, 'Ayutuxtepeque', '0603', '06'),
(100, 'Cuscatancingo', '0604', '06'),
(101, 'El Paisnal', '0605', '06'),
(102, 'Guazapa', '0606', '06'),
(103, 'Ilopango', '0607', '06'),
(104, 'Mejicanos', '0608', '06'),
(105, 'Nejapa', '0609', '06'),
(106, 'Panchimalco', '0610', '06'),
(107, 'Rosario de Mora', '0611', '06'),
(108, 'San Marcos', '0612', '06'),
(109, 'San Martín', '0613', '06'),
(110, 'San Salvador', '0614', '06'),
(111, 'Santiago Texacuangos', '0615', '06'),
(112, 'Santo Tomás', '0616', '06'),
(113, 'Soyapango', '0617', '06'),
(114, 'Tonacatepeque', '0618', '06'),
(115, 'Delgado', '0619', '06'),
(116, 'Candelaria', '0701', '07'),
(117, 'Cojutepeque', '0702', '07'),
(118, 'El Carmen', '0703', '07'),
(119, 'El Rosario', '0704', '07'),
(120, 'Monte San Juan', '0705', '07'),
(121, 'Oratorio de Concepción', '0706', '07'),
(122, 'San Bartolomé Perulapía', '0707', '07'),
(123, 'San Cristóbal', '0708', '07'),
(124, 'San José Guayabal', '0709', '07'),
(125, 'San Pedro Perulapán', '0710', '07'),
(126, 'San Rafael Cedros', '0711', '07'),
(127, 'San Ramón', '0712', '07'),
(128, 'Santa Cruz Analquito', '0713', '07'),
(129, 'Santa Cruz Michapa', '0714', '07'),
(130, 'Suchitoto', '0715', '07'),
(131, 'Tenancingo', '0716', '07'),
(132, 'Cuyultitán', '0801', '08'),
(133, 'El Rosario', '0802', '08'),
(134, 'Jerusalén', '0803', '08'),
(135, 'Mercedes La Ceiba', '0804', '08'),
(136, 'Olocuilta', '0805', '08'),
(137, 'Paraíso de Osorio', '0806', '08'),
(138, 'San Antonio Masahuat', '0807', '08'),
(139, 'San Emigdio', '0808', '08'),
(140, 'San Francisco Chinameca', '0809', '08'),
(141, 'San Juan Nonualco', '0810', '08'),
(142, 'San Juan Talpa', '0811', '08'),
(143, 'San Juan Tepezontes', '0812', '08'),
(144, 'San Luis Talpa', '0813', '08'),
(145, 'San Miguel Tepezontes', '0814', '08'),
(146, 'San Pedro Masahuat', '0815', '08'),
(147, 'San Pedro Nonualco', '0816', '08'),
(148, 'San Rafael Obrajuelo', '0817', '08'),
(149, 'Santa María Ostuma', '0818', '08'),
(150, 'Santiago Nonualco', '0819', '08'),
(151, 'Tapalhuaca', '0820', '08'),
(152, 'Zacatecoluca', '0821', '08'),
(153, 'San Luis La Herradura', '0822', '08'),
(154, 'Cinquera', '0901', '09'),
(155, 'Guacotecti', '0902', '09'),
(156, 'Ilobasco', '0903', '09'),
(157, 'Jutiapa', '0904', '09'),
(158, 'San Isidro', '0905', '09'),
(159, 'Sensuntepeque', '0906', '09'),
(160, 'Tejutepeque', '0907', '09'),
(161, 'Victoria', '0908', '09'),
(162, 'Villa Dolores', '0909', '09'),
(163, 'Apastepeque', '1001', '10'),
(164, 'Guadalupe', '1002', '10'),
(165, 'San Cayetano Istepeque', '1003', '10'),
(166, 'Santa Clara', '1004', '10'),
(167, 'Santo Domingo', '1005', '10'),
(168, 'San Esteban Catarina', '1006', '10'),
(169, 'San Ildefonso', '1007', '10'),
(170, 'San Lorenzo', '1008', '10'),
(171, 'San Sebastián', '1009', '10'),
(172, 'San Vicente', '1010', '10'),
(173, 'Tecoluca', '1011', '10'),
(174, 'Tepetitán', '1012', '10'),
(175, 'Verapaz', '1013', '10'),
(176, 'Alegría', '1101', '11'),
(177, 'Berlín', '1102', '11'),
(178, 'California', '1103', '11'),
(179, 'Concepción Batres', '1104', '11'),
(180, 'El Triunfo', '1105', '11'),
(181, 'Ereguayquín', '1106', '11'),
(182, 'Estanzuelas', '1107', '11'),
(183, 'Jiquilisco', '1108', '11'),
(184, 'Jucuapa', '1109', '11'),
(185, 'Jucuarán', '1110', '11'),
(186, 'Mercedes Umaña', '1111', '11'),
(187, 'Nueva Granada', '1112', '11'),
(188, 'Ozatlán', '1113', '11'),
(189, 'Puerto El Triunfo', '1114', '11'),
(190, 'San Agustín', '1115', '11'),
(191, 'San Buenaventura', '1116', '11'),
(192, 'San Dionisio', '1117', '11'),
(193, 'Santa Elena', '1118', '11'),
(194, 'San Francisco Javier', '1119', '11'),
(195, 'Santa María', '1120', '11'),
(196, 'Santiago de María', '1121', '11'),
(197, 'Tecapán', '1122', '11'),
(198, 'Usulután', '1123', '11'),
(199, 'Carolina', '1201', '12'),
(200, 'Ciudad Barrios', '1202', '12'),
(201, 'Comacarán', '1203', '12'),
(202, 'Chapeltique', '1204', '12'),
(203, 'Chinameca', '1205', '12'),
(204, 'Chirilagua', '1206', '12'),
(205, 'El Tránsito', '1207', '12'),
(206, 'Lolotique', '1208', '12'),
(207, 'Moncagua', '1209', '12'),
(208, 'Nueva Guadalupe', '1210', '12'),
(209, 'Nuevo Edén de San Juan', '1211', '12'),
(210, 'Quelepa', '1212', '12'),
(211, 'San Antonio del Mosco', '1213', '12'),
(212, 'San Gerardo', '1214', '12'),
(213, 'San Jorge', '1215', '12'),
(214, 'San Luis de la Reina', '1216', '12'),
(215, 'San Miguel', '1217', '12'),
(216, 'San Rafael Oriente', '1218', '12'),
(217, 'Sesori', '1219', '12'),
(218, 'Uluazapa', '1220', '12'),
(219, 'Arambala', '1301', '13'),
(220, 'Cacaopera', '1302', '13'),
(221, 'Corinto', '1303', '13'),
(222, 'Chilanga', '1304', '13'),
(223, 'Delicias de Concepción', '1305', '13'),
(224, 'El Divisadero', '1306', '13'),
(225, 'El Rosario', '1307', '13'),
(226, 'Gualococti', '1308', '13'),
(227, 'Guatajiagua', '1309', '13'),
(228, 'Joateca', '1310', '13'),
(229, 'Jocoaitique', '1311', '13'),
(230, 'Jocoro', '1312', '13'),
(231, 'Lolotiquillo', '1313', '13'),
(232, 'Meanguera', '1314', '13'),
(233, 'Osicala', '1315', '13'),
(234, 'Perquín', '1316', '13'),
(235, 'San Carlos', '1317', '13'),
(236, 'San Fernando', '1318', '13'),
(237, 'San Francisco Gotera', '1319', '13'),
(238, 'San Isidro', '1320', '13'),
(239, 'San Simón', '1321', '13'),
(240, 'Sensembra', '1322', '13'),
(241, 'Sociedad', '1323', '13'),
(242, 'Torola', '1324', '13'),
(243, 'Yamabal', '1325', '13'),
(244, 'Yoloaiquín', '1326', '13'),
(245, 'Anamorós', '1401', '14'),
(246, 'Bolívar', '1402', '14'),
(247, 'Concepción de Oriente', '1403', '14'),
(248, 'Conchagua', '1404', '14'),
(249, 'El Carmen', '1405', '14'),
(250, 'El Sauce', '1406', '14'),
(251, 'Intipucá', '1407', '14'),
(252, 'La Unión', '1408', '14'),
(253, 'Lilisque', '1409', '14'),
(254, 'Meanguera del Golfo', '1410', '14'),
(255, 'Nueva Esparta', '1411', '14'),
(256, 'Pasaquina', '1412', '14'),
(257, 'Polorós', '1413', '14'),
(258, 'San Alejo', '1414', '14'),
(259, 'San José', '1415', '14'),
(260, 'Santa Rosa de Lima', '1416', '14'),
(261, 'Yayantique', '1417', '14'),
(262, 'Yucuaiquín', '1418', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombre_coalicion`
--

CREATE TABLE IF NOT EXISTS `nombre_coalicion` (
`id_coalicion` int(11) NOT NULL,
  `nombre_coalicion` varchar(50) NOT NULL,
  `localidad` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_votante`
--

CREATE TABLE IF NOT EXISTS `registro_votante` (
`id` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `foto` mediumblob,
  `genero` varchar(15) NOT NULL,
  `fecha` varchar(12) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `id_depa` int(11) NOT NULL,
  `id_muni` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_votante`
--

INSERT INTO `registro_votante` (`id`, `dui`, `nombre`, `apellido`, `foto`, `genero`, `fecha`, `direccion`, `id_depa`, `id_muni`, `estado`) VALUES
(10, '00000000-7', 'Jose Ismael', 'Arias Reyes', 0x686f6c612e2e6a7067, 'Masculino', '19/6/2015', 'Colonia Buena Vista', 2, 205, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `rango` enum('user','admin') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `clave`, `rango`) VALUES
(3, 'isma09', '123456', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto`
--

CREATE TABLE IF NOT EXISTS `voto` (
`id` int(11) NOT NULL,
  `nombre_partido` varchar(100) NOT NULL,
  `candidatura` varchar(50) NOT NULL,
  `codigo_depa` int(11) NOT NULL,
  `codigo_muni` int(11) NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `voto`
--

INSERT INTO `voto` (`id`, `nombre_partido`, `candidatura`, `codigo_depa`, `codigo_muni`, `voto`) VALUES
(31, 'FSDF', 'Presidentes', 10, 20, 5),
(32, 'AQSDAS', 'Alcaldes', 10, 20, 5),
(33, 'AQSDAS', 'Diputados', 10, 20, 5),
(34, 'FSDF', 'Presidentes', 5, 10, 4),
(35, 'HJG', 'Alcaldes', 5, 10, 4),
(36, 'AQSDAS', 'Diputados', 5, 10, 4),
(37, 'FSDF', 'Presidentes', 5, 10, 3),
(38, 'AQSDAS', 'Alcaldes', 5, 10, 3),
(39, 'AQSDAS', 'Diputados', 5, 10, 3),
(40, 'FSDF', 'Presidentes', 5, 10, 2),
(41, 'AQSDAS', 'Alcaldes', 5, 10, 2),
(42, 'AQSDAS', 'Diputados', 5, 10, 2),
(43, 'HJG', 'Presidentes', 2, 204, 1),
(44, 'FSDF', 'Alcaldes', 2, 204, 1),
(45, 'AQSDAS', 'Diputados', 2, 204, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apertura`
--
ALTER TABLE `apertura`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coalicion_departamento`
--
ALTER TABLE `coalicion_departamento`
 ADD PRIMARY KEY (`idCoalicion_departamento`), ADD KEY `id_Localidad` (`id_Localidad`,`id_depa`), ADD KEY `id_Localidad_2` (`id_Localidad`), ADD KEY `id_depa` (`id_depa`);

--
-- Indices de la tabla `coalicion_municipal`
--
ALTER TABLE `coalicion_municipal`
 ADD PRIMARY KEY (`idCoalicion_Muni`), ADD KEY `idLocalidad` (`idLocalidad`), ADD KEY `idMunicipio` (`idMunicipio`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `codigo_UNIQUE` (`codigo`);

--
-- Indices de la tabla `detalle_coalicion`
--
ALTER TABLE `detalle_coalicion`
 ADD PRIMARY KEY (`idDetalle_Coalicion`,`id_coalicion`), ADD KEY `id_coalicion` (`id_coalicion`), ADD KEY `id_inscripcion` (`id_inscripcion`);

--
-- Indices de la tabla `	inscrip_alcalde`
--
ALTER TABLE `	inscrip_alcalde`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscrip_candi`
--
ALTER TABLE `inscrip_candi`
 ADD PRIMARY KEY (`id`), ADD KEY `id_muni` (`id_muni`), ADD KEY `id_depa` (`id_depa`), ADD KEY `id_muni_2` (`id_muni`), ADD KEY `id_inscrip_parti` (`id_inscrip_parti`), ADD KEY `id_depas` (`id_depas`), ADD KEY `id_munis` (`id_munis`), ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `inscrip_diputado`
--
ALTER TABLE `inscrip_diputado`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscrip_presidente`
--
ALTER TABLE `inscrip_presidente`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscri_partido`
--
ALTER TABLE `inscri_partido`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
 ADD PRIMARY KEY (`id_localidad`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `codigo_UNIQUE` (`codigo`);

--
-- Indices de la tabla `nombre_coalicion`
--
ALTER TABLE `nombre_coalicion`
 ADD PRIMARY KEY (`id_coalicion`);

--
-- Indices de la tabla `registro_votante`
--
ALTER TABLE `registro_votante`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `dui` (`dui`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `voto`
--
ALTER TABLE `voto`
 ADD PRIMARY KEY (`id`), ADD KEY `codigo_depa` (`codigo_depa`), ADD KEY `codigo_muni` (`codigo_muni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apertura`
--
ALTER TABLE `apertura`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `coalicion_departamento`
--
ALTER TABLE `coalicion_departamento`
MODIFY `idCoalicion_departamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `coalicion_municipal`
--
ALTER TABLE `coalicion_municipal`
MODIFY `idCoalicion_Muni` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `detalle_coalicion`
--
ALTER TABLE `detalle_coalicion`
MODIFY `idDetalle_Coalicion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `	inscrip_alcalde`
--
ALTER TABLE `	inscrip_alcalde`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inscrip_candi`
--
ALTER TABLE `inscrip_candi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inscrip_diputado`
--
ALTER TABLE `inscrip_diputado`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `inscrip_presidente`
--
ALTER TABLE `inscrip_presidente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `inscri_partido`
--
ALTER TABLE `inscri_partido`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
MODIFY `id_localidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=263;
--
-- AUTO_INCREMENT de la tabla `nombre_coalicion`
--
ALTER TABLE `nombre_coalicion`
MODIFY `id_coalicion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registro_votante`
--
ALTER TABLE `registro_votante`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `voto`
--
ALTER TABLE `voto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coalicion_departamento`
--
ALTER TABLE `coalicion_departamento`
ADD CONSTRAINT `coalicion_departamento_ibfk_1` FOREIGN KEY (`id_Localidad`) REFERENCES `localidad` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `coalicion_departamento_ibfk_2` FOREIGN KEY (`id_depa`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `coalicion_municipal`
--
ALTER TABLE `coalicion_municipal`
ADD CONSTRAINT `coalicion_municipal_ibfk_1` FOREIGN KEY (`idCoalicion_Muni`) REFERENCES `nombre_coalicion` (`id_coalicion`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `coalicion_municipal_ibfk_2` FOREIGN KEY (`idLocalidad`) REFERENCES `localidad` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `coalicion_municipal_ibfk_3` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_coalicion`
--
ALTER TABLE `detalle_coalicion`
ADD CONSTRAINT `detalle_coalicion_ibfk_1` FOREIGN KEY (`id_coalicion`) REFERENCES `nombre_coalicion` (`id_coalicion`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `detalle_coalicion_ibfk_2` FOREIGN KEY (`id_inscripcion`) REFERENCES `departamentos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscrip_candi`
--
ALTER TABLE `inscrip_candi`
ADD CONSTRAINT `inscrip_candi_ibfk_3` FOREIGN KEY (`id_inscrip_parti`) REFERENCES `inscri_partido` (`id`),
ADD CONSTRAINT `inscrip_candi_ibfk_4` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

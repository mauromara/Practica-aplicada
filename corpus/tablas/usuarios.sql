/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : olgasant_corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-24 18:21:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_documento` varchar(2) DEFAULT NULL,
  `numero_documento` int(16) DEFAULT NULL,
  `primer_nombre` varchar(20) DEFAULT NULL,
  `segundo_nombre` varchar(20) DEFAULT NULL,
  `primer_apellido` varchar(20) DEFAULT NULL,
  `segundo_apellido` varchar(20) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL,
  `id_tipo_usuario` int(20) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT 0,
  `fecha_genera` datetime DEFAULT NULL,
  `fecha_modifica` datetime DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'CC', '3159052', 'Luis', 'Orlando', 'Ballen', 'Garcia', 'calle 2 No 20-52', '2525255', '1', '1', '0000-00-00 00:00:00', null, '123456', 'orlando7421@hotmail.com');
INSERT INTO `usuarios` VALUES ('2', 'CC', '2565656', 'Yor', 'Gladys', 'Olaya', null, 'DDD', '44444', '2', '1', null, null, '123456', 'yorgladysolaya@hotmail.com');
INSERT INTO `usuarios` VALUES ('3', 'CC', '1019993715', 'Mauricio', null, 'Moreno', 'Parada', 'dd', '6969696', '2', '1', null, null, '123456', 'mauromarahc@hotmail.com');
INSERT INTO `usuarios` VALUES ('4', 'CC', '20897155', 'DUVIS', 'YADIRA', 'BALLEN ', 'GARCIA', '5555', '55555', '2', '1', null, null, '123456', 'duvis_hotmail.com');
INSERT INTO `usuarios` VALUES ('5', 'CC', '37444469', 'LIZ', null, 'GIL', null, '111', '111', '3', '1', null, null, '123456', 'liz.gil@hotmail.com');
INSERT INTO `usuarios` VALUES ('6', 'CC', '10101010', 'JORGE', 'JAVIER', 'TORRES', 'SUAREZ', '111', '111', '3', '1', null, null, '123456', 'JORGE.TORRES@GMAIL.COM');
INSERT INTO `usuarios` VALUES ('7', 'CC', '987654', 'ANA', 'MARIA', 'CELY', 'CARDENAS', '11', '11', '3', '1', null, null, '123456', 'ANA.CELY@CANCER.GOV.CO');
INSERT INTO `usuarios` VALUES ('8', 'CC', '258369', 'LUISA', 'MARIA', 'ARCE', 'LOPEZ', '11', '11', '3', '1', null, null, '123456', 'LUIS.ARCE@GMAIL.COM');

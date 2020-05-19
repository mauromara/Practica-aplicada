/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : olgasant_corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-13 06:48:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_Usuario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_doc` varchar(2) DEFAULT NULL,
  `documento` int(16) DEFAULT NULL,
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
  PRIMARY KEY (`id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', null, null, 'Luis', 'Orlando', 'Ballen', 'Garcia', 'calle 2 No 20-52', '2525255', '1', '1', '0000-00-00 00:00:00', null, '123456', 'orlando7421@hotmail.com');

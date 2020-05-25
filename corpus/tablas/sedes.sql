/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : olgasant_corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-24 18:21:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sedes
-- ----------------------------
DROP TABLE IF EXISTS `sedes`;
CREATE TABLE `sedes` (
  `id_sede` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_sede` varchar(50) DEFAULT NULL,
  `ubicacion_sede` varchar(150) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  `estado_sede` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sedes
-- ----------------------------
INSERT INTO `sedes` VALUES ('1', 'Bogotá', 'Bogotá', 'Calle 2 Carrera 3', '2565656', '1');
INSERT INTO `sedes` VALUES ('2', 'Cajica', 'Cajica', 'Calle 165 No 9-25', '5656989', '1');
INSERT INTO `sedes` VALUES ('3', 'Zipaquira', 'Zipaquira', null, null, null);
INSERT INTO `sedes` VALUES ('4', 'Facatativa', 'Facatativa', null, null, null);
INSERT INTO `sedes` VALUES ('5', 'Anolaima', 'Anolaima', null, null, null);

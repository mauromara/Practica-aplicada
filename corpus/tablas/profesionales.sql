/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : olgasant_corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-24 18:21:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for profesionales
-- ----------------------------
DROP TABLE IF EXISTS `profesionales`;
CREATE TABLE `profesionales` (
  `id_profesional` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_sede` int(11) DEFAULT NULL,
  `id_profesion` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombres` varchar(150) DEFAULT NULL,
  `apellidos` varchar(150) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_profesional`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profesionales
-- ----------------------------
INSERT INTO `profesionales` VALUES ('5', '1', '1', '5', 'LIZ', 'GIL', null, null);
INSERT INTO `profesionales` VALUES ('6', '1', '1', '6', 'JORGE', 'TORRES', null, null);
INSERT INTO `profesionales` VALUES ('7', '1', '1', '7', 'ANA', 'CELY', null, null);
INSERT INTO `profesionales` VALUES ('8', '1', '1', '8', 'LUISA', 'ARCE', null, null);

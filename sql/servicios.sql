/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-07 20:44:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for servicios
-- ----------------------------
DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `id_servicio` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_servicio` varchar(7) DEFAULT NULL,
  `nombre_servicio` varchar(200) DEFAULT NULL,
  `valor_servicio` double(15,0) DEFAULT NULL,
  `estado_servicio` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicios
-- ----------------------------

/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : olgasant_corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-24 18:20:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for citas
-- ----------------------------
DROP TABLE IF EXISTS `citas`;
CREATE TABLE `citas` (
  `id_cita` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_profesional` int(11) DEFAULT NULL,
  `id_usuario_genera` int(11) DEFAULT NULL,
  `id_usuario_modifica` int(11) DEFAULT NULL,
  `id_sede` int(11) DEFAULT NULL,
  `fecha_cita` date DEFAULT NULL,
  `hora_cita` time DEFAULT NULL,
  `estado_cita` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id_cita`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of citas
-- ----------------------------
INSERT INTO `citas` VALUES ('1', '5', '3', '3', '1', '2020-05-27', '08:00:00', '1');
INSERT INTO `citas` VALUES ('2', '5', '2', '5', '2', '2020-05-30', '09:00:00', '1');
INSERT INTO `citas` VALUES ('3', '6', '3', '8', '3', '2020-05-31', '14:00:00', '1');
INSERT INTO `citas` VALUES ('4', '5', '3', null, '4', '2020-05-30', '14:00:00', '1');

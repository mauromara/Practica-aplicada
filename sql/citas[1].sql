/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-07 20:38:56
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
  `fecha_cita` date DEFAULT NULL,
  `hora_cita` time DEFAULT NULL,
  `estado_cita` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id_cita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of citas
-- ----------------------------

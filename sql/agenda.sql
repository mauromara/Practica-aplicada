/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-07 20:35:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agenda
-- ----------------------------
DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda` (
  `id_agenda` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_profesional` int(11) DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL,
  `fecha_agenda` date DEFAULT NULL,
  `hora_agenda` time DEFAULT NULL,
  `estado_agenda` varchar(1) DEFAULT NULL,
  `sede_agenda` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agenda
-- ----------------------------

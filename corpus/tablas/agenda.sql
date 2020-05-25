/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : olgasant_corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-24 18:20:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agenda
-- ----------------------------
DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda` (
  `id_agenda` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_sede` int(11) DEFAULT NULL,
  `id_profesional` int(11) DEFAULT NULL,
  `id_profesion` int(11) DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL,
  `fecha_agenda` date DEFAULT NULL,
  `hora_agenda` time DEFAULT NULL,
  `estado_agenda` int(1) DEFAULT 1,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agenda
-- ----------------------------
INSERT INTO `agenda` VALUES ('2', '5', '1', '5', null, null, '2020-05-20', '08:00:00', '1');
INSERT INTO `agenda` VALUES ('3', '6', '3', '6', null, null, '2020-05-20', '08:00:00', '1');
INSERT INTO `agenda` VALUES ('4', '7', '4', '7', null, null, '2020-05-27', '08:05:00', '1');
INSERT INTO `agenda` VALUES ('5', '8', '5', '8', null, null, '2020-05-28', '16:00:00', '1');
INSERT INTO `agenda` VALUES ('6', '5', '3', '5', null, null, '2020-05-29', '15:00:00', '1');
INSERT INTO `agenda` VALUES ('7', '7', '4', '7', null, null, '2020-06-01', '17:30:00', '1');
INSERT INTO `agenda` VALUES ('14', '6', '1', '6', null, null, '2020-05-29', '08:00:00', '1');
INSERT INTO `agenda` VALUES ('15', '6', '1', '6', null, null, '2020-05-29', '08:30:00', '1');
INSERT INTO `agenda` VALUES ('16', '6', '2', '6', null, null, '2020-05-28', '08:00:00', '1');
INSERT INTO `agenda` VALUES ('17', '8', '3', '8', null, null, '2020-06-02', '15:00:00', '1');
INSERT INTO `agenda` VALUES ('18', '6', '4', '6', null, null, '2020-06-03', '16:30:00', '1');
INSERT INTO `agenda` VALUES ('19', '7', '1', '7', null, null, '2020-06-04', '08:00:00', '1');
INSERT INTO `agenda` VALUES ('20', '8', '1', '8', null, null, '2020-06-05', '08:00:00', '1');
INSERT INTO `agenda` VALUES ('21', '8', '2', '8', null, null, '2020-06-05', '15:00:00', '1');

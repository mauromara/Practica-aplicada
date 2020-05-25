/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : olgasant_corpusc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-24 18:21:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for profesiones
-- ----------------------------
DROP TABLE IF EXISTS `profesiones`;
CREATE TABLE `profesiones` (
  `id_profesion` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_profesion` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_profesion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profesiones
-- ----------------------------

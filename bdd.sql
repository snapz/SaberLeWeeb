/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : saber

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-06-12 17:40:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `manga`
-- ----------------------------
DROP TABLE IF EXISTS `manga`;
CREATE TABLE `manga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `published_tomes` int(11) NOT NULL DEFAULT '0',
  `owned_tomes` int(11) NOT NULL DEFAULT '0',
  `buying_tomes` int(11) NOT NULL DEFAULT '0',
  `price` float(11,2) NOT NULL DEFAULT '0.00',
  `editor` text,
  `type` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of manga
-- ----------------------------

-- ----------------------------
-- Table structure for `tickets`
-- ----------------------------
DROP TABLE IF EXISTS `tickets`;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `content` longtext,
  `date` date NOT NULL,
  `author` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tickets
-- ----------------------------

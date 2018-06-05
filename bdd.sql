/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : saber

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-06-05 22:11:00
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of manga
-- ----------------------------
INSERT INTO `manga` VALUES ('1', 'TEZEzdzdzd', '2018-06-03', '0', '56', '61', '35', '9.99', 'Ydainne le caca', 'Shônen');
INSERT INTO `manga` VALUES ('2', 'TEZER', '2018-06-16', '1', '56', '61', '35', '9.99', 'QZe', 'Shônen');
INSERT INTO `manga` VALUES ('3', 'EZE', '2022-01-01', '2', '33', '16', '7', '9.99', 'AA', 'Shônen');
INSERT INTO `manga` VALUES ('4', 'CACACAC', '2022-03-08', '2', '22', '9', '0', '10.00', 'QA', 'Hentai');

-- ----------------------------
-- Table structure for `tickets`
-- ----------------------------
DROP TABLE IF EXISTS `tickets`;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` varchar(2048) DEFAULT NULL,
  `date` date NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tickets
-- ----------------------------
INSERT INTO `tickets` VALUES ('1', 'Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus aliquet nulla. Morbi non elit nec metus facilisis scelerisque rutrum quis odio. Vivamus ac mattis risus. Cras porta velit congue ante consectetur ultrices. Pellentesque magna risus, ultrices vitae eleifend vitae, suscipit at sapien. Vestibulum id diam quis erat lobortis posuere ut et elit. Sed ac hendrerit leo. Aliquam vehicula sodales odio at iaculis. Ut et tristique felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus aliquet nulla. Morbi non elit nec metus facilisis scelerisque rutrum quis odio. Vivamus ac mattis risus. Cras porta velit congue ante consectetur ultrices. Pellentesque magna risus, ultrices vitae eleifend vitae, suscipit at sapien. Vestibulum id diam quis erat lobortis posuere ut et elit. Sed ac hendrerit leo. Aliquam vehicula sodales odio at iaculis. Ut et tristique felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus aliquet nulla. Morbi non elit nec metus facilisis scelerisque rutrum quis odio. Vivamus ac mattis risus. Cras porta velit congue ante consectetur ultrices. Pellentesque magna risus, ultrices vitae eleifend vitae, suscipit at sapien. Vestibulum id diam quis erat lobortis posuere ut et elit. Sed ac hendrerit leo. Aliquam vehicula sodales odio at iaculis. Ut et tristique felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus aliquet nulla. Morbi non elit nec metus facilisis scelerisque rutrum quis odio. Vivamus ac mattis risus. Cras porta velit congue ante consectetur ultrices. Pellentesque magna risus, ultrices vitae eleifend vitae, suscipit at sapien. Vestibulum id diam quis erat lobortis posuere ut et elit. Sed ac hendrerit leo. Aliquam vehicula sodales odio at iaculis. Ut et tristique felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus alique', '2018-06-04', 'Saber');
INSERT INTO `tickets` VALUES ('2', 'Test 2 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus aliquet nulla. Morbi non elit nec metus facilisis scelerisque rutrum quis odio. Vivamus ac mattis risus. Cras porta velit congue ante consectetur ultrices. Pellentesque magna risus, ultrices vitae eleifend vitae, suscipit at sapien. Vestibulum id diam quis erat lobortis posuere ut et elit. Sed ac hendrerit leo. Aliquam vehicula sodales odio at iaculis. Ut et tristique felis. ', '2018-06-08', 'Saber');
INSERT INTO `tickets` VALUES ('3', 'Test 3 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus aliquet nulla. Morbi non elit nec metus facilisis scelerisque rutrum quis odio. Vivamus ac mattis risus. Cras porta velit congue ante consectetur ultrices. Pellentesque magna risus, ultrices vitae eleifend vitae, suscipit at sapien. Vestibulum id diam quis erat lobortis posuere ut et elit. Sed ac hendrerit leo. Aliquam vehicula sodales odio at iaculis. Ut et tristique felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus aliquet nulla. Morbi non elit nec metus facilisis scelerisque rutrum quis odio. Vivamus ac mattis risus. Cras porta velit congue ante consectetur ultrices. Pellentesque magna risus, ultrices vitae eleifend vitae, suscipit at sapien. Vestibulum id diam quis erat lobortis posuere ut et elit. Sed ac hendrerit leo. Aliquam vehicula sodales odio at iaculis. Ut et tristique felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus aliquet nulla. Morbi non elit nec metus facilisis scelerisque rutrum quis odio. Vivamus ac mattis risus. Cras porta velit congue ante consectetur ultrices. Pellentesque magna risus, ultrices vitae eleifend vitae, suscipit at sapien. Vestibulum id diam quis erat lobortis posuere ut et elit. Sed ac hendrerit leo. Aliquam vehicula sodales odio at iaculis. Ut et tristique felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus aliquet nulla. Morbi non elit nec metus facilisis scelerisque rutrum quis odio. Vivamus ac mattis risus. Cras porta velit congue ante consectetur ultrices. Pellentesque magna risus, ultrices vitae eleifend vitae, suscipit at sapien. Vestibulum id diam quis erat lobortis posuere ut et elit. Sed ac hendrerit leo. Aliquam vehicula sodales odio at iaculis. Ut et tristique felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus dui, finibus non sapien varius, tempus alique', '2018-06-29', 'Zaxner');

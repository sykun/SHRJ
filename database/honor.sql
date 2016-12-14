/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : shanghua

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-13 20:07:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for honor
-- ----------------------------
DROP TABLE IF EXISTS `honor`;
CREATE TABLE `honor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of honor
-- ----------------------------
INSERT INTO `honor` VALUES ('1', '../Public/uploads/2016-12-07/58475ca4ee240.png', '荣誉内容');
INSERT INTO `honor` VALUES ('2', '../Public/uploads/2016-12-07/58475cccc2777.png', '上华荣誉');

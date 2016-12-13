/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : shanghua

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-12 15:39:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for advice
-- ----------------------------
DROP TABLE IF EXISTS `advice`;
CREATE TABLE `advice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of advice
-- ----------------------------
INSERT INTO `advice` VALUES ('1', '小明', '北京', '123@qq.com', '123**', '软件的使用方法');

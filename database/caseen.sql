/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : shanghua

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-13 20:44:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for caseen
-- ----------------------------
DROP TABLE IF EXISTS `caseen`;
CREATE TABLE `caseen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of caseen
-- ----------------------------
INSERT INTO `caseen` VALUES ('4', '管廊', '管廊内容', '../Public/uploads/2016-12-07/58475bd09fd48.png');
INSERT INTO `caseen` VALUES ('5', '成功案例', '案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述案例描述', '../Public/uploads/2016-12-13/584fda8e455ec.jpg');

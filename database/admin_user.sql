/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : shanghua

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-13 20:07:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `truename` varchar(255) DEFAULT NULL,
  `phonenum` varchar(255) DEFAULT NULL,
  `createtime` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `repassword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('1', 'gaozhiqin', '123456', '高志琴', '12345678901', '2016-12-06', '123@qq.com', '123456');
INSERT INTO `admin_user` VALUES ('4', 'wangna', '123456', '王娜', '12345678901', '2016-12-06', '123@qq.com', '123456');
INSERT INTO `admin_user` VALUES ('6', 'wuhongjia', '123456', '武洪佳', '12345678901', '2016-12-07', '123@qq.com', '123456');
INSERT INTO `admin_user` VALUES ('7', 'wangyanyan', '123456', '王妍妍', '12345678901', '2016-12-07', '123@qq.com', '123456');
INSERT INTO `admin_user` VALUES ('15', 'liutianmeng', '123456', '刘恬梦', '12345678901', '2016-12-08', '123@qq.com', '123456');

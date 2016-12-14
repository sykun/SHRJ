/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : shanghua

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-13 20:07:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for industry
-- ----------------------------
DROP TABLE IF EXISTS `industry`;
CREATE TABLE `industry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `click` int(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of industry
-- ----------------------------
INSERT INTO `industry` VALUES ('1', '贯彻“发动机”文化 做“奔日子的人”', '2016-12-13', '1', '11月26日,在收到“联想30年”柳总致全体员工的一封信后，金融第一时间将信件以邮件形式发送给每一位员工,并组织召开了学习讨论会，认真学习贯彻柳总信中的精神。会议由公司董事长兼总裁俞能宏主持,公司总裁室成员', '../Public/uploads/2016-12-13/584fae14ed607.jpg');
INSERT INTO `industry` VALUES ('2', '助力合伙人把握转型时代新机遇', '2016-12-13', null, '近400位来自金融、零售、创服、教育、通信、培训、电商等数十个行业的企业家及公司高管齐聚微创大厦，解读传统企业互联网+转型战略布局与运营模式的发展趋势，分享互联网思维在不同行业、业务流程和应用场景中的成功实践', '../Public/uploads/2016-12-13/584fae3e493a5.jpg');
INSERT INTO `industry` VALUES ('3', '给设计院里新人的建议', '2016-12-13', null, '近400位来自金融、零售、创服、教育、通信、培训、电商等数十个行业的企业家及公司高管齐聚微创大厦，解读传统企业互联网+转型战略布局与运营模式的发展趋势，分享互联网思维在不同行业、业务流程和应用场景中的成功实践', '../Public/uploads/2016-12-13/584faea34dcae.jpg');
INSERT INTO `industry` VALUES ('4', '行业资讯', '2016-12-13', null, '内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容', '../Public/uploads/2016-12-13/584faebe18eef.jpg');

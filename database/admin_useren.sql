/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : shanghua

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-13 20:44:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_useren
-- ----------------------------
DROP TABLE IF EXISTS `admin_useren`;
CREATE TABLE `admin_useren` (
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
-- Records of admin_useren
-- ----------------------------
INSERT INTO `admin_useren` VALUES ('1', 'gaozhiqin', '123456', '高志琴', '12345678901', '2016-12-06', '123@qq.com', '123456');
INSERT INTO `admin_useren` VALUES ('4', 'wangna', '123456', '王娜', '12345678901', '2016-12-06', '123@qq.com', '123456');
INSERT INTO `admin_useren` VALUES ('6', 'wuhongjia', '123456', '武洪佳', '12345678901', '2016-12-07', '123@qq.com', '123456');
INSERT INTO `admin_useren` VALUES ('7', 'wangyanyan', '123456', '王妍妍', '12345678901', '2016-12-07', '123@qq.com', '123456');
INSERT INTO `admin_useren` VALUES ('15', 'liutianmeng', '123456', '刘恬梦', '12345678901', '2016-12-08', '123@qq.com', '123456');

-- ----------------------------
-- Table structure for adviceen
-- ----------------------------
DROP TABLE IF EXISTS `adviceen`;
CREATE TABLE `adviceen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of adviceen
-- ----------------------------
INSERT INTO `adviceen` VALUES ('1', '小明', '北京', '123@qq.com', '123**', '软件的使用方法');

-- ----------------------------
-- Table structure for applyen
-- ----------------------------
DROP TABLE IF EXISTS `applyen`;
CREATE TABLE `applyen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `use` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of applyen
-- ----------------------------
INSERT INTO `applyen` VALUES ('1', '小明', '北京', 'html5', '123@qq.com', '12345678901', '学习');

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

-- ----------------------------
-- Table structure for honoren
-- ----------------------------
DROP TABLE IF EXISTS `honoren`;
CREATE TABLE `honoren` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of honoren
-- ----------------------------
INSERT INTO `honoren` VALUES ('1', '../Public/uploads/2016-12-07/58475ca4ee240.png', '荣誉内容');
INSERT INTO `honoren` VALUES ('2', '../Public/uploads/2016-12-07/58475cccc2777.png', '上华荣誉');

-- ----------------------------
-- Table structure for industryen
-- ----------------------------
DROP TABLE IF EXISTS `industryen`;
CREATE TABLE `industryen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `click` int(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of industryen
-- ----------------------------
INSERT INTO `industryen` VALUES ('1', '贯彻“发动机”文化 做“奔日子的人”', '2016-12-13', '1', '11月26日,在收到“联想30年”柳总致全体员工的一封信后，金融第一时间将信件以邮件形式发送给每一位员工,并组织召开了学习讨论会，认真学习贯彻柳总信中的精神。会议由公司董事长兼总裁俞能宏主持,公司总裁室成员', '../Public/uploads/2016-12-13/584fae14ed607.jpg');
INSERT INTO `industryen` VALUES ('2', '助力合伙人把握转型时代新机遇', '2016-12-13', null, '近400位来自金融、零售、创服、教育、通信、培训、电商等数十个行业的企业家及公司高管齐聚微创大厦，解读传统企业互联网+转型战略布局与运营模式的发展趋势，分享互联网思维在不同行业、业务流程和应用场景中的成功实践', '../Public/uploads/2016-12-13/584fae3e493a5.jpg');
INSERT INTO `industryen` VALUES ('3', '给设计院里新人的建议', '2016-12-13', null, '近400位来自金融、零售、创服、教育、通信、培训、电商等数十个行业的企业家及公司高管齐聚微创大厦，解读传统企业互联网+转型战略布局与运营模式的发展趋势，分享互联网思维在不同行业、业务流程和应用场景中的成功实践', '../Public/uploads/2016-12-13/584faea34dcae.jpg');
INSERT INTO `industryen` VALUES ('4', '行业资讯', '2016-12-13', null, '内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容', '../Public/uploads/2016-12-13/584faebe18eef.jpg');

-- ----------------------------
-- Table structure for joben
-- ----------------------------
DROP TABLE IF EXISTS `joben`;
CREATE TABLE `joben` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `demand` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of joben
-- ----------------------------
INSERT INTO `joben` VALUES ('1', '前端工程师', '2016-12-13', '北京', '30', '工作内容', '本科以上学历会前端开发，P图');
INSERT INTO `joben` VALUES ('5', 'H5工程师', '2016-12-13', '北京', '12', '前后台的开发工作', '研究生及其以上学历');

-- ----------------------------
-- Table structure for newsen
-- ----------------------------
DROP TABLE IF EXISTS `newsen`;
CREATE TABLE `newsen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `click` int(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of newsen
-- ----------------------------
INSERT INTO `newsen` VALUES ('2', '全国优秀工程勘察设计计算机软件奖申报各地方、各部门勘察设计同业协会', '2016-12-01', '123', '各地方、各部门勘察设计同业协会，各直属分会及工作委员会，各会员单位：根据《全国工程勘察设计行业优秀工程勘察设计行业奖评选办法》(中设协字〔2015〕第23号，以下简称《评选办法》)，现就开展2015年度优秀工程勘察设计行业奖(以下简称行业奖)...', '../Public/uploads/2016-12-07/584773472c67e.jpeg');
INSERT INTO `newsen` VALUES ('3', '我公司荣获山东省十大软件企业创新奖', '2016-12-13', '45', '认同企业的发展规划还有做出良好的业绩\r\n针对企业领导人的职责进行阐述 一个号的企业员工需要领导的指导还有一个明确的规划 \r\n\r\n创新不容易，第一，创新意味着改变，所谓推陈出新、气象万新、焕然一新，无不是诉说着一个“变”字；第二，创新意味着付出，因为惯性作用，没有外力是不可能有改变的，这个外力就是创新者的付出；第三，创新意味着风险，从来都说一份耕耘一份收获，而创新的付出却可能收获一份失败的回报。创新确实不容易，所以总是在创新前面加上“积极”、“勇于”、“大胆”之类的形容词。', '../Public/uploads/2016-12-13/584f9c72f0b76.jpg');
INSERT INTO `newsen` VALUES ('8', '给设计院里新人的建议', '2016-12-13', '86', '按照民用建筑设计院和工业建筑设计院；民用设计院有私营的、也有政府的，按照资质分为：甲、乙、丙、丁四级，甲级最好，依此类推，区别是可以承接的工程类别不一样。有些工程只能甲级院做：比如国家大剧院，有些工程都可以做：比如2层的150平方米小商店。工业设计院一般是政府的，比如说轻工设计院、邮电设计院、冶金设计院、化工设计院等，同样是按照资质分类，一般分甲、乙2级，区别是可以承接的工程类别不一样。', '../Public/uploads/2016-12-13/584f9e635dde3.jpg');
INSERT INTO `newsen` VALUES ('9', '全国高校毕业生', '2016-12-13', '24', '全国高校毕业生2016年人数达上万。', '../Public/uploads/2016-12-13/584fd8ce08a31.jpg');

-- ----------------------------
-- Table structure for producten
-- ----------------------------
DROP TABLE IF EXISTS `producten`;
CREATE TABLE `producten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of producten
-- ----------------------------
INSERT INTO `producten` VALUES ('1', '智慧', '管廊内容管廊内容1', '../Public/uploads/2016-12-07/58475962a2347.png');

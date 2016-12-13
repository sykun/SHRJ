/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : shanghua

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-13 20:08:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `click` int(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('2', '全国优秀工程勘察设计计算机软件奖申报各地方、各部门勘察设计同业协会', '2016-12-01', '123', '各地方、各部门勘察设计同业协会，各直属分会及工作委员会，各会员单位：根据《全国工程勘察设计行业优秀工程勘察设计行业奖评选办法》(中设协字〔2015〕第23号，以下简称《评选办法》)，现就开展2015年度优秀工程勘察设计行业奖(以下简称行业奖)...', '../Public/uploads/2016-12-07/584773472c67e.jpeg');
INSERT INTO `news` VALUES ('3', '我公司荣获山东省十大软件企业创新奖', '2016-12-13', '45', '认同企业的发展规划还有做出良好的业绩\r\n针对企业领导人的职责进行阐述 一个号的企业员工需要领导的指导还有一个明确的规划 \r\n\r\n创新不容易，第一，创新意味着改变，所谓推陈出新、气象万新、焕然一新，无不是诉说着一个“变”字；第二，创新意味着付出，因为惯性作用，没有外力是不可能有改变的，这个外力就是创新者的付出；第三，创新意味着风险，从来都说一份耕耘一份收获，而创新的付出却可能收获一份失败的回报。创新确实不容易，所以总是在创新前面加上“积极”、“勇于”、“大胆”之类的形容词。', '../Public/uploads/2016-12-13/584f9c72f0b76.jpg');
INSERT INTO `news` VALUES ('8', '给设计院里新人的建议', '2016-12-13', '86', '按照民用建筑设计院和工业建筑设计院；民用设计院有私营的、也有政府的，按照资质分为：甲、乙、丙、丁四级，甲级最好，依此类推，区别是可以承接的工程类别不一样。有些工程只能甲级院做：比如国家大剧院，有些工程都可以做：比如2层的150平方米小商店。工业设计院一般是政府的，比如说轻工设计院、邮电设计院、冶金设计院、化工设计院等，同样是按照资质分类，一般分甲、乙2级，区别是可以承接的工程类别不一样。', '../Public/uploads/2016-12-13/584f9e635dde3.jpg');
INSERT INTO `news` VALUES ('9', '全国高校毕业生', '2016-12-13', '24', '全国高校毕业生2016年人数达上万。', '../Public/uploads/2016-12-13/584fd8ce08a31.jpg');

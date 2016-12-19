/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : shanghua

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2016-12-15 11:34:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('3', '设计软件', '信息技术展示地下空间\r\n    管廊性能分析\r\n', '../Public/uploads/2016-12-13/584fad564087a.png');
INSERT INTO `product` VALUES ('4', '运维系统', '立足于工程建设信息化领域\r\n     推进管廊建设', '../Public/uploads/2016-12-13/584fad9b6ba64.png');
INSERT INTO `product` VALUES ('5', '绿色建筑', '集成化建筑性能模拟分析\r\n 设计和分析的高度统一', '../Public/uploads/2016-12-13/584fadbc2605f.png');
INSERT INTO `product` VALUES ('6', '设计助手DWHelp', '立足ACE行业设计者角度\r\n    提高设计效率', '../Public/uploads/2016-12-13/584fadd29e944.png');
INSERT INTO `product` VALUES ('11', 'PDMS综合', '基于EXCEL附属的VBA语言\r\n 专注于三维管道设计', '../Public/uploads/2016-12-13/584fadef21262.png');
INSERT INTO `product` VALUES ('12', 'PDMS风力', '基于BIM离线导航平台开发\r\n符合国内设计规范计算功能', '../Public/uploads/2016-12-13/584fae081fe34.png');
INSERT INTO `product` VALUES ('13', '工艺设计软件', '为你提供全方面的\r\n  流程设计工具', '../Public/uploads/2016-12-13/584fae1cee708.png');
INSERT INTO `product` VALUES ('14', '绿色建筑模拟分析', '', '../Public/uploads/2016-12-14/585094ed92122.jpg');
INSERT INTO `product` VALUES ('15', '简介', '绿色建筑模拟分析软件 (以下简称IES )是由英国IES公司开发的集成化绿色建筑性能模拟分析软件。很多知名的设计公司或工程公司都广泛使用IES 作为他们在国内参与项目竞争的工具，也取得了非常好的效果。', '../Public/uploads/2016-12-14/585099f5f0395.png');
INSERT INTO `product` VALUES ('16', '功能', '（1）建立三维信息化建筑模型，或者导入其它建模工具建立的模型，如Revit或Sketchup等。（2）ApacheLoad根据ASHRAE（美国采暖、制冷与空调工程是协会）标准进行冷热负荷的计算。（3）计算建筑物全年能耗、CO2排放量、室内空气品质等，计算空调系统全年能耗。\r\n（4） 模拟建筑物自然通风量，结果用于能耗计算。\r\n（5）计算建筑内外的自然采光，可以将计算结果以直观的效果表现出来。\r\n（6）计算建筑内外的自然采光、人工照明，可以将计算结果以直观的效果表现出来。\r\n（7）计算建筑的日光遮挡系数，并可以将遮挡系数用于热模拟计算，可以动态地显示全天的日照变化情况。\r\n（8）以动态模拟的方式计算建筑物内所有人员离开建筑所需要的时间。\r\n（9）通过有限容积法，计算建筑物内外3D风环境，模拟室内温度场、流场等；通过后处理，输出速度、温度云图、热舒适性等计算结果。', '../Public/uploads/2016-12-14/58509f7189aa5.png');
INSERT INTO `product` VALUES ('17', '绿建', '', '../Public/uploads/2016-12-14/5850a8c331905.png');
INSERT INTO `product` VALUES ('18', '鸟巢', '', '../Public/uploads/2016-12-14/5850a8d9c4b8d.png');
INSERT INTO `product` VALUES ('19', '水立方', '', '../Public/uploads/2016-12-14/5850a8ef1b004.png');
INSERT INTO `product` VALUES ('20', '总体介绍', 'IES被世界上各个知名的设计单位和工程咨询单位所使用，如Arup（奥雅纳）、WSP（科进）、Atkins（阿特金斯）、PB（柏诚）等等。这些知名的设计公司或工程公司广泛使用IES &lt;VE&gt;作为他们在国内参与项目竞争的工具，取得了非常好的效果，知名的项目有水立方、鸟巢、浦东国际机场、首都国际机场、诺基亚大厦等等。IES &lt;VE&gt;带给设计方的不仅仅是漂亮的三维模型，更多的是对建筑性能的理性思考，真正做到了设计感性和分析理性的高度统一。', '../Public/uploads/2016-12-14/5850a9ab16ad4.png');
INSERT INTO `product` VALUES ('21', '设计助手DWHelp', '', '../Public/uploads/2016-12-14/5850adb15973a.jpg');
INSERT INTO `product` VALUES ('22', '总体介绍', ' 设计助手DWGHelp（或名称：图纸助手DWGHelp）是专门为数字化出图而研发的专业工具，主要功能模块包括：图纸保护、图纸安全、图纸水印、图纸签章、电子签名、智能打印等。可快速完成诸如：单位图章图签、个人图章图签、二维码等的智能化图纸植入。其次，DWGHelp立足ACE行业设计者的角度研发智能创建、提图工具、图层工具、图纸比对、图纸批注、视口工具等功能模块提高设计过程中单点、协同（协作）、交流及图审等工作效率。\r\n       DWGHelp与目前勘察设计单位广泛使用的AutoCAD平台及CAD二次开发软件高度集成，可自动实现批量、自动签章以及签名后图纸的不可编辑性等特点，在满足数字化出图的基础上，也保护了企业的知识产权，打造设计企业的好帮手。', '../Public/uploads/2016-12-14/5850add7e13e4.png');
INSERT INTO `product` VALUES ('23', '软件主界面', '设计助手的主要功能都列在屏幕菜单和主菜单上，主菜单和屏幕菜单一致。软件的主界面如下:\r\n', '../Public/uploads/2016-12-14/5850ae10b2013.png');
INSERT INTO `product` VALUES ('24', '软件功能特点', '(1)智能识别企业标准图框，实现快速数字化出图；\r\n(2)提供企业各类图纸图章、图签的管理功能，方便灵活应用；\r\n(3)外发DWG图纸的安全保护，水印加密功能；\r\n(4)数字签名图纸的安全保护，保护等级可根据图纸重要等级设置；\r\n(5)打印时签名的企业级知识知识产权保护出图特色功能。', '../Public/uploads/2016-12-14/5850ae3c93cd9.jpg');
INSERT INTO `product` VALUES ('25', 'PDMS综合材料自动排版', '', '../Public/uploads/2016-12-14/5850b0f003bc4.jpg');
INSERT INTO `product` VALUES ('26', '产品简介', 'PDMS是工厂设计软件，最主要的功能是三维管道设计。', '../Public/uploads/2016-12-14/5850b121771c2.png');
INSERT INTO `product` VALUES ('27', '总体介绍', ' PDMS是工厂设计软件，最主要的功能是三维管道设计。能自动 生成设备平面布置图、管道平面布置图、ISO图、综合材料表等。使 用中自动生成的ISO图比较完善，设备平面布置图一般有CAD生成， 管道平面布置图需要适量修改，综合材料表非常混乱， 需要人工手动排版（期间很容易出错），排版后由于各种原因经常需 要修改模型重新出材料，重新排版，因此需要大量时间。为了提高设 计质量和效率，利用EXCEL附属的VBA语言开发了“综合材料自动排版系统(Ver1.0)”。', '../Public/uploads/2016-12-14/5850b157c0e17.png');
INSERT INTO `product` VALUES ('28', '截图1', '', '../Public/uploads/2016-12-14/5850b17fcf40f.png');
INSERT INTO `product` VALUES ('29', '截图2', '', '../Public/uploads/2016-12-14/5850b19459e70.png');
INSERT INTO `product` VALUES ('30', 'PDMS风管阻力计算', '', '../Public/uploads/2016-12-14/5850b5afa9bff.png');
INSERT INTO `product` VALUES ('31', '软件名称', 'PDMS', '../Public/uploads/2016-12-14/5850b5fbbd594.png');
INSERT INTO `product` VALUES ('32', '软件介绍', '本软件基于BIM模型离线导航平台开发，本软件符合国内设计规范的计算功能；解决了国内现有的计算软件无法基于PDMS等BIM软件风管模型进行计算；现有的计算软件无完善的构件参数库。', '../Public/uploads/2016-12-14/5850b63294b45.png');
INSERT INTO `product` VALUES ('33', '软件功能', '（1）沿程阻力计算；\r\n（2）构件阻力计算；\r\n（3）最不利分析；\r\n（4）风机运行模式管理、分析；\r\n（5）分支管路阻力平衡分析，平衡阀开启计算；\r\n（6）自动匹配构件局阻类型；\r\n（7）生成计算报告。', '../Public/uploads/2016-12-14/5850b6a0cb1db.png');
INSERT INTO `product` VALUES ('34', '软件特性', '全面性', '../Public/uploads/2016-12-14/5850b72becf3a.jpg');
INSERT INTO `product` VALUES ('35', '', '规范性', '../Public/uploads/2016-12-14/5850b7c1e843d.jpg');
INSERT INTO `product` VALUES ('36', '', '准确性', '../Public/uploads/2016-12-14/5850b75a06fc2.jpg');
INSERT INTO `product` VALUES ('37', '', '仿真性', '../Public/uploads/2016-12-14/5850b76b5ed8b.jpg');
INSERT INTO `product` VALUES ('38', '', '美观性', '../Public/uploads/2016-12-14/5850b79174f26.jpg');
INSERT INTO `product` VALUES ('39', '', '专业性', '../Public/uploads/2016-12-14/5850b7a6e61ec.jpg');
INSERT INTO `product` VALUES ('40', '工艺设计软件', '', '../Public/uploads/2016-12-14/5850bc80ba110.png');
INSERT INTO `product` VALUES ('41', '绝对的数据安全', ' 具备数据服务访问权限、数据操作权限和数据内容过滤等多种权限控制机制，完全按需分发的三维地理信息服务。 严谨的客户端缓存数据加密机制，确保数据安全不留死角。', '../Public/uploads/2016-12-14/5850bcc4c6f82.png');
INSERT INTO `product` VALUES ('42', 'CADPS优异的网络服务性能', 'CADPS是面向管道设计领域推出的集二维管道设计、材料管理为一体的综合管道设计系统。CADPS由P&amp;ID流程图设计软件、2D PIPE管道设计软件、BOM材料统计软件、SPECEDIT管道等级设计软件四个部分组成。如左图所示：', '../Public/uploads/2016-12-14/5850bcf8601bf.png');
INSERT INTO `product` VALUES ('43', '工艺软件总体介绍', ' 一个项目从工艺流程设计，工艺管道布置到最终的材料统计。繁重的绘图工作和材料统计的过程，使工程师花费了大量的时间和精力。为了提供工作效率，缩短设计周期，CADPS二维管道设计系列软件，从流程设计，配管设计到材料统计为你提供全方面的设计工具。', '../Public/uploads/2016-12-14/5850bd25db35e.png');
INSERT INTO `product` VALUES ('44', '管廊运维', '', '../Public/uploads/2016-12-14/5850c0878647b.png');
INSERT INTO `product` VALUES ('45', '综合 管廊', '兼容多个版本，并支持win7及64位系统', '../Public/uploads/2016-12-14/5850c11b0d5f3.jpg');
INSERT INTO `product` VALUES ('46', '', '软件提供更多的快捷命令和智能化应用', '../Public/uploads/2016-12-14/5850c15c90ba1.jpg');
INSERT INTO `product` VALUES ('47', '', '快速、准确、高效的设计管廊精品', '../Public/uploads/2016-12-14/5850c17420e07.jpg');
INSERT INTO `product` VALUES ('48', '', '实现地下管廊的设计与运营', '../Public/uploads/2016-12-14/5850c190b5020.jpg');
INSERT INTO `product` VALUES ('49', 'BIM 技术支撑', '建立起三维的建筑模型，通过数字信息仿真模拟建筑物所具有的真实信息。', '../Public/uploads/2016-12-14/5850c1d28383b.jpg');
INSERT INTO `product` VALUES ('50', 'GIS 技术支撑', '采集、存贮、管理、分析和显示有关地理现象信息的综合技术系统，更有效地实现综合管廊后期数字标准化运维管理。', '../Public/uploads/2016-12-14/5850c1f72ea71.jpg');
INSERT INTO `product` VALUES ('51', '运维 数字化', '采用GIS技术与BIM技术相结合开发， 有效地实现综合管廊后期数字标准化运维管理', '../Public/uploads/2016-12-14/5850c2299c542.jpg');
INSERT INTO `product` VALUES ('52', '上华管廊设计SH-UTP', '', '../Public/uploads/2016-12-14/5850c3e209110.jpg');
INSERT INTO `product` VALUES ('53', '总体介绍', '上华软件针对立足于工程建设信息化领域，重点推进城市综合管廊（”共同沟”）建设建设，针对地下管廊建设规划设计复杂、施工难度大、运营管理及后期维护信息量大等困难，联合中冶京城、中国市政华北院等，结合国内设计、施工、运维现状，借鉴国外地区经验，通过软件技术实现地下管廊的设计与运营管理。 采用GIS技术与BIM技术相结合开发的数字化综合管廊运维系统，借鉴了国外先进的管廊运维管理经验，可以有效地实现综合管廊后期数字标准化运维管理。', '../Public/uploads/2016-12-14/5850c449272c3.png');
INSERT INTO `product` VALUES ('54', '设计特点', '上华软件立足于工程建设信息化领域，重点推进城市地下综合管廊建设建设（地下“高速公路”），针对地下管廊建设规划设计复杂、施工难度大、运营管理及后期维护信息量大等困难，结合国内设计、施工、运维现状，借鉴国外地区经验，通过软件技术实现地下管廊的设计，提高设计效益、便于施工运维。', '../Public/uploads/2016-12-14/5850c4748212c.jpg');
INSERT INTO `product` VALUES ('55', '技术特点', '上华软件立足于工程建设信息化领域，重点推进城市地下综合管廊建设建设（地下“高速公路”），针对地下管廊建设规划设计复杂、施工难度大、运营管理及后期维护信息量大等困难，结合国内设计、施工、运维现状，借鉴国外地区经验，通过软件技术实现地下管廊的设计，提高设计效益、便于施工运维。\r\n', '../Public/uploads/2016-12-14/5850c499d6b8a.jpg');
INSERT INTO `product` VALUES ('56', '功能特点', '实现综合管廊工程进行方案、施工图设计；给水、雨水、污水、再生水、天然气、热力、电力、通信等工程管线在管廊中的设计；雨水、污水等入水口设计，纵断面图等；雨水管道综合管廊敷设设计；污水管综合管廊敷设设计；上华软件立足于工程建设信息化领域，重点推进城市地下综合管廊建设建设（地下“高速公路”），针对地下管廊建设规划设计复杂、施工难度大、运营管理及后期维护信息量大等困难，结合国内设计、施工、运维现状，借鉴国外地区经验，通过软件技术实现地下管廊的设计，提高设计效益、便于施工运维。', '../Public/uploads/2016-12-14/5850c4bcb8024.jpg');
INSERT INTO `product` VALUES ('57', '产品特点', '实现综合管廊工程进行方案、施工图设计；给水、雨水、污水、再生水、天然气、热力、电力、通信等工程管线在管廊中的设计；雨水、污水等入水口设计，纵断面图等；雨水管道综合管廊敷设设计；污水管综合管廊敷设设计；上华软件立足于工程建设信息化领域，重点推进城市地下综合管廊建设建设（地下“高速公路”），针对地下管廊建设规划设计复杂、施工难度大、运营管理及后期维护信息量大等困难，结合国内设计、施工、运维现状，借鉴国外地区经验，通过软件技术实现地下管廊的设计，提高设计效益、便于施工运维。', '../Public/uploads/2016-12-14/5850c4da896b6.jpg');
INSERT INTO `product` VALUES ('58', '综合管廊设计软件', '', '../Public/uploads/2016-12-15/58520d5f59435.jpg');
INSERT INTO `product` VALUES ('59', '综合管廊运维系统', '', '../Public/uploads/2016-12-15/58520d8276ebf.jpg');
INSERT INTO `product` VALUES ('60', '绿色建筑模拟分析', '', '../Public/uploads/2016-12-15/58520da9e4568.jpg');
INSERT INTO `product` VALUES ('61', '设计助手DWGHelp', '', '../Public/uploads/2016-12-15/58520dd16255f.jpg');
INSERT INTO `product` VALUES ('62', 'PDMS风管水力计算', '', '../Public/uploads/2016-12-15/58520dee8e1fd.jpg');
INSERT INTO `product` VALUES ('63', 'PDMS综合材料自动排版系统', '', '../Public/uploads/2016-12-15/58520e116011a.jpg');
INSERT INTO `product` VALUES ('64', '工艺设计软件', '', '../Public/uploads/2016-12-15/58520e31ba75c.jpg');
INSERT INTO `product` VALUES ('65', '管廊', '', '../Public/uploads/2016-12-15/58520e5a73518.jpg');
INSERT INTO `product` VALUES ('66', 'VE', '', '../Public/uploads/2016-12-15/58520e7988038.jpg');

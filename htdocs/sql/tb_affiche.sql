/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : db_shop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-09 13:56:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_affiche
-- ----------------------------
DROP TABLE IF EXISTS `tb_affiche`;
CREATE TABLE `tb_affiche` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `createtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of tb_affiche
-- ----------------------------
INSERT INTO `tb_affiche` VALUES ('2', 'job', 'spring job seeking', '2017-02-09 13:40:41');
INSERT INTO `tb_affiche` VALUES ('3', 'children', 'heath growing', '2017-02-09 13:41:01');

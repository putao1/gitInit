/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : family

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-07 22:48:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for people
-- ----------------------------
DROP TABLE IF EXISTS `people`;
CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `createtime` datetime NOT NULL,
  `is_christ` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of people
-- ----------------------------
INSERT INTO `people` VALUES ('1', 'qing', '1234', '2017-02-07 19:58:18', '1');
INSERT INTO `people` VALUES ('2', 'fen', '2345', '2017-02-07 19:59:00', '1');
INSERT INTO `people` VALUES ('3', 'qin', '1234', '2017-02-07 21:17:47', '1');
INSERT INTO `people` VALUES ('4', 'shui', '23456', '2017-02-07 21:21:31', '0');
INSERT INTO `people` VALUES ('5', 'li', '1234', '2017-02-07 21:24:24', '2');
INSERT INTO `people` VALUES ('6', 'juan', '1234', '2017-02-07 21:24:43', '3');
INSERT INTO `people` VALUES ('7', 'ping', '1234', '2017-02-07 21:25:30', '2');

-- ----------------------------
-- Table structure for score
-- ----------------------------
DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of score
-- ----------------------------
INSERT INTO `score` VALUES ('qing', '1', '150');
INSERT INTO `score` VALUES ('fen', '2', '100');
INSERT INTO `score` VALUES ('li', '5', '120');

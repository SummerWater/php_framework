/*
Navicat MySQL Data Transfer

Source Server         : 本地7
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : guestbook

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-07-12 17:39:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for gb_message
-- ----------------------------
DROP TABLE IF EXISTS `gb_message`;
CREATE TABLE `gb_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `ctime` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gb_message
-- ----------------------------
INSERT INTO `gb_message` VALUES ('1', '从零打造PHP框架实战', '模板引擎的文档：https://twig.symfony.com/doc/2.x/', 'Shuleiming', '2018-07-12 17:35:12');

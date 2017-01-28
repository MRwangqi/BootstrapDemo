/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : wangqi

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2017-01-28 21:14:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for license
-- ----------------------------
DROP TABLE IF EXISTS `license`;
CREATE TABLE `license` (
  `user_id` int(11) DEFAULT NULL,
  `business` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for upload_img
-- ----------------------------
DROP TABLE IF EXISTS `upload_img`;
CREATE TABLE `upload_img` (
  `user_id` int(11) DEFAULT NULL,
  `imgurl` varchar(255) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_info
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `user_id` varchar(20) DEFAULT NULL,
  `user_type` varchar(20) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `twon_city` varchar(255) DEFAULT NULL,
  `country_state` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

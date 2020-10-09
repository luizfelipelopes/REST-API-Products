/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : api_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-10-01 19:38:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Fashion', 'Category for anything related to fashion.', '2014-06-01 00:35:07', '2014-05-30 17:34:33');
INSERT INTO `categories` VALUES ('2', 'Electronics', 'Gadgets, drones and more.', '2014-06-01 00:35:07', '2014-05-30 17:34:33');
INSERT INTO `categories` VALUES ('3', 'Motors', 'Motor sports and more', '2014-06-01 00:35:07', '2014-05-30 17:34:54');
INSERT INTO `categories` VALUES ('5', 'Movies', 'Movie products.', '2014-06-01 00:35:07', '2016-01-08 13:27:26');
INSERT INTO `categories` VALUES ('6', 'Books', 'Kindle books, audio books and more.', '2014-06-01 00:35:07', '2016-01-08 13:27:47');
INSERT INTO `categories` VALUES ('13', 'Sports', 'Drop into new winter gear.', '2016-01-09 02:24:24', '2016-01-09 01:24:24');

-- ----------------------------
-- Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-05-31 17:12:26');
INSERT INTO `products` VALUES ('2', 'Teste Pillow 3.0', 'The best pillow for greatest programmers.', '255', '2', '2018-08-01 00:35:07', '2014-05-31 17:12:26');
INSERT INTO `products` VALUES ('3', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-05-31 17:12:26');
INSERT INTO `products` VALUES ('6', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-05-31 02:12:21');
INSERT INTO `products` VALUES ('7', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-05-31 02:13:39');
INSERT INTO `products` VALUES ('8', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-05-31 02:14:08');
INSERT INTO `products` VALUES ('9', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-05-31 02:18:31');
INSERT INTO `products` VALUES ('10', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-06-05 18:09:51');
INSERT INTO `products` VALUES ('11', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-06-05 18:10:54');
INSERT INTO `products` VALUES ('12', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-06-05 18:12:11');
INSERT INTO `products` VALUES ('13', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-06-05 18:12:49');
INSERT INTO `products` VALUES ('26', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-11-21 20:07:34');
INSERT INTO `products` VALUES ('28', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-12-03 22:12:03');
INSERT INTO `products` VALUES ('31', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2014-12-12 01:52:54');
INSERT INTO `products` VALUES ('42', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2015-12-12 05:47:08');
INSERT INTO `products` VALUES ('48', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2016-01-08 05:36:37');
INSERT INTO `products` VALUES ('49', 'Amazing Pillow 3.0', 'The best pillow for amazing programmers.', '255', '2', '2018-08-01 00:35:07', '2020-09-17 23:03:07');

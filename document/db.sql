/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50718
Source Host           : localhost:3106
Source Database       : yii_count

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-09-24 18:43:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tq_admin
-- ----------------------------
DROP TABLE IF EXISTS `tq_admin`;
CREATE TABLE `tq_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `password` varchar(100) NOT NULL COMMENT '用户密码',
  `mobile` varchar(20) NOT NULL COMMENT '用户手机号',
  `authKey` varchar(100) NOT NULL DEFAULT '' COMMENT 'authKey',
  `accessToken` varchar(100) NOT NULL DEFAULT '' COMMENT 'accessToken',
  `created_at` int(10) DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(10) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tq_admin
-- ----------------------------
INSERT INTO `tq_admin` VALUES ('5', 'admin', '89b5c3c297a0975c0ec4ca49335ec4db', '18814826822', 'LfViXpIbkUd_8wwKDhSqL5XDAT-bWBSy', '', '1481468397', '1481468397');
INSERT INTO `tq_admin` VALUES ('6', 'aaa', '$2y$13$WhJDz/7/J.1z1ChlcdYXv.ENdfnZpFfZ8nrn3/wBdOvfqGeA70uEa', '3', '', '', '0', '0');

-- ----------------------------
-- Table structure for tq_article
-- ----------------------------
DROP TABLE IF EXISTS `tq_article`;
CREATE TABLE `tq_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `link` varchar(255) NOT NULL COMMENT '跳转链接',
  `pic` varchar(255) NOT NULL COMMENT '图片地址',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_article
-- ----------------------------

-- ----------------------------
-- Table structure for tq_btn
-- ----------------------------
DROP TABLE IF EXISTS `tq_btn`;
CREATE TABLE `tq_btn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '按钮名称',
  `display_text` varchar(255) NOT NULL DEFAULT '' COMMENT '前台展示文字',
  `link` varchar(255) NOT NULL DEFAULT '' COMMENT '跳转目标地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_btn
-- ----------------------------
INSERT INTO `tq_btn` VALUES ('1', '按钮1', '开始注册(登录)', 'http://baidu.com');
INSERT INTO `tq_btn` VALUES ('2', '按钮2', '更多', 'http://baidu.com');
INSERT INTO `tq_btn` VALUES ('3', '按钮3', '提问', 'http://baidu.com');
INSERT INTO `tq_btn` VALUES ('4', '按钮4', '回答', 'http://baidu.com');
INSERT INTO `tq_btn` VALUES ('5', '按钮5', '注册（登录）', 'http://baidu.com');

-- ----------------------------
-- Table structure for tq_btn_click_tracking
-- ----------------------------
DROP TABLE IF EXISTS `tq_btn_click_tracking`;
CREATE TABLE `tq_btn_click_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `btn_id` int(11) NOT NULL DEFAULT '0' COMMENT '按钮id',
  `ip` varchar(255) NOT NULL DEFAULT '' COMMENT '访问ip',
  `created_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_btn_click_tracking
-- ----------------------------
INSERT INTO `tq_btn_click_tracking` VALUES ('13', '1', '172.17.0.1', '1506166397', '1506166397');
INSERT INTO `tq_btn_click_tracking` VALUES ('14', '1', '172.17.0.1', '1506166457', '1506166457');
INSERT INTO `tq_btn_click_tracking` VALUES ('15', '2', '172.17.0.1', '1506166528', '1506166528');
INSERT INTO `tq_btn_click_tracking` VALUES ('16', '3', '172.17.0.1', '1506166598', '1506166598');
INSERT INTO `tq_btn_click_tracking` VALUES ('17', '4', '172.17.0.1', '1506166599', '1506166599');
INSERT INTO `tq_btn_click_tracking` VALUES ('18', '5', '172.17.0.1', '1506166623', '1506166623');
INSERT INTO `tq_btn_click_tracking` VALUES ('19', '2', '172.17.0.1', '1506167410', '1506167410');
INSERT INTO `tq_btn_click_tracking` VALUES ('20', '2', '172.17.0.1', '1506171538', '1506171538');
INSERT INTO `tq_btn_click_tracking` VALUES ('21', '4', '172.17.0.1', '1506171583', '1506171583');
INSERT INTO `tq_btn_click_tracking` VALUES ('22', '4', '172.17.0.1', '1506171604', '1506171604');
INSERT INTO `tq_btn_click_tracking` VALUES ('23', '2', '172.17.0.1', '1506171622', '1506171622');
INSERT INTO `tq_btn_click_tracking` VALUES ('24', '4', '172.17.0.1', '1506171625', '1506171625');
INSERT INTO `tq_btn_click_tracking` VALUES ('25', '2', '172.17.0.1', '1506171685', '1506171685');
INSERT INTO `tq_btn_click_tracking` VALUES ('26', '4', '172.17.0.1', '1506171692', '1506171692');
INSERT INTO `tq_btn_click_tracking` VALUES ('27', '4', '172.17.0.1', '1506171699', '1506171699');
INSERT INTO `tq_btn_click_tracking` VALUES ('28', '5', '172.17.0.1', '1506171709', '1506171709');
INSERT INTO `tq_btn_click_tracking` VALUES ('29', '4', '172.17.0.1', '1506173908', '1506173908');
INSERT INTO `tq_btn_click_tracking` VALUES ('30', '4', '172.17.0.1', '1506173915', '1506173915');
INSERT INTO `tq_btn_click_tracking` VALUES ('31', '4', '172.17.0.1', '1506173925', '1506173925');
INSERT INTO `tq_btn_click_tracking` VALUES ('32', '2', '172.17.0.1', '1506173967', '1506173967');
INSERT INTO `tq_btn_click_tracking` VALUES ('33', '4', '172.17.0.1', '1506173971', '1506173971');
INSERT INTO `tq_btn_click_tracking` VALUES ('34', '1', '172.17.0.1', '1506173983', '1506173983');
INSERT INTO `tq_btn_click_tracking` VALUES ('35', '2', '172.17.0.1', '1506175920', '1506175920');
INSERT INTO `tq_btn_click_tracking` VALUES ('36', '4', '172.17.0.1', '1506175924', '1506175924');
INSERT INTO `tq_btn_click_tracking` VALUES ('37', '5', '172.17.0.1', '1506175927', '1506175927');
INSERT INTO `tq_btn_click_tracking` VALUES ('38', '2', '172.17.0.1', '1506216913', '1506216913');
INSERT INTO `tq_btn_click_tracking` VALUES ('39', '1', '172.17.0.1', '1506236725', '1506236725');
INSERT INTO `tq_btn_click_tracking` VALUES ('40', '4', '172.17.0.1', '1506236729', '1506236729');
INSERT INTO `tq_btn_click_tracking` VALUES ('41', '4', '172.17.0.1', '1506236793', '1506236793');
INSERT INTO `tq_btn_click_tracking` VALUES ('42', '5', '172.17.0.1', '1506236797', '1506236797');
INSERT INTO `tq_btn_click_tracking` VALUES ('43', '2', '172.17.0.1', '1506237493', '1506237493');
INSERT INTO `tq_btn_click_tracking` VALUES ('44', '4', '172.17.0.1', '1506237957', '1506237957');
INSERT INTO `tq_btn_click_tracking` VALUES ('45', '5', '172.17.0.1', '1506237966', '1506237966');
INSERT INTO `tq_btn_click_tracking` VALUES ('46', '5', '172.17.0.1', '1506238415', '1506238415');
INSERT INTO `tq_btn_click_tracking` VALUES ('47', '1', '172.17.0.1', '1506238428', '1506238428');
INSERT INTO `tq_btn_click_tracking` VALUES ('48', '4', '172.17.0.1', '1506238432', '1506238432');
INSERT INTO `tq_btn_click_tracking` VALUES ('49', '5', '172.17.0.1', '1506238435', '1506238435');
INSERT INTO `tq_btn_click_tracking` VALUES ('50', '5', '172.17.0.1', '1506238442', '1506238442');
INSERT INTO `tq_btn_click_tracking` VALUES ('51', '1', '172.17.0.1', '1506238463', '1506238463');
INSERT INTO `tq_btn_click_tracking` VALUES ('52', '4', '172.17.0.1', '1506238468', '1506238468');
INSERT INTO `tq_btn_click_tracking` VALUES ('53', '5', '172.17.0.1', '1506238470', '1506238470');
INSERT INTO `tq_btn_click_tracking` VALUES ('54', '2', '172.17.0.1', '1506238486', '1506238486');
INSERT INTO `tq_btn_click_tracking` VALUES ('55', '4', '172.17.0.1', '1506238490', '1506238490');
INSERT INTO `tq_btn_click_tracking` VALUES ('56', '5', '172.17.0.1', '1506238493', '1506238493');
INSERT INTO `tq_btn_click_tracking` VALUES ('57', '2', '172.17.0.1', '1506238526', '1506238526');
INSERT INTO `tq_btn_click_tracking` VALUES ('58', '4', '172.17.0.1', '1506238530', '1506238530');
INSERT INTO `tq_btn_click_tracking` VALUES ('59', '5', '172.17.0.1', '1506238533', '1506238533');
INSERT INTO `tq_btn_click_tracking` VALUES ('60', '5', '172.17.0.1', '1506239289', '1506239289');
INSERT INTO `tq_btn_click_tracking` VALUES ('61', '5', '172.17.0.1', '1506239306', '1506239306');

-- ----------------------------
-- Table structure for tq_config
-- ----------------------------
DROP TABLE IF EXISTS `tq_config`;
CREATE TABLE `tq_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `we_chat_app_id` varchar(100) NOT NULL DEFAULT '' COMMENT '微信账号app id',
  `we_chat_secret` varchar(100) NOT NULL DEFAULT '' COMMENT '微信账号secret',
  `we_chat_token` varchar(100) NOT NULL DEFAULT '' COMMENT '微信账号token',
  `admin_mobile` varchar(255) NOT NULL DEFAULT '' COMMENT '接收短信的管理员手机号, 多个手机号用,逗号隔开',
  `webName` varchar(50) NOT NULL DEFAULT '' COMMENT '网站名称',
  `distance_limit` int(10) NOT NULL DEFAULT '0' COMMENT '匹配距离,以米为单位.如:1000为1公里',
  `clock_time_limit` smallint(3) NOT NULL DEFAULT '0' COMMENT '上班时间限制,分钟为单位.如:120为2小时',
  `off_duty_limit` smallint(3) NOT NULL DEFAULT '0' COMMENT '下班时间限制,分钟为单位.如:120为2小时',
  `send_msg` smallint(1) NOT NULL DEFAULT '0' COMMENT '是否发送短信',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_config
-- ----------------------------

-- ----------------------------
-- Table structure for tq_guestbook
-- ----------------------------
DROP TABLE IF EXISTS `tq_guestbook`;
CREATE TABLE `tq_guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT '留言者邮箱',
  `content` text COMMENT '留言内容',
  `created_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_guestbook
-- ----------------------------
INSERT INTO `tq_guestbook` VALUES ('3', '2532@qq.com', 'testzzzz', '1506122187', '1506122187');
INSERT INTO `tq_guestbook` VALUES ('4', '2532@qq.com', 'test', '1506122356', '1506122356');
INSERT INTO `tq_guestbook` VALUES ('5', '2532@qq.com', 'testsss', '1506122412', '1506122412');
INSERT INTO `tq_guestbook` VALUES ('6', '21JackXiao@qq.com', '321321', '1506166991', '1506166991');
INSERT INTO `tq_guestbook` VALUES ('7', '21JackXiao@qq.com', '321321', '1506167139', '1506167139');
INSERT INTO `tq_guestbook` VALUES ('8', '21JackXiao@qq.com', '321321', '1506167175', '1506167175');
INSERT INTO `tq_guestbook` VALUES ('9', '2447391779@qq.com', '32321', '1506167275', '1506167275');
INSERT INTO `tq_guestbook` VALUES ('10', '2447391779@qq.com', '321432432aafdsf你沁', '1506167397', '1506167397');
INSERT INTO `tq_guestbook` VALUES ('14', '3333444@qq.com', '', '1506174286', '1506174286');
INSERT INTO `tq_guestbook` VALUES ('15', '3333444@qq.com', '321321', '1506174308', '1506174308');
INSERT INTO `tq_guestbook` VALUES ('16', '323@3332.com', '321321432', '1506236487', '1506236487');
INSERT INTO `tq_guestbook` VALUES ('17', '3333444@qq.com', '321', '1506236518', '1506236518');
INSERT INTO `tq_guestbook` VALUES ('18', '21JackXiao@qq.com', '33233', '1506238452', '1506238452');

-- ----------------------------
-- Table structure for tq_migration
-- ----------------------------
DROP TABLE IF EXISTS `tq_migration`;
CREATE TABLE `tq_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_migration
-- ----------------------------
INSERT INTO `tq_migration` VALUES ('m000000_000000_base', '1506038702');
INSERT INTO `tq_migration` VALUES ('m161125_121720_create_user_table', '1506038719');
INSERT INTO `tq_migration` VALUES ('m161125_132615_create_user_info_table', '1506038720');
INSERT INTO `tq_migration` VALUES ('m161125_143842_alter_column_for_table_user', '1506038721');
INSERT INTO `tq_migration` VALUES ('m161125_161306_set_default_value_for_password_colomn_in_user_table', '1506038721');
INSERT INTO `tq_migration` VALUES ('m161126_025731_alter_coloumn_mobile_for_user_table', '1506038721');
INSERT INTO `tq_migration` VALUES ('m161126_030005_alter_column_user_id_for_table_user_info', '1506038722');
INSERT INTO `tq_migration` VALUES ('m161126_112817_add_column_timeliness_for_table_user_info', '1506038723');
INSERT INTO `tq_migration` VALUES ('m161129_122600_create_table_tq_team', '1506038723');
INSERT INTO `tq_migration` VALUES ('m161129_123243_create_table_tq_team_user', '1506038724');
INSERT INTO `tq_migration` VALUES ('m161129_125719_add_column_is_matched_for_table_user', '1506038725');
INSERT INTO `tq_migration` VALUES ('m161201_135828_add_column_user_statuss_for_users_table', '1506038726');
INSERT INTO `tq_migration` VALUES ('m161203_074526_add_column_route_name_and_time_for_table_team', '1506038731');
INSERT INTO `tq_migration` VALUES ('m161204_134630_add_column_open_id_for_user_table', '1506038731');
INSERT INTO `tq_migration` VALUES ('m161204_140805_create_table_we_chat', '1506038732');
INSERT INTO `tq_migration` VALUES ('m161204_144617_unique_column_user_id_for_table_we_chat', '1506038733');
INSERT INTO `tq_migration` VALUES ('m161208_135958_create_table_admin', '1506038734');
INSERT INTO `tq_migration` VALUES ('m161209_082036_create_article_table', '1506038735');
INSERT INTO `tq_migration` VALUES ('m161209_094136_create_config_table', '1506038736');
INSERT INTO `tq_migration` VALUES ('m161212_060138_add_invote_code_column_for_user_info', '1506038737');
INSERT INTO `tq_migration` VALUES ('m161212_065055_add_column_invite_code_for_tq_user', '1506038738');
INSERT INTO `tq_migration` VALUES ('m170922_042247_create_btn_table', '1506054647');
INSERT INTO `tq_migration` VALUES ('m170922_043238_create_page_table', '1506055041');
INSERT INTO `tq_migration` VALUES ('m170922_043810_create_btn_click_table', '1506055411');
INSERT INTO `tq_migration` VALUES ('m170922_044406_create_page_tracking_table', '1506055545');
INSERT INTO `tq_migration` VALUES ('m170922_221227_create_guestbook_table', '1506119219');
INSERT INTO `tq_migration` VALUES ('m170923_091550_add_page_name_column_to_page_table', '1506158675');
INSERT INTO `tq_migration` VALUES ('m170923_095837_modify_page_table_drop_multy_column', '1506160894');

-- ----------------------------
-- Table structure for tq_page
-- ----------------------------
DROP TABLE IF EXISTS `tq_page`;
CREATE TABLE `tq_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL DEFAULT '' COMMENT '页面名称',
  `title` text COMMENT '标题',
  `content_1` text COMMENT '内容1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_page
-- ----------------------------
INSERT INTO `tq_page` VALUES ('1', '第1个页面', '提问式网站搜索平台-发现新资源', 'HIFI是一个通过提问，网友推荐从而找到小众、新网站的平台。每一次搜索就是一次提问老铁的回答可能比排名更符合你的要求');
INSERT INTO `tq_page` VALUES ('2', '第2个页面', '提议一个问题，类似“有哪些学习的网站可推荐”让别人帮你更精准推荐，您也可以选择“回答”，来帮助别人，通过大家参与创作的形式把最好网站推荐给大家。', '所有目录、内容都可以由任意人编辑修改');
INSERT INTO `tq_page` VALUES ('3', '第3个页面', '“发现”比“找到”更重要', '针对传统网址导航我们做了如下改进： 以提问作为网址内容入口，甚至是目录 提高网民对收录网站的参与程度，任何人可推荐网址，参与编辑 形成更加开放的网站收录和评价平台');
INSERT INTO `tq_page` VALUES ('4', '第4个页面', '我们的产品仍在开发中', '非常感谢您对我们的产品感兴趣，我们将全力以赴加快进度，非常希望留下宝贵意见');

-- ----------------------------
-- Table structure for tq_page_copy
-- ----------------------------
DROP TABLE IF EXISTS `tq_page_copy`;
CREATE TABLE `tq_page_copy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL DEFAULT '' COMMENT '页面名称',
  `title` text COMMENT '标题',
  `content_1` text COMMENT '内容1',
  `content_2` text COMMENT '内容2',
  `content_3` text COMMENT '内容3',
  `content_4` text COMMENT '内容4',
  `content_5` text COMMENT '内容5',
  `content_6` text COMMENT '内容6',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_page_copy
-- ----------------------------
INSERT INTO `tq_page_copy` VALUES ('1', '第1个页面', '提问式网站搜索平台-发现新资源', 'HIFI是一个通过提问，网友推荐从而找到小众、新网站的平台。每一次搜索就是一次提问老铁的回答可能比排名更符合你的要求', '', '', '', '', '');
INSERT INTO `tq_page_copy` VALUES ('2', '第2个页面', '提议一个问题，类似“有哪些学习的网站可推荐”让别人帮你更精准推荐，您也可以选择“回答”，来帮助别人，通过大家参与创作的形式把最好网站推荐给大家。', '所有目录、内容都可以由任意人编辑修改', '', '', '', '', '');
INSERT INTO `tq_page_copy` VALUES ('3', '第3个页面', '“发现”比“找到”更重要', '针对传统网址导航我们做了如下改进： 以提问作为网址内容入口，甚至是目录 提高网民对收录网站的参与程度，任何人可推荐网址，参与编辑 形成更加开放的网站收录和评价平台', '', '', '', '', '');
INSERT INTO `tq_page_copy` VALUES ('4', '第4个页面', '我们的产品仍在开发中', '非常感谢您对我们的产品感兴趣，我们将全力以赴加快进度，非常希望留下宝贵意见', '', '', '', '', '');

-- ----------------------------
-- Table structure for tq_page_show_tracking
-- ----------------------------
DROP TABLE IF EXISTS `tq_page_show_tracking`;
CREATE TABLE `tq_page_show_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL DEFAULT '0' COMMENT '按钮id',
  `ip` varchar(255) NOT NULL DEFAULT '' COMMENT '访问ip',
  `created_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=286 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_page_show_tracking
-- ----------------------------
INSERT INTO `tq_page_show_tracking` VALUES ('1', '1', '192.168.99.88', '1506061083', '1506061083');
INSERT INTO `tq_page_show_tracking` VALUES ('2', '1', '192.168.99.7', '1506061180', '1506061180');
INSERT INTO `tq_page_show_tracking` VALUES ('3', '2', '192.168.99.8', '1506061189', '1506061189');
INSERT INTO `tq_page_show_tracking` VALUES ('4', '2', '192.168.99.7', '1506061195', '1506061195');
INSERT INTO `tq_page_show_tracking` VALUES ('5', '3', '192.168.99.7', '1506061208', '1506061208');
INSERT INTO `tq_page_show_tracking` VALUES ('6', '1', '192.168.99.7', '1506061210', '1506061210');
INSERT INTO `tq_page_show_tracking` VALUES ('7', '1', '192.168.99.8', '1506061212', '1506061212');
INSERT INTO `tq_page_show_tracking` VALUES ('8', '3', '192.168.99.7', '1506061216', '1506061216');
INSERT INTO `tq_page_show_tracking` VALUES ('9', '2', '192.168.99.9', '1506061257', '1506061257');
INSERT INTO `tq_page_show_tracking` VALUES ('10', '2', '192.168.99.9', '1506061266', '1506061266');
INSERT INTO `tq_page_show_tracking` VALUES ('11', '3', '192.168.99.8', '1506061292', '1506061292');
INSERT INTO `tq_page_show_tracking` VALUES ('12', '3', '192.168.99.9', '1506061411', '1506061411');
INSERT INTO `tq_page_show_tracking` VALUES ('13', '4', '172.17.0.1', '1506172862', '1506172862');
INSERT INTO `tq_page_show_tracking` VALUES ('14', '1', '172.17.0.1', '1506173900', '1506173900');
INSERT INTO `tq_page_show_tracking` VALUES ('15', '2', '172.17.0.1', '1506173906', '1506173906');
INSERT INTO `tq_page_show_tracking` VALUES ('16', '3', '172.17.0.1', '1506173908', '1506173908');
INSERT INTO `tq_page_show_tracking` VALUES ('17', '2', '172.17.0.1', '1506173909', '1506173909');
INSERT INTO `tq_page_show_tracking` VALUES ('18', '3', '172.17.0.1', '1506173915', '1506173915');
INSERT INTO `tq_page_show_tracking` VALUES ('19', '1', '172.17.0.1', '1506173919', '1506173919');
INSERT INTO `tq_page_show_tracking` VALUES ('20', '2', '172.17.0.1', '1506173922', '1506173922');
INSERT INTO `tq_page_show_tracking` VALUES ('21', '3', '172.17.0.1', '1506173925', '1506173925');
INSERT INTO `tq_page_show_tracking` VALUES ('22', '2', '172.17.0.1', '1506173926', '1506173926');
INSERT INTO `tq_page_show_tracking` VALUES ('23', '2', '172.17.0.1', '1506173963', '1506173963');
INSERT INTO `tq_page_show_tracking` VALUES ('24', '2', '172.17.0.1', '1506173967', '1506173967');
INSERT INTO `tq_page_show_tracking` VALUES ('25', '2', '172.17.0.1', '1506173968', '1506173968');
INSERT INTO `tq_page_show_tracking` VALUES ('26', '3', '172.17.0.1', '1506173971', '1506173971');
INSERT INTO `tq_page_show_tracking` VALUES ('27', '3', '172.17.0.1', '1506173973', '1506173973');
INSERT INTO `tq_page_show_tracking` VALUES ('28', '4', '172.17.0.1', '1506173977', '1506173977');
INSERT INTO `tq_page_show_tracking` VALUES ('29', '1', '172.17.0.1', '1506173981', '1506173981');
INSERT INTO `tq_page_show_tracking` VALUES ('30', '2', '172.17.0.1', '1506173983', '1506173983');
INSERT INTO `tq_page_show_tracking` VALUES ('31', '3', '172.17.0.1', '1506173986', '1506173986');
INSERT INTO `tq_page_show_tracking` VALUES ('32', '4', '172.17.0.1', '1506173988', '1506173988');
INSERT INTO `tq_page_show_tracking` VALUES ('33', '4', '172.17.0.1', '1506174014', '1506174014');
INSERT INTO `tq_page_show_tracking` VALUES ('34', '4', '172.17.0.1', '1506174204', '1506174204');
INSERT INTO `tq_page_show_tracking` VALUES ('35', '4', '172.17.0.1', '1506174221', '1506174221');
INSERT INTO `tq_page_show_tracking` VALUES ('36', '4', '172.17.0.1', '1506174241', '1506174241');
INSERT INTO `tq_page_show_tracking` VALUES ('37', '4', '172.17.0.1', '1506174277', '1506174277');
INSERT INTO `tq_page_show_tracking` VALUES ('38', '4', '172.17.0.1', '1506174297', '1506174297');
INSERT INTO `tq_page_show_tracking` VALUES ('39', '1', '172.17.0.1', '1506174314', '1506174314');
INSERT INTO `tq_page_show_tracking` VALUES ('40', '1', '172.17.0.1', '1506175472', '1506175472');
INSERT INTO `tq_page_show_tracking` VALUES ('41', '2', '172.17.0.1', '1506175475', '1506175475');
INSERT INTO `tq_page_show_tracking` VALUES ('42', '1', '172.17.0.1', '1506175917', '1506175917');
INSERT INTO `tq_page_show_tracking` VALUES ('43', '2', '172.17.0.1', '1506175920', '1506175920');
INSERT INTO `tq_page_show_tracking` VALUES ('44', '2', '172.17.0.1', '1506175921', '1506175921');
INSERT INTO `tq_page_show_tracking` VALUES ('45', '3', '172.17.0.1', '1506175924', '1506175924');
INSERT INTO `tq_page_show_tracking` VALUES ('46', '4', '172.17.0.1', '1506175927', '1506175927');
INSERT INTO `tq_page_show_tracking` VALUES ('47', '4', '172.17.0.1', '1506175928', '1506175928');
INSERT INTO `tq_page_show_tracking` VALUES ('48', '1', '172.17.0.1', '1506216910', '1506216910');
INSERT INTO `tq_page_show_tracking` VALUES ('49', '2', '172.17.0.1', '1506216913', '1506216913');
INSERT INTO `tq_page_show_tracking` VALUES ('50', '2', '172.17.0.1', '1506216915', '1506216915');
INSERT INTO `tq_page_show_tracking` VALUES ('51', '3', '172.17.0.1', '1506218714', '1506218714');
INSERT INTO `tq_page_show_tracking` VALUES ('52', '1', '172.17.0.1', '1506231734', '1506231734');
INSERT INTO `tq_page_show_tracking` VALUES ('53', '1', '172.17.0.1', '1506233129', '1506233129');
INSERT INTO `tq_page_show_tracking` VALUES ('54', '1', '172.17.0.1', '1506233132', '1506233132');
INSERT INTO `tq_page_show_tracking` VALUES ('55', '1', '172.17.0.1', '1506233136', '1506233136');
INSERT INTO `tq_page_show_tracking` VALUES ('56', '1', '172.17.0.1', '1506233149', '1506233149');
INSERT INTO `tq_page_show_tracking` VALUES ('57', '1', '172.17.0.1', '1506233151', '1506233151');
INSERT INTO `tq_page_show_tracking` VALUES ('58', '1', '172.17.0.1', '1506233220', '1506233220');
INSERT INTO `tq_page_show_tracking` VALUES ('59', '1', '172.17.0.1', '1506233224', '1506233224');
INSERT INTO `tq_page_show_tracking` VALUES ('60', '1', '172.17.0.1', '1506233307', '1506233307');
INSERT INTO `tq_page_show_tracking` VALUES ('61', '1', '172.17.0.1', '1506233383', '1506233383');
INSERT INTO `tq_page_show_tracking` VALUES ('62', '1', '172.17.0.1', '1506233406', '1506233406');
INSERT INTO `tq_page_show_tracking` VALUES ('63', '1', '172.17.0.1', '1506233411', '1506233411');
INSERT INTO `tq_page_show_tracking` VALUES ('64', '1', '172.17.0.1', '1506233413', '1506233413');
INSERT INTO `tq_page_show_tracking` VALUES ('65', '1', '172.17.0.1', '1506233415', '1506233415');
INSERT INTO `tq_page_show_tracking` VALUES ('66', '2', '172.17.0.1', '1506233419', '1506233419');
INSERT INTO `tq_page_show_tracking` VALUES ('67', '2', '172.17.0.1', '1506233421', '1506233421');
INSERT INTO `tq_page_show_tracking` VALUES ('68', '3', '172.17.0.1', '1506233424', '1506233424');
INSERT INTO `tq_page_show_tracking` VALUES ('69', '4', '172.17.0.1', '1506233428', '1506233428');
INSERT INTO `tq_page_show_tracking` VALUES ('70', '4', '172.17.0.1', '1506233430', '1506233430');
INSERT INTO `tq_page_show_tracking` VALUES ('71', '1', '172.17.0.1', '1506233433', '1506233433');
INSERT INTO `tq_page_show_tracking` VALUES ('72', '1', '172.17.0.1', '1506233470', '1506233470');
INSERT INTO `tq_page_show_tracking` VALUES ('73', '1', '172.17.0.1', '1506233533', '1506233533');
INSERT INTO `tq_page_show_tracking` VALUES ('74', '1', '172.17.0.1', '1506233589', '1506233589');
INSERT INTO `tq_page_show_tracking` VALUES ('75', '1', '172.17.0.1', '1506233678', '1506233678');
INSERT INTO `tq_page_show_tracking` VALUES ('76', '1', '172.17.0.1', '1506233754', '1506233754');
INSERT INTO `tq_page_show_tracking` VALUES ('77', '1', '172.17.0.1', '1506233759', '1506233759');
INSERT INTO `tq_page_show_tracking` VALUES ('78', '1', '172.17.0.1', '1506233773', '1506233773');
INSERT INTO `tq_page_show_tracking` VALUES ('79', '1', '172.17.0.1', '1506233795', '1506233795');
INSERT INTO `tq_page_show_tracking` VALUES ('80', '1', '172.17.0.1', '1506233827', '1506233827');
INSERT INTO `tq_page_show_tracking` VALUES ('81', '1', '172.17.0.1', '1506233837', '1506233837');
INSERT INTO `tq_page_show_tracking` VALUES ('82', '1', '172.17.0.1', '1506233849', '1506233849');
INSERT INTO `tq_page_show_tracking` VALUES ('83', '1', '172.17.0.1', '1506233853', '1506233853');
INSERT INTO `tq_page_show_tracking` VALUES ('84', '1', '172.17.0.1', '1506233853', '1506233853');
INSERT INTO `tq_page_show_tracking` VALUES ('85', '1', '172.17.0.1', '1506233867', '1506233867');
INSERT INTO `tq_page_show_tracking` VALUES ('86', '1', '172.17.0.1', '1506233873', '1506233873');
INSERT INTO `tq_page_show_tracking` VALUES ('87', '1', '172.17.0.1', '1506233892', '1506233892');
INSERT INTO `tq_page_show_tracking` VALUES ('88', '1', '172.17.0.1', '1506233903', '1506233903');
INSERT INTO `tq_page_show_tracking` VALUES ('89', '1', '172.17.0.1', '1506233939', '1506233939');
INSERT INTO `tq_page_show_tracking` VALUES ('90', '2', '172.17.0.1', '1506233957', '1506233957');
INSERT INTO `tq_page_show_tracking` VALUES ('91', '3', '172.17.0.1', '1506233960', '1506233960');
INSERT INTO `tq_page_show_tracking` VALUES ('92', '1', '172.17.0.1', '1506234036', '1506234036');
INSERT INTO `tq_page_show_tracking` VALUES ('93', '1', '172.17.0.1', '1506234165', '1506234165');
INSERT INTO `tq_page_show_tracking` VALUES ('94', '1', '172.17.0.1', '1506234169', '1506234169');
INSERT INTO `tq_page_show_tracking` VALUES ('95', '1', '172.17.0.1', '1506234193', '1506234193');
INSERT INTO `tq_page_show_tracking` VALUES ('96', '1', '172.17.0.1', '1506234546', '1506234546');
INSERT INTO `tq_page_show_tracking` VALUES ('97', '1', '172.17.0.1', '1506234569', '1506234569');
INSERT INTO `tq_page_show_tracking` VALUES ('98', '1', '172.17.0.1', '1506234604', '1506234604');
INSERT INTO `tq_page_show_tracking` VALUES ('99', '1', '172.17.0.1', '1506234647', '1506234647');
INSERT INTO `tq_page_show_tracking` VALUES ('100', '1', '172.17.0.1', '1506234680', '1506234680');
INSERT INTO `tq_page_show_tracking` VALUES ('101', '1', '172.17.0.1', '1506234700', '1506234700');
INSERT INTO `tq_page_show_tracking` VALUES ('102', '1', '172.17.0.1', '1506234725', '1506234725');
INSERT INTO `tq_page_show_tracking` VALUES ('103', '1', '172.17.0.1', '1506234778', '1506234778');
INSERT INTO `tq_page_show_tracking` VALUES ('104', '1', '172.17.0.1', '1506234799', '1506234799');
INSERT INTO `tq_page_show_tracking` VALUES ('105', '1', '172.17.0.1', '1506234863', '1506234863');
INSERT INTO `tq_page_show_tracking` VALUES ('106', '1', '172.17.0.1', '1506234900', '1506234900');
INSERT INTO `tq_page_show_tracking` VALUES ('107', '1', '172.17.0.1', '1506234934', '1506234934');
INSERT INTO `tq_page_show_tracking` VALUES ('108', '1', '172.17.0.1', '1506234952', '1506234952');
INSERT INTO `tq_page_show_tracking` VALUES ('109', '1', '172.17.0.1', '1506234978', '1506234978');
INSERT INTO `tq_page_show_tracking` VALUES ('110', '1', '172.17.0.1', '1506234998', '1506234998');
INSERT INTO `tq_page_show_tracking` VALUES ('111', '1', '172.17.0.1', '1506235011', '1506235011');
INSERT INTO `tq_page_show_tracking` VALUES ('112', '1', '172.17.0.1', '1506235024', '1506235024');
INSERT INTO `tq_page_show_tracking` VALUES ('113', '1', '172.17.0.1', '1506235054', '1506235054');
INSERT INTO `tq_page_show_tracking` VALUES ('114', '1', '172.17.0.1', '1506235057', '1506235057');
INSERT INTO `tq_page_show_tracking` VALUES ('115', '1', '172.17.0.1', '1506235066', '1506235066');
INSERT INTO `tq_page_show_tracking` VALUES ('116', '2', '172.17.0.1', '1506235076', '1506235076');
INSERT INTO `tq_page_show_tracking` VALUES ('117', '1', '172.17.0.1', '1506235081', '1506235081');
INSERT INTO `tq_page_show_tracking` VALUES ('118', '1', '172.17.0.1', '1506235092', '1506235092');
INSERT INTO `tq_page_show_tracking` VALUES ('119', '1', '172.17.0.1', '1506235114', '1506235114');
INSERT INTO `tq_page_show_tracking` VALUES ('120', '1', '172.17.0.1', '1506235150', '1506235150');
INSERT INTO `tq_page_show_tracking` VALUES ('121', '2', '172.17.0.1', '1506235154', '1506235154');
INSERT INTO `tq_page_show_tracking` VALUES ('122', '2', '172.17.0.1', '1506235236', '1506235236');
INSERT INTO `tq_page_show_tracking` VALUES ('123', '2', '172.17.0.1', '1506235253', '1506235253');
INSERT INTO `tq_page_show_tracking` VALUES ('124', '2', '172.17.0.1', '1506235293', '1506235293');
INSERT INTO `tq_page_show_tracking` VALUES ('125', '2', '172.17.0.1', '1506235324', '1506235324');
INSERT INTO `tq_page_show_tracking` VALUES ('126', '1', '172.17.0.1', '1506235330', '1506235330');
INSERT INTO `tq_page_show_tracking` VALUES ('127', '2', '172.17.0.1', '1506235333', '1506235333');
INSERT INTO `tq_page_show_tracking` VALUES ('128', '3', '172.17.0.1', '1506235338', '1506235338');
INSERT INTO `tq_page_show_tracking` VALUES ('129', '3', '172.17.0.1', '1506235417', '1506235417');
INSERT INTO `tq_page_show_tracking` VALUES ('130', '2', '172.17.0.1', '1506235422', '1506235422');
INSERT INTO `tq_page_show_tracking` VALUES ('131', '2', '172.17.0.1', '1506235426', '1506235426');
INSERT INTO `tq_page_show_tracking` VALUES ('132', '2', '172.17.0.1', '1506235435', '1506235435');
INSERT INTO `tq_page_show_tracking` VALUES ('133', '2', '172.17.0.1', '1506235441', '1506235441');
INSERT INTO `tq_page_show_tracking` VALUES ('134', '3', '172.17.0.1', '1506235445', '1506235445');
INSERT INTO `tq_page_show_tracking` VALUES ('135', '3', '172.17.0.1', '1506235470', '1506235470');
INSERT INTO `tq_page_show_tracking` VALUES ('136', '3', '172.17.0.1', '1506235480', '1506235480');
INSERT INTO `tq_page_show_tracking` VALUES ('137', '3', '172.17.0.1', '1506235500', '1506235500');
INSERT INTO `tq_page_show_tracking` VALUES ('138', '3', '172.17.0.1', '1506235515', '1506235515');
INSERT INTO `tq_page_show_tracking` VALUES ('139', '4', '172.17.0.1', '1506235519', '1506235519');
INSERT INTO `tq_page_show_tracking` VALUES ('140', '4', '172.17.0.1', '1506235841', '1506235841');
INSERT INTO `tq_page_show_tracking` VALUES ('141', '4', '172.17.0.1', '1506235879', '1506235879');
INSERT INTO `tq_page_show_tracking` VALUES ('142', '4', '172.17.0.1', '1506235895', '1506235895');
INSERT INTO `tq_page_show_tracking` VALUES ('143', '4', '172.17.0.1', '1506235907', '1506235907');
INSERT INTO `tq_page_show_tracking` VALUES ('144', '4', '172.17.0.1', '1506235930', '1506235930');
INSERT INTO `tq_page_show_tracking` VALUES ('145', '4', '172.17.0.1', '1506235992', '1506235992');
INSERT INTO `tq_page_show_tracking` VALUES ('146', '4', '172.17.0.1', '1506236142', '1506236142');
INSERT INTO `tq_page_show_tracking` VALUES ('147', '4', '172.17.0.1', '1506236176', '1506236176');
INSERT INTO `tq_page_show_tracking` VALUES ('148', '4', '172.17.0.1', '1506236231', '1506236231');
INSERT INTO `tq_page_show_tracking` VALUES ('149', '4', '172.17.0.1', '1506236290', '1506236290');
INSERT INTO `tq_page_show_tracking` VALUES ('150', '4', '172.17.0.1', '1506236347', '1506236347');
INSERT INTO `tq_page_show_tracking` VALUES ('151', '4', '172.17.0.1', '1506236396', '1506236396');
INSERT INTO `tq_page_show_tracking` VALUES ('152', '4', '172.17.0.1', '1506236403', '1506236403');
INSERT INTO `tq_page_show_tracking` VALUES ('153', '4', '172.17.0.1', '1506236421', '1506236421');
INSERT INTO `tq_page_show_tracking` VALUES ('154', '4', '172.17.0.1', '1506236429', '1506236429');
INSERT INTO `tq_page_show_tracking` VALUES ('155', '4', '172.17.0.1', '1506236467', '1506236467');
INSERT INTO `tq_page_show_tracking` VALUES ('156', '4', '172.17.0.1', '1506236515', '1506236515');
INSERT INTO `tq_page_show_tracking` VALUES ('157', '4', '172.17.0.1', '1506236617', '1506236617');
INSERT INTO `tq_page_show_tracking` VALUES ('158', '4', '172.17.0.1', '1506236645', '1506236645');
INSERT INTO `tq_page_show_tracking` VALUES ('159', '4', '172.17.0.1', '1506236667', '1506236667');
INSERT INTO `tq_page_show_tracking` VALUES ('160', '4', '172.17.0.1', '1506236677', '1506236677');
INSERT INTO `tq_page_show_tracking` VALUES ('161', '4', '172.17.0.1', '1506236684', '1506236684');
INSERT INTO `tq_page_show_tracking` VALUES ('162', '3', '172.17.0.1', '1506236698', '1506236698');
INSERT INTO `tq_page_show_tracking` VALUES ('163', '2', '172.17.0.1', '1506236710', '1506236710');
INSERT INTO `tq_page_show_tracking` VALUES ('164', '1', '172.17.0.1', '1506236719', '1506236719');
INSERT INTO `tq_page_show_tracking` VALUES ('165', '2', '172.17.0.1', '1506236725', '1506236725');
INSERT INTO `tq_page_show_tracking` VALUES ('166', '3', '172.17.0.1', '1506236729', '1506236729');
INSERT INTO `tq_page_show_tracking` VALUES ('167', '2', '172.17.0.1', '1506236770', '1506236770');
INSERT INTO `tq_page_show_tracking` VALUES ('168', '2', '172.17.0.1', '1506236788', '1506236788');
INSERT INTO `tq_page_show_tracking` VALUES ('169', '3', '172.17.0.1', '1506236793', '1506236793');
INSERT INTO `tq_page_show_tracking` VALUES ('170', '3', '172.17.0.1', '1506236794', '1506236794');
INSERT INTO `tq_page_show_tracking` VALUES ('171', '4', '172.17.0.1', '1506236797', '1506236797');
INSERT INTO `tq_page_show_tracking` VALUES ('172', '3', '172.17.0.1', '1506236808', '1506236808');
INSERT INTO `tq_page_show_tracking` VALUES ('173', '2', '172.17.0.1', '1506236822', '1506236822');
INSERT INTO `tq_page_show_tracking` VALUES ('174', '1', '172.17.0.1', '1506236835', '1506236835');
INSERT INTO `tq_page_show_tracking` VALUES ('175', '1', '172.17.0.1', '1506236840', '1506236840');
INSERT INTO `tq_page_show_tracking` VALUES ('176', '1', '172.17.0.1', '1506237004', '1506237004');
INSERT INTO `tq_page_show_tracking` VALUES ('177', '1', '172.17.0.1', '1506237055', '1506237055');
INSERT INTO `tq_page_show_tracking` VALUES ('178', '1', '172.17.0.1', '1506237065', '1506237065');
INSERT INTO `tq_page_show_tracking` VALUES ('179', '1', '172.17.0.1', '1506237073', '1506237073');
INSERT INTO `tq_page_show_tracking` VALUES ('180', '1', '172.17.0.1', '1506237089', '1506237089');
INSERT INTO `tq_page_show_tracking` VALUES ('181', '1', '172.17.0.1', '1506237096', '1506237096');
INSERT INTO `tq_page_show_tracking` VALUES ('182', '1', '172.17.0.1', '1506237101', '1506237101');
INSERT INTO `tq_page_show_tracking` VALUES ('183', '1', '172.17.0.1', '1506237116', '1506237116');
INSERT INTO `tq_page_show_tracking` VALUES ('184', '1', '172.17.0.1', '1506237145', '1506237145');
INSERT INTO `tq_page_show_tracking` VALUES ('185', '1', '172.17.0.1', '1506237222', '1506237222');
INSERT INTO `tq_page_show_tracking` VALUES ('186', '1', '172.17.0.1', '1506237258', '1506237258');
INSERT INTO `tq_page_show_tracking` VALUES ('187', '1', '172.17.0.1', '1506237308', '1506237308');
INSERT INTO `tq_page_show_tracking` VALUES ('188', '1', '172.17.0.1', '1506237316', '1506237316');
INSERT INTO `tq_page_show_tracking` VALUES ('189', '1', '172.17.0.1', '1506237322', '1506237322');
INSERT INTO `tq_page_show_tracking` VALUES ('190', '1', '172.17.0.1', '1506237331', '1506237331');
INSERT INTO `tq_page_show_tracking` VALUES ('191', '1', '172.17.0.1', '1506237388', '1506237388');
INSERT INTO `tq_page_show_tracking` VALUES ('192', '1', '172.17.0.1', '1506237479', '1506237479');
INSERT INTO `tq_page_show_tracking` VALUES ('193', '2', '172.17.0.1', '1506237484', '1506237484');
INSERT INTO `tq_page_show_tracking` VALUES ('194', '2', '172.17.0.1', '1506237493', '1506237493');
INSERT INTO `tq_page_show_tracking` VALUES ('195', '2', '172.17.0.1', '1506237494', '1506237494');
INSERT INTO `tq_page_show_tracking` VALUES ('196', '2', '172.17.0.1', '1506237512', '1506237512');
INSERT INTO `tq_page_show_tracking` VALUES ('197', '2', '172.17.0.1', '1506237521', '1506237521');
INSERT INTO `tq_page_show_tracking` VALUES ('198', '2', '172.17.0.1', '1506237528', '1506237528');
INSERT INTO `tq_page_show_tracking` VALUES ('199', '2', '172.17.0.1', '1506237543', '1506237543');
INSERT INTO `tq_page_show_tracking` VALUES ('200', '2', '172.17.0.1', '1506237574', '1506237574');
INSERT INTO `tq_page_show_tracking` VALUES ('201', '2', '172.17.0.1', '1506237591', '1506237591');
INSERT INTO `tq_page_show_tracking` VALUES ('202', '2', '172.17.0.1', '1506237597', '1506237597');
INSERT INTO `tq_page_show_tracking` VALUES ('203', '2', '172.17.0.1', '1506237644', '1506237644');
INSERT INTO `tq_page_show_tracking` VALUES ('204', '2', '172.17.0.1', '1506237667', '1506237667');
INSERT INTO `tq_page_show_tracking` VALUES ('205', '2', '172.17.0.1', '1506237684', '1506237684');
INSERT INTO `tq_page_show_tracking` VALUES ('206', '2', '172.17.0.1', '1506237697', '1506237697');
INSERT INTO `tq_page_show_tracking` VALUES ('207', '2', '172.17.0.1', '1506237721', '1506237721');
INSERT INTO `tq_page_show_tracking` VALUES ('208', '2', '172.17.0.1', '1506237771', '1506237771');
INSERT INTO `tq_page_show_tracking` VALUES ('209', '1', '172.17.0.1', '1506237782', '1506237782');
INSERT INTO `tq_page_show_tracking` VALUES ('210', '2', '172.17.0.1', '1506237784', '1506237784');
INSERT INTO `tq_page_show_tracking` VALUES ('211', '3', '172.17.0.1', '1506237787', '1506237787');
INSERT INTO `tq_page_show_tracking` VALUES ('212', '3', '172.17.0.1', '1506237834', '1506237834');
INSERT INTO `tq_page_show_tracking` VALUES ('213', '3', '172.17.0.1', '1506237903', '1506237903');
INSERT INTO `tq_page_show_tracking` VALUES ('214', '3', '172.17.0.1', '1506237919', '1506237919');
INSERT INTO `tq_page_show_tracking` VALUES ('215', '3', '172.17.0.1', '1506237931', '1506237931');
INSERT INTO `tq_page_show_tracking` VALUES ('216', '3', '172.17.0.1', '1506237938', '1506237938');
INSERT INTO `tq_page_show_tracking` VALUES ('217', '2', '172.17.0.1', '1506237953', '1506237953');
INSERT INTO `tq_page_show_tracking` VALUES ('218', '3', '172.17.0.1', '1506237957', '1506237957');
INSERT INTO `tq_page_show_tracking` VALUES ('219', '3', '172.17.0.1', '1506237959', '1506237959');
INSERT INTO `tq_page_show_tracking` VALUES ('220', '4', '172.17.0.1', '1506237966', '1506237966');
INSERT INTO `tq_page_show_tracking` VALUES ('221', '3', '172.17.0.1', '1506237998', '1506237998');
INSERT INTO `tq_page_show_tracking` VALUES ('222', '3', '172.17.0.1', '1506238061', '1506238061');
INSERT INTO `tq_page_show_tracking` VALUES ('223', '3', '172.17.0.1', '1506238064', '1506238064');
INSERT INTO `tq_page_show_tracking` VALUES ('224', '3', '172.17.0.1', '1506238076', '1506238076');
INSERT INTO `tq_page_show_tracking` VALUES ('225', '3', '172.17.0.1', '1506238090', '1506238090');
INSERT INTO `tq_page_show_tracking` VALUES ('226', '3', '172.17.0.1', '1506238109', '1506238109');
INSERT INTO `tq_page_show_tracking` VALUES ('227', '3', '172.17.0.1', '1506238126', '1506238126');
INSERT INTO `tq_page_show_tracking` VALUES ('228', '3', '172.17.0.1', '1506238130', '1506238130');
INSERT INTO `tq_page_show_tracking` VALUES ('229', '3', '172.17.0.1', '1506238136', '1506238136');
INSERT INTO `tq_page_show_tracking` VALUES ('230', '3', '172.17.0.1', '1506238148', '1506238148');
INSERT INTO `tq_page_show_tracking` VALUES ('231', '3', '172.17.0.1', '1506238156', '1506238156');
INSERT INTO `tq_page_show_tracking` VALUES ('232', '3', '172.17.0.1', '1506238174', '1506238174');
INSERT INTO `tq_page_show_tracking` VALUES ('233', '3', '172.17.0.1', '1506238189', '1506238189');
INSERT INTO `tq_page_show_tracking` VALUES ('234', '3', '172.17.0.1', '1506238207', '1506238207');
INSERT INTO `tq_page_show_tracking` VALUES ('235', '3', '172.17.0.1', '1506238222', '1506238222');
INSERT INTO `tq_page_show_tracking` VALUES ('236', '3', '172.17.0.1', '1506238225', '1506238225');
INSERT INTO `tq_page_show_tracking` VALUES ('237', '3', '172.17.0.1', '1506238290', '1506238290');
INSERT INTO `tq_page_show_tracking` VALUES ('238', '3', '172.17.0.1', '1506238360', '1506238360');
INSERT INTO `tq_page_show_tracking` VALUES ('239', '3', '172.17.0.1', '1506238373', '1506238373');
INSERT INTO `tq_page_show_tracking` VALUES ('240', '3', '172.17.0.1', '1506238408', '1506238408');
INSERT INTO `tq_page_show_tracking` VALUES ('241', '3', '172.17.0.1', '1506238415', '1506238415');
INSERT INTO `tq_page_show_tracking` VALUES ('242', '4', '172.17.0.1', '1506238416', '1506238416');
INSERT INTO `tq_page_show_tracking` VALUES ('243', '3', '172.17.0.1', '1506238420', '1506238420');
INSERT INTO `tq_page_show_tracking` VALUES ('244', '1', '172.17.0.1', '1506238424', '1506238424');
INSERT INTO `tq_page_show_tracking` VALUES ('245', '2', '172.17.0.1', '1506238428', '1506238428');
INSERT INTO `tq_page_show_tracking` VALUES ('246', '2', '172.17.0.1', '1506238429', '1506238429');
INSERT INTO `tq_page_show_tracking` VALUES ('247', '3', '172.17.0.1', '1506238432', '1506238432');
INSERT INTO `tq_page_show_tracking` VALUES ('248', '3', '172.17.0.1', '1506238435', '1506238435');
INSERT INTO `tq_page_show_tracking` VALUES ('249', '3', '172.17.0.1', '1506238442', '1506238442');
INSERT INTO `tq_page_show_tracking` VALUES ('250', '4', '172.17.0.1', '1506238443', '1506238443');
INSERT INTO `tq_page_show_tracking` VALUES ('251', '4', '172.17.0.1', '1506238457', '1506238457');
INSERT INTO `tq_page_show_tracking` VALUES ('252', '1', '172.17.0.1', '1506238460', '1506238460');
INSERT INTO `tq_page_show_tracking` VALUES ('253', '2', '172.17.0.1', '1506238463', '1506238463');
INSERT INTO `tq_page_show_tracking` VALUES ('254', '2', '172.17.0.1', '1506238465', '1506238465');
INSERT INTO `tq_page_show_tracking` VALUES ('255', '3', '172.17.0.1', '1506238467', '1506238467');
INSERT INTO `tq_page_show_tracking` VALUES ('256', '4', '172.17.0.1', '1506238470', '1506238470');
INSERT INTO `tq_page_show_tracking` VALUES ('257', '4', '172.17.0.1', '1506238471', '1506238471');
INSERT INTO `tq_page_show_tracking` VALUES ('258', '1', '172.17.0.1', '1506238481', '1506238481');
INSERT INTO `tq_page_show_tracking` VALUES ('259', '2', '172.17.0.1', '1506238487', '1506238487');
INSERT INTO `tq_page_show_tracking` VALUES ('260', '2', '172.17.0.1', '1506238488', '1506238488');
INSERT INTO `tq_page_show_tracking` VALUES ('261', '3', '172.17.0.1', '1506238490', '1506238490');
INSERT INTO `tq_page_show_tracking` VALUES ('262', '3', '172.17.0.1', '1506238493', '1506238493');
INSERT INTO `tq_page_show_tracking` VALUES ('263', '4', '172.17.0.1', '1506238494', '1506238494');
INSERT INTO `tq_page_show_tracking` VALUES ('264', '1', '172.17.0.1', '1506238498', '1506238498');
INSERT INTO `tq_page_show_tracking` VALUES ('265', '2', '172.17.0.1', '1506238527', '1506238527');
INSERT INTO `tq_page_show_tracking` VALUES ('266', '2', '172.17.0.1', '1506238528', '1506238528');
INSERT INTO `tq_page_show_tracking` VALUES ('267', '3', '172.17.0.1', '1506238530', '1506238530');
INSERT INTO `tq_page_show_tracking` VALUES ('268', '3', '172.17.0.1', '1506238533', '1506238533');
INSERT INTO `tq_page_show_tracking` VALUES ('269', '4', '172.17.0.1', '1506238534', '1506238534');
INSERT INTO `tq_page_show_tracking` VALUES ('270', '3', '172.17.0.1', '1506239280', '1506239280');
INSERT INTO `tq_page_show_tracking` VALUES ('271', '3', '172.17.0.1', '1506239285', '1506239285');
INSERT INTO `tq_page_show_tracking` VALUES ('272', '3', '172.17.0.1', '1506239289', '1506239289');
INSERT INTO `tq_page_show_tracking` VALUES ('273', '4', '172.17.0.1', '1506239291', '1506239291');
INSERT INTO `tq_page_show_tracking` VALUES ('274', '1', '172.17.0.1', '1506239297', '1506239297');
INSERT INTO `tq_page_show_tracking` VALUES ('275', '2', '172.17.0.1', '1506239300', '1506239300');
INSERT INTO `tq_page_show_tracking` VALUES ('276', '3', '172.17.0.1', '1506239303', '1506239303');
INSERT INTO `tq_page_show_tracking` VALUES ('277', '3', '172.17.0.1', '1506239306', '1506239306');
INSERT INTO `tq_page_show_tracking` VALUES ('278', '4', '172.17.0.1', '1506239307', '1506239307');
INSERT INTO `tq_page_show_tracking` VALUES ('279', '3', '172.17.0.1', '1506239314', '1506239314');
INSERT INTO `tq_page_show_tracking` VALUES ('280', '3', '172.17.0.1', '1506240899', '1506240899');
INSERT INTO `tq_page_show_tracking` VALUES ('281', '1', '172.17.0.1', '1506242573', '1506242573');
INSERT INTO `tq_page_show_tracking` VALUES ('282', '3', '172.17.0.1', '1506242573', '1506242573');
INSERT INTO `tq_page_show_tracking` VALUES ('283', '4', '172.17.0.1', '1506242573', '1506242573');
INSERT INTO `tq_page_show_tracking` VALUES ('284', '4', '172.17.0.1', '1506242579', '1506242579');
INSERT INTO `tq_page_show_tracking` VALUES ('285', '3', '172.17.0.1', '1506243077', '1506243077');

-- ----------------------------
-- Table structure for tq_team
-- ----------------------------
DROP TABLE IF EXISTS `tq_team`;
CREATE TABLE `tq_team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `family_number` smallint(2) unsigned NOT NULL DEFAULT '0' COMMENT '当前成员数量',
  `driver_user_id` int(11) unsigned NOT NULL COMMENT '司机user_id',
  `created_at` int(11) unsigned NOT NULL COMMENT '创建时间',
  `updated_at` int(11) unsigned NOT NULL COMMENT '更新时间',
  `route_name` varchar(100) NOT NULL DEFAULT '' COMMENT '线路名称',
  `clock_time_hour` smallint(2) DEFAULT NULL COMMENT '上班打卡时间小时部分(只在前台列表页显示，不做匹配之用)',
  `clock_time_minutes` smallint(2) DEFAULT NULL COMMENT '上班打卡时间分钟部分(只在前台列表页显示，不做匹配之用)',
  `off_duty_hour` smallint(2) DEFAULT NULL COMMENT '下班打卡时间小时部分(只在前台列表页显示，不做匹配之用)',
  `off_duty_minutes` smallint(2) DEFAULT NULL COMMENT '下班打卡时间分钟部分(只在前台列表页显示，不做匹配之用)',
  `car_type` varchar(50) NOT NULL DEFAULT '' COMMENT '车型',
  `car_number` varchar(20) NOT NULL DEFAULT '' COMMENT '车牌',
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_team
-- ----------------------------

-- ----------------------------
-- Table structure for tq_team_user
-- ----------------------------
DROP TABLE IF EXISTS `tq_team_user`;
CREATE TABLE `tq_team_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) unsigned NOT NULL COMMENT '组id',
  `user_id` int(11) unsigned NOT NULL COMMENT '用户id',
  `created_at` int(11) unsigned NOT NULL COMMENT '创建时间',
  `updated_at` int(11) unsigned NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_team_user
-- ----------------------------

-- ----------------------------
-- Table structure for tq_user
-- ----------------------------
DROP TABLE IF EXISTS `tq_user`;
CREATE TABLE `tq_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(255) NOT NULL DEFAULT '',
  `mobile` varchar(20) NOT NULL COMMENT '用户手机',
  `authKey` varchar(100) NOT NULL DEFAULT '' COMMENT 'authKey',
  `accessToken` varchar(100) NOT NULL DEFAULT '' COMMENT 'accessToken',
  `created_at` int(10) DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(10) DEFAULT '0' COMMENT '更新时间',
  `is_matched` smallint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否已经匹配',
  `login_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '最后一次登录时间',
  `user_status` smallint(1) unsigned NOT NULL DEFAULT '0' COMMENT '用户状态0未审核,1审核通过,2审核未通过,3已删除',
  `open_id` varchar(50) NOT NULL DEFAULT '' COMMENT '微信open_id',
  `invite_code` varchar(10) NOT NULL DEFAULT '' COMMENT '邀请码',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_user
-- ----------------------------

-- ----------------------------
-- Table structure for tq_user_info
-- ----------------------------
DROP TABLE IF EXISTS `tq_user_info`;
CREATE TABLE `tq_user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL COMMENT '用户表id',
  `sex` smallint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1男,2女,3未知',
  `clock_time_hour` smallint(2) unsigned NOT NULL DEFAULT '0' COMMENT '上班hour部分',
  `clock_time_minutes` smallint(2) unsigned NOT NULL DEFAULT '0' COMMENT '上班minutes部分',
  `off_duty_hour` smallint(2) unsigned NOT NULL DEFAULT '0' COMMENT '下班hour部分',
  `off_duty_minutes` smallint(2) unsigned NOT NULL DEFAULT '0' COMMENT '下班minutes部分',
  `home_address` varchar(255) NOT NULL DEFAULT '' COMMENT '家庭住址',
  `home_longitude` varchar(100) NOT NULL DEFAULT '' COMMENT '家庭住址经度',
  `home_latitude` varchar(100) NOT NULL DEFAULT '' COMMENT '家庭住址纬度',
  `company_address` varchar(255) NOT NULL DEFAULT '' COMMENT '公司地址',
  `company_longitude` varchar(100) NOT NULL DEFAULT '' COMMENT '公司地址经度',
  `company_latitude` varchar(100) NOT NULL DEFAULT '' COMMENT '公司地址纬度',
  `role` smallint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1乘客 2司机',
  `id_card_front` varchar(255) NOT NULL DEFAULT '' COMMENT '身份证正面照片',
  `id_card_back` varchar(255) NOT NULL DEFAULT '' COMMENT '身份证反面照片',
  `driver_card` varchar(255) NOT NULL DEFAULT '' COMMENT '驾驶证照片',
  `timeliness` smallint(1) unsigned NOT NULL DEFAULT '1' COMMENT '时效性 1准时, 2一般, 3不准时',
  `invite_code` varchar(10) NOT NULL DEFAULT '' COMMENT '邀请码',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_user_info
-- ----------------------------

-- ----------------------------
-- Table structure for tq_we_chat
-- ----------------------------
DROP TABLE IF EXISTS `tq_we_chat`;
CREATE TABLE `tq_we_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` int(11) unsigned NOT NULL COMMENT '用户id',
  `openid` varchar(50) NOT NULL COMMENT '用户id',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '昵称',
  `sex` smallint(1) DEFAULT NULL COMMENT '性别',
  `language` varchar(30) DEFAULT NULL COMMENT '语言',
  `city` varchar(30) DEFAULT NULL COMMENT '城市',
  `province` varchar(30) DEFAULT NULL COMMENT '省分',
  `country` varchar(30) DEFAULT NULL COMMENT '国家',
  `headimgurl` varchar(255) DEFAULT NULL COMMENT '头像',
  `subscribe_time` varchar(20) DEFAULT NULL,
  `created_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tq_we_chat
-- ----------------------------
SET FOREIGN_KEY_CHECKS=1;

-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 192.168.10.10    Database: onroad
-- ------------------------------------------------------
-- Server version	5.7.12-0ubuntu1.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tq_migration`
--

DROP TABLE IF EXISTS `tq_migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tq_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tq_migration`
--

LOCK TABLES `tq_migration` WRITE;
/*!40000 ALTER TABLE `tq_migration` DISABLE KEYS */;
INSERT INTO `tq_migration` VALUES ('m000000_000000_base',1480074817),('m161125_113645_createUserTable',1480074884),('m161125_121720_create_user_table',1480121398),('m161125_132615_create_user_info_table',1480121467),('m161125_143842_alter_column_for_table_user',1480121468),('m161125_161306_set_default_value_for_password_colomn_in_user_table',1480121648),('m161126_025731_alter_coloumn_mobile_for_user_table',1480129166),('m161126_030005_alter_column_user_id_for_table_user_info',1480129274),('m161126_112817_add_column_timeliness_for_table_user_info',1480159866),('m161129_122600_create_table_tq_team',1480422692),('m161129_123243_create_table_tq_team_user',1480423003),('m161129_125719_add_column_is_matched_for_table_user',1480424417),('m161201_135828_add_column_user_statuss_for_users_table',1480600917),('m161203_074526_add_column_route_name_and_time_for_table_team',1480751782);
/*!40000 ALTER TABLE `tq_migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tq_team`
--

DROP TABLE IF EXISTS `tq_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tq_team`
--

LOCK TABLES `tq_team` WRITE;
/*!40000 ALTER TABLE `tq_team` DISABLE KEYS */;
INSERT INTO `tq_team` VALUES (26,2,118,1480769203,1480769203,'',NULL,NULL,NULL,NULL,'','');
/*!40000 ALTER TABLE `tq_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tq_team_user`
--

DROP TABLE IF EXISTS `tq_team_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tq_team_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) unsigned NOT NULL COMMENT '组id',
  `user_id` int(11) unsigned NOT NULL COMMENT '用户id',
  `created_at` int(11) unsigned NOT NULL COMMENT '创建时间',
  `updated_at` int(11) unsigned NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tq_team_user`
--

LOCK TABLES `tq_team_user` WRITE;
/*!40000 ALTER TABLE `tq_team_user` DISABLE KEYS */;
INSERT INTO `tq_team_user` VALUES (48,26,118,1480769203,1480769203),(49,26,116,1480769203,1480769203);
/*!40000 ALTER TABLE `tq_team_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tq_user`
--

DROP TABLE IF EXISTS `tq_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tq_user`
--

LOCK TABLES `tq_user` WRITE;
/*!40000 ALTER TABLE `tq_user` DISABLE KEYS */;
INSERT INTO `tq_user` VALUES (95,'','','15995716427','','',0,0,0,1480751005,1),(97,'','','15995716423','','',0,0,0,1480731671,1),(98,'','','15995716111','','',0,0,0,1480756132,1),(99,'','','15971624441','','',1480160357,1480160357,0,0,1),(105,'','','15050163921','','',1480256464,1480256464,0,1480764977,1),(106,'','','15050163929','','',1480257803,1480257803,0,1480768789,1),(107,'','','15995716443','','',1480340408,1480340408,0,1480600608,1),(108,'','','15995716441','','',1480600622,1480600622,0,0,1),(109,'','','15995716440','','',1480601323,1480601323,0,1480768815,1),(110,'','','15995716439','','',1480601461,1480601461,0,1480733682,1),(111,'','','15995716438','','',1480601945,1480601945,0,1480750976,1),(113,'','','15995716448','','',1480766816,1480766816,0,1480766816,1),(114,'','','15995716447','','',1480766898,1480766898,0,1480767104,1),(115,'','','15995716446','','',1480767005,1480767005,0,1480767005,1),(116,'','','15995716410','','',1480767931,1480767931,1,1480769118,1),(117,'','','15995716411','','',1480767967,1480767967,0,1480769081,1),(118,'','','15995716412','','',1480768008,1480768008,1,1480769057,1);
/*!40000 ALTER TABLE `tq_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tq_user_info`
--

DROP TABLE IF EXISTS `tq_user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tq_user_info`
--

LOCK TABLES `tq_user_info` WRITE;
/*!40000 ALTER TABLE `tq_user_info` DISABLE KEYS */;
INSERT INTO `tq_user_info` VALUES (31,95,1,7,30,17,30,'杭州西湖延安路1号','120.170737','30.266971','44','companyLongitude','companyLatitude',2,'uploads/95/idCardFront.jpg','uploads/95/idCardBack.jpg','uploads/95/driverCard.jpg',1),(32,97,1,7,30,17,30,'苏州何山路1号','120.533644','31.31124','44','companyLongitude','companyLatitude',2,'uploads/97/idCardFront.jpg','uploads/97/idCardBack.jpg','uploads/97/driverCard.png',1),(33,98,1,9,30,17,30,'苏州何山路50号','120.56711','31.313396','下沙','120.127735','30.147679',2,'uploads/98/idCardFront.jpg','uploads/98/idCardBack.jpg','uploads/98/driverCard.png',1),(34,99,1,9,30,17,30,'苏州何山路80号','120.558178','31.312168','杭州西湖延安路80号','120.141375','30.257806',2,'uploads/99/idCardFront.jpg','uploads/99/idCardBack.jpg','uploads/99/driverCard.jpg',2),(39,105,1,9,30,17,30,'苏州何山路100号','120.557633','31.312076','杭州西湖延安路250号','120.141375','30.257806',2,'uploads/105/idCardFront.jpg','uploads/105/idCardBack.png','uploads/105/driverCard.jpg',2),(40,106,2,9,30,17,30,'苏州何山路150号','120.557895','31.312136','杭州下沙','120.127735','30.147679',1,'','','',3),(41,107,1,9,30,17,30,'杭州西湖延安路100号','120.170807','30.263386','杭州西湖延安路1号','120.170737','30.266971',2,'uploads/107/idCardFront.jpg','uploads/107/idCardBack.jpg','uploads/107/driverCard.jpg',1),(42,109,1,9,30,17,30,'杭州','120.161693','30.280059','杭州','120.161693','30.280059',1,'','','',1),(43,110,1,9,30,17,30,'杭州','120.161693','30.280059','杭州','120.161693','30.280059',1,'','','',1),(44,111,1,9,30,17,30,'苏州何山路80号','120.558178','31.312168','杭州西湖延安路80号','120.141375','30.257806',1,'','','',1),(45,113,1,9,30,17,30,'苏州市长江路1号','120.5616','31.269187','苏州市长江路10号','120.558502','31.269654',1,'','','',2),(46,114,1,9,30,17,30,'苏州市长江路5号','120.560725','31.274123','苏州市长江路15号','120.757935','31.257865',1,'','','',3),(47,115,1,9,30,17,30,'苏州市长江路1号','120.5616','31.269187','苏州市长江路20号','120.559022','31.274023',2,'uploads/115/idCardFront.jpg','uploads/115/idCardBack.jpg','uploads/115/driverCard.jpg',1),(48,116,1,9,30,17,30,'苏州市阳山花苑1区','120.508952','31.373094','苏州市阳山花苑4区','120.496578','31.376119',1,'','','',2),(49,117,1,9,30,17,30,'苏州市阳山花苑3区','120.497235','31.379709','苏州市阳山花苑4区','120.496578','31.376119',1,'','','',1),(50,118,1,9,30,17,30,'苏州市阳山花苑1区','120.508952','31.373094','苏州市阳山花苑3区','120.497235','31.379709',2,'uploads/118/idCardFront.jpg','uploads/118/idCardBack.jpg','uploads/118/driverCard.jpg',2);
/*!40000 ALTER TABLE `tq_user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-03 20:52:04

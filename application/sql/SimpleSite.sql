-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: simple_site
-- ------------------------------------------------------
-- Server version	5.5.28-log

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
-- Table structure for table `Category`
--

DROP TABLE IF EXISTS `Category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0' COMMENT 'Parent Category ID',
  `sid` int(10) NOT NULL COMMENT 'Site ID',
  `name` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL DEFAULT '',
  `types` tinyint(4) NOT NULL,
  `uri` varchar(127) DEFAULT '',
  `orders` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Category`
--

LOCK TABLES `Category` WRITE;
/*!40000 ALTER TABLE `Category` DISABLE KEYS */;
INSERT INTO `Category` VALUES (1,0,2,'首页','asdfasdfasdfasdf',0,'/',0,1,0,1429720641),(2,0,1,'简站','首页',2,'/',1,1,1429718552,1430140759),(3,0,1,'亮点','您需要的才是我们所做的',0,'feature',1,1,1429719163,1429876936),(4,0,1,'下载','免费下载使用',1,'download',0,0,1429810713,1430325209),(5,0,1,'动态','新闻公告',1,'news',0,0,1429810733,1430236000),(6,5,1,'新闻公告','新闻公告',0,'news',0,1,1430145984,1430145984);
/*!40000 ALTER TABLE `Category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Content`
--

DROP TABLE IF EXISTS `Content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL COMMENT 'Category ID',
  `sid` int(11) NOT NULL,
  `title` varchar(127) NOT NULL DEFAULT '',
  `keywords` varchar(127) DEFAULT '',
  `origin` varchar(32) NOT NULL DEFAULT '',
  `description` varchar(127) DEFAULT NULL,
  `content` text,
  `thumb` varchar(127) DEFAULT NULL,
  `types` tinyint(3) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Content`
--

LOCK TABLES `Content` WRITE;
/*!40000 ALTER TABLE `Content` DISABLE KEYS */;
INSERT INTO `Content` VALUES (1,5,1,'简站V1.0正式推出','简站V1','简站','<p>简站软件从最开始的一个人，到现在已经3万多家网站在使用！</p>\n','<p>简站软件从最开始的一个人，到现在已经3万多家网站在使用！</p>\n',NULL,0,0,1430323200,1430323200);
/*!40000 ALTER TABLE `Content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `File`
--

DROP TABLE IF EXISTS `File`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `File` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `sid` int(10) NOT NULL,
  `name` varchar(32) NOT NULL DEFAULT '',
  `path` varchar(127) NOT NULL DEFAULT '',
  `md5` varchar(36) NOT NULL DEFAULT '',
  `types` varchar(256) NOT NULL DEFAULT '',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`),
  KEY `domain` (`types`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `File`
--

LOCK TABLES `File` WRITE;
/*!40000 ALTER TABLE `File` DISABLE KEYS */;
INSERT INTO `File` VALUES (4,2,'feei_ico.png','1429359642_feei_ico.png','','0',1429359643,1429359643),(5,2,'feei_ico.png','24e22ecba16de5fc8ee1e46bed456df0','','0',1429359983,1429359983),(6,2,'feei_ico.png','feei_ico.png','','0',1429360115,1429360115),(7,2,'feei_ico.png','5a0aa8abef969f6bbe868f8fef02dd32_1429360541.png','5a0aa8abef969f6bbe868f8fef02dd32','0',1429360541,1429360541),(8,2,'feei_ico.png','55e7fc7dc8751335695e67d5e1250f31_1429360768.png','55e7fc7dc8751335695e67d5e1250f31','0',1429360768,1429360768),(9,2,'wzmwxyx.jpg','271530b5dd2ac8270c7e1e41057900f4_1429360889.jpg','271530b5dd2ac8270c7e1e41057900f4','0',1429360889,1429360889),(10,1,'logo.png','7020c30e564ab262e08de31ec8a23ab5_1429805859.png','7020c30e564ab262e08de31ec8a23ab5','0',1429805859,1429805859);
/*!40000 ALTER TABLE `File` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FriendLink`
--

DROP TABLE IF EXISTS `FriendLink`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FriendLink` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `sid` int(10) NOT NULL,
  `url` varchar(32) NOT NULL DEFAULT '',
  `path` varchar(127) NOT NULL DEFAULT '',
  `title` varchar(32) NOT NULL DEFAULT '',
  `description` varchar(256) NOT NULL DEFAULT '',
  `status` tinyint(3) NOT NULL DEFAULT '1',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`sid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FriendLink`
--

LOCK TABLES `FriendLink` WRITE;
/*!40000 ALTER TABLE `FriendLink` DISABLE KEYS */;
INSERT INTO `FriendLink` VALUES (1,2,'http://www.baidu.com','','百度','百度是中国最大的搜索引擎',1,0,0);
/*!40000 ALTER TABLE `FriendLink` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Module`
--

DROP TABLE IF EXISTS `Module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Module` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `icon` varchar(33) NOT NULL DEFAULT '',
  `price` int(11) NOT NULL,
  `orders` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Module`
--

LOCK TABLES `Module` WRITE;
/*!40000 ALTER TABLE `Module` DISABLE KEYS */;
INSERT INTO `Module` VALUES (1,'PC网站','',0,1,NULL,0,0),(2,'微网站','',0,2,0,0,0),(3,'微信接入','',0,3,0,0,0),(4,'投票模块','',0,4,0,0,0),(5,'报名模块','',0,5,0,0,0),(6,'建议意见','',0,6,0,0,0);
/*!40000 ALTER TABLE `Module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Role`
--

DROP TABLE IF EXISTS `Role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Role`
--

LOCK TABLES `Role` WRITE;
/*!40000 ALTER TABLE `Role` DISABLE KEYS */;
INSERT INTO `Role` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.');
/*!40000 ALTER TABLE `Role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Site`
--

DROP TABLE IF EXISTS `Site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Site` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uid` int(10) NOT NULL COMMENT 'UserID',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT 'Site Name',
  `title` varchar(127) NOT NULL DEFAULT '' COMMENT 'Site Title',
  `keywords` varchar(256) NOT NULL DEFAULT '' COMMENT 'Site Keywords',
  `description` varchar(256) DEFAULT NULL,
  `types` tinyint(4) NOT NULL COMMENT 'Site Types',
  `theme` varchar(32) NOT NULL DEFAULT '' COMMENT 'Site Theme',
  `status` tinyint(3) NOT NULL,
  `url` varchar(127) NOT NULL DEFAULT '' COMMENT 'Site Url',
  `logo` varchar(127) NOT NULL DEFAULT '',
  `domain` varchar(11) NOT NULL DEFAULT '',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `domain` (`domain`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Site`
--

LOCK TABLES `Site` WRITE;
/*!40000 ALTER TABLE `Site` DISABLE KEYS */;
INSERT INTO `Site` VALUES (1,3,'简站官网','简站(Simple-Site)','简站,简单建站,免费建站,开源微信建站系统,开源建站系统,开源微信系统','简站是一款免费的开源建站系统，它能同时帮助管理PC网站、微信网站、手机网站，并且功能强大，操作简单！',0,'default',1,'http://www.simple-site.cn','7020c30e564ab262e08de31ec8a23ab5_1429805859.png','www',0,1429805859),(2,3,'奥托普尔','武汉奥托普尔汽车装备工程有限公司','奥托普尔,汽车装备,汽车零部件,武汉汽车零部件','奥托普尔是一家专门从事汽车零部件研发与生产的公司，公司成立于2007年，现有员工1000余名。',0,'business',0,'http://www.simple-site.cn','271530b5dd2ac8270c7e1e41057900f4_1429360889.jpg','APGroup',1429201133,1429360889),(3,3,'微网站','tasd','','asdf',0,'0',0,'','','',1429201183,1429201183);
/*!40000 ALTER TABLE `Site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Subscribe`
--

DROP TABLE IF EXISTS `Subscribe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Subscribe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `email` varchar(127) NOT NULL DEFAULT '',
  `status` tinyint(3) NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Subscribe`
--

LOCK TABLES `Subscribe` WRITE;
/*!40000 ALTER TABLE `Subscribe` DISABLE KEYS */;
INSERT INTO `Subscribe` VALUES (6,1,'feei@feei.cn\'',1,1430318986,1430318986),(5,1,'feei@feei.cn',1,1430143042,1430143042),(7,1,'wufeifei@wufeifei.com',1,1430326822,1430326822);
/*!40000 ALTER TABLE `Subscribe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `mobile` bigint(32) NOT NULL,
  `email` varchar(127) DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '1',
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `mobile` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'Feei','1234',135067106131,'wufeifei@wufeifei.com',0,0,0),(2,'123423','1234123412341234',123412341234,NULL,0,0,0),(3,'吴飞飞','0f7da47075fdaf8881b7bd13c1d9a5058e0626dec6a1f24aaf06745f8b6aba81',13506710613,NULL,1,0,0);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User_Login_History`
--

DROP TABLE IF EXISTS `User_Login_History`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User_Login_History` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `userAgent` varchar(127) DEFAULT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User_Login_History`
--

LOCK TABLES `User_Login_History` WRITE;
/*!40000 ALTER TABLE `User_Login_History` DISABLE KEYS */;
INSERT INTO `User_Login_History` VALUES (1,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1429290047,1429290047),(2,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1429329434,1429329434),(3,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1429355753,1429355753),(4,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1429434244,1429434244),(5,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1429434397,1429434397),(6,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1429434471,1429434471),(7,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1429455807,1429455807),(8,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1429458335,1429458335),(9,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36',1429458342,1429458342),(10,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1429543696,1429543696),(11,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1429623760,1429623760),(12,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1429714397,1429714397),(13,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1429799405,1429799405),(14,3,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1429810883,1429810883),(15,1,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1429875643,1429875643),(16,1,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1430137222,1430137222),(17,1,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1430228356,1430228356),(18,1,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1430238156,1430238156),(19,1,'10.211.55.2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36',1430323420,1430323420);
/*!40000 ALTER TABLE `User_Login_History` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User_Token`
--

DROP TABLE IF EXISTS `User_Token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User_Token` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  CONSTRAINT `User_Token_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User_Token`
--

LOCK TABLES `User_Token` WRITE;
/*!40000 ALTER TABLE `User_Token` DISABLE KEYS */;
/*!40000 ALTER TABLE `User_Token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_users`
--

LOCK TABLES `roles_users` WRITE;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
INSERT INTO `roles_users` VALUES (3,1),(3,2);
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-30  1:06:27

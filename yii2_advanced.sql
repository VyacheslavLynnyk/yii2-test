-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: yii2_advanced
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `app_form`
--

DROP TABLE IF EXISTS `app_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(64) NOT NULL,
  `l_name` varchar(64) NOT NULL,
  `birth_date` date NOT NULL,
  `phone` varchar(24) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `status` enum('NOT PROCESSED','PROCESSED','CLOSED') NOT NULL DEFAULT 'NOT PROCESSED',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app_form`
--

LOCK TABLES `app_form` WRITE;
/*!40000 ALTER TABLE `app_form` DISABLE KEYS */;
INSERT INTO `app_form` VALUES (1,'Vasya','Pupkin','2024-01-20','+3 068 240 13 72','','NOT PROCESSED'),(2,'Igor','Goblin','2000-01-02','+3 068 240 13 73','test@i.ua','PROCESSED'),(3,'Slava','Linux','1980-12-15','+3 068 240 13 74','testo@i.ua','NOT PROCESSED'),(4,'Вячеслав','Линник','1977-12-15','+3 068 240 13 77','litter.php@gmail.com','NOT PROCESSED'),(5,'Виктор','Линник','2016-11-17','+3 068 240 13 78','litter.php@gmail.com','NOT PROCESSED'),(6,'Иван','Иванов','2016-11-17','+3 068 240 13 23','google@ivan.com','NOT PROCESSED'),(7,'Вячеслав','Линник','2016-11-16','+3 068 240 13 74','litter.php@gmail.com','NOT PROCESSED');
/*!40000 ALTER TABLE `app_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_gen`
--

DROP TABLE IF EXISTS `form_gen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_gen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_name` varchar(255) NOT NULL,
  `field_type` enum('INPUT','DATE','CHECKBOX','OPTION','TEXTAREA') NOT NULL,
  `field_def` varchar(255) DEFAULT '',
  `field_place` varchar(255) DEFAULT '',
  `field_require` tinyint(4) DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_gen`
--

LOCK TABLES `form_gen` WRITE;
/*!40000 ALTER TABLE `form_gen` DISABLE KEYS */;
INSERT INTO `form_gen` VALUES (1,'First Generated form','INPUT','NONE','Введите ваше имя',1,1),(2,'Other Form','DATE','2016-02-01','Выберите дату',1,1),(3,'Third form','TEXTAREA','default value','place holder',1,1);
/*!40000 ALTER TABLE `form_gen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_gen_data`
--

DROP TABLE IF EXISTS `form_gen_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_gen_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_data` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `field_gen_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `form_gen_data_form_gen_id_fk` (`field_gen_id`),
  CONSTRAINT `form_gen_data_form_gen_id_fk` FOREIGN KEY (`field_gen_id`) REFERENCES `form_gen` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_gen_data`
--

LOCK TABLES `form_gen_data` WRITE;
/*!40000 ALTER TABLE `form_gen_data` DISABLE KEYS */;
INSERT INTO `form_gen_data` VALUES (1,'2016-11-12','0000-00-00 00:00:00',2),(2,'2016-11-30','0000-00-00 00:00:00',2),(3,'2016-11-17','2016-11-16 10:59:27',2),(4,'Какое-то  дополнительное поле','2016-11-16 11:58:17',1);
/*!40000 ALTER TABLE `form_gen_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1479227495),('m130524_201442_init',1479227499);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Admin','cRCf982I5Jh704G_xYznUBN3LQsMyrLx','$2y$13$U6dmQDTLBYQ79/qSDhJjJuYepSPuji24Pxbj/i7OjC7rGUUllOixC',NULL,'vyacheslav.lynnyk@gmail.com',10,1479228367,1479228367);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-16 14:24:17

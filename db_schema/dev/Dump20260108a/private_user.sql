-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: localhost    Database: akademi_hd
-- ------------------------------------------------------
-- Server version	8.0.44

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `private_user`
--

DROP TABLE IF EXISTS `private_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `private_user` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `lvl` enum('0','1','2') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `private_user`
--

LOCK TABLES `private_user` WRITE;
/*!40000 ALTER TABLE `private_user` DISABLE KEYS */;
-- INSERT INTO `private_user` VALUES (1,'cnadmin','$2y$10$UI2hmmAwyNSTdJd/Mh5rM.9IGg3S1rQQNUi0j8pqkVf54/X0C3sry','2025-09-18 08:47:52','0'),(2,'dd','$2y$10$MyV/kbuQIEe3scubXe3lX.2BYjqPZDJqZKii2kwDGSjjO7qjN21gK','2025-09-21 21:12:50','1'),(3,'winarsih.zamira','$2y$10$ew4JKu.XxhiANhX1ku9hEeAouof1Lp/Wy8/yqqB2BwFaigEcKMZXu','2025-10-21 10:00:02','2'),(4,'pranawa.wulandari','$2y$10$XDn3pDZEg22AscvI3dQrNufFvJwbOpX1OjnGdE5888PaLFkQLHGgC','2025-10-21 10:00:02','2'),(5,'septi.mangunsong','$2y$10$dH65/I.Nu4paU92w82gtcOmWiQgJOcKkicKz1om5LmxsQDszmPD1a','2025-10-21 14:25:09','2'),(6,'asmuni.sihotang','$2y$10$eeF3i9qwo4Wj/9.Pu8Ugau20jWocxCV01V.isOX36RRufRXRczZGq','2025-10-21 14:25:09',NULL),(7,'testing','$2y$10$5.1ZIjlO05.X6gibe8KwoOpcZLnWdiOb.HxaLJ9vu8qJ8nWJboin.','2025-10-24 15:55:51',NULL);
/*!40000 ALTER TABLE `private_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-08 10:13:14

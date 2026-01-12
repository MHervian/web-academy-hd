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
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kelas` (
  `kelasId` int NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_program` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `kapasitas` int DEFAULT '0',
  `date_open` date NOT NULL,
  `date_close` date NOT NULL,
  `time_close` time NOT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `pengajar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isKelasStart` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `terisi` int DEFAULT '0',
  PRIMARY KEY (`kelasId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (2,'Kelas Spesialisasi Guru 1','Program Pendidikan Guru (Spesialis) Bahasa Korea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et.',3,'2026-01-10','2026-01-13','17:00:00','2026-01-10 21:11:28','Pengajar berasal dari akademisi dan praktisi berpengalaman di bidang pengajaran Bahasa Korea, baik dari Indonesia maupun Korea Selatan, dengan kualifikasi dan sertifikasi yang relevan. ','0',0),(3,'Kelas Spesialisasi Guru 2','Program Pendidikan Guru (Spesialis) Bahasa Korea','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et.',2,'2026-01-12','2026-01-13','17:00:00','2026-01-10 21:11:28','Pengajar berasal dari akademisi dan praktisi berpengalaman di bidang pengajaran Bahasa Korea, baik dari Indonesia maupun Korea Selatan, dengan kualifikasi dan sertifikasi yang relevan. ','0',0),(4,'Kelas TOPIK lvl 3-4 (1)','Program Persiapan TOPIK (Level 3-4)','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et.',4,'2026-01-10','2026-01-13','17:00:00','2026-01-10 21:13:45','Pengajar berasal dari akademisi dan praktisi berpengalaman di bidang pengajaran Bahasa Korea, baik dari Indonesia maupun Korea Selatan, dengan kualifikasi dan sertifikasi yang relevan. ','0',0),(5,'Kelas TOPIK lvl 3-4 (2)','Program Persiapan TOPIK (Level 3-4)','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis augue quis dolor sagittis, id faucibus nisl feugiat. Duis et.',4,'2026-01-10','2026-01-13','17:00:00','2026-01-10 21:15:20','Pengajar berasal dari akademisi dan praktisi berpengalaman di bidang pengajaran Bahasa Korea, baik dari Indonesia maupun Korea Selatan, dengan kualifikasi dan sertifikasi yang relevan. ','0',0),(8,'Kelas test','Test Update program kursus','ini kelas untuk program test update program kursus',1,'2026-01-12','2026-01-13','17:00:00','2026-01-12 16:33:07','john doe','0',1);
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-12 21:24:52

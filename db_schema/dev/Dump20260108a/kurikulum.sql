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
-- Table structure for table `kurikulum`
--

DROP TABLE IF EXISTS `kurikulum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kurikulum` (
  `kurikulumId` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `date_input` date NOT NULL,
  `isApprove` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date_approve` date DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `pic` int NOT NULL,
  PRIMARY KEY (`kurikulumId`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kurikulum`
--

LOCK TABLES `kurikulum` WRITE;
/*!40000 ALTER TABLE `kurikulum` DISABLE KEYS */;
-- INSERT INTO `kurikulum` VALUES (15,'Optio doloremque temporibus.','Qui veritatis voluptate maxime accusamus. Facere ratione dolores nihil dicta consequatur ut dolor. Dolores odit vero esse voluptatum.','2024-03-31','3','2020-10-30','2025-09-27 10:58:44',1),(16,'Ut ut sint.','testing update','2025-01-24','1',NULL,'2025-09-27 10:58:44',1),(17,'Deserunt impedit atque voluptatem.','Vitae voluptatem eaque sunt totam voluptas aut enim omnis. Et adipisci doloremque rem at similique iste eius exercitationem. Ipsam qui numquam quae minima.','2024-06-24','0',NULL,'2025-09-27 10:58:44',2),(19,'Vero vitae ducimus blanditiis.','Molestias rerum cumque soluta. Rerum ad et quis est delectus. Vitae culpa veritatis praesentium perferendis et sequi.','2025-06-04','3','2020-12-10','2025-09-27 10:58:44',1),(20,'Esse sed.','Quo minima consectetur dolore. Explicabo qui aut ut molestias et non. Non eos quasi et quia voluptates non esse. Eum quis in voluptatibus.','2024-06-17','0',NULL,'2025-09-27 10:58:44',1),(21,'Voluptas et.','Excepturi quia aut pariatur tempora. Adipisci vero nihil est delectus. Dolorem quia aut recusandae esse repellendus dolorem voluptas pariatur. Eaque consectetur qui quod repellat iusto modi.','2025-04-30','0',NULL,'2025-09-27 10:58:44',1),(22,'Quis assumenda.','Autem libero aut doloremque fugiat. Est id qui veritatis sed sit. Fugit sed sit qui asperiores qui. Et modi sapiente inventore iste eos est assumenda reprehenderit.','2024-10-27','3','2016-07-04','2025-09-27 10:58:44',1),(23,'Necessitatibus accusamus quis.','Dolorem incidunt eum ab ut ex. Reprehenderit magnam et magnam ut laboriosam hic. Reiciendis veritatis quibusdam et suscipit voluptas quidem.','2025-02-07','0',NULL,'2025-09-27 10:58:44',2),(24,'Aliquid inventore iure dolore.','Magni quibusdam eum ut accusantium. Sed voluptas fuga aut nobis repellendus reprehenderit fugit. Natus laborum deleniti nisi. Consequatur dolorem eum dolorem natus cumque omnis. Sint quia laudantium ullam alias.','2024-03-07','2','2020-03-25','2025-09-27 10:58:44',2),(26,'Kurikulum Baru v2 changed','Update terbaru deskripsi Kurikulum Baru V2','2025-10-08','1',NULL,'2025-10-08 15:43:35',2);
/*!40000 ALTER TABLE `kurikulum` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-08 10:13:13

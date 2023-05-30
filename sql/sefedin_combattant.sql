-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 10.10.51.252    Database: sefedin
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `combattant`
--

DROP TABLE IF EXISTS `combattant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `combattant` (
  `combattantId` int NOT NULL AUTO_INCREMENT,
  `combattantNom` varchar(255) NOT NULL,
  `combattantPrenom` varchar(255) NOT NULL,
  `combattantAge` date NOT NULL,
  `combattantDescription` varchar(255) NOT NULL,
  `combattantIllustration` varchar(255) NOT NULL,
  `userId` int NOT NULL,
  PRIMARY KEY (`combattantId`),
  KEY `utilisateurId` (`userId`),
  CONSTRAINT `combattant_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `utilisateur` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `combattant`
--

LOCK TABLES `combattant` WRITE;
/*!40000 ALTER TABLE `combattant` DISABLE KEYS */;
INSERT INTO `combattant` VALUES (2,'MAKHACHEV   ','ISLAM  ','1988-12-29','Islam Makhachev est un artiste martial mixte russe qui évolue actuellement dans la division des poids légers de l\'Ultimate Fighting Championship (UFC). Il est né le 27 septembre 1991 à Makhachkala, en Russie.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2023-02/MAKHACHEV_ISLAM_L_BELT_02-11.png?itok=C0Eo3RhP',2),(5,'SHAVKAT     ','RAHMANOV','1988-09-12','Shavkat Rakhmonov est un combattant professionnel kazakh d\'arts martiaux mixtes (MMA). Il est né le 17 avril 1995 à Oral, au Kazakhstan.','https://m-1global.com/upload//000/u3/61/51/shavkat-rahmonov-photo-big.png',2),(7,'PEREIRA     ','ALEX  ','1988-09-29','Alex Pereira est un kickboxeur brésilien qui a également fait des apparitions dans des combats de MMA. Il est né le 26 mars 1987 à Sao Paulo, au Brésil.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2022-07/55fbce59-2dd7-4210-8501-b88e0c948d80%252FPEREIRA_ALEX_L_07-02.png?itok=K1jPXD2v',2),(8,'ADESANYA     ','ISRAEL  ','1988-09-29','Israel Adesanya est un artiste martial mixte nigérian-néo-zélandais qui évolue actuellement dans la division des poids moyens de l\'Ultimate Fighting Championship (UFC). Il est né le 22 juillet 1989 à Lagos, au Nigeria, mais a grandi en Nouvelle-Zélande.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2023-04/ADESANYA_ISRAEL_L_BELT_07-02.png?itok=8iGqw0S',2);
/*!40000 ALTER TABLE `combattant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-25 16:09:36

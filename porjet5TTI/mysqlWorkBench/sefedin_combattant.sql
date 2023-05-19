-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: sefedin
-- ------------------------------------------------------
-- Server version	8.0.32

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
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `combattant`
--

LOCK TABLES `combattant` WRITE;
/*!40000 ALTER TABLE `combattant` DISABLE KEYS */;
INSERT INTO `combattant` VALUES (1,'VOLKANOVSKI   ','ALEXANDER ','1988-09-29','Alexander Volkanovski est un artiste martial mixte australien qui concourt actuellement dans la division poids plume de l\'Ultimate Fighting Championship (UFC). Il est né le 29 septembre 1988 à Shellharbour, en Nouvelle-Galles du Sud, en Australie.','https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2023-02/VOLKANOVSKI_ALEXANDER_R_BELT_02-11.png?itok=srj4Vh0Z',1),(2,'MAKHACHEV   ','ISLAM  ','1988-12-29','Islam Makhachev est un artiste martial mixte russe qui évolue actuellement dans la division des poids légers de l\'Ultimate Fighting Championship (UFC). Il est né le 27 septembre 1991 à Makhachkala, en Russie.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2023-02/MAKHACHEV_ISLAM_L_BELT_02-11.png?itok=C0Eo3RhP',2),(3,'CONOR     ','MCGREGOR  ','1995-09-29','Conor McGregor est un ancien combattant d\'arts martiaux mixtes qui a concouru dans l\'Ultimate Fighting Championship (UFC). Il est né le 14 juillet 1988 à Dublin, en Irlande.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-07/MCGREGOR_CONOR_L_07-10.png?itok=xbg9Kwfj',1),(4,'LEON','EDWARDS  ','1988-09-01','Leon Edwards est un artiste martial mixte britannique qui évolue actuellement dans la division des poids mi-moyens de l\'Ultimate Fighting Championship (UFC). Il est né le 25 août 1991 à Kingston-upon-Thames, en Angleterre.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2023-03/EDWARDS_LEON_L_BELT_03-18.png?itok=WPUJraam',1),(5,'SHAVKAT     ','RAHMANOV','1988-09-12','Shavkat Rakhmonov est un combattant professionnel kazakh d\'arts martiaux mixtes (MMA). Il est né le 17 avril 1995 à Oral, au Kazakhstan.','https://m-1global.com/upload//000/u3/61/51/shavkat-rahmonov-photo-big.png',2),(6,'CHIMAEV     ','KHAMZAT  ','1950-05-20','Khamzat Chimaev est un artiste martial mixte suédois-tchétchène qui évolue actuellement dans la division des poids mi-moyens de l\'Ultimate Fighting Championship (UFC). Il est né le 1er mai 1994 à Grozny, en Tchétchénie, et a grandi en Suède.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-11/71660%252Fprofile-galery%252Ffullbodyleft-picture%252FCHIMAEV_KHAMZAT_L_10-30.png?itok=V9OsChbC',1),(7,'PEREIRA     ','ALEX  ','1988-09-29','Alex Pereira est un kickboxeur brésilien qui a également fait des apparitions dans des combats de MMA. Il est né le 26 mars 1987 à Sao Paulo, au Brésil.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2022-07/55fbce59-2dd7-4210-8501-b88e0c948d80%252FPEREIRA_ALEX_L_07-02.png?itok=K1jPXD2v',2),(8,'ADESANYA     ','ISRAEL  ','1988-09-29','Israel Adesanya est un artiste martial mixte nigérian-néo-zélandais qui évolue actuellement dans la division des poids moyens de l\'Ultimate Fighting Championship (UFC). Il est né le 22 juillet 1989 à Lagos, au Nigeria, mais a grandi en Nouvelle-Zélande.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2023-04/ADESANYA_ISRAEL_L_BELT_07-02.png?itok=8iGqw0S',2),(9,'JONES     ','JON  ','1988-09-29','Jon Jones est un artiste martial mixte américain considéré comme l\'un des meilleurs combattants de l\'histoire de l\'Ultimate Fighting Championship (UFC). Il est né le 19 juillet 1987 à Rochester, dans l\'État de New York, aux États-Unis.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2023-03/JONES_JON_L_BELT_03_04.png?itok=P6J6DQpm',1),(10,'GANE   ','CIRYL  ','1988-09-29','Ciryl Gane est un artiste martial mixte français qui évolue actuellement dans la division des poids lourds de l\'Ultimate Fighting Championship (UFC). Il est né le 12 avril 1990 à La Roche-sur-Yon, en France.','https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2022-09/GANE_CYRIL_L_09-03.png?itok=Gt5pcNnr',1),(112,'Latifi','Illir','1983-07-28','Heavyweight Division Active \"The Sledgehammer\" Ilir Latifi Heavyweight Division 17-8-0 (W-L-D) 6 Wins by Knockout 5 Wins by Submission 9 First Round Finishes Last fight Win Latifi …','https://th.bing.com/th/id/OIP.ySojEr2rjKislNwAwBYcewAAAA?w=115&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',1),(113,'Latifi','Illir','1983-07-28','Heavyweight Division Active \"The Sledgehammer\" Ilir Latifi Heavyweight Division 17-8-0 (W-L-D) 6 Wins by Knockout 5 Wins by Submission 9 First Round Finishes Last fight Win Latifi …','https://th.bing.com/th/id/OIP.ySojEr2rjKislNwAwBYcewAAAA?w=115&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',1),(114,'ajdini','sefedin','2023-05-19','vzrba','ubhi',1),(115,'ajdini','sefedin','2023-05-19','vzrba','ubhi',1),(116,'krezhai','ipupoy','2023-05-07','ij&y','oiyuçp',1),(117,'cc','ccc','2023-05-13','   cc','cc',1),(118,'cc','ccc','2023-05-13','   cc','cc',1),(119,'quoi','quoi','2023-06-03','quoi','quoi',1),(120,'ajdini','sefedin','2023-05-20','IOEZJ','PIIOH',1),(121,'g\"uhzjek','iohvoeirjzoi','2023-05-26','iurehzorhoi','uhuiehzoifh',1),(122,'ajdini','sefedin','2023-05-26','bhejznrbon','https://th.bing.com/th/id/OIP.ySojEr2rjKislNwAwBYcewAAAA?w=115&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',1);
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

-- Dump completed on 2023-05-19 23:55:26

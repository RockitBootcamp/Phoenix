-- MySQL dump 10.13  Distrib 5.6.17, for osx10.7 (x86_64)
--
-- Host: rockit.ccyd2ljjwzet.us-east-1.rds.amazonaws.com    Database: monster
-- ------------------------------------------------------
-- Server version	5.6.13

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
-- Table structure for table `character`
--

DROP TABLE IF EXISTS `character`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `character` (
  `char_id` int(11) NOT NULL AUTO_INCREMENT,
  `char_type_id` int(11) NOT NULL COMMENT 'foreign key to character_type table',
  `name` varchar(60) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `weapon_id` int(11) NOT NULL COMMENT 'foreign key to weapons table',
  `char_imag` varchar(255) NOT NULL COMMENT 'url to player or monster image',
  PRIMARY KEY (`char_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COMMENT='Contains all the possible players and monsters';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `character`
--

LOCK TABLES `character` WRITE;
/*!40000 ALTER TABLE `character` DISABLE KEYS */;
INSERT INTO `character` VALUES (7,0,'Amazon','',20,'amazon.png'),(10,0,'Elf','',21,'elf.png'),(11,0,'Human','',22,'human.png'),(12,0,'Knight','',23,'knight.png'),(13,0,'Wizard','',26,'wizard.png'),(14,0,'T-Rex','',25,'t-rex.png'),(15,1,'Ogre','',2,'ogre.png'),(16,1,'Vampire','',11,'vampire.png'),(17,1,'Swampman','',12,'swampman.png'),(18,1,'Lizardman','',13,'lizardman.png'),(19,1,'Scorpion','',14,'scorpion.png'),(20,1,'GiantSpider','',15,'giantspider.png'),(21,1,'Skeleton','',16,'skeleton.png'),(22,1,'Werewolf','',17,'wolfman.png'),(23,1,'Witch','',18,'witch.png');
/*!40000 ALTER TABLE `character` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `character_type`
--

DROP TABLE IF EXISTS `character_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `character_type` (
  `char_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL COMMENT '0=player, 1 = monster',
  PRIMARY KEY (`char_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `character_type`
--

LOCK TABLES `character_type` WRITE;
/*!40000 ALTER TABLE `character_type` DISABLE KEYS */;
INSERT INTO `character_type` VALUES (1,0),(2,1);
/*!40000 ALTER TABLE `character_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monster`
--

DROP TABLE IF EXISTS `monster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monster` (
  `char_id` int(11) NOT NULL COMMENT 'primary and foreign key',
  PRIMARY KEY (`char_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monster`
--

LOCK TABLES `monster` WRITE;
/*!40000 ALTER TABLE `monster` DISABLE KEYS */;
INSERT INTO `monster` VALUES (15),(16),(17),(18),(19),(20),(21),(22),(23);
/*!40000 ALTER TABLE `monster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player` (
  `char_id` int(11) NOT NULL COMMENT 'primary key and foreign key to character table',
  `health` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`char_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` VALUES (7,100,0),(10,100,0),(11,100,0),(12,100,0),(13,100,0),(14,100,0);
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weapon_type`
--

DROP TABLE IF EXISTS `weapon_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weapon_type` (
  `char_id` int(11) NOT NULL COMMENT 'foreign key to character table',
  `weapon_id` int(11) NOT NULL COMMENT 'foreign key to weapon table',
  UNIQUE KEY `char_id` (`char_id`),
  UNIQUE KEY `weapon_id` (`weapon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weapon_type`
--

LOCK TABLES `weapon_type` WRITE;
/*!40000 ALTER TABLE `weapon_type` DISABLE KEYS */;
INSERT INTO `weapon_type` VALUES (15,2),(16,11),(17,12),(18,13),(19,14),(20,15),(21,16),(22,17),(23,18),(7,20),(10,21),(11,22),(12,23),(13,24),(14,25);
/*!40000 ALTER TABLE `weapon_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weapons`
--

DROP TABLE IF EXISTS `weapons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weapons` (
  `weapon_id` int(11) NOT NULL AUTO_INCREMENT,
  `weapon_name` varchar(60) NOT NULL,
  `weapon_image` varchar(255) NOT NULL COMMENT 'url of weapon image',
  PRIMARY KEY (`weapon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weapons`
--

LOCK TABLES `weapons` WRITE;
/*!40000 ALTER TABLE `weapons` DISABLE KEYS */;
INSERT INTO `weapons` VALUES (2,'club','club.png'),(11,'sleep_spell','sleep-spell.png'),(12,'slime','slime.png'),(13,'tail','tail.png'),(14,'neuro_poison','neuro-poison.png'),(15,'blood_poison','blood-poison.png'),(16,'bone','bone.png'),(17,'claws','claws.png'),(18,'broom','broom.png'),(19,'potion','potion.png'),(20,'whip','whip.png'),(21,'bow_and_arrow','bow_and_Arrow.png'),(22,'iphone','iphone.png'),(23,'sword','sword.png'),(24,'lightning_bolt','lightning_bolt.png'),(25,'dentures','dentures.png');
/*!40000 ALTER TABLE `weapons` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-19 13:25:41

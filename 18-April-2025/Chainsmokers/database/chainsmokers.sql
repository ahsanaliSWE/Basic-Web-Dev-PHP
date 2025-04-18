/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - chainsmokers
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`chainsmokers` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `chainsmokers`;

/*Table structure for table `chainsmokers_data` */

DROP TABLE IF EXISTS `chainsmokers_data`;

CREATE TABLE `chainsmokers_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `chainsmokers_data` */

insert  into `chainsmokers_data`(`id`,`category`,`title`,`year`,`description`) values 
(1,'Song','Closer',2016,'Collaboration with Halsey that became a global hit.'),
(2,'Song','Don\'t Let Me Down',2016,'Featuring Daya, Grammy-winning track.'),
(3,'Album','Memories...Do Not Open',2017,'Debut studio album with major hits.'),
(4,'Song','Paris',2017,'Chill vibes and reflective lyrics.'),
(5,'Collab','Something Just Like This',2017,'Collab with Coldplay. Huge success.'),
(6,'Song','Roses',2015,'One of their early breakout songs.'),
(7,'Award','Grammy - Best Dance Recording',2017,'Won for \"Don\'t Let Me Down\".'),
(8,'Tour','Memories Tour',2017,'World tour after album release.'),
(9,'Song','Sick Boy',2018,'Darker, more emotional tone.'),
(10,'Collab','Who Do You Love',2019,'With 5 Seconds of Summer.'),
(11,'Song','High',2022,'Comeback single after hiatus.'),
(12,'Album','So Far So Good',2022,'Return to their classic sound.'),
(13,'Collab','iPad',2022,'Viral single with emotional depth.'),
(14,'Song','Side Effects',2018,'Feat. Emily Warren, funky summer vibe.'),
(15,'Song','The One',2017,'Mellow track from Memories album.'),
(16,'Tour','World War Joy Tour',2019,'Massive tour across North America.'),
(17,'Collab','Call You Mine',2019,'With Bebe Rexha.'),
(18,'Award','Billboard Music Awards',2019,'Top Dance/Electronic Artist.'),
(19,'Song','Beach House',2018,'Inspired by indie pop.'),
(20,'Song','Everybody Hates Me',2018,'Commentary on fame and pressure.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

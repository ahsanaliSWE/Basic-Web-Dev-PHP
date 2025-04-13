/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - users
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`users` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `users`;

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`city_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `city_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `city` */

insert  into `city`(`city_id`,`name`,`country_id`) values 
(1,'Karachi',1),
(2,'Lahore',1),
(3,'Islamabad',1),
(4,'Peshawar',1),
(5,'Quetta',1),
(6,'New York',2),
(7,'Los Angeles',2),
(8,'Chicago',2),
(9,'Houston',2),
(10,'San Francisco',2),
(11,'Delhi',3),
(12,'Mumbai',3),
(13,'Bangalore',3),
(14,'Chennai',3),
(15,'Hyderabad',3),
(16,'Toronto',4),
(17,'Vancouver',4),
(18,'Montreal',4),
(19,'Calgary',4),
(20,'Ottawa',4),
(21,'Sydney',5),
(22,'Melbourne',5),
(23,'Brisbane',5),
(24,'Perth',5),
(25,'Adelaide',5),
(26,'London',6),
(27,'Manchester',6),
(28,'Birmingham',6),
(29,'Leeds',6),
(30,'Glasgow',6),
(31,'Berlin',7),
(32,'Munich',7),
(33,'Frankfurt',7),
(34,'Hamburg',7),
(35,'Cologne',7);

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `country` */

insert  into `country`(`country_id`,`name`) values 
(1,'Pakistan'),
(2,'USA'),
(3,'India'),
(4,'Canada'),
(5,'Australia'),
(6,'UK'),
(7,'Germany');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `country_id` (`country_id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`user_id`,`name`,`email`,`password`,`country_id`,`city_id`) values 
(4,'Ahsan Ali','ahsanali@gmail.com','1234',1,1),
(5,'Emily White','emilywhite@gmail.com','1234',6,26),
(6,'John Doe','johndoe@gmail.com','1234',2,8);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

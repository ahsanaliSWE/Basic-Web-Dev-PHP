/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - chat_application
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`chat_application` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `chat_application`;

/*Table structure for table `chats` */

DROP TABLE IF EXISTS `chats`;

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `sent_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`chat_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `chats` */

insert  into `chats`(`chat_id`,`user_id`,`message`,`sent_on`) values 
(1,1,'Emily','1744738271'),
(2,1,'hello','1744738784'),
(3,1,'hi','1744743776'),
(4,1,'hi','1744743913'),
(5,1,'d','1744743947'),
(6,1,'Emily','1744744134'),
(7,1,'Emily','1744744144'),
(8,1,'Emily','1744744160'),
(9,1,'hello','1744744196'),
(10,1,'h','1744744208'),
(11,1,'Emily','1744744652'),
(12,2,'hello','1744744764'),
(13,1,'hi john','1744744902'),
(14,1,'hi','1744744913'),
(15,2,'hello emily','1744744995'),
(16,2,'hello','1744745008'),
(17,1,'hello john','1744745028'),
(18,1,'hello john','1744745058'),
(19,2,'hello','1744745144'),
(20,2,'hi','1744745152'),
(21,2,'hi','1744745161'),
(22,1,'lornmknfkjnsafkjdsnfkljnlwkfnldksnflkamslkfnlasdnmflknmdsalfnlksdnfknsda;f','1744749905'),
(23,3,'hi','1744750860');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `profile_image` varchar(100) NOT NULL DEFAULT '1.jpg',
  `is_online` tinyint(4) NOT NULL DEFAULT 0,
  `last_seen` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`user_id`,`first_name`,`last_name`,`email`,`password`,`profile_image`,`is_online`,`last_seen`) values 
(1,'Emily','White','emilywhite@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','1.jpg',1,'2025-04-16 01:59:33'),
(2,'John','Doe','john.doe@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','1.jpg',0,'2025-04-16 01:59:53'),
(3,'Jane','Doe','janedoe@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','1.jpg',1,'2025-04-16 02:00:50');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

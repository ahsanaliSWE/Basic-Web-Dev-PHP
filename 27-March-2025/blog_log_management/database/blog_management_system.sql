/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - blog_management_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog_management_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `blog_management_system`;

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` datetime DEFAULT NULL,
  `logout` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `log` */

insert  into `log`(`log_id`,`login`,`logout`,`user_id`) values 
(1,'2025-03-27 19:13:33','2025-03-27 19:13:34',25),
(2,'2025-03-27 19:13:47','2025-03-27 19:13:50',25),
(3,'2025-03-27 19:13:57','2025-03-27 19:14:01',26),
(4,'2025-03-27 19:18:58','2025-03-27 19:18:59',25),
(5,'2025-03-27 19:41:56','2025-03-27 19:44:06',25),
(6,'2025-03-27 19:44:09','2025-03-27 19:57:41',25),
(7,'2025-03-27 20:05:22','2025-03-27 20:07:31',28),
(8,'2025-03-27 20:42:01','2025-03-27 20:42:38',25),
(9,'2025-03-27 20:42:19','2025-03-27 20:42:38',25),
(10,'2025-03-27 20:45:13','2025-03-27 20:46:58',25),
(11,'2025-03-27 20:47:52',NULL,NULL),
(12,'2025-03-27 20:48:26',NULL,NULL),
(13,'2025-03-27 20:50:18','2025-03-27 20:50:55',30),
(14,'2025-03-27 20:51:03','2025-03-27 20:51:07',28),
(15,'2025-03-27 20:51:45',NULL,NULL),
(16,'2025-03-27 20:51:56',NULL,NULL),
(17,'2025-03-27 20:52:18','2025-03-27 20:52:57',29),
(18,'2025-03-27 20:53:32','2025-03-27 20:53:35',27);

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `added_by` (`added_by`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `posts` */

insert  into `posts`(`post_id`,`title`,`summary`,`description`,`added_by`) values 
(2,'Quantum Computing Breakthrough','Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',26),
(5,'The Rise of Electric Vehicles','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.','Phasellus ultrices nulla quis nibh. Quisque a lectus.',26),
(6,'Blockchain Beyond Bitcoin','Aliquam erat volutpat. Nulla facilisi.','Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus.',27),
(7,'HealthTech Innovations1','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Vestibulum dapibus nunc ac augue. Curabitur ullamcorper ultricies nisi.',25),
(8,'Climate Change Crisis','Aenean imperdiet. Etiam ultricies nisi vel augue.','Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.',26),
(9,'The Psychology of Happiness','Sed fringilla mauris sit amet nibh.','Etiam sit amet orci eget eros faucibus tincidunt.',27),
(10,'The Evolution of Web Development','Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.','Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.',25),
(11,'The Power of Habit','Phasellus viverra nulla ut metus varius laoreet.','Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.',26),
(12,'The Secrets of the Universe','Vestibulum volutpat pretium libero.','Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.',27),
(13,'5G and Its Impact','Fusce ac felis sit amet ligula pharetra condimentum.','Praesent congue erat at massa. Sed cursus turpis vitae tortor.',25),
(18,'Post 2','Duis aute irure dolor in reprehenderit in voluptate velits.','Duis aute irure dolor in reprehenderit in voluptate velits.Duis aute irure dolor in reprehenderit in voluptate velits.Duis aute irure dolor in reprehenderit in voluptate velits.Duis aute irure dolor i',30);

/*Table structure for table `role_type` */

DROP TABLE IF EXISTS `role_type`;

CREATE TABLE `role_type` (
  `role_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` enum('Admin','Editor','User') NOT NULL DEFAULT 'User',
  PRIMARY KEY (`role_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `role_type` */

insert  into `role_type`(`role_type_id`,`role`) values 
(1,'Admin'),
(2,'Editor'),
(3,'User');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT 'Male',
  `role_type_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_type` (`role_type_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_type_id`) REFERENCES `role_type` (`role_type_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`user_id`,`name`,`email`,`password`,`gender`,`role_type_id`) values 
(25,'Emily White','emilywhite@gmail.com','1234','Female',2),
(26,'John Doe','johndoe@gmail.com','1234','Male',1),
(27,'Jane Doe','janedoe@gmail.com','1234','Female',3),
(28,'Jane Doe','jane@gmail.com','1234','Female',3),
(29,'Wendy Walter','wendywalter@gmail.com','1234','Female',3),
(30,'Walter White','walterwhite@gmail.com','1234','Male',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

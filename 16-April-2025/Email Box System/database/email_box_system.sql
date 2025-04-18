/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - email_box_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`email_box_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `email_box_system`;

/*Table structure for table `emails` */

DROP TABLE IF EXISTS `emails`;

CREATE TABLE `emails` (
  `email_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` enum('sent','inbox','draft','trash') DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`email_id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`),
  CONSTRAINT `emails_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `emails_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `emails` */

insert  into `emails`(`email_id`,`sender_id`,`receiver_id`,`subject`,`message`,`status`,`created_at`) values 
(5,1,2,'Greetings','Hello ','trash','2025-04-16 22:06:02'),
(6,3,1,'Hi Friend','Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dolorum distinctio officiis accusantium explicabo eos! Magnam, quas unde. Eaque nam iusto eos impedit voluptates velit reiciendis animi nesciunt laboriosam laudantium.','sent','2025-04-17 08:20:36'),
(7,3,1,'Hi Friend','Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dolorum distinctio officiis accusantium explicabo eos! Magnam, quas unde. Eaque nam iusto eos impedit voluptates velit reiciendis animi nesciunt laboriosam laudantium.','sent','2025-04-17 08:20:42');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`user_id`,`name`,`email`,`password`) values 
(1,'Ayaan Khan','ayaan.khan@gmail.com','Pass@123'),
(2,'Zara Ahmed','zara.ahmed@outlook.com','Zara#456'),
(3,'Hamza Malik','hamza.malik@yahoo.com','Hamza$789'),
(4,'Fatima Shaikh','fatima.shaikh@gmail.com','F@tima321'),
(5,'Bilal Hussain','bilal.hussain@outlook.com','Bil@l111'),
(6,'Sana Iqbal','sana.iqbal@yahoo.com','Sana*234'),
(7,'Usman Raza','usman.raza@gmail.com','Usm@n567'),
(8,'Hira Siddiqui','hira.siddiqui@outlook.com','Hira#890'),
(9,'Ali Abbas','ali.abbas@yahoo.com','Ali@2024'),
(10,'Mehwish Tariq','mehwish.tariq@gmail.com','Mehwi$h001');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

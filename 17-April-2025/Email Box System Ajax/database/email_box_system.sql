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
  `message` longtext DEFAULT NULL,
  `status` enum('0','1','2','3') DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`email_id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`),
  CONSTRAINT `emails_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `emails_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `emails` */

insert  into `emails`(`email_id`,`sender_id`,`receiver_id`,`subject`,`message`,`status`,`created_at`) values 
(5,1,2,'Greetings','Hello ','','2025-04-16 22:06:02'),
(6,3,1,'Hi Friend','Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dolorum distinctio officiis accusantium explicabo eos! Magnam, quas unde. Eaque nam iusto eos impedit voluptates velit reiciendis animi nesciunt laboriosam laudantium.','','2025-04-17 08:20:36'),
(7,3,1,'Hi Friend','Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos dolorum distinctio officiis accusantium explicabo eos! Magnam, quas unde. Eaque nam iusto eos impedit voluptates velit reiciendis animi nesciunt laboriosam laudantium.','','2025-04-17 08:20:42'),
(8,1,2,'Hello',';lfkdkshkjfsdkajfksd','','2025-04-17 20:26:17'),
(9,1,2,'Hello','afaksfnklas','','2025-04-17 20:40:09'),
(10,2,1,'Greetings','afmlkaegv mncxweiojtw kjsnfkjandfkj','1','2025-04-17 21:01:55'),
(11,2,1,'Greetings','afmlkaegv mncxweiojtw kjsnfkjandfkj','3','2025-04-17 21:02:07'),
(12,2,1,'Greetings 2','afmlkaegv mncxweiojtw kjsnfkjandfkjfafasfafafmlkaegv mncxweiojtw kjsnfkjandfkjfafasfafafmlkaegv mncxweiojtw kjsnfkjandfkjfafasfafafmlkaegv mncxweiojtw kjsnfkjandfkjfafasfaf','3','2025-04-17 21:02:27'),
(13,2,1,'Greetings 2 445','afmlkaegv mncxweiojtw kjsnfkjandfkjfafasfafafmlkaegv mncxweiojtw kjsnfkjandfkjfafasfafafmlkaegv mncxweiojtw kjsnfkjandfkjfafasfafafmlkaegv mncxweiojtw kjsnfkjandfkjfafasfaf','3','2025-04-17 21:05:42'),
(14,3,1,'Hello','asfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsdasfsd','2','2025-04-17 21:22:30'),
(15,1,2,'Hello','afasf','0','2025-04-17 21:28:20'),
(16,1,2,'Hello 4124','afasf','','2025-04-17 21:28:28'),
(17,3,1,'UI Design Suggestions','','0','2025-04-17 21:43:20'),
(18,3,1,'UI Design Suggestions','Hi Ayaan,\n','0','2025-04-17 21:43:50'),
(19,3,1,'UI Design Suggestions','Hi Ayaan Thats a cool idea! Ill experiment with a fade transition;','1','2025-04-17 21:44:44'),
(20,1,2,'Subject: UI Design Suggestions','Hey Zara\nHope youre','0','2025-04-17 21:48:43'),
(21,1,2,'Subject: UI Design Suggestions','2','0','2025-04-17 21:49:14'),
(22,1,2,'Subject: UI Design Suggestions','1','0','2025-04-17 21:49:27'),
(23,1,2,'daa','adasd','1','2025-04-17 21:52:32'),
(24,1,2,'Hello','sanfkjnasdkfn','3','2025-04-18 00:08:50'),
(25,1,2,'sub 2','sdjfslkaflk','1','2025-04-18 00:09:25'),
(26,1,2,'sub 2','abcd','3','2025-04-18 00:09:57'),
(27,1,2,'sub 2','abcd','0','2025-04-18 00:10:07'),
(28,2,1,'sub 2ad','adasd','3','2025-04-18 00:11:35'),
(29,1,4,'Hello','addasdas','3','2025-04-18 00:48:16');

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

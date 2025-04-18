/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - user
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`user` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `user`;

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

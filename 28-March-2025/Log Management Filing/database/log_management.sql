/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - log_management
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`log_management` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `log_management`;

/*Table structure for table `role_type` */

DROP TABLE IF EXISTS `role_type`;

CREATE TABLE `role_type` (
  `role_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` enum('Admin','User') NOT NULL DEFAULT 'User',
  PRIMARY KEY (`role_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `role_type` */

insert  into `role_type`(`role_type_id`,`role`) values 
(1,'Admin'),
(2,'User');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `role_type_id` int(11) DEFAULT 2,
  PRIMARY KEY (`user_id`),
  KEY `role_type_id` (`role_type_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_type_id`) REFERENCES `role_type` (`role_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `user` */

insert  into `user`(`user_id`,`name`,`email`,`password`,`gender`,`role_type_id`) values 
(3,'Emily White','emilywhite@gmail.com','1234','Female',2),
(4,'John Doe','johndoe@gmail.com','1234','Male',1),
(6,'Ali Khan','ali.khan@example.com','pass123','Male',2),
(7,'Aisha Ahmed','aisha.ahmed@example.com','pass456','Female',2),
(8,'Bilal Hussain','bilal.hussain@example.com','pass789','Male',2),
(9,'Zara Farooq','zara.farooq@example.com','pass321','Female',2),
(10,'Omar Saeed','omar.saeed@example.com','pass654','Male',2),
(11,'Sana Riaz','sana.riaz@example.com','pass987','Female',2),
(12,'Danish Iqbal','danish.iqbal@example.com','pass111','Male',2),
(13,'Nadia Khan','nadia.khan@example.com','pass222','Female',2),
(14,'Imran Shaikh','imran.shaikh@example.com','pass333','Male',2),
(15,'Hina Malik','hina.malik@example.com','pass444','Female',2),
(16,'Usman Tariq','usman.tariq@example.com','pass555','Male',2),
(17,'Samina Javed','samina.javed@example.com','pass666','Female',2),
(18,'Kashif Mehmood','kashif.mehmood@example.com','pass777','Male',2),
(19,'Mehwish Arif','mehwish.arif@example.com','pass888','Female',2),
(20,'Farhan Qureshi','farhan.qureshi@example.com','pass999','Male',2),
(21,'Rabia Nasir','rabia.nasir@example.com','pass000','Female',2),
(22,'Shahzad Alam','shahzad.alam@example.com','passabc','Male',2),
(23,'Hira Salman','hira.salman@example.com','passdef','Female',2),
(24,'Naveed Aslam','naveed.aslam@example.com','passghi','Male',2),
(25,'Tania Yousuf','tania.yousuf@example.com','passjkl','Female',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

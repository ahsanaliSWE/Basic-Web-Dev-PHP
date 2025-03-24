/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - company
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`company` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `company`;

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `employees` */

insert  into `employees`(`id`,`first_name`,`last_name`,`email`,`phone`,`department`,`salary`,`hire_date`) values 
(1,'Ali','Khan','ali.khan@example.com','0312-1234567','Engineering',75000.00,'2022-06-15'),
(2,'Aisha','Ahmed','aisha.ahmed@example.com','0321-2345678','HR',65000.00,'2021-04-10'),
(3,'Bilal','Hussain','bilal.hussain@example.com','0333-3456789','Finance',80000.00,'2020-08-22'),
(4,'Fatima','Raza','fatima.raza@example.com','0345-4567890','Marketing',72000.00,'2023-01-30'),
(5,'Usman','Sheikh','usman.sheikh@example.com','0300-5678901','Sales',68000.00,'2019-11-18'),
(6,'Hassan','Ali','hassan.ali@example.com','0311-6789012','Engineering',78000.00,'2021-07-19'),
(7,'Zainab','Farooq','zainab.farooq@example.com','0322-7890123','HR',66000.00,'2020-12-05'),
(8,'Omer','Iqbal','omer.iqbal@example.com','0334-8901234','Finance',82000.00,'2018-09-25'),
(9,'Sadia','Malik','sadia.malik@example.com','0346-9012345','Marketing',73000.00,'2023-03-11'),
(10,'Noman','Rafiq','noman.rafiq@example.com','0301-0123456','Sales',70000.00,'2017-06-29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

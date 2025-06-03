/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - reporting
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`reporting` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `reporting`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `batch` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`phone`,`course`,`batch`) values 
(1,'Ali Raza','ali.raza@example.com','03001234567','PHP Development','2k24'),
(2,'Ayesha Khan','ayesha.khan@example.com','03011234567','Web Design','2k23'),
(3,'Usman Tariq','usman.tariq@example.com','03021234567','AI & ML','2k25'),
(4,'Fatima Noor','fatima.noor@example.com','03031234567','Cyber Security','2k24'),
(5,'Zara Shah','zara.shah@example.com','03041234567','Data Science','2k25'),
(6,'Ahmed Malik','ahmed.malik@example.com','03051234567','Networking','2k23'),
(7,'Sara Ali','sara.ali@example.com','03061234567','UI/UX Design','2k24'),
(8,'Bilal Khan','bilal.khan@example.com','03071234567','Database Admin','2k25'),
(9,'Nimra Sheikh','nimra.sheikh@example.com','03081234567','Mobile App Dev','2k24'),
(10,'Hamza Qureshi','hamza.q@example.com','03091234567','Cloud Computing','2k23'),
(11,'Anum Zahid','anum.zahid@example.com','03101234567','Web Development','2k24'),
(12,'Rizwan Akbar','rizwan.akbar@example.com','03111234567','Cyber Security','2k25'),
(13,'Mariam Iqbal','mariam.iqbal@example.com','03121234567','Machine Learning','2k24'),
(14,'Danish Butt','danish.butt@example.com','03131234567','Software Eng','2k25'),
(15,'Iqra Aslam','iqra.aslam@example.com','03141234567','Digital Marketing','2k23'),
(16,'Hassan Javed','hassan.javed@example.com','03151234567','E-Commerce Dev','2k24'),
(17,'Sadia Hameed','sadia.h@example.com','03161234567','Blockchain','2k25'),
(18,'Tariq Mehmood','tariq.m@example.com','03171234567','IoT','2k24'),
(19,'Kiran Awan','kiran.awan@example.com','03181234567','Graphics Design','2k23'),
(20,'Jawad Nasir','jawad.nasir@example.com','03191234567','AI & ML','2k25');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - error_handling
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`error_handling` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `error_handling`;

/*Table structure for table `error_logs` */

DROP TABLE IF EXISTS `error_logs`;

CREATE TABLE `error_logs` (
  `error_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `error_level` varchar(100) DEFAULT NULL,
  `error_message` varchar(100) DEFAULT NULL,
  `error_file` varchar(100) DEFAULT NULL,
  `error_line` varchar(100) DEFAULT NULL,
  `error_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`error_log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `error_logs` */

insert  into `error_logs`(`error_log_id`,`error_level`,`error_message`,`error_file`,`error_line`,`error_time`) values 
(1,'1024','Notice Error: ','C:xampphtdocshidayaAssignment21-April-202523598_Ahsan_Ali_error_handlingindex.php','84','2025-04-21 18:37:27 pm'),
(2,'512','Warning Error: ','C:xampphtdocshidayaAssignment21-April-202523598_Ahsan_Ali_error_handlingindex.php','85','2025-04-21 18:37:57 pm'),
(3,'256','Fatal Error: ','C:xampphtdocshidayaAssignment21-April-202523598_Ahsan_Ali_error_handlingindex.php','86','2025-04-21 18:39:36 pm'),
(4,'256','Fatal Error: ','C:xampphtdocshidayaAssignment21-April-202523598_Ahsan_Ali_error_handlingindex.php','88','2025-04-21 21:40:53 pm'),
(5,'256','Fatal Error: ','C:xampphtdocshidayaAssignment21-April-202523598_Ahsan_Ali_error_handlingindex.php','88','2025-04-21 09:41:17 pm'),
(6,'256','Fatal Error: ','C:xampphtdocshidayaAssignment21-April-202523598_Ahsan_Ali_error_handlingindex.php','94','2025-04-21 09:43:54 pm');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

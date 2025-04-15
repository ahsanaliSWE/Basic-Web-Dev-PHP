/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - search_like_google
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`search_like_google` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `search_like_google`;

/*Table structure for table `php_topics` */

DROP TABLE IF EXISTS `php_topics`;

CREATE TABLE `php_topics` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `php_topics` */

insert  into `php_topics`(`topic_id`,`title`,`url`,`description`) values 
(1,'Introduction to PHP','https://www.php.net/manual/en/intro-whatis.php','Learn what PHP is and how it powers dynamic websites.'),
(2,'PHP Variables','https://www.php.net/manual/en/language.variables.php','Understand how to declare and use variables in PHP.'),
(3,'PHP Arrays','https://www.php.net/manual/en/language.types.array.php','Learn about arrays and how to manipulate them in PHP.'),
(4,'PHP Loops','https://www.php.net/manual/en/control-structures.foreach.php','Use loops such as foreach, while, and for in PHP scripts.'),
(5,'PHP Functions','https://www.php.net/manual/en/functions.user-defined.php','Create and call user-defined functions in PHP.'),
(6,'PHP Forms and $_POST','https://www.w3schools.com/php/php_forms.asp','Learn how to handle form data using the POST method in PHP.'),
(7,'PHP Sessions','https://www.php.net/manual/en/book.session.php','Maintain state with sessions in PHP applications.'),
(8,'PHP MySQLi Tutorial','https://www.php.net/manual/en/book.mysqli.php','Connect PHP with MySQL using MySQLi extension.'),
(9,'PHP File Upload','https://www.w3schools.com/php/php_file_upload.asp','Learn how to upload files securely with PHP.'),
(10,'PHP Error Handling','https://www.php.net/manual/en/book.errorfunc.php','Handle and manage errors in PHP scripts.');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

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

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `added_by` (`added_by`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `posts` */

insert  into `posts`(`post_id`,`title`,`summary`,`description`,`added_by`) values 
(2,'Quantum Computing Breakthrough','Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',26),
(5,'The Rise of Electric Vehicles','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.','Phasellus ultrices nulla quis nibh. Quisque a lectus.',26),
(6,'Blockchain Beyond Bitcoin','Aliquam erat volutpat. Nulla facilisi.','Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus.',27),
(7,'HealthTech Innovations1','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Vestibulum dapibus nunc ac augue. Curabitur ullamcorper ultricies nisi.',25),
(8,'Climate Change Crisis','Aenean imperdiet. Etiam ultricies nisi vel augue.','Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.',26),
(9,'The Psychology of Happiness','Sed fringilla mauris sit amet nibh','Etiam sit amet orci eget eros faucibus tincidunt.',27),
(10,'The Evolution of Web Development','Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.','Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.',25),
(11,'The Power of Habit','Phasellus viverra nulla ut metus varius laoreet.','Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.',26),
(12,'The Secrets of the Universe','Vestibulum volutpat pretium libero.','Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.',27),
(13,'5G and Its Impact','Fusce ac felis sit amet ligula pharetra condimentum.','Praesent congue erat at massa. Sed cursus turpis vitae tortor.',25),
(18,'Post 2','Duis aute irure dolor in reprehenderit in voluptate velits.','Duis aute irure dolor in reprehenderit in voluptate velits.Duis aute irure dolor in reprehenderit in voluptate velits.Duis aute irure dolor in reprehenderit in voluptate velits.Duis aute irure dolor i',30),
(38,'Post 5','Duis aute irure dolor in reprehenderit in voluptate velits.','Duis aute irure dolor in reprehenderit in voluptate velits.Duis aute irure dolor in reprehenderit in voluptate velits.Duis aute irure dolor in reprehenderit in voluptate velits.Duis aute irure dolor i',0),
(39,'Post 8','lorem ipsum 1231412412','lorem ipsum 1231412412',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

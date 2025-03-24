/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - pagination
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pagination` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `pagination`;

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `author` varchar(50) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `posts` */

insert  into `posts`(`post_id`,`title`,`summary`,`description`,`author`) values 
(1,'The Future of AI','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.','John Doe'),
(2,'Quantum Computing Breakthrough','Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','Jane Smith'),
(3,'Cybersecurity Trends','Duis aute irure dolor in reprehenderit in voluptate velit.','Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Michael Johnson'),
(4,'SpaceX’s Mars Mission','Curabitur pretium tincidunt lacus. Nulla gravida orci a odio.','Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris.','Emily Davis'),
(5,'The Rise of Electric Vehicles','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.','Phasellus ultrices nulla quis nibh. Quisque a lectus.','David Wilson'),
(6,'Blockchain Beyond Bitcoin','Aliquam erat volutpat. Nulla facilisi.','Morbi imperdiet, mauris ac auctor dictum, nisl ligula egestas nulla, et sollicitudin sem purus in lacus.','Sophia Martinez'),
(7,'HealthTech Innovations','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Vestibulum dapibus nunc ac augue. Curabitur ullamcorper ultricies nisi.','James Brown'),
(8,'Climate Change Crisis','Aenean imperdiet. Etiam ultricies nisi vel augue.','Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.','Olivia Anderson'),
(9,'The Psychology of Happiness','Sed fringilla mauris sit amet nibh.','Etiam sit amet orci eget eros faucibus tincidunt.','William Thomas'),
(10,'The Evolution of Web Development','Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.','Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.','Isabella White'),
(11,'The Power of Habit','Phasellus viverra nulla ut metus varius laoreet.','Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.','Alexander Harris'),
(12,'The Secrets of the Universe','Vestibulum volutpat pretium libero.','Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.','Mia Clark'),
(13,'5G and Its Impact','Fusce ac felis sit amet ligula pharetra condimentum.','Praesent congue erat at massa. Sed cursus turpis vitae tortor.','Benjamin Lewis'),
(14,'Artificial Intelligence in Medicine','Maecenas malesuada. Praesent congue erat at massa.','Aenean imperdiet. Etiam ultricies nisi vel augue.','Charlotte Walker'),
(15,'The History of Mathematics','Nullam dictum felis eu pede mollis pretium.','Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.','Daniel Hall'),
(16,'The Rise of Remote Work','Curabitur suscipit suscipit tellus.','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.','Ava Young'),
(17,'Social Media Addiction','Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.','Nullam dictum felis eu pede mollis pretium.','Ethan Allen'),
(18,'Breakthroughs in Renewable Energy','In ac felis quis tortor malesuada pretium.','Phasellus viverra nulla ut metus varius laoreet.','Harper King'),
(19,'The Science of Sleep','Ut tincidunt tincidunt erat.','Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus.','Liam Scott'),
(20,'The Art of Public Speaking','Phasellus gravida semper nisi.','Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede.','Ella Adams');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

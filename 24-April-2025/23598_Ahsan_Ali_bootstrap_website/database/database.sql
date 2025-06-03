/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - apple_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`apple_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `apple_db`;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`category`,`description`,`price`,`image`) values 
(1,'iPhone 15 Pro','iPhone','Titanium. So strong. So light. So Pro.',999.00,'https://iphonewalay.pk/cdn/shop/files/apple-iphone-15-pro-pakistan-priceoye-x8agp-500x500_400x.webp?v=1709925539'),
(2,'iPhone 14','iPhone','A total powerhouse in a familiar form.',699.00,'https://khareedomobile.pk/wp-content/uploads/2023/10/iphone-14.webp'),
(3,'iPhone SE','iPhone','Serious power. Serious value.',429.00,'https://starcity.pk/wp-content/uploads/2022/11/Iphone-se-2020-1.jpg'),
(4,'MacBook Air M3','Mac','Supercharged by the M3 chip.',1199.00,'https://static3.webx.pk/files/78721/Images/apple-macbook-pro-78721-2190385-120924075721364.jpg'),
(5,'MacBook Pro 14\"','Mac','Mind-blowing performance with M3 Pro.',1999.00,'https://static3.webx.pk/files/78721/Images/apple-macbook-pro-78721-2190385-120924075721364.jpg'),
(6,'iMac 24\"','Mac','Say hello to the new iMac.',1299.00,'https://typeshop.pk/wp-content/uploads/2023/12/imac-m3-price-in-pakistan-1-1200x922.jpg'),
(7,'iPad Pro 12.9\"','iPad','Supercharged by M2 chip, stunning Liquid Retina XDR display.',1099.00,'https://buyelectro.pk/wp-content/uploads/2024/12/apple-ipad-pro-pakistan-buyelectro-gray-1.webp'),
(8,'iPad Air','iPad','Light. Bright. Powerful.',599.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr_ppne_ySZial04xvYB7luLynY8znJM51gg&s'),
(9,'iPad Mini','iPad','Mega power. Mini size.',499.00,'https://authentico.pk/cdn/shop/files/apple-ipad-mini-2021-pink.webp?v=1734785836'),
(10,'Apple Watch Series 9','Watch','A powerful fitness and health companion.',399.00,'https://buyelectro.pk/wp-content/uploads/2023/12/apple-watch-series-9-45mm-pakistan-8alue-500x500-1.webp'),
(11,'Apple Watch Ultra 2','Watch','The most rugged and capable Apple Watch.',799.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMUrKWozxtORiglBxXmzBxz_z56xsnSddTrw&s'),
(12,'Apple Watch SE','Watch','Smart, affordable, and essential.',249.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRM9Qn3VS6Pb6NDivRN2FsVDnA9H8RiB62qeQ&s'),
(14,'iPhone 13 Mini','iPhone','Small. Mighty. And full of features.',599.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8XRURwDWEV905XHlsWYXWJImFXCR0ulcY-Q&s'),
(15,'Mac Mini M2','Mac','The new Mac Mini with M2 chip for pro users.',699.00,'https://typeshop.pk/wp-content/uploads/2023/12/imac-m3-price-in-pakistan-1-1200x922.jpg'),
(16,'iPad 10.2\"','iPad','The perfect combination of performance and value.',329.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpoqyr_aYcU2fOo2NNhyHVoy-EraNyzzlWNA&s'),
(17,'Apple Watch Series 8','Watch','The ultimate health and fitness smartwatch.',399.00,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxA9RxCMZn_o5eDYhv1afgjNc99oSQ8hcGWw&s');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

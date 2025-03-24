/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - job_portal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`job_portal` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `job_portal`;

/*Table structure for table `academic_information` */

DROP TABLE IF EXISTS `academic_information`;

CREATE TABLE `academic_information` (
  `academic_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `degree_name` varchar(30) NOT NULL,
  `institution` varchar(30) NOT NULL,
  `completion_year` year(4) NOT NULL,
  `grade` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`academic_info_id`),
  KEY `candidate_id` (`candidate_id`),
  CONSTRAINT `academic_information_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`candidate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `academic_information` */

/*Table structure for table `candidate` */

DROP TABLE IF EXISTS `candidate`;

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone_number` varchar(25) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `candidate` */

/*Table structure for table `candidate_job` */

DROP TABLE IF EXISTS `candidate_job`;

CREATE TABLE `candidate_job` (
  `candidate_job_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`candidate_job_id`),
  KEY `candidate_id` (`candidate_id`),
  KEY `job_id` (`job_id`),
  CONSTRAINT `candidate_job_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`candidate_id`),
  CONSTRAINT `candidate_job_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `candidate_job` */

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`company_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `company` */

/*Table structure for table `company_contacts` */

DROP TABLE IF EXISTS `company_contacts`;

CREATE TABLE `company_contacts` (
  `company_contacts_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `contact_number` varchar(20) NOT NULL,
  PRIMARY KEY (`company_contacts_id`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `company_contacts_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `company_contacts` */

/*Table structure for table `job` */

DROP TABLE IF EXISTS `job`;

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `title` varchar(25) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `salary_range` varchar(50) DEFAULT NULL,
  `job_type` enum('Full-Time','Part-Time','Contract','Internship') DEFAULT NULL,
  PRIMARY KEY (`job_id`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `job_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `job` */

/*Table structure for table `job_application` */

DROP TABLE IF EXISTS `job_application`;

CREATE TABLE `job_application` (
  `job_application_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) DEFAULT NULL,
  `applied_date` date NOT NULL,
  PRIMARY KEY (`job_application_id`),
  KEY `job_id` (`job_id`),
  CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `job_application` */

/*Table structure for table `job_applications_status` */

DROP TABLE IF EXISTS `job_applications_status`;

CREATE TABLE `job_applications_status` (
  `job_applications_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `status` enum('Applied','Under Review','Shortlisted','Rejected') DEFAULT 'Applied',
  PRIMARY KEY (`job_applications_status_id`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `job_applications_status_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `job_applications_status` */

/*Table structure for table `professional_qualification` */

DROP TABLE IF EXISTS `professional_qualification`;

CREATE TABLE `professional_qualification` (
  `qualification_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `certification_name` varchar(30) NOT NULL,
  `issuing_organization` varchar(100) NOT NULL,
  `completion_year` year(4) NOT NULL,
  PRIMARY KEY (`qualification_id`),
  KEY `candidate_id` (`candidate_id`),
  CONSTRAINT `professional_qualification_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`candidate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `professional_qualification` */

/*Table structure for table `professional_skill` */

DROP TABLE IF EXISTS `professional_skill`;

CREATE TABLE `professional_skill` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `level` enum('Beginner','Intermediate','Advanced','Expert') NOT NULL DEFAULT 'Beginner',
  PRIMARY KEY (`skill_id`),
  KEY `candidate_id` (`candidate_id`),
  CONSTRAINT `professional_skill_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`candidate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `professional_skill` */

/*Table structure for table `work_experience` */

DROP TABLE IF EXISTS `work_experience`;

CREATE TABLE `work_experience` (
  `experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `company_name` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`experience_id`),
  KEY `candidate_id` (`candidate_id`),
  CONSTRAINT `work_experience_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`candidate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `work_experience` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

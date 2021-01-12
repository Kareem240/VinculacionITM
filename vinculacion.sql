/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.17-MariaDB : Database - vinculacion
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vinculacion` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `vinculacion`;

/*Table structure for table `destacados` */

DROP TABLE IF EXISTS `destacados`;

CREATE TABLE `destacados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `carrera` varchar(80) NOT NULL,
  `text` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `destacados` */

/*Table structure for table `estadisticas` */

DROP TABLE IF EXISTS `estadisticas`;

CREATE TABLE `estadisticas` (
  `id` int(11) NOT NULL,
  `estad` varchar(50) NOT NULL,
  `val` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `estadisticas` */

/*Table structure for table `noticias1` */

DROP TABLE IF EXISTS `noticias1`;

CREATE TABLE `noticias1` (
  `id` int(11) NOT NULL,
  `dir` varchar(200) NOT NULL,
  `text` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `noticias1` */

/*Table structure for table `noticias2` */

DROP TABLE IF EXISTS `noticias2`;

CREATE TABLE `noticias2` (
  `id` int(11) NOT NULL,
  `dir` varchar(200) DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `noticias2` */

/*Table structure for table `reportes` */

DROP TABLE IF EXISTS `reportes`;

CREATE TABLE `reportes` (
  `id` varchar(20) NOT NULL,
  `dir` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `reportes` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`created_at`) values 
(1,'admin','$2y$10$COLB/sIaosyMEhaRHC26rOG/0DQ1Expo.4J.VG6pMSFGepJLvXQle','2021-01-11 18:59:03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

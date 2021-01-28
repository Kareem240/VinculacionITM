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

/*Table structure for table `bolsa` */

DROP TABLE IF EXISTS `bolsa`;

CREATE TABLE `bolsa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dir` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `bolsa` */

insert  into `bolsa`(`id`,`dir`,`title`,`descripcion`,`text`) values 
(2,'assets/img/bolsa/1.jpg','IBM','Estadías en IBM','Para mayor información agenda una cita al 4452352432'),
(4,'assets/img/bolsa/tec3.jpg','GM','Trabajo para ing mecanico','Comunicate para mas informacion '),
(5,'assets/img/bolsa/team-3.jpg','Gerente Dell','Ing GE','Gerente para sucursal morelia ');

/*Table structure for table `destacados` */

DROP TABLE IF EXISTS `destacados`;

CREATE TABLE `destacados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `carrera` varchar(80) NOT NULL,
  `text` varchar(500) NOT NULL,
  `dirimg` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `destacados` */

insert  into `destacados`(`id`,`nombre`,`carrera`,`text`,`dirimg`) values 
(1,'Prueba','Ing sistemas','Prueba 2','assets/img/destacados/testimonials-5.jpg'),
(3,'Snoop','Ing Quimica','Destacada quimico ','assets/img/destacados/team-3.jpg');

/*Table structure for table `encuestas` */

DROP TABLE IF EXISTS `encuestas`;

CREATE TABLE `encuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `encuestas` */

insert  into `encuestas`(`id`,`nombre`,`url`) values 
(1,'Egresados de quimica','https://docs.google.com/forms/d/e/1FAIpQLSe9kBY3L8FFCF-QMqKyRBLvIOVELu_a_GLB2i_UODFlhgFAuQ/viewform'),
(4,'Egresados de sistemas','https://docs.google.com/forms/d/e/1FAIpQLSe9kBY3L8FFCF-QMqKyRBLvIOVELu_a_GLB2i_UODFlhgFAuQ/viewform');

/*Table structure for table `estadisticas` */

DROP TABLE IF EXISTS `estadisticas`;

CREATE TABLE `estadisticas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estad` varchar(50) NOT NULL,
  `val` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `estadisticas` */

insert  into `estadisticas`(`id`,`estad`,`val`) values 
(1,'Mexico',55),
(2,'Estados Unidos',158),
(3,'Europa',286),
(4,'Acuerdos con estado',286),
(5,'Acuerdos con federacion ',865),
(6,'Acuerdos con empresas ',368),
(7,'Alumnos vinculados ',2354);

/*Table structure for table `noticias2` */

DROP TABLE IF EXISTS `noticias2`;

CREATE TABLE `noticias2` (
  `id` int(11) NOT NULL,
  `dir` varchar(200) DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `noticias2` */

insert  into `noticias2`(`id`,`dir`,`text`) values 
(0,'assets/img/carousel/tec1.jpg',NULL);

/*Table structure for table `noticias3` */

DROP TABLE IF EXISTS `noticias3`;

CREATE TABLE `noticias3` (
  `id` int(6) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `text` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `noticias3` */

insert  into `noticias3`(`id`,`title`,`descripcion`,`text`) values 
(1,'Noticia Generica 1','Aqui va una descripcion del contenido','Aqui va el texto'),
(2,'Noticia Generica 2','Descripcion de la noticia','Aqui va el texto de la noticia'),
(3,'Noticia generica 3','Descripción de la noticia','Aqui va el texto de la noticia'),
(4,'dfghjkl','ghjkl','ghj'),
(5,'vb','bvnm','vbnmm'),
(6,'xdxd','xdxdxd','xdxdxd');

/*Table structure for table `reportes` */

DROP TABLE IF EXISTS `reportes`;

CREATE TABLE `reportes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(60) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `dir` varchar(100) DEFAULT NULL,
  `opc` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

/*Data for the table `reportes` */

insert  into `reportes`(`id`,`carrera`,`descripcion`,`dir`,`opc`) values 
(14,'Licenciatura en Administracion','Administracion 2021','assets/img/reportes/admin1.pdf',NULL),
(15,'Licenciatura en Administracion','Administracion 2020','assets/img/reportes/admin2.pdf',NULL),
(16,'Licenciatura en Administracion','Administracion 2019','assets/img/reportes/admin3.pdf',NULL),
(17,'Licenciatura en Administracion','Administracion 2018','assets/img/reportes/admin4.pdf',NULL),
(18,'Contador publico','Conta 2020','assets/img/reportes/EJEMPLO.pdf',NULL),
(19,'Contador publico','conta 2019','assets/img/reportes/EJEMPLO.pdf',NULL),
(20,'Contador publico','conta 2018','assets/img/reportes/EJEMPLO.pdf',NULL),
(21,'Contador publico','Conta 2017','assets/img/reportes/EJEMPLO.pdf',NULL),
(22,'bioquimica','bioquimica 2020','assets/img/reportes/bio1.pdf',NULL),
(23,'bioquimica','bio 2019','assets/img/reportes/bio2.pdf',NULL),
(24,'bioquimica','bio 2018','assets/img/reportes/bio3.pdf',NULL),
(25,'bioquimica','bio 2017','assets/img/reportes/bio4.pdf',NULL),
(26,'Ingenieria electronica','electronica 2020','assets/img/reportes/elec1.pdf',NULL),
(27,'Ingenieria electronica','electronica 2019','assets/img/reportes/elec2.pdf',NULL),
(28,'Ingenieria electronica','electronica 2018','assets/img/reportes/elec3.pdf',NULL),
(29,'Ingenieria electronica','electronica 2017','assets/img/reportes/elec4.pdf',NULL),
(30,'Ingenieria electrica','electrica 2020','assets/img/reportes/elec1.pdf',NULL),
(31,'Ingenieria electrica','electrica 2019','assets/img/reportes/electrica2.pdf',NULL),
(32,'Ingenieria electrica','electrica 2018','assets/img/reportes/electrica3.pdf',NULL),
(33,'Ingenieria electrica','electrica 2017','assets/img/reportes/electrica4.pdf',NULL),
(34,'Ingenieria industrial','industrial 2021','assets/img/reportes/industrial1.pdf',NULL),
(35,'Ingenieria industrial','industrial 2020','assets/img/reportes/industrial2.pdf',NULL),
(36,'Ingenieria industrial','industrial 2019','assets/img/reportes/industrial3.pdf',NULL),
(37,'Ingenieria industrial','industrial 2018','assets/img/reportes/industrial4.pdf',NULL),
(38,'Ingenieria mecatronica','mecatronica 2020','assets/img/reportes/mecatronica 1.pdf',NULL),
(39,'Ingenieria mecatronica','mecatronica 2019','assets/img/reportes/mecatronica 2.pdf',NULL),
(40,'Ingenieria mecatronica','mecatronica 2018','assets/img/reportes/mecatronica 3.pdf',NULL),
(41,'Ingenieria mecatronica','mecatronica 2017','assets/img/reportes/mecatronica 4.pdf',NULL),
(42,'Ingenieria mecanica','mecanica 2020','assets/img/reportes/mecanica.pdf',NULL),
(43,'Ingenieria mecanica','mecanica 2019','assets/img/reportes/mecanica.pdf',NULL),
(44,'Ingenieria mecanica','mecanica 2018','assets/img/reportes/mecanica.pdf',NULL),
(45,'Ingenieria mecanica','mecanica 2017','assets/img/reportes/mecanica.pdf',NULL),
(46,'Ingenieria en gestion empresarial','IGE 2020','assets/img/reportes/IGE.pdf',NULL),
(47,'Ingenieria en gestion empresarial','IGE 2019','assets/img/reportes/IGE.pdf',NULL),
(48,'Ingenieria en gestion empresarial','IGE 2018','assets/img/reportes/IGE.pdf',NULL),
(49,'Ingenieria en gestion empresarial','IGE 2017','assets/img/reportes/IGE.pdf',NULL),
(50,'Ingenieria en materiales','materiales 2020','assets/img/reportes/materiales.pdf',NULL),
(51,'Ingenieria en materiales','materiales 2019','assets/img/reportes/materiales.pdf',NULL),
(52,'Ingenieria en materiales','materiales 2018','assets/img/reportes/materiales.pdf',NULL),
(53,'Ingenieria en materiales','materiales 2017','assets/img/reportes/materiales.pdf',NULL),
(54,'Ingenieria en sistemas computacionales','sistemas 2020','assets/img/reportes/ISC.pdf',NULL),
(55,'Ingenieria en sistemas computacionales','sistemas 2019','assets/img/reportes/ISC.pdf',NULL),
(56,'Ingenieria en sistemas computacionales','sistemas 2018','assets/img/reportes/ISC.pdf',NULL),
(57,'Ingenieria en sistemas computacionales','sistemas 2017','assets/img/reportes/ISC.pdf',NULL),
(58,'itics','itics 2020','assets/img/reportes/ITICS.pdf',NULL),
(59,'itics','itics 2019','assets/img/reportes/ITICS.pdf',NULL),
(60,'itics','itics 2018','assets/img/reportes/ITICS.pdf',NULL),
(61,'itics','itics 2017','assets/img/reportes/ITICS.pdf',NULL),
(62,'informatica','informatica 2020','assets/img/reportes/info.pdf',NULL),
(63,'informatica','informatica 2018','assets/img/reportes/info.pdf',NULL),
(64,'informatica','informatica 2017','assets/img/reportes/info.pdf',NULL),
(65,'informatica ','informatica 2016','assets/img/reportes/info.pdf',NULL);

/*Table structure for table `slides` */

DROP TABLE IF EXISTS `slides`;

CREATE TABLE `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dir` varchar(200) NOT NULL,
  `text` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `slides` */

insert  into `slides`(`id`,`dir`,`text`) values 
(5,'assets/img/carousel/tec1.jpg','prueba 1'),
(6,'assets/img/carousel/tec2.jpg','prueba 2'),
(14,'assets/img/carousel/tec2.jpg','Vamos a probardfasfdsa'),
(17,'assets/img/carousel/1.jpg','Estudiante destacado trabajando en Europa');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`created_at`) values 
(1,'admin','$2y$10$COLB/sIaosyMEhaRHC26rOG/0DQ1Expo.4J.VG6pMSFGepJLvXQle','2021-01-11 18:59:03'),
(4,'karim','$2y$10$41/qWBb8ZA4v5QtB6mdPy.DxCnGK/gJxTg19C5nfwFs2S7mmB5lrK','2021-01-13 11:23:08'),
(5,'karim240','$2y$10$LixNq9YHNtUAuTgTnXxO8.bqXyN3jfcjqDjnbOfoaAOhTeezsw1zG','2021-01-13 11:25:22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

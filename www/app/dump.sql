/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.1.40-community : Database - mera
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mera` /*!40100 DEFAULT CHARACTER SET utf8 */;

/*Table structure for table `Building` */

DROP TABLE IF EXISTS `Building`;

CREATE TABLE `Building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_office_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `floors` int(11) DEFAULT NULL,
  `height_ceilings` int(11) DEFAULT NULL,
  `height_building` int(11) DEFAULT NULL,
  `volume_building` int(11) DEFAULT NULL,
  `volume_heated` int(11) DEFAULT NULL,
  `area_total` int(11) DEFAULT NULL,
  `area_glazing` int(11) DEFAULT NULL,
  `perimeter_building` int(11) DEFAULT NULL,
  `depreciation_actual` int(11) DEFAULT NULL,
  `depreciation_physical` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_181903825ECEBCD3` (`post_office_id`),
  CONSTRAINT `FK_181903825ECEBCD3` FOREIGN KEY (`post_office_id`) REFERENCES `postoffice` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Building` */

/*Table structure for table `Common` */

DROP TABLE IF EXISTS `Common`;

CREATE TABLE `Common` (
  `post_office_id` int(11) NOT NULL,
  `address_legal` varchar(255) DEFAULT NULL,
  `adress_actual` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `cat` varchar(255) DEFAULT NULL,
  `settlement_account` varchar(255) DEFAULT NULL,
  `bic` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `agrn` varchar(255) DEFAULT NULL,
  `okved` varchar(255) DEFAULT NULL,
  `okp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`post_office_id`),
  CONSTRAINT `FK_E24075675ECEBCD3` FOREIGN KEY (`post_office_id`) REFERENCES `postoffice` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Common` */

/*Table structure for table `PostOffice` */

DROP TABLE IF EXISTS `PostOffice`;

CREATE TABLE `PostOffice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_21830D975E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `PostOffice` */

insert  into `PostOffice`(`id`,`name`,`email`) values (1,'Засранск 1','qwe@qwe.qwe'),(2,'Почта в перде','Asd@aasd.asd'),(3,'мухсрансокое','sdf@werwef.df');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

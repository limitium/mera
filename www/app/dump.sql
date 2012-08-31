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
/*Table structure for table `Building` */

DROP TABLE IF EXISTS `Building`;

CREATE TABLE `Building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) DEFAULT NULL,
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
  KEY `IDX_181903828DBC56F7` (`common_id`),
  CONSTRAINT `FK_181903828DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `Common` */

DROP TABLE IF EXISTS `Common`;

CREATE TABLE `Common` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_id` int(11) DEFAULT NULL,
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
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E2407567A7014910` (`facility_id`),
  CONSTRAINT `FK_E2407567A7014910` FOREIGN KEY (`facility_id`) REFERENCES `facility` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

/*Table structure for table `Facility` */

DROP TABLE IF EXISTS `Facility`;

CREATE TABLE `Facility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E92FF6E45E237E06` (`name`),
  KEY `IDX_E92FF6E4A76ED395` (`user_id`),
  CONSTRAINT `FK_E92FF6E4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

/*Table structure for table `User` */

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `username_canonical` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_canonical` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

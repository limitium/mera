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
  `common_id` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

/*Data for the table `Building` */

/*Table structure for table `Common` */

DROP TABLE IF EXISTS `Common`;

CREATE TABLE `Common` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_id` int(11) NOT NULL,
  `address_legal` varchar(255) DEFAULT NULL,
  `address_actual` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `Common` */

insert  into `Common`(`id`,`facility_id`,`address_legal`,`address_actual`,`tin`,`cat`,`settlement_account`,`bic`,`bank_name`,`agrn`,`okved`,`okp`,`created`,`updated`) values (8,12,'11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2012-10-05 17:20:56','2012-10-05 17:20:56'),(9,13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2012-10-12 11:32:32','2012-10-12 11:32:32'),(10,14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2012-10-15 17:34:50','2012-10-15 17:34:50');

/*Table structure for table `ConstructElement` */

DROP TABLE IF EXISTS `ConstructElement`;

CREATE TABLE `ConstructElement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `construct_element_type_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `area` decimal(10,0) DEFAULT NULL,
  `description` longtext,
  `width` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_72C4C0751476F3B8` (`construct_element_type_id`),
  KEY `IDX_72C4C0758DBC56F7` (`common_id`),
  CONSTRAINT `FK_72C4C0751476F3B8` FOREIGN KEY (`construct_element_type_id`) REFERENCES `constructelementtype` (`id`),
  CONSTRAINT `FK_72C4C0758DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ConstructElement` */

/*Table structure for table `ConstructElementType` */

DROP TABLE IF EXISTS `ConstructElementType`;

CREATE TABLE `ConstructElementType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ConstructElementType` */

/*Table structure for table `ConsumedTariff` */

DROP TABLE IF EXISTS `ConsumedTariff`;

CREATE TABLE `ConsumedTariff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_type_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `tariff` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Common_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1BF6458C98EC6B7B` (`resource_type_id`),
  KEY `IDX_1BF6458CF4DD454` (`Common_id`),
  CONSTRAINT `FK_1BF6458C98EC6B7B` FOREIGN KEY (`resource_type_id`) REFERENCES `resourcetype` (`id`),
  CONSTRAINT `FK_1BF6458CF4DD454` FOREIGN KEY (`Common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ConsumedTariff` */

/*Table structure for table `ConsumptionMeter` */

DROP TABLE IF EXISTS `ConsumptionMeter`;

CREATE TABLE `ConsumptionMeter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consumption_meter_type_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `precision_class` varchar(255) DEFAULT NULL,
  `verification_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_182A425BA3CBF41C` (`consumption_meter_type_id`),
  KEY `IDX_182A425B8DBC56F7` (`common_id`),
  CONSTRAINT `FK_182A425B8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_182A425BA3CBF41C` FOREIGN KEY (`consumption_meter_type_id`) REFERENCES `consumptionmetertype` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ConsumptionMeter` */

/*Table structure for table `ConsumptionMeterType` */

DROP TABLE IF EXISTS `ConsumptionMeterType`;

CREATE TABLE `ConsumptionMeterType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ConsumptionMeterType` */

/*Table structure for table `ConsumptionResource` */

DROP TABLE IF EXISTS `ConsumptionResource`;

CREATE TABLE `ConsumptionResource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_type_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `physical_quantity` decimal(10,0) DEFAULT NULL,
  `financial_quantity` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CDD8DEA098EC6B7B` (`resource_type_id`),
  KEY `IDX_CDD8DEA08DBC56F7` (`common_id`),
  CONSTRAINT `FK_CDD8DEA08DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_CDD8DEA098EC6B7B` FOREIGN KEY (`resource_type_id`) REFERENCES `resourcetype` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ConsumptionResource` */

/*Table structure for table `CourseType` */

DROP TABLE IF EXISTS `CourseType`;

CREATE TABLE `CourseType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `CourseType` */

/*Table structure for table `DimentionType` */

DROP TABLE IF EXISTS `DimentionType`;

CREATE TABLE `DimentionType` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `DimentionType` */

/*Table structure for table `ElectroEquipment` */

DROP TABLE IF EXISTS `ElectroEquipment`;

CREATE TABLE `ElectroEquipment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `electro_equipment_type_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `power` decimal(10,0) DEFAULT NULL,
  `work_duration` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_123E96A08DBC56F7` (`common_id`),
  KEY `IDX_123E96A037F08033` (`electro_equipment_type_id`),
  CONSTRAINT `FK_123E96A037F08033` FOREIGN KEY (`electro_equipment_type_id`) REFERENCES `electroequipmenttype` (`id`),
  CONSTRAINT `FK_123E96A08DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ElectroEquipment` */

/*Table structure for table `ElectroEquipmentType` */

DROP TABLE IF EXISTS `ElectroEquipmentType`;

CREATE TABLE `ElectroEquipmentType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ElectroEquipmentType` */

/*Table structure for table `ExecutivePerson` */

DROP TABLE IF EXISTS `ExecutivePerson`;

CREATE TABLE `ExecutivePerson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `responsibilities` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A9DDECD8DBC56F7` (`common_id`),
  CONSTRAINT `FK_A9DDECD8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ExecutivePerson` */

/*Table structure for table `Facility` */

DROP TABLE IF EXISTS `Facility`;

CREATE TABLE `Facility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E92FF6E45E237E06` (`name`),
  UNIQUE KEY `UNIQ_E92FF6E4A76ED395` (`user_id`),
  CONSTRAINT `FK_E92FF6E4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `Facility` */

insert  into `Facility`(`id`,`user_id`,`name`) values (12,13,'РћР±СЉРµРєС‚ в„–1'),(13,14,'РћР±СЉРµРєС‚ в„–2'),(14,15,'РћР±СЉРµРєС‚ в„–3');

/*Table structure for table `File` */

DROP TABLE IF EXISTS `File`;

CREATE TABLE `File` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `common_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `for` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2CAD992E8DBC56F7` (`common_id`),
  CONSTRAINT `FK_2CAD992E8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `File` */

/*Table structure for table `FuelConsumption` */

DROP TABLE IF EXISTS `FuelConsumption`;

CREATE TABLE `FuelConsumption` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `fuel_type_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `load_capacity` decimal(10,0) DEFAULT NULL,
  `passengers` int(11) DEFAULT NULL,
  `consumption` decimal(10,0) DEFAULT NULL,
  `work_duration` decimal(10,0) DEFAULT NULL,
  `total_consumed` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AE7E2A468DBC56F7` (`common_id`),
  KEY `IDX_AE7E2A466A70FE35` (`fuel_type_id`),
  CONSTRAINT `FK_AE7E2A466A70FE35` FOREIGN KEY (`fuel_type_id`) REFERENCES `fueltype` (`id`),
  CONSTRAINT `FK_AE7E2A468DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `FuelConsumption` */

/*Table structure for table `FuelType` */

DROP TABLE IF EXISTS `FuelType`;

CREATE TABLE `FuelType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `FuelType` */

/*Table structure for table `FundsVolume` */

DROP TABLE IF EXISTS `FundsVolume`;

CREATE TABLE `FundsVolume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  `non_budget` int(11) DEFAULT NULL,
  `Common_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_576E7B16F4DD454` (`Common_id`),
  CONSTRAINT `FK_576E7B16F4DD454` FOREIGN KEY (`Common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `FundsVolume` */

/*Table structure for table `LightsSystem` */

DROP TABLE IF EXISTS `LightsSystem`;

CREATE TABLE `LightsSystem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `lights_system_place_id` int(11) NOT NULL,
  `tungsten_quantity` int(11) DEFAULT NULL,
  `tungsten_power` decimal(10,0) DEFAULT NULL,
  `fluorescent_quantity` int(11) DEFAULT NULL,
  `fluorescent_power` decimal(10,0) DEFAULT NULL,
  `energy_save_quantity` int(11) DEFAULT NULL,
  `energy_save_power` decimal(10,0) DEFAULT NULL,
  `work_duration` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3B1C48D48DBC56F7` (`common_id`),
  KEY `IDX_3B1C48D47AB4EF89` (`lights_system_place_id`),
  CONSTRAINT `FK_3B1C48D47AB4EF89` FOREIGN KEY (`lights_system_place_id`) REFERENCES `lightssystemplace` (`id`),
  CONSTRAINT `FK_3B1C48D48DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `LightsSystem` */

/*Table structure for table `LightsSystemPlace` */

DROP TABLE IF EXISTS `LightsSystemPlace`;

CREATE TABLE `LightsSystemPlace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `LightsSystemPlace` */

/*Table structure for table `NaturalProduction` */

DROP TABLE IF EXISTS `NaturalProduction`;

CREATE TABLE `NaturalProduction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dimention_type_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `quantity` decimal(10,0) DEFAULT NULL,
  `Common_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ECE3253F3DDA71A` (`dimention_type_id`),
  KEY `IDX_ECE3253FF4DD454` (`Common_id`),
  CONSTRAINT `FK_ECE3253F3DDA71A` FOREIGN KEY (`dimention_type_id`) REFERENCES `dimentiontype` (`id`),
  CONSTRAINT `FK_ECE3253FF4DD454` FOREIGN KEY (`Common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `NaturalProduction` */

/*Table structure for table `Personal` */

DROP TABLE IF EXISTS `Personal`;

CREATE TABLE `Personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `course_type_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_address` varchar(255) DEFAULT NULL,
  `school_license` varchar(255) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `certification` longtext,
  PRIMARY KEY (`id`),
  KEY `IDX_8FC0FD28DBC56F7` (`common_id`),
  KEY `IDX_8FC0FD2CD8F897F` (`course_type_id`),
  CONSTRAINT `FK_8FC0FD28DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8FC0FD2CD8F897F` FOREIGN KEY (`course_type_id`) REFERENCES `coursetype` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Personal` */

/*Table structure for table `PersonalQuantity` */

DROP TABLE IF EXISTS `PersonalQuantity`;

CREATE TABLE `PersonalQuantity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Common_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_86D5E74BF4DD454` (`Common_id`),
  CONSTRAINT `FK_86D5E74BF4DD454` FOREIGN KEY (`Common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `PersonalQuantity` */

/*Table structure for table `Pipeline` */

DROP TABLE IF EXISTS `Pipeline`;

CREATE TABLE `Pipeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pipeline_installation_type_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `length` decimal(10,0) DEFAULT NULL,
  `diameter` decimal(10,0) DEFAULT NULL,
  `insulation` varchar(255) DEFAULT NULL,
  `operation_period` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_848ABB8F6E26B0C6` (`pipeline_installation_type_id`),
  KEY `IDX_848ABB8F8DBC56F7` (`common_id`),
  CONSTRAINT `FK_848ABB8F6E26B0C6` FOREIGN KEY (`pipeline_installation_type_id`) REFERENCES `pipelineinstallationtype` (`id`),
  CONSTRAINT `FK_848ABB8F8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Pipeline` */

/*Table structure for table `PipelineInstallationType` */

DROP TABLE IF EXISTS `PipelineInstallationType`;

CREATE TABLE `PipelineInstallationType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `PipelineInstallationType` */

/*Table structure for table `ResourceType` */

DROP TABLE IF EXISTS `ResourceType`;

CREATE TABLE `ResourceType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ResourceType` */

/*Table structure for table `Role` */

DROP TABLE IF EXISTS `Role`;

CREATE TABLE `Role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F75B25545E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `Role` */

/*Table structure for table `Transformator` */

DROP TABLE IF EXISTS `Transformator`;

CREATE TABLE `Transformator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `individual_capacity` decimal(10,0) DEFAULT NULL,
  `higher_voltage` decimal(10,0) DEFAULT NULL,
  `installed_power` decimal(10,0) DEFAULT NULL,
  `Common_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_59523BB1F4DD454` (`Common_id`),
  CONSTRAINT `FK_59523BB1F4DD454` FOREIGN KEY (`Common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Transformator` */

/*Table structure for table `Transofrmator` */

DROP TABLE IF EXISTS `Transofrmator`;

CREATE TABLE `Transofrmator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `individual_capacity` decimal(10,0) DEFAULT NULL,
  `higher_voltage` decimal(10,0) DEFAULT NULL,
  `installed_power` decimal(10,0) DEFAULT NULL,
  `Common_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D3856549F4DD454` (`Common_id`),
  CONSTRAINT `FK_D3856549F4DD454` FOREIGN KEY (`Common_id`) REFERENCES `common` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Transofrmator` */

/*Table structure for table `User` */

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username_canonical` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_canonical` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `User` */

insert  into `User`(`id`,`username`,`password`,`username_canonical`,`email`,`email_canonical`,`enabled`,`salt`,`last_login`,`locked`,`expired`,`expires_at`,`confirmation_token`,`password_requested_at`,`roles`,`credentials_expired`,`credentials_expire_at`,`first_name`,`last_name`) values (13,'qwe@qwe.qwe','qweqwe123','qwe@qwe.qwe','qwe@qwe.qwe','qwe@qwe.qwe',1,'','2012-10-15 17:35:17',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,NULL,NULL),(14,'asdasdas@qwdasd.asdasd','811ad413','asdasdas@qwdasd.asdasd','asdasdas@qwdasd.asdasd','asdasdas@qwdasd.asdasd',1,'',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,NULL,NULL),(15,'qwe@qwe.qwe111','069cf67a','qwe@qwe.qwe111','qwe@qwe.qwe111','qwe@qwe.qwe111',1,'',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

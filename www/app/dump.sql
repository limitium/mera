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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mera` /*!40100 DEFAULT CHARACTER SET cp1251 */;

/*Table structure for table `Building` */

DROP TABLE IF EXISTS `Building`;

CREATE TABLE `Building` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `building_type_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `floors` int(11) DEFAULT NULL,
  `height_ceilings` decimal(10,0) DEFAULT NULL,
  `height_building` decimal(10,0) DEFAULT NULL,
  `volume_building` decimal(10,0) DEFAULT NULL,
  `area_total` decimal(10,0) DEFAULT NULL,
  `area_heated` decimal(10,0) DEFAULT NULL,
  `area_glazing` decimal(10,0) DEFAULT NULL,
  `area_basement` decimal(10,0) DEFAULT NULL,
  `area_attic` decimal(10,0) DEFAULT NULL,
  `perimeter_building` decimal(10,0) DEFAULT NULL,
  `depreciation_actual` decimal(10,0) DEFAULT NULL,
  `depreciation_physical` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_181903828DBC56F7` (`common_id`),
  KEY `IDX_18190382F28401B9` (`building_type_id`),
  CONSTRAINT `FK_181903828DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_18190382F28401B9` FOREIGN KEY (`building_type_id`) REFERENCES `buildingtype` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Building` */

/*Table structure for table `BuildingType` */

DROP TABLE IF EXISTS `BuildingType`;

CREATE TABLE `BuildingType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `BuildingType` */

insert  into `BuildingType`(`id`,`name`) values (1,'Жилые здания'),(2,'Административные здания, конторы '),(3,'Клубы '),(4,'Кинотеатры '),(5,'Театры '),(6,'Магазины '),(7,'Детские сады и ясли '),(8,'Школы и высшие учебные заведения '),(9,'Больницы '),(10,'Бани '),(11,'Прачечные '),(12,'Предприятия общественного питания, столовые, фабрики-кухни '),(13,'Лаборатории '),(14,'Пожарные депо '),(15,'Гаражи ');

/*Table structure for table `ChangeLog` */

DROP TABLE IF EXISTS `ChangeLog`;

CREATE TABLE `ChangeLog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action_data` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_72FEE242A7014910` (`facility_id`),
  CONSTRAINT `FK_72FEE242A7014910` FOREIGN KEY (`facility_id`) REFERENCES `facility` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ChangeLog` */

insert  into `ChangeLog`(`id`,`facility_id`,`first_name`,`last_name`,`action`,`action_data`,`created`,`username`,`role`) values (1,1,'','','open','','2012-11-02 10:41:16','admin','admin'),(2,1,'qwe','qwe','open','','2012-11-02 10:41:35','qwe@qwe.qwe',''),(3,1,'qwe','qwe','open','','2012-11-02 10:55:54','qwe@qwe.qwe',''),(4,1,'qwe','qwe','open','','2012-11-02 10:56:14','qwe@qwe.qwe',''),(5,1,'qwe','qwe','open','','2012-11-02 12:30:53','qwe@qwe.qwe','');

/*Table structure for table `Common` */

DROP TABLE IF EXISTS `Common`;

CREATE TABLE `Common` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_id` int(11) NOT NULL,
  `address_legal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_actual` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settlement_account` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agrn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `okved` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `okp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lead_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lead_contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lead_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tech_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tech_contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tech_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `energy_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `energy_contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `energy_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E2407567A7014910` (`facility_id`),
  CONSTRAINT `FK_E2407567A7014910` FOREIGN KEY (`facility_id`) REFERENCES `facility` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Common` */

insert  into `Common`(`id`,`facility_id`,`address_legal`,`address_actual`,`tin`,`cat`,`settlement_account`,`bic`,`bank_name`,`agrn`,`okved`,`okp`,`lead_name`,`lead_contact`,`lead_position`,`tech_name`,`tech_contact`,`tech_position`,`energy_name`,`energy_contact`,`energy_position`) values (1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `ConstructElement` */

DROP TABLE IF EXISTS `ConstructElement`;

CREATE TABLE `ConstructElement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `construct_element_type_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `area` decimal(10,0) DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `width` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_72C4C0751476F3B8` (`construct_element_type_id`),
  KEY `IDX_72C4C0758DBC56F7` (`common_id`),
  CONSTRAINT `FK_72C4C0751476F3B8` FOREIGN KEY (`construct_element_type_id`) REFERENCES `constructelementtype` (`id`),
  CONSTRAINT `FK_72C4C0758DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ConstructElement` */

/*Table structure for table `ConstructElementType` */

DROP TABLE IF EXISTS `ConstructElementType`;

CREATE TABLE `ConstructElementType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ConstructElementType` */

insert  into `ConstructElementType`(`id`,`name`) values (1,'Наружные капитальные стены'),(2,'Крыша'),(3,'Окна'),(4,'Двери');

/*Table structure for table `ConsumedTariff` */

DROP TABLE IF EXISTS `ConsumedTariff`;

CREATE TABLE `ConsumedTariff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_type_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `tariff` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1BF6458C98EC6B7B` (`resource_type_id`),
  KEY `IDX_1BF6458C8DBC56F7` (`common_id`),
  CONSTRAINT `FK_1BF6458C8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1BF6458C98EC6B7B` FOREIGN KEY (`resource_type_id`) REFERENCES `resourcetype` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ConsumedTariff` */

/*Table structure for table `ConsumptionMeter` */

DROP TABLE IF EXISTS `ConsumptionMeter`;

CREATE TABLE `ConsumptionMeter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consumption_meter_type_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precision_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verification_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_182A425BA3CBF41C` (`consumption_meter_type_id`),
  KEY `IDX_182A425B8DBC56F7` (`common_id`),
  CONSTRAINT `FK_182A425B8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_182A425BA3CBF41C` FOREIGN KEY (`consumption_meter_type_id`) REFERENCES `consumptionmetertype` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ConsumptionMeter` */

/*Table structure for table `ConsumptionMeterType` */

DROP TABLE IF EXISTS `ConsumptionMeterType`;

CREATE TABLE `ConsumptionMeterType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ConsumptionMeterType` */

insert  into `ConsumptionMeterType`(`id`,`name`) values (1,'Электроэнергия'),(2,'Вода'),(3,'Тепловая энергия'),(4,'Природный газ');

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
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `CourseType` */

insert  into `CourseType`(`id`,`name`) values (1,'Подготовка'),(2,'Переподготовка'),(3,'Повышение квалификации');

/*Table structure for table `DimentionType` */

DROP TABLE IF EXISTS `DimentionType`;

CREATE TABLE `DimentionType` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `DimentionType` */

insert  into `DimentionType`(`id`,`name`) values (1,'Миллиметр'),(2,'Сантиметр'),(3,'Дециметр'),(4,'Метр'),(5,'Километр; тысяча метров'),(6,'Мегаметр; миллион метров'),(7,'Дюйм (25,4 мм)'),(8,'Фут (0,3048 м)'),(9,'Ярд (0,9144 м)'),(10,'Морская миля (1852 м)'),(11,'Квадратный миллиметр'),(12,'Квадратный сантиметр'),(13,'Квадратный дециметр'),(14,'Квадратный метр'),(15,'Тысяча квадратных метров'),(16,'Гектар'),(17,'Квадратный километр'),(18,'Квадратный дюйм (645,16 мм2)'),(19,'Квадратный фут (0,092903 м2)'),(20,'Квадратный ярд (0,8361274 м2)'),(21,'Ар (100 м2)'),(22,'Кубический миллиметр'),(23,'Кубический сантиметр; миллилитр'),(24,'Литр; кубический дециметр'),(25,'Кубический метр'),(26,'Децилитр'),(27,'Гектолитр'),(28,'Мегалитр'),(29,'Кубический дюйм (16387,1 мм3)'),(30,'Кубический фут (0,02831685 м3)'),(31,'Кубический ярд (0,764555 м3)'),(32,'Миллион кубических метров'),(33,'Гектограмм'),(34,'Миллиграмм'),(35,'Метрический карат'),(36,'Грамм'),(37,'Килограмм'),(38,'Тонна; метрическая тонна (1000 кг)'),(39,'Килотонна'),(40,'Сантиграмм'),(41,'Брутто-регистровая тонна (2,8316 м3)'),(42,'Грузоподъемность в метрических тоннах'),(43,'Центнер (метрический) (100 кг); гектокилограмм; квинтал1 (метрический); децитонна'),(44,'Ватт'),(45,'Киловатт'),(46,'Мегаватт; тысяча киловатт'),(47,'Вольт'),(48,'Киловольт'),(49,'Киловольт-ампер'),(50,'Мегавольт-ампер (тысяча киловольт-ампер)'),(51,'Киловар'),(52,'Ватт-час'),(53,'Киловатт-час'),(54,'Мегаватт-час; 1000 киловатт-часов'),(55,'Гигаватт-час (миллион киловатт-часов)'),(56,'Ампер'),(57,'Ампер-час (3,6 кКл)'),(58,'Тысяча ампер-часов'),(59,'Кулон'),(60,'Джоуль'),(61,'Килоджоуль'),(62,'Ом'),(63,'Градус Цельсия'),(64,'Градус Фаренгейта'),(65,'Кандела'),(66,'Люкс'),(67,'Люмен'),(68,'Кельвин'),(69,'Ньютон'),(70,'Герц'),(71,'Килогерц'),(72,'Мегагерц'),(73,'Паскаль'),(74,'Сименс'),(75,'Килопаскаль'),(76,'Мегапаскаль'),(77,'Физическая атмосфера (101325 Па)'),(78,'Техническая атмосфера (98066,5 Па)'),(79,'Гигабеккерель'),(80,'Милликюри'),(81,'Кюри'),(82,'Грамм делящихся изотопов'),(83,'Миллибар'),(84,'Бар'),(85,'Гектобар'),(86,'Килобар'),(87,'Фарад'),(88,'Килограмм на кубический метр'),(89,'Беккерель'),(90,'Вебер'),(91,'Узел (миля/ч)'),(92,'Метр в секунду'),(93,'Оборот в секунду'),(94,'Оборот в минуту'),(95,'Километр в час'),(96,'Метр на секунду в квадрате'),(97,'Кулон на килограмм'),(98,'Секунда'),(99,'Минута'),(100,'Час'),(101,'Сутки'),(102,'Неделя'),(103,'Декада'),(104,'Месяц'),(105,'Квартал'),(106,'Полугодие'),(107,'Год'),(108,'Десятилетие'),(109,'Килограмм в секунду'),(110,'Тонна пара в час '),(111,'Кубический метр в секунду'),(112,'Кубический метр в час'),(113,'Тысяча кубических метров в сутки'),(114,'Бобина'),(115,'Лист'),(116,'Сто листов'),(117,'Тысяча стандартных условных кирпичей'),(118,'Дюжина (12 шт.)'),(119,'Изделие'),(120,'Сто ящиков'),(121,'Набор'),(122,'Пара (2 шт.)'),(123,'Два десятка'),(124,'Десять пар'),(125,'Дюжина пар'),(126,'Посылка'),(127,'Часть'),(128,'Рулон'),(129,'Дюжина рулонов'),(130,'Дюжина штук'),(131,'Элемент'),(132,'Упаковка'),(133,'Дюжина упаковок'),(134,'Сто упаковок'),(135,'Штука'),(136,'Сто штук'),(137,'Тысяча штук'),(138,'Миллион штук'),(139,'Миллиард штук'),(140,'Биллион штук (Европа); триллион штук'),(141,'Квинтильон штук (Европа)'),(142,'Крепость спирта по массе'),(143,'Крепость спирта по объему '),(144,'Литр чистого (100%) спирта'),(145,'Гектолитр чистого (100%) спирта'),(146,'Килограмм пероксида водорода'),(147,'Килограмм 90%-го сухого вещества'),(148,'Тонна 90%-го сухого вещества'),(149,'Килограмм оксида калия'),(150,'Килограмм гидроксида калия'),(151,'Килограмм азота'),(152,'Килограмм гидроксида натрия'),(153,'Килограмм пятиокиси фосфора'),(154,'Килограмм урана'),(155,'Погонный метр'),(156,'Тысяча погонных метров'),(157,'Условный метр'),(158,'Тысяча условных метров'),(159,'Километр условных труб'),(160,'Тысяча квадратных дециметров'),(161,'Миллион квадратных дециметров'),(162,'Миллион квадратных метров'),(163,'Тысяча гектаров'),(164,'Условный квадратный метр'),(165,'Тысяча условных квадратных метров'),(166,'Миллион условных квадратных метров'),(167,'Квадратный метр общей площади '),(168,'Тысяча квадратных метров общей площади'),(169,'Миллион квадратных метров общей площади'),(170,'Квадратный метр жилой площади'),(171,'Тысяча квадратных метров жилой площади'),(172,'Миллион квадратных метров жилой площади'),(173,'Квадратный метр учебно-лабораторных зданий'),(174,'Тысяча квадратных метров учебно-лабораторных зданий'),(175,'Миллион квадратных метров в двухмиллиметровом исчислении'),(176,'Тысяча кубических метров'),(177,'Миллиард кубических метров'),(178,'Декалитр'),(179,'Тысяча декалитров'),(180,'Миллион декалитров'),(181,'Плотный кубический метр'),(182,'Условный кубический метр'),(183,'Тысяча условных кубических метров'),(184,'Миллион кубических метров переработки газа'),(185,'Тысяча плотных кубических метров'),(186,'Тысяча полулитров'),(187,'Миллион полулитров'),(188,'Тысяча литров; 1000 литров'),(189,'Тысяча каратов метрических'),(190,'Миллион каратов метрических'),(191,'Тысяча тонн'),(192,'Миллион тонн'),(193,'Тонна условного топлива'),(194,'Тысяча тонн условного топлива'),(195,'Миллион тонн условного топлива'),(196,'Тысяча тонн единовременного хранения'),(197,'Тысяча тонн переработки'),(198,'Условная тонна'),(199,'Тысяча центнеров'),(200,'Вольт-ампер'),(201,'Метр в час'),(202,'Килокалория'),(203,'Гигакалория'),(204,'Тысяча гигакалорий'),(205,'Миллион гигакалорий'),(206,'Калория в час'),(207,'Килокалория в час'),(208,'Гигакалория в час'),(209,'Тысяча гигакалорий в час'),(210,'Миллион ампер-часов'),(211,'Миллион киловольт-ампер'),(212,'Киловольт-ампер реактивный'),(213,'Миллиард киловатт-часов'),(214,'Тысяча киловольт-ампер реактивных'),(215,'Лошадиная сила'),(216,'Тысяча лошадиных сил'),(217,'Миллион лошадиных сил'),(218,'Бит'),(219,'Байт'),(220,'Килобайт'),(221,'Мегабайт'),(222,'Бод'),(223,'Генри'),(224,'Тесла'),(225,'Килограмм на квадратный сантиметр'),(226,'Миллиметр водяного столба'),(227,'Миллиметр ртутного столба'),(228,'Сантиметр водяного столба'),(229,'Микросекунда'),(230,'Миллисекунда'),(231,'Рубль'),(232,'Тысяча рублей'),(233,'Миллион рублей'),(234,'Миллиард рублей'),(235,'Триллион рублей'),(236,'Квадрильон рублей'),(237,'Пассажиро-километр'),(238,'Пассажирское место (пассажирских мест)'),(239,'Тысяча пассажиро-километров'),(240,'Миллион пассажиро-километров'),(241,'Пассажиропоток'),(242,'Тонно-километр'),(243,'Тысяча тонно-километров'),(244,'Миллион тонно-километров'),(245,'Тысяча наборов'),(246,'Грамм на киловатт-час'),(247,'Килограмм на гигакалорию'),(248,'Тонно-номер'),(249,'Автотонна'),(250,'Тонна тяги'),(251,'Дедвейт-тонна'),(252,'Тонно-танид'),(253,'Человек на квадратный метр'),(254,'Человек на квадратный километр'),(255,'Тонна в час'),(256,'Тонна в сутки'),(257,'Тонна в смену'),(258,'Тысяча тонн в сезон'),(259,'Тысяча тонн в год'),(260,'Человеко-час'),(261,'Человеко-день'),(262,'Тысяча человеко-дней'),(263,'Тысяча человеко-часов'),(264,'Тысяча условных банок в смену'),(265,'Миллион единиц в год'),(266,'Посещение в смену'),(267,'Тысяча посещений в смену'),(268,'Пара в смену'),(269,'Тысяча пар в смену'),(270,'Миллион тонн в год'),(271,'Тонна переработки в сутки'),(272,'Тысяча тонн переработки в сутки'),(273,'Центнер переработки в сутки'),(274,'Тысяча центнеров переработки в сутки'),(275,'Тысяча голов в год'),(276,'Миллион голов в год'),(277,'Тысяча птицемест'),(278,'Тысяча кур-несушек'),(279,'Минимальная заработная плата'),(280,'Тысяча тонн пара в час'),(281,'Тысяча прядильных веретен'),(282,'Тысяча прядильных мест'),(283,'Доза'),(284,'Тысяча доз'),(285,'Единица'),(286,'Тысяча единиц'),(287,'Миллион единиц'),(288,'Канал'),(289,'Тысяча комплектов'),(290,'Место'),(291,'Тысяча мест'),(292,'Тысяча номеров'),(293,'Тысяча гектаров порций'),(294,'Тысяча пачек'),(295,'Процент'),(296,'Промилле (0,1 процента)'),(297,'Тысяча рулонов'),(298,'Тысяча станов'),(299,'Станция'),(300,'Тысяча тюбиков'),(301,'Тысяча условных тубов'),(302,'Миллион упаковок'),(303,'Тысяча упаковок'),(304,'Человек'),(305,'Тысяча человек'),(306,'Миллион человек'),(307,'Миллион экземпляров'),(308,'Ячейка'),(309,'Ящик'),(310,'Голова'),(311,'Тысяча пар'),(312,'Миллион пар'),(313,'Комплект'),(314,'Секция'),(315,'Бутылка'),(316,'Тысяча бутылок'),(317,'Ампула'),(318,'Тысяча ампул'),(319,'Флакон'),(320,'Тысяча флаконов'),(321,'Тысяча тубов'),(322,'Тысяча коробок'),(323,'Условная единица'),(324,'Тысяча условных единиц'),(325,'Миллион условных единиц'),(326,'Условная штука'),(327,'Тысяча условных штук'),(328,'Условная банка'),(329,'Тысяча условных банок'),(330,'Миллион условных банок'),(331,'Условный кусок'),(332,'Тысяча условных кусков'),(333,'Миллион условных кусков'),(334,'Условный ящик'),(335,'Тысяча условных ящиков'),(336,'Условная катушка'),(337,'Тысяча условных катушек'),(338,'Условная плитка'),(339,'Тысяча условных плиток'),(340,'Условный кирпич'),(341,'Тысяча условных кирпичей'),(342,'Миллион условных кирпичей'),(343,'Семья'),(344,'Тысяча семей'),(345,'Миллион семей'),(346,'Домохозяйство'),(347,'Тысяча домохозяйств'),(348,'Миллион домохозяйств'),(349,'Ученическое место'),(350,'Тысяча ученических мест'),(351,'Рабочее место'),(352,'Тысяча рабочих мест'),(353,'Посадочное место'),(354,'Тысяча посадочных мест'),(355,'Номер'),(356,'Квартира'),(357,'Тысяча квартир'),(358,'Койка'),(359,'Тысяча коек'),(360,'Том книжного фонда'),(361,'Тысяча томов книжного фонда'),(362,'Условный ремонт'),(363,'Условный ремонт в год'),(364,'Смена'),(365,'Лист авторский'),(366,'Лист печатный'),(367,'Лист учетно-издательский'),(368,'Знак'),(369,'Слово'),(370,'Символ'),(371,'Условная труба'),(372,'Тысяча пластин'),(373,'Миллион доз'),(374,'Миллион листов-оттисков'),(375,'Вагоно(машино)-день'),(376,'Тысяча вагоно-(машино)-часов'),(377,'Тысяча вагоно-(машино)-километров'),(378,'Тысяча место-километров'),(379,'Вагоно-сутки'),(380,'Тысяча поездо-часов'),(381,'Тысяча поездо-километров'),(382,'Тысяча тонно-миль'),(383,'Тысяча пассажиро-миль'),(384,'Автомобиле-день'),(385,'Тысяча автомобиле-тонно-дней'),(386,'Тысяча автомобиле-часов'),(387,'Тысяча автомобиле-место-дней'),(388,'Приведенный час'),(389,'Самолето-километр'),(390,'Тысяча километров'),(391,'Тысяча тоннаже-рейсов'),(392,'Миллион тонно-миль'),(393,'Миллион пассажиро-миль'),(394,'Миллион тоннаже-миль'),(395,'Миллион пассажиро-место-миль'),(396,'Кормо-день'),(397,'Центнер кормовых единиц'),(398,'Тысяча автомобиле-километров'),(399,'Тысяча тоннаже-сут'),(400,'Суго-сутки'),(401,'Штук в 20-футовом эквиваленте (ДФЭ)'),(402,'Канало-километр'),(403,'Канало-концы'),(404,'Тысяча экземпляров'),(405,'Тысяча долларов'),(406,'Тысяча тонн кормовых единиц'),(407,'Миллион тонн кормовых единиц'),(408,'Судо-сутки'),(409,'Гектометр'),(410,'Миля (уставная) (1609,344 м)'),(411,'Акр (4840 квадратных ярдов)'),(412,'Квадратная миля'),(413,'Жидкостная унция СК (28,413 см3)'),(414,'Джилл СК (0,142065 дм3)'),(415,'Пинта СК (0,568262 дм3)'),(416,'Кварта СК (1,136523 дм3)'),(417,'Галлон СК (4,546092 дм3)'),(418,'Бушель СК (36,36874 дм3)'),(419,'Жидкостная унция США (29,5735 см3)'),(420,'Джилл США (11,8294 см3)'),(421,'Жидкостная пинта США (0,473176 дм3)'),(422,'Жидкостная кварта США (0,946353 дм3)'),(423,'Жидкостный галлон США (3,78541 дм3)'),(424,'Баррель (нефтяной) США (158,987 дм3)'),(425,'Сухая пинта США (0,55061 дм3)'),(426,'Сухая кварта США (1,101221 дм3)'),(427,'Сухой галлон США (4,404884 дм3)'),(428,'Бушель США (35,2391 дм3)'),(429,'Сухой баррель США (115,627 дм3)'),(430,'Стандарт'),(431,'Корд (3,63 м3)'),(432,'Тысячи бордфутов (2,36 м3)'),(433,'Нетто-регистровая тонна'),(434,'Обмерная (фрахтовая) тонна'),(435,'Водоизмещение'),(436,'Фунт СК, США (0,45359237 кг)'),(437,'Унция СК, США (28,349523 г)'),(438,'Драхма СК (1,771745 г)'),(439,'Гран СК, США (64,798910 мг)'),(440,'Стоун СК (6,350293 кг)'),(441,'Квартер СК (12,700586 кг)'),(442,'Центал СК (45,359237 кг)'),(443,'Центнер США (45,3592 кг)'),(444,'Длинный центнер СК (50,802345 кг)'),(445,'Короткая тонна СК, США (0,90718474 т)'),(446,'Длинная тонна СК, США (1,0160469 т)'),(447,'Скрупул СК, США (1,295982 г)'),(448,'Пеннивейт СК, США (1,555174 г)'),(449,'Драхма СК (3,887935 г)'),(450,'Драхма США (3,887935 г)'),(451,'Унция СК, США (31,10348 г); тройская унция'),(452,'Тройский фунт США (373,242 г)'),(453,'Эффективная мощность (245,7 ватт)'),(454,'Британская тепловая единица (1,055 кДж)'),(455,'Гросс (144 шт.)'),(456,'Большой гросс (12 гроссов)'),(457,'Короткий стандарт (7200 единиц)'),(458,'Галлон спирта установленной крепости'),(459,'Международная единица'),(460,'Сто международных единиц');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ElectroEquipment` */

/*Table structure for table `ElectroEquipmentType` */

DROP TABLE IF EXISTS `ElectroEquipmentType`;

CREATE TABLE `ElectroEquipmentType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ElectroEquipmentType` */

insert  into `ElectroEquipmentType`(`id`,`name`) values (1,'Компьютеры'),(2,'Принтеры'),(3,'Копировальная техника'),(4,'Электроплиты'),(5,'Электропечи'),(6,'Электронагреватели'),(7,'Холодильники'),(8,'Стиральные машины'),(9,'Мелкая бытовая техника'),(10,'Станки');

/*Table structure for table `ExecutivePerson` */

DROP TABLE IF EXISTS `ExecutivePerson`;

CREATE TABLE `ExecutivePerson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsibilities` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A9DDECD8DBC56F7` (`common_id`),
  CONSTRAINT `FK_A9DDECD8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ExecutivePerson` */

/*Table structure for table `Facility` */

DROP TABLE IF EXISTS `Facility`;

CREATE TABLE `Facility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `done` datetime DEFAULT NULL,
  `closed` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E92FF6E45E237E06` (`name`),
  UNIQUE KEY `UNIQ_E92FF6E4A76ED395` (`user_id`),
  CONSTRAINT `FK_E92FF6E4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Facility` */

insert  into `Facility`(`id`,`user_id`,`name`,`created`,`updated`,`done`,`closed`) values (1,2,'РћР±СЉРµРєС‚ в„–1','2012-11-02 10:41:05','2012-11-02 12:30:53',NULL,NULL),(2,3,'РћР±СЉРµРєС‚ в„–2','2012-11-02 12:31:23',NULL,NULL,NULL);

/*Table structure for table `File` */

DROP TABLE IF EXISTS `File`;

CREATE TABLE `File` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `file_type` tinytext COLLATE utf8_unicode_ci NOT NULL,
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
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `FuelConsumption` */

/*Table structure for table `FuelType` */

DROP TABLE IF EXISTS `FuelType`;

CREATE TABLE `FuelType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `FuelType` */

insert  into `FuelType`(`id`,`name`) values (1,'Бензин'),(2,'Дизельное топливо'),(3,'Керосин'),(4,'Сжиженный углеводородный газ'),(5,'Сжиженный природный газ'),(6,'Судовое маловязкое топливо'),(7,'Тяжелое судовое топливо'),(8,'Лигроин');

/*Table structure for table `FundsVolume` */

DROP TABLE IF EXISTS `FundsVolume`;

CREATE TABLE `FundsVolume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  `non_budget` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_576E7B168DBC56F7` (`common_id`),
  CONSTRAINT `FK_576E7B168DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `FundsVolume` */

/*Table structure for table `LightsPlaceType` */

DROP TABLE IF EXISTS `LightsPlaceType`;

CREATE TABLE `LightsPlaceType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `LightsPlaceType` */

insert  into `LightsPlaceType`(`id`,`name`) values (1,'Коридоры'),(2,'Кабинеты'),(3,'Холлы'),(4,'Фойе'),(5,'Технические помещения'),(6,'Санузлы'),(7,'Наружное освещение'),(8,'Парковки'),(9,'Стоянки');

/*Table structure for table `LightsSystem` */

DROP TABLE IF EXISTS `LightsSystem`;

CREATE TABLE `LightsSystem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `lights_place_type_id` int(11) NOT NULL,
  `tungsten_quantity` int(11) DEFAULT NULL,
  `tungsten_power` decimal(10,0) DEFAULT NULL,
  `fluorescent_quantity` int(11) DEFAULT NULL,
  `fluorescent_power` decimal(10,0) DEFAULT NULL,
  `energy_save_quantity` int(11) DEFAULT NULL,
  `energy_save_power` decimal(10,0) DEFAULT NULL,
  `work_duration` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3B1C48D48DBC56F7` (`common_id`),
  KEY `IDX_3B1C48D4462566F4` (`lights_place_type_id`),
  CONSTRAINT `FK_3B1C48D4462566F4` FOREIGN KEY (`lights_place_type_id`) REFERENCES `lightsplacetype` (`id`),
  CONSTRAINT `FK_3B1C48D48DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `LightsSystem` */

/*Table structure for table `NaturalProduction` */

DROP TABLE IF EXISTS `NaturalProduction`;

CREATE TABLE `NaturalProduction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dimention_type_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `quantity` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ECE3253F3DDA71A` (`dimention_type_id`),
  KEY `IDX_ECE3253F8DBC56F7` (`common_id`),
  CONSTRAINT `FK_ECE3253F3DDA71A` FOREIGN KEY (`dimention_type_id`) REFERENCES `dimentiontype` (`id`),
  CONSTRAINT `FK_ECE3253F8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `NaturalProduction` */

/*Table structure for table `Personal` */

DROP TABLE IF EXISTS `Personal`;

CREATE TABLE `Personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `course_type_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `school_license` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `certification` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_8FC0FD28DBC56F7` (`common_id`),
  KEY `IDX_8FC0FD2CD8F897F` (`course_type_id`),
  CONSTRAINT `FK_8FC0FD28DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8FC0FD2CD8F897F` FOREIGN KEY (`course_type_id`) REFERENCES `coursetype` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Personal` */

/*Table structure for table `PersonalQuantity` */

DROP TABLE IF EXISTS `PersonalQuantity`;

CREATE TABLE `PersonalQuantity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_86D5E74B8DBC56F7` (`common_id`),
  CONSTRAINT `FK_86D5E74B8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `PersonalQuantity` */

/*Table structure for table `Pipeline` */

DROP TABLE IF EXISTS `Pipeline`;

CREATE TABLE `Pipeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pipeline_installation_type_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `length` decimal(10,0) DEFAULT NULL,
  `diameter` decimal(10,0) DEFAULT NULL,
  `insulation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `operation_period` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_848ABB8F6E26B0C6` (`pipeline_installation_type_id`),
  KEY `IDX_848ABB8F8DBC56F7` (`common_id`),
  CONSTRAINT `FK_848ABB8F6E26B0C6` FOREIGN KEY (`pipeline_installation_type_id`) REFERENCES `pipelineinstallationtype` (`id`),
  CONSTRAINT `FK_848ABB8F8DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Pipeline` */

/*Table structure for table `PipelineInstallationType` */

DROP TABLE IF EXISTS `PipelineInstallationType`;

CREATE TABLE `PipelineInstallationType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `PipelineInstallationType` */

insert  into `PipelineInstallationType`(`id`,`name`) values (1,'Отопление'),(2,'Горячее водоснабжение'),(3,'Канализация'),(4,'Холодное водоснабжение'),(5,'Система пожаротушения');

/*Table structure for table `ResourceType` */

DROP TABLE IF EXISTS `ResourceType`;

CREATE TABLE `ResourceType` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ResourceType` */

insert  into `ResourceType`(`id`,`name`) values (1,'Электрической энергии'),(2,'Тепловой энергии'),(3,'Твердого топлива'),(4,'Жидкого топлива'),(5,'Моторного топлива'),(6,'Природного газа'),(7,'Воды'),(8,'Бензина'),(9,'Керосина'),(10,'Дизельного топлива'),(11,'Газа');

/*Table structure for table `Transformator` */

DROP TABLE IF EXISTS `Transformator`;

CREATE TABLE `Transformator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `common_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `individual_capacity` decimal(10,0) DEFAULT NULL,
  `higher_voltage` decimal(10,0) DEFAULT NULL,
  `installed_power` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_59523BB18DBC56F7` (`common_id`),
  CONSTRAINT `FK_59523BB18DBC56F7` FOREIGN KEY (`common_id`) REFERENCES `common` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `Transformator` */

/*Table structure for table `User` */

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `User` */

insert  into `User`(`id`,`username`,`username_canonical`,`email`,`email_canonical`,`enabled`,`salt`,`password`,`last_login`,`locked`,`expired`,`expires_at`,`confirmation_token`,`password_requested_at`,`roles`,`credentials_expired`,`credentials_expire_at`,`first_name`,`last_name`) values (1,'admin','admin','admin','admin',1,'','admin','2012-11-02 12:31:09',0,0,NULL,NULL,NULL,'a:1:{i:0;s:5:\"ADMIN\";}',0,NULL,'',''),(2,'qwe@qwe.qwe','qwe@qwe.qwe','qwe@qwe.qwe','qwe@qwe.qwe',1,'','qweqwe123','2012-11-02 10:41:30',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'qwe','qwe'),(3,'qwe@qwe.qwe111','qwe@qwe.qwe111','qwe@qwe.qwe111','qwe@qwe.qwe111',1,'','880ae1e9',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

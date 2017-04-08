/*
SQLyog Ultimate v11.5 (32 bit)
MySQL - 5.6.20 : Database - jjglobal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`id`,`name`,`phone`,`email`,`message`) values (1,'dk','95748473999','kishan.dadhania@gmail.com','sfwfesdsdsdsdsdsdsd'),(2,'Kishan Dadhania','9574847492','kishan.dadhania@gmail.com','lklklkkllklll');

/*Table structure for table `extra_info` */

DROP TABLE IF EXISTS `extra_info`;

CREATE TABLE `extra_info` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `value` varchar(1024) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `extra_info` */

insert  into `extra_info`(`id`,`name`,`value`,`active`) values (1,'map_1','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.2597334199263!2d70.79653331495346!3d22.23022198536006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDEzJzQ4LjgiTiA3MMKwNDcnNTUuNCJF!5e0!3m2!1sen!2suk!4v1487809895384\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>',1),(2,'map_2','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14766.013232388372!2d70.79522601911587!3d22.296797209000612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca045f584125%3A0xcfd266b856181821!2sJ+J+GLOBAL+TRADE!5e0!3m2!1sen!2sin!4v1482556418851\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border: 0px; pointer-events: none;\" allowfullscreen=\"\"></iframe>',1);

/*Table structure for table `product_category` */

DROP TABLE IF EXISTS `product_category`;

CREATE TABLE `product_category` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `type` varchar(50) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT '1',
  `sequence` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `product_category` */

insert  into `product_category`(`id`,`name`,`type`,`active`,`sequence`) values (1,'Machinery','machinery','1',1),(2,'Food & Spices','spices','1',2),(3,'Safety Products','safety','1',3),(4,'Agricultural Machinery','Agricultural-Machinery','1',1.1),(5,'Mining Machinery','mining-machinery','1',1.2);

/*Table structure for table `product_info` */

DROP TABLE IF EXISTS `product_info`;

CREATE TABLE `product_info` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `dec` text,
  `product_id` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_info_fk` (`product_id`),
  CONSTRAINT `product_info_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `product_info` */

insert  into `product_info`(`id`,`image`,`dec`,`product_id`) values (1,'Chilli Powder (3).jpg','Our chilli powder is made by drying and grounding the red chilli to give highly pungent red powder. That gives the delicious taste, flavor, color and aroma all time. Chilli powder has spicy taste. Chilli powder especially for those who like spicy Dishes.|India is the worlds best quality chilli powder manufacturer. Chilli Powder contains nutritional values like Vitamin A, C & Iron. Our chilli powder can add delicious taste of dishes and cuisines.',4),(8,'Turmeric Powder (2).jpg','Turmeric powder is extensively used in Indian dishes, south East Asian cooking. Many Indian curries and cuisines would be incomplete without a dash of turmeric powder. Indian Land was world\'s best quality turmeric producer. Our turmeric powder is guarantee of Purity and quality. Turmeric is said to be Golden Spices.| Turmeric Powder contains nutritional values like Vitamin C, E & Iron. Just a few grams of turmeric per day either in the form of powder help you keep away from anemia, neuritis, memory disorders and offer protection against cancers, infectious diseases, high blood pressure, and strokes.',6);

/*Table structure for table `product_spe` */

DROP TABLE IF EXISTS `product_spe`;

CREATE TABLE `product_spe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `description` text,
  `data` text,
  `product_id` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `spe_procuct_fk` (`product_id`),
  CONSTRAINT `spe_procuct_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `product_spe` */

insert  into `product_spe`(`id`,`description`,`data`,`product_id`) values (46,'Our chilli powder is made by drying and grounding the red chilli to give highly pungent red powder. That gives the delicious taste, flavor, color and aroma all time. Chilli powder has spicy taste. Chilli powder especially for those who like spicy Dishes.| India is the worlds best quality chilli powder manufacturer. Chilli Powder contains nutritional values like Vitamin A, C & Iron. Our chilli powder can add delicious taste of dishes and cuisines.','{\r\n   \"image\":\"Chilli Powder (3).jpg\",\r\n   \"prop\":[\r\n      {\r\n         \"name\":\"Origin\",\r\n         \"value\":\"India\"\r\n      },\r\n      {\r\n         \"name\":\"Total Ash\",\r\n         \"value\":\"9.5% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Acid Insoluble Ash\",\r\n         \"value\":\"1.75% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Moisture\",\r\n         \"value\":\"10% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Salmonella\",\r\n         \"value\":\"Absent / 25 Gms\"\r\n      },\r\n      {\r\n         \"name\":\"Para red, Rhodamin B, Butter yellow\",\r\n         \"value\":\"Absent\"\r\n      },\r\n      {\r\n         \"name\":\"Orange 2, Orange B & G\",\r\n         \"value\":\"Absent\"\r\n      },\r\n      {\r\n         \"name\":\"Sudan 1,2,3,4\",\r\n         \"value\":\"Absent\"\r\n      },\r\n      {\r\n         \"name\":\"Scoville heat unit (SHU)\",\r\n         \"value\":\"20,000 to 50,000 SHU\"\r\n      }\r\n   ],\r\n   \"packing\":[\r\n      {\r\n         \"name\":\"Branding Paper Bag\",\r\n         \"value\":\"50 lb / 22.68 kg\"\r\n      },\r\n      {\r\n         \"name\":\"P. P. Bag\",\r\n         \"value\":\"55.12 lb / 25 kg or 110.23 lb / 50 kg\"\r\n      },\r\n      {\r\n         \"name\":\"Custom Requirement\",\r\n         \"value\":\"As per customer requirement\"\r\n      }\r\n   ]\r\n}',4),(47,'Turmeric powder is extensively used in Indian dishes, south East Asian cooking. Many Indian curries and cuisines would be incomplete without a dash of turmeric powder. Indian Land was worlds best quality turmeric producer. Our turmeric powder is guarantee of Purity and quality. Turmeric is said to be Golden Spices. | Turmeric Powder contains nutritional values like Vitamin C, E & Iron. Just a few grams of turmeric per day either in the form of powder help you keep away from anemia, neuritis, memory disorders and offer protection against cancers, infectious diseases, high blood pressure, and strokes.','{\r\n   \"image\":\"Turmeric Powder (2).jpg\",\r\n   \"prop\":[\r\n      {\r\n         \"name\":\"Product Name\",\r\n         \"value\":\"Turmeric Powder\"\r\n      },\r\n      {\r\n         \"name\":\"Origin\",\r\n         \"value\":\"India\"\r\n      },\r\n      {\r\n         \"name\":\"Total Ash\",\r\n         \"value\":\"9.5% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Acid Insoluble Ash\",\r\n         \"value\":\"1% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Moisture\",\r\n         \"value\":\"10% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Salmonella\",\r\n         \"value\":\"Absent / 25 Gms\"\r\n      },\r\n      {\r\n         \"name\":\"Para red, Rhodamin B, Butter yellow\",\r\n         \"value\":\"Absent\"\r\n      },\r\n      {\r\n         \"name\":\"Orange 2, Orange B & G\",\r\n         \"value\":\"Absent\"\r\n      },\r\n      {\r\n         \"name\":\"Sudan 1,2,3,4\",\r\n         \"value\":\"Absent\"\r\n      },\r\n      {\r\n         \"name\":\"Scoville heat unit (SHU)\",\r\n         \"value\":\"20,000 to 50,000 SHU\"\r\n      }\r\n   ],\r\n   \"packing\":[\r\n      {\r\n         \"name\":\"Branding Paper Bag\",\r\n         \"value\":\"50 lb / 22.68 kg\"\r\n      },\r\n      {\r\n         \"name\":\"P. P. Bag\",\r\n         \"value\":\"55.12 lb / 25 kg or 110.23 lb / 50 kg\"\r\n      },\r\n      {\r\n         \"name\":\"Custom Requirement\",\r\n         \"value\":\"As per customer requirement\"\r\n      }\r\n   ]\r\n}',6),(48,'Cumin Powder is known as Jeera Powder in Indian market. Cumin as fragrant spice known for its extraordinary & special flavor in the world. It is popular in Indian cuisine, Middle Eastern, Mexican, North African & western Chinese cuisines. . It is a good source of iron, manganese and other vitamins B-6, B Complex, A & E also minerals. ','{\r\n   \"image\":\"Cumin Powder (1).jpg\",\r\n   \"prop\":[\r\n      {\r\n         \"name\":\"Product Name\",\r\n         \"value\":\"Cumin Powder\"\r\n      },\r\n      {\r\n         \"name\":\"Origin\",\r\n         \"value\":\"India\"\r\n      },\r\n      {\r\n         \"name\":\"Total Ash\",\r\n         \"value\":\"8% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Acid Insoluble Ash\",\r\n         \"value\":\"0.5% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Moisture\",\r\n         \"value\":\"10% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Salmonella\",\r\n         \"value\":\"Absent / 25 Gms\"\r\n      },\r\n      {\r\n         \"name\":\"Para red, Rhodamin B, Butter yellow\",\r\n         \"value\":\"Absent\"\r\n      }     \r\n   ],\r\n   \"packing\":[\r\n      {\r\n         \"name\":\"Branding Paper Bag\",\r\n         \"value\":\"50 lb / 22.68 kg\"\r\n      },\r\n      {\r\n         \"name\":\"P. P. Bag\",\r\n         \"value\":\"55.12 lb / 25 kg or 110.23 lb / 50 kg\"\r\n      },\r\n      {\r\n         \"name\":\"Custom Requirement\",\r\n         \"value\":\"As per customer requirement\"\r\n      }\r\n   ]\r\n}',9),(50,'Coriander is widely used as a powdered form in almost every Indian cuisine. The powder is prepared by selecting the high quality of matured sundried coriander of fine quality. This assures fresh taste and aroma to any dish to which these are added. Coriander powder is also known as Dhaniya powder by Indian. . The Greek and the Romans thought it to be an aphrodisiac. Coriander Powder is a spice that adds a mild flavor and aroma to world\'s cuisine.','{\r\n   \"image\":\"Coriander Powder (2).jpg\",\r\n   \"prop\":[\r\n      {\r\n         \"name\":\"Product Name\",\r\n         \"value\":\"Coriander Powder\"\r\n      },\r\n      {\r\n         \"name\":\"Origin\",\r\n         \"value\":\"India\"\r\n      },\r\n      {\r\n         \"name\":\"Total Ash\",\r\n         \"value\":\"9.5% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Acid Insoluble Ash\",\r\n         \"value\":\"1.75% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Moisture\",\r\n         \"value\":\"10% Max\"\r\n      },\r\n      {\r\n         \"name\":\"Salmonella\",\r\n         \"value\":\"Absent / 25 Gms\"\r\n      }     \r\n   ],\r\n   \"packing\":[\r\n      {\r\n         \"name\":\"Branding Paper Bag\",\r\n         \"value\":\"50 lb / 22.68 kg\"\r\n      },\r\n      {\r\n         \"name\":\"P. P. Bag\",\r\n         \"value\":\"55.12 lb / 25 kg or 110.23 lb / 50 kg\"\r\n      },\r\n      {\r\n         \"name\":\"Custom Requirement\",\r\n         \"value\":\"As per customer requirement\"\r\n      }\r\n   ]\r\n}\r\n',10),(51,'Coriander-cumin seeds powder has a pleasant aroma and flavour that enhances many Indian dishes, especially vegetable preparations, savouries and snacks. Green whole Coriander and high grade whole Cumin from select Indian farms which creates a perfect blend for a rich taste and flavour. It is also known as Dhaniya Jeera Powder. The singular blend of coriander cumin is used world wide for its flavor and bouquet. It is also used to flavor savoury dishes, salads, butter milk, pickles, curries and chutneys.','{\r\n   \"image\":\"Coriander Cumin.jpg\",\r\n   \r\n   \"packing\":[\r\n      {\r\n         \"name\":\"Branding Paper Bag\",\r\n         \"value\":\"50 lb / 22.68 kg\"\r\n      },\r\n      {\r\n         \"name\":\"P. P. Bag\",\r\n         \"value\":\"55.12 lb / 25 kg or 110.23 lb / 50 kg\"\r\n      },\r\n      {\r\n         \"name\":\"Custom Requirement\",\r\n         \"value\":\"As per customer requirement\"\r\n      }\r\n   ]\r\n}',11),(52,'The powder is also known as Kali Mirch powder in Indian. This Savory spice is obtained from the pepper plant, which is a smooth woody vine, popularly found in Kerala, South India. Black pepper powder is one of the best spices used in virtually all kinds of rich cooking. Black Pepper powder mixed with salt is used as sprinkler over vegetable/fruit salad, chats, lemonade, in soups etc.','{\r\n   \"image\":\"blackppr.jpg\",   \r\n   \"packing\":[\r\n      {\r\n         \"name\":\"Branding Paper Bag\",\r\n         \"value\":\"50 lb / 22.68 kg\"\r\n      },\r\n      {\r\n         \"name\":\"P. P. Bag\",\r\n         \"value\":\"55.12 lb / 25 kg or 110.23 lb / 50 kg\"\r\n      },\r\n      {\r\n         \"name\":\"Custom Requirement\",\r\n         \"value\":\"As per customer requirement\"\r\n      }\r\n   ]\r\n}',12),(54,'This spice is not just used in Indian cuisines, but also finds a significant place in Chinese cuisines. White pepper is known to have a mild, delicate flavor. This spice is used to add a peppery flavour to light-colour sauces, soups and other dishes. It is also widely popular in France, Europe and Japan for its taste. White pepper powder, also known as Safed Mari powder in Indian. . It is also a great source of manganese, iron and vitamin-k.','{\r\n   \"image\":\"whiteppr.jpg\",   \r\n   \"packing\":[\r\n      {\r\n         \"name\":\"Branding Paper Bag\",\r\n         \"value\":\"50 lb / 22.68 kg\"\r\n      },\r\n      {\r\n         \"name\":\"P. P. Bag\",\r\n         \"value\":\"55.12 lb / 25 kg or 110.23 lb / 50 kg\"\r\n      },\r\n      {\r\n         \"name\":\"Custom Requirement\",\r\n         \"value\":\"As per customer requirement\"\r\n      }\r\n   ]\r\n}',13),(55,'We are Delicious test Khakhra exporter. Khakhra is delicious test for Indian. Its know as a breakfast food. Its made from high quality wheat flour. Vaccum packing to long life and test forever.','{\r\n   \"image\":\"khakhra47.jpg\",\r\n   \"prop\":[\r\n      {\r\n         \"name\":\"Product Name\",\r\n         \"value\":\"KHAKHRA\"\r\n      },\r\n      {\r\n         \"name\":\"FLAVOUR\",\r\n         \"value\":\"Masala, Methi, Jeera, Panipuri, Pavbhaji, Panjabi & Many Delicious Flavours\"\r\n      },\r\n      {\r\n         \"name\":\"WEIGHT\",\r\n         \"value\":\"1.920 kg\"\r\n      },\r\n      {\r\n         \"name\":\"DIMENSIONS\",\r\n         \"value\":\"11 x 8 x 4.5 in\"\r\n      },\r\n      {\r\n         \"name\":\"PRODUCT WEIGHT\",\r\n         \"value\":\"45 GM\"\r\n      },\r\n      {\r\n         \"name\":\"SPECIALTY\",\r\n         \"value\":\"No Preservatives\"\r\n      },\r\n       {\r\n         \"name\":\"COUNTRY OF ORIGIN\",\r\n         \"value\":\"India\"\r\n      },\r\n       {\r\n         \"name\":\"CUISINE\",\r\n         \"value\":\"Indian (Gujarati & Rajstani)\"\r\n      },\r\n      {\r\n         \"name\":\"INGREDIENT TYPE\",\r\n         \"value\":\"Vegetarian\"\r\n      }       \r\n   ]   \r\n}',14),(56,'Mango is king of Indian fruits. We are Leading Quality Exporter of organic fresh mangoes pulp. We have largest farmland for farming fresh fruits. We followed organic farming technique because Organic fruits often tastes better than other fruits. It is free of contamination with health harming chemicals such as pesticides, fungicides and herbicides.','{\r\n   \"image\":\"mangopulp.jpg\",   \r\n   \"packing\":[\r\n      {\r\n         \"name\":\"Supplied As\",\r\n         \"value\":\"3.1 Kgs x 6 Tins Carton , 450 gms x 12 Tins Tray , 850 gms x 12 Tins Tray/Carton\"\r\n      },    \r\n      {\r\n         \"name\":\"Custom Requirement\",\r\n         \"value\":\"As per customer requirement\"\r\n      }\r\n   ]\r\n}',15);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'main',
  `product_cat` int(3) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_cat_map` (`product_cat`),
  CONSTRAINT `product_cat_map` FOREIGN KEY (`product_cat`) REFERENCES `product_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`type`,`product_cat`,`active`) values (4,'Red Chilli Powder','Red-Chilli-Powder',2,1),(5,'Safety Shoes','Safety-Shoes',3,1),(6,'Turmeric Powder','Turmeric-Powder',2,1),(9,'Cumin Powder','Cumin-Powder',2,1),(10,'Coriander Powder','Coriander-Powder',2,1),(11,'Coriander Cumin Powder','Coriander-Cumin-Powder',2,1),(12,'Black Pepper Powder','Black-Pepper-Powder',2,1),(13,'White Pepper Powder','White-Pepper-Powder',2,1),(14,'Khakhara','KHAKHRA',2,1),(15,'Mango Pulp','Mango-Pulp',2,1);

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `value` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `profile` */

insert  into `profile`(`id`,`name`,`value`) values (1,'name','JJ Gloabl Trade'),(2,'email','info@jjglobaltrade.com'),(3,'phone','+91 74059 59246'),(4,'address','207, LAKHAJIRAJ BUILDING, TRIKON BAUG CHOWK, Raghuveer Para, Lohana Para, Rajkot, Gujarat 360001'),(5,'fb_link','https://www.facebook.com/jjglobaltrade/'),(6,'address_2','Sr. No.: 20/21, Poonam Dumper Street, Nr. Tata Motors, Gondal Road, Vavdi, Rajkot - 360004. Gujarat ( India ).'),(7,'phone_2','+91 7046677403'),(8,'twitter_link','https://twitter.com/exportjjglobal'),(9,'linkedin_link','https://www.linkedin.com/in/j-j-global-trade-451349119'),(10,'google_link','https://plus.google.com/u/0/102724075172454830492');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

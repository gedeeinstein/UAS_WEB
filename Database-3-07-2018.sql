/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.31-MariaDB : Database - z_uas_web
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`z_uas_web` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `z_uas_web`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` varchar(12) NOT NULL,
  `gambar` varchar(120) NOT NULL,
  `sku` varchar(12) NOT NULL,
  `nama_barang` varchar(140) NOT NULL,
  `id_kategori` varchar(12) NOT NULL,
  `id_merk` varchar(12) NOT NULL,
  `id_gudang` varchar(12) NOT NULL,
  `stok` int(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(15) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`gambar`,`sku`,`nama_barang`,`id_kategori`,`id_merk`,`id_gudang`,`stok`,`deskripsi`,`status`) values ('BRG001','290620180813366 Burner With Oven - THERMATEK - TDMS 36-6-IL.jpg','GENSLIGSE112','GENERAL MEAT SLICER GSE 112-50','KTG013','MRK004','GUD002',50,'<p>&nbsp;</p>\r\n\r\n<p>Make sausages, hamburgers, and more with this General meat grinder! Featuring a high power motor and stainless steel grinding knife, this meat grinder will grind 2-3 LBS of meat per minute. This grinder has options for forward and reverse operation and comes with 2 stainless steel grinding plates for medium and coarse grinds!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>GENERAL MEAT MINCER GSM 50-50</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Equipped with 5mm and 8mm extrusion discs.</li>\r\n	<li>Hub #12 head</li>\r\n	<li>Voltage: 120/60/1</li>\r\n	<li>(Also Available in 220/50/1 and 220/60/1)</li>\r\n	<li>Watts: 850</li>\r\n	<li>Power: 1.1 HP</li>\r\n	<li>Speed: 175 RPM</li>\r\n	<li>Weight: 52 LB/24 KG</li>\r\n	<li>Dimensions: 18 1/2? W x 8 3/4? D x 14 3/4? H</li>\r\n	<li>(470mm W x 222mm D x 375mm H)</li>\r\n</ul>\r\n\r\n<p><strong>Features</strong></p>\r\n\r\n<ul>\r\n	<li>Design is attractive with a smooth finish that is easy to clean.</li>\r\n	<li>Cast and polished aluminum body featuring a</li>\r\n	<li>stainless steel grind head and food tray.</li>\r\n	<li>Energy efficient motor and precision gear drive.</li>\r\n	<li>Compact design with all rounded corners.</li>\r\n	<li>Includes both a forward and reverse switch.</li>\r\n	<li>Supplied with two extruder discs and a food pusher.</li>\r\n	<li>Ideal for use in butcher shops, supermarkets, delis, pizza shops, and more!</li>\r\n	<li>Suited for continuous operation</li>\r\n</ul>\r\n\r\n<p><strong>EXTRUSION DISCS</strong></p>\r\n\r\n<ul>\r\n	<li>Both units come equipped with</li>\r\n	<li>5mm and 8mm extrusion discs</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n',6),('BRG003','5b037982e29b6.jpg','LOTUS','LOTUS 6 BURNER','KTG004','MRK002','GUD001',100,'',4),('BRG004','87162979623e31f1e5991864cc6b1967','LTS-CF6-712G','LOTUS 6 BURNERS COOKER ON GAS CF6-712GP','KTG006','MRK004','GUD001',34,'<h2>GAS RANGE - N. 6 BURNERS TRADITIONAL GAS-OVEN GN 2/1 CM. 68X55X34H NEUTRAL CABINET WITH DOOR</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Size: cm. 120x 70,5x 90h</li>\r\n	<li>Gas power: 42,3 kW - 36.378 kcal/h</li>\r\n	<li>Weight: 178kg</li>\r\n	<li>Mod.</li>\r\n	<li>CF6-712GP</li>\r\n	<li>cod: 08681251</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Description&nbsp;6 BURNERS COOKER ON GAS CF6-712GP</h3>\r\n\r\n<p><strong>Construction&nbsp;</strong></p>\r\n\r\n<p>- Fabricated using CrNi 18/10 AISI 304 grade Stainless Steel Scotch-Brite Satin polish Finish, incorporating 2mm thick worktop, rounded edges, chromed details and rear splash back. Knobs with waterproof grades IPX5.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Model&nbsp;</strong></p>\r\n\r\n<p>- Professional Gas Cooker with static GN 2/1-GN 3/1 gas oven, with or without side compartment. Burners with pilot light ignition and thermocouple safety valves. Modulating flame burners, grills in stainless steel rods or in cast iron, removable liquid collectors. Piezoelectric ignition oven with 150 - 300degC control, thermocouple safety valves.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Maintenance&nbsp;</strong></p>\r\n\r\n<p>- All serviceable parts are accessible by the easy removal of front control panel and liquid collectors. Fittings&nbsp;</p>\r\n\r\n<p>- Appliance is supplied with both LPG and Natural Gas conversion jets and adjustable feet.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://dintarakitchen.co.id/images/product/6%20BURNERS%20COOKER%20ON%20GAS%20CF6-712GP.jpg\" style=\"height:200px; width:250px\" /></p>\r\n',3),('BRG006','2906201809472248f34b378a9f390b0efe85aa6f1c9466','UNX-CFTMM','UNOX Cheftop MIND.Mapsâ„¢ Gas Combi Oven 20 Trays','KTG006','MRK003','GUD001',12,'<h1><strong>UNOX Cheftop Mindmaps XEVC-2011-GPR</strong></h1>\r\n\r\n<p>More powerful than a dashboard, simpler than a control panel: MASTER.Touch PLUS is an intuitive connection between you and the oven. When advanced technology is simple and intuitive you can see the benefits for your work right from the very first day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Controllable like your hand. Natural as your thoughts. Fast as your glance. This is Unox CHEFTOP MIND.Maps&trade;, the new line of professional ovens that breaks down the barriers between your idea and the dish you serve. With a gesture. CHEFTOP MIND.Maps&trade; ONE and CHEFTOP MIND.Maps&trade; PLUS stand for complete control of the cooking process and maximum creative freedom. MIND.Maps&trade;. Personality. In a gesture.</p>\r\n\r\n<p><a href=\"https://lh3.googleusercontent.com/aKfstHhlI2t5nKHb2SzpDmYcLp07NGYPYH79857luDcyUoAPW7E5AnFXpLpDUlODHe5YnM7KH-AMPTllZIQgDyAVOLEJl3mFkv4Ugilf3EJQ4FgVRJSY5oAvwSDwdXx6UVhRO5ahiWvzw7thsb80wMnO1fABvcnc2mY87Q-RVk2QBJRK0GuP6PBxr_VKV_Yl_M31aHcIfotA3W2fkrFRY6iJJ_iDUBH_-qsPp21XEvLglN8Q4-mXBlO5uQaN72o_3UiBwB0uwhUCqSQMPnSySf-3vMSdSoFifLg9dnQpB8KFp-N_V7IiZjaY7679qCZ4AFR8762RDk8GxhJ8Jddy5k-_dGBIcUB0kX51xrTl9Tl6bXf6UxAod4yG-OzSrc0m0j4XiUBTvAtVcDJXYSnL-gmTgJCchhedd-yX7tEM8-D_K5NFxZ6dI5V7I4waVFUVboa4jn_Xr7EK5dFgiV3y0W4yCAmgD8A0iQcfO66gkIPtWasXvnDUNuhmsfGTezzn5dA5pnDOpW1_0M9xWAceJyshIs9Z-2N9MHL_FKehzQTg6n5dGOrMlXCtQ1PH1jkTNeU2-YjxRH5OI9MZsOt16p7wSaIeOQtRUkNYUhw=w690-h588-no\"><img src=\"https://lh3.googleusercontent.com/aKfstHhlI2t5nKHb2SzpDmYcLp07NGYPYH79857luDcyUoAPW7E5AnFXpLpDUlODHe5YnM7KH-AMPTllZIQgDyAVOLEJl3mFkv4Ugilf3EJQ4FgVRJSY5oAvwSDwdXx6UVhRO5ahiWvzw7thsb80wMnO1fABvcnc2mY87Q-RVk2QBJRK0GuP6PBxr_VKV_Yl_M31aHcIfotA3W2fkrFRY6iJJ_iDUBH_-qsPp21XEvLglN8Q4-mXBlO5uQaN72o_3UiBwB0uwhUCqSQMPnSySf-3vMSdSoFifLg9dnQpB8KFp-N_V7IiZjaY7679qCZ4AFR8762RDk8GxhJ8Jddy5k-_dGBIcUB0kX51xrTl9Tl6bXf6UxAod4yG-OzSrc0m0j4XiUBTvAtVcDJXYSnL-gmTgJCchhedd-yX7tEM8-D_K5NFxZ6dI5V7I4waVFUVboa4jn_Xr7EK5dFgiV3y0W4yCAmgD8A0iQcfO66gkIPtWasXvnDUNuhmsfGTezzn5dA5pnDOpW1_0M9xWAceJyshIs9Z-2N9MHL_FKehzQTg6n5dGOrMlXCtQ1PH1jkTNeU2-YjxRH5OI9MZsOt16p7wSaIeOQtRUkNYUhw=w690-h588-no\" /></a></p>\r\n\r\n<h3>MANUAL COOKING MODES</h3>\r\n\r\n<ul>\r\n	<li>Convection cooking 30 &deg;C - 260 &deg;C</li>\r\n	<li>Mixed steam and convection cooking 35 &deg;C - 260 &deg;C, with STEAM.Maxi&trade; 30% to 90%&nbsp;</li>\r\n	<li>Mixed humidity and convection cooking 48 &deg;C - 260 &deg;C, with STEAM.Maxi&trade; 10% to 20%&nbsp;</li>\r\n	<li>Steaming 48 &deg;C - 130 &deg;C with STEAM.Maxi&trade; technology 100%&nbsp;</li>\r\n	<li>Dry air cooking 30&deg;C - 260 &deg;C with DRY.Maxi&trade; technology 10% to 100%&nbsp;</li>\r\n	<li>Delta T cooking with core probe&nbsp;</li>\r\n	<li>MULTI.Point core probe&nbsp;</li>\r\n	<li>SOUS-VIDE core probe</li>\r\n	<li>MIND.Maps technology: draw cooking processes made of infinite steps with one simple touch</li>\r\n	<li>PROGRAMS: store up to 256 user&#39;s programs</li>\r\n	<li>PROGRAMS: possibilty to assign a name and picture to the stored programs</li>\r\n	<li>PROGRAMS: save recipe name by writing it (in any language)</li>\r\n	<li>CHEFUNOX: select cooking mode, food to be cooked, food size and cooking result. and start cooking</li>\r\n	<li>MULTI.Time: technology to manage up to 10 timers to cook different products at the same time</li>\r\n	<li>MISE.EN.PLACE: technology to sincronize the food loading in the cooking chamber to have every pan ready at the&nbsp;</li>\r\n</ul>\r\n\r\n<h3>TECHNICAL DETAILS</h3>\r\n\r\n<ul>\r\n	<li>Rounded stainless steel (AISI 304) cavity for hygiene and ease of cleaning</li>\r\n	<li>Chamber lighting through external LED lights</li>\r\n	<li>Steam proof sealed MASTER.Touch control panel</li>\r\n	<li>High-durability carbon fibre door lock</li>\r\n	<li>Door drip pan with continuous drainage, even when the door is open</li>\r\n	<li>High capacity appliance drip pan</li>\r\n	<li>Light weight &ndash; heavy duty structure using innovative materials</li>\r\n	<li>Proximity door contact switch</li>\r\n	<li>2-stage safety door lock</li>\r\n	<li>Autodiagnosis system for problems or break down</li>\r\n	<li>Safety temperature switch</li>\r\n	<li>Openable internal glass to simplify door cleaning</li>\r\n</ul>\r\n\r\n<h3>INTEGRATED TECHNOLGY IN UNOX</h3>\r\n\r\n<p>AIR.Maxi&trade;: The AIR.Maxi&trade; technology ensures perfect distribution of the air and therefore of the heat within the cooking chamber. Multiple auto-reversing fans and high speed motors guarantee cooking uniformity in all pans: from those at the bottom of the oven to those at the top. The possibility of choosing from 4 air speeds and 4 semi-static modes allows any type of product to be cooked perfectly, from the most delicate items to products that require high temperatures and a high rate of heat transfer.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>STEAM.Maxi:&trade; Production of dense steam from 35 &deg;C with extreme accuracy and minimal water consumption.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>DRY.Maxi&trade;: The DRY.Maxi&trade; technology rapidly extracts humidity from the cooking chamber and creates the ideal conditions for food that needs to be cooked in a completely dry environment. Oven baked products are soft, crisp and fragrant, grilled and browned meats retain their weight and flavor, vegetables maintain their perfect consistency. You can cook whatever you like, with Unox, quality comes as standard.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ADAPTIVE.Cooking&trade;: In CHEFTOP MIND.Maps&trade; PLUS ovens the ADAPTIVE.Cooking&trade; technology transforms your oven into an intelligent tool. It understands the results that you have in mind, interprets your settings, registers the variations of humidity and temperature, understands the quantity of food that is in the oven and proposes the best way to get exactly the results that you expect. By perfecting the cooking time and regulating the combined actions of 3 technologies, DRY.Maxi&trade;, STEAM.Maxi&trade; and AIR.Maxi&trade;, ADAPTIVE.Cooking&trade; always gives you the same perfect result. Exactly as you imagined it.</p>\r\n',3),('BRG007','d621e543b28145d3c4e3893b58403950','UNOX 20TRY','UNOX Cheftop MIND.Mapsâ„¢ Gas Combi Oven 20 Trays','KTG006','MRK004','GUD002',53,'<p>wwkwwk land</p>\r\n',5);

/*Table structure for table `gudang` */

DROP TABLE IF EXISTS `gudang`;

CREATE TABLE `gudang` (
  `id_gudang` varchar(12) NOT NULL,
  `nama_gudang` varchar(120) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_gudang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gudang` */

insert  into `gudang`(`id_gudang`,`nama_gudang`,`alamat`) values ('GUD001','Star East Kitchen','Jalan Sunset Road No. 168, Kuta, Badung, Bali'),('GUD002','PT. Dapur Inspirasi Nusantara','Jalan Mertasari No. 68F, Suwung, Batan Kendal, Sidakarya, Denpasar Selatan, Denpasar, Bali');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` varchar(12) NOT NULL,
  `nm_kategori` varchar(120) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nm_kategori`,`status`) values ('KTG001','ALAT KERJA','active'),('KTG002','ALAT TULIS KANTOR','active'),('KTG003','BY OWNER','active'),('KTG004','CUSTOM','active'),('KTG005','DELUXE','active'),('KTG006','EQUIPMENT','active'),('KTG007','GETRA','active'),('KTG008','GWF','active'),('KTG009','MATERIAL','active'),('KTG010','PERALATAN','active'),('KTG011','PERLENGKAPAN','active'),('KTG012','PLAT','active'),('KTG013','RANGE','active'),('KTG014','KOMPUTER','active');

/*Table structure for table `merk` */

DROP TABLE IF EXISTS `merk`;

CREATE TABLE `merk` (
  `id_merk` varchar(12) NOT NULL,
  `nm_merk` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_merk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `merk` */

insert  into `merk`(`id_merk`,`nm_merk`,`status`) values ('MRK001','ATMCOOL','active'),('MRK003','SUNEAST','active'),('MRK004','LOTUS','active'),('MRK005','GEA GETRA','active'),('MRK006','UNOX','active'),('MRK007','THERMATEK','active');

/*Table structure for table `status_tbl` */

DROP TABLE IF EXISTS `status_tbl`;

CREATE TABLE `status_tbl` (
  `id_status` int(15) NOT NULL AUTO_INCREMENT,
  `nm_status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `status_tbl` */

insert  into `status_tbl`(`id_status`,`nm_status`) values (1,'AKTIF'),(2,'TIDAK AKTIF'),(3,'ADA'),(4,'TIDAK ADA'),(5,'INDENT'),(6,'ON SHIPPING'),(17,'nnnnnnnnnnnnnn');

/*Table structure for table `suplier` */

DROP TABLE IF EXISTS `suplier`;

CREATE TABLE `suplier` (
  `id_suplier` varchar(15) NOT NULL,
  `nama_suplier` varchar(120) NOT NULL,
  `alamat` text,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `suplier` */

insert  into `suplier`(`id_suplier`,`nama_suplier`,`alamat`,`email`,`telepon`) values ('SUP001','CV. ANGKASA TEKNIK MANDIRI','PEDUNGAN','pur@atmcool.co.id','03618828381'),('SUP002','STAR EAST KITCHEN','Jalan Sunset Road No. 68 Kuta Badung','stareast@atmcool.co.id','03617109348');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(160) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

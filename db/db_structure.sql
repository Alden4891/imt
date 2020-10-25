/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.13-MariaDB : Database - db_imt
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_imt` /*!40100 DEFAULT CHARACTER SET ascii COLLATE ascii_bin */;

USE `db_imt`;

/*Table structure for table `grantees` */

DROP TABLE IF EXISTS `grantees`;

CREATE TABLE `grantees` (
  `GRANTEE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `HOUSEHOLD_ID` varchar(25) COLLATE ascii_bin NOT NULL,
  `ENTRY_ID` double NOT NULL,
  PRIMARY KEY (`GRANTEE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=89190 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` blob DEFAULT NULL,
  `description` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `intervensions` */

DROP TABLE IF EXISTS `intervensions`;

CREATE TABLE `intervensions` (
  `interv_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) COLLATE ascii_bin DEFAULT NULL,
  `details` text COLLATE ascii_bin DEFAULT NULL,
  `date_conducted` date DEFAULT NULL,
  `yds_child_count` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `HOUSEHOLD_ID` varchar(25) COLLATE ascii_bin DEFAULT NULL,
  `encoded_by` int(11) DEFAULT NULL,
  `date_encoded` date DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  `uid` varchar(36) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`interv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `lib_address` */

DROP TABLE IF EXISTS `lib_address`;

CREATE TABLE `lib_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `REGION` varchar(255) DEFAULT NULL,
  `PROVINCE` varchar(255) DEFAULT NULL,
  `MUNICIPALITY` varchar(255) DEFAULT NULL,
  `BARANGAY` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1292 DEFAULT CHARSET=utf8;

/*Table structure for table `lib_comp` */

DROP TABLE IF EXISTS `lib_comp`;

CREATE TABLE `lib_comp` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_desc` varchar(100) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `lib_programs` */

DROP TABLE IF EXISTS `lib_programs`;

CREATE TABLE `lib_programs` (
  `program_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcomp_id` int(11) DEFAULT NULL,
  `program` varchar(100) COLLATE ascii_bin DEFAULT NULL,
  `descriprion` varchar(300) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`program_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `lib_subcomp` */

DROP TABLE IF EXISTS `lib_subcomp`;

CREATE TABLE `lib_subcomp` (
  `subcomp_id` int(11) NOT NULL AUTO_INCREMENT,
  `subcomp` varchar(100) COLLATE ascii_bin DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`subcomp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `mode` */

DROP TABLE IF EXISTS `mode`;

CREATE TABLE `mode` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ohm` text DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  `desciption` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Table structure for table `roster` */

DROP TABLE IF EXISTS `roster`;

CREATE TABLE `roster` (
  `REGION` varchar(255) DEFAULT NULL,
  `PROVINCE` varchar(255) DEFAULT NULL,
  `MUNICIPALITY` varchar(255) DEFAULT NULL,
  `BARANGAY` varchar(255) DEFAULT NULL,
  `PUROK` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  `HOUSEHOLD_ID` varchar(255) DEFAULT NULL,
  `ENTRY_ID` double NOT NULL,
  `LAST_NAME` varchar(255) DEFAULT NULL,
  `FIRST_NAME` varchar(255) DEFAULT NULL,
  `MID_NAME` varchar(255) DEFAULT NULL,
  `EXT_NAME` varchar(255) DEFAULT NULL,
  `HH_GRANTEE` varchar(255) DEFAULT NULL,
  `CHILD_BENE` varchar(255) DEFAULT NULL,
  `MONITORED_EDUC` varchar(255) DEFAULT NULL,
  `BIRTHDAY` date DEFAULT NULL,
  `AGE` int(11) DEFAULT NULL,
  `REL_HH` varchar(255) DEFAULT NULL,
  `SEX` varchar(255) DEFAULT NULL,
  `PREGNANT_STATUS` varchar(255) DEFAULT NULL,
  `DISABLED` varchar(255) DEFAULT NULL,
  `ATTEND_SCHOOL` varchar(255) DEFAULT NULL,
  `REASON_FOR_NOT_ATTENDING` varchar(255) DEFAULT NULL,
  `DATE_REASON` date DEFAULT NULL,
  `GRADE_LEVEL` varchar(255) DEFAULT NULL,
  `SCHOOL_NAME` varchar(255) DEFAULT NULL,
  `DOMINANT_SCHOOL` varchar(255) DEFAULT NULL,
  `HC_NAME` varchar(255) DEFAULT NULL,
  `REGISTERED` varchar(255) DEFAULT NULL,
  `CLIENT_STATUS` varchar(255) DEFAULT NULL,
  `MEMBER_STATUS` varchar(255) DEFAULT NULL,
  `IP_AFFILIATION` varchar(255) DEFAULT NULL,
  `MODE_OF_PAYMENT` varchar(255) DEFAULT NULL,
  `HH_SET` int(11) DEFAULT NULL,
  `SET_GROUP` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ENTRY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `swdi` */

DROP TABLE IF EXISTS `swdi`;

CREATE TABLE `swdi` (
  `HOUSEHOLD_ID` varchar(255) NOT NULL,
  `LASTNAME` varchar(255) DEFAULT NULL,
  `FIRSTNAME` varchar(255) DEFAULT NULL,
  `MIDDLENAME` varchar(255) DEFAULT NULL,
  `EXT` varchar(255) DEFAULT NULL,
  `psgc_region` double DEFAULT NULL,
  `psgc_province` double DEFAULT NULL,
  `psgc_city` double DEFAULT NULL,
  `psgc_brgy` double DEFAULT NULL,
  `ES1` double DEFAULT NULL,
  `ES2` double DEFAULT NULL,
  `C1` double DEFAULT NULL,
  `C2` double DEFAULT NULL,
  `C3` double DEFAULT NULL,
  `C4` double DEFAULT NULL,
  `Total Income` double DEFAULT NULL,
  `Family Size` double DEFAULT NULL,
  `pc_inc` double DEFAULT NULL,
  `mpc_inc` double DEFAULT NULL,
  `mppc_pov_treshold` double DEFAULT NULL,
  `mppc_food_threshold` double DEFAULT NULL,
  `ES3` double DEFAULT NULL,
  `ES4` double DEFAULT NULL,
  `EconSuff` double DEFAULT NULL,
  `HCS1` double DEFAULT NULL,
  `HCS2` double DEFAULT NULL,
  `HCS` double DEFAULT NULL,
  `NC1` double DEFAULT NULL,
  `NC2` double DEFAULT NULL,
  `NC` double DEFAULT NULL,
  `WCS1` double DEFAULT NULL,
  `WCS2` double DEFAULT NULL,
  `WCS3` double DEFAULT NULL,
  `WCS` double DEFAULT NULL,
  `SA1` double DEFAULT NULL,
  `HC1` varchar(255) DEFAULT NULL,
  `HC2` double DEFAULT NULL,
  `HC3` double DEFAULT NULL,
  `HC4` double DEFAULT NULL,
  `SA2` double DEFAULT NULL,
  `EC1` double DEFAULT NULL,
  `EC2` double DEFAULT NULL,
  `SA3` double DEFAULT NULL,
  `RP1` double DEFAULT NULL,
  `RP2` double DEFAULT NULL,
  `RP3` double DEFAULT NULL,
  `SA4` double DEFAULT NULL,
  `FA1` double DEFAULT NULL,
  `FA2` double DEFAULT NULL,
  `FA3` double DEFAULT NULL,
  `SA5` double DEFAULT NULL,
  `SocAdeq` double DEFAULT NULL,
  `SWDI_SCORE` double DEFAULT NULL,
  `LOWB` double DEFAULT NULL,
  PRIMARY KEY (`HOUSEHOLD_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `test` */

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(80) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `assignment` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `approved` int(11) DEFAULT 0,
  `status` varchar(20) DEFAULT 'Active',
  `picture` longblob DEFAULT NULL,
  `picture_size` varchar(40) DEFAULT NULL,
  `picture_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.8-MariaDB : Database - biometric_dtrsys
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`biometric_dtrsys` /*!40100 DEFAULT CHARACTER SET ascii COLLATE ascii_bin */;

USE `biometric_dtrsys`;

/*Table structure for table `backups` */

DROP TABLE IF EXISTS `backups`;

CREATE TABLE `backups` (
  `backupid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(200) COLLATE ascii_bin DEFAULT NULL,
  `description` varchar(1000) COLLATE ascii_bin DEFAULT NULL,
  `filedate` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`backupid`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `dtr` */

DROP TABLE IF EXISTS `dtr`;

CREATE TABLE `dtr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_ID` int(11) DEFAULT NULL,
  `LOG` datetime DEFAULT NULL,
  `TAG` int(11) DEFAULT NULL,
  `DATE_UPLOADED` datetime DEFAULT NULL,
  `KEY` int(1) DEFAULT 0,
  `IGNORE` int(11) DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14494 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `dtr_for_deletion` */

DROP TABLE IF EXISTS `dtr_for_deletion`;

CREATE TABLE `dtr_for_deletion` (
  `ID` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `dump` */

DROP TABLE IF EXISTS `dump`;

CREATE TABLE `dump` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_ID` int(11) DEFAULT NULL,
  `LOG` datetime DEFAULT NULL,
  `TAG` int(11) DEFAULT NULL,
  `DATE_UPLOADED` datetime DEFAULT NULL,
  `KEY` int(1) DEFAULT 0,
  `uid` varchar(200) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` blob DEFAULT NULL,
  `description` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `metadata` */

DROP TABLE IF EXISTS `metadata`;

CREATE TABLE `metadata` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMP_ID` int(11) DEFAULT NULL,
  `LOG` datetime DEFAULT NULL,
  `TAG` int(11) DEFAULT NULL,
  `DATE_UPLOADED` datetime DEFAULT NULL,
  `KEY` int(1) DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32769 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FULLNAME` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `EMP_ID` int(6) DEFAULT NULL,
  `CATEGORY` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `ISACTIVE` int(1) DEFAULT 1,
  `ISFLEXI` int(1) DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1557 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  `desciption` varchar(1000) DEFAULT NULL,
  `client_registration` tinyint(1) DEFAULT 0,
  `client_deletion` tinyint(1) DEFAULT 0,
  `payment_encoding` tinyint(1) DEFAULT 0,
  `mcpr_generation` tinyint(1) DEFAULT 0,
  `incentives_module` tinyint(1) DEFAULT 0,
  `audittrail` tinyint(1) DEFAULT 0,
  `settings_useraccounts` tinyint(1) DEFAULT 0,
  `settings_accessroles` tinyint(1) DEFAULT 0,
  `settings_dbbackup` tinyint(1) DEFAULT 0,
  `settings_dbrestore` tinyint(1) DEFAULT 0,
  `filemaintenance_agents` tinyint(1) DEFAULT 0,
  `filemaintenance_branches` tinyint(1) DEFAULT 0,
  `filemaintenance_plans` tinyint(1) DEFAULT 0,
  `reports_incentives` tinyint(1) DEFAULT 0,
  `reports_audittrails` tinyint(1) DEFAULT 0,
  `accounting` tinyint(1) DEFAULT 0,
  `burial` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `ulog` */

DROP TABLE IF EXISTS `ulog`;

CREATE TABLE `ulog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_date` datetime DEFAULT NULL,
  `date_uploaded` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(80) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `approved` int(11) DEFAULT 0,
  `status` varchar(20) DEFAULT 'Disabled',
  `picture` longblob DEFAULT NULL,
  `picture_size` varchar(40) DEFAULT NULL,
  `picture_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=563 DEFAULT CHARSET=utf8;

/* Procedure structure for procedure `mysqli_sync_time` */

/*!50003 DROP PROCEDURE IF EXISTS  `mysqli_sync_time` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`12-ppp-0001-01.entdswd.local` PROCEDURE `mysqli_sync_time`(IN MONTHNO INT, IN YEARNO INT)
BEGIN
	SELECT 
	EMP_ID,DATE(LOG) AS `DATE`,
	IF (TAG=1,TIME(LOG),'') AS AI,
	IF (TAG=2,TIME(LOG),'') AS AO,
	IF (TAG=3,TIME(LOG),'') AS PI,
	IF (TAG=4,TIME(LOG),'') AS PO
	FROM dtr  
	WHERE EMP_ID IN (1562,923) 
	AND YEAR(LOG)=YEARNO AND MONTH(LOG)=MONTHNO 
	AND DATE(LOG) >= '2019-10-1'
	GROUP BY DATE(LOG), EMP_ID, TAG;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_dtr_addentry` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_dtr_addentry` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_dtr_addentry`(IN aemp_id INT, IN alogtime DATETIME, IN amode INT)
BEGIN
    IF ( SELECT EXISTS (SELECT * FROM dtr WHERE EMP_ID = aemp_id AND DATE(`log`) =DATE(alogtime) AND tag=amode) ) THEN 
	SELECT 1;
    ELSE
        INSERT INTO dtr (`EMP_ID`,`LOG`,TAG,DATE_UPLOADED) VALUES (aemp_id,alogtime,amode,NOW());
    END IF; 
    
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_dtr_updateentry` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_dtr_updateentry` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_dtr_updateentry`(IN aemp_id INT, IN alogtime DATETIME, IN nlogtime DATETIME)
BEGIN
   UPDATE dtr 
	SET `LOG` = nlogtime
   WHERE  `EMP_ID` = aemp_id AND `LOG`= alogtime;
   
    
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_pvt_dtr` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_pvt_dtr` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`12-ppp-0001-01.entdswd.local` PROCEDURE `sp_pvt_dtr`(IN P_EMP_ID INT, IN P_START  DATE,IN  P_END DATE )
BEGIN
	DROP TEMPORARY TABLE IF EXISTS d0;
	DROP TEMPORARY TABLE IF EXISTS d1;
	DROP TEMPORARY TABLE IF EXISTS d2;
	DROP TEMPORARY TABLE IF EXISTS d3;
	DROP TEMPORARY TABLE IF EXISTS d4;
		
	CREATE TEMPORARY TABLE d0
	SELECT
	  DISTINCT
	  EMP_ID,
	  DATE(LOG) AS DATE
	FROM
	  dtr 
	WHERE 
	emp_id=P_EMP_ID
	and date(log) between P_START AND P_END
	;
	CREATE TEMPORARY TABLE d1
	SELECT
	  DISTINCT
	  EMP_ID,
	  DATE(LOG) AS DATE,
	  DATE_FORMAT(LOG, "%H:%i") AS TIME
	FROM
	  dtr 
	WHERE 
	emp_id=P_EMP_ID
	AND DATE(LOG) BETWEEN P_START AND P_END
	AND tag =1; 
	
	CREATE TEMPORARY TABLE d2
	SELECT
	  DISTINCT
	  EMP_ID,
	  DATE(LOG) AS DATE,
	  DATE_FORMAT(LOG, "%H:%i") AS TIME
	FROM
	  dtr 
	WHERE 
	emp_id=P_EMP_ID
	AND DATE(LOG) BETWEEN P_START AND P_END
	AND tag =2; 
	
	CREATE TEMPORARY TABLE d3
	SELECT
	  DISTINCT
	  EMP_ID,
	  DATE(LOG) AS DATE,
	  DATE_FORMAT(LOG, "%H:%i") AS TIME
	FROM
	  dtr 
	WHERE 
	emp_id=P_EMP_ID
	AND DATE(LOG) BETWEEN P_START AND P_END
	AND tag =4; 
	
	CREATE TEMPORARY TABLE d4
	SELECT
	  DISTINCT
	  EMP_ID,
	  DATE(LOG) AS DATE,
	  DATE_FORMAT(log, "%H:%i") AS TIME
	FROM
	  dtr 
	WHERE 
	emp_id=P_EMP_ID
	AND DATE(LOG) BETWEEN P_START AND P_END
	AND tag =4; 
	
	select 
	 d0.EMP_ID
	,d0.`DATE` 
	,d1.`TIME` AS 'AM IN'
	,d2.`TIME` AS 'AM OUT' 
	,d3.`TIME` AS 'PM IN' 
	,d4.`TIME` AS 'PM OUT'
	FROM d0
	LEFT JOIN d1 ON d1.emp_id=d0.emp_id AND d0.DATE = d1.DATE 
	LEFT JOIN d2 ON d2.emp_id=d0.emp_id AND d0.DATE = d2.DATE
	LEFT JOIN d3 ON d3.emp_id=d0.emp_id AND d0.DATE = d3.DATE
	LEFT JOIN d4 ON d3.emp_id=d0.emp_id AND d0.DATE = d4.DATE
	ORDER BY d0.date
	;
	
	
				
	DROP TEMPORARY TABLE d0;
	DROP TEMPORARY TABLE d1;
	DROP TEMPORARY TABLE d2;
	DROP TEMPORARY TABLE d3;
	DROP TEMPORARY TABLE d4;
	
	
	
	
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

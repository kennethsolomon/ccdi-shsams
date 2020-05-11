-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 02:21 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(250) NOT NULL AUTO_INCREMENT,
  `usrid` varchar(250) NOT NULL,
  `usr_name` varchar(150) NOT NULL,
  `usr_pass` varchar(150) NOT NULL,
  `email_add` text,
  `usr_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`account_id`),
  KEY `usrid` (`usrid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `account_det`
--
CREATE TABLE IF NOT EXISTS `account_det` (
`account_id` int(250)
,`usrid` varchar(250)
,`usr_name` varchar(150)
,`usr_pass` varchar(150)
,`email_add` text
,`usr_status` varchar(50)
,`identification_number` varchar(250)
,`card_number` varchar(150)
,`last_name` varchar(150)
,`first_name` varchar(150)
,`middle_name` varchar(150)
,`address` text
,`gender` varchar(50)
,`birthday` varchar(50)
,`trck_str` varchar(150)
,`year_level` int(50)
,`section` varchar(150)
,`contact_person` varchar(250)
,`contact_number` varchar(50)
,`per_status` varchar(50)
,`st_picture` longblob
);
-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `trxn_num` int(200) NOT NULL AUTO_INCREMENT,
  `announce_desc` text NOT NULL,
  `announce_date` text,
  `dateencode` varchar(100) DEFAULT NULL,
  `announce_subj` varchar(50) DEFAULT NULL,
  `announce_stat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`trxn_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(200) NOT NULL AUTO_INCREMENT,
  `usr_id` varchar(250) NOT NULL,
  `datein` varchar(50) NOT NULL,
  `timein` varchar(50) NOT NULL,
  `timeout` varchar(50) DEFAULT NULL,
  `att_status` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`attendance_id`),
  KEY `usr_id` (`usr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `grd_attendance`
--
CREATE TABLE IF NOT EXISTS `grd_attendance` (
`identification_number` varchar(250)
,`card_number` varchar(150)
,`last_name` varchar(150)
,`first_name` varchar(150)
,`middle_name` varchar(150)
,`address` text
,`gender` varchar(50)
,`birthday` varchar(50)
,`trck_str` varchar(150)
,`year_level` int(50)
,`section` varchar(150)
,`contact_person` varchar(250)
,`contact_number` varchar(50)
,`per_status` varchar(50)
,`st_picture` longblob
,`attendance_id` int(200)
,`usr_id` varchar(250)
,`datein` varchar(50)
,`timein` varchar(50)
,`timeout` varchar(50)
,`att_status` varchar(250)
);
-- --------------------------------------------------------

--
-- Table structure for table `per_files`
--

CREATE TABLE IF NOT EXISTS `per_files` (
  `identification_number` varchar(250) NOT NULL,
  `card_number` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) DEFAULT NULL,
  `address` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `trck_str` varchar(150) DEFAULT NULL,
  `year_level` int(50) DEFAULT NULL,
  `section` varchar(150) DEFAULT NULL,
  `contact_person` varchar(250) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL,
  `per_status` varchar(50) DEFAULT NULL,
  `st_picture` longblob,
  PRIMARY KEY (`identification_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `account_det`
--
DROP TABLE IF EXISTS `account_det`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `account_det` AS select `account`.`account_id` AS `account_id`,`account`.`usrid` AS `usrid`,`account`.`usr_name` AS `usr_name`,`account`.`usr_pass` AS `usr_pass`,`account`.`email_add` AS `email_add`,`account`.`usr_status` AS `usr_status`,`per_files`.`identification_number` AS `identification_number`,`per_files`.`card_number` AS `card_number`,`per_files`.`last_name` AS `last_name`,`per_files`.`first_name` AS `first_name`,`per_files`.`middle_name` AS `middle_name`,`per_files`.`address` AS `address`,`per_files`.`gender` AS `gender`,`per_files`.`birthday` AS `birthday`,`per_files`.`trck_str` AS `trck_str`,`per_files`.`year_level` AS `year_level`,`per_files`.`section` AS `section`,`per_files`.`contact_person` AS `contact_person`,`per_files`.`contact_number` AS `contact_number`,`per_files`.`per_status` AS `per_status`,`per_files`.`st_picture` AS `st_picture` from (`account` join `per_files`) where ((`per_files`.`identification_number` = `account`.`usrid`) and ((`per_files`.`per_status` = 'Administrator') or (`per_files`.`per_status` = 'Security Guard')));

-- --------------------------------------------------------

--
-- Structure for view `grd_attendance`
--
DROP TABLE IF EXISTS `grd_attendance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `grd_attendance` AS select `per_files`.`identification_number` AS `identification_number`,`per_files`.`card_number` AS `card_number`,`per_files`.`last_name` AS `last_name`,`per_files`.`first_name` AS `first_name`,`per_files`.`middle_name` AS `middle_name`,`per_files`.`address` AS `address`,`per_files`.`gender` AS `gender`,`per_files`.`birthday` AS `birthday`,`per_files`.`trck_str` AS `trck_str`,`per_files`.`year_level` AS `year_level`,`per_files`.`section` AS `section`,`per_files`.`contact_person` AS `contact_person`,`per_files`.`contact_number` AS `contact_number`,`per_files`.`per_status` AS `per_status`,`per_files`.`st_picture` AS `st_picture`,`attendance`.`attendance_id` AS `attendance_id`,`attendance`.`usr_id` AS `usr_id`,`attendance`.`datein` AS `datein`,`attendance`.`timein` AS `timein`,`attendance`.`timeout` AS `timeout`,`attendance`.`att_status` AS `att_status` from (`per_files` join `attendance`) where (`per_files`.`identification_number` = `attendance`.`usr_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`usrid`) REFERENCES `per_files` (`identification_number`) ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`usr_id`) REFERENCES `per_files` (`identification_number`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

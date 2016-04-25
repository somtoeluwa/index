-- Adminer 4.2.4 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `bugs`;
CREATE TABLE `bugs` (
  `bugID` int(10) NOT NULL AUTO_INCREMENT,
  `bugName` varchar(20) DEFAULT NULL,
  `BugSummary` varchar(300) DEFAULT NULL,
  `BugCategory` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`bugID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bugs` (`bugID`, `bugName`, `BugSummary`, `BugCategory`) VALUES
(1,	'StageFright Bug',	'Stagefright is the collective name for a group of software bugs, that affect versions 2.2 and newer of the Android operating system, allowing an attacker to perform arbitrary operations on the victim device through remote code execution and privilege escalation.',	'Android Bug'),
(2,	'Dr Crabbs Evil Bug',	'The DCEB is a very powerful and fictional bug that infects iOS devices and does absolutely nothing at all. Its only purpose is to provide dummy data for assessed labs',	'iOS Bug'),
(3,	'MicroHard Bug',	'The MicroHard bug infects windows machines and makes them harder to use. So hard to use infact that it renders them more useless than they would be in the first place.',	'Microsoft Bug');

-- 2016-04-25 09:21:18

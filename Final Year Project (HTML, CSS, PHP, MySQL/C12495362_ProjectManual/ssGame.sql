-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2016 at 04:55 PM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ssGame`
--
CREATE DATABASE IF NOT EXISTS `ssGame` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ssGame`;

-- --------------------------------------------------------

--
-- Table structure for table `4slot`
--

CREATE TABLE IF NOT EXISTS `4slot` (
  `name` varchar(255) NOT NULL DEFAULT '0',
  `pot` int(11) NOT NULL DEFAULT '0',
  `pot2` int(11) NOT NULL DEFAULT '0',
  `pot3` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4slot`
--

INSERT INTO `4slot` (`name`, `pot`, `pot2`, `pot3`) VALUES
('1', 100, 1000, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `a_text` text NOT NULL,
  `a_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`a_text`, `a_time`) VALUES
('This is an announcement', 1460248568);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `appID` int(11) NOT NULL AUTO_INCREMENT,
  `appUSER` int(11) NOT NULL DEFAULT '0',
  `appGANG` int(11) NOT NULL DEFAULT '0',
  `appTEXT` text NOT NULL,
  PRIMARY KEY (`appID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attacklogs`
--

CREATE TABLE IF NOT EXISTS `attacklogs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `attacker` int(11) NOT NULL DEFAULT '0',
  `attacked` int(11) NOT NULL DEFAULT '0',
  `result` enum('won','lost') NOT NULL DEFAULT 'won',
  `time` int(11) NOT NULL DEFAULT '0',
  `stole` int(11) NOT NULL DEFAULT '0',
  `attacklog` longtext NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `attacklogs`
--

INSERT INTO `attacklogs` (`log_id`, `attacker`, `attacked`, `result`, `time`, `stole`, `attacklog`) VALUES
(2, 3, 10, 'won', 1460277798, -2, '<font color=red>1. Using her Gun carltest hit demoStr doing 1736 damage (-1436)</font><br />\n'),
(3, 3, 11, 'won', 1460277829, -2, '<font color=red>1. carltest tried to hit demoAgility but missed (300)</font><br />\n<font color=blue>2. demoAgility tried to hit carltest but missed (200)</font><br />\n<font color=red>3. carltest tried to hit demoAgility but missed (300)</font><br />\n<font color=blue>4. Using her Fists demoAgility hit carltest doing 1 damage (199)</font><br />\n<font color=red>5. carltest tried to hit demoAgility but missed (300)</font><br />\n<font color=blue>6. Using her Fists demoAgility hit carltest doing 1 damage (198)</font><br />\n<font color=red>7. carltest tried to hit demoAgility but missed (300)</font><br />\n<font color=blue>8. Using her Fists demoAgility hit carltest doing 1 damage (197)</font><br />\n<font color=red>9. carltest tried to hit demoAgility but missed (300)</font><br />\n<font color=blue>10. Using her Fists demoAgility hit carltest doing 1 damage (196)</font><br />\n<font color=red>11. carltest tried to hit demoAgility but missed (300)</font><br />\n<font color=blue>12. Using her Fists demoAgility hit carltest doing 1 damage (195)</font><br />\n<font color=red>13. carltest tried to hit demoAgility but missed (300)</font><br />\n<font color=blue>14. Using her Fists demoAgility hit carltest doing 1 damage (194)</font><br />\n<font color=red>15. carltest tried to hit demoAgility but missed (300)</font><br />\n<font color=blue>16. Using her Fists demoAgility hit carltest doing 1 damage (193)</font><br />\n<font color=red>17. carltest tried to hit demoAgility but missed (300)</font><br />\n<font color=blue>18. Using her Fists demoAgility hit carltest doing 1 damage (192)</font><br />\n<font color=red>19. Using her Gun carltest hit demoAgility doing 1480 damage (-1180)</font><br />\n'),
(4, 3, 12, 'won', 1460277861, -2, '<font color=red>1. Using her Gun carltest hit demoBrawn doing 12 damage (288)</font><br />\n<font color=blue>2. demoBrawn tried to hit carltest but missed (192)</font><br />\n<font color=red>3. Using her Gun carltest hit demoBrawn doing 17 damage (271)</font><br />\n<font color=blue>4. demoBrawn tried to hit carltest but missed (192)</font><br />\n<font color=red>5. Using her Gun carltest hit demoBrawn doing 14 damage (257)</font><br />\n<font color=blue>6. demoBrawn tried to hit carltest but missed (192)</font><br />\n<font color=red>7. Using her Gun carltest hit demoBrawn doing 5 damage (252)</font><br />\n<font color=blue>8. Using her Fists demoBrawn hit carltest doing 1 damage (191)</font><br />\n<font color=red>9. Using her Gun carltest hit demoBrawn doing 17 damage (235)</font><br />\n<font color=blue>10. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>11. Using her Gun carltest hit demoBrawn doing 16 damage (219)</font><br />\n<font color=blue>12. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>13. Using her Gun carltest hit demoBrawn doing 15 damage (204)</font><br />\n<font color=blue>14. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>15. Using her Gun carltest hit demoBrawn doing 15 damage (189)</font><br />\n<font color=blue>16. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>17. Using her Gun carltest hit demoBrawn doing 12 damage (177)</font><br />\n<font color=blue>18. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>19. Using her Gun carltest hit demoBrawn doing 17 damage (160)</font><br />\n<font color=blue>20. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>21. Using her Gun carltest hit demoBrawn doing 12 damage (148)</font><br />\n<font color=blue>22. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>23. Using her Gun carltest hit demoBrawn doing 15 damage (133)</font><br />\n<font color=blue>24. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>25. Using her Gun carltest hit demoBrawn doing 16 damage (117)</font><br />\n<font color=blue>26. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>27. Using her Gun carltest hit demoBrawn doing 13 damage (104)</font><br />\n<font color=blue>28. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>29. Using her Gun carltest hit demoBrawn doing 12 damage (92)</font><br />\n<font color=blue>30. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>31. carltest tried to hit demoBrawn but missed (92)</font><br />\n<font color=blue>32. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>33. Using her Gun carltest hit demoBrawn doing 13 damage (79)</font><br />\n<font color=blue>34. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>35. Using her Gun carltest hit demoBrawn doing 16 damage (63)</font><br />\n<font color=blue>36. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>37. Using her Gun carltest hit demoBrawn doing 15 damage (48)</font><br />\n<font color=blue>38. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>39. Using her Gun carltest hit demoBrawn doing 5 damage (43)</font><br />\n<font color=blue>40. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>41. Using her Gun carltest hit demoBrawn doing 16 damage (27)</font><br />\n<font color=blue>42. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>43. Using her Gun carltest hit demoBrawn doing 13 damage (14)</font><br />\n<font color=blue>44. demoBrawn tried to hit carltest but missed (191)</font><br />\n<font color=red>45. Using her Gun carltest hit demoBrawn doing 16 damage (-2)</font><br />\n'),
(5, 3, 13, 'won', 1460277872, -2, '<font color=red>1. Using her Gun carltest hit demoAccuracy doing 1634 damage (-1334)</font><br />\n'),
(6, 1, 10, 'won', 1460298681, -2, '<font color=red>1. Using his Gun carlmacdiarmada hit demoStr doing 177631486 damage (-177631186)</font><br />\n');

-- --------------------------------------------------------

--
-- Table structure for table `bankxferlogs`
--

CREATE TABLE IF NOT EXISTS `bankxferlogs` (
  `cxID` int(11) NOT NULL AUTO_INCREMENT,
  `cxFROM` int(11) NOT NULL DEFAULT '0',
  `cxTO` int(11) NOT NULL DEFAULT '0',
  `cxAMOUNT` int(11) NOT NULL DEFAULT '0',
  `cxTIME` int(11) NOT NULL DEFAULT '0',
  `cxFROMIP` varchar(15) NOT NULL DEFAULT '127.0.0.1',
  `cxTOIP` varchar(15) NOT NULL DEFAULT '127.0.0.1',
  `cxBANK` enum('bank','cyber') NOT NULL DEFAULT 'bank',
  PRIMARY KEY (`cxID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `battle_ladders`
--

CREATE TABLE IF NOT EXISTS `battle_ladders` (
  `ladderId` int(11) NOT NULL AUTO_INCREMENT,
  `ladderName` varchar(255) NOT NULL DEFAULT '',
  `ladderLevel` int(11) NOT NULL,
  PRIMARY KEY (`ladderId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `battle_ladders`
--

INSERT INTO `battle_ladders` (`ladderId`, `ladderName`, `ladderLevel`) VALUES
(1, 'Beginner league', 0),
(2, 'Amateur league', 5),
(3, 'Professional league', 10),
(4, 'Master league', 15);

-- --------------------------------------------------------

--
-- Table structure for table `battle_members`
--

CREATE TABLE IF NOT EXISTS `battle_members` (
  `bmemberId` int(11) NOT NULL AUTO_INCREMENT,
  `bmemberUser` int(11) NOT NULL,
  `bmemberLadder` int(11) NOT NULL,
  `bmemberScore` int(11) NOT NULL,
  `bmemberWins` int(11) NOT NULL,
  `bmemberLosses` int(11) NOT NULL,
  PRIMARY KEY (`bmemberId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE IF NOT EXISTS `blacklist` (
  `bl_ID` int(11) NOT NULL AUTO_INCREMENT,
  `bl_ADDER` int(11) NOT NULL DEFAULT '0',
  `bl_ADDED` int(11) NOT NULL DEFAULT '0',
  `bl_COMMENT` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`bl_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE IF NOT EXISTS `businesses` (
  `busId` int(11) NOT NULL AUTO_INCREMENT,
  `busName` varchar(255) NOT NULL,
  `busClass` int(11) NOT NULL,
  `busDirector` int(11) NOT NULL,
  `busProfit` bigint(25) NOT NULL,
  `busYProfit` bigint(25) NOT NULL,
  `busCust` int(11) NOT NULL,
  `busYCust` int(11) NOT NULL,
  `busCash` int(11) NOT NULL,
  `busDebt` int(11) NOT NULL,
  `busImage` varchar(255) NOT NULL,
  `busDays` bigint(32) NOT NULL DEFAULT '0',
  `busEmployees` int(11) NOT NULL DEFAULT '0',
  `brank` int(11) NOT NULL DEFAULT '0',
  `busDesc` varchar(50) NOT NULL,
  `bussecurity` int(11) NOT NULL DEFAULT '0',
  `bussecure` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`busId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`busId`, `busName`, `busClass`, `busDirector`, `busProfit`, `busYProfit`, `busCust`, `busYCust`, `busCash`, `busDebt`, `busImage`, `busDays`, `busEmployees`, `brank`, `busDesc`, `bussecurity`, `bussecure`) VALUES
(3, 'The Patriots', 2, 1, 0, 0, 0, 0, 0, 0, '', 0, 4, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `businesses_alerts`
--

CREATE TABLE IF NOT EXISTS `businesses_alerts` (
  `alertId` int(11) NOT NULL AUTO_INCREMENT,
  `alertBusiness` int(11) NOT NULL DEFAULT '0',
  `alertTime` int(11) NOT NULL DEFAULT '0',
  `alertText` text NOT NULL,
  PRIMARY KEY (`alertId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `businesses_apps`
--

CREATE TABLE IF NOT EXISTS `businesses_apps` (
  `appId` int(11) NOT NULL AUTO_INCREMENT,
  `appMember` int(11) NOT NULL,
  `appBusiness` int(11) NOT NULL,
  `appText` text NOT NULL,
  `appTime` int(11) NOT NULL,
  PRIMARY KEY (`appId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `businesses_classes`
--

CREATE TABLE IF NOT EXISTS `businesses_classes` (
  `classId` int(11) NOT NULL AUTO_INCREMENT,
  `className` varchar(255) NOT NULL,
  `classDesc` text NOT NULL,
  `classMembers` int(11) NOT NULL,
  `classCost` int(11) NOT NULL,
  PRIMARY KEY (`classId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `businesses_classes`
--

INSERT INTO `businesses_classes` (`classId`, `className`, `classDesc`, `classMembers`, `classCost`) VALUES
(1, 'Fireworks stand', 'Our customers will explode in delight with our fireworks. Great for holidays or any special event.', 4, 500000),
(2, 'Hair salon', 'A hair salon is a place where one goes to get their hair cut, as well as styled, highlighted or coloured.', 4, 750000),
(3, 'Law firm', 'A law firm is a business entity formed by one or more lawyers to engage in the practice of law. The money made is determined by the work hours the company sells. The amount of employees will increase this, aswell as the hired lawyers stats.', 6, 4000000),
(4, 'Flower shop', 'A store where flowers are purchased.', 4, 100000),
(5, 'Car dealership', 'Our customers need transportation. Sell them our best and send them on their way.', 8, 6000000),
(6, 'Football Club', 'Lead the way with your team and become the champions.', 10, 12000000);

-- --------------------------------------------------------

--
-- Table structure for table `businesses_members`
--

CREATE TABLE IF NOT EXISTS `businesses_members` (
  `bmembId` int(11) NOT NULL AUTO_INCREMENT,
  `bmembMember` int(11) NOT NULL,
  `bmembBusiness` int(11) NOT NULL DEFAULT '0',
  `bmembCash` int(11) NOT NULL,
  `bmembRank` int(11) NOT NULL DEFAULT '0',
  `bmembDays` bigint(32) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bmembId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `businesses_ranks`
--

CREATE TABLE IF NOT EXISTS `businesses_ranks` (
  `rankId` int(11) NOT NULL AUTO_INCREMENT,
  `rankName` varchar(255) NOT NULL,
  `rankClass` int(11) NOT NULL,
  `rankCash` int(11) NOT NULL,
  `rankPrim` enum('labour','IQ','strength') NOT NULL,
  `rankSec` enum('labour','IQ','strength') NOT NULL,
  `rankPGain` decimal(11,2) NOT NULL,
  `rankSGain` decimal(11,2) NOT NULL,
  PRIMARY KEY (`rankId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `businesses_ranks`
--

INSERT INTO `businesses_ranks` (`rankId`, `rankName`, `rankClass`, `rankCash`, `rankPrim`, `rankSec`, `rankPGain`, `rankSGain`) VALUES
(1, 'Sales person', 1, 1000, 'IQ', 'labour', '30.50', '15.25'),
(2, 'Product manager', 1, 2500, 'labour', 'strength', '20.00', '10.00'),
(3, 'Cashier', 1, 5000, 'IQ', 'strength', '25.00', '12.00'),
(4, 'Stylist', 2, 800, 'IQ', 'labour', '25.00', '12.50'),
(5, 'Cleaner', 2, 1400, 'labour', 'strength', '20.00', '10.00'),
(6, 'Shampooist', 2, 2100, 'strength', 'labour', '25.00', '12.50'),
(7, 'Lawyer', 3, 1200, 'IQ', 'labour', '40.00', '20.00'),
(8, 'Cleaner', 3, 800, 'labour', 'strength', '20.00', '10.00'),
(9, 'Receptionist', 3, 600, 'IQ', 'labour', '30.00', '15.00'),
(10, 'Florist', 4, 500, 'labour', 'strength', '25.00', '12.50'),
(11, 'Cleaner', 4, 750, 'labour', 'IQ', '20.00', '10.00'),
(12, 'Salesman', 5, 3400, 'labour', 'strength', '30.00', '15.00'),
(13, 'Cleaner', 5, 1400, 'labour', 'strength', '20.00', '10.00'),
(14, 'Receptionist', 5, 900, 'IQ', 'labour', '34.00', '17.00'),
(15, 'Referee', 6, 3150, 'labour', 'strength', '15.00', '10.00'),
(16, 'Player', 6, 3500, 'labour', 'IQ', '28.00', '7.00'),
(17, 'Goal Keeper', 6, 3100, 'labour', 'strength', '25.00', '7.00');

-- --------------------------------------------------------

--
-- Table structure for table `cashxferlogs`
--

CREATE TABLE IF NOT EXISTS `cashxferlogs` (
  `cxID` int(11) NOT NULL AUTO_INCREMENT,
  `cxFROM` int(11) NOT NULL DEFAULT '0',
  `cxTO` int(11) NOT NULL DEFAULT '0',
  `cxAMOUNT` int(11) NOT NULL DEFAULT '0',
  `cxTIME` int(11) NOT NULL DEFAULT '0',
  `cxFROMIP` varchar(15) NOT NULL DEFAULT '127.0.0.1',
  `cxTOIP` varchar(15) NOT NULL DEFAULT '127.0.0.1',
  PRIMARY KEY (`cxID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `challengebots`
--

CREATE TABLE IF NOT EXISTS `challengebots` (
  `cb_npcid` int(11) NOT NULL DEFAULT '0',
  `cb_money` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challengebots`
--

INSERT INTO `challengebots` (`cb_npcid`, `cb_money`) VALUES
(7, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `challengesbeaten`
--

CREATE TABLE IF NOT EXISTS `challengesbeaten` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `npcid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(255) NOT NULL DEFAULT '',
  `citydesc` longtext NOT NULL,
  `cityminlevel` int(11) NOT NULL DEFAULT '0',
  `citytravtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cityid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityid`, `cityname`, `citydesc`, `cityminlevel`, `citytravtime`) VALUES
(1, 'Default City', 'A standard city added to start you off', 1, 0),
(2, 'Spain', 'This is where the illegal becomes legal', 1, 2),
(3, 'Las Vegas', 'This is where everyone goes to make the real money', 10, 5),
(4, 'Dubai', 'Relax, make money with ease', 25, 10),
(5, 'Argentina', 'The place where the innocent always gets blamed', 50, 20),
(6, 'Bahamas', 'Just relaxs and try to forget about your criminal life.', 90, 30),
(7, 'United States', 'Always wanted to vist? Now is your chance.', 150, 40),
(8, 'Tsu Teichu', 'A place well known for super weapons', 200, 50);

-- --------------------------------------------------------

--
-- Table structure for table `compspecials`
--

CREATE TABLE IF NOT EXISTS `compspecials` (
  `csID` int(11) NOT NULL AUTO_INCREMENT,
  `csNAME` varchar(255) NOT NULL DEFAULT '',
  `csJOB` int(11) NOT NULL DEFAULT '0',
  `csCOST` int(11) NOT NULL DEFAULT '0',
  `csMONEY` int(11) NOT NULL DEFAULT '0',
  `csCRYSTALS` int(11) NOT NULL DEFAULT '0',
  `csITEM` int(11) NOT NULL DEFAULT '0',
  `csENDU` int(11) NOT NULL DEFAULT '0',
  `csIQ` int(11) NOT NULL DEFAULT '0',
  `csLABOUR` int(11) NOT NULL DEFAULT '0',
  `csSTR` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`csID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `compspecials`
--

INSERT INTO `compspecials` (`csID`, `csNAME`, `csJOB`, `csCOST`, `csMONEY`, `csCRYSTALS`, `csITEM`, `csENDU`, `csIQ`, `csLABOUR`, `csSTR`) VALUES
(3, 'Labour Pack [ +100 ]', 6, 10, 0, 0, 0, 0, 0, 100, 0),
(4, 'Strength Pack [ +100 ]', 6, 10, 0, 0, 0, 0, 0, 0, 100),
(5, 'IQ Pack [ +100 ]', 6, 10, 0, 0, 0, 0, 100, 0, 0),
(6, 'Endurance Pack [ +100 ]', 6, 10, 0, 0, 0, 100, 0, 0, 0),
(7, 'Crystal Pack [ +25 ]', 6, 25, 0, 25, 0, 0, 0, 0, 0),
(8, 'Money Pack [ +5000 ]', 6, 25, 5000, 0, 0, 0, 0, 0, 0),
(9, 'Special Pack [ Every Other Pack ]', 6, 75, 5000, 25, 0, 100, 100, 100, 100),
(10, 'Labour Pack [ +100 ]', 5, 10, 0, 0, 0, 0, 0, 100, 0),
(11, 'Strength Pack [ +100 ]', 5, 10, 0, 0, 0, 0, 0, 0, 100),
(12, 'IQ Pack [ +100 ]', 5, 10, 0, 0, 0, 0, 100, 0, 0),
(13, 'Endurance Pack [ +100 ]', 5, 10, 0, 0, 0, 100, 0, 0, 0),
(14, 'Crystal Pack [ +25 ]', 5, 25, 0, 25, 0, 0, 0, 0, 0),
(15, 'Money Pack [ +5000 ]', 5, 25, 5000, 0, 0, 0, 0, 0, 0),
(16, 'Special Pack [ Every Other Pack ]', 5, 75, 5000, 25, 0, 100, 100, 100, 100),
(17, 'Labour Pack [ +100 ]', 4, 10, 0, 0, 0, 0, 0, 100, 0),
(18, 'Strength Pack [ +100 ]', 4, 10, 0, 0, 0, 0, 0, 0, 100),
(19, 'IQ Pack [ +100 ]', 4, 10, 0, 0, 0, 0, 100, 0, 0),
(20, 'Endurance Pack [ +100 ]', 4, 10, 0, 0, 0, 100, 0, 0, 0),
(21, 'Crystal Pack [ +25 ]', 4, 25, 0, 25, 0, 0, 0, 0, 0),
(22, 'Money Pack [ +5000 ]', 4, 25, 5000, 0, 0, 0, 0, 0, 0),
(23, 'Special Pack [ Every Other Pack ]', 4, 75, 5000, 25, 0, 100, 100, 100, 100),
(24, 'Labour Pack [ +100 ]', 3, 10, 0, 0, 0, 0, 0, 100, 0),
(25, 'Strength Pack [ +100 ]', 3, 10, 0, 0, 0, 0, 0, 0, 100),
(26, 'IQ Pack [ +100 ]', 3, 10, 0, 0, 0, 0, 100, 0, 0),
(27, 'Endurance Pack [ +100 ]', 3, 10, 0, 0, 0, 100, 0, 0, 0),
(28, 'Crystal Pack [ +25 ]', 3, 25, 0, 25, 0, 0, 0, 0, 0),
(29, 'Money Pack [ +5000 ]', 3, 25, 5000, 0, 0, 0, 0, 0, 0),
(30, 'Special Pack [ Every Other Pack ]', 3, 75, 5000, 25, 0, 100, 100, 100, 100),
(31, 'Labour Pack [ +100 ]', 2, 10, 0, 0, 0, 0, 0, 100, 0),
(32, 'Strength Pack [ +100 ]', 2, 10, 0, 0, 0, 0, 0, 0, 100),
(33, 'IQ Pack [ +100 ]', 2, 10, 0, 0, 0, 0, 100, 0, 0),
(34, 'Endurance Pack [ +100 ]', 2, 10, 0, 0, 0, 100, 0, 0, 0),
(35, 'Crystal Pack [ +25 ]', 2, 25, 0, 25, 0, 0, 0, 0, 0),
(36, 'Money Pack [ +5000 ]', 2, 25, 5000, 0, 0, 0, 0, 0, 0),
(37, 'Special Pack [ Every Other Pack ]', 2, 75, 5000, 25, 0, 100, 100, 100, 100),
(38, 'Labour Pack [ +100 ]', 1, 10, 0, 0, 0, 0, 0, 100, 0),
(39, 'Strength Pack [ +100 ]', 1, 10, 0, 0, 0, 0, 0, 0, 100),
(40, 'IQ Pack [ +100 ]', 1, 10, 0, 0, 0, 0, 100, 0, 0),
(41, 'Endurance Pack [ +100 ]', 1, 10, 0, 0, 0, 100, 0, 0, 0),
(42, 'Crystal Pack [ +25 ]', 1, 25, 0, 25, 0, 0, 0, 0, 0),
(43, 'Money Pack [ +5000 ]', 1, 25, 5000, 0, 0, 0, 0, 0, 0),
(44, 'Special Pack [ Every Other Pack ]', 1, 75, 5000, 25, 0, 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `contactlist`
--

CREATE TABLE IF NOT EXISTS `contactlist` (
  `cl_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cl_ADDER` int(11) NOT NULL DEFAULT '0',
  `cl_ADDED` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cl_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `crID` int(11) NOT NULL AUTO_INCREMENT,
  `crNAME` varchar(255) NOT NULL DEFAULT '',
  `crDESC` text NOT NULL,
  `crCOST` int(11) NOT NULL DEFAULT '0',
  `crENERGY` int(11) NOT NULL DEFAULT '0',
  `crDAYS` int(11) NOT NULL DEFAULT '0',
  `crSTR` int(11) NOT NULL DEFAULT '0',
  `crGUARD` int(11) NOT NULL DEFAULT '0',
  `crLABOUR` int(11) NOT NULL DEFAULT '0',
  `crAGIL` int(11) NOT NULL DEFAULT '0',
  `crIQ` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`crID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`crID`, `crNAME`, `crDESC`, `crCOST`, `crENERGY`, `crDAYS`, `crSTR`, `crGUARD`, `crLABOUR`, `crAGIL`, `crIQ`) VALUES
(1, 'Sports Science', 'upon completition of this course you will gain a large boost in your fighting stats that should give you an edge over less educated folk.', 15000, 45, 28, 200, 200, 200, 200, 50),
(2, 'Computer Science', 'upon completition of this course you will gain a large boost in your intelligence.', 20000, 35, 21, 50, 50, 50, 50, 500),
(3, 'Self Defence', 'upon completition of this course you will gain a large boost in your defensive skills.', 35000, 65, 35, 50, 300, 300, 150, 50),
(4, 'Biology', 'upon completition of this course you will gain a better understanding of how the body works, giving you more efficiency in the gym', 30000, 55, 28, 250, 250, 250, 250, 250);

-- --------------------------------------------------------

--
-- Table structure for table `coursesdone`
--

CREATE TABLE IF NOT EXISTS `coursesdone` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `courseid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crimegroups`
--

CREATE TABLE IF NOT EXISTS `crimegroups` (
  `cgID` int(11) NOT NULL AUTO_INCREMENT,
  `cgNAME` varchar(255) NOT NULL DEFAULT '',
  `cgORDER` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cgID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `crimegroups`
--

INSERT INTO `crimegroups` (`cgID`, `cgNAME`, `cgORDER`) VALUES
(1, 'Standard Crimes', 1),
(2, 'Arson Crimes', 2),
(3, 'Drug Crimes', 3),
(4, 'Grand Theft Autos', 4),
(5, 'Hitman Crimes', 5),
(6, 'Theft Crimes', 6),
(7, 'Virus Crimes', 7);

-- --------------------------------------------------------

--
-- Table structure for table `crimes`
--

CREATE TABLE IF NOT EXISTS `crimes` (
  `crimeID` int(11) NOT NULL AUTO_INCREMENT,
  `crimeNAME` varchar(255) NOT NULL DEFAULT '',
  `crimeBRAVE` int(11) NOT NULL DEFAULT '0',
  `crimePERCFORM` text NOT NULL,
  `crimeSUCCESSMUNY` int(11) NOT NULL DEFAULT '0',
  `crimeSUCCESSCRYS` int(11) NOT NULL DEFAULT '0',
  `crimeSUCCESSITEM` int(11) NOT NULL DEFAULT '0',
  `crimeGROUP` int(11) NOT NULL DEFAULT '0',
  `crimeITEXT` text NOT NULL,
  `crimeSTEXT` text NOT NULL,
  `crimeFTEXT` text NOT NULL,
  `crimeJTEXT` text NOT NULL,
  `crimeJAILTIME` int(10) NOT NULL DEFAULT '0',
  `crimeJREASON` varchar(255) NOT NULL DEFAULT '',
  `crimeXP` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`crimeID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `crimes`
--

INSERT INTO `crimes` (`crimeID`, `crimeNAME`, `crimeBRAVE`, `crimePERCFORM`, `crimeSUCCESSMUNY`, `crimeSUCCESSCRYS`, `crimeSUCCESSITEM`, `crimeGROUP`, `crimeITEXT`, `crimeSTEXT`, `crimeFTEXT`, `crimeJTEXT`, `crimeJAILTIME`, `crimeJREASON`, `crimeXP`) VALUES
(1, 'Search the streets', 1, '((WILL*0.8)/1)+(LEVEL/4)', 10, 0, 0, 1, '1. You hop on a bus to the main street to see if you can score some change<br />\r\n2. You keep your eyes peeled for cash.<br />''''', '<font color=green>Result: You collect ${money} that fell out of a guys suit!', '<font color=orange>Result: There''s no cash to be seen, someone must already be scavanging', '<font color=red>The cops ask what you are doing and you get cheeky with them. They take you downtown for a talk.', 10, 'Gave the cops lip', 10),
(2, 'Beg for money', 1, '((WILL*0.8)/1.5)+(LEVEL/4)', 25, 0, 0, 1, '1. You head over to the closest corner in your most raggy clothes and you haven''t showered in 3 days<br />\r\n2. You hold out your cup and stare at everyone walking by<br />''''', '<font color=green>Result: Some sucker big shot drops in ${money} bucks!', '<font color=orange>Result: Some guy comes up flips his badge and says he''s with the cops, move along. ', '<font color=red>You stay and he comes back with handcuffs.', 15, 'failed to move when cops asked', 12),
(3, 'Sell bootleg CDs', 3, '((WILL*0.8)/3)+(LEVEL/4)', 40, 0, 0, 1, '1. You go down to the computer store and buy some blank CDs.<br />\r\n2. You head home and burn some new music onto these CDs.<br />\r\n3. You go back to the market, set up your shop, and wait for customers.<br />''''', '<font color=green>Result: You sell your stock making you ${money}!', '<font color=orange>Result: No-one wants to buy your worthless crap!', '<font color=red>Cops pull up and you don''t get away in time', 20, 'Caught selling bootleg CDs', 15),
(4, 'Sell Bootleg DVDs', 3, '((WILL*0.8)/3.5)+(LEVEL/4)', 50, 0, 0, 1, '1. You go down to the computer store and buy some blank DVDs.<br />\r\n2. You head home and burn some blockbuster films onto these DVDs.<br />\r\n3. You go back to the market, set up your shop, and wait for customers.<br />''''', '<font color=green>Result: Deadpole was a great seller earning you ${money} bucks!', '<font color=orange>Result: You realise you only made copies of an old B&W movie, you must''ve clicked the wrong file! ', '<font color=red>Cops come and take your stock, and you to jail', 30, 'Caught selling bootleg DVDs', 20),
(5, 'Steal from a local store', 4, '((WILL*0.7)/5)+(LEVEL/4)', 75, 0, 0, 1, '1. You walk into a shop, hood up<br />\r\n2. You look around and see a fat manager scratching his ass<br />\r\n3. You take your opportunity, grab the item and run out<br />\r\n4. You hear the alarm behind you and the manager shouting after you<br />''''', '<font color=green><font color=green>Result: You get away with the item!</font>', '<font color=orange><font color=brown>Result: You get tackled by a security guard at the door.</font>  ', '<font color=red>He calls the cops.', 60, 'Got caught steals from a store', 30),
(6, 'Pickpocket Someone', 6, '((WILL*0.7)/6)+(LEVEL/5)', 100, 0, 0, 1, '"You walk around town looking for the prime candidate ''''', '<font color=green>You notice a kid with a fat wallet in his pocket. You follow him, grab it and find ${money} bucks! Score!', '<font color=orange>Right as you get close to the kid a cop walks past and grabs your hand. sucks to be you! lol!   ', '<font color=red>Busted', 75, 'got caught trying to steal from a kid', 40),
(7, 'Steal from someones home', 7, '((WILL*0.7)/8)+(LEVEL/8)', 1200, 0, 0, 1, '"1. You monitor the house until everyone goes asleep<br/>\r\n2.You run in and try grab what you can before people hear a thing"', '<font color=green>You are in and out of there before the alarm was even set off looks like you made it out with ${money} bucks !', '<font color=orange>You stumble over the pot plant in the hall and hear the alarm go off.   ', '<font color=red>Busted', 200, 'Got caught stealing from a house', 70),
(8, 'Hold up a bank', 10, '((WILL*0.7)/15)+(LEVEL/15)', 10000, 0, 0, 1, '"1. You put on your balaclava and go to the nearest bank\r\n2. You hold the teller at gun point demanding all the money"', '<font color=green>She begins putting all the money in a bag. She put ${money} bucks in it.', '<font color=orange>The teller is very pretty and distracts you while she hit the silent alarm, in no time the police show up.', '<font color=red>Oops', 120, 'got caught holding up a bank', 90),
(9, 'Burn a House', 30, '((WILL*0.7)/30)+(LEVEL/5)', 50000, 0, 0, 2, 'You drench the house in gas\r\nand throw a match at it. \r\nAfter about 2 minutes, the house is engulfed in flames. \r\n''', '<font color=green>You think to youself\r\n"this rules, why didn''t I do this sooner?\r\n', '<font color=orange>the cops roll up \r\n ', '<font color=red>you get taken to jail for arson ', 60, 'got busted for arson', 60),
(10, 'Burn a Bridge', 85, '((WILL*0.7)/35.9)+(LEVEL/25)', 100000, 0, 0, 2, 'You drench the Bridge in gas\r\nand throw a match at it. \r\nAfter about 2 minutes, the Bridge is engulfed in flames. \r\n''', '<font color=green>You think to youself\r\n"this rules, why didn''t I do this sooner?\r\n', '<font color=orange>the cops roll up \r\n ', '<font color=red>you get taken to jail for arson ', 190, 'got busted for arson', 190),
(11, 'Burn a Hotel', 100, '((WILL*0.7)/35.9)+(LEVEL/75)', 200000, 0, 0, 2, 'You drench the Hotel in gas\r\nand throw a match at it. \r\nAfter about 2 minutes, the Hotel is engulfed in flames. \r\n''', '<font color=green>You think to youself\r\n"this rules, why didn''t I do this sooner?\r\n', '<font color=orange>the cops roll up \r\n ', '<font color=red>you get taken to jail for arson ', 200, 'got busted for arson', 200),
(12, 'Burn a Warehouse', 200, '((WILL*0.7)/35.9)+(LEVEL/125)', 250000, 0, 0, 2, 'You drench the Warehouse in gas\r\nand throw a match at it. \r\nAfter about 2 minutes, the Warehouse is engulfed in flames. \r\n''', '<font color=green>You think to youself\r\n"this rules, why didn''t I do this sooner?\r\n', '<font color=orange>the cops roll up \r\n ', '<font color=red>you get taken to jail for arson ', 400, 'got busted for arson', 400),
(13, 'PCP', 8, '((WILL*0.8)/8)+(LEVEL/4)', 200, 0, 0, 3, '1. You pick up a load of PCP from your bud''s and drive south on the M1 highway.<br />\r\n2. You see coppers chasing after you, you turn off to avoid them.<br />''', '<font color=green>3. You get off their tail and deliver the goods, collecting your fee.<br />\r\n<font color=green>Result: You feel good with ${money} in your pocket!</font>', '<font color=orange><font color=brown>Result: As they pull nearer to you you leap out of the van and run off.</font> ', '<font color=red>you got busted running drugs!', 25, 'busted by the cops running drugs', 25),
(14, 'Cannabis', 20, '((WILL*0.8)/8)+(LEVEL/4)', 500, 0, 0, 3, '1. You pick up a load of Cannabis from your bud''s and drive south on the M1 highway.<br />\r\n2. You see coppers chasing after you, you turn off to avoid them.<br />''', '<font color=green>3. You get off their tail and deliver the goods, collecting your fee.<br />\r\n<font color=green>Result: You feel good with ${money} in your pocket!</font>', '<font color=orange><font color=brown>Result: As they pull nearer to you you leap out of the van and run off.</font> ', '<font color=red>you got busted running drugs!', 25, 'busted by the cops running drugs', 25),
(15, 'LSD', 40, '((WILL*0.8)/8)+(LEVEL/4)', 1000, 0, 0, 3, '1. You pick up a load of LSD from your bud''s and drive south on the M1 highway.<br />\r\n2. You see coppers chasing after you, you turn off to avoid them.<br />''', '<font color=green>3. You get off their tail and deliver the goods, collecting your fee.<br />\r\n<font color=green>Result: You feel good with ${money} in your pocket!</font>', '<font color=orange><font color=brown>Result: As they pull nearer to you you leap out of the van and run off.</font> ', '<font color=red>you got busted running drugs!', 25, 'busted by the cops running drugs', 25),
(16, 'Get some cannibis', 90, '((WILL*0.7)/35.9)+(LEVEL/50)', 1000000, 0, 0, 3, 'You go and tell the drug dealer that you want 100 lbs. of his best cannibis.''', '<font color=green>You take him to the spot and kick his Face in, you then take all the cannibis and sell it for ${money}.', '<font color=orange>You take him to the spot but right as you get there the cops are there waiting. Looks like Jail time! ', '<font color=red>you got busted ', 180, 'got caught running drugs', 180),
(17, 'GS-R turbo', 20, '((WILL*0.8)/20)+(LEVEL/4)', 0, 0, 8009, 4, '1. You head down to the local car lot.<br />\r\n2. You spot a GS-R turbo, pretty shiny you''d say!<br />\r\n3. You throw a rock at the window and hop in!<br />''', '<font color=green>Result: You insert your fake key and take off with it you now have a new GS-R turbo!', '<font color=orange>Result: There''s no battery, so the car won''t run! You hop out and run away. ', '<font color=red>you got busted for GTA', 40, 'busted by the cops for jacking cars', 40),
(18, 'Hummer', 28, '((WILL*0.7)/28)+(LEVEL/4)', 0, 0, 8011, 4, '1. You walking down a streetof a rich neighbourhood.<br />\r\n2. You see a red Hummer with the window down.<br />\r\n3. You stop to make sure no one is looking and you open it and attempt to hot wire it.<br /> \r\n''', '<font color=green>4.You hear it crank over!<br />\r\n\r\n<font color=green>Result: \r\n You speed off you in your new hummer!</font>', '<font color=orange>4. You wire it wrong and blow a fuse.<br />\r\n5. The Alarm starts screeching.<br />\r\n\r\n<font color=brown>Result: you run of before somebody notices you. Bad Luck.</font> ', '<font color=red>to late the cops seen ya', 56, 'got caught stealing a hummer', 56),
(19, 'F-150', 25, '((WILL*0.7)/25)+(LEVEL/4)', 0, 0, 8010, 4, '1. You head down to the local car lot.<br />\r\n2. You spot a F-150, ooh it looks neat!<br />\r\n3. You throw a rock at the window, but then spy a security camera attached to the steering wheel.<br />\r\n4. You jump in, make sure you''re out of the camera''s view, and attempt to work it out of its socket.<br />''', '<font color=green>5. The camera pops out, you smile and throw it away.<br />\r\nResult: You insert your fake key and take off you now have a new F-150!', '<font color=orange>Result: The camera won''t budge. You abandon your attempt and walk home. You Encounter Cops that seen the whole thing!', '<font color=red>you got busted for GTA', 50, 'busted by the cops for jacking cars', 50),
(20, 'Industrialist', 15, '((WILL*0.8)/15)+(LEVEL/4)', 2000, 0, 0, 5, '1. You arm yourself with your trusty M16 and meet your accomplice at the bus station. He gives you the job.<br />\r\n2. You drive to the target''s mansion.<br />\r\n3. He steps out of his car, you tense up and get ready to fire.<br />''', '<font color=green>4. You blow his head off.<br />\r\n<font color=green>Result: You drive home to find ${money} in your Mail Box for the job!</font>', '<font color=orange><font color=brown>Result: You wrongly identified the Industrialist, you blew a street walker''s head off instead! Unlucky!</font> ', '<font color=red>you got busted for murder', 35, 'got busted for murder', 35),
(21, 'Coke Dealer', 25, '((WILL*0.7)/25)+(LEVEL/4)', 25000, 0, 0, 5, '1. You Recieved a call for a job downtown.<br />\r\n2. You arm yourself with your trusty Sniper Rifle and head down to the Designated Area.<br />\r\n3. The Target shows up about to get into his car.<br />\r\n\r\n''', '<font color=green>4. You Take his head off clean in 1 shot.<br />\r\n<font color=green>Result: You drive home to find ${money} in your Mail Box!</font>', '<font color=orange>4. the target steps into the car and prepares to drive off.<br />\r\n5. Yours still trying to peice your gun together but forgot what part goes where.<br />\r\n\r\n<font color=brown>Result: He Drives off safely! Bad Luck!</font> ', '<font color=red>you got busted for murder', 50, 'got busted for murder', 50),
(22, 'Kill a Rich Guy', 75, '((WILL*0.7)/35.9)+(LEVEL/16)', 140000, 0, 0, 5, '1. You arm yourself with your trusty Arsenal Shipka and meet your partner at the bus station. He gives you the job.<br />\r\n2. You drive to the target''s mansion.<br />\r\n3. You step out of your car, you get fired up and get ready to fire.<br />''', '<font color=green>4. You blow his head off.<br />\r\n<font color=green>Result: You drive home to find ${money} in your mailbox for the job!</font>', '<font color=orange><font color=brown>Result: You wrongly identified the target, you blew a street walker''s head off instead! Looks Like Jail time for you!</font> ', '<font color=red>you got busted ', 150, 'got busted for murder', 150),
(23, 'Hired Gun', 150, '((WILL*0.7)/35.9)+(LEVEL/100)', 4000000, 0, 0, 5, 'You get hired on for a Hit.''', '<font color=green>You go meet the man at a shop. you get a pic of your mark you go to find the mark.you find him at the mall you get shot 3 shoots off at him you have killed the mark you go back to the shop and meet the man there you, get ${money}! for a job well done! ', '<font color=orange>You go meet the man at the shop. you get a pic of your mark you go to find the mark.you find him you get shot 3 shoots off, but you missed and hit a cop car, that was dumb now you are going to jail, say hi to bubba lol  ', '<font color=red>you got busted for murder', 300, 'got busted for murder', 300),
(24, 'Street Person', 6, '((WILL*0.8)/6)+(LEVEL/4)', 50, 0, 0, 6, '1. You go down the street searching for a Street Person.<br />\r\n2. You see a particularly nice-looking Street Person dozing on the sidewalk.<br />\r\n3. You bend down and stick your hand into his pocket.<br />', '4. You grab some notes and run away.<br />\r\n<font color=green>Result: You count up the notes, there''s ${money}!</font>', '<font color=brown>The Street Person stirs. You dash away, not wanting to let him see you.</font>', 'you got busted', 15, 'busted by the cops', 20),
(25, 'Punk', 6, '((WILL*0.8)/6.5)+(LEVEL/4)', 100, 0, 0, 6, '1. You go down the street searching for a Punk.<br />\r\n2. You see a kid listening to his walkman walk down the sidewalk.<br />\r\n3. You quietly go up to him and put a hand into his pocket.<br />', '4. You grab a wallet and run away.<br />\r\n<font color=green>Result: You open the wallet and count up the notes, there''s ${money}!</font>', '<font color=brown>Result: You hit his pocket protector, you walk away slowly.</font>', 'you got busted', 25, 'busted by the cops', 25),
(26, 'Enterprise Man', 6, '((WILL*0.8)/6.9)+(LEVEL/4)', 150, 0, 0, 6, '1. You go down the street searching for a normal everyday Enterprise Man.<br />\r\n2. You see a man briskly walking, carrying a black bag.<br />\r\n3. You quietly go up to him and reach a hand out for his bag.<br />', '4. You grab it and dash off down an streetway.<br />\r\n<font color=green>Result: You open the bag and count up the money, there''s ${money}!</font>', '<font color=brown>Result: You cop one in the nose as he shoos you away.</font>', 'you got busted', 25, 'busted by the cops', 25),
(27, 'Broken Down Home', 10, '((WILL*0.8)/10)+(LEVEL/4)', 260, 0, 0, 6, '1. You head to a back street where there are lots of Broken Down Homes.<br />\r\n2. You find a particularly nice-looking Broken Down Home, check that there''s no-one inside, and break open the door.<br />\r\n3. You start searching the draws.<br />', '<font color=green>Result: You find ${money} in a lower draw!</font>', '<font color=brown>Result: You hear footsteps. You don''t know if they are coming towards this Broken Down Home, but you can''t take the risk. You dash away with nothing in your pocket.</font>', 'you got busted', 25, 'busted by the cops', 25),
(28, 'Condo', 11, '((WILL*0.8)/11)+(LEVEL/4)', 400, 0, 0, 6, '1. You head over to your buds to pick up your assignment.<br />\r\n2. He gives you a piece of paper with the address on it. You hop in your car and drive there.<br />\r\n3. You throw a large rock at the window of the Condo and hop in.<br />\r\n4. You start searching for the MAc your bud told you to steal for him.<br />', '5. You find the MAc, it looks pretty new and powerful!<br />\r\n6. You disconnect the MAc from the power at the wall, disconnect the various wires, and pack it all into a cardboard box as tall as your head.<br />\r\n7. You carry the box into your car and drive back to your bud''s.<br />\r\n<font color=green>Result: As promised, he gives you 20% of the MAc''s worth. You feel highly content with the ${money} in your wallet.</font>', '<font color=brown>Result: The alarm sounds. You get out as fast as possible and drive away.</font>', 'you got busted', 25, 'busted by the cops', 25),
(29, 'Rob the Casino', 35, '((WILL*0.6)/35)+(LEVEL/5)', 70000, 0, 0, 6, 'Rob the Casino\r\n1. You set up the equipment required.<br />\r\n2. You Start developing some fake casino Chips.<br />\r\n3. You pack the Chips into the Suit case and Head of to the local Casino.<br />\r\n4. Once inside u Bet $70000 in a single game of BlackJack.<br />', '<font color=green>Result: Operation Success!\r\n\r\nYou Won ${money} and Exhanges the Real Chips for Cash</font>\r\n', '<font color=brown>Result: The Dealer Spots that your Chips are Fake and calls Security\r\n\r\nNot wishing to be Caught you Run of before the Security Guards Arrive.</font>', 'you got busted', 70, 'got robben the casino', 70),
(30, 'Rob the Dealer', 45, '((WILL*0.7)/35)+(LEVEL/5)', 80000, 0, 0, 6, 'Rob the Dealer\r\n1. You set up the equipment required.<br />\r\n2. You Start developing some fake Dealer Chips.<br />\r\n3. You pack the Chips into the Suit case and Head of to the local Dealer.<br />\r\n4. Once inside u Bet ${money} in a single game of BlackJack the dealer sees threw fake you hit him over the head and swipe the cash.<br />', '<font color=green>Result: Operion Success!\r\n\r\nYou got ${money} and took off running!</font>\r\n', '<font color=brown>Result: \r\n\r\nGot caught by Security Guards.</font>', 'you got busted', 90, 'got caught robbin the dealer', 90),
(31, 'Rob the Bookie', 50, '((WILL*0.7)/35)+(LEVEL/5)', 90000, 0, 0, 6, 'Rob the Bookie\r\n1. You set up the equipment required.<br />\r\n2. You Start developing some fake Chips.<br />\r\n3. You pack the Chips into the Suit case and Head of to the local Dealer.<br />\r\n4. Once inside u Bet and lose on purpose in games of BlackJack to buy your time.<br />', '<font color=green>Result: Operation Success!\r\n\r\nYou goto the back room and steal ${money}! </font>\r\n', '<font color=brown>Result: \r\n\r\nGot caught by Security Guards.</font>', 'you got busted', 100, 'got caught robbin the bookie', 100),
(32, 'Simple Virus', 9, '((WILL*0.8)/10)+(LEVEL/4)', 400, 0, 0, 7, '<font color = orange>Mr biggs gives you a call on your phone \r\nhes say he will pay you $800 dollars to infect bob''s computer\r\nwith a simple virus,You grab your simple virus disk connect to bob''s computer\r\nand upload the virus!', '<font color = green>You Success Fully Uploaded the Virus\r\n', '<font color = red>While uploading the virus the feds bust in and take you to jail!\r\n', '<font color = maroon>Your in cuffs time for jail!\r\n', 25, 'Got busted by the Fbi for infecting people with Simple Viruses!', 25),
(33, 'Polymorphic Virus', 9, '((WILL*0.8)/10)+(LEVEL/4)', 600, 0, 0, 7, '<font color = orange>Mr biggs gives you a call on your phone \r\nhes say he will pay you $600 dollars to infect bill''s computer\r\nwith a Polymorphic Virus,You grab your Polymorphic Virus disk connect to bill''s computer\r\nand upload the virus!', '<font color = green>You Success Fully Uploaded the Virus\r\n', '<font color = red>While uploading the virus the feds bust in and take you to jail!\r\n', '<font color = maroon>Your in cuffs time for jail!\r\n', 30, 'Got busted by the Fbi for infecting people with Polymorphic Viruses!', 25),
(34, 'Tunnelling Virus', 9, '((WILL*0.8)/10)+(LEVEL/4)', 700, 0, 0, 7, '<font color = orange>Mr biggs gives you a call on your phone \r\nhes say he will pay you $700 dollars to infect ted''s computer\r\nwith a Tunnelling Virus,You grab your Tunnelling Virus disk connect to ted''s computer\r\nand upload the virus!', '<font color = green>You Success Fully Uploaded the Virus\r\n', '<font color = red>While uploading the virus the feds bust in and take you to jail!\r\n', '<font color = maroon>Your in cuffs time for jail!\r\n', 33, 'Got busted by the Fbi for infecting people with Tunnelling Viruses!', 25),
(35, 'Boot Virus', 9, '((WILL*0.8)/10)+(LEVEL/4)', 800, 0, 0, 7, '<font color = orange>Mr biggs gives you a call on your phone \r\nhes say he will pay you $800 dollars to infect steve''s computer\r\nwith a Boot Virus,You grab your Boot Virus disk connect to steve''s computer\r\nand upload the virus!', '<font color = green>You Success Fully Uploaded the Virus\r\n', '<font color = red>While uploading the virus the feds bust in and take you to jail!\r\n', '<font color = maroon>Your in cuffs time for jail!\r\n', 35, 'Got busted by the Fbi for infecting people with Boot Viruses!', 25),
(36, 'Macro Virus', 9, '((WILL*0.8)/10)+(LEVEL/4)', 900, 0, 0, 7, '<font color = orange>Mr biggs gives you a call on your phone \r\nhes say he will pay you $900 dollars to infect phil''s computer\r\nwith a Macro Virus,You grab your Macro Virus disk connect to phil''s computer\r\nand upload the virus!', '<font color = green>You Success Fully Uploaded the Virus\r\n', '<font color = red>While uploading the virus the feds bust in and take you to jail!\r\n', '<font color = maroon>Your in cuffs time for jail!\r\n', 40, 'Got busted by the Fbi for infecting people with Macro Viruses!', 25),
(37, 'Active X Virus', 9, '((WILL*0.8)/10)+(LEVEL/4)', 950, 0, 0, 7, '<font color = orange>Mr biggs gives you a call on your phone \r\nhes say he will pay you $950 dollars to infect al''s computer\r\nwith a Active X Virus,You grab your Active X Virus disk connect to al''s computer\r\nand upload the virus!', '<font color = green>You Success Fully Uploaded the Virus\r\n', '<font color = red>While uploading the virus the feds bust in and take you to jail!\r\n', '<font color = maroon>Your in cuffs time for jail!\r\n', 45, 'Got busted by the Fbi for infecting people with Active X Viruses!', 25);

-- --------------------------------------------------------

--
-- Table structure for table `crystalmarket`
--

CREATE TABLE IF NOT EXISTS `crystalmarket` (
  `cmID` int(11) NOT NULL AUTO_INCREMENT,
  `cmQTY` int(11) NOT NULL DEFAULT '0',
  `cmADDER` int(11) NOT NULL DEFAULT '0',
  `cmPRICE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cmID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `crystalmarket`
--

INSERT INTO `crystalmarket` (`cmID`, `cmQTY`, `cmADDER`, `cmPRICE`) VALUES
(1, 100, 1, 20000),
(2, 100, 1, 20000),
(3, 100, 1, 20000),
(4, 12, 1, 2400),
(5, 12, 1, 2400),
(6, 12, 1, 2400),
(7, 12, 1, 2400),
(8, 12, 1, 2400),
(9, 12, 1, 2400);

-- --------------------------------------------------------

--
-- Table structure for table `crystalxferlogs`
--

CREATE TABLE IF NOT EXISTS `crystalxferlogs` (
  `cxID` int(11) NOT NULL AUTO_INCREMENT,
  `cxFROM` int(11) NOT NULL DEFAULT '0',
  `cxTO` int(11) NOT NULL DEFAULT '0',
  `cxAMOUNT` int(11) NOT NULL DEFAULT '0',
  `cxTIME` int(11) NOT NULL DEFAULT '0',
  `cxFROMIP` varchar(15) NOT NULL DEFAULT '127.0.0.1',
  `cxTOIP` varchar(15) NOT NULL DEFAULT '127.0.0.1',
  PRIMARY KEY (`cxID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dps_accepted`
--

CREATE TABLE IF NOT EXISTS `dps_accepted` (
  `dpID` int(11) NOT NULL AUTO_INCREMENT,
  `dpBUYER` int(11) NOT NULL DEFAULT '0',
  `dpFOR` int(11) NOT NULL DEFAULT '0',
  `dpTYPE` varchar(255) NOT NULL DEFAULT '',
  `dpTIME` int(11) NOT NULL DEFAULT '0',
  `dpTXN` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`dpID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `evID` int(11) NOT NULL AUTO_INCREMENT,
  `evUSER` int(11) NOT NULL DEFAULT '0',
  `evTIME` int(11) NOT NULL DEFAULT '0',
  `evREAD` int(11) NOT NULL DEFAULT '0',
  `evTEXT` text NOT NULL,
  PRIMARY KEY (`evID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`evID`, `evUSER`, `evTIME`, `evREAD`, `evTEXT`) VALUES
(1, 2, 1459032542, 0, '<a href=''viewuser.php?u=1''>carlmacdiarmada</a> attacked you and left you lying outside the hospital.'),
(2, 10, 1460277798, 0, '<a href=''viewuser.php?u=3''>carltest</a> attacked you and left you lying outside the hospital.'),
(3, 11, 1460277829, 0, '<a href=''viewuser.php?u=3''>carltest</a> attacked you and left you lying outside the hospital.'),
(4, 12, 1460277861, 0, '<a href=''viewuser.php?u=3''>carltest</a> attacked you and left you lying outside the hospital.'),
(5, 13, 1460277872, 0, '<a href=''viewuser.php?u=3''>carltest</a> attacked you and left you lying outside the hospital.'),
(6, 10, 1460298681, 0, '<a href=''viewuser.php?u=1''>carlmacdiarmada</a> attacked you and left you lying outside the hospital.'),
(7, 20, 1460321226, 1, '<a href=''viewuser.php?u=1''>carlmacdiarmada</a> busted you out of jail.');

-- --------------------------------------------------------

--
-- Table structure for table `fedjail`
--

CREATE TABLE IF NOT EXISTS `fedjail` (
  `fed_id` int(11) NOT NULL AUTO_INCREMENT,
  `fed_userid` int(11) NOT NULL DEFAULT '0',
  `fed_days` int(11) NOT NULL DEFAULT '0',
  `fed_jailedby` int(11) NOT NULL DEFAULT '0',
  `fed_reason` text NOT NULL,
  PRIMARY KEY (`fed_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_forums`
--

CREATE TABLE IF NOT EXISTS `forum_forums` (
  `ff_id` int(11) NOT NULL AUTO_INCREMENT,
  `ff_name` varchar(255) NOT NULL DEFAULT '',
  `ff_desc` varchar(255) NOT NULL DEFAULT '',
  `ff_posts` int(11) NOT NULL DEFAULT '0',
  `ff_topics` int(11) NOT NULL DEFAULT '0',
  `ff_lp_time` int(11) NOT NULL DEFAULT '0',
  `ff_lp_poster_id` int(11) NOT NULL DEFAULT '0',
  `ff_lp_poster_name` text NOT NULL,
  `ff_lp_t_id` int(11) NOT NULL DEFAULT '0',
  `ff_lp_t_name` varchar(255) NOT NULL DEFAULT '',
  `ff_auth` enum('public','gang','staff') NOT NULL DEFAULT 'public',
  `ff_owner` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ff_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `forum_forums`
--

INSERT INTO `forum_forums` (`ff_id`, `ff_name`, `ff_desc`, `ff_posts`, `ff_topics`, `ff_lp_time`, `ff_lp_poster_id`, `ff_lp_poster_name`, `ff_lp_t_id`, `ff_lp_t_name`, `ff_auth`, `ff_owner`) VALUES
(1, 'General Discussion', 'Chat about anything in the game', 0, 0, 0, 0, 'N/A', 0, 'N/A', 'public', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE IF NOT EXISTS `forum_posts` (
  `fp_id` int(11) NOT NULL AUTO_INCREMENT,
  `fp_topic_id` int(11) NOT NULL DEFAULT '0',
  `fp_forum_id` int(11) NOT NULL DEFAULT '0',
  `fp_poster_id` int(11) NOT NULL DEFAULT '0',
  `fp_poster_name` text NOT NULL,
  `fp_time` int(11) NOT NULL DEFAULT '0',
  `fp_subject` varchar(255) NOT NULL DEFAULT '',
  `fp_text` text NOT NULL,
  `fp_editor_id` int(11) NOT NULL DEFAULT '0',
  `fp_editor_name` text NOT NULL,
  `fp_editor_time` int(11) NOT NULL DEFAULT '0',
  `fp_edit_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_topics`
--

CREATE TABLE IF NOT EXISTS `forum_topics` (
  `ft_id` int(11) NOT NULL AUTO_INCREMENT,
  `ft_forum_id` int(11) NOT NULL DEFAULT '0',
  `ft_name` varchar(255) NOT NULL DEFAULT '',
  `ft_desc` varchar(255) NOT NULL DEFAULT '',
  `ft_posts` int(11) NOT NULL DEFAULT '0',
  `ft_owner_id` int(11) NOT NULL DEFAULT '0',
  `ft_owner_name` text NOT NULL,
  `ft_start_time` int(11) NOT NULL DEFAULT '0',
  `ft_last_id` int(11) NOT NULL DEFAULT '0',
  `ft_last_name` text NOT NULL,
  `ft_last_time` int(11) NOT NULL DEFAULT '0',
  `ft_pinned` tinyint(4) NOT NULL DEFAULT '0',
  `ft_locked` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ft_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `friendslist`
--

CREATE TABLE IF NOT EXISTS `friendslist` (
  `fl_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fl_ADDER` int(11) NOT NULL DEFAULT '0',
  `fl_ADDED` int(11) NOT NULL DEFAULT '0',
  `fl_COMMENT` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`fl_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gangevents`
--

CREATE TABLE IF NOT EXISTS `gangevents` (
  `gevID` int(11) NOT NULL AUTO_INCREMENT,
  `gevGANG` int(11) NOT NULL DEFAULT '0',
  `gevTIME` int(11) NOT NULL DEFAULT '0',
  `gevTEXT` text NOT NULL,
  PRIMARY KEY (`gevID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gangevents`
--

INSERT INTO `gangevents` (`gevID`, `gevGANG`, `gevTIME`, `gevTEXT`) VALUES
(1, 1, 1460244718, 'carlmacdiarmada changed the gang name to Abc'),
(2, 1, 1460244720, 'carlmacdiarmada changed the gang tag to Abc'),
(3, 1, 1460244722, 'carlmacdiarmada changed the gang description'),
(4, 1, 1460244730, 'carlmacdiarmada changed the gang announcement');

-- --------------------------------------------------------

--
-- Table structure for table `gangforums_replies`
--

CREATE TABLE IF NOT EXISTS `gangforums_replies` (
  `gfr_id` int(11) NOT NULL AUTO_INCREMENT,
  `gfr_userid` int(11) NOT NULL DEFAULT '0',
  `gfr_gangid` int(11) NOT NULL DEFAULT '0',
  `gfr_topic` int(11) NOT NULL DEFAULT '0',
  `gfr_text` text NOT NULL,
  `gfr_posttime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gfr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gangforums_topics`
--

CREATE TABLE IF NOT EXISTS `gangforums_topics` (
  `gft_id` int(11) NOT NULL AUTO_INCREMENT,
  `gft_userid` int(11) NOT NULL DEFAULT '0',
  `gft_gangid` int(11) NOT NULL DEFAULT '0',
  `gft_title` varchar(255) NOT NULL DEFAULT '',
  `gft_text` text NOT NULL,
  `gft_replies` int(11) NOT NULL DEFAULT '0',
  `gft_views` int(11) NOT NULL DEFAULT '0',
  `gft_lastpost` int(11) NOT NULL DEFAULT '0',
  `gft_lastposterid` int(11) NOT NULL DEFAULT '0',
  `gft_starttime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gft_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gangs`
--

CREATE TABLE IF NOT EXISTS `gangs` (
  `gangID` int(11) NOT NULL AUTO_INCREMENT,
  `gangNAME` varchar(255) NOT NULL DEFAULT '',
  `gangDESC` text NOT NULL,
  `gangPREF` varchar(12) NOT NULL DEFAULT '',
  `gangSUFF` varchar(12) NOT NULL DEFAULT '',
  `gangMONEY` int(11) NOT NULL DEFAULT '0',
  `gangCRYSTALS` int(11) NOT NULL DEFAULT '0',
  `gangRESPECT` int(11) NOT NULL DEFAULT '0',
  `gangPRESIDENT` int(11) NOT NULL DEFAULT '0',
  `gangVICEPRES` int(11) NOT NULL DEFAULT '0',
  `gangCAPACITY` int(11) NOT NULL DEFAULT '0',
  `gangCRIME` int(11) NOT NULL DEFAULT '0',
  `gangCHOURS` int(11) NOT NULL DEFAULT '0',
  `gangAMENT` longtext NOT NULL,
  PRIMARY KEY (`gangID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gangs`
--

INSERT INTO `gangs` (`gangID`, `gangNAME`, `gangDESC`, `gangPREF`, `gangSUFF`, `gangMONEY`, `gangCRYSTALS`, `gangRESPECT`, `gangPRESIDENT`, `gangVICEPRES`, `gangCAPACITY`, `gangCRIME`, `gangCHOURS`, `gangAMENT`) VALUES
(1, 'Abc', 'Abc', 'Abc', '', 0, 0, 100, 1, 1, 5, 0, 0, 'This is an announcement');

-- --------------------------------------------------------

--
-- Table structure for table `gangwars`
--

CREATE TABLE IF NOT EXISTS `gangwars` (
  `warID` int(11) NOT NULL AUTO_INCREMENT,
  `warDECLARER` int(11) NOT NULL DEFAULT '0',
  `warDECLARED` int(11) NOT NULL DEFAULT '0',
  `warTIME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`warID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gComments`
--

CREATE TABLE IF NOT EXISTS `gComments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SenderID` int(11) NOT NULL,
  `RecieverID` int(11) NOT NULL,
  `Comment` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE IF NOT EXISTS `houses` (
  `hID` int(11) NOT NULL AUTO_INCREMENT,
  `hNAME` varchar(255) NOT NULL DEFAULT '',
  `hPRICE` int(11) NOT NULL DEFAULT '0',
  `hWILL` int(11) NOT NULL DEFAULT '0',
  `hPIC` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`hID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`hID`, `hNAME`, `hPRICE`, `hWILL`, `hPIC`) VALUES
(1, 'Default House', 0, 100, ''),
(3, 'Trailer', 100000, 150, 'housepics/house_img2.jpg'),
(2, 'Shack', 50000, 125, 'housepics/house_img1.jpg'),
(4, 'Apartment', 150000, 200, 'housepics/house_img3.jpg'),
(5, 'Small House', 250000, 250, 'housepics/house_img4.jpg'),
(6, 'Large House', 500000, 300, 'housepics/house_img5.jpg'),
(7, 'Beach House', 750000, 400, 'housepics/house_img6.jpg'),
(8, 'Chalet', 1000000, 500, 'housepics/house_img7.jpg'),
(9, 'Villa', 1500000, 600, 'housepics/house_img8.jpg'),
(10, 'Penthouse', 2000000, 650, 'housepics/house_img9.jpg'),
(11, 'Mansion', 3500000, 900, 'housepics/house_img10.jpg'),
(12, 'Ranch', 5500000, 1100, 'housepics/house_img11.jpg'),
(13, 'Castle', 9500000, 1300, 'housepics/house_img12.jpg'),
(14, 'Motel', 14000000, 1500, 'housepics/house_img13.jpg'),
(15, 'Hotel', 30000000, 2000, 'housepics/house_img14.jpg'),
(16, 'Small Island', 45000000, 2600, 'housepics/house_img15.jpg'),
(17, 'Large Island', 75000000, 3400, 'housepics/house_img16.jpg'),
(18, 'Huge Island', 150000000, 4400, 'housepics/house_img17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imarketaddlogs`
--

CREATE TABLE IF NOT EXISTS `imarketaddlogs` (
  `imaID` int(11) NOT NULL AUTO_INCREMENT,
  `imaITEM` int(11) NOT NULL DEFAULT '0',
  `imaPRICE` int(11) NOT NULL DEFAULT '0',
  `imaINVID` int(11) NOT NULL DEFAULT '0',
  `imaADDER` int(11) NOT NULL DEFAULT '0',
  `imaTIME` int(11) NOT NULL DEFAULT '0',
  `imaCONTENT` text NOT NULL,
  PRIMARY KEY (`imaID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `imbuylogs`
--

CREATE TABLE IF NOT EXISTS `imbuylogs` (
  `imbID` int(11) NOT NULL AUTO_INCREMENT,
  `imbITEM` int(11) NOT NULL DEFAULT '0',
  `imbADDER` int(11) NOT NULL DEFAULT '0',
  `imbBUYER` int(11) NOT NULL DEFAULT '0',
  `imbPRICE` int(11) NOT NULL DEFAULT '0',
  `imbIMID` int(11) NOT NULL DEFAULT '0',
  `imbINVID` int(11) NOT NULL DEFAULT '0',
  `imbTIME` int(11) NOT NULL DEFAULT '0',
  `imbCONTENT` text NOT NULL,
  PRIMARY KEY (`imbID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `imremovelogs`
--

CREATE TABLE IF NOT EXISTS `imremovelogs` (
  `imrID` int(11) NOT NULL AUTO_INCREMENT,
  `imrITEM` int(11) NOT NULL DEFAULT '0',
  `imrADDER` int(11) NOT NULL DEFAULT '0',
  `imrREMOVER` int(11) NOT NULL DEFAULT '0',
  `imrIMID` int(11) NOT NULL DEFAULT '0',
  `imrINVID` int(11) NOT NULL DEFAULT '0',
  `imrTIME` int(11) NOT NULL DEFAULT '0',
  `imrCONTENT` text NOT NULL,
  PRIMARY KEY (`imrID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `inv_id` int(11) NOT NULL AUTO_INCREMENT,
  `inv_itemid` int(11) NOT NULL DEFAULT '0',
  `inv_userid` int(11) NOT NULL DEFAULT '0',
  `inv_qty` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`inv_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inv_id`, `inv_itemid`, `inv_userid`, `inv_qty`) VALUES
(1, 78, 1, 1),
(2, 108, 1, 6),
(5, 37, 8, 1),
(6, 89, 9, 1),
(8, 112, 8, 5),
(9, 112, 1, 5),
(10, 112, 3, 5),
(11, 112, 9, 5),
(12, 113, 20, 5),
(13, 113, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `itembuylogs`
--

CREATE TABLE IF NOT EXISTS `itembuylogs` (
  `ibID` int(11) NOT NULL AUTO_INCREMENT,
  `ibUSER` int(11) NOT NULL DEFAULT '0',
  `ibITEM` int(11) NOT NULL DEFAULT '0',
  `ibTOTALPRICE` int(11) NOT NULL DEFAULT '0',
  `ibQTY` int(11) NOT NULL DEFAULT '0',
  `ibTIME` int(11) NOT NULL DEFAULT '0',
  `ibCONTENT` text NOT NULL,
  PRIMARY KEY (`ibID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `itembuylogs`
--

INSERT INTO `itembuylogs` (`ibID`, `ibUSER`, `ibITEM`, `ibTOTALPRICE`, `ibQTY`, `ibTIME`, `ibCONTENT`) VALUES
(1, 1, 109, 100, 1, 1459032363, 'carlmacdiarmada bought 1 Gun(s) for 100'),
(2, 3, 109, 100, 1, 1460277775, 'carltest bought 1 Gun(s) for 100');

-- --------------------------------------------------------

--
-- Table structure for table `itemmarket`
--

CREATE TABLE IF NOT EXISTS `itemmarket` (
  `imID` int(11) NOT NULL AUTO_INCREMENT,
  `imITEM` int(11) NOT NULL DEFAULT '0',
  `imADDER` int(11) NOT NULL DEFAULT '0',
  `imPRICE` int(11) NOT NULL DEFAULT '0',
  `imCURRENCY` enum('money','crystals') NOT NULL DEFAULT 'money',
  PRIMARY KEY (`imID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `itmid` int(11) NOT NULL AUTO_INCREMENT,
  `itmtype` int(11) NOT NULL DEFAULT '0',
  `itmname` varchar(255) NOT NULL DEFAULT '',
  `itmdesc` text NOT NULL,
  `itmbuyprice` int(11) NOT NULL DEFAULT '0',
  `itmsellprice` int(11) NOT NULL DEFAULT '0',
  `itmbuyable` int(11) NOT NULL DEFAULT '0',
  `effect1_on` tinyint(4) NOT NULL DEFAULT '0',
  `effect1` text NOT NULL,
  `effect2_on` tinyint(4) NOT NULL DEFAULT '0',
  `effect2` text NOT NULL,
  `effect3_on` tinyint(4) NOT NULL DEFAULT '0',
  `effect3` text NOT NULL,
  `weapon` int(11) NOT NULL DEFAULT '0',
  `armor` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`itmid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itmid`, `itmtype`, `itmname`, `itmdesc`, `itmbuyprice`, `itmsellprice`, `itmbuyable`, `effect1_on`, `effect1`, `effect2_on`, `effect2`, `effect3_on`, `effect3`, `weapon`, `armor`) VALUES
(1, 1, 'Sack Lunch', 'Deliciously filled with nutrients. Even has a slice of your favorite cake!', 95000, 0, 1, 0, '', 0, '', 0, '', 0, 0),
(3, 5, 'Small Potion', 'Restores some health.', 500, 400, 1, 0, '', 0, '', 0, '', 0, 0),
(4, 5, 'First Aid Lotion', 'Heals a  considerable amount of health.', 1500, 750, 1, 0, '', 0, '', 0, '', 0, 0),
(5, 1, 'Hamburger', 'A scrumptious burger.', 30, 20, 1, 0, '', 0, '', 0, '', 0, 0),
(6, 1, 'Sugar Snake', 'A snake covered in sugar.', 10, 5, 1, 0, '', 0, '', 0, '', 0, 0),
(7, 3, 'Dagger', 'A small gold dagger.', 200, 100, 1, 0, '', 0, '', 0, '', 0, 0),
(8, 3, 'Kitchen Knife', 'A knife filled with dreaded spirits of dead animals.', 2500, 1500, 1, 0, '', 0, '', 0, '', 0, 0),
(9, 3, 'Chainsaw', 'Cut up your foes.', 13250, 10925, 1, 0, '', 0, '', 0, '', 0, 0),
(10, 4, 'Pistol', 'A small blue pistol.', 500, 400, 1, 0, '', 0, '', 0, '', 0, 0),
(11, 4, 'Colt', 'An average gun.', 5000, 3750, 1, 0, '', 0, '', 0, '', 0, 0),
(12, 4, 'Rifle', 'The standard in modern weaponry.', 25000, 17850, 1, 0, '', 0, '', 0, '', 0, 0),
(16, 3, 'Bat', 'A cricket bat.', 75, 50, 1, 0, '', 0, '', 0, '', 0, 0),
(14, 4, 'Mini-Rocket Launcher', 'Blast your foes.', 99450, 78765, 1, 0, '', 0, '', 0, '', 0, 0),
(15, 1, 'SuperDuper Stick', 'restores 100% energy', 2147483647, 2147483647, 1, 0, '', 0, '', 0, '', 0, 0),
(34, 5, 'Will Potion', 'Heals will to 100%', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(35, 4, 'Scout Sniper rifle', 'will hurt big time', 99393, 78353, 1, 0, '', 0, '', 0, '', 0, 0),
(36, 4, 'Minigun', 'Sheer power', 100000, 75000, 1, 0, '', 0, '', 0, '', 0, 0),
(37, 3, 'Diamond Dagger', 'Stabbing power to the max.', 450000, 275000, 1, 0, '', 0, '', 0, '', 0, 0),
(38, 4, 'Rocket Launcher', 'Boom.', 220000, 170000, 1, 0, '', 0, '', 0, '', 0, 0),
(39, 4, 'M16', 'Super Gun', 49000, 38000, 1, 0, '', 0, '', 0, '', 0, 0),
(40, 6, 'Mafia Game Special', 'Extremely rare collectors item.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(42, 6, 'Tit an Implant', 'Titans own way of saying hi.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(74, 7, 'Leather Jacket', 'Nice biker style jacket', 750, 500, 1, 0, '', 0, '', 0, '', 0, 0),
(43, 6, 'Arsons Zippo', 'Arsons odd fantasy.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(44, 3, 'Demon Sword', 'Ultimate weapon.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(45, 6, 'Gothic Warrior-Doll', 'Strong Warrior Slave', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(46, 2, 'Videogame Boy 2002', 'The ultimate in console action.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(47, 6, 'JaggerDoll', 'Won in a test of wits.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(49, 4, 'Hunting Bow', 'Medium range bow, silent and efficient', 425, 210, 1, 0, '', 0, '', 0, '', 0, 0),
(50, 3, 'Foldable Chair', 'infamous folding chair as seen in WWF!', 750, 375, 1, 0, '', 0, '', 0, '', 0, 0),
(51, 3, 'Nail Filer', 'nail accessory', 300, 150, 1, 0, '', 0, '', 0, '', 0, 0),
(52, 6, 'MasturNATion Doll', 'You can sure put this doll to good use.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(53, 6, 'Toonces Bouquet', '231 beautiful roses', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(55, 6, 'Nahdus Rubik Cube', '', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(48, 6, 'Ablemits Doll', 'If you have it then you are so lucky.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(56, 4, 'Calibre Machine Gun', 'Brute power', 175000, 130000, 1, 0, '', 0, '', 0, '', 0, 0),
(57, 4, 'Benelli m1', 'Automatic Shotgun', 33000, 26500, 1, 0, '', 0, '', 0, '', 0, 0),
(58, 4, 'F90 Sub Machine Gun', 'extremely fast short to meduim distance gun', 40000, 30000, 1, 0, '', 0, '', 0, '', 0, 0),
(59, 6, 'Noobi Diapers', 'For newbies', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(60, 3, 'Gladius', 'Superior dagger', 40000, 30000, 1, 0, '', 0, '', 0, '', 0, 0),
(61, 3, 'Katana', 'Japanese style sword', 95000, 78000, 1, 0, '', 0, '', 0, '', 0, 0),
(62, 3, 'Claymore', 'Mysterious Medievil Sword', 125000, 95000, 1, 0, '', 0, '', 0, '', 0, 0),
(63, 3, 'Ragnarok', 'Mythical eastern Weapon', 175000, 125000, 1, 0, '', 0, '', 0, '', 0, 0),
(64, 3, 'Diamond Sword', 'Cutting power to the max.', 2000000, 1700000, 1, 0, '', 0, '', 0, '', 0, 0),
(65, 4, 'Battlements', 'Fully loaded battlements.', 5000000, 4000000, 1, 0, '', 0, '', 0, '', 0, 0),
(66, 6, 'Conerias Duck Tape', 'Coneria brand duck tape', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(67, 6, 'Super Plushie', 'Good toy! What more could you want!', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(68, 6, 'Titanium NightVision Goggles', 'Increases your sight and accuracy at night', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(69, 6, 'Cyber-Surfboard', 'Netbois !!!!', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(70, 6, 'Nyuuubii Sword', 'Sword of the gods made for newbies', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(71, 7, 'Thick Jacket', 'Warm clothing for the long winter', 100, 75, 1, 0, '', 0, '', 0, '', 0, 0),
(73, 7, 'Trash Can Lid', 'Hard Round metal Lid', 200, 150, 1, 0, '', 0, '', 0, '', 0, 0),
(75, 7, 'Riot Shield', 'standard issue shield', 3000, 2250, 1, 0, '', 0, '', 0, '', 0, 0),
(77, 7, 'Semi-bullet proof Vest', 'Excellent Shield for beginners', 8750, 6000, 1, 0, '', 0, '', 0, '', 0, 0),
(78, 6, 'Nuclear Bomb', 'Can kill anyone in one blow even though the guy is lvl 100000000 and has there stats higher than everyone! ****This weapon is restricted to poor people, but still can be buyable for a high enough prize****NOTE: This weapon can kill every member in the game and can gain you heaps of exp ! The Deadlyest weapon in the whole world', 1000000000, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(79, 7, 'Helmet and Vest', 'Newbie Shiled', 25000, 17850, 1, 0, '', 0, '', 0, '', 0, 0),
(80, 7, 'Plated armour', 'Heavy armour', 75000, 50000, 1, 0, '', 0, '', 0, '', 0, 0),
(93, 7, 'God Father Suit', 'Advanced version: Agile body suit with maximum protection', 3250000, 2800000, 1, 0, '', 0, '', 0, '', 0, 0),
(94, 7, 'Conerias DuckTaped Suit', 'Made with superior brand of duck tape', 150000, 125000, 1, 0, '', 0, '', 0, '', 0, 0),
(83, 7, 'Mini-Tank', 'Small tank almost bullet proof', 750000, 550000, 1, 0, '', 0, '', 0, '', 0, 0),
(92, 7, 'Diamond Suit', 'Agile body suit with super protection', 1500000, 1100000, 1, 0, '', 0, '', 0, '', 0, 0),
(91, 7, 'Gothic Plate', 'Improved Shiled', 300000, 225000, 1, 0, '', 0, '', 0, '', 0, 0),
(86, 4, 'mini-Rail Gun', 'New Improve technology', 4000000, 3000000, 1, 0, '', 0, '', 0, '', 0, 0),
(87, 4, 'Mounted Rail Gun', 'Usually mounted on tanks', 10000000, 7500000, 1, 0, '', 0, '', 0, '', 0, 0),
(90, 4, 'Arsons FlameThrower', 'Flamethrower', 150000, 115000, 1, 0, '', 0, '', 0, '', 0, 0),
(89, 3, 'Light Saber', ' Unique Item ', 50000000, 40000000, 1, 0, '', 0, '', 0, '', 0, 0),
(95, 6, 'Fifty Cent Piece', 'A small piece of ancient Mono History.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(96, 6, '1 Dollar', '1 freaking dollar coin.', 0, 0, 0, 0, '', 0, '', 0, '', 0, 0),
(97, 7, 'Plasma Shield', 'Battery powered arm guard', 25000000, 17500000, 1, 0, '', 0, '', 0, '', 0, 0),
(98, 7, 'Rynax Plasma Shield', 'Made form a new type of power source', 60000000, 40000000, 1, 0, '', 0, '', 0, '', 0, 0),
(99, 4, 'Plasma Gun', 'Fires Bolts of plasma Energy', 35000000, 22500000, 1, 0, '', 0, '', 0, '', 0, 0),
(100, 4, 'Plasma Rifle', 'Full automatic energy rifle', 75000000, 50000000, 1, 0, '', 0, '', 0, '', 0, 0),
(102, 4, 'Nuke Gun', 'Kill anyone with just one shot', 200000000, 125000000, 1, 0, '', 0, '', 0, '', 0, 0),
(105, 6, 'Conerians', 'Awarded to helpful players. Can be redeemed for rewards.', 0, 5000, 0, 0, '', 0, '', 0, '', 0, 0),
(107, 4, 'Bio Aeroactive 350', 'Shoots green plasma', 500000000, 300000000, 1, 0, '', 0, '', 0, '', 0, 0),
(108, 8, 'E-DVD', 'dvd', 2500000, 0, 1, 1, 'a:4:{s:4:"stat";s:4:"will";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:2000;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 0),
(109, 4, 'Gun', 'gun', 100, 100, 1, 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 100, 0),
(110, 4, 'Sturgina Bow', 'This bow, crafted from the finest oak you could find, would make Legolas jealous.', 1, 1, 1, 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 77, 0),
(111, 8, 'Power Bar', 'Gives energy upon consumption', 13000, 1, 1, 1, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:3;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 0),
(112, 5, 'Medical Pack', 'use this to get out of hospital', 10000, 1, 1, 1, 'a:4:{s:4:"stat";s:8:"hospital";s:3:"dir";s:3:"neg";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:15;}', 1, 'a:4:{s:4:"stat";s:2:"hp";s:3:"dir";s:3:"pos";s:8:"inc_type";s:7:"percent";s:10:"inc_amount";i:100;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 0),
(113, 8, 'Get out of Jail free', 'get out of jail', 15000, 1, 1, 1, 'a:4:{s:4:"stat";s:4:"jail";s:3:"dir";s:3:"neg";s:8:"inc_type";s:7:"percent";s:10:"inc_amount";i:100;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 'a:4:{s:4:"stat";s:6:"energy";s:3:"dir";s:3:"pos";s:8:"inc_type";s:6:"figure";s:10:"inc_amount";i:0;}', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `itemselllogs`
--

CREATE TABLE IF NOT EXISTS `itemselllogs` (
  `isID` int(11) NOT NULL AUTO_INCREMENT,
  `isUSER` int(11) NOT NULL DEFAULT '0',
  `isITEM` int(11) NOT NULL DEFAULT '0',
  `isTOTALPRICE` int(11) NOT NULL DEFAULT '0',
  `isQTY` int(11) NOT NULL DEFAULT '0',
  `isTIME` int(11) NOT NULL DEFAULT '0',
  `isCONTENT` text NOT NULL,
  PRIMARY KEY (`isID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `itemtypes`
--

CREATE TABLE IF NOT EXISTS `itemtypes` (
  `itmtypeid` int(11) NOT NULL AUTO_INCREMENT,
  `itmtypename` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`itmtypeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `itemtypes`
--

INSERT INTO `itemtypes` (`itmtypeid`, `itmtypename`) VALUES
(1, 'Food'),
(2, 'Electronics'),
(3, 'Melee Weapon'),
(4, 'Gun'),
(5, 'Medical'),
(6, 'Collectible'),
(7, 'Armour'),
(8, 'Booster');

-- --------------------------------------------------------

--
-- Table structure for table `itemxferlogs`
--

CREATE TABLE IF NOT EXISTS `itemxferlogs` (
  `ixID` int(11) NOT NULL AUTO_INCREMENT,
  `ixFROM` int(11) NOT NULL DEFAULT '0',
  `ixTO` int(11) NOT NULL DEFAULT '0',
  `ixITEM` int(11) NOT NULL DEFAULT '0',
  `ixQTY` int(11) NOT NULL DEFAULT '0',
  `ixTIME` int(11) NOT NULL DEFAULT '0',
  `ixFROMIP` varchar(255) NOT NULL DEFAULT '',
  `ixTOIP` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`ixID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jaillogs`
--

CREATE TABLE IF NOT EXISTS `jaillogs` (
  `jaID` int(11) NOT NULL AUTO_INCREMENT,
  `jaJAILER` int(11) NOT NULL DEFAULT '0',
  `jaJAILED` int(11) NOT NULL DEFAULT '0',
  `jaDAYS` int(11) NOT NULL DEFAULT '0',
  `jaREASON` longtext NOT NULL,
  `jaTIME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jaID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobranks`
--

CREATE TABLE IF NOT EXISTS `jobranks` (
  `jrID` int(11) NOT NULL AUTO_INCREMENT,
  `jrNAME` varchar(255) NOT NULL DEFAULT '',
  `jrJOB` int(11) NOT NULL DEFAULT '0',
  `jrPAY` int(11) NOT NULL DEFAULT '0',
  `jrIQG` int(11) NOT NULL DEFAULT '0',
  `jrLABOURG` int(11) NOT NULL DEFAULT '0',
  `jrSTRG` int(11) NOT NULL DEFAULT '0',
  `jrIQN` int(11) NOT NULL DEFAULT '0',
  `jrLABOURN` int(11) NOT NULL DEFAULT '0',
  `jrSTRN` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jrID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `jobranks`
--

INSERT INTO `jobranks` (`jrID`, `jrNAME`, `jrJOB`, `jrPAY`, `jrIQG`, `jrLABOURG`, `jrSTRG`, `jrIQN`, `jrLABOURN`, `jrSTRN`) VALUES
(1, 'Receptionist', 1, 200, 2, 5, 3, 100, 150, 120),
(2, 'Student Intern', 1, 500, 7, 20, 10, 250, 400, 320),
(3, 'Nurse', 1, 1000, 15, 30, 18, 1000, 1500, 1200),
(4, 'Specialist', 1, 2000, 20, 38, 25, 1750, 2250, 2000),
(5, 'Surgeon', 1, 3500, 25, 45, 32, 3000, 4000, 3500),
(6, 'Stock Taker', 2, 50, 1, 6, 3, 10, 10, 10),
(7, 'Burger Flipper', 2, 200, 3, 20, 10, 20, 75, 40),
(8, 'Cashier', 2, 500, 5, 30, 15, 50, 1200, 750),
(9, 'Shift Manager', 2, 1000, 8, 37, 23, 100, 2000, 1750),
(10, 'General Manager', 2, 2000, 15, 45, 30, 200, 5000, 2500),
(11, 'Traffic Officer', 3, 150, 2, 3, 3, 90, 100, 100),
(12, 'Sargeant', 3, 400, 5, 10, 12, 200, 300, 325),
(13, 'Lieutenant', 3, 850, 10, 20, 25, 600, 1300, 1500),
(14, 'Deputy', 3, 1700, 17, 27, 32, 1000, 3000, 3750),
(15, 'Sheriff', 3, 3000, 20, 40, 45, 2500, 5500, 8500),
(16, 'Member of Parliament', 4, 250, 1, 2, 1, 40, 250, 75),
(17, 'Mayor', 4, 700, 5, 7, 3, 100, 800, 250),
(18, 'Prime Minister', 4, 1750, 9, 13, 7, 250, 2000, 750),
(19, 'Vice-President', 4, 4000, 12, 17, 13, 750, 5000, 2000),
(20, 'President', 4, 10000, 15, 25, 20, 2500, 15000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `jID` int(11) NOT NULL AUTO_INCREMENT,
  `jNAME` varchar(255) NOT NULL DEFAULT '',
  `jFIRST` int(11) NOT NULL DEFAULT '0',
  `jDESC` varchar(255) NOT NULL DEFAULT '',
  `jOWNER` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`jID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jID`, `jNAME`, `jFIRST`, `jDESC`, `jOWNER`) VALUES
(4, 'Government', 16, 'Got a great idea and think you can get people to listen? Run for government.', 'Public voters'),
(3, 'Police Department', 11, 'Do you dream of changing the world? Start here and fight crime.', 'Deputy Dickerson'),
(2, 'Burger Queen', 6, 'A whopper place to eat, and get worked off your feet.', 'Mr Thompson'),
(1, 'Hospital', 1, 'While the demands and stresses of hospital work are many, so are the rewards that come from helping people in need. Everything you do supports families and patients when they are at their most vulnerable. It really is a very special type of work. ', 'Dr. Johnson');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `mail_read` int(11) NOT NULL DEFAULT '0',
  `mail_from` int(11) NOT NULL DEFAULT '0',
  `mail_to` int(11) NOT NULL DEFAULT '0',
  `mail_time` int(11) NOT NULL DEFAULT '0',
  `mail_subject` varchar(255) NOT NULL DEFAULT '',
  `mail_text` text NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `mail_read`, `mail_from`, `mail_to`, `mail_time`, `mail_subject`, `mail_text`) VALUES
(1, 1, 1, 20, 1460323951, 'test', 'sup faggggg'),
(2, 1, 20, 1, 1460325209, '', 'Hey dude not alot just training then off for some diablo really loving this game.'),
(3, 0, 1, 20, 1460327135, '', 'niceeee go kill some (trolls?) I have no idea I dont play diablo lol!! Thanks man I really appreciate you trying it out');

-- --------------------------------------------------------

--
-- Table structure for table `npaper`
--

CREATE TABLE IF NOT EXISTS `npaper` (
  `npID` int(11) NOT NULL AUTO_INCREMENT,
  `npADDER` int(11) NOT NULL DEFAULT '0',
  `npTITLE` varchar(255) NOT NULL DEFAULT '',
  `npBODY` text NOT NULL,
  `npTIME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`npID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `oclogs`
--

CREATE TABLE IF NOT EXISTS `oclogs` (
  `oclID` int(11) NOT NULL AUTO_INCREMENT,
  `oclOC` int(11) NOT NULL DEFAULT '0',
  `oclGANG` int(11) NOT NULL DEFAULT '0',
  `oclLOG` text NOT NULL,
  `oclRESULT` enum('success','failure') NOT NULL DEFAULT 'success',
  `oclMONEY` int(11) NOT NULL DEFAULT '0',
  `ocCRIMEN` varchar(255) NOT NULL DEFAULT '',
  `ocTIME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oclID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orgcrimes`
--

CREATE TABLE IF NOT EXISTS `orgcrimes` (
  `ocID` int(11) NOT NULL AUTO_INCREMENT,
  `ocNAME` varchar(255) NOT NULL DEFAULT '',
  `ocUSERS` int(11) NOT NULL DEFAULT '0',
  `ocSTARTTEXT` text NOT NULL,
  `ocSUCCTEXT` text NOT NULL,
  `ocFAILTEXT` text NOT NULL,
  `ocMINMONEY` int(11) NOT NULL DEFAULT '0',
  `ocMAXMONEY` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ocID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `papercontent`
--

CREATE TABLE IF NOT EXISTS `papercontent` (
  `content` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papercontent`
--

INSERT INTO `papercontent` (`content`) VALUES
('Here you can put game news, or prehaps an update log.');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE IF NOT EXISTS `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` enum('0','1') NOT NULL DEFAULT '0',
  `question` varchar(255) NOT NULL DEFAULT '',
  `choice1` varchar(255) NOT NULL DEFAULT '',
  `choice2` varchar(255) NOT NULL DEFAULT '',
  `choice3` varchar(255) NOT NULL DEFAULT '',
  `choice4` varchar(255) NOT NULL DEFAULT '',
  `choice5` varchar(255) NOT NULL DEFAULT '',
  `choice6` varchar(255) NOT NULL DEFAULT '',
  `choice7` varchar(255) NOT NULL DEFAULT '',
  `choice8` varchar(255) NOT NULL DEFAULT '',
  `choice9` varchar(255) NOT NULL DEFAULT '',
  `choice10` varchar(255) NOT NULL DEFAULT '',
  `voted1` int(11) NOT NULL DEFAULT '0',
  `voted2` int(11) NOT NULL DEFAULT '0',
  `voted3` int(11) NOT NULL DEFAULT '0',
  `voted4` int(11) NOT NULL DEFAULT '0',
  `voted5` int(11) NOT NULL DEFAULT '0',
  `voted6` int(11) NOT NULL DEFAULT '0',
  `voted7` int(11) NOT NULL DEFAULT '0',
  `voted8` int(11) NOT NULL DEFAULT '0',
  `voted9` int(11) NOT NULL DEFAULT '0',
  `voted10` int(11) NOT NULL DEFAULT '0',
  `votes` int(11) NOT NULL DEFAULT '0',
  `winner` int(11) NOT NULL DEFAULT '0',
  `hidden` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `preports`
--

CREATE TABLE IF NOT EXISTS `preports` (
  `prID` int(11) NOT NULL AUTO_INCREMENT,
  `prREPORTER` int(11) NOT NULL DEFAULT '0',
  `prREPORTED` int(11) NOT NULL DEFAULT '0',
  `prTEXT` longtext NOT NULL,
  PRIMARY KEY (`prID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `referals`
--

CREATE TABLE IF NOT EXISTS `referals` (
  `refID` int(11) NOT NULL AUTO_INCREMENT,
  `refREFER` int(11) NOT NULL DEFAULT '0',
  `refREFED` int(11) NOT NULL DEFAULT '0',
  `refTIME` int(11) NOT NULL DEFAULT '0',
  `refREFERIP` varchar(15) NOT NULL DEFAULT '127.0.0.1',
  `refREFEDIP` varchar(15) NOT NULL DEFAULT '127.0.0.1',
  PRIMARY KEY (`refID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `searchid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `moneymin` int(11) NOT NULL DEFAULT '1',
  `daysmax` varchar(255) NOT NULL DEFAULT '',
  `daysmin` varchar(255) NOT NULL DEFAULT '',
  `levelmin` int(11) NOT NULL DEFAULT '1',
  `levelmax` int(11) NOT NULL DEFAULT '500',
  `id` varchar(255) NOT NULL DEFAULT '',
  `location` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL DEFAULT '',
  `online` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `conf_id` int(11) NOT NULL AUTO_INCREMENT,
  `conf_name` varchar(255) NOT NULL DEFAULT '',
  `conf_value` text NOT NULL,
  PRIMARY KEY (`conf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`conf_id`, `conf_name`, `conf_value`) VALUES
(1, 'validate_period', '15'),
(2, 'validate_on', '0'),
(3, 'regcap_on', '0'),
(4, 'hospital_count', '0'),
(5, 'jail_count', '0'),
(6, 'sendcrys_on', '1'),
(7, 'sendbank_on', '1'),
(8, 'ct_refillprice', '12'),
(9, 'ct_iqpercrys', '5'),
(10, 'ct_moneypercrys', '200'),
(11, 'staff_pad', 'Here you can store notes for all staff to see.'),
(12, 'willp_item', '96'),
(14, 'game_name', 'State Street'),
(15, 'game_owner', 'Carl McDermott'),
(16, 'paypal', 'macdiarmada93@gmail.com'),
(17, 'game_description', 'There are 3 basic ‘users’ but you cannot simply select these playing styles. You are the playing style.<br/>\r\n<b>The Brawler:</b> The most feared in town. You’ve put that work in getting your stats up slowly and now it’s time to reap the benefits.<br/> You can go around attacking players who mocked your strong etiquette and dedication to making your stats better.<br/> When you defeat your enemies you have the option to mug them, take some of their hard-earned (or dirty) cash for yourself.<br/><br/>\r\n<b>The Criminal:</b> You see this person in jail a little too often. They went in as a twig came out like a log.<br/> If you don’t see them burning down warehouses for a cut of insurance, you’ll be sure to find them in the black market selling the guns and drugs that “fell off the back of a truck”.<br/><br/>\r\n<b>The CEO:</b> You’ve come a long way from being a Burger Flipper, but you finally have your own franchise built from the ground up and a solid skyscraper on State Street<br/> with your name on it. You know how difficult it can be, scraping the bottom of the barrel,<br/> but you appreciate all the scars you’ve acquired getting to the top, now it’s time to sit back, relax and let the money roll in.<br/>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `shopitems`
--

CREATE TABLE IF NOT EXISTS `shopitems` (
  `sitemID` int(11) NOT NULL AUTO_INCREMENT,
  `sitemSHOP` int(11) NOT NULL DEFAULT '0',
  `sitemITEMID` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sitemID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `shopitems`
--

INSERT INTO `shopitems` (`sitemID`, `sitemSHOP`, `sitemITEMID`) VALUES
(1, 3, 109),
(2, 2, 112),
(3, 2, 3),
(4, 6, 77),
(5, 6, 89),
(6, 10, 39),
(7, 10, 70),
(8, 10, 99),
(9, 10, 100),
(10, 10, 97),
(11, 10, 80),
(12, 10, 44),
(13, 9, 56),
(14, 9, 86),
(15, 9, 14),
(16, 9, 83),
(17, 9, 36),
(18, 9, 87),
(19, 4, 6),
(20, 4, 15),
(21, 4, 111);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `shopID` int(11) NOT NULL AUTO_INCREMENT,
  `shopLOCATION` int(11) NOT NULL DEFAULT '0',
  `shopNAME` varchar(255) NOT NULL DEFAULT '',
  `shopDESCRIPTION` text NOT NULL,
  PRIMARY KEY (`shopID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shopID`, `shopLOCATION`, `shopNAME`, `shopDESCRIPTION`) VALUES
(6, 1, 'Industrial Weapons', 'All the high techweapons you could need'),
(2, 1, 'Pharmacy Shop', 'The one-stop medi-shop.'),
(3, 1, 'Weapons Central', 'The one place for all weapons.'),
(4, 1, 'Weed store', 'We sell Weed'),
(5, 1, 'Drug Store', 'We sell Steriods'),
(10, 1, 'Strong Weaponary', 'Space age weaponary here'),
(9, 1, 'Ultra Weapons', 'Only the truly powerful weapons.');

-- --------------------------------------------------------

--
-- Table structure for table `shoutarea`
--

CREATE TABLE IF NOT EXISTS `shoutarea` (
  `Key` int(11) NOT NULL AUTO_INCREMENT,
  `User` int(5) NOT NULL,
  `Shout` varchar(45) NOT NULL,
  `Date` int(2) NOT NULL,
  PRIMARY KEY (`Key`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shoutarea`
--

INSERT INTO `shoutarea` (`Key`, `User`, `Shout`, `Date`) VALUES
(1, 19, 'yo yo yo', 10),
(2, 20, 'Hello', 10),
(3, 1, 'bing bong', 10);

-- --------------------------------------------------------

--
-- Table structure for table `stafflog`
--

CREATE TABLE IF NOT EXISTS `stafflog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL DEFAULT '0',
  `action` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `stafflog`
--

INSERT INTO `stafflog` (`id`, `user`, `time`, `action`, `ip`) VALUES
(1, 1, 1454972114, 'Gave 1 of item ID 78 to user ID 1', '::1'),
(2, 1, 1456092987, 'Added item type Booster', '::1'),
(3, 1, 1456093042, 'Created item E-DVD', '::1'),
(4, 1, 1456093080, 'Gave 10 of item ID 108 to user ID 1', '::1'),
(5, 1, 1459032276, 'Created item Gun', '::1'),
(6, 1, 1459032347, 'Added Item ID 109 to shop ID 3', '::1'),
(7, 1, 1460246572, 'Edited house Warehouse', '31.187.6.145'),
(8, 1, 1460246620, 'Edited house Apartment', '31.187.6.145'),
(9, 1, 1460246670, 'Edited house Beach House', '31.187.6.145'),
(10, 1, 1460246708, 'Edited house Castle', '31.187.6.145'),
(11, 1, 1460246744, 'Edited house Chalet', '31.187.6.145'),
(12, 1, 1460246787, 'Edited house Hotel', '31.187.6.145'),
(13, 1, 1460246818, 'Edited house Huge Island', '31.187.6.145'),
(14, 1, 1460246842, 'Edited house Large House', '31.187.6.145'),
(15, 1, 1460246877, 'Edited house Large Island', '31.187.6.145'),
(16, 1, 1460246902, 'Edited house Mansion', '31.187.6.145'),
(17, 1, 1460246955, 'Edited house Motel', '31.187.6.145'),
(18, 1, 1460246984, 'Edited house Penthouse', '31.187.6.145'),
(19, 1, 1460247013, 'Edited house Ranch', '31.187.6.145'),
(20, 1, 1460247059, 'Edited house Shack', '31.187.6.145'),
(21, 1, 1460247096, 'Edited house Bungalow', '31.187.6.145'),
(22, 1, 1460247135, 'Edited house Small Island', '31.187.6.145'),
(23, 1, 1460247173, 'Edited house Trailer', '31.187.6.145'),
(24, 1, 1460247199, 'Edited house Villa', '31.187.6.145'),
(25, 1, 1460248568, 'Added a new announcement', '31.187.6.145'),
(26, 1, 1460248607, 'Added Challenge Bot Scar.', '31.187.6.145'),
(27, 1, 1460274201, 'Created user aneel [8]', '31.187.6.145'),
(28, 1, 1460274220, 'Edited user aneel [8]', '31.187.6.145'),
(29, 1, 1460274261, 'Created user ciaran [9]', '31.187.6.145'),
(30, 1, 1460274276, 'Credited aneel [8] $0 and/or 36 crystals.', '31.187.6.145'),
(31, 1, 1460274283, 'Credited ciaran [9] $0 and/or 36 crystals.', '31.187.6.145'),
(32, 1, 1460274360, 'Created user demoStr [10]', '31.187.6.145'),
(33, 1, 1460274405, 'Created user demoAgility [11]', '31.187.6.145'),
(34, 1, 1460274506, 'Created user demoBrawn [12]', '31.187.6.145'),
(35, 1, 1460274801, 'Created user demoAccuracy [13]', '31.187.6.145'),
(36, 1, 1460277453, 'Gave 1 of item ID 37 to user ID 8', '31.187.6.145'),
(37, 1, 1460277471, 'Gave 1 of item ID 89 to user ID 9', '31.187.6.145'),
(38, 1, 1460277492, 'Credited aneel [8] $50000 and/or 0 crystals.', '31.187.6.145'),
(39, 1, 1460277496, 'Credited ciaran [9] $50000 and/or 0 crystals.', '31.187.6.145'),
(40, 1, 1460277707, 'Edited user carltest [3]', '31.187.6.145'),
(41, 1, 1460278671, 'Created item Medical Pack', '31.187.6.145'),
(42, 1, 1460278733, 'Created item Get out of Jail free', '31.187.6.145'),
(43, 1, 1460278749, 'Gave 5 of item ID 112 to user ID 8', '31.187.6.145'),
(44, 1, 1460278754, 'Gave 5 of item ID 112 to user ID 1', '31.187.6.145'),
(45, 1, 1460278757, 'Gave 5 of item ID 112 to user ID 3', '31.187.6.145'),
(46, 1, 1460278762, 'Gave 5 of item ID 112 to user ID 9', '31.187.6.145'),
(47, 1, 1460313698, 'Edited user debbi [14]', '89.100.79.209'),
(48, 1, 1460313886, 'Created user debbi1 [16]', '89.100.79.209'),
(49, 1, 1460317951, 'Edited crime Search the streets', '31.187.6.145'),
(50, 1, 1460318130, 'Edited crime Beg for money', '31.187.6.145'),
(51, 1, 1460318390, 'Edited crime Sell bootleg CDs', '31.187.6.145'),
(52, 1, 1460318506, 'Edited crime Sell Bootleg DVDs', '31.187.6.145'),
(53, 1, 1460318733, 'Edited crime Steal from a local store', '31.187.6.145'),
(54, 1, 1460319002, 'Edited crime Pickpocket Someone', '31.187.6.145'),
(55, 1, 1460319176, 'Edited crime Steal from someones home', '31.187.6.145'),
(56, 1, 1460319507, 'Edited crime Hold up a bank', '31.187.6.145'),
(57, 1, 1460319569, 'Added Item ID 112 to shop ID 2', '31.187.6.145'),
(58, 1, 1460319595, 'Added Item ID 3 to shop ID 2', '31.187.6.145'),
(59, 1, 1460319620, 'Added Item ID 77 to shop ID 6', '31.187.6.145'),
(60, 1, 1460319641, 'Added Item ID 89 to shop ID 6', '31.187.6.145'),
(61, 1, 1460319657, 'Added Item ID 39 to shop ID 10', '31.187.6.145'),
(62, 1, 1460319678, 'Added Item ID 70 to shop ID 10', '31.187.6.145'),
(63, 1, 1460319685, 'Added Item ID 99 to shop ID 10', '31.187.6.145'),
(64, 1, 1460319689, 'Added Item ID 100 to shop ID 10', '31.187.6.145'),
(65, 1, 1460319692, 'Added Item ID 97 to shop ID 10', '31.187.6.145'),
(66, 1, 1460319696, 'Added Item ID 80 to shop ID 10', '31.187.6.145'),
(67, 1, 1460319705, 'Added Item ID 44 to shop ID 10', '31.187.6.145'),
(68, 1, 1460319717, 'Added Item ID 56 to shop ID 9', '31.187.6.145'),
(69, 1, 1460319741, 'Added Item ID 86 to shop ID 9', '31.187.6.145'),
(70, 1, 1460319745, 'Added Item ID 14 to shop ID 9', '31.187.6.145'),
(71, 1, 1460319751, 'Added Item ID 83 to shop ID 9', '31.187.6.145'),
(72, 1, 1460319754, 'Added Item ID 36 to shop ID 9', '31.187.6.145'),
(73, 1, 1460319759, 'Added Item ID 87 to shop ID 9', '31.187.6.145'),
(74, 1, 1460319772, 'Added Item ID 6 to shop ID 4', '31.187.6.145'),
(75, 1, 1460319777, 'Added Item ID 15 to shop ID 4', '31.187.6.145'),
(76, 1, 1460319789, 'Added Item ID 111 to shop ID 4', '31.187.6.145'),
(77, 1, 1460321152, 'Gave 5 of item ID 113 to user ID 20', '31.187.6.145'),
(78, 1, 1460322308, 'Created Forum General Discussion', '31.187.6.145'),
(79, 1, 1460322394, 'Gave 5 of item ID 113 to user ID 1', '31.187.6.145'),
(80, 1, 1460324303, 'Updated the basic game settings', '31.187.6.145');

-- --------------------------------------------------------

--
-- Table structure for table `staffnotelogs`
--

CREATE TABLE IF NOT EXISTS `staffnotelogs` (
  `snID` int(11) NOT NULL AUTO_INCREMENT,
  `snCHANGER` int(11) NOT NULL DEFAULT '0',
  `snCHANGED` int(11) NOT NULL DEFAULT '0',
  `snTIME` int(11) NOT NULL DEFAULT '0',
  `snOLD` longtext NOT NULL,
  `snNEW` longtext NOT NULL,
  PRIMARY KEY (`snID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock_holdings`
--

CREATE TABLE IF NOT EXISTS `stock_holdings` (
  `holdingID` bigint(25) NOT NULL AUTO_INCREMENT,
  `holdingUSER` bigint(25) NOT NULL DEFAULT '0',
  `holdingSTOCK` bigint(25) NOT NULL DEFAULT '0',
  `holdingQTY` bigint(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`holdingID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `stock_records`
--

CREATE TABLE IF NOT EXISTS `stock_records` (
  `recordUSER` bigint(25) NOT NULL DEFAULT '0',
  `recordTIME` bigint(25) NOT NULL DEFAULT '0',
  `recordTEXT` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_records`
--

INSERT INTO `stock_records` (`recordUSER`, `recordTIME`, `recordTEXT`) VALUES
(1, 1454972322, 'me bought 100000 of stock Blah for $180,000,000'),
(1, 1454972371, 'me sold 100000 of stock Blah for $2,200,000,000');

-- --------------------------------------------------------

--
-- Table structure for table `stock_stocks`
--

CREATE TABLE IF NOT EXISTS `stock_stocks` (
  `stockID` bigint(25) NOT NULL AUTO_INCREMENT,
  `stockNAME` varchar(255) NOT NULL DEFAULT 'Default Stock Name',
  `stockOPRICE` bigint(25) NOT NULL DEFAULT '0',
  `stockNPRICE` bigint(25) NOT NULL DEFAULT '0',
  `stockCHANGE` int(25) NOT NULL DEFAULT '50',
  `stockUD` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`stockID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stock_stocks`
--

INSERT INTO `stock_stocks` (`stockID`, `stockNAME`, `stockOPRICE`, `stockNPRICE`, `stockCHANGE`, `stockUD`) VALUES
(1, 'Blah', 2000, 17743, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `surrenders`
--

CREATE TABLE IF NOT EXISTS `surrenders` (
  `surID` int(11) NOT NULL AUTO_INCREMENT,
  `surWAR` int(11) NOT NULL DEFAULT '0',
  `surWHO` int(11) NOT NULL DEFAULT '0',
  `surTO` int(11) NOT NULL DEFAULT '0',
  `surMSG` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`surID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unjaillogs`
--

CREATE TABLE IF NOT EXISTS `unjaillogs` (
  `ujaID` int(11) NOT NULL AUTO_INCREMENT,
  `ujaJAILER` int(11) NOT NULL DEFAULT '0',
  `ujaJAILED` int(11) NOT NULL DEFAULT '0',
  `ujaTIME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ujaID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `userpass` varchar(255) NOT NULL DEFAULT '',
  `level` int(11) NOT NULL DEFAULT '0',
  `exp` decimal(11,4) NOT NULL DEFAULT '0.0000',
  `money` int(11) NOT NULL DEFAULT '0',
  `crystals` int(11) NOT NULL DEFAULT '0',
  `laston` int(11) NOT NULL DEFAULT '0',
  `lastip` varchar(255) NOT NULL DEFAULT '',
  `job` int(11) NOT NULL DEFAULT '0',
  `energy` int(11) NOT NULL DEFAULT '0',
  `will` int(11) NOT NULL DEFAULT '0',
  `maxwill` int(11) NOT NULL DEFAULT '0',
  `brave` int(11) NOT NULL DEFAULT '0',
  `maxbrave` int(11) NOT NULL DEFAULT '0',
  `maxenergy` int(11) NOT NULL DEFAULT '0',
  `hp` int(11) NOT NULL DEFAULT '0',
  `maxhp` int(11) NOT NULL DEFAULT '0',
  `lastrest_life` int(11) NOT NULL DEFAULT '0',
  `lastrest_other` int(11) NOT NULL DEFAULT '0',
  `location` int(11) NOT NULL DEFAULT '0',
  `hospital` int(11) NOT NULL DEFAULT '0',
  `jail` int(11) NOT NULL DEFAULT '0',
  `jail_reason` varchar(255) NOT NULL DEFAULT '',
  `fedjail` int(11) NOT NULL DEFAULT '0',
  `user_level` int(11) NOT NULL DEFAULT '1',
  `gender` enum('Male','Female') NOT NULL DEFAULT 'Male',
  `daysold` int(11) NOT NULL DEFAULT '0',
  `signedup` int(11) NOT NULL DEFAULT '0',
  `gang` int(11) NOT NULL DEFAULT '0',
  `daysingang` int(11) NOT NULL DEFAULT '0',
  `course` int(11) NOT NULL DEFAULT '0',
  `cdays` int(11) NOT NULL DEFAULT '0',
  `jobrank` int(11) NOT NULL DEFAULT '0',
  `donatordays` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '',
  `login_name` varchar(255) NOT NULL DEFAULT '',
  `display_pic` text NOT NULL,
  `duties` varchar(255) NOT NULL DEFAULT 'N/A',
  `bankmoney` int(11) NOT NULL DEFAULT '0',
  `cybermoney` int(11) NOT NULL DEFAULT '-1',
  `staffnotes` longtext NOT NULL,
  `mailban` int(11) NOT NULL DEFAULT '0',
  `mb_reason` varchar(255) NOT NULL DEFAULT '',
  `hospreason` varchar(255) NOT NULL DEFAULT '',
  `lastip_login` varchar(255) NOT NULL DEFAULT '127.0.0.1',
  `lastip_signup` varchar(255) NOT NULL DEFAULT '127.0.0.1',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `voted` text NOT NULL,
  `crimexp` int(11) NOT NULL DEFAULT '0',
  `attacking` int(11) NOT NULL DEFAULT '0',
  `verified` int(11) NOT NULL DEFAULT '0',
  `forumban` int(11) NOT NULL DEFAULT '0',
  `fb_reason` varchar(255) NOT NULL DEFAULT '',
  `posts` int(11) NOT NULL DEFAULT '0',
  `forums_avatar` varchar(255) NOT NULL DEFAULT '',
  `forums_signature` text NOT NULL,
  `new_events` int(11) NOT NULL DEFAULT '0',
  `new_mail` int(11) NOT NULL DEFAULT '0',
  `friend_count` int(11) NOT NULL DEFAULT '0',
  `enemy_count` int(11) NOT NULL DEFAULT '0',
  `new_announcements` int(11) NOT NULL DEFAULT '0',
  `boxes_opened` int(11) NOT NULL DEFAULT '0',
  `user_notepad` text NOT NULL,
  `equip_primary` int(11) NOT NULL DEFAULT '0',
  `equip_secondary` int(11) NOT NULL DEFAULT '0',
  `equip_armor` int(11) NOT NULL DEFAULT '0',
  `force_logout` tinyint(4) NOT NULL DEFAULT '0',
  `turns` int(11) NOT NULL DEFAULT '25',
  `ratings` int(11) NOT NULL DEFAULT '0',
  `rates` int(11) NOT NULL DEFAULT '1',
  `warehouse` int(11) NOT NULL DEFAULT '0',
  `matches` int(11) NOT NULL DEFAULT '0',
  `petrol` int(11) NOT NULL DEFAULT '0',
  `traveltime` int(11) NOT NULL DEFAULT '0',
  `signature` text NOT NULL,
  `lastShout` int(2) NOT NULL DEFAULT '0',
  `sA_Ban` varchar(100) NOT NULL,
  `brothel` int(11) NOT NULL,
  `comppoints` int(11) NOT NULL DEFAULT '0',
  `business` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `activedays` int(11) NOT NULL DEFAULT '0',
  `rob` int(11) NOT NULL DEFAULT '0',
  `bguard` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `userpass`, `level`, `exp`, `money`, `crystals`, `laston`, `lastip`, `job`, `energy`, `will`, `maxwill`, `brave`, `maxbrave`, `maxenergy`, `hp`, `maxhp`, `lastrest_life`, `lastrest_other`, `location`, `hospital`, `jail`, `jail_reason`, `fedjail`, `user_level`, `gender`, `daysold`, `signedup`, `gang`, `daysingang`, `course`, `cdays`, `jobrank`, `donatordays`, `email`, `login_name`, `display_pic`, `duties`, `bankmoney`, `cybermoney`, `staffnotes`, `mailban`, `mb_reason`, `hospreason`, `lastip_login`, `lastip_signup`, `last_login`, `voted`, `crimexp`, `attacking`, `verified`, `forumban`, `fb_reason`, `posts`, `forums_avatar`, `forums_signature`, `new_events`, `new_mail`, `friend_count`, `enemy_count`, `new_announcements`, `boxes_opened`, `user_notepad`, `equip_primary`, `equip_secondary`, `equip_armor`, `force_logout`, `turns`, `ratings`, `rates`, `warehouse`, `matches`, `petrol`, `traveltime`, `signature`, `lastShout`, `sA_Ban`, `brothel`, `comppoints`, `business`, `active`, `activedays`, `rob`, `bguard`) VALUES
(1, 'carlmacdiarmada', '3e6803ad1927ac876978e0c58ce95c76', 23, '20107.5000', 4160095, 999429, 1460328596, '31.187.6.145', 2, 120044, 2800, 50000, 285, 544, 120044, 1001100, 1001100, 0, 0, 1, 0, 0, 'Got caught searching the warehouse', 0, 2, 'Male', 2, 1454971612, 1, 1, 0, 0, 6, 1000, 'carlmacdiarmada@hotmail.com', 'carlmacdiarmada', 'http://localhost/images/avatar.gif', 'N/A', 2147483647, -1, '', 0, '', '', '31.187.6.145', '::1', 1460327932, '', 1860, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, 'I am a note', 109, 0, 0, 0, 25, 0, 1, 1, 0, 0, 0, '', 4, '', 0, 0, 3, 1, 0, 0, 0),
(2, 'attack', '9328d58e1b6bdbcf223afc7f85417cfd', 1, '0.0000', 100, 0, 1456177809, '::1', 0, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 1, 'Male', 1, 1456177739, 0, 0, 0, 0, 0, 0, 'asd@ads.com', 'attack', 'http://localhost/images/avatar.gif', 'N/A', -1, -1, '', 0, '', 'Left by <a href=''viewuser.php?u=1''>carlmacdiarmada</a>', '::1', '::1', 1456177756, '', 0, 0, 0, 0, '', 0, '', '', 1, 0, 0, 0, 1, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 1, 0, 0, 0),
(3, 'carltest', '9328d58e1b6bdbcf223afc7f85417cfd', 4, '150.0000', 42930, 10, 1460319512, '31.187.6.145', 0, 18, 100, 100, 11, 11, 18, 250, 250, 0, 0, 1, 0, 0, 'got busted', 0, 1, 'Female', 7, 1459712606, 0, 0, 0, 0, 0, 0, 'sdas@asda.com', 'carltest', 'http://s3.amazonaws.com/profileimages.torn.com/59644fd1-e208-20ad-1188181.jpg', 'N/A', -1, -1, '', 0, '', 'Left by <a href=''viewuser.php?u=1''>carlmacdiarmada</a>', '31.187.6.145', '', 1460317800, '', 130, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, 'I am a test', 109, 0, 0, 0, 25, -1, 1, 0, 0, 0, 0, '', 6, '', 0, 0, 3, 1, 3, 0, 0),
(4, 'mpink219 ', '11684a15cc7b44085a4dad07e5355454', 1, '0.0000', 100, 0, 1459791315, '146.115.155.201', 0, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 1, 'Female', 6, 1459790763, 0, 0, 0, 0, 0, 0, 'mpinkwas@gmail.com', 'mpink219 ', 'http://www.statestreetgame.com/images/avatar.gif', 'N/A', -1, -1, '', 0, '', '', '146.115.155.201', '146.115.155.201', 1459790775, '', 0, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 2, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 1, 0, 0),
(5, 'dfghdfghdf', 'f1d67b7d97977e5a89bcd78cf8dda135', 1, '7.5000', 250, 0, 1460054606, '79.197.240.135', 2, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 1, 'Female', 3, 1460054153, 0, 0, 0, 0, 6, 0, 'dfghdfghdf@mailinator.com', 'dfghdfghdf', 'http://www.statestreetgame.com/images/avatar.gif', 'N/A', -1, -1, '', 0, '', '', '79.197.240.135', '79.197.240.135', 1460054168, '', 0, 0, 0, 0, '', 0, '', '', 0, 1, 0, 0, 1, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 1, 0, 0),
(6, 'Sturgina', 'e456c440298644d1f204da9d34f0098e', 2, '14.5000', 420, 0, 1460152472, '97.94.28.240', 2, 14, 100, 100, 7, 7, 14, 150, 150, 0, 0, 1, 0, 0, 'Searching the streets for cash', 0, 1, 'Male', 3, 1460064968, 0, 0, 0, 0, 6, 0, 'david@chinookts.com', 'Sturgina', 'http://www.statestreetgame.com/images/avatar.gif', 'N/A', -1, -1, '', 0, '', '', '97.94.28.240', '97.94.28.240', 1460127781, '', 260, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 1, 0, '', 110, 109, 0, 0, 25, 1, 1, 0, 0, 0, 0, '', 21, '', 0, 0, 0, 0, 2, 0, 0),
(7, 'Scar', '055aa1e4e2d742a1b152b90b63098b7b', 1, '0.0000', 100, 0, 0, '', 0, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 0, 'Male', 2, 1460125156, 0, 0, 0, 0, 0, 0, 'npc@statestreetgame.com', 'Scar', '', 'N/A', -1, -1, '', 0, '', 'Mugged by <a href=''viewuser.php?u=1''>carlmacdiarmada</a>', '127.0.0.1', '127.0.0.1', 0, '', 0, 0, 0, 0, '', 0, '', '', 1, 0, 0, 0, 1, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(8, 'aneel', '3e6803ad1927ac876978e0c58ce95c76', 1, '0.0000', 150000, 36, 1460274549, '31.187.6.145', 0, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 1, 'Male', 0, 1460274201, 0, 0, 0, 0, 0, 0, 'aneel@statestreetgame.com', 'aneel', '', 'N/A', -1, -1, '', 0, '', '', '31.187.6.145', '127.0.0.1', 1460274548, '', 0, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 1, 0, 0, 0),
(9, 'ciaran', '3e6803ad1927ac876978e0c58ce95c76', 1, '0.0000', 50100, 36, 1460274562, '31.187.6.145', 0, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 1, 'Male', 0, 1460274261, 0, 0, 0, 0, 0, 0, 'ciaran@statestreetgame.com', 'ciaran', '', 'N/A', -1, -1, '', 0, '', '', '31.187.6.145', '127.0.0.1', 1460274562, '', 0, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 1, 0, 0, 0),
(10, 'demoStr', '3e6803ad1927ac876978e0c58ce95c76', 5, '0.0000', 10000, 0, 0, '', 0, 20, 100, 100, 13, 13, 20, 300, 300, 0, 0, 1, 0, 0, '', 0, 0, 'Male', 0, 1460274360, 0, 0, 0, 0, 0, 0, 'demoStr@statestreetgame.com', 'demoStr', '', 'N/A', -1, -1, '', 0, '', 'Left by <a href=''viewuser.php?u=1''>carlmacdiarmada</a>', '127.0.0.1', '127.0.0.1', 0, '', 0, 0, 0, 0, '', 0, '', '', 2, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(11, 'demoAgility', '3e6803ad1927ac876978e0c58ce95c76', 5, '0.0000', 10000, 0, 0, '', 0, 20, 100, 100, 13, 13, 20, 300, 300, 0, 0, 1, 0, 0, '', 0, 0, 'Male', 0, 1460274405, 0, 0, 0, 0, 0, 0, 'demoAgility@statestreetgame.com', 'demoAgility', '', 'N/A', -1, -1, '', 0, '', 'Left by <a href=''viewuser.php?u=3''>carltest</a>', '127.0.0.1', '127.0.0.1', 0, '', 0, 0, 0, 0, '', 0, '', '', 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(12, 'demoBrawn', '3e6803ad1927ac876978e0c58ce95c76', 5, '0.0000', 10000, 0, 0, '', 0, 20, 100, 100, 13, 13, 20, 300, 300, 0, 0, 1, 0, 0, '', 0, 0, 'Male', 0, 1460274506, 0, 0, 0, 0, 0, 0, 'demoBrawn@statestreetgame.com', 'demoBrawn', '', 'N/A', -1, -1, '', 0, '', 'Left by <a href=''viewuser.php?u=3''>carltest</a>', '127.0.0.1', '127.0.0.1', 0, '', 0, 0, 0, 0, '', 0, '', '', 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(13, 'demoAccuracy', '3e6803ad1927ac876978e0c58ce95c76', 5, '0.0000', 10000, 0, 0, '', 0, 20, 100, 100, 13, 13, 20, 300, 300, 0, 0, 1, 0, 0, '', 0, 0, 'Male', 0, 1460274801, 0, 0, 0, 0, 0, 0, 'demoAccuracu@statestreetgame.com', 'demoAccuracy', '', 'N/A', -1, -1, '', 0, '', 'Left by <a href=''viewuser.php?u=3''>carltest</a>', '127.0.0.1', '127.0.0.1', 0, '', 0, 0, 0, 0, '', 0, '', '', 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(14, 'debbi', '1', 100, '0.0000', 0, 0, 0, '89.100.79.209', 0, 210, 100, 100, 203, 203, 210, 5050, 5050, 0, 0, 1, 0, 0, '', 0, 1, 'Female', 0, 1460313612, 0, 0, 0, 0, 0, 0, 'dlmd87@gmail.com', 'debbi', 'debbi', 'N/A', -1, -1, '', 0, '', '', '127.0.0.1', '89.100.79.209', 0, '', 0, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(15, 'debbitest', '1', 100, '0.0000', 0, 0, 0, '89.100.79.209', 0, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 1, 'Female', 0, 1460313769, 0, 0, 0, 0, 0, 0, 'asdas@asdas.com', '76f0186066147c4f71568fb3ce15efbd', 'debbitest', 'N/A', -1, -1, '', 0, '', '', '127.0.0.1', '89.100.79.209', 0, '', 0, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0),
(16, 'debbi1', 'd9c4f69cd235efbe45e3e703eb237d33', 1, '1.0000', 110, 0, 1460314081, '89.100.79.209', 2, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, 'got busted', 0, 1, 'Female', 0, 1460313886, 0, 0, 0, 0, 6, 0, 'ads@asd.com', 'debbi1', '', 'N/A', -1, -1, '', 0, '', '', '89.100.79.209', '127.0.0.1', 1460313899, '', 10, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 1, 0, 0, 0),
(17, 'carltest2', '9328d58e1b6bdbcf223afc7f85417cfd', 1, '0.0000', 100, 0, 1460316769, '31.187.6.145', 0, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 1, 'Male', 0, 1460316758, 0, 0, 0, 0, 0, 0, 'wqwew@aewq.com', 'carltest2', 'http://statestreetgame.com/images/avatar.gif', 'N/A', -1, -1, '', 0, '', '', '31.187.6.145', '31.187.6.145', 1460316769, '', 0, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 1, 0, 0, 0),
(18, 'carltest3', '9328d58e1b6bdbcf223afc7f85417cfd', 1, '0.0000', 100, 0, 1460317539, '31.187.6.145', 0, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 1, 'Male', 0, 1460317533, 0, 0, 0, 0, 0, 0, 'casre@asfd.com', 'carltest3', 'http://statestreetgame.com/images/avatar.gif', 'N/A', -1, -1, '', 0, '', '', '31.187.6.145', '31.187.6.145', 1460317539, '', 0, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 0, '', 0, 0, 0, 1, 0, 0, 0),
(19, 'NoGood', '8906ad0730d2da04b4eaec55b68c79db', 1, '3.0000', 130, 0, 1460320328, '73.196.187.119', 0, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, '', 0, 1, 'Male', 0, 1460320178, 0, 0, 0, 0, 0, 0, 'rgrams75@gmail.com', 'NoGood', 'http://statestreetgame.com/images/avatar.gif', 'N/A', -1, -1, '', 0, '', '', '73.196.187.119', '73.196.187.119', 1460320190, '', 30, 0, 0, 0, '', 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 31, '', 0, 0, 0, 1, 0, 0, 0),
(20, '204-bongguy', '05e0e68605b10ed54cc3af4fe49ce4d5', 1, '7.0000', 170, 0, 1460325247, '204.112.225.254', 2, 12, 100, 100, 5, 5, 12, 100, 100, 0, 0, 1, 0, 0, 'Gave the cops lip', 0, 1, 'Male', 0, 1460320280, 0, 0, 0, 0, 6, 0, 'rhalcro@live.com', '204-bongguy', 'http://statestreetgame.com/images/avatar.gif', 'N/A', -1, -1, '', 0, '', '', '204.112.225.254', '204.112.225.254', 1460320390, '', 70, 0, 0, 0, '', 0, '', '', 0, 1, 0, 0, 0, 0, '', 0, 0, 0, 0, 25, 0, 1, 0, 0, 0, 0, '', 34, '', 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usershopitems`
--

CREATE TABLE IF NOT EXISTS `usershopitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `usershoplogs`
--

CREATE TABLE IF NOT EXISTS `usershoplogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `buyer` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `usershops`
--

CREATE TABLE IF NOT EXISTS `usershops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `money` bigint(20) NOT NULL,
  `totalsold` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `userstats`
--

CREATE TABLE IF NOT EXISTS `userstats` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `strength` double(20,4) NOT NULL DEFAULT '0.0000',
  `agility` double(20,4) NOT NULL DEFAULT '0.0000',
  `guard` double(20,4) NOT NULL DEFAULT '0.0000',
  `labour` double(20,4) NOT NULL DEFAULT '0.0000',
  `IQ` decimal(11,6) NOT NULL DEFAULT '0.000000',
  `robskill` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstats`
--

INSERT INTO `userstats` (`userid`, `strength`, `agility`, `guard`, `labour`, `IQ`, `robskill`) VALUES
(1, 10048453.6530, 10032173.3236, 9999999.9999, 10000005.9999, '11.000000', 5),
(2, 10.0000, 10.0000, 10.0000, 10.0000, '10.000000', 5),
(8, 100.0000, 100.0000, 100.0000, 100.0000, '100.000000', 5),
(9, 100.0000, 100.0000, 100.0000, 100.0000, '100.000000', 5),
(10, 1000.0000, 10.0000, 10.0000, 10.0000, '10.000000', 5),
(11, 10.0000, 1000.0000, 10.0000, 10.0000, '10.000000', 5),
(12, 10.0000, 10.0000, 1000.0000, 10.0000, '10.000000', 5),
(3, 100.0000, 100.0000, 100.0000, 100.0000, '10.000000', 5),
(4, 10.0000, 10.0000, 10.0000, 10.0000, '10.000000', 5),
(5, 34.5111, 10.0000, 10.0000, 28.0000, '13.000000', 5),
(6, 128.3572, 12.0296, 18.0076, 31.5412, '13.000000', 5),
(7, 100.0000, 100.0000, 10.0000, 10.0000, '10.000000', 5),
(13, 10.0000, 10.0000, 10.0000, 1000.0000, '10.000000', 5),
(14, 10.0000, 10.0000, 10.0000, 10.0000, '10.000000', 5),
(15, 10.0000, 10.0000, 10.0000, 10.0000, '10.000000', 5),
(16, 10.0000, 27.1179, 10.0000, 10.0000, '10.000000', 5),
(17, 10.0000, 10.0000, 10.0000, 10.0000, '10.000000', 5),
(18, 10.0000, 10.0000, 10.0000, 10.0000, '10.000000', 5),
(19, 27.9926, 10.0000, 10.0000, 10.0000, '10.000000', 5),
(20, 64.7808, 10.0000, 10.0000, 10.0000, '10.000000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `list` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `willps_accepted`
--

CREATE TABLE IF NOT EXISTS `willps_accepted` (
  `dpID` int(11) NOT NULL AUTO_INCREMENT,
  `dpBUYER` int(11) NOT NULL DEFAULT '0',
  `dpFOR` int(11) NOT NULL DEFAULT '0',
  `dpAMNT` varchar(255) NOT NULL DEFAULT '',
  `dpTIME` int(11) NOT NULL DEFAULT '0',
  `dpTXN` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`dpID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

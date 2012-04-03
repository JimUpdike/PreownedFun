-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2012 at 07:55 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
DROP DATABASE IF EXISTS preowneddb;
CREATE DATABASE IF NOT EXISTS preowneddb;
GRANT ALL PRIVILEGES ON preowneddb.* TO 'Preowneduser'@'localhost' identified by 'user';
use preowneddb;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `preowneddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `for_sale`
--


CREATE TABLE IF NOT EXISTS `for_sale` (
  `merch_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  PRIMARY KEY (`merch_id`,`seller_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `for_sale`
--

INSERT INTO `for_sale` (`merch_id`, `seller_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `game_info`
--

CREATE TABLE IF NOT EXISTS `game_info` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `creators` varchar(50) NOT NULL DEFAULT '',
  `genre` varchar(30) NOT NULL DEFAULT '',
  `ESRB` varchar(12) NOT NULL DEFAULT 'NOT RATED',
  `yearMade` int(4) NOT NULL DEFAULT '1',
  `platform` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`game_id`),
  KEY `platform_index` (`platform`),
  KEY `genre_index` (`genre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `game_info`
--

INSERT INTO `game_info` (`game_id`, `title`, `creators`, `genre`, `ESRB`, `yearMade`, `platform`) VALUES
(1, 'Legend of Zelda: A Link to the Past', 'Nintendo', 'Adventure', 'Teen (T)', 1991, 'Super Nintendo'),
(2, 'Portal 2', 'Valve', 'Puzzle', 'Teen (T)', 2011, 'Xbox 360'),
(3, 'Arkham City', 'RockSteady', 'Role-Playing Game (RPG)', 'Mature (M)', 2011, 'Playstation 3'),
(4, 'Sonic Adventure 2', 'Sega', 'Platformer', 'Everyone 10+', 2003, 'Dreamcast');

-- --------------------------------------------------------

--
-- Table structure for table `merch`
--

CREATE TABLE IF NOT EXISTS `merch` (
  `merch_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `price` decimal(5,2) NOT NULL DEFAULT '0.00',
  `manual` char(1) NOT NULL DEFAULT 'N',
  `cond` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`merch_id`),
  KEY `price_index` (`price`),
  KEY `condition_index` (`cond`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `merch`
--

INSERT INTO `merch` (`merch_id`, `game_id`, `price`, `manual`, `cond`) VALUES
(1, 1, 200.00, 'Y', 'Mint'),
(2, 2, 40.00, 'Y', 'Fair'),
(3, 3, 30.00, 'Y', 'Good'),
(4, 4, 19.00, 'N', 'Acceptable');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rating` decimal(3,2) NOT NULL DEFAULT '-1.00',
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `rating`, `email`) VALUES
(1, 'Jim', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', -1.00, 'jim.test@somewhere.com'),
(2, 'Shane', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', -1.00, 'Shane@somewhere.com'),
(3, 'AlexG', '51eac6b471a284d3341d8c0c63d0f1a286262a18', -1.00, 'alex@nowhere.com'),
(4, 'KB', 'b2029ba5ea1042d78c96d3888897571eea8c27fa', -1.00, 'kb@kb.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-08-22 05:12:29
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab_baozha`
--

-- --------------------------------------------------------

--
-- 表的结构 `np_article_type_en`
--

CREATE TABLE IF NOT EXISTS `np_article_type_en` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=121 ;

--
-- 转存表中的数据 `np_article_type_en`
--

INSERT INTO `np_article_type_en` (`tid`, `pid`, `name`) VALUES
(117, 0, 'Contact Numbers of Main Members'),
(116, 0, 'Opening and Communication'),
(115, 0, 'Opening Fund'),
(114, 0, 'Main Members of Staff'),
(113, 0, 'Education'),
(112, 0, 'Instruments'),
(111, 0, 'Main Research Achievements'),
(110, 0, 'Academic Committee'),
(109, 0, 'Organization Structure'),
(108, 0, 'Main Research Direction and Contents'),
(107, 0, 'History'),
(106, 0, 'Introduction'),
(118, 0, 'News & Trends'),
(119, 0, 'Photos'),
(120, 0, 'Consulting Committee');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

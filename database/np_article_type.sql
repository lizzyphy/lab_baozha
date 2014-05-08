-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 08 日 14:04
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lab_baozha`
--

-- --------------------------------------------------------

--
-- 表的结构 `np_article_type`
--

CREATE TABLE IF NOT EXISTS `np_article_type` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

--
-- 转存表中的数据 `np_article_type`
--

INSERT INTO `np_article_type` (`tid`, `pid`, `name`) VALUES
(1, 0, '实验室概况'),
(2, 1, '实验室简介'),
(3, 1, '发展历程'),
(8, 1, '领导班子'),
(5, 0, '研究方向'),
(25, 5, '爆轰学与爆炸技术'),
(11, 0, '学术队伍'),
(9, 1, '组织机构'),
(32, 11, '杰青'),
(13, 0, '科研成果'),
(41, 13, '申请发明专利'),
(40, 13, '获奖情况'),
(39, 13, '科研项目'),
(17, 1, '实验室大事记'),
(18, 1, '图片展示'),
(19, 0, '学科建设'),
(20, 0, '合作交流'),
(21, 0, '运行管理'),
(22, 0, '相关下载'),
(24, 5, '含能材料理论与应用技术'),
(26, 5, '材料与结构冲击动力学'),
(27, 5, '毁伤理论与防护技术'),
(28, 5, '爆炸安全理论与评估技术'),
(29, 11, '院士'),
(30, 11, '突贡专家'),
(31, 11, '长江学者'),
(33, 11, '百千万人才'),
(34, 11, '新世纪优秀人才'),
(35, 11, '方向带头人'),
(36, 11, '博导'),
(37, 11, '教授'),
(38, 11, '流动人员'),
(42, 13, '发表学术论文'),
(43, 19, '硕士点'),
(44, 19, '博士点'),
(45, 19, '博士后流动站'),
(46, 20, '国内合作'),
(47, 20, '国际合作'),
(48, 22, '日常运行表格'),
(49, 22, '年报相关表格'),
(50, 22, '自主课题指南'),
(51, 22, '学科建设表格'),
(58, 20, '国际合作项目'),
(59, 21, '实验室机构'),
(60, 21, '规章制度'),
(61, 21, '内部通知'),
(62, 21, '招聘信息'),
(63, 21, '文化建设'),
(64, 21, '挂靠机构'),
(65, 59, '办公室'),
(66, 59, '实验中心'),
(67, 59, '仿真与计算中心'),
(68, 59, '事务委员会'),
(69, 59, '学术委员会'),
(70, 64, '挂靠机构1'),
(71, 64, '挂靠机构2'),
(72, 22, '开放课题表格'),
(73, 0, '新闻中心'),
(74, 73, '新闻快讯'),
(75, 73, '最新通知'),
(76, 73, '专家讲坛信息'),
(77, 73, '学术会议信息');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

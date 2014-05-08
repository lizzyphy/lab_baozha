-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 08 日 14:06
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
-- 表的结构 `np_direction`
--

CREATE TABLE IF NOT EXISTS `np_direction` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `np_direction`
--

INSERT INTO `np_direction` (`aid`, `type`, `title`, `content`) VALUES
(24, '含能材料理论与应用技术', '含能材料理论与应用技术', '<p style="text-indent:2em;">圣利来集团是一家涉及多个行业的多元化集团，集团总部位于北京市海淀区，旗下分公司及业务涉及房地产开发及物业管理、经营性租赁、机械制造及印刷产品制造等。</p><p style="text-indent:2em;">集团各项业务均由专业独立公司运作，其中甘肃海天房地产开发有限公司成立于2000年9月，是经甘肃省住房和城乡建设厅核定的具有二级资质等级的房地产开发企业，注册资本2000万元，办公地址位于兰州市城关区张掖路87号中广大厦九层，办公场地面积达1300多平方米，经营范围主要为房地产开发、商品房销售。</p><p style="text-indent:2em;">滦县圣利来包装有限公司成立于2011年总投资3亿元，位于滦县经济开发区，占地78亩，年产各类高档彩色包装纸箱、纸盒8万只，主要以纸箱、纸盒、纸袋加工销售为主，纸制品、包装材料、建筑材料、装饰材料、五金、交电、办公用品批发零售为主营业务。公司自成立以来，已建成原料车间、包装车间、仓库车间、办公楼及职工公寓等配套设施，总建筑面积4.5万平方米。引进德国、台湾等地区先进的高速印刷机及其它配套设备，规模化、集约化，自动化的高档纸箱包装生产线，产品主要供应京津唐地区的大型包装用箱企业。项目建成后，可年创产值5亿元，在增值地方经济效益同时，还可有效带动包装、运输等相关行业的发展，具有良好的经济和社会效益。</p><p style="text-indent:2em;">北京圣利来租赁有限公司成立于2011年，经营事业初期提供企业设备租赁服务，中期在于多设据点并引进多样化财务金融服务，并期待能成为中国地区卓越之财务金融公司,以对中国未来经济发展做出贡献。</p><p style="text-indent:2em;">北京圣利丰投资有限公司是经国家工商行政管理部门批准的专业投资机构，于2011年北京注册成立，注册资金为仨仟万元。公司主要经营项目为：投资管理；房地产开发；专业承包；技术开发、技术转让；投资信息咨询（中介除外）；经济信息系咨询；会议服务；承办展览展示；组织文化艺术交流活动（演出除外）；企业形象策划；销售商品房、建筑材料、机械设备、五金、交电、文化体育用品（音像制品除外）。公司成立以来拥有稳定牢固的客户群体，秉承“诚信服务，信誉第一”的经营理念，以努力为客户提供优质、安全、快捷、便利的服务宗旨，在入市短短几年时间里已经成为业界的名牌企业。<br /></p>'),
(25, '爆轰学与爆炸技术', '爆轰学与爆炸技术', '<p>荣誉资质<br /></p>'),
(26, '材料与结构冲击动力学', '材料与结构冲击动力学', '<p>组织机构</p>'),
(27, '毁伤理论与防护技术', '毁伤理论与防护技术', '<p style="text-indent:2em;">董事长简介</p>'),
(28, '爆炸安全理论与评估技术', '爆炸安全理论与评估技术', '<p>联系我们</p><p>&nbsp;</p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

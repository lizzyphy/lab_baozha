-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 18 日 11:06
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lab_baozha`
--
CREATE DATABASE IF NOT EXISTS `lab_baozha` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lab_baozha`;

-- --------------------------------------------------------

--
-- 表的结构 `np_about`
--

CREATE TABLE IF NOT EXISTS `np_about` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- 转存表中的数据 `np_about`
--

INSERT INTO `np_about` (`aid`, `type`, `title`, `content`) VALUES
(2, '实验室简介', '实验室简介', '<p style="text-indent:2em;">圣利来集团是一家涉及多个行业的多元化集团，集团总部位于北京市海淀区，旗下分公司及业务涉及房地产开发及物业管理、经营性租赁、机械制造及印刷产品制造等。</p><p style="text-indent:2em;">集团各项业务均由专业独立公司运作，其中甘肃海天房地产开发有限公司成立于2000年9月，是经甘肃省住房和城乡建设厅核定的具有二级资质等级的房地产开发企业，注册资本2000万元，办公地址位于兰州市城关区张掖路87号中广大厦九层，办公场地面积达1300多平方米，经营范围主要为房地产开发、商品房销售。</p><p style="text-indent:2em;">滦县圣利来包装有限公司成立于2011年总投资3亿元，位于滦县经济开发区，占地78亩，年产各类高档彩色包装纸箱、纸盒8万只，主要以纸箱、纸盒、纸袋加工销售为主，纸制品、包装材料、建筑材料、装饰材料、五金、交电、办公用品批发零售为主营业务。公司自成立以来，已建成原料车间、包装车间、仓库车间、办公楼及职工公寓等配套设施，总建筑面积4.5万平方米。引进德国、台湾等地区先进的高速印刷机及其它配套设备，规模化、集约化，自动化的高档纸箱包装生产线，产品主要供应京津唐地区的大型包装用箱企业。项目建成后，可年创产值5亿元，在增值地方经济效益同时，还可有效带动包装、运输等相关行业的发展，具有良好的经济和社会效益。</p><p style="text-indent:2em;">北京圣利来租赁有限公司成立于2011年，经营事业初期提供企业设备租赁服务，中期在于多设据点并引进多样化财务金融服务，并期待能成为中国地区卓越之财务金融公司,以对中国未来经济发展做出贡献。</p><p style="text-indent:2em;">北京圣利丰投资有限公司是经国家工商行政管理部门批准的专业投资机构，于2011年北京注册成立，注册资金为仨仟万元。公司主要经营项目为：投资管理；房地产开发；专业承包；技术开发、技术转让；投资信息咨询（中介除外）；经济信息系咨询；会议服务；承办展览展示；组织文化艺术交流活动（演出除外）；企业形象策划；销售商品房、建筑材料、机械设备、五金、交电、文化体育用品（音像制品除外）。公司成立以来拥有稳定牢固的客户群体，秉承“诚信服务，信誉第一”的经营理念，以努力为客户提供优质、安全、快捷、便利的服务宗旨，在入市短短几年时间里已经成为业界的名牌企业。<br /></p>'),
(3, '发展历程', '发展历程', '<p>荣誉资质<br /></p>'),
(8, '领导班子', '领导班子', '<p>组织机构</p>'),
(9, '组织机构', '组织机构', '<p style="text-indent:2em;">董事长简介</p>'),
(17, '实验室大事记', '实验室大事记', '<p>联系我们</p><p>&nbsp;</p>'),
(43, '硕士点', '15个硕士点： ', '硕士点 70304 物理化学(含∶化学物理) \r\n    硕士点 80102 固体力学 \r\n    硕士点 80103 流体力学 \r\n    硕士点 80104 工程力学 \r\n    硕士点 80105 计算力学与仿真工程 \r\n    硕士点 80202 机械电子工程 \r\n    硕士点 80402 测试计量技术及仪器 \r\n    硕士点 81104 模式识别与智能系统 \r\n    硕士点 81405 防灾减灾工程及防护工程 \r\n    硕士点 81704 应用化学 \r\n    硕士点 81903 安全技术及工程 \r\n    硕士点 82403 水声工程 \r\n    硕士点 82601 武器系统与运用工程 \r\n    硕士点 82603 火炮、自动武器与弹药工程 \r\n    硕士点 82604 军事化学与烟火技术'),
(44, '博士点', '9个博士点', '    博士点 703 化学 \r\n    博士点 80102 固体力学 \r\n    博士点 80104 工程力学 \r\n    博士点 805 材料科学与工程 \r\n    博士点 81704 应用化学 \r\n    博士点 81903 安全技术及工程 \r\n    博士点 82601 武器系统与运用工程 \r\n    博士点 82603 火炮、自动武器与弹药工程 \r\n    博士点 82604 军事化学与烟火技术'),
(45, '博士后流动站', '2个博士后流动站', '博士后流动站 801 力学（可授工学、理学学位） \r\n    博士后流动站 826 兵器科学与技术 \r\n '),
(24, '含能材料理论与应用技术', '含能材料理论与应用技术', ''),
(25, '爆轰学与爆炸技术', '爆轰学与爆炸技术', ''),
(26, '材料与结构冲击动力学', '材料与结构冲击动力学', ''),
(27, '毁伤理论与防护技术', '毁伤理论与防护技术', ''),
(28, '爆炸安全理论与评估技术', '爆炸安全理论与评估技术', ''),
(18, '图片展示', '图片展示', ''),
(46, '联系我们', '联系我们', '<p>联系我们<br /></p>');

-- --------------------------------------------------------

--
-- 表的结构 `np_admin_user`
--

CREATE TABLE IF NOT EXISTS `np_admin_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(40) NOT NULL,
  `salt` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `power` int(11) NOT NULL,
  `last_ip` varchar(48) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `np_admin_user`
--

INSERT INTO `np_admin_user` (`uid`, `username`, `password`, `salt`, `name`, `power`, `last_ip`) VALUES
(3, 'wangte', '7edec1ff2d4a904a4f19ce92cd648253', '422996', '王特', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `np_article`
--

CREATE TABLE IF NOT EXISTS `np_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `add_date` date NOT NULL,
  `add_time` int(11) NOT NULL,
  `add_user` varchar(30) NOT NULL,
  PRIMARY KEY (`aid`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=469 ;

--
-- 转存表中的数据 `np_article`
--

INSERT INTO `np_article` (`aid`, `type`, `title`, `content`, `add_date`, `add_time`, `add_user`) VALUES
(466, 75, '第五届全国强动载效应及防护学术会议第一轮通知', '<p style="text-align:center;"><strong>第一轮通知</strong></p><p> </p><p>为了交流我国强动载领域的最新研究成果，促进强动载及防护领域专家学者的交流与合作，爆炸科学与技术国家重点实验室定于2013年7月中旬在内蒙古（具体地点待定）主办“第五届全国强动载效应及防护学术会议”。本次研讨会是前四届研讨会的继续和深入。欢迎全国相关学科的专家学者和科技工作者踊跃投稿并参加会议。</p><p><strong>一、征文范围和内容</strong></p><p style="text-align:left;">1. 强动载的产生与传递</p><p style="text-align:left;">2. 动态损伤、破坏与本构理论</p><p style="text-align:left;">3. 结构动力失效和能量耗散机制</p><p style="text-align:left;">4. 材料多尺度动态力学行为及其与微结构的关联</p><p style="text-align:left;">5. 毁伤理论与技术 </p><p style="text-align:left;">6. 防护原理与方法</p><p style="text-align:left;">7．含能材料的设计与计算</p><p style="text-align:left;">8. 爆炸安全理论与技术</p><p style="text-align:left;">9. 爆炸与冲击问题多尺度高性能计算</p><p><strong>二、论文格式要求：</strong></p><p style="text-align:left;">本次会议通过电子邮件接受中文稿件，每篇论文含图表为6页，按照会议规定的格式编排（具体见附件）。为了便于编辑，请使用Word格式排版论文和相应的图形文件。论文的保密审查由作者本单位自行处理，会议不再作保密审查，作者本人应对此负全部责任。</p><p><strong>三、征文投稿的日期要求： &nbsp;</strong></p><p>1、2013年5月20日前提交800字以内摘要或论文全文的电子文档（附联系方式：邮箱地址、通讯地址、电话或手机号码）；</p><p>2、2013年5月25日前通知作者是否录用，并发布会议第二轮通知(发布会议地点与交通路线)；</p><p>3、2013年6月15日为论文全文电子文档提交截止时间；</p><p>4、要求爆炸科学与技术国家重点实验室自主课题与开放基金的项目负责人参加本次研讨会并做会议发言。</p><p><strong>四、联系方式</strong></p><p>联系人：梁蕊 &nbsp;王 &nbsp;成 &nbsp;王丽琼 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p><p>联系电话 010-68913957 &nbsp; 15611082361 </p><p>E-mail：<a href="mailto:wlqhq@bit.edu.cn">wlqhq@bit.edu.cn</a></p><p style="text-align:right;"> </p><p style="text-align:right;"> &nbsp; 爆炸科学与技术国家重点实验室（北京理工大学）会议组委会</p><p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2013年4月3日</p><p><br /></p>', '2014-05-10', 1399707490, 'wangte'),
(467, 75, '开放课题资助通知（新）', '<p style="text-justify:inter-ideograph;text-align:justify;line-height:24px;text-indent:37px"><span style="color:#333333;font-size:19px">经爆</span><span style="color:#333333;font-size:19px">炸科学与技术国家重点实验室学术委员会委员和顾问的认真审议，现对</span><span style="font-family:times new roman,serif;font-size:19px">2012</span><span style="font-size:19px">年</span><span style="font-family:times new roman,serif;font-size:19px">11</span><span style="font-size:19px">月</span><span style="font-family:times new roman,serif;font-size:19px">30</span><span style="font-size:19px">日</span><span style="color:#333333;font-size:19px">第五届学术委员会第</span><span style="font-family:times new roman,serif;color:#333333;font-size:19px">1</span><span style="color:#333333;font-size:19px">次会议批准通过的开放课题项目及资助经费进行公布，其中</span><span style="font-family:times new roman,serif;color:#333333;font-size:19px">No.1~12</span><span style="color:#333333;font-size:19px">项目</span><span style="font-family:times new roman,serif;color:#333333;font-size:19px">2013</span><span style="color:#333333;font-size:19px">年开始拨付经费，</span><span style="font-family:times new roman,serif;color:#333333;font-size:19px">No.13~21</span><span style="color:#333333;font-size:19px">项目</span><span style="font-family:times new roman,serif;color:#333333;font-size:19px">2014</span><span style="color:#333333;font-size:19px">年开始拨付经费，详见附件。</span></p><p style="text-justify:inter-ideograph;text-align:justify;line-height:24px;text-indent:37px"><span style="color:#333333;font-size:19px"><br /></span></p><p style="line-height:16px;"><img src="/static/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif" /><a href="/upload/20140510/13997075688675.doc">附件：2013年批准的开放课题项目及自助经费.doc</a></p><p><br /></p>', '2014-05-10', 1399707614, 'wangte'),
(464, 75, '关于发布2014年自主研究课题指南的通知', '<p style="text-align:center;"><strong>爆炸科学与技术国家重点实验室（北京理工大学）</strong></p><p style="text-align:center;"><strong>关</strong><strong>于发布</strong><strong>2014</strong><strong>年自主研究课题指南的通知</strong></p><p> </p><p> &nbsp; &nbsp;爆炸科学与技术国家重点实验室（北京理工大学）2014年度自主研究课题指南现予公布。详细内容见附件。本实验室自主研究课题分为两类：探索性项目和青年基金项目，望各申请者根据各自情况积极申报。有关申报条件请参看《自主课题管理条例》（修订稿）。</p><p> &nbsp; &nbsp;申请书提交截止时间为2013年9月30日，请将申请书电子文档发至爆炸科学与技术国家重点实验室，另交书面申请材料3份。<br /> &nbsp; &nbsp;</p><p> </p><p> &nbsp; &nbsp;通信地址：北京海淀区中关村南大街5号</p><p> &nbsp; &nbsp;北京理工大学爆炸科学与技术国家重点实验室</p><p> &nbsp; &nbsp;邮 &nbsp; &nbsp;编：100081</p><p> &nbsp; &nbsp;联 系 人：梁蕊 &nbsp;<br /> &nbsp; &nbsp;电 &nbsp; &nbsp;话：010－68913957 <br /> &nbsp; &nbsp;电子信箱：nkles<a href="mailto:nkles@bit.edu.cn">@bit.edu.cn</a><br /> &nbsp; &nbsp;网 &nbsp; &nbsp;址：http://est.bit.edu.cn/</p><p> </p><p> &nbsp; &nbsp;附件：</p><p> &nbsp; &nbsp;附件一：2014年自主研究课题指南（实验室网站下载）</p><p> &nbsp; &nbsp;附件二：自主研究课题申请表（实验室网站下载）</p><p><br /></p>', '2014-05-10', 1399707253, 'wangte'),
(465, 75, '2013年科研专项基金项目申报指南', '<p style="text-align:center;">爆炸科学与技术国家重点实验室山东研究基地</p><p style="text-align:center;"><strong>2013</strong><strong>年科研专项基金项目申报指南</strong></p><p> </p><p> &nbsp; &nbsp;根据 《爆炸科学与技术国家重点实验室（北京理工大学）山东研究基地章程》以及《爆炸科学与技术国家重点实验室（北京理工大学）山东研究基地科研专项基金管理办法》等有关规定，特制定爆炸科学与技术国家重点实验室山东研究基地2013年科研专项基金项目申请指南，并在学校和工厂同时发布。</p><p>一、基本要求</p><p>（1）基金申报需符合国家重点实验室研究方向和兵器732厂的科研发展规划，重点支持高新技术武器弹药、先进常规毁伤战斗部、与爆炸有关的军民两用技术以及制约工厂科研和生产的瓶颈技术等方面的探索性研究、技术创新研究和应用基础研究等。</p><p>（2）项目组须由厂校双方人员联合构成，必要的情况下可邀请第三方参加（主要指军方）；由实验室固定人员或工厂在职人员担任项目负责人，项目组提出立项申请并编制项目建议书。</p><p>（3）每个项目支持力度30～50万元，研究周期一般2～3年。</p><p>（4）成果要求：研究成果得到实际应用或转化、延伸为国家正式立项的预研和型号研制等项目，发明专利不少于1项。</p><p>二、重点支持的研究领域和研究方向</p><p>（1）信息化、智能化弹药技术</p><p>（2）高能毁伤技术</p><p>（3）新概念武器探索</p><p>（4）732厂产品研制与生产中的瓶颈技术</p><p>三、注意事项</p><p>（1）指南发布时间：2013年6月20日，项目申报截止时间：2013年7月25日。</p><p>（2）每个项目必须有厂、校双方均有人参加的联合项目组形式申报，在项目申报前须事先交流沟通，732厂联系人：李学林（0533-4520817，13505334108）；北理工联系人：王树山（010-68912759,13366222759）。</p><p> </p><p> </p><p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>爆炸科学与技术国家重点实验室</strong></p><p style="text-align:center;"><strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong>（北京理工大学）</p><p><br /></p>', '2014-05-10', 1399707342, 'wangte'),
(462, 75, '第7届国际爆炸合成新材料研讨会（EPNM-2014）征文通知', '<p style="line-height:16px;"><img src="/static/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif" /><a href="/upload/20140510/13997070991827.docx">Invitation letter to EPNM-2014(eng).docx</a></p><p><br /></p>', '2014-05-10', 1399707143, 'wangte'),
(459, 75, '第35届国际燃烧会议通知', '<p>第35届国际燃烧会议<br /></p>', '2014-05-10', 1399706189, 'wangte'),
(460, 75, '第15届国际爆轰会议通知', '<p>第15届国际爆轰会议<br /></p>', '2014-05-10', 1399706238, 'wangte'),
(461, 75, '16th International Conference on Experimental Mechanics (ICEM16)会议通知', '<p style="line-height:16px;"><img src="/static/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif" /><a href="/upload/20140510/13997063115346.docx">16th International Conference on Experimental Mechanics (ICEM16).docx</a></p><p><br /></p>', '2014-05-10', 1399706346, 'wangte'),
(463, 75, '关于发布2014年开放基金项目指南的通知', '<p style="text-align:center;"><strong>爆炸科学与技术国家重点实验室（北京理工大学）</strong></p><p style="text-align:center;"><strong>关于发布</strong><strong>2014</strong><strong>年开放基金项目指南的通知</strong></p><p><strong> </strong></p><p> &nbsp; &nbsp;爆炸科学与技术国家重点实验室（北京理工大学）2014年度开放基金项目指南现予公布。本年度仅发布面上项目。每项面上项目经费额度为10~15万元，研究年限为2年，要求发表按规定署名的SCI论文(影响因子大于1.0)2~3篇。所有开放基金项目负责人每年应到本实验室访问或工作1-2个月。望各申请者根据各自情况积极申报。</p><p> </p><p><span style="text-decoration:underline;">截至时间</span>：2013年9月30日前发至爆炸科学与技术国家重点实验室</p><p><span style="text-decoration:underline;">通信地址</span>：北京理工大学爆炸科学与技术国家重点实验室（3号教学楼235）</p><p><span style="text-decoration:underline;">邮 &nbsp; &nbsp;编</span>：100081</p><p><span style="text-decoration:underline;">联 系 人</span>：梁 &nbsp;蕊</p><p><span style="text-decoration:underline;">电 &nbsp; &nbsp;话</span>：010－68913957</p><p><span style="text-decoration:underline;">电子信箱</span>：<a href="mailto:wlqhq@bit.edu.cn">wlqhq@bit.edu.cn</a></p><p><span style="text-decoration:underline;">网 &nbsp; &nbsp;址</span>：</p><p><a href="http://www.es.labs.gov.cn"><a href="http://www.es.labs.gov.cn">http://www.es.labs.gov.cn</a> </a></p><p><br /></p><p><br /></p><p>附件:</p><p>附件一：2014年开放基金项目指南（实验室网站下载）</p><p>附件二：开放基金申请表（实验室网站下载）</p>', '2014-05-10', 1399707202, 'wangte'),
(455, 75, '第六届全国强动载效应及防护学术会议暨2014复杂介质/结构的动态力学行为创新研究群体学术研讨会第一轮通知', '<p style="line-height:16px;"><img src="/static/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif" /><a href="/upload/20140510/13997058324044.doc">第六届全国强动载效应及防护学术会议第一轮通知（力学学会）.doc</a></p><p style="line-height:16px;"><img src="/static/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif" /><a href="/upload/20140510/13997058332833.doc">排版格式.doc</a></p><p><br /></p>', '2014-05-10', 1399705852, 'wangte'),
(456, 75, '2014年度开放基金项目资助通知－新', '<p><span style="color:#333333;font-size:14px;line-height:24px;background-color:#ffffff;">经爆炸科学与技术国家重点实验室学术委员会委员和顾问的认真审议，现对2013年12月19日第五届学术委员会第3次会议批准通过的2014年度开放基金项目及资助经费进行公布。其资助经费从2015年开始拨付使用，详见附件。</span><br /></p><p><span style="color:#333333;font-size:14px;line-height:24px;background-color:#ffffff;"><br /></span></p><p><span style="color:#333333;font-size:14px;line-height:24px;background-color:#ffffff;"><br /></span></p><p><span style="color:#333333;font-size:14px;line-height:24px;background-color:#ffffff;"></span></p><p style="line-height:16px;"><img src="/static/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif" /><a href="/upload/20140510/13997059802459.docx">2014年度批准的开放基金项目清单.docx</a></p><p><span style="color:#333333;font-size:14px;line-height:24px;background-color:#ffffff;"><br /></span><br /></p>', '2014-05-10', 1399705984, 'wangte'),
(457, 75, '第五届学术委员会第3次会议', '<p style="line-height:16px;"><img src="/static/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif" /><a href="/upload/20140510/13997060489121.doc">第五届学术委员会第3次会议议程.doc</a></p><p><br /></p>', '2014-05-10', 1399706051, 'wangte'),
(458, 75, '2013 International Workshop on Intensive Loading and Its Effects & Innovation Research Group Symposium on Dynamic Mechanical Behavior of Complex Media/ Structure', '<p style="line-height:16px;"><img src="/static/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif" /><a href="/upload/20140510/13997061195713.doc">2013-International Workshop on Intensive Loading and Its Effect.doc</a></p><p><br /></p>', '2014-05-10', 1399706121, 'wangte');

-- --------------------------------------------------------

--
-- 表的结构 `np_article_type`
--

CREATE TABLE IF NOT EXISTS `np_article_type` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- 转存表中的数据 `np_article_type`
--

INSERT INTO `np_article_type` (`tid`, `pid`, `name`) VALUES
(13, 0, '科研成果'),
(41, 13, '申请发明专利'),
(40, 13, '获奖情况'),
(39, 13, '科研项目'),
(20, 0, '合作交流'),
(21, 0, '运行管理'),
(22, 0, '相关下载'),
(42, 13, '发表学术论文'),
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
(72, 22, '开放课题表格'),
(73, 0, '新闻中心'),
(74, 73, '新闻快讯'),
(75, 73, '最新通知'),
(79, 78, '学术会议信息'),
(78, 0, '学术会议'),
(80, 78, '专家讲坛信息'),
(81, 78, '主办国际国内会议'),
(97, 0, '资源共享'),
(91, 0, '开放基金'),
(92, 91, '开放基金管理条例'),
(93, 91, '开放基金指南'),
(94, 91, '年度批准项目'),
(95, 91, '历年发布项目统计'),
(96, 91, '开放课题相关表格（含申请书）'),
(98, 97, '30万元以上大型仪器设备'),
(99, 97, '大型实验设备'),
(100, 97, '开放共享设备'),
(101, 97, '服务收费标准');

-- --------------------------------------------------------

--
-- 表的结构 `np_attachment`
--

CREATE TABLE IF NOT EXISTS `np_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_size` int(11) NOT NULL,
  `path` varchar(150) NOT NULL,
  `is_image` tinyint(4) NOT NULL,
  `index` tinyint(4) NOT NULL,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `np_config`
--

CREATE TABLE IF NOT EXISTS `np_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) CHARACTER SET utf8 NOT NULL,
  `value` varchar(500) CHARACTER SET utf8 NOT NULL,
  `is_json` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item` (`item`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `np_config`
--

INSERT INTO `np_config` (`id`, `item`, `value`, `is_json`) VALUES
(8, 'aa', 'aaa', 0),
(7, 'bb', '[1,2,3]', 1);

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

-- --------------------------------------------------------

--
-- 表的结构 `np_group`
--

CREATE TABLE IF NOT EXISTS `np_group` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `np_group_type`
--

CREATE TABLE IF NOT EXISTS `np_group_type` (
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `type` int(20) NOT NULL,
  `aid` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `np_group_type`
--

INSERT INTO `np_group_type` (`name`, `type`, `aid`) VALUES
('院士', 29, 1),
('突贡专家', 30, 2),
('长江学者', 31, 3),
('杰青', 32, 4),
('百千万人才', 33, 5),
('新世纪优秀人才', 34, 6),
('方向带头人', 35, 7),
('博导', 36, 8),
('教授', 37, 9),
('流动人员', 38, 10);

-- --------------------------------------------------------

--
-- 表的结构 `np_index_img`
--

CREATE TABLE IF NOT EXISTS `np_index_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `path` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `np_index_img`
--

INSERT INTO `np_index_img` (`id`, `type`, `path`, `title`, `url`, `order`) VALUES
(28, 1, '/upload/20140510/13997140534548.jpg', '1', '#', 1),
(29, 1, '/upload/20140510/13997140842406.jpg', '2', '#', 2),
(30, 1, '/upload/20140510/13997141028796.jpg', '3', '#', 3),
(31, 1, '/upload/20140510/13997141136894.jpg', '4', '#', 4),
(33, 2, '/upload/20140510/13997153036570.swf', '1', '#', 1);

-- --------------------------------------------------------

--
-- 表的结构 `np_link`
--

CREATE TABLE IF NOT EXISTS `np_link` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `np_link`
--

INSERT INTO `np_link` (`lid`, `name`, `url`, `title`) VALUES
(3, '中国高等教育学生信息网', 'http://www.chsi.com.cn/', '中国高等教育学生信息网'),
(2, '中国研究生招生信息网', 'http://yz.chsi.com.cn/', '中国研究生招生信息网'),
(4, '北京理工大学 ', 'http://www.bit.edu.cn/', '北京理工大学 '),
(5, '北京理工大学研究生院', 'http://grd.bit.edu.cn/', '北京理工大学研究生院'),
(6, '中华人民共和国工业和信息化部', 'http://www.miit.gov.cn/n11293472', '中华人民共和国工业和信息化部');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel=stylesheet type="text/css" href="<?php echo base_url('static/css/css.css'); ?>" />
<script type="text/javascript" src="<?php echo base_url('static/js/pic.js'); ?>"></script>
</head>
<body>
<div id="box">
	<div class="focus">
		<div id="pic">
			<ul>
				<li><a href=""><img width="410" height="410" src="<?php echo base_url('static/img/1.jpg'); ?>" /></a></li>
				<li><a href=""><img width="410" height="410" src="<?php echo base_url('static/img/2.jpg'); ?>" /></a></li>
				<li><a href=""><img width="410" height="410" src="<?php echo base_url('static/img/3.jpg'); ?>" /></a></li>
				<li><a href=""><img width="410" height="410" src="<?php echo base_url('static/img/4.jpg'); ?>" /></a></li>
			</ul>
		</div>
		<div class="tip-bg"></div>
		<div id="tip">
			<ul>
				<li id="smallimg_1" onclick="change(1)" class="current"></li>
				<li id="smallimg_2" onclick="change(2)"></li>
				<li id="smallimg_3" onclick="change(3)"></li>
				<li id="smallimg_4" onclick="change(4)"></li>
			</ul>
		</div>
		<div class="btn">
			<ul>
				<li class="btn-left" id="focus_btn_left" onclick="focus_prev();"></li>
				<li class="btn-right" id="focus_btn_right" onclick="focus_next();"></li>
			</ul>
		</div>
	</div>
	<div class="right">
		<div class="title">
			<span style="font-family: Microsoft YaHei; font-size: 16px;">新闻快讯</span>
		</div>
		<ul>
			<li><span><a href="www.baidu.com" title="爆炸科学与技术国家重点实验室2014工作会议">爆炸科学与技术国家重点实验室2014工作会议</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="科技后备人才早期培养计划师生见面会">科技后备人才早期培养计划师生见面会</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="爆炸科学与技术国家重点实验室召开第五届学术委员会第2次会议">爆炸科学与技术国家重点实验室召开第五届学术委员会第2次会议</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="青少年科技后备人才早期培养计划（第13期）师生见面会">青少年科技后备人才早期培养计划（第13期）师生见面会</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="“爆炸科学与技术国家重点实验室山东研究基地”第一届理事会第三次会议召开">“爆炸科学与技术国家重点实验室山东研究基地”第一届理事会第三次会议召开</a></span>
			<span class="time">2014-3-10</span>
			</li>
		</ul>
		<div class="title">
			<span style="font-family: Microsoft YaHei; font-size: 16px;">最新通知</span>
		</div>
		<ul>
			<li><span><a href="www.baidu.com" title="第六届全国强动载效应及防护学术会议暨2014复杂介质/结构的动态力学行为创新研究群体学术研讨会第一轮通知">第六届全国强动载效应及防护学术会议暨2014复杂介质/结构的动态力学行为...</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="2014年度开放基金项目资助通知－新">2014年度开放基金项目资助通知－新</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="第五届学术委员会第3次会议">第五届学术委员会第3次会议</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="青少年科技后备人才早期培养计划（第13期）师生见面会">青少年科技后备人才早期培养计划（第13期）师生见面会</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="2013 International Workshop on Intensive Loading and Its Effects & Innovation Research Group Symposium on Dynamic Mechanical Behavior of Complex Media/ Structure">
			2013 International Workshop on Intensive Loading and Its Effects...</a></span>
			<span class="time">2014-3-10</span>
			</li>
		</ul>
	</div>
	<!--	<img width="1000" height="210" src="<?php echo base_url('static/img/11.jpg'); ?>" />-->
	<div class="left1">
		<div class="title">
			<span style="font-family: Microsoft YaHei; font-size: 16px;">专家讲坛信息</span>
		</div>
		<ul>
			<li><span><a href="www.baidu.com" title="国际著名爆轰专家到我校国家重点实验室进行学术交流 ">国际著名爆轰专家到我校国家重点实验室进行学术交流 </a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="爆炸科学与技术国家重点实验室邀请英国、俄罗斯、波兰、以色列国际著名学者交流访问">爆炸科学与技术国家重点实验室邀请英国、俄罗斯、波兰、以色...</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="国家重点实验室邀请郭林教授为师生做学术报告">国家重点实验室邀请郭林教授为师生做学术报告</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="青少年科技后备人才早期培养计划（第13期）师生见面会">青少年科技后备人才早期培养计划（第13期）师生见面会</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="2013 International Workshop on Intensive Loading and Its Effects & Innovation Research Group Symposium on Dynamic Mechanical Behavior of Complex Media/ Structure">
			2013 International Workshop on Intensive Loading and Its...</a></span>
			<span class="time">2014-3-10</span>
			</li>
		</ul>
	</div>

	<div class="left1" id="right1">
		<div class="title">
			<span class="right1" style="font-family: Microsoft YaHei; font-size: 16px;">学术会议信息</span>
		</div>
		<ul>
			<li><span><a href="www.baidu.com" title="国际著名爆轰专家到我校国家重点实验室进行学术交流 ">国际著名爆轰专家到我校国家重点实验室进行学术交流 </a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="爆炸科学与技术国家重点实验室邀请英国、俄罗斯、波兰、以色列国际著名学者交流访问">爆炸科学与技术国家重点实验室邀请英国、俄罗斯、波兰、以色...</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="国家重点实验室邀请郭林教授为师生做学术报告">国家重点实验室邀请郭林教授为师生做学术报告</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="青少年科技后备人才早期培养计划（第13期）师生见面会">青少年科技后备人才早期培养计划（第13期）师生见面会</a></span>
			<span class="time">2014-3-10</span>
			</li>
			<li><span><a href="www.baidu.com" title="2013 International Workshop on Intensive Loading and Its Effects & Innovation Research Group Symposium on Dynamic Mechanical Behavior of Complex Media/ Structure">
			2013 International Workshop on Intensive Loading and Its...</a></span>
			<span class="time">2014-3-10</span>
			</li>
		</ul>
	</div>
</div>
</body>
</html>
<div id="mainpic_index" class="box">
    <div id="ad_change">
        <div id="ad_img"> 
        	<?php foreach ($ad_img as $row): ?><a href="<?php echo $row['url']; ?>"><img src="<?php echo $row['path']; ?>" width="960" height="190" /></a><?php endforeach; ?>
        </div>
        <div class="img_num">
            <div style="float:right">
                <p class="img_numcheck">1</p>
                <?php for($i = 2; $i <= $ad_img_num; ++$i):?>
                <p><?php echo $i;?></p>
                
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<div class="box">
    <div id="content1">
        <div id="news">
            <div class="title_1_index">
                <p class="f_l">新闻中心</p>
                <span class="f_r"><a href="<?php echo base_url('article/type?type=2'); ?>" class="more">更多...</a></span>
                <div class="clear"></div>
            </div>
            <div>
                <table border="0" align="right" cellpadding="0" cellspacing="0">
                	<?php foreach ($news as $row):?>
                    <tr>
                        <td width="300"><p><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a></p></td>
                        <td width="45"><?php echo substr($row['add_date'], 5);?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div id="lesson_index">
            <div class="title_1_index">
                <p class="f_l">公开课程</p>
                <span class="f_r"><a href="<?php echo base_url('course/type?type=1'); ?>" class="more">更多...</a></span>
                <div class="clear"> </div>
            </div>
            <div class="pad_left">
                <table class="t_center" width="530" border="0" align="center" cellpadding="0" cellspacing="0">
                	<?php foreach ($courses1 as $row): ?>
                    <tr>
                        <td align="left"><p><a href="<?php echo base_url('course/?cid=' . $row['cid']); ?>"><?php echo $row['name']; ?></a></p></td>
                        <td width="80"><?php echo $row['time']; ?></td>
                        <td width="60"><?php echo $row['price']; ?></td>
                        <td width="40"><a href="<?php echo base_url('apply/?cid=' . $row['cid']); ?>">报名</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div class="clear"></div>
        <div class="content1_foot1"></div>
    </div>
    <div class="content1_foot2"></div>
    <div id="content2">
        <div id="content2_left">
            <div id="img_change">
                <div> 
                	<?php foreach ($ad_img2 as $row): ?>
                	<span><a target="_blank" href="<?php echo $row['url']; ?>"><img src="<?php echo $row['path']; ?>" width="260" height="200" /></a></span>
                	<?php endforeach; ?>
                </div>
                <div class="img_num">
                    <div style="float:right">
                        <p class="img_numcheck">1</p>
                		<?php for($i = 2; $i <= $ad_img2_num; ++$i):?>
                		<p><?php echo $i;?></p>
                
                		<?php endfor; ?>
                    </div>
                </div>
            </div>
            <div id="contact" class="left_1">
                <div class="title_2_index">
                    <p class="f_l">咨询中心</p>
                    <div class="clear"> </div>
                </div>
                <div>
                    <table class="f_c" width="240" border="0" cellspacing="0">
                        <tr>
                            <td width="70"><b>在线咨询：</b></td>
                            <td width="166"><a href="tencent://message/?uin=1918623812" title="钟老师"><img src="http://wpa.qq.com/pa?p=1:1918623812:4" border="0" />钟老师</a>（1918623812） </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><a href="tencent://message/?uin=22062284" title="李老师"><img src="http://wpa.qq.com/pa?p=1:22062284:4" border="0" />李老师</a>（22062284）</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><a href="tencent://message/?uin=34074407" title="王老师"><img src="http://wpa.qq.com/pa?p=1:34074407:4" border="0" />王老师</a>（34074407）</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="t_center img_link">
           		<a href="<?php echo base_url('about/?aid=5'); ?>"><img src="<?php echo base_url('static/common/img/edp.jpg'); ?>"  width="260"/></a>
            	<a href="<?php echo base_url('course/type/?type=1'); ?>"><img src="<?php echo base_url('static/common/img/a_content_right_05.jpg'); ?>"  width="260" height="70" /></a>
            	<a href="<?php echo base_url('course/type/?type=2'); ?>"><img src="<?php echo base_url('static/common/img/a_content_right_07.jpg'); ?>"  width="260" height="70" /></a>
            	<a href="<?php echo base_url('article/type/?type=6'); ?>"><img src="<?php echo base_url('static/common/img/a_content_right_06.jpg'); ?>"  width="260" height="70" /></a>
            </div>
        </div>
        <div id="content2_right">
            <div class="information">
                <div id="stu">
                    <div class="title_3_index">
                        <p class="f_l">在职研究生课程</p>
                        <span class="f_r"><a href="<?php echo base_url('course/type?type=2'); ?>" class="more">更多...</a></span>
                        <div class="clear"> </div>
                    </div>
                    <div>
                        <ul>
                        	<?php foreach ($courses2 as $row): ?>
                            <li><a href="<?php echo base_url('course/?cid=' . $row['cid']); ?>"><?php echo $row['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div id="friend_link">
                    <div class="title_3_index">
                        <p class="f_l">定制课程</p>
                        <span class="f_r"><a href="<?php echo base_url('article/type?type=6'); ?>" class="more">更多...</a></span>
                        <div class="clear"> </div>
                    </div>
                    <div>
                        <ul>
                        	<?php foreach ($courses3 as $row): ?>
                            <li><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>"><?php echo $row['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="information">
                <div id="stu">
                    <div class="title_3_index">
                        <p class="f_l">活动预告</p>
                        <span class="f_r"><a href="<?php echo base_url('article/type?type=8'); ?>" class="more">更多...</a></span>
                        <div class="clear"> </div>
                    </div>
                    <div>
                        <ul>
                            <?php foreach ($activities as $row): ?>
                            <li><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>"><?php echo $row['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div id="friend_link">
                    <div class="title_3_index">
                        <p class="f_l">通知公告</p>
                        <span class="f_r"><a href="<?php echo base_url('article/type?type=9'); ?>" class="more">更多...</a></span>
                        <div class="clear"> </div>
                    </div>
                    <div>
                        <ul>
                        	<?php foreach ($notice as $row): ?>
                            <li><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>"><?php echo $row['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="stu_change">
            	<p><a href="<?php echo base_url('group/type/?type=2'); ?>">学员风采</a></p>
                <div>
                    <div class="ws-prev"></div>
                    <div class="ws-box">
                        <ul>
                        	<?php foreach ($students as $row): ?>
                            <li>
                                <a href="<?php echo base_url('group/?gid=' . $row['gid']); ?>"><img src="<?php echo $row['avatar']; ?>" width="140" height="105" /></a>
                                <a href="<?php echo base_url('group/?gid=' . $row['gid']); ?>"><?php echo $row['title']?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="ws-next"></div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div id="link" class="box">
    <div class="f_l link_l"><b>友情链接：</b></div>
    <div>
        <ul>
        	<?php foreach ($links as $row): ?>
            <li><a href="<?php echo $row['url']; ?>" target="_blank" title="<?php echo $row['title']; ?>"><?php echo $row['name']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="clear"></div>
</div>

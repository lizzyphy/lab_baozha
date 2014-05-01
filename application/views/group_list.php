
	<div id="content_right">
    	<div class="title_2">
            <p><?php echo $title; ?></p>
        </div>
        <div class="margin_b5">
        	<?php foreach ($groups as $group): ?>
        	<?php if($type != 2): ?>
        	<div class="tea_img">
            	<?php if($group['avatar'] != '/'): ?><a href="<?php echo base_url('group/?gid=' . $group['gid']); ?>"><img src="<?php echo $group['avatar']; ?>" width="120" height="160" /></a><?php endif; ?>
            </div>
            <div class="tea_content">
                <div>
                    <img src="<?php echo base_url('static/common/img/t_content_03.jpg'); ?>" class="f_l" />
                    <p class="teacher_name"><a href="<?php echo base_url('group/?gid=' . $group['gid']); ?>"><?php echo $group['title']?></a></p>
                    <p class="clear"></p>
                </div>
                <div>
                	<div class="tea_intro"><?php echo mb_substr(str_replace('&nbsp;', '', strip_tags($group['content'])), 0, 160) . '……'; ?></div>
                </div>
            </div>
            <div class="clear"></div>
            <?php else: ?>
        	<div class="tea_img">
            	<a href="<?php echo base_url('group/?gid=' . $group['gid']); ?>"><img src="<?php echo $group['avatar']; ?>" width="160" height="120" /></a>
            </div>
            <div class="tea_content">
                <div>
                    <img src="<?php echo base_url('static/common/img/t_content_03.jpg'); ?>" class="f_l" />
                    <p class="teacher_name"><a href="<?php echo base_url('group/?gid=' . $group['gid']); ?>"><?php echo $group['title']?></a></p>
                    <p class="clear"></p>
                </div>
                <div>
                	<div class="tea_intro stu_intro"><?php echo mb_substr(str_replace('&nbsp;', '', strip_tags($group['content'])), 0, 160) . '……'; ?></div>
                </div>
            </div>
            <div class="clear"></div>
            <?php endif; ?>
            <?php endforeach; ?>
            <div id="page">
        	<?php echo $page_html; ?>
        </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="content_foot1"> 	
    </div>
</div>
<div class="content_foot2">
</div>
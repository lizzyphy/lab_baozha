   <div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index'); ?>">首页</a>&nbsp;>&nbsp;<?php echo $name['second_name'];?></p>
        </div>
        <?php foreach ($article as $a):?>
        <div class="right_group">
        	<div class="right_group_p">
        		<?php if($a['avatar'] != '/'): ?><img src="<?php echo $a['avatar'];?>" width="120" height="160" /><?php endif; ?>
        	</div>
	        <div class="right_group_c">
	        	<div class="group_title"><a href="<?php echo base_url('group/?type='.$a['type'].'&gid='.$a['gid'])?>"><?php echo $a['title'];?></a></div>
	        	<div class="clear"></div>
	        	<div class="group_content"><?php echo strip_tags(substr($a['content'],0,937) . "..."); ?></div>
	        </div>
	        <div class="clear"></div>
        </div>
        <?php endforeach;?>
        <div class = "middle page">
	    	<p><?php echo "$page_html"; ?></p>
	    </div>
    </div>
    <div class="clear"></div>
</div>

	<!--  <div id="content_right">
    	<div class="title_2">
            <p><?php //echo $type_name; ?></p>
        </div>
        <div class="news_main">
        	<?php //if($type != 2): ?>
        	<div class="group_left">
            	<div><?php //if($avatar != '/'): ?><img src="<?php //echo $avatar;?>" width="120" height="160" /><?php //endif; ?></div>
    			<div class="group_name"><?php //echo $title?></div>
    		</div>
            <div class="group_content"><?php //echo $content; ?></div>
            <?php //else: ?>
        	<div><img src="<?php //echo $avatar;?>" width="640" height="480" /></div>
    			<div class="group_name"><?php //echo $title?></div>
            <?php //endif; ?>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="content_foot1"> 	
    </div>
</div>
<div class="content_foot2">
</div>-->

   <div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index'); ?>">首页</a>&nbsp;>&nbsp;<a href="index.php"><?php echo $name['first_name'];?></a>&nbsp;>&nbsp;<a href="index.php"><?php echo $name['second_name'];?></a></p>
        	 <img width="700" height="5" src="<?php echo base_url('static/img/title_23.jpg'); ?>" />
        </div>
        <?php foreach ($article as $a):?>
        <div class="right_group">
        	<div class="right_group_p">
        		<?php if($a['avatar'] != '/'): ?><img src="<?php echo $a['avatar'];?>" width="120" height="160" /><?php endif; ?>
        	</div>
	        <div class="right_group_c">
	        	<p id="group_title"><?php echo $a['title'];?></p>
	        	<p id="group_time"><?php echo $a['order'];?></p>
	        	<div class="clear"></div>
	        	<p id="group_content"><?php echo $a['content']; ?></p>
	        </div>
	        <div class="clear"></div>
        </div>
        <?php endforeach;?>
    </div>
    <div class="clear"></div>
</div>
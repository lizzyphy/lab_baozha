
	<div id="content_right">
    	<div class="title_2">
            <p><?php echo $type_name; ?></p>
        </div>
        <div class="news_main">
        	<?php if($type != 2): ?>
        	<div class="group_left">
            	<div><?php if($avatar != '/'): ?><img src="<?php echo $avatar;?>" width="120" height="160" /><?php endif; ?></div>
    			<div class="group_name"><?php echo $title?></div>
    		</div>
            <div class="group_content"><?php echo $content; ?></div>
            <?php else: ?>
        	<div><img src="<?php echo $avatar;?>" width="640" height="480" /></div>
    			<div class="group_name"><?php echo $title?></div>
            <?php endif; ?>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="content_foot1"> 	
    </div>
</div>
<div class="content_foot2">
</div>
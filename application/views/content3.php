   <div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index'); ?>">首页</a>&nbsp;>&nbsp;<a href="index.php"><?php echo $name['first_name'];?></a>&nbsp;>&nbsp;<a href="index.php"><?php echo $name['second_name'];?></a></p>
        	 <img width="700" height="5" src="<?php echo base_url('static/img/title_23.jpg'); ?>" />
        </div>
        <div class="right_title">
        	<p><?php echo $article['title'];?></p>
        <div class="content3_time"><?php echo $article['add_date'];?></div>  </div>
        <div class="clear"></div>
        <?php if(isset($article['avatar'])):?>
        	<div class="right_group_p_more">
        		<img src="<?php echo $article['avatar'];?>" width="120" height="160" />
        	</div>
        <?php endif; ?>
        <div class="right_content"><?php echo strip_tags($article['content']);?></div>
    </div>
    <div class="clear"></div>
</div>
    
                
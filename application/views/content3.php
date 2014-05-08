   <div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index'); ?>">首页</a>&nbsp;&nbsp;<a href="index.php">实验室概况</a>&nbsp;&nbsp;<a href="index.php">实验室简介</a></p>
        	 <img width="700" height="5" src="<?php echo base_url('static/img/title_23.jpg'); ?>" />
        </div>
        <div class="right_title">
        	<p><?php echo $article['title'];?></p>
        <div class="content3_time"><?php echo $article['add_date'];?></div>  </div>
        <div class="clear"></div>
        <div class="right_content"><?php echo $article['content'];?></div>
    </div>
    <div class="clear"></div>
</div>
    
                
   <div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index'); ?>">首页</a>&nbsp;>&nbsp;<a href=""><?php echo $name['first_name'];?></a>&nbsp;>&nbsp;<a href="<?php echo base_url('article/type?type=' . $type); ?>"><?php echo $name['second_name'];?></a></p>
        	 <img width="700" height="5" src="<?php echo base_url('static/img/title_23.jpg'); ?>" />
        </div>
        <div class="right_title">
        	<p><?php echo $article['title'];?></p>
        <div class="content3_time"><?php echo $article['add_date'];?></div></div>
        <div class="clear"></div>
        <div class="right_content"><?php echo $article['content'];?></div>
    </div>
    <div class="clear"></div>
</div>
    
                
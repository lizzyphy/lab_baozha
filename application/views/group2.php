   <div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index'); ?>">首页</a>&nbsp;>&nbsp;<?php echo $name['second_name'];?></p>
        	 <img width="700" height="5" src="<?php echo base_url('static/img/title_23.jpg'); ?>" />
        </div>
        <div style="margin:0 auto; padding:10px 10px 10px 120px;">
        <?php foreach ($article as $a):?>	
 			<?php echo $a['content'];?>
        <?php endforeach;?></div>
    </div>
    <div class="clear"></div>
</div>
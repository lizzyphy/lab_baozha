  <div class="right_content">
    	<div class="intro_title"><?php echo $title;?></div>
    	<img width="100%" height="5" src="<?php echo base_url('static/img/title.jpg')?>">
    	<div class="content_format">
	        <?php foreach($photos as $r):?>
	           <?php echo $r['content'];?>
	        <?php endforeach;?>
	    </div>
        <div class="page" style="margin-left:300px;">
            <?php echo $page_html; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
  <div class="right_content">
    	<div class="intro_title"><?php echo $title;?></div>
    	<img width="100%" height="5" src="<?php echo base_url('static/img/title.jpg')?>">
        <?php foreach($articles as $r):?>
        <div class="group">
            <div class="group_left"><?php echo $r['title'];?></a></div>
            <div class="group_right"><?php echo $r['content'];?></div>
            <div class="clear"></div>
         </div>
        <?php endforeach;?>
        <div style="text-align:center; font-size:14px;";>
            <?php echo $page_html; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
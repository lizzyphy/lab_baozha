
    <div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index'); ?>">首页</a>&nbsp;>&nbsp;<a href=""><?php echo $name['first_name'];?></a>&nbsp;>&nbsp;<a href=""><?php echo $name['second_name'];?></a></p>
        	<img width="700" height="5" src="<?php echo base_url('static/img/title_23.jpg'); ?>" />
        </div>
        <div id="right_title">
        	<p><?php echo $name['second_name'];?></p>
        </div>
        <div id="right_content">
            <ul>
            <?php foreach($article as $r):?>
                <li><span><a href="<?php echo base_url('article/type/?type=' . $r['tid']); ?>"><?php echo $r['name'];?></a></span>
                </li>
            <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>
    
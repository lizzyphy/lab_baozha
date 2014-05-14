
    <div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index'); ?>">首页</a>&nbsp;>&nbsp;<?php echo $name['first_name'];?>&nbsp;>&nbsp;<?php echo $name['second_name'];?></p>
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
    
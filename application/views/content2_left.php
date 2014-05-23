
    <div class="list_right">
    	<div id="right_head">
        	<p><a href="<?php echo base_url('index'); ?>">首页</a>&nbsp;>&nbsp;<a href=""><?php echo $name['first_name'];?></a>&nbsp;>&nbsp;<a href=""><?php echo $name['second_name'];?></a></p>
        </div>
        <div id="right_title">
        	<p><?php echo $name['second_name'];?></p>
        </div>
        <div id="right_content">
            <ul>
            <?php foreach($articles as $r):?>
                <li><span class="content2"><a href="<?php echo base_url('article/?aid=' . $r['aid']); ?>"><?php echo $r['title'];?></a></span>
                <span class="time"><?php echo $r['add_date'];?></span>
                </li>
            <?php endforeach;?>
            </ul>
            <div id="page" style="text-align:center; font-size:14px;";>
            	<?php echo $page_html; ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
    
                
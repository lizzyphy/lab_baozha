  <div class="right_content">
    	<div class="intro_title"><?php echo $article['type_name'];?></div>
    	<img width="100%" height="5" src="<?php echo base_url('static/img/title.jpg')?>">
        <ul>
        <?php foreach($articles as $r):?>
            <li><span class="content_list"><a href="<?php echo base_url('article/?aid=' . $r['aid']); ?>"><?php echo $r['title'];?></a></span>
            </li>
        <?php endforeach;?>
        </ul>
        <div id="page" style="text-align:center; font-size:14px;";>
            <?php echo $page_html; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
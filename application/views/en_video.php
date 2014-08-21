  <div class="right_content">
    	<div class="intro_title"><?php echo $title;?></div>
    	<img width="100%" height="5" src="<?php echo base_url('static/img/title.jpg')?>">		
		<div class="flash_en" style="padding-top: 30px;">              
                <?php foreach ($flash_url as $row):?>
                <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
                codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" 
                 WIDTH="80%" HEIGHT="180"> 
	            <PARAM NAME=movie VALUE="<?php echo base_url('static/img/en_flash.swf'); ?>"> 
	            <PARAM NAME=quality VALUE=high> 
	            <PARAM NAME=bgcolor VALUE=#FFFFFF> 
	            <EMBED src="<?php echo base_url($row['path']); ?>" quality=high bgcolor=#FFFFFF WIDTH="80%" HEIGHT="180"
	            NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" 
	            PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"> 
	            </EMBED> 
	            </OBJECT>
	            <?php endforeach;?>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
   </div>
       
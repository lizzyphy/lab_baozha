        <div class="left_navi">
            <div class="en_navi">
            	<a href="">Home</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=106')?>">Introduction</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">History</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Main Research Direction and Contents</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Organization Structure</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Academic Committee</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Main Research Achievements</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Instruments</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Education</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Main Members of Staff</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Opening Fund</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Opening and Communication</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('article/type/?type=46')?>">Contact Numbers of Main Members</a>
            </div>
        	<div id="video_title">Video</div>
             <img width="90%" height="5" src="<?php echo base_url('static/img/title.jpg')?>">
             <div id="flash_en">              
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
       

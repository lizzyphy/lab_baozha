        <div class="left_navi">
            <div class="en_navi">
            	<a href="<?php base_url('/english') ?>">Home</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=106')?>">Introduction</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=107')?>">History</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=108')?>">Main Research Direction and Contents</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=109')?>">Organization Structure</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=110')?>">Academic Committee</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=111')?>">Main Research Achievements</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=112')?>">Instruments</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=113')?>">Education</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/list_group/?type=114')?>">Main Members of Staff</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=115')?>">Opening Fund</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=116')?>">Opening and Communication</a>
            </div>
            <div class="en_navi">
            	<a href="<?php echo base_url('en_article/?type=117')?>">Contact Numbers of Main Members</a>
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
       

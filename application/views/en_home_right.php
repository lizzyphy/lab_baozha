	 	<div class="right_content_home">
	 	<!-- 滑动图片 -->
            <div class="focus_r">
        		<div id="pic_r">
            		<ul>
                	<?php foreach ($picture_url as $row):?>
                	<li>
                		<a href="<?php echo $row['url'];?>"><img src="<?php echo base_url($row['path']); ?>" /></a>
                	</li>	
            		<?php endforeach;?>	
            		</ul>
        		</div>
    		</div>
    		<div class="clear"></div>
   			<div class="tip-bg_r">
        		<div id="tip_r">
          	  		<ul>
	                	<li id="smallimg_1" onclick="change(1)" class="current"></li>
	                	<li id="smallimg_2" onclick="change(2)"></li>
	                	<li id="smallimg_3" onclick="change(3)"></li>
	                	<li id="smallimg_4" onclick="change(4)"></li>
            		</ul>
        		</div>
    		</div>
     		<div class="clear"></div>
     	<!-- 介绍和新闻 -->
     		<div class="intro_title">
     			<div id="introduction">Introduction</div>
     			<div id="news">News & Trends</div>
     		</div>
     		<img width="100%" height="5" src="<?php echo base_url('static/img/title.jpg')?>">
     		<div id="intro_content"><a class="en_a" href="<?php echo base_url('en_article/?type=106')?>">&nbsp;&nbsp;&nbsp;&nbsp;State Key Laboratory of Explosion Science and Technology (SKLEST) was founded in 1991 and open to public in 1996. It was approved by Ministry of Education in 1998 and by Ministry of Science and Technology in 2003. SKLEST is the unique state key laboratory in the field of explosion science and technology.
     		</a></div> 
     		<div id="news_content">
     			<?php foreach ($articles as $row):?>
                <li>
                	<a class="en_a over_a" href="<?php echo base_url('en_article/article/?aid=' . $row['aid']); ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a>
                </li>
               <?php endforeach; ?>
     		</div>
            <div class="clear"></div>
            <div id="photos_title">Photos</div>
            <img width="100%" height="5" src="<?php echo base_url('static/img/title.jpg')?>">
            <div id="photos">
            	 <a href="<?php echo base_url('en_article/?type=119')?>"><img width="20%" height="100" src="<?php echo base_url('static/img/p1.jpg')?>"></a>
                 <a href="<?php echo base_url('en_article/?type=119')?>"><img width="20%" height="100" src="<?php echo base_url('static/img/p2.jpg')?>"></a>
                 <a href="<?php echo base_url('en_article/?type=119')?>"><img width="20%" height="100" src="<?php echo base_url('static/img/p3.jpg')?>"></a>
                 <a href="<?php echo base_url('en_article/?type=119')?>"><img width="20%" height="100" src="<?php echo base_url('static/img/p4.jpg')?>"></a>
            </div>
            <div class="clear"></div>
      </div>
      <div class="clear"></div>
      </div>
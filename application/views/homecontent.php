
<div id="box">
	<div class="focus">
        <div id="pic">
            <ul>
            <?php foreach ($picture_url as $row):?>
                <li>
                <a href="<?php echo $row['url'];?>"><img width="1000" height="300" src="<?php echo base_url($row['path']); ?>" /></a>
                </li>	
            <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <div class="tip-bg">
        <div id="tip">
            <ul>
                <li id="smallimg_1" onclick="change(1)" class="current"></li>
                <li id="smallimg_2" onclick="change(2)"></li>
                <li id="smallimg_3" onclick="change(3)"></li>
                <li id="smallimg_4" onclick="change(4)"></li>
            </ul>
        </div>
    </div>
    <div>
        <div style="_padding-top:5px; width: 440px; float:left;">
            <div>	
            <?php foreach ($flash_url as $row):?>
                <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
                codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" 
                WIDTH="440" HEIGHT="350"> 
            <PARAM NAME=movie VALUE="<?php echo base_url($row['path']); ?>"> 
            <PARAM NAME=quality VALUE=high> 
            <PARAM NAME=bgcolor VALUE=#FFFFFF> 
            <EMBED src="<?php echo base_url($row['path']); ?>" quality=high bgcolor=#FFFFFF WIDTH="440" HEIGHT="350" 
            NAME="myMovieName" ALIGN="" TYPE="application/x-shockwave-flash" 
            PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"> 
            </EMBED> 
            </OBJECT>
            <?php endforeach;?>
                <div class="clear"></div>
            </div>
            <form action="<?php echo base_url('index/search')?>" method="get" >
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                   <tr valign="middle">
                       <td>
                        <span class="f_left"><input class="input_ser" type="text" name="keywords" value="请输入关键字" onmouseover=this.focus();
                        onclick="value='';this.style.color='#000'"   
                        onBlur="if(!value){value=defaultValue;this.style.color='#999'}"style="color:#999" /></span>
                        <input class="input_sub" type="submit" name="submit" id="submit" value="搜索" />  
                        <div class="clear"></div>
                       </td>
                   </tr>
                </table>     
            </form> 
        </div>
        
        <div class="right">	
            <div class="title">
                <img width="530" height="5" src="<?php echo base_url('static/img/title.jpg'); ?>" />
                <div class="float_l">&nbsp;&nbsp;&nbsp;&nbsp;新闻快讯</div>
                <div class="more"><a href="<?php echo base_url('article/type?type=74'); ?>" title="更多">更多 &gt;</a></div>
                
            </div>
            <div class="clear"></div>
            <ul>
         	<?php foreach ($xwkx as $row):?>
                <li><span class="right_span"><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a></span>
                <span class="time"><?php echo $row['add_date']; ?></span><div class="clear"></div>
                </li>
             <?php endforeach; ?>
            </ul>
            <div class="title">
                <img width="530" height="5" src="<?php echo base_url('static/img/title.jpg'); ?>" />
                <div class="float_l">&nbsp;&nbsp;&nbsp;&nbsp;最新通知</div>
                <div class="more"><a href="<?php echo base_url('article/type?type=75'); ?>" title="更多">更多 &gt;</a></div>
                <div class="clear"></div>
            </div>
            <ul>
            <?php foreach ($zxtz as $row):?>
                <li><span class="right_span"><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a></span>
                <span class="time"><?php echo $row['add_date']; ?></span><div class="clear"></div>
                </li>
           <?php endforeach; ?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div>
        <div class="left1">
            <div class="title1">
                <div class="float_l"><img width="5" height="14" src="<?php echo base_url('static/img/shu.png'); ?>" />
                &nbsp;&nbsp;专家讲坛信息</div>
                <div class="more"><a href="<?php echo base_url('article/type?type=80'); ?>" title="更多">更多 &gt;</a></div>
            </div>
            <div class="img_1"><img width="330" height="200" src="<?php echo base_url('static/img/zj.jpg'); ?>" /></div>
           <ul>
            <?php foreach ($zjjt as $row):?>
                <li><span  class="left_span"><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>" title="<?php echo $row['title']; ?> "><?php echo $row['title']; ?> </a></span>
                <span class="time1"><?php echo substr("$row[add_date]",5,5); ?></span>
                </li>
           <?php endforeach; ?>
           </ul>
            <div class="clear"></div>
        </div>
    
        <div class="left1" id="right1">
            <div class="title1">
                <div class="float_l"><img width="5" height="14" src="<?php echo base_url('static/img/shu.png'); ?>" />
                &nbsp;&nbsp;学术会议信息</div>
                <div class="more"><a href="<?php echo base_url('article/type?type=79'); ?>" title="更多">更多 &gt;</a></div>
            </div>
            <ul>
                 <?php foreach ($xshy as $row):?>
                <li><span class="left_span"><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>" title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?> </a></span>
                <span class="time1"><?php  echo substr("$row[add_date]",5,5);  ?></span>
                </li>
               
             <?php endforeach; ?>
               
            </ul>
        </div>
        
        <div class="left" id="right1">
            <div class="title1" style="width:213px;">
                <img width="5" height="14" src="<?php echo base_url('static/img/shu.png'); ?>" />
                <span>&nbsp;&nbsp;友情链接</span>
            </div>
            <div class="img_1"><img width="218" height="190" src="<?php echo base_url('static/img/lj.jpg'); ?>" /></div>
            <ul>
                <?php foreach ($link as $row):?>
                <li><span><a href="<?php echo $row['url']; ?>" target='_blank' title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a></span>
				<?php endforeach; ?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
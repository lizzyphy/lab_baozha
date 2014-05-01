
	<div id="content_right" class="list_content_right">
    	<div class="title_2">
            <p><?php echo $title; ?></p>
        </div>
        <div>
            <div class="list_content_right list_courses">
                <table class="t_center" border="0" align="center" cellpadding="0" cellspacing="0">
                    <?php foreach ($courses as $row): ?>
                    <tr>
                        <td align="left"><p><a href="<?php echo base_url('course/?cid=' . $row['cid']); ?>"><?php echo $row['name']?></a></p></td>
                        <td width="70"><?php echo $row['level']; ?></td>
                        <td width="80"><?php echo $row['time']; ?></td>
                        <td width="80"><?php echo $row['price']; ?></td>
                        <td width="40"><a href="<?php echo base_url('apply/?cid=' . $row['cid']); ?>">报名</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div id="page">
            	<?php echo $page_html; ?>
            </div>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="content_foot1"> 	
    </div>
</div>

<div class="content_foot2">
</div>
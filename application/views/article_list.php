
	<div id="content_right" class="list_content_right">
    	<div class="title_2">
            <p><?php echo $title;?></p>
        </div>
        <div>
            <table border="0" align="center" cellpadding="0" cellspacing="0">
            	<?php foreach ($articles as $row): ?>
                <tr>
                    <td><p><a href="<?php echo base_url('article/?aid=' . $row['aid']); ?>"><?php echo $row['title'];?></a></p></td>
                    <td width="70"><?php echo $row['add_date']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div id="page">
        	<?php echo $page_html; ?>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="content_foot1"> 	
    </div>
</div>
<div class="content_foot2">
</div>
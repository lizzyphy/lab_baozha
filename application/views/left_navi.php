
<div id="content">
	<div id="content_left">
		<div class="title_1">
			<p><?php echo $title?></p>
		</div>
		<div class="left_navi">
			<ul id="nav1">
				<?php foreach ($types as $row): ?>
				<li><a href="<?php echo base_url('about/?aid=' . $row['tid']);?>"><?php echo $row['type']; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div id="ad">
			<a href="<?php echo base_url('course/type/?type=1'); ?>"><img src="<?php echo base_url('static/common/img/a_content_right_05.jpg'); ?>" width="210" border="0" /></a> 
			<a href="<?php echo base_url('course/type/?type=2'); ?>"><img src="<?php echo base_url('static/common/img/a_content_right_07.jpg'); ?>" width="210" border="0" /></a>
			<a href="<?php echo base_url('article/type/?type=6'); ?>"><img src="<?php echo base_url('static/common/img/a_content_right_06.jpg'); ?>" width="210" border="0" /></a>
		</div>
	</div>
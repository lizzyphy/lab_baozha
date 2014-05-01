
	<div id="right">
		<div id="content">
			<div class="title_2">课程管理</div>
			<div class="content">
				<div>
					<?php echo form_open($form_url); ?>
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr class="title_3">
								<td colspan="2">编辑课程</td>
							</tr>
							<tr>
								<td width="9%">课程级别</td>
								<td>
									<?php if($type == Courses_m::C_GONGKAI):?>
									<select name="level">
										<option value="综合课程" <?php if($level == '综合课程') echo 'selected="selected"';?>>综合课程</option>
										<option value="顶级课程" <?php if($level == '顶级课程') echo 'selected="selected"';?>>顶级课程</option>
									</select>
									<?php elseif ($type == Courses_m::C_ZAIZHI):?>
									<select name="level">
										<option value="硕士" <?php if($level == '硕士') echo 'selected="selected"';?>>硕士</option>
										<option value="博士" <?php if($level == '博士') echo 'selected="selected"';?>>博士</option>
									</select>
									<?php endif;?>
								</td>
							</tr>
							<tr>
								<td>课程名称</td>
								<td><input name="name" type="text" value="<?php echo $name;?>" size="80" /></td>
							</tr>
							<tr>
								<td>课程费用</td>
								<td><input name="price" type="text" value="<?php echo $price;?>" size="20" /></td>
							</tr>
							<tr>
								<td>开课时间</td>
								<td><input name="time" type="text" value="<?php echo $time;?>" size="20" /></td>
							</tr>
							<tr>
								<td>内容</td>
								<td width="91%"><script type="text/plain" id="ue_content" name="ue_content"><?php echo $content;?></script></td>
							</tr>
						</table>
						<div class="button"><button type="submit">提交</button></div>
					</form>
					<script type=text/javascript src="static/ueditor/editor_config.js"></script>
					<script type=text/javascript src="static/ueditor/editor_all_min.js"></script>
					<script type="text/javascript">
			    		var ue = new UE.ui.Editor();
					    $(function() {
							ue.render('ue_content');
							if(0){//navigator.userAgent.indexOf("Firefox") != -1) {
						    	setTimeout(function() {
										var ue_iframe = document.getElementById('baidu_editor_0').contentWindow.document;
										ue_iframe.designMode="off";
										ue_iframe.execCommand('enableObjectResizing', false, 'false');
									}
									,1500
						    	);
							}
					    })
					</script>
				</div>
			</div>
		</div>
	</div>
					

	<div id="right">
		<div id="content">
			<div class="title_2">新闻管理</div>
			<div class="content">
				<div>
					<?php echo form_open($form_url); ?>
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr class="title_3">
								<td colspan="2">编辑文章</td>
							</tr>
							<tr>
								<td width="9%">文章标题</td>
								<td><input name="title" type="text" value="<?php echo $title;?>" size="80" /></td>
							</tr>
							<tr>
								<td>文章类别</td>
								<td>
									<select name="type">
										<?php foreach ($types as $type): ?>
										<option <?php if($tid == $type['tid']) echo 'selected="selected"';?>  value="<?php echo $type['tid'];?>"><?php if($type['level'] == 2) echo '|--';if($type['level']==3) echo '&nbsp;&nbsp;&nbsp;&nbsp;|--'?><?php echo $type['name']; ?></option>
										<?php endforeach;?>
									</select>
								</td>
							</tr>
							<tr>
								<td>文章内容</td>
								<td width="91%"><script id="ue_content" name="ue_content" type="text/plain"><?php echo $content;?></script></td>
							</tr>
						</table>
						<div class="button"><button type="submit">提交</button></div>
					</form>
					<script type=text/javascript src="/static/ueditor/editor.config.js"></script>
					<script type=text/javascript src="/static/ueditor/editor.all.min.js"></script>
					<script type="text/javascript">
						var ue = UE.getEditor('ue_content');
					</script>
				</div>
			</div>
		</div>
	</div>
					
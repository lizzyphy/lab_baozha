
	<div id="right">
		<div id="content">
			<div class="title_2">关于我们</div>
			<div class="content">
				<div>
					<?php echo form_open($form_url); ?>
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr class="title_3">
								<td colspan="2">编辑关于</td>
							</tr>
							<tr>
								<td width="9%">名称</td>
								<td><input name="type" type="text" value="<?php echo $type;?>" size="80" /></td>
							</tr>
							<tr>
								<td>标题</td>
								<td><input name="title" type="text" value="<?php echo $title;?>" size="80" /></td>
							</tr>
							<tr>
								<td>内容</td>
								<td width="91%"><script type="text/plain" id="ue_content" name="ue_content"><?php echo $content;?></script></td>
							</tr>
						</table>
						<div class="button"><button type="submit">提交</button></div>
					</form>
					<script type=text/javascript src="/static/ueditor/ueditor.config.js"></script>
					<script type=text/javascript src="/static/ueditor/ueditor.all.min.js"></script>
					<script type="text/javascript">
						var ue = UE.getEditor('ue_content');
					</script>
				</div>
			</div>
		</div>
	</div>
					
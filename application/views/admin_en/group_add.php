
	<div id="right">
		<div id="content">
			<div class="title_2">编辑团队管理</div>
			<div class="content">
				<div>
					<?php echo form_open_multipart($form_url); ?>
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr class="title_3">
								<td colspan="2">编辑</td>
							</tr>
							<tr>
								<td width="9%">排序</td>
								<td><input name="order" type="text" value="<?php echo $order;?>" size="10" /></td>
							</tr>
							<tr>
								<td>姓名</td>
								<td><input name="title" type="text" value="<?php echo $title;?>" size="20" /></td>
							</tr>
							<tr>
							
								<td>上传头像</td>
								<td><input name="upfile" type="file" value="" size="80" /></td>
							</tr>
							<tr>
								<td>介绍内容</td>
								<td><script type="text/plain" id="ue_content" name="ue_content"><?php echo $content;?></script></td>
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
					
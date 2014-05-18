
	<div id="right">
		<div id="content">
			<div class="title_2">添加首页图片</div>
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
								<td>标题</td>
								<td><input name="title" type="text" value="<?php echo $title;?>" size="80" /></td>
							</tr>
							<tr>
								<td>链接</td>
								<td width="91%"><input name="url" type="text" value="<?php echo $url;?>" size="80" /></td>
							</tr>
							<tr>
								<td>上传图片</td>
								<td><p style="color:#F00; margin-bottom:2px;">
								<?php if ($type ==1):?>&nbsp;&nbsp;上传图片大小 长*宽 为1000*300
								<?php else:?>&nbsp;&nbsp;上传flash大小 长*宽 为440*350<?php endif;?></p>
								<input name="upfile" type="file" value="" size="80" /></td>
							</tr>
						</table>
						<div class="button"><button type="submit">提交</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
					
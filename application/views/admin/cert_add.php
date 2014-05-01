
	<div id="right">
		<div id="content">
			<div class="title_2">证书管理</div>
			<div class="content">
				<div>
					<?php echo form_open($form_url); ?>
						<table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tr class="title_3">
								<td colspan="2">编辑证书</td>
							</tr>
							<tr>
								<td width="9%">姓名</td>
								<td><input name="name" type="text" value="<?php echo $name;?>" size="20" /></td>
							</tr>
							<tr>
								<td>性别</td>
								<td>
									<label><input name="sex" type="radio" <?php if($sex == '男') echo 'checked="checked"';?> value="男" />男</label>
	                        		<label><input name="sex" type="radio" <?php if($sex == '女') echo 'checked="checked"';?> value="女" />女</label>
								</td>
							</tr>
							<tr>
								<td>出生日期</td>
								<td><input name="birth" type="text" value="<?php echo $birth;?>" size="20" /></td>
							</tr>
							<tr>
								<td>专业</td>
								<td><input name="major" type="text" value="<?php echo $major;?>" size="40" /></td>
							</tr>
							<tr>
								<td>身份证</td>
								<td><input name="card" type="text" value="<?php echo $card;?>" size="40" /></td>
							</tr>
							<tr>
								<td>证书编号</td>
								<td><input name="cert_id" type="text" value="<?php echo $cert_id;?>" size="40" /></td>
							</tr>
						</table>
						<div class="button"><button type="submit">提交</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>
					
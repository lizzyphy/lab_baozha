
<div id="content">
	<div>
		<div class="title_2">
			<p>证书查询</p>
		</div>
		<div class="cert_search">
			<div class="cert_error"><?php echo $error; ?></div>
			<div>
				<form action="<?php echo base_url('cert/search/')?>" method="post">
					<table border="0" align="center" cellpadding="0" cellspacing="0">
						<tr>
							<td align="right">姓名：</td>
							<td><input class="input_1" name="name" id="num" type="text" size="26" /></td>
						</tr>
						<tr>
							<td align="right">身份证：</td>
							<td><input class="input_1" name="card" type="text" size="26" /></td>
						</tr>
						<tr>
							<td align="right">验证码：</td>
							<td><input class="input_1" name="cert_check" type="text" size="10" /><span><img class="captcha" src="<?php echo base_url('cert/captcha');?>" /></span></td>
						</tr>
						<tr class="login_r">
							<td></td>
							<td><input type="submit" value="查&nbsp;&nbsp;询" class="submit" /></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="content_foot1"></div>
</div>
<div class="content_foot2"></div>
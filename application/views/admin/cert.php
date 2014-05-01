
	<div id="right">
		<div id="content">
			<div class="title_2">证书管理</div>
			<div class="content">
				<div class="func">
					<a href="index.php?d=admin&c=cert&m=add_v">添加</a>
				</div>
				<div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr class="title_3">
							<td width="14%">姓名</td>
							<td width="5%">性别</td>
							<td width="11%">出生日期</td>
							<td width="20%">专业</td>
							<td width="20%">身份证</td>
							<td width="20%">证书编号</td>
							<td>操作</td>
						</tr>
						<?php foreach ($certs as $cert): ?>
						<tr>
							<td><?php echo $cert['name']; ?></td>
							<td><?php echo $cert['sex']; ?></td>
							<td><?php echo $cert['birth']; ?></td>
							<td><?php echo $cert['major']; ?></td>
							<td><?php echo $cert['card']; ?></td>
							<td><?php echo $cert['cert_id']; ?></td>
							<td>
								<a href="index.php?d=admin&c=cert&m=edit_v&cid=<?php echo $cert['cid']; ?>">编辑</a>
								<a onclick="return del_alert()" href="index.php?d=admin&c=cert&m=del&cid=<?php echo $cert['cid']; ?>">删除</a>
							</td>
						</tr>
						<?php endforeach;?>
					</table>
					<div class="page">
						<?php echo $page_html; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="right">
		<div id="content">
			<div class="title_2">团队管理</div>
			<div class="content">
				<div class="func">
					<a href="index.php?d=admin_en&c=group&m=add_v">添加</a>
				</div>
				<div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr class="title_3">
							<td width="5%">排序</td>
							<td width="30%">头像</td>
							<td width="30%">姓名</td>
							<td width="10%">操作</td>
						</tr>
						<?php foreach ($groups as $group): ?>
						<tr>
							<td><?php echo $group['order'];?></td>
							<td><?php if ($group['avatar']!='/'){?><img src="<?php echo $group['avatar'];?>" title="<?php echo $group['title'];?>" width="120" height="100" />
								<?php }else echo $group['type_name'];?>
							</td>
							<td><?php echo $group['title'];?></td>
							<td>
								<a href="index.php?d=admin_en&c=group&m=edit_v&gid=<?php echo $group['gid']; ?>">编辑</a>
								<a onclick="return del_alert()" href="index.php?d=admin_en&c=group&m=del&gid=<?php echo $group['gid']; ?>">删除</a>
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
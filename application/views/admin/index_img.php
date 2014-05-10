
	<div id="right">
		<div id="content">
			<div class="title_2">首页图片管理</div>
			<div class="content">
				<div class="func">
					<a href="index.php?d=admin&c=index_img&m=add_v&type=<?php echo $type; ?>">添加</a>
				</div>
				<div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr class="title_3">
							<td width="5%">排序</td>
							<td width="30%">预览</td>
							<td width="30%">链接地址</td>
							<td width="25%">标题</td>
							<td width="10%">操作</td>
						</tr>
						<?php foreach ($imgs as $img): ?>
						<tr>
							<td><?php echo $img['order'];?></td>
							<td><img src="<?php echo $img['path'];?>" title="<?php echo $img['path'];?>" width="220" height="100" /></td>
							<td><?php echo $img['url'];?></td>
							<td><?php echo $img['title'];?></td>
							<td>
								<a href="index.php?d=admin&c=index_img&m=edit_v&id=<?php echo $img['id']; ?>">编辑</a>
								<a onclick="return del_alert()" href="index.php?d=admin&c=index_img&m=del&id=<?php echo $img['id']; ?>&type=<?php echo $img['type'];?>">删除</a>
							</td>
						</tr>
						<?php endforeach;?>
					</table>
				</div>
			</div>
		</div>
	</div>
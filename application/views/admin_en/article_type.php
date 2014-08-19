
	<div id="right">
		<div id="content">
			<div class="title_2">类别管理</div>
			<div class="content">
				<div class="func">
					<a href="index.php?d=admin&c=article_type&m=add_v">添加类别</a>
				</div>
				<div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr class="title_3">
							<td width="5%">tid号</td>
							<td width="80%">类别名称</td>
							<td>操作</td>
						</tr>
						<?php foreach ($types as $type): ?>
						<tr>
							<td><?php echo $type['tid']?></td>
							<td><?php if($type['level'] == 2) echo '|——';if($type['level']==3) echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|——'?><?php echo $type['name']?></td>
							<td><a href="index.php?d=admin&c=article_type&m=edit_v&tid=<?php echo $type['tid'];?>">编辑</a> <!-- | <a  onclick="return del_alert()" href="index.php?d=admin&c=article_type&m=del&tid=<?php echo $type['tid'];?>">删除</a> --></td>
						</tr>
						<?php endforeach;?>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div id="right">
		<div id="content">
			<div class="title_2">课程管理</div>
			<div class="content">
				<div class="func">
					<a href="index.php?d=admin&c=courses&m=add_v&type=<?php echo $type; ?>">添加</a>
				</div>
				<div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr class="title_3">
							<td width="50%">课程名称</td>
							<td width="13%">课程级别</td>
							<td width="12%">开课时间</td>
							<td width="12%">费用</td>
							<td>操作</td>
						</tr>
						<?php foreach ($courses as $course): ?>
						<tr>
							<td><?php echo $course['name'];?></td>
							<td><?php echo $course['level'];?></td>
							<td><?php echo $course['time'];?></td>
							<td><?php echo $course['price'];?></td>
							<td>
								<a href="<?php echo base_url('course/?cid=' . $course['cid']); ?>" target="_blank">查看</a>
								<a href="index.php?d=admin&c=courses&m=edit_v&cid=<?php echo $course['cid']; ?>">编辑</a>
								<a onclick="return del_alert()" href="index.php?d=admin&c=courses&m=del&cid=<?php echo $course['cid']; ?>&type=<?php echo $course['type']; ?>">删除</a>
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

	<div id="right">
		<div id="content">
			<div class="title_2">学生报名管理</div>
			<div class="content">
				<div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr class="title_3">
							<td width="10%">姓名</td>
							<td width="6%">性别</td>
							<td width="20%">联系电话</td>
							<td width="55%">报名课程</td>
							<td>操作</td>
						</tr>
						<?php foreach ($students as $student): ?>
						<tr>
							<td><?php echo $student['name'];?></td>
							<td><?php echo $student['sex'];?></td>
							<td><?php echo $student['phone'];?></td>
							<td><?php echo $student['course'];?></td>
							<td>
								<a href="index.php?d=admin&c=student&m=view&sid=<?php echo $student['sid']; ?>">查看</a>
								<a onclick="return del_alert()" href="index.php?d=admin&c=student&m=del&sid=<?php echo $student['sid']; ?>&type=<?php echo $student['type'];?>">删除</a>
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

	<div id="right">
		<div id="content">
			<div class="title_2">新闻管理</div>
			<div class="content">
				<div class="func">
					<a href="index.php?d=admin&c=home&m=article_add">添加新闻</a>
				</div>
				<div>
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr class="title_3">
							<td width="10%">时间</td>
							<td width="58%">标题</td>
							<td width="10%">分类</td>
							<td width="10%">添加人</td>
							<td>操作</td>
						</tr>
						<?php foreach ($articles as $article): ?>
						<tr>
							<td><?php echo $article['add_date']; ?></td>
							<td><?php echo $article['title']; ?></td>
							<td><?php echo $article['type_name']; ?></td>
							<td><?php echo $article['add_user']; ?></td>
							<td>
								<a href="<?php echo base_url('article/?aid=' . $article['aid']); ?>" target="_blank">查看</a>
								<a href="index.php?d=admin&c=home&m=article_edit&aid=<?php echo $article['aid']; ?>">编辑</a>
								<a onclick="return del_alert()" href="index.php?d=admin&c=article&m=del&aid=<?php echo $article['aid']; ?>">删除</a>
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
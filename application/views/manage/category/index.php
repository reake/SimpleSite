<section class="scrollable padder">
	<?php p($crumb); ?>
	<div class="row">
		<div class="col-sm-12">
			<section class="panel panel-default">
				<header class="panel-heading">
					<a class="btn btn-sm btn-default pull-right" href="/manage/category/set">添加栏目</a>
					网站栏目列表
				</header>
				<table class="table table-striped m-b-none">
					<thead>
					<tr>
						<th>ID</th>
						<th>是否显示</th>
						<th>栏目名称</th>
						<th>栏目链接</th>
						<th>栏目类型</th>
						<th>创建时间</th>
						<th width="70">操作</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($category as $k => $v) { ?>
						<tr>
							<td>
								<?= $v['id'] ?>
							</td>
							<td>
								<?= $v['status'] ?>
							</td>
							<td>
								<?= $v['name'] ?>
							</td>
							<td>
								<?= $v['uri'] ?>
							</td>
							<td>
								<?= $v['types'] ?>
							</td>
							<td>
								<?= $v['created'] ?>
							</td>
							<td class="text-right">
								<div class="btn-group">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-pencil"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="/manage/category/set?id=<?= $v['id'] ?>">编辑</a></li>
										<li class="divider"></li>
										<li><a onclick="delCategory(<?= $v['id'] ?>">删除</a></li>
									</ul>
								</div>
							</td>
						</tr>
						<?php if (isset($v['subCategory'])) { ?>
							<?php foreach ($v['subCategory'] as $j => $q) { ?>
								<tr>
									<td>
										<?= $q['id'] ?>
									</td>
									<td>
										<?= $q['status'] ?>
									</td>
									<td>
										|-- <?= $q['name'] ?>
									</td>
									<td>
										<?= $q['uri'] ?>
									</td>
									<td>
										<?= $q['types'] ?>
									</td>
									<td>
										<?= $q['created'] ?>
									</td>
									<td class="text-right">
										<div class="btn-group">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-pencil"></i>
											</a>
											<ul class="dropdown-menu pull-right">
												<li><a href="/manage/category/set?id=<?= $q['id'] ?>">编辑</a></li>
												<li class="divider"></li>
												<li><a onclick="delCategory(<?= $q['id'] ?>">删除</a></li>
											</ul>
										</div>
									</td>
								</tr>
							<?php } ?>
						<?php } ?>
					<?php } ?>
					</tbody>
				</table>
			</section>
		</div>
	</div>
</section>
<script>
	function delCategory(cid) {
		$.post('/manage/category/set', {'action': 'del', id: cid}, function (result) {
			if (result.status == 1001) {
				window.location.href = '/manage/category/index';
			} else {
				alert(result.result.msg);
			}
		}, 'JSON')
	}
</script>
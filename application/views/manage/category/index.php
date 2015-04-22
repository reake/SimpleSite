<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?php p($siteUrl); ?>/_assets/index.html"><i class="fa fa-home"></i> 简站(Simple-Site) </a></li>
		<li class="active">网站栏目</li>
	</ul>
	<div class="m-b-md"><h3 class="m-b-none">网站栏目</h3>
		<small>管理网站栏目</small>
	</div>
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
						<th>友链状态</th>
						<th>友链名称</th>
						<th>友情链接</th>
						<th>友链介绍</th>
						<th>友链图片</th>
						<th>创建时间</th>
						<th width="70">操作</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($category as $k => $v) { ?>
						<tr>
							<td>
								<?php p($v->id); ?>
							</td>
							<td>
								<?php p($v->status); ?>
							</td>
							<td>
								<?php p($v->name); ?>
							</td>
							<td>
								<?php p($v->url); ?>
							</td>
							<td>
								<?php p($v->types); ?>
							</td>
							<td>
								<?php p($v->status); ?>
							</td>
							<td>
								<?php p($v->created); ?>
							</td>
							<td class="text-right">
								<div class="btn-group">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-pencil"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="/manage/category/set?id=<?php p($v->id); ?>">编辑</a></li>
										<li class="divider"></li>
										<li><a onclick="delCategory(<?php p($v->id); ?>">删除</a></li>
									</ul>
								</div>
							</td>
						</tr>
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
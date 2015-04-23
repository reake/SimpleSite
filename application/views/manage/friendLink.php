<section class="scrollable padder">
	<?php p($crumb); ?>
	<div class="row">
		<div class="col-sm-12">
			<section class="panel panel-default">
				<header class="panel-heading">
					<a class="btn btn-sm btn-default pull-right" href="/manage/create/step1">增加网站</a>
					友情链接列表
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
					<?php foreach($friendLinks as $link){ ?>
						<tr>
							<td>
								<?php p($link['id']); ?>
							</td>
							<td>
								<?php p($link['status']); ?>
							</td>
							<td>
								<?php p($link['title']); ?>
							</td>
							<td>
								<?php p($link['url']); ?>
							</td>
							<td>
								<?php p($link['description']); ?>
							</td>
							<td>
								<?php p($link['path']); ?>
							</td>
							<td>
								<?php p($link['created']); ?>
							</td>
							<td class="text-right">
								<div class="btn-group">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-pencil"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="/manage/friendlink/edit?siteId=<?php p($link['id']);?>">编辑</a></li>
										<li class="divider"></li>
										<li><a href="#">删除</a></li>
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

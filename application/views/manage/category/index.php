<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?php p($siteUrl); ?>/_assets/index.html"><i class="fa fa-home"></i> 简站(Simple-Site) </a></li>
		<li class="active">友情链接</li>
	</ul>
	<div class="m-b-md"><h3 class="m-b-none">友情链接</h3>
		<small>管理网站的友情链接</small>
	</div>
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
					<?php foreach($category as $v){ ?>
						<tr>
							<td>
								<?php p($v['id']); ?>
							</td>
							<td>
								<?php p($v['status']); ?>
							</td>
							<td>
								<?php p($v['title']); ?>
							</td>
							<td>
								<?php p($v['url']); ?>
							</td>
							<td>
								<?php p($v['description']); ?>
							</td>
							<td>
								<?php p($v['path']); ?>
							</td>
							<td>
								<?php p($v['created']); ?>
							</td>
							<td class="text-right">
								<div class="btn-group">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-pencil"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="/manage/category/edit?siteId=<?php p($v['id']);?>">编辑</a></li>
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

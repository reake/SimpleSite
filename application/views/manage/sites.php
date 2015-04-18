<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?php p($siteUrl); ?>/_assets/index.html"><i class="fa fa-home"></i> 简站(Simple-Site) </a></li>
		<li class="active">网站管理</li>
	</ul>
	<div class="m-b-md"><h3 class="m-b-none">网站管理</h3>
		<small>您可以在这里管理您所有的网站！</small>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<section class="panel panel-default">
				<header class="panel-heading">
					<a class="btn btn-sm btn-default pull-right" href="/manage/create/step1">增加网站</a>
					管理网站
				</header>
				<table class="table table-striped m-b-none">
					<thead>
					<tr>
						<th>ID</th>
						<th>网站状态</th>
						<th>网站名称</th>
						<th>网站介绍</th>
						<th width="70">操作</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($sites as $site){ ?>
						<tr>
							<td>
								<?php p($site['id']); ?>
							</td>
							<td>
								<?php p($site['status']); ?>
							</td>
							<td>
								<?php p($site['name']); ?>
							</td>
							<td>
								<?php p($site['description']); ?>
							</td>
							<td class="text-right">
								<div class="btn-group">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="fa fa-pencil"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li><a href="#">编辑</a></li>
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
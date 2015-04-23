<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?php p($siteUrl); ?>/_assets/index.html"><i class="fa fa-home"></i> 简站(Simple-Site) </a></li>
		<li class="active">网站管理</li>
	</ul>
	<div class="m-b-md"><h3 class="m-b-none">网站管理</h3>
		<small>您可以在这里管理您所有的网站！</small>
	</div>
	<div class="row">
		<?php foreach ($sites as $v) { ?>
		<div class="col-sm-4">
			<section class="panel panel-default">
				<header class="panel-heading bg-info lt no-border">
					<div class="clearfix">
						<a href="#" class="pull-left thumb avatar b-3x m-r">
							<?php if(empty($v['logo'])){ ?>
							<i class="fa fa-ban fa-3x"></i>
							<?php }else{ ?>
							<img src="/media/image/data/<?php p($v['logo']); ?>" class="img-circle">
							<?php } ?>
						</a>
						<div class="clear">
							<div class="h3 m-t-xs m-b-xs text-white"> <?php p($v['name']); ?>
								<a href="/manage/site/edit?siteId=<?php p($v['id']); ?>" class="btn btn-info btn-xs"><i class="fa fa-cogs"></i> 编辑</a>
								<i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i>
							</div>
							<small class="text-muted"> <?php p($v['description']); ?></small>
						</div>
					</div>
				</header>
				<div class="list-group no-radius alt">
					<a class="list-group-item" href="#">
						<span class="badge bg-success">良好</span>
						<i class="fa fa-comment icon-muted"></i> 网站状态
					</a>
					<a class="list-group-item" href="#">
						<span class="badge bg-info">16</span>
						<i class="fa fa-envelope icon-muted"></i> 新消息 </a>
					<a class="list-group-item" href="#">
						<span class="badge bg-light">5</span>
						<i class="fa fa-eye icon-muted"></i> 浏览量
					</a>
				</div>
			</section>
		</div>
		<?php } ?>
	</div>
</section>
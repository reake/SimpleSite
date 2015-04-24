<header id="header" class="navbar navbar-fixed-top bg-white box-shadow b-b b-light" data-spy="affix"
		data-offset-top="1">
	<div class="container">
		<div class="navbar-header">
			<a href="/" class="navbar-brand">
				<img src="<?php echo p($url); ?>/_assets/images/logo.png" class="m-r-sm">
				<span class="text-muted"><?php p($title); ?> </span>
			</a>
			<button class="btn btn-link visible-xs" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<i class="fa fa-bars"></i>
			</button>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php foreach ($category as $v) { ?>
					<li><a href="<?php p($v->url); ?>"><?php p($v->name); ?></a></li>
				<?php } ?>
				<li>
					<div class="m-t-sm">
						<a href="/login" class="btn btn-sm btn-success m-l"><strong>注册/登陆</strong></a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</header>

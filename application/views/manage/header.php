<header class="bg-dark dk header navbar navbar-fixed-top-xs">
	<div class="navbar-header aside-md">
		<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open"
		   data-target="#nav,html">
			<i class="fa fa-bars"></i>
		</a>
		<a href="<?php p($siteUrl); ?>/_assets/#" class="navbar-brand" data-toggle="fullscreen">
			<img src="<?php p($siteUrl); ?>/_assets/images/logo.png"><?php p($siteTitle); ?></a>
		<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
			<i class="fa fa-cog"></i>
		</a>
	</div>
	<ul class="nav navbar-nav hidden-xs">
		<li>
			<a href="<?php p($siteUrl); ?>/manage/dashboard/index" class="dker">
				<i class="fa fa-desktop"></i>
				<span class="font-bold">系统管理</span>
			</a>
		</li>
		<li>
			<a href="<?php p($siteUrl); ?>/#">
				<i class="fa fa-puzzle-piece"></i>
				<span class="font-bold">功能插件</span>
			</a>
		</li>
		<li>
			<a href="<?php p($siteUrl); ?>/#">
				<i class="fa fa-star"></i>
				<span class="font-bold">模板主题</span>
			</a>
		</li>
	</ul>
	<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
		<li class="dropdown">
			<a href="<?php p($siteUrl); ?>/_assets/#" class="dropdown-toggle" data-toggle="dropdown">
				<span class="thumb-sm avatar pull-left">
					<img src="<?php p($siteUrl); ?>/_assets/images/avatar.jpg">
				</span> <?php p($user['username']); ?> <b class="caret"></b>
			</a>
			<ul class="dropdown-menu animated fadeInRight">
				<span class="arrow top"></span>
				<li><a href="<?php p($siteUrl); ?>/_assets/#">系统设置</a></li>
				<li><a href="<?php p($siteUrl); ?>/manage/profile">账号信息</a></li>
				<li><a data-target="lockModal" data-toggle="generalModal">锁定屏幕</a></li>
				<li class="divider"></li>
				<li><a href="<?php p($siteUrl); ?>/logout">退出登陆</a></li>
			</ul>
		</li>
	</ul>
</header>
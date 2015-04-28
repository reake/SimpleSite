<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title><?= $title ?></title>
	<meta name="description" content="<?= $keywords ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="<?= $url ?>/_assets/css/font.css" type="text/css"/>
	<link rel="stylesheet" href="<?= $url ?>/_assets/css/landing.css" type="text/css"/>
	<link rel="stylesheet" href="<?= $url ?>/_assets/css/app.v1.css" type="text/css"/>
	<!--[if lt IE 9]>
	<script src="<?=$url?>/_assets/js/ie/html5shiv.js"></script>
	<script src="<?=$url?>/_assets/js/ie/respond.min.js"></script>
	<script src="<?=$url?>/_assets/js/ie/excanvas.js"></script>
	<![endif]-->
</head>
<body class="">
<!-- header -->
<?php include('header.php'); ?>
<!-- / header -->
<section id="content">
	<?php include('subMenu.php'); ?>
	<div class="container">
		<div class="m-t-xl m-b-xl text-center">
			<h2>选择合适您的版本</h2>
		</div>
		<div class="clearfix">
			<div class="row m-b-xl">
				<div class="col-sm-4 animated fadeInLeftBig">
					<section class="panel b-light text-center m-t">
						<header class="panel-heading bg-white b-light">
							<h3 class="m-t-sm">个人版</h3>

							<p>个人站长或公益组织类</p>
						</header>
						<ul class="list-group">
							<li class="list-group-item text-center bg-light lt">
								<span class="text-danger font-bold h1">0</span> / 永久免费
							</li>
							<li class="list-group-item"> 全功能版本</li>
							<li class="list-group-item"> 免费一个主题</li>
							<li class="list-group-item"> 免费一个模块</li>
							<li class="list-group-item"> 手动免费升级后续版本</li>
							<li class="list-group-item"> 无技术支持</li>
						</ul>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary m-t m-b">在线试用</a>
						</footer>
					</section>
				</div>
				<div class="col-sm-4 animated fadeInUp">
					<section class="panel b-primary text-center">
						<header class="panel-heading bg-primary">
							<h3 class="m-t-sm">商业版</h3>

							<p>公司、政府、学校等组织</p>
						</header>
						<ul class="list-group">
							<li class="list-group-item text-center bg-light lt">
								<div class="padder-v"><span class="text-danger font-bold h1">￥3000</span> / 年</div>
							</li>
							<li class="list-group-item"> 全功能版本</li>
							<li class="list-group-item"> 所有主题免费</li>
							<li class="list-group-item"> 所有模块免费</li>
							<li class="list-group-item"> 主动免费升级后续版本</li>
							<li class="list-group-item"> 7*24 小时技术支持</li>
						</ul>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary m-t m-b">在线试用</a>
						</footer>
					</section>
				</div>
				<div class="col-sm-4 animated fadeInRightBig">
					<section class="panel b-light text-center m-t">
						<header class="panel-heading bg-white b-light">
							<h3 class="m-t-sm">定制版</h3>

							<p>特殊需求用户</p>
						</header>
						<ul class="list-group">
							<li class="list-group-item text-center bg-light lt"><span class="text-danger font-bold h1"> ？</span>
								/ 联系商谈
							</li>
							<li class="list-group-item"> 根据业务需求进行定制系统</li>
							<li class="list-group-item"> 定制专属网站模板主题</li>
							<li class="list-group-item"> Unlimited users</li>
							<li class="list-group-item"> 主动免费升级后续版本</li>
							<li class="list-group-item"> 7*24 小时技术支持</li>
						</ul>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary m-t m-b">在线试用</a>
						</footer>
					</section>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white-only">
		<div class="container">
			<div class="m-t-xl m-b-xl">
				<h2 class="font-thin">已经有 21,000 个网站在使用简站(Simple-Site)搭建营销系统！</h2>
			</div>
		</div>
	</div>
</section>
<!-- footer -->
<?php include('footer.php'); ?>
<!-- / footer -->
<!-- Bootstrap --> <!-- App -->
<script src="<?= $url ?>/_assets/js/app.v1.js"></script>
<script src="<?= $url ?>/_assets/js/appear/jquery.appear.js"></script>
<script src="<?= $url ?>/_assets/js/scroll/smoothscroll.js"></script>
<script src="<?= $url ?>/_assets/js/landing.js"></script>
<script src="<?= $url ?>/_assets/js/app.plugin.js"></script>
</body>
</html>
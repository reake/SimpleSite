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
	<?php include("subMenu.php"); ?>
	<div>
		<div class="container m-t-xl">
			<div class="row">
				<div class="col-sm-7">
					<h2 class="font-thin m-b-lg"><span class="text-primary">简站(Simple-Site)</span> - 简单建站！</h2>

					<p class="h4 m-b-lg l-h-1x">
						简站(Simple-Site)是一套开源的建站系统，它能够同时管理PC网站和移动网站，并拥有各类强大的功能模块。无论您是企业、政府、组织或者个人，您无需任何技术即可在几分钟内搭建好一个属于自己的微网站！
					</p>

					<p class="clearfix">&nbsp;</p>

					<div class="row m-b-xl">
						<div class="col-xs-2"><i class="fa fa-desktop fa-4x icon-muted"></i></div>
						<div class="col-xs-2"><i class="fa fa-plus icon-muted m-t"></i></div>
						<div class="col-xs-2"><i class="fa fa-tablet fa-4x icon-muted"></i></div>
						<div class="col-xs-2"><i class="fa fa-plus icon-muted m-t"></i></div>
						<div class="col-xs-2"><i class="fa fa-mobile fa-4x icon-muted"></i></div>
					</div>
				</div>
				<div class="col-sm-5 text-center">
					<section class="panel bg-dark inline aside-md no-border device phone animated fadeInRightBig">
						<header class="panel-heading text-center">
							<i class="fa fa-minus fa-2x icon-muted m-b-n-xs block"></i>
						</header>
						<div class="m-l-xs m-r-xs">
							<div class="carousel auto slide" id="c-fade" data-interval="3000">
								<div class="carousel-inner">
									<div class="item active text-center">
										<img src="<?= $url ?>/_assets/images/phone-2.png" class="img-full">
									</div>
									<div class="item text-center">
										<img src="<?= $url ?>/_assets/images/phone-1.png" class="img-full">
									</div>
								</div>
							</div>
						</div>
						<footer class="bg-dark text-center panel-footer no-border">
							<i class="fa fa-circle icon-muted fa-lg"></i>
						</footer>
					</section>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white b-t b-light">
		<div class="container">
			<div class="row m-t-xl m-b-xl">
				<div class="col-sm-5 text-center clearfix m-t-xl" data-ride="animated" data-animation="fadeInLeftBig">
					<div class="h1 font-bold m-t-xl m-b-xl"><span class="fa-2x icon-muted">{Code}</span></div>
				</div>
				<div class="col-sm-7"><h2 class="font-thin m-b-lg">开放源码</h2>

					<p class="h4 m-b-lg l-h-1x">
						您可以将系统部署到您自己的服务器上运行，系统拥有高度扩展性，可以方便的融入任何功能。完善的二次开发文档与高质量的代码，使您可以方便快速的开发更加符合您业务需求的功能。
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="b-t b-light">
		<div class="container m-t-xl">
			<div class="row">
				<div class="col-sm-7">
					<h2 class="font-thin m-b-lg">更好的架构</h2>
					<p class="h4 m-b-lg l-h-1x">
						极致的面向对象（MVC）开发，模块化功能实现确保扩展性。通用基础组件（路由、数据操作、数据库、缓存、任务、测试等）封装为系统的稳定性、安全性提供有力保障。让你更加专注业务！
					</p>
				</div>
				<div class="col-sm-5 text-center" data-ride="animated" data-animation="fadeInUp">
					<section class="panel bg-dark m-t-lg m-r-n-lg m-b-n-lg no-border device animated fadeInUp">
						<header class="panel-heading text-left"><i class="fa fa-circle fa-fw icon-muted"></i> <i
								class="fa fa-circle fa-fw icon-muted"></i> <i class="fa fa-circle fa-fw icon-muted"></i>
						</header>
						<img src="<?= $url ?>/_assets/images/main.gif" class="img-full"></section>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white b-t b-light pos-rlt">
		<div class="container">
			<div class="row m-t-xl m-b-xl">
				<div class="col-sm-5 text-center clearfix m-t-xl" data-ride="animated" data-animation="fadeInLeftBig">
					<div class="h3 font-bold m-t-xl m-b-xl"><i class="fa fa-circle text-primary fa-2x"></i> <i
							class="fa fa-circle text-info fa-2x"></i> <i class="fa fa-circle text-success fa-2x"></i> <i
							class="fa fa-circle text-warning fa-2x"></i> <i class="fa fa-circle text-danger fa-2x"></i>
						<i class="fa fa-circle text-dark fa-2x"></i> <i class="fa fa-circle text-light fa-2x"></i></div>
				</div>
				<div class="col-sm-7">
					<h2 class="font-thin m-b-lg">众多主题模板与功能插件</h2>

					<p class="h4 m-b-lg l-h-1x">
						系统自带多款漂亮的通用型网站模板供免费使用，并能简单快速的将您现在的网站移植到本系统中。众多功能插件，一键添加删除，自由选择适合自己的！
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="b-t b-light">
		<div class="container m-t-xl">
			<div class="row">
				<div class="col-sm-7">
					<h2 class="font-thin m-b-lg">平台型 VS 应用型</h2>

					<p class="h4 m-b-lg l-h-1x">
						使用本系统可以管理公司一个网站（应用型），也可以在同一套系统内开一百个账号给一百个公司管理一千个网站（平台型）。并且由于系统极好的扩展性，它可以从简单到只有数个栏目的企业官网到数百类目的新闻资讯网站都从容处理！
					</p>
				</div>
				<div class="col-sm-5 text-center" data-ride="animated" data-animation="fadeInRightBig">
					<section class="panel bg-light m-t-lg m-r-n-lg m-b-n-lg no-border device animated fadeInUp">
						<header class="panel-heading text-left">
							<i class="fa fa-circle fa-fw icon-muted"></i>
							<i class="fa fa-circle fa-fw icon-muted"></i>
							<i class="fa fa-circle fa-fw icon-muted"></i>
						</header>
						<img src="<?= $url ?>/_assets/images/app.gif" class="img-full"></section>
				</div>
			</div>
		</div>
	</div>
	<div class="b-t b-light pos-rlt bg-white">
		<div class="container"><p class="m-t-xl m-b-xl">简站(Simple-Site) - 专注您更专业的事情! </p></div>
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
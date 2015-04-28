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
	<div class="bg-primary dk">
		<div class="text-center wrapper">
			<div class="m-t-xl m-b-xl">
				<div class="text-uc h1 font-bold inline">
					<div class="pull-left m-r-sm text-white">建站（简站 Simple-Site）从未
						<span class="font-thin text-muted">如此</span>
					</div>
					<div class="carousel slide carousel-fade inline auto aside text-left pull-left pull-none-xs"
						 data-interval="2000">
						<div class="carousel-inner">
							<div class="item active text-warning"> 简单</div>
							<div class="item text-dark"> 快速</div>
							<div class="item"> 有趣</div>
						</div>
					</div>
				</div>
				<div class="h4 text-muted m-t-sm">重新定义建站 - 让您专注您更专业的事情</div>
			</div>
			<p class="text-center m-b-xl">
				<a href="/download" target="_blank" class="btn btn-lg btn-dark m-sm">下载源码</a>
				<a href="/login" target="_blank" class="btn btn-lg btn-warning b-white bg-empty m-sm">在线试用</a>
			</p>
		</div>
		<div class="padder">
			<div class="hbox">
				<aside class="col-md-3 v-bottom text-right">
					<div class="hidden-sm hidden-xs">
						<section
							class="panel bg-dark inline m-b-n-lg m-r-n-lg aside-sm no-border device phone animated fadeInLeftBig">
							<header class="panel-heading text-center"><i class="fa fa-minus fa-2x m-b-n-xs block"></i>
							</header>
							<div>
								<div class="m-l-xs m-r-xs">
									<img src="<?php echo p($url); ?>/_assets/images/phone-2.png" class="img-full">
								</div>
							</div>
						</section>
					</div>
				</aside>
				<aside class="col-sm-10 col-md-6">
					<section class="panel bg-dark m-b-n-lg no-border device animated fadeInUp">
						<header class="panel-heading text-left">
							<i class="fa fa-circle fa-fw"></i>
							<i class="fa fa-circle fa-fw"></i>
							<i class="fa fa-circle fa-fw"></i>
						</header>
						<img src="<?php echo p($url); ?>/_assets/images/main.png" class="img-full">
					</section>
				</aside>
				<aside class="col-md-3 v-bottom">
					<div class="hidden-sm hidden-xs">
						<section class="panel bg-light m-b-n-lg m-l-n-lg aside no-border device phone animated fadeInRightBig">
							<header class="panel-heading text-center">
								<i class="fa fa-minus fa-2x text-white m-b-n-xs block"></i>
							</header>
							<div class="">
								<div class="m-l-xs m-r-xs">
									<img src="<?php echo p($url); ?>/_assets/images/phone-1.png" class="img-full">
								</div>
							</div>
						</section>
					</div>
				</aside>
			</div>
		</div>
		<div class="dker pos-rlt">
			<div class="container wrapper">
				<div class="m-t-lg m-b-lg text-center"> 一套系统满足您所有的需求</div>
			</div>
		</div>
	</div>
	<div id="about">
		<div class="container">
			<div class="m-t-xl m-b-xl text-center wrapper">
				<h3>Responsive web application and admin dashboardtemplate</h3>
				<p class="text-muted">This web based app template give you much power to build your great
					application.</p>
			</div>
			<div class="row m-t-xl m-b-xl text-center">
				<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
					<p class="h3 m-b-lg">
						<i class="fa fa-lightbulb-o fa-3x text-info"></i>
					</p>
					<div class="">
						<h4 class="m-t-none">开放全部源码</h4>
						<p class="text-muted m-t-lg">Many mobile app widgets and components, it's fully responsive, it
							can run on all the size of the screens. Start work on your great idea today!</p>
					</div>
				</div>
				<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
					<p class="h3 m-b-lg">
						<i class="fa fa-signal fa-3x text-info"></i>
					</p>
					<div class="">
						<h4 class="m-t-none">模块化开发</h4>
						<p class="text-muted m-t-lg">It also can be used as admin dashboard, it has tables, charts and
							other useful components for system management, graph data shows and analysis.</p>
					</div>
				</div>
				<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="900"><p
						class="h3 m-b-lg"><i class="fa fa-rocket fa-3x text-info"></i></p>

					<div class=""><h4 class="m-t-none">极速搭建</h4>

						<p class="text-muted m-t-lg">This template also have a front end site that for your application
							landing, It have the features introduction, blog section, and a price table included.</p>
					</div>
				</div>
			</div>
			<div class="m-t-xl m-b-xl text-center wrapper">
				<p class="h5">您可以使用此系统搭建
					<span class="text-primary">官网网站</span>,
					<span class="text-primary">微信公众平台</span>,
					<span class="text-primary">微网站</span>...
				</p>
			</div>
		</div>
	</div>
	<div id="responsive" class="bg-dark">
		<div class="text-center">
			<div class="container">
				<div class="m-t-xl m-b-xl wrapper">
					<h3 class="text-white">一套系统管理所有网站</h3>
					<p>You can use your application at anywhere in the world. <br>This template works on <span
							class="text-primary text-ul">mobile device</span> too.</p></div>
				<div class="row m-t-xl m-b-xl">
					<div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
						<p class="text-center h2 m-b-lg m-t-lg"><span class="fa-stack fa-2x"> <i
									class="fa fa-circle fa-stack-2x text-dark"></i> <i
									class="fa fa-mobile fa-stack-1x text-muted"></i> </span></p>

						<p>微信</p></div>
					<div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
						<p class="text-center h1 m-b-lg"><span class="fa-stack fa-2x"> <i
									class="fa fa-circle fa-stack-2x text-dark"></i> <i
									class="fa fa-tablet fa-stack-1x text-muted"></i> </span></p>

						<p>移动网站</p></div>
					<div class="col-sm-4 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
						<p class="text-center h2 m-b-lg m-t-lg"><span class="fa-stack fa-2x"> <i
									class="fa fa-circle fa-stack-2x text-dark"></i> <i
									class="fa fa-desktop fa-stack-1x text-muted text-md"></i> </span></p>

						<p>PC网站</p></div>
				</div>
			</div>
		</div>
	</div>
	<div id="newsletter" class="bg-white clearfix wrapper-lg">
		<div class="container text-center m-t-xl m-b-xl" data-ride="animated" data-animation="fadeIn">
			<h2>订阅消息</h2>
			<p>想关注我们的最新消息？输入邮箱订阅</p>
			<form class="form-inline m-t-xl m-b-xl">
				<div class="form-group">
					<input name="email" class="form-control input-lg" placeholder="您的邮箱"
						   data-ride="animated" data-animation="fadeInLeftBig" data-delay="300">
				</div>
				<button type="submit" class="btn btn-default btn-lg subscribe" data-ride="animated"
						data-animation="fadeInRightBig" data-delay="600">订阅
				</button>
			</form>
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
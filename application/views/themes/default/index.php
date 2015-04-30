<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title><?= $title ?></title>
    <meta name="keywords" content="<?= $keywords ?>"/>
	<meta name="description" content="<?= $description ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= $url ?>/_assets/images/favicon.ico" type="image/x-icon" />
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
				<a href="/#newsletter" class="btn btn-lg btn-warning b-white bg-empty m-sm">6月1号开放 - 敬请期待！</a>
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
									<img src="<?php echo p($url); ?>/_assets/images/phone-1.png" class="img-full">
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
						<img src="<?php echo p($url); ?>/_assets/images/main.gif" class="img-full">
					</section>
				</aside>
				<aside class="col-md-3 v-bottom">
					<div class="hidden-sm hidden-xs">
						<section
							class="panel bg-light m-b-n-lg m-l-n-lg aside no-border device phone animated fadeInRightBig">
							<header class="panel-heading text-center">
								<i class="fa fa-minus fa-2x text-white m-b-n-xs block"></i>
							</header>
							<div class="">
								<div class="m-l-xs m-r-xs">
									<img src="<?php echo p($url); ?>/_assets/images/phone-2.png" class="img-full">
								</div>
							</div>
						</section>
					</div>
				</aside>
			</div>
		</div>
		<div class="dker pos-rlt">
			<div class="container wrapper">
				<div class="m-t-lg m-b-lg text-center"> 一套系统满足您所有网站需求</div>
			</div>
		</div>
	</div>
	<div id="about">
		<div class="container">
			<div class="m-t-xl m-b-xl text-center wrapper">
				<h3>谁更适合使用这套系统?</h3>

				<p class="text-muted">这套系统能非常简单的帮助您在几分钟内建设一个令人惊讶的网站，而这并不需要您会任何技术，只需要会简单的操作电脑！</p>
			</div>
			<div class="row m-t-xl m-b-xl text-center">
				<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
					<p class="h3 m-b-lg">
						<i class="fa fa-desktop fa-3x text-info"></i>
					</p>

					<div class="">
						<h4 class="m-t-none">各行业公司/组织</h4>

						<p class="text-muted m-t-lg">
							企业、品牌、媒体资讯、政府机构、工厂、金融、保险、楼盘、汽车4S店、婚庆、摄影、酒店、医疗保健、旅游景区、地方生活、教育培训机构、家装建材、公益组织、小区物业、超市商场、个体工商户</p>
					</div>
				</div>
				<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
					<p class="h3 m-b-lg">
						<i class="fa fa-code fa-3x text-info"></i>
					</p>

					<div class="">
						<h4 class="m-t-none">开发者/建站服务公司</h4>

						<p class="text-muted m-t-lg">
							系统可以作为对某一个网站的管理（应用型），也可以管理非常多的网站（平台型）。源代码开放，因此开发者或建站公司可以在此套系统基础上扩展更多功能，以更加贴近实现业务需求。有效降低客户网站维护成本！</p>
					</div>
				</div>
				<div class="col-sm-4" data-ride="animated" data-animation="fadeInLeft" data-delay="900">
					<p class="h3 m-b-lg">
						<i class="fa fa-group fa-3x text-info"></i>
					</p>

					<div class="">
						<h4 class="m-t-none">个人站长/热爱互联网人员</h4>

						<p class="text-muted m-t-lg">
							系统提供了众多行业网站模板主题与强大功能模块，个人站长可以方便快速的搭建各种类型网站和微信公众服务。并可以免费使用互动营销（游戏比赛、活动抽奖）、微社区、智能客服等功能。</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="responsive" class="bg-dark">
		<div class="text-center">
			<div class="container">
				<div class="m-t-xl m-b-xl wrapper">
					<h3 class="text-white">有什么功能？</h3>

					<p>拒绝大而空，抛弃不切实际的功能。回归出发点，为用户带来实际作用。您真正需要的才是我们要做的！</div>
				<div class="row m-t-xl m-b-xl">
					<div class="col-sm-3 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
						<p class="text-center h1 m-b-lg">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x text-dark"></i>
								<i class="fa fa-comments-o fa-stack-1x text-muted"></i>
							</span>
						</p>

						<p>微网站</p>
					</div>
					<div class="col-sm-3 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
						<p class="text-center h1 m-b-lg">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x text-dark"></i>
								<i class="fa fa-laptop fa-stack-1x text-muted"></i>
							</span>
						</p>

						<p>PC网站</p>
					</div>
					<div class="col-sm-3 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
						<p class="text-center h1 m-b-lg">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x text-dark"></i>
								<i class="fa fa-comments fa-stack-1x text-muted"></i>
							</span>
						</p>

						<p>微信内容管理</p>
					</div>
					<div class="col-sm-3 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
						<p class="text-center h1 m-b-lg">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x text-dark"></i>
								<i class="fa fa-picture-o fa-stack-1x text-muted"></i>
							</span>
						</p>

						<p>模板主题</p>
					</div>
					<div class="col-sm-3 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
						<p class="text-center h1 m-b-lg">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x text-dark"></i>
								<i class="fa fa-puzzle-piece fa-stack-1x text-muted"></i>
							</span>
						</p>

						<p>功能插件</p>
					</div>
					<div class="col-sm-3 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="300">
						<p class="text-center h1 m-b-lg">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x text-dark"></i>
								<i class="fa fa-user fa-stack-1x text-muted"></i>
							</span>
						</p>

						<p>智能客服</p>
					</div>
					<div class="col-sm-3 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
						<p class="text-center h1 m-b-lg">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x text-dark"></i>
								<i class="fa fa-trophy fa-stack-1x text-muted"></i>
							</span>
						</p>

						<p>互动营销</p>
					</div>
					<div class="col-sm-3 wrapper-xl" data-ride="animated" data-animation="fadeInLeft" data-delay="600">
						<p class="text-center h1 m-b-lg">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x text-dark"></i>
								<i class="fa fa-users fa-stack-1x text-muted"></i>
							</span>
						</p>

						<p>微社区</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="newsletter" class="bg-white clearfix wrapper-lg">
		<div class="container text-center m-t-xl m-b-xl" data-ride="animated" data-animation="fadeIn">
			<h2>订阅最新动态</h2>

			<p>获取第一手简站（Simple-Site）消息？马上填写邮箱订阅！</p>

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

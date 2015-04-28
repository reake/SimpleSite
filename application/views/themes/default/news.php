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
	<div class="container m-t-lg m-b-lg">
		<div class="row">
			<div class="col-sm-9">
				<div class="blog-post">
					<?php foreach($contents as $v){ ?>
					<div class="post-item">
						<div class="caption wrapper-lg">
							<h2 class="post-title">
								<a href="#"><?= $v['title'] ?></a>
							</h2>
							<div class="post-sum">
								<p>
									<?= $v['content'] ?>
								</p>
							</div>
							<div class="line line-lg"></div>
							<div class="text-muted">
								<i class="fa fa-user icon-muted"></i>
								<a href="#" class="m-r-sm"><?= $v['origin'] ?></a>
								<i class="fa fa-clock-o icon-muted"></i> <?= $v['created'] ?>
								<a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> 4 comments</a>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="text-center m-t-lg m-b-lg">
					<ul class="pagination pagination-md">
						<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<h5 class="font-semibold">栏目分类</h5>

				<div class="line line-dashed"></div>
				<ul class="list-unstyled">
					<li><a href="#" class="dk"> <span class="badge pull-right">15</span> 新闻公告 </a></li>
					<li class="line"></li>
					<li><a href="#"> <span class="badge pull-right">30</span> 行业动态 </a></li>
					<li class="line"></li>
					<li><a href="#"> <span class="badge pull-right">9</span> 升级通知 </a></li>
					<li class="line"></li>
				</ul>
				<div class="tags m-b-lg">
					<a href="#" class="label bg-success">Bootstrap</a>
					<a href="#" class="label bg-success">Application</a>
					<a href="#" class="label bg-success">Apple</a>
					<a href="#" class="label bg-success">Less</a>
					<a href="#" class="label bg-success">Theme</a>
					<a href="#" class="label bg-success">Wordpress</a>
				</div>
				<h5 class="font-semibold">最热文章</h5>

				<div class="line line-dashed"></div>
				<div>
					<article class="media">
						<a class="pull-left thumb thumb-wrapper m-t-xs">
							<img src="images/thumb_1.png">
						</a>

						<div class="media-body"><a href="#" class="font-semibold">Bootstrap 3: What you need to know</a>

							<div class="text-xs block m-t-xs"><a href="#">Travel</a> 2 minutes ago</div>
						</div>
					</article>
					<div class="line"></div>
					<article class="media m-t-none">
						<a class="pull-left thumb thumb-wrapper m-t-xs">
							<img src="images/thumb_2.png">
						</a>
						<div class="media-body">
							<a href="#" class="font-semibold">Lorem ipsum dolor sit amet,
								consectetur adipiscing elit.</a>
							<div class="text-xs block m-t-xs"><a href="#">Design</a> 2 hours ago</div>
						</div>
					</article>
					<div class="line"></div>
					<article class="media m-t-none">
						<a class="pull-left thumb thumb-wrapper m-t-xs">
							<img src="images/thumb_3.png">
						</a>

						<div class="media-body">
							<a href="#" class="font-semibold">Sed diam nonummy nibh euismodtincidunt ut laoreet</a>

							<div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
						</div>
					</article>
				</div>
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
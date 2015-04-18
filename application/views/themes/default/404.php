<!DOCTYPE html>
<html lang="en" class="app">
<head>
	<meta charset="utf-8"/>
	<title><?php p($siteTitle); ?></title>
	<meta name="description" content="<?php p($keywords);?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="<?php echo p($siteUrl); ?>/_assets/css/font.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo p($siteUrl); ?>/_assets/css/landing.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo p($siteUrl); ?>/_assets/css/app.v1.css" type="text/css"/>
	<!--[if lt IE 9]>
	<script src="<?php echo p($siteUrl); ?>/_assets/js/ie/html5shiv.js"></script>
	<script src="<?php echo p($siteUrl); ?>/_assets/js/ie/respond.min.js"></script>
	<script src="<?php echo p($siteUrl); ?>/_assets/js/ie/excanvas.js"></script>
	<![endif]-->
</head>
<body class="">
<section id="content">
    <div class="row m-n">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="text-center m-b-lg">
				<h1 class="h text-white animated fadeInDownBig">404</h1>
			</div>
            <div class="list-group m-b-sm bg-white m-b-lg">
				<a href="index.html" class="list-group-item">
					<i class="fa fa-chevron-right icon-muted"></i>
					<i class="fa fa-fw fa-home icon-muted"></i> 首页 </a>
				<a href="#" class="list-group-item">
					<i class="fa fa-chevron-right icon-muted"></i>
					<i class="fa fa-fw fa-question icon-muted"></i> 告诉我们 </a>
				<a href="#" class="list-group-item">
                <i class="fa fa-chevron-right icon-muted"></i>
					<span class="badge">021-215-584</span>
					<i class="fa fa-fw fa-phone icon-muted"></i> 联系我们
				</a>
			</div>
        </div>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
			<small><?php p($copyright); ?></small>
        </p>
    </div>
</footer>
<!-- / footer --> <!-- Bootstrap -->
<!-- App -->
<script src="<?php p($siteUrl); ?>/_assets/js/app.plugin.js"></script>
<script src="<?php p($siteUrl); ?>/_assets/js/main.js"></script>
</body>
</html>
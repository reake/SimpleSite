<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
	<title><?php p($title); ?></title>
	<meta name="description" content="<?php p($keywords);?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="<?php echo p($url); ?>/_assets/css/font.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo p($url); ?>/_assets/css/landing.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo p($url); ?>/_assets/css/app.v1.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="<?php echo p($url); ?>/_assets/js/ie/html5shiv.js"></script>
    <script src="<?php echo p($url); ?>/_assets/js/ie/respond.min.js"></script>
    <script src="<?php echo p($url); ?>/_assets/js/ie/excanvas.js"></script>
	<![endif]-->
</head>
<body class="">
<!-- header -->
<?php p($header); ?>
<!-- / header -->
<?php p($content); ?>
<!-- footer -->
<?php p($footer); ?>
<!-- / footer -->
<!-- Bootstrap --> <!-- App -->
<script src="<?php echo p($url); ?>/_assets/js/app.v1.js"></script>
<script src="<?php echo p($url); ?>/_assets/js/appear/jquery.appear.js"></script>
<script src="<?php echo p($url); ?>/_assets/js/scroll/smoothscroll.js"></script>
<script src="<?php echo p($url); ?>/_assets/js/landing.js"></script>
<script src="<?php echo p($url); ?>/_assets/js/app.plugin.js"></script>
</body>
</html>
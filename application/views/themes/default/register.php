<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8"/>
	<title><?php p($siteTitle); ?></title>
	<meta name="description" content="<?php p($keywords);?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="<?php echo p($siteUrl); ?>/_assets/css/font.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo p($siteUrl); ?>/_assets/css/app.v1.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="<?php echo p($siteUrl); ?>/_assets/js/ie/html5shiv.js"></script>
    <script src="<?php echo p($siteUrl); ?>/_assets/js/ie/respond.min.js"></script>
    <script src="<?php echo p($siteUrl); ?>/_assets/js/ie/excanvas.js"></script> <![endif]--></head>
<body class="">
<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xxl"><a class="navbar-brand block" href="<?php p($siteUrl); ?>">简站(Simple-Site)</a>
        <section class="panel panel-default m-t-lg bg-white">
            <header class="panel-heading text-center"><strong>注册账号</strong></header>
            <form action="index.html" class="panel-body wrapper-lg">
                <div class="form-group"><label class="control-label">姓名</label> <input type="text"
                                                                                         placeholder="eg. Your name or company"
                                                                                         class="form-control input-lg">
                </div>
                <div class="form-group"><label class="control-label">手机</label> <input type="email"
                                                                                          placeholder="test@example.com"
                                                                                          class="form-control input-lg">
                </div>
                <div class="form-group"><label class="control-label">密码</label> <input type="password"
                                                                                             id="inputPassword"
                                                                                             placeholder="Type a password"
                                                                                             class="form-control input-lg">
                </div>
                <div class="checkbox"><label> <input type="checkbox"> 同意 <a href="#">《简站(Simple-Site) 用户使用协议》</a>
                </label></div>
                <button type="submit" class="btn btn-primary">注册账号</button>
                <div class="line line-dashed"></div>
                <p class="text-muted text-center">
                    <small>已经有账号了?</small>
                </p>
                <a href="<?php echo $loginUrl;?>" class="btn btn-default btn-block">立即登陆</a></form>
        </section>
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
<!-- / footer --> <!-- Bootstrap --> <!-- App -->
<script src="<?php echo p($siteUrl); ?>/_assets/js/app.v1.js"></script>
<script src="<?php echo p($siteUrl); ?>/_assets/js/app.plugin.js"></script>
</body>
</html>
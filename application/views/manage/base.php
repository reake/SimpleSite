<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <?php p($meta); ?>
</head>
<body class="">
<section class="vbox">
    <?php p($header); ?>
    <section>
        <section class="hbox stretch">
			<!-- .aside -->
            <?php p($sidebar); ?>
            <!-- /.aside -->
            <section id="content">
                <section class="vbox">
                    <section class="scrollable padder">
                        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                            <li><a href="<?php p($siteUrl); ?>/_assets/index.html"><i class="fa fa-home"></i> 简站(Simple-Site) </a></li>
                            <li class="active">预览中心</li>
                        </ul>
                        <div class="m-b-md"><h3 class="m-b-none">预览中心</h3>
                            <small>欢迎回来，有问题问题请通过左下角按钮反馈给我们！</small>
                        </div>
                        <?php p($body); ?>
                    </section>
                </section>
                <a href="<?php p($siteUrl); ?>/_assets/#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open"
                   data-target="#nav,html"></a></section>
            <aside class="bg-light lter b-l aside-md hide" id="notes">
                <div class="wrapper">Notification</div>
            </aside>
        </section>
    </section>
</section>
<div class="modal in" id="lockModal" aria-hidden="false">
	<div class="modal-over">
		<div class="modal-center animated fadeInUp text-center" style="width:200px;margin:-80px 0 0 -100px;">
			<div class="thumb-md"><img src="<?php p($siteUrl); ?>/_assets/images/avatar.jpg" class="img-circle b-a b-light b-3x"></div>
			<p class="text-white h4 m-t m-b">吴止介</p>

			<div class="input-group">
				<input type="password" class="form-control text-sm" placeholder="输入登陆密码解锁">
				<span class="input-group-btn">
					<button class="btn btn-success" type="button" data-dismiss="modal">
						<i class="fa fa-arrow-right"></i>
					</button>
				</span>
			</div>
		</div>
	</div>
</div>
<!-- Bootstrap --> <!-- App -->
<script src="<?php p($siteUrl); ?>/_assets/js/app.plugin.js"></script>
<script src="<?php p($siteUrl); ?>/_assets/js/main.js"></script>
</body>
</html>
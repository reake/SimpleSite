<!DOCTYPE html>
<html lang="en" class="app">
<head>
	<?php p($meta); ?>
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
					<i class="fa fa-fw fa-home icon-muted"></i> Gotohomepage </a>
				<a href="#" class="list-group-item">
					<i class="fa fa-chevron-right icon-muted"></i>
					<i class="fa fa-fw fa-question icon-muted"></i> Send us a tip </a>
				<a href="#" class="list-group-item">
                <i class="fa fa-chevron-right icon-muted"></i>
					<span class="badge">021-215-584</span>
					<i class="fa fa-fw fa-phone icon-muted"></i> Call us
				</a>
			</div>
        </div>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
            <small>Mobile first web app framework base on Bootstrap<br>&copy; 2013</small>
        </p>
    </div>
</footer>
<!-- / footer --> <!-- Bootstrap -->
<!-- App -->
<script src="<?php p($siteUrl); ?>/_assets/js/app.plugin.js"></script>
<script src="<?php p($siteUrl); ?>/_assets/js/main.js"></script>
</body>
</html>
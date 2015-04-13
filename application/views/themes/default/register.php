<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
	<meta charset="utf-8"/>
	<title><?php p($siteTitle); ?></title>
	<meta name="description" content="<?php p($keywords); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="stylesheet" href="<?php echo p($siteUrl); ?>/_assets/css/font.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo p($siteUrl); ?>/_assets/css/app.v1.css" type="text/css"/>
	<!--[if lt IE 9]>
	<script src="<?php echo p($siteUrl); ?>/_assets/js/ie/html5shiv.js"></script>
	<script src="<?php echo p($siteUrl); ?>/_assets/js/ie/respond.min.js"></script>
	<script src="<?php echo p($siteUrl); ?>/_assets/js/ie/excanvas.js"></script> <![endif]--></head>
<body>
<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
	<div class="container aside-xxl">
		<a class="navbar-brand block" href="<?php p($siteUrl); ?>">简站(Simple-Site)</a>
		<section class="panel panel-default m-t-lg bg-white">
			<header class="panel-heading text-center"><strong>注册账号</strong></header>
			<form action="#" id="register" class="panel-body wrapper-lg">
				<div class="input-group m-b">
					<span class="input-group-addon">姓名</span>
					<input type="text" name="username" placeholder="请输入您的真实姓名" required="required" class="form-control">
				</div>
				<div class="input-group m-b">
					<input type="number" name="mobile" placeholder="请输入您的手机号码" required="required" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-default sendCode" type="button">发送验证码</button>
					</span>
				</div>
				<div class="input-group m-b">
					<span class="input-group-addon">验证码</span>
					<input type="number" name="code" required="required" placeholder="请输入手机收到的验证码" class="form-control">
				</div>
				<div class="input-group m-b">
					<span class="input-group-addon">密码</span>
					<input type="password" name="password" required="required" placeholder="请设置您的登录密码"
						   class="form-control">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="isAgree" required="required"> 同意 <a href="#">《简站(Simple-Site)
							用户使用协议》</a>
					</label>
				</div>
				<button type="submit" class="btn btn-primary register">注册账号</button>
				<div class="line line-dashed"></div>
				<p class="text-muted text-center">
					<small>已经有账号了?</small>
				</p>
				<a href="<?php echo $loginUrl; ?>" class="btn btn-default btn-block">立即登陆</a>
			</form>
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
<script>
	(function () {
		/**
		 * Register - Send SMS
		 * @type {number}
		 */
		var i = 5;
		var intervalId = null;
		var sendButton = $("button.sendCode");
		var mobileInput = $("input[name=mobile]");
		var sendText = '发送验证码';
		var sendingText = '发送中...';
		var retryText = '没收到？重发';
		var countDownText = '重试倒计时';
		window.countDown = function countDown() {
			if (i == 0) {
				clearInterval(intervalId);
				console.log(1);
				sendButton.text(retryText);
				sendButton.attr('disabled', false);
				mobileInput.attr('readonly', false);
				i = 5;
			} else {
				mobileInput.attr('readonly', true);
				sendButton.attr('disabled', true);
				sendButton.text(countDownText + i);
				i--;
			}
		};
		sendButton.on('click', function () {
			var mobile = mobileInput.val();
			if (mobile == '') {
				alert('请填写手机号码');
			} else {
				mobileInput.attr('readonly', true);
				sendButton.attr('disabled', true);
				sendButton.text(sendingText);
				$.post('/sms', {chunnel: 'register', mobile: mobile}, function (result) {
					if (result.status == 1001) {
						intervalId = setInterval("window.countDown()", 1000);
					} else {
						alert(result.result);
						sendButton.text(sendText);
						sendButton.attr('disabled', false);
						mobileInput.attr('readonly', false);
					}
				}, 'JSON');
			}
		});

		/**
		 * Register
		 */
		var registerButton = $("button.register");
		registerButton.on('click', function () {
			registerButton.text('注册中...');
			$.post('/register', $("form#register").serialize(), function (result) {
				if (result.status == 1001) {
					registerButton.text('注册账号');
					alert('恭喜你，注册成功！');
					window.location.href = result.result;
				} else {
					alert(result.result);
				}
			}, 'JSON');
			return false;
		});
	})();
</script>
</body>
</html>
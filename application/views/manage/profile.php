<header class="header bg-white b-b b-light"><p>信息管理</p></header>
<section class="scrollable">
	<section class="hbox stretch">
		<aside class="aside-lg bg-light lter b-r">
			<section class="vbox">
				<section class="scrollable">
					<div class="wrapper">
						<div class="clearfix m-b">
							<div class="clear">
								<div class="h3 m-t-xs m-b-xs"><?php p($user['username']); ?></div>
								<small class="text-muted"><i class="fa fa-map-marker"></i> <?php p($currentLogin);?> </small>
							</div>
						</div>
						<div class="panel wrapper panel-success">
							<div class="row">
								<div class="col-xs-4">
									<a href="#">
										<span class="m-b-xs h4 block">v5</span>
										<small class="text-muted">等级</small>
									</a>
								</div>
								<div class="col-xs-4">
									<a href="#">
										<span class="m-b-xs h4 block">245</span>
										<small class="text-muted">积分</small>
									</a>
								</div>
								<div class="col-xs-4">
									<a href="#">
										<span class="m-b-xs h4 block">245</span>
										<small class="text-muted">天数</small>
									</a>
								</div>
							</div>
						</div>
						<div class="btn-group btn-group-justified m-b">
							<a class="btn btn-primary btn-rounded" data-toggle="button">
								<span class="text"> <i class="fa fa-eye"></i> 分享赚积分 </span>
								<span class="text-active"> <i class="fa fa-eye-slash"></i> Following </span>
							</a>
							<a class="btn btn-dark btn-rounded" data-loading-text="Connecting">
								<i class="fa fa-comment-o"></i> 意见赚积分 </a>
						</div>
						<div>
							<div class="line"></div>
							<small class="text-uc text-xs text-muted">绑定社交账号</small>
							<p class="m-t-sm">
								<a href="#" class="btn btn-rounded btn-twitter btn-icon">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#" class="btn btn-rounded btn-facebook btn-icon">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="#" class="btn btn-rounded btn-gplus btn-icon">
									<i class="fa fa-google-plus"></i>
								</a>
							</p>
						</div>
					</div>
				</section>
			</section>
		</aside>
		<aside class="bg-white">
			<section class="vbox">
				<header class="header bg-light bg-gradient">
					<ul class="nav nav-tabs nav-white">
						<li class="active"><a href="#activity" data-toggle="tab">修改密码</a></li>
					</ul>
				</header>
				<section class="scrollable">
					<div class="tab-content">
						<div class="tab-pane active" id="activity">
							<div class="panel-body">
								<form role="form">
									<div class="form-group">
										<label>用户名</label>
										<input type="text" class="form-control" value="<?php p($user['username']);?>">
									</div>
									<div class="form-group">
										<label>当前密码</label>
										<input type="password" class="form-control" placeholder="填写当前账号密码">
									</div>
									<div class="form-group">
										<label>修改为</label>
										<input type="password" class="form-control" placeholder="填写修改后的密码">
									</div>
									<button type="submit" class="btn btn-sm btn-default">保存修改</button>
								</form>
							</div>
						</div>
					</div>
				</section>
			</section>
		</aside>
		<aside class="col-lg-4 b-l">
			<section class="vbox">
				<section class="scrollable">
					<div class="wrapper">
						<section class="panel panel-default"><h4 class="font-thin padder">登陆历史</h4>
							<ul class="list-group">
								<?php foreach($loginHistory as $history){ ?>
									<li class="list-group-item">
										<strong class="block"><?php p($history['ip']); ?></strong>
										<p> <?php p($history['userAgent']);?> </p>
										<small class="block text-muted"><i class="fa fa-clock-o"></i> <?php p($history['created']);?></small>
									</li>
								<?php } ?>
							</ul>
						</section>
					</div>
				</section>
			</section>
		</aside>
	</section>
</section>
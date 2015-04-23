<aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav">
	<section class="vbox">
		<header class="header bg-primary lter text-center clearfix">
			<div class="btn-group">
				<a href="<?php p($sites[$siteId]['url']); ?>" target="_blank" class="btn btn-sm btn-dark btn-icon" title="预览网站"><i
						class="fa fa-eye"></i></a>
				<div class="btn-group hidden-nav-xs">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle"
							data-toggle="dropdown"> <?php p($sites[$siteId]['name']); ?> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu text-left">
						<?php foreach ($sites as $site) { ?>
							<li>
								<a onclick="changeSite(<?php p($site['id']); ?>);"><?php p($site['name']); ?></a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</header>
		<section class="w-f scrollable">
			<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px"
				 data-color="#333333"> <!-- nav -->
				<nav class="nav-primary hidden-xs">
					<ul class="nav">
						<?php foreach($category as $v){ ?>
						<li <?php if(in_array($route,$v['route'])){ ?>class="active"<?php } ?>>
							<a href="<?php if(isset($v['url'])) p($v['url']); ?>" <?php if(in_array($route,$v['route'])){ ?>class="active"<?php } ?>>
								<i class="fa fa-<?php p($v['icon']);?> icon">
									<b class="bg-primary"></b>
								</i>
								<span class="pull-right">
									<i class="fa fa-angle-down text"></i>
									<i class="fa fa-angle-up text-active"></i>
								</span>
								<span><?php p($v['name']);?></span>
							</a>
							<?php if(isset($v['subCategory'])){ ?>
							<ul class="nav lt">
								<?php foreach($v['subCategory'] as $c){ ?>
								<li <?php if($controller.'::'.$action == $c['route']){ ?> class="active" <?php } ?>>
									<a href="<?php p($c['url']); ?>">
										<i class="fa fa-angle-right"></i>
										<span><?php p($c['name']); ?></span>
									</a>
								</li>
								<?php } ?>
							</ul>
							<?php } ?>
						</li>
						<?php } ?>
					</ul>
				</nav>
				<!-- / nav -->
			</div>
		</section>
		<footer class="footer lt hidden-xs b-t b-dark">
			<div id="feedback" class="dropup">
				<section class="dropdown-menu on aside-md m-l-n">
					<section class="panel bg-white">
						<header class="panel-heading b-b b-light">意见反馈</header>
						<div class="panel-body animated fadeInRight">
							<textarea name="feedback" class="form-control" rows="5"></textarea>

							<p>
								<a href="<?php p($siteUrl); ?>/_assets/#" class="btn btn-sm btn-default">提交</a>
							</p>
						</div>
					</section>
				</section>
			</div>
			<div id="invite" class="dropup">
				<section class="dropdown-menu on aside-md m-l-n">
					<section class="panel bg-white">
						<header class="panel-heading b-b b-light"> 帮助推广</header>
						<div class="panel-body animated fadeInRight">
							<p class="text-sm">如果您觉得系统好用，请推广给您周边的人！</p>

							<p>
								<a href="<?php p($siteUrl); ?>/_assets/#" class="btn btn-sm btn-facebook">
									<i class="fa fa-fw fa-share"></i> 分享给朋友
								</a>
							</p>
						</div>
					</section>
				</section>
			</div>
			<div id="about" class="dropup">
				<section class="dropdown-menu on aside-md m-l-n">
					<section class="panel bg-white">
						<header class="panel-heading b-b b-light"> 关于简站(Simple-Site)</header>
						<div class="panel-body animated fadeInRight">
							<p class="text-sm">
								当前版本: v0.1.0.0(2015-04-12)<br>
								开发团队: Feei Team<br>
								联系我们: ad@simple-site.cn<br>
							</p>
						</div>
					</section>
				</section>
			</div>
			<a href="<?php p($siteUrl); ?>/_assets/#nav" data-toggle="class:nav-xs"
			   class="pull-right btn btn-sm btn-dark btn-icon"> <i
					class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>

			<div class="btn-group hidden-nav-xs">
				<button type="button" title="反馈" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown"
						data-target="#feedback">
					<i class="fa fa-comment-o"></i>
				</button>
				<button type="button" title="分享" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown"
						data-target="#invite">
					<i class="fa fa-share-square-o"></i>
				</button>
				<button type="button" title="关于" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown"
						data-target="#about">
					<i class="fa fa-info"></i>
				</button>
			</div>
		</footer>
	</section>
</aside>
<aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav">
	<section class="vbox">
		<header class="header bg-primary lter text-center clearfix">
			<div class="btn-group">
				<button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i
						class="fa fa-dot-circle-o"></i></button>
				<div class="btn-group hidden-nav-xs">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> <?php echo $currentSiteName;?> <span class="caret"></span></button>
					<ul class="dropdown-menu text-left">
						<?php foreach($sites as $site){ ?>
						<li><a href="<?php echo $site['url']; ?>"><?php echo $site['name']; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</header>
		<section class="w-f scrollable">
			<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333"> <!-- nav -->
				<nav class="nav-primary hidden-xs">
					<ul class="nav">
						<li class="active">
							<a href="<?php p($siteUrl); ?>/manage/dashboard/index" class="active">
								<i class="fa fa-dashboard icon">
									<b class="bg-danger"></b>
								</i>
								<span>预览中心</span>
							</a>
						</li>
						<li>
							<a href="<?php p($siteUrl); ?>/_assets/#pages">
								<i class="fa fa-file-text icon">
									<b class="bg-primary"></b>
								</i>
								<span class="pull-right">
									<i class="fa fa-angle-down text"></i>
									<i class="fa fa-angle-up text-active"></i>
								</span>
								<span>内容管理</span>
							</a>
							<ul class="nav lt">
								<li>
									<a href="<?php p($siteUrl); ?>/_assets/gallery.html">
										<i class="fa fa-angle-right"></i>
										<span>文章管理</span>
									</a>
								</li>
								<li>
									<a href="<?php p($siteUrl); ?>/_assets/gallery.html">
										<i class="fa fa-angle-right"></i>
										<span>报名管理</span>
									</a>
								</li>
								<li>
									<a href="<?php p($siteUrl); ?>/_assets/gallery.html">
										<i class="fa fa-angle-right"></i>
										<span>订单管理</span>
									</a>
								</li>
								<li>
									<a href="<?php p($siteUrl); ?>/_assets/gallery.html">
										<i class="fa fa-angle-right"></i>
										<span>广告管理</span>
									</a>
								</li>
								<li>
									<a href="<?php p($siteUrl); ?>/_assets/gallery.html">
										<i class="fa fa-angle-right"></i>
										<span>友情链接</span>
									</a>
								</li>
								<li>
									<a href="<?php p($siteUrl); ?>/_assets/gallery.html">
										<i class="fa fa-angle-right"></i>
										<span>文件管理</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php p($siteUrl); ?>/_assets/#pages">
								<i class="fa fa-envelope-o icon">
									<b class="bg-primary"></b>
								</i>
								<span class="pull-right">
									<i class="fa fa-angle-down text"></i>
									<i class="fa fa-angle-up text-active"></i>
								</span>
								<span>营销管理</span>
							</a>
							<ul class="nav lt">
								<li>
									<a href="<?php p($siteUrl); ?>/_assets/gallery.html">
										<i class="fa fa-angle-right"></i>
										<span>消息管理</span>
									</a>
								</li>
								<li>
									<a href="<?php p($siteUrl); ?>/_assets/gallery.html">
										<i class="fa fa-angle-right"></i>
										<span>评论留言</span>
									</a>
								</li>
								<li>
									<a href="<?php p($siteUrl); ?>/_assets/gallery.html">
										<i class="fa fa-angle-right"></i>
										<span>用户反馈</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php p($siteUrl); ?>/_assets/#pages">
								<i class="fa fa-cog icon">
									<b class="bg-primary"></b>
								</i>
								<span class="pull-right">
									<i class="fa fa-angle-down text"></i>
									<i class="fa fa-angle-up text-active"></i>
								</span>
								<span>系统设置</span>
							</a>
							<ul class="nav lt">
								<li>
									<a href="<?php p($siteUrl); ?>/manage/sites/index">
										<i class="fa fa-angle-right"></i>
										<span>网站管理</span>
									</a>
								</li>
								<li>
									<a href="<?php p($siteUrl); ?>/manage/profile/index">
										<i class="fa fa-angle-right"></i>
										<span>个人设置</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- / nav --> </div>
		</section>
		<footer class="footer lt hidden-xs b-t b-dark">
			<div id="feedback" class="dropup">
				<section class="dropdown-menu on aside-md m-l-n">
					<section class="panel bg-white">
						<header class="panel-heading b-b b-light">意见反馈</header>
						<div class="panel-body animated fadeInRight">
							<textarea name="feedback" class="form-control" rows="10"></textarea>
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
						<header class="panel-heading b-b b-light"> 帮助推广 </header>
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
						<header class="panel-heading b-b b-light"> 关于简站(Simple-Site) </header>
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
			<a href="<?php p($siteUrl); ?>/_assets/#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i
					class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a>

			<div class="btn-group hidden-nav-xs">
				<button type="button" title="反馈" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#feedback">
					<i class="fa fa-comment-o"></i>
				</button>
				<button type="button" title="分享" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite">
					<i class="fa fa-share-square-o"></i>
				</button>
				<button type="button" title="关于" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#about">
					<i class="fa fa-info"></i>
				</button>
			</div>
		</footer>
	</section>
</aside>
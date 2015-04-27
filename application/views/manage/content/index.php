<section class="hbox stretch"> <!-- .aside -->
	<aside class="aside aside-md bg-white">
		<section class="vbox">
			<header class="dk header">
				<a href="/manage/category/index" class="btn btn-icon btn-default btn-sm pull-right"><i
						class="fa fa-cog"></i></a>
				<button class="btn btn-icon btn-default btn-sm pull-right visible-xs m-r-xs" data-toggle="class:show"
						data-target="#mail-nav"><i class="fa fa-cog"></i></button>
				<p class="h4">栏目导航</p></header>
			<section>
				<section>
					<section id="mail-nav" class="hidden-xs">
						<div class="col-sm-12">
							<div class="dd" id="category">
								<ol class="dd-list">
									<?php foreach ($category as $v) { ?>
										<li class="dd-item dd3-item" data-id="<?php p($v->id); ?>">
											<div class="dd-handle dd3-handle">Drag</div>
											<div class="dd3-content"><?php p($v->name); ?></div>
										</li>
									<?php } ?>
									<li class="dd-item dd3-item" data-id="15">
										<div class="dd-handle dd3-handle">Drag</div>
										<div class="dd3-content">Item 15</div>
										<ol class="dd-list">
											<li class="dd-item dd3-item" data-id="16">
												<div class="dd-handle dd3-handle">Drag</div>
												<div class="dd3-content">Item 16</div>
											</li>
											<li class="dd-item dd3-item" data-id="17">
												<div class="dd-handle dd3-handle">Drag</div>
												<div class="dd3-content">Item 17</div>
											</li>
											<li class="dd-item dd3-item" data-id="18">
												<div class="dd-handle dd3-handle">Drag</div>
												<div class="dd3-content">Item 18</div>
											</li>
										</ol>
									</li>
								</ol>
							</div>
						</div>
					</section>
				</section>
			</section>
		</section>
	</aside>
	<!-- /.aside --> <!-- .aside -->
	<aside class="bg-light lter b-l" id="main-list">
		<section class="vbox">
			<header class="bg-light dk header clearfix">
				<div class="btn-group pull-right">
					<button type="button" class="btn btn-sm btn-default"><i class="fa fa-chevron-left"></i></button>
					<button type="button" class="btn btn-sm btn-default"><i class="fa fa-chevron-right"></i></button>
				</div>
				<div class="btn-toolbar">
					<div class="btn-group select">
						<button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span
								class="dropdown-label" style="width: 65px;">Filter</span> <span class="caret"></span>
						</button>
						<ul class="dropdown-menu text-left text-sm">
							<li><a href="#">Read</a></li>
							<li><a href="#">Unread</a></li>
							<li><a href="#">Starred</a></li>
							<li><a href="#">Unstarred</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="bottom"
								data-title="Refresh" data-original-title="" title=""><i class="fa fa-refresh"></i>
						</button>
					</div>
				</div>
			</header>
			<section class="scrollable hover">
				<ul class="contents list-group no-radius m-b-none m-t-n-xxs list-group-alt list-group-lg">
					<li class="list-group-item">
						<a href="#" class="thumb-xs pull-left m-r-sm">
							<img src="images/avatar_default.jpg" class="img-circle">
						</a>
						<a href="#" class="clear">
							<small class="pull-right text-muted">3 minuts ago</small>
							<strong>Drew Wllon</strong>
							<span class="label label-sm bg-primary text-uc">work</span>
							<span>Wellcome and play this web application template ... </span>
						</a>
					</li>
					<li class="list-group-item animated fadeInRightBig" href="#main-content, #main-list"
						data-toggle="class:show,hide"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">1 hour ago</small>
							<strong>Jonathan George</strong> <span>Morbi nec nunc condimentum...<span
									class="text-danger">click me</span></span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">2 hours ago</small>
							<strong>Josh Long</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">1 day ago</small>
							<strong>Jack Dorsty</strong> <span>Morbi nec nunc condimentum...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">3 days ago</small>
							<strong>Morgen Kntooh</strong> <span>Mobile first web app for startup...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">Jun 21</small>
							<strong>Yoha Omish</strong> <span class="label label-sm bg-danger text-uc">private</span>
							<span>Morbi nec nunc condimentum...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">May 10</small>
							<strong>Gole Lido</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">Jan 2</small>
							<strong>Jonthan Snow</strong> <span class="label label-sm bg-success text-uc">clients</span>
							<span>Morbi nec nunc condimentum...</span> </a></li>
					<li class="list-group-item" href="#main-content" data-toggle="class:show"><a href="#"
																								 class="thumb-xs pull-left m-r-sm">
							<img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">3 minuts ago</small>
							<strong>Drew Wllon</strong> <span class="label label-sm bg-primary text-uc">work</span>
							<span>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</span>
						</a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">1 hour ago</small>
							<strong>Jonathan George</strong> <span>Morbi nec nunc condimentum...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">2 hours ago</small>
							<strong>Josh Long</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">1 day ago</small>
							<strong>Jack Dorsty</strong> <span>Morbi nec nunc condimentum...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">3 days ago</small>
							<strong>Morgen Kntooh</strong> <span>Mobile first web app for startup...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">Jun 21</small>
							<strong>Yoha Omish</strong> <span class="label label-sm bg-danger text-uc">private</span>
							<span>Morbi nec nunc condimentum...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">May 10</small>
							<strong>Gole Lido</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">Jan 2</small>
							<strong>Jonthan Snow</strong> <span class="label label-sm bg-success text-uc">clients</span>
							<span>Morbi nec nunc condimentum...</span> </a></li>
					<li class="list-group-item" href="#main-content" data-toggle="class:show"><a href="#"
																								 class="thumb-xs pull-left m-r-sm">
							<img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">3 minuts ago</small>
							<strong>Drew Wllon</strong> <span class="label label-sm bg-primary text-uc">work</span>
							<span>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</span>
						</a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">1 hour ago</small>
							<strong>Jonathan George</strong> <span>Morbi nec nunc condimentum...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">2 hours ago</small>
							<strong>Josh Long</strong> <span>Vestibulum ullamcorper sodales nisi nec...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">1 day ago</small>
							<strong>Jack Dorsty</strong> <span>Morbi nec nunc condimentum...</span> </a></li>
					<li class="list-group-item"><a href="#" class="thumb-xs pull-left m-r-sm"> <img
								src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear">
							<small class="pull-right text-muted">3 days ago</small>
							<strong>Morgen Kntooh</strong> <span>Mobile first web app for startup...</span> </a></li>
				</ul>
			</section>
			<footer class="footer b-t bg-white-only">
				<form class="m-t-sm">
					<div class="input-group">
						<input type="text" class="input-sm form-control input-s-sm"
							   placeholder="搜索内容...">

						<div class="input-group-btn">
							<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
			</footer>
		</section>
	</aside>
	<!-- /.aside --> <!-- .aside -->
	<aside class="bg-white hide b-l" id="main-content">
		<section class="vbox">
			<section class="scrollable">
				<div class="wrapper b-b b-light">
					<a href="#" data-toggle="class" class="pull-left m-r-sm">
						<i class="fa fa-eye fa-1x text"></i>
						<i class="fa fa-eye-slash fa-1x text-active"></i>
					</a>

					<div class="btn-group pull-right">
						<button class="btn btn-info btn-xs saveContent" data-id="">保存</button>
						<button class="btn btn-danger btn-xs dropdown-toggle" data-toggle="dropdown">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">隐藏</a></li>
							<li class="divider"></li>
							<li><a class="delContent" data-id="">删除</a></li>
						</ul>
					</div>
					<h4 class="m-n">
						<input type="text" name="title" class="input-sm" style="border:1px solid #E1E1E1;width:50%;"/>
					</h4>
				</div>
				<div class="row">
					<div class="col-sm-4" style="border-right:1px solid #E1E1E1;min-height:238px;">
						<div class="panel-body">
							<div class="clearfix text-center m-t">
								<div class="inline">
									<div class="easypiechart easyPieChart" data-percent="75" data-line-width="5"
										 data-bar-color="#4cc0c1" data-track-color="#f5f5f5" data-scale-color="false"
										 data-size="130" data-line-cap="butt" data-animate="1000"
										 style="width: 130px; height: 130px; line-height: 130px;">
										<div class="thumb-lg"><img src="images/avatar.jpg" class="img-circle"></div>
										<canvas width="130" height="130"></canvas>
									</div>
									<div class="h4 m-t m-b-xs">文章主图</div>
									<small class="text-muted m-b">点击图片更换</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4" style="border-right:1px solid #E1E1E1;min-height:238px;">
						<div class="panel-body">
							<form role="form">
								<div class="form-group">
									<label>关键词</label>

									<div id="MyPillbox" class="pillbox clearfix">
										<ul><input type="text" name="keywords" placeholder="添加关键词"></ul>
									</div>
								</div>
								<div class="form-group">
									<label>来源</label>
									<input type="text" name="origin" class="input-sm input-s form-control">
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel-body">
							<form role="form">
								<div class="form-group">
									<label>所属栏目</label>
									<select name="cid" class="form-control m-b">
									</select>
								</div>
								<div class="form-group">
									<label>更新时间</label>
									<input name="created" class="input-sm input-s datepicker-input form-control"
										   size="16" type="text" value="2015-04-30" data-date-format="yyyy-mm-dd">
								</div>
								<div class="form-group">
									<label>创建时间</label>
									<input name="updated" class="input-sm input-s datepicker-input form-control"
										   size="16" type="text" value="2015-04-30" data-date-format="yyyy-mm-dd">
								</div>
							</form>
						</div>
					</div>
					<div class="text-sm col-sm-12">
						<textarea id="editor" name="content"></textarea>
					</div>
				</div>
			</section>
		</section>
	</aside>
	<!-- /.aside -->
</section>
<link rel="stylesheet" href="<?php p($siteUrl); ?>/_assets/js/fuelux/fuelux.css" type="text/css"/>
<script src="<?php p($siteUrl); ?>/_assets/js/fuelux/fuelux.js"></script>
<!-- datepicker -->
<script src="<?php p($siteUrl); ?>/_assets/js/datepicker/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="<?php p($siteUrl); ?>/_assets/js/nestable/nestable.css" type="text/css"/>
<script src="<?php p($siteUrl); ?>/_assets/js/sortable/jquery.sortable.js"></script>
<script src="<?php p($siteUrl); ?>/_assets/js/nestable/jquery.nestable.js"></script>
<script src="<?php p($siteUrl); ?>/_assets/js/ckeditor/ckeditor.js"></script>

<script>

	function getDetail(id) {
		$.post('/manage/content/index', {action: 'getDetail', id: id}, function (result) {
			if (result.status == 1001) {
				var saveContentButton = $("button.saveContent");
				var content = result.result.data;
				saveContentButton.attr('data-id', content.id);
				$("input[name=title]").val(content.title);
				$("input[name=keywords]").val(content.keywords);
				$("input[name=origin]").val(content.origin);
				$("input[name=description]").val(content.description);
				$("input[name=created]").val(content.created);
				$("input[name=updated]").val(content.updated);
				var category = '';
				for(var i =0;i < content.category.length;i++){
					category += '<option value="' + content.category[i].id + '">' + content.category[i].name + '</option>';
				}
				$("select[name=cid]").html(category);
				$("#editor").html(content.content);
				$("#main-list").removeClass('show').addClass('hide');
				$("#main-content").removeClass('hide').addClass('show');
				saveContentButton.on('click', function () {
					var data = {
						'action': 'updateDetail',
						'id': saveContentButton.attr('data-id'),
						'cid': $("select[name=cid]").val(),
						'title': $("input[name=title]").val(),
						'origin': $("input[name=origin]").val(),
						'keywords': $("input[name=keywords]").val(),
						'description': $("input[name=description]").val(),
						'content': $("#editor").html(),
						'created': $("input[name=created]").val(),
						'updated': $("input[name=updated]").val()
					};
					$.post('/manage/content/index', data, function (result) {
						if (result.status == 1001) {
							alert(result.result.msg);
							window.location.href = '/manage/content/index';
						} else {
							alert(result.result.msg);
						}
					}, 'JSON');
				});
			} else {
				alert(result.result.msg);
			}
		}, 'JSON');
	}
	$(function () {
		CKEDITOR.replace('editor', {
			height: 300,
			skin: 'office2013',
			language: 'zh-cn',
			toolbar: 'Full',
			toolbar_Full: [
				{name: 'document', items: ['Templates', 'DocProps', 'Preview', 'Print']},
				{name: 'clipboard', items: ['PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
				{name: 'links', items: ['Link', 'Unlink', 'Anchor']},
				{name: 'editing', items: ['Find', 'Replace']},
				{
					name: 'insert',
					items: ['Image', 'Flash', 'Table', 'HorizontalRule', 'SpecialChar', 'PageBreak', 'Iframe']
				},
				{name: 'tools', items: ['ShowBlocks', 'Source', 'Maximize']},
				'/',
				{name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
				{name: 'colors', items: ['TextColor', 'BGColor']},
				{name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat']},
				{
					name: 'paragraph',
					items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv',
						'-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl']
				}
			],
			uiColor: '#FAFAFA'
		});

		var $expand = false;
		$('#nestable-menu').on('click', function (e) {
			if ($expand) {
				$expand = false;
				$('.dd').nestable('expandAll');
			} else {
				$expand = true;
				$('.dd').nestable('collapseAll');
			}
		});
		$('#category').nestable();

		$(".dd-list > .dd-item").on('click', function () {
			$(".dd3-content").removeClass('active');
			$(this).children('.dd3-content').addClass("active");
			$.post('/manage/content/index', {action: 'getList', cid: $(this).attr('data-id')}, function (result) {
				if (result.status == 1001) {
					var contents = '';
					content = result.result.data;
					for (var i = 0; i < content.length; i++) {
						contents += '<li class="list-group-item" onclick="getDetail(' + content[i].id + ')">' +
						'<a href="#" class="thumb-xs pull-left m-r-sm">' +
						'<img src="" class="img-circle">' +
						'</a>' +
						'<a href="#" class="clear">' +
						'<small class="pull-right text-muted">' + content[i].created + '</small>' +
						'<strong>' + content[i].title + '</strong>' +
						'<p>' + content[i].description + '</p>' +
						'</a>' +
						'</li>';
					}
					$(".contents").html(contents);
				} else {
					alert(result.result.msg);
				}
			}, 'JSON');
		});

	})
</script>
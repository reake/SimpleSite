<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="<?php p($siteUrl); ?>/_assets/index.html"><i class="fa fa-home"></i> 简站(Simple-Site) </a></li>
		<li class="active">修改网站</li>
	</ul>
	<div class="m-b-md"><h3 class="m-b-none">修改网站</h3>
		<small>修改网站配置与信息！</small>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<section class="panel panel-default">
				<header class="panel-heading font-bold">基础信息</header>
				<div class="panel-body">
					<form id="editSite" class="form-horizontal">
						<input type="hidden" name="siteId" value="<?php p($siteId); ?>"/>

						<div class="form-group">
							<label class="col-lg-3 control-label">是否上线</label>

							<div class="col-lg-9">
								<label class="switch">
									<input type="checkbox"
										   name="status" <?php if ($siteInfo['status'] == 1) p('checked'); ?>>
									<span></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">网站名称</label>

							<div class="col-lg-9">
								<input type="text" name="name" class="form-control col-lg-8"
									   value="<?php p($siteInfo['name']); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">网站域名</label>

							<div class="col-lg-9">
								<div class="input-group m-b">
									<span class="input-group-addon">http://</span>
									<input type="text" name="url" class="form-control"
										   value="<?php p($siteInfo['url']); ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">测试域名</label>

							<div class="col-lg-9">
								<div class="input-group m-b">
									<input type="text" name="domain" class="form-control"
										   value="<?php p($siteInfo['domain']); ?>">
									<span class="input-group-addon">.simple-site.cn</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">网站标题</label>

							<div class="col-lg-9">
								<input type="text" name="title" class="form-control col-lg-8"
									   value="<?php p($siteInfo['title']); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">搜索关键词</label>

							<div class="col-lg-9">
								<input type="text" name="keywords" class="form-control col-lg-8"
									   value="<?php p($siteInfo['keywords']); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">网站描述</label>

							<div class="col-lg-9">
								<textarea name="description" class="form-control" cols="30"
										  rows="4"><?php p($siteInfo['description']); ?></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-sm btn-default">保存修改</button>
					</form>
				</div>
			</section>
		</div>
		<div class="col-sm-6">
			<section class="panel panel-default">
				<header class="panel-heading font-bold">网站主题</header>
				<div class="panel-body">
					<form id="editSite" class="form-horizontal">
						<input type="hidden" name="siteId" value="<?php p($siteId); ?>"/>

						<div class="form-group">
							<label class="col-lg-3 control-label">网站LOGO</label>

							<div class="col-lg-9">
								<img src="<?php p($siteInfo['logo']); ?>" height="100" id="logo"/>
								<input type="button" id="uploadAvatar" value="上传LOGO">
							</div>
						</div>
					</form>
				</div>
			</section>
		</div>
		<div class="col-sm-12">
			<section class="panel panel-default">
				<header class="panel-heading font-bold">网站模块</header>
				<div class="panel-body">
				</div>
			</section>
		</div>
	</div>
</section>
<script src="/_assets/js/ajaxupload.js"></script>
<script>
	$(function () {
		new AjaxUpload('#uploadAvatar', {
			action: '/manage/site/upload',
			name: 'image',
			autoSubmit: true,
			responseType: 'json',
			onChange: function (file, extension) {
			},
			onSubmit: function (file, extension) {
				//alert('submiting');
			},
			onComplete: function (file, data) {
				if (data.status == 1001) {
					$('#logo').attr('src', data.result.data);
				} else {
					alert(data.result.msg);
				}
			}
		});

		$("form#editSite").submit(function (e) {
			e.preventDefault();
			$.post('/manage/site/edit', $(this).serialize(), function (result) {
				if (result.status == 1001) {
					alert(result.result.msg);
					window.location.reload();
				} else {
					alert(result.result.msg);
				}
			}, 'JSON')
		})
	})
</script>
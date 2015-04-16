<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default wizard" id="create">
			<div class="wizard-steps clearfix" id="form-wizard">
				<ul class="steps">
					<li data-target="#step1" class="active"><span class="badge badge-info">1</span>选择模板</li>
					<li data-target="#step2"><span class="badge">2</span>填写信息</li>
					<li data-target="#step3"><span class="badge">3</span>创建成功</li>
				</ul>
			</div>
			<div class="step-content clearfix">
				<div class="step-pane active" id="step1">
					<form id="modules">
					<?php foreach ($modules as $v) { ?>
						<div class="col-lg-3">
							<section class="panel panel-default">
								<div class="panel-body">
									<div class="clearfix text-center m-t">
										<div class="inline">
											<div class="h4 m-t m-b-xs"><?php echo $v['name']; ?></div>
											<small class="text-muted m-b"><?php echo $v['icon']; ?></small>
										</div>
									</div>
								</div>
								<footer class="panel-footer bg-info text-center">
									<div class="row pull-out">
										<div class="col-xs-4 dk">
											<div class="padder-v">
												<span
													class="m-b-xs h3 block text-white"><?php echo $v['price']; ?></span>
											</div>
										</div>
										<div class="col-xs-8">
											<div class="padder-v">
												<div class="btn-group">
													<input type="hidden" name="modules[]" value="0"/>
													<button type="button" class="btn btn-default needModule"><i
															class="fa fa-circle-o"></i> 需要
													</button>
												</div>
											</div>
										</div>
									</div>
								</footer>
							</section>
						</div>
					<?php } ?>
					<div class="clearfix"></div>
					</form>
				</div>

				<div class="step-pane" id="step2">
					<section class="panel panel-default">
						<header class="panel-heading font-bold"> 完善基本信息</header>
						<div class="panel-body">
							<form class="form-horizontal" id="info">
								<div class="line line-dashed line-lg pull-in"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label">网站名称</label>

									<div class="col-sm-10">
										<input type="text" name="name" class="form-control rounded">
									</div>
								</div>
								<div class="line line-dashed line-lg pull-in"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label">网站标题</label>

									<div class="col-sm-10">
										<input type="text" name="title" class="form-control rounded">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">一句话介绍公司</label>

									<div class="col-sm-10">
										<input type="text" name="description" class="form-control rounded"
											   placeholder="此段文字将被用作搜索引擎介绍">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">搜索引擎关键字</label>

									<div class="col-sm-10">
										<div id="MyPillbox" class="pillbox clearfix">
											<ul>
												<input type="text" name="keywords" placeHolder="输入关键字回车键添加">
											</ul>
										</div>
										<span class="help-block m-b-none">您想让哪些词能搜索到您的网站</span>
									</div>
								</div>
							</form>
						</div>
					</section>
				</div>
				<div class="step-pane" id="step3">
					<p>恭喜你，创建成功！</p>
				</div>
				<div class="actions pull-right">
					<button type="button" class="btn btn-default btn-sm btn-prev" disabled="disabled">
						上一步
					</button>
					<button type="button" class="btn btn-default btn-sm btn-next" data-last="创建成功">
						下一步
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="<?php p($siteUrl); ?>/_assets/js/fuelux/fuelux.css" type="text/css"/>
<script src="<?php p($siteUrl); ?>/_assets/js/fuelux/fuelux.js"></script>
<script>
	$(function(){

		var needModule = $("button.needModule");
		needModule.on('click', function () {
			$(this).children("i").attr('class', 'fa fa-check-circle-o');
			$(this).siblings("input").val(1);
		});

		$(document).on('change', '.wizard', function (e, data) {
			if(typeof data == 'undefined') return false;
			if(data.step == 2){
				$.post('/manage/create/step1',$("form#modules, form#info").serialize(),function(result){
					if(result.status == 1001){
						window.location.href = result.result.data;
					}else{
						alert(result.result.msg);
					}
				},'JSON')
			}
		});
	})

</script>
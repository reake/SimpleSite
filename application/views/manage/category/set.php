<section class="scrollable padder">
	<?php p($crumb); ?>
	<div class="row">
		<div class="col-sm-6">
			<section class="panel panel-default">
				<header class="panel-heading font-bold">栏目基本信息</header>
				<div class="panel-body">
					<form class="bs-example form-horizontal" id="category">
						<input type="hidden" name="action" value="<?php p($action); ?>"/>
						<input type="hidden" name="id" value="<?php p($id); ?>"/>

						<div class="form-group">
							<label class="col-lg-2 control-label">排序序号</label>

							<div class="col-lg-10">
								<input type="text" class="form-control" name="orders"
									   value="<?php p($cateInfo->orders); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">所属栏目</label>

							<div class="col-lg-10">
								<select name="pid" class="form-control m-b">
									<option value="0">顶级栏目</option>
									<?php foreach ($category as $k => $v) { ?>
										<option <?php if ($cateInfo->pid == $v['id']) p("selected"); ?>
											value="<?= $v['id'] ?>"><?= $v['name'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">栏目名称</label>

							<div class="col-lg-10">
								<input type="text" name="name" required="required" class="form-control" placeholder=""
									   value="<?php p($cateInfo->name); ?>">
							</div>
						</div>
						<div
							class="inputUrl form-group">
							<label class="col-lg-2 control-label">栏目链接</label>

							<div class="col-lg-10">
								<input type="text" name="url" class="form-control" placeholder=""
									   value="<?php p($cateInfo->url); ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">栏目描述</label>

							<div class="col-lg-10">
								<textarea name="description" required="required" class="form-control" cols="30"
										  rows="4"><?php p($cateInfo->description); ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">栏目类型</label>

							<div class="col-lg-10">
								<select name="types" class="form-control m-b">
									<?php foreach ($types as $k => $v) { ?>
										<option <?php if ($cateInfo->types == $k) p("selected"); ?>
											value="<?php p($k); ?>"><?php p($v); ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">是否启用</label>

							<div class="col-lg-10">
								<label class="switch"> <input type="checkbox"
															  name="status" <?php if ($cateInfo->status) p("checked"); ?>>
									<span></span> </label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-2 col-lg-10">
								<button type="submit" class="btn btn-sm btn-default">保存</button>
							</div>
						</div>
					</form>
				</div>
			</section>
		</div>
	</div>
</section>
<script>
	$(function () {
		$("form#category").submit(function (e) {
			e.preventDefault();
			$.post('/manage/category/set', $("form#category").serialize(), function (result) {
				if (result.status == 1001) {
					window.location.href = '/manage/category/index';
				} else {
					alert(result.result.msg);
				}
			}, 'JSON')
		})
	})
</script>

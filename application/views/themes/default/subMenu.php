<div class="bg-dark lt">
	<div class="container">
		<div class="m-b-lg m-t-lg">
			<h3 class="m-b-none"><?php p($currentCategory->name); ?></h3>
			<small class="text-muted"><?php p($currentCategory->description); ?></small>
		</div>
	</div>
</div>
<div class="bg-white b-b b-light">
	<div class="container">
		<ul class="breadcrumb no-border bg-empty m-b-none m-l-n-sm">
			<li><a href="/">简站</a></li>
			<li class="active"><?php p($currentCategory->name); ?></li>
		</ul>
	</div>
</div>
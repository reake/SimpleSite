<?php
return array(
	0 => array(
		'name'        => '预览中心',
		'description' => ' ',
		'icon'        => 'dashboard',
		'url'         => '',
		'subCategory' => array(
			0 => array('name' => '预览中心', 'description' => ' ', 'route' => 'Manage_Dashboard::index', 'url' => URL::site('/manage/dashboard/index')),
		)
	),
	1 => array(
		'name'        => '内容管理',
		'description' => ' ',
		'icon'        => 'file-text',
		'url'         => '',
		'subCategory' => array(
			0 => array(
				'name'        => '网站管理',
				'description' => ' ',
				'route'       => 'Manage_Content::index',
				'url'         => URL::site('/manage/content/index'),
				'subCategory' => array(
					0 => array(
						'name'        => '栏目列表',
						'description' => '管理网站栏目',
						'route'       => 'Manage_Category::index',
						'url'         => URL::site('/manage/category/index')
					),
					1 => array(
						'name'        => '设置栏目',
						'description' => '设置栏目信息',
						'route'       => 'Manage_Category::set',
						'url'         => URL::site('/manage/category/index')
					)
				)
			),
			1 => array('name' => '微信管理', 'description' => ' ', 'route' => 'index', 'url' => URL::site('/manage/wx/index')),
			2 => array('name' => '报名管理', 'description' => ' ', 'route' => 'index', 'url' => URL::site('/manage/su/index')),
			3 => array('name' => '订单管理', 'description' => ' ', 'route' => 'index', 'url' => URL::site('/manage/order/index')),
			4 => array('name' => '广告管理', 'description' => ' ', 'route' => 'index', 'url' => URL::site('/manage/ad/index')),
			5 => array('name' => '友情链接', 'description' => ' ', 'route' => 'index', 'url' => URL::site('/manage/fl/index')),
			6 => array('name' => '文件管理', 'description' => ' ', 'route' => 'index', 'url' => URL::site('/manage/file/index'))
		)
	),
	2 => array(
		'name'        => '营销管理',
		'description' => ' ',
		'icon'        => 'envelope-o',
		'url'         => '',
		'subCategory' => array(
			0 => array('name' => '消息管理', 'description' => ' ', 'route' => 'index', 'url' => URL::site('/manage/site/index')),
			1 => array('name' => '评论留言', 'description' => ' ', 'route' => 'index', 'url' => URL::site('/manage/site/index')),
			2 => array('name' => '用户反馈', 'description' => ' ', 'route' => 'index', 'url' => URL::site('/manage/site/index'))
		)
	),
	3 => array(
		'name'        => '系统设置',
		'description' => ' ',
		'icon'        => 'cog',
		'url'         => ' ',
		'subCategory' => array(
			0 => array(
				'name'        => '网站设置',
				'description' => '管理您所有的网站',
				'route'       => 'Manage_Site::index',
				'url'         => URL::site('/manage/site/index'),
				'subCategory' => array(
					0 => array(
						'name'        => '修改网站',
						'description' => '修改网站参数信息',
						'route'       => 'Manage_Site::edit',
						'url'         => URL::site('/manage/site/edit')
					)
				)
			),
			1 => array(
				'name'        => '个人设置',
				'description' => '',
				'route'       => 'Manage_Profile::index',
				'url'         => URL::site('/manage/profile/index')
			)
		)
	)
);
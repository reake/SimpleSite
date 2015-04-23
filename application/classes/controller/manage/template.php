<?php

/**
 * Base Template
 * Class Controller_Manage_Template
 */
class Controller_Manage_Template extends Controller_Template
{
	protected $data = array();
	protected $user = array();
	protected $siteId;
	private $category = array();
	private $route = '';

	public function before()
	{
		if (Auth_ORM::instance()->logged_in()) {
			# USER INFO
			$this->user = Auth_ORM::instance()->get_user()->as_array();

			# SITE ID
			$siteId       = Session::instance()->get('siteId');
			$this->siteId = (empty($siteId)) ? ORM::factory('Site')->getSiteId($this->user['id']) : $siteId;

			# IF HAVE NOT SITE
			$count = ORM::factory('site', array('uid' => $this->user['id']))->count_all();
			if (empty($count) && $this->request->action() != 'step1') {
				$this->redirect('/manage/create/step1');
			}

			# CATEGORY
			$category = array(
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

			foreach ($category as $k => $v) {
				if (isset($category[$k]['subCategory'])) {
					foreach ($category[$k]['subCategory'] as $k2 => $c) {
						$category[$k]['route'][]                        = $c['route'];
						$category[$k]['subCategory'][$k2]['subRoute'][] = $c['route'];
						if (isset($c['subCategory'])) {
							foreach ($c['subCategory'] as $k3 => $d) {
								$category[$k]['route'][]                        = $d['route'];
								$category[$k]['subCategory'][$k2]['subRoute'][] = $d['route'];
							}
						}
					}
				}
			}

			$this->category = $category;
			$this->route    = $this->request->controller() . '::' . $this->request->action();


			$data = array(
				'siteTitle'  => '简站(Simple-Site)',
				'keywords'   => '免费建站、微信网站、免费微信网站',
				'siteUrl'    => 'http://www.simple-site.cn',
				'copyright'  => 'Copyright © 2015 Simple-Site. All Rights Reserved',
				'user'       => $this->user,
				'route'      => $this->route,
				'controller' => $this->request->controller(),
				'action'     => $this->request->action(),
				'category'   => $this->category,
			);
			foreach ($data as $key => $value) View::bind_global($key, $data[$key]);
		} else {
			$this->redirect('/login');
		}
	}

	public function after()
	{
		$crumb = array();
		foreach ($this->category as $k => $v) {
			if (in_array($this->route, $v['route'])) {
				$crumb[] = array('name' => $v['name'], 'description' => $v['description'], 'url' => $v['url']);
				if (isset($v['subCategory'])) {
					foreach ($v['subCategory'] as $k2 => $c) {
						if (in_array($this->route, $c['subRoute'])) {
							$crumb[] = array('name' => $c['name'], 'description' => $c['description'], 'url' => $c['url']);
							if (isset($c['subCategory'])) {
								foreach ($c['subCategory'] as $k3 => $d) {
									if ($this->route == $d['route']) {
										$crumb[] = array('name' => $d['name'], 'description' => $d['description'], 'url' => $d['url']);
									}
								}
							}
						}
					}
				}
			}
		}
		$this->data['crumb'] = View::factory('manage/crumb', array('crumbs' => $crumb));
		$view                = View::factory('manage/base');
		$sites               = ORM::factory('Site')->getAll($this->user['id']);
		$view->sidebar       = View::factory('manage/sidebar', array('sites' => $sites, 'siteId' => $this->siteId));
		$view->header        = View::factory('manage/header', array('user' => $this->user));
		$view->meta          = View::factory('manage/meta');
		$view->body          = View::factory('manage/' . $this->template, $this->data);
		$this->response->body($view);
	}
}
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
					'name' => '预览中心',
					'icon' => 'dashboard',
					'url' => URL::site('/manage/dashboard/index'),
					'subCategory' => array(
						0 => array('name' => '预览中心','route' => 'Manage_Dashboard::index', 'url' => URL::site('/manage/dashboard/index')),
					)
				),
				1 => array(
					'name' => '内容管理',
					'icon' => 'file-text',
					'subCategory' => array(
						0 => array('name' => '网站管理','route' => 'Manage_Content::index', 'url' => URL::site('/manage/content/index')),
						1 => array('name' => '微信管理','route' => 'index', 'url' => URL::site('/manage/wx/index')),
						2 => array('name' => '报名管理','route' => 'index', 'url' => URL::site('/manage/su/index')),
						3 => array('name' => '订单管理','route' => 'index', 'url' => URL::site('/manage/order/index')),
						4 => array('name' => '广告管理','route' => 'index', 'url' => URL::site('/manage/ad/index')),
						5 => array('name' => '友情链接','route' => 'index', 'url' => URL::site('/manage/fl/index')),
						6 => array('name' => '文件管理','route' => 'index', 'url' => URL::site('/manage/file/index'))
					)
				),
				2 => array(
					'name' => '营销管理',
					'icon' => 'envelope-o',
					'subCategory' => array(
						0 => array('name' => '消息管理','route' => 'index', 'url' => URL::site('/manage/site/index')),
						1 => array('name' => '评论留言','route' => 'index', 'url' => URL::site('/manage/site/index')),
						2 => array('name' => '用户反馈','route' => 'index', 'url' => URL::site('/manage/site/index'))
					)
				),
				3 => array(
					'name' => '系统设置',
					'icon' => 'cog',
					'subCategory' => array(
						0 => array('name' => '网站设置','route' => 'index', 'url' => URL::site('/manage/site/index')),
						1 => array('name' => '个人设置','route' => 'index', 'url' => URL::site('/manage/profile/index'))
					)
				)
			);

			foreach($category as $k => $v){
				if(isset($category[$k]['subCategory'])){
					foreach($category[$k]['subCategory'] as $k2 => $c){
						$category[$k]['route'][$k2] = $c['route'];
					}
				}
			}

			$data = array(
				'siteTitle'  => '简站(Simple-Site)',
				'keywords'   => '免费建站、微信网站、免费微信网站',
				'siteUrl'    => 'http://www.simple-site.cn',
				'copyright'  => 'Copyright © 2015 Simple-Site. All Rights Reserved',
				'user'       => $this->user,
				'route' => $this->request->controller().'::'.$this->request->action(),
				'controller' => $this->request->controller(),
				'action'     => $this->request->action(),
				'category' => $category
			);
			foreach ($data as $key => $value) View::bind_global($key, $data[$key]);
		} else {
			$this->redirect('/login');
		}
	}

	public function after()
	{
		$view          = View::factory('manage/base');
		$sites         = ORM::factory('Site')->getAll($this->user['id']);
		$view->sidebar = View::factory('manage/sidebar', array('sites' => $sites, 'siteId' => $this->siteId));
		$view->header  = View::factory('manage/header', array('user' => $this->user));
		$view->meta    = View::factory('manage/meta');
		$view->body    = View::factory('manage/' . $this->template, $this->data);
		$this->response->body($view);
	}
}
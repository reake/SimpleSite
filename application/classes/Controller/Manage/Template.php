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
			$category = Kohana::$config->load('category');

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
<?php

/**
 * Base Template
 * Class Controller_Manage_Template
 */
class Controller_Manage_Template extends Controller_Template
{
	protected $data = array();
	protected $user = array();

	public function before()
	{
		if (Auth_ORM::instance()->logged_in()) {
			$this->user = Auth_ORM::instance()->get_user()->as_array();
			$count      = ORM::factory('site', array('uid' => $this->user['id']))->count_all();
			if (empty($count) && $this->request->action() != 'step1') {
				$this->redirect('/manage/create/step1');
			}
		} else {
			$this->redirect('/login');
		}
		$data = array(
			'siteTitle' => '简站(Simple-Site)',
			'keywords'  => '免费建站、微信网站、免费微信网站',
			'siteUrl'   => 'http://www.simple-site.cn',
			'copyright' => 'Copyright © 2015 Simple-Site. All Rights Reserved',
			'user' => $this->user,
		);
		foreach ($data as $key => $value) View::bind_global($key, $data[$key]);
	}

	public function after()
	{
		$view = View::factory('manage/base');

		$sites         = ORM::factory('Site')->getAll($this->user['id']);
		$view->sidebar = View::factory('manage/sidebar', array('sites' => $sites, 'currentSiteName' => $sites[0]['name']));
		$view->header  = View::factory('manage/header', array('user' => $this->user));
		$view->meta    = View::factory('manage/meta');
		$view->body    = View::factory('manage/' . $this->template, $this->data);
		$this->response->body($view);
	}
}
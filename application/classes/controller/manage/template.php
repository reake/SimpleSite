<?php

/**
 * Base Template
 * Class Controller_Manage_Template
 */
class Controller_Manage_Template extends Controller
{
	protected $template = 'dashboard';
	protected $data = array();
	protected $user = array();

	public function before()
	{
		if (Auth_ORM::instance()->logged_in()) {
			$this->user = Auth_ORM::instance()->get_user()->as_array();
		} else {
			$this->redirect('/login');
		}
		$data = array(
			'siteTitle' => '简站(Simple-Site)',
			'keywords'  => '免费建站、微信网站、免费微信网站',
			'siteUrl'   => 'http://www.simple-site.cn',
			'copyright' => 'Copyright © 2015 Simple-Site. All Rights Reserved',
		);
		foreach ($data as $key => $value) View::bind_global($key, $data[$key]);
	}

	public function after()
	{
		$view          = View::factory('manage/base');
		$view->sidebar = View::factory('manage/sidebar');
		$view->header  = View::factory('manage/header');
		$view->meta    = View::factory('manage/meta');
		$view->body    = View::factory('manage/' . $this->template);
		if (!empty($this->data)) foreach ($this->data as $key => $value) $view->set($key, $value);
		$this->response->body($view);
	}
}
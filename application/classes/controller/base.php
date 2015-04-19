<?php

class Controller_Base extends Controller_Template
{
	protected $data = array();
	protected $theme;

	public function before()
	{
		$hostArr = explode('.', $_SERVER['HTTP_HOST']);
		if ($hostArr[0] == 'www') {
			$this->theme = 'themes/default/';
			$site        = array(
				'id'          => 1,
				'title'       => '简站(Simple-Site.cn) - 简单简站！',
				'keywords'    => '简单简站',
				'description' => '描述',
				'url'         => 'http://www.simple-site.cn',
				'author'      => '简站(Simple-Site.cn) - 免费建站、微信网站、免费微信网站!',
				'copyright'   => 'Copyright &copy; 2015 SimpleSite. All Rights Reserved'
			);
		} else {
			$site           = ORM::factory('Site')->where('domain', '=', $hostArr[0])->find()->as_array();
			$site['logo']   = '/media/image/data/' . $site['logo'];
			$site['author'] = '简站(Simple-Site.cn) - 免费建站、微信网站、免费微信网站!';
			$this->theme    = "themes/{$site['theme']}/";
		}
		$site['friendLinks'] = ORM::factory('FriendLink')->getAll($site['id']);
		$this->template      = View::factory($this->theme . 'base');
		foreach ($site as $key => $value) View::bind_global($key, $site[$key]);
	}

	public function after()
	{
		$view          = View::factory($this->theme . 'base');
		$view->content = View::factory($this->theme . $this->template, array('subMenu' => View::factory($this->theme . 'subMenu')));
		$view->header  = View::factory($this->theme . 'header');
		$view->footer  = View::factory($this->theme . 'footer');
		if (!empty($this->data)) foreach ($this->data as $key => $value) $view->set($key, $value);
		$this->response->body($view);
	}
}
<?php

class Controller_Base extends Controller_Template
{
	protected $data = array();
	protected $theme;
	protected $category;
	protected $siteId;

	public function before()
	{
		if ($this->auto_render) {
			$this->category = ORM::factory('Category')->getAll(1);
			$hostArr        = explode('.', $_SERVER['HTTP_HOST']);
			$preDomain      = $hostArr[0];
			$site           = ORM::factory('Site')->where('domain', '=', $preDomain)->find();
			if ($site->loaded()) {
				$this->siteId        = $site->id;
				$site                = $site->as_array();
				$site['logo']        = '/media/image/data/' . $site['logo'];
				$site['category']    = $this->category;
				$site['author']      = '简站(Simple-Site.cn) - 免费建站、微信网站、免费微信网站!';
				$site['copyright']   = 'Copyright &copy; 2015 SimpleSite. All Rights Reserved';
				$site['friendLinks'] = ORM::factory('FriendLink')->getAll($site['id']);


				$this->theme = "themes/{$site['theme']}/";
				$this->template      = View::factory($this->theme . 'base');
				foreach ($site as $key => $value) View::bind_global($key, $site[$key]);

			} else {
				echo '404';
				exit();
			}
		}
	}

	public function after()
	{
		if ($this->auto_render) {
			$view          = View::factory($this->theme . 'base');
			$subData       = array(
				'category'        => $this->category,
				'currentCategory' => ORM::factory('Category')->where('url', '=', $this->request->uri())->find()
			);
			$view->content = View::factory($this->theme . $this->template, array('subMenu' => View::factory($this->theme . 'subMenu', $subData)));
			$view->header  = View::factory($this->theme . 'header');
			$view->footer  = View::factory($this->theme . 'footer');
			if (!empty($this->data)) foreach ($this->data as $key => $value) $view->set($key, $value);
			$this->response->body($view);
		}
	}
}
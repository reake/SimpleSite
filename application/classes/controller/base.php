<?php
class Controller_Base extends Controller_Template{
//	protected $template = NULL;
	protected $data = array();

	public function before()
	{
		$this->template = View::factory('themes/default/base');
		$data           = array(
			'siteTitle'    => '简站(Simple-Site)',
			'keywords' => '免费建站、微信网站、免费微信网站',
			'siteUrl' => 'http://www.simple-site.cn',
			'copyright' => 'Copyright © 2015 Simple-Site. All Rights Reserved',
		);
		foreach($data as $key => $value) View::bind_global($key, $data[$key]);
	}

	public function after()
	{
		$view = View::factory('themes/default/' . $this->template);
		if(!empty($this->data)) foreach ($this->data as $key => $value) $view->set($key, $value);
		$this->response->body($view);
	}
}
<?php

class Task_Ad extends Minion_Task
{
	protected $_options = array(
		'foo' => 'bar',
		'bar' => NULL,
	);

	/**
	 * This is a demo task
	 *
	 * @return null
	 */
	protected function _execute(array $params)
	{
		# TEXT
		Email::factory('Hello, World', 'This is my body, it is nice.')
			->to('wufeifei@wufeifei.com')
			->from('ad@simple-site.cn', '简站AD(Simple-Site)')
			->send();

		# HTML
		Email::factory('Hello, World', 'This is my body, it is nice.')
			->to('wufeifei@wufeifei.com')
			->from('ad@simple-site.cn', '简站AD(Simple-Site)')
			->message('<h1>This is <em>my</em> body, it is <strong>nice</strong>.</h1>', 'text/html')
			->send();
	}
}
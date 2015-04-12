<?php

class Controller_Home extends Controller_Base
{
	public function action_index()
	{
		$this->template = 'base';
		$this->data = array(
			'loginUrl' => '/login'
		);
	}

	public function action_register()
	{
		$this->template = 'register';
		$this->data     = array(
			'loginUrl' => '/login'
		);
	}

	public function action_login()
	{
		$this->template = 'login';
		$this->data     = array(
			'registerUrl' => '/register'
		);
	}

	public function action_logout()
	{
		$this->template = 'logout';
	}
}
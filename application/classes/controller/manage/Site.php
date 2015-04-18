<?php

class Controller_Manage_Site extends Controller_Manage_Template
{
	public function action_index()
	{
		$this->template = 'site';
		$this->data = array(
			'sites' => ORM::factory('Site')->getAll($this->user['id'])
		);
	}
}
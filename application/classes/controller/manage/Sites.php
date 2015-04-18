<?php

class Controller_Manage_Sites extends Controller_Manage_Template
{
	public function action_index()
	{
		$this->template = 'sites';
		$this->data = array(
			'sites' => ORM::factory('Site')->getAll($this->user['id'])
		);
	}
}
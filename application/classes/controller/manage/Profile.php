<?php

class Controller_Manage_Profile extends Controller_Manage_Template
{
	public function action_index()
	{
		$this->template = 'profile';
		$array = array(
			'loginHistory' => ORM::factory('User_LoginHistory')->getAll($this->user['id'])
		);
		$this->data = $array;
	}
}
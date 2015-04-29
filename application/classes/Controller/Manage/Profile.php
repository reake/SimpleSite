<?php

class Controller_Manage_Profile extends Controller_Manage_Template
{
	public function action_index()
	{
		$this->template = 'profile';
		$loginHistory   = ORM::factory('User_LoginHistory')->getAll($this->user['id']);
		$ipAddress      = getAddressByIP(clientIP());
		$currentLogin   = $ipAddress['country'] . $ipAddress['area'] . $ipAddress['region'] . $ipAddress['city'] . $ipAddress['county'] . $ipAddress['isp'];
		$array          = array(
			'loginHistory' => $loginHistory,
			'currentLogin' => $currentLogin
		);
		$this->data = $array;
	}
}
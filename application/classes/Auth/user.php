<?php

class Auth_User extends Auth
{

	protected static $_instance = NULL;

	public static function instance()
	{
		if (self::$_instance === NULL) self::$_instance = new self();
		return self::$_instance;
	}

	protected function _login($mobile, $password, $remember)
	{
		$user = ORM::factory('user');
		$info = $user->where('mobile', '=', $mobile)->where('password', '=', $password)->find();
		if ($info->loaded()) {
			$this->complete_login($user);
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function password($mobile)
	{
		$user = ORM::factory('user');
		$info = $user->where('mobile', '=', $mobile)->find()->as_array();
		if (!empty($info['password'])) {
			return $info['password'];
		} else {
			return FALSE;
		}
	}

	public function check_password($password)
	{
		$user = $this->get_user();
		return ($password === $user->password);
	}
}
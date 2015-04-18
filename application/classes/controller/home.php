<?php

class Controller_Home extends Controller_Base
{
	public function action_index()
	{
		$this->template = 'base';
		$this->data     = array(
			'loginUrl' => '/login'
		);
	}

	public function action_register()
	{
		if ($this->request->is_ajax()) {
			$post = $this->request->post();
			$ret  = Tool_SMS::instance()->verifyEventSMSCode($post['mobile'], $post['code'], 'register');
			if ($ret === TRUE) {
				$user           = ORM::factory('user');
				$user->username = $post['username'];
				$user->mobile   = $post['mobile'];
				$user->password = $post['password'];
				$user->created  = time();
				$user->updated  = time();
				try {
					$user->save();
					Tool_Utility::jsonReturn(1001, '/login');
				} catch (ORM_Validation_Exception $e) {
					foreach ($e->errors('models') as $v) {
						Tool_Utility::jsonReturn(4444, $v);
					}
				}
			} else {
				Tool_Utility::jsonReturn($ret);
			}
		}
		$this->template = 'register';
		$this->data     = array(
			'loginUrl' => '/login'
		);
	}

	public function action_login()
	{
		if ($this->request->is_ajax()) {
			$post    = $this->request->post();
			$success = Auth_ORM::instance()->login($post['username'], $post['password']);
			if ($success) {
				$loginHistory            = ORM::factory('User_LoginHistory');
				$loginHistory->uid       = $success;
				$loginHistory->ip        = clientIP();
				$loginHistory->userAgent = $_SERVER['HTTP_USER_AGENT'];
				$loginHistory->created   = time();
				$loginHistory->updated   = time();
				$loginHistory->save();
				Tool_Utility::jsonReturn(1001, '登陆成功', '/manage/dashboard/index');
			} else {
				Tool_Utility::jsonReturn(1800);
			}
		}
		$this->template = 'login';
		$this->data     = array(
			'registerUrl'     => '/register',
			'findPasswordUrl' => '/findPassword'
		);
	}

	public function action_logout()
	{
		Auth::instance()->logout();
		$this->redirect('/login');
	}

	public function action_findPassword()
	{
		$this->template = 'findPassword';
	}
}
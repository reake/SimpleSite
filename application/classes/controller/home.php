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
		if($this->request->is_ajax()){
			$user = ORM::factory('user');
			$user->username = $this->request->post('username');
			$user->mobile = $this->request->post('mobile');
//			$user->code = $this->request->param('code');
			$user->password = $this->request->post('password');
//			$user->isAgree = $this->request->param('isAgree');
			try{
				$user->save();
			}catch(ORM_Validation_Exception $e){
				print_r($e->errors('models'));
			}
//			Tool_Utility::jsonReturn(1001,'/login');
		}
		$this->template = 'register';
		$this->data     = array(
			'loginUrl' => '/login'
		);
	}

	public function action_login()
	{
		$this->template = 'login';
		$this->data     = array(
			'registerUrl' => '/register',
			'findPasswordUrl' => '/findPassword'
		);
	}

	public function action_logout()
	{
		$this->template = 'logout';
	}

	public function action_findPassword(){
		$this->template = 'findPassword';
	}
}
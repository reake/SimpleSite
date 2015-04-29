<?php

class Controller_Home extends Controller_Base
{
	public function action_index()
	{
		$uri = $this->request->uri();
		preg_match_all('#[^/.,;?\n]++#', $uri, $matches);
		$category = array();
		$data     = array();
		$view     = 'index';
		if ($uri != '/') {
			$modelCategory = ORM::factory('Category');
			$category      = $modelCategory->where('sid', '=', $this->siteId)->where('uri', '=', $uri)->find();
			if ($category->loaded()) {
				$view = $uri;
				$data = $modelCategory->getData($category);
			} else {
				$view = '404';
			}
		}
		$categoryInfo = array(
			'category'        => $this->category,
			'currentCategory' => $category
		);
		$data         = array_merge($data, $categoryInfo);
		$viewHtml     = View::factory($this->theme . $view, $data);
		$this->response->body($viewHtml);
	}

	public function action_register()
	{
		$this->auto_render = FALSE;
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
					jsonReturn(1001, '/login');
				} catch (ORM_Validation_Exception $e) {
					foreach ($e->errors('models') as $v) {
						jsonReturn(4444, $v);
					}
				}
			} else {
				jsonReturn($ret);
			}
		}
		$this->response->body(View::factory($this->theme . 'register', array('loginUrl' => '/login')));
	}

	public function action_login()
	{
		$this->auto_render = FALSE;
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
				jsonReturn(1001, '登陆成功', '/manage/dashboard/index');
			} else {
				jsonReturn(1800);
			}
		}
		$this->response->body(View::factory($this->theme . 'login', array('registerUrl' => '/register', 'findPasswordUrl' => '/findPassword')));
	}

	public function action_logout()
	{
		Auth::instance()->logout();
		$this->redirect('/login');
	}

	public function action_subscribe()
	{
		$email = $this->request->post('email');
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) jsonReturn(4444, '请输入正确的邮箱!');
		$find = ORM::factory('Subscribe')->where('sid', '=', $this->siteId)->where('email', '=', $email)->find();
		if ($find->loaded()) {
			jsonReturn(1001, '您已经订阅过！');
		} else {
			ORM::factory('Subscribe')
				->set('sid', $this->siteId)
				->set('email', $email)
				->set('status', 1)
				->set('created', time())
				->set('updated', time())
				->save();
			jsonReturn(1001, '订阅成功！');
		}

	}
}
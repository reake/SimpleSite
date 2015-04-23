<?php

class Controller_Manage_Common extends Controller_Manage_Template
{
	public function action_sms()
	{
		if ($this->request->is_ajax()) {
			$channel = $this->request->post('channel');
			$mobile  = $this->request->post('mobile');
			$ret     = Tool_SMS::instance()->sendEventSMS($mobile, $channel);
			if ($ret === TRUE) {
				Tool_Utility::jsonReturn(1001, '验证码发送成功');
			} else {
				Tool_Utility::jsonReturn($ret);
			}
		} else {
			$this->redirect('/404');
		}
	}

	public function action_404()
	{
		$this->template = '404';
	}

	public function action_lock()
	{
		$post = $this->request->post();
		if (isset($post['action']) && $post['action'] == 'unlock') {
			if (!empty($post['password'])) {
				if (Auth_ORM::instance()->check_password($post['password'])) {
					Tool_Utility::jsonReturn(1001);
				} else {
					Tool_Utility::jsonReturn(4444, '密码错误，请重试！');
				}
			} else {
				Tool_Utility::jsonReturn(4444, '参数错误');
			}
		} else {
			Session::instance()->set('lockScreen', TRUE);
			Tool_Utility::jsonReturn(1001);
		}
	}

	public function action_changeSite()
	{
		if ($this->request->is_ajax()) {
			$siteId       = intval($this->request->post('siteId'));
			$this->siteId = $siteId;
			Session::instance()->set('siteId', $siteId);
			Tool_Utility::jsonReturn(1001);
		} else {
			$this->request->detect_uri(404);
		}
	}
}
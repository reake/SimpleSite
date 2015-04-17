<?php

class Controller_Common extends Controller_Base
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
}
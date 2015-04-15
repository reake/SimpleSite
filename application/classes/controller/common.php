<?php

class Controller_Common extends Controller_Base
{
	public function action_sms()
	{
		$channel = $this->request->post('channel');
		$mobile  = $this->request->post('mobile');
		$ret     = Tool_SMS::instance()->sendEventSMS($mobile, $channel);
		if ($ret === TRUE) {
			Tool_Utility::jsonReturn(1001, '验证码发送成功');
		} else {
			Tool_Utility::jsonReturn($ret);
		}
	}
}
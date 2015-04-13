<?php
class Controller_Common extends Controller_Base{
	public function action_sms(){
		$channel = $this->request->param('channel');
		$mobile = $this->request->param('mobile');
		Tool_Utility::jsonReturn(1001,'验证码发送成功');
	}
}
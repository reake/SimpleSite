<?php

class Tool_Utility
{
	public static function jsonReturn($code, $msg = NULL, $data = NULL)
	{
		$msgArr = array(
			1900 => '请同意注册协议',
			2000 => '手机号已经被注册',
			2001 => '短信发送时间过短，请稍后重试',
			2002 => '短信验证码发送成功，请注意查收',
			2003 => '短信验证码发送失败，请重试',
			2004 => '短信验证码超时，请重新发送',
			2005 => '验证码填写错误，请检查',
			2006 => '调用远程短信接口发送失败',

			4001 => '系统错误，工程师正在紧急修复中(参数错误)',
			4444 => '未知错误，请重试',
		);
		if (isset($msgArr[$code]) && $msg === NULL) {
			$msg = $msgArr[$code];
		}
		$array = array(
			'status' => $code,
			'result' => array(
				'msg'  => $msg,
				'data' => $data
			)
		);
		echo json_encode($array);
		exit();
	}

	public static function getSiteId()
	{
		return 0;
	}
}
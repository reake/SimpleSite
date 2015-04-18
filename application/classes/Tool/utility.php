<?php

class Tool_Utility
{
	public static function jsonReturn($code, $msg = NULL, $data = NULL)
	{
		$msgArr = array(
			1800 => '账号或密码错误',
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

	public static function request($url, $params = array(), $method = 'GET', $multi = FALSE, $extheaders = array())
	{
		if (!function_exists('curl_init')) exit('Need to open the curl extension');
		$method = strtoupper($method);
		$ci = curl_init();
		curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 3);
		$timeout = $multi ? 30 : 3;
		curl_setopt($ci, CURLOPT_TIMEOUT, $timeout);
		curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ci, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ci, CURLOPT_HEADER, FALSE);
		$headers = (array)$extheaders;
		switch ($method) {
			case 'POST':
				curl_setopt($ci, CURLOPT_POST, TRUE);
				if (!empty($params)) {
					if ($multi) {
						foreach ($multi as $key => $file) {
							$params[$key] = '@' . $file;
						}
						curl_setopt($ci, CURLOPT_POSTFIELDS, $params);
						$headers[] = 'Expect: ';
					} else {
						curl_setopt($ci, CURLOPT_POSTFIELDS, http_build_query($params));
					}
				}
				break;
			case 'DELETE':
			case 'GET':
				$method == 'DELETE' && curl_setopt($ci, CURLOPT_CUSTOMREQUEST, 'DELETE');
				if (!empty($params)) {
					$url = $url . (strpos($url, '?') ? '&' : '?')
						. (is_array($params) ? http_build_query($params) : $params);
				}
				break;
		}
		curl_setopt($ci, CURLINFO_HEADER_OUT, TRUE);
		curl_setopt($ci, CURLOPT_URL, $url);
		if ($headers) {
			curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);
		}

		$response = curl_exec($ci);
		curl_close($ci);
		return $response;
	}

	public static function getAddressByIP($ip)
	{
		$api       = 'http://ip.taobao.com/service/getIpInfo.php?ip=' . $ip;
		$response  = self::request($api);
		$ipAddress = json_decode($response, TRUE);
		return ($ipAddress['code'] == 0) ? $ipAddress['data'] : FALSE;
	}
}
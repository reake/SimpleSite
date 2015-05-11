<?php
function p($string)
{
	echo $string;
}

/**
 * Get ClientIP
 * @return string
 */
function clientIP()
{
	if (isset($_SERVER['HTTP_CLIENT_IP']))
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_X_FORWARDED']))
		$ip = $_SERVER['HTTP_X_FORWARDED'];
	else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
		$ip = $_SERVER['HTTP_FORWARDED_FOR'];
	else if (isset($_SERVER['HTTP_FORWARDED']))
		$ip = $_SERVER['HTTP_FORWARDED'];
	else if (isset($_SERVER['REMOTE_ADDR']))
		$ip = $_SERVER['REMOTE_ADDR'];
	else
		$ip = 'UNKNOWN';

	return $ip;
}

/**
 * Return JSON
 *
 * @param      $code
 * @param null $msg
 * @param null $data
 */
function jsonReturn($code, $msg = NULL, $data = NULL)
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

/**
 * Request
 * @param        $url
 * @param array  $params
 * @param string $method
 * @param bool   $multi
 * @param array  $extHeaders
 * @return mixed
 */
function request($url, $params = array(), $method = 'GET', $multi = FALSE, $extHeaders = array())
{
	if (!function_exists('curl_init')) exit('Need to open the curl extension');
	$method = strtoupper($method);
	$ci     = curl_init();
	curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 3);
	$timeout = $multi ? 30 : 3;
	curl_setopt($ci, CURLOPT_TIMEOUT, $timeout);
	curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ci, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ci, CURLOPT_HEADER, FALSE);
	$headers = (array)$extHeaders;
	switch ($method) {
		case 'POST':
			curl_setopt($ci, CURLOPT_POST, TRUE);
			if (!empty($params)) {
				if (is_array($multi)) {
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

/**
 * Get address by IP
 * @param $ip
 * @return bool
 */
function getAddressByIP($ip)
{
	$api       = 'http://ip.taobao.com/service/getIpInfo.php?ip=' . $ip;
	$response  = request($api);
	$ipAddress = json_decode($response, TRUE);

	return ($ipAddress['code'] == 0) ? $ipAddress['data'] : FALSE;
}

/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s     Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d     Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
 * @param string $r     Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boole  $img   True to return a complete IMG tag False for just the URL
 * @param array  $atts  Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source http://gravatar.com/site/implement/images/php/
 */
function getAvatar($email, $s = 80, $d = 'mm', $r = 'g', $img = FALSE, $atts = array())
{
	$url = 'http://www.gravatar.com/avatar/';
	$url .= md5(strtolower(trim($email)));
	$url .= "?s=$s&d=$d&r=$r";
	if ($img) {
		$url = '<img src="' . $url . '"';
		foreach ($atts as $key => $val)
			$url .= ' ' . $key . '="' . $val . '"';
		$url .= ' />';
	}

	return $url;
}
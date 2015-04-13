<?php
class Tool_SMS{
	CONST APP_KEY = 'f405fed7a73ab7ebc5a51a960ece2c63';
	private static $types = array(
		'register'     => 1689,
		'findPassword' => 1690
	);

	/**
	 * Send register sms
	 * @param $mobile
	 * @param $content
	 * @return bool
	 */
	public function sendRegister($mobile, $content)
	{
		return self::sendSMS($mobile, $content, self::$types['register']);
	}

	/**
	 * Send find password code
	 * @param $mobile
	 * @param $content
	 * @return bool
	 */
	public function sendFindPassword($mobile, $content)
	{
		return self::sendSMS($mobile, $content, self::$types['findPassword']);
	}

	/**
	 * Send sms
	 * @param $mobile
	 * @param $content
	 * @param $type
	 * @return bool
	 */
	private static function sendSMS($mobile, $content, $type)
	{
		if (empty($mobile) || empty($content) || empty($type)) {
			error_log('sendSMS:' . 'param except');
			return FALSE;
		}
		if($type == self::$types['findPassword']){
			$content = urlencode("#code#={$content}");
		}elseif($type == self::$types['register']){
			$content = urlencode("#code#={$content}&#app#=搜狗宠物卫士");
		}
		$api    = 'http://v.juhe.cn/sms/send?mobile=' . $mobile . '&tpl_id=' . $type . '&tpl_value=' . $content . '&key=' . self::APP_KEY;
		$result = self::request($api);
		$result = json_decode($result, TRUE);
		if ($result['error_code'] == 0) {
			return TRUE;
		} else {
			error_log('sendSMS:' . $result['error_code']);
			return FALSE;
		}
	}

	/**
	 * Request remote url
	 * @param $url
	 * @return mixed|string
	 */
	private static function request($url)
	{
		if (ini_get("allow_url_fopen") == "1") {
			$response = file_get_contents($url);
		} else {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_URL, $url);
			$response = curl_exec($ch);
			curl_close($ch);
		}
		return $response;
	}
}
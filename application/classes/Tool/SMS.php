<?php

class Tool_SMS
{
	CONST APP_KEY = '88b3af707808b5f0fd0d7e6373132883';

	CONST MIN_SEND_TIME = 60;
	CONST SMS_CODE_EXPIRE_TIME = 300; // 30min
	private static $types = array(
		'register'     => array(
			'codeKey'     => 'sms_last_register_code',
			'sendTimeKey' => 'sms_last_register_time_',
			'tplID'       => 2380
		),
		'findPassword' => array(
			'codeKey'     => 'sms_last_find_password_code',
			'sendTimeKey' => 'sms_last_find_password_send_time_',
			'tplID'       => 2381
		)
	);

	private static $_instance;

	public static function instance()
	{
		if (self::$_instance === NULL) self::$_instance = new self();
		return self::$_instance;
	}

	/**
	 * Send register sms
	 * @param $mobile
	 * @param $event
	 * @return bool
	 */
	public function sendEventSMS($mobile, $event)
	{
		if (empty($mobile) || !isset(self::$types[$event])) return 4001;
		# Detection is already register
		$user  = ORM::factory('user');
		$count = $user->where('mobile', '=', $mobile)->find_all()->count();
		if (empty($count)) {
			$cache        = Cache::instance();
			$lastSendTime = $cache->get(self::$types[$event]['sendTimeKey'] . $mobile);
			if (!empty($lastSendTime) && (time()->$lastSendTime) < self::MIN_SEND_TIME) return 2001;

			$code = substr(str_shuffle('0123456789'), 0, 6);
			if (self::sendSMS($mobile, $code, self::$types[$event]['tplID']) === TRUE) {
				$cache->set(self::$types[$event]['codeKey'] . $mobile, $code);
				$cache->set(self::$types[$event]['sendTimeKey'] . $mobile, time());
				return TRUE;
			} else {
				return 2003;
			}
		} else {
			return 2000;
		}
	}

	/**
	 * @param $mobile
	 * @param $code
	 * @param $event
	 * @return bool|int
	 * @throws Cache_Exception
	 */
	public function verifyEventSMSCode($mobile, $code, $event)
	{
		if (empty($mobile) || empty($code) || !isset(self::$types[$event])) return 4001;
		$cache        = Cache::instance();
		$lastSendTime = $cache->get(self::$types[$event]['sendTimeKey'] . $mobile);
		if ((time() - $lastSendTime) > self::SMS_CODE_EXPIRE_TIME) return 2004;
		$lastCode = $cache->get(self::$types[$event]['codeKey'] . $mobile);
		if ($lastCode == $code) {
			return TRUE;
		} else {
			return 2005;
		}
	}

	/**
	 * Send sms
	 * @param $mobile
	 * @param $content
	 * @param $type
	 * @return bool
	 */
	private static function sendSMS($mobile, $content, $tplId)
	{
		if (empty($mobile) || empty($content) || empty($tplId)) return 4001;
		$content = urlencode('#code#=' . $content);
		$api     = 'http://v.juhe.cn/sms/send?mobile=' . $mobile . '&tpl_id=' . $tplId . '&tpl_value=' . $content . '&key=' . self::APP_KEY;
		$result  = self::request($api);
		$result  = json_decode($result, TRUE);
		if ($result['error_code'] == 0) {
			return TRUE;
		} else {
			print_r($result);
			return 2006;
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
<?php
$domain = new domain();
$result = $domain::instance()->check('apgroup.com.cn');
print_r($result);

class domain
{
	const USER_NAME = 'syrdxb';
	const USER_PASSWORD = 'wufei134679.+';
	const USER_EMAIL = 'syrdxb@126.com';
	const API_URL = 'http://api.cndns.com/domains/';

	# Post Data
	private $data = array();
	# API Url
	private $api = array(
		'check' => 'check.aspx', // check domain
	);

	protected static $_instance;

	/**
	 * Instance class
	 * @return class
	 */
	public static function instance()
	{
		if (self::$_instance === NULL) self::$_instance = new domain();
		return self::$_instance;
	}

	/**
	 * Construct
	 * Init post data
	 */
	function __construct()
	{
		$this->data['username'] = self::USER_NAME;
		$oTime                  = time();
		$this->data['otime']    = $oTime;
		$this->data['checksum'] = md5(self::USER_NAME . md5(self::USER_PASSWORD) . $oTime . self::USER_EMAIL);
	}

	/**
	 * Check domain is available
	 * @param string domain
	 * @return array
	 */
	public function check($domain)
	{
		$domain                    = explode('.', $domain);
		$index = ($domain[0] === 'www') ? 1 : 0;
		for($i = $index + 1;$i < count($domain);$i++) {
			$tld .= ($i == count($domain) - 1) ? $domain[$i] : $domain[$i].'.';
		}
		$this->data['domain-name'] = $domain[$index];
		$this->data['tld']         = $tld;
		$response                  = self::request(self::API_URL . $this->api[__FUNCTION__], $this->data);
		return self::parseData($response);
	}

	/**
	 * Parse response data and log error
	 * @param string json
	 * @return array
	 *
	 */
	private static function parseData($response){
		$data = json_decode($response,true);
		if($data['status'] !== 'success'){
			# TODO LOG
		}
		return $data;
	}

	/**
	 * CURL
	 * @param        $url
	 * @param array  $params
	 * @param string $method
	 * @param bool   $multi
	 * @param array  $extheaders
	 * @return mixed
	 */
	private static function request($url, $params = array(), $method = 'GET', $multi = FALSE, $extheaders = array())
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
}
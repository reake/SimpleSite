<?php

class Model_Site extends ORM
{
	public static $siteStatus = array(
		0 => '下线',
		1 => '上线'
	);
	protected $_table_name = 'Site';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id'          => array('data_type' => 'int'),
		'uid'         => array('data_type' => 'int',),
		'name'        => array('data_type' => 'string',),
		'title'       => array('data_type' => 'string',),
		'keywords'    => array('data_type' => 'string',),
		'description' => array('data_type' => 'string',),
		'types'       => array('data_type' => 'int',),
		'theme'       => array('data_type' => 'int',),
		'status'      => array('data_type' => 'int',),
		'url'         => array('data_type' => 'string',),
		'logo'         => array('data_type' => 'string',),
		'domain'         => array('data_type' => 'string',),
		'created'     => array('data_type' => 'int'),
		'updated'     => array('data_type' => 'int')
	);

	public function getAll($userId)
	{
		$sitesOJ = $this->where('uid', '=', $userId)->find_all();
		$sites   = array();
		foreach ($sitesOJ as $st) {
			$tmpArr               = $st->as_array();
			$tmpArr['status']     = self::$siteStatus[$tmpArr['status']];
			$tmpArr['created']    = date('Y-m-d', $tmpArr['created']);
			$sites[$tmpArr['id']] = $tmpArr;
		}
		return $sites;
	}

	public function getSiteId($userId)
	{
		$siteId = Session::instance()->get('siteId');
		$sites  = $this->getAll($userId);
		foreach ($sites as $key => $value) {
			if ($key == $siteId) return $siteId;
		}
		return $sites[0]['id'];
	}
}
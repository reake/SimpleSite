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
		'id'          => array('type' => 'int'),
		'uid'         => array('type' => 'int',),
		'name'        => array('type' => 'string',),
		'title'       => array('type' => 'string',),
		'keywords'    => array('type' => 'string',),
		'description' => array('type' => 'string',),
		'types'       => array('type' => 'int',),
		'theme'       => array('type' => 'int',),
		'status'      => array('type' => 'int',),
		'url'         => array('type' => 'string',),
		'logo'        => array('type' => 'string',),
		'domain'      => array('type' => 'string',),
		'created'     => array('type' => 'int'),
		'updated'     => array('type' => 'int')
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
<?php

class Model_FriendLink extends ORM
{
	const STATUS_ONLINE = 1;
	const STATUS_OFFLINE = 0;
	protected $_table_name = 'FriendLink';
	protected $_table_columns = array(
		'id'          => array('type' => 'int'),
		'sid'         => array('type' => 'int'),
		'url'         => array('type' => 'string'),
		'path'        => array('type' => 'string'),
		'title' => array('type' => 'string'),
		'description' => array('type' => 'string'),
		'status'      => array('type' => 'int'),
		'created'     => array('type' => 'int'),
		'updated'     => array('type' => 'int')
	);

	public function getAll($siteId)
	{
		$arr    = $this->where('sid','=',$siteId)->find_all();
		$arrTmp = array();
		foreach ($arr as $v) {
			$tmp = $v->as_array();
			$arrTmp[] = $tmp;
		}
		return $arrTmp;
	}
}
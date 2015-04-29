<?php

class Model_User_LoginHistory extends ORM
{
	protected $_table_name = 'User_Login_History';
	protected $_table_columns = array(
		'uid'       => array('type' => 'int'),
		'ip'        => array('type' => 'string'),
		'userAgent' => array('type' => 'string'),
		'created'   => array('type' => 'int'),
		'updated'   => array('type' => 'int')
	);

	public function getAll($userId){
		$OJ = $this->where('uid','=', $userId)->find_all();
		$arr = array();
		foreach($OJ as $v){
			$tmpArr = $v->as_array();
			$tmpArr['created'] = date('Y-m-d H:i:s', $tmpArr['created']);
			$tmpArr['updated'] = date('Y-m-d H:i:s', $tmpArr['updated']);
			$arr[] = $tmpArr;
		}
		return $arr;
	}
}
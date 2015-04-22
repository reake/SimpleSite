<?php

class Model_Category extends ORM
{
	const TYPES_CID_MAIN = 1;
	const TYPES_CID_SUB = 2;
	const TYPES_LINK = 0;
	protected $_table_name = 'Category';
	protected $_table_columns = array(
		'id'          => array('type' => 'int'),
		'pid'         => array('type' => 'int'),
		'sid'         => array('type' => 'int'),
		'name'        => array('type' => 'string'),
		'description' => array('type' => 'string'),
		'types'       => array('type' => 'int'),
		'url'         => array('type' => 'string'),
		'orders'      => array('type' => 'int'),
		'status'      => array('type' => 'int'),
		'created'     => array('type' => 'int'),
		'updated'     => array('type' => 'int'),
	);

	private static $types = array(
		0 => '文章列表',
		1 => '单篇文章',
		2 => '超链接',
	);

	public function filters()
	{
		return array(
			TRUE => array(
				array('trim')
			)
		);
	}

	private static $_instance;

	public static function instance()
	{
		if (self::$_instance == NULL) self::$_instance = new self();
		return self::$_instance;
	}

	public function getAll($siteId, $isTop = 0)
	{
		$categoryTop = $this->where('sid', '=', $siteId)->where('pid', '=', $isTop)->find_all();
		foreach ($categoryTop as $key => $val) {
			$categoryTop[$key]->created = date('Y-m-d H:i:s', $val->created);
		}
		return $categoryTop;
	}

	public function getTypes($types = NULL)
	{
		if (empty($types)) return self::$types;
		if (isset(self::$types[$types])) {
			return self::$types[$types];
		} else {
			return FALSE;
		}
	}
}
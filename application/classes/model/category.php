<?php

class Model_Category extends ORM
{
	const TYPES_NEWS_LIST   = 1;
	const TYPES_NEWS_DETAIL = 2;
	const TYPES_SINGLE_PAGE = 3;
	const TYPES_LINK        = 0;

	const STATUS_SHOW = 1;
	const STATUS_HIDE = 0;

	protected $_table_name    = 'Category';
	protected $_table_columns = array(
		'id'          => array('type' => 'int'),
		'pid'         => array('type' => 'int'),
		'sid'         => array('type' => 'int'),
		'name'        => array('type' => 'string'),
		'description' => array('type' => 'string'),
		'types'       => array('type' => 'int'),
		'uri'         => array('type' => 'string'),
		'orders'      => array('type' => 'int'),
		'status'      => array('type' => 'int'),
		'created'     => array('type' => 'int'),
		'updated'     => array('type' => 'int'),
	);

	private static $types = array(
		1 => '文章列表',
		2 => '文章详情',
		3 => '单篇文章',
		0 => '超链接',
	);

	public function filters()
	{
		return array(
			TRUE => array(
				array('trim')
			)
		);
	}

	public function getAll($siteId, $status = NULL)
	{
		$category = $this->getCategory($siteId, $status);
		foreach ($category as $k => $v) {
			$category[$k]['subCategory'] = $this->getCategory($siteId, $status, $v['id']);
		}

		return $category;
	}

	private function getCategory($siteId, $status = NULL, $pid = 0)
	{
		$this->where('sid', '=', $siteId)->where('pid', '=', $pid);
		if ($status !== NULL) $this->where('status', '=', $status);
		$category    = $this->find_all();
		$categoryArr = array();
		foreach ($category as $k => $v) {
			$v               = $v->as_array();
			$v['created']    = date('Y-m-d H:i:s', $v['created']);
			$categoryArr[$k] = $v;
		}

		return $categoryArr;
	}

	public function getData($category)
	{
		if (!is_object($category)) return FALSE;
		switch ($category->types) {
			case self::TYPES_NEWS_LIST:
				$contents = ORM::factory('Content')->getAll($category->id, $category->sid);

				return array(
					'contents' => $contents,
				);
				break;
			default:
				return array();
				break;
		}
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
<?php

class Model_Category extends ORM
{
	const TYPES_CID_MAIN = 1;
	const TYPES_CID_SUB = 2;
	const TYPES_LINK = 0;
	protected $_table_name = 'Category';
	protected $_table_columns = array(
		'id'      => array('type' => 'int'),
		'pid'     => array('type' => 'int'),
		'sid'     => array('type' => 'int'),
		'name'    => array('type' => 'string'),
		'types'   => array('type' => 'int'),
		'url'     => array('type' => 'string'),
		'orders'  => array('type' => 'int'),
		'status'  => array('type' => 'int'),
		'created' => array('type' => 'int'),
		'updated' => array('type' => 'int'),
	);

	public function filters(){
		return array(
			TRUE => array(
				array('trim')
			)
		);
	}

	public function getAll($siteId,$isTop = 0)
	{
		$categoryTop    = $this->where('sid', '=', $siteId)->where('pid','=',$isTop)->find_all();
		$categoryArr = array();
		foreach ($categoryTop as $st) {
			$categorySub = $this->where('sid','=',$siteId)->where('pid','=',$st->id)->find_all();
			$categorySubArr = array();
			foreach($categorySub as $sub){
				$categorySubArr[] = $sub->as_array();
			}
		}
		$categoryArr = array(
			'top' => $categoryTop,
			'sub' => $categorySubArr
		);
		return $categoryArr;
	}
}
<?php

class Model_Content extends ORM
{
	protected $_table_name    = 'Content';
	protected $_table_columns = array(
		'id'          => array('type' => 'int'),
		'cid'         => array('type' => 'int'),
		'title'       => array('type' => 'string'),
		'keywords'       => array('type' => 'string'),
		'origin'       => array('type' => 'string'),
		'description' => array('type' => 'string'),
		'content'     => array('type' => 'string'),
		'thumb'       => array('type' => 'string'),
		'types'       => array('type' => 'int'),
		'status'      => array('type' => 'int'),
		'created'     => array('type' => 'int'),
		'updated'     => array('type' => 'int'),
	);

	public function getAll($cid, $sid)
	{
		$content = $this->where('cid', '=', $cid)->where('sid', '=', $sid)->find_all();
		$contents = array();
		foreach ($content as $k => $v) {
			$v = $v->as_array();
			$v['created'] = date('Y-m-d H:i:s', $v['created']);
			$contents[$k] = $v;
		}

		return $contents;
	}
}
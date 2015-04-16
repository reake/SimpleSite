<?php

class Model_Site extends ORM
{
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
		'created'     => array('data_type' => 'int'),
		'updated'     => array('data_type' => 'int')
	);

	public function getAll($userId){
		$sitesOJ = $this->where('uid','=', $userId)->find_all();
		$sites = array();
		foreach($sitesOJ as $st){
			$sites[] = $st->as_array();
		}
		return $sites;
	}
}
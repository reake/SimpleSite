<?php
class Model_Module extends ORM{
	protected $_table_name = 'Module';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id' => array(
			'type' => 'int',
			'is_nullable' => false
		),
		'name' => array(
			'type'        => 'string',
			'is_nullable' => FALSE
		),
		'icon'   => array(
			'type'        => 'int',
			'is_nullable' => FALSE,
		),
		'price'    => array(
			'type'        => 'string',
			'is_nullable' => TRUE,
		),
		'orders' => array(
			'type'        => 'string',
			'is_nullable' => FALSE,
		),
		'status' => array(
			'type'        => 'string',
			'is_nullable' => FALSE,
		),
		'created' => array(
			'type'        => 'string',
			'is_nullable' => FALSE,
		),
		'updated' => array(
			'type'        => 'string',
			'is_nullable' => FALSE,
		),
	);

	public function getAll(){
		$modules = ORM::factory('Module')->order_by('orders', 'ASC')->find_all();
		$module = array();
		foreach($modules as $v){
			if(empty($v->price)) $v->price = '免费';
			$module[] = array(
				'id' => $v->id,
				'name' => $v->name,
				'icon' => $v->icon,
				'price' => $v->price
			);
		}
		return $module;
	}
}
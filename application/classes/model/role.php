<?php
class Model_Role extends ORM{
	protected $_table_name = 'Role';
	protected $_table_columns = array(
		'id' => array(
			'type' => 'int',
			'is_nullable' => false
		),
		'name' => array(
			'type'        => 'string',
			'is_nullable' => FALSE
		),
		'description'   => array(
			'type'        => 'string',
			'is_nullable' => FALSE,
		)
	);
}
<?php
class Model_User_Token extends ORM{
	protected $_table_name = 'User_Token';
	protected $_table_columns = array(
		'id' => array(
			'type' => 'int',
			'is_nullable' => false
		),
		'user_id' => array(
			'type'        => 'int',
			'is_nullable' => true
		),
		'user_agent'   => array(
			'type'        => 'string',
			'is_nullable' => FALSE,
		),
		'token'   => array(
			'type'        => 'string',
			'is_nullable' => FALSE,
		),
		'type'   => array(
			'type'        => 'string',
			'is_nullable' => FALSE,
		),
		'created'   => array(
			'type'        => 'int',
			'is_nullable' => true,
		),
		'expires'   => array(
			'type'        => 'int',
			'is_nullable' => true,
		)
	);
}
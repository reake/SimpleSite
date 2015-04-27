<?php

class Model_Subscribe extends ORM
{
	protected $_table_name    = 'Subscribe';
	protected $_table_columns = array(
		'id'      => array('type' => 'int'),
		'sid'     => array('type' => 'int'),
		'email'   => array('type' => 'string'),
		'status'   => array('type' => 'int'),
		'created' => array('type' => 'int'),
		'updated' => array('type' => 'int'),
	);
}
<?php

class Model_File extends ORM
{
	const FILE_TYPES_IMG = 0;
	protected $_table_name = 'File';
	protected $_table_columns = array(
		'id'      => array('type' => 'int'),
		'sid'     => array('type' => 'int'),
		'name'    => array('type' => 'string'),
		'path'    => array('type' => 'string'),
		'md5'     => array('type' => 'string'),
		'types'   => array('type' => 'int'),
		'created' => array('type' => 'int'),
		'updated' => array('type' => 'int')
	);
}
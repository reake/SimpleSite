<?php
class Model_Roles_Users extends ORM{
	protected $_table_name = 'roles_users';
	protected $_table_columns = array(
		'user_id' => array(
			'type'        => 'int',
			'is_nullable' => FALSE
		),
		'role_id'   => array(
			'type'        => 'int',
			'is_nullable' => FALSE,
		)
	);
}
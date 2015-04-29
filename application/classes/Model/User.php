<?php

class Model_User extends ORM
{
	protected $_table_name = 'User';
	protected $_table_columns = array(
		'id' => array(
			'type' => 'int',
			'is_nullable' => false
		),
		'username' => array(
			'type'        => 'string',
			'is_nullable' => FALSE
		),
		'mobile'   => array(
			'type'        => 'int',
			'is_nullable' => FALSE,
		),
		'email'    => array(
			'type'        => 'string',
			'is_nullable' => TRUE,
		),
		'password' => array(
			'type'        => 'string',
			'is_nullable' => FALSE,
		)
	);
	protected $_has_many = array(
		'roles' => array('through' => 'roles_users')
	);

	public function rules()
	{
		return array(
			'username' => array(
				array('not_empty'),
				array('min_length', array(':value', 3)),
				array('max_length', array(':value', 15)),
			),
			'password' => array(
				array('not_empty'),
				array('min_length', array(':value', 6)),
				array('max_length', array(':value', 32)),
			),
			'mobile'   => array(
				array('not_empty'),
				array('min_length', array(':value', 11)),
				array('max_length', array(':value', 11)),
			),
			'email'    => array(
				array('min_length', array(':value', 5)),
				array('max_length', array(':value', 32)),
				array('email')
			)
		);
	}

//	public function filters()
//	{
//		return array(
//			'password' => array(
//				array(array($this, 'hash_password'), array(':value', Model_User::salt()))
//			),
//			'created'  => array(
//				array('Format::date', array(':value', 'Y-m-d H:i:s'))
//			)
//		);
//	}

	public function username_available($username)
	{
		return TRUE;
	}

	public function hash_password($password)
	{
		return TRUE;
	}

	public static function salt()
	{
		return TRUE;
	}

	public static function complete_login(){

	}

	public function unique_key(){
		return 'mobile';
	}
}
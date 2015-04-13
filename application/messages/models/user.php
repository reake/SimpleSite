<?php
return array(
	'username' => array(
		'not_empty'          => '用户名不能为空',
		'min_length'         => '用户不能短于 :param2 个字符',
		'max_length'         => '用户名最长 :param2 个字符',
		'username_available' => '用户名已经被占用'
	),
	'password' => array(
		'not_empty'  => '密码不能为空',
		'min_length' => '为了账户安全，密码长度不得小于 :param2 个字符',
		'max_length' => '密码长度不能大于 :param2 个字符'
	),
	'mobile'   => array(
		'not_empty'  => '手机号不能为空',
		'min_length' => '手机号只能为 :param2 位数字',
		'max_length' => '手机号只能为 :param2 位数字'
	)
);
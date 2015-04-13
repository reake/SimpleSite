<?php
return array(
	'username' => array(
		'not_empty'          => '用户名不能为空',
		'min_length'         => '用户不能短于 :param2 个字符',
		'max_length'         => '用户名最长 :param2 个字符',
		'username_available' => '用户名已经被占用'
	),
	'password' => array(
		'not_empty' => '密码不能为空'
	)
);
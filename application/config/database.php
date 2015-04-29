<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default'   => array
	(
		'type'         => 'PDO',
		'connection'   => array(
			/**
			 * The following options are available for MySQL:
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 * array    variables    system variables as "key => value" pairs
			 * Ports and sockets may be appended to the hostname.
			 */
			'dsn'        => 'mysql:host=localhost;dbname=simple_site',
			'username'   => 'root',
			'password'   => '133285.+/*-',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
	'offline'   => array
	(
		'type'         => 'PDO',
		'connection'   => array(
			/**
			 * The following options are available for MySQL:
			 * string   hostname     server hostname, or socket
			 * string   database     database name
			 * string   username     database username
			 * string   password     database password
			 * boolean  persistent   use persistent connections?
			 * array    variables    system variables as "key => value" pairs
			 * Ports and sockets may be appended to the hostname.
			 */
			'dsn'        => 'mysql:host=localhost;dbname=simple_site',
			'username'   => 'root',
			'password'   => '133285',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
);

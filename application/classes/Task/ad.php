<?php

class Task_Ad extends Minion_Task
{
	protected $_options = array(
		'foo' => 'bar',
		'bar' => NULL,
	);

	/**
	 * This is a demo task
	 *
	 * @return null
	 */
	protected function _execute(array $params)
	{
		var_dump($params);
		echo 'foobar';
	}
}
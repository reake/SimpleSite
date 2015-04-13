<?php

class Tool_Utility
{
	public static function jsonReturn($code, $result)
	{
		$array = array(
			'status' => $code,
			'result' => $result
		);
		echo json_encode($array);
		exit();
	}
}
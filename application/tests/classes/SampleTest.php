<?php defined('SYSPATH') or die('No direct access allowed!');

class SampleTest extends Unittest_TestCase
{
	public function testAdd()
	{
		$post     = array();
		$response = Request::factory('http://www.mogujie.com/trade/cart/shoptopcart?isnew=1')->method(Request::POST)->post($post)->execute();

		print_r($response->body());
		$this->assertTrue(TRUE);
	}
}

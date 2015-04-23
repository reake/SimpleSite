<?php defined('SYSPATH') or die('No direct access allowed!');
 
class SampleTest extends Kohana_Unittest_TestCase
{
    public function testAdd()
    {
	$post = array();
	$response = Request::factory('manage/category/add')->method(Request::POST)->post($post);
 
	print_r($response);
        $this->assertEquals($username, null);
    }
}

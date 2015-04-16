<?php
class Model_Category extends ORM{
	protected $_table_name = 'Category';
	protected $_table_columns =  array(

	);
	protected $_has_many = array(
		'model' => 'content'
	);

	public static function getCategory($siteId = null){
		if(empty($siteId)) $siteId = Tool_Utility::getSiteId();
		return array();
	}
}
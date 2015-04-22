<?php
class Controller_Manage_Category extends Controller_Manage_Template{
	public function action_index(){
		$this->template = 'category/index';
		$this->data = array(
			'category'  => ORM::factory('Category')->getAll($this->siteId)
		);
		print_r($this->data);
	}
}
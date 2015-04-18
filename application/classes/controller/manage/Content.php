<?php
class Controller_Manage_Content extends Controller_Manage_Template{
	public function action_index(){
		$this->template = 'content/index';
		$category = ORM::factory('Category')->getAll($this->siteId);
		$this-> data = $category;
	}
}
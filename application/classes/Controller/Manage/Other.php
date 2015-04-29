<?php
class Controller_Manage_Other extends Controller{
	public function action_lock(){
		$this->response->body(View::factory('manage/lock'));
	}
}
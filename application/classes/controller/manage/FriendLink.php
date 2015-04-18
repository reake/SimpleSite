<?php
class Controller_Manage_FriendLink extends Controller_Manage_Template{
	public function action_index(){
		$this->template = 'friendLink';
		$friendLinks = ORM::factory('FriendLink')->getAll($this->siteId);
		$this->data = array(
			'friendLinks' => $friendLinks
		);
	}
}
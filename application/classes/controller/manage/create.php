<?php

class Controller_Manage_Create extends Controller_Manage_Template
{
	public function action_step1()
	{
		if ($this->request->is_ajax()) {
			$post              = $this->request->post();
			$site              = ORM::factory('Site');
			$site->uid         = $this->user['id'];
			$site->name        = $post['name'];
			$site->title       = $post['title'];
			$site->description = $post['description'];
			$site->keywords    = $post['keywords'];
			$site->created = time();
			$site->updated = time();
			$site->save();
			jsonReturn(1001,'创建成功','/manage/dashboard/index');
		}
		$this->template = 'step1';
		$modules        = ORM::factory('Module')->getAll();
		$this->data     = array('modules' => $modules);
	}
}
<?php

class Controller_Manage_Site extends Controller_Manage_Template
{
	public function action_index()
	{
		$this->template = 'site/index';
		$this->data     = array(
			'sites' => ORM::factory('Site')->getAll($this->user['id'])
		);
	}

	public function action_edit()
	{
		if ($this->request->is_ajax()) {
			$post   = $this->request->post();
			$siteId = intval($post['siteId']);
			$site   = ORM::factory('Site')->where('id', '=', $siteId)->where('uid', '=', $this->user['id'])->find();
			if ($site->loaded()) {
				$status = (isset($post['status']) && $post['status'] == 'on') ? 1 : 0;
				$site->set('name', $post['name'])
					->set('status', $status)
					->set('url', $post['url'])
					->set('domain',$post['domain'])
					->set('title', $post['title'])
					->set('keywords', $post['keywords'])
					->set('description', $post['description']);
				try {
					$site->save();
					Tool_Utility::jsonReturn(1001, '修改成功!');
				} catch (ORM_Validation_Exception $e) {
					$errors = $e->errors('User');
					Tool_Utility::jsonReturn(4444, '更新失败!');
				}
			} else {
				Tool_Utility::jsonReturn(4444, '对不起，没有该网站或您无权管理！');
			}
		}
		$this->template = 'site/edit';
		$siteId         = intval($this->request->query('siteId'));
		$siteInfo = ORM::factory('Site')->where('id', '=', $siteId)->where('uid', '=', $this->user['id'])->find()->as_array();
		$data           = array(
			'siteId'   => $siteId,
			'siteInfo' => $siteInfo
		);
		$this->data     = $data;
	}
}
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
					->set('domain', $post['domain'])
					->set('title', $post['title'])
					->set('keywords', $post['keywords'])
					->set('description', $post['description']);
				try {
					$site->save();
					jsonReturn(1001, '修改成功!');
				} catch (ORM_Validation_Exception $e) {
					$errors = $e->errors('User');
					jsonReturn(4444, '更新失败!');
				}
			} else {
				jsonReturn(4444, '对不起，没有该网站或您无权管理！');
			}
		}
		$this->template = 'site/edit';
		$siteId         = intval($this->request->query('siteId'));
		$siteInfo       = ORM::factory('Site')->where('id', '=', $siteId)->where('uid', '=', $this->user['id'])->find()->as_array();
		$siteInfo['logo'] = '/media/image/data/'.$siteInfo['logo'];
		$data           = array(
			'siteId'   => $siteId,
			'siteInfo' => $siteInfo
		);
		$this->data     = $data;
	}

	public function action_upload()
	{
		$md5            = md5($_FILES['image']['tmp_name']);
		$file           = $md5 . '_' . time() . '.' . pathinfo($_FILES['image']['name'])['extension'];
		$fileValidation = new Validation($_FILES);
		$fileValidation->rule('image', 'upload::valid');
		$fileValidation->rule('image', 'upload::type', array(':value', array('jpg', 'png')));
		if ($fileValidation->check()) {
			if ($path = Upload::save($_FILES['image'], $file, DIR_IMAGE)) {
				ORM::factory('File')
					->set('sid', $this->siteId)
					->set('name', $_FILES['image']['name'])
					->set('path', $file)
					->set('md5', $md5)
					->set('types', Model_File::FILE_TYPES_IMG)
					->set('created', time())
					->set('updated', time())
					->save();
				$site = ORM::factory('Site')->where('id', '=', $this->siteId)->where('uid', '=', $this->user['id'])->find();
				$site->set('logo', $file)
					->set('updated', time())
					->save();
				jsonReturn(1001, '上传成功!', '/media/image/data/'.$file);
			} else {
				jsonReturn(4444, '图片保存失败');
			}
		} else {
			jsonReturn(4444, '图片上传失败');
		}
	}
}
<?php

class Controller_Manage_Category extends Controller_Manage_Template
{
	public function action_index()
	{
		$this->template = 'category/index';
		$this->data     = array(
			'category' => ORM::factory('Category')->getAll($this->siteId)
		);
	}

	public function action_set()
	{
		$modelCategory = ORM::factory('Category');
		if ($this->request->is_ajax()) {
			$post           = $this->request->post();
			$post['status'] = (isset($post['status']) && $post['status'] == 'on') ? 1 : 0;
			switch ($post['action']) {
				case 'add':
					$modelCategory
						->set('pid', $post['pid'])
						->set('sid', $this->siteId)
						->set('name', $post['name'])
						->set('description', $post['description'])
						->set('types', $post['types'])
						->set('url', $post['url'])
						->set('orders', $post['orders'])
						->set('status', $post['status'])
						->set('created', time())
						->set('updated', time())
						->save();
					Tool_Utility::jsonReturn(1001);
					break;
				case 'edit':
					$modelCategory->where('id', '=', $post['id'])->where('sid', '=', $this->siteId)->find();
					if ($modelCategory->loaded()) {
						$modelCategory->set('pid', $post['pid'])
							->set('name', $post['name'])
							->set('description', $post['description'])
							->set('types', $post['types'])
							->set('url', $post['url'])
							->set('orders', $post['orders'])
							->set('status', $post['status'])
							->set('updated', time())
							->save();
						Tool_Utility::jsonReturn(1001);
					} else {
						Tool_Utility::jsonReturn(4444, '在您网站下没有找到此栏目');
					}
					break;
				case 'del':
					$modelCategory->where('id', '=', $post['id'])->where('sid', '=', $this->siteId)->delete();
					Tool_Utility::jsonReturn(1001);
					break;
				default:
					break;
			}
		} else {
			$this->template = 'category/set';
			$data           = array(
				'category' => $modelCategory->getAll($this->siteId),
				'types'    => $modelCategory->getTypes()
			);
			$id             = $this->request->query('id');
			if (!empty($id)) {
				$data['action']   = 'edit';
				$data['id']       = $id;
				$data['cateInfo'] = $modelCategory->where('id', '=', $id)->find();
			} else {
				$data['action']   = 'add';
				$data['id']       = '';
				$cateInfo         = array(
					'id'          => '',
					'pid'         => 0,
					'name'        => '',
					'description' => '',
					'types'       => 0,
					'url'         => '',
					'orders'      => 0,
					'status'      => FALSE
				);
				$data['cateInfo'] = json_decode(json_encode($cateInfo));
			}
			$this->data = $data;
//			print_r($this->data);
		}
	}

}
<?php
class Controller_Manage_Content extends Controller_Manage_Template{
	public function action_index(){
		if($this->request->is_ajax()){
			$data = $this->request->post();
			$action = $data['action'];
			$content = ORM::factory('Content');
			switch($action){
				case 'getList':
					$cid = $data['cid'];
					$list = $content->getAll($cid,$this->siteId);
					Tool_Utility::jsonReturn(1001,'成功',$list);
					break;
				case 'getDetail':
					$id = $data['id'];
					$detail = $content->where('id','=',$id)->where('sid','=',$this->siteId)->find();
					if($detail->loaded()){
						$detail = $detail->as_array();
						$category = ORM::factory('Category')->getAll($this->siteId);
						$detail['category'] = get_object_vars($category);
						Tool_Utility::jsonReturn(1001,'成功',$detail);
					}else{
						Tool_Utility::jsonReturn(4444,'文章未找到');
					}
					break;
				case 'updateDetail':
					$id = $data['id'];
					$detail = $content->where('id','=',$id)->where('sid','=',$this->siteId)->find();
					if($detail->loaded()){
						$detail->set('title',$data['title'])
							->set('keywords',$data['keywords'])
							->set('description',mb_substr($data['content'],0,150))
							->set('origin', $data['origin'])
							->set('cid', $data['cid'])
							->set('updated',strtotime($data['updated']))
							->set('created',strtotime($data['created']))
							->set('content',$data['content'])
							->save();
						Tool_Utility::jsonReturn(1001,'保存成功');
					}else{
						Tool_Utility::jsonReturn(4444,'保存失败');
					}
					break;
				default:
					Tool_Utility::jsonReturn(4444,'错误');
					break;
			}
		}else{
			$this->template = 'content/index';
			$category = ORM::factory('Category')->getAll($this->siteId);
			$this-> data = array(
				'category' => $category
			);
		}
	}
}
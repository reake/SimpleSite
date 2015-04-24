<?php
class Controller_Manage_Content extends Controller_Manage_Template{
	public function action_index(){
		if($this->request->is_ajax()){
			$cid = $this->request->post('cid');
			$content = ORM::factory('Content')->getAll($cid,$this->siteId);
			Tool_Utility::jsonReturn(1001,'成功',$content);
		}else{
			$this->template = 'content/index';
			$category = ORM::factory('Category')->getAll($this->siteId);
			$this-> data = array(
				'category' => $category
			);
		}
	}
}
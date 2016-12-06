<?php
namespace Admin\Controller;
use Think\Controller;
class ApplyController extends Controller {
     public function lists(){
    	$applyModel = D("apply");
		$apply = $applyModel->select();
		$this->assign('apply',$apply);
		$this->display();  
    }
}
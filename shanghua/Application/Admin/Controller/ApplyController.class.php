<?php
namespace Admin\Controller;
use Think\Controller;
class ApplyController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
    	$applyModel = D("apply");
		$apply = $applyModel->select();
		$this->assign('apply',$apply);
		$this->display();  
    }
}
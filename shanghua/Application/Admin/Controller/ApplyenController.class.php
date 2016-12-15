<?php
namespace Admin\Controller;
use Think\Controller;
<<<<<<< HEAD
class ApplyenController extends Controller {
=======
class ApplyController extends Controller {
>>>>>>> origin/master
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
<<<<<<< HEAD
    	$applyenModel = D("applyen");
		$applyen = $applyenModel->select();
		$this->assign('applyen',$applyen);
=======
    	$applyModel = D("apply");
		$apply = $applyModel->select();
		$this->assign('apply',$apply);
>>>>>>> origin/master
		$this->display();  
    }
     public function delete() {
        //全部删除
<<<<<<< HEAD
        $id = $_GET['applyenId'];
        if(is_array($id)){
            foreach($id as $value){
                D("applyen")->delete($value);
=======
        $id = $_GET['applyId'];
        if(is_array($id)){
            foreach($id as $value){
                D("apply")->delete($value);
>>>>>>> origin/master
            }  
            $this->success("批量删除成功！",U("lists"));
        } 
        //单个删除
        else{
<<<<<<< HEAD
            $applyenModel = D("applyen");
            if($applyenModel->where("id=$id")->delete()){
                $this->success("删除成功",U("Applyen/lists"));
            }
            else{
                $this->error($applyenModel->geterror());
=======
            $applyModel = D("apply");
            if($applyModel->where("id=$id")->delete()){
                $this->success("删除成功",U("Apply/lists"));
            }
            else{
                $this->error($applyModel->geterror());
>>>>>>> origin/master
            }           
        }      
    }
}
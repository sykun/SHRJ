<?php
namespace Admin\Controller;
use Think\Controller;
class ApplyenController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }

     public function lists(){
    	$applyenModel = D("applyen");
		$applyen = $applyenModel->select();
		$this->assign('applyen',$applyen);
		$this->display();  
    }
     public function delete() {
        //全部删除
        $id = $_GET['applyenId'];
        if(is_array($id)){
            foreach($id as $value){
                D("applyen")->delete($value);
            }  
            $this->success("批量删除成功！",U("lists"));
        } 
        //单个删除
        else{
            $applyenModel = D("applyen");
            if($applyenModel->where("id=$id")->delete()){
                $this->success("删除成功",U("Applyen/lists"));
            }
            else{
                $this->error($applyenModel->geterror());
            }           
        }      
    }
}
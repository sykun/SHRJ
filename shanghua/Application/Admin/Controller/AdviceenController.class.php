<?php
namespace Admin\Controller;
use Think\Controller;
class AdviceenController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function listsen(){
    	$adviceenModel = D("adviceen");
	    $adviceen = $adviceenModel->select();
	    $this->assign('adviceen',$adviceen);
		$this->display();  
    }
    public function deleteen() {
        //全部删除
        $id = $_GET['adviceenId'];
        if(is_array($id)){
            foreach($id as $value){
                D("adviceen")->delete($value);
            }  
            $this->success("批量删除成功！",U("lists"));
        } 
        //单个删除
        else{
            $adviceenModel = D("adviceen");
            if($adviceenModel->where("id=$id")->delete()){
                $this->success("删除成功",U("adviceen/lists"));
            }
            else{
                $this->error($adviceenModel->geterror());
            }  
        }      
    }
}
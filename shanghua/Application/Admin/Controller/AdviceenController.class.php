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
            $cut=8;
            $currentPage = I("get.p");
            $offset = ($currentPage-1) * $cut;
            $adviceen=$adviceenModel->where()->limit("$offset,$cut")->select();
            $this->assign("adviceen",$adviceen);

            $count = $adviceenModel->count();
            $Page = new \Think\Page($count, $cut);
            $show = $Page->show();
            $this->assign("page", $show);

            $this->display(); 
  
    }
    public function deleteen() {
        //全部删除
        $id = $_GET['adviceenId'];
        if(is_array($id)){
            foreach($id as $value){
                D("adviceen")->delete($value);
            }  
           // $this->success("批量删除成功！",U("listsen"));
            $this->redirect('lists?p=1',0);
        } 
        //单个删除
        else{
            $adviceenModel = D("adviceen");
            if($adviceenModel->where("id=$id")->delete()){
               // $this->success("删除成功",U("Adviceen/listsen"));
                $this->redirect('lists?p=1',0);
            }
            else{
                $this->error($adviceenModel->geterror());
            }  
        }      
    }
}
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
     public function listsen(){
    	    $applyenModel = D("applyen");
            $cut=8;
            $currentPage = I("get.p");
            $offset = ($currentPage-1) * $cut;
            $applyen=$applyenModel->where()->limit("$offset,$cut")->select();
            $this->assign("applyen",$applyen);

            $count = $applyenModel->count();
            $Page = new \Think\Page($count, $cut);
            $show = $Page->show();
            $this->assign("page", $show);

            $this->display();  
    }
     public function deleteen() {
        //全部删除
        $id = $_GET['applyenId'];
        if(is_array($id)){
            foreach($id as $value){
                D("applyen")->delete($value);
            }  
           // $this->success("批量删除成功！",U("listsen?p=1"));
            $this->redirect('lists?p=1',0);
        } 
        //单个删除
        else{
            $applyenModel = D("applyen");
            if($applyenModel->where("id=$id")->delete()){
               // $this->success("删除成功",U("Applyen/listsen?p=1"));
                $this->redirect('lists?p=1',0);
            }
            else{
                $this->error($applyenModel->geterror());
            }           
        }      
    }
}
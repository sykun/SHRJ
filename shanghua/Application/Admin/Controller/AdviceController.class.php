<?php
namespace Admin\Controller;
use Think\Controller;
class AdviceController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
    	$adviceModel = D("advice");
	    $advice = $adviceModel->select();
	    $this->assign('advice',$advice);
		$this->display();  
    }
    // public function delete(){
	   //      $id = $_GET['adviceId'];
	   //      if(is_array($id))
	   //      {
	   //          foreach($id as $value)
	   //          {
	   //              M("advice")->delete($value);
	   //          }  
	   //          $this->success("删除成功！",U('Advice/lists'));
	   //      } 
	   //      else{
	   //          if(M("advice")->delete($id)){
	   //              $this->success("删除成功！",U('Advice/lists'));
	   //          }
	   //      }       
    // 	}

    public function delete() {
          //全部删除
            $id = $_GET['adviceId'];
            if(is_array($id)){
                foreach($id as $value){
                    D("advice")->delete($value);
                }  
                $this->success("批量删除成功！",U("lists"));
            } 
        //单个删除
        else{
            $adviceModel = D("advice");
             if($adviceModel->where("id=$id")->delete())
                    {
                        $this->success("删除成功",U("Advice/lists"));
                    }
                else
                    {
                        $this->error($adviceModel->geterror());
                    }
           
        }      

}

 
}
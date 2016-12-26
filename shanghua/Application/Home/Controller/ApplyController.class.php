<?php
namespace Home\Controller;
use Think\Controller;
class ApplyController extends Controller {
    public function apply(){
        if(IS_POST){
            
            $this->success("提交成功",U("Apply/apply"));
        }else{
    	    $this->display();
    }
    }
    public function applye(){

        if(IS_POST){
            
            $this->success("提交成功",U("Apply/applye"));
        }else{
    	    $this->display();
    }
    }
}

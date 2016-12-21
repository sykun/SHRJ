<?php
namespace Home\Controller;
use Think\Controller;
class AdviceController extends Controller {
    public function suggest(){
    	if(IS_POST){
            
            $this->success("提交成功",U("Advice/suggest"));
        }else{
    	    $this->display();
    }
    }
    public function suggeste(){

        if(IS_POST){
            
            $this->success("提交成功",U("Advice/suggeste"));
        }else{
            $this->display();
    }
    }
}

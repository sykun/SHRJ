<?php
namespace Admin\Controller;
use Think\Controller;
class AdviceController extends Controller {
     public function lists(){
    	$adviceModel = D("advice");
	    $advice = $adviceModel->select();
	    $this->assign('advice',$advice);
		$this->display();  
    }
    public function delete(){
	        $id = $_GET['adviceId'];
	        if(is_array($id))
	        {
	            foreach($id as $value)
	            {
	                M("advice")->delete($value);
	            }  
	            $this->success("删除成功！",U('Advice/lists'));
	        } 
	        else{
	            if(M("advice")->delete($id)){
	                $this->success("删除成功！",U('Advice/lists'));
	            }
	        }       
    	}
    
}
<?php
namespace Admin\Controller;
use Think\Controller;
class JobController extends Controller {
     public function lists(){
    	$jobModel = D("job");
		$job = $jobModel->select();
		$this->assign('job',$job);
		$this->display();  
    }
    public function add(){

    	$this->display();
    }
    public function doAdd(){
	        if(!IS_POST){
	            exit("bad request");
	        }
	        $jobModel = D("job");
	        if(!$jobModel->create()){
	            $this->error($jobModel->getError());          
	        }
	        if($jobModel->add()){
	            $this->success("添加成功",U("lists"));
	        }
	        else{
	            $this->error("添加失败");
	        }
    	}
    public function delete(){
	        $id = $_GET['jobId'];
	        if(is_array($id))
	        {
	            foreach($id as $value)
	            {
	                M("job")->delete($value);
	            }  
	            $this->success("删除成功！",U('Job/lists'));
	        } 
	        else{
	            if(M("job")->delete($id)){
	                $this->success("删除成功！",U('Job/lists'));
	            }
	        }       
    	}
    public function edit() {
	        $id = intval($_GET['id']);
	        if ($id == '') {
	            exit("error param");
	        }
	        $job = M("job")->find($id);
	        $this->assign("job", $job);
	        $this->display();
    	}

   		 public function doEdit() {
	        if (!IS_POST) {
	            exit("error param");
	        }
	        $jobModel = D("job");
	        if ($jobModel->create() && $jobModel->save()) {
	            $this->success("修改成功!", U('Job/lists'));
	        }
	        else {
	            // $this->error($jobModel->getError());
	        }
    	}
    
}
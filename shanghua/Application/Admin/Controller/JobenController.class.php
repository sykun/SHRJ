<?php
namespace Admin\Controller;
use Think\Controller;
<<<<<<< HEAD
class JobenController extends Controller {
=======
class JobController extends Controller {
>>>>>>> origin/master
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
<<<<<<< HEAD
    	$jobenModel = D("joben");
		$joben = $jobenModel->select();
		$this->assign('joben',$joben);
=======
    	$jobModel = D("job");
		$job = $jobModel->select();
		$this->assign('job',$job);
>>>>>>> origin/master
		$this->display();  
    }
    public function get_time(){
    	return date("Y-m-d");
    }
    public function add(){
    	$time = $this->get_time();
    	$this->assign('time',$time);
    	$this->display();
    }
    public function doAdd(){
	        if(!IS_POST){
	            exit("bad request");
	        }
<<<<<<< HEAD
	        $jobenModel = D("joben");
	        if(!$jobenModel->create()){
	            $this->error($jobenModel->getError());          
	        }
	        if($jobenModel->add()){
=======
	        $jobModel = D("job");
	        if(!$jobModel->create()){
	            $this->error($jobModel->getError());          
	        }
	        if($jobModel->add()){
>>>>>>> origin/master
	            $this->success("添加成功",U("lists"));
	        }
	        else{
	            $this->error("添加失败");
	        }
    	}
    public function delete() {
        //全部删除
<<<<<<< HEAD
        $id = $_GET['jobenId'];
=======
        $id = $_GET['jobId'];
>>>>>>> origin/master
        if(is_array($id)){
            foreach($id as $value){
                D("job")->delete($value);
            }  
            $this->success("批量删除成功！",U("lists"));
        } 
        //单个删除
        else{
<<<<<<< HEAD
            $jobenModel = D("joben");
            if($jobenModel->where("id=$id")->delete()){
                $this->success("删除成功",U("Job/lists"));
            }
            else{
                $this->error($jobenModel->geterror());
=======
            $jobModel = D("job");
            if($jobModel->where("id=$id")->delete()){
                $this->success("删除成功",U("Job/lists"));
            }
            else{
                $this->error($jobModel->geterror());
>>>>>>> origin/master
            }       
        }      
    }
    public function edit() {

	        $id = intval($_GET['id']);
	        if ($id == '') {
	            exit("error param");
	        }
<<<<<<< HEAD
	        $joben = M("joben")->find($id);
	        $this->assign("joben", $joben);
=======
	        $job = M("job")->find($id);
	        $this->assign("job", $job);
>>>>>>> origin/master
	        $time = $this->get_time();
    		$this->assign('time',$time);
	        $this->display();
    	}

   		 public function doEdit() {
	        if (!IS_POST) {
	            exit("error param");
	        }
<<<<<<< HEAD
	        $jobenModel = D("joben");
	        if ($jobenModel->create() && $jobenModel->save()) {
	            $this->success("修改成功!", U('Joben/lists'));
=======
	        $jobModel = D("job");
	        if ($jobModel->create() && $jobModel->save()) {
	            $this->success("修改成功!", U('Job/lists'));
>>>>>>> origin/master
	        }
	        else {
	            // $this->error($jobModel->getError());
	        }
    	}
    
}
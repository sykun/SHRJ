<?php
namespace Home\Controller;
use Think\Controller;
class JobController extends Controller {
    public function detail1(){
        $jobModel=M('job');
        $data=$jobModel->select();
        $this->assign("job",$data);
        $this->display();
    }
    public function detail1e(){
        $jobenModel=M('joben');
        $data=$jobenModel->select();
        $this->assign("joben",$data);
        $this->display();
    }
    public function detail2(){
        $jobModel=M('job');
        $data=$jobModel->select();
        $this->assign("job",$data);
        $this->display();
    }
    public function detail2e(){
        $jobenModel=M('joben');
        $data=$jobenModel->select();
        $this->assign("joben",$data);
        $this->display();
    }
    public function detail3(){
        $jobModel=M('job');
        $data=$jobModel->select();
        $this->assign("job",$data);
        $this->display();
    }
    public function detail3e(){
        $jobenModel=M('joben');
        $data=$jobenModel->select();
        $this->assign("joben",$data);
        $this->display();
    }
    public function detail4(){
        $jobModel=M('job');
        $data=$jobModel->select();
        $this->assign("job",$data);
        $this->display();
    }
    public function detail4e(){
        $jobenModel=M('joben');
        $data=$jobenModel->select();
        $this->assign("joben",$data);
        $this->display();
    }
    public function detail5(){
        $jobModel=M('job');
        $data=$jobModel->select();
        $this->assign("job",$data);
        $this->display();
    }
    public function detail5e(){
        $jobenModel=M('joben');
        $data=$jobenModel->select();
        $this->assign("joben",$data);
        $this->display();
    }
    public function join1(){
        $jobModel=M('job');
        $data=$jobModel->select();
        $this->assign("job",$data);
        $this->display();
    }
    public function join1e(){
        $jobenModel=M('joben');
        $data=$jobenModel->select();
        $this->assign("joben",$data);
        $this->display();
    }
    public function join2(){
        $jobModel=M('job');
        $data=$jobModel->select();
        $this->assign("job",$data);
        $this->display();
    }
    public function join2e(){
        $jobenModel=M('joben');
        $data=$jobenModel->select();
        $this->assign("joben",$data);
        $this->display();
    }
}

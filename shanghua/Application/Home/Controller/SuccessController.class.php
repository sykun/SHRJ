<?php
namespace Home\Controller;
use Think\Controller;
class SuccessController extends Controller {
   
    public function gl(){
        $caseModel=M('case');
        $data=$caseModel->select();
        $this->assign("case",$data);
        $this->display();
    }
    public function gle(){
$caseenModel=M('caseen');
        $data=$caseenModel->select();
        $this->assign("caseen",$data);
        $this->display();
    }
    public function VE(){
        $caseModel=M('case');
        $data=$caseModel->select();
        $this->assign("case",$data);
        $this->display();
    }
    public function VEe(){
$caseenModel=M('caseen');
        $data=$caseenModel->select();
        $this->assign("caseen",$data);
        $this->display();
    }
    
}

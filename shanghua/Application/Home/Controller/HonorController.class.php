<?php
namespace Home\Controller;
use Think\Controller;
class HonorController extends Controller {
    public function jianjie(){

    	$this->display();
    }
    public function jianjiee(){

        $this->display();
    }
    public function rongyu(){
        $honorModel=M('honor');
        $data=$honorModel->select();
        $this->assign("honor",$data);
        $this->display();
    }
    public function rongyue(){
        $honorenModel=M('honoren');
        $data=$honorenModel->select();
        $this->assign("honoren",$data);
        $this->display();
    }
    public function wenhua(){

        $this->display();
    }
    public function wenhuae(){

        $this->display();
    }
}

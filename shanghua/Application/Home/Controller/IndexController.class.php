<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $newsModel=M('news');
        $data=$newsModel->select();
        $this->assign("news",$data);
    	
    	
    	$productModel=M('product');
        $data=$productModel->select();
        $this->assign("product",$data);
    	$this->display();
    }
    public function indexe(){
        $newsenModel=M('newsen');
        $data=$newsenModel->select();
        $this->assign("newsen",$data);
        
    	$productenModel=M('producten');
        $data=$productenModel->select();
        $this->assign("producten",$data);
        $this->display();
    }
}

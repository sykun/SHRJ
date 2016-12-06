<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

    	//1,获取酒店分类信息
    	$categoryModel=M('categorys');
    	$data=$categoryModel->select();
    	$this->assign('category',$data);
    	
    	$this->display();
    }
    public function test(){
    	$this->show('我在test方法里','utf-8');
    }
}

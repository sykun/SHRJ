<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->display();  
		//测试数据看配置
		// $categoryModel=M('category');
		// $categorys=$categoryModel->select();
		// dump($categorys);
    }

}
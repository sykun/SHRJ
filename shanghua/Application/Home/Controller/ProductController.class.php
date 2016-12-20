<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function fengli(){
        $productModel=M('product');
        $data=$productModel->select();
        $this->assign("product",$data);
        $this->display();
    }
    public function fenglie(){
        $productenModel=M('producten');
        $data=$productenModel->select();
        $this->assign("producten",$data);
        $this->display();
    }
    public function gongyi(){
        $productModel=M('product');
        $data=$productModel->select();
        $this->assign("product",$data);
    	$this->display();
    }
    public function gongyie(){
        $productenModel=M('producten');
        $data=$productenModel->select();
        $this->assign("producten",$data);
        $this->display();
    }
    public function intergrade(){
        $productModel=M('product');
        $data=$productModel->select();
        $this->assign("product",$data);
        $this->display();
    }
    public function intergradee(){
        $productenModel=M('producten');
        $data=$productenModel->select();
        $this->assign("producten",$data);
        $this->display();
    }
    public function lvse(){
        $productModel=M('product');
        $data=$productModel->select();
        $this->assign("product",$data);
        $this->display();
    }
    public function lvsee(){
        $productenModel=M('producten');
        $data=$productenModel->select();
        $this->assign("producten",$data);
        $this->display();
    }
    public function operation(){
        $productModel=M('product');
        $data=$productModel->select();
        $this->assign("product",$data);
        $this->display();
    }
    public function operatione(){
        $productenModel=M('producten');
        $data=$productenModel->select();
        $this->assign("producten",$data);
        $this->display();
    }
    public function product(){
        $productModel=M('product');
        $data=$productModel->select();
        $this->assign("product",$data);
        $this->display();
    }
    public function producte(){
        $productenModel=M('producten');
        $data=$productenModel->select();
        $this->assign("producten",$data);
        $this->display();
    }
    public function zhushou(){
        $productModel=M('product');
        $data=$productModel->select();
        $this->assign("product",$data);
        $this->display();
    }
    public function zhushoue(){
        $productenModel=M('producten');
        $data=$productenModel->select();
        $this->assign("producten",$data);
        $this->display();
    }
    public function zonghe(){
        $productModel=M('product');
        $data=$productModel->select();
        $this->assign("product",$data);
        $this->display();
    }
    public function zonghee(){
        $productenModel=M('producten');
        $data=$productenModel->select();
        $this->assign("producten",$data);
        $this->display();
    }
}

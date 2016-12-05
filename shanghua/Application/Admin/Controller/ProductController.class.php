<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
     public function lists(){
	    	$productModel = D("product");
		    $product = $productModel->select();
		    $this->assign('product',$product);
			$this->display();  
    }
    public function add(){

    		$this->display();
    }
    public function doAdd(){
	        if(!IS_POST){
	            exit("bad request");
	        }
	        $productModel = D("product");
	        if(!$productModel->create()){
	            $this->error($productModel->getError());          
	        }
	        if($productModel->add()){
	            $this->success("添加成功",U("lists"));
	        }
	        else{
	            $this->error("添加失败");
	        }
    	}
    public function delete(){
	        $id = $_GET['productId'];
	        if(is_array($id))
	        {
	            foreach($id as $value)
	            {
	                M("product")->delete($value);
	            }  
	            $this->success("删除成功！",U('Product/lists'));
	        } 
	        else{
	            if(M("product")->delete($id)){
	                $this->success("删除成功！",U('Product/lists'));
	            }
	        }       
    	}
    public function edit() {
	        $id = intval($_GET['id']);
	        if ($id == '') {
	            exit("error param");
	        }
	        $product = M("product")->find($id);
	        $this->assign("product", $product);
	        $this->display();
    	}

   		 public function doEdit() {
	        if (!IS_POST) {
	            exit("error param");
	        }
	        $productModel = D("product");
	        if ($productModel->create() && $productModel->save()) {
	            $this->success("修改成功!", U('Product/lists'));
	        }
	        else {
	            // $this->error($productModel->getError());
	        }
    	}
    
}
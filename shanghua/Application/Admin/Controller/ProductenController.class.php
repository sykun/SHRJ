<?php
namespace Admin\Controller;
use Think\Controller;
class ProductenController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
	    	$productModel = D("producten");
		    $producten = $productModel->select();
		    $this->assign('producten',$producten);
			$this->display();  
    }
    public function add(){

    		$this->display();
    }
    public function doAdd(){

    		$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
		    $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
		    // 上传文件 
		    $info   =   $upload->upload();


		    if(!$info) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }else{// 上传成功
		        //$this->success('上传成功！');
		       $productModel = M('producten');
		    	$data =$productModel ->create();
		    	//$productModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($productModel->add($data)){
		    		$this->success('数据添加成功','listsen');

		    }else{
		    	$this->showError('数据添加失败');
		    	}
		    }
    	}
    public function delete() {
        //全部删除
        $id = $_GET['productenId'];
        if(is_array($id)){
            foreach($id as $value){
                D("producten")->delete($value);
            }  
            $this->success("批量删除成功！",U("listsen"));
        } 
        //单个删除
        else{
            $productModel = D("producten");
            if($productModel->where("id=$id")->delete()){
                $this->success("删除成功",U("Producten/listsen"));
            }
            else{
                $this->error($productModel->geterror());
            } 
        }      
    }
    public function edit() {
	        
			$id=I('id');
			//获取数据
			$productModel = M('producten');
			$data =$productModel ->find($id);
			//分配数据
			$this->assign('producten',$data);
			$this->display();
    	}

   	public function doEdit(){
			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
		    $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
		    // 上传文件 
		    $info   =   $upload->upload();
		    if(!$info) {// 上传错误提示错误信息
		        $this->error($upload->getError());
		    }else{// 上传成功
		        //$this->success('上传成功！');
		       $productModel = M('producten');
		    	$data =$productModel ->create();
		    	//$productModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($productModel->save($data)){
		    		$this->success('数据修改成功','listsen');

		    }else{
		    	$this->showError('数据修改失败');
		    	}
		    }

		 }
	}
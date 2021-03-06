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
     public function listsen(){
	    	$productenModel = D("producten");
	        $cut=8;
	        $currentPage = I("get.p");
	        $offset = ($currentPage-1) * $cut;
	        $producten=$productenModel->where()->limit("$offset,$cut")->select();
	        $this->assign("producten",$producten);
	        $count = $productenModel->count();
	        $Page = new \Think\Page($count, $cut);
	        $show = $Page->show();
	        $this->assign("page", $show);
	        $this->display();
    }
    public function adden(){

    		$this->display();
    }
    public function doAdden(){

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
		       $productenModel = M('producten');
		    	$data =$productenModel ->create();
		    	//$productModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($productenModel->add($data)){
		    		//$this->success('数据添加成功','listsen?p=1');
		    		$this->redirect('listsen?p=1',0);

		    }else{
		    	$this->showError('数据添加失败');
		    	}
		    }
    	}
    public function deleteen() {
        //全部删除
        $id = $_GET['productenId'];
        if(is_array($id)){
            foreach($id as $value){
                D("producten")->delete($value);
            }  
           // $this->success("批量删除成功！",U("listsen?p=1"));
           $this->redirect('listsen?p=1',0);
        } 
        //单个删除
        else{
            $productenModel = D("producten");
            if($productenModel->where("id=$id")->delete()){
               // $this->success("删除成功",U("Producten/listsen?p=1"));
            	 $this->redirect('listsen?p=1',0);
            }
            else{
                $this->error($productenModel->geterror());
            } 
        }      
    }
    public function editen() {
	        
			$id=I('id');
			//获取数据
			$productenModel = M('producten');
			$data =$productenModel ->find($id);
			//分配数据
			$this->assign('producten',$data);
			$this->display();
    	}

   	public function doEditen(){
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
		       $productenModel = M('producten');
		    	$data =$productenModel ->create();
		    	//$productModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($productenModel->save($data)){
		    		//$this->success('数据修改成功','listsen?p=1');
		    		 $this->redirect('listsen?p=1',0);

		    }else{
		    	$this->showError('数据修改失败');
		    	}
		    }

		 }
	}
<?php
namespace Admin\Controller;
use Think\Controller;
class HonorenController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function listsen(){
    	$honorenModel = D("honoren");
        $cut=8;
        $currentPage = I("get.p");
        $offset = ($currentPage-1) * $cut;
        $honoren=$honorenModel->where()->limit("$offset,$cut")->select();
        $this->assign("honoren",$honoren);
        $count = $honorenModel->count();
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
		       $honorenModel = M('honoren');
		    	$data =$honorenModel ->create();
		    	//$honorModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($honorenModel->add($data)){
		    		//$this->success('数据添加成功','listsen?p=1');
		    		 $this->redirect('listsen?p=1',0);

		    }else{
		    	$this->showError('数据添加失败');
		    	}
		    }
    	}
    	public function deleteen() {
            //全部删除
            $id = $_GET['honorenId'];
            if(is_array($id)){
                foreach($id as $value){
                    D("honoren")->delete($value);
                }  
               // $this->success("批量删除成功！",U("listsen?p=1"));
                 $this->redirect('listsen?p=1',0);
            } 
        	//单个删除
        	else{
            	$honorenModel = D("honoren");
             	if($honorenModel->where("id=$id")->delete()){
                   // $this->success("删除成功",U("Honoren/listsen?p=1"));
             		 $this->redirect('listsen?p=1',0);
                }
                else{
                    $this->error($honorenModel->geterror());
                }   
            }      
        }
    	public function editen() {
	        
			$id=I('id');
			//获取数据
			$honorenModel = M('honoren');
			$data =$honorenModel ->find($id);
			//分配数据
			$this->assign('honoren',$data);
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
		       $honorenModel = M('honoren');
		    	$data =$honorenModel ->create();
		    	//$honorModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($honorenModel->save($data)){
//this->success('数据修改成功','listsen?p=1');
		    		 $this->redirect('listsen?p=1',0);

		    }else{
		    	$this->showError('数据修改失败');
		    	}
		    }

		 }
	}
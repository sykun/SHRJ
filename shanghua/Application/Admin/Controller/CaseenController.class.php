<?php
namespace Admin\Controller;
use Think\Controller;
class CaseenController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
    	$caseenModel = D("caseen");
		$caseen = $caseenModel->select();
		$this->assign('caseen',$case);
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
		       $caseenModel = M('caseen');
		    	$data =$caseenModel ->create();
		    	//$caseModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($caseenModel->add($data)){
		    		$this->success('数据添加成功','listsen');

		    }else{
		    	$this->showError('数据添加失败');
		    	}
		    }
    	}
    public function delete() {
          //全部删除
            $id = $_GET['caseenId'];
            if(is_array($id)){
                foreach($id as $value){
                    D("caseen")->delete($value);
                }  
                $this->success("批量删除成功！",U("listsen"));
            } 
        //单个删除
        else{
            $caseenModel = D("caseen");
            if($caseenModel->where("id=$id")->delete()){
                    $this->success("删除成功",U("caseen/listsen"));
            }
            else{
                $this->error($caseenModel->geterror());
            } 
        }      
    }
    public function edit() {
	        
			$id=I('id');
			//获取数据
			$caseModel = M('caseen');
			$data =$caseenModel ->find($id);
			//分配数据
			$this->assign('caseen',$data);
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
		       $caseenModel = M('caseen');
		    	$data =$caseenModel ->create();
		    	//$caseModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($caseenModel->save($data)){
		    		$this->success('数据修改成功','listsen');

		    }else{
		    	$this->showError('数据修改失败');
		    	}
		    }

		 }
	}
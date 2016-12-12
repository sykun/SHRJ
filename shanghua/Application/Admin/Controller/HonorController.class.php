<?php
namespace Admin\Controller;
use Think\Controller;
class HonorController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
    	$honorModel = D("honor");
		$honor = $honorModel->select();
		$this->assign('honor',$honor);
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
		       $honorModel = M('honor');
		    	$data =$honorModel ->create();
		    	//$honorModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($honorModel->add($data)){
		    		$this->success('数据添加成功','lists');

		    }else{
		    	$this->showError('数据添加失败');
		    	}
		    }
    	}
    
    	public function delete() {
          //全部删除
            $id = $_GET['honorId'];
            if(is_array($id)){
                foreach($id as $value){
                    D("honor")->delete($value);
                }  
                $this->success("批量删除成功！",U("lists"));
            } 
        //单个删除
        else{
            $honorModel = D("honor");
             if($honorModel->where("id=$id")->delete())
                    {
                        $this->success("删除成功",U("Honor/lists"));
                    }
                else
                    {
                        $this->error($honorModel->geterror());
                    }
           
        }      

}

 
    	public function edit() {
	        
			$id=I('id');
			//获取数据
			$honorModel = M('honor');
			$data =$honorModel ->find($id);
			//分配数据
			$this->assign('honor',$data);
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
		       $honorModel = M('honor');
		    	$data =$honorModel ->create();
		    	//$honorModel->add($data);
		    	
		        $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
		    	if($honorModel->save($data)){
		    		$this->success('数据修改成功','lists');

		    }else{
		    	$this->showError('数据修改失败');
		    	}
		    }

		 }
	}
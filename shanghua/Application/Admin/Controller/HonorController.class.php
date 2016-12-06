<?php
namespace Admin\Controller;
use Think\Controller;
class HonorController extends Controller {
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
	        if(!IS_POST){
	            exit("bad request");
	        }
	        $honorModel = D("honor");
	        if(!$honorModel->create()){
	            $this->error($honorModel->getError());          
	        }
	        if($honorModel->add()){
	            $this->success("添加成功",U("lists"));
	        }
	        else{
	            $this->error("添加失败");
	        }
    	}
    public function delete(){
	        $id = $_GET['honorId'];
	        if(is_array($id))
	        {
	            foreach($id as $value)
	            {
	                M("honor")->delete($value);
	            }  
	            $this->success("删除成功！",U('Honor/lists'));
	        } 
	        else{
	            if(M("honor")->delete($id)){
	                $this->success("删除成功！",U('Honor/lists'));
	            }
	        }       
    	}
    	public function edit() {
	        $id = intval($_GET['id']);
	        if ($id == '') {
	            exit("error param");
	        }
	        $honor = M("honor")->find($id);
	        $this->assign("honor", $honor);
	        $this->display();
    	}

   		 public function doEdit() {
	        if (!IS_POST) {
	            exit("error param");
	        }
	        $honorModel = D("honor");
	        if ($honorModel->create() && $honorModel->save()) {
	            $this->success("修改成功!", U('Honor/lists'));
	        }
	        else {
	            // $this->error($honorModel->getError());
	        }
    	}
    
}
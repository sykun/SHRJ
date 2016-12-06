<?php
namespace Admin\Controller;
use Think\Controller;
class CaseController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function lists(){
    	$caseModel = D("case");
		$case = $caseModel->select();
		$this->assign('case',$case);
		$this->display();  
    }
    public function add(){

    	$this->display();
    }
    public function doAdd(){
	        if(!IS_POST){
	            exit("bad request");
	        }
	        $caseModel = D("case");
	        if(!$caseModel->create()){
	            $this->error($caseModel->getError());          
	        }
	        if($caseModel->add()){
	            $this->success("添加成功",U("lists"));
	        }
	        else{
	            $this->error("添加失败");
	        }
    	}
    public function delete(){
	        $id = $_GET['caseId'];
	        if(is_array($id))
	        {
	            foreach($id as $value)
	            {
	                M("case")->delete($value);
	            }  
	            $this->success("删除成功！",U('Case/lists'));
	        } 
	        else{
	            if(M("case")->delete($id)){
	                $this->success("删除成功！",U('Case/lists'));
	            }
	        }       
    	}
    public function edit() {
	        $id = intval($_GET['id']);
	        if ($id == '') {
	            exit("error param");
	        }
	        $case = M("case")->find($id);
	        $this->assign("case", $case);
	        $this->display();
    	}

   		 public function doEdit() {
	        if (!IS_POST) {
	            exit("error param");
	        }
	        $caseModel = D("case");
	        if ($caseModel->create() && $caseModel->save()) {
	            $this->success("修改成功!", U('Case/lists'));
	        }
	        else {
	            // $this->error($productModel->getError());
	        }
    	}
}
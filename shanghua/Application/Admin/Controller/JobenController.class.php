<?php
namespace Admin\Controller;
use Think\Controller;
class JobenController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
     public function listsen(){
    	$jobenModel = D("joben");
        $cut=8;
        $currentPage = I("get.p");
        $offset = ($currentPage-1) * $cut;
        $joben=$jobenModel->where()->limit("$offset,$cut")->select();
        $this->assign("joben",$joben);
        $count = $jobenModel->count();
        $Page = new \Think\Page($count, $cut);
        $show = $Page->show();
        $this->assign("page", $show);
        $this->display(); 
    }
    public function get_time(){
    	return date("Y-m-d");
    }
    public function adden(){
    	$time = $this->get_time();
    	$this->assign('time',$time);
    	$this->display();
    }
    public function doAdden(){
	        if(!IS_POST){
	            exit("bad request");
	        }
	        $jobenModel = D("joben");
	        if(!$jobenModel->create()){
	            $this->error($jobenModel->getError());          
	        }
	        if($jobenModel->add()){
	           // $this->success("添加成功",U("listsen?p=1"));
                 $this->redirect('listsen?p=1',0);
	        }
	        else{
	            $this->error("添加失败");
	        }
    	}
    public function deleteen() {
        //全部删除
        $id = $_GET['jobenId'];
        if(is_array($id)){
            foreach($id as $value){
                D("joben")->delete($value);
            }  
           // $this->success("批量删除成功！",U("listsen?p=1"));
             $this->redirect('listsen?p=1',0);
        } 
        //单个删除
        else{
            $jobenModel = D("joben");
            if($jobenModel->where("id=$id")->delete()){
               // $this->success("删除成功",U("Joben/listsen?p=1"));
               $this->redirect('listsen?p=1',0);
            }
            else{
                $this->error($jobenModel->geterror());
            }       
        }      
    }
    public function editen() {

	        $id = intval($_GET['id']);
	        if ($id == '') {
	            exit("error param");
	        }
	        $joben = M("joben")->find($id);
	        $this->assign("joben", $joben);
	        $time = $this->get_time();
    		$this->assign('time',$time);
	        $this->display();
    	}

   		 public function doEditen() {
	        if (!IS_POST) {
	            exit("error param");
	        }
	        $jobenModel = D("joben");
	        if ($jobenModel->create() && $jobenModel->save()) {
	          //  $this->success("修改成功!", U('Joben/listsen?p=1'));
                 $this->redirect('listsen?p=1',0);
	        }
	        else {
	             $this->error($jobModel->getError());
	        }
    	}
    
}
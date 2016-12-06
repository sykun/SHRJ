<?php
namespace Admin\Controller;
use Think\Controller;
class UsersController extends Controller {

     public function lists(){
    	$usersModel = D("adminUser");
    	$users = $usersModel->select();
    	$this->assign("users",$users);

		$this->display();  
    }
    public function add(){

    	$this->display();
    }
    public function doAdd(){
    	if(!IS_POST){
    		exit("bad request");
    	}
    	$usersModel = D("adminUser");
    	if(!$usersModel->create()){
    		$this->error($usersModel->getError());
    	}
    	if($usersModel->add()){
    		$this->success("新用户添加成功",U("lists"));
    	}else{
    		$this->error("新用户添加失败");
    	}
    }
    public function delete(){
        $id = $_GET['usersId'];
        if(is_array($id))
        {
            foreach($id as $value)
            {
                M("adminUser")->delete($value);
            }  
            $this->success("删除成功！",U('Users/lists'));
        } 
        else{
            if(M("adminUser")->delete($id)){
                $this->success("删除成功！",U('Users/lists'));
            }
        }       
    }
}
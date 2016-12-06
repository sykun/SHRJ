<?php
namespace Admin\Controller;
use Think\Controller;
class UsersController extends Controller {
    public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }

     public function lists(){
    	$usersModel = D("adminUser");
    	$users = $usersModel->select();
    	$this->assign("users",$users);

		$this->display();  
    }
    public function get_client_time(){
        return date("Y-m-d");
    }
    public function add(){
        $time = $this->get_client_time();
        $this->assign('time',$time);
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
    public function edit() {
        $username = I("Session.username");
        $user = M("AdminUser")->where("username='$username'")->find();
        $this->assign("users", $user);
        $time = $this->get_client_time();
        $this->assign('time',$time);
        $this->display();
    }
    public function doEdit() {
        if (!IS_POST) {
            exit("error param");
        }
        $usersModel = D("adminUser");
        if ($usersModel->create() && $usersModel->save()) {
            $this->success("修改成功!", U('Users/lists'));
        }
        else {
            // $this->error($usersModel->getError());
        }
    }
    public function pwd() {
       $username = I("Session.username");
        $user = M("AdminUser")->where("username='$username'")->find();
        $this->assign("users", $user);
        $this->display();
    }

    public function doPwd() {
        if (!IS_POST) {
            exit("error param");
        }
        $usersModel = D("adminUser");
        if ($usersModel->create() && $usersModel->save()) {
            $this->success("修改成功!", U('Users/lists'));
        }
        else {
            // $this->error($usersModel->getError());
        }
    }
    public function manage() {
        $id = intval($_GET['data']);
        if ($id == '') {
            exit("error");
        }
        $users = M("adminUser")->find($id);
        $this->assign("users", $users);
        $time = $this->get_client_time();
        $this->assign('time',$time);
        $this->display();
    }

    public function doManage() {
        if (!IS_POST) {
            exit("error param");
        }
        $usersModel = D("adminUser");
        if ($usersModel->create() && $usersModel->save()) {
            $this->success("修改成功!", U('Users/lists'));
        }
        else {
            // $this->error($usersModel->getError());
        }
    }
}
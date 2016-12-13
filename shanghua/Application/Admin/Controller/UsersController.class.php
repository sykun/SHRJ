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
        $usersModel = D("adminUser"); // 实例化User对象
        $validate = array(
            array('username','require','用户名不能为空！'),
            array('username','','用户名已经存在！',0,'unique',1),
            array('truename','require','真实姓名不能为空！'),
            array('phonenum','require','手机号不能为空！'),
            array('phonenum','11','电话长度不符！',3,'length'),
            array('email', 'email', '邮箱格式不正确！'),
            array('repassword','password','两次输入密码不一致',0,'confirm'), // 仅仅需要进行验证码的验证
        );
        $usersModel-> setProperty("_validate",$validate);
        $result = $usersModel->create();
        if (!$result){
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($usersModel->getError(),U("add"));
        }else{
            $usersModel->add();
            // 验证通过 可以进行其他数据操作
            $this->success("新用户添加成功",U("lists"));
        }
    }
    public function delete() {
        //全部删除
        $id = $_GET['usersId'];
        if(is_array($id)){
            foreach($id as $value){
                D("adminUser")->delete($value);
            }  
            $this->success("批量删除成功！",U("lists"));
        } 
        //单个删除
        else{
            $userModel = D("adminUser");
            if($userModel->where("id=$id")->delete()){
                 $this->success("删除成功",U("Users/lists"));
            }
            else{
                $this->error($userModel->geterror());
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
    public function pass() {
        $condition['username'] = I("session.username");
        $user = M("AdminUser")->where($condition)->find();
        $this->assign("users", $user);
        $this->display();
    }

    public function doPwd() {
        if (!IS_POST) {
            exit("error param");
        }

        if(IS_POST){
            $usersModel = M('adminUser'); //admin_user表
            $condition = array(  //查询条件
                "password" => I("post.password")
            );
            $result = $usersModel->where($condition)->count();
            if($result<=0){  //能查到数据，说明用户名密码正确
                $this->error("旧密码不正确",U("pass"));
            }
        }

        $usersModel = D("adminUser");

         $validate = array(
            array('repassword','password','两次输入密码不一致',0,'confirm'), // 仅仅需要进行验证码的验证
        );
        $usersModel-> setProperty("_validate",$validate);
        $result = $usersModel->create();
        if (!$result){
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($usersModel->getError(),U("pass"));
        }

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
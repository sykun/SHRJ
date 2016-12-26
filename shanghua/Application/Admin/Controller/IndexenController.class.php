<?php
namespace Admin\Controller;
use Think\Controller;
class IndexenController extends Controller {
    public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
            // $this->redirect('Admin/login',0);
        }
    }
    public function index(){
        $this->display();
    }
    public function loginouten(){
    	session('username',null);
        //$this->success('退出成功',U("Admin/login"));
         $this->redirect('Admin/login',0);
    }

}
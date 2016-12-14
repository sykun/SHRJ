<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
    public function index(){
        $this->display();
    }
    public function loginout(){
    	session('username',null);
        $this->success('退出成功',U("Admin/login"));
    }

}
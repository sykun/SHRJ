<?php
namespace Admin\Controller;
use Think\Controller;
class NewController extends Controller {
	public function __construct(){
        parent::__construct();
        if(!isLogin()){
            $this->error("请先登录",U("Admin/login"));
        }
    }
	    public function lists(){
	    	$newsModel = D("news");
	        $news = $newsModel->select();
	        $this->assign('news',$news);
			$this->display();  
	    }
	    public function get_time(){
        	return date("Y-m-d");
    }
         public function add(){
         	$time = $this->get_time();
         	$this->assign('time',$time);
            $this->display();
         }
         public function doAdd(){
	        if(!IS_POST){
	            exit("bad request");
	        }
	        $newsModel = D("news");
	        if(!$newsModel->create()){
	            $this->error($newsModel->getError());          
	        }
	        if($newsModel->add()){
	            $this->success("添加成功",U("lists"));
	        }
	        else{
	            $this->error("添加失败");
	        }
    	}
    	public function delete(){
	        $id = $_GET['newsId'];
	        if(is_array($id))
	        {
	            foreach($id as $value)
	            {
	                M("News")->delete($value);
	            }  
	            $this->success("删除成功！",U('New/lists'));
	        } 
	        else{
	            if(M("News")->delete($id)){
	                $this->success("删除成功！",U('New/lists'));
	            }
	        }       
    	}

    	public function edit() {
	        $id = intval($_GET['id']);
	        if ($id == '') {
	            exit("error param");
	        }
	        $news = M("News")->find($id);
	        $this->assign("news", $news);
	        $this->display();
    	}

   		 public function doEdit() {
	        if (!IS_POST) {
	            exit("error param");
	        }
	        $newsModel = D("News");
	        if ($newsModel->create() && $newsModel->save()) {
	            $this->success("修改成功!", U('New/lists'));
	        }
	        else {
	            // $this->error($newsModel->getError());
	        }
    	}
}
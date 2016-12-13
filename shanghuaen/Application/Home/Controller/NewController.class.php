<?php
namespace Home\Controller;
use Think\Controller;
class NewController extends Controller {
    public function company(){
        $newsModel = D("news");
        $cut=3;
        $currentPage = I("get.p");
        $offset = ($currentPage-1) * $cut;
        $news=$newsModel->where()->limit("$offset,$cut")->order('time desc')->select();
        $this->assign("news",$news);

        $count = $newsModel->count();
        $Page = new \Think\Page($count, $cut);
        $show = $Page->show();
        $this->assign("page", $show);

    	$this->display();
    }
    public function content(){
        $id = $_GET['id'];
        $newsModel = M("news");
        $news=$newsModel->find($id);
        // var_dump($news);exit;
        $this->assign("news",$news);

        $article = M('news');
        // 上一篇
        $prevRecord = $article->where('id<'.I('get.id'))->order('id desc')->limit('1')->find();
        $prev = !$prevRecord ? '没有了' : $prevRecord;
        $this->assign('prev', $prev);

        // 下一篇
        $nextRecord = $article->where('id>'.I('get.id'))->order('id asc')->limit('1')->find();
        $next = !$nextRecord ? '没有了' : $nextRecord;
        $this->assign('next', $next);

        $this->display();
    }
    public function companye(){

        $this->display();
    }
    
    public function contente(){

        $this->display();
    }
}

<?php
namespace Home\Controller;
use Think\Controller;
class IndustryController extends Controller {
    public function industry(){
        $industryModel = D("industry");
        $cut=3;
        $currentPage = I("get.p");
        $offset = ($currentPage-1) * $cut;
        $industry=$industryModel->where()->limit("$offset,$cut")->order('time desc')->select();
        $this->assign("industry",$industry);

        $count = $industryModel->count();
        $Page = new \Think\Page($count, $cut);
        $show = $Page->show();
        $this->assign("page", $show);

        $this->display();
    }
    public function content(){
        $id = $_GET['id'];
        $industryModel = M("industry");
        $industry=$industryModel->find($id);
        // var_dump($industry);exit;
        $this->assign("industry",$industry);

        $article = M('industry');
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

    public function industrye(){
        $industryenModel = D("industryen");
        $cut=3;
        $currentPage = I("get.p");
        $offset = ($currentPage-1) * $cut;
        $industryen=$industryenModel->where()->limit("$offset,$cut")->order('time desc')->select();
        $this->assign("industryen",$industryen);

        $count = $industryenModel->count();
        $Page = new \Think\Page($count, $cut);
        $show = $Page->show();
        $this->assign("page", $show);

        $this->display();
    }
    public function contente(){
        $id = $_GET['id'];
        $industryenModel = M("industryen");
        $industryen=$industryenModel->find($id);
        // var_dump($industryen);exit;
        $this->assign("industryen",$industryen);

        $article = M('industryen');
        // 上一篇
        $prevRecord = $article->where('id<'.I('get.id'))->order('id desc')->limit('1')->find();
        $prev = !$prevRecord ? 'None' : $prevRecord;
        $this->assign('prev', $prev);

        // 下一篇
        $nextRecord = $article->where('id>'.I('get.id'))->order('id asc')->limit('1')->find();
        $next = !$nextRecord ? 'None' : $nextRecord;
        $this->assign('next', $next);

        $this->display();
    }
}

<?php
namespace Home\Controller;
use Think\Controller;
class JobController extends Controller {
    public function content(){

        $id = $_GET['id'];
        $jobModel = M("job");
        $job=$jobModel->find($id);
        // var_dump($job);exit;
        $this->assign("job",$job);

        $article = M('job');
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
    public function contente(){
         $id = $_GET['id'];
        $jobenModel = M("joben");
        $joben=$jobenModel->find($id);
        // var_dump($joben);exit;
        $this->assign("joben",$joben);

        $article = M('joben');
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
    public function join(){
        $jobenModel = D("job");
        $cut=3;
        $currentPage = I("get.p");
        $offset = ($currentPage-1) * $cut;
        $job=$jobenModel->where()->limit("$offset,$cut")->order('time desc')->select();
        $this->assign("job",$job);

        $count = $jobenModel->count();
        $Page = new \Think\Page($count, $cut);
        $show = $Page->show();
        $this->assign("page", $show);

        $this->display();
    }
    public function joine(){
        $jobenModel = D("joben");
        $cut=3;
        $currentPage = I("get.p");
        $offset = ($currentPage-1) * $cut;
        $joben=$jobenModel->where()->limit("$offset,$cut")->order('time desc')->select();
        $this->assign("joben",$joben);

        $count = $jobenModel->count();
        $Page = new \Think\Page($count, $cut);
        $show = $Page->show();
        $this->assign("page", $show);

        $this->display();
    }
}

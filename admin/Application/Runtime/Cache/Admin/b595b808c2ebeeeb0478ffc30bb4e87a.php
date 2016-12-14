<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>北京上华软件</title>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/mycss.css"/>
    <link rel="stylesheet" href="/shanghua/Public/admin/css/style.css">
    <script type="text/javascript" src="/shanghua/Public/admin/js/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <!-- <h1 class="topbar-logo none"><a href="#" class="navbar-brand">后台管理</a></h1> -->
            <img src="/shanghua/Public/admin/images/logo.jpg" height="45px;" >
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/shanghua/index.php/Admin/Index/index" class="top-a">后台首页</a></li>
                <li><a href="#" class="top-a">前台首页</a></li>
                <li><a href="#" class="top-a">退出</a></li>
            </ul>
        </div>
    </div>
</div>


    <aside class="accordion" style="float:left">
        <h1><i class="icon-font">&#xe051;</i>账户管理</h1>
        <div class="opened-for-codepen">
            <h2><a href="/shanghua/index.php/Admin/Users/lists"><i class="icon-font">&#xe050;</i>用户管理</a></h2>
            <h2><a href="/shanghua/index.php/Admin/Users/add"><i class="icon-font">&#xe026;</i>添加用户</a></h2>
            <h2><a href="/shanghua/index.php/Admin/Users/pass"><i class="icon-font">&#xe051;</i>修改个人密码</a></h2>
        </div>

        <h1><i class="icon-font">&#xe001;</i>新闻管理</h1>
        <div>
            <h2><a href="/shanghua/index.php/Admin/New/lists"><i class="icon-font">&#xe050;</i>新闻列表</a></h2>
            <h2><a href="/shanghua/index.php/Admin/New/add"><i class="icon-font">&#xe026;</i>添加新闻</a></h2>
        </div>

        <h1><i class="icon-font">&#xe005;</i>行业资讯</h1>
        <div>
            <h2><a href="/shanghua/index.php/Admin/Industry/lists"><i class="icon-font">&#xe050;</i>咨询列表</a></h2>
            <h2><a href="/shanghua/index.php/Admin/Industry/add"><i class="icon-font">&#xe026;</i>新增咨询</a></h2>
        </div>

        <h1><i class="icon-font">&#xe018;</i>产品管理</h1>
        <div>
            <h2><a href="/shanghua/index.php/Admin/Product/lists"><i class="icon-font">&#xe050;</i>产品列表</a></h2>
            <h2><a href="/shanghua/index.php/Admin/Product/add"><i class="icon-font">&#xe026;</i>添加产品</a></h2>
        </div>

        <h1><i class="icon-font">&#xe060;</i>成功案例</h1>
        <div>
            <h2><a href="/shanghua/index.php/Admin/Case/lists"><i class="icon-font">&#xe050;</i>案列列表</a></h2>
            <h2><a href="/shanghua/index.php/Admin/Case/add"><i class="icon-font">&#xe026;</i>新增案列</a></h2>
        </div>

        <h1><i class="icon-font">&#xe002;</i>申请试用</h1>
        <div>
            <h2><a href="/shanghua/index.php/Admin/Apply/lists"><i class="icon-font">&#xe050;</i>申请列表</a></h2>
        </div>

        <h1><i class="icon-font">&#xe051;</i>荣誉管理</h1>
        <div>
            <h2><a href="/shanghua/index.php/Admin/Honor/lists"><i class="icon-font">&#xe050;</i>荣誉列表</a></h2>
            <h2><a href="/shanghua/index.php/Admin/Honor/add"><i class="icon-font">&#xe026;</i>新增荣誉</a></h2>
        </div>

        <h1><i class="icon-font">&#xe003;</i>职位管理</h1>
        <div>
            <h2><a href="/shanghua/index.php/Admin/Job/lists"><i class="icon-font">&#xe050;</i>职位列表</a></h2>
            <h2><a href="/shanghua/index.php/Admin/Job/add"><i class="icon-font">&#xe026;</i>新增职位</a></h2>
        </div>

        <h1><i class="icon-font">&#xe014;</i>咨询管理</h1>
        <div>
            <h2><a href="/shanghua/index.php/Admin/Advice/lists"><i class="icon-font">&#xe050;</i>咨询列表</a></h2>
        </div>
    </aside>

    
<div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font"></i>
                <span>首页</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <ul>
                        <li>
                            <a href="/shanghua/index.php/Admin/New/lists"><i class="icon-font">&#xe048;</i>新闻列表</a>
                            <a href="/shanghua/index.php/Admin/Prodect/lists"><i class="icon-font">&#xe048;</i>产品列表</a>
                            <a href="/shanghua/index.php/Admin/Success/lists"><i class="icon-font">&#xe048;</i>成功案列</a>
                            <a href="/shanghua/index.php/Admin/Apply/lists"><i class="icon-font">&#xe048;</i>申请试用</a>
                        </li>
                        <li class="index-top-lists">
                            <a href="/shanghua/index.php/Admin/Honor/lists"><i class="icon-font">&#xe048;</i>荣誉列表</a>
                            <a href="/shanghua/index.php/Admin/Job/lists"><i class="icon-font">&#xe048;</i>职位列表</a>
                            <a href="/shanghua/index.php/Admin/Advice/lists"><i class="icon-font">&#xe048;</i>咨询列表</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="result-wrap">
            <div class="result-title">
                <h1>客房状况</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">客房总数</label><span class="res-info">3089</span>
                    </li>
                    <li>
                        <label class="res-lab">当前入住</label><span class="res-info">2388</span>
                    </li>
                    <li>
                        <label class="res-lab">客房余量</label><span class="res-info">701</span>
                    </li>
                </ul>
            </div>
        </div> -->
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info"><?php echo PHP_OS;?></span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">Apache/2.2.21(Win64)PHP/5.3.10</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info">2016-12-1</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info">localhost[127.0.0.1]</span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info">127.0.0.1</span>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>


<script src="/shanghua/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/shanghua/Public/admin/js/index.js"></script>
</body>
</html>
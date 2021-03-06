<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>北京上华软件</title>
    <link rel="stylesheet" type="text/css" href="/shanghua3/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua3/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua3/Public/admin/css/mycss.css"/>
    <link rel="stylesheet" href="/shanghua3/Public/admin/css/style.css">
    <script type="text/javascript" src="/shanghua3/Public/admin/js/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <!-- <h1 class="topbar-logo none"><a href="#" class="navbar-brand">后台管理</a></h1> -->
            <img src="/shanghua3/Public/admin/images/logo.jpg" height="45px;" >
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/shanghua3/index.php/Admin/Index/index" class="top-a">后台首页</a></li>
                <li><a href="#" class="top-a">前台首页</a></li>
                <li><a href="#" class="top-a">退出</a></li>
            </ul>
        </div>
    </div>
</div>


<aside class="accordion" style="float:left">
<h1><i class="icon-font">&#xe051;</i>&nbsp;账户管理</h1>
<div class="opened-for-codepen">
<h2><a href="/shanghua3/index.php/Admin/Users/lists"><i class="icon-font">&#xe050;</i>&nbsp;用户管理</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Users/add"><i class="icon-font">&#xe026;</i>&nbsp;添加用户</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Users/pass"><i class="icon-font">&#xe051;</i>&nbsp;修改密码</a></h2>
</div>

<h1><i class="icon-font">&#xe001;</i>&nbsp;新闻管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/New/lists"><i class="icon-font">&#xe050;</i>&nbsp;新闻列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/New/add"><i class="icon-font">&#xe026;</i>&nbsp;添加新闻</a></h2>
</div>

<h1><i class="icon-font">&#xe018;</i>&nbsp;产品管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Product/lists"><i class="icon-font">&#xe050;</i>&nbsp;产品列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Product/add"><i class="icon-font">&#xe026;</i>&nbsp;添加产品</a></h2>
</div>

<h1><i class="icon-font">&#xe060;</i>&nbsp;成功案例</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Case/lists"><i class="icon-font">&#xe050;</i>&nbsp;案列列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Case/add"><i class="icon-font">&#xe026;</i>&nbsp;新增案列</a></h2>
</div>

<h1><i class="icon-font">&#xe002;</i>&nbsp;申请试用</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Apply/lists"><i class="icon-font">&#xe050;</i>&nbsp;申请列表</a></h2>
</div>

<h1><i class="icon-font">&#xe051;</i>&nbsp;荣誉管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Honor/lists"><i class="icon-font">&#xe050;</i>&nbsp;荣誉列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Honor/add"><i class="icon-font">&#xe026;</i>&nbsp;新增荣誉</a></h2>
</div>

<h1><i class="icon-font">&#xe003;</i>&nbsp;职位管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Job/lists"><i class="icon-font">&#xe050;</i>&nbsp;职位列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Job/add"><i class="icon-font">&#xe026;</i>&nbsp;新增职位</a></h2>
</div>

<h1><i class="icon-font">&#xe014;</i>&nbsp;咨询管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Advice/lists"><i class="icon-font">&#xe050;</i>&nbsp;咨询列表</a></h2>
</div>

</div>
</div>
</aside>


<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/shanghua3/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/shanghua3/index.php/Admin/Product/lists">产品管理</a><span class="crumb-step">&gt;</span><span>添加产品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/shanghua3/index.php/Admin/Product/doAdd" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                                <th>产品标题：</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>产品配图：</th>
                                <td><input name="thumb" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            
                            <tr>
                                <th>产品内容描述：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>


<script src="/shanghua3/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/shanghua3/Public/admin/js/index.js"></script>
</body>
</html>
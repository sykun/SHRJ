<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>北京上华软件</title>
    <link rel="stylesheet" type="text/css" href="/shanghua12/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua12/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua12/Public/admin/css/mycss.css"/>
    <link rel="stylesheet" href="/shanghua12/Public/admin/css/style.css">
    <script type="text/javascript" src="/shanghua12/Public/admin/js/modernizr.min.js"></script>
    <script type="text/javascript" src="/shanghua12/Public/admin/js/showdate.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <!-- <h1 class="topbar-logo none"><a href="#" class="navbar-brand">后台管理</a></h1> -->
            <img src="/shanghua12/Public/admin/images/logo.jpg" height="45px;" >
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/shanghua12/index.php/Admin/Index/index" class="top-a">后台首页</a></li>
                <li><a href="#" class="top-a">前台首页</a></li>
                <li><a href="#" class="top-a">退出</a></li>
            </ul>
        </div>
    </div>
</div>


    <aside class="accordion" style="float:left">
        <h1><i class="icon-font">&#xe051;</i>账户管理</h1>
        <div class="opened-for-codepen">
            <h2><a href="/shanghua12/index.php/Admin/Users/lists"><i class="icon-font">&#xe050;</i>用户管理</a></h2>
            <h2><a href="/shanghua12/index.php/Admin/Users/add"><i class="icon-font">&#xe026;</i>添加用户</a></h2>
            <h2><a href="/shanghua12/index.php/Admin/Users/pass"><i class="icon-font">&#xe051;</i>修改个人密码</a></h2>
        </div>

        <h1><i class="icon-font">&#xe001;</i>新闻管理</h1>
        <div>
            <h2><a href="/shanghua12/index.php/Admin/New/lists"><i class="icon-font">&#xe050;</i>新闻列表</a></h2>
            <h2><a href="/shanghua12/index.php/Admin/New/add"><i class="icon-font">&#xe026;</i>添加新闻</a></h2>
        </div>

        <h1><i class="icon-font">&#xe005;</i>行业资讯</h1>
        <div>
            <h2><a href="/shanghua12/index.php/Admin/Industry/lists"><i class="icon-font">&#xe050;</i>咨询列表</a></h2>
            <h2><a href="/shanghua12/index.php/Admin/Industry/add"><i class="icon-font">&#xe026;</i>新增咨询</a></h2>
        </div>

        <h1><i class="icon-font">&#xe018;</i>产品管理</h1>
        <div>
            <h2><a href="/shanghua12/index.php/Admin/Product/lists"><i class="icon-font">&#xe050;</i>产品列表</a></h2>
            <h2><a href="/shanghua12/index.php/Admin/Product/add"><i class="icon-font">&#xe026;</i>添加产品</a></h2>
        </div>

        <h1><i class="icon-font">&#xe060;</i>成功案例</h1>
        <div>
            <h2><a href="/shanghua12/index.php/Admin/Case/lists"><i class="icon-font">&#xe050;</i>案列列表</a></h2>
            <h2><a href="/shanghua12/index.php/Admin/Case/add"><i class="icon-font">&#xe026;</i>新增案列</a></h2>
        </div>

        <h1><i class="icon-font">&#xe002;</i>申请试用</h1>
        <div>
            <h2><a href="/shanghua12/index.php/Admin/Apply/lists"><i class="icon-font">&#xe050;</i>申请列表</a></h2>
        </div>

        <h1><i class="icon-font">&#xe051;</i>荣誉管理</h1>
        <div>
            <h2><a href="/shanghua12/index.php/Admin/Honor/lists"><i class="icon-font">&#xe050;</i>荣誉列表</a></h2>
            <h2><a href="/shanghua12/index.php/Admin/Honor/add"><i class="icon-font">&#xe026;</i>新增荣誉</a></h2>
        </div>

        <h1><i class="icon-font">&#xe003;</i>职位管理</h1>
        <div>
            <h2><a href="/shanghua12/index.php/Admin/Job/lists"><i class="icon-font">&#xe050;</i>职位列表</a></h2>
            <h2><a href="/shanghua12/index.php/Admin/Job/add"><i class="icon-font">&#xe026;</i>新增职位</a></h2>
        </div>

        <h1><i class="icon-font">&#xe014;</i>咨询管理</h1>
        <div>
            <h2><a href="/shanghua12/index.php/Admin/Advice/lists"><i class="icon-font">&#xe050;</i>咨询列表</a></h2>
        </div>
    </aside>

    
<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/shanghua12/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/shanghua12/index.php/Admin/Users/lists">用户管理</a><span class="crumb-step">&gt;</span><span>修改个人密码</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/shanghua12/index.php/Admin/Users/doPwd" method="post" role="form">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr><td>
                                <input type="hidden" name="id" value="<?php echo ($users["id"]); ?>">
                            </td></tr>
                            <tr>
                                <th>用户名：</th>
                                <td>
                                    <input class="common-text required" id="read-style" name="username" size="50" value="<?php echo ($users["username"]); ?>" type="text" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>真实姓名：</th>
                                <td>
                                    <input class="common-text required" id="read-style" name="truename" size="50" value="<?php echo ($users["truename"]); ?>" type="text" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>旧密码：</th>
                                <td>
                                    <input class="common-text required"  size="50" type="password">
                                </td>
                            </tr>
                            <tr>
                                <th>新密码：</th>
                                <td>
                                    <input class="common-text required" name="password" size="50" type="password">
                                </td>
                            </tr>
                            <tr>
                                <th>确认密码：</th>
                                <td>
                                    <input class="common-text required" name="repassword" size="50" type="password">
                                </td>
                            </tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="保存" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>


<script src="/shanghua12/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/shanghua12/Public/admin/js/index.js"></script>
</body>
</html>
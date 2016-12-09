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
<h1><i class="icon-font">&#xe051;</i>账户管理</h1>
<div class="opened-for-codepen">
<h2><a href="/shanghua3/index.php/Admin/Users/lists"><i class="icon-font">&#xe050;</i>用户管理</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Users/add"><i class="icon-font">&#xe026;</i>添加用户</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Users/pass"><i class="icon-font">&#xe051;</i>修改个人密码</a></h2>
</div>

<h1><i class="icon-font">&#xe001;</i>新闻管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/New/lists"><i class="icon-font">&#xe050;</i>新闻列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/New/add"><i class="icon-font">&#xe026;</i>添加新闻</a></h2>
</div>

<h1><i class="icon-font">&#xe018;</i>产品管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Product/lists"><i class="icon-font">&#xe050;</i>产品列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Product/add"><i class="icon-font">&#xe026;</i>添加产品</a></h2>
</div>

<h1><i class="icon-font">&#xe060;</i>成功案例</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Case/lists"><i class="icon-font">&#xe050;</i>案列列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Case/add"><i class="icon-font">&#xe026;</i>新增案列</a></h2>
</div>

<h1><i class="icon-font">&#xe002;</i>申请试用</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Apply/lists"><i class="icon-font">&#xe050;</i>申请列表</a></h2>
</div>

<h1><i class="icon-font">&#xe051;</i>荣誉管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Honor/lists"><i class="icon-font">&#xe050;</i>荣誉列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Honor/add"><i class="icon-font">&#xe026;</i>新增荣誉</a></h2>
</div>

<h1><i class="icon-font">&#xe003;</i>职位管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Job/lists"><i class="icon-font">&#xe050;</i>职位列表</a></h2>
<h2><a href="/shanghua3/index.php/Admin/Job/add"><i class="icon-font">&#xe026;</i>新增职位</a></h2>
</div>

<h1><i class="icon-font">&#xe014;</i>咨询管理</h1>
<div>
<h2><a href="/shanghua3/index.php/Admin/Advice/lists"><i class="icon-font">&#xe050;</i>咨询列表</a></h2>
</div>

</div>
</div>
</aside>


<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/shanghua3/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">申请试用</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="6%"><input class="allChoose" name="" type="checkbox"></th>
                            <th width="10%">姓名</th>
                            <th width="10%">单位</th>
                            <th width="10%">职业</th>
                            <th width="15%">email</th>
                            <th width="20%">电话</th>
                            <th width="20%">用途</th>
                            <th width="12%">操作</th>
                        </tr>
                        <?php if(is_array($apply)): $i = 0; $__LIST__ = $apply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            <td><input type="checkbox" name="applyId[]" id="checkbox" value="<?php echo ($data["apply_id"]); ?>"><label for="checkbox"></label></td>
                            <td><?php echo ($data["name"]); ?></td>
                            <td><?php echo ($data["unit"]); ?></td>
                            <td><?php echo ($data["job"]); ?></td>
                            <td><?php echo ($data["email"]); ?></td>
                            <td><?php echo ($data["phone"]); ?></td>
                            <td><?php echo ($data["use"]); ?></td>
                            <td>
                                <a class="link-del" href="<?php echo U('Admin/new/destory');?>/id/<?php echo ($data["id"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>


<script src="/shanghua3/Public/admin/js/jquery-1.8.3.min.js"></script>
<script src="/shanghua3/Public/admin/js/index.js"></script>
</body>
</html>
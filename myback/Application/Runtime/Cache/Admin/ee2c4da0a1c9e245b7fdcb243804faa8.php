<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>酒店后台管理</title>
    <link rel="stylesheet" type="text/css" href="/hotel/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/hotel/Public/admin/css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="<?php echo U('Admin/index/index');?>" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Admin/index/index');?>">首页</a></li>
                <li><a href="#" target="<?php echo U('Home/index/index');?>">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>客房管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/room/index');?>"><i class="icon-font">&#xe008;</i>所有客房</a></li>
                        <li><a href="<?php echo U('Admin/room/create');?>"><i class="icon-font">&#xe005;</i>添加客房</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>客房分类管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/category/index');?>"><i class="icon-font">&#xe017;</i>所有分类<li><a href="<?php echo U('Admin/category/create');?>"><i class="icon-font">&#xe037;</i>添加分类</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/new/index');?>"><i class="icon-font">&#xe017;</i>所有新闻<li><a href="<?php echo U('Admin/new/create');?>"><i class="icon-font">&#xe037;</i>添加新闻</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>商务会议管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/meeting/index');?>"><i class="icon-font">&#xe017;</i>所有会议<li><a href="<?php echo U('Admin/meeting/create');?>"><i class="icon-font">&#xe037;</i>添加会议</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allRooms.html">客房管理</a><span class="crumb-step">&gt;</span><span>新增客房</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/room/update');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                    <tr><td>
                        <input type="hidden" name="id" value="<?php echo ($rooms["id"]); ?>">
                    </td></tr>
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="cid" id="catid" class="required">
                                    <?php if(is_array($categorys)): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["catname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <!-- <option value="19">豪华双人房</option><option value="20">豪华单人房</option> -->
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>房间号：</th>
                                <td>
                                    <input class="common-text required" id="title" name="rid" size="50" value="<?php echo ($rooms["rid"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>备注：</th>
                                <td><textarea name="remark" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"><?php echo ($rooms["content"]); ?></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody>
                        </table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
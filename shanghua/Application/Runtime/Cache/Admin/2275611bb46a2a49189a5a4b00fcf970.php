<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>后台登陆</title>
	<link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/shanghua/Public/admin/css/mycss.css"/>
    <script type="text/javascript" src="/shanghua/Public/admin/js/modernizr.min.js"></script>
</head>
<body style="background:url(/shanghua/Public/admin/images/login.jpg)">
<div >
	<div class="topbar-wrap white">
    	<div class="topbar-inner clearfix">
	        <div class="topbar-logo-wrap clearfix">
	            <!-- <h1 class="topbar-logo none"><a href="#" class="navbar-brand">后台管理</a></h1> -->
	            <img src="/shanghua/Public/admin/images/logo.jpg" height="45px;" >
	        </div>
	        <div class="top-info-wrap">
	            <ul class="top-info-list clearfix">
	                <li><a href="#" class="top-a">欢迎：admin</a></li>
	                <li><a href="/shanghua/index.php/Admin/Index/index" class="top-a">后台首页</a></li>
	                <li><a href="#" class="top-a">前台首页</a></li>
	                <li><a href="#" class="top-a">退出</a></li>
	            </ul>
	        </div>
    	</div>
	</div>
	<div class="admin-login" >
		<span>登陆</span>
		<form role="form" method="post" action="">
			<div class="input-group">
				<label>用户名：</label>
				<input type="text" name="username" />
			</div>
			<div class="input-group">
				<label>密码：</label>
				<input type="password" name="password" />
			</div>
			<div class="input-group">
				<label>验证码：</label>
				<input type="text" style="width:100px;" />
				<img src="/shanghua/Public/admin/images/yzm.gif" width="79px" height="25px;" class="yzm">
			</div>
			<div class="input-group">
  				<button type="submit" class="btn btn-primary" id="button"> &nbsp;&nbsp;登&nbsp;&nbsp;录&nbsp;&nbsp;</button>
  			</div>

		</form>
	</div>
</div>
</body>
</html>
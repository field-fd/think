<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="/think/Public/css/admin.css" />
		<style>
body {
	background-image:url(/think/Public/images/gb5.jpg);
}
.head {
	background-image:url(/think/Public/images/topbar.png);
}
.module-body img {
	height: 120px;
	margin-left: 4px;
}
.add-article{
  text-align:center;
  font-size:21px;
  color:rgb(100, 100, 143);
  font-weight:bold;
  margin-top:33px;
}
.submit1{
    width:100px;
	height:34px;
	border:none;
	background:#317ef3;
	color:#FFFFFF;
	text-align:center;
}
.content1{
    width:300px;
	height:245px;
	margin-bottom:30px;
}
.title1{
    width:300px;
	height:30px;
	margin-bottom:20px;
}
.box{margin:0 auto}
</style>
</head>
<body>
<div class="head">
  <ul>
    <li><a href="#" id="clickMe">换肤</a></li>
    <li><a  class="add" href="javascript:logout('/think/index.php/Home/Login/logout')">退出</a></li>
    <li><a href="<?php echo U('index/index');?>"  target="_blank">主页</a></li>
  </ul>
</div>
<!--头部end-->
<div id="picframe"> <a target="_blank" href="#"> <img src="/think/Public/images/skin1.png" style="width:130px;height:110px;margin-right:20px;"></a> <a target="_blank" href="#"> <img src="images/skin2.png" style="width:130px;height:110px;"></a> </div>
<!--logo&nav star-->
<div class="logonav" style="margin-bottom: 8px;">
  <div class="webname">云无心以出岫</div>
  <div class="nav">
    <ul>
      <li><a href="<?php echo U('index/index');?>"  target="_blank">个人主页</a></li>  
       <li><a href="<?php echo U('Login/admin');?>">全部博文</a></li>
	   <li><a  href="/think/index.php/Home/Login/addarticle">添加文章</a></li>
      </ul>
  </div>
</div>

<!--logo&nav end-->
<div class="mainnn">
<div class="main"> 
  <div class="content" style="float:right;border:1px solid #ccc;background: white;"><!--xinjia beijingyanse-->
    <div class="content-head" style="height: 25px;background-image:url(/think/Public/images/modelhead.png);"><span class="title">添加博文</span></div>
    <div class="content-body">
     <form  class="add-article" method=post action=/think/index.php/Home/Login/add>
	 <table class="box">
	 <tr>
	    <th>标题：</th>
	    <th><input type="text" name="title" class="title1"></th>
     <tr>
	     <th>内容：</th><th><textarea name="content" class="content1" ></textarea></th>
    </tr>
    <tr>
	    <th></th>
		<th><input type="submit" value="发表" class="submit1"></th>
	</tr>
</form>
      

    </div>
    <!--右边内容end--> 
  </div>
</div>
<!--主体end--> 
<!--结尾-->
</body>
</html>
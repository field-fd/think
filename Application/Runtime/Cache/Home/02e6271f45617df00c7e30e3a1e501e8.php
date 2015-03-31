<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="/think/Public/css/admin.css" />
    <link href="/think/Public/editor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/think/Public/editor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/think/Public/editor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/think/Public/editor/umeditor.min.js"></script>
    <script type="text/javascript" src="/think/Public/editor/lang/zh-cn/zh-cn.js"></script>
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
  font-size:21px;
  margin-top:33px;
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
<div class="logonav" >
  <div class="webname">云无心以出岫</div>
  <div class="nav">
    <ul>
      <li><a href="<?php echo U('index/index');?>"  target="_blank">个人主页</a></li>  
       <li><a href="<?php echo U('Login/admin');?>">全部博文</a></li>
	   <li><a  href="/think/index.php/Home/Login/addarticle">添加文章</a></li>
	   <li><a  href="/think/index.php/Home/Login/note">查看留言</a></li>
      </ul>
  </div>
</div>

<!--logo&nav end-->
<div class="mainnn">
<div class="main"> 
  <div class="content" style="float:right;border:1px solid #ccc;background: white;">
    <div class="content-head" style="height: 25px;background-image:url(/think/Public/images/modelhead.png);"><span class="addblog">添加博文</span></div>
    <div class="content-body">
     <form  class="add-article" method=post action=/think/index.php/Home/Login/add>
	    <center>标题：<input type="text" name="title" class="title"></center>
	    <script type="text/plain" id="myEditor" name="myEditor" style="width:600px;height:270px;"></script>
        <script type="text/javascript">
          //实例化编辑器
          var um = UM.getEditor('myEditor');
        </script>
       <input type="submit" value="发表" class="submit1">
     </form>
 </div>
    <!--右边内容end--> 
  </div>
</div>
<!--主体end--> 
<!--结尾-->
<div class="foot"”>
  <center>
    信息与电气工程学院方东 版权所有
  </center>
</div>
</body>
</html>
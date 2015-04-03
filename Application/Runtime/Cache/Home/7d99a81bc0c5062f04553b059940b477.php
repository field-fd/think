<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>方东个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="这是方东个人博客网站" />
<link href="/think/Public/css/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="/think/Public/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<article>
  <header>
    <div class="toptitle">
      <h1>浣溪沙 梅花夢事</h1>
      <p class="byline">——梅如是</p>
    </div>
	<div class="nav">
      <ul>
        <li><a href="<?php echo U('Index/index');?>">全部博文</a></li>
        <li><a href="<?php echo U('Index/note');?>">留言板</a></li>
		<li><a href="<?php echo U('Index/photo');?>">相册</a></li>
      </ul>
	</div>
    <object id="swftitlebar" data="/think/Public/images/79514.swf" width="100%" height="220" type="application/x-shockwave-flash">
      <param name="allowScriptAccess" value="always">
      <param name="allownetworking" value="all">
      <param name="allowFullScreen" value="true">
      <param name="wmode" value="transparent">
      <param name="menu" value="false">
      <param name="scale" value="noScale">
      <param name="salign" value="1">
    </object>
    <p class="sign">收我南窗梦一帘,人间故事密封缄。</p>
  </header>
  <div class="leftbox">
    <div class="vcard box">
      <h2>个人资料</h2>
      <img src="/think/Public/images/180.jpg" class="photo">
      <p class="fn">姓名：方东</p>
      <p class="nickname">网名：hello world</p>
      <p class="address">现居：鲁东大学北23</p>
      <p class="role">职业：网站设计、网站制作</p>
    </div>
    
  </div>
  <div class="rightbox box">
    <h2><a href="<?php echo U('index/index');?>">返回到全部博文</a></h2>
    <h3 class="title"><?php echo ($article["title"]); ?></h3>
	<p class="time">发表时间：<?php echo (date("Y-m-d H:i",$article["time"])); ?></p>
    <div class="article" ><?php echo ($article["content"]); ?></div>
  </div>
  <div class="blank"></div>
  <div class="Copyright">
    <ul>
      <a href="/">帮助中心</a><a href="/">空间客服</a><a href="/">投诉中心</a><a href="/">空间协议</a>
    </ul>
    <p>Design by Fang Dong</p>
  </div>
</article>
</body>
</html>
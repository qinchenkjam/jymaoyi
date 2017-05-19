<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"./template/mobile/new/public\catalog.html";i:1495173450;s:31:"./template/mobile/new/base.html";i:1495177316;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,user-scalable=0,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link rel="apple-touch-icon-precomposed" href="http://demo.douco.com/m/data/logo-icon.png" >
<title><?php echo \think\Config::get('site.WEB_NAME'); ?></title>
<meta name="keywords" content="<?php echo $webConfig['WEB_KEYWORDS']; ?>" />
<meta name="description" content="<?php echo $webConfig['WEB_DESCRIPTION']; ?>" />
<link href="__HOME__/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__HOME__/js/jquery.min.js"></script>
<script type="text/javascript" src="__HOME__/js/global.js"></script>
<script type="text/javascript" src="__HOME__/js/slide_show.js"></script>

</head>
<body>
<div id="wrapper">
 <div id="header">
 <a href="<?php echo url('mobile/Index/index'); ?>" class="home"></a>
  <em class="logo"><?php echo $webConfig['WEB_NAME']; ?></em>
   <em></em>
  <a href="<?php echo url('mobile/Index/catalog'); ?>" class="siteMap"></a></div>
 <div id="index">
 
 

 




 
 <div id="catalog">
  <ul>
      <li><a href="<?php echo url('mobile/Pages/index',['id'=>'1']); ?>"">About us</a></li>
     <li id="menu-item-14" ><a href="<?php echo url('mobile/Article/index'); ?>">News</a></li>
<li id="menu-item-16" ><a href="<?php echo url('mobile/Product/index'); ?>">Products</a></li>
<li id="menu-item-13" ><a href="<?php echo url('mobile/CaseServe/index',['id'=>'2']); ?>">Agents</a></li>
<li id="menu-item-15" ><a href="<?php echo url('mobile/CaseServe/index',['id'=>'3']); ?>">PMU training</a></li>
<li id="menu-item-17" ><a href="<?php echo url('mobile/CaseServe/index',['id'=>'1']); ?>">Technical service</a></li>
<li id="menu-item-11" ><a href="<?php echo url('mobile/Pages/index',['id'=>'2']); ?>">Contact us</a></li>  
     </ul>
 </div>
 
 <div id="footer">
 <a href="javascript:;" onfocus="this.blur();" class="goTop">返回顶部</a>
 <ul>
  <li class="footNav"><a href="<?php echo url('mobile/Index/index'); ?>">手机版</a><a href="<?php echo url('index/Index/index'); ?>">电脑版</a></li>
  <li class="copyRight">© DouPHP轻量级企业网站管理系统 2016 All Rights Reserved.</li>
  <li class="powered"><a href='http://www.douco.com' target='_blank'>Powered by DouPHP</a> </li>
 </ul>
</div>
 <div style="display:none"></div> 
</div>
</body>

  

</html>
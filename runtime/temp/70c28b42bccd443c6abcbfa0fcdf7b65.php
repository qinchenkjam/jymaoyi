<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"./template/mobile/new/product\detail.html";i:1495181231;s:31:"./template/mobile/new/base.html";i:1495177316;}*/ ?>
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
 
 

 




 
 <div class="urHere">position：<a href="<?php echo url('mobile/Product/index'); ?>">product</a><b>></b> <?php echo substr($pro['name'],0,10); ?>..</div> 
 <div id="product">
   <!-- <div class="img"><a href="http://demo.douco.com/images/product/15.jpg" target="_blank"><img src="images/15.jpg" width="300" /></a></div> -->
   <div class="info">
     <h1><?php echo $pro['name']; ?></h1>
     <dl class="defined">
            </dl>
     <!-- <dl class="price">￥68.00 元</dl> -->
       <!--    <dl class="tel">
             <dt>销售热线：</dt>
             <dd><a href="tel:0596-8888888">0596-8888888</a></dd> -->
     </dl>
</div>
   <div class="content">
     <h3>产品介绍</h3>
     <ul><?php echo $pro['content']; ?></ul>
   </div>
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
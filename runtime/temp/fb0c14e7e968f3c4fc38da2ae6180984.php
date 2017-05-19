<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./template/mobile/new/article\index.html";i:1495091469;s:31:"./template/mobile/new/base.html";i:1495176304;}*/ ?>
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
 
 

 




 
 <div class="treeBox">
 <?php if(is_array($ArticleCate) || $ArticleCate instanceof \think\Collection || $ArticleCate instanceof \think\Paginator): $i = 0; $__LIST__ = $ArticleCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
  <a href="<?php echo url('mobile/Article/index',['cat_id'=>$vo['cat_id']]); ?>" ><?php echo $vo['cat_name']; ?></a>
 <?php endforeach; endif; else: echo "" ;endif; ?>

 </div> <div id="articleCat">
  <div class="articleList">
  <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?>
        <dl style="height:53px">
     <dt><a href="<?php echo url('mobile/Article/detail',['id'=>$news['id']]); ?>"><?php echo $news['title']; ?></a></dt>
     <dd><em>发布时间：<?php echo date("Y-m-d",$news['add_time']); ?></em><em><!-- 点击数：100 --></em></dd>
    </dl>
 <?php endforeach; endif; else: echo "" ;endif; ?>    
      </div>
  <div class="pager"><em>上一页</em><span>第1/1页</span><em>下一页</em></div> </div>
 
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
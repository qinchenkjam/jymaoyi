<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./template/mobile/new/product\index.html";i:1495177000;s:31:"./template/mobile/new/base.html";i:1495177316;}*/ ?>
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
 
 

 




 
 <div class="urHere">position：<a href="<?php echo url('mobile/Product/index'); ?>">product</a></div> <div class="treeBox">
 <?php if(is_array($pro_cate) || $pro_cate instanceof \think\Collection || $pro_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $pro_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
  <a href="<?php echo url('mobile/Product/index',['cid'=>$vo['cat_id']]); ?>" ><?php echo $vo['cat_name']; ?></a>
 <?php endforeach; endif; else: echo "" ;endif; ?>
 </div> <div id="productCat">
  <div class="productList">
  <?php if(is_array($pro_list) || $pro_list instanceof \think\Collection || $pro_list instanceof \think\Paginator): $i = 0; $__LIST__ = $pro_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <dl>
    <dd>
    <p class="img"><a onclick="hits(<?php echo $vo['id']; ?>);" href="<?php echo url('mobile/Product/detail',['id'=>$vo['id']]); ?>"><img src="<?php echo UPLODS; ?><?php echo $vo['image']; ?>" width="135" height="135" /></p>
    <p class="name"><?php echo substr($vo['name'],0,21); ?>...</a></p>
   <!--  <p class="price">￥68.00 元</p> -->
    </dd>
   </dl>
 <?php endforeach; endif; else: echo "" ;endif; ?>
   
  </div>
  <div class="">
   <?php echo $pro_list->render(); ?>
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

<script type="text/javascript">
 function hits(id){
    //alert(id);
    //var id;
    $.getJSON("<?php echo url('admin/Product/updateHits'); ?>",{'id':id},function(res){
          //console.log(data.status);
           if(res.status==1){
               //alert(1); 
               return true;            
           }
           if(res.status==-1){

            console.log(res.status);
           }
        });

 }
</script>

</html>
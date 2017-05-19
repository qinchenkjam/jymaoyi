<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:38:"./template/mobile/new/index\index.html";i:1495182118;s:31:"./template/mobile/new/base.html";i:1495177316;}*/ ?>
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
 

<div class="slideShow">
 <ul class="slides">
    <li><a href="http://m.douco.com" target="_blank"><img src="__HOME__/images/20140921rqmzcp.jpg"/></a></li>
    <li><a href="http://m.douco.com" target="_blank"><img src="__HOME__/images/20140921kwoypm.jpg"/></a></li>
    <li><a href="http://m.douco.com" target="_blank"><img src="__HOME__/images/20140921ypmnew.jpg"/></a></li>
    <li><a href="http://m.douco.com" target="_blank"><img src="__HOME__/images/20140921demloy.jpg"/></a></li>
   </ul>
</div>
<script type="text/javascript">

$(document).ready(function(){
 $('.slides').bxSlider({
 });
})

</script> 
 

<div id="mainNav">
   <ul>
<li><a href="<?php echo url('mobile/Article/index'); ?>">News</a></li>
<li><a href="<?php echo url('mobile/Product/index'); ?>">Products</a></li>
<li><a href="<?php echo url('mobile/CaseServe/index',['id'=>'2']); ?>">Agents</a></li>
<li ><a href="<?php echo url('mobile/CaseServe/index',['id'=>'3']); ?>">PMU training</a></li>
<li ><a href="<?php echo url('mobile/CaseServe/index',['id'=>'1']); ?>">Technical service</a></li>
<li ><a href="<?php echo url('mobile/Pages/index',['id'=>'2']); ?>">Contact us</a></li>
       </ul>
</div>


 
<div class="incBox">
 <h3><a href="<?php echo url('mobile/Product/index'); ?>" class="more">查看更多商品 ></a>产品展示</h3>
 <div class="productList"> 
 <?php if(is_array($pro_recommend) || $pro_recommend instanceof \think\Collection || $pro_recommend instanceof \think\Paginator): $i = 0; $__LIST__ = $pro_recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
  <dl>
   <dd>
   <p class="img"><a onclick="hits(<?php echo $vo['id']; ?>);" href="<?php echo url('mobile/Product/detail',['id'=>$vo['id']]); ?>"><img src="<?php echo UPLODS; ?><?php echo $vo['image']; ?>" width="135" height="135" /></p>
   <p class="name"><?php echo $vo['name']; ?></a></p>
  <!--  <p class="price">￥128.00 元</p> -->
   </dd>
  </dl>
<?php endforeach; endif; else: echo "" ;endif; ?>
   

    
  </div >
</div>

<div class="incBox">
 <h3><a href="<?php echo url('mobile/Article/index'); ?>" class="more">查看更多文章 ></a>新闻中心</h3>
 <div class="articleList">
 <?php if(is_array($new_list) || $new_list instanceof \think\Collection || $new_list instanceof \think\Paginator): $i = 0; $__LIST__ = $new_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <dl>
   <dt><a href="<?php echo url('mobile/Article/detail',['id'=>$vo['id']]); ?>"><?php echo substr($vo['title'],0,12); ?>...</a></dt>
   <dd><em>发布时间：<?php echo date("Y-m-d",$vo['add_time']); ?></em><!-- <em>点击数：100</em> --></dd>
  </dl>
 <?php endforeach; endif; else: echo "" ;endif; ?>  
   </div>

</div><!--incBox-->
 
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
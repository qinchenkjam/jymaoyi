<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\wamp\www\jymaoyi./application/admin\view\template\templatelist.html";i:1493694523;s:62:"D:\wamp\www\jymaoyi./application/admin\view\public\layout.html";i:1492499367;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<!-- <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="//cdn.amazeui.org/amazeui/2.7.2/css/amazeui.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="__ADMIN__/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__ADMIN__/static/h-ui.admin/css/style.css" />

<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>资讯列表</title>

</head>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统设置 <span class="c-gray en">&gt;</span> 模板列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<style>
.panel-default {
    border-color: none;
}
</style>
<form action="" method="post"> 
<div class="page-container">
	
</form>
	
	<div class="mt-20">
		<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="" style="border-color:none;" >
        <div class="" >
          <h3 class="panel-title" > <?php if($t == 'pc'): ?>PC端<?php else: ?>手机端<?php endif; ?>模板</h3>
        </div>
        <div class="panel-body">
        <!-- 模板列表 -->
            <div class="row">                
		    <?php if(is_array($template_config) || $template_config instanceof \think\Collection || $template_config instanceof \think\Paginator): if( count($template_config)==0 ) : echo "" ;else: foreach($template_config as $k=>$val): ?>
                 <div class="col-sm-6 col-md-4">
                     <style>
                         .thumbnail img{ width:460px; height:270px; }
                     </style>
                   <div class="thumbnail">
                     <img src="/template/<?php echo $t; ?>/<?php echo $k; ?>/<?php echo $val['img']; ?>" />
                     <div class="caption">
                       <h3><?php echo $val['name']; ?></h3>
                       <p><?php echo $val['remark']; ?></p>
                       <p>                                
                          <?php if($default_theme == $k): ?>
                               <a href="<?php echo url('admin/template/changetemplate',['key'=>$k,'t'=>$t]); ?>" class="btn btn-success" role="button">启用</a> 
                           <?php else: ?> 
                           <a href="<?php echo url('admin/template/changetemplate',['key'=>$k,'t'=>$t]); ?>" class="btn btn-default" role="button">启用</a> 
                          <?php endif; ?>                                
                       </p>
                     </div>
                   </div>
                 </div>
		     <?php endforeach; endif; else: echo "" ;endif; ?>         
            </div>
        <!-- 模板列表 end-->
        </div>
       
       
      </div>
    </div>
   <!--   <?php if($t == 'pc'): ?><a href="<?php echo url('admin/template/changeTemplate',['t'=>'mobile','a'=>'m']); ?>" >手机端模板设置</a><?php else: ?><a href="<?php echo url('admin/template/changeTemplate',['t'=>'pc','a'=>'pc']); ?>" >pc端模板设置</a><?php endif; ?>模板 -->
    <!-- /.row --> 
  </section>
	  <div id="" class="pages">
	        
	  </div>
  </div>
</div>
<script type="text/javascript" src="__ADMIN__/lib/laydate/laydate.js"></script>


</body>

<script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 

</html>

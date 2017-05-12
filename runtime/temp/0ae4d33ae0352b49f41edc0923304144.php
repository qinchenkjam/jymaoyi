<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\wamp\www\jymaoyi./application/admin\view\article\add.html";i:1493172645;s:62:"D:\wamp\www\jymaoyi./application/admin\view\public\layout.html";i:1492499367;}*/ ?>
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

<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="" method="post" name="searchform">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="title" name="title">
			</div>
		</div>
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章类型：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="cid" class="select" id="cid">				<?php if(is_array($ArticleCate) || $ArticleCate instanceof \think\Collection || $ArticleCate instanceof \think\Paginator): if( count($ArticleCate)==0 ) : echo "" ;else: foreach($ArticleCate as $key=>$vo): ?>
				    <option value="<?php echo $vo['cat_id']; ?>"><?php echo $vo['cat_name']; ?></option>
				    <?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">排序值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="0" placeholder="" id="sort" name="sort">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">关键词：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="keywords" name="keywords">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章摘要：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="description" id="description" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		
		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
					<div id="filePicker">选择图片</div>
					<button id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button>
				</div>
			</div>
		</div> -->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<!-- <script id="editor" name="content" type="text/plain" style="width:100%;height:400px;"></script> -->

				<textarea name="content" id="editor"></textarea> 
				<script id="" name="content" type="text/plain" style="width:100%;height:400px;"></script>
			
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<!-- <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button> -->
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存并提交</button>
				
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</article>


</body>

<script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 

<script type="text/javascript" src="__ADMIN__/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="__ADMIN__/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript">

$(function(){
	var ue = UE.getEditor('editor');
});

</script>
<script type="text/javascript">

 /*function article_save_submit(){  
	   document.searchform.action="newsAdd";
	   searchform.submit();
 }*/

 function article_save_submit(){
   var   ue   = UE.getEditor('editor');
   var params = {};
	   params.cat_id = $('#cid').val();
	   params.title = $('#title').val();	  
	   params.sort = $("#sort").val();
	   params.keywords = $('#keywords').val();
	   params.description = $('#description').val();
	   params.content = ue.getContent();
	   //alert(params.content);
       if(params.title==''){
		   layer.alert('title不能为空', {icon: 2});
		   return;
	   }
	   if(params.content==''){
		   layer.alert('content不能为空', {icon: 2});
		   return;
	   }
	   $.ajax({
           type: "POST",
           url: "<?php echo url('admin/article/newsAdd'); ?>",         
           data: params,
           dataType:"json",
           success: function(res){
              //请求正确之后的操作
              if(res.status==1){
                  //alert();               
                  layer.msg(res.msg,{icon:1});
                  location.href = "<?php echo url('article/index'); ?>"
               }
               if(res.status==-1){
                  //alert();               
                  layer.msg(res.msg,{icon:2});
                  
               }
           },
           error: function(res){
              //请求失败之后的操作
           }
        });
 }

</script>

</html>

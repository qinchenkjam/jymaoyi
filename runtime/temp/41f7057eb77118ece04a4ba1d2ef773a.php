<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\wamp\www\jymaoyi./application/admin\view\product\edit.html";i:1494383619;s:62:"D:\wamp\www\jymaoyi./application/admin\view\public\layout.html";i:1492499367;}*/ ?>
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

<link href="__ADMIN__/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="page-container">
	<form action="edit?id=<?php echo $msg['id']; ?>" enctype="multipart/form-data" method="post" class="form form-horizontal" id="form_add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>产品标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $msg['name']; ?>" placeholder="" id="" name="name">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select name="cat_id" class="select">
					<?php if(is_array($proCate) || $proCate instanceof \think\Collection || $proCate instanceof \think\Paginator): $i = 0; $__LIST__ = $proCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<!-- <option id=""  value="<?php echo $vo['cat_id']; ?>">
					<?php echo $vo['cat_name']; ?></option>	 -->
					<option id="sel"  name="" value="<?php echo $vo['cat_id']; ?>" <?php if($vo['cat_id'] == $msg['cat_id']): ?>selected<?php endif; ?> ><?php echo $vo['cat_name']; ?></option>	           
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">排序值：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $msg['sorts']; ?>" placeholder="" id="" name="sorts">
			</div>
		</div>
				
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">产品展示价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="price" id="" placeholder="" value="<?php echo $msg['price']; ?>" class="input-text" style="width:90%">
				元</div>
		</div>
		
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">产品关键字：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="keywords" id="" placeholder="多个关键字用英文逗号隔开，限10个关键字" value="<?php echo $msg['keywords']; ?>" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">摘要描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="desc" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"><?php echo $msg['desc']; ?></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
					<img width="60" class="product-thumb" src="<?php echo UPLODS; ?><?php echo $msg['image']; ?>">
					<input name="image" type="file" class="" id="img" value="" datatype="*1-2" nullmsg="">
				</div>
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">详细内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<textarea name="content" id="editor"><?php echo $msg['content']; ?></textarea> 
				<script id="" name="content" type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="button" id="sub"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->


<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->

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

$('#sub').click(function(){
	
	var content=$(".content").val();
    if(content==""){
        //alert('请上传图片');
        layer.msg('请填写内容');       
        return false;
    }
    $('#form_add').submit();
});
 	
</script>


</html>

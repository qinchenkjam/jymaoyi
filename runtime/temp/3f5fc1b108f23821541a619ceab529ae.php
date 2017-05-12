<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\wamp\www\jymaoyi./application/admin\view\article\index.html";i:1494472291;s:62:"D:\wamp\www\jymaoyi./application/admin\view\public\layout.html";i:1492499367;}*/ ?>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 资讯列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<form action="" method="post"> 
<div class="page-container">
	<div class="text-c"> <span class="select-box inline">
		<select name="cid" class="select">
	    <option value="0">全部分类</option>
	    <?php if(is_array($ArticleCate) || $ArticleCate instanceof \think\Collection || $ArticleCate instanceof \think\Paginator): if( count($ArticleCate)==0 ) : echo "" ;else: foreach($ArticleCate as $key=>$vo): ?>
	    <option value="<?php echo $vo['cat_id']; ?>"><?php echo $vo['cat_name']; ?></option>
	    <?php endforeach; endif; else: echo "" ;endif; ?>
	  </select>
		</span> 日期范围：
		<input type="text" name="dateStart" onfocus="laydate()" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text"  name="dateEnd" onfocus="laydate()" id="logmax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="title" id="" placeholder=" 资讯名称" style="width:250px" class="input-text">
		<button id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜资讯</button>
	</div>
</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="form_del_data()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加资讯" _href="<?php echo url('admin/article/newsadd'); ?>" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
	<form name="form" method="post" action="<?php echo url('Admin/Article/delAll'); ?>">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value="" class="all"></th>
					<th width="80">ID</th>
					<th>标题</th>
					<th width="80">分类</th>
					<th width="80">来源</th>
					<th width="120">更新时间</th>
					<th width="75">浏览次数</th>
					<th width="60">发布状态</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
			 <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
				<tr class="text-c">
					<td><input name="id[]" type="checkbox" value="<?php echo $vo['id']; ?>"></td>
					<td><?php echo $vo['id']; ?></td>
					<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看"><?php echo $vo['title']; ?></u></td>
					<td><?php echo $vo['cat_name']; ?></td>
					<td>H-ui</td>
					<td></td>
					<td></td>
					<td class="td-status"><span class="label label-success radius">已发布</span></td>
					<td class="f-14 td-manage"> <a style="text-decoration:none" class="ml-5"  href="newsEdit?id=<?php echo $vo['id']; ?>" title="编辑"> <i class="Hui-iconfont">&#xe6df;</i></a> 
					<!-- <a style="text-decoration:none" class="ml-5"  href="newsDel?id=<?php echo $vo['id']; ?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a> -->
					<a style="text-decoration:none" class="ml-5"  href="javascript:removeinfo(<?php echo $vo['id']; ?>);" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<br/>
        <br/>
 
  <div id="" class="pages">
      <?php echo $list->render(); ?>     
  </div>
	</div>
</div>
<script type="text/javascript" src="__ADMIN__/lib/laydate/laydate.js"></script>
<script>
;!function(){

laydate.skin('molv');

laydate({
   elem: '#lay1'
})
laydate({
   elem: '#lay2'
})

}();

//删除分类
function removeinfo(id){
    layer.confirm('您确定要删除这条信息吗？',{
        btn:['确定','取消']
    },
    function(){            
        $.getJSON("<?php echo url('admin/Article/newsDel'); ?>",{'id':id},function(res){
        	//console.log(data.status);
           if(res.status==0){
               layer.msg(res.msg,{icon:1});
               $("#id_"+id).empty();
              location.href = "<?php echo url('article/index'); ?>";
           }else{
               layer.msg(res.msg,{icon:2});
           }
        });
    },function(){}
    );
}
</script>
<script>
$('.all').click(function() {
    if($(this).is(':checked')) {
      $(':checkbox').attr('checked', 'checked');
    } else {
      $(':checkbox').removeAttr('checked');
    }
});

function form_del_data(){	
	if($(':checked').size() > 0) {
		layer.confirm('确认要批量删除吗',function(){
			//layer.msg('已删除!',{icon:1,time:1000});
		    document.form.submit();
		});
	}else{
        layer.alert('您没有选择！');
	}
} 
</script>
</body>

<script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 

</html>

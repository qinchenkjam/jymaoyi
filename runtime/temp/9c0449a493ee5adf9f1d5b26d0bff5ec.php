<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./application/admin\view\page\index.html";i:1493277026;s:43:"./application/admin\view\public\layout.html";i:1494841434;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__ADMIN__/lib/html5.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/respond.min.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/PIE_IE678.js"></script>
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
<title></title>

</head>

<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 资讯列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container" style="width:80%;">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <a class="btn btn-primary radius" data-title="添加资讯" _href="<?php echo url('admin/page/edit'); ?>" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					
					<th width="80">ID</th>
					<th>标题</th>
					
					<th width="60">发布状态</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
			 <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
				<tr class="text-c">
					
					<td><?php echo $vo['id']; ?></td>
					<td><?php echo $vo['page_name']; ?></td>
					<td><?php echo $vo['description']; ?></td>
					<td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5"  href="edit?id=<?php echo $vo['id']; ?>" title="编辑"> <i class="Hui-iconfont">&#xe6df;</i></a>
					 <?php if($vo['id'] >= 3): ?>
					 <a style="text-decoration:none" class="ml-5"  href="javascript:removeinfo(<?php echo $vo['id']; ?>)" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
					 </td>
					 <?php endif; ?>
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
//删除
function removeinfo(id){
    layer.confirm('您确定要删除吗？',{
        btn:['确定','取消']
    },function(){            
        $.getJSON("<?php echo url('admin/Page/removeinfo'); ?>",{'id':id},function(data){
        	//console.log(data.status);
           if(data.status==0){
               layer.msg(data.msg,{icon:1});
               $("#id_"+id).empty();
               location.href="<?php echo url('Admin/Page/index'); ?>";
           }else{
               layer.msg(data.msg,{icon:2});
           }
        });
    },function(){}
    );
}
</script>
</body>

<script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/My97DatePicker/WdatePicker.js"></script> 
 
<script type="text/javascript" src="__ADMIN__/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 

</html>

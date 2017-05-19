<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:42:"./application/admin\view\banner\index.html";i:1494474304;s:43:"./application/admin\view\public\layout.html";i:1494841434;}*/ ?>
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

<body class="pos-r">

<div style="">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 幻灯片管理 <span class="c-gray en">&gt;</span> 幻灯片列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a class="btn btn-primary radius" data-title="添加资讯" _href="<?php echo url('admin/Banner/add'); ?>" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加幻灯片</a></span></div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						
						<th width="40">ID</th>
										
						<th width="100">产品名称</th>
						<th width="150">缩略图</th>	
						<th>链接地址</th>
					    <th width="60">排序</th>
						<th width="60">是否显示</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
				<!-- {volist name="list" id="vo"} -->
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
					<tr class="text-c va-m">
						
						<td><?php echo $vo['id']; ?></td>
						<td><?php echo $vo['show_name']; ?></td>
						<td><a onClick="product_show('哥本哈根橡木地板','product-show.html','10001')" href="javascript:;"><img width="60" class="product-thumb" src="<?php echo UPLODS; ?><?php echo $vo['show_img']; ?>"></a></td>
						
						
						<td class="text-l"><?php echo $vo['show_link']; ?></td>
					<td class="text-l"><?php echo $vo['sort']; ?></td>
						<td class="td-status">
						<span class="label label-success radius">显示</span>
						</td>
						<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="" href="edit?id=<?php echo $vo['id']; ?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="product_del(this,'10001')" href="javascript:removeinfo(<?php echo $vo['id']; ?>)" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
</div>
 
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script>
<script type="text/javascript">
/*图片-编辑*/
function product_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}		
//删除分类
function removeinfo(id){
    layer.confirm('您确定要删除这条信息吗？',{
        btn:['确定','取消']
    },
    function(){            
        $.getJSON("<?php echo url('admin/Banner/removeinfo'); ?>",{'id':id},function(res){
        	//console.log(data.status);
           if(res.status==0){
               layer.msg(res.msg,{icon:1});
               $("#id_"+id).empty();            
           }else{
               layer.msg(res.msg,{icon:2});
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

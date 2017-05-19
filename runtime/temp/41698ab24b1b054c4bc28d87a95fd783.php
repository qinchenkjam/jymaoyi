<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:43:"./application/admin\view\product\index.html";i:1495182869;s:43:"./application/admin\view\public\layout.html";i:1494841434;}*/ ?>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
<form action="" method="post"> 
<div class="page-container">
	<div class="text-c"> <span class="select-box inline">
		<select name="cid" class="select">
	    <option value="0">全部分类</option>
	    <?php if(is_array($proCate) || $proCate instanceof \think\Collection || $proCate instanceof \think\Paginator): if( count($proCate)==0 ) : echo "" ;else: foreach($proCate as $key=>$vo): ?>
	    <option value="<?php echo $vo['cat_id']; ?>"><?php echo $vo['cat_name']; ?></option>
	    <?php endforeach; endif; else: echo "" ;endif; ?>
	  </select>
		</span> 日期范围：
		<input type="text" name="dateStart" onfocus="laydate()" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text"  name="dateEnd" onfocus="laydate()" id="logmax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="name" id="" placeholder=" 资讯名称" style="width:250px" class="input-text">
		<button id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜产品</button>
	</div>
</form>	
		
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="form_del_data()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="product_add('添加产品','add.html')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加产品</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
		<div class="mt-20">
		<form name="form" method="post" action="<?php echo url('Admin/Product/del'); ?>">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40"><input name="" type="checkbox" value="" class="all" ></th>
						<th width="40">ID</th>
						<th width="60">缩略图</th>
						<th width="150">分类</th>
						<th width="150">产品名称</th>
						<th>描述</th>
						<th width="100">添加时间</th>
						<th width="60">发布状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
					<tr class="text-c va-m">
						<td><input name="id[]" type="checkbox" value="<?php echo $vo['id']; ?>"></td>
						<td><?php echo $vo['id']; ?></td>
						<td><a onClick="product_show('哥本哈根橡木地板','product-show.html','10001')" href="javascript:;"><img width="60px" height="60px"class="product-thumb" src="<?php echo UPLODS; ?><?php echo $vo['image']; ?>"></a></td>
						<td><?php echo substr($vo['cat_name'],0,20); ?></td>
						<td class="text-l"><a style="text-decoration:none" onClick="product_show('哥本哈根橡木地板','product-show.html','10001')" href="javascript:;"><?php echo substr($vo['name'],0,15); ?></a></td>
						<td class="text-l"><?php echo substr($vo['desc'],0,21); ?></td>
						<td><?php echo date("Y-m-d",$vo['add_time']); ?></td>
						<td class="td-status"><span class="label label-success radius">已发布</span></td>
						<td class="td-manage"><a style="text-decoration:none" onClick="product_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="product_edit('产品编辑','edit?id=<?php echo $vo['id']; ?>','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> 

						<!-- <a style="text-decoration:none" class="ml-5" onClick="product_del(this,'10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a> -->

						<a style="text-decoration:none" class="ml-5" onClick="" href="del?id=<?php echo $vo['id']; ?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
						</td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			</form>
			<br/>
        <br/>
 
  <div id="" class="pages">
      <?php echo $list->render(); ?>     
  </div>
		</div>
	</div>
</div>
 
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/laydate/laydate.js"></script>
<script type="text/javascript">
		
var code;
		
function showCode(str) {
	if (!code) code = $("#code");
	code.empty();
	code.append("<li>"+str+"</li>");
}
		
$(document).ready(function(){
	var t = $("#treeDemo");
	t = $.fn.zTree.init(t, setting, zNodes);
	demoIframe = $("#testIframe");
	demoIframe.bind("load", loadReady);
	var zTree = $.fn.zTree.getZTreeObj("tree");
	zTree.selectNode(zTree.getNodeByParam("id",'11'));
});

$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
	]
});
/*图片-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-查看*/
function product_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-审核*/
function product_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="product_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*图片-下架*/
function product_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*图片-发布*/
function product_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}
/*图片-申请上线*/
function product_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}
/*图片-编辑*/
function product_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-删除*/
function product_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}

</script>
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
 
<script type="text/javascript" src="__ADMIN__/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 

</html>

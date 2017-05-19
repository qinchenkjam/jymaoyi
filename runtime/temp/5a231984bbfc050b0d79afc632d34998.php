<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"./application/admin\view\system\log_index.html";i:1495185002;s:43:"./application/admin\view\public\layout.html";i:1494841434;}*/ ?>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统管理 <span class="c-gray en">&gt;</span> 系统日志 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
  <form name="dateform" method="post" action="<?php echo url('Admin/ActionLog/map_del'); ?>">
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="form_del_data()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <span class="">日期范围：
    <input type="text" name="dateStart" onfocus="laydate()" id="logmin" class="input-text Wdate" style="width:120px;">
    -
    <input type="text"  name="dateEnd" onfocus="laydate()" id="logmax" class="input-text Wdate" style="width:120px;"> <a href="javascript:;"  onclick="form_date_data()" class="btn  radius"><i class="Hui-iconfont">&#xe6e2;</i> 删除范围内</a>
    </span>
    </form>
     </div>
  <form name="form" method="post" action="<?php echo url('Admin/ActionLog/del'); ?>">
  <table class="table table-border table-bordered table-bg table-hover table-sort">
    <thead>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value="" class="all"></th>
        <th width="80">操作ID</th>
     
        <th width="30%">内容</th>
        <th width="17%">用户id</th>
        <th width="120">客户端IP</th>
        <th width="120">时间</th>
        <th width="70">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <tr class="text-c">
       
        <td><input name="id[]" type="checkbox" value="<?php echo $vo['id']; ?>"></td>
        <td><?php echo $vo['id']; ?></td>
      
        <td><?php echo get_action($vo['action_id'],'title'); ?>,
        <?php if($vo['record_id'] != 1): ?>
            操作  id <?php echo $vo['record_id']; endif; ?>
       </td>
        <td><?php echo $vo['user_id']; ?></td>
        <td><?php echo $vo['action_ip']; ?></td>
        <td><?php echo date("Y-m-d H:i:s",$vo['create_time']); ?></td>
        <td><a title="删除" href="del?id=<?php echo $vo['id']; ?>" onclick="" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
      </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
  </form>
  <div id="" class="pages">
      <?php echo $list->render(); ?>     
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
function form_date_data(){
  var params = {};
     params.dateStart = $("input[name='dateStart']").val();
    params.dateEnd = $("input[name='dateEnd']").val();        
     if(params.dateStart==''){   
       layer.alert('起始日期不能为空', {icon: 2});
       return;
     }
     if(params.dateEnd==''){
       layer.alert('结束日期不能为空', {icon: 2});
       return;
     }

  if(params.dateStart !=='' || params.dateEnd !=='') {
    layer.confirm('确认要批量删除吗',function(){
      //layer.msg('已删除!',{icon:1,time:1000});
         document.dateform.submit();
    });
  }
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
 
<script type="text/javascript" src="__ADMIN__/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 

</html>

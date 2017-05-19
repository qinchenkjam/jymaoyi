<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"./application/admin\view\product\cate_index.html";i:1494385080;s:43:"./application/admin\view\public\layout.html";i:1494841434;}*/ ?>
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

<link rel="stylesheet" href="__ADMIN__/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">

</head>


<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 分类管理 <span class="c-gray en">&gt;</span> 分类列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20 text-c">

  <form class="Huiform" name="form1" action="<?php echo url('admin/productCate/cateAdd'); ?>" method="post" onsubmit="return checksubmit()">
    上级栏目： <span class="select-box" style="width:150px">
    <select class="select" id="sel_Sub" name="pid" onchange="SetSubID(this);">
      <option value="0" id="type">顶级分类</option>
      <?php if(is_array($proCate) || $proCate instanceof \think\Collection || $proCate instanceof \think\Paginator): $i = 0; $__LIST__ = $proCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <option id="sel" value="<?php echo $vo['cat_id']; ?>"><?php echo $vo['cat_name']; ?></option>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
    </span>
    <input type="hidden" id="hid_ccid" value="" name="">
    <input class="input-text" style="width:250px" type="text" value="" name="cat_name"placeholder="输入分类" id="class-val"><button type="submit" class="btn btn-success" id=""  onClick=""><i class="icon-plus"></i> 添加</button>
  </form>
   <div class="article-class-list cl mt-20">
    <table class="table table-border table-bordered table-hover table-bg">
      <thead>
        <tr class="text-c">
        
          <th width="80">ID</th>
          <th width="80">排序</th>
          <th width="200">分类名称</th>
          <th width="70">操作</th>
        </tr>
      </thead>
      <tbody>
      <?php if(is_array($proCate) || $proCate instanceof \think\Collection || $proCate instanceof \think\Paginator): $i = 0; $__LIST__ = $proCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr class="text-c">
        
          <td><?php echo $vo['cat_id']; ?></td>
          <td><?php echo $vo['sort']; ?></td>
          <td class="text-l"><?php echo $vo['cat_name']; ?></td>
          <td class="f-14">
           <a style="text-decoration:none" class="ml-5"  href="cateEdit?id=<?php echo $vo['cat_id']; ?>" title="编辑"> <i class="Hui-iconfont">&#xe6df;</i></a> 
           <?php if($vo['cat_id'] >= 3): ?>
           <a style="text-decoration:none" class="ml-5"  href="cateDel?cid=<?php echo $vo['cat_id']; ?>" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
           <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        
      </tbody>
    </table>
    <div id="" class="pages">
       
  </div>
  </div>
</div>
<script>
 $('#sel_Sub').change(function(){
   var options=$("#sel_Sub option:selected").val();

 })
  function checksubmit(){
    var cat_name=$("#class-val").val();
  if (cat_name==""){
         layer.alert('请输入名称！');
         return false;
         document.form1.myname.focus();
           
    }else{
      return true; 
    } 
  }
</script>

<script type="text/javascript" src="__ADMIN__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__ADMIN__/lib/My97DatePicker/WdatePicker.js"></script> 
 
<script type="text/javascript" src="__ADMIN__/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__ADMIN__/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__ADMIN__/lib/layer/2.1/layer.js"></script> 

</html>

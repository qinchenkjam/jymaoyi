<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./template/pc/default/product\index.html";i:1494469076;s:31:"./template/pc/default/base.html";i:1494559496;}*/ ?>
﻿ <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"  content=<?php echo $webConfig['WEB_KEYWORDS']; ?>" />
<meta name="description"  content="<?php echo $webConfig['WEB_DESCRIPTION']; ?>" />
<link rel="canonical"  href="http://www.jyxcfyzl.com" />

	<title>
		   DAZZLING COLORS&#039;(XCF)PERMANENT MAKEUP PRODUCT|PERMANENT COSMETICS TRAINING SCHOOL|TATTOO EYEBROW PIGMENT|LIP COLORS|PMU MACHINE|ANESTHETIC|MANUAL PEN|NEEDLE|PERMANENT MAKEUP PICTURES - LOVE WITH COLORS(YZL)MICROPIGMENTATION|LIP EYELINER-TATTOOING SERVICES|	</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" /> 
<link rel="stylesheet" href="__HOME__/css/style.css" type="text/css" />	



</head>

<body>
<div id="header">
		<div class="logo"><img src="__HOME__/images/logo.jpg"  width="1000" alt="GUANG ZHOU JIN YUAN COSMETICS CO.， LTD" /></div><!--logo end -->
		<!--<div class="tel"><img src="__HOME__/images/tel.jpg" width="334"  alt="86-20-29185929"/></div>--><!--end tel-->
</div><!--header end-->

<div id="nav">
		<ul>
			<div class="menu-header-menu-container"><ul id="menu-header-menu" class="menu"><li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4"><a href="<?php echo url('index/index/index'); ?>">Home</a></li>
<li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"><a href="<?php echo url('index/pages/index',['id'=>'1']); ?>">About us</a></li>
<li id="menu-item-14" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14"><a href="<?php echo url('index/article/lists'); ?>">News</a></li>
<li id="menu-item-16" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16"><a href="<?php echo url('index/product/index'); ?>">Products</a></li>
<li id="menu-item-13" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-13"><a href="<?php echo url('index/CaseServe/index',['id'=>'2']); ?>">Agents</a></li>
<li id="menu-item-15" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15"><a href="<?php echo url('index/CaseServe/index',['id'=>'3']); ?>">PMU training</a></li>
<li id="menu-item-17" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17"><a href="<?php echo url('index/CaseServe/index',['id'=>'1']); ?>">Technical service</a></li>
<li id="menu-item-11" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11"><a href="<?php echo url('index/pages/index',['id'=>'2']); ?>">Contact us</a></li>
</ul></div> 
		</ul>
</div><!--nav end-->
<div class="clear"></div>
<!-- main -->

<div id="main">
		<div id="mainLeft">
				<div class="title">category</div>
				<ul>
					<?php if(is_array($pro_cate) || $pro_cate instanceof \think\Collection || $pro_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $pro_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	<li class="cat-item cat-item-18"><a href="<?php echo url('index/product/index',['cid'=>$vo['cat_id']]); ?>" title="<?php echo $vo['description']; ?> "><?php echo $vo['cat_name']; ?></a></li>
<?php endforeach; endif; else: echo "" ;endif; ?>
				
				</ul>
				
				<div class="clear"></div>
		</div><!--left end-->
		<div id="ny_mainRight">
				<div class="ny_banner"><img src="__HOME__/images/ny_banner.jpg" width="778" height="150" /></div>
				<div class="ny_main">
						
						<div class="title"><span class="right">Position: Home &gt; Product</span> Product</div>
						<div class="content">
		<ul class="pro_ul">	
<?php if(is_array($pro_list) || $pro_list instanceof \think\Collection || $pro_list instanceof \think\Paginator): $i = 0; $__LIST__ = $pro_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>								
<li>
<!-- <a href="<?php echo url('admin/Product/updateHits',['id'=>$vo['id']]); ?>"> -->
<a  onclick="hits(<?php echo $vo['id']; ?>);" href="<?php echo url('index/product/product_show',['id'=>$vo['id']]); ?>"><img src="<?php echo UPLODS; ?><?php echo $vo['image']; ?>" /><?php echo substr($vo['name'],0,21); ?>...</a>
</li>
 <?php endforeach; endif; else: echo "" ;endif; ?> 
								
							
				
							
						</ul>	
						<div class="clear"></div>
						<div class=" ">
						 <?php echo $pro_list->render(); ?>
						</div>
					
							
											
					
						</div>
				<div class="clear"></div>
				</div>	<!--ny_main-->	
		</div><!--right end-->
		<div class="clear"></div>
</div>
<!--main end-->
<script src="__HOME__/js/jquery1.42.min.js"></script>
<script type="text/javascript">
/* $(function(){
    $("#book").click(function(){
       alert();
    });
})*/
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


<div id="footer">
		<ul>
				<div class="menu-header-menu-container"><ul id="menu-header-menu-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4"><a href="<?php echo url('index/index/index'); ?>">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"><a href="<?php echo url('index/pages/index',['id'=>'1']); ?>">About us</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14"><a href="<?php echo url('index/article/lists'); ?>">News</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16"><a href="<?php echo url('index/product/index'); ?>">Products</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-13"><a href="<?php echo url('index/CaseServe/index',['id'=>'2']); ?>">Agents</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15"><a href="<?php echo url('index/pages/index',['id'=>'3']); ?>">PMU training</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17"><a href="<?php echo url('index/CaseServe/index',['id'=>'1']); ?>">Technical service</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11"><a href="<?php echo url('index/pages/index',['id'=>'2']); ?>">Contact us</a></li>
</ul></div> 
		</ul>
		<div class="clear"></div>
		<p>Copyright<!--footer end-->
</body>
</html>
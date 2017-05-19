<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./template/pc/default/article\lists.html";i:1495072416;s:31:"./template/pc/default/base.html";i:1494559496;}*/ ?>
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
				<?php if(is_array($ArticleCate) || $ArticleCate instanceof \think\Collection || $ArticleCate instanceof \think\Paginator): $i = 0; $__LIST__ = $ArticleCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo url('index/article/lists',['cat_id'=>$vo['cat_id']]); ?>" class=""><?php echo $vo['cat_name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<div class="clear"></div>
		</div><!--left end-->
		<div id="ny_mainRight">
				<div class="ny_banner"><img src="__HOME__/images/ny_banner.jpg" width="778" height="150" /></div>
				<div class="ny_main">
						
						<div class="title"><span class="right">Position: Home &gt; News</span> News</div>
						<div class="content">
								
															<ul class="news_ul">
														
										
		<?php if(is_array($ar_list) || $ar_list instanceof \think\Collection || $ar_list instanceof \think\Paginator): $i = 0; $__LIST__ = $ar_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?>
<li><span class="more"><?php echo date("Y-m-d",$news['add_time']); ?></span><a href="<?php echo url('index/article/detail',['id'=>$news['id']]); ?>"><?php echo $news['title']; ?></a></li>
												
		  <?php endforeach; endif; else: echo "" ;endif; ?>			
														
				
							
						</ul>	
						<div class="clear"></div>
						<div class="scott" id="quotes">	</div>
						
							
					
						</div>
				<div class="clear"></div>
				</div>	<!--ny_main-->	
		</div><!--right end-->
		<div class="clear"></div>
</div>
<!--main end-->


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
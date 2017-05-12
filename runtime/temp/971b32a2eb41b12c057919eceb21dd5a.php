<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:38:"./template/pc/default/index\index.html";i:1494491752;s:31:"./template/pc/default/base.html";i:1494559496;}*/ ?>
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

<style type="text/css">
		/* css 重置 */
		

		/* 本例子css */
		.slideBox{ width:490px; height:182px; overflow:hidden; position:relative; border:1px solid #ddd;  }
		.slideBox .hd{ height:15px; overflow:hidden; position:absolute; right:5px; bottom:5px; z-index:1; }
		.slideBox .hd ul{ overflow:hidden; zoom:1; float:left;  }
		.slideBox .hd ul li{ float:left; margin-right:2px;  width:15px; height:15px; line-height:14px; text-align:center; background:#fff; cursor:pointer; }
		.slideBox .hd ul li.on{ background:#f00; color:#fff; }
		.slideBox .bd{ position:relative; height:100%; z-index:0;   }
		.slideBox .bd li{ zoom:1; vertical-align:middle; }
		.slideBox .bd img{ width:490px; height:182px; display:block;  }

		/* 下面是前/后按钮代码，如果不需要删除即可 */
		.slideBox .prev,
		.slideBox .next{ position:absolute; left:3%; top:50%; margin-top:-25px; display:block; width:32px; height:40px; background:url(images/slider-arrow.png) -110px 5px no-repeat; filter:alpha(opacity=50);opacity:0.5;   }
		.slideBox .next{ left:auto; right:3%; background-position:8px 5px; }
		.slideBox .prev:hover,
		.slideBox .next:hover{ filter:alpha(opacity=100);opacity:1;  }
		.slideBox .prevStop{ display:none;  }
		.slideBox .nextStop{ display:none;  }

		</style>

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
		<div id="mainRight">
				<div id="banner">
		    <div id="slideBox" class="slideBox">
			<div class="hd">
				<ul><li>1</li><li>2</li><li>3</li></ul>
			</div>
			<div class="bd">
				<ul>
					<!-- <li><a href="http://www.SuperSlide2.com" target="_blank"><img src="__HOME__/images/01.jpg" /></a></li>
					<li><a href="http://www.SuperSlide2.com" target="_blank"><img src="__HOME__/images/02.jpg" /></a></li>
					<li><a href="http://www.SuperSlide2.com" target="_blank"><img src="__HOME__/images/03.jpg" /></a></li> -->
					<?php if(is_array($Banner) || $Banner instanceof \think\Collection || $Banner instanceof \think\Paginator): $i = 0; $__LIST__ = $Banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li><a href=""><img src="<?php echo UPLODS; ?><?php echo $vo['show_img']; ?>"/></a></li>
				    <?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>

			<!-- 下面是前/后按钮代码，如果不需要删除即可 -->
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>

		</div>

		
					
		</div><!--banner end-->
				<div  class="contact" style="height:200px;padding:1px">
						<div class="title"><span class="right more"><a href="<?php echo url('index/pages/index',['id'=>'2']); ?>"><img src="__HOME__/images/more2.jpg" /></a></span>Contact us</div>
						<div class="content">

<p>SKYPE：dazzlingcolors <br/>
E-mail：800075959@b.qq.com <br/>  
QQ：800075959<br/>
Mobile Phone：+86-18688405169（Manager:Stephen）<br />
TEL：+86-20-29185929 （Salesman :Sarah);<br />
+86-20-29186177（Salesman :Simon); <br />
+86-20-28920930（Salesman :Skyler)
</p>
<!--<p>Company：Guangzhou Jin Yuan Cosmetics Co., Ltd </P>
<p>Company’s ADD:2nd floor ,Office Building A,Beauty Exchange Center ,Guang Yuan Xi Road ,Guangzhou ,China
</p>-->
								
								

						</div>
				</div><!--contact end-->
				
				<div class="clear"></div>
				
				<div class="main2">
						<div class="about">
								<div class="title"><span class="right more"><a href="<?php echo url('index/pages/index',['id'=>'1']); ?>"><img src="__HOME__/images/more2.jpg" /></a></span>About us</div>
								<div class="content">
							<img src="__HOME__/images/about_bg.jpg" width="159" height="124" class="aboutimg right" />	
							  <p>Be The Best PMU Training School  Newest Patent Technique  Global Student Recruitment Dazzling Colors’ (namely ‘XCF’ ) is the best permanent makeup training and consulting company in china,that possesses the newest and advanced national patent for ‘Ecological Eyebrow ’technique, excellent teaching team and wellequipped classrooms. XCF has been launching student recruitment from all over the world. We are firmly convinced that every student or customer can acquire the newest and advanced technique and enjoy gorgeous services in XCF. Study whenever you’re free . Study untill you’re skill. Study freely all your life.…</p>


								</div>
						</div>
						
						<div class="news">
								<div class="title"><span class="right more"><a href="<?php echo url('index/article/lists'); ?>"><img src="__HOME__/images/more2.jpg" /></a></span>News</div>
								<ul>
								 
								       <!----------4为分类ID，1为调用数量--------------> 
                        		                                        <!--------判断如果有文章-------->
                         
				  				<!-------循环开始----------->
								  
								 <?php if(is_array($new_list) || $new_list instanceof \think\Collection || $new_list instanceof \think\Paginator): $i = 0; $__LIST__ = $new_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<li><a href="<?php echo url('index/article/detail',['id'=>$vo['id']]); ?>"><?php echo substr($vo['title'],0,12); ?>...</a></li>
								 <?php endforeach; endif; else: echo "" ;endif; ?>
								
								   
					 			<!------结束循环------->
				 				 	
								
							
								</ul>
						</div>
				</div><!--main2 end-->
				<div class="main3">
						<div class="title"><span class="right more"><a href="product.html"><img src="__HOME__/images/more2.jpg" /></a></span>Products</div>
						<!--下面是向左滚动代码-->
<div id="colee_left">
<table cellpadding="0" cellspacing="0" border="0">
<tr><td id="colee_left1" valign="top" align="center">
<table cellpadding="2" cellspacing="0" border="0">
<tr align="center">

  
				 <!----------4为分类ID，1为调用数量--------------> 
                                                       <!--------判断如果有文章-------->
				  <!-------------循环开始----------->

<?php if(is_array($pro_recommend) || $pro_recommend instanceof \think\Collection || $pro_recommend instanceof \think\Paginator): $i = 0; $__LIST__ = $pro_recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>				    
<td>
	<div class="pro_td">
	<a href="<?php echo url('index/product/product_show',['id'=>$vo['id']]); ?>"><img src="<?php echo UPLODS; ?><?php echo $vo['image']; ?>"/></a>
	<p><a href="<?php echo url('index/product/product_show',['id'=>$vo['id']]); ?>"><?php echo $vo['name']; ?>...</a></p>
	</div>
	
</td>
<?php endforeach; endif; else: echo "" ;endif; ?>	
							


											
												
					    
					 <!----------结束循环-------------->
					
										</ul>
				  			
											

</tr>
</table>
</td>
<td id="colee_left2" valign="top"></td>
</tr>
</table>
</div>
<script src="__HOME__/js/jquery1.42.min.js"></script>
<script src="__HOME__/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,easing:"easeOutBounce",delayTime:1000,pnLoop:false});
		</script>
<script type="text/javascript">
//使用div时，请保证colee_left2与colee_left1是在同一行上.
var speed=50//速度数值越大速度越慢
var colee_left2=document.getElementById("colee_left2");
var colee_left1=document.getElementById("colee_left1");
var colee_left=document.getElementById("colee_left");
colee_left2.innerHTML=colee_left1.innerHTML
function Marquee3(){
if(colee_left2.offsetWidth-colee_left.scrollLeft<=0)//offsetWidth 是对象的可见宽度
colee_left.scrollLeft-=colee_left1.offsetWidth//scrollWidth 是对象的实际内容的宽，不包边线宽度
else{
colee_left.scrollLeft++
}
}
var MyMar3=setInterval(Marquee3,speed)
colee_left.onmouseover=function() {clearInterval(MyMar3)}
colee_left.onmouseout=function() {MyMar3=setInterval(Marquee3,speed)}
</script>
<!--向左滚动代码结束-->
				</div><!--main3 end-->
		</div><!--right end-->
		<div class="clear"></div>
</div><!--main end-->
<!--main-->


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
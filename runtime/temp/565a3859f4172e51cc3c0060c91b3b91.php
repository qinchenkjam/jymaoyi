<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:35:"./template/pc/shui/index\index.html";i:1494233474;s:28:"./template/pc/shui/base.html";i:1494233474;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title><?php echo \think\Config::get('site.WEB_NAME'); ?></title>
	<meta name="keyword" content="<?php echo $webConfig['WEB_KEYWORDS']; ?>">
	<meta name="description" content="<?php echo $webConfig['WEB_DESCRIPTION']; ?>">
	<meta name="author" content="Tengjungui">
	<link rel="stylesheet" href="__HOME__/css/common.css">
	<link rel="stylesheet" href="__HOME__/css/style.css">
	<script src="__HOME__/js/jquery.min.1.11.3.js"></script>
	<script src="__HOME__/js/SuperSlide.2.1.1.js"></script>
    <script src="__HOME__/js/js.js"></script>
<!--[if lt IE 9]>
<script src="__HOME__js/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="__HOME__js/png.js"></script>
<script>
<![endif]-->


</head>
<body>
	<header class="index_header">
		<div class="index_header_l">
			<img src="__HOME__/__HOME__/__HOME__/images/index_03.png" alt="">
		</div>
		<ul class="index_header_l2">
			<li>尚品牌</li>
			<li>·</li>
			<li>重信誉</li>
			<li>·</li>
			<li>高质量</li>
			<li>·</li>
			<li>强服务</li>
		</ul>
		<dl class="index_header_r">
			<dt><img src="__HOME__/__HOME__/__HOME__/images/index_05.png" alt=""><span><?php echo $webConfig['WEB_TEL']; ?></span>
			<div class="clear"></div>
			</dt>
			<dd>7X24小时全国服务热线，欢迎来电咨询！</dd>
		</dl>
		<div class="clear"></div>
	</header>
	<nav class="index_nav">
		<ul class="index_nav_ul index_public">
			<li><a href="<?php echo url('index/index/index'); ?>">首页</a></li>
			<li><a href="<?php echo url('index/pages/index',['id'=>'1']); ?>">公司简介</a></li>
			<li><a href="<?php echo url('index/product/index'); ?>">产品展示</a></li>
			<li><a href="<?php echo url('index/article/lists'); ?>">新闻动态</a></li>
			<li><a href="<?php echo url('index/pages/index',['id'=>'3']); ?>">关于我们</a></li>
			
			<!-- <li><a href="case.html">案例展示</a></li> -->
			<li><a href="<?php echo url('index/pages/index',['id'=>'2']); ?>">联系我们</a></li>
		</ul>
	</nav>
	<!-- banner -->
	
	<div class="index_banner">
		<div id="slideBox" class="slideBox">
			
			<div class="bd">
				<ul>
					<?php if(is_array($Banner) || $Banner instanceof \think\Collection || $Banner instanceof \think\Paginator): $i = 0; $__LIST__ = $Banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li><a href="" target="_blank"><img src="<?php echo UPLODS; ?><?php echo $vo['show_img']; ?>" height="490" width="200" /></a></li>
				    <?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>

			<!-- 下面是前/后按钮代码，如果不需要删除即可 -->
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>

		</div>
	<script>
		$(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:true});
	</script>
	</div>
	
	<!-- banner -->

	<!-- main -->
	
	<div class="index_styll1">
		<div class="index_styll1_box index_public">
			<div class="index_styll1_1">
				<img src="__HOME__/__HOME__/__HOME__/images/index3_12.png" alt="">
				<dl>
					<dt>饮用水接触配件</dt>
					<dd>100%采用食品级304不锈钢不含任何有害金属</dd>
				</dl>
			</div>
			<div class="index_styll1_1">
				<img src="__HOME__/__HOME__/__HOME__/images/index_21.png" alt="">
				<dl>
					<dt>饮用水接触配件</dt>
					<dd>100%采用食品级304不锈钢不含任何有害金属</dd>
				</dl>
			</div>
			<div class="index_styll1_1">
				<img src="__HOME__/__HOME__/__HOME__/images/index_12.png" alt="">
				<dl>
					<dt>饮用水接触配件</dt>
					<dd>100%采用食品级304不锈钢不含任何有害金属</dd>
				</dl>
			</div>
			<div class="index_styll1_1">
				<img src="__HOME__/__HOME__/__HOME__/images/index_18.png" alt="">
				<dl>
					<dt>饮用水接触配件</dt>
					<dd>100%采用食品级304不锈钢不含任何有害金属</dd>
				</dl>
			</div>
		</div>
	</div>
	<div class="index_public" style="border:1px solid #ccc">
		<div class="index_style2">
			<div class="index_style2_top">
				<span class="index_style2_top1">产品展示</span>
				<span class="index_style2_top2">PRODUCT DISPLAY</span>
				<a href="product.html" class="index_style2_top3">更多 +</a>
			</div>

			<div class="index_style2_bottom">
				<div class="slideGroup" style="margin:0 auto">
					<div class="parBd">

					<div class="slideBox">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
						<?php if(is_array($pro_cate) || $pro_cate instanceof \think\Collection || $pro_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $pro_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li>
								<div class="pic"><a href="<?php echo url('index/product/index',['cid'=>$vo['cat_id']]); ?>" target="_blank"><img src="__HOME__/__HOME__/images/index_33.png" /></a></div>
								<div class="title"><a href="<?php echo url('index/product/index',['cid'=>$vo['cat_id']]); ?>" target="_blank"><?php echo $vo['cat_name']; ?></a></div>
							</li>
							
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
					<div class="clear"></div>
				</div>
			</div>
			<script>
				jQuery(".slideGroup .slideBox").slide({ mainCell:"ul",vis:6,prevCell:".sPrev",nextCell:".sNext",effect:"leftLoop"});
			</script>
			</div>
		</div>
		<div class="index_style2_product">
		  <?php if(is_array($pro_list) || $pro_list instanceof \think\Collection || $pro_list instanceof \think\Paginator): $i = 0; $__LIST__ = $pro_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<dl>
				<dt><a href="<?php echo url('index/product/product_show',['id'=>$vo['id']]); ?>"><img src="<?php echo UPLODS; ?><?php echo $vo['image']; ?>" alt="" width='180px'></a></dt>
				<dd><a href=""><?php echo $vo['name']; ?></a></dd>
			</dl>
		  <?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="clear"></div>
		</div>
	</div>
	<div class="index_style3">
		<div class="index_public">
			<div class="index_style3_l">
				<ul>
					<li class="index_style3_l_on">公司介绍</li>
					<li>行业动态</li>
					<li>公司新闻</li>
					<a href="<?php echo url('index/article/lists'); ?>" class="index_style3_l_r">更多+</a>
				</ul>
				<div class="index_style3_l_box">
					<div class="index_style3_l_box1">
						<img src="__HOME__/__HOME__/__HOME__/images/index_73.png" alt="">
						<ul>
							<li>
				<?php echo $about['content']; ?><a href="<?php echo url('index/pages/index',['id'=>'1']); ?>" class="">查看+</a>
							</li>
							
						</ul>

					</div>

					<div class="index_style3_l_box1">
						<img src="__HOME__/__HOME__/__HOME__/images/index_73.png" alt="">
						<ul>
						<?php if(is_array($new_list) || $new_list instanceof \think\Collection || $new_list instanceof \think\Paginator): $i = 0; $__LIST__ = $new_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li><a href="<?php echo url('index/news/detail',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
							
						</ul>
					</div>

					<div class="index_style3_l_box1">
						<img src="__HOME__/__HOME__/__HOME__/images/index_73.png" alt="">
						<ul>
							<?php if(is_array($cnew_list) || $cnew_list instanceof \think\Collection || $cnew_list instanceof \think\Paginator): $i = 0; $__LIST__ = $cnew_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li><a href="<?php echo url('index/news/detail',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="index_style3_r">
				<div class="index_style3_r_top">
					<span>常见问题</span>
					<a href="answer.html">跟多+</a>
				</div>
				<dl class="index_style3_r_dl">
					<dt><img src="__HOME__/__HOME__/images/index_69.png" alt="">有史以来最全的商用开水机故障处理方法 </dt>
					<dd><img src="__HOME__/__HOME__/images/index_75.png" alt="">
					<span>可能出现在产品刚安装、较大范围拆卸水机、从新安装后。可能错将高压泵与RO膜膜壳之间的水管直接接到后置活性碳的三通处，使高压泵出的自来水直接进入储水桶。</span>
					</dd>
				</dl>
				<dl class="index_style3_r_dl">
					<dt><img src="__HOME__/__HOME__/images/index_69.png" alt="">有史以来最全的商用开水机故障处理方法 </dt>
					<dd><img src="__HOME__/__HOME__/images/index_75.png" alt="">
					<span>可能出现在产品刚安装、较大范围拆卸水机、从新安装后。可能错将高压泵与RO膜膜壳之间的水管直接接到后置活性碳的三通处，</span>
					</dd>
				</dl>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<!-- 案例展示 -->
	<div class="index_public index_case" >
		<div class="index_style2">
			<div class="index_style2_top index_case1">
				<span class="index_style2_top1">产品推荐</span>
				<span class="index_style2_top2">PRODUCT DISPLAY</span>
				<a href="product.html" class="index_style2_top3">更多 +</a>
			</div>

			<div class="index_style2_bottom index_style2_bottom1">
				<div class="slideGroup1" style="margin:0 auto">
					<div class="parBd">

					<div class="slideBox">
						<a class="sPrev" href="javascript:void(0)"></a>
						<ul>
						<?php if(is_array($pro_recommend) || $pro_recommend instanceof \think\Collection || $pro_recommend instanceof \think\Paginator): $i = 0; $__LIST__ = $pro_recommend;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<li>
								<div class="pic"><a href="<?php echo url('index/product/product_show',['id'=>$vo['id']]); ?>" target="_blank"><img src="<?php echo UPLODS; ?><?php echo $vo['image']; ?>" /></a></div>
								<div class="title"><a href="" target="_blank"><?php echo $vo['name']; ?></a></div>
							</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>	
							

						</ul>
						<a class="sNext" href="javascript:void(0)"></a>
					</div><!-- slideBox End -->
					<div class="clear"></div>
				</div>
			</div>
			<script>
				jQuery(".slideGroup1 .slideBox").slide({ mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftLoop"});
			</script>
			</div>
		</div>
	</div>


	<!-- main -->
	<!-- 页尾 -->
	<footer class="index_footer" style="height:110px;">
		<div class="index_footer_box index_public">
			<div class="index_footer_l">
				<img src="__HOME__/__HOME__/__HOME__/images/index1_03.png" alt="">
			</div>
			<div class="index_footer_c">
				<ul>
				<?php if(is_array($FriendLink) || $FriendLink instanceof \think\Collection || $FriendLink instanceof \think\Paginator): $i = 0; $__LIST__ = $FriendLink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li>|</li>
					<li><a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li>
					
				<?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>
				<div><?php echo $webConfig['WEB_ICP_NUMBER']; ?> <br/> 传真：027-81331070
地址:<?php echo $webConfig['WEB_ADRESS']; ?> 技术支持:<a href="" target="_blank">拍拍建站</a></div>
			</div>
			<div class="index_footer_r">
				<img src="__HOME__/__HOME__/__HOME__/images/index_88.png" alt="">
			</div>
			<div class="clear">
			</div>
		</div>
	</footer>

</body>


<!---orther-->
<?php echo \think\Config::get('site.WEB_TONGJI'); ?>
<!---orther/-->
</html>
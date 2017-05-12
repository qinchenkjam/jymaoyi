<?php
namespace app\mobile\controller;
use think\Controller;
use think\Db;
class Base extends controller
{
	 protected function _initialize() {
		parent::_initialize();
		//$webConfig=\app\common\model\Config::lists();
		
		$webConfig= Db::name('config')->column('value','name');
		$FriendLink=\app\common\model\FriendLink::lists(10);
		$this->assign("FriendLink",$FriendLink);
		$this->assign('webConfig',$webConfig);

        //顶级产品分类
		$pro_cate=\app\common\model\ProductCate::topList(); 	
		//var_dump($pro_cate);exit();   
	    $cid=get_urlid(); 
	    if($cid>0){         
	      $pro_list=\app\common\model\Product::k_lists($cid,12);     
	    }else{      
	      $pro_list=\app\common\model\Product::lists(12);
	    
	    }
	    $this->assign("pro_list",$pro_list); 
	    $this->assign("pro_cate",$pro_cate); 

	    $new_list=\app\common\model\Article::clist(1); 
        $cnew_list=\app\common\model\Article::clist(2);
        $this->assign("new_list",$new_list);
        $this->assign("cnew_list",$cnew_list); 

        $pro_recommend=\app\common\model\Product::is_recommends(10);
        $this->assign("pro_recommend",$pro_recommend);

	}

	public function news_left(){		

		return $this->fetch('public/news_left');
	}
}